<?php
session_start();

if (isset($_SESSION['book_data'])) {
    $book_data = $_SESSION['book_data'];
} else {
    echo "Нет данных о книге. Вернитесь на <a href='index.php'>предыдущую страницу</a> и заполните форму.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Данные о книге</title>
</head>
<body>
    <h1>Информация о книге:</h1>
    <p><b>Название:</b> <?php echo htmlspecialchars($book_data['book_title']); ?></p>
    <p><b>Автор:</b> <?php echo htmlspecialchars($book_data['author']); ?></p>
    <p><b>Год издания:</b> <?php echo htmlspecialchars($book_data['year']); ?></p>

    <a href="index.php">Изменить данные</a>
</body>
</html>

