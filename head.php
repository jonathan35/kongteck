<?php
require_once 'config/ini.php';
require_once 'config/security.php';
require_once 'config/str_convert.php';




////////////////////////////// Tour Details Page - Start ///////////////////////////////       
if(!empty($_GET['p'])){
    $vehicle_name = $str_convert->to_query($_GET['p']);
    $vehicle = sql_read('select * from vehicle where status=1 and vehicle like ? limit 1', 's', $vehicle_name);
    //debug($vehicle);

    if(!empty($vehicle['brand'])){
        $brand = sql_read('select * from brand where status=1 and id=? limit 1', 'i', $vehicle['brand']);
    }
    if(!empty($vehicle['category'])){
        $category = sql_read('select * from category where status=1 and id=? limit 1', 'i', $vehicle['category']);
    }
    if(!empty($vehicle['region'])){
        $region = sql_read('select * from region where status=1 and id=? limit 1', 'i', $vehicle['region']);
    }
    
}



if(!empty($vehicle['id'])){?>
    <meta property="og:url" content="https://kiffahborneo.com.my/vehicle_details/<?php echo $str_convert->to_url($vehicle['vehicle'])?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="kiffahborneo.com.my" />
    <meta property="og:description" content="<?php echo $vehicle['vehicle']?>" />
    <meta property="og:image" content="https://kiffahborneo.com.my/<?php echo $vehicle['photo']?>" />

<?php }
////////////////////////////// Tour Details Page - End /////////////////////////////// 
?>
<!DOCTYPE html>
<head>
    <title>Kong Teck Car Rental</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php {/**
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo ROOT?>images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo ROOT?>images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo ROOT?>images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo ROOT?>images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo ROOT?>images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo ROOT?>images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo ROOT?>images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo ROOT?>images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo ROOT?>images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo ROOT?>images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo ROOT?>images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo ROOT?>images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo ROOT?>images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo ROOT?>images/favicon/manifest.json">

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo ROOT?>images/logo.png">
    <meta name="theme-color" content="#ffffff">*/}?>
    <link rel="icon" href="<?php echo ROOT?>images/icon.png">

    <script src="<?php echo ROOT?>js/jquery.min.js"></script>
    <script src="<?php echo ROOT?>js/popper.min.js"></script>
    <script src="<?php echo ROOT?>js/4.3.1/bootstrap.min.js"></script>
    <script src="<?php echo ROOT?>js/bootstrap.min.js"></script>
    <script src="<?php echo ROOT?>js/jquery-3.5.0.js"></script>
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo ROOT?>css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo ROOT?>fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo ROOT?>fontawesome/css/all.css">
    <link rel="stylesheet" href="<?php echo ROOT?>fontawesome/css/solid.css">
    <link rel="stylesheet" href="<?php echo ROOT?>fontawesome/css/solid.min.css">


    <script src="<?php echo ROOT?>js/animate.js"></script>
    <link rel="stylesheet" href="<?php echo ROOT?>css/animate.css">

    <link href="<?php echo ROOT?>css/custom.css" rel="stylesheet" />
    
    
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
    async defer></script>
    <script type="text/javascript">
    var onloadCallback = function() {
        grecaptcha.render('recaptcha', {
            'sitekey' : '6LdPR5gUAAAAAObMmAHwsTGWbMNB4veEV1u4lTJU'
        });
    };
    </script>
    

</head>