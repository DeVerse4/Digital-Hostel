<?php
    function connect() {
        return mysqli_connect("localhost","root","","digital_hostel","3306");
    }

    function addUser($collegeid,$pass,$wmode,$name,$mailid,){
        $dsn = connect();
        $x = mysqli_query($dsn, "insert into tbllogin values('$collegeid','$pass','$wmode',now())");
        if($x == 1) {
            $x = mysqli_query($dsn, "insert into tblregistration(`collegeid`, `name`, `mailid`, `lastmodified`) values('$collegeid','$name','$mailid',now())");
            return $x;
        }
        return 0;
    }
    function checkId($collegeid,$pass) {
        $dsn = connect();
        $x = mysqli_query($dsn, "select wmode from tbllogin where collegeid='$collegeid' and binary pass='$pass'");
        return $x;
    }