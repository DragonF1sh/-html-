<?php
    
    $username = "random";
    $password = "abc123";
    $databace = "WebsightContact";
    $server = "localhost";

    $conection = new mysqli($server, $username, $password, $databace);

    $query = $conection->prepare("INSERT INTO WebsightContact(name, email, phoeNumber, messege) VALUES(?, ?, ?, ?)");

    $query = $connection->prepare("select(name, email, phoneNumber, Nomessegetes) from contacts");

    while($row = $resut->fetch_assoc()){
        echo($row["Name"]);
        echo($row["Email"]);
        echo($row["PhoneNumber"]);
        echo($row["messege"]);
    }
?>