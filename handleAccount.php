<?php
session_start();
//take Data
$userName=$_POST['userName'];
$password=$_POST['password'];

//cleanData
function cleanData($input){
    $input=htmlspecialchars($input);
    $input=trim($input);
    return $input;
}
//cal cleanData
cleanData($userName);
cleanData($password);

//validate Data
$errors=[];
$valid=true;
if(!filter_var($userName,FILTER_VALIDATE_EMAIL)&& $userName=" "){
    $errors['email']="<p class='text-danger font-weight-bold'>Please Insert Vaild Email</p>";
    $valid=false;
}
if($password==" "||
    filter_var
    ($password, FILTER_VALIDATE_REGEXP,array
    ( "options"=> array( "regexp" => "/.{6,25}"))))

{
    $errors['password']="<p class='text-danger font-weight-bold'>Please Insert Vaild password</p>";    $valid=false;
}
 
$_SESSION['errors']=$errors;
//retutn to inter new data when Error
if(isset($errors)){
    header('location:account.php');
}
if($valid==true){
    $_SESSION['username']=$userName;
    $_SESSION['password']=$password;
}

?>