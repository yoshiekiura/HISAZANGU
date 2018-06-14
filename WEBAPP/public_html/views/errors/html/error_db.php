
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
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
    <link rel="shortcut icon" href="https://hisazangu.co.tz/resources/assets/images/icon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="https://hisazangu.co.tz/resources/assets/images/icon/favicon.ico" type="image/x-icon">
    <title>Error | Hisa Zangu</title>
    
    <!-- Custom CSS -->
    <link href="https://hisazangu.co.tz/resources/template/css/style.min.css" rel="stylesheet">
    <!-- page css -->
    <link href="https://hisazangu.co.tz/resources/template/css/pages/error-pages.css" rel="stylesheet">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-purple fixed-layout">
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper" class="error-page">
        <div class="error-box">
            <div class="error-body text-center">
                <h1>Hisa Zangu</h1>
                <h3><?php echo $heading; ?></h3>
		<?php echo $message; ?>
                <a href="https://hisazangu.co.tz/app" class="btn btn-info btn-rounded waves-effect waves-light m-b-40">Back to home</a> </div>            
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="https://hisazangu.co.tz/resources/assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="https://hisazangu.co.tz/resources/assets/node_modules/popper/popper.min.js"></script>
    <script src="https://hisazangu.co.tz/resources/assets/node_modules/bootstrap/https://hisazangu.co.tz/resources/template/js/bootstrap.min.js"></script>
    <!--Wave Effects -->
    <script src="https://hisazangu.co.tz/resources/template/js/waves.js"></script>
</body>
</html>