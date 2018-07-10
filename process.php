<?php

if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['action']))):

	if (isset($_POST['myname'])) { $myname = filter_var($_POST['myname'], FILTER_SANITIZE_STRING ); }
	if (isset($_POST['myemail'])) { $myemail =  filter_var($_POST['myemail'], FILTER_SANITIZE_STRING ); }
	if (isset($_POST['mycompany'])) { $mycompany = filter_var($_POST['mycompany'], FILTER_SANITIZE_STRING ); }
	if (isset($_POST['mycomments'])) { $mycomments = filter_var($_POST['mycomments'], FILTER_SANITIZE_STRING ); }

	$formerrors = false;

	if ($myname === '') :
		$err_myname = '<div class="error">Sorry, your name is a required field</div>';
		$formerrors = true;
	endif; // input field empty

	if (!($formerrors)) :
		$to				= 	"simonburyan@rotaractprague.com";
		$subject	=		"From $myname -- Contact form on my company page";
		$message	=		"You have a new message.
		User named: '$myname'
		with email: '$myemail'
		from company: '$mycompany'
		filled out the form with comment: '$mycomments'

		Thank you,
		Your server provider

		PS
		Do not reply to this message, send answers to: '$myemail'";

		$replyto	=		"From: $myemail \r\n".
									"Reply-To: $myemail \r\n";

		if (mail($to, $subject, $message)):
			$msg = "Děkujeme za zprávu.";
		else:
			$msg = "Problém s odesláním zprávy";
		endif; // mail form data

	endif; // check for form errors

endif; //form submitted
?>
