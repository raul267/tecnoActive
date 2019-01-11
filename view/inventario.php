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
                  <td><?php
                  if ($row->resolucion == 1)
                  {
                  ?>   <span class="glyphicon glyphicon-ok"></span><?php
                  }
                   ?></td>
                 <td><a href="?c=Usuario&a=Resolucion&id=<?php echo $row->idStock?>" class="btn btn-success">Existe resolucion?</a></td>
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
  </div>

  <div class="row">
    <div class="col-md-5 text-center">
      <input type="submit" name="btnMostrar" value="Mostrar Resumen" id="btnMostrar" onclick="Ad()"class="btn btn-primary">
    </div>
  </div>

  <div id="" class="row" style="margin-left:10px;">
    <div class="col-md-2">
      <table id="resumen" style="display:none; border-collapse: collapse;" border="1">
        <thead>
          <th>Producto</th>
          <th>Internadas</th>
          <th>Por Internar</th>
        </thead>
        <tbody>
          <?php foreach ($s->ListarResumen() as $row): ?>
            <tr>
              <td><?php echo $row->producto ?></td>
              <td><?php echo $row->internadas ?></td>
              <td><?php echo $row->porInternar ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
        <tfoot>
          <th>Producto</th>
          <th>Internadas</th>
          <th>Por Internar</th>
        </tfoot>
      </table>
    </div>
  </div>
