<<<<<<< HEAD
<?php 
      define( "TITLE", "Master Flash Cards");
      include("functions.php");
      include("connection.php");

      if( isset( $_POST["flashcard_submit"] ) ) {
        flashcards();
      }

    ?>
    
    <!doctype html>
    <html lang="en">
      <head>
      <title><?php echo TITLE; ?></title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      </head>
      <body>
        <div class="container" >
          <h1><?php echo TITLE; ?></h1>
          <p>If you HATE clickbait headlines, just use this simple tool and reveal the truth before you read.</p>
        

        <div class="row">
            <form class="col-sm-8 col-sm-offset-2"action="" method="post">
            <textarea placeholder="Flashcard Question" 
            class="form-control input-lg" name="flashcard_question"  ></textarea><br>
            <textarea placeholder="Flashcard Answer" 
            class="form-control input-lg" name="flashcard_answer" value="value="<?php echo $_POST['flashcard_answer']; ?>"" ></textarea><br>
            <button type="submit" class="btn btn-primary btn-lg pull-right" name="flashcard_submit" >Make Honest</button>
            <button type="submit" class="btn btn-primary btn-lg pull-right" name="flip_card"  >Flip Card</button>
            </form>
        </div>

        <?php
            if ( isset( $flip_card)) {
                
                $flashcardQuestion = $_POST["flashcard_question"];
            $flashcardAnswer = $_POST["flashcard_answer"];

                showanswer($flashcardQuestion, $flashcardAnswer);
            }
            
        ?>

        </div>
        
          
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      </body>
    </html>
=======
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
>>>>>>> aaf991d58a0b6262cd1f379bd2acc418eafff5f8
