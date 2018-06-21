<?php
if (isset($_POST['submit'])) {
  session_start();

$_SESSION['question'] = $_POST['question'];
$_SESSION['answer'] = $_POST['answer'];

foreach ($_SESSION['question'] as $key => $value) {
  echo $value . "<br>";
}

//header('location: viewflashcards.php');
}

/*
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
*/
?>
    
    <!doctype html>
    <html lang="en">
      <head>
      <title><?php echo TITLE; ?></title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script>
          $(document).ready(function(e){
            //Variables 
            var html  = '</p><input type="text" name="question[]" class="form-control  id="question" value="questions1"><input type="text" name="answer[]" id="answer" class="form-control" value="answer1">';

            // Add Inputs
            $("#add").click(function(e){
              $("#box").append(html);
            });

          });
        </script>
      </head>
      <body>


    <div id="container">
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="box">
    <input type="text" name="question[]" id="question" class="form-control">
    <input type="text" name="answer[]" id="answer" class="form-control">
    
    <button type="button" href="#" name="add" value="" class="btn btn-outline-success float-right" id="add" >New Card</button>
    </div>
    </p>
    <input type="submit" name="submit" value="submit" class="btn btn-primary btn-lg pull-right" >Flip Card</input>
    </form>




        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      </body>
    </html>