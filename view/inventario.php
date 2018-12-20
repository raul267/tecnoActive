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
                <th>TON</th>
                <th>Sum of POR INTERNAR</th>
                <th>Sum of Stock</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($s->Listar() as $row): ?>
              <tr>
                  <td><?php echo $row->descripcion ?></td>
                  <td><?php echo $row->porInternar ?></td>
                  <td><?php echo $row->internadas ?></td>
              </tr>
            <?php endforeach; ?>

          </tbody>
          <tfoot>
            <tr>
              <th>TON</th>
              <th>Sum of POR INTERNAR</th>
              <th>Sum of Stock</th>
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

    $(document).ready(function() {
