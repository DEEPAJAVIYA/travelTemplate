<?php

$db=mysqli_connect("localhost","root","","WebA1");

    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $ins="insert into travel00 (name,email,phone,username,password,cpassword,date) values ('$name','$email','$phone','$username','$password','$cpassword',current_timestamp())";
    $db->query($ins);

    $db->close();

    echo $email . "  info successfully added";


?>