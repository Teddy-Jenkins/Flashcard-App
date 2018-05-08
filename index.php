<?php

    include('connection.php');

    $query = "SELECT * from users";
    $result = mysqli_query( $conn, $query );

    if ( mysqli_num_rows($result) > 0 ) {
        
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row["id"] ." ". $row["username"];
        }
    }

?>