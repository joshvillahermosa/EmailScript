<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div id="Center">
			<div id="MainForm">
				<h1>Contact me</h1>
				<p>I can be contacted by:</p>
				<ul>
					<li>Day Cell: 201-589-1249 </li>
					<li>Email: <a href="mailto: joshua.villahermosa@gmail.com">joshua.villahermosa@gmail.com</a></li>
				</ul>
				<p>You can also leave a message and I can get back to you.</p>
				<br />
				<?php
							
					if(isset($_POST['Subject']) && isset($_POST['Message']) && isset($_POST['Name']) && isset($_POST['MethOfCont'])){ //isset checks if it is filled in
					$Subject = $_POST['Subject'];
					$Message = $_POST['Message'];
					$Name = $_POST['Name'];
					$MethOfCont = $_POST['MethOfCont'];
					
					$Headers = 'From: Contact From JayVee <'.$Name.'JayVee@pegasus.rutgers.edu>';
					$ComMessage = "From: ".$Name."\n\nMessage: ".$Message."\n\nMethod of Contact: ".$MethOfCont;
					if(!empty($Subject) && !empty($Message) && !empty($Name) && !empty($MethOfCont)){
						mail("joshvillahermosa@gmail.com", $Subject, $ComMessage, $Headers);
						echo '<p style="color: green;">Thank you for your response!</p>';
						}
					else {
						echo '<h4 style="color: red;">Please fill in all feilds.</h4>';
						}
					}
				?>
				
				<form action="Contact.php" method="post" id="Form">
					<p style="color: red;"><b>Please fill in all fields.</b></p>
					<h3>Subject</h3>
					<input type="text" name="Subject" />
					<h3>Message</h3>
					<textarea name="Message" rows="20" cols="150">Leave your message</textarea>
					<h3>Name</h3>
					<input type="text" name="Name" />
					<h3>Method of contact - email or phone</h3>
					<input type="text" name="MethOfCont" />
					<input type="submit" value="Click to submit"/>
				</form>

			</div>
		</div>
    </body>
</html>
