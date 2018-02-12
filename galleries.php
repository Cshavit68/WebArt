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

    echo "<ul>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<li><h2>" . $row["title"] . "</h2><h3>" . $row["des"] . "</h3><img" . "src='" . $row["image"] . "'>"."</li>";
    }

    echo "</ul>";

mysqli_free_result($result);