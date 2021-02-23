<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(isset($_GET['process_type']) && $_GET['process_type'] == 'post_delete'){
    include '../connection/connect.php';
    include '../helper/utilities.php';
    $delete_id                  =   $_POST['delete_id'];
    $table                      =   "post_details WHERE id=$delete_id";
    $response   =   deleteRecordByWhere($table);    
    echo json_encode($response);
}