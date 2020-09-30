<?php
 
    $to = "createng@gmail.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $name2 = $_REQUEST['name2'];
    $csubject = $_REQUEST['subject'];
    $cmessage = $_REQUEST['message'];
 
    $headers = "From: $from";
    $headers = "From: " . $from . "\r\n";
    $headers .= "Reply-To: ". $from . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
 
    $subject = "You have a message from your Cre8ng .";
 
    $logo = '';
    $link = '#';
 
    $body = "<!DOCTYPE html--><meta charset="UTF-8"><title>Cre8ng Mail</title>";
    $body .= "";
    $body .= "";
    $body .= "";
    $body .= "";
    $body .= "";
    $body .= "";
    $body .= "";
    $body .= "";
    $body .= "<table style="width: 100%;"><thead style="text-align: center;"><tr><td style="border:none;" colspan="2">";
    $body .= "<a href="{$link}"><img src="{$logo}" alt=""></a><br><br>";
    $body .= "</td></tr></thead><tbody><tr><td style="border:none;"><strong>Name:</strong> {$name}</td><td style="border:none;"><strong>Email:</strong> {$from}</td></tr><tr><td style="border:none;"><strong>Subject:</strong> {$csubject}</td></tr><tr><td></td></tr><tr><td colspan="2" style="border:none;">{$cmessage}</td></tr></tbody></table>";
    $body .= "";
 
    $send = mail($to, $subject, $body, $headers);
 
?>
