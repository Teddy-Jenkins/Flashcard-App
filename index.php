<?php
if (isset($_POST['submit'])) {
  session_start();

$_SESSION['question'] = htmlentities($_POST['question']);
$_SESSION['answer'] = htmlentities($_POST['answer']);

header('location: viewflashcards.php');
}


include('connection.php');

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

if ( mysqli_num_rows($result) > 0) {
    
    while ($row = mysqli_fetch_assoc($result)) {
      echo $row["email"];
    }

  }
  else{
    echo "didnt work!";
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



      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="question">
    <input type="text" name="answer" id="">
    <input type="submit" name="submit" value="submit" class="btn btn-primary btn-lg pull-right" >Flip Card</input>
    </form>




        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      </body>
    </html>