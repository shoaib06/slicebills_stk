<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>
        Surveys2Cash
    </title>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v1.0.0/css/unicons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/front')?>/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets/front')?>/css/main.css">
    <link rel="stylesheet" href="<?= base_url('assets/front')?>/css/body.css">
    <link rel="manifest" href="/manifest.json">


</head>

<body>

<!-- End Google Tag Manager (noscript) -->
<div id="fb-root"></div>

<style>
    :root {
        --primary-color: rgba();
        --primary-color-hover: rgba();
    }

    /* PROGRESS BAR */

    #progress {
        background-color: !important;
    }

    /* ALL BUTTONS */
    .button:not(.link):not(.inverted), , .bt-continue, .rules__link:hover, #optout-form .btn.btn-primary {
                                             background: var(--primary-color);
                                         }

    /* ALL BUTTONS HOVER */
    .button:not(.link):not(.inverted):hover, , .bt-continue:hover, #optout-form .btn.btn-primary:hover {
                                                   background: var(--primary-color-hover);
                                               }

    /* CUSTOM RADIOS */

    .register__form .radio-box > .path-form-field-with-feedback-control input[type="radio"] + span{
        background-color: rgba(155,155,155,1);
        color: rgba(255,255,255,1)!important;
        border-radius: 4rem!important;
        border: 1px solid rgba(155,155,155,1)!important;
        text-align:center!important;
        padding:.625rem 1.5rem .75rem 1.5rem!important;
    }
    .register__form .radio-box > .path-form-field-with-feedback-control input[type="radio"]:hover + span, .register__form .radio-box > .path-form-field-with-feedback-control input[type="radio"]:checked + span{
        background-color: rgba(213,32,32,1)!important;
        color: rgba(255,255,255,1)!important;
    }

    .register__form .custom-label label{
        color: rgba(0,0,0,1)!important;
        text-align:left!important;
        font-weight:bold;
        font-size:1.5rem!important;
    }

    /* TCPA */

    .tcpa-questionary .tcpa-answers {
        flex-wrap: wrap;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .tcpa-item-answer, .tcpa-continue-container button {
        width: 320px;
        max-width: 80%;
    }

    .tcpa-questionary[data-multiple="true"] .tcpa-answers {
        flex-direction: column;
    }

    .tcpa-questionary-form .tcpa-question {
        color: rgba(65,77,88,1) !important;
        font-size: 24px !important;
    }

    .tcpa-answer:not(.multiple), .tcpa-answer-in {
        background: rgba(72,201,196,1) !important;
        border-radius: 4px !important;
        padding: 20px !important;
        font-family: var(--general-font);
        font-size: 20px !important;
        color: rgba(255,255,255,1) !important;
        box-shadow: none !important;
        border: 0px solid transparent !important;
    }

    .tcpa-answer:not(.multiple):hover, .tcpa-answer-in:hover {
        background: rgba(54,183,180,1) !important;
    }

    .tcpa-answer[data-id="false"]:not(.multiple), .tcpa-answer[data-id="no"]:not(.multiple) {
        background: rgba(240,240,240,1) !important;
        border-radius: 4px !important;
        padding: 20px !important;
        font-family: var(--general-font);
        font-size: 20px !important;
        color: rgba(255,255,255,1) !important;
        box-shadow: none !important;
        border: 0px solid transparent !important;

    }

    .tcpa-answer[data-id="false"]:not(.multiple):hover, .tcpa-answer[data-id="no"]:not(.multiple):hover {
        background: rgba(244,240,240,1) !important;
    }

    .tcpa-answer[data-id="true"]:not(.multiple) {
        background: rgba(72,201,196,1) !important;
        border-radius: 4px !important;
        padding: 20px !important;
        font-family: var(--general-font);
        font-size: 20px !important;
        color: rgba(255,255,255,1) !important;
        box-shadow: none !important;
        border: 0px solid transparent !important;

    }

    .tcpa-answer[data-id="true"]:not(.multiple):hover {
        background: rgba(54,183,180,1) !important;
    }

    .userenroll-next {
        background: rgba() !important;
        border-radius:  !important;
        padding:  !important;
        font-family: var(--general-font);
        font-size:  !important;
        color: rgba() !important;
        box-shadow:  !important;
        border:    !important;
        margin-top: 2rem;
    }

    .userenroll-next:hover {
        background: rgba() !important;
    }

    .form-button {
        background: rgba() !important;
        border-radius:  !important;
        padding:  !important;
        font-family: var(--general-font);
        font-size:  !important;
        color: rgba() !important;
        box-shadow:  !important;
        border:    !important;
    }

    .form-button:hover {
        background: rgba() !important;
    }

    /* FLOW */

    @media (max-width: 425px) {
        .flow {
            min-height: calc(100vh - 5rem);
        }
    }

</style>

<main class="flow ">
<section>
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-4 col-sm-12">
            <h1 class="text-center mb-3">
                Login
            </h1>
        </div>
    </div>

    <form method="POST" id="login-form" action="<?php echo base_url('login/doLogin');?>">
        <?php $this->common_model->showAlertMsg(); ?>
        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-12">
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-12 form-group">
                <label for="login">
                    Login
                </label>
                <input name="email" id="login" value="" class="form-control form-control-lg" required />
                <div class="invalid-feedback">
                    Field required.
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-12 form-group">
                <label for="password">
                    Password
                </label>
                <input type="password" name="password" id="password" value="" class="form-control form-control-lg" required />
                <div class="invalid-feedback">
                    Field required.
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-12 form-group">
                <input type="submit" value="Log In" class="btn btn-lg btn-primary btn-block" />
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-12 form-group text-center">
                <a href="<?php echo base_url('login/reset_password');?>">
                    Forgot password?
                </a>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-12">
                <div class="p-3 border bg-light rounded text-center">
                    Don't have an account?
                    <a href="<?php echo base_url('register');?>">
                        Sign up
                    </a>
                </div>
            </div>
        </div>

    </form>

</div>

</section>
</main>