<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webInit.php';

if ( isset($_GET['loginId']) == false ) {
  echo "loginId를 입력해주세요.";
  exit;
}

if ( isset($_GET['loginPw']) == false ) {
  echo "loginPw를 입력해주세요.";
  exit;
}

$loginId = $_GET['loginId'];
$loginPw = $_GET['loginPw'];

$sql = "
SELECT *
FROM `member` AS M
WHERE M.loginId = '${loginId}'
";
$member = DB__getRow($sql);

if ( empty($member) ) {
  echo "존재하지 않는 회원입니다.";
  exit;
}

if ( $member['loginPw'] != $loginPw ) {
  echo "비밀번호가 일치하지 않습니다.";
  exit;
}

$_SESSION['loginedMemberId'] = $member['id'];
?>
<script>
alert('<?=$member['nickname']?>님 환영합니다.');
location.replace('../article/list.php');
</script>