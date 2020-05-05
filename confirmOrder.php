<!DOCTYPE html>
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
    <link rel="stylesheet" href="css/order.css">
    

    <title>Confirm order</title>

</head>

<body class="bg-light">

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
                <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
                 <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="navbar-brand" href="myProject.php">Back</a>
                    </li>
                </ul>
                    <span class="navbar-text" id="userLoggedIn">

                        <?php
                                    $phone_email = $_GET['email'];
                                    echo $phone_email;

                                
                        ?>
                                    
                                                                                
                    </span>
                </nav>


                </nav>
            </div>
        </div>
        <div class="py-5 text-center">
            <h2>Order Summary</h2>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h6 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted order-thanks">Thank you for your order. Please review your order details
                        below.<br><br>If you have any questions, please <a href="mailto:support@phonetech.ie">Email us
                        </a> or call us at <a href="tel:+003535555551212">555-555-1212</a>
                        and we will be happy to help.

                    </span>
                </h6>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Product name</h6>
                            <small class="text-muted">
                                <?php
                                $phone_id =$_GET['phoneid']; //need name not id of phone
                                
                                $sql = 'SELECT * FROM products WHERE product_id='.$phone_id;
                                $result = mysqli_query($connection,$sql);
                                while ($row = mysqli_fetch_assoc($result)){
                                echo $row['name'];
                                    
                                }
                                mysqli_free_result($result);
                            ?>
                            
                            
                            </small>
                        </div>
                        <div>
                            <h6 class="my-0">Quantity</h6>
                            <small class="text-muted" id="productQuantity">

                                <?php
                                    $phone_qty =$_GET['qty'];
                                    echo $phone_qty;
                      
                                ?>


                            </small>
                        </div>
                        <div>
                            <h6 class="my-0">Price</h6>
                            <small class="text-muted" id="productPrice">
                            <?php
                            $phone_id =$_GET['phoneid'];
                            $sql = 'SELECT * FROM products WHERE product_id='.$phone_id;
                            $result = mysqli_query($connection,$sql);
                            while ($row = mysqli_fetch_assoc($result)){
                            echo $row['price'];
                                
                            }
                             mysqli_free_result($result);
                            ?>   
                            
                            
                            </small>
                        </div>
                        <span class="text-muted" id="productSum"></span>
                    </li>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-5"></div>
            <div class="col-md-4">

            
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
                <div class="col-md-3"></div>
            </div>
        </div>


        <?php
            //close db connection
            mysqli_close($connection);
        ?>
    
        <script src="js/shoppingBasket.js"></script>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>