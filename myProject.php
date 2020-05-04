<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <!--Font Awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="css/general.css">
  <link rel="stylesheet" href="css/main-page.css">
  <link rel="stylesheet" href="css/phones.css">

  <script src="js/login.js"></script>
  <script src="js/randomimages.js"></script>

  <title>My final project</title>
</head>

<body>

  <?php
    
      //Create a database connection
      $dbhost = "localhost";
      $dbuser = "root";
      $dbpassword = "";
      $dbname = "phonetech_db";

      $connection = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
      
      //Test if connection occoured
      if(mysqli_connect_errno()){
        die("DB connection failed: " .
          mysqli_connect_error() .
            " (" . mysqli_connect_errno() . ")"
            );
      }

      if (!$connection)
        {
          die('Could not connect: ' . mysqli_error());
        }
      
      //Save the Query
      
        $sql = "SELECT * FROM PRODUCTS";
        $result = mysqli_query($connection, $sql);
  ?>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

        <nav class="navbar sticky-top navbar-expand-lg navbar-dark">
          <a class="navbar-brand" href="#">Phonetech</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="phones.php">Phones <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://localhost/phonetech/connectionToDb.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Phones</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php
            while ($row = mysqli_fetch_assoc($result)){
              echo "<a class='dropdown-item' href='phones.php?id=" . $row['product_id'] . "'>";
              echo $row['name'] . "</a>";
            }
          ?>
          <!-- <a class="dropdown-item" href="http://localhost/phonetech/connectionToDb.php">Check our phones</a> -->
        </div>
          </li>
              <li class="nav-item active">
                <a class="nav-link" href="aboutPage.php">About</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="supportPage.php">Support</a>
              </li>
            </ul>
          </div>
        </nav>
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            <!-- <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="6"></li> -->
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="Images/smartphones.jpg" id="image1" class="d-block w-100">
                <div class="carousel-caption">
                <h1 class="h3-responsive">Connect</h1>
                <p>Phonetech</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="Images/phoneInSpace.jpg" id="image2" class="d-block w-100">
               <div class="carousel-caption">
                <h1 class="h3-responsive">Communicate</h1>
                <p>Phonetech</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="Images/selfies.jpg" id="image3" class="d-block w-100">
                <div class="carousel-caption">
                <h1 class="h3-responsive">Experience</h1>
                <p>Phonetech</p>
              </div>
            </div>
          </div>
          <!-- <div class="carousel-item">
              <img src="Images/apple11Silver.jpg" id="image4" class="d-block w-100" alt="Second slide">
              <div class="mask rgba-black-light"></div>
              <div class="carousel-content">
                <p>Phonetech<br> Info</p>
              </div>
              <div class="carousel-caption">
                <h3 class="h3-responsive">Info</h3>
                <p>Info</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="Images/iphone11.jpg" id="image5" class="d-block w-100" alt="Second slide">
              <div class="mask rgba-black-light"></div>
              <div class="carousel-content">
                <p>Phonetech<br> Info</p>
              </div>
              <div class="carousel-caption">
                <h3 class="h3-responsive">Info</h3>
                <p>Info</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="Images/iphone11a.jpg" id="image6" class="d-block w-100" alt="Second slide">
              <div class="mask rgba-black-light"></div>
              <div class="carousel-content">
                <p>Phonetech<br> Info</p>
              </div>
              <div class="carousel-caption">
                <h3 class="h3-responsive">Info</h3>
                <p>Info</p>
              </div>
            </div> -->

          <!-- <div class="carousel-item">
              <img src="Images/iphone11a.jpg" class="d-block w-100" alt="50">
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Iphone 11</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="Images/iphone11.jpg" class="d-block w-100" alt="50">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Iphone 11</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="Images/iphone11b.jpg" class="d-block w-100" alt="50">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Iphone 11</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="Images/iphoneXS.jpg" class="d-block w-100" alt="50">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Iphone XS</p>
              </div>
            </div> -->

        
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
  </div>

  <?php
    //close db connection
    mysqli_close($connection);
  ?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>