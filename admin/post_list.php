<?php include 'header.php';
    $post_types             = getTableDataByTableName('post_type');
    $post_categories        = getTableDataByTableName('post_category');
?>
<div id="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Post List</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-table"></i> Post List
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                    <div class="table-responsive">          
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="sel1">Post Type:</label>                            
                                            <select class="form-control" id="post_type" name="post_type" onchange="getPostCatByPosttype(this.value)">
                                                <option value="">Please Select</option>
                                                <?php
                                                if (isset($post_types) && !empty($post_types)) {
                                                    foreach ($post_types as $ptype) {
                                                        ?>     
                                                        <option value="<?php echo $ptype['id']; ?>"><?php echo $ptype['name']; ?></option>
                                                    <?php }
                                                } ?>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="sel1">Post Categories:</label>
                                            <select class="form-control" id="post_cat" name="post_cat">
                                                <option value="">Please Select</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    </form>
                </div>

            </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    <!-- Sticky Footer -->
    <footer class="sticky-footer">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright © Your Website 2019</span>
            </div>
        </div>
    </footer>
</div>
<!-- /.content-wrapper -->
<?php include 'footer.php'; ?>
