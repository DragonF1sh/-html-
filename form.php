<?php
    
    $username = "random";
    $password = "abc123";
    $databace = "chrisContact";
    $server = "localhost";

    $conection = new mysqli($server, $username, $password, $databace);

    $query = $conection->prepare("INSERT INTO chrisContacts(Name, Email, PhoeNumber, Notes) VALUES(?, ?, ?, ?)");

    $query = $connection->prepare("select(Name, Email, PhoneNumber, Notes) from contacts");

    while($row = $resut->fetch_assoc()){
        echo($row["Name"]);
        echo($row["Email"]);
        echo($row["PhoneNumber"]);
        echo($row["Notes"]);
    }
?>