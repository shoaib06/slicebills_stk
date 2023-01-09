<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NDP34F5');
    </script>
    <!-- End Google Tag Manager -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="Content-Type" content="text/html, charset=iso-8859-1" />
    <meta name="revisit-after" content="7 days" />
    <meta name="robots" content="all" />
    <!-- pinterest meta tags -->
    <!-- End of pinterest meta tags -->

    <!-- pinterest meta tags -->
    <meta name="propeller" content="4039a3210001014c70dbdb62c3b42927">

    <!--  Clickcease.com tracking-->
    <script type='text/javascript'>
        var script = document.createElement('script');
        script.async = true;
        script.type = 'text/javascript';
        var target = 'https://www.clickcease.com/monitor/stat.js';
        script.src = target;
        var elem = document.head;
        elem.appendChild(script);
    </script>
    <noscript><a href='https://www.clickcease.com' rel='nofollow'><img src='https://monitor.clickcease.com/stats/stats.aspx' alt='ClickCease' /></a></noscript>
    <!--  Clickcease.com tracking -->

    <title><?= $website_title; ?></title>
    <meta name="description" content="<?= $website_title; ?> - Enter to win $12,000.00 in cash. Free to join.  Gain instant accesss to sweeps entry.  Sweepstakes and Instant Win Games with Free Sweepstakes Membership. Join today!" />
    <meta name="keywords" content="sweepstakes, contests, contest money, contests to win money, online contest for money, money contest, online sweepstakes, sweeps, prizes, giveaways, prize, instant win, win, enter to win" />
    <link rel="shortcut icon" href="<?php echo base_url('assets/front/'); ?>images/favicon.ico" />
    <link rel="apple-touch-icon" href="<?php echo base_url('assets/front/'); ?>images/favicon.ico" />
    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" type="text/css">
    <link type="text/css" href="<?php echo base_url('assets/front/'); ?>css/main.css" rel="stylesheet" />

    <!-- SITE JAVASCRIPT -->
    <script src="<?php echo base_url('assets/front/'); ?>js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/front/'); ?>js/jquery.autotab.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--send message plugin-->
    <!--<script src='https://app.sendmsgs.com/user_js_files/bb08cb134cb71f7366b7ba726bb72098.js'></script>
	<script type='text/javascript' src='https://app.sendmsgs.com/sw_driver.js?v=1'></script> -->

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if (gte IE 6)&(lte IE 8)]>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/css3pie/2.0beta1/PIE_IE678.js"></script>
        <noscript><link rel="stylesheet" href="[fallback css]" /></noscript>
    <![endif]-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"> </script>
    <!--<script type="text/javascript" src="/js/scripts.js"></script>-->



</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NDP34F5" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="container-non-responsive">
        <div class="ms">
            <header>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="<?= $website_title; ?>Logo">
                            <?php $image = $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'website_logo')); ?>
                            <a href="<?php echo base_url(); ?>">
                                <img src="<?php echo base_url('uploads/' . $image) ?>" width="96%" alt="Major Sweeps logo" />
                            </a>
                        </div>
                    </div>
                </div>
            </header>
            <div class="msMainContent">


                <script type="text/javascript">
                    function limitKeypress(event, value, maxLength) {
                        if (value != undefined && value.toString().length >= maxLength) {
                            event.preventDefault();
                        }
                    }
                </script>

                <style>
                    ul li {
                        padding: 5px;
                    }

                    body {
                        background: #fff;
                    }

                    .ms .msMainContentBG>.row:first-child {
                        margin-right: -140px;
                        margin-left: -165px;
                    }

                    .ms .msFormContainer {
                        min-height: 493px;
                        height: auto;
                        background: none;
                        background-color: #66cb47;
                        /*
                        background:rgb(255,0,0);
                        background-image:-webkit-linear-gradient(left, rgb(205,0,0) 0%, rgb(255,0,0) 100%);
                        background-image:-o-linear-gradient(left, rgb(205,0,0) 0%, rgb(255,0,0) 100%);
                        background-image:linear-gradient( 90deg, rgb(205,0,0) 0%, rgb(255,0,0) 100%);*/
                        border: 2px solid #1b996c;
                    }

                    .ms .msForm .msFormSubmit .submit {
                        background-image: -webkit-linear-gradient(#0199FF 0%, #0160A0 100%);
                        background-image: -o-linear-gradient(#0199FF 0%, #0160A0 100%);
                        background-image: linear-gradient(-180deg, #0199FF 0%, #0160A0 100%);
                        border: 1px solid #0160A0;
                    }

                    .ms .msForm .msFormSubmit .submit:active {
                        background: #0199FF !important;
                    }

                    .ms .msForm {
                        font-family: 'Arial', 'Trebuchet MS', 'Tahoma', sans-serif;
                    }

                    .ms .msForm .msFormBG {
                        background-image: none;
                    }

                    .ms .msForm .msFormInputs {
                        padding-left: 8px;
                    }

                    .ms .msForm .msFormInputs:focus {
                        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6);
                        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6);
                    }

                    .ms .msForm>img {
                        display: none;
                    }

                    .ms .msForm h2 {
                        color: #fff;
                    }

                    .form-row a {
                        color: #ff0;
                    }

                    .ms .msFormExpandable {
                        display: block;
                        background: none;
                        background-color: #66cb47;
                        /*background:rgb(255,26,0);
                    background:#F00;
                    background-image:-webkit-linear-gradient(left, rgb(205,0,0) 0%, rgb(255,0,0) 100%);
                    background-image:-o-linear-gradient(left, rgb(205,0,0) 0%, rgb(255,0,0) 100%);
                    background-image:linear-gradient( 90deg, rgb(205,0,0) 0%, rgb(255,0,0) 100%);*/
                    }

                    /* style for coreg containers*/
                    .mjs-form-wrapper {
                        margin-bottom: 150px;
                    }

                    .msFormSubmit {
                        margin-top: 0px;
                        z-index: 99;
                        float: left;
                        position: absolute;
                    }

                    .ms .msFormSubmit {
                        position: absolute;
                    }

                    .ms .msFormSubmit input:active {
                        background: #0199FF !important;
                        text-shadow: none;
                    }

                    /* End of style for coreg container*/

                    #lcDiv a {
                        color: #f8ef00;
                    }

                    .error {
                        color: red;
                    }
                </style>


                <script>
                    function showPartnerPopup() {
                        $('#partnersShow').show();
                    }

                    function hidePartnerPopup() {
                        $('#partnersShow').hide();
                    }
                </script>

                <div id='partnersShow' style='z-index:99999;position:absolute;left:40%;top:250px;background-color:#f0f0f0;padding:5px;width:300px;height:350px;border:1px solid grey;border-radius:5px;margin-left:6%;display:none;color:#000;'>
                    <div style='float:right;cursor:pointer;' onclick='hidePartnerPopup();'>
                        <span style="color:red;font-weight:bold;">X CLOSE</span>
                    </div>

                    <br />
                    <br />
                    <div style="height:300px;overflow-x:scroll;">
                        <div style='text-align:center;font-size:20px;'>Marketing Partners</div>
                        <div style='text-align:center;font-size:16px;'>
                            ADT

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            100 Insure

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            1564 Ventures

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            21st Century

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            7 Summits Marketing

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Abbott Laboratories

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Accredited Debt Relief

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Ace Global Marketing LLC

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Ace Solutions

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Acreso Solar Brands

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Adducco Media

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            ADT Solar

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Advanced Home Energy Solutions

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Advantage Healthcare Plans

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Advertising Inc

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Advocacy Center

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Advocator Group

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Adzio

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Affordable Automotive Solutions

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Affordable Car Cure

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Aftermarket Protection Group

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Agent Boost Marketing

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            ALB Dealers

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Alder Holdings, LLC

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            All Web Leads

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Alliance Advisors

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Alliance Legal Center

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Alliance Tax Advocate

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Allied Insurance Partners

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Allstate

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Alpha Envirotech

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Alpha Medical

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Altrooz

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            AM Orthopedic

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            America’s Health Choice

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            America’s Pharmacy

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            America’s Tax Choice

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            American Defense Systems

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            American Disability Helpline

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            American Family

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            American Heritage Lending

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            American Marketing

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            American Police Officers Alliance

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            American Protection Plan

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Ameriquote

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Amica

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Andrews Wharton, Inc.

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Aperature Medical

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Apollo Health Group

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Ascension Leads, LLC

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Assurance Life

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            AT&T

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Atlantic Health

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Atlas LLC

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Auto Protection Plus

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Auto Service Care

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Auto Service Center

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Autoguardpro

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Automotive Service Center

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Axx Financial

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            AZ Diabetic Supply

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Backpain Discount Club

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Bank of America

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Bankers Life and Casualty Company

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Benefit Advisors

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Benefits.com

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            BenefitsTeam

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Best Insurance Savings

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            BetterHealthKare

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Big Red Consulting

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Big Tax Relief

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Binary Attribution

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Blaqout Media, LLC

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Blogly (general texting)

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Blonde Barbie Media, LLC

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Blue Dolphin Media, Inc.

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Blue Star Service Solutions, Inc

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Boost Health Insurance

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Boost Marketing, Inc.

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Boost Medicare

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Boost Mobile

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Borrowers Relief Program

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Brace Depot

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Brighter Tax Solutions

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Brinks Home Security

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Bury My Debt

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Buzz Club B.V.

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Call Trader, LLC

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Calls Direct, LLC

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Capella University

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Car Guardian

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Care Concepts

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Career Builder

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Carefree Health Services

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            CareOne Debt Relief

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Caribbean Cruises

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Cartection and Fulfillment Center

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            CAT Exteriors

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            CBS Medica

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Cege Media

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Century Benefits

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Century Support Services

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Cervont

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            CES, Inc.

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Channelstone Capital, LLC.

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Charity Guide

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Chatmantics

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Choice Health Insurance

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Chronos

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Cigna Health Group

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            CitiMortgage

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Citizens Disability

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Clean Energy Experts

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Clean Grid

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Clearlink

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Clearview Renewables

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Client Consent

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Coast2Coast Mags

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            College Support Services

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            CollegeFinderInfo.com

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Community Tax

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Complete Home Services

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Connecting the Dots LLC

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Consolidated Credit

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Consumer Council

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Consumer Debt Advisory

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Consumer Service Advisors

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Conversion Kings

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Converzate

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Coral Media Solutions

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Core Home Security

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Coverage Health Insurance

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            CPCentre

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Credit Associates

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Credit Karma

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Credit Pros

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Creditfix

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Creek View Digital LLC

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Cricket

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Customer Engagement Services

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            D&M Marketing

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            DealMaxx

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Debt Advisors

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Debt Help Express

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Debt Management Center

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Debt Repair Pros

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Debt USA

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Debt.com

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Debtaway Relief

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            DebtHelpU

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Defense Tax Group

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Delivery Associates

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Diabetes

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Diabetes Discount Club

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Diabetic Connect

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Diabetic Discount Club

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Diabetic Solutions Group

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Diablo Media

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Digital Call Solutions

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Digital Media Solutions

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            DIMC, LLC

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Direct Calls

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Direct Lending

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Direct Protect Security and Surveillance Inc

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Disability Advisor

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Disability Help Group

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Disability Hero

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Discount Power

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Divine Life Telesales

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            DJM Marketing Solutions

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            DMS Group

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Docupop

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            DPH Care

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Dr. Consumer

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Drips

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Drive My Car

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Drive your Vehicle

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Drivus

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            DS Prospecting LLC

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            DSN Information LLC

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            eAgent Direct

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Easy Home Loans

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Education Advisory Group

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Education Resource Guide

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Education Resource Guide (unique to SBG for edu and jobs)

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Eligo Energy

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Elite Financial Svcs Inc

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Email Magic LLC

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Encino Wise Choice

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Energy Management, Inc.

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Ensurem

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Equifax

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            eTelequote Medicare Advantage

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            ETN America

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            ETN America Health Insurance

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Experian

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Expert Credit Helpers

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Expert Debt Relief

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Expert Health Solutions

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Express Marketing Solutions Inc

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            EZ Lead Store

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            EZ Quote

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Farm Bureau

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Farmers

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            FED

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Fenix Protect

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Festive Health

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Final Expense Direct

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Final Expense Prime

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Finance Capital Auto

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Financial Solutions Group LLC

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            FinancialHelpers

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Find Credit

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Finish Line Tax Solutions

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Fire Brick Group

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            First Fidelity Services

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Fitsys

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Flow Solar

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Fluent Home

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Follow My Lead

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Freedom Financial Network

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Fresh Start Financial

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Gakhar Telemarketing

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            GD&FC Endeavors

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Gerber Life Insurance

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Gershfeld Law Group

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Get It Free

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Get Me Health

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Golden Senior Advisors, Inc.

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Grace Medical

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Grand Alliance Assets

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Grand Bahama Cruises

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Grand Caribbean Cruises

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            GreatFunRecipes LLC

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Green Light Hearing

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            GreenField Advantage

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            GuideToInsure

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            H20ne, LLC

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            HB Insurance Solutions.

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            HCSC Group

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Heal My Back

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Health Alliance

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Health Find

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Health First

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Health Insurance Advantage

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Health IQ

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Health IQ Insurance Services, Inc.

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Health Link

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Health Markets

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Health Plan Services

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Health Plan Vault

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Health Solutions Group

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Health Support

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Health Works

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            HealthPros

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Healthright

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Healthy Access

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Healthy Credit Now

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Hear Better for Life

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Heard and Smith

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Hearing Better Now

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Hearing Help Express

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Help Advisors

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Help4Rehab

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Helping Hands Association

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Home Security Promotions

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Home Support Group

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Home Support Services

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Housing Assistance Center

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Humana Group

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            HyperTarget Marketing

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Icon Energy LLC

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Iconic Results

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Ideal Tax Solution

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            IDT

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            IDT Energy

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Ignitist Inc.

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Immune Medical

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Impact Media Corp

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Inbox Labs

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Indeed.com

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Indra Energy

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Infinity One

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Inside Response

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Inside Ventures

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Instinctive Edge

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Insurance Guide

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Insurance Pros

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Insurance Solutions

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Insurance Supermarket Inc.

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            InsureaLife

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Integrity Medical Supplies

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Integrity Orthopedic Supplies

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Interactive Meds

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            J2Media Ventures

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Jesus Network

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            JMJ Ads, Inc

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Just Benefits

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Just Woo, Inc.

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            K South Digital

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Kaiser Foundation Group

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Kaplan University

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Kauffman Insurance

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            KB Synergy

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Kensington Marketing

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            KohShare LLC

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            KP Security

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Lawyers Referral Network

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            LCN

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            LCN Allstate

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Lead Force

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Lead Gate Media GmbH

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Lead Generation Partners

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Lead Genisis

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Legal Center For Debt

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Lender Daily

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Lending Tree

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Lendmarx

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Lexington Law

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Liberty Mutual

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Liberty University Online

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Life Brokerage Financial Group

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Life Insurance Matchup

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Life Protect 24/7

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            LifeBeacon Medical Alert

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Lightening Tax

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Lighthouse Finance Solutions

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            LighthouseSolutions

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Limestone Medical Devices

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            ListenClear

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            ListenTrust

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            LocalSolarClients.com

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Love My Inventions

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            MAC Connect

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            MAPFRE

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Marbry

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Market Approach

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Marketing USA

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Med Alert Pros

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Media Mix

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Media Stream Ventures

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Mediator Debt Solutions

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Mediator Law Group

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Mediaweb LTD

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Medical Alert Center

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Medical Supply Pointe

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Medical Support Group

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Medicare Benefits Review Hotline

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Medicare Experts

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Medicare Match

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Medicare Rewards

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Medicare Supplement

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Medicare10

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            MedicareMe

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Mental Health Boost

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Metro PCS

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Miracle-Ear

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Modernize

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Mojo Media

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Momentum Solar

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Monster.com

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Mortgage Advisor

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            My Advantage Healthcare

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            My Savings Alliance - Direct Energy

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            My Vehicle Protection

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            National Debt Helpers

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            National Disability

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            National Police

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            National Senior Benefit Advisors

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            NationalHomeProject

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Nationstar Mortgage

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Nationwide

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Nationwide Health

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Nationwide Marketing

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Nationwide Resources

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Nationwide Student Loan

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            NBP

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            NewStrata

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            NextGenLeads, LLC

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Nordic

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            North Star Insurance Advisors LLC

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            North Star Mutual Insurance Co.

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Oliver Denune, Inc.

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Omega Autocare

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Omni Research

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Only Mine, LLC

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Onviant

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Opt-Intelligence

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Otis Productions

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Overnight Shopping

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Overnightmedia, llc.

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Paddlepoint BPO

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Pain Advocates

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Pain Center

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Palo Media

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Palo Recovery

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Park Power

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Pathema GX Lab

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            PathYield Inc

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Patriot Health USA

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Penn LLC

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Perfect Legal Match

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Pharmacy Alliance

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Phat Credit

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            PillPack

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Platinum Medical Supplies

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Plymouth Rock

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Policy Scout

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            PolicyScout

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Politicause

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Precision Marketing LLC

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Premier Disability Services, LLC

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Premier Producers Group

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Premiere Guardian Protection, LLC

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Premium Choice Insurance Services

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Presidio Interactive Corporation

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Progressive

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Prospect America Inc

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Protect Your Home

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Protelgen

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Pulse Direct Inc.

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Pulse TV.com

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Pure Debt Solutions

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Q3M Insurance Solutions

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Quest Health Solutions

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Quicken Loans

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            R1D Media Group

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Ran Wild Productions

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Rapid Marketing, LLC

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Reality Debt Solutions

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Reliable Legal Marketing

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Renovation Referral, LLC

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Reptar Marketing

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Residents Energy

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Resource marketing Corp

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Rfmf Services

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Rhythm Ops, LLC

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Right1Data

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Ringmax BPO

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Rise Up Medical Supplies

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Rocket Daddy

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Royal Med Supplies

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Royal Sea Cruises, LLC

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Royal Seas Cruises

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            RX Marketing Group

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            RXToMe

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Sabel Media Group

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Safe Home Security

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Safe Streets

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Safeco

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Samples Of Today

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Save Today

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            SBG Media Enterprise LLC

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Secure One Capital

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Securus America

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            See Listings LLC

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Selectquote

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Semper Fi Health

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Senior Benefits

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Senior Care

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Senior Care USA

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Senior Health Benefits

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Senior Life

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Senior Life Benefits

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Senior Support

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Sentry Servicing

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Settlement Marketing Group, LLC

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Shapiro Legal Group, PLLC

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Sheriffs Coalition PAC

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            SI Consumer Direct

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Simple Credit Solutions

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Simple Home Solutions

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Simple Legal Solutions

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Simple Life Debt Solutions

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Simple Life Health Solutions

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Simple Life Solutions

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            SJ Concepts

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            SMBPO, LLC

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            SMG

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Snag A Job

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Sober Choice

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Social Security Disability Network

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Solar Eligibility Center

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Solar Research Group

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Solid Quote

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            SOS Team (general texting)

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Source Power Company

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Sovereign Health

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Spark Energy

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Sprint

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Sprout Health Group

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            State Farm

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Steamboat Solutions

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Stellar Communications

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Student Debt Resource

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Student Loan Forgive

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Stymco Technologies

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            SunPower

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            SunPro Solar

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Sunrun

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            SunRun Solar

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Sunshine Marketing

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Superior Home

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Support Alliance

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Support First

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Support Group

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Tag2 Freestyle Libre

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Tax Defense Network

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Tax Help Center

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Tax Help Central

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Tax Investigators

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Tax Relief Center

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Tax Relief Network

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Tax Resolvers

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            TeleMedRX

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            The Credit Pros

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            The Daily Tip Jar

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            The DineNDash

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            The General

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            The Hartford

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            The HealthScout

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            The HealthScout Disability

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            The Lead Company

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            The Medicare Basics

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            The Medicare Supplement Hotline

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            The Pain Center

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            The Tax Resolvers

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            The Travel Tipper

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            The Wolf Marketing Ltd

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            The-Solar-Project.com

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Time 2 Read

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Tire Protect USA

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Titan Gas & Power

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            T-Mobile

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Town Square Energy

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Transparent Truth (general texting)

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            TransUnion

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Travelers

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Trinity Solar

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Tri-State Consumer Insurance

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            True Commodities, LLC

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            TSS

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            U.S. Bank

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Ubiquitum

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            United Advisors

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            United Life Insurance

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            United Repair Plans

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Unitedhealth Group

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Universal Protection Services

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            University of Phoenix

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Upwell Health

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            US Energy Alliance

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            US Insurance Quotes

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            USA Health Initiatives

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            USA Travel Club

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            USAA

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Utilities Marketing Group

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            V12 Mail LLC

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Vast Medical Group

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Vehicle Protection Group

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Vehicle Protection Services

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Vehicle Protection Specialists

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Verizon

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Verus Healthcare

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Veterans Assistance Center

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Viking Magazine Service

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Vivid Hearing

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Vivint Home Security

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Vivint Smart Home

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Walla Media

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            WBG

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Wellness Center

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Wellpoint Inc. Group

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Wells Fargo

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            WGL Energy

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            WNH

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Worldwide Access Solutions, Inc.

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            YourMedicare.com

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Zip Recruiter

                        </div>
                        <div style='text-align:center;font-size:16px;'>
                            Zip Recruiter 1564 Ventures
                        </div>
                    </div>
                </div>

                <!-- main content bg-->
                <div class="msMainContentBG">
                    <!-- 12k gift and prize image-->
                    <div class="row">
                        <div class="col-xs-12">
                            <img class="msBanner" src="<?php echo base_url('assets/front/'); ?>images/gift-and-prizes-new-across-green.png" width="100%" alt="gift and prizes" />
                        </div>
                    </div>
                    <!-- End of 12k gift and prize image-->
                    <!-- page content and email -->
                    <div class="row">
                        <!-- page text -->
                        <div class="col-xs-8">
                            <h2 class="msMessage" style="font-size:18px !important;">
                                <div class="adwords-compliance-container">
                                    We at <?= $website_title; ?> conduct our very own Sweepstakes. Our $12,000 grand prize is given out twice a year! Members are also presented with daily, weekly, and monthly sweepstakes opportunities directly from <?= $website_title; ?> and our partners throughout the year. Feeling lucky, sign up now!
                                </div>
                                <ul>
                                    <li style="float:left; width:100%;">FREE to Enter</li>
                                    <li style="float:left; width:100%;">Grand Prize is Paid in FULL Upon Winning - No Annoying Drawn Out Payouts</li>
                                    <li style="float:left; width:100%;">Gain INSTANT Access to Your Sweeps Entry</li>
                                    <li style="float:left; width:100%;">Find Out About Other Great Sweeps</li>
                                </ul>
                            </h2>
                            <div>
                                <img class="100Bill" src="<?php echo base_url('assets/front/'); ?>images/bill-and-arrow.png" width="100%" alt="100 bill" />
                            </div>
                        </div>
                        <!-- End of page text -->
                        <div class="col-xs-4 mjs-form-wrapper">
                            <div class="msFormContainer">
                                <form class="msForm" id="subscribeFrom" action="<?php echo base_url('front/submit') ?>" method="POST">
                                    <?php $this->common_model->showAlertMsg(); ?>

                                    <img src="<?php echo base_url('assets/front/'); ?>images/form-glow.png" alt="glow">
                                    <div class="msFormBG">
                                        <h2>It's FREE - Enter Now</h2>
                                        <p>
                                            <label for="firstname">First Name</label>
                                            <input type="text" name="firstname" class="msFormInputs" id="firstname" value="" required />
                                        </p>

                                        <p>
                                            <label for="lastname">Last Name</label>
                                            <input type="text" name="lastname" class="msFormInputs" id="lastname" value="" required />
                                        </p>

                                        <p style="background:#0199FF; background-image:linear-gradient( 90deg, #0160A0 0%, #0199FF 100%); padding:10px 0; margin-left:-3px; margin-right:-2px;">
                                            <label for="email">Email</label>
                                            <input style="margin-right:18px;" type="text" name="email" class="msFormInputs xverify_email" id="email" value="" onblur="" required />
                                        </p>

                                        <div id="verify" style="position:absolute;z-index:10;background:#ffffff;border:1px solid grey;width:320px;height:130px;padding:10px;display:none;margin-left:2px;">
                                            <center>Please Close this box and re-verify you street address for security purposes.<br /><br />
                                                <div onclick="$('#verify').hide();" style="cursor:pointer;background:black;padding:5px 10px 5px 10px;color:white;width:100px;">CLOSE BOX</div>
                                            </center>
                                        </div>

                                        <p>
                                            <label for="streetaddress">Street Address</label>
                                            <input type="text" name="address" class="msFormInputs" id="streetaddress" value="" required />
                                        </p>

                                        <p>
                                            <label for="city">City</label>
                                            <input type="text" name="city" class="msFormInputs" id="city" value="" required />
                                        </p>

                                        <p>
                                            <label for="state">State</label>
                                            <select name="state" id="state" class="dateOfBirth" style="width:177px;" onchange="" required>
                                                <option value=''>State</option>
                                                <option value='AL'>Alabama</option>
                                                <option value='AK'>Alaska</option>
                                                <option value='AZ'>Arizona</option>
                                                <option value='AR'>Arkansas</option>
                                                <option value='CA'>California</option>
                                                <option value='CO'>Colorado</option>
                                                <option value='CT'>Connecticut</option>
                                                <option value='DE'>Delaware</option>
                                                <option value='DC'>District Of Columbia</option>
                                                <option value='FL'>Florida</option>
                                                <option value='GA'>Georgia</option>
                                                <option value='HI'>Hawaii</option>
                                                <option value='ID'>Idaho</option>
                                                <option value='IL'>Illinois</option>
                                                <option value='IN'>Indiana</option>
                                                <option value='IA'>Iowa</option>
                                                <option value='KS'>Kansas</option>
                                                <option value='KY'>Kentucky</option>
                                                <option value='LA'>Louisiana</option>
                                                <option value='ME'>Maine</option>
                                                <option value='MD'>Maryland</option>
                                                <option value='MA'>Massachusetts</option>
                                                <option value='MI'>Michigan</option>
                                                <option value='MN'>Minnesota</option>
                                                <option value='MS'>Mississippi</option>
                                                <option value='MO'>Missouri</option>
                                                <option value='MT'>Montana</option>
                                                <option value='NE'>Nebraska</option>
                                                <option value='NV'>Nevada</option>
                                                <option value='NH'>New Hampshire</option>
                                                <option value='NJ'>New Jersey</option>
                                                <option value='NM'>New Mexico</option>
                                                <option value='NY'>New York</option>
                                                <option value='NC'>North Carolina</option>
                                                <option value='ND'>North Dakota</option>
                                                <option value='OH'>Ohio</option>
                                                <option value='OK'>Oklahoma</option>
                                                <option value='OR'>Oregon</option>
                                                <option value='PA'>Pennsylvania</option>
                                                <option value='RI'>Rhode Island</option>
                                                <option value='SC'>South Carolina</option>
                                                <option value='SD'>South Dakota</option>
                                                <option value='TN'>Tennessee</option>
                                                <option value='TX'>Texas</option>
                                                <option value='UT'>Utah</option>
                                                <option value='VT'>Vermont</option>
                                                <option value='VA'>Virginia</option>
                                                <option value='WA'>Washington</option>
                                                <option value='WV'>West Virginia</option>
                                                <option value='WI'>Wisconsin</option>
                                                <option value='WY'>Wyoming</option>
                                            </select>
                                        </p>

                                        <p>
                                            <label for="zipCode">Zip Code</label>
                                            <input type="text" name="zip_code" class="msFormInputs" id="zipCode" value="" required />
                                        </p>

                                        <p>
                                            <label for="phonenumber">Phone Number</label>
                                            <input type="text" name="phone" class="msFormInputs" id="phonenumber" value="" maxlength="10" onkeyup="value=isNaN(parseFloat(value)) || (value.length==1 && value==1) || (value.length==1 && value==0)?'':value" onkeypress="limitKeypress(event,this.value,10);" required />
                                        </p>

                                        <p>
                                            <label for="DOBMonth">Date of Birth</label>
                                            <select name="DOBMonth" id="DOBMonth" class="dateOfBirth" style="width:50px;" required>
                                                <option value="">MM</option>
                                                <option value='1'>1</option>
                                                <option value='2'>2</option>
                                                <option value='3'>3</option>
                                                <option value='4'>4</option>
                                                <option value='5'>5</option>
                                                <option value='6'>6</option>
                                                <option value='7'>7</option>
                                                <option value='8'>8</option>
                                                <option value='9'>9</option>
                                                <option value='10'>10</option>
                                                <option value='11'>11</option>
                                                <option value='12'>12</option>
                                            </select>
                                            <select name="DOBDay" id="DOBDay" class="dateOfBirth" style="width:50px;" required>
                                                <option value="">DD</option>
                                                <option value='1'>1</option>
                                                <option value='2'>2</option>
                                                <option value='3'>3</option>
                                                <option value='4'>4</option>
                                                <option value='5'>5</option>
                                                <option value='6'>6</option>
                                                <option value='7'>7</option>
                                                <option value='8'>8</option>
                                                <option value='9'>9</option>
                                                <option value='10'>10</option>
                                                <option value='11'>11</option>
                                                <option value='12'>12</option>
                                                <option value='13'>13</option>
                                                <option value='14'>14</option>
                                                <option value='15'>15</option>
                                                <option value='16'>16</option>
                                                <option value='17'>17</option>
                                                <option value='18'>18</option>
                                                <option value='19'>19</option>
                                                <option value='20'>20</option>
                                                <option value='21'>21</option>
                                                <option value='22'>22</option>
                                                <option value='23'>23</option>
                                                <option value='24'>24</option>
                                                <option value='25'>25</option>
                                                <option value='26'>26</option>
                                                <option value='27'>27</option>
                                                <option value='28'>28</option>
                                                <option value='29'>29</option>
                                                <option value='30'>30</option>
                                                <option value='31'>31</option>
                                            </select>
                                            <select name="DOBYear" id="DOBYear" class="dateOfBirth" style="width:70px;" onchange=" getSubFormHeight();" required>
                                                <option value="">YYYY</option>
                                                <option value='2022'>2022</option>
                                                <option value='2021'>2021</option>
                                                <option value='2020'>2020</option>
                                                <option value='2019'>2019</option>
                                                <option value='2018'>2018</option>
                                                <option value='2017'>2017</option>
                                                <option value='2016'>2016</option>
                                                <option value='2015'>2015</option>
                                                <option value='2014'>2014</option>
                                                <option value='2013'>2013</option>
                                                <option value='2012'>2012</option>
                                                <option value='2011'>2011</option>
                                                <option value='2010'>2010</option>
                                                <option value='2009'>2009</option>
                                                <option value='2008'>2008</option>
                                                <option value='2007'>2007</option>
                                                <option value='2006'>2006</option>
                                                <option value='2005'>2005</option>
                                                <option value='2004'>2004</option>
                                                <option value='2003'>2003</option>
                                                <option value='2002'>2002</option>
                                                <option value='2001'>2001</option>
                                                <option value='2000'>2000</option>
                                                <option value='1999'>1999</option>
                                                <option value='1998'>1998</option>
                                                <option value='1997'>1997</option>
                                                <option value='1996'>1996</option>
                                                <option value='1995'>1995</option>
                                                <option value='1994'>1994</option>
                                                <option value='1993'>1993</option>
                                                <option value='1992'>1992</option>
                                                <option value='1991'>1991</option>
                                                <option value='1990'>1990</option>
                                                <option value='1989'>1989</option>
                                                <option value='1988'>1988</option>
                                                <option value='1987'>1987</option>
                                                <option value='1986'>1986</option>
                                                <option value='1985'>1985</option>
                                                <option value='1984'>1984</option>
                                                <option value='1983'>1983</option>
                                                <option value='1982'>1982</option>
                                                <option value='1981'>1981</option>
                                                <option value='1980'>1980</option>
                                                <option value='1979'>1979</option>
                                                <option value='1978'>1978</option>
                                                <option value='1977'>1977</option>
                                                <option value='1976'>1976</option>
                                                <option value='1975'>1975</option>
                                                <option value='1974'>1974</option>
                                                <option value='1973'>1973</option>
                                                <option value='1972'>1972</option>
                                                <option value='1971'>1971</option>
                                                <option value='1970'>1970</option>
                                                <option value='1969'>1969</option>
                                                <option value='1968'>1968</option>
                                                <option value='1967'>1967</option>
                                                <option value='1966'>1966</option>
                                                <option value='1965'>1965</option>
                                                <option value='1964'>1964</option>
                                                <option value='1963'>1963</option>
                                                <option value='1962'>1962</option>
                                                <option value='1961'>1961</option>
                                                <option value='1960'>1960</option>
                                                <option value='1959'>1959</option>
                                                <option value='1958'>1958</option>
                                                <option value='1957'>1957</option>
                                                <option value='1956'>1956</option>
                                                <option value='1955'>1955</option>
                                                <option value='1954'>1954</option>
                                                <option value='1953'>1953</option>
                                                <option value='1952'>1952</option>
                                                <option value='1951'>1951</option>
                                                <option value='1950'>1950</option>
                                                <option value='1949'>1949</option>
                                                <option value='1948'>1948</option>
                                                <option value='1947'>1947</option>
                                                <option value='1946'>1946</option>
                                                <option value='1945'>1945</option>
                                                <option value='1944'>1944</option>
                                                <option value='1943'>1943</option>
                                                <option value='1942'>1942</option>
                                                <option value='1941'>1941</option>
                                                <option value='1940'>1940</option>
                                                <option value='1939'>1939</option>
                                                <option value='1938'>1938</option>
                                                <option value='1937'>1937</option>
                                                <option value='1936'>1936</option>
                                                <option value='1935'>1935</option>
                                                <option value='1934'>1934</option>
                                                <option value='1933'>1933</option>
                                                <option value='1932'>1932</option>
                                                <option value='1931'>1931</option>
                                                <option value='1930'>1930</option>
                                                <option value='1929'>1929</option>
                                                <option value='1928'>1928</option>
                                                <option value='1927'>1927</option>
                                                <option value='1926'>1926</option>
                                                <option value='1925'>1925</option>
                                                <option value='1924'>1924</option>
                                                <option value='1923'>1923</option>
                                                <option value='1922'>1922</option>
                                                <option value='1921'>1921</option>
                                                <option value='1920'>1920</option>
                                                <option value='1919'>1919</option>
                                                <option value='1918'>1918</option>
                                                <option value='1917'>1917</option>
                                                <option value='1916'>1916</option>
                                                <option value='1915'>1915</option>
                                                <option value='1914'>1914</option>
                                                <option value='1913'>1913</option>
                                                <option value='1912'>1912</option>
                                                <option value='1911'>1911</option>
                                                <option value='1910'>1910</option>
                                            </select>
                                        </p>

                                        <p>
                                            <label for="gender">Gender</label>
                                            <select name="gender" class="msFormInputs" id="gender" onchange=" getSubFormHeight();" required>
                                                <option value="">Select Gender</option>
                                                <option value="m">Male</option>
                                                <option value="f">Female</option>
                                            </select>

                                        </p>
                                        <!-- coreg options -->
                                        <div class="form-row">
                                            <input type="checkbox" name="custom_terms" id="chk_terms" class="checkboxText" value="1" required />
                                            By checking this box, you agree to our <a href="<?= base_url('front/terms') ?>" target="_new">Terms of Service</a> and <a href="<?= base_url('front/privacy') ?>" target="_new">Privacy Policy</a> as well as our <a href="<?php echo base_url(); ?>front/official_rules" target="_new">Official Rules</a> and agree to receive daily newsletters and promotions via email from <?= $website_title; ?>.
                                        </div>



                                        <div class="form-row">
                                            <label class="opt-in-detail font-fam-primary fs11" style="display: block; clear:both;margin-top:10px;margin-bottom:10px;color:#fff; font-size:10px; width: auto;">
                                                <input type="checkbox" name="site_aff_terms" id="leadid_tcpa_disclosure" value="1" style="vertical-align: top; float: left; margin: 0px;" required />
                                                &nbsp;By checking this box you consent to receive phone sales calls and/or SMS text messages - Msg and data rates may apply - from <?= $website_title; ?> and our <a style='cursor: pointer;' onclick='showPartnerPopup();'>marketing partners</a> on the landline or mobile number you provided even if you are on the federal or state do not call registry. You understand these calls and SMS text messages may be generated using an autodialer and may contain pre-recorded messages and that consenting is not required to participate in the offers promoted. You understand that you may revoke consent at any time. Text STOP to opt out and HELP to receive help.

                                            </label>
                                        </div>

                                        <div class="msFormExpandable">





                                            <!-- <div class="g-recaptcha" data-sitekey="6LdcrjUUAAAAAA_44XywuKcWeCPf0PSEIPvX3QFs" data-callback="getRecap" data-size="invisible">
                                            </div> -->

                                            <span style="display: inline-block; margin-bottom: 15px; margin-top: 15px;">&nbsp;</span>
                                        </div>
                                        <!-- End of coreg options -->
                                    </div>
                            </div>

                            <div id="formSubmit" class="msFormSubmit" style="margin-top:0px; top: unset;">
                                <input id="submitBtn" name="submitBtn" class="submit" type="submit" value="SUBMIT" style="background-image: linear-gradient(-180deg, #0199FF 0%, #0160A0 100%); border: 1px solid #0160A0; z-index: 9999; margin-top: -30px; border: 1px solid #0160A0;" />
                                <img id="free-badge" class="freeBadge" src="<?php echo base_url('assets/front/'); ?>images/free_badge.png" width="21%" alt="free badge">
                                <div id="free-badge-shadow">
                                    <img class="freeBadgeShadow" src="<?php echo base_url('assets/front/'); ?>images/free_badge_shadow.png" alt="free badge shadow" />
                                </div>
                                <div id="processing-image" style="display:none; padding-left: 57px; padding-top: 0px; margin-top: -20px; z-index: 75;">
                                    <img src="<?php echo base_url('assets/front/'); ?>images/processing_blue.gif" alt="data processsing" />
                                </div>
                            </div>
                            </form>

                        </div>
                        <div class="row" style="margin-left:0;margin-right:0;">
                            <div class="row" style="background-image:url('images/blue_strip.png'); width:958px; margin-left:15px; margin-top:-6px;">
                                <div class="col-xs-12" id="money-image-wrapper" style="padding:0 15px;">
                                    <img src="<?php echo base_url('assets/front/'); ?>images/money-pile.png" width="100%" alt="pile of money">
                                </div>
                                <div class="col-xs-12">
                                    <div id="ad-image" style="margin:-4px 15px 0 15px; padding:0px; background:#024E80; background-image:url('images/blue_strip.png'); background-repeat:repeat-y;">
                                        <center></center><br />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of page content and email -->
                </div>
                <!--End of main content bg-->