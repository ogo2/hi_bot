<?php
    // Подключение к базе данных
    $pdo = new PDO("mysql:host=localhost;dbname=mydatabase", "username", "password");

  
    
    $name_post = $_POST['name_user'];
    $email_post = $_POST['email_user'];
    $connect_type_post = $_POST['connect_type'];
    $phone_post = $_POST['phone_user'];
    $message_user_post = $_POST['message_user'];
    $summ_lance_post = $_POST['summ_lance']

    // Подготовка запроса
    $stmt_input = $pdo>prepare('INSERT INTO users (user_name, email, connect_type, phone, message_user, summ_lance) VALUES (:username, :email, :connect_type, :phone, :message_user, :summ_lance);')
    // $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");

    // Привязка параметров
    $stmt->bindParam(':username', $name_post, ':email', $email_post, ':connect_type', $connect_type_post, ':phone', $phone_post, ':message_user', $message_user_post, ':summ_lance', $summ_lance_post);
    // Выполнение запроса
    $stmt->execute();

    // Получение результатов
    // $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    
    // Второй вариант с помощью экранирования данных
    
    // Подключение к базе данных
    $conn = mysqli_connect("localhost", "username", "password", "mydatabase");

    // Экранирование данных
    $username = mysqli_real_escape_string($conn, $username);

    // Создание запроса
    $sql = "SELECT * FROM users WHERE username = '$username'";

    // Выполнение запроса
    $result = mysqli_query($conn, $sql);
?>