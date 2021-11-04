 <?php 
$mail_empfaenger  = "silas.ostertun@gmail.com";
$betreff          = "E-Mail Registrieren";
$text             = $_GET['email'];

    mail( $mail_empfaenger, $betreff, $text ); 

?>
