<?php @include "navbar.php";
//form validate Errors
if(isset($_SESSION['errors'])){
    foreach($_SESSION['errors'] as $error){
        echo $error;
    }
}
if(isset($_SESSION['username'])){
    header('location:register.php');
    
}
?>

<form method="post" action= "handleAccount.php" class=" pt-5">
    <div class="container w-50">
        <input class="form-control mb-3" placeholder="Enter Your Email" name="userName"/>
        <input class="form-control mb-3" type="password" placeholder="Enter Your password" name="password"/>
        <button class="btn btn-primary" type="submit">Login</button>
</div>

</form>