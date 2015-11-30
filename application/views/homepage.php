<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Product Page</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
     <link hrel="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">
      <link rel="stylesheet" type="text/css" href="hover_in_out.css">
       <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
       <script type="text/javascript">
            $(document).ready(function() {
                $('img').hover(function () {
                    var temp = $(this).attr('src');
                    $(this).attr('src', $(this).attr('data-alt-src'));
                    $(this).attr('data-alt-src', temp);
                })
              });
        </script>
  </head>
  <body>
    <div class="container">
       <button type="button" class="shopping_cart btn-lg" href ="/carts" aria-label="Shopping Cart">
                <span class="glyphicon glyphicon-shopping-cart btn-md" aria-hidden="true"></span>
                <span class= "badge"><?= $total_items ?></span>
            </button>
      <form class="navbar-form navbar-left" role="search" method="post" action="/users/search_products">
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="search_products">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</div>
  <div class="container">
        <div class="row" id="categories">
            <div class="col-md-3">
                <p class="lead">Categories</p>
                <div class="list-group">
                    <a href="/users/search_cats/potions" class="list-group-item">Potions</a>
                    <a href="/users/search_cats/armor" class="list-group-item">Armor</a>
                    <a href="/users/search_cats/weapons" class="list-group-item">Weapons</a>
                </div>
            </div>
            <div class="col-md-9">
                    <div class="row" id="thumbnail">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                <a href="/users/homepage">Products</a></h1>
                        </div>
                        <?php
                            foreach ($products as $product) 
                            {
                        ?>
                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                            <a class="thumbnail" href="/products/show/<?= $product['product_id'] ?>">
                                <img class="img-responsive" src="/assets/<?= $product['category_name']?>_icons/large/<?= $product['image_name']?>.png" data-alt-src="/assets/<?= $product['category_name']?>_icons/transparent/<?= $product['image_name']?>.png" alt = "product/<?= $product['name']?>">
                                 <!-- <img src="hannibal.jpg" data-alt-src="lamb.jpg" alt="silence of the lambs"> -->
                            </a>
                        </div>
                        <?php
                        }
                        ?>
                        <!-- <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                            <a class="thumbnail" href="#">
                                <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                            </a>
                        </div> -->
                    </div>
    <!-- /.container -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>