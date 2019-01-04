<div class="col-md-12 text-center"><h1> Modificar producto</h1></div>
  <div class="col-md-12" style="background-color:black;"></div>
<div class="container">
  <form action="?c=Usuario&a=CambiarProducto&id=<?php echo $p->idProducto ?>" border="1" style="" method="post">
    <div class="row" style="margin-top:80px;">
      <div class="row">
        <div class="col-md-2">
          <label>Valor:</label>
          <input type="text" name="valor" id="valor" value="<?php echo $p->valor ?>">
        </div>
        <div class="col-md-3" style="margin-left:10px;">
          <label>Descripcion</label>
          <input type="text" class=""name="descripcion" id="descripcion" value="<?php echo $p->descripcion ?>">
        </div>
      </div>
      </div>
      <br>
    <div class="col-md-4">
      <button style="float:left;" class="btn btn-success" onclick=""  id="btnRegistrar">Modificar Producto</button>
    </div>
  </form>




</div>
</div>
