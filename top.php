<?php
$assets="";
  $ex=explode('/',$_SERVER['SCRIPT_NAME']);
    if($ex[count($ex)-2]=='super_admin')
    {
        $assets="../";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Create Post - Zoyo</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo $assets ?>assets/img/favicon.png" rel="icon">
    <link href="<?php echo $assets ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo $assets ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $assets ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo $assets ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?php echo $assets ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo $assets ?>assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="<?php echo $assets ?>assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?php echo $assets ?>assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="<?php echo $assets ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo $assets ?>assets/css/othercss.css" rel="stylesheet">
</head>