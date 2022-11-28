<?php 
session_start();

	include("agencyconnection.php");
	include("agencyfunctions.php");
	
?>
<html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
	</head>
	<body>
		<form action="" method="POST">
			<input type="text" name="model" id="" placeholder="Vehicle model"><br><br>
			<input type="text" name="number" id="" placeholder="Vehicle number"><br><br>
			<input type="text" name="capacity" id="" placeholder="Seating capacity"><br><br>
			<input type="text" name="rent" id="" placeholder="Rent per day(Rs.)"><br><br>
			<input type="submit" name="save_btn" id="" value="Save">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<button><a href="car rental agency.html">Home</a></button>
		</form>

		<?php
		if(isset($_POST['save_btn'])){
			$model = $_POST['model'];
			$number = $_POST['number'];
			$capacity = $_POST['capacity'];
			$rent = $_POST['rent'];

			$query = "INSERT INTO agencyrent (model,number,capacity,rent) VALUES ('$model','$number','$capacity','$rent')";
			$data=mysqli_query($con,$query);
	
		}
		?>
	</body>
	</html>
</html>
<table border="1px" cellpadding="5px" cellspacing="0">
	<tr>
<th>Vehicle model</th>
<th>Vehicle number</th>
<th>Seating capacity</th>
<th>Rent per day(Rs.)</th>
<th colspan="2">Actions</th>
</tr>
<?php
$query = "SELECT * FROM agencyrent";
$data=mysqli_query($con,$query);
$result=mysqli_num_rows($data);
if ($result){
	while($row=mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $row['model']; ?></td>
			<td><?php echo $row['number']; ?></td>
			<td><?php echo $row['capacity']; ?></td>
			<td><?php echo $row['rent']; ?></td>
			<td><a href="agencyupdate.php?id=<?php echo $row['id'];?>">Edit</a></td>
		</tr>
		<?php
	}
}else{
	echo "No record found";
}
 ?>

</table><br><br>

<h1>BOOKED HISTORY</h1>

<?php
$model = $_POST['model'];
$number = $_POST['number'];
$capacity = $_POST['capacity'];
$rent = $_POST['rent'];
$days = $_POST['days'];
$date = $_POST['date'];
?>
 <table border="1px" cellpadding="5px" cellspacing="0">
    <th>Vehicle model</th>
    <th>Vehicle number</th>
    <th>Seating capacity</th>
    <th>Rent per day</th>
    <th>Number of days</th>
    <th>Date</th>
<tr>
    <td><?php echo $model; ?></td>
    <td><?php echo $number; ?></td>
    <td><?php echo $capacity; ?></td>
    <td><?php echo $rent; ?></td>
    <td><?php echo $days; ?></td>
    <td><?php echo $date; ?></td>
</tr>
</table>

