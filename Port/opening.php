<!DOCTYPE html>

<html>

<head>


<meta charset="UTF-8">

<link rel="stylesheet" href="css/main.css">




</head>

<body>



<center><img src="Images/KYXlogo.png"></center>

<center><a class="button" href="blog.html">GO &#8594;</center><a/>




<form action="welcome.php" method="post">
Name: <input type="text" name="name">
<br>
<input type="submit">
</form>


<p>Welcome <?php echo $_POST["name"]; ?></p>
<br>

</body>

</html>