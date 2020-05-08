<?php 
// functions.php

    function checkForClickBait() {
        // grab value from textarea in $_POST collection
        // make all letters lowercase using strtolower() function
        // store in a variable
        $clickBait = strtolower( $_POST["clickbait_headline"] );
        
        // store array of clickbait-sounding words or phrases
        $a = array(
            "scientist",
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
            "so-called scientist",
            "so-called doctor",
            "aren't threatened by",
            "average",
            "completely normal",
            "ineffective",
            "method",
            "is no different than the others",
            "you won't really be surprised by",
            "slightly improved",
            "boring",
            "normal"
        );
        
        //  use str_replace() function to replace words
        //  uppercase the first letter in everyword using ucworks() function
        //  store in a variable
        
            $honestHeadline = str_replace( $a, $b, $clickBait );
        
        // return an array of the variables so we can access them globally
        return array($clickBait, $honestHeadline);
    };

    function displayHonestHeadline( $x, $y ) {
        // use ucwords() function to uppercase first letter of every work
        // echo the variable on screen
        echo "<strong class='text-danger'>Original Headline</strong><h4>".ucwords($x)."</h4><hr>";

        // echo the honest headline on screen
        echo "<strong class='text-success'>Honest Headline</strong><h4>".ucwords($y)."</h4>";
                };
?>