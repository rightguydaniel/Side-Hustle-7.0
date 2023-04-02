<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <?php
        include "header.php";
    ?>
   <h1>Register</h1><br><br>
    <form action="process.php" method="post"> 
    
        <label for="">First name :</label>
        <input type="text" name="first_name"><br><br>

        <label for="">Last name :</label>
        <input type="text" name="last_name"><br><br>

        <label for="">Username :</label>
        <input type="text" name="user_name"><br><br>

        <label for="">Email :</label>
        <input type="email" name="email"><br><br>

        <label for="">Gender :</label>
        <select name="gender" id="">
            <option value="">Select gender</option>
            <option value="M">MALE</option>
            <option value="F">FEMALE</option>
        </select><br><br>

        <label for="">Password :</label>
        <input type="password" name="pass"><br><br>

        <label for="">Confirm password :</label>
        <input type="password" name="confirm_pass"><br><br>

        <input type="submit" value="Register" name="register_user">
    </form>
</body>
</html>
