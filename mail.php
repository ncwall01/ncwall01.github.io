<?php if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "ncwall13@gmail.com";
    $headers = "From: ".$email;

    mail($mailTo, $headers, $message, );
    header("Location: index.html?mailsend");
}