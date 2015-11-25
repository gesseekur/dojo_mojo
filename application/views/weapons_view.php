<?php ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Dojo Mojo Weapons</title>
        <meta http-equiv="refresh" content="25">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="assests/weapons.css">
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('img').hover(function () {
                var temp = $(this).attr('src');
                $(this).attr('src', $(this).attr('data-alt-src'));
                $(this).attr('data-alt-src', temp);
                )};
        </script>
    </head>
    <body>
        <div>
<?php       for(($i = 1; $i < 11; $i++) 
                {?>
                   <img id = "<?= $i ?>" src = "assets/weapon_icons/transparent/<?= $i ?>.png" data-alt-src = "assets/weapon_icons/solid/<?= $i ?>.png" href = "" alt = "product icons">
<?php           }?> 
        </div>
    </body>
</html>