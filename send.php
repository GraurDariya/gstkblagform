<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectOption1 = $_POST['select-option'];
    $fullName = $_POST['fullinn'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $selectOption2 = $_POST['select-option-2'];
    $fullUsluga = $_POST['fullusluga'];
    
    $to = 'dariya.5416@gmail.com'; // Ваш email
    $subject = 'Новая заявка на услугу';
    $message = "Укажите лицо: $selectOption1\nФИО: $fullName\nEmail: $email\nТелефон: $phone\nВыбранный раздел услуг: $selectOption2\nПодробнее об услуге: $fullUsluga";
    $headers = 'From: ' . $email;

    if (mail($to, $subject, $message, $headers)) { 
        echo 'Ваша заявка успешно отправлена.'; 
    } else { 
        echo 'При отправке заявки произошла ошибка. Код ошибки: ' . error_get_last()['message']; 
    }     
}
?>
