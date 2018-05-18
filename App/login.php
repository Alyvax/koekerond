<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type = "text/css" href="Layout_loginpage.css" </link>
</head>

<body>
<div class="container">
<form name="form1" action="" method="post">

<img src = "img/user.png" class = "user">
<h2> Log in here </h2>
<p>Enter Username</p>
<input type="text" name="t1" placeholder = "enter username" required pattern="^[A-Za-z0-9]+">

<p>Enter Password </p>
<input type="password" name="t2" placeholder = "••••••" required pattern="^[A-Za-z0-9]+">
<input type="submit" name="submit1" value="login"></td>
<a href="http://localhost/register/registration.php#"> Create Account</a>



</form>
</div>
<?php

if(isset($_POST["submit1"]))
{
$pwd=md5($_POST["t2"]);
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"loginregister");
	$count=0;
	$res=mysqli_query($link,"select * from registration where username='$_POST[t1]' && password='$pwd'");
	$count=mysqli_num_rows($res);
    if($count>0)
	{
	?>
	<script type="text/javascript">
	window.location="welcome.php";
	</script>
	<?php
	
	
	}
	else
	{
	?>
	<script type="text/javascript">
	alert("incorrect username or password");
	</script>
	<?php
	
	}

}

?>


</body>
</html>