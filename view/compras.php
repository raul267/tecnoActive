<div style="margin-top:25px;">
    <div class="row">
    <div class="col-md-6">
      <div class="col-md-3">
        <label>Rango de fechas</label>
      </div>

        <div class="col-md-1">
          <label>Desde:</label>
       </div>
        <div class="col-md-3">
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
    <div class="col-md-5">
        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Producto</th>
                    <th>Proveedor</th>
                    <th>Cantidad(Toneladas)</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Termino</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach ($c->Listar() as $row): ?>
                  <tr>
                    <td><?php echo $row->idCompra.'-'.$row->idEntrega ?></td>
                    <td><?php echo $row->descripcion ?></td>
                    <td>TecnoActive</td>
                    <td><?php echo $row->total ?></td>
                    <td><?php echo $row->fechaPedido ?></td>
                    <td><?php echo $row->fechaEntrega?></td>
                  </tr>
              <?php endforeach; ?>

              </tbody>
              <tfoot>
                 <tr>
                   <th>ID</th>
                   <th>Producto</th>
                   <th>Proveedor</th>
                   <th>Cantidad(Toneladas)</th>
                   <th>Fecha Inicio</th>
                   <th>Fecha Termino</th>
                 </tr>
              </tfoot>
              </table>
          </div>

          <div class="col-md-7">
             <img src="assets/pagina/images/grafico.jpg" alt="">
          </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <a href="?c=Usuario&a=IngresarCompra" class="btn btn-primary">Agregar nueva compra</a>
        </div>
      </div>
