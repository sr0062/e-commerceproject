<?php

include('connectdb.php'); //need to setup database connection first
//insert into table you have created
$sql = "INSERT INTO testTable2 (testField, info) VALUES ('third value','info for third value')";
$res = mysqli_query($mysqli, $sql);
if ($res === TRUE) {
	   	echo "A record has been inserted.";
	} else {
		printf("Could not insert record: %s\n", mysqli_error($mysqli));
	}

    //adding multiple records
    addRecords($mysqli);
    mysqli_close($mysqli);

function addRecords($mysqli){
    //going to setup data in an array
    $data = array(
        "fourth value" =>"info for fourth value",
        "fifth value" =>"info for fifth value",
        "sixth value" =>"info for sixth value"
    );
    //run query for each data one by one
    foreach($data as $testField=>$info){
        $sql = "INSERT INTO testTable2 ( testField, info) VALUES('$testField','$info')";
        $res = mysqli_query($mysqli, $sql);
        if ($res === TRUE) {
                echo "A new record has been inserted.<br>";
            } else {
                printf("Could not insert record: %s\n", mysqli_error($mysqli));
            }

    }
}


?>