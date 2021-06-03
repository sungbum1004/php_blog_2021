<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webInit.php';

if ( isset($_GET['id']) == false ) {
  echo "id를 입력해주세요.";
  exit;
}

$article['id'] = $_GET['id'];

$sql = "
DELETE FROM article
WHERE id = '{$article['id']}'
";

$id = DB__delete($sql);

?>
<script>
alert('<?=$article['id']?>번 게시물이 삭제되었습니다.');
location.replace('list.php?id=<?=$article['id']?>');
</script>
