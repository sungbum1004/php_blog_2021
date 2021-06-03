<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webInit.php';

$loginId = $_GET['loginId'];
$loginPw = $_GET['loginPw'];
$username = $_GET['username'];
$nickname = $_GET['nickname'];
$email = $_GET['email'];
$cellphoneNo = $_GET['cellphoneNo'];  

$sql = "insert into `member`(loginId, loginPw, username, nickName, email, cellphoneNo) 
values('$loginId', '$loginPw', '$username', '$nickname', '$email', '$cellphoneNo')";

$id = DB__insert($sql);

?>
<script>
alert('회원가입이 완료되었습니다..');
location.replace('login.php');
</script>
