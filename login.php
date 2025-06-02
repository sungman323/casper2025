<?php
  include('./sub/header.php');
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>로그인 페이지</title>
  <style>
    legend{display:none;}
    main{background:#eee;}
    .login_box{
      width:600px; height:500px;
      margin:0px auto;
      padding: 150px 0px;
    }
    .login_box > h2{
      font-size: 28px;
      font-weight: bold;
      text-align: center;
      margin-bottom: 50px;
    }
    .login_box > form > fieldset > p{
      margin: 10px auto;
    }
    .login_box > form > fieldset > p > input[type='text'], .login_box > form > fieldset > p > input[type='password']{
      display: inline-block;
      width: 100%; height: 50px;
      border:1px solid #eee;
      text-indent: 20px;
      font-size: 16px;
      font-family: 'Noto Sans KR', '맑은 고딕', sans-serif;
    }
    .login_box > form > fieldset > p > input[type='checkbox']{
      margin: 20px 5px;
    }
    .login_box > form > fieldset > p > label{
      font-size: 16px;
    }
    .login_box > form > fieldset > button{
      display: inline-block;
      width: 100%; height: 50px;
      border:1px solid var(--s_color01);
      background: var(--s_color01);
      color: #fff;
      font-size: 16px;
    }
    .login_box > form > fieldset > ul{
      display: flex;
      justify-content: space-around;
      margin: 30px 0px;
    }
    .login_box > form > fieldset > ul > li{
      width: 200px;
      text-align: center;
      border-right:1px solid #333;
    }
    .login_box > form > fieldset > ul > li:last-child{
      border-right:none;
    }
    .login_box > form > fieldset > ul > li > a{
      font-size: 14px;
    }
  </style>
</head>
<body>
  <main>
    <div class="login_box">
      <h2>로그인</h2>
      <form action="login_check.php" method="post" name="로그인">
        <fieldset>
          <legend>로그인</legend>
          <p><input type="text" name="mb_id" placeholder="아이디를 입력해주세요" maxlength="15" required></p>
          <p><input type="password" name="mb_pw" placeholder="비밀번호를 입력해주세요" maxlength="16" required></p>
          <p><input type="checkbox" name="save_id" id="save_id"><label for="save_id">아이디 저장</label></p>
          <button type="submit">로그인</button>
          <ul>
            <li><a href="#" title="아이디 찾기">아이디 찾기</a>
            </li>
            <li><a href="#" title="비밀번호 찾기">비밀번호 찾기</a>
            </li>
            <li><a href="register.php" title="회원가입">회원가입</a></li>
          </ul>      
        </fieldset>
      </form>
    </div>
  </main>
</body>
</html>


<?php
  include('./sub/footer.php');
?>