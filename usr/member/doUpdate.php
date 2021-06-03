<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webInit.php';

$loginPw = $_GET['loginPw'];
$username = $_GET['username'];
$nickname = $_GET['nickname'];
$email = $_GET['email'];
$cellphoneNo = $_GET['cellphoneNo'];

$sql = "
UPDATE `member`
SET loginPw = '${loginPw}',
username = '${username}',
nickname = '${nickname}',
email = '${email}',
cellphoneNo = '${cellphoneNo}'
WHERE id = '{$_SESSION['loginedMemberId']}'
";

$member = DB__update($sql);

?>
<script>
alert('회원정보가 수정되었습니다.');
location.replace('../article/list.php');
</script>
