<?php  
 
if(isset($_POST['submit'])) {
 $mailto = "deadmadtechnologies@gmail.com";  //My email address
 //getting customer data
 $name = $_POST['name']; //getting customer name
 $fromEmail = $_POST['email']; //getting customer email
 $project = $_POST['project']; //getting customer Project details
 $subject = "Confirmation: Message was submitted successfully | DeadMad Technologies"; // For customer confirmation
 
 //Email body I will receive
 $message = "Client Name: " . $name . "\n"
 . "Project Details: " . "\n" . $_POST['project'];
 
 //Message for client confirmation
 $message2 = "Dear" . $name . "\n"
 . "Thank you for contacting us. We will get back to you shortly!" . "\n\n"
 . "You submitted the following message: " . "\n" . $_POST['project'] . "\n\n"
 . "Regards," . "\n" . "- DeadMad Technologies";
 
 //Email headers
 $headers = "From: " . $fromEmail; // Client email, I will receive
 $headers2 = "From: " . $mailto; // This will receive client
 
 //PHP mailer function
 
  $result1 = mail($mailto, $project, $message, $headers); // This email sent to My address
  $result2 = mail($fromEmail, $subject, $message2, $headers2); //This confirmation email to client
 
  //Checking if Mails sent successfully
 
  if ($result1 && $result2) {
    $success = "Your Message was sent Successfully!";
  } else {
    $failed = "Sorry! Message was not sent, Try again Later.";
  }
 
}


if(isset($_POST['another_submit'])) {
  $mailto = "deadmadtechnologies@gmail.com";  //My email address
  //getting customer data
  $fromEmail = $_POST['email']; //getting customer email
  $subject = "Confirmation: Message was submitted successfully | DeadMad Technologies"; // For customer confirmation
  
  //Message for client confirmation
  $message2 = "Dear" 
  . "Thank you for contacting us. We will get back to you shortly!" . "\n\n"
  . "You submitted the following message: " . "\n" 
  . "Regards," . "\n" . "- DeadMad Technologies";
  
  //Email headers
  $headers = "From: " . $fromEmail; // Client email, I will receive
  $headers2 = "From: " . $mailto; // This will receive client
  
  //PHP mailer function
   $result1 = mail($mailto, $headers); // This email sent to My address
   $result2 = mail($fromEmail, $subject, $message2, $headers2); //This confirmation email to client
  
   //Checking if Mails sent successfully
  
   if ($result1 && $result2) {
     $success = "Your Message was sent Successfully!";
   } else {
     $failed = "Sorry! Message was not sent, Try again Later.";
   }
  
 }
?>