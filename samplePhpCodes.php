
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