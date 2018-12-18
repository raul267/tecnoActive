<div class="container">
  <form action="c=Usuario&a=GuardarCompra" method="post">
    <div class="row" style="margin-top:10px;">
      <div class="row">
        <div class="col-md-4">
          <label>id Compra</label>
          <input type="text" class="text"name="idCompra" id="idCompra" value="">
        </div>
  </div>

      <div class="row" style="margin-top:10px;">
        <div class="col-md-3">
          <select id="ddlProducto" name="ddlProducto">
            <option value="0">Selecciona un producto</option>
            <?php foreach ($producto->Listar() as $row): ?>
              <option value="<?php echo $row->idProducto; ?>"><?php echo $row->descripcion.'-$'.$row->valor; ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="col-md-3">
          <select id="ddlProducto" name="ddlProducto">
            <option value="0">Selecciona un producto</option>
            <option value="1">Proveedor1</option>
            <option value="2">Proveedor2</option>
            <option value="3">Proveedor3</option>
          </select>
        </div>
      </div>

      <div class="row" style="margin-top:20px;">
        <div class="col-md-4">
          <label>Cantidad de contratos</label>
          <input type="text" id="cantidadEntregas" value="">
        </div>
        <div class="col-md-4">
            <label id="lblTotal"></label>
        </div>
        <div class="col-md-4">
            <label id="lblPrecio"></label>
        </div>
        <input type="hidden" name="totalProductos" id="totalProductos" value="">
      </div>
        <div class="row" style="margin-top:20px;" id="sad"></div>
    </div>
    <br>
    <div class="col-md-4">
      <button style="float:left;" class="btn btn-success" onclick="" disabled id="btnRegistrar">Registar Compra</button>
    </div>
  </form>
  <div class="col-md-4">
    <button style="float:left;" class="btn btn-primary" onclick="prueba()" id="btn">Agregar entregas</button>
  </div>
  <div class="col-md-4">
    <button style="float:left;" class="btn btn-primary" onclick="calcularTotal()" id="btnCalcular">Calcular total</button>
  </div>




</div>
</div>
