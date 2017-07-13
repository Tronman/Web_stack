<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $page_title?></title>
    
    <!-- Favicon Links -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url('asset/favicon/apple-icon-57x57.png');?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url('asset/favicon/apple-icon-60x60.png');?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('asset/favicon/apple-icon-72x72.png');?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('asset/favicon/apple-icon-76x76.png');?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('asset/favicon/apple-icon-114x114.png');?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url('asset/favicon/apple-icon-120x120.png');?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url('asset/favicon/apple-icon-144x144.png');?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url('asset/favicon/apple-icon-152x152.png');?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('asset/favicon/apple-icon-180x180.png');?>">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url('asset/favicon/android-icon-192x192.png');?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('asset/favicon/favicon-32x32.png');?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('asset/favicon/favicon-96x96.png');?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('asset/favicon/favicon-16x16.png');?>">
    <link rel="manifest" href="<?php echo base_url('asset/favicon/manifest.json');?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    

    <!-- Clean Blog css -->
    <?php 
       if ($page_title == 'Agreegate on Discounts'){
           $multisteps_indicator="";
       }
       if($page_title != 'Agreegate on Choices'){
            $cat_css = '';
       }
    ?>
    

    <!--Core Utility css-->
    <link href="<?php echo base_url('asset/css/main.css');?>" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('asset/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Navbar CSS -->
    <link href="<?php echo base_url($logo_nav);?>" rel="stylesheet">

    <!-- Interactive-cart CSS -->
    <link href="<?php echo base_url($cart_css);?>" rel="stylesheet">

    <!-- Carousel CSS -->
    <link href="<?php echo base_url($carousel_css);?>" rel="stylesheet">

    <!-- Multiple-steps Indicator Css -->
    <link href="<?php echo base_url($multisteps_indicator);?>">

    <!-- Smart Fixed Nav CSS -->
    <link href="<?php echo base_url($smart_fixed_nav);?>" rel="stylesheet">

    <!-- Category Styles -->
    <link href="<?php echo base_url($cat_css);?>" rel="stylesheet">

    <script src="<?php echo base_url('asset/js/jquery.js');?>"></script>

    <!--Modernizr js-->
    <script src="<?php echo base_url('asset/js/modernizr.js');?>"></script>

    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="fb-root"></div>

