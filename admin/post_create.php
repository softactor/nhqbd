<?php include 'header.php';
    $post_types             = getTableDataByTableName('post_type');
    $post_categories        = getTableDataByTableName('post_category');
    
    if(isset($_POST['post_entry_submit']) && !empty($_POST['post_entry_submit'])){
        $name           =   $_POST['name'];
        $post_type      =   $_POST['post_type'];
        $post_cat       =   $_POST['post_cat'];
        $post_link      =   $_POST['post_link'];
        $post_details   =   $_POST['post_details'];
        $post_logo      =   "";
        if(isset($_FILES['post_logo']) && $_FILES['post_logo']['size'] > 0){
            $post_logo      =   $_FILES['post_logo']['name'];
            
        }
        $postEntryData  =   [
            'name'          =>  $name,
            'post_type'     =>  $post_type,
            'post_cat'      =>  $post_cat,
            'post_link'     =>  $post_link,
            'post_details'  =>  $post_details,
            'post_logo'     =>  $post_logo,
        ];
        $inserResult    =   saveData('post_details', $postEntryData);
        print '<pre>';
        print_r($inserResult);
        print '</pre>';
        exit;
        
    }
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
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="sel1">Post Type:</label>                            
                            <select class="form-control" id="post_type" name="post_type">
                                <option value="">Please Select</option>
                                <?php 
                                    if(isset($post_types) && !empty($post_types)){
                                        foreach($post_types as $ptype){
                                ?>     
                                <option value="<?php echo $ptype['id']; ?>"><?php echo $ptype['name']; ?></option>
                                <?php } } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sel1">Post Categories:</label>
                            <select class="form-control" id="post_cat" name="post_cat">
                                <option value="">Please Select</option>
                                <?php 
                                    if(isset($post_categories) && !empty($post_categories)){
                                        foreach($post_categories as $pcat){
                                ?>     
                                <option value="<?php echo $pcat['id']; ?>"><?php echo $pcat['name']; ?></option>
                                <?php } } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="usr">Sub category:</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="usr">Link:</label>
                            <input type="text" class="form-control" id="post_link" name="post_link">
                        </div>
                        <div class="form-group">
                            <label for="usr">Details:</label>
                            <textarea class="form-control" rows="5" id="post_details" name="post_details"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="usr">Details:</label>
                            <input type="file" class="form-control" id="post_logo" name="post_logo">
                        </div>
                        <input type="submit" name="post_entry_submit" class="btn btn-default" />
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
