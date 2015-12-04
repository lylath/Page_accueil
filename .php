<!DOCTYPE html>
<html>
    <head>
        <title>Page d'accueil du site ezVent</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="css/page_accueil.css">
    </head>
    <body>
        <div id="container">
            <?php include ("header.php")?>
            <div id="recherche">
            
            </div>
            <div>
                <img  class="img_caroussel" src="img/cinema.jpg">
                <img  class="img_caroussel" src="img/picnic.jpg">
                <img  class="img_caroussel" src="img/concert.jpg">
                <img  class="img_caroussel" src="img/brocante.jpg">
            </div>
            <div id='container_pub'><?php include ("container_pub.php")?></div>
            <div id='container_pub'><?php include ("container_pub.php")?></div>
            <?php include ("footer.php")?>
        </div>
    </body>
</html>
