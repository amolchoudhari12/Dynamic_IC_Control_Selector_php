<?php

  //error_reporting(E_ALL);
//error_reporting(E_STRICT);

date_default_timezone_set('America/Toronto');

require_once('OTEK_Mailer/class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();

//$body             = file_get_contents('contents.html');
//$body             = eregi_replace("[\]",'',$body);

print $email;
if(isset($MailType))
{
  $body = "Hi ".$customerName.", <br/> As per your request we are glad to provide you the Quotation details for the requested configured model. <br/> Please see the quote at below Link <br/> ".$url." <br/> Regards, <br/> OTEK Sales team.";
}
else 
{
	$body = "Hi ".$customerName.", <br/> Your request has been received. <br/> We will reply you shortly.<br/></br/> Request Details:<br/> Model Name: ".$ModelName." <br/> Quantities: ".$Quantities."<br/>P/N Number:".$ModelDigitsSequence ;
}
//$body .= "<br/>Model Name :.$_POST['modelName']." ;
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

// Add 5 CC to the mails

	if($cc1!= "")
	$mail->AddCC($cc1,"");
	
	if($cc2!= "")
		$mail->AddCC($cc2,"");

	if($cc3!= "")
		$mail->AddCC($cc3,"");

	if($cc4!= "")
		$mail->AddCC($cc4,"");

	if($cc5!= "")
		$mail->AddCC($cc5,"");



$mail->Subject    = "Thank you - OTEK!!!";

$mail->AltBody    = "Thank you for ordering. We will get back yo you soon!"; // optional, comment out and test

$mail->MsgHTML($body);


print $email;
$address = $email  ;
$mail->AddAddress($address, $customerName);


$mail->Send() ;
  ?>