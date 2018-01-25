<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
      <link rel="icon" type="image/png" href="https://madimado.files.wordpress.com/2013/01/croix-occitane-christophe-1.jpg" />
<!--      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->

      <!-- jQuery library -->
<!--      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->

      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <!-- Place this tag in your head or just before your close body tag. -->
<!--      <script async defer src="https://buttons.github.io/buttons.js"></script>-->
<!--      <link rel="icon" type="image/png" href="https://madimado.files.wordpress.com/2013/01/croix-occitane-christophe-1.jpg" />-->
<!--      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>-->
<!--      <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />-->
<!--      <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>-->
    <title>Shop Homepage - Start Bootstrap Template</title>
      <link rel="stylesheet" type="text/css" href="../../css/home.css">

    <!-- Bootstrap core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="shop-homepage.css" rel="stylesheet">

  </head>
  <?php

  $image1 = $data['image_1'];
  if($image1 == null){
      $image1 = "0.png";
  }

  $image2 = $data['iamge_2'];
  if($image2 == null){
      $image2 = "0.png";
  }

  $image3 = $data['image_3'];
    if($image3 == null){
        $image3 = "0.png";
    }

  ?>
  <body>
    <div class="container">

      <div class="row">
        <div class="col-lg-3">
            <a class="btn btn-primary" href="<?php echo site_url('')?>" role="button">Accueil</a>
          <h1 class="my-4"><?php echo $data['city'];?></h1>
          <div class="list-group">

              <?php foreach($category as $cat): ?>
            <a href="#" class="list-group-item"><?php echo $cat['type'];?></a>
              <?php endforeach; ?>
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="http://occitan.my/assets/uploads/files/<?php echo $image1;?>" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="http://occitan.my/assets/uploads/files/<?php echo $image2;?>" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="http://occitan.my/assets/uploads/files/<?php echo $image3;?>" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="row">
              <?php foreach($result as $products): ?>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://occitan.my/assets/uploads/files/<?php echo $products['image_1']?>" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="<?php $products['id'] ?>"><?php echo $products['nom']?></a>
                  </h4>
                  <h5><?php echo $products['prix']?></h5>
                  <p class="card-text"><?php echo $products['description']?></p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

              <?php endforeach; ?>
          </div>

          <!-- /.row -->


        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
    </div>
    <!-- Footer -->
    <footer class="py-5 bg-dark position">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; le savoir-occitan 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="../../js/search.js"></script>
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>
<style>
  .carousel-item img{
      width: 850px;
      height:400px;
  }
    .card img {
        overflow: hidden;
        object-fit: contain;
    }
    footer {
        position: relative; bottom: 0; left: 0; right: 0
            }
    .card-img-top {
        object-fit: cover;
    }

  }
</style>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113029935-1"></script>
  <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-113029935-1');
  </script>


</html>
