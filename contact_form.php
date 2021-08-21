<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone_number = $_POST['number'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$to = "abdulsalam.baruwa190541028@st.lasu.edu.ng";

$email_subject = "New form Submission";

$email_body = "Name = ". $firstname. "\r\n User Email = " . $visitor_email . "\r\n Message =" . $message;

$headers = "From: baruwaabdulsalam@gmail.com" . "\r\n". "CC: fma.platform@gmail.com";
if ($visitor_email!=NULL){
    mail($to,$email_subject,$email_body,$headers);
}


header("Location: index.html");

?>

