<?php
$file = "buttonStatus.txt";
$handle = fopen($file,'w+');
if (isset($_POST['on']))
{
$onstring = "ON";
fwrite($handle,$onstring);
fclose($handle);
print "
<!DOCTYPE html>
<html lang='en'>
<head>
<title>IoT Raspberry pi</title>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<body align='center'>
<title>Raspberry Pi - IoT home automation project</title>

<h2>Raspberry Pi - Internet of Things Implementation</h2>
<h2 style='background:green'>Lights has been Turned ON </h2>
</body>
</html>
";
}
else if(isset($_POST['off']))
{
$offstring = "OFF";
fwrite($handle, $offstring);
fclose($handle);
print "
<!DOCTYPE html>
<html lang='en'>
<head>
<title>Raspberry Pi - IoT home automation project</title>

  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<body align='center'>

<h2>Raspberry Pi - Internet of Things Implementation</h2>
<h2 style='background:red'>Lights has been Turned OFF </h2>
</body>
</html>
";
}


?>