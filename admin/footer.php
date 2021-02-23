  <footer class="main-footer">
    <strong>Copyright &copy; <?php echo date("Y"); ?> <a href="http://saifpowertecltd.com/">Saif Powertec LTD/</a>.</strong> All rights
    reserved.
  </footer>
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<script src="js/global_url.js"></script>
<!-- jQuery 3 -->
<script src="vendor/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="vendor/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- DataTables -->
<script src="vendor/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="vendor/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="vendor/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="vendor/dist/js/adminlte.min.js"></script>
<script src="js/site_custom.js"></script>
<script src="js/sweetalert.min.js"></script>
<script>
  $(function () {
    $('#post_list_data_table').DataTable();
    $('#employee_list').DataTable();
    $('#product_list').DataTable();
    $('#role_list').DataTable();
    $('#user_list').DataTable();
    $('#vendor_list').DataTable();
  })
  
  function postDetailsDeleteConfirm(delete_id){
    swal({
        title               : 'Confirmed?',
        text                : "You will not be able to recover the data again!",
        type                : "warning",
        showCancelButton    : true,
        confirmButtonClass  : "btn-danger",
        confirmButtonText   : "Confirm",
        cancelButtonText    : 'Cancel',
        closeOnConfirm      : false,
        showLoaderOnConfirm : true
    },
    function () {
        setTimeout(function () {
            $.ajax({
                url         : base_url_addr + 'admin/function/delete_process.php?process_type=post_delete',
                type        : 'POST',
                dataType    : 'json',
                data        : 'delete_id='+delete_id,
                success: function (response) {
                    if(response.status == 'success'){
                        $("#row_id_"+delete_id).hide("slow");
                        swal("Deleted", response.message, "success");
                        setTimeout(function() {
                            if(response.totalRow){
                                swal.close();
                            }else{
                                location.reload();
                            }
                        }, 1000);
                    }else{
                        swal("Failed!", response.message, "error");
                    }
                },
                async: false // <- this turns it into synchronous
            });
        }, 2000);
    });
}
  
</script>
</body>
</html>