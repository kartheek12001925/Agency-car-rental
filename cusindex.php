<?php 
session_start();

	include("cusconnection.php");
	include("cusfunctions.php");

	$user_data = check_login($con);
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
	<h1>Available cars for Rent</h1>
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
	while($row=mysqli_fetch_assoc($data)){
		?>
		<tr>
			<td><?php echo $row['model']; ?></td>
			<td><?php echo $row['number']; ?></td>
			<td><?php echo $row['capacity']; ?></td>
			<td><?php echo $row['rent']; ?></td>
			<td><a href="cusrent.php?id=<?php echo $row['id'];?>">Rent</a></td>
		</tr>
		<?php
	}
}else{
	echo "No record found";
}
 ?>
</table>
</body>
</html>
</html>

<?php
		
?>
</div>