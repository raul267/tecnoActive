<div class="page-header">
  <label style="color:black; ">
    Desarrollado por: <a target="_blank" href="https://www.tecnoactive.cl"><img style="display:inline-block; width:301; height:30px;"src="assets/pagina/images/logo.png" alt=""></a>
  </label>

</div>
<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">¿Cerrar sesion?</h5>
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




<script src="assets/pagina/jQuery-3.3.1/jquery-3.3.1.js"></script>
<script src="assets/pagina/js/bootstrap.js"></script>
<script src="assets/pagina/js/rut.js"></script>
<script type="text/javascript" src="assets/pagina/DataTables-1.10.18/css/datatables.min.js"></script>
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
