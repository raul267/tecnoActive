<div class="container" style="">
  <div class="row" style="">
    <h1>Productos</h1>
    <table id="datatable" class="table table-striped table-bordered" style="width:100%;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripción</th>
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
               <th>Descripción</th>
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
  <div class="col-md-"></div>
<div class="col-md-12" style="background-color:black; margin-top:15px;"></div>
  <div class="row" style="margin-top:20px;">
    <h1>Usuarios</h1>
    <table id="datatable1" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Última Conección</th>
                <th>Eliminar</th>

            </tr>
        </thead>
        <tbody>
          <?php foreach ($u->Listar() as $row): ?>
              <tr>
                <td><?php echo $row->nombre?></td>
                <td><?php echo $row->ultimaConexion ?></td>
                <td><a href="?c=Usuario&a=EliminarUsuario&id=<?php echo $row->idUsuario ?>"><span class="glyphicon glyphicon-remove"></span></a></td>

              </tr>
          <?php endforeach; ?>

          </tbody>
          <tfoot>
             <tr>
               <th>ID</th>
               <th>Última Conección</th>
               <th>Eliminar</th>
             </tr>
          </tfoot>
        </table>
  </div>
  <div class="row">
    <a href="?c=Usuario&a=IngresarUsuario" class="btn btn-primary">Ingresar un Usuario</a>
  </div>

</div>
