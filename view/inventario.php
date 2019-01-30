<div class="col-md-12">
  <div style="margin-top:25px;">
  </div>
</div>

  <div class="row" style="margin-left:10px;">
    <div class="col-md-7">
      <label>Inventario por Bl</label>
      <table id="datatable" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>CONTRATO</th>
                <th>BL</th>
                <th>NAVE</th>
                <th>PRODUCTO</th>
                <th>CNT</th>
                <th>LOTE</th>
                <th>INGRESO ALMACEN</th>
                <th>INTERNADAS</th>
                <th>POR INTERNAR</th>
                <th>DESPACHADAS</th>
                <th>STOCK</th>
                <th>RESOLUCION</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($s->Listar() as $row): ?>
              <tr>
                  <td><?php echo $row->idEmbarque ?></td>
                  <td><?php echo $row->bl ?></td>
                  <td><?php echo $row->motoNave ?></td>
                  <td><?php echo $row->idProducto ?></td>
                  <td><?php echo $row->cantContenedores ?></td>
                  <td><?php echo $row->lote ?></td>
                  <td><?php echo $row->cantContenedores ?></td>
                  <td><?php echo $row->internadas ?></td>
                  <td><?php echo $row->porInternar ?></td>
                  <td><?php echo $row->despachadas ?></td>
                  <td><?php echo $row->stock ?></td>
                  <td><?php
                  if ($row->resolucion == 1)
                  {
                  ?>   <span class="glyphicon glyphicon-ok"></span><?php
                  }
                   ?></td>
                 <td><a href="?c=Usuario&a=Resolucion&id=<?php echo $row->idStock?>" class="btn btn-success">Existe resolucion?</a></td>
              </tr>
            <?php endforeach; ?>

          </tbody>
          <tfoot>
            <tr>
              <th>CONTRATO</th>
              <th>BL</th>
              <th>NAVE</th>
              <th>PRODUCTO</th>
              <th>CNT</th>
              <th>LOTE</th>
              <th>INGRESO ALMACEN</th>
              <th>INTERNADAS</th>
              <th>POR INTERNAR</th>
              <th>DESPACHADAS</th>
              <th>STOCK</th>
              <th>RESOLUCION</th>
            </tr>
          </tfoot>
      </table>

    <div style="display:none;" id="resumen">
      <label>Inventario por Lote</label>
      <table id="datatable1" class="table table-striped table-bordered" style="width:100%;" >
        <thead>
              <tr>

                  <th>LOTE</th>
                  <th>CONTRATO</th>
                  <th>NAVE</th>
                  <th>PRODUCTO</th>
                  <th>CNT</th>
                  <th>INGRESO ALMACEN</th>
                  <th>INTERNADAS</th>
                  <th>POR INTERNAR</th>
                  <th>DESPACHADAS</th>
                  <th>STOCK</th>
                  <th>Despachar</th>

              </tr>
          </thead>
          <tbody>
              <?php foreach ($s->ListarLote() as $row): ?>
                <tr>
                   <td><?php echo $row->lote ?></td>
                    <td><?php echo $row->idEmbarque ?></td>
                    <td><?php echo $row->motoNave ?></td>
                    <td><?php echo $row->idProducto ?></td>
                    <td><?php echo $row->cantContenedores ?></td>
                    <td><?php echo $row->cantContenedores ?></td>
                    <td><?php echo $row->internadas ?></td>
                    <td><?php echo $row->porInternar ?></td>
                    <td><?php echo $row->despachadas ?></td>
                    <td><?php echo $row->stock ?></td>
                    <td><a href="#" data-toggle="modal" data-target="#<?php echo $row->lote ?>exampleModall" class="btn btn-primary">Despachar</a></td>


                    <!-- Modal -->
                    <div class="modal fade" id="<?php echo $row->lote ?>exampleModall" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Despacho lote <?php echo $row->lote ?></h5>
                            <label>Disponible para despachar: <?php echo $row->stock ?></label>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form action="?c=Usuario&a=GuardarDespacho"enctype="multipart/form-data" border="1" method="post">
                              <div class="row" style="margin-left:5px;">
                                <div class="row" style="margin-top:10px;">
                                  <div class="col-md-3">
                                    <label>Bl</label>
                                    <select class="" name="ddlbl<?php echo $row->lote?>" id="ddlbl<?php echo $row->lote?>">
                                      <option value="">Seleccinoe un bl</option>
                                      <?php foreach ($s->ListarBlDespacho($row->lote) as $a): ?>
                                        <option value="<?php echo $a->bl?>"><?php echo $a->bl?></option>
                                      <?php endforeach; ?>
                                    </select>
                                    <div id="divStock<?php echo $row->lote?>"></div>
                                  </div>
                                </div>
                                <input type="hidden" name="lote" id="lote" value="<?php echo $row->lote ?>">

                                <div class="row">
                                  <div class="col-md-3">
                                    <label>Cliente</label>
                                    <input type="text" class=""name="cliente" id="cliente" value="">
                                  </div>
                                </div>

                                <div class="row" style="margin-top:10px;">
                                  <div class="col-md-3">
                                    <label>Tipo Documento</label>
                                    <select class="" id="tipoDocumento"name="tipoDocumento">
                                      <option value="">Seleccione un tipo</option>
                                      <option value="Factura Electronica">Factura Electronica</option>
                                      <option value="Guia de despacho electronica">Guia de despacho electronica</option>
                                    </select>
                                  </div>
                                </div>

                                <div class="row" style="margin-top:10px;">
                                  <div class="col-md-3" style="">
                                    <label>factura nro</label>
                                    <input type="text" class=""name="facturaNro" id="facturaNro" value="">
                                  </div>
                                </div>

                                <div class="row" style="margin-top:10px;">
                                  <div class="col-md-3">
                                    <label>Monto Total</label>
                                    <input type="text" name="montoTotal" id="montoTotal" value="">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-2">
                                    <label>Cantidad(toneladas)</label>
                                    <input type="text" name="cantidadKG" id="cantidadKG">
                                  </div>
                                </div>


                              </div>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            <input type="submit" class="btn btn-success" name="" value="Despachar">
                          </div>
                          </form>
                        </div>
                      </div>
                    </div>

                </tr>
              <?php endforeach; ?>

            </tbody>
            <tfoot>
              <tr>
                <th>LOTE</th>
                <th>CONTRATO</th>
                <th>NAVE</th>
                <th>PRODUCTO</th>
                <th>CNT</th>
                <th>INGRESO ALMACEN</th>
                <th>INTERNADAS</th>
                <th>POR INTERNAR</th>
                <th>DESPACHADAS</th>
                <th>STOCK</th>
                <th>Despachar</th>
              </tr>
            </tfoot>

            </table>
            <div>
          </div>
        </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-5 text-center">
      <input type="submit" name="btnMostrar" value="Mostrar Resumen" id="btnMostrar" onclick="Ad()"class="btn btn-primary">
    </div>
  </div>
