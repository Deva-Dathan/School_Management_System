<?php
//Bootstrap Implementation
include('header.php');
include('footer.php');

//Database Connection File
include("config.php");
session_start();


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
        if($row['u_role']=='Admin')
        {
          $_SESSION['u_name'] = $row['u_name'];
          $_SESSION['u_role'] = $row['u_role'];

          header("location:Admin/admin_dash.php");
        }
        else if($row['u_role']=='Principal')
        {
          $_SESSION['u_name'] = $row['u_name'];
          $_SESSION['u_role'] = $row['u_role'];

          header("location:Principal/principal_dash.php");
        }
        else if($row['u_role']=='Teacher')
        {
          $_SESSION['u_name'] = $row['u_name'];
          $_SESSION['u_role'] = $row['u_role'];

          header("location:Teachers/teacher_dash.php");
        }
        else if($row['u_role']=='Student')
        {
          $_SESSION['u_name'] = $row['u_name'];
          $_SESSION['u_role'] = $row['u_role'];

          header("location:Student/student_dash.php");
        }

    }
    else
    {
      echo "error";
    }
}
else
{
    echo "<CENTER>
    <div class='alert alert-danger mt-3' role='alert'>
    INVALID USERNAME OR PASSWORD
    </div>
    </CENTER>";
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
<title>Login</title>
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


