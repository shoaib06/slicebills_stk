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
    <link rel="shortcut icon" type="image/png" href="https://ppe-userenroll-assets.s3.amazonaws.com/1603217273441" />
    <style>
        :root {
            --primary-color: rgba();
            --primary-color-hover: rgba();
        }

        /* PROGRESS BAR */
        .progress-bar{
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
    <style>
        #chktcpa:checked, #chkterms:checked, #leadid_tcpa_disclosure:checked {
            border: none;
            background: url(<?php echo base_url();?>uploads/check.svg);
            background-size: cover;
        }


    #userinfo_1 h4 {
    text-align: center;
    color: rgb(59 64 68) !important;
    font-size: 24px !important;
    width: 66%;
    display: block;
    margin: 0px auto;
    font-weight: 600;
    line-height: 30px;
}
.custom-control {
    position: relative;
    display: block;
    min-height: 1.5rem;
    padding-left: 1.5rem;
    background: #1d84c1 !important;
    margin: 5px;
    padding-top: 20px;
    border-radius: 6px;
    padding-bottom: 20px;
    width: 320px;
    width: 320px;
    max-width: 80%;
    transform: translate(254px, 10px);
    padding-left: 38px;
}
.form-wrapper-flex label, .tcpa-details label {
    display: block;
    font-size: 1.10rem;
    font-weight: normal;
    color: #fff;
    line-height: .875rem;
    position: relative;
    margin-bottom: 4px;
    cursor: pointer;
}
.custom-control-label::before{
    top: -1px;
}
.bg-img {
    background: url(http://localhost/survey2cash/uploads/banner-img.jpg);
    background-size: calc(100vw + 40px);
    background-repeat: no-repeat;
    padding-top: 5rem;
}
.flow__header h1 {
    color: #000000;
    font-weight: bold;
    font-size: 1.75rem;
    padding-top: 1rem;
    font-family: var(--general-font);
    margin: 0;
}
.flow__header h2 {
    font-family: var(--general-font);
    margin: 0 0 1rem;
    font-size: 1.125rem;
    color: #000000;
    font-weight: 700;
}
.progress-bar {
    background-color: rgb(29 132 193) !important;
}
.footer__light {
    background: #efefef;
    padding-top: 3rem;
    margin-top: 0px;
}
.card-footer {
    display: flex !important;
    justify-content: center !important;
}
.btn-sm {
    background-color: #1d84c1 !important;
    padding: 8px 3.5rem !important;
    color: #fff !important;
    font-size: .900rem;
    line-height: 1.5;
    border: none !important;
    border-radius: 0.2rem;
}
    </style>
</head>

<body>
    <div class="bg-img">
        <div class="container no-padding ">
    <div class="row justify-content-center">
        <div class="col-md-8 col-sm-12">
            <div class="flow__header text-center">
                <h1 id="flowHeader">
                    Take a moment to check out these great partner offers!
                </h1>
                <h2 id="flowSubHeader">
                    Be sure to return back to this page and continue when you’re through!
                </h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="flow__progress">
                <div class="progress-bar">
                    <div class="progress">
                        <span class="" id="progress">
                         <div class="progress-percentage" id="progress-percent"></div>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col">
            <div class="form form--flow">
                <div class="form-wrapper-flex">

                    <form id="formSubmit" action="<?php echo base_url('register/question_submit')?>" method="POST" onsubmit="return validateForm();" >
                        <?php $this->common_model->showAlertMsg(); ?>
                        <div class="container d-flex justify-content-center" style="min-width:720px!important">
                            <div class="col-11 col-offset-2">
                                <div class="card mt-3">
                                    <div class="card-header font-weight-bold">Please answer those question</div>
                                    <input type="hidden" id="number_of_question" name="number_of_question" value="<?php echo $number_of_question;?>">
                                    <input type="hidden" id="token" name="token" value="<?php echo $token;?>">
                                    <?php $count=0; foreach ($question as $key => $value ){ $count++; ?>
                                        <input type="hidden" name="question_id_<?php echo $count;?>" id="question_no_<?php echo $count;?>" value="<?php echo $value->id;?>">

                                        <?php if($key == 0){?>
                                            <div class="card-body p-4 step" id="userinfo_<?php echo $count;?>">
                                                <h4> <?php echo $value->question?></h4>
                                                <?php if($value->correct_explanation != ""){?>
                                                    <p><?php echo $value->correct_explanation?></p>
                                                <?php } ?>
                                                <?php

                                                $answer = $this->db->where('question_id', $value->id)->get('tbl_question_answer')->result();
                                                ?>
                                                <?php foreach ($answer as $answer_key => $answer_value){?>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="customRadioInline_<?php echo $count;?>_<?php echo $answer_value->id;?>" name="answer_id_<?php echo $count;?>" class="custom-control-input" value="<?php echo $answer_value->answer;?>">
                                                        <label class="custom-control-label" for="customRadioInline_<?php echo $count;?>_<?php echo $answer_value->id;?>"><?php echo $answer_value->answer;?></label>
                                                    </div>
                                                <?php } ?>

                                            </div>
                                        <?php }else{ ?>
                                            <div class="card-body p-5 step" style="display: none" id="userinfo_<?php echo $count;?>">
                                                <h4><?php echo $value->question?></h4>
                                                <?php if($value->correct_explanation != ""){?>
                                                    <p><?php echo $value->correct_explanation?></p>
                                                <?php } ?>
                                                <?php

                                                $answer = $this->db->where('question_id', $value->id)->get('tbl_question_answer')->result();
                                                ?>
                                                <?php foreach ($answer as $answer_key => $answer_value){?>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="customRadioInline_<?php echo $count;?>_<?php echo $answer_value->id;?>" name="answer_id_<?php echo $count;?>" class="custom-control-input" value="<?php echo $answer_value->answer;?>">
                                                        <label class="custom-control-label" for="customRadioInline_<?php echo $count;?>_<?php echo $answer_value->id;?>"><?php echo $answer_value->answer;?></label>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        <?php } ?>
                                    <?php } ?>

                                    <div class="card-footer">
                                        <button type="button" class="action back btn btn-sm btn-outline-warning" style="display: none">Back</button>
                                        <button type="button" class="action next btn btn-sm btn-outline-secondary float-end" >Next</button>
                                        <button type="submit" class="action submit btn btn-sm btn-outline-success float-end" style="display: none">Submit</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
    </div>


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
                        <a href="/privacy">
                            Privacy Policy
                        </a>
                    </li>
                    <li>
                        <a href="/terms">
                            Terms &amp; Conditions
                        </a>
                    </li>
                </ul>
                <ul class="ca-navigation">
                    <li>
                        <a href="/opt-out">
                            Do Not Sell My Personal Info
                        </a>
                    </li>
                    <li>
                        <a href="/ca-privacy">
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
<script type="text/javascript" src="<?= base_url('assets/front')?>/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
<script>
    var data = [
        { id:"1", fname:"Tiger", lname:"Noxx", team:'Team 1', address:'Ryecroft Field',   tel:'0494645879'},
        { id:"2", fname:"Garrett", lname:"Pellens", team:'Team 2', address:'Kiln Circus',      tel:'0493658746' },
        { id:"3", fname:"Ashton", lname:"Fox", team:'Team 1', address:'Thurne View',      tel:'0498532546' },
        { id:"4", fname:"Melissa", lname:"Perenboom", team:'Team 3', address:'Thornton Glade',   tel:'0499454891' },
        { id:"5",  fname:"Frankie", lname:"Winters", team:'Team 2', address:'Drayton Brae',     tel:'0494678943' },
        { id:"6", fname:"Benoist", lname:"Muniz", team:'Team 4', address:'Foxglove Lane',    tel:'0492884618' },
        { id:"7", fname:"Kelly", lname:"London", team:'Team 2', address:'Doxford Park Way', tel:'0497978945' },
        { id:"8", fname:"Hope", lname:"Gilmore", team:'Team 3', address:'Bradford Manor',   tel:'0499894125' },
        { id:"9", fname:"Muriel", lname:"Smith", team:'Team 3', address:'Wardle Street',    tel:'0491484215' },
        { id:"10", fname:"Gary", lname:"Hendren", team:'Team 4', address:'Church Street',    tel:'0493596488' },
    ];
    //
    // $('#txt-search').keyup(function(){
    //     $('.next').prop('disabled', true);
    //     var searchField = $(this).val();
    //     if(searchField === '')  {
    //         $('#filter-records').html('');
    //         return;
    //     }
    //     var regex = new RegExp(searchField, "i");
    //     var output = '';
    //     $.each(data, function(key, val){
    //         var fullname = val.fname +' '+ val.lname;
    //         if ((fullname.search(regex) != -1)) {
    //             output += '<li id="' +val.id +'" class="li-search">'+ val.fname +' '+ val.lname +'</li>';
    //         }
    //     });
    //     $('#filter-records').html(output);
    // });

    // $(document).on("click", ".li-search", function () {
    //     $("#txt-search").val($(this).html());
    //     setFormFields($(this).attr("id"));
    //     $("#filter-records").html("");
    //     $(".next").prop("disabled", false);
    // });
    //
    // $(".radio-group .radio").on("click", function () {
    //     $(".selected .fa").removeClass("fa-check");
    //     $(".radio").removeClass("selected");
    //     $(this).addClass("selected");
    //     if ($("#suser").hasClass("selected") == true) {
    //         $(".next").prop("disabled", true);
    //         $(".searchfield").show();
    //     } else {
    //         setFormFields(false);
    //         $(".next").prop("disabled", false);
    //         $("#filter-records").html("");
    //         $(".searchfield").hide();
    //     }
    // });
    var step = 1;
    $(document).ready(function () { stepProgress(step); });

    $(".next").on("click", function () {
        var nextstep = false;
        nextstep = checkForm("answer_id_"+step);
        if (nextstep == true) {
            if (step < $(".step").length) {
                $(".step").show();
                $(".step")
                    .not(":eq(" + step++ + ")")
                    .hide();
                stepProgress(step);
            }
            hideButtons(step);
        }
    });

    // ON CLICK BACK BUTTON
    $(".back").on("click", function () {
        if (step > 1) {
            step = step - 2;
            $(".next").trigger("click");
        }
        hideButtons(step);
    });



    // CALCULATE PROGRESS BAR
    stepProgress = function (currstep) {
        var percent = parseFloat(100 / $(".step").length) * currstep;
        percent = percent.toFixed();
        $(".progress-bar")
            .css("width", percent + "%")
            .html(percent + "%");
    };

    // DISPLAY AND HIDE "NEXT", "BACK" AND "SUMBIT" BUTTONS
    hideButtons = function (step) {
        var limit = parseInt($(".step").length);
        $(".action").hide();
        if (step < limit) {
            $(".next").show();
        }
        if (step > 1) {
            $(".back").show();
        }
        if (step == limit) {
            $(".next").hide();
            $(".submit").show();
        }
    };

    function setFormFields(id) {
        if (id != false) {
            // FILL STEP 2 FORM FIELDS
            d = data.find(x => x.id === id);
            $('#fname').val(d.fname);
            $('#lname').val(d.lname);
            $('#team').val(d.team);
            $('#address').val(d.address);
            $('#tel').val(d.tel);
        } else {
            // EMPTY USER SEARCH INPUT
            $("#txt-search").val('');
            // EMPTY STEP 2 FORM FIELDS
            $('#fname').val('');
            $('#lname').val('');
            $('#team').val('');
            $('#address').val('');
            $('#tel').val('');
        }
    }

    function checkForm(val) {
        var valid = true;
        if (!$("input[name='"+val+"']:checked").val()) {
            alert('Nothing is checked!');
            valid = false;
        }

        // CHECK IF ALL "REQUIRED" FIELD ALL FILLED IN
        //
        // $("#" + val + "input[type=radio][checked]").each(function () {
        //     valid = false;
        // });
        return valid;
    }
    function validateForm(){
        var nextstep = false;
        nextstep = checkForm("answer_id_"+step);
        console.log(nextstep)
        return nextstep;

    }
</script>
<!--<script>-->
<!--    $().ready(function() {-->
<!--        // validate the comment form when it is submitted-->
<!--        $("#formSubmit").validate();-->
<!---->
<!--</script>-->

</body>

</html>
