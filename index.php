<?php
session_start();
$id = $_SESSION['id'];
$name = $_SESSION['name'];
 ?>
<? include $_SERVER["DOCUMENT_ROOT"] .'/Email_Authentication/common/header.php'; ?>
    <hr>
    <aside class="aside1"></aside>
  	<aside class="aside"></aside>
  	<section class="section">
      <div class="container">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">

        <div class="item active">
          <a href="/Email_Authentication/UpdateNews/email.php"><img src="./img/email23.jpg" alt="email" style="width:1500px; height:480px"></a>
          <div class="carousel-caption">
            <h3>Email Authentication System</h3>
            <p>Implementing an authentication system</p>
          </div>
        </div>

        <div class="item">
        <a href="/Email_Authentication/UpdateNews/arp.php">  <img src="./img/arpsp.jpg" alt="arpsp" style="width:1500px; height:480px"></a>
          <div class="carousel-caption">
            <h3>Arp</h3>
            <p>Arp Spoofing</p>
          </div>
        </div>

        <div class="item">
        <a href="/Email_Authentication/UpdateNews/db.php">  <img src="./img/database.png" alt="data" style="width:1500px; height:480px"></a>
          <div class="carousel-caption">
            <h3>Server/Database</h3>
            <p>Server connection and DB management</p>
          </div>
        </div>

        <div class="item">
        <a href="/Email_Authentication/UpdateNews/web.php">  <img src="./img/webde.jpg" alt="webde" style="width:1500px; height:480px"></a>
          <div class="carousel-caption">
            <h3>Web Design</h3>
            <p>Web page establishment</p>
          </div>
        </div>
      </div>
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
<? include $_SERVER["DOCUMENT_ROOT"] .'/Email_Authentication/common/footer.php'; ?>
