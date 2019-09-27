<?php
session_start();
$id = $_SESSION['id'];
$name = $_SESSION['name'];
 ?>
<? include $_SERVER["DOCUMENT_ROOT"] .'/Email_Authentication/common/header.php'; ?>

<script type="text/javascript">
$(document).ready(function(){
  $("#transfer_login").on("click", function(){
    window.open("", "popup_window", "width=1000, height=700, scrollbars=no");
    $("#myform").submit();
  });
});
</script>

<style>
input[type=text], input[type=password1] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
}

button {
  background-color: black;
  color: white;
  padding: 14px 20px;
  margin: 8px;
  border: none;
  width: 35%;
}

footer {
  padding:50px;
  margin-top:50px;
  color:white;
  text-align:center;
}

section {
  text-align:center;
}

hr {
  border: solid;
  text-align:center;
}
input[type=text], input[type=password] {
  width: 50%
}
</style>

    <aside class="aside1"></aside>
  	<aside class="aside"></aside>
  	<section class="section">
      <h1>login</h1>
      <br>
        <hr width="900" align="center">

      <form method="post" action="authentication/authentication_email_check.php" class="form_login" target="popup_window" id="myform">
        <div class="form_login">
          &nbsp;&nbsp;<label for="id"> 아이디 :</label>&nbsp;&nbsp;
          <input type="text" name="id" placeholder="아이디" id="id" style=width:300px;>
        </div>
        <br>
        <div class="form_login">
          <label for="pwd"> 패스워드 : </label>&nbsp;
          <input type="password" name="pwd" placeholder="패스워드" id="pwd" style="width:300px; height:50px;">
        </div>
        <div class="form_lgoin">
      </div>
      <br>
        <div class="button">
        <button type="submit" id="transfer_login">로그인</button>&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="button" onclick="location.href='join_korean.php'">회원가입</button><br><br>
      </form>
  <? include $_SERVER["DOCUMENT_ROOT"] .'/Email_Authentication/common/footer.php'; ?>
