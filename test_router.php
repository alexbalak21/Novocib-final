<?php
/**
 * Test Router
 * This is a simplified version to help debug the routing issue
 */

// Define the base directory for includes
define('BASE_DIR', __DIR__);

// Define paths using the local directory structure
define("__ROOT__", __DIR__);
define("__APP__", __DIR__ . DIRECTORY_SEPARATOR . "app" . DIRECTORY_SEPARATOR);
define("DS", DIRECTORY_SEPARATOR);
define("__VIEWS__", __APP__ . "views" . DS);

// Get the request path
$request_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Remove query string if present
$request_path = strtok($request_path, '?');

// Remove the base path if running in a subdirectory
$script_name = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
if ($script_name !== '/') {
    $request_path = preg_replace('#^' . preg_quote($script_name, '#') . '#', '', $request_path);
}

// Ensure the path starts with a slash
$request_path = '/' . ltrim($request_path, '/');

// Define the test route
$test_route = '/dietary-nucleotides-assay-kits/fish-freshness-assay-kit';

// Log the request information
error_log('=== TEST ROUTER DEBUG ===');
error_log('REQUEST_URI: ' . $_SERVER['REQUEST_URI']);
error_log('SCRIPT_NAME: ' . $_SERVER['SCRIPT_NAME']);
error_log('PHP_SELF: ' . $_SERVER['PHP_SELF']);
error_log('SCRIPT_FILENAME: ' . $_SERVER['SCRIPT_FILENAME']);
error_log('DOCUMENT_ROOT: ' . $_SERVER['DOCUMENT_ROOT']);
error_log('Request path: ' . $request_path);
error_log('Test route: ' . $test_route);

// Check if the request matches our test route
if ($request_path === $test_route) {
    error_log('Route matched!');
    $view_file = __VIEWS__ . 'dietary-nucleotides-assay-kits/fish-freshness-assay-kit.php';
    error_log('Looking for view file: ' . $view_file);
    
    if (file_exists($view_file)) {
        error_log('View file exists!');
        require_once $view_file;
        exit;
    } else {
        error_log('View file does not exist!');
    }
} else {
    error_log('Route did not match. Request path: "' . $request_path . '" vs Test route: "' . $test_route . '"');
    error_log('Character differences:');
    for ($i = 0; $i < max(strlen($request_path), strlen($test_route)); $i++) {
        $c1 = isset($request_path[$i]) ? $request_path[$i] : '';
        $c2 = isset($test_route[$i]) ? $test_route[$i] : '';
        if ($c1 !== $c2) {
            error_log(sprintf('Position %d: "%s" (0x%02X) vs "%s" (0x%02X)', 
                $i, 
                $c1, ord($c1), 
                $c2, ord($c2)
            ));
        }
    }
}

// If we get here, the route didn't match or the view file doesn't exist
http_response_code(404);
header('Content-Type: text/plain');
echo '404 - Not Found\n';
echo 'Request path: ' . htmlspecialchars($request_path) . '\n';
echo 'Expected path: ' . htmlspecialchars($test_route) . '\n';
echo 'Check the error log for more details.\n';

// Dump all server variables for debugging
error_log('=== SERVER VARIABLES ===');
foreach ($_SERVER as $key => $value) {
    error_log($key . ' = ' . $value);
}
error_log('========================');
