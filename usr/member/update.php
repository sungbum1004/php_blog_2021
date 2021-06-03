<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webInit.php';


if(isset($_SESSION['loginedMemberId'])) {
?>

<?php
$pageTitle = "회원 수정";
?>
<?php require_once __DIR__ . "/../head.php"; ?>
<a href="../article/list.php">돌아가기</a>
 <hr>

  <form action="doUpdate.php"> 
  <?php
      $sql = "select * from member where id='{$_SESSION['loginedMemberId']}'";
      while($member = DB__getRow($sql)){
  ?>
    <div>
      <span>비밀번호</span>
      <input required placeholder="비밀번호를 입력해주세요." type="password" name="loginPw" value="<?=$member['loginPw']?>"> 
    </div>
    <div>
      <span>이름</span>
      <input required placeholder="이름을 입력해주세요." type="text" name="username" value="<?=$member['username']?>"> 
    </div>
    <div>
      <span>별명</span>
      <input required placeholder="별명을 입력해주세요." type="text" name="nickname" value="<?=$member['nickname']?>"> 
    </div>
    <div>
      <span>이메일</span>
      <input required placeholder="이메일을 입력해주세요." type="text" name="email" value="<?=$member['email']?>"> 
    </div>
    <div>
      <span>핸드폰번호</span>
      <input required placeholder="핸드폰번호를 입력해주세요." type="text" name="cellphoneNo" value="<?=$member['cellphoneNo']?>"> 
    </div>
    <div>
      <input type="submit" value="회원수정">
      <?php break; } ?>
    </div>
  </form>
  
  <?php require_once __DIR__ . "/../foot.php"; ?> 
  <?php }else{
	echo "<script>alert('잘못된 접근입니다.'); history.back();</script>";
}