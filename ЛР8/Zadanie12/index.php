<!DOCTYPE html>
<html>
<head>
  <title>Форма вводу книги</title>
</head>
<body>
  <h1>Форма вводу книги</h1>
  <form method="post" action="save_book.php">
    <label for="author">Автор:</label>
    <input type="text" name="author" id="author" required><br>

    <label for="title">Назва:</label>
    <input type="text" name="title" id="title" required><br>

    <label for="year">Рік:</label>
    <input type="text" name="year" id="year" required><br>

    <label for="pages">Кількість сторінок:</label>
    <input type="text" name="pages" id="pages" required><br>

    <input type="submit" value="Зберегти">
    <input type="button" value="Перегляд" onclick="location.href='display_books.php';">
  </form>
</body>
</html>