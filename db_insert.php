<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>시승신청 결과</title>
  <style>
    h2{
      text-align: center;
      font-size: 24px;
      color: red;
    }
    table{
      width: 1200px;
      margin: 0 auto; padding: 0;
      border: 1px solid #ccc;
      text-align: center;
    }
    th{
      background: #ccc;
    }
    td{
      background: #ffdbdb;
    }
    a{
      display: block;
      width: 200px; height: 40px;
      text-align: center;
      background: #056bad;
      color: #fff;
      line-height: 40px;
      margin:0 auto;
      margin-top: 30px;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <h2>신청하신 결과는 아래와 같습니다.</h2>
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
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $sms = $_POST['sms'];
        $email = $_POST['email'];
        $region = $_POST['region'];
        $s_car = $_POST['s_car'];
        $my_car = $_POST['my_car'];
        $e_date = $_POST['e_date'];

        $mysql_host = 'localhost';
        $mysql_user = 'root';
        $mysql_password = '1234';
        $mysql_db = 'kdt';

        $conn = mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_db);

        if(!$conn) die('연결실패 : '.mysqli_connect_error());

        $query = "INSERT INTO test_drive(name, phone, sms, email, region, s_car, my_car, e_date) VALUE('$name','$phone','$sms','$email','$region','$s_car','$my_car','$e_date')";

        mysqli_query($conn, $query);

        $query = "SELECT * FROM test_drive ORDER BY code DESC LIMIT 1;";
        $result = mysqli_query($conn, $query);

        $row = mysqli_fetch_row($result);

        print "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td></tr>";

        mysqli_close($conn);
      ?>
    </tbody>
  </table>
  
  <a href="test_drive_input.html" title="">시승신청 예약하기</a>

  <!-- <script>
    setTimeout(function(){
      location.replace('index.html');
    }, 3000);
  </script> -->
</body>
</html>
