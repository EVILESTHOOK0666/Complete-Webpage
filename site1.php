<?php
if(array_key_exists("submit",$_POST))
{
  $link=mysqli_connect("shareddb-i.hosting.stackcp.net","usersdb-3337b84a","opencode10","usersdb-3337b84a");
  $error="";
  if(mysqli_connect_error())
  {
    $error="Database connection failed.Please Retry";
  }
  else
  {
  if(!$_POST['username'])
  {
    $error ="<p>Haha! Very funny punk.</p>You can't leave any field blank";
  }
  if(!$_POST['email'])
  {
    $error ="<p>Haha! Very funny punk.</p>You can't leave any field blank";
  }
  if(!$_POST['password'])
  {
    $error ="<p>Haha! Very funny punk.</p>You can't leave any field blank";
  }
  if($error!="")
  {
    $error='<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <p>Haha! Very funny punk.</p>You cannot leave any field blank
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>';
	}
    else
    {
      $one=mysqli_real_escape_string($link, $_POST['email']);
      $two=mysqli_real_escape_string($link, $_POST['username']);
      $three=mysqli_real_escape_string($link, $_POST['password']);
      $query="SELECT ID from user WHERE email='$one'";
      $result=mysqli_query($link,$query);
      if(mysqli_num_rows($result)>0)
      {
        $error="Email address already taken";
      }
      else
      {
        $query = "INSERT INTO `user` (`name`,`email`, `password`) VALUES ('$two','$one','$three')";

         if (!mysqli_query($link, $query))
         {

        $error = "<p>Could not sign you up - please try again later.</p>";
         }
        else
        {
          $error="Signed up";       
          echo "<script> location.href='http://tusharwebpage3-com.stackstaging.com/site3.php'; </script>";
        	exit;
        }
      }
    }
  }
}

?>
<html lang="en">
  <head>
    <link rel="shortcut icon" href="images/a3.jpg" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Sunflower:300" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <style type="text/css">
		html {
  background: url(images/a5.jpg) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
    }

   body{
     background:none;
     color:white;
     font-family: 'Sunflower', sans-serif;
        }
      h1{
        font-weight:bold;
        }
        #contain1{
          margin-top:50px;
          text-align:center;
          width:50%;
          margin-bottom:20px;
        }
        #contain2{
          width:35%;
          text-align:center;
        }
        form{
          margin-bottom:30px;
        }
      #error{
    
        text-align:center;
      	}
    </style>
    <title>Alienverse</title>
  </head>
  <body>
    <div class="container" id="contain1">
    <h1>Alienverse</h1>
    <h3>Join the search for the extraterrestrials</h3>
  </div>
  <div id="error" class="container">

  <?php echo $error; ?>

	</div>
  <div class="container" id="contain2">
    <form method="post">
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp" placeholder="Enter Username">
    <small id="usernamehelp" class="form-text text-muted">Your Hackername</small>
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" value="" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="remember" name="remember_me">
    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Sign Up!</button>
</form>
  <div>
  Already signed up
  <button class="btn btn-secondary" onclick="newLocation()">Login</button>
</div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript">
    function newLocation() 
    {
    window.location="http://tusharwebpage3-com.stackstaging.com/site2.php";
    }
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>
