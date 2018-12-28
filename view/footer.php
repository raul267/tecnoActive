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

<script type="text/javascript">
  $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
  })
</script>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="assets/pagina/js/javaScript.js" charset="utf-8"></script>
<script src="assets/pagina/js/bootstrap.js"></script>
<script src="assets/pagina/js/rut.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="assets/pagina/DataTables-1.10.18/css/datatables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').dataTable({language: {
      url: '//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json'}
    });});
</script>
<script type="text/javascript">
$(document).ready(function() {
    $('#datatable1').dataTable({language: {
  url: '//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json'}
});});
</script>


</body>
</html>
