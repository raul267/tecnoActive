<div style="margin-top:25px;">

<div class="">
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
                    <th><?php echo $row->transferido ?></th>
                    <th><?php echo $row->nIdentDI ?></th>
                    <th><?php echo $row->fechaPagoDI ?></th>
                    <th>
                      <?php if($row->idInternacion  = null)
                            {?> <input type="text" name="" value=""> <?php }

                            ?>

                    </th>
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
                  </tr>
              </tfoot>
              </table>
          </div>


      </div>
