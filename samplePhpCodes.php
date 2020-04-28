
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