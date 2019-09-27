<?php
session_start();
$e_code = $_POST['e_code'];
$_POST['name'] = $d_name;

$mysqli=mysqli_connect("localhost", "root", "Password","user");
$check = "SELECT *from user WHERE tocken='$e_code'";
$result=$mysqli->query($check);

while($row = mysqli_fetch_assoc($result))
{
  $d_code = $row['tocken'];
  $d_name = $row['name'];

  echo $d_code;
  echo $d_name;
}
if($d_code == $e_code)
{
  echo "<script>alert(\"인증번호가 확인되었습니다.\");</script>";
  echo "<script>alert(\"회원가입이 완료되었습니다.\");</script>";
  echo "<script>opener.parent.location='../index.php';</script>";
  echo "<script>window.close();</script>";
  $delete = mysqli_query($mysqli, "UPDATE user SET tocken = 'NULL' where id = '$d_name'");
}
else{
  echo "<script>alert(\인증번호가 일치 하지 않습니다.\");</script>";
  echo "<script>history.go(-2);</script>";
}
?>
