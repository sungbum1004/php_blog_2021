<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webInit.php';
?>

<script>
<?php if (!isset($_SESSION['loginedMemberId'])) {?>
    alert("로그인 후 이용해 주세요.");
    history.back();    
<?php }?>
</script>

<?php
$pageTitle = "글 작성";
?>
<?php require_once __DIR__ . "/../head.php"; ?>
  <a href="list.php">게시물 리스트</a>
  <hr>
  <form action="doWrite.php">
    <div>
      <span>제목</span>
      <input required placeholder="제목을 입력해주세요." type="text" name="title"> 
    </div>
    <div>
      <span>내용</span>
      <textarea required placeholder="내용을 입력해주세요." name="body"></textarea>
    </div>
    <div>
      <input type="submit" value="글 작성">
    </div>
  </form>
  
  <?php require_once __DIR__ . "/../foot.php"; ?>