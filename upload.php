<!DOCTYPE html>
<html>
    <head>
        <title>WebArt</title>
        <link href="https://fonts.googleapis.com/css?family=Poppins:200|Raleway:100" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" type="text/css" href="includes/styleLayout1.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <script>
            $( function() {
                var availableTags = [
                    "Comic",
                    "Marvel",
                    "The Flash DC Gallery",
                    "Fantasy Gallery",
                    "Creatures Gallery",
                    "The Box Gallery",
                    "Political Gallery",

                ];
                $( "#tag" ).autocomplete({
                    source: availableTags
                });
            } );
        </script>
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
      <div id="wrapper-al">
          <header>
    	       <a href="index.html" id="logo"></a>
             <nav>
               <ul>
                 <li><a href="#" target="_blank" class="selectedButton">A R T I S T S</a></li>
                 <li><a href="#" target="_blank">G A L L E R I E S</a></li>
                 <li><a href="#" target="_blank">A B O U T - U S</a></li>
                 <li><a herf="#" target="_blank">U P L O A D</a></li>
               </ul>
             </nav>
             <article id="utilities2">
               <ul>
                 <li>
                 <img src="images/PastedGraphic-1.png">
                 <section>Hi Gal!</section>
                 <li>
                 <li><a href="#" target="_blank"><img src="images/chat.png"></a></li>
                 <li><a href="#" target="_blank"><img src="images/menu.png"></a></li>
               </ul>
             </article>
          </header>
          <main>
          <section id="first">
            <p>Home > Profile</p>
            <h2>Let's get you started !</h2>
            <img src="images/2.png">
            <span>1/3</span>
              <form action="db.php" method="post">
            <section id="introduction">
              <section>
                <label for="name">Name of ArtWork</label>
                <input type="text" name="name" placeholder="Fill in your name of ArtWork" id="name">
              </section>
              <section>
                <label for="description">Description</label>
                <input type="text" name="description" placeholder="Describe your ArtWork" id="description">
              </section>
            </section>
            <a href="#second" ><img src="images/icons8-expand-arrow-40.png"></a>
          </section>
          <section id="second">
            <img src="images/3.png">
            <span>2/3</span>
              <div class="ui-widget">
            <label for="tags">Choose a gallery:</label>
            <input type="text" name="galleryb" id="tag" placeholder="search">

                  <?php
                  echo "<ul>";

                  while ($row = mysqli_fetch_assoc($result)) {
                  echo "<li><h2>" . $row["title"] . "</h2><h3>" . $row["des"] . "</h3><img " . "src='" . $row["image"] . "'>"."</li>";
                  }

                  echo "</ul>";

                  mysqli_free_result($result);

                  ?>
              </div>
          </section>
          <section id="third">
              <img src="images/Group 337.png">
          <img src="images/4.png">
              <button class="submit" type="submit" value="Send"><img src="images/buttonFinish.png" width="114"
                                                                     height="31"></button>
          </section>
              </form>
          </main>
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
    <script src="includes/upload.js"></script>
    </body>
</html>
<?php

mysqli_close($conn);
?>
