<?php
function connect()
{
    return mysqli_connect("localhost", "root", "", "digital_hostel", "3306");
}
function addUser($collegeid, $name, $encrypted_password, $mailid, $verification_code)
{
    $dsn = connect();
    $x = mysqli_query($dsn, "INSERT INTO tbllogin(`collegeid`,`pass`,`lastmodified`) values('$collegeid','$encrypted_password',now())");
    if ($x == 1) {
        $x = mysqli_query($dsn, "INSERT INTO tblregistration(`collegeid`, `name`, `mailid`, `verification_code`, `lastmodified`) values('$collegeid','$name','$mailid', '$verification_code',now())");
        return $x;
    }
    return 0;
}
function checkId($collegeid, $pass)
{
    $dsn = connect();
    $x = mysqli_query($dsn, "SELECT `wmode`,`name` FROM `tblLogin` e,`tblRegistration` r WHERE e.`collegeid`='$collegeid' AND BINARY `pass`='$pass' AND e.`collegeid` = r.`collegeid`");
    return $x;
}
function fetchEmail($collegeid)
{
    $dsn = connect();
    $x = mysqli_query($dsn, "SELECT mailid from tblregistration where collegeid='$collegeid'");
    return $x;
}
function getRoomNo()
{
    $dsn = connect();
    $x = mysqli_query($dsn, "SELECT roomno,floor,wing,hostalname from tblRoom order by 1");
    return $x;
}
function roomAlloted($collegeid, $roomno, $roomtype, $roomstatus, $roomallotmentdate)
{
    $dsn = connect();
    $x = mysqli_query($dsn, "INSERT INTO tblroomallotment(`collegeid`, `roomno`, `roomtype`, `roomstatus`, `allotmentdate`) values('$collegeid','$roomno','$roomtype','$roomstatus',now())");
    return $x;
}
function getAllRooms()
{
    $dsn = connect();
    $x = mysqli_query($dsn, "SELECT r.roomno,r.roomtype,r.floor,r.wing,a.allotmentdate,a.collegeid,reg.name FROM tblroom r,tblroomallotment a,tblregistration reg WHERE r.roomno=a.roomno AND a.collegeid=reg.collegeid");
    return $x;
}
function getCollegeId()
{
    $dsn = connect();
    $x = mysqli_query($dsn, "SELECT collegeId,name,mobile from tblRegistration order by 1");
    return $x;
}
function checkEmail($email)
{
    $dsn = connect();
    $x = mysqli_query($dsn, "SELECT verification_code from tblregistration where mailid='$email'");
    return $x;
}
function isVerified($collegeid)
{
    $dsn = connect();
    $x = mysqli_query($dsn, "SELECT verification_code,mailid from tblregistration where collegeid='$collegeid'");
    return $x;
}
function updateVerifyStatus($mailid)
{
    $dsn = connect();
    mysqli_query($dsn, "update tblregistration set verification_code='verified' where mailid='$mailid'");
}
function addComplaint($collegeid, $subject, $msg)
{
    $dsn = connect();
    $x = mysqli_query($dsn, "INSERT INTO `tblcomplaint`(`collegeid`, `subject`, `message`, `lastmodified`) VALUES('$collegeid','$subject','$msg',now())");
    return $x;
}
function getAllComplaintsReport()
{
    $dsn = connect();
    $x = mysqli_query($dsn, "SELECT * from tblcomplaint order by 1");
    return $x;
}
function getUserComplaints($u)
{
    $dsn = connect();
    $x = mysqli_query($dsn, "SELECT `sno`,`subject`,`message`,`lastmodified`,`complaint_status`,`resolvemessage`,`resolve_date` FROM `tblcomplaint` WHERE `collegeid` = '$u'");
    return $x;
}
function deleteComplaint($sno)
{
    $dsn = connect();
    $x = mysqli_query($dsn, "delete from tblComplaint where sno = $sno");
    return $x;
}
function getComplaint($sno)
{
    $dsn = connect();
    $x = mysqli_query($dsn, "SELECT * from tblComplaint where sno = $sno");
    return $x;
}
function updComplaint($sno, $rmsg)
{
    $dsn = connect();
    $x = mysqli_query($dsn, "update tblcomplaint set complaint_status='RESOLVED', resolvemessage='$rmsg', resolve_date=now() where sno = $sno");
    return $x;
}
function uploadPhoto($collegeid, $photo, $photoTag)
{
    $dsn = connect();
    $x = mysqli_query($dsn, "INSERT INTO `tblgallery`(`collegeid`, `photo`, `phototag`, `upload_date`) VALUES ('$collegeid','$photo','$photoTag',now())");
    return $x;
}
function fetchPhoto($n)
{
    $dsn = connect();
    $x = mysqli_query($dsn, "SELECT `photo` FROM `tblgallery` WHERE `s.No` = $n");
    return $x;
}
function showPhoto()
{
    $dsn = connect();
    $x = mysqli_query($dsn, "SELECT * from tblgallery order by 1 desc");
    return $x;
}
function addMessage($name, $email, $subject, $message)
{
    $dsn = connect();
    $x = mysqli_query($dsn, "INSERT INTO `tblcontact`(`name`, `email`, `subject`, `message`, `contact_datetime`) VALUES('$name','$email','$subject','$message',now())");
    return $x;
}
function fetchfaq()
{
    $dsn = connect();
    $x = mysqli_query($dsn, "SELECT * FROM `tblfaq`");
    return $x;
}
function singeleUserComplaint($collegeid)
{
    $dsn = connect();
    $x = mysqli_query($dsn, "SELECT * FROM `tblcomplaint` WHERE `collegeid` = '$collegeid'");
    return $x;
}
function addPass($name, $collegeid, $room_no, $phone_no, $destination, $purpose, $out_date, $return_date, $passid)
{
    $dsn = connect();
    $x = mysqli_query($dsn, "INSERT INTO `passgeneration`(`name`, `college_id`, `room_no`, `phone_no`, `destination`, `purpose`, `out_date`,returndate,passid) VALUES ('$name','$collegeid','$room_no','$phone_no','$destination','$purpose','$out_date','$return_date','$passid')");
    return $x;
}
function uploadUserPhoto($id, $photo)
{
    $dsn = connect();
    $data = file_get_contents($photo);
    $data = addslashes($data);
    $xx = isPhoto($id);
    $r = mysqli_fetch_row($xx);
    if ($r[0] == 0)
        $x = mysqli_query($dsn, "INSERT INTO `tblphoto`(`userid`, `photo`, `uploaddate`) VALUES ('$id','$data',now())");
    else
        $x = mysqli_query($dsn, "update tblphoto set photo = '$data' where userid= '$id'");
    return $x;
}
function getPhoto($uid)
{
    $dsn = connect();
    $x = mysqli_query($dsn, "SELECT `photo` FROM tblPhoto where userid = '$uid'");
    return $x;
}
function isPhoto($uid)
{
    $dsn = connect();
    $x = mysqli_query($dsn, "SELECT count(*) FROM tblPhoto where userid = '$uid'");
    return $x;
}
function getProfile($id)
{
    $dsn = connect();
    $x = mysqli_query($dsn, "SELECT * FROM tblregistration where collegeid='$id'");
    return $x;
}
function updProfile($id, $name, $dob)
{
    $dsn = connect();
    //echo "update tblregistration set name='$name',dob = '$dob' where collegeid='$id'";
    $x = mysqli_query($dsn, "update tblregistration set name='$name',dob = '$dob' where collegeid='$id'");
    return $x;
}
function addAcademic($id, $course, $branch, $uni, $roll, $year)
{
    $dsn = connect();
    $x = mysqli_query($dsn, "select count(*) from tblAcademic where collegeid = '$id'");
    $r = mysqli_fetch_row($x);
    if ($r[0] == 0)
        $x = mysqli_query($dsn, "insert into tblAcademic(collegeid,course,branch,university,roll,gyear,lastmodified) values('$id','$course','$branch' ,'$uni','$roll','$year',now())");
    else
        $x = mysqli_query($dsn, "update tblAcademic set course='$course',branch='$branch',university='$uni',roll='$roll',gyear='$year' where collegeid='$id'");

    return $x;
}

function getAcademic($id)
{
    $dsn = connect();
    $x = mysqli_query($dsn, "SELECT * FROM tblAcademic where collegeid='$id'");
    return $x;
}
function getState()
{
    $dsn = connect();
    $x = mysqli_query($dsn, "SELECT * FROM tblstate order by 1");
    return $x;
}
function addContactInfo($id, $mobile, $mailid, $hometown, $pin, $address)
{
    $dsn = connect();
    $x = mysqli_query($dsn, "select count(*) from tblContactDetails where collegeid = '$id'");
    $r = mysqli_fetch_row($x);
    if ($r[0] == 0)
        $x = mysqli_query($dsn, "insert into tblContactDetails(collegeid,mobile,mailid,hometown,pin,address,lastmodified) values('$id','$mobile','$mailid' ,'$hometown','$pin','$address',now())");
    else
        $x = mysqli_query($dsn, "update tblContactDetails set mobile='$mobile',mailid='$mailid',hometown='$hometown',pin='$pin',address='$address',lastmodified=now() where collegeid='$id'");
    return $x;
}

function getContactInfo($id)
{
    $dsn = connect();
    $x = mysqli_query($dsn, "SELECT * FROM tblContactDetails where collegeid='$id'");
    return $x;
}
function getCity()
{
    $dsn = connect();
    $x = mysqli_query($dsn, "SELECT city FROM tblCity order by 1");
    return $x;
}
function getRoom($id)
{
    $dsn = connect();
    $x = mysqli_query($dsn, "SELECT roomno FROM tblroomallotment where collegeid='$id'");
    $rs = mysqli_fetch_row($x);
    if (isset($rs[0]))
        return $rs[0];
    else
        return "NA";
}
function getMobile($id)
{
    $dsn = connect();
    $x = mysqli_query($dsn, "SELECT mobile FROM tblcontactdetails where collegeid='$id'");
    $rs = mysqli_fetch_row($x);
    if (isset($rs[0]))
        return $rs[0];
    else
        return "";
}
function uploadNotice($title, $description, $data)
{
    $dsn = connect();
    $x = mysqli_query($dsn, "INSERT INTO `tblnotices`(`title`, `description`, `noticefile`, `noticedate`) VALUES ('$title','$description','$data',now())");
    return $x;
}
function fetchNotice($n){
    $dsn = connect();
    $x = mysqli_query($dsn, "SELECT * FROM tblnotices order by noticedate desc limit $n");
    return $x;
}
function fetchAllNotice()
{
    $dsn = connect();
    $x = mysqli_query($dsn, "SELECT * FROM tblnotices order by noticedate desc");
    return $x;
}
function addFeedback($name, $userid, $mailid, $mobile, $msg)
{
    $dsn = connect();
    $x = mysqli_query($dsn, "INSERT INTO `tblfeedback`(`NAME`, `USERId`, `EMAILID`, `MOBILE`, `MESSAGE`, `DATE_OF_FEEDBACK`) VALUES('$name','$userid','$mailid','$mobile','$msg',now())");
    return $x;
}
function getFeedbackReport()
{
    $dsn = connect();
    $x = mysqli_query($dsn, "SELECT * FROM `tblfeedback` ORDER BY 1");
    return $x;
}
function deleteFeedback($sno)
{
    $dsn = connect();
    $x = mysqli_query($dsn, "DELETE FROM `tblfeedback` WHERE `SNO` = $sno");
    return $x;
}