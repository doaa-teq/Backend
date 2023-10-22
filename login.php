<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Images Admin | Login/Register</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">>
            
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" name="login" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="Password" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Log in</a>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-file-image-o"></i></i> Images Admin</h1>
                  <p>©2016 All Rights Reserved. Images Admin is a Bootstrap 4 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
            <?php
           if ($_SERVER["REQUEST_METHOD"] =="POST"){
           $name =$_REQUEST['login'];
          if(empty($name)){
        echo "name is empty";
        }else{
        echo $name;
        }
        $pass =$_REQUEST['password'];
          if(empty($pass)){
        echo "password is empty";
        }else{
        echo $pass;
        }
      }
      ?>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" name="name" placeholder="Fullname" required="" />
              </div>
              <div>
                <input type="text" class="form-control" name="Username" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" name="Email" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="Password" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" name="send" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-file-image-o"></i></i> Images Admin</h1>
                  <p>©2016 All Rights Reserved. Images Admin is a Bootstrap 4 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
            <?php
           if ($_SERVER["REQUEST_METHOD"] =="POST"){
           $name =$_REQUEST['name'];
          if(empty($name)){
        echo "name is empty";
        }else{
        echo $name;
        }
        $user =$_REQUEST['Username'];
          if(empty($user)){
        echo "Username is empty";
        }else{
        echo $user;
        }
        $Email =$_REQUEST['Email'];
          if(empty($Email)){
        echo "Email is empty";
        }else{
        echo $Email;
        }
        $pass =$_REQUEST['Password'];
          if(empty($pass)){
        echo "Password is empty";
        }else{
        echo $pass;
        }
      }
      ?>
            
          </section>
        </div>
      </div>
    </div>
  </body>
</html>