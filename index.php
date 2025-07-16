<?php

function logToFile($message) {
    $logDir = __DIR__ . '/logs';
    $logFile = $logDir . '/app.log';

    // Create logs directory if it doesn't exist
    if (!file_exists($logDir)) {
        mkdir($logDir, 0777, true);
    }

    $timestamp = date('Y-m-d H:i:s');
    file_put_contents($logFile, "[$timestamp] $message" . PHP_EOL, FILE_APPEND);
}

/**
 * Main entry point for the application
 * Handles routing and view rendering
 */

// Debugging - Uncomment to see request details
// error_log('Request URI: ' . $_SERVER['REQUEST_URI']);
// error_log('Script filename: ' . $_SERVER['SCRIPT_FILENAME']);

logToFile('Request: ' . $_SERVER['REQUEST_URI']);

// Include redirects first
require_once __DIR__ . "/redirects.php";

// Get the base path
$basePath = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Fix: Ensure we properly handle the path when basePath is not at root
if ($basePath !== '/' && strpos($requestUri, $basePath) === 0) {
    $requestUri = substr($requestUri, strlen($basePath));
}

$request_path = '/' . trim($requestUri, '/');

// Handle root path
if ($request_path === '') {
    $request_path = '/';
}

// Remove any trailing slashes for consistent matching
$request_path = rtrim($request_path, '/');
if ($request_path === '') {
    $request_path = '/';
}

// Debugging - Log the request path
logToFile('Request path: ' . $request_path);

// Define all available routes with their corresponding view files
$routes = require __DIR__ . '/routes.php';

// Debugging - Log available routes
logToFile('Available routes: ' . implode(', ', array_keys($routes)));

// Function to safely include view files
function loadView($viewName)
{
    // Remove any query string or hash from the view name
    $viewName = strtok($viewName, '#?');

    // Debug the input
    logToFile('loadView called with: ' . $viewName);

    // If the view name is already a full path, use it directly
    if (strpos($viewName, 'app/views/') === 0) {
        $viewPath = __DIR__ . '/' . $viewName;
    }
    // If it's a path that starts with a slash
    else if (strpos($viewName, '/') === 0) {
        $viewPath = __DIR__ . $viewName;
    }
    // For root paths, use index.php in the appropriate directory
    else if ($viewName === '/') {
        $viewPath = __DIR__ . '/app/views/index.php';
    }
    // For other cases, assume it's a relative path from the views directory
    else {
        // Add .php extension if not present
        if (pathinfo($viewName, PATHINFO_EXTENSION) === '') {
            $viewName .= '.php';
        }
        $viewPath = __DIR__ . '/app/views/' . ltrim($viewName, '/');
    }

    // Normalize directory separators for Windows
    $viewPath = str_replace('/', DIRECTORY_SEPARATOR, $viewPath);

    // Debug the final path
    logToFile('Looking for view at: ' . $viewPath);
    logToFile('File exists: ' . (file_exists($viewPath) ? 'Yes' : 'No'));
    logToFile('Is file: ' . (is_file($viewPath) ? 'Yes' : 'No'));

    if (file_exists($viewPath) && is_file($viewPath)) {
        logToFile('View found and will be included: ' . $viewPath);
        require_once $viewPath;
        return true;
    }

    logToFile('View not found or not a file: ' . $viewPath);
    return false;
}

// Debugging - Log the request path and routes
// error_log('Request path: ' . $request_path);
// error_log('Available routes: ' . print_r(array_keys($routes), true));

// Handle the request
if (array_key_exists($request_path, $routes)) {
    // Get the view file path from routes
    $viewFile = $routes[$request_path];

    // Debug the route and view file
    logToFile('Route matched: ' . $request_path);
    logToFile('View file from route: ' . $viewFile);

    // Try to load the view
    if (!loadView($viewFile)) {
        // If view file doesn't exist, show 404
        http_response_code(404);
        logToFile('404 - View file not found: ' . $viewFile);
        if (!loadView('app/views/404.php')) {
            // Fallback to a simple 404 message if the 404 page can't be loaded
            echo '404 - Page not found. The requested URL was: ' . htmlspecialchars($request_path);
            logToFile('404 page not found at: app/views/404.php');
        }
    }
} else {
    // Handle 404 - Page not found
    http_response_code(404);
    logToFile('404 - Route not found: ' . $request_path);
    if (!loadView('app/views/404.php')) {
        // Fallback to a simple 404 message if the 404 page can't be loaded
        echo '404 - Page not found. The requested URL was: ' . htmlspecialchars($request_path);
        logToFile('404 page not found at: app/views/404.php');
    }
}

//PUT THE DEBUG INFO HERE
