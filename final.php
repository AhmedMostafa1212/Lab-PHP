<?php
include('index5.php');

echo "<span>HI</span>". $_COOKIE['user'];

if($_SERVER["REQUEST_METHOD"]=="POST"){
    setcookie('user' , time()-60);
    setcookie('login' , "NO");
    header('location:login.php');
}

if (count($_COOKIE)  == 0) {
    header('location:login.php');
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <!-- <link rel="stylesheet" href="./css/registeration_style.css"> -->
</head>
<body>


    <form action="<?php $_PHP_SELF?>" method="POST">
    <button type="submit">Sign OUT</button>
</form>


    <div class="nav">
        <ul>
          
        </ul>
      
    </div>
    <center>

    <a href="second_page.html">
        <img src="images/img1.jpg" width="70%" >
    </a>
    
</center>

    <hr>
<center> <p>Copyright 2021 by Noha Saleh 	&#169; .All Rights Reserved</p> </center>
</body>
</html>