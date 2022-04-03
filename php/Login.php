<?php
include '../php/DataBase.php';
if (isset($_POST['login'])) {
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    // echo $password;
    // echo $email;
    $sqlQuery = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($connection, $sqlQuery);
    $row = mysqli_fetch_array($result);
    //echo $row['firstname'];
    if (isset($row['id'])) {
        header('location: ../pages/DashBoard.php');
    } else {
        header('location: ../pages/Login_Page.php');
    }
} 
else {
    header('location: ../pages/Login_Page.php');
}
