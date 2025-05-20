<?php
require 'config.php';
require 'db.php';
session_start();

$mensaje = $_POST['mensaje'];
$user_id = $_SESSION['user_id'];

$stmt = $conn->prepare("INSERT INTO messages (user_id, role, content) VALUES (?, 'user', ?)");
$stmt->execute([$user_id, $mensaje]);

$stmt = $conn->prepare("SELECT role, content FROM messages WHERE user_id = ? ORDER BY id ASC LIMIT 10");
$stmt->execute([$user_id]);
$mensajes = $stmt->fetchAll(PDO::FETCH_ASSOC);

array_unshift($mensajes, [
    "role" => "system",
    "content" => "Sos un asistente que solo responde preguntas sobre la cátedra de Matemática I. No respondas sobre otros temas."
]);

$ch = curl_init("https://api.openai.com/v1/chat/completions");
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/json",
        "Authorization: Bearer " . OPENAI_API_KEY
    ],
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode([
        "model" => CHAT_MODEL,
        "messages" => $mensajes,
        "temperature" => 0.7
    ])
]);

$respuesta = curl_exec($ch);
curl_close($ch);
$data = json_decode($respuesta, true);
$texto = $data['choices'][0]['message']['content'] ?? "Error al procesar";

$stmt = $conn->prepare("INSERT INTO messages (user_id, role, content) VALUES (?, 'assistant', ?)");
$stmt->execute([$user_id, $texto]);

echo $texto;
?>