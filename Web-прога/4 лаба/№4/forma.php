<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['book_data'] = [
        'book_title' => $_POST['book_title'],
        'author' => $_POST['author'],
        'year' => $_POST['year']
    ];
    header('Location: display.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Информация о книге</title>
</head>
<body>
    <h1>Введите информацию о книге</h1>
    <form method="post">
        <label for="book_title">Название книги:</label><br>
        <input type="text" id="book_title" name="book_title"><br><br>

        <label for="author">Автор:</label><br>
        <input type="text" id="author" name="author"><br><br>

        <label for="year">Год издания:</label><br>
        <input type="number" id="year" name="year"><br><br>

        <button type="submit">Сохранить</button>
    </form>
</body>
</html>

