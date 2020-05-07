<?php @include "navbar.php";

if(isset($_SESSION['errors2'])){
    foreach($_SESSION['errors2'] as $error){
        echo $error;
    }
}
?>

<form method="post" action= "handleregister.php" class=" pt-5">
    <div class="container w-50">
        <input class="form-control mb-3" placeholder="Enter Your username" name="userName"/>
        <input class="form-control mb-3" type="password" placeholder="Enter Your password" name="password"/>
        <input class="form-control mb-3" placeholder="Enter Your Email" name="email"/>
        <input class="form-control mb-3" placeholder="Enter Your phone" name="phone"/>
        <input class="form-control mb-3" placeholder="Enter Your facebook" name="fecebook"/>

        <button class="btn btn-primary" type="submit">update</button>
</div>

</form>