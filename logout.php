<?php
session_start();
$id=$_SESSION['id'];
$name=$_SESSION['name'];

if(!isset($_SESSION['id']));
{
	echo "<script>alert(\"$name님 로그아웃이 완료되었습니다.\");</script>";
	session_destroy();
	echo "<script>location.href='./index.php'</script>";
}
?>
