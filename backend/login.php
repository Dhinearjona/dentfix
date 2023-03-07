<?php
    include '../connect.php';
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get form data
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // Check if username and password are correct
        if ($username == 'admin' && $password == 'password') {
            // Set session variables
            $_SESSION['username'] = $username;
            
            // Redirect to home page
            header('Location: index.php');
            exit();
        } else {
            // Display error message
            $error_message = '<script>alert("Invalid username or password");</script>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/backend/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="shortcut icon" href="../img/logo.jpg" type="image/x-icon">
    <title>Login | Dentfix Dental Clinic</title>
</head>
<body>
    <div class="container">
        <h2>Login Page</h2>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" value="Login">
        </form>
        <?php
            if (isset($error_message)) {
                echo '<p>' . $error_message . '</p>';
            }
        ?>
    </div>
</body>
</html>