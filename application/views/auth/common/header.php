<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Forgive Your Loans | forgiveyourloans.com</title>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link href="<?= base_url(); ?>assets/front/css/style.css" type="text/css" rel="stylesheet">

    <script src="<?= base_url(); ?>assets/front/js/jquery.js"></script>
    <script src="<?= base_url(); ?>assets/front/js/wogvalidation.js"></script>
    <script src="<?= base_url(); ?>assets/front/js/bootstrap.min.js"></script>
    <!-- TrustedForm -->
    <script type="text/javascript">
        (function() {
            var tf = document.createElement('script');
            tf.type = 'text/javascript';
            tf.async = true;
            tf.src = ("https:" == document.location.protocol ? 'https' : 'http') + "://api.trustedform.com/trustedform.js?field=xxTrustedFormCertUrl&ping_field=xxTrustedFormPingUrl&l=" + new Date().getTime() + Math.random();
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(tf, s);
        })();
    </script>
    <noscript>
        <img src="https://api.trustedform.com/ns.gif" />
    </noscript>
    <!-- End TrustedForm -->

</head>

<body style="padding:0px; margin:0px">
    <div id="topcompanybar">
        <div class="company">
            <div class="container">
                <div class="col-md-6">
                    <div class="logo">
                        <?php $image =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'website_logo')); ?>
                        <a href="<?php echo base_url(); ?>"><img src="<?php echo PARENT_WEBSITE.'/uploads/' . $image ?>" class="img-responsive" vspace="10"></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="phone hidden-xs hidden-sm">
                        <span>Call Now</span> <a href="tel:<?= $phone; ?>" class="ctcphone"><?= $phone; ?></a>
                    </div>
                    <div class="phone visible-xs visible-sm">
                        <a href="tel:<?= $phone; ?>" class="myButton ctcphone"><i class="fa fa-phone"></i><?= $phone; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>