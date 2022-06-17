<?php

$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_message = $_POST['message'];
$body_message = 'Message: '.$field_message;

// Dialog Box for the empty contact field
if (strlen($field_email) == 0 ) {
	echo "<script language=\"javascript\" type=\"text/javascript\">
	alert('Contact email field is empty.');  
	window.location = 'U09A-contacts-page.html';
	</script>";
}
// Thank you message is returned with a copy of the submission
if (strlen($body_message) > 0) {
	echo "<script language=\"javascript\" type=\"text/javascript\">
		alert('Thank you for the message of: " . $field_message . " We will contact you shortly.');  
		window.location = 'U09A-contacts-page.html';
	</script>";
}

else { 
	echo "<script language=\"javascript\" type=\"text/javascript\">
		alert('Message failed');
		window.location = 'U09A-contacts-page.html';
	</script>";	
}
?>