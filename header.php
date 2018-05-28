<?php
include('db.php');
?>
<html>
<head>
<link href="assets/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
<link href="assets/node_modules/font-awesome/css/font-awesome.css" rel="stylesheet" />
<script src="assets/node_modules/sweetalert/dist/sweetalert.min.js" type="text/javascript"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Jobs<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Comments <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Companies Hiring <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <ul class="navbar-nav navbar-right">
        <li class="nav-item"><a href="register.php" class="nav-link">SignUp</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Login</a></li>
    </ul>
  </div>
</nav>
</body>
</html>
