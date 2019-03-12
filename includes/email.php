<?php
if(isset($_POST['message'])){
    $message = $_POST['message'];
    $message=wordwrap($message);
    echo mail("brandon/*dead*/glass.com","Feedback",$message,'From: brandon/*dead*/glass.com'."\r\n".'Reply-To: brandon/*dead*/glass.com'."\r\n".'X-Mailer:PHP/'.phpversion());
}else{
    echo print_r($_POST);
}