<?php
session_start();
header('Content-Type: application/json');
if (!isset($_SESSION['credits'])) $_SESSION['credits'] = 10;
echo json_encode(['credits' => $_SESSION['credits']]);
?>
