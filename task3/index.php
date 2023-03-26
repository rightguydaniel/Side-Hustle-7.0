<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TASK 3</title>
</head>
<body>
<?php
    //including header file 
    include "header.php";
    //creating multiplier function
    function multiply($num1, $num2, $num3 = 5){
        $ans = $num1 * $num2 * $num3;
        return $ans;
    }
    echo "<br>".multiply(1, 2);
?>
</body>
</html>
