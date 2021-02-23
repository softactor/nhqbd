<?php
include 'header.php';
$post_types = getTableDataByTableName('post_type');
$post_categories = getTableDataByTableName('post_category');

if (isset($_POST['post_entry_submit']) && !empty($_POST['post_entry_submit'])) {
    $name                   = check_input_data($_POST['name']);
    $post_type              = check_input_data($_POST['post_type']);
    $post_cat               = check_input_data($_POST['post_cat']);
    $post_link              = check_input_data($_POST['post_link']);
    $post_details           = check_input_data($_POST['post_details']);
    $post_logo              = "";    
    $postEntryData          = [
        'name'                  => $name,
        'post_type'             => $post_type,
        'post_cat'              => $post_cat,
        'post_link'             => $post_link,
        'post_details'          => $post_details,
    ];
    $inserResult    = saveData('post_details', $postEntryData);
    $insertId       = $inserResult['last_id'];
    if (isset($_FILES['post_logo']) && $_FILES['post_logo']['size'] > 0) {
        $post_logo = $_FILES['post_logo']['name'];
        $uploadParam        =   (object)[
            'fieldName'     =>  'post_logo',
            'row_id'        =>  $insertId,
            'target_dir'    =>  '../images/logos/',
        ];
				
        $imgUpResponse=	image_upload_process($uploadParam);
        
        $upParam      = [
            'post_logo'     =>  'images/logos/'.$imgUpResponse->file_name
        ];
        $where        = [
            'id'      =>    $insertId
        ];
        updateData('post_details', $upParam, $where);
    }
    header("Location: post_list.php");
}
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
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="sel1">Post Type:</label>                            
                                        <select class="form-control" id="post_type" name="post_type">
                                            <option value="">Please Select</option>
                                            <?php
                                            if (isset($post_types) && !empty($post_types)) {
                                                foreach ($post_types as $ptype) {
                                                    ?>     
                                                    <option value="<?php echo $ptype->id; ?>"><?php echo $ptype->name; ?></option>
                                                <?php }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="sel1">Post Categories:</label>
                                        <select class="form-control" id="post_cat" name="post_cat">
                                            <option value="">Please Select</option>
                                            <?php
                                            if (isset($post_categories) && !empty($post_categories)) {
                                                foreach ($post_categories as $pcat) {
                                                    ?>     
                                                    <option value="<?php echo $pcat->id; ?>"><?php echo $pcat->name; ?></option>
                                                <?php }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="usr">Sub category:</label>
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="usr">Link:</label>
                                        <input type="text" class="form-control" id="post_link" name="post_link">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="usr">Details:</label>
                                        <textarea class="form-control" rows="5" id="post_details" name="post_details"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="usr">Logo:</label>
                                        <input type="file" class="form-control" id="post_logo" name="post_logo">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="submit" name="post_entry_submit" class="btn btn-primary btn-block" />
                                </div>
                            </div>

                        </div>
                    </form>
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

