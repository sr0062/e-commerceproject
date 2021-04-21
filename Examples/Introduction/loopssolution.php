<html>
<body>
<?php
echo "In CS IS Server, create a folder named phpclassworks then complete class work and upload it there.<br>";
echo "Classwork 1: Print numbers from 0 to 9";
for($i=0;$i<10;$i++){
    echo $i."<br>";
}
echo "Classwork 2: Create an associative array containing employees with their name and position and then print info as: <br>";
$employees=array("John"=>"Staff","Mary"=>"Supervisor");

foreach($employees as $name => $position){
    echo "Name: ".$name. "\tPosition: ".$position. "<br>";
}
?>

</body></html>