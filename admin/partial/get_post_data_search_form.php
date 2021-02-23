<!-- DataTables -->
  <link rel="stylesheet" href="vendor/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- DataTables -->
<script src="vendor/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="vendor/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<?php
include '../../connection/conn.php';
include '../../helper/utilities.php';
if(isset($_POST['post_type']) && !empty($_POST['post_type'])){
    $post_type      =   $_POST['post_type'];
    $post_cat       =   $_POST['post_cat'];
    $table          =   'post_details where post_type ='.$post_type.' And post_cat='.$post_cat.' ';
    $post_details   =   getTableDataByTableName($table);
    if(isset($post_details) && !empty($post_details)){
    ?>
            <div class="table-responsive">          
                <table class="table table-bordered table-striped" id="post_list_data_table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Post Type</th>
                            <th>Post Categories</th>
                            <th>Sub category</th>
                            <th>Link</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sl     =   1;
                            foreach($post_details as $cat){
                                $edit_id    =   $cat['id'];
                        ?>
                        <tr id="row_id_<?php echo $edit_id; ?>">
                            <td><?php echo $sl++; ?></td>
                            <td>
                                <?php
                                    $table  =   "post_type where id=".$cat['post_type'];
                                    echo getNameByIdAndTable($table);
                                ?>
                            </td>
                            <td>
                                <?php
                                    $table  =   "post_category where id=".$cat['post_cat'];
                                    echo getNameByIdAndTable($table);
                                ?>
                            </td>
                            <td><?php echo $cat['name']; ?></td>
                            <td><?php echo $cat['post_link']; ?></td>
                            <td>
                                <?php
                                    if(isset($cat['post_logo']) && !empty($cat['post_logo'])) {
                                ?>
                                <img src="../<?php echo $cat['post_logo']; ?>" width="100" />
                                <?php } ?>
                            </td>
                            <td>
                                <a href="post_details_edit.php?edit_id=<?php echo $edit_id; ?>" class="btn btn-primary">Edit</a>
                                <button type="button" class="btn btn-danger" onclick="postDetailsDeleteConfirm('<?php echo $edit_id; ?>')">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
    
    <?php
        
    } 
        
} ?>
<script>
  $(function () {
    $('#post_list_data_table').DataTable();
  })
</script>