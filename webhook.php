<?php
$secret = 'food4good2025';
$payload = file_get_contents('php://input');
$sig = $_SERVER['HTTP_X_HUB_SIGNATURE_256'] ?? '';

if (!empty($secret)) {
    $expected = 'sha256=' . hash_hmac('sha256', $payload, $secret);
    if (!hash_equals($expected, $sig)) {
        http_response_code(403);
        die('Forbidden');
    }
}

$output = shell_exec('cd /var/www/food4good && git pull origin main 2>&1');
echo json_encode(['status' => 'ok', 'output' => $output]);
