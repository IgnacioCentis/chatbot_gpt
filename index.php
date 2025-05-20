<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    $_SESSION['user_id'] = uniqid();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Chat Inteligente Cátedra</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        #chat { border: 1px solid #ccc; padding: 10px; height: 400px; overflow-y: scroll; }
        .user { text-align: right; color: blue; }
        .bot { text-align: left; color: green; }
    </style>
</head>
<body>
<h2>Chat de la Cátedra de Matemática I</h2>
<div id="chat"></div>
<input type="text" id="mensaje" placeholder="Escribí tu consulta..." style="width: 80%;">
<button id="enviar">Enviar</button>
<script src="assets/script.js"></script>
</body>
</html>