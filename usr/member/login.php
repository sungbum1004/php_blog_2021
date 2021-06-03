<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webInit.php';

$pageTitle = "로그인";
?>
<?php require_once __DIR__ . "/../head.php"; ?>


<form action="doLogin.php">
<div><a href="../article/list.php">글 리스트</a></div>
<hr>
  <div>
    <span>로그인아이디</span>
    <input required placeholder="로그인아이디를 입력해주세요." type="text" name="loginId"> 
  </div>
  <div>
    <span>로그인비밀번호</span>
    <input required placeholder="로그인비밀번호를 입력해주세요." type="password" name="loginPw"> 
  </div>
  <div>
    <input type="submit" value="로그인">
    <button onclick = "location.href='join.php'">회원가입</button>
  </div>
</form>


<?php require_once __DIR__ . "/../foot.php"; ?>

