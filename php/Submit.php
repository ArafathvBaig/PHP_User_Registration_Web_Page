<?php
include '../php/DataBase.php';
if (isset($_POST['submit'])) {
    $firstName = $_POST['First_Name'];
    $lastName = $_POST['Last_Name'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    //$hash = password_hash($password, PASSWORD_DEFAULT);
    $phoneNumber = $_POST['Phone_Number'];
    $sqlQuery = "INSERT INTO user (firstname, lastname, email, password, phonenumber) VALUES ('$firstName', '$lastName', '$email', '$password', '$phoneNumber')";
    $result = mysqli_query($connection, $sqlQuery);
    header('location: ../pages/Login_Page.php');
}
