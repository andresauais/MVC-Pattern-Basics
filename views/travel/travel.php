<?php
        while($row = mysqli_fetch_assoc($result)){
    ?>
  <tr>
      <th scope="row"><?php echo $row['travel_id']; ?></th>
      <td><a href="index.php?emp_id=<?php echo $row['emp_id'];?>"><?php echo $row['emp_id'];?></a></td>
      <td><?php echo $row['city']; ?></td>
      <td><?php echo $row['from_date']; ?></td>
      <td><?php echo $row['to_date']; ?></td>
  </tr>
<?php }?>