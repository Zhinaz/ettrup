<div class="container-fluid"
  <div class="row">
    <div class="col-sm-1 col-lg-2"></div>
    <div class="col-sm-10 col-lg-8">
      
      <!-- ### HEADER ### -->
      
      <script src="dist/js/jquery-1.12.4.min.js"></script>
      <script src="dist/js/bootstrap.min.js"></script>

      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Ettrup</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <!--<li><a href="/dinner">Dinner</a></li>-->
              <li class="dropdown">
                <a href="/all-products" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Produkter<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="/all-products">Alle produkter</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="/products/bags">Tasker</a></li>
                  <li><a href="/products/accessories">Accessories</a></li>
                </ul>
              </li>
            </ul>

            <!-- Nav Bar right side -->
            <ul class="nav navbar-nav navbar-right">
              <li><a href="/contact">Kontakt</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

