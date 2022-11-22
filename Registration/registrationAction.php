<?php
    include_once '../admin.php';
    if (isset($_POST["submit"])) {
        $collegeid = $_POST['collegeid'];
        $name = $_POST["name"];
        $mailid = $_POST['mailid'];
        $password = $_POST["pass"];
        $confirmPassword = $_POST['confirmPassword'];
    }

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';
    
    //Mailer instantiation
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'deverse2022@gmail.com';
        $mail->Password   = 'bzhslpbktuskxeom';  
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;  

        //Recipients
        $mail->setFrom('deverse2022@gmail.com', 'admin@DeVerse');

        $mail->addAddress($mailid, $name);
        $mail->isHTML(true);                                  
        $verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
        $mail->Subject = 'Verification Code for Arya Bhatta Hostel Registration';
        $mail->Body    = "<p>Welcome to Arya Bhatta Hostel,</p>
        <p>Your verification code is: <b style='font-size: 30px;'>'.$verification_code</b> </p>";

        $mail->send();

        // $encrypted_password = /*password_hash*/($password, PASSWORD_DEFAULT);
        $encrypted_password = $password;

        $x = addUser($collegeid,  $name, $encrypted_password, $mailid,$verification_code);

        if($x == 1)
            header("location: email.php?email=$mailid");
        else 
            header("location:registration.php?t=0");
    
        if(var_dump($encrypted_password) != $confirmPassword) {
            echo "Passwords do not match";
        }
        
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    