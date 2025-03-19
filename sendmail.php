<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "your-email@example.com";
    $subject = "Новое сообщение с сайта CoffeeRu";
    $body = "Имя: $name\nEmail: $email\nСообщение:\n$message";
    $headers = "From: $email";
    
    if (mail($to, $subject, $body, $headers)) {
        header('Location: contact.php?status=success');
    } else {
        header('Location: contact.php?status=error');
    }
} else {
    header("Location: contact.php");
}
?>