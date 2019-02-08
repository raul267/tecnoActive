<div class="col-md-12 text-center"><h1>Registrar Embarque <?php echo $_REQUEST['id'] ?></h1></div>
  <div class="col-md-12" style="background-color:black;"></div>
<div class="container">
<div class="row" style="margin-top:80px;">
  <form action="?c=Usuario&a=GuardarEmbarque" method="post">
    <input type="hidden" name="cantBl" id="cantBl" value="1">
    <input type="hidden" name="idEmbarque" id="idEmbarque"value="<?php echo $_REQUEST['id']; ?>">
    <label>BL</label>
    <div id="nBl" class="col-md-12"><div class="col-md-9"><input type="text" placeholder="bl"id="bl1" required  name="bl1"/> <input type="text" required placeholder="cantidad (toneladas)" id="cantidad1" name="cantidad1"/></div></div><div id="blDisponible"></div>
    <div class="col-md-2 text-center" style="margin-top:10px;"><button type="button" class="btn btn-primary btn-sm" onclick="AgregarBl()"><span class="glyphicon glyphicon-plus"></span></button></div>
    <div class="col-md-2 text-center" style="margin-top:10px;"><button type="button" class="btn btn-primary btn-sm" onclick="EliminarBl()"><span class="glyphicon glyphicon-minus"></span></button></div>

    <div class="col-md-12" style="background-color:black; margin-top:10px; margin-bottom:20px;"></div>

    <br><br><br>
    <br>
    <div class="col-md-7">
      <div class="col-md-6">
        <label>Línea</label>
        <input type="text" id="linea" name="linea"  value="" required/>
      </div>
      <div class="col-md-6" style="margin-top:10px;">
        <label>Moto Nave</label>
        <input type="text" id="motoNave" name="motoNave" required/>
      </div>
    </div>
<br>
      <div class="col-md-7">
        <div class="col-md-6">
          <label>ETD</label>
          <input type="date" id="fechaPedido" name="fechaPedido" required/>
        </div>
        <div class="col-md-6" style="margin-top:10px;">
          <label>ETA</label>
          <input type="date" id="fechaEntrega" name="fechaEntrega" required/>
        </div>
      </div>
<br>
      <div class="col-md-7">
        <div class="col-md-6">
          <label>POL</label>
          <input type="text" id="pSeguro" name="pSeguro" required/>
        </div>
        <div class="col-md-6" style="margin-top:10px;">
          <label>POD</label>
          <input type="text" id="puertoDestino" name="puertoDestino" required/>
        </div>
      </div>
<br>
      <div class="col-md-7">
        <div class="col-md-6">
          <label>Consignee</label>
          <td><input type="text" id="consignee" name="consignee" required/></td>
        </div>
        <div class="col-md-6" style="margin-top:10px;">
          <label>Embarcador</label>
          <input type="text" id="embarcador" name="embarcador" required/>
        </div>
      </div>
<br>
      <div class="col-md-7">
        <div class="col-md-6">
          <label>T Marítimo</label>
          <input type="text" id="tMaritimo" name="tMaritimo" required/>
        </div>
        <div class="col-md-6" style="margin-top:10px;">
          <label>coModato</label>
          <td><input type="text" id="coMODATO" name="coMODATO" required/></td>
        </div>
      </div>
<br>
      <div class="col-md-7">
        <div class="col-md-6">
          <label>Gate In</label>
          <input type="text" id="gateIn" name="gateIn" required/>
        </div>
        <div class="col-md-6" style="margin-top:10px;">
          <label>Días Libres</label>
          <input type="text" id="diasLibres" name="diasLibres" required/>
        </div>
      </div>
<br>
      <div class="col-md-7">
        <div class="col-md-6">
          <label>Depósito Dev.Vacío</label>
          <input type="text" id="depositoDevVacio" name="depositoDevVacio" required/>
        </div>
        <div class="col-md-6" style="margin-top:10px;">
          <label>Lote</label>
          <input type="text" id="lote" name="lote" required/>
        </div>
<br><br>
      <div class="col-md-12 text-center">
          <button  class="btn btn-success" onclick="ValidarEmbarques()" id="btnRegistrar">Ingresar datos</button>
      </div>

  </form>
</div>
</div>
