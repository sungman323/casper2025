<?php

  include("./db_conn.php");

  $mb_id = trim($_POST['mb_id']);
  $mb_password = trim($_POST['mb_password']);

  $sql = "SELECT * FROM member WHERE mb_id = '$mb_id'";
  $result = mysqli_query($conn, $sql);
  $mb = mysqli_fetch_assoc($result);

  if(!$mb['mb_id'] || !(password_verify($mb_password, $mb['mb_password']))){
    echo "<script>alert('가입된 회원 아이디가 아니거나 비밀번호가 틀립니다. \\n비밀번호는 대소문자를 구분합니다.');</script>";
    echo "<script>location.replace('./login.php');</script>";
    exit;
  }

  $_SESSION['ss_mb_id'] = $mb_id;

  mysqli_close($conn);

  if(isset($_SESSION['ss_mb_id'])){
    echo "<script>alert('로그인 되었습니다.');</script>";
    echo "<script>location.replace('./index.html');</script>";
  }

?>