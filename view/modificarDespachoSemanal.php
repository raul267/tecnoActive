<div class="">
  <div class="col-md-12 text-center"><h1>Registrar Despacho</h1></div>
    <div class="col-md-12" style="background-color:black;"></div>
      <div class="container">
       <div class="" style="margin-top:30px;">
        <form action="?c=Usuario&a=GuardarDespacho"enctype="multipart/form-data" border="1" style="margin-top:10px;" method="post">
          <div class="row" style="margin-top:100px;">
            <input type="hidden" name="bl" value="<?php echo $_REQUEST['bl'] ?>">
            <div class="row">
              <div class="col-md-3">
                <select class="" name="ddlbl" id="ddlbl">
                  <option value="">Seleccinoe un bl</option>
                  <?php foreach ($bl->ListarBlE() as $row): ?>
                    <option value="<?php echo $row->bl?>"><?php echo $row->bl." ".$row->idProducto ?></option>
                  <?php endforeach; ?>
                </select>
                <div class="" id="divStock" name="divStock"></div>
              </div>
            </div>
  <br><br><br>
  <div class="row">
    <div class="col-md-3">
      <label>Cliente</label>
      <input type="text" class=""name="cliente" id="cliente" value="<?php echo $de->cliente ?>">
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
    <div class="col-md-3" style="">
      <label>factura nro</label>
      <input type="text" class=""name="facturaNro" id="facturaNro" value="">
    </div>
  </div>


  <div class="row" style="margin-top:10px;">
    <div class="col-md-3">
      <label>Fecha Emision</label>
      <input type="date" name="fechaEmision" id="fechaEmision" value="">
    </div>
    <div class="col-md-3">
      <label>Fecha Entrega</label>
      <input type="date" name="fechaEntrega" id="fechaEntrega" value="<?php echo $de->fechaEntrega ?>">
    </div>
  </div>

  <div class="row" style="margin-top:10px;">
    <div class="col-md-3">
      <label>Monto Total</label>
      <input type="text" name="montoTotal" id="montoTotal" value="">
    </div>
    <div class="col-md-2">
      <label>Cantidad(toneladas)</label>
      <input type="text" name="cantidadKG" id="cantidadKG" value="<?php echo $de->cantidad ?>">
    </div>
  </div>

  <input type="hidden" name="id" id="id"value="<?php echo $de->id ?>">

    <div class="row" style="margin-top:20px;">
      <div class="col-md-12 text-center">
        <button type="submit" onclick=" ValidarDespacho();" class="btn btn-success" name="button">Ingresar Internacion</button>
      </div>
    </div>

  </div>
</div>
</form>
</div>
