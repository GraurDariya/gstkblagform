<?php

  $select-option-1=$_POST['select-option'];
  $fullname=$_POST['fullname'];
  $fullinn=$_POST['fullinn'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $select-option-2=$_POST['select-option'];
  $fullusluga=$_POST['fullusluga'];

  $to="dariya.5416@gmail.com";
  $date=date("d.m.Y");
  $time=date("h:i");
  $subject="Заявка с сайта";

  $msg="
  Лицо:$select-option-1 /n
  ФИО:$fullname /n
  ИНН:$fullinn /n
  Email:$email /n
  Телефон:$phone /n
  Раздел услуг:$select-option-2 /n
  Подробнее об услуге:$fullusluga";
  mail($to, $subject, $msg, "From: $From");

?>
