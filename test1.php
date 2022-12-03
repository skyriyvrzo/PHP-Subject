<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<html>
<head><title>แบบทดสอบก่อนเรียนวิชาคอมพิวเตอร์เบื้องต้น</title>
</head>
<h1>ยินดีต้อนรับ </h1><br>
<?

print "<b>คุณ</b> $name ";
print "<b>ชั้นเรียน</b> $class";
print "<b>โรงเรียน</b> $school<p>";
print "คำตอบแบบทดสอบก่อนเรียนวิชาคอมพิวเตอร์เบื้องต้นของคุณ $name <br>";

print "<b>ข้อ1</b>. $test1<br>";
if ($test1=="monitor") {print"ถูกต้อง<p>";} else {print"ไม่ถูกต้อง<p>";}

print "<b>ข้อ2</b>. $test2<br>";
if ($test2=="keyboard") {print"ถูกต้อง<p>";} else {print"ไม่ถูกต้อง<p>";}
?>