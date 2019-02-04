<div class="col-md-12 text-center"><h1>Registrar Despacho semanal</h1></div>
  <div class="col-md-12" style="background-color:black;"></div>
<div class="container">
  <form action="?c=Usuario&a=GuardarDespachoSemanal" border="1" style="" method="post">
    <div class="row" style="margin-top:80px;">
      <div class="row" style="margin-top:10px;">
        <div class="col-md-2" style="margin-right:100px;">
          <label>Producto:</label>
          <select id="idProducto" name="idProducto" required>
            <option value="0">Selecciona un producto</option>
            <?php foreach ($p->Listar() as $row): ?>
              <option value="<?php echo $row->idProducto; ?>"><?php echo $row->descripcion; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="col-md-3" style="margin-top:25px;">
          <label>Cliente:</label>
          <input type="text" name="cliente" id="cliente" value="" required>
        </div>

        </div>

      <div class="row">
        <div class="col-md-3">
          <label>Fecha Entrega</label>
          <input type="date" name="fechaEntrega" id="fechaEntrega" value="" required>
        </div>
        <div class="col-md-3" style="margin-top:25px;">
          <label>Cantidad</label>
          <input type="text" name="cantidad" id="cantidad" value="" required>
        </div>
      </div>
    </div>
    <br>
    <div class="col-md-4 text-center">
      <button class="btn btn-success" onclick=""  id="btnRegistrar">Registar Despacho</button>
    </div>
  </form>





</div>
</div>
