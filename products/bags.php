<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Bags</title>
  
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
        <li><a href="/">Home</a></li>
        <li><a href="/all-products">Products</a></li>
        <li class="active">Bags</li>
      </ol>

      
      <div class="panel panel-primary">
        <div class="panel-body">
          
          <div class="media">
            <div class="media-left">
              <a href="#">
                <?php $imgSmallBackpack = ROOT_URL . '/images/BitchBeTrippin.png' ;?>
                <img class="media-object" src="<?php echo $imgSmallBackpack ;?>" height="140" width="140">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Small backpack</h4>
              <p>A small back for everyday usage.</p>
              <a class="btn btn-default btn-sm" role="button" href="#">Price: 900 DKK</a>
            </div>
          </div>
          
          <div class="media">
            <div class="media-left">
              <a href="#">
                <?php $imgHandbag = ROOT_URL . '/images/tank-feels.gif' ;?>
                <img class="media-object" src="<?php echo $imgHandbag ;?>" height="140" width="140">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Handbag</h4>
              <p>A small back for everyday usage.</p>
              <a class="btn btn-default btn-sm" role="button" href="#">Price: 1600 DKK</a>
            </div>
          </div>
          
        </div>
      </div>
      

    </div>
  </div>
  
  
  <?php include ROOT_DIR . '/includes/lower-body.php';?>
</body>
</html>