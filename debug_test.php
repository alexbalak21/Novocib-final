<?php
// Force error display
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Simple test to see if PHP is working
echo "<h1>PHP is working!</h1>\n";

// Show server information
echo "<h2>Server Information</h2>";
echo "<pre>";
echo "PHP Version: " . phpversion() . "\n";
echo "Server Software: " . ($_SERVER['SERVER_SOFTWARE'] ?? 'Not available') . "\n";
echo "Document Root: " . ($_SERVER['DOCUMENT_ROOT'] ?? 'Not available') . "\n";
echo "Current File: " . __FILE__ . "\n";

// Show all defined routes
echo "\n<h2>Routes from routes.php</h2>";
$routes = require __DIR__ . '/routes.php';
echo "<pre>";
print_r($routes);
echo "</pre>";

// Show all defined constants
echo "<h2>Defined Constants</h2>";
echo "<pre>";
print_r(get_defined_constants(true)['user'] ?? 'No user constants defined');
echo "</pre>";

// Show all included files
echo "<h2>Included Files</h2>";
echo "<pre>";
print_r(get_included_files());
echo "</pre>";

// Show all server variables
echo "<h2>Server Variables</h2>";
echo "<pre>";
foreach ($_SERVER as $key => $value) {
    if (is_string($value)) {
        echo "$key: $value\n";
    } else {
        echo "$key: " . gettype($value) . "\n";
    }
}
echo "</pre>";
?>
