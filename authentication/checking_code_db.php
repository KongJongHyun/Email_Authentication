<?php
session_start();
$e_code_number = $_POST['e_code'];

$mysqli=mysqli_connect("localhost", "root", "Password","user");
$check = "SELECT *from user WHERE tocken='$e_code_number'";
$result=$mysqli->query($check);

if($result->num_rows==1)
{
  $row=$result->fetch_array(MYSQLI_ASSOC);
  $namecf = $row['name'];
  $d_code = $row['tocken'];
  $d_id = $row['id'];
  if($row['tocken']==$d_code)
  {
    $_SESSION['tocken'] = $d_code;
    $_SESSION['name'] = $namecf;
    $_SESSION['id'] = $d_id;
    if(isset($_SESSION['tocken']))
    {
      echo "<script>alert(\"인증번호가 확인되었습니다.\");</script>";
      echo "<script>alert(\"$namecf 님 접속을 환영합니다. \");</script>";
      echo "<script>opener.parent.location='../index.php';</script>";
      echo "<script>window.close();</script>";
      $delete = mysqli_query($mysqli, "UPDATE user SET tocken = 'NULL' where name = '$namecf'");
      exit();
    }
  }
}
?>
