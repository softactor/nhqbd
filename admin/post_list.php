<?php
include 'header.php';
$post_types = getTableDataByTableName('post_type');
$post_categories = getTableDataByTableName('post_category');
?>
<?php include 'top_sidebar.php'; ?>
<!-- Left side column. contains the logo and sidebar -->
<?php include 'left_sidebar.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Create Post</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <div class="box-body">
                        <div class="table-responsive">          
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td colspan="3">
                                            <form class="form-inline" action="/action_page.php" id="post_data_search_form">
                                                <div class="form-group">
                                                    <label for="sel1">Post Type:</label>                            
                                                    <select class="form-control" id="post_type" name="post_type" onchange="getPostCatByPosttype(this.value)">
                                                        <option value="">Please Select</option>
                                                        <?php
                                                        if (isset($post_types) && !empty($post_types)) {
                                                            foreach ($post_types as $ptype) {
                                                                ?>     
                                                                <option value="<?php echo $ptype->id; ?>"><?php echo $ptype->name; ?></option>
                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sel1">Post Categories:</label>
                                                    <select class="form-control" id="post_cat" name="post_cat">
                                                        <option value="">Please Select</option>
                                                    </select>
                                                </div>
                                                <button type="button" class="btn btn-primary" onclick="getPostDataSearchForm('post_data_search_form');">
                                                    <span class="fa fa-search" aria-hidden="true"></span>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <span id="search_data_response_section">
                            <?php
                            $table = 'post_details';
                            $post_details = getTableDataByTableName($table);
                            if (isset($post_details) && !empty($post_details)) {
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
                                            $sl = 1;
                                            foreach ($post_details as $cat) {
                                                $edit_id = $cat->id;
                                                ?>
                                                <tr id="row_id_<?php echo $edit_id; ?>">
                                                    <td><?php echo $sl++; ?></td>
                                                    <td>
                                                        <?php
                                                        $table = "post_type where id=" . $cat->post_type;
                                                        echo getNameByIdAndTable($table);
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $table = "post_category where id=" . $cat->post_cat;
                                                        echo getNameByIdAndTable($table);
                                                        ?>
                                                    </td>
                                                    <td><?php echo $cat->name; ?></td>
                                                    <td><?php echo $cat->post_link; ?></td>
                                                    <td>
                                                        <?php
                                                        if (isset($cat->post_logo) && !empty($cat->post_logo)) {
                                                            ?>
                                                            <img src="../<?php echo $cat->post_logo; ?>" width="100" />
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
                            <?php } ?>
                        </span>
                    </div>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include 'footer.php'; ?>
<?php include 'modal/post_details_edit_modal.php'; ?>