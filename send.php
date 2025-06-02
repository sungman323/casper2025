<?php
include('./sub/header.php');

echo '<main>';

//값이 잘받아오는지 확인
// $subject = $_POST(['subject']);
// echo $subject . '<br>';

// 빈 필드가 있는지 확인하는 구문
if(empty($_POST['name'])  		|| // post로 넘어온 name값이 비었는지 확인
   empty($_POST['email']) 		|| // email값이 비었는지 확인
   empty($_POST['subject']) 		|| // phone값이 비었는지 확인
   empty($_POST['msg'])	|| // message값이 비었는지 확인
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) // 전달된 이메일 값이 유효한 이메일값인지 검증
  {
    echo "인수를 확인해주세요!";
    return false;
  }
?>
  <div class='sub_top'>
      <nav>홈 &gt; 고객지원 &gt; <b>구매상담신청</b></nav>
      <h2>구매상담신청</h2>
      <p>상담 신청이 완료되었습니다. 감사합니다!</p><br>
      <button onclick="location.replace('qna.php');">뒤로가기</button>
  </div>

<?php
// Cross-Site Scripting (XSS)을 방지하는 시큐어코딩
// strip_tags() -> 문자열에서 html과 php태그를 제거한다
// htmlspecialchars() -> 특수 문자를 HTML 엔터티로 변환
// 악의적인 특수문자 삽입에 대비하기 위함

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$subject = strip_tags(htmlspecialchars($_POST['subject']));
$message = strip_tags(htmlspecialchars($_POST['msg']));
$qna_kind = $_POST['mb_type'];
	
// 이메일을 생성하고 메일을 전송하는 부분
$to = 'amets62@naver.com'; // 받는 측의 이메일 주소를 기입하는 부분
$email_subject = "FROM:  $name"; // 메일 제목에 해당하는 부분
$email_body = "본 메일은 홈페이지 폼메일로부터 전송된 이메일입니다.\n\n"."세부정보는 다음과 같습니다.\n\nQnA분류: $qna_kind\n\nSubject: $subject\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "Reply-To: $email_address\r"; // 답장 주소

mail($to,'=?UTF-8?B?'.base64_encode($email_subject).'?=',$email_body,$headers);
// return true;

echo '</main>';

include('./sub/footer.php');
?>