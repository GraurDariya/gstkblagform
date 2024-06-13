<php

  $select-option-1=$_POST['select-option'];
  $fullname=$_POST['fullname'];
  $fullinn=$_POST['fullinn'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $select-option-2=$_POST['select-option'];
  $fullusluga=$_POST['fullusluga'];

  $select-option-1=htmlspecialcharts($select-option);
  $fullname=htmlspecialcharts($fullname);
  $fullinn=htmlspecialcharts($fullinn);
  $email=htmlspecialcharts($email);
  $phone=htmlspecialcharts($phone);
  $select-option-2=htmlspecialcharts($select-option);
  $fullusluga=htmlspecialcharts($fullusluga);

$select-option-1=urldecode($select-option);
  $fullname=urldecode($fullname);
  $fullinn=urldecode($fullinn);
  $email=urldecode($email);
  $phone=urldecode($phone);
  $select-option-2=urldecode($select-option);
  $fullusluga=urldecode($fullusluga);

$select-option-1=trim($select-option);
  $fullname=trim($fullname);
  $fullinn=trim($fullinn);
  $email=trim($email);
  $phone=trim($phone);
  $select-option-2=trim($select-option);
  $fullusluga=trim($fullusluga);


if (mail("dariya.5416@gmail.com",
          "Новое письмо с сайта",
          "Лицо: ".$select-option-1."\n".
          "ФИО: ".$fullname."\n".
          "ИНН: ".$fullinn."\n".
          "Email: ".$email."\n".
          "Телефон: ".$phone."\n".
          "Раздел услуг: ".$select-option-2."\n".
          "Подробнее об услуге: ".fullusluga."\n".
){
    echo('Письмо успешно отправлено!');
}
else {
echo('Есть ошибки! Проверьте данные...');
}
?php>
