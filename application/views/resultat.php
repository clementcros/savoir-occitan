<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="theme-color" content="#000000">
    <link rel="manifest" href="/manifest.json">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/latest/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../../css/resultat.css">
    <title>Savoir-occitan</title></head>
<body>
<?php

$image1 = $data['img_1'];
if($image1 == null){
    $image1 = "0.png";
}

$image2 = $data['img_2'];
if($image2 == null){
    $image2 = "0.png";
}

$image3 = $data['img_3'];
if($image3 == null){
    $image3 = "0.png";
}

?>


        <!-- /.col-lg-3 -->
        <div class="container">
            <div class="row">
                <div class="">
                    <a class="btn btn-primary" href="<?php echo site_url('')?>" role="button">Accueil</a><h1 class="my-4"><?php echo $data['name'];?></h1>

                </div>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="http://occitan.my/assets/uploads/files/<?php echo $image1;?>"  style="width: 1100px; height: 400px;">
                    </div>

                    <div class="item">
                        <img src="http://occitan.my/assets/uploads/files/<?php echo $image2;?>"  style="width: 1100px; height: 400px;">
                    </div>

                    <div class="item">
                        <img src="http://occitan.my/assets/uploads/files/<?php echo $image3;?>"  style="width: 1100px; height: 400px;">
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
<br>

<noscript>You need to enable JavaScript to run this app.</noscript>

<div id="root"></div>
<script type="text/javascript" src="../../js/main.js"></script>
</body>
</html>
