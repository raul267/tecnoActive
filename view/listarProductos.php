<div class="container">
  <div class="row">
    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripcion</th>
                <th>Valor</th>
                <th>Editar</th>
                <th>Eliminar</th>

            </tr>
        </thead>
        <tbody>
          <?php foreach ($p->Listar() as $row): ?>
              <tr>
                <td><?php echo $row->idProducto?></td>
                <td><?php echo $row->descripcion ?></td>
                <td><?php echo '$'.$row->valor ?></td>
                <td><a href="?c=Usuario&a=ModificarProducto&id=<?php echo $row->idProducto ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td><a href="?c=Usuario&a=EliminarProducto&id=<?php echo $row->idProducto ?>"><span class="glyphicon glyphicon-remove"></span></a></td>

              </tr>
          <?php endforeach; ?>

          </tbody>
          <tfoot>
             <tr>
               <th>ID</th>
               <th>Descripcion</th>
               <th>Valor</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </tr>
          </tfoot>
        </table>
  </div>
  <div class="row">
    <a href="?c=Usuario&a=IngresarProducto" class="btn btn-primary">Ingresar un producto</a>
  </div>

</div>
