<?php
// Glinta Africa Cron Runner
// This script runs the automated billing system tasks

// Security check - only allow execution from localhost or with a secret key
$allowed_ips = ['127.0.0.1', '::1', 'localhost'];
$secret_key = 'glinta_africa_cron_2025'; // Change this to a secure key

if (!in_array($_SERVER['REMOTE_ADDR'], $allowed_ips) && 
    (!isset($_GET['key']) || $_GET['key'] !== $secret_key)) {
    http_response_code(403);
    die('Access denied');
}

echo "<!DOCTYPE html><html><head><title>Glinta Africa Cron Runner</title></head><body>";
echo "<h2>Glinta Africa - Automated Tasks</h2>";
echo "<pre>";

// Set time limit and memory limit
set_time_limit(300); // 5 minutes
ini_set('memory_limit', '256M');

// Start output buffering
ob_start();

// Include the actual cron job
try {
    include 'system/cron.php';
    echo "\n✅ Cron job completed successfully!";
} catch (Exception $e) {
    echo "\n❌ Error running cron job: " . $e->getMessage();
} catch (Throwable $e) {
    echo "\n❌ Fatal error running cron job: " . $e->getMessage();
}

// End output buffering and display
$output = ob_get_clean();
echo $output;

echo "</pre>";
echo "<p><strong>Glinta Africa, by <a href='https://www.watsonsdevelopers.com/' target='_blank'>Watsons Developers</a></strong></p>";
echo "</body></html>";
?> 