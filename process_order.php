<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $company = htmlspecialchars($_POST['company']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $billto_name = htmlspecialchars($_POST['billto-name']);
    $billto_address = htmlspecialchars($_POST['billto-address']);
    $billto_city = htmlspecialchars($_POST['billto-city']);
    $billto_state = htmlspecialchars($_POST['billto-state']);
    $billto_zip = htmlspecialchars($_POST['billto-zip']);
    $property_address = htmlspecialchars($_POST['property-address']);
    $property_city = htmlspecialchars($_POST['property-city']);
    $property_state = htmlspecialchars($_POST['property-state']);
    $property_zip = htmlspecialchars($_POST['property-zip']);
    
    // Email details
    $to = "survey@jahnkeandjahnke.com"; // Replace with your email address
    $subject = "New Order Submission from $name";
    $message = "Name: $name\n";
    $message .= "Company: $company\n";
    $message .= "Email: $email\n";
    $message .= "Phone: $phone\n\n";
    $message .= "Bill To:\n";
    $message .= "Name: $billto_name\n";
    $message .= "Address: $billto_address\n";
    $message .= "City: $billto_city\n";
    $message .= "State: $billto_state\n";
    $message .= "Zip Code: $billto_zip\n\n";
    $message .= "Property Address:\n";
    $message .= "Address: $property_address\n";
    $message .= "City: $property_city\n";
    $message .= "State: $property_state\n";
    $message .= "Zip Code: $property_zip\n";
    
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Order submitted successfully.'); window.location.href = 'onlineform.html';</script>";
    } else {
        echo "<script>alert('There was an error submitting your order. Please try again.'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('Invalid request method.'); window.history.back();</script>";
}
?>
