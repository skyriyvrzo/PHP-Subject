<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<html>
<head><title>แบบทดสอบก่อนเรียนวิชาคอมพิวเตอร์เบื้องต้น</title></head>
<h1>ยินดีต้อนรับ</h1><br>
<body>
<?
$today = date("d-m-Y");
$time = date("h-i-s");
$score = 0;

print "<b>คุณ</b> $name";
print "<b>ชั้นเรียน</b> $class";
print "<b>โรงเรียน</b> $school <br>";
print "คำตอบแบบทดสอบก่อนเรียนวิชาคอมพิวเตอร์เบื้องต้นของคุณ $name <br>";
print "ในวันที่ $today เวลา $time คือ<p>";

print "<b>ข้อ 1</b>.$test1<br>";
if($test=="monitor"){
	print"ถูกต้อง";
	$score++;
	}
else{
	print"ไม่ถูกต้อง <p>";
	}
	
print "<b>ข้อ 2</b>.$test2<br>";
if($test=="keyboard"){
	print"ถูกต้อง";
	$score++;
	}
else{
	print"ไม่ถูกต้อง <p>";
	}
?>
</body>
</html>