<?php
require 'vendor/autoload.php'; // Include the Stripe PHP library

require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

// Set your Stripe secret key here
\Stripe\Stripe::setApiKey('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');

// Retrieve the request's body and parse it as JSON
$payload = @file_get_contents('php://input');
$signature = $_SERVER['HTTP_STRIPE_SIGNATURE'];
$secret = 'whsec_SDuGESoCGr8wDnyfhkoA6PvTSHOe3WNq'; // Your webhook signing secret

// Verify the webhook signature
try {
    $event = \Stripe\Webhook::constructEvent(
        $payload, $signature, $secret
    );
} catch(\UnexpectedValueException $e) {
    // Invalid payload
    http_response_code(400); // Bad Request
    echo 'Invalid Payload';
    exit();
} catch(\Stripe\Exception\SignatureVerificationException $e) {
    // Signature verification failed
    http_response_code(400); // Bad Request
    echo 'Signature Verification Failed';
    exit();
}

// Handle the event
switch ($event->type) {
    case 'checkout.session.completed':
        $session = $event->data->object; // The checkout session object
        $customerEmail = $session->customer_details->email; // Extracting the customer's email

        // TODO: Do something with the customer's email, such as storing it in a database

				$mysqli = new mysqli("localhost", "htmlbtes_notbyai", "qaFnox-4zinmy-hapbyx", "htmlbtes_notbyai");

				if ($mysqli->connect_error) {
				  die("Connection failed: " . $mysqli->connect_error);
				}

				// Prepare the SQL statement
				$stmt = $mysqli->prepare("INSERT INTO customers (email) VALUES (?)");
				$stmt->bind_param("s", $customerEmail);

				// Execute the statement and check for errors
				if ($stmt->execute()) {
				  echo "Record saved successfully";

				  // Send a thank-you email to the customer
			    $mail = new PHPMailer(true); // Passing `true` enables exceptions
			    try {
			        //Server settings
			        $mail->isSMTP();                                            //Send using SMTP
			        $mail->CharSet    = 'UTF-8';
			        $mail->Host       = 'smtp.mail.me.com';                     //Set the SMTP server to send through
			        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
			        $mail->Username   = 'allenwhsu@icloud.com';                     //SMTP username
			        $mail->Password   = 'zxcw-xkri-poxc-kjtu';                               //SMTP password
			        $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
			        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

			        //Recipients
			        $mail->setFrom('hello@notbyai.fyi', 'Not By AI');
			        $mail->addAddress($customerEmail); 

			        //Content
			        $mail->isHTML(true);                                  //Set email format to HTML
			        $mail->Subject = 'Here are your Not By AI badges';
			        $mail->Body    = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office"><head> <meta charset="UTF-8"> <meta content="width=device-width, initial-scale=1" name="viewport"> <meta name="x-apple-disable-message-reformatting"> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <meta content="telephone=no" name="format-detection"> <title></title><!--[if (mso 16)]> <style type="text/css"> a{text-decoration: none;}</style><![endif]--><!--[if gte mso 9]><xml> <o:OfficeDocumentSettings> <o:AllowPNG></o:AllowPNG> <o:PixelsPerInch>96</o:PixelsPerInch> </o:OfficeDocumentSettings></xml><![endif]--><style>#outlook a{padding: 0;}.nba-button{mso-style-priority: 100 !important; text-decoration: none !important;}a[x-apple-data-detectors]{color: inherit !important; text-decoration: none !important; font-size: inherit !important; font-family: inherit !important; font-weight: inherit !important; line-height: inherit !important;}.nba-desk-hidden{display: none; float: left; overflow: hidden; width: 0; max-height: 0; line-height: 0; mso-hide: all;}.nba-button-border:hover a.nba-button,.nba-button-border:hover button.nba-button{background: #56d66b !important;}.nba-button-border:hover{border-color: #42d159 #42d159 #42d159 #42d159 !important; background: #56d66b !important;}td .nba-button-border:hover a.nba-button-1685833640367{background: #333333 !important;}td .nba-button-border-1685833640377:hover{background: #333333 !important; border-style: solid solid solid solid !important; border-color: #42d159 #42d159 #42d159 #42d159 !important;}[data-ogsb] .nba-button.nba-button-1685833640367{padding: 10px 40px !important;}body{width: 100%; font-family: arial, helvetica, sans-serif; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;}table{mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; border-spacing: 0px;}table td,body,.nba-wrapper{padding: 0; Margin: 0;}.nba-content,.nba-header,.nba-footer{table-layout: fixed !important; width: 100%;}img{display: block; border: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic;}p,hr{Margin: 0;}h1,h2,h3,h4,h5{Margin: 0; line-height: 120%; mso-line-height-rule: exactly; font-family: arial, helvetica, sans-serif;}p,ul li,ol li,a{-webkit-text-size-adjust: none; -ms-text-size-adjust: none; mso-line-height-rule: exactly;}.nba-left{float: left;}.nba-right{float: right;}.nba-p5{padding: 5px;}.nba-p5t{padding-top: 5px;}.nba-p5b{padding-bottom: 5px;}.nba-p5l{padding-left: 5px;}.nba-p5r{padding-right: 5px;}.nba-p10{padding: 10px;}.nba-p10t{padding-top: 10px;}.nba-p10b{padding-bottom: 10px;}.nba-p10l{padding-left: 10px;}.nba-p10r{padding-right: 10px;}.nba-p15{padding: 15px;}.nba-p15t{padding-top: 15px;}.nba-p15b{padding-bottom: 15px;}.nba-p15l{padding-left: 15px;}.nba-p15r{padding-right: 15px;}.nba-p20{padding: 20px;}.nba-p20t{padding-top: 20px;}.nba-p20b{padding-bottom: 20px;}.nba-p20l{padding-left: 20px;}.nba-p20r{padding-right: 20px;}.nba-p25{padding: 25px;}.nba-p25t{padding-top: 25px;}.nba-p25b{padding-bottom: 25px;}.nba-p25l{padding-left: 25px;}.nba-p25r{padding-right: 25px;}.nba-p30{padding: 30px;}.nba-p30t{padding-top: 30px;}.nba-p30b{padding-bottom: 30px;}.nba-p30l{padding-left: 30px;}.nba-p30r{padding-right: 30px;}.nba-p35{padding: 35px;}.nba-p35t{padding-top: 35px;}.nba-p35b{padding-bottom: 35px;}.nba-p35l{padding-left: 35px;}.nba-p35r{padding-right: 35px;}.nba-p40{padding: 40px;}.nba-p40t{padding-top: 40px;}.nba-p40b{padding-bottom: 40px;}.nba-p40l{padding-left: 40px;}.nba-p40r{padding-right: 40px;}.nba-menu td{border: 0;}.nba-menu td a img{display: inline-block !important; vertical-align: middle;}s{text-decoration: line-through;}p,ul li,ol li{font-family: arial, helvetica, sans-serif; line-height: 150%;}ul li,ol li{Margin-bottom: 15px; margin-left: 0;}a{text-decoration: underline;}.nba-menu td a{text-decoration: none; display: block; font-family: arial, helvetica, sans-serif;}.nba-wrapper{width: 100%; height: 100%; background-repeat: repeat; background-position: center top;}.nba-wrapper-color,.nba-wrapper{background-color: #f6f6f6;padding-top:10px;}.nba-header{background-color: transparent; background-repeat: repeat; background-position: center top;}.nba-header-body{background-color: #ffffff;margin-top:10px;}.nba-header-body p,.nba-header-body ul li,.nba-header-body ol li{color: #333333; font-size: 14px;}.nba-header-body a{color: #000000; font-size: 14px;}.nba-content-body{background-color: #ffffff;}.nba-content-body p,.nba-content-body ul li,.nba-content-body ol li{color: #333333; font-size: 14px;}.nba-content-body a{color: #000000; font-size: 14px;}.nba-footer{background-color: transparent; background-repeat: repeat; background-position: center top;}.nba-footer-body{background-color: #ffffff;}.nba-footer-body p,.nba-footer-body ul li,.nba-footer-body ol li{color: #333333; font-size: 14px;}.nba-footer-body a{color: #ffffff; font-size: 14px;}.nba-infoblock,.nba-infoblock p,.nba-infoblock ul li,.nba-infoblock ol li{line-height: 120%; font-size: 12px; color: #cccccc;}.nba-infoblock a{font-size: 12px; color: #cccccc;}h1{font-size: 50px; font-style: normal; font-weight: normal; color: #333333; text-align: center;}h2{font-size: 24px; font-style: normal; font-weight: normal; color: #333333;}h3{font-size: 20px; font-style: normal; font-weight: normal; color: #333333;}.nba-header-body h1 a,.nba-content-body h1 a,.nba-footer-body h1 a{font-size: 30px;}.nba-header-body h2 a,.nba-content-body h2 a,.nba-footer-body h2 a{font-size: 24px;}.nba-header-body h3 a,.nba-content-body h3 a,.nba-footer-body h3 a{font-size: 20px;}a.nba-button,button.nba-button{display: inline-block; background: #31cb4b; border-radius: 30px; font-size: 18px; font-family: arial, helvetica, sans-serif; font-weight: normal; font-style: normal; line-height: 120%; color: #ffffff; text-decoration: none; width: auto; text-align: center; padding: 10px 20px 10px 20px; mso-padding-alt: 0; mso-border-alt: 10px solid #31cb4b;}.nba-button-border{border-style: solid solid solid solid; border-color: #000000 #000000 #000000 #000000; background: #31cb4b; border-width: 0px 0px 2px 0px; display: inline-block; border-radius: 30px; width: auto;}.msohide{mso-hide: all;}@media only screen and (max-width: 600px){p, ul li, ol li, a{line-height: 150% !important;}h1, h2, h3, h1 a, h2 a, h3 a{line-height: 120% !important;}h1{font-size: 30px !important; text-align: left;}h2{font-size: 24px !important; text-align: left;}h3{font-size: 20px !important; text-align: left;}.nba-header-body h1 a, .nba-content-body h1 a, .nba-footer-body h1 a{font-size: 30px !important; text-align: left;}.nba-header-body h2 a, .nba-content-body h2 a, .nba-footer-body h2 a{font-size: 24px !important; text-align: left;}.nba-header-body h3 a, .nba-content-body h3 a, .nba-footer-body h3 a{font-size: 20px !important; text-align: left;}.nba-menu td a{font-size: 14px !important;}.nba-header-body p, .nba-header-body ul li, .nba-header-body ol li, .nba-header-body a{font-size: 14px !important;}.nba-content-body p, .nba-content-body ul li, .nba-content-body ol li, .nba-content-body a{font-size: 14px !important;}.nba-footer-body p, .nba-footer-body ul li, .nba-footer-body ol li, .nba-footer-body a{font-size: 14px !important;}.nba-infoblock p, .nba-infoblock ul li, .nba-infoblock ol li, .nba-infoblock a{font-size: 12px !important;}*[class="gmail-fix"]{display: none !important;}.nba-m-txt-c, .nba-m-txt-c h1, .nba-m-txt-c h2, .nba-m-txt-c h3{text-align: center !important;}.nba-m-txt-r, .nba-m-txt-r h1, .nba-m-txt-r h2, .nba-m-txt-r h3{text-align: right !important;}.nba-m-txt-l, .nba-m-txt-l h1, .nba-m-txt-l h2, .nba-m-txt-l h3{text-align: left !important;}.nba-m-txt-r img, .nba-m-txt-c img, .nba-m-txt-l img{display: inline !important;}.nba-button-border{display: inline-block !important;}a.nba-button, button.nba-button{font-size: 18px !important; display: inline-block !important;}.nba-adaptive table, .nba-left, .nba-right{width: 100% !important;}.nba-content table, .nba-header table, .nba-footer table, .nba-content, .nba-footer, .nba-header{width: 100% !important; max-width: 600px !important;}.nba-adapt-td{display: block !important; width: 100% !important;}.adapt-img{width: 100% !important; height: auto !important;}.nba-m-p0{padding: 0px !important;}.nba-m-p0r{padding-right: 0px !important;}.nba-m-p0l{padding-left: 0px !important;}.nba-m-p0t{padding-top: 0px !important;}.nba-m-p0b{padding-bottom: 0 !important;}.nba-m-p20b{padding-bottom: 20px !important;}.nba-mobile-hidden, .nba-hidden{display: none !important;}tr.nba-desk-hidden, td.nba-desk-hidden, table.nba-desk-hidden{width: auto !important; overflow: visible !important; float: none !important; max-height: inherit !important; line-height: inherit !important;}tr.nba-desk-hidden{display: table-row !important;}table.nba-desk-hidden{display: table !important;}td.nba-desk-menu-hidden{display: table-cell !important;}.nba-menu td{width: 1% !important;}table.nba-table-not-adapt, .esd-block-html table{width: auto !important;}table.nba-social{display: inline-block !important;}table.nba-social td{display: inline-block !important;}.nba-desk-hidden{display: table-row !important; width: auto !important; overflow: visible !important; max-height: inherit !important;}}html,body{font-family: arial, helvetica, sans-serif;}</style></head><body data-new-gr-c-s-loaded="9.66.0"> <div class="nba-wrapper-color"><!--[if gte mso 9]> <v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t"> <v:fill type="tile" color="#f6f6f6"></v:fill> </v:background><![endif]--> <table class="nba-wrapper" width="100%" cellspacing="0" cellpadding="0"> <tbody> <tr> <td class="esd-email-paddings" valign="top"> <table class="esd-header-popover nba-header" cellspacing="0" cellpadding="0" align="center"> <tbody> <tr> <td class="esd-stripe" align="center"> <table class="nba-header-body" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center"> <tbody> <tr> <td class="esd-structure nba-p30t nba-p20b nba-p20r nba-p20l" align="left"> <table cellpadding="0" cellspacing="0" width="100%"> <tbody> <tr> <td width="560" class="esd-container-frame" align="center" valign="top"> <table cellpadding="0" cellspacing="0" width="100%"> <tbody> <tr> <td align="center" class="esd-block-image" style="font-size: 0px;"><a target="_blank" href="https://notbyai.fyi?utm_source=pre-creator-page-download-email&utm_medium=email&utm_campaign=operational&utm_content=logo"><img class="" src="https://notbyai.fyi/img/email/not-by-ai.png" alt="Not By AI" style="display: block;" width="145" title="Not By AI"></a></td></tr></tbody> </table> </td></tr></tbody> </table> </td></tr></tbody> </table> </td></tr></tbody> </table> <table class="nba-content" cellspacing="0" cellpadding="0" align="center"> <tbody> <tr> <td class="esd-stripe" align="center"> <table class="nba-content-body" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center"> <tbody> <tr> <td class="nba-p10t nba-p20r nba-p20l esd-structure" align="left"> <table width="100%" cellspacing="0" cellpadding="0"> <tbody> <tr> <td class="esd-container-frame" width="560" valign="top" align="center"> <table width="100%" cellspacing="0" cellpadding="0"> <tbody> <tr> <td align="center" class="esd-block-text nba-p10b"> <h1 style="font-size: 50px; font-family: helvetica, arial, verdana, sans-serif; text-align: center;"><strong>Your Badges Are Here</strong></h1> </td></tr><tr> <td align="center" class="esd-block-image" style="font-size: 0px;"><a target="_blank" href="https://notbyai.fyi/download?utm_source=pre-creator-page-download-email&utm_medium=email&utm_campaign=operational&utm_content=header-img"><img class="adapt-img" src="https://notbyai.fyi/img/email/not-by-ai-header.jpg" alt="Download the Not By AI Badges" style="display: block;" width="560" title="Download the Not By AI Badges"></a></td></tr></tbody> </table> </td></tr></tbody> </table> </td></tr><tr> <td class="esd-structure nba-p20t nba-p20r nba-p20l" align="left"> <table cellpadding="0" cellspacing="0" width="100%"> <tbody> <tr> <td width="560" class="esd-container-frame" align="center" valign="top"> <table cellpadding="0" cellspacing="0" width="100%"> <tbody> <tr> <td align="left" class="esd-block-text nba-p15t"> <p style="font-size: 16px; color: #000000;">While you work on setting up the Creator Page, we want to go ahead and send you the Not By AI badges, the badges that help your audience recognize your human-first approach.</p></td></tr><tr> <td align="center" class="esd-block-button nba-p30"><!--[if mso]><a href="https://notbyai.fyi/download?utm_source=pre-creator-page-download-email&utm_medium=email&utm_campaign=operational&utm_content=download-badges" target="_blank" hidden> <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" esdevVmlButton href="https://notbyai.fyi/download?utm_source=pre-creator-page-download-email&utm_medium=email&utm_campaign=operational&utm_content=download-badges" style="height:39px; v-text-anchor:middle; width:246px" arcsize="0%" stroke="f" fillcolor="#000000"> <w:anchorlock></w:anchorlock> <center style="color:#ffffff; font-family:helvetica, arial, verdana, sans-serif; font-size:14px; font-weight:400; line-height:14px; mso-text-raise:1px">Download My Badges</center> </v:roundrect></a><![endif]--> <span class="msohide nba-button-border-1685833640377 nba-button-border" style="border-radius: 0px; border-width: 0px; border-color: #000000; background: #000000;"><a href="https://notbyai.fyi/download?utm_source=pre-creator-page-download-email&utm_medium=email&utm_campaign=operational&utm_content=download-badges" class="nba-button nba-button-1685833640367" target="_blank" style="font-size: 16px; font-family: helvetica, &quot;helvetica neue&quot;, arial, verdana, sans-serif; background: #000000; border-radius: 0px; font-weight: normal; padding: 10px 40px;">Download My Badges</a></span> </td></tr></tbody> </table> </td></tr></tbody> </table> </td></tr><tr> <td class="esd-structure nba-p10t nba-p20r nba-p20l" align="left"> <table cellpadding="0" cellspacing="0" width="100%"> <tbody> <tr> <td width="560" class="esd-container-frame" align="center" valign="top"> <table cellpadding="0" cellspacing="0" width="100%"> <tbody> <tr> <td align="left" class="esd-block-text"> <p style="font-size: 16px; color: #000000;">Once you downloaded it, you will find subfolders that contain the Not By AI badges in different languages. Add the Not By AI badge of your preferred language to your content. Link the badge to your Creator page (we will provide the link after approving your Creator Page) when possible to let your users understand why you are participating in the movement.</p><p style="font-size: 16px; color: #000000;"><br></p><p style="font-size: 16px; color: #000000;">If you have not already, <a href="https://notbyai.fyi/start?utm_source=pre-creator-page-download-email&utm_medium=email&utm_campaign=operational&utm_content=start-creator-page" style="font-size: 16px; font-weight:bold; color: #000000; text-decoration: underline;">submit your Creator Page</a> to get started.</p><p style="font-size: 16px; color: #000000;"><br></p><p style="font-size: 16px; color: #000000;">Looking forward to seeing your human-created content!<br><br><span style="font-size:14px; line-height: 16px;"><strong>Allen</strong><br>Founder of Not By AI</span></p></td></tr></tbody> </table> </td></tr></tbody> </table> </td></tr><tr> <td class="esd-structure nba-p20t nba-p20r nba-p20l" align="left"> <table cellpadding="0" cellspacing="0" width="100%"> <tbody> <tr> <td width="560" class="esd-container-frame" align="center" valign="top"> <table cellpadding="0" cellspacing="0" width="100%"> <tbody> <tr> <td align="center" class="esd-block-text"> <p style="font-size: 13px; color: #acacac;">&copy; 2024 Not By AI</p></td></tr></tbody> </table> </td></tr></tbody> </table> </td></tr></tbody> </table> </td></tr></tbody> </table> <table class="esd-footer-popover nba-footer" cellspacing="0" cellpadding="0" align="center"> <tbody> <tr> <td class="esd-stripe" align="center"> <table class="nba-footer-body" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center"> <tbody> <tr> <td class="esd-structure nba-p20t nba-p20b nba-p20r nba-p20l" align="left"><!--[if mso]><table width="560" cellpadding="0" cellspacing="0"><tr><td width="270" valign="top"><![endif]--> <table class="nba-left" cellspacing="0" cellpadding="0" align="left"> <tbody> <tr> <td class="nba-m-p20b esd-container-frame" width="270" align="left"> <table width="100%" cellspacing="0" cellpadding="0"> <tbody> <tr> <td class="esd-empty-container" style="display: none;" align="center"></td></tr></tbody> </table> </td></tr></tbody> </table> <table class="nba-right" cellspacing="0" cellpadding="0" align="right"> <tbody> <tr> <td class="esd-container-frame" width="270" align="left"> <table width="100%" cellspacing="0" cellpadding="0"> <tbody> <tr> <td class="esd-empty-container" style="display: none;" align="center"></td></tr></tbody> </table> </td></tr></tbody> </table> </td></tr></tbody> </table> </td></tr></tbody> </table> </td></tr></tbody> </table> </div></body></html>';

			        $mail->send();

			        // Content - Submission Notification Email
			        $mail->clearAddresses();                                   // Clear the recipient addresses
			        $mail->Subject = 'New Creator Page Subscriber';
			        $mail->Body = 'A user just subscribed to Creator Page.';
			        $mail->Body .= '<br><b>Email</b>: ' . $customerEmail;

			        // Send the submission notification email
			        $mail->addAddress('allen@notbyai.fyi');                // Your email address (for submission notification)
			        $mail->addAddress('ah@hotmail.com.tw');               //Backup
			        $mail->send();

			    } catch (Exception $e) {
			        echo 'Email could not be sent. Mailer Error: ', $mail->ErrorInfo;
			    }
				} else {
				  echo "Error: " . $stmt->error;
				}

				$stmt->close();
				$mysqli->close();



        break;

    // Add more case statements to handle other event types as needed

    default:
        echo 'Received unknown event type ' . $event->type;
}

http_response_code(200); // PHP 5.4 or greater, acknowledge receipt of the event
?>
