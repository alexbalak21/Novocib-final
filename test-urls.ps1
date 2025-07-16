# URL Testing Script for Novocib Website
# Usage: .\test-urls.ps1 -UrlFile "urls.txt"

param (
    [string]$UrlFile = "urls.txt"  # Configuration file containing base URL and test URLs
)

# Function to load configuration and URLs from file
function Get-UrlsFromFile {
    param (
        [string]$FilePath
    )
    
    if (-not (Test-Path $FilePath)) {
        Write-Host "Configuration file not found: $FilePath" -ForegroundColor Yellow
        Write-Host "Creating a sample configuration file..."
        @(
            "# Novocib Website Test Configuration",
            "# Base URL for all relative URLs (REQUIRED)",
            "base_url=http://localhost:3000",
            "",
            "# Test URLs (one per line)",
            "# Lines starting with # are treated as comments",
            "/",
            "/contact",
            "/products"
        ) | Out-File -FilePath $FilePath -Encoding UTF8
        
        Write-Host "Created sample configuration file: $FilePath" -ForegroundColor Green
        Write-Host "Please edit this file to set the base_url and add URLs to test, then run the script again."
        exit
    }
    
    # Read all lines from the file
    $lines = Get-Content $FilePath
    
    # Initialize variables
    $baseUrl = ""
    $urls = @()
    
    foreach ($line in $lines) {
        $trimmedLine = $line.Trim()
        
        # Skip empty lines and comments
        if ($trimmedLine -eq "" -or $trimmedLine.StartsWith("#")) {
            continue
        }
        
        # Check for base_url setting
        if ($trimmedLine -imatch '^base_url\s*=\s*(.+)$') {
            $baseUrl = $matches[1].Trim()
            continue
        }
        
        # Add URL to the list
        $urls += $trimmedLine
    }
    
    # Validate base URL
    if ([string]::IsNullOrEmpty($baseUrl)) {
        Write-Host "Error: base_url is not defined in $FilePath" -ForegroundColor Red
        Write-Host "Please add a line like: base_url=http://your-domain:port"
        exit 1
    }
    
    # Ensure base URL ends with a slash for proper URL joining
    if (-not $baseUrl.EndsWith("/")) {
        $baseUrl += "/"
    }
    
    if ($urls.Count -eq 0) {
        Write-Host "No URLs found in $FilePath" -ForegroundColor Yellow
        Write-Host "Please add URLs to test after the base_url setting"
        exit 1
    }
    
    return @{
        BaseUrl = $baseUrl.TrimEnd('/')
        Urls = $urls
    }
}

# Load configuration and URLs from file
$config = Get-UrlsFromFile -FilePath $UrlFile
$BaseUrl = $config.BaseUrl
$urls = $config.Urls

Write-Host "Using base URL: $BaseUrl" -ForegroundColor Cyan
Write-Host "Found $($urls.Count) URLs to test" -ForegroundColor Cyan

# Create a timestamp for the log file
$timestamp = Get-Date -Format "yyyyMMdd_HHmmss"
$logFile = "url_test_results_${timestamp}.csv"

# Write CSV header
"URL,Status Code,Status Description,Response Time (ms),Content Length (bytes)" | Out-File -FilePath $logFile -Encoding UTF8

# Function to test a single URL
function Test-Url {
    param (
        [string]$url
    )
    
    $fullUrl = "${BaseUrl}${url}"
    $result = @{
        URL = $fullUrl
        StatusCode = 0
        StatusDescription = ""
        ResponseTime = 0
        ContentLength = 0
    }
    
    try {
        $stopwatch = [System.Diagnostics.Stopwatch]::StartNew()
        $response = Invoke-WebRequest -Uri $fullUrl -Method Get -UseBasicParsing -ErrorAction SilentlyContinue
        $stopwatch.Stop()
        
        $result.StatusCode = [int]$response.StatusCode
        $result.StatusDescription = $response.StatusDescription
        $result.ResponseTime = $stopwatch.ElapsedMilliseconds
        $result.ContentLength = $response.RawContentLength
    }
    catch [System.Net.WebException] {
        $result.StatusCode = [int]$_.Exception.Response.StatusCode
        $result.StatusDescription = $_.Exception.Message
    }
    catch {
        $result.StatusDescription = $_.Exception.Message
    }
    
    # Output to console with color coding
    $statusColor = if ($result.StatusCode -eq 200) { "Green" } else { "Red" }
    Write-Host "$($result.URL)" -NoNewline
    Write-Host " [$($result.StatusCode)]" -ForegroundColor $statusColor
    
    # Return the result
    $result
}

# Test all URLs
Write-Host "`nTesting URLs...`n" -ForegroundColor Cyan

$results = @()
foreach ($url in $urls) {
    $result = Test-Url -url $url
    $results += $result
    
    # Write to CSV with proper escaping
    $csvLine = '"{0}",{1},"{2}",{3},{4}' -f 
        $result.URL.Replace('"', '""'),
        $result.StatusCode,
        $result.StatusDescription.Replace('"', '""'),
        $result.ResponseTime,
        $result.ContentLength
    
    $csvLine | Out-File -FilePath $logFile -Append -Encoding UTF8
    
    # Small delay between requests to avoid overwhelming the server
    Start-Sleep -Milliseconds 200
}

# Print summary
$successCount = ($results | Where-Object { $_.StatusCode -eq 200 }).Count
$failCount = $results.Count - $successCount

Write-Host "`nTesting complete!" -ForegroundColor Cyan
Write-Host "Total URLs tested: $($results.Count)"
Write-Host "Successful (200): $successCount" -ForegroundColor Green
Write-Host "Failed: $failCount" -ForegroundColor Red
Write-Host "Results saved to: $logFile"

# Open the log file in default application
Invoke-Item $logFile
