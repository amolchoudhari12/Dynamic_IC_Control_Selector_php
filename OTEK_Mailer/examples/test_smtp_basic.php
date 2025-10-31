<html>
<head>
<title>PHPMailer - SMTP basic test with authentication</title>
</head>
<body>

<form post
<?php

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
$mail->Username   = "amol.choudhari"; // SMTP account username
$mail->Password   = "pass@123";        // SMTP account password

$mail->SetFrom('amol.choudhari@softdel.com', 'Amol Choudhari');

$mail->AddReplyTo("amol.choudhari@softdel.com","Amol Choudhari");

$mail->Subject    = "Nakkkkkkiiiiiiiiiiiiiiiiii";

$mail->AltBody    = "This is makhhan !!! Enjoy"; // optional, comment out and test

$mail->MsgHTML($body);

$address = "amol.choudhari@softdel.com";
$mail->AddAddress($address, "nakki");

//$mail->AddAttachment("images/phpmailer.gif");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "<h1> Message sent...Nakki............ </h1>";
}

?>

</body>
</html>
