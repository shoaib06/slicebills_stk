<section>
    <div class="container">
        <div class="main-txt">
            <h1>Thousands Of Americans Are Getting Out Of Debt Using Their Consumer Rights!</h1>
            <p>Take this 20-second survey and see your results instantly!</p>
            <p>No SSN Required • Takes Just 20 Seconds • Won’t Hurt Your Credit Score To Check</p>
            <h2>What Type of Debt Do You Have?</h2>
        </div>
    </div>

</section>
<form id="contact-form" role="form" action="<?php echo base_url('agent/leadsSubmit'); ?>" method="post">
    <div class="container">
        <?php $this->common_model->showAlertMsg(); ?>
        <div class="row">
            <div class="col-md-12">
                <div id="errorTxt"></div>

            </div>
        </div>
        <div class="row">


            <div class="col-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Collections" name="debt_type[]" id="flexCheckDefaultdebttype1">
                    <label class="form-check-label" for="flexCheckDefaultdebttype1">

                        Collections
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Auto Loan" name="debt_type[]" id="flexCheckDefaultdebttype2">
                    <label class="form-check-label" for="flexCheckDefaultdebttype2">
                        Auto Loan
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Credit Card" name="debt_type[]" id="flexCheckDefaultdebttype13">
                    <label class="form-check-label" for="flexCheckDefaultdebttype13">

                        Credit Card
                    </label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Medical Bills" name="debt_type[]" id="flexCheckDefaultdebttype3">
                    <label class="form-check-label" for="flexCheckDefaultdebttype3">
                        Medical Bills
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Student Debt" name="debt_type[]" id="flexCheckDefaultdebttype4">
                    <label class="form-check-label" for="flexCheckDefaultdebttype4">
                        Student Debt
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Other" name="debt_type[]" id="flexCheckDefault7">
                    <label class="form-check-label" for="flexCheckDefault7">
                        Other
                    </label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Personal Loans" name="debt_type[]" id="flexCheckDefaultdebttype5">
                    <label class="form-check-label" for="flexCheckDefaultdebttype5">
                        Personal Loans
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Secured Debts" name="debt_type[]" id="flexCheckDefaultdebttype6">
                    <label class="form-check-label" for="flexCheckDefaultdebttype6">
                        Secured Debts
                    </label>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-4">

            </div>

            <div class="col-md-4">

            </div>
        </div>

    </div>

    <section>
        <div class="container">
            <h2 class="about">About How Much Total Debt Do You Have?</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" name="debt_amount" type="radio" value="15000" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault" style="text-align: center;">
                            $10,000 – $19,999
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="debt_amount" type="radio" value="65000" id="flexCheckDefault2">
                        <label class="form-check-label" for="flexCheckDefault2" style="text-align: center;">
                            $60,000 – 69,999
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="debt_amount" type="radio" value="25000" id="flexCheckDefault3">
                        <label class="form-check-label" for="flexCheckDefault3" style="text-align: center;">
                            $20,000 – $29,999
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="debt_amount" type="radio" value="75000" id="flexCheckDefault4">
                        <label class="form-check-label" for="flexCheckDefault4" style="text-align: center;">
                            $70,000 – $79,999
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="debt_amount" type="radio" value="35000" id="flexCheckDefault5">
                        <label class="form-check-label" for="flexCheckDefault5" style="text-align: center;">
                            $30,000 – $39,999
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="debt_amount" type="radio" value="85000" id="flexCheckDefault6">
                        <label class="form-check-label" for="flexCheckDefault6" style="text-align: center;">
                            $80,000 – $89,999
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" name="debt_amount" type="radio" value="45000" id="flexCheckDefault7">
                        <label class="form-check-label" for="flexCheckDefault7" style="text-align: center;">
                            $40,000 – $49,999
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="debt_amount" type="radio" value="95000" id="flexCheckDefault8">
                        <label class="form-check-label" for="flexCheckDefault8" style="text-align: center;">
                            $90,000 – $99,999
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="debt_amount" type="radio" value="55000" id="flexCheckDefault9">
                        <label class="form-check-label" for="flexCheckDefault9" style="text-align: center;">
                            $50,000 – $59,999
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="debt_amount" type="radio" value="95000" id="flexCheckDefault10">
                        <label class="form-check-label" for="flexCheckDefault10" style="text-align: center;">
                            $90,000 – $99,999
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" name="debt_amount" type="radio" value="100000" id="flexCheckDefault12">
                        <label class="form-check-label" for="flexCheckDefault12" style="text-align: center;">
                            $100,000+
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="forms">


        <div class="container">
            <div class=" text-center mt-5 ">
            </div>
            <div class="row ">
                <div class="col-lg-12V mx-auto">
                    <div class="card mt-2 mx-auto p-4 ">
                        <div class="card-body bg-light">

                            <div class="container">

                                <div class="controls">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input id="form_name" type="text" name="first_name" class="form-control" placeholder="Please enter your First Name *" data-error="Firstname is required.">

                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input id="form_last_name" type="text" name="last_name" class="form-control" placeholder="Please enter your Last Name *" data-error="Firstname is required.">

                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">

                                                <input id="form_phonenumber" type="tel" name="phone" class="form-control" placeholder="Please enter your Primary Number*" data-error="Number is required.">

                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">

                                                <input id="form_secondary_phonenumber" type="tel" name="secondary_phone" class="form-control" placeholder="Please enter your Secondary Number" data-error="Number is required.">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">

                                                <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" data-error="Valid email is required.">

                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">

                                                <select id="form_need" name="city" class="form-control" required="required" data-error="Please specify your need.">
                                                    <option value="" selected disabled>--Select State or Territory of Residence--</option>

                                                    <option value="">Select State</option>
                                                    <option value="Alabama">Alabama</option>
                                                    <option value="Alaska">Alaska</option>
                                                    <option value="American Samoa">American Samoa</option>
                                                    <option value="Arizona">Arizona</option>
                                                    <option value="Arkansas">Arkansas</option>
                                                    <option value="California">California</option>
                                                    <option value="Colorado">Colorado</option>
                                                    <option value="Connecticut">Connecticut</option>
                                                    <option value="Delaware">Delaware</option>
                                                    <option value="Dist of Columbia">Dist of Columbia</option>
                                                    <option value="Florida">Florida</option>
                                                    <option value="Georgia">Georgia</option>
                                                    <option value="Guam">Guam</option>
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
                                                    <option value="Puerto Rico">Puerto Rico</option>
                                                    <option value="Rhode Island">Rhode Island</option>
                                                    <option value="South Carolina">South Carolina</option>
                                                    <option value="South Dakota">South Dakota</option>
                                                    <option value="Tennessee">Tennessee</option>
                                                    <option value="Texas">Texas</option>
                                                    <option value="The District of Columbia and the Northern Mariana Islands">The District of Columbia and the Northern Mariana Islands</option>
                                                    <option value="Utah">Utah</option>
                                                    <option value="Vermont">Vermont</option>
                                                    <option value="Virgin Islands">Virgin Islands</option>
                                                    <option value="Virginia">Virginia</option>
                                                    <option value="Washington">Washington</option>
                                                    <option value="West Virginia">West Virginia</option>
                                                    <option value="Wisconsin">Wisconsin</option>
                                                    <option value="Wyoming">Wyoming</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                                <p style="font-size: 17px; color: #fff;text-align: initial;">This is where they live.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="input-group date" id="start">
                                                    <input type="text" value="" class="form-control" required name="date_time" />
                                                    <div class="input-group-addon input-group-append">
                                                        <div class="input-group-text">
                                                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <input type="text" id="start" class="form-control datetimepicker" name="date_time"> -->


                                            </div>
                                        </div>
                                    </div>


                                    <p style="font-size: 17px; color: #fff;text-align: justify;">All appointments should be between 8am and 4pm, between Monday and Friday.</p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">

                                                <textarea id="form_message" name="message" class="form-control" placeholder="Write your message here." rows="4" data-error="Please, leave us a message."></textarea>

                                            </div>

                                        </div>
                                        <p style="font-size: 17px; color: #fff;">Notes: Now is the time to go back to the top and re-verify everything the client has told you. When everything is correct, come back here and submit.
                                        </p>
                                        <div class="col-md-12">

                                            <input type="submit" class="btn btn btn-send btn btn btn-primary" value="submit">
                                        </div>

                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- /.8 -->

                </div>
                <!-- /.row-->
            </div>
        </div>



    </section>
</form>


<script>
    $("#contact-form").validate({
        rules: {
            'debt_type[]': "required",
            'debt_amount': "required",
            'first_name': "required",
            'last_name': "required",
            'phone': "required",
            // 'secondary_phone': "required",
            'city': "required",
            'date_time': "required",
            'message': "required",
            'email': {
                required: true,
                email: true
            },
        },
        messages: {
            'debt_type[]': "Please select Debt Type",
            'debt_amount': "Please select debt amount",
            'first_name': "Please enter a valid first name",
            'last_name': "Please enter a valid last name",
            'phone': "Please enter a valid phone",
            // 'secondary_phone': "Please enter a valid secondary phone",
            'city': "Please enter a valid city",
            'date_time': "Please enter a valid date",
            'message': "Please enter a valid message",
            'email': "Please select email",
        },
        errorPlacement: function(error, element) {
            $("#errorTxt").append('<div class="alert alert-danger" role="alert">' + $(error).text() + '</div>');

        },

    });
</script>