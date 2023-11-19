<?php
session_start();

function insert_taikhoan($email, $username, $pass){
    $sql =" INSERT INTO  taikhoan ('user' , 'pass', 'email') VALUE ('$username', '$pass','$email')";

    pdo_execute($sql);
}

function dangnhap($user , $pass){
    $sql ="SELECT * FROM taikhoan WHERE user ='$user' and pass='$pass' ";
    $taikhoan= pdo_query_one($sql);

    if(isset($taikhoan)){
        $_SESSION['user'] =$user;
    
    }else{
        return  "Thông tin sai";

       }

    var_dump($taikhoan);
    die;

  
}

?>