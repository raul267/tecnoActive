<div class="col-md-12 text-center"><h1>Algo con los provedores</h1></div>
  <div class="col-md-12" style="background-color:black;"></div>
<div class="container">
  <form action="?c=Usuario&a=GuardarProveedores" border="1" style="" enctype="multipart/form-data" method="post">
    <div class="row" style="margin-top:80px;">
      <div class="row" style="margin-top:10px;">

        <div class="col-md-3" style="margin-top:25px;">
          <label>Proveedor:</label>
          <input type="text" name="proveedor" id="proveedor" value="">
        </div>

        </div>

      <div class="row" style="margin-top:10px;">
        <div class="col-md-3">
          <label>Fecha Generacion</label>
          <input type="date" name="fechaGeneracion" id="fechaGeneracion" value="">
        </div>
        <div class="col-md-3">
          <label>Fecha Pago</label>
          <input type="date" name="fechaPago" id="fechaPago" value="">
        </div>
      </div>

      <div class="row" style="margin-top:10px;">
        <div class="col-md-3">
          <label>Valor Neto</label>
          <input type="text" name="valor" id="valor" value="">
        </div>
        <div class="col-md-3">
          <label>Sube tu factura</label>
          <input type="file" name="factura" id="factura" value="">
        </div>
      </div>
    </div>
    <br>
    <div class="col-md-4 text-center">
      <button class="btn btn-success" onclick=""  id="btnRegistrar">Registar ProveedorF</button>
    </div>
  </form>





</div>
</div>
