<?php 
session_start();

	include("agencyconnection.php");
	include("agencyfunctions.php");
    $id = $_GET['id'];
    $query="SELECT * FROM agencyrent WHERE id='$id'";
    $data=mysqli_query($con,$query);
    $row=mysqli_fetch_array($data);
?>

<div>
<form action="" method="POST">
    <input type="text" value="<?php echo $row['model']?>" name="model" placeholder="Vehicle model"><br><br>
    <input type="text" value="<?php echo $row['number']?>" name="number" placeholder="Vehicle number"><br><br>
    <input type="text" value="<?php echo $row['capacity']?>" name="capacity" placeholder="Seating capacity"><br><br>
    <input type="text" value="<?php echo $row['rent']?>" name="rent" placeholder="Rent per day(Rs.)"><br><br>
    <input type="submit" value="Update" name="update_btn">
    <button><a href="agencyindex.php">Back</a></button>

</form>
<?php
		if(isset($_POST['update_btn'])){
			$model = $_POST['model'];
			$number = $_POST['number'];
			$capacity = $_POST['capacity'];
			$rent = $_POST['rent'];

			$update = "UPDATE agencyrent SET model='$model',
                                       number = '$number',
                                       capacity = '$capacity',
                                       rent = '$rent' WHERE id='$id'";
			$data=mysqli_query($con,$update);
            echo "Updated successfully,click Back button to view updated table";
        }
		?>
</div>