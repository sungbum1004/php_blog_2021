<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webInit.php';

$pageTitle = "댓글 작성";
?>
<?php require_once __DIR__ . "/../head.php"; ?>
  <hr>
  <form action="doReply.php">
    <div>
      <span>이름</span>
      <input required placeholder="이름을 입력해주세요." type="text" name="name"> 
    </div>
    <div>
      <span>내용</span>
      <textarea required placeholder="내용을 입력해주세요." name="content"></textarea>
    </div>
    <div>
      <input type="submit" value="댓글작성">
    </div>
  </form>
  
  <?php require_once __DIR__ . "/../foot.php"; ?>