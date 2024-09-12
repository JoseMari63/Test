<?php
// error_reporting(E_ALL ^E_WARNING) to supress warnings all together
$errorMessage = '';
 if (!empty($_POST)) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $subject = $_POST['subject'];
   $message = $_POST['message'];

   $toEmail = "novastylo2@novastylo.es";
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $errorMessage = 'Dirección correo invalida';
   }
      if (empty($errorMessage)) {
//       $toEmail = 'novastylo2@smtp.demo';
       $emailSubject = 'Web-' . $subject;
       $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=utf-8'];
       // Additional headers
        $headers1[] = 'To: novastylo2@novastylo.es';
        $headers1[] = 'From: $name <$email>';
       $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", $message];
       $body = join(PHP_EOL, $bodyParagraphs);
//       if (@mail($toEmail, $emailSubject, $body, http_build_query($headers,':','\r\n'))) 
       if (@mail($toEmail, $emailSubject, $body)) 
       {
           $error = false;
              $errorMessage =  "OK" ;
       } else {
           $error = true;
           $errorMessage = "Oops, algo fue mal. Intentalo de nuevo."  ;
       }
   } 
	header("Location: ../index.html?errorMessage={$errorMessage}#contact");
 }
?>
