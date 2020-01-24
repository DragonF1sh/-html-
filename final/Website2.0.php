<?php
    $username = "random";
    $pasword = "abc123";
    $database = "website";
    $server = "localhost";

    $connection = new mysqli($server, $username, $pasword, $database);

    $name = null;
    $email = null;
    $phoneNumber = null;
    $message = null;

    if (isset($_POST['name'])){
        $name = $_POST['name'];
    }
    if (isset($_POST['email'])){
        $email = $_POST['email'];
    }
    if (isset($_POST['phoneNumber'])){
        $phoneNumber = $_POST['phoneNumber'];
    }
    if (isset($_POST['message'])){
        $message = $_POST['message'];
    }
    if($name && $email && $phoneNumber && $message) {
        $query = $connection->prepare("INSERT INTO websiteContact (name, email, phoneNumber, message) VALUES (?, ?, ?, ?)");
        $query->bind_param('ssss', $name, $email, $phoneNumber, $message);
        $query->execute();
        $result = $query->get_result();

        $connection->close();

        header('Location: Website2.0.html');
    }
?>