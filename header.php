<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="scripts.js" defer></script>
    <title>Online Voting System</title>
    <style>
        .user-icon {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-image: url('uploads/app_icon.png');
            background-size: cover;
            cursor: pointer;
        }
        #chat-options {
            display: none;
            position: absolute;
            top: 60px;
            right: 10px;
            background: #fff;
            border: 1px solid #ccc;
            padding: 10px;
        }
        #chat-options button {
        display: block;
            margin-bottom: 5px;
        }
    </style>
    <script>
        function openChatOptions() {
            var chatOptions = document.getElementById('chat-options');
            chatOptions.style.display = 'block';
        }

        function chooseChat(type) {
            if (type === 'global') {
                window.location.href = 'global_chat.php';
            } else if (type === 'private') {
                window.location.href = 'private_chat.php';
            }
        }
    </script>
</head>
<body>
<header>
    <h1>Online Voting System</h1>
</header>
<div class="user-icon" onclick="openChatOptions()"></div>

    <div id="chat-options" style="display: none; position: absolute; top: 60px; right: 10px; background: #fff; border: 1px solid #ccc; padding: 10px;">
        <button onclick="chooseChat('global')">Global Chat</button>
        <button onclick="chooseChat('private')">Private Chat</button>
    </div>
<main>
