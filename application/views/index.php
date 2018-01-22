<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <link rel="icon" type="image/png" href="https://madimado.files.wordpress.com/2013/01/croix-occitane-christophe-1.jpg" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>


    <title>Savoir-occitan</title>
</head>
<body>

<div class="background-image"></div>

<div class="logo">
<img src="img/occitannie.png">
</div>
<br>

    <div class="intro">
        <p class="text-intro">Les meilleurs produits locaux faciles d'accès sur la première plateforme de référencement en ligne saisissez une ville ou géolocalisez-vous pour vous laisser surprendre.</p>
        <form action="<?php echo current_url(); ?>" method="POST" autocomplete="on">
        <div class="search-bar"><select class="itemName form-control" style="width:500px" name="itemName"></select> <br><br> <button type="submit" class="btn btn-warning btn-lg">recherche</button></div>
        </form>
        <p style="text-align: center; color: white; font-size: 30px">OU</p>
        <br>
       <div class="geoloc"><button type="button" class="btn btn-warning btn-lg">Géolocalisé-moi</button></div>
    </div>
<br>
<br>
<div class="list-ville">
<?php foreach($list as $citys): ?>
    <a class="btn btn-primary link" href="<?php echo site_url($citys['id'])?>" role="button"><?php echo $citys['city'] ?></a>
<?php endforeach; ?>
    <script src="js/search.js"></script>
</body>

<footer>

    <div class="git">
        <a class="github-button" href="https://github.com/clementcros/savoir-occitan" aria-label="Follow clement and gabin on GitHub">Follow us</a>
    </div>


</footer>
</html>
