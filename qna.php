<?php
  include('./sub/header.php');
?>

<main class="input qna">
  <div class='sub_top'>
    <nav>홈 &gt; 고객지원 &gt; <b>구매상담신청</b></nav>
    <h2>구매상담신청</h2>
    <p>
      캐스퍼에 대해 궁금한 것이 있으시다면 상담을 신청해주세요.<br>
      전문 상담사가 캐스퍼 차량 구매 정보를 신속하고 정확하게 알려드립니다.
    </p>
  </div>
  <section>
    <h2>온라인 문의하기</h2>
    <form name="qna" method="post" action="send.php" onsubmit="return form_check();">
      <fieldset>
        <legend>온라인 문의</legend>
        <p>
          <label for="subject">제목 &#42;</label><input type="text" name="subject" id="subject" placeholder="제목을 입력하세요" required>
        </p>
        <p>
          <label for="name">성명 &#42;</label><input type="text" name="name" id="name" placeholder="이름을 입력하세요" required maxlength="5">
        </p>
        <p>
          <label for="email">이메일 &#42;</label><input type="email" name="email" id="email" placeholder="id@domain" required>
        </p>
        <p>
          <label for="mb_type">문의유형 &#42;</label>
          <select name="mb_type" id="mb_type">
            <option value="">선택해주세요.</option>
            <option value="차량/모델 선택">차량/모델 선택</option>
            <option value="구매 절차(계약/결재/인수/등록)">구매 절차(계약/결재/인수/등록)</option>
            <option value="구매혜택/이벤트">구매혜택/이벤트</option>
            <option value="홈페이지 이용">홈페이지 이용</option>
            <option value="기타">기타</option>
          </select>
        </p>
        <div>
          <label for="msg">문의내용 &#42;</label>
          <div class="count_box">
            (<input type="text" name="txtLen" size="3" manlength="3" value="500" readonly class="count"> / 500자) 글자 남았습니다.
          </div>
        </div>
        <textarea name="msg" id="msg" rows="10" onkeydown="txtCount(this.form.msg, this.form.txtLen, 500);" onkeyup="txtCount(this.form.msg, this.form.txtLen, 500);"></textarea>
        <div class="agree">
          <div class="privacy">
            <span>(필수) 개인정보 수집 및 이용 동의</span>
            <label for="r01">동의함</label>
            <input type="radio" value="r01" id="r01" name="a">
            <label for="r02">동의안함</label>
            <input type="radio" value="r02" id="r02" name="a">
            <i class="fas fa-angle-down"></i>
          </div>
          <div class="con">
            <p>(필수) 개인정보 수집 및 이용 동의</p>
            <ol>
              <li>수집·이용하는 개인 정보의 항목 : [필수] 성명, 휴대폰번호, 연계 정보(CI), 문의 내용, 상담을 통해 생성된 정보</li>
              <li>개인정보 수집·이용 목적 : 상담 신청 고객관리, 차량 구매 관련 상담 및 문의 대응, 고지사항 전달, 고객 요청 정보 제공(카탈로그, 견적서 등) 등</li>
              <li>개인정보 보유 및 이용기간 : 정보 수집 직후 1년 간 보유 및 이용 후 파기</li>
            </ol>
            <p>&#x203B; 개인정보 수집 및 이용에 동의할 경우, 구매상담을 위해 전문 상담사가 연락을 드릴 예정입니다.</p>
            <p>&#x203B; 개인정보 수집 및 이용에 동의를 하지 않을 경우, 구매상담에 제한을 받을 수 있습니다.</p>
            <p>본인은 현대자동차가 상기와 같이 본인의 개인정보를 수집·이용하는 것에 대하여 동의합니다.</p>
          </div>
        </div>
        <div id="btn_g">
          <input type="reset" value="취소">
          <input type="submit" value="등록">
        </div>
      </fieldset>
    </form>
  </section>
</main>

<script>
  
    function form_check(){
      if($("#mb_type").val()==""){
        alert("문의 유형을 선택해야 합니다.");
        $("#mb_type").focus();
        return false;
      }
      if($('input[name="a"]:checked').val()=="r02"){
        alert("개인정보 수집 및 이용 약관에 동의하셔야 합니다.");
        $('input[name="a"]').focus();
        return false;
      }
      return true;
    }

    function txtCount(msg, txtLen, maxlimit){
      if(msg.value.length>maxlimit){
        msg.value = msg.value.substring(0, maxlimit);
      } else {
        txtLen.value = maxlimit - msg.value.length;
      }
    }

    $('.con').hide();

    $('.privacy .fa-angle-down').click(function(){
      if($(this).attr('class')=='fas fa-angle-down'){
        $(this).attr('class', 'fas fa-angle-up');
        $('.con').show();
      } else {
        $(this).attr('class', 'fas fa-angle-down');
        $('.con').hide();
      }
    });

</script>

<?php
  include('./sub/footer.php');
?>