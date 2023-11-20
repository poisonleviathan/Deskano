<?php 
session_start();
if ( $_SESSION['email']==true) {
 
}else{
   header('location:admin_login.php');
}

 ?>

 <?php 
 include('../connection/db.php');
 $query=mysqli_query($conn,"select * from admin_login  where admin_email='{$_SESSION['email']}' ");
$data = mysqli_fetch_array($query);  

$sql=mysqli_query($conn,"select * from employer  where email='{$_SESSION['email']}' ");
$info = mysqli_fetch_array($sql);  
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Deskano</title>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<style type="text/css">
  .nav-item a{
  color: black !important;
}
</style>

 <!-- link for jquery style -->
 <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- link for bootstrap style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="country-region-dropdown-menu-master/assets/js/geodatasource-cr.js"></script>
    <link rel="stylesheet" href="country-region-dropdown-menu-master/assets/css/geodatasource-countryflag.css">

    <!-- link for semantic-ui style -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" integrity="sha512-dqw6X88iGgZlTsONxZK9ePmJEFrmHwpuMrsUChjAw1mRUhUITE5QU9pkcSox+ynfLhL15Sv2al5A0LVyDCmtUw==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ==" crossorigin="anonymous" />

    <!-- link to all languages po files -->
    <link rel="gettext" type="application/x-po" href="country-region-dropdown-menu-master/languages/ar/LC_MESSAGES/ar.po" />
    <link rel="gettext" type="application/x-po" href="country-region-dropdown-menu-master/languages/cs/LC_MESSAGES/cs.po" />
    <link rel="gettext" type="application/x-po" href="country-region-dropdown-menu-master/languages/da/LC_MESSAGES/da.po" />
    <link rel="gettext" type="application/x-po" href="country-region-dropdown-menu-master/languages/de/LC_MESSAGES/de.po" />
    <link rel="gettext" type="application/x-po" href="country-region-dropdown-menu-master/languages/en/LC_MESSAGES/en.po" />
    <link rel="gettext" type="application/x-po" href="country-region-dropdown-menu-master/languages/es/LC_MESSAGES/es.po" />
    <link rel="gettext" type="application/x-po" href="country-region-dropdown-menu-master/languages/fr/LC_MESSAGES/fr.po" />
    <link rel="gettext" type="application/x-po" href="country-region-dropdown-menu-master/languages/it/LC_MESSAGES/it.po" />
    <link rel="gettext" type="application/x-po" href="country-region-dropdown-menu-master/languages/ja/LC_MESSAGES/ja.po" />
    <link rel="gettext" type="application/x-po" href="country-region-dropdown-menu-master/languages/ko/LC_MESSAGES/ko.po" />
    <link rel="gettext" type="application/x-po" href="country-region-dropdown-menu-master/languages/ms/LC_MESSAGES/ms.po" />
    <link rel="gettext" type="application/x-po" href="country-region-dropdown-menu-master/languages/nl/LC_MESSAGES/nl.po" />
    <link rel="gettext" type="application/x-po" href="country-region-dropdown-menu-master/languages/pt/LC_MESSAGES/pt.po" />
    <link rel="gettext" type="application/x-po" href="country-region-dropdown-menu-master/languages/ru/LC_MESSAGES/ru.po" />
    <link rel="gettext" type="application/x-po" href="country-region-dropdown-menu-master/languages/sv/LC_MESSAGES/sv.po" />
    <link rel="gettext" type="application/x-po" href="country-region-dropdown-menu-master/languages/vi/LC_MESSAGES/vi.po" />
    <link rel="gettext" type="application/x-po" href="country-region-dropdown-menu-master/languages/zh-cn/LC_MESSAGES/zh-cn.po" />
    <link rel="gettext" type="application/x-po" href="country-region-dropdown-menu-master/languages/zh-tw/LC_MESSAGES/zh-tw.po" />

    <script type="text/javascript" src="country-region-dropdown-menu-master/assets/js/Gettext.js"></script>

  <body>
      <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0"> 
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Hello </br> <?php if(!empty($data['first_name'])) echo $data['first_name'] ?> <?php if(!empty($info['first_name'])) echo $info['first_name'] ?> </a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="DESKANO" readonly style="text-align: center;" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class=" text-nowrap">
          <a class="nav-link" href="logout.php" style="color: light gray">Sign out</a>
        </li>
      </ul>
    </nav>