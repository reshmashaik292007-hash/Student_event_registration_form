<?php
include("db.php");

if(isset($_POST['full_name']))
{
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $college = $_POST['college'];
    $department = $_POST['department'];
    $branch = $_POST['branch'];
    $gender = $_POST['gender'];
    $event_name = $_POST['event_name'];

    // Passwords
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check passwords match
    if($password != $confirm_password)
    {
        echo "<script>
        alert('Passwords do not match!');
        window.history.back();
        </script>";
        exit();
    }

    // Encrypt password
    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO registrations
    (full_name,email,phone,college,department,branch,gender,event_name,password)
    VALUES
    ('$full_name','$email','$phone','$college','$department','$branch','$gender','$event_name','$password')";

    if(mysqli_query($conn,$sql))
    {
        echo "<script>
        alert('Registration Successful!');
        window.location='login.php';
        </script>";
    }
    else
    {
        echo "Error : ".mysqli_error($conn);
    }
}
?>