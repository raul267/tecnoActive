<div class="col-md-12 text-center"><h1>Registrar Despacho</h1></div>
  <div class="col-md-12" style="background-color:black;"></div>
    <div class="container">
     <div class="" style="margin-top:30px;">
      <form action="?c=Usuario&a=GuardarDespacho"enctype="multipart/form-data" border="1" style="margin-top:10px;" method="post">
        <div class="row" style="margin-top:100px;">
          <input type="hidden" name="bl" value="<?php echo $_REQUEST['bl'] ?>">
          <div class="row">
            <div class="col-md-3">
              <label>Rut emisor</label>
              <input type="text" class=""name="rutEmisor" id="rutEmisor" value="">
            </div>
            <div class="col-md-3">
              <label>Rut receptor</label>
              <input type="text" class=""name="rutReceptor" id="rutReceptor" value="">
            </div>
          </div>

          <div class="row" style="margin-top:10px;">
            <div class="col-md-3">
              <label>Tipo Documento</label>
              <select class="" name="tipoDocumento">
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
            <div class="col-md-3">
              <label>Fecha Emision</label>
              <input type="date" name="fechaEmision" id="fechaEmision" value="">
            </div>
          </div>

          <div class="row" style="margin-top:10px;">
            <div class="col-md-3">
              <label>Monto Total</label>
              <input type="text" name="montoTotal" id="montoTotal" value="">
            </div>
            <div class="col-md-2">
              <label>Producto</label>
              <select class="" name="idProducto">
                <option value="">Seleccione un producto</option>
                <?php foreach ($p->Listar() as $row): ?>
                  <option value="<?php echo $row->idProducto ?>"><?php echo $row->descripcion ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>

          <div class="row" style="margin-top:10px;">

              <div class="col-md-3">
                <label>Cantidad de kg</label>
                <input type="text" name="cantidadKG" id="cantidadKG">
              </div>
          </div>

            <div class="row" style="margin-top:20px;">
              <div class="col-md-12 text-center">
                <button type="submit" onclick="checkRut(rutEmisor); checkRut(rutReceptor)" class="btn btn-success" name="button">Ingresar Internacion</button>
              </div>
            </div>

          </div>
        </div>
      </form>
    </div>