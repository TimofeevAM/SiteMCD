<?php
    require_once 'connect.php';

    $name = $_POST['name'];
    $birthday = $_POST['birthday'];
    $country = $_POST['country'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $call = $_POST['call'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $busy = $_POST['busy'];
    $time = $_POST['time'];

        mysqli_query($connect, "INSERT INTO `questionnaire` (`id`, `name`, `date of birth`, `nationality`, `residence address`, `phone number`, `time to call`, `e-mail`, `about me`, `current employment`, `time`) 
        VALUES 
        (NULL , '$name', '$birthday', '$country', '$address', '$phone', '$call', '$email', '$message', '$busy', '$time')");
        header('location:../index.php');