<?php
    $conx = mysqli_connect("localhost", "root", "", "fisayofunds_dbase");

    $name =  $_POST['name'];
    $email =  $_POST['email'];
    $mobile =  $_POST['mobile'];
    $amount =  $_POST['amount'];
    $transRef =  $_POST['transRef'];
    $created = date('d D, M Y');

    $insertQ = mysqli_query($conx, "INSERT INTO `tranz_tb`(`name`,`email`,`mobile`,`price`,`tranzCode`,`created`)VALUES('$name','$email','$mobile','$amount','$transRef','$created')");
    if(!$insertQ){
        echo json_encode(array('success' => mysqli_error($conx)));
    }else{
        echo json_encode(array('success' => 1));
    }
?>