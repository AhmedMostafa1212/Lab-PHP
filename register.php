<html>

<head>
  <meta charset="utf-8">
  <title>Stackfindover: Sign in</title>
  <link rel="stylesheet" href="css/registeration_style.css">

</head>


<body>


  

  <div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
      <div class=" box-background--white padding-top--64">
        <div class="loginbackground-gridContainer">
          <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
            <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
            </div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
            <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
            <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
            <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
            <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
            <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
            <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
            <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
            <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
          </div>
        </div>
      </div>
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
          <h1><a href="#" rel="dofollow">Application Name:AAST_BIS Class Registeration</a></h1>
        </div>
        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              <span class="padding-bottom--15"> *Required Field</span>






  <form id="stripe-login" action="<?php $_PHP_SELF ?>" method="POST">
    <div class="field padding-bottom--24">
      <label for="name">Name</label>
      <input type="text" name="name">
    </div>

    <div class="field padding-bottom--24">
      <label for="password">Password</label>
      <input type="password" name="password">
    </div>

    <div class="field padding-bottom--24">
      <label for="password">Config a Password</label>
      <input type="password" name="re_password">
    </div>

    <div class="field padding-bottom--24">
      <!-- <input type="submit" name="submit" value="Continue"> -->
      <button type="submit">Continue</button>
    </div>


  </form>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>

</body>








<?php
include('index5.php');
#1
//    open & close connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $errors = array('Name_u' => '', 'Password_u' => '', 're_Password_u' => '');


  if (empty($_POST['name'])) {
    $errors['Name_u'] = "Error The Name Is Required";
    echo $errors['Name_u'];
  }
  if (empty($_POST['password'])) {
    $errors['Password_u'] = "Error The Password Is Required";
    echo $errors['Password_u'];
  }
  $p = $_POST['password'];
  $re_p = $_POST['re_password'];
  if ($p != $re_p) {
    $errors['re_Password_u'] = "Error The Password Is Required";
    echo "<span style='color:red ; font-weight:bold;'>Error Not The Same Password</span>";
  }
  else{
    mysqli_select_db($conn, $dbname);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);
    $re_pass = mysqli_real_escape_string($conn, $_POST['re_password']);
  
    $sql = "INSERT INTO user_info(Name , Password , Re_Password) 
   VALUES ( '$name', '$pass' , '$re_pass' )";
    $retval = mysqli_query($conn, $sql);
    header('Location:login.php');
    if (!$retval) {
      die('Could not insert to table: ' . mysqli_error($conn));
    }
   
  } 

  mysqli_close($conn);
}


?>

</html>