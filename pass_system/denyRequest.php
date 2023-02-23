<?php

include "../admin.php";
include "mail.php";
$sno = $_GET["id"];
// $code = "$_SESSION['id'].rand(1000,2000)";
$dsn = connect();
$query = mysqli_query($dsn, "UPDATE `passgeneration` SET status='Denied' WHERE status ='Pending' and sno = $sno");
if ($query == 1) {
  $query = mysqli_query($dsn, "select * from `passgeneration` where sno = $sno");
  $rs = mysqli_fetch_row($query);
  $q1 = mysqli_query($dsn, "select mailid from tblRegistration where collegeid='$rs[2]'");
  $subject = 'Pass Generated';
  $message .= '<div style="border:2px solid #4b49ac; border-radius: 10px; padding: 1rem; background-color:#fff; color:#222; width: 500px;">';
  $message .= '<h1 style="text-align:center;">VGI Hostel, Dadri</h1>';
  $message .= ' <h2 style="text-align:center; ">GATE PASS (for Hostellers)</h2>';
  $message .= '<h3 style="text-align:center;">Online Generated Pass</h3>';
  $message .= '<div>';
  $message .= '<h3 style="display: flex; flex-direction: row; gap: 10px;">';
  $message .= '<b>Pass Id: </b><span>' . $rs[10] . '</span>';
  $message .= '</h3>';
  $message .= '</div>';
  $message .= '<div style="width: 80%; text-transform: uppercase;">';
  $message .= '<div>';
  $message .= '<h3 style="display: flex; flex-direction: row; justify-content: space-between; ">
                    <b>Hosteller Name :</b>';
  $message .= '<span style="width:200px; text-align: end;">' . $rs[1] . '</span>';
  $message .= '</h3>';
  $message .= '</div>';
  $message .= '<div>';
  $message .= '<h3 style="display: flex; flex-direction: row; justify-content: space-between; "><b>College
                        ID :</b>';
  $message .= '<span style="width:200px; text-align: end;">' . $rs[2] . '</span>';
  $message .= ' </h3>';
  $message .= '</div>';
  $message .= '<div>';
  $message .= '<h3 style="display: flex; flex-direction: row; justify-content: space-between; "><b>Room No
                        :</b>';
  $message .= '<span style="width:200px; text-align: end;">' . $rs[3] . '</span>';
  $message .= '</h3>';
  $message .= '</div>';
  $message .= '<div>';
  $message .= '<h3 style="display: flex; flex-direction: row; justify-content: space-between; "><b>Phone No
                        :</b>';
  $message .= '<span style="width:200px; text-align: end;">' . $rs[4] . '</span>';
  $message .= '</h3>';
  $message .= ' </div>';
  $message .= '<div>';
  $message .= '<h3 style="display: flex; flex-direction: row; justify-content: space-between; ">';
  $message .= '<b>Visiting Address :</b>';
  $message .= '<span style="width:200px; text-align: end;">' . $rs[5] . '</span>';
  $message .= '</h3>';
  $message .= ' </div>';
  $message .= '<div>';
  $message .= '<h3 style="display: flex; flex-direction: row; justify-content: space-between; ">';
  $message .= '<b>Purpose :</b>';
  $message .= '<span style="width:200px; text-align: end;">' . $rs[6] . '</span>';
  $message .= '</h3>';
  $message .= ' </div>';
  $message .= '<div>';
  $message .= '<h3 style="display: flex; flex-direction: row; justify-content: space-between; ">';
  $message .= '<b>Departure Date/Time :</b>';
  $message .= '<span style="width:200px; text-align: end;">' . $rs[7] . '</span>';
  $message .= '</h3>';
  $message .= ' </div>';
  $message .= '<div>';
  $message .= '<h3 style="display: flex; flex-direction: row; justify-content: space-between; "><b>Return
                        Date:</b>';
  $message .= '<span style="width:200px; text-align: end;">' . $rs[8] . '</span>';
  $message .= '</h3>';
  $message .= ' </div>';
  $message .= '<div>';
  $message .= '<h3 style="display: flex; flex-direction: row; justify-content: space-between; ">';
  $message .= '<b>Pass Status:</b>';
  $message .= '<span style="width:200px;.color:red; text-align: end;">Denied</span>';
  $message .= '</h3>';
  $message .= ' </div>';
  $message .= ' </div>';
  $message .= ' </div>';
  $r = mysqli_fetch_row($q1);
  send_mail($subject, $message, $r[0]);
} else {
  echo "Data not inserted";
}
session_start();
$_SESSION['denyPass'] = "Pass request denied ❌ & status send on the Student mail Id";
header("location:passReport.php");

?>