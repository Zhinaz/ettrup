<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Accessories</title>
  
  <link rel="shortcut icon" href="/images/favicon.ico"/>
  <link rel="stylesheet" type="text/css" href="/dist/css/bootstrap.min.css">
  <!-- Optional Bootstrap theme -->
  <link rel="stylesheet" href="/dist/css/custom-bootstrap.css">
</head>

<body>
  <?php
  include '../init.php';
  include ROOT_DIR . '/includes/upper-body.php';?>
  
  <div class="panel panel-default">
    <div class="panel-body">
      <ol class="breadcrumb">
        <li><a href="/">Hjem</a></li>
        <li><a href="/all-products">Produkter</a></li>
        <li class="active">Accessories</li>
      </ol>

      
      <div class="panel panel-primary">
        <div class="panel-body">
          
          <div class="media">
            <div class="media-left">
              <a href="#">
                <?php $imgButterfly = ROOT_URL . '/images/butterfly1thumb.png' ;?>
                <img class="media-object" src="<?php echo $imgButterfly ;?>" height="140" width="140">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Butterfly</h4>
              <p>Lavet i filt. Fantastisk til en aften i byen.</p>
              <a class="btn btn-default btn-sm" role="button" href="#">Price: .. DKK</a>
            </div>
          </div>
          
          <div class="media">
            <div class="media-left">
              <a href="#">
                <?php $imgKeys = ROOT_URL . '/images/noglering1thumb.png' ;?>
                <img class="media-object" src="<?php echo $imgKeys ;?>" height="140" width="140">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Nøglering</h4>
              <p>Sødt lille hjerte som passer perfekt blandt nøglerne.</p>
              <a class="btn btn-default btn-sm" role="button" href="#">Price: .. DKK</a>
            </div>
          </div>
          
          <div class="media">
            <div class="media-left">
              <a href="#">
                <?php $imgSko = ROOT_URL . '/images/sko1thumb.png' ;?>
                <img class="media-object" src="<?php echo $imgSko ;?>" height="140" width="140">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Futsko</h4>
              <p>De sødste små futsko til spædbørn.</p>
              <a class="btn btn-default btn-sm" role="button" href="#">Price: .. DKK</a>
            </div>
          </div>
          
        </div>
      </div>
      

    </div>
  </div>
  
  
  <?php include ROOT_DIR . '/includes/lower-body.php';?>
</body>
</html>