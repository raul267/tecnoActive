  function prueba()
    {
      var cant = document.getElementById('cantidadEntregas').value;

      for (var i=0; i=cant; i++)
      {

        $("#sad").append('<br><label>Cant productos</label>');
        $("#sad").append('<input style="margin-left:5px; height:10px; type="text" id="'+i+'"/>');
      }
      $('#btn').attr('disabled',true);
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
