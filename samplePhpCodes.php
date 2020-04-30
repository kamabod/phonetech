
 
  <?php

$phone_id =$_GET['id'];
$sql = 'SELECT * FROM products WHERE product_id='.$phone_id;
$result = mysqli_query($connection,$sql);

while ($row = mysqli_fetch_assoc($result)){
  //echo "<img src='DBimages/"  .$row['image'] . "' width='220' height='330'>";
  //echo "$row['name']"; 
  //echo "<ul class='unstyled'>";//unstyled doesn't work
  echo "<li>" . $row['name']. "</li>";
}
echo "</ul>";

mysqli_free_result($result);

?>


<?php

$phone_id =$_GET['id'];
$sql = 'SELECT * FROM products WHERE product_id='.$phone_id;
$result = mysqli_query($connection,$sql);

while ($row = mysqli_fetch_assoc($result)){
  //echo "<img src='DBimages/"  .$row['image'] . "' width='220' height='330'>";
  //echo "$row['name']"; 
  echo "<ul class='unstyled'>";//unstyled doesn't work
  echo "<li>" . $row['price']. "</li>";
}
echo "</ul>";

mysqli_free_result($result);

?>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 <?php
 $connection = mysql_connect ('localhost','root','');
mysql_select_db('ABC_Library');

$Book_Number =      $_POST ['Book_Number'];
$Book_Title =       $_POST ['Book_Title'];
$Book_Description=  $_POST['Book_Description'];
$Author =           $_POST ['Author'];
$Publisher  =       $_POST['Publisher'];
$Year_Published =   $_POST['Year_Published'];


$query = 
"INSERT INTO Theology_Books
(Book_Number,Book_Title,Book_Description,Author,Publisher,Year_Published)

values

('$Book_Number','$Book_Title','$Book_Description','$Author','$Publisher','$Y    ear_Published')";

$result = mysql_query($query);
Echo "Database Saved"; 
mysql_close($connection);
?>

/*<ul>
            <li>Apple iPhone 11 Pro</li>
            <br>
            <li>E 1100</li>
            <br>
            <li>64 GB storage</li>
            <br>
            <li>Silver</li>
            <br>
            <li>5,8 inch Super Retina Display</li>
            <br>
            <li>12 MP triple camera+12 PM camera(front)</li>
            <br>
            <li>Apple A13 Bionic</li>

          </ul>