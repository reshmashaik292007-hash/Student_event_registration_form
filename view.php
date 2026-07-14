<?php
include("db.php");

$result = mysqli_query($conn,"SELECT * FROM registrations");
?>

<!DOCTYPE html>
<html>
<head>

<title>Registered Students</title>

<style>

body{
font-family:Arial;
background:#f2f2f2;
}

table{

width:95%;
margin:auto;
border-collapse:collapse;
background:white;

}

th,td{

border:1px solid black;
padding:10px;
text-align:center;

}

th{

background:#007BFF;
color:white;

}

h2{

text-align:center;

}

</style>

</head>

<body>

<h2>Registered Participants</h2>

<div style="text-align:center; margin-bottom:20px;">
    <a href="index.php"
       style="background:#007BFF; color:white; padding:10px 20px; text-decoration:none; border-radius:5px;">
        Register Another Participant
    </a>
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
<th>Registration Date</th>

</tr>

<?php

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
<td><?php echo $row['registration_date']; ?></td>

</tr>

<?php

}

?>

</table>

</body>

</html>