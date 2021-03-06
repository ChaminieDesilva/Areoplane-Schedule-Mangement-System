<!<!DOCTYPE html >
<html lang = "en">
<head>
	<meta charset = "UtF-8">
	<meta name ="viewport" content = "width= device-width, iniial-scale=1.0">
	<title> Flight Management </title>
	<link rel = "stylesheet" href = "style_sheet1.css">
</head>
<body> 
	<h1> Areoplane Schedule Mangement System </h1>

	<div class="tab">
		<button class="tablinks" onclick="openCity(event, 'ADD')" id="defaultOpen">ADD</button>
		<button class="tablinks" onclick="openCity(event, 'UPDATE')">UPDATE</button>
		<button class="tablinks" onclick="openCity(event, 'DELETE')">DELETE</button>
	</div>

	<div id="ADD" class="tabcontent">
		<div id = "div1" class = "class1">
			<h2>Add your company details and flight schedules</h2>
		

			<form method="GET" action="insert.php">

				<div class= "class2">	
					<h3> Company Details </h3>
					<table>
						<tr>
							<td><h4> Company Name </h4> </td><td>:</td>
							<td><input type="text" name="CompanyName"  required=""></td>
						</tr>
						<tr>
							<td><h4> Registration No. </h4></td> <td>:</td>
							<td><input type="text" name="RegNo"  required=""></td>
						</tr>
					</table>
				</div>



				<div class= "class2">
					<h3> Areoplane Details</h3>
					<table >
						<tr> 
							<td> <h4>Areoplane ID  </h4> </td>
							<td>:</td>
							<td> <input type="text" name="planeID" required=""></td>
						</tr>
						<tr> 
							<td> <h4>Number of Seats</h4> </td>
							<td>:</td>
							<td> <input type="text" name="NoOfSeats" required=""></td>
						</tr>
						<tr> 
							<td> <h4>Class</h4> </td>
							<td>:</td>
							<td><select name ="class" required="">
								<option value="Economy">Economy</option>
								<option value="PremiumEconomy">Premium Economy</option>
								<option value="Business">Business</option>
								<option value="FirstClass">First Class</option>
							</select></td>
						</tr>
					</table>
				</div>



				<div class= "class2">
					<h3> Schedule Details</h3>
					<table>
						<tr> 
							<td><h4>From :</h4><input type="text" name="from" required="" placeholder="type depature city"></td>
							<td> <h4> To :</h4><input type="text" name="to" required="" placeholder="type destination city"></td> 
						</tr>

						<tr> 
							<td> <h4>Depature Time :</h4> <input type="time" name="depTime" required="" >&nbsp;&nbsp;</td>

							<td> <h4> Arrival Time :  </h4> <input type="time" name="arrTime" required=""></td>
						</tr>

					</table>
					<br><br>
				</div>
				<div class = "class3">
					<input type = "submit" value = "Add Schedule">
				</div>

			</form>
		</div>
	</div>

	<div id="UPDATE" class="tabcontent">
		<h3>Search for your all Schedules</h3>
		<form method="GET" action="update.php">
			<table>
				<tr>
					<td> <h4>Company Registration No.</h4></td>
					<td>:</td>
					<td><input type="Search" name="RegNo"><button type="submit">Search</button></td>
				</tr>
			</table>
			<br>
			<br>
			<table id="t01" border="1px solid black" >
				<tr>
					<th>Record No.</th>
					<th> Plane ID</th>
					<th>From</th>
					<th>To</th>
					<th>Departure Time</th>
					<th>Arrival Time</th>
				</tr>
			</table>

		</form>
		<p></p> 
	</div>

	<div id="DELETE" class="tabcontent">
		<h3>delete an existing schedule</h3>
		<p></p> 
	</div>


	<script>
		function openCity(evt, cityName) {
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}
			document.getElementById(cityName).style.display = "block";
			evt.currentTarget.className += " active";
		}

					// Get the element with id="defaultOpen" and click on it
					document.getElementById("defaultOpen").click();
	</script>

</body>

</html>



