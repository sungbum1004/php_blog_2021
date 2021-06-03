<?php

session_start();

if (isset($_SESSION['loginedMemberId'])) {
    unset($_SESSION['loginedMemberId']);
}

session_destroy();

?>

<script>

    alert("로그아웃되었습니다.");
    location.replace('login.php');

</script> 
