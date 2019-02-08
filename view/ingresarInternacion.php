 <div class="col-md-12 text-center"><h1>Registrar Internacion</h1></div>
  <div class="col-md-12" style="background-color:black;"></div>
    <div class="container">
     <div class="" style="margin-top:30px;">
      <form action="?c=Usuario&a=GuardarInternacion"enctype="multipart/form-data" border="1" style="margin-top:10px;" method="post">
        <div class="row" style="margin-top:100px;">
          <input type="hidden" name="bl" value="<?php echo $_REQUEST['bl'] ?>">
          <div class="row">
            <div class="col-md-3">
              <label>N° Provisión</label>
              <input type="text" class=""name="nProvision" id="nProvision" value="" required>
            </div>
            <div class="col-md-3">
              <label>Transferido AGA</label>
              <input type="text" class=""name="transferido" id="transferido" value="" required>
            </div>
          </div>

          <div class="row" style="margin-top:10px;">
            <div class="col-md-3">
              <label>Fecha Provisión</label>
              <input type="date" class=""name="fechaProvision" id="fechaProvision" value="" required>
            </div>
            <div class="col-md-3">
              <label>Fecha Pago DI</label>
              <input type="date" class=""name="fechaPagoDI" id="fechaPagoDI" value="" required>
            </div>
          </div>

          <div class="row" style="margin-top:10px;">
            <div class="col-md-3" style="">
              <label>N° Ident DI</label>
              <input type="text" class=""name="nIdentDI" id="nIdentDI" value="" required>
            </div>
          </div>

          <div class="row" style="margin-top:10px;">
            <div class="col-md-3">
              <label>N° Factura</label>
              <input type="text" name="fa" id="fa" value="" required>
            </div>
            <div class="col-md-3">
              <label>Sube tu factura</label>
              <input type="file" name="faFile" id="faFile" value="" required>
            </div>
          </div>

            <div class="row" style="margin-top:20px;">
              <div class="col-md-12 text-center">
                <button type="submit" href="#" class="btn btn-success" name="button">Ingresar Internacion</button>
              </div>
            </div>

          </div>
        </div>
      </form>
    </div>
