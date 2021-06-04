<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webInit.php';

if ( isset($_GET['id']) == false ) {
  echo "id를 입력해주세요.";
  exit;
}

$bno = intval($_GET['id']);

$sql = "
SELECT *
FROM article AS A
WHERE A.id = '${bno}'
";

$article = DB__getRow($sql);

if ( $article == null ) {
  echo "${bno}번 게시물은 존재하지 않습니다.";
  exit;
}

?>
<?php
$pageTitle = "게시물 상세내용, ${bno}번 게시물";
?>
<?php require_once __DIR__ . "/../head.php"; ?>

  <div>
    <a href="list.php">리스트</a>
    <a href="modify.php?id=<?=$article['id']?>">수정</a>
    <a onclick="if ( confirm('정말 삭제 하시겠습니까?') == false ) return false;" href="doDelete.php?id=<?=$article['id']?>">삭제</a>
  </div>
  <hr>

  <div>번호 : <?=$article['id']?></div>
  <div>작성날짜 : <?=$article['regDate']?></div>
  <div>수정날짜 : <?=$article['updateDate']?></div>
  <div>제목 : <?=$article['title']?></div>
  <div>내용 : <?=$article['body']?></div>
  <hr>

<h3>댓글목록</h3>
  <div>
   <?php

   $sql3 = "
   select * 
   from reply 
   where con_num='${bno}' 
   order by id desc";

   $replys =  DB__getRows($sql3);
   
   while($replys = DB__getRows($sql3)){
     ?>
			<div><?php echo $reply['name'];?></div>
			<div><?php echo nl2br("$reply[content]"); ?></div>
			<div><?php echo $reply['date']; ?></div>
				<a href="#">수정</a>
				<a href="#">삭제</a>
			<!-- 댓글 수정 폼 dialog -->
				<form method="post" action="rep_modify.php">
					<input type="hidden" name="id" value="<?php echo $reply['id']; ?>" /><input type="hidden" name="bno" value="<?php echo $bno; ?>">
					<input type="password" name="pw" placeholder="비밀번호" />
					<textarea name="content"><?php echo $reply['content']; ?></textarea>
					<input type="submit" value="수정하기">
				</form>
			<!-- 댓글 삭제 비밀번호 확인 -->
				<form action="rep_doDelete.php" method="post">
					<input type="hidden" name="idx" value="<?php echo $reply['id']; ?>" /><input type="hidden" name="bno" value="<?php echo $bno; ?>">
			 		<p>비밀번호<input type="password" name="pw" /> <input type="submit" value="확인"></p>
				 </form>
			</div>
	<?php } ?>

  <!--- 댓글 입력 폼 -->
  <hr>
  <h3>댓글</h3>
  <form action="doReply.php">
    <div>
      <span>이름</span>
      <input required placeholder="이름을 입력해주세요." type="text" name="name"> 
    </div>
     <div>
      <span>비밀번호</span>
      <input required placeholder="비밀번호를 입력해주세요." type="password" name="pw"> 
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