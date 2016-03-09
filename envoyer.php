<?php

// Get values from the form
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$dossier=$_POST['dossier'];
$message=$_POST['message'];

$to = "francois.hibon@cabinet-watel.fr";
$subject = "Mon Contact Form";
$message = " Nom: " . $name . "\r\n E-Mail: " . $email . "\r\n Téléphone: " . $phone . "\r\n Dossier: " . $dossier . "\r\n Message: " . $message;


$from = "Site cabinet watel";
$headers = "From:" . $from . "\r\n";
$headers = "Content-type: text/plain; charset=UTF-8" . "\r\n"; 

if(@mail($to,$subject,$message,$headers))
{
    print "<script>document.location.href='contact.php';</script>";
}else{
    echo "Erreur! Veuillez Remplir les Champs Requis.";

};


?>
