<html lang="en">
    <head>
        <title>Login</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" type="image/png" href="images/icons/favicon.ico" />

        <link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/css/bootstrap.min.css');?>" />

        <link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/css/font-awesome.min.css')?>" />

        <link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/css/font.min.css');?>" />

        <link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/css/animate.css');?>" />

        <link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/css/hamburgers.min.css');?>" />

        <link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/css/animsition.min.css');?>" />

        <link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/css/select2.min.css');?>" />

        <link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/css/daterangepicker.css');?>" />

        <link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/css/util.css');?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/css/main.css');?>" />
    </head>
    <body>
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
                    <?php $this->common_model->showAlertMsg(); ?>
                    <form action="<?php echo base_url('admin/doLogin');?>" method="post">
                        <span class="login100-form-title p-b-32">
                            Login
                        </span>
                        <span class="txt1 p-b-11">
                            E-Mail
                        </span>
                        <div class="wrap-input100 validate-input m-b-36" data-validate="Username is required">
                            <input class="input100" type="text" name="email" />
                            <span class="focus-input100"></span>
                        </div>
                        <span class="txt1 p-b-11">
                            Password
                        </span>
                        <div class="wrap-input100 validate-input m-b-12" data-validate="Password is required">
                            <input class="input100" type="password" name="password" />
                            <span class="focus-input100"></span>
                        </div>

                        <div class="container-login100-form-btn">
                            <input class="login100-form-btn" type="submit" value="Login" style="cursor: pointer;" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="dropDownSelect1"></div>

        <script src="<?php echo base_url('vendor/js/jquery-3.2.1.min.js');?>"></script>

        <script src="<?php echo base_url('vendor/js/animsition.min.js');?>"></script>

        <script src="<?php echo base_url('vendor/js/popper.js');?>"></script>
        <script src="<?php echo base_url('vendor/js/bootstrap.min.js');?>"></script>

        <script src="<?php echo base_url('vendor/js/select2.min.js');?>"></script>

        <script src="<?php echo base_url('vendor/js/moment.min.js');?>"></script>
        <script src="vendor/daterangepicker/daterangepicker.js"></script>

        <script src="<?php echo base_url('vendor/js/countdowntime.js');?>"></script>

        <script src="<?php echo base_url('vendor/js/main.js');?>"></script>

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag("js", new Date());
            gtag("config", "UA-23581568-13");
        </script>
    </body>
</html>