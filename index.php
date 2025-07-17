<?php
declare(strict_types=1);

// Enable opcache for better performance
if (function_exists('opcache_invalidate')) {
    opcache_invalidate(__FILE__, true);
}

// Include redirects first (only if file exists to avoid unnecessary I/O)
$redirectsFile = __DIR__ . '/redirects.php';
if (file_exists($redirectsFile)) {
    require_once $redirectsFile;
}

// Get request path efficiently
$requestUri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$basePath = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));

// Handle base path
if ($basePath !== '/' && str_starts_with($requestUri, $basePath)) {
    $request_path = '/' . ltrim(substr($requestUri, strlen($basePath)), '/');
} else {
    $request_path = $requestUri;
}

// Normalize path
$request_path = rtrim($request_path, '/') ?: '/';

// Cache routes in memory
static $routes = null;
if ($routes === null) {
    $routes = require __DIR__ . '/routes.php';
}

// View and logic file loader function
function loadView(string $viewName): bool {
    $basePath = __DIR__ . '/';
    $viewPath = '';
    
    // Handle absolute paths (starting with /)
    if ($viewName[0] === '/') {
        $viewPath = $basePath . ltrim($viewName, '/');
    } 
    // Handle paths relative to app/views or app/logic
    else if (str_starts_with($viewName, 'app/')) {
        $viewPath = $basePath . $viewName;
    }
    // Default to app/views for simple paths
    else {
        $viewPath = $basePath . 'app/views/' . $viewName;
    }
    
    // Ensure .php extension if not present
    if (!str_ends_with($viewPath, '.php')) {
        $viewPath .= '.php';
    }
    
    // Normalize path separators for Windows
    $viewPath = str_replace('\\', '/', $viewPath);
    
    // Debug: Log the path being checked
    error_log("Attempting to load: $viewPath");
    
    if (is_file($viewPath)) {
        error_log("Found and including: $viewPath");
        include $viewPath;
        return true;
    }
    
    error_log("File not found: $viewPath");
    return false;
}

// Route handling
if (isset($routes[$request_path])) {
    if (!loadView($routes[$request_path])) {
        http_response_code(404);
        loadView('404.php');
    }
} else {
    http_response_code(404);
    if (!loadView('404.php')) {
        header('Content-Type: text/plain');
        echo '404 - Page not found: ' . htmlspecialchars($request_path);
    }
}
