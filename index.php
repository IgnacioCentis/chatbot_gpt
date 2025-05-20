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
    <title>Chat Inteligente - Cátedra Matemática I</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: #f7f9fc;
            margin: 0;
            padding: 0;
        }

        .chat-container {
            width: 100%;
            max-width: 800px;
            margin: 40px auto;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .chat-header {
            background: #2c3e50;
            color: white;
            padding: 20px;
            font-size: 20px;
            font-weight: bold;
        }

        #chat {
            padding: 20px;
            height: 500px;
            overflow-y: scroll;
            background: #ecf0f1;
        }

        .user {
            text-align: right;
            margin: 10px 0;
            color: #2980b9;
        }

        .bot {
            text-align: left;
            margin: 10px 0;
            color: #27ae60;
        }

        .chat-footer {
            display: flex;
            padding: 15px;
            background: #fff;
            border-top: 1px solid #ccc;
        }

        #mensaje {
            flex: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 10px;
        }

        #enviar {
            padding: 10px 20px;
            background: #3498db;
            border: none;
            color: white;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
        }

        #enviar:hover {
            background: #2980b9;
        }
    </style>
</head>
<body>

<div class="chat-container">
    <div class="chat-header">💬 Chat de la Cátedra de Matemática I</div>
    <div id="chat"></div>
    <div class="chat-footer">
        <input type="text" id="mensaje" placeholder="Escribí tu consulta...">
        <button id="enviar">Enviar</button>
    </div>
</div>

<script src="assets/script.js"></script>
</body>
</html>
