<?php
// this is a comment
# this is also a comment

// this prints
    echo("Hello");
    echo "world";

// this is a var
    $variable = 10;

// this prints a variable
    echo($variable);

// cancat 
    $variable = $variable . "10";
    $variable .= "10";

    $array = array("Troy","Tyler","Mii","Nathan");
    echo("" . $array[0] . "" . $array[1] . "" . $array[2] . "" . $array[3] .)


// print with for loops
    for(si = 0; $i < sizeof($array); $i++) {
        echo($array[$i]);
    }

// print with while loops
    $i = 0;
    while($i < 10; ) {
        echo($array[$i]);
        $i++
    }

// functions
    function myfunction($array) {
        echo($array[0]);
    }

    myfunction($array);

// get a GET var    
    echo($_GET["userID"]);
    echo($_POST["userID"]);

// settign up mysql
    $username = "<yourusername>";
    $password = "<yourpassword>";
    $databace = "<yourdatabace>";
    $server = "<localhost>";

    $connection = new mysqli($username)

    $query=$connection->prepare("INSERT INTO conectList(name, phoenumber) VALUES(?, ?)");

    $query->bind_param("ss", "nathan", "911");

    $query->execute();

    $query = $connection->prepare("select (name, phonenumber) from contactlist");

    $resut = $query->get_result();

    while($row = $resut->fetch_assoc()){
        echo($row["name"]);
        echo($row["phonenumber"]);
    }

?>