<?php
    include 'connect.php';
    session_start();

    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $doctor = $_POST['doctor'];

    // Prepare and execute the SQL statement to insert the appointment data into the appointments table
    $stmt = $conn->prepare("INSERT INTO appointments (name, email, phone, date, time, doctor) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $email, $phone, $date, $time, $doctor);

    if ($stmt->execute()) {
    // Appointment saved successfully
    echo "<script>alert('Appointment saved successfully'); window.location.href='index.php';</script>";
    } else {
    // Appointment could not be saved
    echo "Error: " . $stmt->error;
    }
?>
