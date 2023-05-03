<?php

include("config.php");
session_start();

if(isset($_SESSION["loggedin"])&&$_SESSION["loggedin"]==true)
{
    $sql="SELECT type FROM login_data WHERE u_name='$username' AND u_password='$password'";
    $conn->query($sql);
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    
if($_SESSION['type']=="Admin")
{
    $_SESSION['type']="Admin";
  header("location:Admin/admin_dash.php");
}
// else if($_SESSION['type']=="user")
// {
//     $_SESSION['type']="user";
//     header("location:welcome2.php");
// }
// else if($_SESSION['type']=="sub")
// {
//     $_SESSION['type']="sub";
//     header("location:welcome3.php");
// }
  exit;
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
$username=$_POST['u_name'];
$password=md5($_POST['u_password']);
$sql="SELECT * FROM login_data WHERE u_name='$username' AND u_password='$password'";
$result=$conn->query($sql);
if($result->num_rows==1)
{
    $row=$result->fetch_assoc();
    if($row['u_name']==$username && $row['u_password']==$password)
    {
      $_SESSION['u_name'] = $row['u_name'];

      $_SESSION['type'] = $row['type'];

      header("Location: Admin/admin_dash.php");

      exit();
    }

    // if($row["type"]=="Admin")
    // {
    //   $_SESSION['type']="Admin";
    //   header("location:Admin/admin_dash.php");
    // }
// else if($row["type"]=="user")
// {
//     $_SESSION['type']="user";
//     header("location:welcome2.php");
  
// }

// else if($row["type"]=="sub")
// {
//     $_SESSION['type']="sub";
//     header("location:welcome3.php");
// }



}
else
{
    echo "<CENTER>invalid username or password!</CENTER>";
}

}

?>

<style>
    html,
body {
  height: 100%;
  overflow-x:hidden;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
  z-index:4;
  
}
.form-signin .checkbox {
  font-weight: 400;
  
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
input[type="email"] {
  height:8vh;
  width:25vw;
  margin-bottom: -1px;
  border-radius: 5px 5px 0px 0px;
  
}
input[type="password"] {
  height:8vh;
  width:25vw;
  margin-bottom: 10px;
  border-radius: 0px 0px 5px 5px;

}
</style>
<link rel="stylesheet" href="assets/bootstrap-4.3.1/css/bootstrap.min.css">
<div class="container">
  <div class="row">
    <div class="col-md-4 mt-5"></div>
    <div class="col-md-4 mt-5 ml-3">
    
    <div class="mt-5 pt-5">
      <form method="post">
      <h1 class="h1 mb-3 font-weight-bold text-center ml-n4">LOGIN</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="u_name" class="form-control mt-5" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="u_password" class="form-control" placeholder="Password" required>

      <br><input class="btn btn-lg btn-primary btn-block" type="submit" value="Sign in" name="u_login" style="width:25vw;">
      </form>
    </div>

      
    </div>
</div>

    </div>
    <div class="col-md-4"></div>
  </div>
</div>

<script src="/assets/bootstrap-4.3.1/js/bootstrap.min.js"></script>

