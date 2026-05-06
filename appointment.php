<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="form-container">

<h2>Book Appointment</h2>

<form action="save_appointment.php" method="POST">

<input type="text" name="patient_name" placeholder="Patient Name" required>

<input type="email" name="email" placeholder="Email" required>

<input type="date" name="appointment_date" required>

<textarea name="message" placeholder="Message"></textarea>

<button type="submit">Book Now</button>
</form>

</div>

</body>
</html>