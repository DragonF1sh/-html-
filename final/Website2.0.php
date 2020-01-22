<html>

<?php
    $username = "random";
    $pasword = "abc123";
    $databace = "website";
    $server = "localhost";

    $connection = new mysqli($server, $username, $pasword, $databace);
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="Website2.0.css">
    <script src="Calculater2.0.js"></script>
    <script src="Words.js"></script>
    <script src="Nav.js"></script>
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
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pojects">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#socialMedia">Social Media</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
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
            <!-- pharagraph div -->
            <div class="row green mx-auto text-center" style="width: 100%;">
                <p>
                    My name is Chris as you can tell form the name of the website. Im just a guy who is interested in
                    coding and enjoys playing Videogames and watching Anime.
                </p>
            </div>
        </div>
        <div class="col red">
            <!-- git-hub div -->
            <div class="row black mx-auto #socialMedia" style="width: 100%;" id="socialMedia">
                <div class="col-sm brown" style="max-width: 75%;">
                    <h5>
                        Git-Hub
                    </h5>
                    <p>
                        Follow my Git-Hub if you are interseted in any projects I deside to post.
                    </p>
                </div>
                <div class="col-sm brown" style="text-align: right; max-width: 25%;;">
                    <a href="https://github.com/DragonF1sh">
                        <img src="data:image/png;base64,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"
                            width="90px">
                    </a>
                </div>
            </div>
            <!-- instagran div -->
            <div class="row black mx-auto" style="width: 100%;">
                <div class="col-sm brown" style="max-width: 75%;">
                    <h5>
                        Instagram
                    </h5>
                    <p>
                        Follow my Instagram for post about anything.
                    </p>
                </div>
                <div class="col-sm brown" style="text-align: right; max-width: 25%;">
                    <a href="https://www.instagram.com/chris__boos/">
                        <img src="https://instagram-press.com/wp-content/uploads/2019/03/cropped-IG_Glyph_Fill.png"
                            width="90px">
                    </a>
                </div>
            </div>
            <!-- twiter div -->
            <div class="row black mx-auto" style="width: 100%;">
                <div class="col-sm brown" style="max-width: 75%;">
                    <h5>
                        Twiter
                    </h5>
                    <p>
                        Follow my Twiter for me never to tweet anything.
                    </p>
                </div>
                <div class="col-sm brown" style="text-align: right; max-width: 25%;">
                    <a href="https://twitter.com/Dragon_Fish_Tv">
                        <img src="https://mobiledevmemo.com/wp-content/uploads/2014/05/Twitter-Bird.png" width="100px">
                    </a>
                </div>
            </div>
            <!-- mixer div -->
            <div class="row black mx-auto" style="width: 100%;">
                <div class="col-sm brown" style="max-width: 75%;">
                    <h5>
                        Mixer
                    </h5>
                    <p>
                        Follow me on mixer if you want to know when i go live when im playing games.
                    </p>
                </div>
                <div class="col-sm brown" style="text-align: right; max-width: 25%;">
                    <a href="https://mixer.com/DragonF1sh">
                        <img src="http://mixer.com/_latest/assets/images/main/logos/merge-on-black.png" width="100px">
                    </a>
                </div>
            </div>
            <!-- reddit div -->
            <div class="row black mx-auto" style="width: 100%;">
                <div class="col-sm brown" style="max-width: 75%;">
                    <h5>
                        Reddit
                    </h5>
                    <p>
                        Follow me just cause it would be fun I guess, I dont know.
                    </p>
                </div>
                <div class="col-sm brown" style="text-align: right; max-width: 25%;">
                    <a href="https://www.reddit.com/user/DragonFishTV">
                        <img src="https://i.redd.it/rq36kl1xjxr01.png" width="100px">
                    </a>
                </div>
            </div>
        </div>
        <div class="row red mx-auto" style="width: 100%;" id="contact">
            <!-- contact div -->
            <div class="col orange">
                <h4 style="text-align: center;">
                    Have a question?
                </h4>
                <div id="name" class="col-sm">
                    <form action="">
                        Name:<br>
                        <input type="text" name="name" placeholder="Ex: John Doe" style="width: 75%;"><br>
                        E-mail:<br>
                        <input type="text" name="email" placeholder="Ex: John.Doh@example.ca" style="width: 75%;"><br>
                        Phone Number:<br>
                        <input type="text" name="phoneNuber" placeholder="Ex: 8008008000" style="width: 75%;"><br>
                        message:<br>
                        <textarea type="text" name="message" placeholder="Write your question here"
                            style="width: 75%;"></textarea>
                        <br><br>
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
            <!-- map div -->
            <div class="col orange">
                <h4 style="text-align: center;">
                    Where am I?
                </h4>
                <div class="col-sm">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2550.031983918483!2d-119.27046368445899!3d50.272661408040804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x537dd8ecf63f177b%3A0xf46d59c65ff9313c!2sW.L.%20Seaton%20Secondary!5e0!3m2!1sen!2sca!4v1575429897009!5m2!1sen!2sca"
                        width="100%" height="300" frameborder="0" style="border: 03;" allowfullscreen="">
                    </iframe>
                </div>
            </div>
        </div>
        <!-- projects divs-->
        <div class="col red" id="pojects">
            <div clas="row black mx-auto" style="width: 100%; text-align: center;">
                <h2>Projects</h2>
            </div>
            <!-- Calculator div -->
            <div class="row black" style="width: 100%; text-align: center;">
                <!-- text -->
                <div class="col">
                    <br><br>
                    <h4>Calculator</h4><br>
                    <p>You have to go "X1 = X2 = (+,-,*,?)" to get an answer.</p>
                </div>
                <!-- calculator -->
                <div class="col">
                    <div class="container blue">
                        <!-- screen div -->
                        <div class="col " style="height: 20%;">
                            <input class="screen" name="screen" type="text" id="result" value="" disabled>
                        </div>
                        <!-- buttons div -->
                        <div class="col " style="height: 80%;">
                            <div style="height: 100%; width: 100%;">
                                <table class="pink">
                                    <tbody>
                                        <tr>
                                            <!-- Clear -->
                                            <td colspan="4">
                                                <div class="col ">
                                                    <input class="clear" type="button" name="AC" value="Clear">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <!-- 7 -->
                                            <td>
                                                <div class="col ">
                                                    <input class="number" type="button" name="seven" value="7">
                                                </div>
                                            </td>
                                            <!-- 8 -->
                                            <td>
                                                <div class="col ">
                                                    <input class="number" type="button" name="eight" value="8">
                                                </div>
                                            </td>
                                            <!-- 9 -->
                                            <td>
                                                <div class="col ">
                                                    <input class="number" type="button" name="nine" value="9">
                                                </div>
                                            </td>
                                            <!-- / -->
                                            <td>
                                                <div class="col ">
                                                    <input class="operator" type="button" name="devide" value="/">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <!-- 4 -->
                                            <td>
                                                <div class="col ">
                                                    <input class="number" type="button" name="four" value="4">
                                                </div>
                                            </td>
                                            <!-- 5 -->
                                            <td>
                                                <div class="col ">
                                                    <input class="number" type="button" name="five" value="5">
                                                </div>
                                            </td>
                                            <!-- 6 -->
                                            <td>
                                                <div class="col ">
                                                    <input class="number" type="button" name="six" value="6">
                                                </div>
                                            </td>
                                            <!-- x -->
                                            <td>
                                                <div class="col ">
                                                    <input class="operator" type="button" name="times" value="*">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <!-- 1 -->
                                            <td>
                                                <div class="col ">
                                                    <input class="number" type="button" name="one" value="1">
                                                </div>
                                            </td>
                                            <!-- 2 -->
                                            <td>
                                                <div class="col ">
                                                    <input class="number" type="button" name="two" value="2">
                                                </div>
                                            </td>
                                            <!-- 3 -->
                                            <td>
                                                <div class="col ">
                                                    <input class="number" type="button" name="three" value="3">
                                                </div>
                                            </td>
                                            <!-- - -->
                                            <td>
                                                <div class="col ">
                                                    <input class="operator" type="button" name="minus" value="-">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <!-- 0 -->
                                            <td colspan="2">
                                                <div class="col ">
                                                    <input class="number" type="button" name="zero" value="0">
                                                </div>
                                            </td>
                                            <!-- . -->
                                            <td>
                                                <div class="col ">
                                                    <input class="decimal" type="button" name="dot" value=".">
                                                </div>
                                            </td>
                                            <!-- + -->
                                            <td>
                                                <div class="col ">
                                                    <input class="operator" type="button" name="plus" value="+">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <!-- = -->
                                            <td colspan="4">
                                                <div class="col ">
                                                    <input class="equal" type="button" name="equal" value="=">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Just a gap div -->
            <div class="row"><br></div>
            <!-- Mad Lib div -->
            <div class="row black" style="width: 100%; text-align: center;">
                <!-- text -->
                <div class="col">
                    <br><br>
                    <h4>Mad Lib</h4><br>
                    <p>This is a Mad Lib type of thing that refreshes with the webpage to something completly random.
                    </p>
                </div>
                <!-- random words -->
                <div class="col " style="width: 100%;">
                    <div class="col blue" style="max-width: 100%; height: 100%;">
                        <br><br>
                        <p name="words"></p>
                    </div>
                </div>
            </div>
            <!-- Just a gap div -->
            <div class="row blue"><br></div>
        </div>
    </div>
</body>

</html>

<?php
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
        $query->bind_pram('ssss', $name, $email, $phoneNumber, $message);
        $query->execute();
        $result = $query->get_result();

        $connection->close();

        header('Location:Website2.0.php');
    };

    $connection->close();
?>