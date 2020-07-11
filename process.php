<?php
if(isset($_POST['email'])){
    // Email Information
    $admin_email = "jamesdaniel09874@gmail.com"
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    // send email
    mail($admin_email, "New Form Submissions", $message .' - ' . $phone, "From:" . $email);
    header('Location: https://edgeledgerfinancial.netlify.com/success.html');
}