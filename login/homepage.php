<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prem kuumar web</title>
</head>
<body>

    <div style="text-align:center; padding:15%;">
    <table border="1" bgcolor="green">
	       <tr align="center" valign="middle">
			<th>period</th>
			<th>1</th>
			<th>2</th>
			<th>3</th>
			<th>4</th>
		        <th rowspan="2">12:30PM-1:30PM</th>
			<th>5</th>
			<th>6</th>
			<th>7</th>
		</tr>
		<tr align="center" valign="middle">
			<th>Day</th>
			<th>8:30AM-9:30AM</th>
			<th>9:30-10:30AM</th>
			<th>10:40-11:40AM</th>
			<th>11:00AM-12:30AM</th>
			<th>1:30PM-2-30PM</th>
			<th>2:30-3PM:30PM</th>
			<th>3:30PM-4:30PM</th>
		</tr>


		<tr align="center" valign="middle">
			<th>mon</th>
			<td>icwd</td>
			<td>mat</td>
			<td>com</td>
			<td>dcf</td>
		        <td rowspan="6">L<br/>U<br/>N<br/>C<br/>H<br/>
			<td>tam</td>
			<td>eng</td>
			<td>reli</td>
         	
		</tr> 
		
		<tr align="center" valign="middle">
			<th>tue</th>
			<td>mat</td>
			<td>tam</td>
			<td>eng</td>
			<td>dcf</td>
			<td colspan="3">lab</td>
		</tr>


		<tr align="center" valign="middle">
			<th>wed</th>
			<td>icwd</td>
			<td>mat</td>
			<td>com</td>
			<td>dcf</td>
			<td>tam</td>
			<td>eng</td>
			<td>reli</td>
			
		</tr>
		<tr align="center" valign="middle">
			<th>thur</th>
			<td>mat</td>
			<td>tam</td>
			<td>eng</td>
			<td>dcf</td>
			<td colspan="3">lab</td>
		</tr>
	
		<tr align="center" valign="middle">
			<th>fri</td>
			<td>dcf</td>
			<td>icwd</td>
			<td>mat</td>
			<td>tam</td>
			<td>skill</td>
			<td>lab</td>
			<td>com</td>

		</tr>
	</table>
    <style>
#a {
         text-shadow: 4px 8px 4px red;
         color:black;
         text-align:center;
         text-transform:uppercase;
         font-size:50px;
         font-family:snap ITC;
         }
</style>
</head>
<body><center>
<h1> 

<p id="a"> <marquee direction="left"></marquee>Car Seat Mechanic with variety Design!!!  </p>
</h1></center>
<h1 style="font-family: Algerian;cfont-size:20px; font-weight:bold;color:blue"select your favourite Seats designs... </h1>
<b>All types of Seats materials are available</b>
<br>
<br>
<h3> Timings: </h3>
<table border="2" bordercolor="black" bgcolor="white">
<tr align="center" valign="middle">
	<th>Day</th>
	<th>Morning</th>
	<th>closing time</th>
</tr>
	<tr align="center" valign="middle">
	<td>Mon-Sat</td>
	<td>9:30AM</td>
	<td>10:30AM<td>
</tr>
</table>
<h3> Place </h3>

we will let you kmow later!!!...

<br><br>

<p> select the best picture and share to our whatsapp number</p>
<p><a href="mailto:prempremkumar64598@gamil.com"> use this link to send your items email</a> </p>




      <p  style="font-size:50px; font-weight:bold;">
       welcome to this website <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
           
        }
       }
       ?>
       :)
      </p>
      <a href="logout.php">Logout</a>
    </div>
</body>
</html>