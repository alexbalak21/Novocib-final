<?php
/**
 * Main entry point for the application
 * Handles routing and view rendering
 */

// Debugging - Uncomment to see request details
// error_log('Request URI: ' . $_SERVER['REQUEST_URI']);
// error_log('Script filename: ' . $_SERVER['SCRIPT_FILENAME']);

// Include redirects first
require_once __DIR__ . "/redirects.php";

// Get the base path
$basePath = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$request_path = '/' . trim(str_replace($basePath, '', $requestUri), '/');

// Handle root path
if ($request_path === '') {
    $request_path = '/';
}

// Debugging - Uncomment to see path resolution
// error_log('Base path: ' . $basePath);
// error_log('Request path: ' . $request_path);

// Define all available routes with their corresponding view files
$routes = [
    // Home routes
    "/" => "home.php",
    "/home" => "home.php",
    "/index.php" => "home.php",
    "/index.html" => "home.php",
    
    // City routes
    "/city" => "city.php",
    
    // Contact routes
    "/contact" => "contact.php",
    "/contact-us" => "contact.php",
    "/contactus" => "contact.php",
    
    // Document routes
    "/document" => "document.php",
    "/documents" => "document.php",
    "/docs" => "document.php",
    
    // Products routes
    "/products" => "products.php",
    "/product" => "products.php",
    "/items" => "products.php",
    "/catalog" => "products.php",
    
    // Search routes
    "/search" => "search.php",
    "/find" => "search.php",
    
    // Documentation routes
    "/documentation" => "documentation.php",
    
    // News/Blog routes
    "/news" => "news.php",
    "/blog" => "news.php",
    
    // Additional routes
    "/about" => "home.php#about",
    "/contact" => "contact.php",
];

// Function to safely include view files
function loadView($viewName) {
    // Remove any query string or hash from the view name
    $viewName = strtok($viewName, '#?');
    
    // Normalize the path
    $viewPath = __DIR__ . '/app/views/' . ltrim($viewName, '/');
    
    // Debugging - Uncomment to see view loading
    // error_log('Trying to load view: ' . $viewPath);
    
    if (file_exists($viewPath)) {
        // Debugging - Uncomment to confirm view was found
        // error_log('View found: ' . $viewPath);
        require_once $viewPath;
        return true;
    }
    
    // Debugging - Uncomment to see if view was not found
    // error_log('View not found: ' . $viewPath);
    return false;
}

// Handle the request
if (array_key_exists($request_path, $routes)) {
    // Load the corresponding view
    $viewFile = $routes[$request_path];
    if (!loadView($viewFile)) {
        // If view file doesn't exist, show 404
        http_response_code(404);
        loadView('404.php');
    }
} elseif ($request_path === "/app/logic/log404.php") {
    // Special handling for 404 logging
    error_log("404 Error: " . $_SERVER['REQUEST_URI']);
    header("Location: /not-found");
    exit();
} else {
    // Handle 404 - Page not found
    http_response_code(404);
    loadView('404.php');
}
