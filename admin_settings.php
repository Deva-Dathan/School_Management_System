<?php
session_start();
include('header.php');
include('footer.php');
include('config.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Settings</title>
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->

<style>
	@import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@400;500;600;700&display=swap');

* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
    overflow-x:hidden;
    overflow-y:hidden;
}

a {
	text-decoration: none;
}

li {
	list-style: none;
}

:root {
	--poppins: 'Poppins', sans-serif;
	--lato: 'Lato', sans-serif;

	--light: #F9F9F9;
	--blue: #3C91E6;
	--light-blue: #CFE8FF;
	--grey: #eee;
	--dark-grey: #AAAAAA;
	--dark: #342E37;
	--red: #DB504A;
	--yellow: #FFCE26;
	--light-yellow: #FFF2C6;
	--orange: #FD7238;
	--light-orange: #FFE0D3;
}

html {
	overflow-x: hidden;
}

body.dark {
	--light: #0C0C1E;
	--grey: #060714;
	--dark: #FBFBFB;
}

body {
	background: var(--grey);
	overflow-x: hidden;
}





/* SIDEBAR */
#sidebar {
	position: fixed;
	top: 0;
	left: 0;
	width: 280px;
	height: 100%;
	background: var(--light);
	z-index: 2000;
	font-family: var(--lato);
	transition: .3s ease;
	overflow-x: hidden;
	scrollbar-width: none;
}
#sidebar::--webkit-scrollbar {
	display: none;
}
#sidebar.hide {
	width: 60px;
}
#sidebar .brand {
	font-size: 24px;
	font-weight: 700;
	height: 56px;
	display: flex;
	align-items: center;
	color: var(--blue);
	position: sticky;
	top: 0;
	left: 0;
	background: var(--light);
	z-index: 500;
	padding-bottom: 20px;
	box-sizing: content-box;
}
#sidebar .brand .bx {
	min-width: 60px;
	display: flex;
	justify-content: center;
}
#sidebar .side-menu {
	width: 100%;
	margin-top: 48px;
}
#sidebar .side-menu li {
	height: 48px;
	background: transparent;
	margin-left: 6px;
	border-radius: 48px 0 0 48px;
	padding: 4px;
}
#sidebar .side-menu li.active {
	background: var(--grey);
	position: relative;
}
#sidebar .side-menu li.active::before {
	content: '';
	position: absolute;
	width: 40px;
	height: 40px;
	border-radius: 50%;
	top: -40px;
	right: 0;
	box-shadow: 20px 20px 0 var(--grey);
	z-index: -1;
}
#sidebar .side-menu li.active::after {
	content: '';
	position: absolute;
	width: 40px;
	height: 40px;
	border-radius: 50%;
	bottom: -40px;
	right: 0;
	box-shadow: 20px -20px 0 var(--grey);
	z-index: -1;
}
#sidebar .side-menu li a {
	width: 100%;
	height: 100%;
	background: var(--light);
	display: flex;
	align-items: center;
	border-radius: 48px;
	font-size: 16px;
	color: var(--dark);
	white-space: nowrap;
	overflow-x: hidden;
}
#sidebar .side-menu.top li.active a {
	color: var(--blue);
}
#sidebar.hide .side-menu li a {
	width: calc(48px - (4px * 2));
	transition: width .3s ease;
}
#sidebar .side-menu li a.logout {
	color: var(--red);
}
#sidebar .side-menu.top li a:hover {
	color: var(--blue);
}
#sidebar .side-menu li a .bx {
	min-width: calc(60px  - ((4px + 6px) * 2));
	display: flex;
	justify-content: center;
}
/* SIDEBAR */





/* CONTENT */
#content {
	position: relative;
	width: calc(100% - 280px);
	left: 280px;
	transition: .3s ease;
}
#sidebar.hide ~ #content {
	width: calc(100% - 60px);
	left: 60px;
}




/* NAVBAR */
#content nav {
	height: 56px;
	background: var(--light);
	padding: 0 24px;
	display: flex;
	align-items: center;
	grid-gap: 24px;
	font-family: var(--lato);
	position: sticky;
	top: 0;
	left: 0;
	z-index: 1000;
}
#content nav::before {
	content: '';
	position: absolute;
	width: 40px;
	height: 40px;
	bottom: -40px;
	left: 0;
	border-radius: 50%;
	box-shadow: -20px -20px 0 var(--light);
}
#content nav a {
	color: var(--dark);
}
#content nav .bx.bx-menu {
	cursor: pointer;
	color: var(--dark);
}
#content nav .nav-link {
	font-size: 16px;
	transition: .3s ease;
}
#content nav .nav-link:hover {
	color: var(--blue);
}
#content nav form {
	max-width: 400px;
	width: 100%;
	margin-right: auto;
}
#content nav form .form-input {
	display: flex;
	align-items: center;
	height: 36px;
}
#content nav form .form-input input {
	flex-grow: 1;
	padding: 0 16px;
	height: 100%;
	border: none;
	background: var(--grey);
	border-radius: 36px 0 0 36px;
	outline: none;
	width: 100%;
	color: var(--dark);
}
#content nav form .form-input button {
	width: 36px;
	height: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	background: var(--blue);
	color: var(--light);
	font-size: 18px;
	border: none;
	outline: none;
	border-radius: 0 36px 36px 0;
	cursor: pointer;
}
#content nav .notification {
	font-size: 20px;
	position: relative;
}
#content nav .notification .num {
	position: absolute;
	top: -6px;
	right: -6px;
	width: 20px;
	height: 20px;
	border-radius: 50%;
	border: 2px solid var(--light);
	background: var(--red);
	color: var(--light);
	font-weight: 700;
	font-size: 12px;
	display: flex;
	justify-content: center;
	align-items: center;
}
#content nav .profile img {
	width: 36px;
	height: 36px;
	object-fit: cover;
	border-radius: 50%;
}
#content nav .switch-mode {
	display: block;
	min-width: 50px;
	height: 25px;
	border-radius: 25px;
	background: var(--grey);
	cursor: pointer;
	position: relative;
}
#content nav .switch-mode::before {
	content: '';
	position: absolute;
	top: 2px;
	left: 2px;
	bottom: 2px;
	width: calc(25px - 4px);
	background: var(--blue);
	border-radius: 50%;
	transition: all .3s ease;
}
#content nav #switch-mode:checked + .switch-mode::before {
	left: calc(100% - (25px - 4px) - 2px);
}
/* NAVBAR */





/* MAIN */
#content main {
	width: 100%;
	padding: 36px 24px;
	font-family: var(--poppins);
	max-height: calc(100vh - 56px);
	overflow-y: auto;
}
#content main .head-title {
	display: flex;
	align-items: center;
	justify-content: space-between;
	grid-gap: 16px;
	flex-wrap: wrap;
}
#content main .head-title .left h1 {
	font-size: 36px;
	font-weight: 600;
	margin-bottom: 10px;
	color: var(--dark);
}
#content main .head-title .left .breadcrumb {
	display: flex;
	align-items: center;
	grid-gap: 16px;
}
#content main .head-title .left .breadcrumb li {
	color: var(--dark);
}
#content main .head-title .left .breadcrumb li a {
	color: var(--dark-grey);
	pointer-events: none;
}
#content main .head-title .left .breadcrumb li a.active {
	color: var(--blue);
	pointer-events: unset;
}
#content main .head-title .btn-download {
	height: 36px;
	padding: 0 16px;
	border-radius: 36px;
	background: var(--blue);
	color: var(--light);
	display: flex;
	justify-content: center;
	align-items: center;
	grid-gap: 10px;
	font-weight: 500;
}




#content main .box-info {
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
	grid-gap: 24px;
	margin-top: 36px;
}
#content main .box-info li {
	padding: 24px;
	background: var(--light);
	border-radius: 20px;
	display: flex;
	align-items: center;
	grid-gap: 24px;
}
#content main .box-info li .bx {
	width: 80px;
	height: 80px;
	border-radius: 10px;
	font-size: 36px;
	display: flex;
	justify-content: center;
	align-items: center;
}
#content main .box-info li:nth-child(1) .bx {
	background: var(--light-blue);
	color: var(--blue);
}
#content main .box-info li:nth-child(2) .bx {
	background: var(--light-yellow);
	color: var(--yellow);
}
#content main .box-info li:nth-child(3) .bx {
	background: var(--light-orange);
	color: var(--orange);
}
#content main .box-info li .text h3 {
	font-size: 24px;
	font-weight: 600;
	color: var(--dark);
}
#content main .box-info li .text p {
	color: var(--dark);	
}





#content main .table-data {
	display: flex;
	flex-wrap: wrap;
	grid-gap: 24px;
	margin-top: 24px;
	width: 100%;
	color: var(--dark);
}
#content main .table-data > div {
	border-radius: 20px;
	background: var(--light);
	padding: 24px;
	overflow-x: auto;
}
#content main .table-data .head {
	display: flex;
	align-items: center;
	grid-gap: 16px;
	margin-bottom: 24px;
}
#content main .table-data .head h3 {
	margin-right: auto;
	font-size: 24px;
	font-weight: 600;
}
#content main .table-data .head .bx {
	cursor: pointer;
}

#content main .table-data .order {
	flex-grow: 1;
	flex-basis: 500px;
}
#content main .table-data .order table {
	width: 100%;
	border-collapse: collapse;
}
#content main .table-data .order table th {
	padding-bottom: 12px;
	font-size: 13px;
	text-align: left;
	border-bottom: 1px solid var(--grey);
}
#content main .table-data .order table td {
	padding: 16px 0;
}
#content main .table-data .order table tr td:first-child {
	display: flex;
	align-items: center;
	grid-gap: 12px;
	padding-left: 6px;
}
#content main .table-data .order table td img {
	width: 36px;
	height: 36px;
	border-radius: 50%;
	object-fit: cover;
}
#content main .table-data .order table tbody tr:hover {
	background: var(--grey);
}
#content main .table-data .order table tr td .status {
	font-size: 10px;
	padding: 6px 16px;
	color: var(--light);
	border-radius: 20px;
	font-weight: 700;
}
#content main .table-data .order table tr td .status.completed {
	background: var(--blue);
}
#content main .table-data .order table tr td .status.process {
	background: var(--yellow);
}
#content main .table-data .order table tr td .status.pending {
	background: var(--orange);
}


#content main .table-data .todo {
	flex-grow: 1;
	flex-basis: 300px;
}
#content main .table-data .todo .todo-list {
	width: 100%;
}
#content main .table-data .todo .todo-list li {
	width: 100%;
	margin-bottom: 16px;
	background: var(--grey);
	border-radius: 10px;
	padding: 14px 20px;
	display: flex;
	justify-content: space-between;
	align-items: center;
}
#content main .table-data .todo .todo-list li .bx {
	cursor: pointer;
}
#content main .table-data .todo .todo-list li.completed {
	border-left: 10px solid var(--blue);
}
#content main .table-data .todo .todo-list li.not-completed {
	border-left: 10px solid var(--orange);
}
#content main .table-data .todo .todo-list li:last-child {
	margin-bottom: 0;
}
/* MAIN */
/* CONTENT */









@media screen and (max-width: 768px) {
	#sidebar {
		width: 200px;
	}

	#content {
		width: calc(100% - 60px);
		left: 200px;
	}

	#content nav .nav-link {
		display: none;
	}
}






@media screen and (max-width: 576px) {
	#content nav form .form-input input {
		display: none;
	}

	#content nav form .form-input button {
		width: auto;
		height: auto;
		background: transparent;
		border-radius: none;
		color: var(--dark);
	}

	#content nav form.show .form-input input {
		display: block;
		width: 100%;
	}
	#content nav form.show .form-input button {
		width: 36px;
		height: 100%;
		border-radius: 0 36px 36px 0;
		color: var(--light);
		background: var(--red);
	}

	#content nav form.show ~ .notification,
	#content nav form.show ~ .profile {
		display: none;
	}

	#content main .box-info {
		grid-template-columns: 1fr;
	}

	#content main .table-data .head {
		min-width: 420px;
	}
	#content main .table-data .order table {
		min-width: 420px;
	}
	#content main .table-data .todo .todo-list {
		min-width: 420px;
	}
}
.add_fields{
    background-color:#f9f9f9;
    padding:20px;
    border-radius:20px;
}
.personal
{
    height:50px;
    border:none;
    background:#3c3c3c;
    color:#fff;
    text-align:center;
    padding:8px 8px;
    border:2px solid #f3f3f3;
    border-radius:0px 0px 0px 15px;
    outline:none;
    transition:0.5s;
}
.changepw
{
    height:50px;
    border:none;
    outline:none; 
    background:#fff;
    text-align:center;
    padding:8px 8px;
    border:2px solid #f3f3f3;
    border-radius:0px 0px 15px 0px;
    outline:none;
    transition:0.5s; 
} 
</style>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-school'></i>
			<span class="text">School Management</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="add_student.php">
					<i class='bx bx-user' ></i>
					<span class="text">Students</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li class="active">
				<a href="admin_settings.php">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="logout.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>

        <div class="add_fields">
        <div class="container p-lg-4 ">


<script>
$(document).ready(function(){
    $(".personal").click(function(){
      $("#details").css("display","block");
      $("#changepass").css("display","none");
      $(".personal").css("background","#3c3c3c");
      $(".personal").css("color","#fff");
      $(".changepw").css("background","#fff");
      $(".changepw").css("color","#000");
    });
    $(".changepw").click(function(){
      $("#details").css("display","none");
      $("#changepass").css("display","block");
      $(".changepw").css("background","#3c3c3c");
      $(".changepw").css("color","#fff");
      $(".personal").css("background","#fff");
      $(".personal").css("color","#000");
    });
  });    
</script> 

<div class="container">
		<div class="row">
        <button id="personal" class="personal">Personal Details</button>
        <button id="changepw" class="changepw">Change Password</button>

		</div> <!--End of 1st div row!--> 
		</div> <!--End of 1st div container!--> 




<!--Details update fields!--> 

<div class="container">

<?php
if(isset($_POST['change_pw_btn']))
{
	$email = $_SESSION['u_email'];
	$current = md5($_POST['current']);
	$new = md5($_POST['new']);
	$confirm = md5($_POST['confirm']);

 $sql="SELECT u_password FROM login_data WHERE u_email='$email'";
 $result=$conn->query($sql);
 if($result->num_rows > 0)
 {
	while($row=$result->fetch_assoc())
	{
		if($current == $row['u_password'])
		{
			if($new == $confirm)
			{
				$sql2="UPDATE login_data SET u_password='$confirm' WHERE u_email='$email'";
				if($conn->query($sql2))
				{	  
					echo "<div class='alert alert-success success_alert' role='alert'>
						Password Changed
						  </div>";

				}
			}
			else
			{
				echo "<div class='alert alert-danger mt-3' role='alert'>
				New Password & Confirm Password are not same.....
	  			</div>";
			}
		}
		else
		{
			echo "<div class='alert alert-danger mt-3' role='alert'>
				Old Password is Wrong!
				  </div>";
		}
	}

 }

}
?>

<?php
if(isset($_POST['admin_update']))
{
$email = $_SESSION['u_name'];
$name = $_POST['name'];
$address = $_POST['address'];
$qualification = $_POST['qualification'];
$DOB = $_POST['dob'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$sql="UPDATE user_data SET u_name='$name', u_address='$address', u_qualification='$qualification',u_dob='$DOB',u_city='$city',u_state='$state',u_zip='$zip' WHERE u_email='$email'";   
if($conn->query($sql))
{
    echo "<div class='alert alert-success success_alert' role='alert'>
    This is a success alert—check it out!
      </div>";
}
else
{
    echo "<div class='alert alert-danger' role='alert'>
    This is a danger alert—check it out!
      </div>";
}
}
?>

<?php
$email = $_SESSION['u_email'];
 $sql="SELECT * FROM user_data WHERE u_email='$email'";
 $result=$conn->query($sql);
 $i=1;
 if($result->num_rows > 0)
 {
    while($row=$result->fetch_assoc())
     {
?>

<div class="row" id="details">

<div class="col-md-12 col-12 text-center mt-3"><h4><b><u>PERSONAL DETAILS</u></b></h4></div>

<div class="col-md-12">
<form class="needs-validation mt-5" novalidate method="POST">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">User_ID</label>
      <input type="number" class="form-control" name="id" id="validationCustom01" value="<?php echo $row['u_id'];?>" readonly>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Name</label>
      <input type="text" class="form-control" name="name" id="validationCustom02" value="<?php echo $row['u_name'];?>" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom03">E-mail</label>
      <input type="email" class="form-control" name="email" id="validationCustom03" value="<?php echo $row['u_email'];?>" readonly>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom04">Address</label>
      <input type="text" class="form-control" name="address" id="validationCustom04" value="<?php echo $row['u_address'];?>" required>
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationCustom04">Qualification</label>
      <input type="text" class="form-control" name="qualification" id="validationCustom04" value="<?php echo $row['u_qualification'];?>" required>
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationCustom04">Date-Of-Birth</label>
      <input type="date" class="form-control" name="dob" id="validationCustom04" value="<?php echo $row['u_dob'];?>" required>
    </div>

  </div>

  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom04">City</label>
      <input type="text" class="form-control" name="city" id="validationCustom04" value="<?php echo $row['u_city'];?>" required>
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationCustom04">State</label>
      <input type="text" class="form-control" name="state" id="validationCustom04" value="<?php echo $row['u_state'];?>" required>
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationCustom04">Zip</label>
      <input type="number" class="form-control" name="zip" id="validationCustom04" value="<?php echo $row['u_zip'];?>" required>
    </div>

  </div>


  <div class="col text-center mb-5">
  <input class="btn btn-primary" name="admin_update" type="submit" value="Update Details">
  </div>
  <?php
}
    }
		?>
</form>
</div>

</div>
</div>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>


<div id="changepass" style="display:none;" class="mb-5">
<div class="col-md-12 col-12 text-center mt-3"><h4><b><u>CHANGE PASSWORD</u></b></h4></div>
<div class="col-md-12">
<form class="needs-validation mt-5" novalidate action="" method="POST">
  <div class="form-row">
  <div class="col-md-4 mb-3">
    <label for="inputPassword5">Current Password</label>
    <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" name="current" required>
  </div>
  <div class="col-md-4 mb-3">
    <label for="inputPassword5">New Password</label>
    <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" name="new" required>
    <small id="passwordHelpBlock" class="form-text text-muted ">
    Your password must be 8-20 characters long, contain letters (both upper and lower case) and numbers.
    </small>
  </div>
  <div class="col-md-4 mb-3">
    <label for="inputPassword5">Confirm Password</label>
    <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" name="confirm" required>
    </div>
  </div>
  <input type="hidden" value="" name="id">
  <div class="col text-center mt-3">
  <input class="btn btn-primary" type="submit" value="Change Password" name="change_pw_btn">
  </div>
</form>
</div>


</div>
</div>
        </div>

		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script>
		const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

allSideMenu.forEach(item=> {
	const li = item.parentElement;

	item.addEventListener('click', function () {
		allSideMenu.forEach(i=> {
			i.parentElement.classList.remove('active');
		})
		li.classList.add('active');
	})
});




// TOGGLE SIDEBAR
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');
})




	</script>
</body>
</html>