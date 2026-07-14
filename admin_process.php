<?php
session_start();
include("db.php");

if(isset($_POST['username']) && isset($_POST['password']))
{
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM admin
            WHERE username='$username'
            AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1)
    {
        $_SESSION['admin'] = $username;

        header("Location: admin_dashboard.php");
        exit();
    }
    else
    {
        echo "<script>
        alert('Invalid Username or Password');
        window.location='admin_login.php';
        </script>";
    }
}
else
{
    header("Location: admin_login.php");
    exit();
}
?>