<?php
// Test PHP is working
echo "<h1>PHP is working!</h1>\n";

// Show server information
echo "<h2>Server Information</h2>";
echo "<pre>";
echo "PHP Version: " . phpversion() . "\n";
echo "Server Software: " . ($_SERVER['SERVER_SOFTWARE'] ?? 'Not available') . "\n";
echo "Document Root: " . ($_SERVER['DOCUMENT_ROOT'] ?? 'Not available') . "\n";
echo "Script Filename: " . ($_SERVER['SCRIPT_FILENAME'] ?? 'Not available') . "\n";
echo "Current Working Directory: " . getcwd() . "\n";
echo "</pre>";

// Test file paths
$test_paths = [
    'Current Directory' => __DIR__,
    'Views Directory' => __DIR__ . '/app/views',
    'Test View File' => __DIR__ . '/app/views/dietary-nucleotides-assay-kits/fish-freshness-assay-kit.php'
];

echo "<h2>Path Tests</h2>";
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Path</th><th>Exists</th><th>Is Readable</th><th>Is Directory</th><th>Path</th></tr>";

foreach ($test_paths as $label => $path) {
    echo "<tr>";
    echo "<td><strong>$label</strong></td>";
    echo "<td>" . (file_exists($path) ? '✅ Yes' : '❌ No') . "</td>";
    echo "<td>" . (is_readable($path) ? '✅ Yes' : '❌ No') . "</td>";
    echo "<td>" . (is_dir($path) ? '✅ Yes' : '❌ No') . "</td>";
    echo "<td><code>" . htmlspecialchars($path) . "</code></td>";
    echo "</tr>";
}
echo "</table>";

// Test routing
$request_uri = $_SERVER['REQUEST_URI'] ?? '';
$script_name = $_SERVER['SCRIPT_NAME'] ?? '';
$path_info = $_SERVER['PATH_INFO'] ?? '';
$query_string = $_SERVER['QUERY_STRING'] ?? '';

// Remove query string from request URI
$request_path = parse_url($request_uri, PHP_URL_PATH);

// Remove script name from request path
$base_path = str_replace('\\', '/', dirname($script_name));
$path = '/' . ltrim(substr($request_path, strlen($base_path)), '/');

echo "<h2>Routing Information</h2>";
echo "<pre>";
echo "Request URI: " . htmlspecialchars($request_uri) . "\n";
echo "Script Name: " . htmlspecialchars($script_name) . "\n";
echo "Path Info: " . htmlspecialchars($path_info) . "\n";
echo "Query String: " . htmlspecialchars($query_string) . "\n";
echo "Base Path: " . htmlspecialchars($base_path) . "\n";
echo "Calculated Path: " . htmlspecialchars($path) . "\n";

// Test the specific route
$test_route = '/dietary-nucleotides-assay-kits/fish-freshness-assay-kit';
echo "\nTesting route: " . htmlspecialchars($test_route) . "\n";
if ($path === $test_route) {
    echo "✅ Route matches exactly!\n";
} else {
    echo "❌ Route does not match.\n";
    echo "Path: " . htmlspecialchars($path) . "\n";
    echo "Test: " . htmlspecialchars($test_route) . "\n";
    
    // Show character-by-character comparison
    echo "\nCharacter comparison:\n";
    $len = max(strlen($path), strlen($test_route));
    for ($i = 0; $i < $len; $i++) {
        $c1 = $i < strlen($path) ? $path[$i] : '';
        $c2 = $i < strlen($test_route) ? $test_route[$i] : '';
        $status = ($c1 === $c2) ? '✅' : '❌';
        echo sprintf("%3d: %-10s %-10s %s\n", 
            $i, 
            $c1 === ' ' ? '[space]' : ($c1 === '' ? '[end]' : $c1),
            $c2 === ' ' ? '[space]' : ($c2 === '' ? '[end]' : $c2),
            $status
        );
    }
}

echo "</pre>";

// Show all server variables
echo "<h2>Server Variables</h2>";
echo "<pre>";
foreach ($_SERVER as $key => $value) {
    if (is_string($value)) {
        echo htmlspecialchars("$key: $value\n");
    } else {
        echo htmlspecialchars("$key: " . print_r($value, true) . "\n");
    }
}
echo "</pre>";
?>
