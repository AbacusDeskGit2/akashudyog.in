
</a>
<?php
// send email 
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: '.'customersupport@akashudyog.in'. "\r\n";
$headers .= 'From: '.$_POST['email'] . "\r\n";
$headers .= 'Bcc: ajaymadaan165@gmail.com, kashudyog5bhai@yahoo.co.in, akashudyog5bhai@gmail.com' . "\r\n";
$message='<table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-family:Trebuchet MS; font-size:13px; color:#333333;">
  
  <tr><td style="font-family:Trebuchet MS; font-size:14px; color:#FF0000;"><br/><strong>Name:</strong></td></tr>
  <tr><td>-----------------------------------</td></tr>
  <tr><td>'.$_POST['name'].'</td></tr>
  
  <tr><td style="font-family:Trebuchet MS; font-size:14px; color:#FF0000;"><br/><strong>Email:</strong></td></tr>
  <tr><td>-----------------------------------</td></tr>
  <tr><td>'.$_POST['email'].'</td></tr>
  
  <tr><td style="font-family:Trebuchet MS; font-size:14px; color:#FF0000;"><br/><strong>Address:</strong></td></tr>
  <tr><td>-----------------------------------</td></tr>
  <tr><td>'.$_POST['address'].'</td></tr>
  
  <tr><td style="font-family:Trebuchet MS; font-size:14px; color:#FF0000;"><br/><strong>Phone:</strong></td></tr>
  <tr><td>-----------------------------------</td>  </tr>
  <tr><td >'.$_POST['phone'].'</td></tr>
  
  <tr><td style="font-family:Trebuchet MS; font-size:14px; color:#FF0000;"><br/><strong>Message: </strong></td></tr>
  <tr> <td>-----------------------------------</td></tr>
  <tr><td>'.$_POST['message'].'</td></tr>

  </table>
';

$to = "customersupport@akashudyog.in"; 
        $from = $_POST['email'] ; 
		//$headers = "From: $from";
		$subject = "Feedback/Enquiry - Akash Udyog "; 
if(mail( $to, $subject, $message, $headers )){
$success="True";
echo "Thank you for your request. A representative will contact you in the next 24 hours";
}
else
{
echo "error";
}
// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"3;URL=contact.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
}
?>