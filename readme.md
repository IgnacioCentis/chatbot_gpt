# 🧠 Chat Inteligente PHP + OpenAI

Este proyecto es una interfaz web de chat desarrollada en **PHP** con **jQuery**, que permite a los usuarios interactuar con un asistente inteligente de **OpenAI** (GPT). El asistente está contextualizado para responder únicamente sobre una cátedra específica, en este ejemplo "Matemática I".

---

## 🚀 Funcionalidades principales

- ✅ Chat en tiempo real simulado con AJAX
- ✅ Persistencia de mensajes por usuario (session ID)
- ✅ Contexto fijo de conversación (solo responde sobre un tema definido)
- ✅ Integración con la API de OpenAI (GPT-3.5)
- ✅ Interfaz responsive


---

## 🛠️ Tecnologías utilizadas

| Capa        | Tecnología                |
|-------------|---------------------------|
| Backend     | PHP (compatible desde 5.6, recomendado 7.4+) |
| Frontend    | HTML5, CSS3, jQuery       |
| API IA      | OpenAI Chat Completions API |
| Estilo UI   | CSS personalizado con Roboto |
| Base de datos | MySQL                   |
| Configuración | `.env` + `phpdotenv` (opcional) |

---

## 📁 Base de Datos

sql
CREATE DATABASE chatbot_gpt;

USE chatbot_gpt;

CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id VARCHAR(255),
    role ENUM('user', 'assistant'),
    content TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

