<div style="margin-top:25px;">
    <div class="row">
    <div class="col-md-6">
      <div class="col-md-3">
        <label>Rango de fechas</label>
      </div>

        <div class="col-md-1">
          <label>Desde:</label>
       </div>
        <div class="col-md-3">
                <input type="date" name="fechaInicio" value="">
        </div>

        <div class="col-md-1">
          <label>Hasta:</label>
       </div>
        <div class="col-md-3">
                <input type="date" name="fechaFin" value="">
        </div>
    </div>
  </div>
  <br>

<div class="row" style="margin-left:10px;">
    <div class="col-md-5">
        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Producto</th>
                    <th>Proveedor</th>
                    <th>Cantidad(Toneladas)</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Termino</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Galleta AP 40</td>
                    <td>Sime Darby</td>
                    <td>1000</td>
                    <td>ene-19</td>
                    <td>dic-19</td>
                </tr>
                <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>2011/07/25</td>
                    <td>$170,750</td>
                </tr>
                <tr>
                    <td>Ashton Cox</td>
                    <td>Junior Technical Author</td>
                    <td>San Francisco</td>
                    <td>66</td>
                    <td>2009/01/12</td>
                    <td>$86,000</td>
                </tr>

              </tbody>
              <tfoot>
                 <tr>
                   <th>ID</th>
                   <th>Producto</th>
                   <th>Proveedor</th>
                   <th>Cantidad(Toneladas)</th>
                   <th>Fecha Inicio</th>
                   <th>Fecha Termino</th>
                 </tr>
              </tfoot>
              </table>
          </div>

          <div class="col-md-7">
             <img src="assets/pagina/images/grafico.jpg" alt="">
          </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <a href="?c=Usuario&a=IngresarCompra" class="btn btn-primary">Agregar nueva compra</a>
        </div>
      </div>
