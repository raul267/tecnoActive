<div class="col-md-12">
  <div style="margin-top:25px;">
    <label>Ultimos despachos</label>
  </div>
</div>

  <div class="row" style="margin-left:10px;">
    <div class="col-md-7">
      <table id="datatable" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>CONTRATO</th>
                <th>BL</th>
                <th>NAVE</th>
                <th>PRODUCTO</th>
                <th>CANT</th>
                <th>LOTE</th>
                <th>INGRESO ALMACEN</th>
                <th>INTERNADAS</th>
                <th>POR INTERNAR</th>
                <th>DESPACHADAS</th>
                <th>STOCK</th>
                <th>RSOLUCION</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($s->Listar() as $row): ?>
              <tr>
                  <td><?php echo $row->idEmbarque ?></td>
                  <td><?php echo $row->bl ?></td>
                  <td><?php echo $row->motoNave ?></td>
                  <td><?php echo $row->idProducto ?></td>
                  <td><?php echo $row->cantContenedores ?></td>
                  <td><?php echo $row->lote ?></td>
                  <td><?php echo $row->cantContenedores ?></td>
                  <td><?php echo $row->internadas ?></td>
                  <td><?php echo $row->porInternar ?></td>
                  <td><?php echo $row->despachadas ?></td>
                  <td><?php echo $row->stock ?></td>
                  <td><input type="checkbox"></td>
              </tr>
            <?php endforeach; ?>

          </tbody>
          <tfoot>
            <tr>
              <th>CONTRATO</th>
              <th>BL</th>
              <th>NAVE</th>
              <th>PRODUCTO</th>
              <th>CANT</th>
              <th>LOTE</th>
              <th>INGRESO ALMACEN</th>
              <th>INTERNADAS</th>
              <th>POR INTERNAR</th>
              <th>DESPACHADAS</th>
              <th>STOCK</th>
              <th>RSOLUCION</th>
            </tr>
          </tfoot>
      </table>
    </div>
    <div class="col-md-5 text-center">
      <input type="submit" name="btnMostrar" value="Mostrar grafico" id="btnMostrar" onclick="Ad()"class="btn btn-primary">
    </div>
  </div>

  <div class="row">
    <img  style="display:none;"src="assets/pagina/images/grafico.jpg" id ="foto" name="foto"alt="">
  </div>
