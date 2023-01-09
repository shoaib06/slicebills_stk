<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="Content-Type" content="text/html, charset=iso-8859-1" />
    <meta name="revisit-after" content="7 days" />
    <meta name="robots" content="all" />
    <!-- pinterest meta tags -->
    <meta name="p:domain_verify" content="fb3b23e487eae8f67cd2755343e4c609" />
    <!-- End of pinterest meta tags -->
    <title>How To Decorate Your Home on a Budget - MajorSweeps</title>
    <!-- <meta name="description" content="" /> -->
    <meta name="keywords" content="sweepstakes, contests, online sweepstakes, sweeps, prizes, giveaways, prize, instant win, win, enter to win" />
    <link rel="shortcut icon" href="<?= base_url('assets/front') ?>/images/favicon.ico" />
    <link rel="apple-touch-icon" href="<?= base_url('assets/front') ?>/images/favicon.ico" />
    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" type="text/css">
    <link type="text/css" href="<?= base_url('assets/front') ?>/css/main_wp.css" rel="stylesheet" />





</head>

<body>
    <div class="container-non-responsive">
        <div class="ms">
            <header class="non-subscribe flow-container">
                <div class="row">
                    <div class="col-xs-5" style="float:left;">
                        <div class="majorSweepsLogo">
                            <?php $image = $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'website_logo')); ?>
                            <a href="<?php echo base_url(); ?>">
                                <img src="<?php echo base_url('uploads/' . $image) ?>" width="96%" alt="Major Sweeps logo" />
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-2">
                        <img src="<?php echo base_url('assets/front/'); ?>images/red-gift-box.png" width="100%" alt="pile of money and a gift box" />
                    </div>
                    <div class="col-xs-2">
                        <div class="msSocialWidgets" style="margin-top:12px;float:right">

                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="msButtonGroup">
                            <button class="msButton" type="button" onclick="location.href='<?php echo base_url(); ?>/subscribe';">signup</button>

                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 5px;">
                    <div class="col-xs-12">
                        <nav>
                            <a href="<?php echo base_url(); ?>">HOME</a>
                            <a href="<?= base_url('front/faq') ?>">FAQ</a>
                            <a href="<?= base_url('front/contact') ?>">CONTACT</a>
                            <a href="<?= base_url() ?>front/winners">WINNERS</a>
                            <a href="<?= base_url('front/blogs'); ?>">BLOG</a>
                            <a href="<?php echo base_url(); ?>/sweeps">SWEEPS</a>
                        </nav>
                    </div>
                </div>
            </header>