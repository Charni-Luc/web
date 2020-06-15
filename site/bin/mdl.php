<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function mdlctcttrtmt() {
    /*ini_set("SMTP", "smtp.gmail.com");
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])) {
        $to = 'charni1998@gmail.com';
        $sujet = $_POST['subject'];
        $message = $_POST['message'];
        $entete = 'From:' . $_POST['email'] . "\r\n" .
                'Reply-to:' . $_POST['email'] . "\r\n" .
                'X-Mailer:PHP/' . phpversion();
        //die(var_dump($message));
        if (mail($to, $sujet, $message, $entete)) {
            echo 'Message envoyé';
        } else {
            echo 'Une erreur est survenue lors de l\'envoi du message. Merci de ressayer !';
        }*/
    // Check for empty fields
//ini_set("SMTP", "smtp.gmail.com");
//ini_set("smtp_port","465");
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['subject'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['subject']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Create the email and send the message
$to = 'charni1998@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nSubject: $phone\n\nMessage:\n$message";
$headers = "From: charni1998@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
    
}

function mdldmdcdttrtmt() {
    ini_set("SMTP", "smtp.gmail.com");
    if (!empty($_POST['email']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['tel']) && !empty($_POST['adresse']) && !empty($_POST['postal']) && !empty($_POST['pays']) && !empty($_POST['ville']) && !empty($_POST['durée']) && !empty($_POST['pret'])) {
        $to = 'charni1998@gmail.com';
        $sujet = 'Demande de prêt';
        $message = " Votre formulaire de demande de pret a ete bien enregistre \r\n";
        $message .= "Email: " . $_POST['email'] . "\r\n";
        $message .= "\r\n Nom: " . $_POST['nom'] . "\r\n";
        $message .= " \r\n Prenoms: " . $_POST['prenom'] . "\r\n";
        $message .= "Telephone: " . $_POST['tel'] . "\r\n";
        $message .= "Adresse: " . $_POST['adresse'] . "\r\n";
        $message .= "Code Postal: " . $_POST['postal'] . "\r\n";
        $message .= "Pays: " . $_POST['pays'] . "\r\n";
        $message .= "Ville: " . $_POST['ville'] . "\r\n";
        $message .= "Duree du pret: " . $_POST['durée'] . "\r\n";
        $message .= "Montant du pret: " . $_POST['pret'] . "\r\n";
        $entete = 'From:' . $_POST['email'] . "\r\n" .
                'Reply-to:' . $_POST['email'] . "\r\n" .
                'X-Mailer:PHP/' . phpversion();
        die(var_dump($message));
        if (mail($to, $sujet, $message, $entete)) {
            echo 'Message envoyé';
        } else {
            echo 'Une erreur est survenue lors de l\'envoi du message. Merci de ressayer !';
        }
    }
}
