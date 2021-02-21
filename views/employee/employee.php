<?php 
        while($row = mysqli_fetch_assoc($result)){
    ?>
  <tr>
      <th scope="row"><?php echo $row['emp_id']; ?></th>
      <td><?php echo $row['firstName']; ?></td>
      <td><?php echo $row['lastName']; ?></td>
      <td><?php echo $row['address']; ?></td>
      <td><?php echo $row['city']; ?></td>
      <td><a href="index.php?emp_id=<?php echo $row['emp_id'];?>"><?php echo $row['number']; ?></a></td>
  </tr>
<?php }?>