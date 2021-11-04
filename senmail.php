 <?php 
$mail_empfaenger  = "deine@mail.de";
$betreff          = "E-Mail Registrieren";
$text             = $_GET['email'];

    mail( $mail_empfaenger, $betreff, $text ); 

?>
