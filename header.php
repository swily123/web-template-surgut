<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мой сайт</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #333;
            color: white;
            padding: 10px 20px;
        }
        .header a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
        }
        .header a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Мой сайт</h1>
        <a href="index.php?page=main">Главная</a>
        <a href="index.php?page=about">О нас</a>
        <a href="index.php?page=contacts">Контакты</a>
    </div>