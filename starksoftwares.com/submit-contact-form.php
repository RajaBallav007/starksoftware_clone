<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    // $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'shuvrod564@gmail.com';                     //SMTP username
    $mail->Password   = 'cuhxmuysbemmpnhe';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('info@embraceindia.co.in', 'Novoclade');
    // $mail->addAddress('mail@soulisticholidays.com', 'Joe User');     //Add a recipient
    $mail->addAddress('info@novoclad.ae', 'Novoclade');     //Add a recipient 
  
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $_POST['name'] . '|' . $_POST['phone'];
    $mail->Body    = '
        <html> 
    		
    		<table width="100%" cellspacing="0" cellpadding="0" border="0">  
    			<tr>
    				<td style="border:1px solid #d5d2d2;border-bottom:0;padding:5px 10px;font-size:12px;font-weight:600;" width="90">Full Name</td>
    				<td style="border:1px solid #d5d2d2;border-bottom:0;padding:5px 10px;font-size:14px;border-left:0;">' . $_POST["name"] . '</td>
    			</tr> 
    			<tr>
    				<td style="border:1px solid #d5d2d2;border-bottom:0;padding:5px 10px;font-size:12px;font-weight:600;" width="90">Email Address</td>
    				<td style="border:1px solid #d5d2d2;border-bottom:0;padding:5px 10px;font-size:14px;border-left:0;">' . $_POST["email"] . '</td>
    			</tr>   
    			<tr>
    				<td style="border:1px solid #d5d2d2;border-bottom:0;padding:5px 10px;font-size:12px;font-weight:600;" width="90">Email Address</td>
    				<td style="border:1px solid #d5d2d2;border-bottom:0;padding:5px 10px;font-size:14px;border-left:0;">' . $_POST["phoneDialCode"] . ' ' . $_POST["phone"] . '</td>
    			</tr>   
    			<tr>
    				<td style="border:1px solid #d5d2d2;padding:5px 10px;font-size:12px;font-weight:600;" width="90">Message</td>
    				<td style="border:1px solid #d5d2d2;padding:5px 10px;font-size:14px;border-left:0;">' . $_POST["message"] . '</td> 
    			</tr> 
    		</table>
        </html>
    ';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo'<script>window.location.href = "thank-you.php";</script>';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}