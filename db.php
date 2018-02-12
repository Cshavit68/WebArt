<?php
function Connect()
{
    define("DBHOST", "182.50.133.55");
    define("DBUSER", "auxstudDB7c");
    define("DBPASS", "auxstud7cDB1!");
    define("DBNAME", "auxstudDB7c");

    $conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);


    if (mysqli_connect_errno()) {
        die("DB connection failed:" . mysqli_connect_error() . "(" . mysqli_error() . ")");
    }


    return $conn;
}


$conn = Connect();
$name = $conn->real_escape_string($_POST['name']);
$description = $conn->real_escape_string($_POST['description']);
$gallery = $conn->real_escape_string($_POST['gallery']);
$fileToUpload = $conn->real_escape_string($_POST['fileToUpload']);
$query   = "INSERT into tb_requests_240 (name,description,gallery,fileToUpload) VALUES('" . $name . "','" . $description . "','" . $gallery . "','" . $fileToUpload. "')";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}

header('Location:Success.html');



$conn->close();
