<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Upt Perlindungan Konsumen Malang</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url('assets/css/animate.min.css');?>" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url('assets/css/light-bootstrap-dashboard.css?v=1.4.0');?>" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url('assets/css/demo.css');?>" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="<?php echo base_url('http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');?>" rel="stylesheet">
    <link href='<?php echo base_url('http://fonts.googleapis.com/css?family=Roboto:400,700,300');?>' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url('assets/css/pe-icon-7-stroke.css');?>" rel="stylesheet" />


</head>  
<body>
    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="<?php echo site_url('welcome/logout')?>">
                                <p>Log out</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </body>  


    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="<?php echo base_url('assets/css/demo.css');?>">
    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="<?php echo site_url('welcome/pageUser');?>" class="simple-text">
                HI, <?php echo $this->session->userdata('loger') ?>
            </a>
        </div>

        <ul class="nav">
            <li class="active">
                <a href="<?php echo site_url('welcome/pageUser')?>">
                    <i class="pe-7s-graph"></i>
                    <p>Pengawasan</p>
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('welcome/pageProfil')?>">
                    <i class="pe-7s-user"></i>
                    <p>User Profile</p>
                </a>
            </li>
              <li>
                <a href="<?php echo site_url('welcome/suratMasuk')?>">
                    <i class="pe-7s-user"></i>
                    <p>Surat Masuk</p>
                </a>
            </li>
        </ul>
    </div>
</div>
</html>
