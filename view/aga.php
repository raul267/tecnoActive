<div style="margin-top:25px;">

<div class="container">
    <div class="col-md-5">
        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                  <th>Contrato</th>
                  <th>Fecha Provision</th>
                  <th>Producto</th>
                  <th>CNTS</th>
                  <th>N° Provision</th>
                  <th>$ Transferido a AGA</th>
                  <th>N ident DI</th>
                  <th>Fecha pago DI</th>
                  <th>FA</th>
                  <th>PDF</th>
                  <th>Agregar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($in->Listar() as $row): ?>
                  <tr>
                    <td><?php echo $row->bl ?></td>}
                    <td><?php echo $row->fechaPedido ?></td>
                    <th><?php echo $row->idProducto ?></th>
                    <th><?php echo $row->cantContenedores ?></th>
                    <th><?php echo $row->nProvision ?></th>
                    <th><?php echo '$'.$row->transferido ?></th>
                    <th><?php echo $row->nIdentDI ?></th>
                    <th><?php echo $row->fechaPagoDI ?></th>
                    <th><?php echo $row->fa ?></th>
                    <th><a href="<?php echo $row->faFile ?>" target="_blank"><span class="glyphicon glyphicon-file"></span></a></th>
                    <th><a href="?c=Usuario&a=IngresarInternacion&bl=<?php echo $row->bl ?>" class="btn btn-primary"><?php if ($row->nProvision !=null): ?>
                      Editar
                    <?php endif; ?> <?php if ($row->nProvision == null): ?>
                      Guardar
                    <?php endif; ?></a></th>
                  </tr>
                <?php endforeach; ?>

              </tbody>
              <tfoot>
                 <tr>
                   <th>Contrato</th>
                   <th>Fecha Provision</th>
                   <th>Producto</th>
                   <th>CNTS</th>
                   <th>N° Provision</th>
                   <th>$ Transferido a AGA</th>
                   <th>N ident DI</th>
                   <th>Fecha pago DI</th>
                   <th>FA</th>
                   <th>PDF</th>
                   <th>Agregar</th>
                  </tr>
              </tfoot>
              </table>
          </div>


      </div>
