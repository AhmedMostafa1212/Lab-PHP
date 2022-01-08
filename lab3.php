

<html>
<head>
  <meta charset="utf-8">
  <title>Stackfindover: Sign in</title>
  <link rel="stylesheet" href="css/registeration_style.css">
</head>

<body>







   <div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
      <div class="loginbackground box-background--white padding-top--64">
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






              <form id="stripe-login" action="<?php $_PHP_SELF?>" method="POST">
                <div class="field padding-bottom--24">
                  <label for="name">Name*</label>
                  <input type="text" name="name">
                </div>
                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="password">E-mail*</label>
                  </div>
                  <input required type="email" id="email" name="email">
                </div>
                <div class="field padding-bottom--24">
                  <label for="group">Group</label>
                  <input type="number" name="group">
                </div>
                <div class="field padding-bottom--24">
                  <label for="details">class Details</label>
                  <textarea name="details" id="" cols="60" rows="5"></textarea>
                </div>

                <div class="field padding-bottom--24">
                  <label for="courses">Select Courses*</label>
                  <select name="courses[]" id="courses" multiple>
                      <option value="php">PHP</option>
                      <option value="js">Javascript</option>
                      <option value="mysql">MYSQL</option>
                      <option value="html">HTML</option>
                  </select>
                </div>

                <div class="field field-checkbox padding-bottom--24 flex-flex align-center">
                  <label for="radio">
                      <label style="margin-right:20px;">Gender*:</label>
                    <input type="radio" value="male" name="radio">male
                    <input type="radio" value="female" name="radio">female
                  </label>
                </div>


                <div class="field field-checkbox padding-bottom--24 flex-flex align-center">
                  <label for="checkbox">
                    <input type="checkbox" name="checkbox">Agree*
                  </label>
                </div>
                <div class="field padding-bottom--24">
                  <input type="submit" name="submit" value="Continue">
                </div>
                

<?php

if(!empty($_POST['name'])&&!empty($_POST['email'])&&!empty($_POST['courses'])&&!empty($_POST['radio'])&&!empty($_POST['checkbox'])){

    if(preg_match("/^[A-Za-z]/",$_POST['name'])){
        echo "Your Name  :".$_POST['name']; echo "<br> <br>";
        
        }
        else{
            echo "<p style='font-weight:bold ;color:red;'>Error Please Enter Your Name In Right Way</p>";
            exit();

        }
        echo "Your E-Mail  :".$_POST['email']; echo "<br> <br>";
        if($_POST['group'] == ""){
            echo "Group : NULL";echo "<br> <br>";
        }
        else{
            echo "Your Group  :".$_POST['group']; echo "<br> <br>";
        }

        if($_POST['details']==""){
            echo "Details : NULL";echo "<br> <br>";
        }
        else{
            echo "Your Details  :".$_POST['details']; echo "<br> <br>";
        }
        
        
        //echo "Your Courses  :".$_POST['courses']; echo "<br> <br>";
        
        if(isset($_POST['courses']))
        {
            // Retrieving each selected option
            foreach ($_POST['courses'] as $subject)
            echo "Courses :". $subject ."<br><br>";echo "<br> <br>";
        }
    else
        echo "Select an option first !!";
    }



else{
    echo "<p style='font-weight:bold ;color:red;'>Error Please Enter All Fields Required</p>";
    exit();
}
?>



              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</body>



</html>
