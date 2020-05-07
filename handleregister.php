<?php
session_start();
//take Data
$userName=$_POST['userName'];
$password=$_POST['password'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$fecebook=$_POST['fecebook'];

//cleanData
function cleanData($input){
    $input=htmlspecialchars($input);
    $input=trim($input);
    return $input;
}
//cal cleanData
cleanData($userName);
cleanData($password);
cleanData($email);
cleanData($phone);
cleanData($fecebook);
//validate Data
$errors2=[];
$valid=true;
if($userName=""){
    $errors2['username']="<p class='text-danger font-weight-bold'>Please Insert Vaild User Name</p>";
    $valid=false;
}
if($password==" "&&
    filter_var
    ($password, FILTER_VALIDATE_REGEXP,array
    ( "options"=> array( "regexp" => "/.{6,25}"))))

{
    $errors2['password']="<p class='text-danger font-weight-bold'>Please Insert Vaild password</p>";    $valid=false;
}
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $errors2['email']="<p class='text-danger font-weight-bold'>Please Insert Vaild Email</p>";
    $valid=false;
}
if(strlen($phone) === 10) {
    $errors2['phone']="<p class='text-danger font-weight-bold'>Please Insert Vaild phone</p>";
    $valid=false;
}
if(!filter_var($fecebook, FILTER_VALIDATE_URL)){
    $errors2['facebook']="<p class='text-danger font-weight-bold'>Please Insert Vaild facebook url</p>";
    $valid=false;
}

$_SESSION['errors2']=$errors2;
if(isset($_SESSION['errors2'])){
    header('location:register.php');
}

if($valid ==true){
    $_SESSION['username']=$userName;
    $_SESSION['password']=$password;
    $_SESSION['email']=$email;
    $_SESSION['phone']=$phone;
    $_SESSION['facebook']=$fecebook;
    
    header('location:allproducts.php');
}