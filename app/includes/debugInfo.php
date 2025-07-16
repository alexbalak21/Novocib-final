<?php
/**
 * Debug Information Display
 * 
 * This file contains functions for displaying debug information
 */

/**
 * Display debug information
 * 
 * @param array $data Debug data to display
 * @return string HTML formatted debug information
 */
function displayDebugInfo($data = []) {
    // Start output buffering
    ob_start();
    ?>
    <div id="debug-info" style="
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        background: #000;
        color: #0f0;
        padding: 10px;
        font-family: monospace;
        font-size: 12px;
        max-height: 200px;
        overflow-y: auto;
        z-index: 9999;
        border-top: 1px solid #333;
    ">
        <h3 style="margin: 0 0 10px 0; padding: 0; color: #fff;">Debug Information</h3>
        <div style="display: flex; flex-wrap: wrap; gap: 20px;">
            <?php if (!empty($data['server'])): ?>
            <div style="flex: 1; min-width: 300px;">
                <h4 style="margin: 0 0 5px 0; color: #4f9;">Server Info</h4>
                <pre style="margin: 0; white-space: pre-wrap; word-wrap: break-word;"><?php 
                    echo htmlspecialchars(print_r($data['server'], true)); 
                ?></pre>
            </div>
            <?php endif; ?>
            
            <?php if (!empty($data['request'])): ?>
            <div style="flex: 1; min-width: 300px;">
                <h4 style="margin: 0 0 5px 0; color: #4f9;">Request Info</h4>
                <pre style="margin: 0; white-space: pre-wrap; word-wrap: break-word;"><?php 
                    echo htmlspecialchars(print_r($data['request'], true)); 
                ?></pre>
            </div>
            <?php endif; ?>
            
            <?php if (!empty($data['routes'])): ?>
            <div style="flex: 1; min-width: 300px;">
                <h4 style="margin: 0 0 5px 0; color: #4f9;">Routes</h4>
                <pre style="margin: 0; white-space: pre-wrap; word-wrap: break-word;"><?php 
                    echo htmlspecialchars(print_r($data['routes'], true)); 
                ?></pre>
            </div>
            <?php endif; ?>
            
            <?php if (!empty($data['included'])): ?>
            <div style="flex: 1; min-width: 300px;">
                <h4 style="margin: 0 0 5px 0; color: #4f9;">Included Files</h4>
                <pre style="margin: 0; white-space: pre-wrap; word-wrap: break-word;"><?php 
                    echo htmlspecialchars(print_r($data['included'], true)); 
                ?></pre>
            </div>
            <?php endif; ?>
        </div>
        
        <?php if (!empty($data['memory'])): ?>
        <div style="margin-top: 10px; padding-top: 10px; border-top: 1px solid #333;">
            <div style="display: flex; justify-content: space-between;">
                <div>Memory Usage: <?php echo $data['memory']['usage']; ?> / <?php echo $data['memory']['peak']; ?></div>
                <div>Execution Time: <?php echo $data['memory']['time']; ?> seconds</div>
            </div>
        </div>
        <?php endif; ?>
    </div>
    <?php
    
    // Return the debug info HTML
    return ob_get_clean();
}

/**
 * Get debug information data
 * 
 * @param array $routes Application routes
 * @param string $request_path Current request path
 * @return array Debug data
 */
function getDebugData($routes, $request_path) {
    // Start timing
    $start_time = defined('APP_START_TIME') ? APP_START_TIME : $_SERVER['REQUEST_TIME_FLOAT'];
    
    // Calculate execution time
    $execution_time = microtime(true) - $start_time;
    
    // Prepare debug data
    $data = [
        'server' => [
            'PHP Version' => PHP_VERSION,
            'Server Software' => $_SERVER['SERVER_SOFTWARE'] ?? 'N/A',
            'Server Name' => $_SERVER['SERVER_NAME'] ?? 'N/A',
            'Server Protocol' => $_SERVER['SERVER_PROTOCOL'] ?? 'N/A',
            'Document Root' => $_SERVER['DOCUMENT_ROOT'] ?? 'N/A',
            'Script Filename' => $_SERVER['SCRIPT_FILENAME'] ?? 'N/A',
        ],
        'request' => [
            'Request URI' => $_SERVER['REQUEST_URI'] ?? 'N/A',
            'Request Method' => $_SERVER['REQUEST_METHOD'] ?? 'N/A',
            'Query String' => $_SERVER['QUERY_STRING'] ?? '',
            'Request Path' => $request_path,
            'GET Params' => $_GET,
            'POST Params' => !empty($_POST) ? $_POST : 'None',
            'Headers' => getallheaders(),
        ],
        'routes' => [
            'Current Route' => $request_path,
            'Matched Route' => isset($routes[$request_path]) ? $routes[$request_path] : 'No route matched',
            'Total Routes' => count($routes),
        ],
        'included' => get_included_files(),
        'memory' => [
            'usage' => formatBytes(memory_get_usage()),
            'peak' => formatBytes(memory_get_peak_usage()),
            'time' => number_format($execution_time, 4)
        ]
    ];
    
    return $data;
}

/**
 * Format bytes to human-readable format
 * 
 * @param int $bytes Bytes to format
 * @param int $precision Number of decimal places
 * @return string Formatted string
 */
function formatBytes($bytes, $precision = 2) {
    $units = ['B', 'KB', 'MB', 'GB', 'TB'];
    $bytes = max($bytes, 0);
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
    $pow = min($pow, count($units) - 1);
    $bytes /= (1 << (10 * $pow));
    
    return round($bytes, $precision) . ' ' . $units[$pow];
}

// Add a function to check if debug mode is enabled
function isDebugMode() {
    // You can customize this function based on your needs
    // For example, check a config value, IP address, or URL parameter
    return isset($_GET['debug']) || 
           (isset($_SERVER['REMOTE_ADDR']) && in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1']));
}
