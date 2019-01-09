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


				$.post('acciones/accion_buscar_stock_bl.php',{bl:bl},function(datos)
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

    $(function(){

        $.post("acciones/accion_grafico_estadisticas.php",function(data)
        {
            var producto = [];
            var cantidad = [];
            var fecha = [];
            var total =0;

            var datos = $.parseJSON(data);

            for(var i in datos){
                producto.push(datos[i].id);
                cantidad.push(datos[i].cantidad);
                fecha.push(datos[i].eta);
                total = i;
            }

              var chartdata = {
                    labels: producto,
                    datasets:[{
                      label:'Productos',
                      fill: false,
                      lineTension: 0.1,
                      borderColor: "blue", // The main line color
                      backgroundColor:"blue",
                      borderCapStyle: 'square',
                      borderDash: [], // try [5, 15] for instance
                      borderDashOffset: 0.0,
                      borderJoinStyle: 'miter',
                      pointBorderColor: "black",
                      pointBackgroundColor: "white",
                      pointBorderWidth: 1,
                      pointHoverRadius: 8,
                      pointHoverBackgroundColor: "red",
                      pointHoverBorderColor: "brown",
                      pointHoverBorderWidth: 2,
                      pointRadius: 4,
                      pointHitRadius: 10,
                      // notice the gap in the data and the spanGaps: true
                      data: cantidad,
                      spanGaps: true,
                                }]
                                }



            var ctb = document.getElementById("graficoEstadisticas");

            var graficoEstadisticas = new Chart(ctb,
              {type:'line',data:chartdata}
            );
        }

      );});

      function Registrar()
      {
        swal("Exito al Registrar");

      }

      // Para cambiar el estado del boton agreagar embarque
      $(function()
        {
           $("#cantidadEntregas").on("change",function()
           {
              $('#btn').attr('disabled',false);
           }
         )});

      function ValidadCompras()
      {
          var idCompra = document.getElementById('idCompra').value;
          var cantidadPedido = document.getElementById('cantidadPedido').value;
          var idProducto = document.getElementById('idProducto').value;
          var proveedor = document.getElementById('proveedor').value;
          var fechaInicio = document.getElementById('fechaInicio').value;
          var fechaTermino = document.getElementById('fechaTermino').value;
          var error = false;
          if (idCompra =='')
          {
            error = true;
            swal('error');

          }
          if (cantidadPedido =='' || isNaN(cantidadPedido))
          {
            error = true;
            alert('Debe ingresar un numero');

          }

          if (proveedor =='')
          {
            error = true;
            swal('error');

          }


         if (fechaInicio =='')
         {
           error = true;
           swal('error');

         }

         if (fechaTermino =='')
         {
           error = true;
           swal('error');
         }

          if (idProducto = 0)
          {
              error = true;
          }

          if (error){
          event.preventDefault();
            swal('Atencion','Debes ingresar todos los datos','warning')
          }
          else{
            $.post('',{}, function(data){
            });

      }
    }
