<?php
/**
 * Created by PhpStorm.
 * User: vishal
 * Date: 10/21/17
 * Time: 4:16 PM
 */
include_once 'db.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo $username;
    echo $password;
    $query = "select * from login where username = '$username' and password='$password'";
    $result = mysqli_query($connection, $query);

    $userdetails = mysqli_fetch_assoc($result);

    if($userdetails['username']=='manager')
    {
        header('Location: index.php?room_mang');
    }
    else{

        header('Location: login.php');
    }
}

?>