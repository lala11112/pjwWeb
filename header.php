<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
      <?php
        session_start();
        if(isset($_SESSION["userid"])) $userid = $_SESSION['userid'];
        else $userid = "";
      ?>
        <div>HEADER</div>
<?php
  if(!$userid){
 ?>
    <li><a href="member_form.php">회원가입</a> </li>
    <li><a href="login_form.php">로그인</a></li>
<?php
  }
  else{
?>
  <li><a href="./api/logout.php">로그아웃</a></li>
  <?php
    }
  ?>
