<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получить данные из формы
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    echo "<p>Данные успешно отправлены:</p>";
    echo "<p>Имя: $name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Пароль: $password</p>";
} else {
    echo "Ошибка: Форма не была отправлена.";
}
?>