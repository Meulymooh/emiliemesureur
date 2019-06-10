<?php

include_once('config.php');
$name = mysqli_real_escape_string($con, $_POST['name']);
$nameclean = filter_var($name, FILTER_SANITIZE_EMAIL, FILTER_FLAG_STRIP_HIGH);
$email = mysqli_real_escape_string($con, $_POST['email']);
$emailclean = filter_var($email, FILTER_SANITIZE_EMAIL, FILTER_FLAG_STRIP_HIGH);
$subject = mysqli_real_escape_string($con, $_POST['subject']);
$subjectclean = filter_var($subject, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
$comment = mysqli_real_escape_string($con, $_POST['comment']);
$commentclean = filter_var($comment, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

//insert into database
if (!mysqli_query($con,"INSERT INTO deb100889_emilie.contact_messages (id, name, email, subject, comments, con_date) VALUES('NULL', '$nameclean', '$emailclean','$subjectclean','$commentclean', 'CURRENT_TIMESTAMP')"))
{
	print('error executing mysql query');
}

//email the form to yourself
$to ='mesureur.e@gmail.com';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <deb100889@watlock.be>' . "\r\n";
$message ='<table width="100%" border="1" cellspacing="1" cellpadding="2">
<tr><td>Namel</td><td>'.$nameclean.'</td></tr>
<tr><td>Email</td><td>'.$emailclean.'</td></tr>
<tr><td>Subject</td><td>'.$subjectclean.'</td></tr>
<tr><td>Message</td><td>'.$commentclean.'</td></tr>
</table>';
mail($to, "Someone contacted you on your website", $message, $headers);
//send message back to AJAX
echo '<div class="alert alert-success">Your message has been sent.</div>';
$con->close();

?>