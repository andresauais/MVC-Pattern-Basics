<?php foreach($this->model->Listar() as $r): ?>
  <tr>
      <td><?php echo $r->Nombre; ?></td>
      <td><?php echo $r->Apellido; ?></td>
      <td><?php echo $r->Correo; ?></td>
      <td><?php echo $r->Sexo == 1 ? 'Hombre' : 'Mujer'; ?></td>
      <td><?php echo $r->FechaNacimiento; ?></td>
      <td>
          <a href="?c=Alumno&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
      </td>
      <td>
          <a href="?c=Alumno&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
      </td>
  </tr>
<?php endforeach;?>