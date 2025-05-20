<?php
$conn = new PDO("mysql:host=localhost;dbname=chatbot_gpt", "root", "");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>