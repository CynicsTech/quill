<?php
   //connect database
   $conn = mysqli_connect('localhost', 'root','','quizApp_db');

    //store values
    if(isset($_POST['button'])){

         //pull form attributes to register user information
    $username = $_POST['username'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $password = $_POST['password'];

     $query = 'INSERT INTO user_info (username, name, surname, password)
            VALUES ("$username","$name","$surname","$password")';
      

    
}
