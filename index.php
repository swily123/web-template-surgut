<?php
$page = $_GET['page'] ?? 'main';

switch ($page) {
    case 'about':
        $content_file = 'about.php';
        break;
    case 'contacts':
        $content_file = 'contacts.php';
        break;
    case 'main':
    default:
        $content_file = 'main.php';
        break;
}
?>

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
        .content {
            padding: 20px;
        }
        .footer {
            background-color: #f4f4f4;
            padding: 10px;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="content">
        <?php include $content_file; ?>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>