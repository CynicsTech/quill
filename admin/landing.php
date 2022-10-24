<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- forma -->
  <form action="admin.php" method="post">
  <div class="container">
    <div class="head">
      <h1>Admin Login</h1>
    </div>
    <div class="inputs">
      <label for="username">Enter your username</label>
      <input type="text" name="username" placeholder="username" required autocomplete="off"> 
    </div>
    <div class="inputs">
      <label for="password">Enter your password</label>
      <input type="password" name="password" placeholder="password" required autocomplete="off">
    </div>
    <div class="inputs">
     
      <input type="submit" name="button" value="LOGIN">
    </div>
  </div>
</form>   
</body>
</html>