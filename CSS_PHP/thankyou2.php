<title>Thank You!</title>
<?php

	$emailSubject = 'SHS Demo Info Form';
	$webMaster = 'buddhatimeproductions@gmail.com';
	
	
	
	$email = $_POST['email'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	
	$body = <<<EOD
<br /><hr><br />

Email: $email <br />
Name: $name <br />
Phone: $phone <br />


EOD;

$headers = "From: $email\r\n";
$headers .= "Content-type: text/html\r\n";
$success = mail($webMaster, $emailSubject, $body, $headers);

	$theResults = <<<EOD
<html lang="en">
  <head>
  	<meta http-equiv="refresh" content="3;URL=index.html" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Contact</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <script type="text/javascript" src="js/jquery-1.4.2.js"></script>
    <script type="text/javascript" src="js/cufon-yui.js"></script>
    <script type="text/javascript" src="js/cufon-replace.js"></script>
    <script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
    <script type="text/javascript" src="js/Myriad_Pro_700.font.js"></script>
    <script type="text/javascript" src="js/Myriad_Pro_600.font.js"></script>
  <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
  <script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
    
    <!--[if lt IE 9]>
	<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>	<script type="text/javascript" src="js/html5.js"></script><![endif]-->
  <link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
</head>
  <body bgcolor="#CCCCCC">
  <div id="allwrapper">
    <div id="Adwords" class="main">

<br>
       
      </header>
      <div class="inner_copy"></div>
      <!-- / header --><!-- content -->
      <section id="content">
        <div class="wrapper">
          <div class="wrapper">
          <br/><br/>
<center>
      <h1>Thank You!</h1>
</center>
      <h2 align="center">Your information has been submitted!  </h2>
    <br/><br/>
    </div></section>

      <!-- / content -->
      <!-- footer -->
      <footer> <a href="http://www.mediawebcompany.com/" target="_blank"></a><br>
      </footer>
      <!-- / footer --> </div>
         <script type="text/javascript"> Cufon.now(); </script>
  </div>
  <script type="text/javascript">
swfobject.registerObject("FlashID");
    </script>
  </body>
</html>

EOD;
echo "$theResults";
 
?>
