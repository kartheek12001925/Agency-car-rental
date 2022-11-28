<?php 
session_start();

	include("agencyconnection.php");
	include("agencyfunctions.php");
    $id = $_GET['id'];
    $query="SELECT * FROM agencyrent WHERE id='$id'";
    $data=mysqli_query($con,$query);
    $row=mysqli_fetch_array($data);
?>
<h1>DETAILS</h1>
<div>
<form action="agencyindex.php" method="POST">
    <input type="text" id="model" value="<?php echo $row['model']?>" name="model" placeholder="Vehicle model"><br><br>
    <input type="text" value="<?php echo $row['number']?>" name="number" placeholder="Vehicle number"><br><br>
    <input type="text" value="<?php echo $row['capacity']?>" name="capacity" placeholder="Seating capacity"><br><br>
    <input type="text" value="<?php echo $row['rent']?>" name="rent" placeholder="Rent per day(Rs.)" ><br><br>
    <label for="days">Number of days : </label>
  <select name="days" id="days">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
  </select>
  <br><br>
    Date : <input type="date" name="date" id=""><br><br>
    <input type="submit" value="Book" name="book">
</form>