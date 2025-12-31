<?php
header('Content-Type: application/json');
// Replace with actual path to your WebDAV directory
$webdav_path = '/var/www/webdav';
$used_bytes = (int) shell_exec("du -sb $webdav_path | cut -f1");
$total_bytes = (int) shell_exec("df --block-size=1 $webdav_path | tail -1 | awk '{print $2}'");
echo json_encode(['used' => $used_bytes, 'total' => $total_bytes]);
?>