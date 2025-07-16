<?php

/**
 * Main entry point for the application
 * Handles routing and view rendering
 */

// Include required files
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/constants/dirs.php';
require_once "redirects.php"; // Handles redirects first

// Get the base path and request URI
$basePath = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$request_path = '/' . trim(str_replace($basePath, '', $requestUri), '/');

// Handle root path
if ($request_path === '') {
    $request_path = '/';
}

// Define all available routes with their corresponding view files
$routes = [

];

/**
 * Safely include view files with case-insensitive file checking and proper error handling
 * 
 * @param string $viewPath Path to the view file
 * @return bool True if the file was included successfully, false otherwise
 */
function loadView($viewPath) {
    // Remove any query string or hash from the view path
    $viewPath = strtok($viewPath, '#?');
    
    // Ensure the path is relative to the document root
    $basePath = rtrim($_SERVER['DOCUMENT_ROOT'], '/');
    $absolutePath = $basePath . '/' . ltrim($viewPath, '/');
    
    // Try direct path first (case-sensitive for Linux, insensitive for Windows)
    if (file_exists($absolutePath)) {
        require_once $absolutePath;
        return true;
    }
    
    // For case-insensitive file systems (Windows)
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
        $dir = dirname($absolutePath);
        $file = basename($absolutePath);
        
        if (is_dir($dir)) {
            // Try to find the exact filename first (case-insensitive)
            $files = scandir($dir);
            $foundFile = false;
            
            // Look for exact filename match (case-insensitive)
            foreach ($files as $f) {
                if (strcasecmp($f, $file) === 0) {
                    $resolvedPath = $dir . '/' . $f;
                    require_once $resolvedPath;
                    return true;
                }
            }
            
            // If no exact match, try with different extensions
            $fileWithoutExt = pathinfo($file, PATHINFO_FILENAME);
            $ext = pathinfo($file, PATHINFO_EXTENSION);
            
            // If no extension, try with .php
            if (empty($ext)) {
                $fileWithPhp = $file . '.php';
                foreach ($files as $f) {
                    if (strcasecmp($f, $fileWithPhp) === 0) {
                        $resolvedPath = $dir . '/' . $f;
                        require_once $resolvedPath;
                        return true;
                    }
                }
            }
            
            // Try with .html if not found with .php
            if (empty($ext) || $ext !== 'html') {
                $fileWithHtml = $fileWithoutExt . '.html';
                foreach ($files as $f) {
                    if (strcasecmp($f, $fileWithHtml) === 0) {
                        $resolvedPath = $dir . '/' . $f;
                        require_once $resolvedPath;
                        return true;
                    }
                }
            }
        }
    }
    
    // Try parent directory if this is an index request
    if (basename($absolutePath) === 'index.php') {
        $parentDir = dirname(dirname($absolutePath));
        $parentIndex = $parentDir . '/index.php';
        if (file_exists($parentIndex)) {
            require_once $parentIndex;
            return true;
        }
    }
    
    // Log detailed error information
    error_log("View not found: " . $absolutePath);
    
    // Try to find a similar file for better error reporting
    $dir = dirname($absolutePath);
    if (is_dir($dir)) {
        $files = scandir($dir);
        $fileList = array_diff($files, ['.', '..']);
        
        if (!empty($fileList)) {
            error_log("Available files in " . $dir . ": " . implode(", ", $fileList));
            
            // Try to find a file with similar name
            $target = strtolower(pathinfo($absolutePath, PATHINFO_FILENAME));
            $potentialMatches = [];
            
            foreach ($fileList as $file) {
                $fileName = strtolower(pathinfo($file, PATHINFO_FILENAME));
                similar_text($target, $fileName, $percent);
                if ($percent > 70) { // 70% similarity threshold
                    $potentialMatches[] = $file;
                }
            }
            
            if (!empty($potentialMatches)) {
                error_log("Did you mean one of these? " . implode(", ", $potentialMatches));
            }
        } else {
            error_log("Directory is empty: " . $dir);
        }
    } else {
        error_log("Directory does not exist: " . $dir);
    }
    
    return false;
}

// Debug logging
if (!empty($_GET['debug'])) {
    error_log("Request path: " . $request_path);
    error_log("Available routes: " . implode(", ", array_keys($routes)));
}

// Handle the request
if (array_key_exists($request_path, $routes)) {
    // Load the corresponding view
    $viewFile = $routes[$request_path];
    if (!loadView($viewFile)) {
        // If view file doesn't exist, show 404
        http_response_code(404);
        loadView('app/views/404.php');
    }
} elseif ($request_path === "/app/logic/log404.php") {
    // Special handling for 404 logging
    error_log("404 Error: " . $_SERVER['REQUEST_URI']);
    header("Location: /not-found");
    exit();
} else {
    // Handle 404 - Page not found
    http_response_code(404);
    loadView('app/views/404.php');
}
