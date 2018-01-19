<?php

header('Content-Type: application/json');

require_once 'mysql.php';

if (isset($_GET['p']) && !empty($_GET['p'])) {
	$sql = "SELECT * FROM pages WHERE id = :id";
	$stmt = $conn->prepare($sql);
	$stmt->execute(['id' => $_GET['p']]);
	$result = $stmt->fetch(PDO::FETCH_ASSOC);

	if ($stmt->rowCount() === 1) {
		echo json_encode($result);
	} else {
		echo json_encode(['title' => '404 - Not Found']);
	}
} else {
	echo json_encode(['content' => 'Hej Verden!']);
}