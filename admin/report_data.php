<?php
session_start();
include('../includes/db_connect.php');

// Auth check
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    http_response_code(403);
    echo json_encode(['error' => 'Unauthorized']);
    exit;
}

$year = isset($_GET['year']) ? (int)$_GET['year'] : (int)date('Y');
$data = [];
$stmt = $conn->prepare("SELECT MONTH(Date_of_Payment) AS m, SUM(Amount_Paid) AS total
                        FROM payment WHERE YEAR(Date_of_Payment)=? GROUP BY m");
$stmt->bind_param("i", $year);
$stmt->execute();
$result = $stmt->get_result();
while ($r = $result->fetch_assoc()) {
    $data[$r['m']] = $r['total'];
}
$stmt->close();
echo json_encode($data);
