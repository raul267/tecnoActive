<div class="col-md-12 text-center"><h1>Registrar Compras</h1></div>
  <div class="col-md-12" style="background-color:black;"></div>
<div class="container">
  <form action="?c=Usuario&a=GuardarCompra" border="1" style="" method="post">
    <div class="row" style="margin-top:80px;">
      <div class="row">
        <div class="col-md-2">
          <label>ID Compra</label>
          <input type="text"  required class=""name="idCompra" id="idCompra" value="" >
        </div>
        <div class="col-md-1" style="margin-left:5px;" id="divDisponible" name="divDisponible"></div>
        <div class="col-md-3">
          <label>Cantidad (toneladas)</label>
          <input type="text" required class=""name="cantidadPedido" id="cantidadPedido" value="" >
        </div>
      </div>

      <div class="row" style="margin-top:10px;">
        <div class="col-md-2" style="margin-right:100px;">
          <label>Producto:</label>
          <select  id="idProducto" name="idProducto" required>
            <option value="0">Seleccione un producto</option>
            <?php foreach ($producto->Listar() as $row): ?>
              <option value="<?php echo $row->idProducto; ?>"><?php echo $row->idProducto; ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="col-md-3">
          <label>Proveedor:</label>
          <input required type="text" name="proveedor" id="proveedor" value="" >
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <label>Fecha Inicio</label>
          <input required type="date" name="fechaInicio" id="fechaInicio" value="" >
        </div>
        <div class="col-md-3">
          <label>Fecha Término</label>
          <input required type="date" name="fechaTermino" id="fechaTermino" value="" >
        </div>
      </div>
      <div class="col-md-12" style="background-color:black; margin-top:10px; margin-bottom:15px;"></div>
      <div class="row" style="margin-top:10px;">
        <div class="col-md-1">
          <label>Cantidad de contratos</label>
        </div>
        <div class="col-md-1">
          <input style="margin-top:15px;"type="text" id="cantidadEntregas" name="cantidadEntregas" required value="">
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
      <button style="float:left;" class="btn btn-success" onclick="ValidadCompras()" disabled="true" id="btnRegistrar">Registar Compra</button>
    </div>
  </form>
  <div class="col-md-4">
    <button style="float:left;" class="btn btn-primary" onclick="prueba()" disabled="true" id="btn">Agregar entregas</button>
  </div>





</div>
</div>
