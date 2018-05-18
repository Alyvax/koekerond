<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type = "text/css" href="Layout_registrationpage.css" </link>
</head>

<body>
<div class="container">
<form name="form1" action="" method="post">

<img src = "img/user.png" class = "user">
<h2> Create Account </h2>
<p>Enter Firstname</p>
<input type="text" name="t1"  required pattern="^[A-Za-z]+">
<p>Enter Lastname</p>
<input type="text" name="t2" required pattern="^[A-Za-z]+">
<p>Enter Username</p>
<input type="text" name="t3" required pattern="^[A-Za-z0-9]+">
<p>Enter Password</p>
<input type="password" name="t4" required pattern="^[A-Za-z0-9]+">
<p>select gender</p>
<br>
<div class="container1">
<input id="r1" type="radio" name="gender" value="male" checked>
<label for="r1">male</label><br>
<input id="r2" type="radio" name="gender" value="female">
<label for="r2">female</label>
<input type="submit" name="submit1" value="submit">

</form>
</div>
<?php
if(isset($_POST["submit1"]))
{
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"loginregister");
$count=0;
$res=mysqli_query($link,"select * from registration where username='$_POST[t3]'");
$count=mysqli_num_rows($res);

	if($count>0)
	{
	?>
	<script type="text/javascript">
	alert("this username already exist please choose another");
	</script>
	<?php
	
	}
	else
	{
	$pwd=md5($_POST["t4"]);
	mysqli_query($link,"insert into registration values('','$_POST[t1]','$_POST[t2]','$_POST[t3]','$pwd','$_POST[r1]')");	
	?>
	<script type="text/javascript">
	alert("record inserted successfully");
	</script>
	<?php
	
	}
}

?>


</body>
</html>