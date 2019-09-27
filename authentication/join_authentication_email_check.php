<?php
session_start();
$id=$_POST['id'];
$pwd=$_POST['pwd'];
$pwd2=$_POST['pwd2'];
$name=$_POST['name'];
$number=$_POST['number'];
$birthday=$_POST['birthday'];
$select_email=$_POST['email'];
$code_number = $_POST['code_number'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form method="post" action="./join_checking_code.php" class="authentication_email" name="form_login">
  <input type="hidden" name="code_number" value="<?php echo $_POST['code_number']; ?>">
  </form>
  <?php

  if($pwd!=$pwd2)
  {
    echo "<script>alert(\"비밀번호가 서로 일치 하지 않습니다.\");</script>";
    echo "<script>history.go(-2);</script>";
  }
  if($id == NULL || $pwd == NULL || $name == NULL || $number == NULL || $birthday == NULL || $select_email == NULL)
  {
    echo "<script>alert(\"빈 칸을 모두 입력해주세요.\");</script>";
    echo "<script>history.go(-2);</script>";
    exit();
  }
  else if($code_number == NULL)
  {
    echo "<script>alert(\"\");</script>";
    echo "<script>history.go(-2);</script>";
  }
  $mysqli=mysqli_connect("localhost", "root", "Password","user");
  $check = "SELECT *from user WHERE id='$id'";
  $resutl=$mysqli->query($check);
  if($result->num_rows==1)
  {
  	echo "<script>alert(\"중복된 ID입니다.\");</script>";
  	echo "<script>history.go(-2);</script>";
  }
  $signup=mysqli_query($mysqli, "INSERT INTO user (id,pwd,name,pnumber,birthday,email,tocken) VALUES ('$id','$pwd','$name','$number','$birthday','$select_email','$code_number')");
  if($signup)
  {
    $to      = $select_email;
    $subject = '인증번호 안내입니다.';
    $message = $code_number;
	  $headers = 'From: webmaster@authjoongbu.com' . "\r\n" .
		 			'Reply-To: webmaster@authjoongbu.com' . "\r\n" .
					'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message);
  	echo "<script>alert(\"인증번호가 메일로 전송되었습니다.\");</script>";
    echo "<script> document.location.href='join_checking_code.php'; </script>";
  }
  else
  {
  	echo "<script>alert(\"인증번호가 전송되지 않았습니다.\");</script>";
  	echo "<script>history.go(-2);</script>";
  	exit();
  }
  ?>
</body>
</html>
