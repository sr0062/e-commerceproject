<?php
include('connectdb.php');

$sql = "CREATE TABLE testTable3 (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, testField VARCHAR (75))";
$res = mysqli_query($mysqli, $sql);
if($res)
    echo "Table created.";
else    
    echo "Cannot create table. <br>".mysqli_error($mysqli);

mysqli_close($mysqli);

?>

