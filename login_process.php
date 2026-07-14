<?php
session_start();
include("db.php");

if(isset($_POST['email']) && isset($_POST['password']))
{
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM registrations
            WHERE email='$email'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_assoc($result);

        if(password_verify($password, $row['password']))
        {
            $_SESSION['student'] = $row;

            header("Location: student_dashboard.php");
            exit();
        }
        else
        {
            echo "<script>
            alert('Incorrect Password!');
            window.location='login.php';
            </script>";
        }
    }
    else
    {
        echo "<script>
        alert('Email not registered!');
        window.location='login.php';
        </script>";
    }
}
?>