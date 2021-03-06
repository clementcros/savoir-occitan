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
    <meta name="viewport" content="initial-scale=1">
<!--    <meta name="viewport" content="width=device-wi  dth, initial-scale=1.0">-->


    <title>Savoir-occitan</title>
</head>
<body>

<div class="container">
    <div class="logo">
        <div class="logo">
        <img src="img/occitannie.png">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <p class="text-intro">Les meilleurs produits locaux faciles d'accès sur la première plate-forme de référencement en ligne saisissez une ville ou géolocalisez-vous pour vous laisser surprendre.</p>
            <form method="post" accept-charset="utf-8" action="<?php echo site_url("Result_city/result_city"); ?>">
                <div class="search-bar"><select class="itemName form-control"  name="itemName"></select> <br><br>  <button type="submit" class="btn btn-warning btn-lg">recherche</button></div>
            </form>
            <p style="text-align: center; color: white; font-size: 30px">OU</p>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="list-ville">
                <?php foreach($list as $citys): ?>
                    <a class="btn btn-primary link" href="<?php  echo site_url('result/'.$citys['id'])?>" role="button"><?php echo $citys['name'] ?></a>
                <?php endforeach; ?>
<!---->
<!--    <div class="row">-->
<!--        <div class="col-sm-12">-->
<!--            <footer>-->
<!--                <p>&copy; Copyright 2013 Tutorial Republic</p>-->
<!--            </footer>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

</body>
<!--<body>-->
<!---->
<!--<div class="background-image"></div>-->
<!---->
<!--<div class="logo">-->
<!--<img src="img/occitannie.png">-->
<!--</div>-->
<!---->
<!--<div class="container">-->
<!--    <div class="row">-->
<!--        <div class="col-xs-12"></div>-->
<!--    <div class="intro">-->

<!---->
<!--       <div class="geoloc"><button type="button" class="btn btn-warning btn-lg">Géolocalisé-moi</button></div>-->
<!--    </div>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!---->
<!--<div class="container">-->
<!--    <div class="row">-->
<!---->
<!--</div>-->
<!--    </div>-->
<!--</div>-->
<!---->
    <script src="js/search.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
    <script>
        window.addEventListener("load", function(){
            window.cookieconsent.initialise({
                "palette": {
                    "popup": {
                        "background": "#eaf7f7",
                        "text": "#5c7291"
                    },
                    "button": {
                        "background": "transparent",
                        "text": "#56cbdb",
                        "border": "#56cbdb"
                    }
                },
                "content": {
                    "message": "Si vous continuez la navigation sur notre site vous acceptez les cookies",
                    "dismiss": "GO !",
                    "link": "En savoir plus"
                }
            })});
    </script>
</body>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113029935-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-113029935-1');
</script>
<br>
<footer>

    <div class="git">

<!--        <a class="github-button" href="https://github.com/clementcros/savoir-occitan" aria-label="Follow clement and gabin on GitHub">Follow us</a><p style="color: white;">V0.3 beta</p>-->

    </div>


</footer>
</html>
