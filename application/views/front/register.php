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
    <link rel="stylesheet" href="<?= base_url('assets/front') ?>/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets/front') ?>/css/main.css">
    <link rel="stylesheet" href="<?= base_url('assets/front') ?>/css/body.css">


    <link rel="shortcut icon" type="image/png" href="https://ppe-userenroll-assets.s3.amazonaws.com/1603217273441" />
    <style>
        :root {
            --primary-color: rgba();
            --primary-color-hover: rgba();
        }

        /* PROGRESS BAR */

        #progress {
            background-color: rgba(72, 201, 196, 1) !important;
        }

        /* ALL BUTTONS */
        .button:not(.link):not(.inverted),

        .bt-continue,
        .rules__link:hover,
        #optout-form .btn.btn-primary {
            background: var(--primary-color);
        }

        /* ALL BUTTONS HOVER */
        .button:not(.link):not(.inverted):hover,
        ,
        .bt-continue:hover,
        #optout-form .btn.btn-primary:hover {
            background: var(--primary-color-hover);
        }

        /* CUSTOM RADIOS */

        .register__form .radio-box>.path-form-field-with-feedback-control input[type="radio"]+span {
            background-color: rgba(155, 155, 155, 1);
            color: rgba(255, 255, 255, 1) !important;
            border-radius: 4rem !important;
            border: 1px solid rgba(155, 155, 155, 1) !important;
            text-align: center !important;
            padding: .625rem 1.5rem .75rem 1.5rem !important;
        }

        .register__form .radio-box>.path-form-field-with-feedback-control input[type="radio"]:hover+span,
        .register__form .radio-box>.path-form-field-with-feedback-control input[type="radio"]:checked+span {
            background-color: rgba(213, 32, 32, 1) !important;
            color: rgba(255, 255, 255, 1) !important;
        }

        .register__form .custom-label label {
            color: rgba(0, 0, 0, 1) !important;
            text-align: left !important;
            font-weight: bold;
            font-size: 1.5rem !important;
        }

        /* TCPA */

        .tcpa-questionary .tcpa-answers {
            flex-wrap: wrap;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .tcpa-item-answer,
        .tcpa-continue-container button {
            width: 320px;
            max-width: 80%;
        }

        .tcpa-questionary[data-multiple="true"] .tcpa-answers {
            flex-direction: column;
        }

        .tcpa-questionary-form .tcpa-question {
            color: rgba(65, 77, 88, 1) !important;
            font-size: 24px !important;
        }

        .tcpa-answer:not(.multiple),
        .tcpa-answer-in {
            background: rgba(72, 201, 196, 1) !important;
            border-radius: 4px !important;
            padding: 20px !important;
            font-family: var(--general-font);
            font-size: 20px !important;
            color: rgba(255, 255, 255, 1) !important;
            box-shadow: none !important;
            border: 0px solid transparent !important;
        }

        .tcpa-answer:not(.multiple):hover,
        .tcpa-answer-in:hover {
            background: rgba(54, 183, 180, 1) !important;
        }

        .tcpa-answer[data-id="false"]:not(.multiple),
        .tcpa-answer[data-id="no"]:not(.multiple) {
            background: rgba(240, 240, 240, 1) !important;
            border-radius: 4px !important;
            padding: 20px !important;
            font-family: var(--general-font);
            font-size: 20px !important;
            color: rgba(255, 255, 255, 1) !important;
            box-shadow: none !important;
            border: 0px solid transparent !important;

        }

        .tcpa-answer[data-id="false"]:not(.multiple):hover,
        .tcpa-answer[data-id="no"]:not(.multiple):hover {
            background: rgba(244, 240, 240, 1) !important;
        }

        .tcpa-answer[data-id="true"]:not(.multiple) {
            background: rgba(72, 201, 196, 1) !important;
            border-radius: 4px !important;
            padding: 20px !important;
            font-family: var(--general-font);
            font-size: 20px !important;
            color: rgba(255, 255, 255, 1) !important;
            box-shadow: none !important;
            border: 0px solid transparent !important;

        }

        .tcpa-answer[data-id="true"]:not(.multiple):hover {
            background: rgba(54, 183, 180, 1) !important;
        }

        .userenroll-next {
            background: rgba() !important;
            border-radius:  !important;
            padding:  !important;
            font-family: var(--general-font);
            font-size:  !important;
            color: rgba() !important;
            box-shadow:  !important;
            border:  !important;
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
            border:  !important;
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

    <style>
        #chktcpa:checked,
        #chkterms:checked,
        #leadid_tcpa_disclosure:checked {
            border: none;
            background: url(<?php echo base_url(); ?>uploads/check.svg);
            background-size: cover;
        }
    </style>

    <!-- my css -->
    <style>
        .step__icon svg {
    padding: 24px;
    width: 100%;
    fill: #ffffff;
    stroke: #ffffff;
    stroke-width: 0.5px;
}
.step__icon{
    background: linear-gradient(#1d84c1, #1d84c1);
}


    </style>
</head>

<body>
    <?php $image =  $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'website_logo')); ?>
    <main class="flow flow--form">


        <div class="container no-padding">

            <div class="row no-gutters justify-content-center">
                <div class="col-6">
                    <div class="header">
                        <h1>Get Paid for<br>Your Opinions</h1>
                    </div>
                </div>
            </div>

            <div class="row no-gutters justify-content-center">
                <div class="col-md-6 col-sm-12">
                    <div class="form register__form">

                        <div class="form__header">
                            <div>
                                <span> Sign Up to Start Earning Today! </span><span> Earn On Your First Survey - Today! </span>
                            </div>
                            <img src="<?php echo base_url('uploads/' . $image) ?>" />
                        </div>

                        <div class="form__body">

                            <div class="form-wrapper-flex">
                                <form id="formSubmit" action="<?php echo base_url('register/submit') ?>" method="POST">

                                    <?php if ($this->session->flashdata('success')) : ?>
                                        <div class="success-msg">
                                            <i class="fa fa-check"></i>
                                            <?php echo $this->session->flashdata('success'); ?>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($this->session->flashdata('error')) : ?>
                                        <div class="error-msg" style="color: red">
                                            <i class="fa fa-times-circle"></i>
                                            <?php echo $this->session->flashdata('error'); ?>
                                        </div>
                                    <?php endif; ?>
                                    <div id="f1" class="dynamic-form form-step form1 form1-1  ">
                                        <div class="row row-spacing" data-row-id="1">
                                            <div id='col-field-title' class="col title form-field-col" data-col-id="1" data-autohide="">
                                                <label class="label">Title</label>

                                                <select id="gender" name="gender" class="" required>
                                                    <option value="">
                                                        Select Title
                                                    </option>
                                                    <option value="Mr">Mr.</option>
                                                    <option value="Ms">Ms.</option>
                                                    <option value="Mrs">Mrs.</option>
                                                </select>


                                            </div>
                                        </div>
                                        <div class="row row-spacing" data-row-id="2">
                                            <div id='col-field-first_name' class="col first-name form-field-col" data-col-id="1" data-autohide="">
                                                <label class="label">First Name</label>

                                                <input id="first_name" type="text" name="first_name" class="path-form-field-with-feedback path-dynamic-field required" value="">
                                                <span id='first_name-error-feedback' class="invalid-feedback  path-form-feedback"></span>

                                            </div>
                                            <div id='col-field-last_name' class="col last-name form-field-col" data-col-id="2" data-autohide="">
                                                <label class="label">Last Name</label>

                                                <input id="last_name" type="text" name="last_name" class="path-form-field-with-feedback path-dynamic-field required" value="">
                                                <span id='last_name-error-feedback' class="invalid-feedback  path-form-feedback"></span>

                                            </div>
                                        </div>
                                        <div class="row row-spacing" data-row-id="3">
                                            <div id='col-field-email' class="col e-mail-required form-field-col" data-col-id="1" data-autohide="">
                                                <label class="label">Email</label>

                                                <input id="email" type="email" name="email" class="path-form-field-with-feedback path-dynamic-field required" data-session-verification="-1" value="">
                                                <span id="emailmessage" class="invalid-feedback  path-form-feedback"></span>

                                            </div>
                                        </div>
                                        <div class="row row-spacing" data-row-id="4">
                                            <div id='col-field-address1' class="col-8 address-1 form-field-col" data-col-id="1" data-autohide="">
                                                <label class="label">Street Address</label>

                                                <input id="addressform" type="text" name="address" value="" class="path-dynamic-field path-form-field-with-feedback required" placeholder="Enter your address" autocomplete="address-line1">
                                                <span id='address1-error-feedback' class="invalid-feedback  path-form-feedback invalid-postal"></span>
                                                <!-- <input id="address1" type="" name="address1" value=""> -->
                                            </div>
                                            <div id='col-field-address2' class="col-4 address-2 form-field-col" data-col-id="2" data-autohide="">
                                                <label class="label">Apt</label>

                                                <input id="address2" type="text" name="apt" value="" class="path-form-field-with-feedback path-dynamic-field " autocomplete="address-line2">
                                                <span id='address2-error-feedback' class="invalid-feedback  path-form-feedback"></span>

                                            </div>
                                        </div>
                                        <div class="row row-spacing" data-row-id="5">
                                            <div id='col-field-city' class="col city form-field-col" data-col-id="1" data-autohide="">
                                                <label class="label">City</label>

                                                <input id="city" type="text" name="city" value="" class="path-form-field-with-feedback path-dynamic-field required" autocomplete="address-level2">
                                                <span id='city-error-feedback' class="invalid-feedback  path-form-feedback"></span>

                                            </div>
                                        </div>
                                        <div class="row row-spacing" data-row-id="6">
                                            <div id='col-field-state' class="col state form-field-col" data-col-id="1" data-autohide="">
                                                <label class="label">State</label>

                                                <select id="state" name="state" class='path-form-field-with-feedback path-dynamic-field required' value="" datavalue="">
                                                    <option value="">
                                                        Select State
                                                    </option>
                                                    <option value="Alabama">Alabama</option>
                                                    <option value="Alaska">Alaska</option>
                                                    <option value="Arizona">Arizona</option>
                                                    <option value="Arkansas">Arkansas</option>
                                                    <option value="California">California</option>
                                                    <option value="Colorado">Colorado</option>
                                                    <option value="Connecticut">Connecticut</option>
                                                    <option value="Delaware">Delaware</option>
                                                    <option value="District Of Columbia">District Of Columbia</option>
                                                    <option value="Florida">Florida</option>
                                                    <option value="Georgia">Georgia</option>
                                                    <option value="Hawaii">Hawaii</option>
                                                    <option value="Idaho">Idaho</option>
                                                    <option value="Illinois">Illinois</option>
                                                    <option value="Indiana">Indiana</option>
                                                    <option value="Iowa">Iowa</option>
                                                    <option value="Kansas">Kansas</option>
                                                    <option value="Kentucky">Kentucky</option>
                                                    <option value="Louisiana">Louisiana</option>
                                                    <option value="Maine">Maine</option>
                                                    <option value="Maryland">Maryland</option>
                                                    <option value="Massachusetts">Massachusetts</option>
                                                    <option value="Michigan">Michigan</option>
                                                    <option value="Minnesota">Minnesota</option>
                                                    <option value="Mississippi">Mississippi</option>
                                                    <option value="Missouri">Missouri</option>
                                                    <option value="Montana">Montana</option>
                                                    <option value="Nebraska">Nebraska</option>
                                                    <option value="Nevada">Nevada</option>
                                                    <option value="New Hampshire">New Hampshire</option>
                                                    <option value="New Jersey">New Jersey</option>
                                                    <option value="New Mexico">New Mexico</option>
                                                    <option value="New York">New York</option>
                                                    <option value="North Carolina">North Carolina</option>
                                                    <option value="North Dakota">North Dakota</option>
                                                    <option value="Ohio">Ohio</option>
                                                    <option value="Oklahoma">Oklahoma</option>
                                                    <option value="Oregon">Oregon</option>
                                                    <option value="Pennsylvania">Pennsylvania</option>
                                                    <option value="Rhode Island">Rhode Island</option>
                                                    <option value="South Carolina">South Carolina</option>
                                                    <option value="South Dakota">South Dakota</option>
                                                    <option value="Tennessee">Tennessee</option>
                                                    <option value="Texas">Texas</option>
                                                    <option value="Utah">Utah</option>
                                                    <option value="Vermont">Vermont</option>
                                                    <option value="Virginia">Virginia</option>
                                                    <option value="Washington">Washington</option>
                                                    <option value="West Virginia">West Virginia</option>
                                                    <option value="Wisconsin">Wisconsin</option>
                                                    <option value="Wyoming">Wyoming</option>
                                                </select>
                                                <span id='state-error-feedback' class="invalid-feedback  path-form-feedback"></span>

                                            </div>
                                            <div id='col-field-zip' class="col-4 zip-code form-field-col" data-col-id="2" data-autohide="">
                                                <label class="label">Zip Code</label>

                                                <input id="zip" type="text" name="zip" maxlength="5" data-session-verification="-1" value="" class="path-form-field-with-feedback required path-dynamic-field" pattern="[0-9]*" inputmode="numeric" autocomplete="postal-code">
                                                <span id='zip-error-feedback' class="invalid-feedback  path-form-feedback"></span>

                                            </div>
                                        </div>
                                        <div class="row row-spacing" data-row-id="7">
                                            <div id='col-field-phone' class="col phone form-field-col" data-col-id="1" data-autohide="">
                                                <label class="label">Phone</label>

                                                <input id="phone" type="tel" name="phone" data-session-verification="-1" value="" class="path-dynamic-field path-form-field-with-feedback required" pattern="[0-9]*" inputmode="numeric" autocomplete="tel-national">
                                                <span id='phone-error-feedback' class="invalid-feedback  path-form-feedback invalid-phone"></span>

                                            </div>
                                        </div>
                                        <div class="row row-spacing" data-row-id="8">
                                            <div id='col-field-dob' class="col date-of-birth form-field-col" data-col-id="1" data-autohide="">
                                                <label class="label">Date of Birth</label>
                                                <input id="dob" type="date" name="dob" value="" class="path-dynamic-field path-form-field-with-feedback required">

                                                <span id="dobmessage" class="invalid-feedback  path-form-feedback"></span>

                                            </div>
                                        </div>
                                        <div class="row row-spacing" data-row-id="8">
                                            <div id='col-field-dob' class="col date-of-birth form-field-col" data-col-id="1" data-autohide="">
                                                <label class="label">Password</label>
                                                <input id="password" type="password" name="password" value="" class="path-dynamic-field path-form-field-with-feedback required">

                                                <span id="password" class="invalid-feedback  path-form-feedback"></span>

                                            </div>
                                        </div>
                                        <div class="row row-spacing" data-row-id="9">
                                            <div id='col-field-registration_consent' class="col registration-consent form-field-col" data-col-id="1" data-autohide="">


                                                <div class="terms">
                                                    <input type="checkbox" class="chkbox path-dynamic-field" id="chkterms" name="chkterms" required>
                                                    <label class="term-label terms-label--checkbox" for="chkterms">
                                                        By clicking "Continue" below, I agree that I am a US resident over the age of 18 and agree to the <a href="<?php echo base_url(); ?>front/terms_conditions" target="_blank">Terms of Use</a> and <a href="<?php echo base_url(); ?>front/privacy_policy" target="_blank">Privacy Policy</a>,
                                                        and I agree to receiving relevant Surveys2Cash, Shopgala and ResearchUnlimitedInc emails.
                                                    </label>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="row row-spacing" data-row-id="10">
                                            <div id='col-field-tcpa_consent' class="col tcpa-consent form-field-col" data-col-id="1" data-autohide="">


                                                <div class="tcpa-terms">
                                                    <input type="checkbox" class="chkbox path-dynamic-field" id="leadid_tcpa_disclosure" name="chktcpa" required>
                                                    <label class="term-label" for="leadid_tcpa_disclosure">
                                                        By checking the box I consent to receive phone sales calls or SMS text messages - Msg and data rates may
                                                        apply - from Surveys2Cash on the landline or mobile number I provided even if I am on the federal or state
                                                        do not call registry. I understand these calls and SMS text messages may be generated using an autodialer
                                                        and may contain pre-recorded messages and that consenting is not required to participate in the offers
                                                        promoted. I understand that I may revoke consent at any time. Text STOP to opt out and HELP to receive
                                                        help.
                                                    </label>



                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="x-12 col-mobile center">

                                            <button class="btn form-button submitbutton form-submit-button " type="submit" id="submitbutton">
                                                <span>CONTINUE</span>
                                                <i class="fa fa-spinner fa-spin"></i>
                                            </button>
                                        </div>
                                    </div>

                                </form>
                                <div class="clear"></div>
                                <div class="remodal" data-remodal-id="modal" style="display:none;">
                                    <button data-remodal-action="close" class="remodal-close"></button>
                                    <h1>Marketing Partners </h1>
                                    <div style="text-align:left;">
                                        <p>Surveys2Cash.com is currently or has previously entered into strategic relationships with various partner
                                            companies "Marketing Partners" in an effort to help fulfill the requests you have made on our website
                                            concerning various deals, offers, or opportunities (the "Offers"). By requesting such information you are
                                            providing a digital signature and expressly consenting to receiving a phone call and/or SMS/Text Messages
                                            from such Marketing Partners, at the phone number provided on our signup page regarding financial, home,
                                            travel, energy, home warranty, digital services and health products. In an effort to be as transparent as
                                            possible, below we have aggregated a list of our current marketing partners who may be in contact with you
                                            based on the Offers you have asked to receive more information about.</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="form__about">
                            <div class="form__about__item">
                                <img class="img-fluid" src="<?php base_url() ?>uploads/star.png" alt="">
                                <div>
                                    <h2>
                                        Sign Up for Free!
                                    </h2>
                                    <p>
                                        Create an account by registering and providing a password.
                                    </p>
                                </div>
                            </div>
                            <div class="form__about__item">
                                <img class="img-fluid" src="<?php base_url() ?>uploads/chat.png" alt="">
                                <div>
                                    <h2>
                                        Review Our Optional Questionnaire
                                    </h2>
                                    <p>
                                        Once you have compeleted our registration, please take our sponsored questionnaire. This is not required.
                                    </p>
                                </div>
                            </div>
                            <div class="form__about__item">
                                <img class="img-fluid" src="<?php base_url() ?>uploads/money.png" alt="">
                                <div>
                                    <h2>
                                        Get Paid!
                                    </h2>
                                    <p>
                                        Take surveys by completing the questionnaire OR using the Surveys link in the navigation icon.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>






        <section class="steps__wrapper">
            <div class="container">
                <h1 class="text-center spacing spacing--2">
                    How It Works
                </h1>
                <div class="steps">
                    <div class="step line">
                        <div class="step__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M21,4.41l.71-.7a1,1,0,1,0-1.42-1.42L18.89,3.7h0L16.06,6.53h0L9.75,12.83a5,5,0,1,0,1.42,1.42l5.59-5.6,2.12,2.13a1,1,0,1,0,1.41-1.42L18.17,7.24l1.42-1.41.7.7a1,1,0,1,0,1.42-1.41ZM7,20a3,3,0,1,1,3-3A3,3,0,0,1,7,20Z" />
                            </svg>
                        </div>
                        <div class="step__text">
                            Sign up<br />
                            <small>
                                Register and provide a password to create an account.
                            </small>
                        </div>
                    </div>
                    <div class="step line">
                        <div class="step__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M20.71,16.71l-2.42-2.42a1,1,0,0,0-1.42,0l-3.58,3.58a1,1,0,0,0-.29.71V21a1,1,0,0,0,1,1h2.42a1,1,0,0,0,.71-.29l3.58-3.58A1,1,0,0,0,20.71,16.71ZM16,20H15V19l2.58-2.58,1,1Zm-6,0H6a1,1,0,0,1-1-1V5A1,1,0,0,1,6,4h5V7a3,3,0,0,0,3,3h3v1a1,1,0,0,0,2,0V9s0,0,0-.06a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19.32.32,0,0,0-.09,0L12.06,2H6A3,3,0,0,0,3,5V19a3,3,0,0,0,3,3h4a1,1,0,0,0,0-2ZM13,5.41,15.59,8H14a1,1,0,0,1-1-1ZM8,14h6a1,1,0,0,0,0-2H8a1,1,0,0,0,0,2Zm0-4H9A1,1,0,0,0,9,8H8a1,1,0,0,0,0,2Zm2,6H8a1,1,0,0,0,0,2h2a1,1,0,0,0,0-2Z" />
                            </svg>
                        </div>
                        <div class="step__text">
                            Complete our Optional Questionnaire, this is not a paying survey<br />
                            <small>
                                Some of these questions may be sponsored by our advertising partners.
                            </small>
                        </div>
                    </div>
                    <div class="step line">
                        <div class="step__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24">
                                <path d="M13.64,9.74l-.29,1.73A1.55,1.55,0,0,0,14,13a1.46,1.46,0,0,0,1.58.09L17,12.28l1.44.79A1.46,1.46,0,0,0,20,13a1.55,1.55,0,0,0,.63-1.51l-.29-1.73,1.2-1.22a1.54,1.54,0,0,0-.85-2.6l-1.62-.24-.73-1.55a1.5,1.5,0,0,0-2.72,0l-.73,1.55-1.62.24a1.54,1.54,0,0,0-.85,2.6Zm1.83-2.13a1.51,1.51,0,0,0,1.14-.85L17,5.93l.39.83a1.55,1.55,0,0,0,1.14.86l1,.14-.73.74a1.57,1.57,0,0,0-.42,1.34l.16,1-.79-.43a1.48,1.48,0,0,0-1.44,0l-.79.43.16-1a1.54,1.54,0,0,0-.42-1.33l-.73-.75ZM21,15.26a1,1,0,0,0-1,1v3a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V9.67l5.88,5.88a2.94,2.94,0,0,0,2.1.88l.27,0a1,1,0,0,0,.91-1.08,1,1,0,0,0-1.09-.91.94.94,0,0,1-.77-.28L5.41,8.26H9a1,1,0,0,0,0-2H5a3,3,0,0,0-3,3v10a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3v-3A1,1,0,0,0,21,15.26Z" />
                            </svg>
                        </div>
                        <div class="step__text">
                            View and Receive<br />
                            Specialized Offers<br />
                            <small>
                                If an offer interest you great! If not, simply pass on it. This helps keep the site free.
                            </small>
                        </div>
                    </div>
                    <div class="step">
                        <div class="step__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M22,17H2a1,1,0,0,0,0,2H22a1,1,0,0,0,0-2Zm0,4H2a1,1,0,0,0,0,2H22a1,1,0,0,0,0-2ZM6,7A1,1,0,1,0,7,8,1,1,0,0,0,6,7ZM20,1H4A3,3,0,0,0,1,4v8a3,3,0,0,0,3,3H20a3,3,0,0,0,3-3V4A3,3,0,0,0,20,1Zm1,11a1,1,0,0,1-1,1H4a1,1,0,0,1-1-1V4A1,1,0,0,1,4,3H20a1,1,0,0,1,1,1ZM12,5a3,3,0,1,0,3,3A3,3,0,0,0,12,5Zm0,4a1,1,0,1,1,1-1A1,1,0,0,1,12,9Zm6-2a1,1,0,1,0,1,1A1,1,0,0,0,18,7Z" />
                            </svg>
                        </div>
                        <div class="step__text">
                            Take surveys<br />
                            <small>
                                Take surveys by completing the questionnaire OR using the Surveys link in the navigation icon.
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--    <script src="/assets/js/remodal.min.js"></script>-->
    </main>

    <footer class="footer footer__light">
        <div class="container">
            <div class="row">
                <div class="col">
                    <small>
                        Surveys2Cash administers this website (collectively “Surveys2Cash”). By entering your email address and clicking
                        &quot;Continue&quot;, you agree to receive information in electronic (including email) or physical formats from
                        Surveys2Cash and/or trusted third parties containing promotions and other special Offers and that Surveys2Cash may
                        provide your email address and corresponding information to such third parties. If you do not wish to continue
                        receiving such emails, you may unsubscribe at any time by following the instructions included in each newsletter
                        or email. In addition we honor &quot;Do Not Sell My Personal Info&quot; from consumers from any state.
                        Surveys2Cash provides a third party survey widget and are not responsible for the participation terms or payments
                        by the provider of the survey widget. We also aggregate third-party Offers such as surveys, sweepstakes, free
                        samples, deals, coupons, freebies and other Offers (collectively &quot;Offers&quot;) to present to you the user
                        while being a registered user of our site. Surveys2Cash is not responsible for the participation terms or payments
                        by these Offers. No Offer participation or purchase is necessary to access the survey widget. To access our
                        partner survey widget you must complete the Surveys2Cash registration page providing your name, address, date of
                        birth, phone and email address and provide a password. Once you have provided a password you will be shown our
                        sponsored questionnaire and offers. The sponsored questionnaire and offers are not required to access the survey
                        widget. You may skip the questionnaire and offers by clicking the navigation icon and selecting Surveys. Upon
                        choosing a survey you will be redirected to the respective survey website that is responsible for management and
                        fulfillment of the selected survey. Surveys2Cash does not have any control over the content and performance of
                        such third-party websites and respective surveys. We cannot guarantee that you will receive any compensation for
                        these surveys or fulfillment of Offers that you request. We are not responsible if such surveys or Offers are no
                        longer available, change, if you do not receive the Offers, if you do not qualify for the surveys or Offers, or if
                        any other issues arise. The third-party product names, logos, brands, and trademarks shown on this website are the
                        property of their respective owners. These companies are not affiliated with Surveys2Cash. In exception of our
                        partner survey widget provider, other third parties do not sponsor or endorse this website, its content or
                        services.
                    </small>
                </div>
            </div>
            <div class="row text-center">
                <div class="col">
                    <ul>
                        <li>
                            <a href="<?php echo base_url(); ?>">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>front/terms_conditions">
                                Terms &amp; Conditions
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>front/privacy_policy">
                                Privacy Policy
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>front/unsub">
                                Unsubscribe
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>login">
                                Login
                            </a>
                        </li>
                    </ul>
                    <ul class="ca-navigation">
                        <li>
                            <a href="<?php echo base_url(); ?>front/optout">
                                Do Not Sell My Personal Info
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>front/ca_privacy_policy">
                                Privacy Policy
                            </a>
                        </li>
                        <span>
                            CA Consumers:
                        </span>
                    </ul>
                    <span>
                        Copyright © 2021 Survey2Cash. All Rights Reserved.
                    </span>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="<?= base_url('assets/front') ?>/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <!---->
    <!--<script type="text/javascript" src="--><?php //= base_url('assets/front')
                                                ?>
    <!--/js/deal.js"></script>-->
    <!--<script type="text/javascript" src="--><?php //= base_url('assets/front')
                                                ?>
    <!--/js/navbar.js"></script>-->
    <script>
        // $.validator.setDefaults({
        //     // submitHandler: function() {
        //     //     alert("submitted!");
        //     // }
        // });

        $().ready(function() {
            // validate the comment form when it is submitted
            $("#formSubmit").validate();

            // // validate signup form on keyup and submit
            // $("#signupForm").validate({
            //     rules: {
            //         firstname: "required",
            //         lastname: "required",
            //         username: {
            //             required: true,
            //             minlength: 2
            //         },
            //         password: {
            //             required: true,
            //             minlength: 5
            //         },
            //         confirm_password: {
            //             required: true,
            //             minlength: 5,
            //             equalTo: "#password"
            //         },
            //         email: {
            //             required: true,
            //             email: true
            //         },
            //         topic: {
            //             required: "#newsletter:checked",
            //             minlength: 2
            //         },
            //         agree: "required"
            //     },
            //     messages: {
            //         firstname: "Please enter your firstname",
            //         lastname: "Please enter your lastname",
            //         username: {
            //             required: "Please enter a username",
            //             minlength: "Your username must consist of at least 2 characters"
            //         },
            //         password: {
            //             required: "Please provide a password",
            //             minlength: "Your password must be at least 5 characters long"
            //         },
            //         confirm_password: {
            //             required: "Please provide a password",
            //             minlength: "Your password must be at least 5 characters long",
            //             equalTo: "Please enter the same password as above"
            //         },
            //         email: "Please enter a valid email address",
            //         agree: "Please accept our policy",
            //         topic: "Please select at least 2 topics"
            //     }
            // });
            //
            // // propose username by combining first- and lastname
            // $("#username").focus(function() {
            //     var firstname = $("#firstname").val();
            //     var lastname = $("#lastname").val();
            //     if (firstname && lastname && !this.value) {
            //         this.value = firstname + "." + lastname;
            //     }
            // });
            //
            // //code to hide topic selection, disable for demo
            // var newsletter = $("#newsletter");
            // // newsletter topics are optional, hide at first
            // var inital = newsletter.is(":checked");
            // var topics = $("#newsletter_topics")[inital ? "removeClass" : "addClass"]("gray");
            // var topicInputs = topics.find("input").attr("disabled", !inital);
            // // show when newsletter is checked
            // newsletter.click(function() {
            //     topics[this.checked ? "removeClass" : "addClass"]("gray");
            //     topicInputs.attr("disabled", !this.checked);
            // });
        });
    </script>
    <!--<script>-->
    <!--    function validateEmail(email) {-->
    <!--        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;-->
    <!--        return re.test(String(email).toLowerCase());-->
    <!--    }-->
    <!--</script>-->
    <!--<script>-->
    <!--    function validate() {-->
    <!--        var isError = false;-->
    <!---->
    <!--        var genderTitleError = document.getElementById('gender-title-error-feedback').value;-->
    <!--        var firstNameError= document.getElementById('first_name-error-feedback').value;-->
    <!--        var lastNameError = document.getElementById('last_name-error-feedback').value;-->
    <!--        var emailmessage = document.getElementById('emailmessage').value;-->
    <!--        var address1Error = document.getElementById('address1-error-feedbac').value;-->
    <!--        var address2Error = document.getElementById('address2-error-feedback').value;-->
    <!--        var cityError = document.getElementById('city-error-feedback').value;-->
    <!--        var stateError = document.getElementById('state-error-feedback').value;-->
    <!--        var zipError = document.getElementById('zip-error-feedback').value;-->
    <!--        var phoneError = document.getElementById('phone-error-feedback').value;-->
    <!--        var dobmessage = document.getElementById('dobmessage').value;-->
    <!--        var password = document.getElementById('password').value;-->
    <!--        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;-->
    <!---->
    <!---->
    <!--        if (genderTitleError == '') {-->
    <!--            document.getElementById('gender-title-error-feedback').innerHTML = 'Please select title';-->
    <!--            isError = true;-->
    <!--        }-->
    <!---->
    <!--        if (!isNaN(firstNameError)) {-->
    <!--            document.getElementById('first_name-error-feedback').innerHTML = 'Please provide valid first name';-->
    <!--            isError = true;-->
    <!--        } else {-->
    <!--            document.getElementById('first_name-error-feedback').innerHTML = '';-->
    <!--        }-->
    <!--        if (!isNaN(lastNameError)) {-->
    <!--            document.getElementById('last_name-error-feedback').innerHTML = 'Please provide valid last name';-->
    <!--            isError = true;-->
    <!--        } else {-->
    <!--            document.getElementById('last_name-error-feedback').innerHTML = '';-->
    <!--        }-->
    <!--        if (emailmessage == '') {-->
    <!--            document.getElementById('address2-error-feedback').innerHTML = 'Please provide address';-->
    <!--            isError = true;-->
    <!--        }-->
    <!--        if (address1Error == '') {-->
    <!--            document.getElementById('city-error-feedback').innerHTML = 'Please provide city';-->
    <!--            isError = true;-->
    <!--        }-->
    <!--        if (address2Error == '') {-->
    <!--            document.getElementById('state-error-feedback').innerHTML = 'Please select state';-->
    <!--            isError = true;-->
    <!--        }-->
    <!--        if (cityError == '') {-->
    <!--            document.getElementById('zip-error-feedback').innerHTML = 'Please provide zip';-->
    <!--            isError = true;-->
    <!--        }-->
    <!--        if (stateError == '') {-->
    <!--            document.getElementById('phone-error-feedback').innerHTML = 'Please provide phone no';-->
    <!--            isError = true;-->
    <!--        }if (zipError == '') {-->
    <!--            document.getElementById('dobmessage').innerHTML = 'Please provide DOB';-->
    <!--            isError = true;-->
    <!--        }if (phoneError == '') {-->
    <!--            document.getElementById('password').innerHTML = 'Please provide password';-->
    <!--            isError = true;-->
    <!--        }if (dobmessage == '') {-->
    <!--            document.getElementById('emailmessageemailmessage').innerHTML = 'Please provide email';-->
    <!--            isError = true;-->
    <!--        }if (password == '') {-->
    <!--            document.getElementById('address1-error-feedback').innerHTML = 'Please provide address';-->
    <!--            isError = true;-->
    <!--        }-->
    <!--        console.log(isError);-->
    <!--        return !isError;-->
    <!--    }-->
    <!--    function validateUnsubEmail() {-->
    <!--        var isError = false;-->
    <!--        var femail = document.getElementById('email').value;-->
    <!--        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;-->
    <!---->
    <!---->
    <!--        if (femail == '') {-->
    <!--            document.getElementById('email-er').innerHTML = 'Please provide email';-->
    <!--            isError = true;-->
    <!--        }-->
    <!--        if (femail.match(mailformat)) {-->
    <!--            document.getElementById('email-er').innerHTML = '';-->
    <!--        } else {-->
    <!--            document.getElementById('email-er').innerHTML = 'Please provide valid email';-->
    <!--            isError = true;-->
    <!--        }-->
    <!---->
    <!--        return !isError;-->
    <!--    }-->
    <!--</script>-->
</body>

</html>