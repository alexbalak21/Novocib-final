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

// Simple view loader function
function loadView(string $viewName): bool {
    static $basePath = null;
    if ($basePath === null) {
        $basePath = __DIR__ . '/app/views/';
    }
    
    // Simple path resolution
    if ($viewName === '/') {
        $viewPath = $basePath . 'index.php';
    } elseif (str_starts_with($viewName, 'app/views/')) {
        $viewPath = __DIR__ . '/' . $viewName;
    } elseif ($viewName[0] === '/') {
        $viewPath = __DIR__ . $viewName;
    } else {
        $viewPath = $basePath . $viewName . 
                  (str_ends_with($viewName, '.php') ? '' : '.php');
    }

    if (@is_file($viewPath)) {
        return (bool) include $viewPath;
    }
    
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
