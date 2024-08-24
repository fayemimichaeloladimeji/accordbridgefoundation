<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$why_volunteer = $_POST['why_volunteer'];
$how_do_hear_aboutus = $_POST['how_do_hear_aboutus'];
$email= $_POST['email'];
$message=$_POST['message'];
$to2 = "mabakpprojects@gmail.com";  
$subject = "You Have New Message From www.baseintegrationco.za";
$txt =" Name = ". $name .
"\r\n  Phone Number = " . $phone .
 "\r\n  Why do you want to volunteer with Accord-Bridge Foundation? = " . $why_volunteer . 
 "\r\n  How did you hear about us? = " . $how_do_hear_aboutus . 
  "\r\n  Any more information-optional = " . $message .
$headers = "From: baseintegration";

if($name && $phone && $why_volunteer && $how_do_hear_aboutus && $message){
  return;
}else if($to2!=NULL){
    mail($to2,$subject,$txt,$headers);
}
//redirect
header("Location:volunteer.html");
?>

 

    
