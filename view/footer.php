
<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">¿Cerrar sesion?</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Seguro que desea cerrar sesion?

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <a href="?c=Usuario&a=LogOut" class="btn btn-danger">Cerrar sesion</a>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="modalpass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Cambio de contraseña</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="" action="?c=Usuario&a=CambiarPassword&id=<?php echo $_SESSION['id_usuario'] ?>" method="post">
        <div class="row">
          <div class="col-md-4">
            <label>Ingrese su contraseña actual</label>
          </div>
          <div class="col-md-6">
            <input type="password" name="passActual" id="passActual" value="">
            <input type="checkbox" onclick="MostrarContraseñaActual()" id="cbx" style="display: none;">
              <label for="cbx" class="check">
                <svg width="18px" height="18px" viewBox="0 0 18 18">
                  <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                  <polyline points="1 9 7 14 15 4"></polyline>
                </svg>
              </label>
              <label>Ver</label>
          </div>
        </div>
        <div class="row" style="margin-top:10px;">
          <div class="col-md-4">
            <label>Ingrese su nueva contraseña</label>
          </div>
          <div class="col-md-6">
            <input type="password" name="passNueva" id="passNueva" value="">
              <input type="checkbox" id="cxx" style="display: none;"onclick="MostrarContraseñaNueva()">
                <label for="cxx" class="check">
                  <svg width="18px" height="18px" viewBox="0 0 18 18">
                    <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                    <polyline points="1 9 7 14 15 4"></polyline>
                  </svg>
                </label>
                <label>Ver</label>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <input type="submit" class="btn btn-success" name="" value="Cambiar contraseña">
      </div>
    </form>
    </div>
  </div>
</div>



  <div class="page-header">
    <label style="color:black; ">
      Desarrollado por: <a target="_blank" href="https://www.tecnoactive.cl"><img style="display:inline-block; width:301; height:30px;"src="assets/pagina/images/logo.png" alt=""></a>
    </label>
  </div>



<script src="assets/pagina/jQuery-3.3.1/jquery-3.3.1.js"></script>
<script src="assets/pagina/js/bootstrap.js"></script>
<script src="assets/pagina/js/rut.js"></script>
<script src="assets/pagina/DataTables-1.10.18/css/datatables.min.js"></script>
<script src="assets/pagina/js/datatabla.js"></script>
<script src="assets/pagina/js/datatablaI.js"></script>
<script src="assets/pagina/js/Chart.min.js"></script>
<script src="assets/pagina/js/javaScript.js" charset="utf-8"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').dataTable({language: {
      url: '//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json'}
    });});
</script>

<script type="text/javascript">
  $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
  })
</script>
<script type="text/javascript">
$(document).ready(function() {
    $('#datatable1').dataTable({language: {
  url: '//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json'}
});});
</script>


</body>
</html>
