<div style="margin-top:25px;">

  <div class="row" style="margin-left:10px;">
    <div class="col-md-7">
        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                  <th>Contrato</th>
                  <th>Fecha Provisión</th>
                  <th>Producto</th>
                  <th>Toneladas</th>
                  <th>N° Provisión</th>
                  <th>$ Transferido a AGA</th>
                  <th>N ident DI</th>
                  <th>Fecha pago DI</th>
                  <th>FA</th>
                  <th>PDF</th>
                  <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php $x = 0;foreach ($in->Listar() as $row): ?>
                  <tr>
                    <?php $x++; ?>
                    <td><?php echo $row->bl ?></td>}
                    <td><?php echo $row->fechaPedido ?></td>
                    <td><?php echo $row->idProducto ?></td>
                    <td><?php echo $row->cantidad ?></td>
                    <td><?php echo $row->nProvision ?></td>
                    <td><?php if($row->transferido !=null){echo '$'.$row->transferido;} ?></td>
                    <td><?php echo $row->nIdentDI ?></td>
                    <td><?php echo $row->fechaPagoDI ?></td>
                    <td><?php echo $row->fa ?></td>
                    <td><?php if ($row->nProvision !=null): ?>
                      <a href="<?php echo $row->faFile ?>" target="_blank"><span class="glyphicon glyphicon-file"></span></a>
                    <?php endif; ?></th>

                    <td><?php if ($row->nProvision !=null && $row->internado ==0): ?>
                     <form class="" action="?c=Usuario&a=InternarPartes&bl=<?php echo $row->bl ?>&total=<?php echo $row->porInternar ?>" method="post">
                      <label>Puedes internar hasta <?php echo $row->porInternar ?>:</label>
                      <input type="hidden" id="vPorInternar<?php echo $x?>" value="<?php echo $row->porInternar ?>">
                      <input type="text" name="cantidadInternar<?php echo $x?>" id="cantidadInternar<?php echo $x?>"><br>
                    <?php endif; ?> <?php if ($row->nProvision !=null && $row->internado ==0): ?>
                      <input style="margin-top:10px;" type="submit" id="btnInternar" value="Internar" class="btn btn-danger">
                    <?php endif; ?>
                  </form>
                    <a href="<?php if ($row->nProvision !=null): ?>

                    <?php endif; ?> <?php if ($row->nProvision == null): ?>
                      ?c=Usuario&a=IngresarInternacion&bl=<?php echo $row->bl ?>
                    <?php endif; ?>
                    <?php if ($row->internado == 1): ?>
                      ?c=Usuario&a=AGA
                    <?php endif; ?>" class="
                    <?php if ($row->nProvision == null && $row->internado ==0): ?>
                      btn btn-primary
                    <?php endif; ?>
                    <?php if ($row->internado == 1): ?>
                      btn btn-success

                    <?php endif; ?>"> <?php if ($row->nProvision == null && $row->internado ==0): ?>
                      Crear
                    <?php endif; ?>
                    <?php if ($row->internado == 1): ?>
                      Internado!!
                    <?php endif; ?></a></td>

                  </tr>

                <?php endforeach; ?>


              </tbody>
              <tfoot>
                 <tr>
                   <th>Contrato</th>
                   <th>Fecha Provisión</th>
                   <th>Producto</th>
                   <th>Toneladas</th>
                   <th>N° Provisión</th>
                   <th>$ Transferido a AGA</th>
                   <th>N ident DI</th>
                   <th>Fecha pago DI</th>
                   <th>FA</th>
                   <th>PDF</th>
                   <th>Acción</th>
                  </tr>
              </tfoot>
              </table>
              <input type="hidden" name="cfor2" id="cfor2" value="<?php echo $x ?>">
          </div>


      </div>
