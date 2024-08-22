<?php


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us - Marina Mall</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contact-container">
        <h1 class="center">Contact Us</h1>
        <form id="contactForm" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email ID:</label>
            <input type="email" id="email" name="email" required>

            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit" name="submit">Submit</button>
        </form>
        <div class="map-container">
            <h2>Our Location</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3890.1166026338956!2d80.22634537436393!3d12.835741017843771!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525a5ed3d3509d%3A0x51ba8d5c2f099ebb!2sTHE%20MARINA%20MALL!5e0!3m2!1sen!2sin!4v1724230749356!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
        </div>
    </div>

    <script src="script.js"></script>
    
</body>
</html>

<?php
 if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO marinamall (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Message sent successfully!');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
 }
?>
