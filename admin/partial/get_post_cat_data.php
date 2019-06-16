<option value="">Please Select</option>
<?php
include '../../connection/conn.php';
include '../../helper/utilities.php';
if(isset($_POST['post_type_id']) && !empty($_POST['post_type_id'])){
    $post_type_id   =   $_POST['post_type_id'];
    $table          =    'post_category where post_type_id ='.$post_type_id.' ';
    $categories     =   getTableDataByTableName($table);
    if(isset($categories) && !empty($categories)){
        foreach($categories as $cat){
    ?>
        <option value="<?php echo $cat['id'] ?>"><?php echo $cat['name'] ?></option>
    
    <?php 
    
        }
        
    } 
        
} ?>