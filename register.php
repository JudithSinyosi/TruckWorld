<!DOCTYPE>
<html>
<head>
<title>user registration system using php and mysql</title>
<link rel="style sheet"type="text/css"href="style.css">
</head>
<body>
<div class ="header">
<h2>Register</h2>
</div>

<form method="post"action=register.php">
<div class="input-group">
<label>username</label>
<input type="text"name ="username">
</div>

<div class="input-group">
<label>Email</label>
<input type="text"name ="Email">
</div>

<div class="input-group">
<label>Password</label>
<input type="text"name ="Password_1">
</div>

<div class="input-group">
<label>Confirm Password</label>
<input type="text"name ="Confirm Password_2">
</div>

<div class="input-group">
<input type="submit"name="register" class="btn">register</button>
</div>

<p>
already a member?<a href ="register.php">sign up</a>

</div>
</form>
</body>
</html>