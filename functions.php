<?php
    function flashcards(){
        
        if ( isset( $_POST["flashcard_submit"])) {
            $flashcardQuestion = $_POST["flashcard_question"];
            $flashcardAnswer = $_POST["flashcard_answer"];

            array(
            $_POST["flashcard_question"],
            $_POST["flashcard_answer"],
            );
            

            echo $flashcardQuestion;

            return array($flashcardQuestion, $flashcardAnswer);

        }
    }
    function showanswer( $foo, $bar){
        echo $foo;

        echo $bar;
    }
    

?>