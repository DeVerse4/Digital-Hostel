<?php
$ctr = (int) $_REQUEST["counter"];
$i = 0;
$timing = $_REQUEST["timing"];
$cid = array(100);
$att = array(100);
$cidv = array(100);
$attv = array(100);
include "../admin.php";
$dsn = connect();
$roomno = "1";
while ($i < $ctr) {
   $cid[$i] = "cid$i";
   $att[$i] = "att$i";
   $cidv[$i] = $_REQUEST[$cid[$i]];
   $attv[$i] = $_REQUEST[$att[$i]];
   $i++;
}
for ($i = 0; $i < $ctr; $i++) {
   $x = mysqli_query($dsn, "insert into tblAttendance(collegeid,roomid,attendance,timing,remarks,attendancedate) values('$cidv[$i]','$roomno','$attv[$i]','$timing','.',now())");
}
header("location:attendance@boys.php?tt=0");
?>