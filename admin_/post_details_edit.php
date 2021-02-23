<?php include 'header.php';
    if(isset($_POST['post_details_update']) && !empty($_POST['post_details_update'])){
        $edit_id        = $_POST['edit_id'];
        $name           = $_POST['name'];
        $post_type      = $_POST['post_type'];
        $post_cat       = $_POST['post_cat'];
        $post_link      = $_POST['post_link'];
        $post_details   = $_POST['post_details'];
        $post_logo      = $_POST['previous_post_logo'];
        if (isset($_FILES['post_logo']['name']) && $_FILES['post_logo']['size'] > 0) {
            $image_name         = $_FILES['post_logo']['name'];
            $temp               = explode(".", $image_name);
            $newfilename        = round(microtime(true)) . '.' . end($temp);
            $imagepath          = "../images/logos/" . $newfilename;
            move_uploaded_file($_FILES["post_logo"]["tmp_name"], $imagepath);
            $post_logo          = "images/logos/" . $newfilename;;
        }
        $sql                    = "UPDATE post_details SET name='$name',post_type='$post_type',post_cat='$post_cat',post_link='$post_link',post_details='$post_details',post_logo='$post_logo'  WHERE id=$edit_id";
        if ($conn->query($sql) === TRUE) {
            header("Location: post_details_edit.php?edit_id=$edit_id");
        }
    }
    if(isset($_GET['edit_id']) && !empty($_GET['edit_id'])){
        $edit_id                =   $_GET['edit_id'];
        $table                  =   'post_details where id ='.$edit_id.' ';
        $post_details           =   getDataRowIdAndTable($table);
        $post_types             =   getTableDataByTableName('post_type');
        $post_categories        =   getTableDataByTableName('post_category');
?>
<div id="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Create Post</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                    <div class="card-header">
                        <i class="fas fa-table"></i> Post Entry
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data" id="post_details_update_form">
                            <div class="form-group">
                                <label for="sel1">Post Type:</label>                            
                                <select class="form-control" id="post_type" name="post_type">
                                    <option value="">Please Select</option>
                                    <?php
                                    if (isset($post_types) && !empty($post_types)) {
                                        foreach ($post_types as $ptype) {
                                            ?>     
                                            <option value="<?php echo $ptype['id']; ?>" <?php if (isset($post_details->post_type) && $post_details->post_type == $ptype['id']) {
                                    echo 'selected';
                                } ?>><?php echo $ptype['name']; ?></option>
        <?php }
    }
    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="sel1">Post Categories:</label>
                                <select class="form-control" id="post_cat" name="post_cat">
                                    <option value="">Please Select</option>
                                    <?php
                                    if (isset($post_categories) && !empty($post_categories)) {
                                        foreach ($post_categories as $pcat) {
                                            ?>     
                                            <option value="<?php echo $pcat['id']; ?>"<?php if (isset($post_details->post_cat) && $post_details->post_cat == $pcat['id']) {
                                    echo 'selected';
                                } ?>><?php echo $pcat['name']; ?></option>
        <?php }
    }
    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="usr">Sub category:</label>
                                <input type="text" class="form-control" id="name" name="name" value="<?php if (isset($post_details->name) && !empty($post_details->name)) {
        echo $post_details->name;
    } ?>">
                            </div>
                            <div class="form-group">
                                <label for="usr">Link:</label>
                                <input type="text" class="form-control" id="post_link" name="post_link" value="<?php if (isset($post_details->post_link) && !empty($post_details->post_link)) {
        echo $post_details->post_link;
    } ?>">
                            </div>
                            <div class="form-group">
                                <label for="usr">Details:</label>
                                <textarea class="form-control" rows="5" id="post_details" name="post_details"><?php if (isset($post_details->post_details) && !empty($post_details->post_details)) {
                                echo $post_details->post_details;
                            } ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="usr">Image:</label>
    <?php
    if (isset($post_details->post_logo) && !empty($post_details->post_logo)) {
        ?>
                                <img src="../<?php echo $post_details->post_logo; ?>" width="150" />
    <?php } ?>
                                <input type="file" class="form-control" id="post_logo" name="post_logo">
                            </div>
                            <input type="hidden" name="edit_id" value="<?php echo $post_details->id; ?>">
                            <input type="hidden" name="previous_post_logo" value="<?php echo $post_details->post_logo; ?>">
                            <input type="submit" class="btn btn-primary" name="post_details_update" value="Update" />
                        </form>
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
<?php } ?>