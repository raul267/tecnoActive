<div style=" margin-top: 30px">
<div class="row" style="margin-left:10px;" >
<div class="col-md-8">
  <div style="margin-top:25px;">
    <div class="row">
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Ultimos despachos</label>
        </div>
      </div>
    </div>
    <br>

        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Cliente</th>
                    <th>Tipo documento</th>
                    <th>Factura nro</th>
                    <th>Fecha Emision</th>
                    <th>FechaEntrega</th>
                    <th>Monto total</th>
                    <th>Produto</th>
                    <th>Toneladas</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($d->Listar() as $row): ?>
                  <tr>
                      <td><?php echo $row->cliente ?></td>
                      <td><?php echo $row->tipoDocumento ?></td>
                      <td><?php echo $row->facturaNro ?></td>
                      <td><?php echo $row->fechaEmision ?></td>
                      <td><?php echo $row->fechaEntrega ?></td>
                      <td><?php echo $row->montoTotal ?></td>
                      <td><?php echo $row->idProducto ?></td>
                      <td><?php echo $row->cantidadKG ?></td>
                  </tr>
                <?php endforeach; ?>

              </tbody>
              <tfoot>
                <tr>
                  <th>Cliente</th>
                  <th>Tipo documento</th>
                  <th>Factura nro</th>
                  <th>Fecha Emision</th>
                  <th>FechaEntrega</th>
                  <th>Monto total</th>
                  <th>Produto</th>
                  <th>Toneladas</th>
                </tr>
              </tfoot>
              </table>

            <div class="row text-center" style="margin-left:10px;">
              <a href="?c=Usuario&a=IngresarDespacho" class="btn btn-primary">Agregar despacho  </a>
            </div>
          </div>
      </div>
      <div style="margin-top:50px;">
        <div class="col-md-4">
          <canvas  id="graficoDespacho"></canvas>
        </div>
      </div>
    </div>
    <div class="col-md-12" style="margin-top:15px;background-color:black;"></div>
      <div class="row" style="margin-left:10px;">
        <div class="col-md-4">
          <div style="margin-top:25px;">
            <div class="row">
              <div class="col-md-6">
                <div class="col-md-6">
                  <label>Programacion semanal</label>
                </div>
              </div>
            </div>
            <br>

                <table id="datatable1" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Producto</th>
                            <th>Cliente</th>
                            <th>Fecha Entrega</th>
                            <th>Toneladas</th>
                            <th>Agregar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($ds->Listar() as $r): ?>
                          <tr>
                            <td><?php echo $r->id ?></td>
                            <td><?php echo $r->descripcion ?></td>
                            <td><?php echo $r->cliente ?></td>
                            <td><?php echo $r->fechaEntrega ?></td>
                            <td><?php echo $r->cantidad ?></td>
                            <td><a href="?c=Usuario&a=ModificarDespachoSemanal&idD=<?php echo $r->id ?>"><span class="glyphicon glyphicon-floppy-saved"></span></a></td>
                            <td><a href="#"><span class="glyphicon glyphicon-remove"></span></a></td>
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>ID</th>
                          <th>Producto</th>
                          <th>Cliente</th>
                          <th>Fecha Entrega</th>
                          <th>Toneladas</th>
                          <th>Agregar</th>
                          <th>Eliminar</th>
                        </tr>
                      </tfoot>
                      </table>
                      <div class="row" style="margin-left:10px;">
                        <a href="?c=Usuario&a=IngresarProgramacionDespacho" class="btn btn-primary">Modificar programacion</a>
                      </div>
                  </div>
              </div>
            </div>
</div>
