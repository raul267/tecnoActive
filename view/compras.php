<div style="margin-top:25px;">
    <div class="row">
    <div class="col-md-6">
      <div class="col-md-3">
        <label>Rango de fechas</label>
      </div>

        <div class="col-md-1">
          <label>Desde:</label>
       </div>
        <div class="col-md-4">
                <input type="date" name="fechaInicio" value="">
        </div>

        <div class="col-md-1">
          <label>Hasta:</label>
       </div>
        <div class="col-md-3">
                <input type="date" name="fechaFin" value="">
        </div>
    </div>
  </div>
  <br>

<div class="row" style="margin-left:10px;">
    <div class="col-md-6">
        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Producto</th>
                    <th>Proveedor</th>
                    <th>Cantidad(Ton)</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Termino</th>
                    <th>Embarques</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach ($c->Listar() as $row): ?>
                  <tr>
                    <td><?php echo $row->idCompra?></td>
                    <td><?php echo $row->idProducto ?></td>
                    <td><?php echo $row->proveedor ?></td>
                    <td><?php echo $row->cantidadPedido ?></td>
                    <td><?php echo $row->fechaInicio ?></td>
                    <td><?php echo $row->fechaTermino?></td>
                    <td><a href="?c=Usuario&a=EmbarquesPorCompras&id=<?php echo $row->idCompra ?>"><span class="glyphicon glyphicon-plane"></span></a></td>
                  </tr>
              <?php endforeach; ?>

              </tbody>
              <tfoot>
                 <tr>
                   <th>ID</th>
                   <th>Producto</th>
                   <th>Proveedor</th>
                   <th>Cantidad(Ton)</th>
                   <th>Fecha Inicio</th>
                   <th>Fecha Termino</th>
                   <th>Embarques</th>
                 </tr>
              </tfoot>
              </table>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-8">
                  <canvas id="graficoEstadisticas"></canvas>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <canvas id="graficoLlego"></canvas>
              </div>
            </div>
          </div>

      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <a href="?c=Usuario&a=IngresarCompra" class="btn btn-primary">Agregar nueva compra</a>
        </div>
      </div>
