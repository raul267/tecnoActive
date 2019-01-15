<div class="col-md-12 col-sm-12 col-xs-12">
  <div style="margin-top:25px;">
    <label>Facturas</label>
  </div>
</div>

  <div class="row" style="margin-left:10px;">
    <div class="col-md-7 col-sm-12 col-xs-12">
      <table id="datatable" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Proveedor</th>
                <th>Fecha generacion</th>
                <th>Fecha pago</th>
                <th>Valor neto</th>
                <th>Abrir</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($p->Listar() as $r): ?>
              <tr>
                <td><?php echo $r->proveedor ?></td>
                <td><?php echo $r->fechaGeneracion ?></td>
                <td><?php echo $r->fechaPago ?></td>
                <td><?php echo $r->valor ?></td>
                <td><a href="<?php echo $r->factura ?>" target="_blank"><span class="glyphicon glyphicon-file"></span></a></td>
              </tr>
            <?php endforeach; ?>

          </tbody>
          <tfoot>
            <tr>
              <th>Proveedor</th>
              <th>Fecha generacion</th>
              <th>Fecha pago</th>
              <th>Valor neto</th>
              <th>Abrir</th>
            </tr>
          </tfoot>
      </table>
    </div>
    <div class="col-md-5 col-sm-12 col-xd-12" style="margin-top:100px;">
      <a href="?c=Usuario&a=IngresarProveedores" class="btn btn-primary">Agregar facturas</a>
    </div>
  </div>
