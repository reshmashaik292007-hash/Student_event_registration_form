<?php
session_start();

if(!isset($_SESSION['admin']))
{
    header("Location: admin_login.php");
    exit();
}

include("db.php");

$result = mysqli_query($conn,"SELECT * FROM registrations ORDER BY id DESC");

$total_students = mysqli_num_rows($result);

$events = mysqli_query($conn,"SELECT COUNT(DISTINCT event_name) AS total_events FROM registrations");
$event_data = mysqli_fetch_assoc($events);
?>
<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<title>Admin Dashboard</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,sans-serif;
}

body{
background:#f4f6f9;
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

background:#dc3545;

padding:10px 18px;

border-radius:6px;

color:white;

text-decoration:none;

}

.container{

width:95%;

margin:30px auto;

}

.cards{

display:flex;

gap:20px;

margin-bottom:25px;

}

.card{

flex:1;

background:white;

padding:25px;

border-radius:10px;

box-shadow:0 0 10px rgba(0,0,0,.08);

text-align:center;

}

.card h3{

color:#0d6efd;

margin-bottom:10px;

}

.card p{

font-size:28px;

font-weight:bold;

}

table{

width:100%;

border-collapse:collapse;

background:white;

box-shadow:0 0 10px rgba(0,0,0,.08);

}

th{

background:#0d6efd;

color:white;

padding:12px;

}

td{

padding:10px;

text-align:center;

border-bottom:1px solid #ddd;

}

.edit{

background:#198754;

color:white;

padding:6px 12px;

text-decoration:none;

border-radius:5px;

}

.delete{

background:#dc3545;

color:white;

padding:6px 12px;

text-decoration:none;

border-radius:5px;

}

</style>

</head>

<body>

<div class="header">

<h2>Admin Dashboard</h2>

<a href="logout.php" class="logout">Logout</a>

</div>

<div class="container">

<div class="cards">

<div class="card">

<h3>Total Students</h3>

<p><?php echo $total_students; ?></p>

</div>

<div class="card">

<h3>Total Events</h3>

<p><?php echo $event_data['total_events']; ?></p>

</div>

</div>

<table>

<tr>

<th>ID</th>

<th>Name</th>

<th>Email</th>

<th>Phone</th>

<th>College</th>

<th>Department</th>

<th>Branch</th>

<th>Gender</th>

<th>Event</th>

<th>Actions</th>

</tr>

<?php

mysqli_data_seek($result,0);

while($row=mysqli_fetch_assoc($result))
{

?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['full_name']; ?></td>

<td><?php echo $row['email']; ?></td>

<td><?php echo $row['phone']; ?></td>

<td><?php echo $row['college']; ?></td>

<td><?php echo $row['department']; ?></td>

<td><?php echo $row['branch']; ?></td>

<td><?php echo $row['gender']; ?></td>

<td><?php echo $row['event_name']; ?></td>

<td>

<a class="edit"
href="edit_student.php?id=<?php echo $row['id']; ?>">
Edit
</a>

<a class="delete"
onclick="return confirm('Delete this student?')"
href="delete_student.php?id=<?php echo $row['id']; ?>">
Delete
</a>

</td>

</tr>

<?php

}

?>

</table>

</div>

</body>

</html>