<?php
session_start();

$thequestion = $_SESSION['question'];

echo $thequestion;

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>


    <button type="button" name="button" value="button" class="btn btn-primary btn-lg pull-right" >Flip Card</button>



    <p></p>      
<script type="text/javascript">
    $(document).ready(function(){
        $("button").click(function(){

            $.ajax({
                type: 'POST',
                url: 'functions.php',
                success: function(data) {
                    $("p").text(data);

                }
            });
   });
});
</script>
    <!-- Create a link through submit buttom on index.php that links to this page and then displays flash cards  :D -->
    
</body>
</html>