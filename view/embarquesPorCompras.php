<div style="margin-top:25px;">

<div class="">
    <div class="col-md-12">
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
                    <th>POL</th>
                    <th>POD</th>
                    <th>SHIPPER</th>
                    <th>CONSIGNEE</th>
                    <th>OCEAN FREIGHT(U)</th>
                    <th>coMODATO(U)</th>
                    <th>GATE IN (U)</th>
                    <th>DÍAS LIBRES (U)</th>
                    <th>DEPÓSITO DEV.VACÍO</th>
                    <th>Registrar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($em->ListarIDCompra($id) as $row):?>

                  <tr>
                    <form action="?c=Usuario&a=GuardarEmbarque" method="post">
                      <input type="hidden" name="cantBl" id="cantBl" value="1">
                      <input type="hidden" name="idEmbarque" id="idEmbarque" value="<?php echo $row->idEmbarque; ?>">
                      <td><?php echo $row->cantContenedores ?></td>
                      <td><?php echo $row->idEmbarque ?></td>
                      <td><?php echo $row->bl ?></td>
                      <td><?php echo $row->linea ?></td>
                      <td><?php echo $row->motoNave ?></td>
                      <td><?php echo $row->fechaPedido ?></td>
                      <td><?php echo $row->fechaEntrega ?></td>
                      <td><?php echo $row->pSeguro ?></td>
                      <td><?php echo $row->puertoDestino ?></td>
                      <td><?php echo $row->embarcador ?></td>
                      <td><?php echo $row->consignee ?></td>
                      <td><?php echo $row->tMaritimo ?></td>
                      <td><?php echo $row->coMODATO ?></td>
                      <td><?php echo $row->gateIn ?></td>
                      <td><?php echo $row->diasLibres ?></td>
                      <td><?php echo $row->depositoDevVacio ?></td>
                      <td><a class="btn btn-primary" href="?c=Usuario&a=IngresarEmbarque&id=<?php echo $row->idEmbarque ?>">Editar</a></td>
                    </form>
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
                   <th>POL</th>
                   <th>POD</th>
                   <th>SHIPPER</th>
                   <th>CONSIGNEE</th>
                   <th>OCEAN FREIGHT(U)</th>
                   <th>coMODATO(U)</th>
                   <th>GATE IN (U)</th>
                   <th>DÍAS LIBRES (U)</th>
                   <th>DEPÓSITO DEV.VACÍO</th>
                   <th>Registrar</th>

                 </tr>
              </tfoot>
              </table>
          </div>


      </div>
