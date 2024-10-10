<?php

require'../assets/class/database.class.php';
require'../assets/class/function.class.php';


if($_POST)
{
$post=$_POST;

if($post['otp']){

  $otp=$post['otp'];

if($fn->getSession('otp')==$otp){
    $fn->setAlert('email is verified');
    $fn->redirect('../change-password.php');

}
else{
    $fn->setError('Incorrect Code');
    $fn->redirect('../verification.php');
}
}
    

}
else{
    $fn->redirect('../verification.php');
}