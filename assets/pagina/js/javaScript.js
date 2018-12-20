  function prueba()
    {
      var cant = document.getElementById('cantidadEntregas').value;
      //$("#sad").apppend('<h1>Registrar Embarques</h1>');
      for (var i=1; i<=cant; i++)
      {

        $("#sad").append('<br><br><div class="col-md-2"><label>'+i+') Cant Contenedores</label></div>');
        $("#sad").append('<div class="col-md-2"><input type="text" onkeyup=""onclick="" name="cant'+i+'" id="cant'+i+'"/></div>');
        $("#sad").append('<div class="col-md-2"><label>Fecha Pedido</label></div>');
        $("#sad").append('<div class="col-md-2"><input type="date" name="fechaPedido'+i+'" id="fechaPedido'+i+'"/></div>');
        $("#sad").append('<div class="col-md-2"><label>Fecha Entrega</label></div>');
        $("#sad").append('<div class="col-md-2"><input type="date" name="fechaEntrega'+i+'" id="fechaEntrega'+i+'"/></div>');

        $("#sad").append('<br><br><div class="col-md-2"><label>'+i+')bl</label></div>');
        $("#sad").append('<div class="col-md-2"><input type="text" onkeyup=""onclick="" name="bl'+i+'" id="bl'+i+'"/></div>');
        $("#sad").append('<div class="col-md-2"><label>Linea</label></div>');
        $("#sad").append('<div class="col-md-2"><input type="text" name="linea'+i+'" id="linea'+i+'"/></div>');
        $("#sad").append('<div class="col-md-2"><label>Moto Nave</label></div>');
        $("#sad").append('<div class="col-md-2"><input type="text" name="motoNave'+i+'" id="motoNave'+i+'"/></div>');
        $("#sad").append('<br><div class="" style="margin-top:20px;"><div class="col-md-2"><label>'+i+')Cantidad</label></div><div class="col-md-2 text-center"><input type="text" name="cantidad'+i+'" id="cantidad'+i+'"/></div></div>');

                $("#sad").append('<br><br><div class="row" style="background-color:black"></div>');

      }
      $('#btn').attr('disabled',true);
    }

    function calcularTotal()
    {
      var cant = document.getElementById('cantidadEntregas').value;
      var totalProductos = 0;

      for (var i = 1; i <=cant; i++)
      {
        totalProductos = totalProductos + parseInt(document.getElementById('cant'+i).value);
      }
      $('#lblTotal').html("Total de productos: "+ totalProductos);
      $('#totalProductos').val(totalProductos);
      $('#btnRegistrar').attr('disabled',false);

    }

    function contarCaracteres(){
    		var total=document.getElementById('totalProductos');

    		setTimeout(function(){
    		document.getElementById('lblTotal')('Productos faltamtes' + total);
    		},10);

    	}

  function Mostrar()
    {
      document.getElementById('foto').style.display ='block';
    }

  function Ocultar()
    {
      document.getElementById('foto').style.display ='none';
    }

  function Ad()
    {
      var grafico = document.getElementById('foto');
      if (grafico.style.display =="none")
      {
        Mostrar();
        document.getElementById("btnMostrar").value = "Ocultar grafico";
      }
      else {
        Ocultar();
        document.getElementById("btnMostrar").value = "Mostrar grafico";
      }
    }

  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
