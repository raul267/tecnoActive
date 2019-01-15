<div style="margin-top:25px;">

<div class="container">
    <div class="col-md-5">
        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                  <th>Contrato</th>
                  <th>Fecha Provision</th>
                  <th>Producto</th>
                  <th>Toneladas</th>
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
                    <th><a href="<?php if ($row->nProvision !=null): ?>
                      ?c=Usuario&a=Internar&bl=<?php echo $row->bl ?>
                    <?php endif; ?> <?php if ($row->nProvision == null): ?>
                      ?c=Usuario&a=IngresarInternacion&bl=<?php echo $row->bl ?>
                    <?php endif; ?>
                    <?php if ($row->internado == 1): ?>
                      ?c=Usuario&a=AGA
                    <?php endif; ?>" class="<?php if ($row->nProvision !=null && $row->internado ==0): ?>
                      btn btn-danger
                    <?php endif; ?>
                    <?php if ($row->nProvision == null && $row->internado ==0): ?>
                      btn btn-primary
                    <?php endif; ?>
                    <?php if ($row->internado == 1): ?>
                      btn btn-success

                    <?php endif; ?>"><?php if ($row->nProvision !=null && $row->internado ==0): ?>
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
                   <th>Toneladas</th>
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
