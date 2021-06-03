<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webInit.php';

if ( isset($_GET['id']) == false ) {
  echo "id를 입력해주세요.";
  exit;
}

if ( isset($_GET['title']) == false ) {
  echo "title을 입력해주세요.";
  exit;
}

if ( isset($_GET['body']) == false ) {
  echo "body를 입력해주세요.";
  exit;
}

$article['id'] = $_GET['id'];
$title = $_GET['title'];
$body = $_GET['body'];

$sql = "
UPDATE article
SET title = '${title}',
`body` = '${body}'
WHERE id = '{$article['id']}'
";

$id = DB__update($sql);

?>
<script>
alert('<?=$article['id']?>번 게시물이 수정되었습니다.');
location.replace('list.php?id=<?=$article['id']?>');
</script>
