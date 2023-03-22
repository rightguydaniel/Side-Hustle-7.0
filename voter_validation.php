<?php
    $ade = array( 
        "name" => "ADE", 
        "age" => "17", 
        "card" => "invalid", 
        "ward" => "021" );
    if($ade["age"] >= "17" && $ade["card"] == "valid" && $ade["ward"] == "020"){
        echo $ade["name"]." is eligible to vote";
    }else{
        echo $ade["name"]." is not eligible to vote because <br>";
        if($ade["age"] < 18){
            echo "he is below 18 years<br>";
        }else;
        if($ade["card"] != "valid"){
            echo "Voter's card is invalid<br>";
        }else;
        if($ade["ward"] != "020"){
            echo "Does not below to ward 020<br>";
        }else;

    };
?>
