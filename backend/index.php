<?php
	include '../connect.php';
	session_start();

	if (!isset($_SESSION['username'])) {
	   header('Location: login.php');
	   exit();
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/backend/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="shortcut icon" href="../img/logo.jpg" type="image/x-icon">
    <title>Dashboard | Dentfix Dental Clinic</title>
</head>
    	<!-- Navigation Menu -->
		<div class="sidenav">
			<a href="#dashboard">Dashboard</a>
			<a href="#appointments">Appointments</a>
			<a href="#patients">Patients</a>
			<a href="#doctors">Doctors</a>

			<!-- User Profile Link -->
			<a href="#profile"><?php echo $_SESSION['username']; ?></a>

			<!-- Logout Link -->
			<a href="logout.php">Logout</a>
		</div>

	
	<!-- Main Content -->
	<div class="main">
		<h1>Dashboard</h1>
		<p>Welcome to your dashboard. Here you can view and manage appointments, patients, and doctors.</p>
		
		<!-- Appointments Section -->
		<section id="appointments">
			<h2>Appointments</h2>
			<!-- Add appointments content here -->
		</section>
		
		<!-- Patients Section -->
		<section id="patients">
			<h2>Patients</h2>
			<!-- Add patients content here -->
		</section>
		
		<!-- Doctors Section -->
		<section id="doctors">
			<h2>Doctors</h2>
			<!-- Add doctors content here -->
		</section>
	</div>
</body>
</html>