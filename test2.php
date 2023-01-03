<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<html>
<head><title>แบบทดสอบก่อนเรียนวิชาคอมพิวเตอร์เบื้องต้น</title>
</head>
<h1>ยินดีต้อนรับ </h1><br>
  </body>
<?

//1.กำหนดค่าตัวแปรวัน เวลา และคะแนนตั้งต้นที่ 0
$today=date("d-m-Y");
$time=date("h-i-s");
$score=0;

//2. รับและแสดงค่าตัวแปร ชื่อ ชั้น โรงเรียน
print "<b>คุณ</b> $name ";
print "<b>ชั้นเรียน</b> $class";
print "<b>โรงเรียน</b> $school<p>";
print "คำตอบแบบทดสอบก่อนเรียนวิชาคอมพิวเตอร์เบื้องต้นของคุณ $name <br>";

//3. แสดงวันและเวลาที่ทำแบบทดสอบ
print "ในวันที่ $today เวลา $time คือ<p>";

//4. เปรียบเทียบคำตอบและแสดงผลถูกผิดและเพิ่มคะแนนเข้าไปที่ตัวแปรคะแนน $score
print "<b>ข้อ1</b>. $test1<br>";
if ($test1=="monitor") {print"ถูกต้อง<p> "
; $score++;} else {print"ไม่ถูกต้อง <p>";}

print "<b>ข้อ2</b>. $test2<br>";
if ($test2=="keyboard") {print"ถูกต้อง<p>";
$score++;} else {print"ไม่ถูกต้อง<p>";}

//5. แสดงผลการรวมคะแนน
print "<br> <img src=scor.jpg><br>ได้คะแนนเท่ากับ $score <p>";

?>

</body>
</html>
