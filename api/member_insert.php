<?php
    $id   = $_POST["id"];
    $pass = $_POST["pass"];


    $con = mysqli_connect("localhost", "pjw", "pjw20040715", "pjwweb");

	$sql = "INSERT INTO men(id, pass) ";
	$sql .= "VALUES('$id', '$pass')";

	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
    mysqli_close($con);

    echo "
	      <script>
	          location.href = '../index.php';
	      </script>
	  ";
?>
