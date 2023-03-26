<?php
    //connecting to database
    //database username: root
    //database has no password
    //database name: project
    $my_database = mysqli_connect("localhost", "root", "", "project");
    if ($my_database) {
        echo "connected to database";
    } else {
       echo "not connected to databse";
   };
?> 
