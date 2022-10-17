<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
  <!-- forma -->
  <form action="config.php" name="submit" method="post">
  <div class="container">
    <div class="head">
      <h1>REGISTER</h1>
    </div>
    <div class="inputs">
      <label for="username">Enter your username</label>
      <input type="text" name="username" placeholder="username" required autocomplete="off"> 
    </div>
    <div class="inputs">
      <label for="name">Enter your name</label>
      <input type="text" name="name" placeholder="name" required autocomplete="off">
    </div>
    <div class="inputs">
      <label for="username">Enter your surname</label>
      <input type="text" name="surname" placeholder="surname" required autocomplete="off">
    </div>
    <div class="inputs">
      <label for="password">Enter your password</label>
      <input type="password" name="password" placeholder="password" required autocomplete="off">
    </div>
    <div class="inputs">
     
      <input type="submit" name="button" value="REGISTER">
    </div>
    <div class="click">
      <p>Click <a href="#">Login</a> if you already have an account</p>
    </div>
  </div>
</form>   
</body>
</html>