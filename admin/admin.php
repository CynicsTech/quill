<?php

$conn = mysqli_connect('localhost', 'root','', 'quizApp_db');

if(isset($_POST['button'])){
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
}

?>