<?php
 
if(isset($_POST['email'])) {
 
   
//value for my email
    $email_to = "alxstuart@gmail.com";
 

     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "There appears to have been a problem sending the email.";
 
        echo "Make sure you have filled the following fields.<br /><br />";
 
        echo $error."<br /><br />";

 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['name']) ||
 
        !isset($_POST['emailTitle']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['emailContent'])) {
 
        died('Sorry, something seems to have gone wrong submitting this email. Please try again.');       
 
    }
 
     
 
    $name = $_POST['name']; // required
 
    $emailTitle = $_POST['emailTitle']; // required
 
    $email = $_POST['email']; // required
    $content = $_POST['emailContent']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
 
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
 
  }
 
  if(!preg_match($string_exp,$emailTitle)) {
 
    $error_message .= 'The Title you entered does not appear to be valid.<br />';
 
  }
 
  if(strlen($emailContent) < 2) {
 
    $error_message .= 'There doesn't appear to be any message content.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
 
    $email_message .= "Email: ".clean_string($email)."\n";
 
    $email_message .= "Content: ".clean_string($emailContent)."\n";
 
  
 

 
@mail($email_to, $emailTitle, $email_message, "From:" . $email);  
 
?>

<script>
alert('thank you for your message. I will reply as soon as possible.');
location.replace('http://www.ajfstuart.com');
</script>
<?php
}
die();
?>