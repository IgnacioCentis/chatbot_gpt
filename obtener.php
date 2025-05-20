<?php
require 'db.php';
session_start();

$user_id = $_SESSION['user_id'];
$stmt = $conn->prepare("SELECT role, content FROM messages WHERE user_id = ? ORDER BY id ASC");
$stmt->execute([$user_id]);
$mensajes = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($mensajes as $m) {
    $clase = $m['role'] === 'user' ? 'user' : 'bot';
    echo "<div class='$clase'>" . htmlentities($m['content']) . "</div>";
}
?>