<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Анализатор текста на PHP</title>
    <style>
        textarea {width: 100%; height: 150px;}
        button {margin-top: 14px;}

    </style>
</head>
<body>
    <form method="post">
        <textarea name="text"><?php echo isset($_POST['text']) ? htmlspecialchars($_POST['text']) : ''; ?></textarea><br>
        <button type="submit">Подсчитать</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $text = $_POST['text'] ?? '';

        // Подсчет символов
        $charCount = mb_strlen($text);

        // Подсчет слов
        $words = preg_split('/\s+/', trim($text));
        $wordCount = count(array_filter($words, function($word) {
            return !empty($word);
        }));

        // Подсчет слов, начинающихся с гласной
        $vowelWordCount = 0;
        $vowels = ['а', 'у', 'о', 'ы', 'и', 'э', 'я', 'ю', 'ё', 'е', 'a', 'e', 'i', 'o', 'u'];
        foreach ($words as $word) {
            $word = trim(mb_strtolower($word)); // Преобразуем в нижний регистр для корректного сравнения
            if (!empty($word) && in_array(mb_substr($word, 0, 1), $vowels)) {
                $vowelWordCount++;
            }
        }


        // Вывод результатов
        echo '<p>Количество символов: ' . $charCount . '</p>';
        echo '<p>Количество слов: ' . $wordCount . '</p>';
        echo '<p>Количество слов, начинающихся с гласной: ' . $vowelWordCount . '</p>';
    }
    ?>
</body>
</html>

