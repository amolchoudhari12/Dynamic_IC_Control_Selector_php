<html>
<head>
<title>PHPMailer - SMTP basic test with authentication</title>
</head>
<body>

<form post
<?php
$email = $_GET['email'];

print $email ;


//error_reporting(E_ALL);
error_reporting(E_STRICT);

date_default_timezone_set('America/Toronto');

require_once('../class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();

$body             = file_get_contents('contents.html');
$body             = eregi_replace("[\]",'',$body);

$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "smtp.softdel.com"; // SMTP server
$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Host       = "smtp.softdel.com"; // sets the SMTP server
$mail->Port       = 25;                    // set the SMTP port for the GMAIL server
$mail->Username   = "test"; // SMTP account username
$mail->Password   = "pass@123";        // SMTP account password

$mail->SetFrom('pravas.panda@softdel.com', 'Pravas Panda');

$mail->AddReplyTo("amol.choudhari@softdel.com","Amol Choudhari");

$mail->Subject    = "Thank you - OTEK!!!";

$mail->AltBody    = "Thank you for ordering. We will get back yo you soon!"; // optional, comment out and test

$mail->MsgHTML($body);

$address = $email  ;
$mail->AddAddress($address, "AC");

//$mail->AddAttachment("images/phpmailer.gif");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

$mail->Send() ;

header('Location: http://172.16.10.210/OTEK100/Thank-you.php'); 


?>

</body>
</html>
