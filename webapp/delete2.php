<!DOCTYPE html>
<head>
	<title>Delete Record</title>
</head>
<body>
	<?php
	require 'api/init.php';
	$record = $_GET['record'] ;
	$sql = "DELETE FROM Schedule WHERE Record_No = $record";

	$result = $con->query($sql);

	if($result){
        echo "Successfully Deleted";
	} else {
		echo "Wrong!!!!!!!";
	}
	?>
</body>