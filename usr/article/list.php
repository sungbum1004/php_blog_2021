<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webInit.php';

$sql = "
SELECT *
FROM article AS A
ORDER BY A.id DESC
";

$articles = DB__getRows($sql);

?>
<?php
$pageTitle = "게시물 리스트";
?>
<?php require_once __DIR__ . "/../head.php"; ?>

  <div>
  <?php if (isset($_SESSION['loginedMemberId'])) { 
                echo "<h3>{$_SESSION['loginedMemberId']}님 환영합니다.</h3>";
                ?>
                <a href="../member/doLogout.php">로그아웃</a>
            
                <a href="../member/update.php">정보수정</a>
           
            <?php }else {?>
           
                <a href="../member/login.php">로그인</a>
            
                <a href="../member/join.php">회원가입</a>
         
            <?php }?>
  </div>

  <div>
  <?php if(isset($_SESSION['loginedMemberId'])) {?>
        <button type="button" onClick="location.href='write.php'">글작성</button>
    <?php }else{?>
        <button type="button" onClick="alert('로그인 후 이용해 주세요.')">글작성</button>    
    <?php } ?>
  </div>

  <hr>
  <div>
    <?php foreach ( $articles as $article ) { ?>
      <?php
      $detailUri = "detail.php?id=${article['id']}";
      ?>
      <a href="<?=$detailUri?>">번호 : <?=$article['id']?></a><br>
      작성 : <?=$article['regDate']?><br>
      수정 : <?=$article['updateDate']?><br>
      <a href="<?=$detailUri?>">제목 : <?=$article['title']?></a><br>
      <hr>
    <?php } ?>
  </div>
  <?php require_once __DIR__ . "/../foot.php"; ?>