<html>
<head>

<style> /* margin information */
	body{
        background-image: url('flydubai-2.jpg'); 
        background-repeat: no-repeat;
        background-attachment: fixed; 
        background-size: cover;
        font-weight: 800;
        text-align: center;
	}
	body.border {	
        margin: auto;
  		width: 55%;
  		border-style: solid;
  		padding: 40px;
        border-collapse: separate;
        border-spacing: 60px;
	}
}
	
</style>

</head>
<body class = "border">
<?php

$CompanyName = $_GET['CompanyName'];
$RegNo= $_GET['RegNo'];
$planeID = $_GET['planeID'];
$NoOfSeats = $_GET['NoOfSeats'];
$class= $_GET['class'];
$from = $_GET['from'];
$to = $_GET['to'];
$depTime = $_GET['depTime'];
$arrTime = $_GET['arrTime'];

echo '<h> <font size="6.5" color="#00005f"> Your Information System</font> </h>';
echo ("<br><br>");

echo ("Thank you!  " . $CompanyName );   // Thank you message
echo ("<br><br>");
echo('<h> <font size="5" color="#ff0000"> Your information has been recorded.</font> </h>');

echo ("<br><br>");

echo "Your registration number  : ".$RegNo;  //  Displaying Selected Colour
echo ("<br>");
echo "Your plane ID             : ".$planeID;
echo ("<br>");
echo "You have arranged  ".$NoOfSeats;
echo ("seets in your flight with ".$class);
echo "class. ";
echo ("<br><br>");
echo "Flight is from ".$from;
echo " to ".$to;
echo " departure at ".$depTime;
echo ("<br><br>");
