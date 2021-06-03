<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webInit.php';

if ( isset($_GET['id']) == false ) {
  echo "id를 입력해주세요.";
  exit;
}

$id = intval($_GET['id']);

$sql = "
SELECT *
FROM article AS A
WHERE A.id = '${id}'
";
$article = DB__getRow($sql);

$replys = DB__getRows($sql);

if ( $article == null ) {
  echo "${id}번 게시물은 존재하지 않습니다.";
  exit;
}
?>
<?php
$pageTitle = "게시물 상세내용, ${id}번 게시물";
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
    <?php foreach ( $replys as $reply ) { ?>
    	<div>이름 : <?=$reply['name']?></div>
			<div>내용 : <?=$reply['content']?></div>
			<div>작성날짜 : <?=$reply['regDate']?></div>
				<a href="rep_modify.php">수정</a>
				<a href="rep_delete.php">삭제</a>
      <hr>
    <?php } ?>
  </div>
  <hr>
  <h3>댓글</h3>
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