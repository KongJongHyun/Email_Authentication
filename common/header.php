<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>thunder</title>
  <link rel="stylesheet" href="/Email_Authentication/css/index.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
  <header class="header">
    <div class="container">
      <div id="branding">
        <h1> Thunder <span class="highlight"></span><a href="/Email_Authentication/index.php"><img src="/Email_Authentication/img/light.png" width="50px" ></a></h1>
      </div>
      <nav class="navbar navbar-light bg-#46CCFF " ></nav>
      <br>
    </div>
  </header>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" >Menu</a>
    </div>
    <ul class="nav navbar-nav navbar-center">
      <li class="active"><a href="/Email_Authentication/index.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="UpdateNews">Update News</a>
        <ul class="dropdown-menu">
          <li><a href="/Email_Authentication/UpdateNews/UpdateNews.php">All</a></li>
          <li><a href="/Email_Authentication/UpdateNews/email.php">- Email</a></li>
          <li><a href="/Email_Authentication/UpdateNews/arp.php">- ARP</a></li>
          <li><a href="/Email_Authentication/UpdateNews/db.php">- DB</a></li>
          <li><a href="/Email_Authentication/UpdateNews/web.php">- Web</a></li>
        </ul>
      </li>
      <li><a href="/Email_Authentication/profile.php">Profile</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <?php if(!isset($_SESSION['id']))
      {
        echo "<li><a href='/Email_Authentication/join_korean.php'><span class='glyphicon glyphicon-user'></span>Sign Up</a></li>";
        echo "<li><a href='/Email_Authentication/login.php'><span class='glyphicon glyphicon-log-in'>Login</a></li>";
      }
      else {
        echo "<li><a href=''><span class='glyphicon glyphicon-user'>$name</a></li>";
        echo "<li><a href='/Email_Authentication/logout.php'><span class='glyphicon glyphicon-user'>Logout</a></li>";
      }
      ?>
    </ul>
  </div>
</nav>
