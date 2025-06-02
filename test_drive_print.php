<?php
  include('./sub/header.php');
?>
<main class="print">
  <h2>현대자동차 시승신청 예약현황</h2>
  <table>
    <thead>
      <tr>
        <th>번호</th>
        <th>고객명</th>
        <th>연락처</th>
        <th>SMS수신여부</th>
        <th>이메일</th>
        <th>희망지점</th>
        <th>신청차량</th>
        <th>보유차량</th>
        <th>예약일</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $mysql_host = 'localhost';
        $mysql_user = 'man323';
        $mysql_password = 'qkdgkrehd3!';
        $mysql_db = 'man323';

        $conn = mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_db);

        if(!$conn) die('연결실패 : '.mysqli_connect_error());

        if(isset($_POST['search'])){
          $search = $_POST['search'];
          $search_k = $_POST['search_k'];
          $query = "SELECT * FROM test_drive WHERE ".$search_k." like '%".$search."%'";
          if($_POST['search']=='') $query = "SELECT * FROM test_drive";
        } else {
          $query = "SELECT * FROM test_drive";
        }
        $result = mysqli_query($conn, $query);

        while($row = mysqli_fetch_row($result)){
          print "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td></tr>";
        }

        mysqli_close($conn);
      ?>
    </tbody>
  </table>
  <a href="test_drive.php" title="">시승신청 예약하기</a>
  <form action="test_drive_print.php" method="post" name="예약조회">
    <input type="text" name="search" placeholder="검색어 입력">
    <select name="search_k">
      <option value="name">예약자명</option>
      <option value="phone">연락처</option>
    </select>
    <input type="submit">
  </form>
</main>
<?php
  include('./sub/footer.php');
?>