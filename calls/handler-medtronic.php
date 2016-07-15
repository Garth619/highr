<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>



<?php


  $callsrc = $_GET['callsource'];
	
  $url = "/calls/" . $callsrc;
  $title = "Call From " . $callsrc;
  
 include('Galvanize.php');
 //replace the XXX with your Google Analytics Account Number
 $GA = new Galvanize('UA-xxxxxx-x');
 $GA->trackPageView($url,$title);
  
  
  
//replace with your email address
$to = "mike@highrankwebsites.com";
$subject = "MEDTRONIC CALL TRACKING - You Just Got A Call From A " . $callsrc . " search.";
$body = "Congrats, the audio recording of the call is available at " . $_POST['RecordingUrl'];
if (mail($to, $subject, $body)) {
  echo("<p>Message successfully sent!</p>");
 } else {
  echo("<p>Message delivery failed...</p>");
 }



?>





</body>
</html>
