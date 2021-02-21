<?php
        while($row = mysqli_fetch_assoc($result)){
    ?>
  <tr>
      <th scope="row"><?php echo $row['travel_id']; ?></th>
      <td><?php echo $row['emp_id']; ?></td>
      <td><?php echo $row['city']; ?></td>
      <td><?php echo $row['from_date']; ?></td>
      <td><?php echo $row['to_date']; ?></td>
  </tr>
<?php }?>