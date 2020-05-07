
<?php @include "navbar.php"?>



<section class="products  p-5">
    <div class="container"> 
        <div class="row">
<?php
    $products=array('product 1' => [
        'price' => '620',
        'img' => 'images/1.jpg',
        'desc' => 'Girls Jackets cuite'
      ],
      'product 2' => [
        'price' => '6500',
        'img' => 'images/2.jpg',
        'desc' => 'Bloza moderen for girl'
      ],
      'product 3' => [
        'price' => '870',
        'img' => 'images/3.jpg',
        'desc' => 'complete man badala'
      ],
      'product 4' => [
        'price' => '600',
        'img' => 'images/4.jpg',
        'desc' => 'body girl koten'
      ],
      'product 5' => [
        'price' => '620',
        'img' => 'images/5.jpg',
        'desc' => 'vest very comfortable'
      ],
      'product 6' => [
        'price' => '6500',
        'img' => 'images/6.jpg',
        'desc' => 'shoes all sizes'
      ],
    );
 

foreach ($products as $key => $value) {
     ?>
    <div class="col-md-4">
        <div class="card mb-3 text-center">
            <img src="<?php echo $value['img'];?>" alt="" height="300">
            <div class="card-body">
                <h5 class="card-title"><?php echo $key ?></h5>
                <p class="card-text"><?php echo $value['desc'] ?></p>
                
                <p class="d-flex justify-content-around">
                <span class="font-weight-bold">price</span> <a href="#" class="btn btn-primary pull-right text-right"><?php echo $value['price'] ?></a>
                </p>
            </div>
        </div>
    </div>
     <?php
    }  

?>
    </div>
    </div>
</section>










