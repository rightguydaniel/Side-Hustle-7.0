<?php
    //assign voter information
    $voter = array( 
        "name" => "ADE", 
        "age" => "17", 
        "card" => "invalid", 
        "ward" => "021" );
    //to check if voter meets the 3 equirement to be eligible to vote
    if($voter["age"] >= "17" && $voter["card"] == "valid" && $voter["ward"] == "020"){
        echo $voter["name"]." is eligible to vote";
    }else{
        echo $voter["name"]." is not eligible to vote because <br>";
        //to check why a voter is not eligible
        //checking voter age
        if($voter["age"] < 18){
            echo "he is below 18 years<br>";
        }else;
        //checking if voter's card is valid
        if($voter["card"] != "valid"){
            echo "Voter's card is invalid<br>";
        }else;
        //checking if voter belong to ward 020
        if($voter["ward"] != "020"){
            echo "Does not belong to ward 020<br>";
        }else;

    };
?>
