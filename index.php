<?php
    include 'connect.php';
    session_start();

    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Insert the message into the database
    $sql = "INSERT INTO contact_messages (name, email, message) VALUES ('$name', '$email', '$message')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Message sent successfully!');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="shortcut icon" href="./img/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css" type="text/css">
    <title>Dentfix Clinic Scheduling System</title>
</head>
<style>
    nav a {
        text-decoration: none;
        color: var(--orange);
    }

    nav a:hover {
        color: var(--black);
    }
    
    nav ul {
        list-style: none;
        display: flex;
        gap: 2rem;
        margin: 0;
    }

    nav .btn-primary {
        margin-top: -.6rem;
        padding: 12px 2rem;
        background: transparent;
        border: 1px solid var(--orange);
        color: var(--orange);
        transition: all 0.3s ease-in-out;
    }

    nav .btn-primary:hover {
        background: var(--orange);
        border: 1px solid var(--orange);
        color: var(--white);
    }
</style>
<body>
    <div class="wrapper">
		<nav>
			<a href="index.php"><img src="img/logo.jpg" class="logo" /></a>
            <input type="checkbox" name="" id="toggle">
            <label for="toggle"><i class='bx bx-menu'></i></label>
            <div class="menu">
                <ul>
                    <li><a href="index.php" target="_self">Home</a></li>
                    <li><a href="#services" target="_self">Services</a></li>
                    <li><a href="#special" target="_self">Specialization</a></li>
                    <li><a href="#testimonials" target="_self">Testimonials</a></li>
                    <li><a href="#contact" target="_self">Contact Us</a></li>
                    <li><a href="#about" target="_self">About Us</a></li>
                    <li><a href="login.php" class="btn btn-primary" target="_self">Login</a></li>
                </ul>
            </div>
		</nav>
    </div>

    <div class="cover" style="background-image: url('img/cover.png');">
        <h1>We care about your teeth</h1>
        <p>Take care of your teeth and mouth health with our professional and expert dentist.</p>
        <button id="appointmentButton" class="btn btn-primary">Book an appointment now</button>
    </div>
    <!-- The modal -->
    <div id="appointmentModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Book an appointment</h2>
        <form action="process.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required><br>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" class="form-control" name="phone" required><br>

        <label for="date">Date:</label>
        <input type="date" id="date" class="form-control" name="date" required><br>

        <label for="time">Time:</label>
        <input type="time" id="time" class="form-control" name="time" required><br>

        <label for="doctor">Doctor:</label>
        <select id="doctor" name="doctor" class="form-control" required>
            <option value="">-- Select a doctor --</option>
            <option value="Dr. Smith">Dr. Smith</option>
            <option value="Dr. Johnson">Dr. Johnson</option>
            <option value="Dr. Williams">Dr. Williams</option>
        </select><br>

        <button type="submit" class="btn btn-primary">Book Appointment</button>
        </form>
    </div>
</div>
    <div class="services" id="services">
        <h2>Our Services</h2>
        <p>We offer a wide range of medical services to help you stay healthy and happy.</p>
        <div class="row">
            <div class="column">
                <div class="card">
                    <img src="" />
                    <h3>Dental Braces</h3>
                    <p>This is one of our special dental treatment. Dental braces for students have a lot of freebies and discounts
                        dental braces for non students have a lot of freebies.</p>
                </div>
                <div class="card">
                    <img src="" />
                    <h3>Dental Veneers</h3>
                    <p>can be used to correct a wide range of dental issues,
                        such as: teeth that are stained and can't be whitened by bleaching. chipped or worn teeth.</p>
                </div>
                <div class="card">
                    <img src="" />
                    <h3>Wisdom Tooth Removal</h3>
                    <p>This is our special dental services that is offer in very affordable and less pain treatment.</p>
                </div>
                <div class="card">
                    <img src="" />
                    <h3>Root Canal Treatment</h3>
                    <p>Painful but hard to let go of your tooth? Then you need this!.</p>
                </div>
                <div class="card">
                    <img src="" />
                    <h3>Whitening/Bleaching</h3>
                    <p>Yellow teeth? Let's make it Brightening White!</p>
                </div>
                <div class="card">
                    <img src="" />
                    <h3>Dentures</h3>
                    <p>Many kind of denture materials are available, Flexible, Stay Plate, Ivocap, Casted Clasp & Many more....</p>
                </div>
                <div class="card">
                    <img src="" />
                    <h3>Dental Xray</h3>
                    <p>Dental X-ray Available. Panoramic X-ray Periapical X-ray</p>
                </div>
                <div class="card">
                    <img src="" />
                    <h3>Restoration/Pasta</h3>
                    <p>Durable and worry free restoration!</p>
                </div>
                <div class="card">
                    <img src="" />
                    <h3>Fit and Fissure Sealant</h3>
                    <p>Preventive Dental services for our Toddlers/kids!</p>
                </div>
                <div class="card">
                    <img src="" />
                    <h3>Bunot Dental Extraction</h3>
                    <p>One of our Dental special services that less pain and worry free!</p>
                </div>
                <div class="card">
                    <img src="" />
                    <h3>Cleaning/Oral Prophylaxis</h3>
                    <p>Dental cleaning is the best way to prevent cavities and permanent damage to teeth. Have it every 6 months for longer natural tooth.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="specialization" id="special">
        <h2>Areas of Specialization</h2>
        <p>Our team of doctors and specialists have expertise in a variety of areas to provide the best care possible.</p>
        <div class="row">
            <div class="column">
                <div class="card">
                    <h3>General Dentistry</h3>
                    <p>Lorem ipsum dolor sit amet, qui minim labore adipisicing minim sint cillum sint consectetur cupidatat.</p>
                </div>
                <div class="card">
                    <h3>Orthodontics</h3>
                    <p>Lorem ipsum dolor sit amet, qui minim labore adipisicing minim sint cillum sint consectetur cupidatat.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonial" id="testimonials">
        <h2>Testimonials</h2>
        <div class="row">
            <div class="column">
                <div class="card">
                    <h3>"Highly recommended, mabait ang staff at magaling ang mga Doctor nila. thanks po Doc Debbie! you can message and book an appointment thru FB page, hassle free din sa payment dahil Available sila via online payment.”</h3>
                    <h4>- Nel Galachico -</h4>
                    <p>Patient</p>
                </div>
            </div>
        </div>
    </div>
    <div class="contact" id="contact">
        <h2>Contact Us</h2>
        <p>Get in touch with us to schedule an appointment or for any questions or concerns.</p>
        <form action="" method="POST">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Send Message</button>
        </form>
    </div>
    <div class="footer" id="about">
        <div class="footer1">
            <h4>About Us</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto animi, similique facere eius voluptatem sed veritatis pariatur dolores iste exercitationem beatae cumque odio fugit laborum voluptas, sapiente aperiam aspernatur nam.</p>
        </div>
        <div class="footer2">
            <h4>Contact Us</h4>
            <ul>
                <li><a href="https://goo.gl/maps/s5NMUE9YYfW15LiH9" target="_blank"><i class='bx bxs-map'></i>6000 Gen T. De Leon Rd. Brgy. Gen. T. De Leon Valenzuela City, Valenzuela, Philippines, 1442</a></li>
                <li><a href="tel:639176621200"><i class='bx bxs-phone' ></i>0917-662-1200</a></li>
                <li><a href="mailto:dentfixdc@gmail.com"><i class='bx bxs-envelope' ></i>dentfixdc@gmail.com</a></li>
            </ul>
        </div>
        <div class="footer3">
            <h4>Follow Us</h4>
            <ul>
                <li><a href="https://tinyurl.com/ysevby9d" target="_blank"><i class='bx bxl-facebook-circle' ></i>Dentfix Dental Clinic</a></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>
    <div class="foot">
        <hr>
        <p>&copy; 2023 Dentifix Dental Clinic. All rights reserved.</p>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script>
            // Get the modal
            var modal = document.getElementById("appointmentModal");

            // Get the button that opens the modal
            var btn = document.getElementById("appointmentButton");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks the button, open the modal
            btn.onclick = function() {
            modal.style.display = "block";
            }
            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
            modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
            if (event.target == modal) {
            modal.style.display = "none";
            }
        }
    </script>
</body>
</html>
