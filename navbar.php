<?php 
@session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/index_style.css"/>
    </head>

    <body>
    <nav class="navbar navbar-expand-lg bg-dark ">
        <a class="navbar-brand custom-color">E-commerce</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">Home </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="allproducts.php">all products </a>
                </li>
                <li class="nav-item ">
                    <?php
                    if(isset(    $_SESSION['username']      )){
                        echo' <a class="nav-link" href="account.php">update </a>';
                    }
                    else{
                        echo' <a class="nav-link" href="account.php">account </a> ' ;
                    }
                    ?>
                </li>
                <li class="nav-item ">
                    <?php
                    if(isset(    $_SESSION['username']      )){
                        echo' <a class="nav-link" href="logout.php">logout </a>';
                    }?>
             </li>
            </ul>
        </div>
    </nav>