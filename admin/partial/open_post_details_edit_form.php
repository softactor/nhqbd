<?php
include '../../connection/conn.php';
include '../../helper/utilities.php';
if(isset($_POST['editId']) && !empty($_POST['editId'])){
    $post_types             = getTableDataByTableName('post_type');
    $post_categories        = getTableDataByTableName('post_category');
    $id             =   $_POST['editId'];
    $table          =   'post_details where id ='.$id.' ';
    $post_details   =   getDataRowIdAndTable($table);
    if(isset($post_details) && !empty($post_details)){
    ?>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="sel1">Post Type:</label>                            
                <select class="form-control" id="post_type" name="post_type">
                    <option value="">Please Select</option>
                    <?php
                    if (isset($post_types) && !empty($post_types)) {
                        foreach ($post_types as $ptype) {
                            ?>     
                            <option value="<?php echo $ptype['id']; ?>" <?php if(isset($post_details->post_type) && $post_details->post_type == $ptype['id']){ echo 'selected'; } ?>><?php echo $ptype['name']; ?></option>
                        <?php }
                    } ?>
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
                            <option value="<?php echo $pcat['id']; ?>"<?php if(isset($post_details->post_cat) && $post_details->post_cat == $pcat['id']){ echo 'selected'; } ?>><?php echo $pcat['name']; ?></option>
            <?php }
        } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="usr">Sub category:</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php if(isset($post_details->name) && !empty($post_details->name)){ echo $post_details->name; } ?>">
            </div>
            <div class="form-group">
                <label for="usr">Link:</label>
                <input type="text" class="form-control" id="post_link" name="post_link" value="<?php if(isset($post_details->post_link) && !empty($post_details->post_link)){ echo $post_details->post_link; } ?>">
            </div>
            <div class="form-group">
                <label for="usr">Details:</label>
                <textarea class="form-control" rows="5" id="post_details" name="post_details"><?php if(isset($post_details->post_details) && !empty($post_details->post_details)){ echo $post_details->post_details; } ?></textarea>
            </div>
            <div class="form-group">
                <label for="usr">Details:</label>
                <input type="file" class="form-control" id="post_logo" name="post_logo">
            </div>
            <input type="submit" name="post_entry_submit" class="btn btn-default" />
        </form>
    
    <?php
        
    } 
        
} ?>
