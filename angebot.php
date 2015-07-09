<?php
session_start();
if(isset($_POST['mail'])){
    // antiflood controle
    if (!empty($_SESSION['antiflood']))
    {
        $seconde = 20; // 20 seconds anti-flooding
        $tijd = time() - $_SESSION['antiflood'];
        if($tijd < $seconde)
            $antiflood = 1;
    }

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "emiratesbp@gmail.com";
    $email_subject = "Information zur Angebots anforderung!";

    // validation expected data exists
    if( !isset($_POST['naam']) ||
    !isset($_POST['mail']) ||
    !isset($_POST['checkbox-1a']) ||
    !isset($_POST['checkbox-2a']) ||
    !isset($_POST['checkbox-3a']) ||
    !isset($_POST['checkbox-4a']) ||
    !isset($_POST['checkbox-5a']) ||
    !isset($_POST['checkbox-6a']) ||
    !isset($_POST['checkbox-7a']) ||
        !isset($_POST['telefoon']) ||
    !isset($_POST['firma']) ||
    !isset($_POST['radio-choice-1']) ||
    !isset($_POST['radio-choice-2']) ||
    !isset($_POST['interesse']) ||
    !isset($_POST['adr']) ||
    !isset($_POST['ort']) ||
    !isset($_POST['fax']) ||
    !isset($_POST['select-choice-1']) ||
        !isset($_POST['bericht'])) {
    header("Location: index.php#error");
    }

    $first_name = $_POST['naam']; // required
    $email_from = $_POST['mail']; // required
    $telephone = $_POST['telefoon']; // not required
    $checkbox1a = $_POST['checkbox-1a']; // not required
    $checkbox2a = $_POST['checkbox-2a']; // not required
    $checkbox3a = $_POST['checkbox-3a']; // not required
    $checkbox4a = $_POST['checkbox-4a']; // not required
    $checkbox5a = $_POST['checkbox-5a']; // not required
    $checkbox6a = $_POST['checkbox-6a']; // not required
    $checkbox7a = $_POST['checkbox-7a']; // not required

    $firma = $_POST['firma']; // not required
    $radiochoice1 = $_POST['radio-choice-1']; // not required
    $radiochoice2 = $_POST['radio-choice-2']; // not required
    $interesse = $_POST['interesse']; // not required
    $adr = $_POST['adr']; // not required
    $ort = $_POST['ort']; // not required
    $fax = $_POST['fax']; // not required
    $selectchoice1 = $_POST['select-choice-1']; // not required
  $subject  = $_POST['onderwerp']; // not required
    $comments = $_POST['bericht']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message = "error";
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
    $error_message = "error";
  }
  if(strlen($comments) < 2) {
    $error_message = "error";
  }
  if(strlen($error_message) > 0) {
    header("Location: index.html#error");
  }

    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

  $datum = date('d/m/Y H:i:s');

  $email_message = "===================================================\n";
  $email_message .= "Angebots anfrage über der Mobilen Webseite " . $_SERVER['HTTP_HOST'] . "\n";
  $email_message .= "===================================================\n\n";
    $email_message .= "Anrede: ".clean_string($radiochoice1)."\n\n";
    $email_message .= "Anrede: ".clean_string($radiochoice2)."\n\n";
    $email_message .= "Name: ".clean_string($first_name)."\n";
    $email_message .= "Firma: ".clean_string($firma)."\n\n";
    $email_message .= "Tel: ".clean_string($telephone)."\n";
    $email_message .= "Telefax: ".clean_string($fax)."\n\n";
    $email_message .= "E-mail: ".clean_string($email_from)."\n";
    $email_message .= "Staße, Nr.: ".clean_string($adr)."\n\n";
    $email_message .= "PLZ, Ort: ".clean_string($ort)."\n\n";
    $email_message .= "Betreff: ".clean_string($subject)."\n";
    $email_message .= "Nachricht: ".clean_string($comments)."\n\n";
    $email_message .= "Sonstige Interessen: ".clean_string($interesse)."\n\n";
    $email_message .= "Anforderung: ".clean_string($checkbox1a)."\n\n";
    $email_message .= "Anforderung: ".clean_string($checkbox2a)."\n\n";
    $email_message .= "Anforderung: ".clean_string($checkbox3a)."\n\n";
    $email_message .= "Anforderung: ".clean_string($checkbox4a)."\n\n";
    $email_message .= "Anforderung: ".clean_string($checkbox5a)."\n\n";
    $email_message .= "Anforderung: ".clean_string($checkbox6a)."\n\n";
    $email_message .= "Anforderung: ".clean_string($checkbox7a)."\n\n";
    $email_message .= "Rückkontaktaufnahme: ".clean_string($selectchoice1)."\n\n";
    $email_message .= "Send on " . $datum . " from IP address " . $_SERVER['REMOTE_ADDR'] . "\n\n";
  $email_message .= "===================================================\n";
  $email_message .= "Tech support:\n";
  $email_message .= "===================================================\n\n";
  $email_message .= $_SERVER['HTTP_USER_AGENT'];

// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
 if (($error_message == "") && ($antiflood == "")) 
  {
  $_SESSION['antiflood'] = time();
    @mail($email_to, $email_subject, $email_message, $headers);
    header("Location: index.php#succes");
  }
  else
  {
      header("Location: index.php#error");
  }  
} 
?>