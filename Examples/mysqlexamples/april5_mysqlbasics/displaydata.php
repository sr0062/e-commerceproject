<html>
<style>
    .flex-container {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;

        }

       
    .flex-container > div {
    
        background-color: lightgrey;
        width: 300px;
        border: 10px solid green;
        padding: 50px;
        margin: 20px;
        text-align: center;
    }
    span{
        background-color:lightblue;
        border: 1px solid blue;
        display: inline-block;
    }
</style>
<body>
<h2>Displaying data from database</h2>
<div class="flex-container">
<?php
    include('connectdb.php');
    $sql = "SELECT * FROM testTable2";
	    $res = mysqli_query($mysqli, $sql);

    if ($res) {
		while ($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
			$id  = $newArray['id'];
			$testField = $newArray['testField'];
            $info = $newArray['info'];
			echo "<div><span> Id: ".$id." </span><br> <span> Field: ".$testField." </span> <br><span> Info:".$info. "</span></div>";
	   	}

	} else {
		printf("Could not retrieve records: %s\n", mysqli_error($mysqli));
    }
    
    mysqli_free_result($res);//free memory
    mysqli_close($mysqli); //close connection

?>
</div>
</body>
</html>