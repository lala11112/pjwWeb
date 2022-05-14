<?php
include_once("./header.php");
?>
<script>
   function check_input()
   {
      if (!document.login_form.id.value) {
          alert("아이디를 입력하세요!");
          document.member_form.id.focus();
          return;
      }

      if (!document.login_form.pass.value) {
          alert("비밀번호를 입력하세요!");
          document.member_form.pass.focus();
          return;
      }

      document.login_form.submit();
   }

</script>
  <div id ="login_box">
    <div id ="login_title">
      <span>로그인</span>
    </div>
    <div id ="login_form">
      <form name = "login_form" method="post" action="./api/login.php">
        <ul>
          <li><input type="text" name="id" placeholder="아이디"></li>
          <li><input type="password" id="pass" name="pass" placeholder="비밀번호"></li>
        </ul>
        <input type='button' value='로그인하기' onclick="check_input()"/>&nbsp;
    </div>
  </div>
<?php
include_once("./footer.php");
?>
