<div style="margin-top:25px;">

<div class="container">
    <div class="col-md-5">
        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>CNTR</th>
                    <th>ORDER</th>
                    <th>BL</th>
                    <th>TT</th>
                    <th>M/N</th>
                    <th>ETD</th>
                    <th>ETA</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($em->ListarIDCompra($_REQUEST[$id]) as $row): ?>
                  <tr>
                      <td><?php echo $row->cantContenedores ?></td>
                      <td><?php echo $row->idEmbarque ?></td>
                      <td><?php echo $row->bl ?></td>
                      <td><?php echo $row->linea ?></td>
                      <td><?php echo $row->motoNave ?></td>
                      <td><?php echo $row->fechaPedido ?></td>
                      <th><?php echo $row->fechaEntrega ?></th>

                  </tr>
                <?php endforeach; ?>


              </tbody>
              <tfoot>
                 <tr>
                   <th>CNTR</th>
                   <th>ORDER</th>
                   <th>BL</th>
                   <th>TT</th>
                   <th>M/N</th>
                   <th>ETD</th>
                   <th>ETA</th>

                 </tr>
              </tfoot>
              </table>
          </div>


      </div>
