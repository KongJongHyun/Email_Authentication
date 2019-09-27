<?php
session_start();
$id = $_SESSION['id'];
$name = $_SESSION['name'];
 ?>
<? include $_SERVER["DOCUMENT_ROOT"] .'/Email_Authentication/common/header.php'; ?>
<style>
input[type=text], input[type=password1] {
  width: 90%;
  padding: 15px;
  margin: 20px 20px 20px 20px;
}
button {
  background-color: black;
  color: white;
  padding: 14px 20px;
  margin: 8px;
  border: none;
  width: 20%;
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
#enemail {
  width:40%
}
#btn {
  width:20%
}
#pswpsw {
  width:20%
}
#psw {
  width:20%
}
#id1 {
  width:20%
}
#logbut {
  background-color: black;
  color : white;
}
table {
	border : 1px solid black;
	border-collapse : collapse;
}
td {
	border : 1px solid black;
  height : 100px;
  width : 600px;
}
#td{
  width: 500px

}
#td1{
  width:100px


}
#font{
  font-size:12px;
}

</style>
<script type="text/javascript">
$(document).ready(function(){
  $("#transfer_login").on("click", function(){
    window.open("", "popup_window", "width=1000, height=700, scrollbars=no");
    $("#myform").submit();
  });
});
</script>
    <aside class="aside1"></aside>
  	<aside class="aside"></aside>
  	<section class="section">
      <h1>회원가입</h1>
      <hr width="300" align="center">
      <br>
      <form method="post" action="authentication/join_email_authentication.php" class="form_login" target="popup_window" id="myform">
            <div class="form-group">
            <label for="id">아이디</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="id" placeholder="아이디" style=width:200px;>
        </div>

          <div class="form-group">
            <label for="pwd">비밀번호</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="password" name="pwd" placeholder="비밀번호" style="width:200px; height:50px;">
          </div>

          <div class="form-group">
            <label for="pwd2">비밀번호 확인</label>
            <input type="password" name="pwd2" placeholder="비밀번호 확인" style="width:200px; height:50px;" >
            <p class="help-block" id="font">비밀번호 확인을 위해 다시 한번 입력 해 주세요</p>
          </div>

          <div class="form-group">
            <label for="name">이름</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="name" placeholder="이름을 입력해 주세요" style=width:200px; >
          </div>

          <div class="form-group">
            <label for="email">이메일 주소</label>&nbsp;&nbsp;
          <input type="email" name="email" placeholder="이메일 주소를 입력해 주세요" id="email_au" style=width:200px;>
          </div>

        <div class="form-group">
          <label for="number">전화 번호</label>
            <input type="text" name="number" placeholder="(-생략)" style=width:200px;>
        </div>

  		<div class="form-group">
  			<label for="birthday">생년 월일</label>
  		     <input type="text" name="birthday"  placeholder="(ex)19990111 - 생략)" style=width:200px;>
         </div>

          <div class="form-group">
            <script type="text/javascript">
            var etemp = document.getElementById('email_au').value;
            </script>
          <button type="submit" id="transfer_login">회원가입</button>&nbsp;&nbsp;&nbsp;&nbsp;
      </form>
      <a href="index.php"><button type="submit" class="signupbtn">HOME</button></a>
      <div class="clearfix">
<? include $_SERVER["DOCUMENT_ROOT"] .'/Email_Authentication/common/footer.php'; ?>
