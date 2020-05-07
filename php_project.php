<?php 
    define("TITLE", "PHP Project"); 

    if( isset( $_POST["fix_submit"]) ) {
        // grab value from textarea in $_POST collection
        // make all letters lowercase using strtolower() function
        // store in a variable
        $clickBait = strtolower( $_POST["clickbait_headline"] );
        
        // store array of clickbait-sounding words or phrases
        $a = array(
            "scientists",
            "doctor",
            "hate",
            "stupid",
            "weird",
            "simple",
            "tricked",
            "shocked me",
            "you'll never believe",
            "hack",
            "epic",
            "unbelievable"
        );
        //  store array of replacement words or phrases
        /*  make sure each replacement is in the same order as the 
            clickbait word you are trying to replace */
        $b = array(
            "so-called scientists",
            "so-called doctors",
            "aren't threatened by",
            "average",
            "completely normal",
            "ineffective",
            "method",
            "is no different than the doctors",
            "you won't really be surprised by",
            "slightly improved",
            "boring",
            "normal"
        );
        
        //  use str_replace() function to replace words
        //  uppercase the first letter in everyword using ucworks() function
        //  store in a variable
        
            $honestHeadline = str_replace( $a, $b, $clickBait );
    }
?>

<!Doctype html>

<html>
   <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title><?php echo TITLE; ?></title>
  </head>
  <body>
    <div class="container">
        <h1><?php echo TITLE; ?></h1>
     <!-- REVIEW: Arrays allows you to store multible values in a varible -->
        <p class="lead">Hate clickbait? Turn those annoying headlines into realistic and honest ones using a simple program.</p>
        
        <div class="row col-md-8 offset-md-2">
            <form class="col-sm-10 col-sm-offset-2" action="" method="post">
                <textarea placeholder="Paste clickbait headline here..." class="form-control input-lg" name="clickbait_headline"></textarea><br>
                <button type="submit" class="btn btn-primary btn-lg float-right" name="fix_submit">Make Honest!</button>
            </form>
        
        </div>
           <?php
            if (isset( $_POST["fix_submit"]) ) {
                echo $honestHeadline;
            };
        
            ?>
      
    </div> <!-- container -->
      
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>