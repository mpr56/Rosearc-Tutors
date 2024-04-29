<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get selected options
    $options = isset($_POST['options']) ? $_POST['options'] : [];
    // Get name and email
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    // Email address to send the form data
    $to = "max.preet.27@gmail.com";
    $subject = "New enquiry for Rosearc Tutoring";
    
    // Build the message
    $message = "Name: " . $name . "\n";
    $message .= "Email: " . $email . "\n";
    $message .= "Options:\n";
    foreach ($options as $option) {
        $message .= "- " . $option . "\n";
    }
    
    // Send the email
    mail($to, $subject, $message);
    
    // Redirect back to the thank you page
    header("Location: thank_you.html");
    exit;
} else {
    // Redirect to the enquiry form if accessed directly
    header("Location: enquiry_form.html");
    exit;
}

