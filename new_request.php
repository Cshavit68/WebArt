<!DOCTYPE html>
    <html>
        <head>
            <title>WebArt</title>
            <script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox-plus-jquery.js"></script>
            <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.css" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Poppins:200|Raleway:100" rel="stylesheet">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
            <link rel="stylesheet" type="text/css" href="includes/styleLayout1.css">
        </head>
        <body>
        <?php


        define("DBHOST", "182.50.133.55");
        define("DBUSER", "auxstudDB7c");
        define("DBPASS", "auxstud7cDB1!");
        define("DBNAME", "auxstudDB7c");

        $conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);


        if (mysqli_connect_errno()) {
            die("DB connection failed:" . mysqli_connect_error() . "(" . mysqli_error() . ")");
        }



        $query1= "SELECT * FROM user_tb_galleries_240 ";
        $result= mysqli_query($conn, $query1);




        if(!$result){
            die("DB query failed.");
        }
        ?>
<div id="wrapper-al-admin-request">
    <header>
        <a href="index.html" id="logo"></a>
        <nav>
            <ul>
                <li><a href="#" target="_blank" class="selectedButton">A R T I S T S</a></li>
                <li><a href="#" target="_blank">G A L L E R I E S</a></li>
                <li><a href="#" target="_blank">A B O U T - U S</a></li>
                <li><a href="upload.php" target="_blank">D A S H B O A R D</a></li>
            </ul>
        </nav>
        <article id="utilities2">
            <ul>
                <li>
                    <img src="images/Image3.png">
                    <section>Hi Galit!</section>
                <li>
                <li><a href="#" target="_blank"><img src="images/chat.png"></a></li>
                <li><a href="#" target="_blank"><img src="images/menu.png"></a></li>
            </ul>
        </article>
    </header>
    <aside>
        <section id="brad">
            <p>Home > Profile</p>
            <ul>
                <li></li>
            </ul>
        </section>
        </section>

        <ul>
            <li><a href="#" target="_blank">Dashboard</a></li>
            <li><a href="#" target="_blank">Your galleries</a></li>
            <li><a href="#" target="_blank">Your exhaustion</a></li>
        </ul>
    </aside>
    <div id="request">
        <h1>Dasboard</h1>
        <?php

        $query= "SELECT * FROM tb_requests_240 WHERE name='Marvel'";
        $result= mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "Name of ArtWork: " . $row["name"] . "<br>"
                    . "Description: " . $row["description"] . "<br>" . "Name of gallery: " . $row["gallery"] . "<br>" . "ArtWork:" . "<img src='" . $row["fileToUpload"] . "'>" . "<br>";
            }
        }
        ?>
    </div>
    <footer>
        <section>
            <h3>
                So what are you waiting for?
            </h3>
            <h3>
                Join us, make your dream become real!
            </h3>
        </section>
        <section>
            <section>
                <a href="https://twitter.com/" target="_blank"><img src="images/icon-twitter.png" alt="Twitter icon"></a>
                <a href="https://www.messenger.com/" target="_blank"><img src="images/icon-facebook-messenger.png" alt="Twitter icon"></a>
                <a href="https://www.facebook.com/" target="_blank"><img src="images/icon-facebook.png" alt="Twitter icon"></a>
            </section>
            <span>Copyright 2017 WebArt&reg;</span>
        </section>
    </footer>
</div>
        <script src="includes/scripts.js"></script>
        <script src="includes/script2.js"></script>
        <script src="includes/db.json"></script>
</body>
</html>
<?php

mysqli_close($conn);
?>