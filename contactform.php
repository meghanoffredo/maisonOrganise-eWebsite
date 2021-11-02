// PHP Form to collect contact form submission

<?php

if (isset($_POST['submit'])) {
    $firstLastName = $_POST['first-last-name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $request = $_POST['request'];
    $preferredContact = $_POST['preferred-contact'];

    $mailTo = "hello@meghanoffredo.com"; // Send to work email
    $headers = "From: Maison Organisée";
    
    mail ($firstLastName, $email, $phone, $request,$preferredContact);
    header("Location: index.php?mailsend");
}

?>