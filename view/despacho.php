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
                    <th>Rut Emisor</th>
                    <th>rut receptor</th>
                    <th>Tipo documento</th>
                    <th>Factura nro</th>
                    <th>Fecha Emision</th>
                    <th>Monto total</th>
                    <th>Produto</th>
                    <th>Cantida</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($d->Listar() as $row): ?>
                  <tr>
                      <td><?php echo $row->rutEmisor ?></td>
                      <td><?php echo $row->rutReceptor ?></td>
                      <td><?php echo $row->tipoDocumento ?></td>
                      <td><?php echo $row->facturaNro ?></td>
                      <td><?php echo $row->fechaEmision ?></td>
                      <td><?php echo $row->montoTotal ?></td>
                      <td><?php echo $row->idProducto ?></td>
                      <td><?php echo $row->cantidadKG ?></td>
                  </tr>
                <?php endforeach; ?>

              </tbody>
              <tfoot>
                <tr>
                  <th>Rut Emisor</th>
                  <th>rut receptor</th>
                  <th>Tipo documento</th>
                  <th>Factura nro</th>
                  <th>Fecha Emision</th>
                  <th>Monto total</th>
                  <th>Produto</th>
                  <th>Cantida kg</th>
                </tr>
              </tfoot>
              </table>

            <div class="row" style="margin-left:10px;">
              <a href="?c=Usuario&a=IngresarDespacho" class="btn btn-primary">Agregar despacho  </a>
            </div>
          </div>
      </div>
      <div class="row">
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
                            <th>Cantidad</th>
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
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>ID</th>
                          <th>Producto</th>
                          <th>Cliente</th>
                          <th>Fecha Entrega</th>
                          <th>Cantidad</th>
                        </tr>
                      </tfoot>
                      </table>
                      <div class="row" style="margin-left:10px;">
                        <a href="?c=Usuario&a=IngresarProgramacionDespacho" class="btn btn-primary">Modificar programacion</a>
                      </div>
                  </div>
              </div>
            </div>
