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
                    <th>Registrar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($em->Listar() as $row): ?>
                  <tr>
                    <form action="?c=Usuario&a=GuardarEmbarque" method="post">
                      <input type="hidden" name="cantBl" id="cantBl" value="1">
                      <input type="hidden" name="idEmbarque" id="idEmbarque" value="<?php echo $row->idEmbarque; ?>">
                      <td><?php echo $row->cantContenedores ?></td>
                      <td><?php echo $row->idEmbarque ?></td>
                      <td><div id="nBl"><div class="col-md-8"><input type="text" id="bl1" name="bl1"/></div><div class="col-md-4"><button type="button" class="btn btn-primary btn-sm" onclick="AgregarBl()"><span class="glyphicon glyphicon-plus"></span></button></div></div></td>
                      <td><input type="text" id="linea" name="linea"/></td>
                      <td><input type="text" id="motoNave" name="motoNave"/></td>
                      <td><input type="date" id="fechaPedido" name="fechaPedido"/></td>
                      <td><input type="date" id="fechaEntrega" name="fechaEntrega"/></td>
                      <td><input type="text" id="pSeguro" name="pSeguro"/></td>
                      <td><input type="text" id="puertoDestino" name="puertoDestino"/></td>
                      <td><input type="text" id="embarcador" name="embarcador"/></td>
                      <td><input type="text" id="consignee" name="consignee"/></td>
                      <td><input type="text" id="tMaritimo" name="tMaritimo"/></td>
                      <td><input type="text" id="coMODATO" name="coMODATO"/></td>
                      <td><input type="text" id="gateIn" name="gateIn"/></td>
                      <td><input type="text" id="diasLibres" name="diasLibres"/></td>
                      <td><input type="text" id="depositoDevVacio" name="depositoDevVacio"/></td>
                      <td><input type="submit" class="btn btn-success" value="Registra"/></td>
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
                   <th>DIAS LIBRES (U)</th>
                   <th>DEPOSITO DEV.VACIO</th>
                   <th>Registrar</th>

                 </tr>
              </tfoot>
              </table>
          </div>


      </div>
