  function prueba()
    {
      var cant = document.getElementById('cantidadEntregas').value;
      //$("#sad").apppend('<h1>Registrar Embarques</h1>');
      for (var i=1; i<=cant; i++)
      {

        $("#sad").append('<br><br><div class="col-md-2"><label>'+i+') Cant Contenedores</label></div>');
        $("#sad").append('<div class="col-md-2"><input type="text" onkeyup=""onclick="" name="cant'+i+'" id="cant'+i+'"/></div>');


      }
      //$('#btn').attr('disabled',true);
        $('#btnRegistrar').attr('disabled',false);
    }

    function AgregarBl()
    {
      var i = document.getElementById("cantBl").value;
      i = parseInt(i) + 1;
      document.getElementById("cantBl").value = i;
        $("#nBl").append('<br><br><div class="col-md-9" style="margin-top:10px;"><input placeholder="bl "type="text" id="bl'+i+'" name="bl'+i+'"/><input placeholder="cantidad "type="text" id="cantidad'+i+'" name="cantidad'+i+'"/></div>');
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

  $(function()
    {
       $("#ddlbl").on("change",function()
       {
			var bl = "";

			bl = $(this).val();


				$.post('acciones/accion_buscar_stock_bl.php',{idCompra:idCompra},function(datos)
				{
					$("#divStock").html(datos);


				});
       });
    });

 $(function()
    {
    $("#idCompra").on("keyup",function()
    {
  var idCompra = "";

    idCompra = $(this).val();


    $.post('acciones/accion_buscar_idCompra.php',{idCompra:idCompra},function(datos)
    {
      $("#divDisponible").html(datos);
    });
  });
    });
