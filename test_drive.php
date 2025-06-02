<?php
  include('./sub/header.php');
?>
  <main class="input test_drive">
    <div class='sub_top'>
      <nav>홈 &gt; 체험 &gt; <b>시승 신청</b></nav>
      <h2>시승 신청</h2>
      <p>캐스퍼가 제공하는 편리한 시승 서비스를 이용해보세요.</p>
    </div>
    <article>
      <h2 style="display:none;">시승신청 온라인 예약</h2>
      <form action="db_insert.php" method="post" name="시승신청">
        <fieldset>
          <legend>시승신청 온라인 예약</legend>
          <p><label for="name" class="left">고객명 : </label><input type="text" id="name" name="name" required maxlength="10"></p>
          <p><label for="phone" class="left">휴대폰 : </label><input type="text" id="phone" name="phone" required maxlength="11"></p>
          <p class="p_sms"><span class="left">SMS수신여부 : </span>
            <label for="s01">수신</label><input type="radio" name="sms" id="s01" value="Y">
            <label for="s02">수신안함</label><input type="radio" name="sms" id="s02" value="N">
          </p>
          <p><label for="email" class="left">이메일 주소 : </label><input type="email" name="email" required></p>
          <p>
            <label for="region" class="left">전시장 선택 : </label>
            <select name="region" id="region" required>
              <option value="">전시장 선택</option>
              <option value="강남점">강남점</option>
              <option value="송파점">송파점</option>
              <option value="한남점">한남점</option>
            </select>
          </p>
          <p>
            <label for="s_car" class="left">차량 선택 : </label>
            <select name="s_car" id="s_car" required>
              <option value="">차량선택</option>
              <option value="캐스퍼">캐스퍼</option>
              <option value="캐스퍼 터보">캐스퍼 터보</option>
              <option value="캐스퍼 인스">캐스퍼 인스퍼레이션</option>
              <option value="아반떼">아반떼</option>
              <option value="소나타">소나타</option>
              <option value="그랜저">그랜저</option>
              <option value="제네시스">제네시스</option>
            </select>
          </p>
          <p><label for="my_car" class="left">보유차종 : </label><input type="text" name="my_car" required></p>
          <p><label for="e_date" class="left">시승희망일 : </label><input type="date" name="e_date" required></p>
          <p><input type="submit" value="예약하기"><input type="reset" value="취소하기"></p>
          <a href="test_drive_print.php" title="">예약현황 보기</a>
        </fieldset>
      </form>
    </article>
  </main>
<?php
  include('./sub/footer.php');
?>