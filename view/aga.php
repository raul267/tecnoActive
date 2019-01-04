<div style="margin-top:25px;">

<div class="container">
    <div class="col-md-5">
        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                  <th>Contrato</th>
                  <th>Fecha Provision</th>
                  <th>Producto</th>
                  <th>Cantidad</th>
                  <th>N° Provision</th>
                  <th>$ Transferido a AGA</th>
                  <th>N ident DI</th>
                  <th>Fecha pago DI</th>
                  <th>FA</th>
                  <th>PDF</th>
                  <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($in->Listar() as $row): ?>
                  <tr>
                    <td><?php echo $row->bl ?></td>}
                    <td><?php echo $row->fechaPedido ?></td>
                    <th><?php echo $row->idProducto ?></th>
                    <th><?php echo $row->cantidad ?></th>
                    <th><?php echo $row->nProvision ?></th>
                    <th><?php echo '$'.$row->transferido ?></th>
                    <th><?php echo $row->nIdentDI ?></th>
                    <th><?php echo $row->fechaPagoDI ?></th>
                    <th><?php echo $row->fa ?></th>
                    <th><?php if ($row->nProvision !=null): ?>
                      <a href="<?php echo $row->faFile ?>" target="_blank"><span class="glyphicon glyphicon-file"></span></a>
                    <?php endif; ?></th>
                    <th><a href="<?php if ($row->nProvision !=null): ?>
                      ?c=Usuario&a=Internar&bl=<?php echo $row->bl ?>
                    <?php endif; ?> <?php if ($row->nProvision == null): ?>
                      ?c=Usuario&a=IngresarInternacion&bl=<?php echo $row->bl ?>
                    <?php endif; ?>
                    <?php if ($row->internado == 1): ?>
                      ?c=Usuario&a=AGA
                    <?php endif; ?>" class="btn btn-primary"><?php if ($row->nProvision !=null && $row->internado ==0): ?>
                      Internar
                    <?php endif; ?> <?php if ($row->nProvision == null && $row->internado ==0): ?>
                      Crear
                    <?php endif; ?>
                    <?php if ($row->internado == 1): ?>
                      Internado!!
                    <?php endif; ?></a></th>

                  </tr>
                <?php endforeach; ?>

              </tbody>
              <tfoot>
                 <tr>
                   <th>Contrato</th>
                   <th>Fecha Provision</th>
                   <th>Producto</th>
                   <th>Cantidad</th>
                   <th>N° Provision</th>
                   <th>$ Transferido a AGA</th>
                   <th>N ident DI</th>
                   <th>Fecha pago DI</th>
                   <th>FA</th>
                   <th>PDF</th>
                   <th>Accion</th>
                  </tr>
              </tfoot>
              </table>
          </div>


      </div>
