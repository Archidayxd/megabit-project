<?php
if (isset($_POST["email"])) {
    $email = $_POST["email"];


    include_once 'dbcon.php';

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $sql = "INSERT INTO `email`(`email`) VALUES ('$email')";
        $result = mysqli_query($con, $sql);
    } else {
        echo "incorrect email";
    }


    if ($result == true) {
        echo "<h3>Succes!!!</h3>";
    } else {
        echo "<h3>Failed!</h3>";
    }
}