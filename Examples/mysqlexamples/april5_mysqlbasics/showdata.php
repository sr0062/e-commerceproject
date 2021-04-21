<?php
    include('connectdb.php');

    //Try all of them one by one to see how they work
    example1($mysqli);
    //example3($mysqli);
    //example3($mysqli);


    mysqli_close($mysqli); //close connection


    

    //example using mysqli_assoc
    function example1($mysqli){
        $sql = "SELECT * FROM testTable2";
	    $res = mysqli_query($mysqli, $sql);

    if ($res) {
		while ($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
			$id  = $newArray['id'];
			$testField = $newArray['testField'];
            $info = $newArray['info'];
			echo "The ID is ".$id." and the text is: ".$testField." and the info is ".$info. "<br>";
	   	}

	} else {
		printf("Could not retrieve records: %s\n", mysqli_error($mysqli));
	}
    mysqli_free_result($res);//free memory
    }

       //example using mysqli_num
       function example2($mysqli){
        $sql = "SELECT * FROM testTable2";
	    $res = mysqli_query($mysqli, $sql);

    if ($res) {
       
        while ($newArray = mysqli_fetch_array($res, MYSQLI_NUM)){
            foreach($newArray as $row){
                echo $row."  ";
            }
            echo "<br>";
        }
	} else {
		printf("Could not retrieve records: %s\n", mysqli_error($mysqli));
	}
    mysqli_free_result($res);//free memory
    }

    //example using mysqli_num
    function example3($mysqli){
        $sql = "SELECT * FROM testTable2";
	    $res = mysqli_query($mysqli, $sql);

    if ($res) {
        $noOfFields = mysqli_num_fields($res);
        $noOfRows = mysqli_num_rows ( $res );
        for($row = 0;$row< $noOfRows;$row++){
            $newArray = mysqli_fetch_array($res, MYSQLI_NUM);
            for($col=0;$col<$noOfFields;$col++){
                echo $newArray[$col]." ";
            }
            echo "<br>";
        }
   
       
	} else {
		printf("Could not retrieve records: %s\n", mysqli_error($mysqli));
	}
    mysqli_free_result($res);//free memory
    }


?>


