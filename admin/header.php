<?php  
include '../connection/conn.php';
include '../helper/utilities.php';
       
    $base_url   =   "http://dev.local/nhq1/admin/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="../img/favicon.png">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>NHQ Admin - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="public/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="public/css/sb-admin.min.css" rel="stylesheet">
  <link href="public/css/admin_site_style.css" rel="stylesheet">
</head>
<body id="page-top">
  <?php include 'top_menu.php'; ?>
  <div id="wrapper">
    <!-- Sidebar -->
    <?php include 'left_menu.php';?>