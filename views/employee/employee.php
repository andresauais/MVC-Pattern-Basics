<?php while($row = mysqli_fetch_assoc($result)){?>
<a href="index.php?controller=employeeController.php">BACK</a>
<h1>Employee #<?php echo $row['emp_id']?> information</h1>
<ul>
    <li><h2>First Name: <?php echo $row['firstName']?></h2></li>
    <li><h2>Last Name: <?php echo $row['lastName']?></h2></li>
    <li><h2>Address: <?php echo $row['address']?></h2></li>
    <li><h2>City: <?php echo $row['city']?></h2></li>
</ul>
<?php }?>