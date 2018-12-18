<div class="container">
  <form action="c=Usuario&a=GuardarCompra" method="post">
    <div class="row" style="margin-top:10px;">
      <div class="row">
        <div class="col-md-12">
          <select id="ddlProducto" name="ddlProducto">
            <option value="0">Selecciona un producto</option>
            <?php foreach ($producto->Listar() as $row): ?>
              <option value="<?php echo $row->idProducto; ?>"><?php echo $row->descripcion.'-$'.$row->valor; ?></option>
            <?php endforeach; ?>
          </select>

        </div>
      </div>
      <div class="row" style="margin-top:20px;">
        <div class="col-md-4">
          <label>Cantidad de contratos</label>
          <input type="text" id="cantidadEntregas" value="">
        </div>


          <div id="sad"></div>
      </div>
    </div>
  </form>
  <div class="col-md-6">
    <button style="float:left;" class="btn btn-primary" onclick="prueba()" id="btn">Agregar entregas</button>
  </div>



</div>
</div>
