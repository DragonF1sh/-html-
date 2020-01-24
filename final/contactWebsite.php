<html>

<?php
    $username = "random";
    $password = "abc123";
    $database = "website";
    $server = "localhost";

    $conection = new mysqli($server, $username, $password, $database)
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="Website2.0.css">
    <script src="Calculater2.0.js"></script>
    <script src="Words.js"></script>
    <title>Chris Boos</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Chris Boos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        </div>
    </nav>
    <div class="container blue" id="home">
        <div class="col red">
            <br><br>
            <!-- photo div -->
            <div class="row green mx-auto" style="width: 20%;">
                <img src="https://scontent-sea1-1.cdninstagram.com/v/t51.2885-19/s150x150/72224767_465315287454937_628369976150982656_n.jpg?_nc_ht=scontent-sea1-1.cdninstagram.com&_nc_ohc=UPeuGbBBV_gAX-asfza&oh=5047020b8e9dc23896b034dd798c7062&oe=5EC064D1"
                    width="100%">
            </div>
        </div>
        <div class="col red">
            <div class="row black mx-auto #socialMedia" style="width: 100%;" id="socialMedia">
               <table class="table table-responsive table-dark table-striped">
                   <thead>
                       <tr>
                           <th scope="col">Name</th>
                           <th scope="col">Email</th>
                           <th scope="col">Phone Number</th>
                           <th scope="col">Messege</th>
                       </tr>
                   </thead>
                   <tbody>
                       <?php
                        $query = $conection->prepare("SELECT * FROM websiteContact");
                        $query->execute();
                        $result = $query->get_result();
                        while ($row = $result->fetch_assoc()) {
                            echo("<tr><th scope='row'>" . $row['name'] . "</th>");
                            echo("<th>" . $row['email'] . "</th>");
                            echo("<th>" . $row['phoneNumber'] . "</th>");
                            echo("<th>" . $row['message'] . "</th></tr>");
                        }
                       ?>
                   </tbody>
               </table>
            </div>
        </div>
    </div>
</body>

<footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(
            function () {
                $('li a').on('click', function (e) {
                    var targetSec = $(this).attr('href');
                    $('html, body').animate({
                        scrollTop: $(targetSec).offset().top
                    }, 500);
                });
            },
        );
    </script>
</footer>

</html>