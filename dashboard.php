<?php
include '../includes/db.php';

$users = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users"));
$appointments = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM appointments"));
$contacts = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM contacts"));
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<h1>Admin Dashboard</h1>

<div class="dashboard">

<div class="dash-card">
<h2>Total Users</h2>
<p><?php echo $users; ?></p>
</div>
<div class="dash-card">
<h2>Appointments</h2>
<p><?php echo $appointments; ?></p>
</div>

<div class="dash-card">
<h2>Messages</h2>
<p><?php echo $contacts; ?></p>
</div>

</div>

</body>
</html>