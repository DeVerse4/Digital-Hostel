<?php

function connect() {
    return mysqli_connect("localhost", "root", "", "digital_hostel", "3306");
}

<<<<<<< HEAD
<<<<<<< Updated upstream
function addUser($collegeid, $pass, $wmode, $name, $mailid,) {
=======
function addUser($collegeid, $name, $gender, $encrypted_password, $mailid,$verification_code) {
>>>>>>> Stashed changes
=======
function addUser($collegeid,  $name, $encrypted_password, $mailid,$verification_code) {
>>>>>>> 0d05c0f49b082def834475c1f974a8614b5c9cba
    $dsn = connect();
    $x = mysqli_query($dsn, "insert into tbllogin(`collegeid`,`pass`,`lastmodified`) values('$collegeid','$encrypted_password',now())");
    if ($x == 1) {
<<<<<<< HEAD
<<<<<<< Updated upstream
        $x = mysqli_query($dsn, "insert into tblregistration(`collegeid`, `name`, `mailid`, `lastmodified`) values('$collegeid','$name','$mailid',now())");
=======
        $x = mysqli_query($dsn, "insert into tblregistration(`collegeid`, `name`,`gender`, `mailid`, `verification_code`, `lastmodified`) values('$collegeid','$name','$gender','$mailid', '$verification_code',now())");
>>>>>>> Stashed changes
=======
        $x = mysqli_query($dsn, "insert into tblregistration(`collegeid`, `name`, `mailid`, `verification_code`, `lastmodified`) values('$collegeid','$name','$mailid', '$verification_code',now())");
>>>>>>> 0d05c0f49b082def834475c1f974a8614b5c9cba
        return $x;
    }
    return 0;
}

function checkId($collegeid, $pass) {
    $dsn = connect();
    $x = mysqli_query($dsn, "select wmode from tbllogin where collegeid='$collegeid' and binary pass='$pass'");
    return $x;
}

function fetchEmail($collegeid) {
    $dsn = connect();
    $x = mysqli_query($dsn, "select mailid from tblregistration where collegeid='$collegeid'");
    return $x;
}

function checkEmail($email) {
    $dsn = connect();
    $x = mysqli_query($dsn, "select verification_code from tblregistration where mailid='$email'");
    return $x;
}
function isVerified($collegeid) {
    $dsn = connect();
    $x = mysqli_query($dsn, "select verification_code,mailid from tblregistration where collegeid='$collegeid'");
    return $x;
}

function updateVerifyStatus($mailid) {
    $dsn = connect();
    mysqli_query($dsn, "update tblregistration set verification_code='verified' where mailid='$mailid'");
}

function addComplaint($collegeid, $subject, $msg) {
    $dsn = connect();
    $x = mysqli_query($dsn, "INSERT INTO `tblcomplaint`(`collegeid`, `subject`, `message`, `lastmodified`) VALUES('$collegeid','$subject','$msg',now())");
    return $x;
}

function getAllComplaintsReport() {
    $dsn = connect();
    $x = mysqli_query($dsn, "SELECT * from tblcomplaint order by 1");
    return $x;
}

function getUserComplaints($u) {
    $dsn = connect();
    $x = mysqli_query($dsn, "SELECT `sno`,`subject`,`message`,`lastmodified`,`complaint_status`,`resolvemessage`,`resolve_date` FROM `tblcomplaint` WHERE `collegeid` = '$u'");
    return $x;
}

function deleteComplaint($sno) {
    $dsn = connect();
    $x = mysqli_query($dsn, "delete from tblComplaint where sno = $sno");
    return $x;
}

function getComplaint($sno) {
    $dsn = connect();
    $x = mysqli_query($dsn, "select * from tblComplaint where sno = $sno");
    return $x;
}

function updComplaint($sno, $rmsg) {
    $dsn = connect();
    $x = mysqli_query($dsn, "update tblcomplaint set complaint_status='RESOLVED', resolvemessage='$rmsg', resolve_date=now() where sno = $sno");
    return $x;
}
function uploadPhoto($collegeid, $photo, $photoTag) {
    $dsn = connect();
    $x = mysqli_query($dsn, "INSERT INTO `tblgallery`(`collegeid`, `photo`, `phototag`, `upload_date`) VALUES ('$collegeid','$photo','$photoTag',now())");
    return $x;
}

function addMessage($name, $email, $subject, $message) {
    $dsn = connect();
    $x = mysqli_query($dsn, "INSERT INTO `tblcontact`(`name`, `email`, `subject`, `message`, `contact_datetime`) VALUES('$name','$email','$subject','$message',now())");
    return $x;
}
function fetchfaq(){
    $dsn = connect();
    $x = mysqli_query($dsn, "SELECT * FROM `tblfaq`");
    return $x;
}
