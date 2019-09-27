<?php
session_start();
$id = $_SESSION['id'];
$name = $_SESSION['name'];
 ?>
<? include $_SERVER["DOCUMENT_ROOT"] .'/Email_Authentication/common/header.php'; ?>    <hr>
    <aside class="aside1"></aside>
  	<aside class="aside"></aside>
  	<section class="section">

      <h3>인증번호 확인 </h3>
      <hr><br>
      "인증번호 확인" 버튼을 눌러서 이메일에 도착한 인증번호를 작성해주세요.<br>
      인증번호가 일치하면 회원가입이 완료됩니다.<br><br>
      <form method="post" action="./join_checking_code_db.php" class="authentication_email" name="form_login">
      <input type="text" name="e_code" value="" id="e_code">
      <button type="submit" name="submit">인증번호 확인</button>
    </form>
    <script type="text/javascript">
      function $ComTimer()
      { // prototype extend
      }

      $ComTimer.prototype = {
        comSecond : ""
        , fnCallback : function() {}
        , timer : ""
        , domId : ""
        , fnTimer : function()
        {
          var m = Math.floor(this.comSecond / 60) + ":" + (this.comSecond % 60);
          this.comSecond--;
          console.log(m);
          if(this.comSecond < 0) {
            clearInterval(this.timer);
            alert("no timer. try again.")
          }
        }
        , fnStop : function() {
          clearInterval(this.timer);
        }
      }

      var AuthTimer = new $ComTimer()
      AuthTimer.comSecond = 180;
      AuthTimer.fnCallback = function() {alert("try again.")}
      AuthTimer.timer = setInterval('AuthTimer.fnTimer()',1000);
      AuthTimer.domId = document.getElementById("timer");
    </script>
    </section>
  <? include $_SERVER["DOCUMENT_ROOT"] .'/Email_Authentication/common/footer.php'; ?>
