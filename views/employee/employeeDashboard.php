<h1>Employees Information</h1>
<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col"># Travels</th>
    </tr>
  </thead>
  <tbody>
  <?php while($row = mysqli_fetch_assoc($result)){?>
    <tr>
        <th scope="row"><a href="index.php?controller=employeeController.php&action=getEmployee&emp_id=<?php echo $row['emp_id'];?>"><?php echo $row['emp_id'];?></a></th>
        <td><?php echo $row['firstName']; ?></td>
        <td><?php echo $row['lastName']; ?></td>
        <td><a href="index.php?controller=travelController.php&action=get&emp_id=<?php echo $row['emp_id'];?>"><?php echo $row['number'];?></a></td>
    </tr>
  <?php }?>
  </tbody>
</table>