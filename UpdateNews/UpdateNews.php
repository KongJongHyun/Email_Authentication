<?php
session_start();
$id = $_SESSION['id'];
$name = $_SESSION['name'];
 ?>
<? include $_SERVER["DOCUMENT_ROOT"] .'/Email_Authentication/common/header.php'; ?>
    <aside class="aside1"></aside>
  	<aside class="aside"></aside>
  	<section class="section">
      <div class="container">
  <h2>All UpdateNews</h2>
  <p>The project progress reoport was covered by parts.</p>
  <p>click to download progress reports for each parts.</p>
  <p>Have a good feeling.</p>
  <div class="row">
    <div class="col-md-5">
      <div class="thumbnail">
        <a href="email.php" target="_blank">
          <img src="../img/email.jpg" alt="Lights" style="width:100%">
          <div class="caption">
            <p align="center">Team member name</p>
            <p align="center">Area of charge</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-5">
      <div class="thumbnail">
        <a href="db.php" target="_blank">
          <img src="../img/DB.jpg" alt="Nature" style="width:100%">
          <div class="caption">
            <p align="center">Team member name</p>
            <p align="center">Area of charge</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-5">
      <div class="thumbnail">
        <a href="arp.php" target="_blank">
          <img src="../img/arp.jpg" alt="Fjords" style="width:100%">
          <div class="caption">
            <p align="center">Team member name</p>
            <p align="center">Area of charge</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-5">
      <div class="thumbnail">
        <a href="web.php" target="_blank">
          <img src="../img/web.jpg" alt="Fjords" style="width:100%">
          <div class="caption">
            <p align="center">Team member name</p>
            <p align="center">Area of charge</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
<? include $_SERVER["DOCUMENT_ROOT"] .'/Email_Authentication/common/footer.php'; ?>
