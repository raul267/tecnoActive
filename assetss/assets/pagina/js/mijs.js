function prueba()
{
  var cant = document.getElementById('cant').value;

  for (var i=1; i<cant; i++)
  {

    $("#sad").append('<br><label>Cantidad de productos pedido:'+ i+'</label>');
    $("#sad").append('<input style="margin-left:5px;"type="text" id="'+i+'"/>');
  }
  $('#btn').attr('disabled',true);
}
