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
                    <th>DIAS LIBRES (U)</th>
                    <th>DEPOSITO DEV.VACIO</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($em->Listar() as $row): ?>
                  <tr>
                      <td><?php echo $row->cantContenedores ?></td>
                      <td><?php echo $row->idEmbarque ?></td>
                      <td><div id="nBl"><div class="col-md-8"><input type="text" id="bl" name="bl"/></div><div class="col-md-4"><button class="btn btn-primary btn-sm" onclick="AgregarBl()"><span class="glyphicon glyphicon-plus"></span></button></div></div></td>
                      <td><input type="text" id="linea" name="linea"/></td>
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
                   <th>POL</th>
                   <th>POD</th>
                   <th>SHIPPER</th>
                   <th>CONSIGNEE</th>
                   <th>OCEAN FREIGHT(U)</th>
                   <th>coMODATO(U)</th>
                   <th>GATE IN (U)</th>
                   <th>DIAS LIBRES (U)</th>
                   <th>DEPOSITO DEV.VACIO</th>

                 </tr>
              </tfoot>
              </table>
          </div>


      </div>
