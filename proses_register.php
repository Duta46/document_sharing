<?php
include('./db_connect.php');

if(isset($_POST['register-btn'])){
     $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if($password == $confirm_password)
    {
        $query = "INSERT INTO users(firstname,lastname,contact, email,password) VALUES('$firstname', '$lastname', '$contact', '$email', '$password')";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo "Registrasi Berhasil";
        }
        else 
        {
            echo "Registrasi Gagal";
        }
    }
    else
    {
        echo "password not matched";
    }
}
?>