<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webInit.php';
$uid = $_GET["loginId"];
$sql = "
select * from
member where loginId = '".$uid."'";
$member = DB__getRow($sql);

if($member == 0)
{
  ?>
  <div>
  <?php echo $uid; ?>은(는) 사용 가능한 아이디입니다.
  </div>
  <?php
}else{
  ?>
<div>
<?php echo $uid; ?>중복된 아이디입니다.
</div>
<?php
}
?>
<button value="닫기" onclick="window.close()">닫기</button>
