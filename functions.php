<?php
session_start();
    $answer = $_SESSION['answer'];
    $question = $_SESSION['question'];

    foreach ($question as $key => $value) {
        echo "The question is: " . "$question[$value]" . " and the answer is: " . "$answer[$value]";
    }





    

?>