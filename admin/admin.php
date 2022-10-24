<?php

$conn = mysqli_connect('localhost', 'root', '', 'quizApp_db');


$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'admin' and $password == 'passwd') {
    session_start();
    $_SESSION['username'] = session_id();
    ?>

      <script>
        window.alert("Pin and username okay");
      </script>
    <?php
}
