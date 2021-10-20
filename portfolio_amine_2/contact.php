<?php

include "./vendor/autoload.php";

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
include "./librairies/phpmailer/src/PHPMailer.php";
use PHPMailer\PHPMailer\PHPmailer ;

date_default_timezone_get("Europe/Paris");
$mail = new PHPMailer();



$body = "Mon message";
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Host = gethostname('smtp.gmail.com');
$mail->Port = 587;
$mail->Username = 'amine.aboudaoud@gmail.com';
$mail->Password = 'Marseille';
$mail->setFrom('amineazur9@gmail.com');
$mail->addReplyTo('amineazur9@gmail.com');
$mail->addAddress('amine.aboudaoud@gmail.com');
$mail->Subject = "test";
$mail->msgHTML("ton post message avec les html");

                    
if (!$mail->send()){
    echo "Mailer a deconné";
}else{
    echo "l message a été envoyé";
}



// if(isset($_POST) && isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['sujet']) && isset($_POST['message'])){

   


//     extract($_POST);
//     if(!empty($nom) && !empty($email) && !empty($sujet) &&!empty($message)){

//         $message =str_replace("\'","'",$message);
//         $destinataire = "amine.aboudaoud@gmail.com";
//         $sujet ="Formulaire de contact";
//         $message = "Une nouvelle question \n

//         Nom : $nom \n   
//         Email : $email \n 
//         Message : $message";
//         $entete = "Form : $nom \n Replay-To $email";

//         mail($destinataire, $sujet, $message, $entete);

//         echo "Le mail à bien été envoyé";


//     }
//     else{

//         echo "Voun n'avez pas remplis tous les champs";
//     }
//     include 'index.html';
// }





?>