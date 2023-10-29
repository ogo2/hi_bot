<?php
    // Подключение к базе данных
    // $pdo = new PDO("mysql:host=localhost;dbname=hi_bot", "root", "");
    require 'connect.php';
  
    
    $name_post = $_POST['name_user'];
    $email_post = $_POST['email_user'];
    $connect_type_post = $_POST['connect_type'];
    $phone_post = $_POST['phone_user'];
    $message_user_post = $_POST['message_user'];
    $summ_lance_post = $_POST['summ_lance'];
    $telegram_post = $_POST['telegramm_user'];
    // Экранирование данных
    $username = mysqli_real_escape_string($conn, $username);

    // Создание запроса
    $sql = "INSERT INTO users (user_name, email, connect_type, phone, message_user, summ_lance, telegramm) VALUES ('$name_post', '$email_post', '$connect_type_post', '$phone_post', '$message_user_post', '$summ_lance_post', '$telegram_post')";

    // Выполнение запроса
    $result = mysqli_query($conn, $sql);

    require_once('../phpmailer/PHPMailerAutoload.php');


    // отправка по почте

    $mail = new PHPMailer;
    $mail->CharSet = 'utf-8';

    //$mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'hi_bot1@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
    $mail->Password = ''; // Ваш пароль от почты с которой будут отправляться письма
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

    $mail->setFrom('hi_bot1@mail.ru'); // от кого будет уходить письмо?
    $mail->addAddress('vladchpok@gmail.com');     // Кому будет уходить письмо 
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Заказ на разработку бота';
    $mail->Body    =  $name_post.' ('.$email_post.') '.' оставил заявку, на создание бота. <br>Клиент расчитывает на сумму в диапазоне '.$summ_lance_post.' Номер телефона: '.$phone_post.' Telegram: '.$telegram_post.'<br>Комментарий заказчика:<br>'.$message_user_post;
    $mail->AltBody = '';

    if(!$mail->send()) {
        echo 'Error';
    } else {
        header('location: ../index.php');
    }
?>