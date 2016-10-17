<?php
require_once('db.php');
require_once("PHPMailer/PHPMailerAutoload.php");


ini_set('display_errors', 1);

function sanitizeData($data = ''){
    return trim(htmlspecialchars($data));
}


function sendMail($email = ""){

	$to= $email;
	$sub='Regarding your resume submission to dnet.org.bd';
	$msg= '
	   <html>
	   <body>
	   <p style="line-height:30px">Dear Applicant,</p>
		<p style="font-size:12px;line-height:5px;">We sincerely appreciate your interest in Dnet and acknowledge receipt of your resume.</p>
		<p style="font-size:12px;line-height:5px;">Please be informed that your application will undergo initial screening as required by job descriptions.</p>
		<p style="font-size:12px;line-height:5px;">You will be duly notified in case of any job opening that best matches your credentials.</p>
		<p style="font-size:12px;line-height:40px;">Regards</p>
		<p style="font-size:12px;line-height:5px;color:#003300;">People & Culture Department</p>
		<p style="font-size:12px;line-height:5px;"><img src="http://www.resume.dnet.org.bd/assets/logo.jpg" alt="logo"/>  </p>
		<p style="font-size:12px;line-height:5px;"><a href="mailto: hr@dnet.org.bd">e-mail: hr@dnet.org.bd</a></p>
		<p style="font-size:12px;color:#003300;line-height:5px;">Office: 4/8 Humayun Road, Block-B, Mohammadpur, Dhaka-1217.</p>
		<p style="font-size:12px;color:#003300;line-height:5px;">Phone: +8809606016227, +8809606003638; Fax: - (+8802)8142021. </p>
		<p style="font-size:12px;color:#003300;line-height:5px;"><a href="www.dnet.org.bd">URL: www.dnet.org.bd</a></p>
		</body>
		</html>';
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	// Additional headers
	$headers .= 'From: <hr@dnet.org.bd>' . "\r\n";


  return mail($to,$sub,$msg,$headers);
}


function sendMailSmtp($email = ""){
    $mail = new PHPMailer;

    $mail->isSMTP();                            // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                     // Enable SMTP authentication
    $mail->Username = 'manozcsejstu@gmail.com';          // SMTP username
    $mail->Password = 'manoz@dnet#'; // SMTP password
    $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                          // TCP port to connect to

    $mail->setFrom('manoz.biswas@dnet.org.bd', 'Dnet');
    $mail->addReplyTo('manoz.biswas@dnet.org.bd', 'Dnet');
    $mail->addAddress($email);   // Add a recipient
    $mail->addCC('manoz.biswas@dnet.org.bd');
    $mail->addBCC('manoz.biswas@dnet.org.bd');

    $mail->isHTML(true);  // Set email format to HTML
    //$mail->AddEmbeddedImage('logo.jpg', 'logo');
    $bodyContent = '<p style="line-height:30px">Dear Applicant,</p>';
    $bodyContent .= '<p style="font-size:12px;line-height:5px;">We sincerely appreciate your interest in Dnet and acknowledge receipt of your resume.</p>';
    $bodyContent .='<p style="font-size:12px;line-height:5px;">Please be informed that your application will undergo initial screening as required by job descriptions.</p>';
    $bodyContent .= '<p style="font-size:12px;line-height:5px;">You will be duly notified in case of any job opening that best matches your credentials.</p>';
    $bodyContent .= '<p style="font-size:12px;line-height:40px;">Regards</p>';
    $bodyContent .= '<p style="font-size:12px;line-height:5px;color:#003300;">People & Culture Department</p>';
     $bodyContent .= '<p style="font-size:12px;line-height:5px;"><img src="http://www.resume.dnet.org.bd/assets/logo.jpg" alt="logo"/>  </p>';
    $bodyContent .= '<p style="font-size:12px;line-height:5px;"><a href="mailto: hr@dnet.org.bd">e-mail: hr@dnet.org.bd</a></p>';
    $bodyContent .= '<p style="font-size:12px;color:#003300;line-height:5px;">Office: 4/8 Humayun Road, Block-B, Mohammadpur, Dhaka-1217.</p>';
    $bodyContent .= '<p style="font-size:12px;color:#003300;line-height:5px;">Phone: +8809606016227, +8809606003638; Fax: - (+8802)8142021. </p>';
    $bodyContent .= '<p style="font-size:12px;color:#003300;line-height:5px;"><a href="www.dnet.org.bd">URL: www.dnet.org.bd</a></p>';
    $mail->Subject = "Regarding your application to dnet.org.bd";
    $mail->Body    = $bodyContent;

    if(!$mail->send()) {
//        echo 'Message could not be sent.';
//        echo 'Mailer Error: ' . $mail->ErrorInfo;
//        return 'Message could not be sent.' .'</br>Mailer Error: ' . $mail->ErrorInfo;
        return false;
    } else {
        return true;
//        return 'Message has been sent';
    }
}