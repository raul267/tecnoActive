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
                    <th>Estado</th>
                    <th>¿Llego?</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($em->Listar() as $row): ?>
                  <tr>
                      <td><?php echo $row->cantContenedores ?></td>
                      <td><?php echo $row->idEmbarque ?></td>
                      <td><?php echo $row->bl ?></td>
                      <td><?php echo $row->linea ?></td>
                      <td><?php echo $row->motoNave ?></td>
                      <td><?php echo $row->fechaPedido ?></td>
                      <th><?php echo $row->fechaEntrega ?></th>
                      <td><?php if ($row->enPuerto == 1)
                                {?>
                                    <span class="glyphicon glyphicon-ok"></span>
                                    <input type="hidden" name="" value="si">
                          <?php } ?>
                     </td>
                     <th><a href="?c=Usuario&a=Llego&id=<?php echo $row->idEmbarque ?>"class="btn btn-primary">Llego</a></th>
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
                   <th>Estado</th>
                   <th>¿Llego?</th>
                 </tr>
              </tfoot>
              </table>
          </div>


      </div>
