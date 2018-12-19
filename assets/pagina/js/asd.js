  function prueba()
    {
      var cant = document.getElementById('cantidadEntregas').value;

      for (var i=1; i<=cant; i++)
      {

        $("#sad").append('<div class="col-md-2"><label>'+i+') Cant productos</label></div>');
        $("#sad").append('<div class="col-md-2"><input type="text" onkeyup=""onclick="" name="cant'+i+'" id="cant'+i+'"/></div>');
        $("#sad").append('<div class="col-md-2"><label>Fecha Pedido</label></div>');
        $("#sad").append('<div class="col-md-2"><input type="date" name="fechaPedido" id="fechaPedido'+i+'"/></div>');
        $("#sad").append('<div class="col-md-2"><label>Fecha Entrega</label></div>');
        $("#sad").append('<div class="col-md-2"><input type="date" name="fechaEntrega" id="fechaEntrega'+i+'"/></div>');

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
