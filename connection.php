<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "flashcard_app";

    $conn = mysqli_connect( $server, $username, $password, $db );

    if (!$conn) {
       die("Connection Failed" . mysqli_connect_error());
    }
    echo "Connection Successful!";

?>
