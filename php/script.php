<?
    $to = "go@artix.studio";
    $subject = "Artix | Студия художественного оформления";
    $message = "<html><head><title>'.$subject.'</title></head>";
    $message .= "<body><p>Email: ".$_POST['email']."</p></body></html>";
    $headers  = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: Отправитель <".$to.">\r\n";

    mail($to, $subject, $message, $headers);
?>
