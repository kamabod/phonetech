<DOCTtype>
  <html>

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Links to css files-->
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/phones.css">

    <!--Links to js files-->
    <script src="js/login.js"></script>
    <script src="js/shoppingBasket.js"></script>


    <title>Phones</title>

  </head>

  <body>
    <!--Php embedded-->
    <?php

    //Create a database connection
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpassword = "";
    $dbname = "phonetech_db";

    $connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

    //Test if connection occoured
    if (mysqli_connect_errno()) {
      die("DB connection failed: " .
        mysqli_connect_error() .
        " (" . mysqli_connect_errno() . ")");
    }

    if (!$connection) {
      die('Could not connect: ' . mysqli_error(
        null
      ));
    }

    ?>
    <!--Navbar Back and logged in-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <nav class="navbar sticky-top navbar-expand-lg navbar-dark">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="navbar-brand" href="index.php">Back</a>
              </li>
            </ul>
            <span class="navbar-text" id="userLoggedIn">Logged In</span>
          </nav>
        </div>
      </div>

      <!--Page contents-->
      <h1 class="ad-text-phones">Smartphones</h1>
      <p class="ad-text-phones">Smartphones are the most personal tech we own. That is why it is so important to
        pick the
        phone that is best for your needs.
        <br> Check the phones we offer and pick the best one for You.</p>
      <hr>
      <br>
      <div class="row">
        <div class="col-md-6 img-phones text-center">
          <!--Php embedded to display data from db-->
          <?php

          $phone_id = $_GET['id'];
          $sql = 'SELECT * FROM products WHERE product_id=' . $phone_id;
          $result = mysqli_query($connection, $sql);

          while ($row = mysqli_fetch_assoc($result)) {
            echo "<img src='DBimages/"  . $row['image'] . "' width='220' height='330'>";
          }

          mysqli_free_result($result);

          ?>

        </div>
        <div class="col-md-4 text-phones phone-padding">
          <?php

          $sql = 'SELECT * FROM products WHERE product_id=' . $phone_id;
          $result = mysqli_query($connection, $sql);

          while ($row = mysqli_fetch_array($result)) {
            echo "<ul id='phoneList'>";
            echo "<li>" . $row['name'] . "</li>";
            echo "<li>" . $row['price'] . "</li>";
            echo  "<li>" . $row['storage'] . "</li>";
            echo  "<li>" . $row['colour'] . "</li>";
            echo  "<li>" . $row['display'] . "</li>";
            echo  "<li>" . $row['camera'] . "</li>";
            echo  "<li>" . $row['processor'] . "</li>";
          }

          echo "</ul>";

          mysqli_free_result($result);

          ?>

        </div>
        <div class="col-md-2 phone-padding">
          <!--Buttons-->
          <button class="btn btn-primary" data-toggle="modal" data-target="#myModal" id="loginButton">Login to
            buy</button>
          <br>
          <button class="btn btn-primary" data-toggle="modal" data-target="#myModal1" id="buyNowButton">Buy
            now</button>
        </div>
      </div>
    </div>

    <!-- Modal login-->
    <div class="modal" id="myModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Login</h5>
            <button type="button" id="btnCloseModal" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form name="myForm">
              <div class="form-group">
                <label for="userEmail">Email address</label>
                <input type="email" class="form-control" id="userEmail" placeholder="Enter email">
                <small id="emailMessage" class="form-text text-danger">Please enter a valid email address</small>
              </div>
              <div class="form-group">
                <label for="userPassword">Password</label>
                <input type="password" class="form-control" id="userPassword" placeholder="Password">
                <small id="passwordMessage" class="form-text text-danger">Password must have 6 characters</small>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" onclick="checkPassword()" type="submit">Submit</button>
          </div>
        </div>
      </div>
    </div>

    <!--Modal shopping basket-->
    <div class="modal" id=myModal1 tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <i class="fa fa-shopping-cart fa-2x"></i>
            <h5 class="modal-title">Your shopping basket</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-12">
                <ul class="list-group mb-3">
                  <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                      <h6 class="my-0">Product</h6>
                      <!--Php embedded-->
                      <small class="text-muted">
                        <?php
                        $phone_id = $_GET['id'];
                        $sql = 'SELECT * FROM products WHERE product_id=' . $phone_id;
                        $result = mysqli_query($connection, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                          echo $row['name'];
                          echo "<input type='hidden' id='productId' value='" . $phone_id . "'/>";
                        }
                        mysqli_free_result($result);
                        ?>
                      </small>
                    </div>
                    <div>
                      <h6 class="my-0">Quantity</h6>
                      <input type="number" id="productQuantity" onchange="sumCalculation()" onkeyup="sumCalculation()" value="1" />
                    </div>
                    <div>
                      <h6 class="my-0">Price (Eur)</h6>
                      <small class="text-muted" id="productPrice">
                        <?php

                        $phone_id = $_GET['id'];
                        $sql = 'SELECT * FROM products WHERE product_id=' . $phone_id;
                        $result = mysqli_query($connection, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                          echo $row['price'];
                        }
                        mysqli_free_result($result);
                        ?>

                      </small>
                    </div>
                    <span class="text-muted" id="productSum"></span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="col-md-5"></div>
              <div class="col-md-7">
                <ul class="list-group mb-3">
                  <li class="list-group-item d-flex justify-content-between">
                    <span>Sub-total (EUR)</span>
                    <strong id="productSubTotal"></strong>
                  </li>
                  <li class="list-group-item d-flex justify-content-between">
                    <span>Vat (EUR)</span>
                    <strong id="productVat"></strong>
                  </li>
                  <li class="list-group-item d-flex justify-content-between">
                    <span>Total (EUR)</span>
                    <strong id="productTotal"></strong>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" onclick="confirmOrder()">Confirm order</button>

          </div>
        </div>
      </div>
    </div>

    <!--Js script to get values and pass them onto confirmOrder page-->
    <script>
      function confirmOrder() {

        var productId = document.getElementById("productId").value;
        var productQuantity = document.getElementById("productQuantity").value;
        var productPrice = document.getElementById("productPrice").text;
        var userEmail = document.getElementById("userLoggedIn").innerText;

        // If user inputs a number greater than 0 
        if (!isNaN(productQuantity) && productQuantity > 0) {
          // http://localhost/phonetech/confirmOrder.php?phoneid=1&qty=1&email=kamila@kp.com
          window.location = "confirmOrder.php?phoneid=" + productId + "&qty=" + productQuantity + "&email=" + userEmail;
        }

      }
    </script>



    <?php
    //Close db connection
    mysqli_close($connection);
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>

  </html>