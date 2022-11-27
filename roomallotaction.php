<?php 
include 'admin.php';

$collegeid = $_REQUEST['collegeid'];
$roomno = $_REQUEST['roomno'];
$roomtype = $_REQUEST['roomtype'];
$roomstatus = $_REQUEST['roomstatus'];
$roomallotmentdate = $_REQUEST['roomallotmentdate'];

$x = roomAlloted($collegeid, $roomno, $roomtype, $roomstatus, $roomallotmentdate);
if ($x) {
    header('location:roomAllotment.php?r1=1');
} else {
    header('location:roomAllotment.php?r0=1');
}