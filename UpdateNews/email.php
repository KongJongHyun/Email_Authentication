<?php
session_start();
$id = $_SESSION['id'];
$name = $_SESSION['name'];
 ?>
<? include $_SERVER["DOCUMENT_ROOT"] .'/Email_Authentication/common/header.php'; ?>

    <aside class="aside1"></aside>
  	<aside class="aside"></aside>
  	<section class="section">
      <div class="col-md-5">
        <div class="thumbnail">
            <img src="../img/email.jpg" alt="Lights" style="width:100%">
            <div class="caption">
              <p align="center">Team member name</p>
              <p align="center">Area of charge</p>
            </div>
        </div>
      </div>
<? include $_SERVER["DOCUMENT_ROOT"] .'/Email_Authentication/common/Newsdate.php'; ?>
<? include $_SERVER["DOCUMENT_ROOT"] .'/Email_Authentication/common/footer.php'; ?>
