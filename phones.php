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

    <link rel="stylesheet" href="css/general.css">

    <link rel="stylesheet" href="css/phones.css">

    <script src="js/login.js"></script>
    <script src="js/shoppingBasket.js"></script>


    <title>Phones</title>

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
      
    ?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="navbar-brand" href="myProject.php">Back</a>
              </li>
            </ul>
            <span class="navbar-text" id="userLoggedIn">Logged In</span>
          </nav>
        </div>
      </div>

      <h1 class="padding-phones">Smartphones</h1>
      <p class="padding-phones">Smartphones are the most personal tech we own. That is why it is so important to
        pick the
        phone that is best for your needs.
        <br>The best phones deliver great cameras, the performance you need to multitask and the endurance to
        last the whole day.</p>
      <hr>
      <br>
      <div class="row">
        <div class="col-md-6 img-phones text-center">
          <img src="Images/apple11Silver.jpg" class="img-fluid" height="330" width="230">
        </div>
        <div class="col-md-4 text-phones">

            <?php

              $phone_id =$_GET['id'];
               // GET parameter always string//anything not numeric is 0, && is_numeric( $_GET['id'] ); //make sure it is an integer, it may be a string value

              // if(!empty($_GET['id']) and is_numeric($_GET['id'])){
              //  $phone_id = (int)$_GET['id'];
              //}

              //echo "$phone_id";
              $sql = 'SELECT * FROM products WHERE product_id='.$phone_id;//$phone_id LIMIT 1';
              $result = mysqli_query($connection,$sql);

              while ($row = mysqli_fetch_array($result)) {

              
              // if (is_int((int) $_GET['user_id']) && (int) $_GET['user_id'] != 0) {
   // $user_id = $_GET['user_id'];
  //}
                //echo " $row['product_id']";
              //$price= $row['price'];


            //echo "$row['product_id']";
                                
                // while ($row = mysqli_fetch_assoc($result)){
                // echo "<a class='dropdown-item' href='phones.php?id=" . $row['product_id'] . "'>";
                // echo $row['name'] . "</a>";
              
              echo "<ul id='phoneList'>";
              echo "<li>" . $row['name']. "</li>";
              echo "<li>" . $row['price']. "</li>";
              echo  "<li>" . $row['storage']. "</li>";
              echo  "<li>" . $row['colour']. "</li>";
              echo  "<li>" . $row['display']. "</li>";
              echo  "<li>" . $row['camera']. "</li>";
              echo  "<li>" . $row['processor']. "</li>";
            
            }

            echo "</ul>";
                
            mysqli_free_result($result);

            ?>
        
         
        </div>

        <div class="col-md-2">

          <a class="btn btn-primary" role="button" data-toggle="modal" data-target="#myModal" id="loginButton">Login to
            buy</a>
          <br>
          <a class="btn btn-primary" role="button" data-toggle="modal" data-target="#myModal1" id="buyNowButton">Buy
            now</a>

        </div>

      </div>
    </div>

    <!-- Modal login -->
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
            <!-- <a class="btn btn-primary" role="button" data-toggle="modal" data-target=""
              onclick="checkPassword()">Submit</a>-->
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
                      <small class="text-muted" id="productId">Iphone 11 Pro</small> 
                    </div>
                    <div>
                      <h6 class="my-0">Quantity</h6>
                      <input type="text" id="productQuantity" onchange="sumCalculation()"/>
                    </div>
                    <div>
                      <h6 class="my-0">Price (Eur)</h6>
                      <small class="text-muted" id="productPrice">1000</small>
                    </div>
                    <span class="text-muted" id="productSum">2000</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between">
                    <span>Sub-total (EUR)</span>
                    <strong id="productSubTotal">2000</strong>
                  </li>
                  <li class="list-group-item d-flex justify-content-between">
                    <span>Vat (EUR)</span>
                    <strong id="productVat">400</strong>
                  </li>
                  <li class="list-group-item d-flex justify-content-between">
                    <span>Total (EUR)</span>
                    <strong id="productTotal">2000</strong>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <a class="btn btn-primary" href="confirmOrder.php" role="button">Confirm order</a>
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