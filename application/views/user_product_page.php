<?php ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!-- <title><?php echo $product_name ?></title> -->
        <!-- <meta http-equiv="refresh" content="25"> -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link hrel="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href = "assets/css/user_product_page.css">
        <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Inconsolata:700' rel='stylesheet' type='text/css'>
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
        </script>
    </head>
    <body>
        <div class = "container">    
        <div class="page-header">
            <h2>dojo_Mojo</h2>
            <a id = "store_link" href="/users/homepage">Back to dojo_Mojo Store</a>
            <button type="button" class="shopping_cart btn-lg" href ="/carts" aria-label="Shopping Cart">
                <span class="glyphicon glyphicon-shopping-cart btn-md" aria-hidden="true"></span>
                <span class= "badge"><?= $total_items ?></span>
            </button>
            <form id = "logout" action = "/users/logout" method = "POST">
                <input type = "submit" value = "Logout">
            </form>
        </div>
            <div id = "product_image">
                <div class = "row">
                    <div class = "col-md-6 col-md-offset-2">
                        <?php
                            foreach ($products as $product) 
                            {
                        ?> 
                        <h1><?= $product['name'] ?></h1>
                        <img src = "/assets/<?= $product['category_name']?>_icons/large/<?= $product['image_name']?>.png" alt = "product/<?= $product['id']?>" class="img-thumbnail">
                    </div>
                    <div class = "col-md-4">
                        <div id = "product_desc">
                            <h3>Product Description</h3>
                            <p><?= $product['description']?></p>
                        <div>
                        </div>
                            <h3>Specs:  </h3>
                            <p><?= $product['specifications']?></p>
                            <p><span style = "color: black">Price: $<?= $product['price']?></span></p>
                            <label>Quantity</label>
                            <form action = "/orders/add_to_cart" method = "POST">
                            <input name="qty" type="number">
                            <input name="id" type="hidden" value="<?=$product['id']?>">
                                <input type = "submit" value = "Add to Cart">
                            </form>
                        <?php
                        }
                        ?>
                        </div>
                    </div> 
                </div> 
            </div>       
    </body>
</html>
<!--  <img id = "<?php echo $i ?>" src = "assets/product_images/<?php echo $i ?>.png" width = "500px" height = "500px" alt = "product image"> -->