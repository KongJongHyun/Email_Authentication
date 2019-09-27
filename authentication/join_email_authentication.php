<?php
session_start();
$id=$_POST['id'];
$pwd=$_POST['pwd'];
$pwd2=$_POST['pwd2'];
$name=$_POST['name'];
$number=$_POST['number'];
$birthday=$_POST['birthday'];
$select_email=$_POST['email'];
?>
<? include $_SERVER["DOCUMENT_ROOT"] .'/Email_Authentication/common/header.php'; ?>
    <hr>
    <aside class="aside1"></aside>
  	<aside class="aside"></aside>
  	<section class="section">

      <h2>인증번호 생성</h2>
      <hr>
      - 회원가입 시 등록하신 이메일 주소를 입력해주세요. <br><br>
      - "인증번호 생성" 버튼을 눌러서 인증번호를 생성해주세요.<br><br>
      - DB에 저장된 이메일과 비교 후 일치하면 인증번호를 보내드립니다.<br><br>

      <form method="post" action="./join_authentication_email_check.php" class="authentication_email" name="form_login">
        <div class="authentication_email">
          <label for="email">E-mail 주소</label>
          <input type="text" name="email_au" placeholder="이메일을 입력해주세요" id="email_au" value="<?php echo $select_email; ?>">
          <input type="hidden" name="code_number" value="<?php echo $code_number; ?>" />
          <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
          <input type="hidden" name="pwd" value="<?php echo $_POST['pwd']; ?>">
          <input type="hidden" name="pwd2" value="<?php echo $_POST['pwd2']; ?>">
          <input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
          <input type="hidden" name="number" value="<?php echo $_POST['number']; ?>">
          <input type="hidden" name="birthday" value="<?php echo $_POST['birthday']; ?>">
          <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
          <button>인증번호 생성</button>
        </div>
      </form>
<? include $_SERVER["DOCUMENT_ROOT"] .'/Email_Authentication/common/footer.php'; ?>
