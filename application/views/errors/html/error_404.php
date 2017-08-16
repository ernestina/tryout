<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url().'assets/images/favicon.png';?>">
    <title>Tryout STAN</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url().'assets/plugins/bootstrap/css/bootstrap.min.css';?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url().'main/css/style.css';?>" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo base_url().'main/css/colors/blue.css';?>" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header card-no-border">
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper" class="error-page">
        <div class="error-box">
            <div class="error-body text-center">
                <h1><?php echo substr($heading,0,3); ?></h1>
                <h3 class="text-uppercase"><?php echo substr($heading,4);?></h3>
                <p class="text-muted m-t-30 m-b-30"><?php echo strtoupper($message);?></p>
                <a href="index.html" class="btn btn-info btn-rounded waves-effect waves-light m-b-40">Back to home</a> </div>
            <footer class="footer text-center">2017 © </footer>
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url().'assets/plugins/jquery/jquery.min.js';?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url().'assets/plugins/bootstrap/js/tether.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/plugins/bootstrap/js/bootstrap.min.js';?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url().'js/waves.js';?>"></script>
</body>

</html>
