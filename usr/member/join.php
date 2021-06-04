<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webInit.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>회원가입</title>
</head>
<body>
  <h1>회원가입</h1>
</body>
</html>

<script>
function checkid() {
  var loginId = document.getElementById("uid").value;
  if(loginId)
  {
    url = "check.php?loginId="+loginId;
    window.open(url,"chkid","width=300,height=100");
  } else {
    alert("아이디를 입력하세요");
  }
}
</script>

<form action="doJoin.php">
  <div>
    <span>아이디 </span>
    <input required placeholder="아이디를 입력해주세요." type="text" name="loginId" id="uid">
    <input type="button" value="중복검사" onclick="checkid();" /> 
  </div>
  <div>
    <span>비밀번호</span>
    <input required placeholder="비밀번호를 입력해주세요." type="password" name="loginPw"> 
  </div>
  <div>
    <span>이름</span>
    <input required placeholder="이름을 입력해주세요." type="text" name="username"> 
  </div>
  <div>
    <span>별명</span>
    <input required placeholder="별명을 입력해주세요." type="text" name="nickname"> 
  </div>
  <div>
    <span>이메일</span>
    <input required placeholder="이메일을 입력해주세요." type="email" name="email"> 
  </div>
  <div>
    <span>핸드폰번호</span>
    <input required placeholder="핸드폰번호를 입력해주세요." type="text" name="cellphoneNo"> 
  </div>
  <div>
    <input type="submit" value="회원가입">
  </div>
</form>
    
<?php require_once __DIR__ . "/../foot.php"; ?>
        

