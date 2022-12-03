<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<html>
<head><title>แบบทดสอบก่อนเรียนวิชาคอมพิวเตอร์</title></head>
<h1>ยินดีต้อนรับ</h1><br>
<body>
<?
$today = date("d-m-Y");
$time = date("h-i-s");
$score = 0;

print"<b>คุณ</b> $name";
print"<b>ชั้นเรียน </b> $class";
print"<b>โรงเรียน </b> $school <p>";
print"คำตอบแบบทดสอบก่อนเรียนวิชาคอมพิวเตอร์เบื้องต้นของคุณ $name <br>";
print"ในวันที่ $today เวลา $time คือ<p>";

print"<b>ข้อ 1</b>. $test1<br>";
if($test1=="monitor"){
	print"ถูกต้อง <img src=t.gif><p>";
	$score++;
	}
else{
	print"ไม่ถูกต้อง <img src=f.gif><p>";
	}
	
print"<b>ข้อ 2</b>. $test2<br>";
if($test1=="keyboard"){
	print"ถูกต้อง <img src=t.gif><p>";
	$score++;
	}
else{
	print"ไม่ถูกต้อง <img src=f.gif><p>";
	}
	
print"<br><img src=score.jpg><br> ได้คะแนนเท่ากับ $score<p>";

	$link = mysql_connect("localhost","root","g12345678");
	if(!$link){
		print"ERROR";
		}
	else{
		mysql_select_db("test", $link);
		}
	$sql = "insert into testcom(name,class,school,today,time,score)
	values('$name','$class','$school','$today','$time','$score')";
	
	$res = mysql_query($sql, $link);
	if($res==1){
		print"Adding to table OK.";
		}
	else{
		print"Error Adding to table.";
		}
print"<br> <a href=show1.php>เปิดดูข้อมูล</a>";

?>
</body>
</html>