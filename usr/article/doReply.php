<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webInit.php';

$con_num = $_GET['con_num'];
$name = $_GET['name'];
$pw = $_GET['pw'];
$content = $_GET['content'];

$sql = "
INSERT INTO reply
con_num = '${con_num}',
`name` = '${name}',
pw = '${pw}'
content = '${content}'
regDate = NOW()
";

$id = DB__insert($sql);

?>
<script>
alert('댓글이 생성되었습니다.');
location.replace('detail.php?id=<?=$id?>');
</script>