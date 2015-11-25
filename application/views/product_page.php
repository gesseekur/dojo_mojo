<?php ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!-- <title><?php echo $product_name ?></title> -->
        <meta http-equiv="refresh" content="25">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href = "assests/product_page.css">
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
        </script>
    </head>
    <body>
        <header>dojo_Mojo</header>
        <div class = "container-fluid">    
            <a href="">dojo_Mojo Store</a>
            <h1><?php echo $product_name ?></h1>
            <div id = "product_image">
    <?php       for(($i = 1; $i < 30; $i++) 
                    {?>
                       <img id = "<?= $i ?>" <!-- src = "assets/product_images/<?= $i ?>.png" --> width = "500px" height = "500px" alt = "product image">
    <?php           }?> 
            </div>
            <div id = "product_desc">
                 <p>Ontgonnen perzische in herhaling nu honderden belasting. Bevaarbaar schipbreuk kilometers af al uitgevoerd. In zand alle daad na doet gold waar. Stam twee aan koel zijn aard met geld. Op geslaagd nu trouwens omgeving na omwonden de wakkeren. Oven acre sago in de tijd op wijk. Lot drong noemt aan dal ijzer wezen oog holte stuit. Verwijderd spoorwegen was beschikken bak natuurlijk van mislukking.</p>
            </div> 
        </div>    
    </body>
</html>