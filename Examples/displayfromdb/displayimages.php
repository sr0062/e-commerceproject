<html>
<head>
<?php 
    //connect db
    include('mysqlconnect.php') 
?> 
</head>
<body>

<p>
<?php 

    //we know that db is connected using $mysqli
    $sql = "SELECT * FROM readimages";
	$res = mysqli_query($mysqli, $sql);
    if ($res) {
		while ($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
			$id  = $newArray['id'];
            $name = $newArray['name'];
            $path = $newArray['path'];
            $description = $newArray['des'];
            ?>
            <!-- start html for image-->
            <p>
            <img style="height: 200; width: 200" src="<?php echo $path; ?>"/>  
            <p>
            <?php
            $info = "<span> Name: ".$name."</span>"."<br><span> Description:".$description."</span>";
            echo "<p>".$info."</p>";
            echo "</p"; //end html paragraph
           
	   	}
	} else {
		printf("Could not retrieve records: %s\n", mysqli_error($mysqli));
	}

	mysqli_free_result($res); //free the result
?>

</p>
<?php 

   //close db after all done
   mysqli_close($mysqli);
?>
</body>
</html>