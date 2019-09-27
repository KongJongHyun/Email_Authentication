<?php
session_start();
$id = $_POST['id'];
$pwd = $_POST['pwd'];
$mysqli=mysqli_connect("localhost", "root", "Password","user");
$check = "SELECT * from user WHERE id = '$id'";
$result=$mysqli->query($check);

while($row = mysqli_fetch_assoc($result))
{
  $d_id = $row['id'];
  $d_pwd = $row['pwd'];
  $email = $row['email'];
}

$code_number = generateRandomString($length=10);

 function generateRandomString($length = 10) {
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $charactersLength = strlen($characters);
  $randomString = '';
  for ($i = 0; $i < $length; $i++) {
      $randomString .= $characters[rand(0, $charactersLength - 1)];
  }
  return $randomString;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- meta tags 필요 -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>thunder</title>
  <link rel="stylesheet" href="../css/index.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
  <?php
  $update=mysqli_query($mysqli, "UPDATE user SET tocken = '$code_number' where id = '$id'");
  if($update)
  {
    $to      = $email;
    $subject = '인증번호 안내입니다.';
    $message = $code_number;
    $headers = 'From: webmaster@authjoongbu.com' . "\r\n" .
        'Reply-To: webmaster@authjoongbu.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
  	echo "<script>alert(\"가입시 입력한 메일로 인증번호가 전송되었습니다.\");</script>";
  	echo "<script> document.location.href='checking_code.php'; </script>";
    exit();
  }
  else {
    echo "<script>alert(\"인증번호가 전송되지 않았습니다.\");</script>";
  	echo "<script>history.go(-2);</script>";
  	exit();
  }
  ?>
</body>
</html>
