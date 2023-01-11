<?php
    $name = $_POST['username'];
    $phone = $_POST['usernumber'];
    $console = $_POST['console'];
    $day = $_POST['day'];
    $adress = $_POST['useradress'];

    $to = "nikitagreb@list.ru";
    $date = date ("d.m.Y");
    $time = date ("h:i");
    $from = $email;
    $subject = "Заявка с сайта"

    $msg="
    Имя: $name /n
    Телефон: $phone /n
    Консоль: $console /n
    Кол-во дней: $day /n
    Адрес: $adress";
    mail($to, $subject, $msg, "From: $to");

    ?>