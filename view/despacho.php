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
                    <th>Cantida kg</th>
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
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Galleta AP 40</td>
                            <td>Sime Darby</td>
                            <td>1000</td>

                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>

                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>

                        </tr>

                      </tbody>
                      <tfoot>
                        <tr>
                          <th>ID</th>
                          <th>Producto</th>
                          <th>Cliente</th>
                          <th>Fecha Entrega</th>
                        </tr>
                      </tfoot>
                      </table>
                      <div class="row" style="margin-left:10px;">
                        <a href="" class="btn btn-primary">Modificar programacion</a>
                      </div>
                  </div>
              </div>
            </div>
