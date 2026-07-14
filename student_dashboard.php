<?php
session_start();

if(!isset($_SESSION['student']))
{
    header("Location: login.php");
    exit();
}

$student = $_SESSION['student'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Dashboard</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, sans-serif;
        }

        body{
            background:#f4f7fb;
        }

        .header{
            background:#0d6efd;
            color:white;
            padding:18px 40px;
            display:flex;
            justify-content:space-between;
            align-items:center;
        }

        .header h2{
            font-size:28px;
        }

        .logout{
            text-decoration:none;
            background:#dc3545;
            color:white;
            padding:10px 18px;
            border-radius:6px;
        }

        .container{
            width:90%;
            max-width:900px;
            margin:40px auto;
            background:white;
            padding:35px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,.1);
        }

        h3{
            margin-bottom:25px;
            color:#0d6efd;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        td{
            border:1px solid #ddd;
            padding:14px;
        }

        td:first-child{
            font-weight:bold;
            width:35%;
            background:#f8f9fa;
        }

        .events{
            margin-top:35px;
        }

        .event-card{
            background:#eaf4ff;
            border-left:5px solid #0d6efd;
            padding:20px;
            margin-top:15px;
            border-radius:8px;
        }
    </style>

</head>

<body>

<div class="header">

<h2>Student Dashboard</h2>

<a href="logout.php" class="logout">Logout</a>

</div>

<div class="container">

<h3>Welcome,
<?php echo $student['full_name']; ?>
</h3>

<table>

<tr>
<td>Name</td>
<td><?php echo $student['full_name']; ?></td>
</tr>

<tr>
<td>Email</td>
<td><?php echo $student['email']; ?></td>
</tr>

<tr>
<td>Phone</td>
<td><?php echo $student['phone']; ?></td>
</tr>

<tr>
<td>College</td>
<td><?php echo $student['college']; ?></td>
</tr>

<tr>
<td>Department</td>
<td><?php echo $student['department']; ?></td>
</tr>

<tr>
<td>Branch</td>
<td><?php echo $student['branch']; ?></td>
</tr>

<tr>
<td>Gender</td>
<td><?php echo $student['gender']; ?></td>
</tr>

<tr>
<td>Registered Event</td>
<td><?php echo $student['event_name']; ?></td>
</tr>

</table>

<div class="events">

<h3>Your Registered Event</h3>

<div class="event-card">

<h4><?php echo $student['event_name']; ?></h4>

<p>You have successfully registered for this event.</p>

</div>

</div>

</div>

</body>
</html>