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
                <table class="table">
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
                        ?>
                        <tr>
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
                                <?php
                                $edit_id    =   $cat['id'];
                                ?>
<!--                                <button type="button" class="btn btn-primary" onclick="openPostDetailsEditForm('<?php echo $edit_id; ?>')">
                                    Edit
                                </button>
                                <button type="button" class="btn btn-danger" onclick="openPostDetailsDeleteConfirm()">
                                    Delete
                                </button>-->
                                <a href="post_details_edit.php?edit_id=<?php echo $edit_id; ?>" class="btn btn-primary">Edit</a>
                                <a href="post_details_edit.php" class="btn btn-primary">Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
    
    <?php
        
    } 
        
} ?>
