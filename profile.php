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
    <h2>Thunder Profile</h2>
    <p>This is the profile of a member of the Team-Thunder.</p>
    <p>Caution : The picture may be very different in person.</p><br>
    <div class="row">
      <div class="col-sm-4">
        <div class="thumbnail">
            <img src="" alt="Lights" style="width:100%">
            <div class="caption">
              <p align="center">Name :  </p>
              <p align="center">part : </p>
              <p align="center">position : </p>
              <p align="center">characteristic : </p>
            </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
            <img src="" alt="Nature" style="width:100%">
            <div class="caption">
              <p align="center">Name :  </p>
              <p align="center">part : </p>
              <p align="center">position : </p>
              <p align="center">characteristic : </p>
            </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <a href="#" target="_blank">
            <img src="" alt="Fjords" style="width:100%">
            <div class="caption">
              <p align="center">Name :  </p>
              <p align="center">part : </p>
              <p align="center">position : </p>
              <p align="center">characteristic : </p>
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-4">
        <div class="thumbnail">
            <img src="" alt="Fjords" style="width:100%">
            <div class="caption">
              <p align="center">Name :  </p>
              <p align="center">part : </p>
              <p align="center">position : </p>
              <p align="center">characteristic : </p>
            </div>
        </div>
      </div>
      <div class="col-xs-4">
        <div class="thumbnail">
            <img src="" alt="Fjords" style="width:100%">
            <div class="caption">
              <p align="center">Name :  </p>
              <p align="center">part : </p>
              <p align="center">position : </p>
              <p align="center">characteristic : </p>
            </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail">
            <img src="" alt="Fjords" style="width:100%">
            <div class="caption">
              <p align="center">Name :  </p>
              <p align="center">part : </p>
              <p align="center">position : </p>
              <p align="center">characteristic : </p>
            </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="thumbnail">
            <img src="" alt="Fjords" style="width:100%">
            <div class="caption">
              <p align="center">Name :  </p>
              <p align="center">part : </p>
              <p align="center">position : </p>
              <p align="center">characteristic : </p>
            </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail">
            <img src="" alt="Fjords" style="width:100%">
            <div class="caption">
              <p align="center">Name :  </p>
              <p align="center">part : </p>
              <p align="center">position : </p>
              <p align="center">characteristic : </p>
            </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail">
            <img src="" alt="Fjords" style="width:100%">
            <div class="caption">
              <p align="center">Name :  </p>
              <p align="center">part : </p>
              <p align="center">position : </p>
              <p align="center">characteristic : </p>
            </div>
        </div>
      </div>
    </div>
  </div>
<? include $_SERVER["DOCUMENT_ROOT"] .'/Email_Authentication/common/footer.php'; ?>
