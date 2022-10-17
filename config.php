<?php
   //connect database
   $conn = mysqli_connect('localhost', 'root','','quizApp_db');

    //test connection
    if($conn->connect_error){
        die("Connection error: " $conn->connect_error);
} else {
    //pull form attributes to register user information
    $username = $_POST['username'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $password = $_POST['password'];

    //store values
    if(isset($_POST['submit'])){
        $query = 'INSERT INTO user_info (username, name, surname, password)
                  VALUES ("$username","$name","$surname","$password")';
      

    }
}

  

?>