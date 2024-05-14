<?php
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];

// Format the email
$to = "varunjm.23@gmail.com";
$subject = "New Form Submission";
$message = "Name: $name\n";
$message .= "Email: $email\n";
$message .= "Contact: $contact\n";

ini_set("SMTP", "smtp.gmail.com");
ini_set("smtp_port", "587");
// Send the email
mail($to, $subject, $message);

// Respond to the AJAX request (optional)
echo "Form submitted successfully.";
?>
