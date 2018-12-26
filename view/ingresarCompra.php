<div class="container">
  <h1>Registrar Compras</h1>
  <form action="?c=Usuario&a=GuardarCompra" border="1" method="post">
    <div class="row" style="margin-top:10px;">
      <div class="row">
        <div class="col-md-3">
          <label>id Compra</label>
          <input type="text" name="idCompra" id="idCompra" value="">
        </div>
        <div class="col-md-4">
          <label>Cantidad(toneladas)</label>
          <input type="text" name="cantidadPedido" id="cantidadPedido" value="">
        </div>
      </div>

      <div class="row" style="margin-top:10px;">
        <div class="col-md-3">
          <label>Producto:</label>
          <select id="idProducto" name="idProducto">
            <option value="0">Selecciona un producto</option>
            <?php foreach ($producto->Listar() as $row): ?>
              <option value="<?php echo $row->idProducto; ?>"><?php echo $row->descripcion; ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="col-md-4">
          <label>Proveedor:</label>
          <input type="text" name="proveedor" value="">
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <label>Fecha Inicio</label>
          <input type="date" name="fechaInicio" id="fechaInicio" value="">
        </div>
        <div class="col-md-4">
          <label>Fecha Termino</label>
          <input type="date" name="fechaTermino" id="fechaTermino" value="">
        </div>
      </div>
      <div class="col-md-12" style="background-color:black;"></div>
      <div class="row" style="margin-top:10px;">
        <div class="col-md-1">
          <label>Cantidad de contratos</label>
        </div>
        <div class="col-md-1">
          <input style="margin-top:15px;"type="text" id="cantidadEntregas" name="cantidadEntregas" value="">
        </div>
        <div class="col-md-4">
            <label id="lblTotal"></label>
        </div>
        <div class="col-md-4">
            <label id="lblPrecio"></label>
        </div>
      </div>
      <div class="row" style="margin-top:20px;" id="sad"></div>
    </div>
    <br>
    <div class="col-md-4">
      <button style="float:left;" class="btn btn-success" onclick=""  id="btnRegistrar">Registar Compra</button>
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
