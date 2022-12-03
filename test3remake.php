<html>
<head><title>แบบทดสอบก่อนเรียนวิชาคอมพิวเตอร์เบื้องต้น</title>
</head>
<h1>ยินดีต้อนรับ </h1><br>
<body>
<?
$today=date("d-m-Y");
$time=date("h-i-s");
$score=0;

print "<b>คุณ</b> $name ";
print "<b>ชั้นเรียน</b> $class";
print "<b>โรงเรียน</b> $school<p>";
print "คำตอบแบบทดสอบก่อนเรียนวิชาคอมพิวเตอร์เบื้องต้นของคุณ $name <br>";
print "ในวันที่ $today เวลา $time คือ<p>";

print "<b>ข้อ1</b>. $test1<br>";
if ($test1=="monitor") {print"ถูกต้อง<img src=t.gif><p> "
; $score++;} else {print"ไม่ถูกต้อง <img src=f.gif><p>";}

print "<b>ข้อ2</b>. $test2<br>";
if ($test2=="keyboard") {print"ถูกต้อง<img src=t.gif><p>";
$score++;} else {print"ไม่ถูกต้อง <img src=f.gif><p>";}

print "<br> <img src=scor.jpg><br>ได้คะแนนเท่ากับ $score <p>";

//การบันทึกระบบฐานข้อมูล MySQL

//ติดต่อโปรแกรมฐานข้อมูล MySQL
$link=mysql_connect("localhost","","");
if (!$link)
{
print("ERROR");
}
else
{
//ติดต่อฐานข้อมูล MySQL ชื่อ test
              mysql_select_db("test",$link);
}
//เปิด ตารางชื่อ testcom และ เขตข้อมูล ชื่อ name,class,school,today,time,score
$sql="insert into testcom (name,class,school,today,time,score)
                        values ('$name','$class','$school','$today','$time','$score')";

//เพิ่มข้อมูลลง Database
$res = mysql_query( $sql , $link );
if ($res==1){
print("Adding to table OK.");}
else{
print("Error Adding to table. ");
}
//เปิดดูข้อมูล

print "<br><a href=show1.php>เปิดดูข้อมูล</a>";
?>

</body>
</html>
