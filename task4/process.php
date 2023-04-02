<?php
    include "header.php";
    if(isset($_POST['register_user'])){
        $first_name =$_POST['first_name'];
        $last_name =$_POST['last_name'];
        $user_name =$_POST['user_name'];
        $email =$_POST['email'];
        $gender =$_POST['gender'];
        $pass =$_POST['pass'];
        $confirm_pass =$_POST['confirm_pass'];

        //checking if password and confirm password match
        if($pass !== $confirm_pass){
            exit ("<p>Password do not match</p> <br> <a href='index.php'> Go back </a>");
        }

        /*
        table name: users
        checking if username is unique
        */
        $username_exist = mysqli_query($connect, "SELECT * FROM users WHERE uname='$user_name'");
        if(mysqli_num_rows($username_exist) > 0) {
            exit ("<p>Username already exist</p><a href='index.php'>go back</a>");
        }
        
        //checking if email is unique
        $email_exist = mysqli_query($connect, "SELECT * FROM users WHERE email='$email'");
        if(mysqli_num_rows($email_exist) > 0) {
            exit ("<p>Email already exist</p><a href='index.php'>go back</a>");
        }

        //saving user details to database
        $cryptic_pass = md5($pass);
        $insert_user = mysqli_query($connect, "INSERT INTO users(fname, lname, uname, email, gender, password) VALUES('$first_name','$last_name', '$user_name', '$email', '$gender','$cryptic_pass')" );
        if ($insert_user) {
            header("Location: dashboard.php");
        }

    }
?>
