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
      document.getElementById('resumen').style.display ='block';
    }

  function Ocultar()
    {
      document.getElementById('resumen').style.display ='none';
    }

  function Ad()
    {
      var resumen = document.getElementById('resumen');
      if (resumen.style.display =="none")
      {
        Mostrar();
        document.getElementById("btnMostrar").value = "Ocultar Resumen";
      }
      else {
        Ocultar();
        document.getElementById("btnMostrar").value = "Mostrar Resumen";
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
                      label:'Cantidad de productos',
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


      $(function(){

          $.post("acciones/accion_grafico_llego.php",function(data)
          {
              var compra = [];
              var cantidad = [];
              var datos = $.parseJSON(data);

              for(var i in datos)
              {
                  compra.push(datos[i].compra);
                  cantidad.push(datos[i].cantidad);
              }

                var chartdata = {
                      labels: compra,
                      datasets:[{
                        label:"Embarques en puerto",
                        fill: false,
                        lineTension: 0.1,
                        borderColor: "black", // The main line color
                        backgroundColor:["blue","green","red"],
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



              var ctb = document.getElementById("graficoLlego");

              var graficoEstadisticas = new Chart(ctb,
                {type:'bar',data:chartdata}
              );
          }

        );});

      $(function(){

          $.post("acciones/accion_grafico_despacho.php",function(data)
          {
              var producto = [];
              var cantidad = [];
              var datos = $.parseJSON(data);

              for(var i in datos)
              {
                  producto.push(datos[i].id);
                  cantidad.push(datos[i].cantidad);
              }

                var chartdata = {
                      labels: producto,
                      datasets:[
                        {
                        label:'Productos despachados',
                        fill: false,
                        lineTension: 0.1,
                        borderColor: "black", // The main line color
                        backgroundColor:["blue","green","red"],
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
                        }
                      ]}



              var ctb = document.getElementById("graficoDespacho");

              var graficoEstadisticas = new Chart(ctb,
                {type:'pie',data:chartdata}
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
          var vID = document.getElementById('validacionId').value;
          var cantidadPedido = document.getElementById('cantidadPedido').value;
          var idProducto = document.getElementById('idProducto').value;
          var proveedor = document.getElementById('proveedor').value;
          var fechaInicio = document.getElementById('fechaInicio').value;
          var fechaTermino = document.getElementById('fechaTermino').value;
          var error = false;

          if (idCompra =='')
          {
            error = true;
            alert('Debe ingresar una compra');
          }
          if (idCompra = vID)
          {
              error = true;
              alert('El id de compra ya esta registrado en la base de datos');
          }
          if (cantidadPedido =='' || isNaN(cantidadPedido))
          {
            error = true;
            alert('Debe ingresar un numero');

          }

          if (proveedor =='')
          {
            error = true;
            alert('debe ingresar un proveedor');

          }


         if (fechaInicio =='')
         {
           error = true;
          alert('Debe ingresar una fecha de inicio');
         }

         if (fechaTermino =='')
         {
           error = true;
           alert('Debe seleccionar una fecha de termino');
         }

          if (idProducto = 0)
          {
              error = true;
              alert('Debe seleccionar un producto');
          }

          if (error){
          event.preventDefault();

          }
          else{
            $.post('',{}, function(data){
            });

      }
    }

    function ValidarEmbarques()
    {
      var bl = documento.getElementById('nBl').value;
      var linea = document.getElementById('linea').value;
      var motoNave = document.getElementById('motoNave').value;
      var fechaPedido = document.getElementById('fechaPedido').value;
      var fechaEntrega = document.getElementById('fechaEntrega').value;
      var pSeguro = document.getElementById('pSeguro').value;
      var puertoDestino = document.getElementById('puertoDestino').value;
      var embarcador = document.getElementById('embarcador').value;
      var consignee = document.getElementById('consignee').value;
      var tMaritimo = document.getElementById('tMaritimo').value;
      var coMODATO = document.getElementById('coMODATO').value;
      var gateIn = document.getElementById('gateIn').value;
      var diasLibres = document.getElementById('diasLibres').value;
      var depositoDevVacio = document.getElementById('depositoDevVacio').value;
      var lote = document.getElementById('lote').value;
      var cantidad = document.getElementById('cantBl').value;
      var alerta = false;




      if (linea == '')
      {
          alerta = true;
          alert("Debe ingresar una linea");
      }
      if (motoNave == '')
      {
          alerta = true;
          alert("Debe ingresar una moto nave");
      }

      if (fechaPedido == '')
      {
          alerta = true;
          alert("Debe ingresar una fecha de pedido");
      }

      if (fechaEntrega == '')
      {
          alerta = true;
          alert("Debe ingresar una fecha de entrega");
      }

      if (fechaPedido > fechaEntrega)
      {
        alerta = true;
        Alert("La fecha de pedido no puede ser mayor a la fecha de entrega");
      }

      if (pSeguro == '')
      {
          alerta = true;
          alert("Debe ingresar un seguro");
      }

      if (puertoDestino == '')
      {
          alerta = true;
          alert("Debe ingresar un puerto");
      }

      if (consignee == '')
      {
          alerta = true;
          alert("Debe ingresar un consignee");
      }

      if (embarcador == '')
      {
          alerta = true;
          alert("Debe ingresar un embarcador");
      }

      if (tMaritimo == '' || isNaN(tMaritimo))
      {
          alerta = true;
          alert("Debe ingresar un tMaritimo");
      }

      if (coMODATO == '' || isNaN(coMODATO))
      {
          alerta = true;
          alert("Debe ingresar un coMODATO");
      }

      if (gateIn == '' || isNaN(gateIn))
      {
          alerta = true;
          alert("Debe ingresar una puerta de embarque");
      }

      if (diasLibres == '' || isNaN(diasLibres))
      {
          alerta = true;
          alert("Debe ingresar cantidad de dias libres");
      }

      if (depositoDevVacio == '' || isNaN(depositoDevVacio))
      {
          alerta = true;
          alert("Debe ingresar un deposito");
      }

      if (lote == '')
      {
          alerta = true;
          alert("Debe ingresar un lote");
      }



      if (alerta)
      {
        event.preventDefault();
      }
      else
      {
        $.post('',{}, function(data){
        });
      }
  }

  function ValidarDespacho()
  {
    var bl = document.getElementById('ddlbl').value;
    var rutEmisor = document.getElementById('rutEmisor').value;
    var rutReceptor = document.getElementById('rutReceptor').value;
    var tipoDocumento = document.getElementById('tipoDocumento').value;
    var facturaNro = document.getElementById('facturaNro').value;
    var fechaEmision = document.getElementById('fechaEmision').value;
    var montoTotal = document.getElementById('montoTotal').value;
    var idProducto = document.getElementById('idProducto').value;
    var cantidadKG = document.getElementById('cantidadKG').value;
    var vCantidad = document.getElementById('vCantidad').value;
    var alerta = false;

    if (bl == '')
    {
        alerta = true;
        alert("Debe seleccionar un bl");
    }
    if (rutEmisor == '')
    {
      alerta = true;
      alert("Ingrese rut");
    }
    if (rutReceptor == '')
    {
        alerta = true;
      alert("Ingrese rut");
    }
    if (tipoDocumento == '')
    {
        alerta = true;
        alert("Seleccione un tipo de documento");
    }
    if (facturaNro == '')
    {
        alert("Ingrese un numero de factura");
    }
    if (isNaN(facturaNro))
    {
        alerta = true;
        alert("Ingrese un valor numerico");
    }
    if (fechaEmision == '')
    {
        alerta = true;
        alert("Ingrese una fecha");
    }
    if (montoTotal == '')
    {
        alerta = true;
        alert("Ingrese monto total");
    }
    if (isNaN(montoTotal))
    {
        alerta = true;
        alert("Debe ser un valor numerico");
    }
    if (cantidadKG == '')
    {
        alerta = true;
        alert("Ingrese una cantidad");
    }
    if (isNaN(cantidadKG))
    {
        alerta = true;
        alert("Debe ser un valor numerico");
    }
    if (cantidadKG > vCantidad)
    {
        alerta = true;
      alert("No hay stock suficiente!!");
    }




    if (alerta)
    {
      event.preventDefault();
    }
    else
    {
      $.post('',{}, function(data){
      });
    }
  }
