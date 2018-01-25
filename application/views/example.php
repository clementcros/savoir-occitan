<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- jQuery library -->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->

    <!-- Latest compiled JavaScript -->
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
    <style>
        body {
            background-image: url("https://les3pinardiers.com/wp-content/uploads/2016/10/raisins-sur-pieds_06.jpg");
        }
    </style>
</head>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Back office</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo site_url('/examples')?>">Accueil</a></li>
            <li><a href="<?php echo site_url('/examples/produit')?>">Produits</a></li>
            <li><a href="<?php echo site_url('/examples/villes')?>">ville</a></li>
            <li><a href="<?php echo site_url('/examples/category')?>">categories</a></li>
            <li><a href="<?php echo site_url('/examples/clients')?>">clients</a></li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <h3>Fonctionnement du back office</h3>
            <p>Cet espace permet de mettre a jour les différents produits</p>
            <p>Pour y accéder cliquer sur la catégories dédier dans le menue</p>
        </div>
        <div class="col-sm-4">
            <h3>Import des images</h3>
            <p>Pour optimiser le chargement des pages sur le site</p>
            <p>Merci de ne pas upload des images de grande taille</p>
        </div>
        <div class="col-sm-4">
            <h3>Aide</h3>
            <p>Si malgrès tous vous rencontrez des difficultés</p>
            <p>Un tutoriel d'utilisation serat bientot disponible</p>
        </div>
    </div>
</div>
	<div style='height:20px;'></div>  
    <div>
		<?php echo $output; ?>
    </div>
</body>
</html>
