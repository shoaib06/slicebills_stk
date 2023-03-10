<style>
    input[type="checkbox"] {
    display: none;
}
.navbar-expand-lg .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 4.5rem;
}
.navbar-expand-lg .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 4.5rem;
    font-size: 17px;
}
.type-debit span.wpcf7-list-item-label:hover {
    background: #e0fafd;
    
}
.type-debit span.wpcf7-list-item-label.active {
    background: #e0fafd;
    
}

.type-debit span.wpcf7-list-item-label {
    display: inline-block;
    background-color: #efefef;
    color: #000;
    padding: 30px;
    font-size: 20px;
    font-weight: 500;
    width: 100%;
    transition: all 0.3s ease;
    border: 2px solid #a5a5a5;
    border-radius: 13px;
    border-bottom: 5px solid #a6a6a6;
}


</style>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 main-txt">
                <h3><b style="color: #da1920;">Emergency Debt Relief </b><b>For US Residents.</b></h3>
                <p>Check if you qualify to drastically reduce your unsecured debts. Min. $10K debt required.</p>
            </div>
        </div>
    </div>

</section>


<section id="Quiz">
    <form action="<?= base_url('front/add_lead') ?>" method="post" id="quizform">
        <?php $this->common_model->showAlertMsg(); ?>

        <div class="container type-debit first step-1">
            <div class="row">
                <h2 style="text-align: center; font: 25px; font-family: Poppins;">What's contributed to your financial difficulty in the past 12 months?</h2>
                <p style="text-align: center;">[check all that apply]</p>

                <span class="wpcf7-form-control-wrap" data-name="loan_type">
                    <span class="wpcf7-form-control wpcf7-radio"><span class="wpcf7-list-item first"><label><input type="checkbox" name="contibute_factor[]" value="Job Loss Or Income Reduction" ><span class="wpcf7-list-item-label"  onclick="this.classList.toggle('active');">Job Loss Or Income Reduction</span></label></span>
                        <span class="wpcf7-list-item"><label><input type="checkbox" name="contibute_factor[]" value="Hardships Due To COVID-19"><span class="wpcf7-list-item-label" onclick="this.classList.toggle('active');">Hardships Due To COVID-19</span></label></span>
                        <span class="wpcf7-list-item"><label><input type="checkbox" name="contibute_factor[]" value="Medical Expenses & Bills"><span class="wpcf7-list-item-label"  onclick="this.classList.toggle('active');">Medical Expenses & Bills</span></label></span>
                        <span class="wpcf7-list-item"><label><input type="checkbox" name="contibute_factor[]" value="Overwhelming Debts & Bills"><span class="wpcf7-list-item-label"  onclick="this.classList.toggle('active');">Overwhelming Debts & Bills</span></label></span>

                        <span class="wpcf7-list-item last"><label><input type="checkbox" name="contibute_factor[]" value="Other">
                                <span class="wpcf7-list-item-label"  onclick="this.classList.toggle('active');">Other</span></label></span></span></span>
                        <div class="error-step-1"></div> 

            </div>
            <input class="forsee" type="button" value="Next" data-nextstep="2">

        </div>

        <div class="container type-debit first step-2">
            <div class="row">
                <h2 style="text-align: center; font: 25px; font-family: Poppins;">Which of these debts are keeping you worried?</h2>
                <p style="text-align: center;">[check all that apply]</p>
                <span class="wpcf7-form-control-wrap" data-name="loan_type">
                    <span class="wpcf7-form-control wpcf7-radio"><span class="wpcf7-list-item first"><label><input type="checkbox" name="loan_type[]" value="Credit Cards" ><span class="wpcf7-list-item-label"  onclick="this.classList.toggle('active');">Credit Cards</span></label></span>
                        <span class="wpcf7-list-item"><label><input type="checkbox" name="loan_type[]" value="Personal Loan Debt"><span class="wpcf7-list-item-label"  onclick="this.classList.toggle('active');">Personal Loan Debt</span></label></span>
                        <span class="wpcf7-list-item"><label><input type="checkbox" name="loan_type[]" value="Tax Debt"><span class="wpcf7-list-item-label"  onclick="this.classList.toggle('active');">Tax Debt</span></label></span>
                        <span class="wpcf7-list-item"><label><input type="checkbox" name="loan_type[]" value="Other Debts"><span class="wpcf7-list-item-label"  onclick="this.classList.toggle('active');">Other Debts</span></label></span>

                        <span class="wpcf7-list-item last"><label><input type="checkbox" name="loan_type[]" value="Medical Debt">
                                <span class="wpcf7-list-item-label"  onclick="this.classList.toggle('active');">Medical Debt</span></label></span></span></span>

                    <div class="error-step-2"></div> 

            </div>



            <input class="forsee" type="button" value="Next" data-nextstep="3">

        </div>

        <div class="container type-debit first step-3">
            <div class="row">
                <h2 style="text-align: center; font: 25px; font-family: Poppins;">Do you have student loan debt?</h2>
                <span class="wpcf7-form-control-wrap" data-name="loan_type">
                    <span class="wpcf7-form-control wpcf7-radio">
                        <span class="wpcf7-list-item first">
                            <label>
                                <input type="radio" name="have_st_loan" value="No" >
                                <span class="wpcf7-list-item-label">No</span>
                            </label>
                        </span>
                        <span class="wpcf7-list-item">
                            <label><input type="radio" name="have_st_loan" value="Yes">
                                <span class="wpcf7-list-item-label">Yes</span>
                            </label>
                        </span>
                    </span>  
                </span>      
            </div>



            <input class="forsee"  type="button" value="Next" data-nextstep="4" style="display: none;">

        </div>

        <div class="container type-debit first step-4">
            <div class="row">
                <h2 style="text-align: center; font: 25px; font-family: Poppins;">Which type of student loan do you have?</h2>
                <span class="wpcf7-form-control-wrap" data-name="loan_type">
                    <span class="wpcf7-form-control wpcf7-radio">
                        <span class="wpcf7-list-item first">
                            <label>
                                <input type="radio" name="st_loan_type" value="Private Student Loan" >
                                <span class="wpcf7-list-item-label">Private Student Loan</span>
                            </label>
                        </span>
                        <span class="wpcf7-list-item">
                            <label><input type="radio" name="st_loan_type" value="Federal Student Loan">
                                <span class="wpcf7-list-item-label">Federal Student Loan</span>
                            </label>
                        </span>
                    </span>
                </span>    


            </div>



            <input class="forsee" type="button" value="Next" data-nextstep="5" style="display: none;">

        </div>

        <!-- <div class="container type-debit first step-5">
            <div class="row">
                <h2 style="text-align: center; font: 25px; font-family: Poppins;">Which type of student loan do you have?</h2>
                <span class="wpcf7-form-control-wrap" data-name="loan_type">
                    <span class="wpcf7-form-control wpcf7-radio"><span class="wpcf7-list-item first"><label><input type="checkbox" name="st_loan_amount" value="$0-$10,000" ><span class="wpcf7-list-item-label">$0-$10,000</span></label></span>
                        <span class="wpcf7-list-item"><label><input type="checkbox" name="st_loan_amount" value="$10,000-$15,000"><span class="wpcf7-list-item-label">$10,000-$15,000</span></label></span>
                        <span class="wpcf7-list-item"><label><input type="checkbox" name="st_loan_amount" value="$15,000-$25,000"><span class="wpcf7-list-item-label">$15,000-$25,000</span></label></span>
                        <span class="wpcf7-list-item"><label><input type="checkbox" name="st_loan_amount" value="$25,000-$50,000"><span class="wpcf7-list-item-label">$25,000-$50,000</span></label></span>

                        <span class="wpcf7-list-item last"><label><input type="checkbox" name="st_loan_amount" value="$50,000+">
                                <span class="wpcf7-list-item-label">$50,000+</span></label></span></span>
                </span>


            </div>



            <input class="forsee" type="button" value="Next" data-nextstep="6">

        </div> -->

        <div class="container type-debit first step-5">
            <div class="row">
                <h2 style="text-align: center; font: 25px; font-family: Poppins;">Apart from student loan, how much do you roughly owe in total?</h2>
                <p style="text-align: center;">[No Need To Gather Bills - Estimate OK]</p>
                <p class="ng-scope"><strong>Include: </strong>Credit Cards, Personal Loans, Payday Loans, Medical Bills, Taxes, and Other "Unsecured" Debts</p>
                <p class="ng-scope"><strong>Don't Include:</strong>&nbsp;Student Loan, Mortgages, Auto Loans, HELOCs, or Other "Secured" Debts</p>
              
                <span class="wpcf7-form-control-wrap" data-name="loan_type">
                    <span class="wpcf7-form-control wpcf7-radio"><span class="wpcf7-list-item first"><label><input type="radio" name="st_loan_amount" value="$0-$10,000" ><span class="wpcf7-list-item-label">$0-$10,000</span></label></span>
                        <span class="wpcf7-list-item"><label><input type="radio" name="st_loan_amount" value="$10,000-$15,000"><span class="wpcf7-list-item-label">$10,000-$15,000</span></label></span>
                        <span class="wpcf7-list-item"><label><input type="radio" name="st_loan_amount" value="$15,000-$25,000"><span class="wpcf7-list-item-label">$15,000-$25,000</span></label></span>
                        <span class="wpcf7-list-item"><label><input type="radio" name="st_loan_amount" value="$25,000-$50,000"><span class="wpcf7-list-item-label">$25,000-$50,000</span></label></span>

                        <span class="wpcf7-list-item last"><label><input type="radio" name="st_loan_amount" value="$50,000+">
                                <span class="wpcf7-list-item-label">$50,000+</span></label></span></span>
                </span>


            </div>



            <input class="forsee" type="button" value="Next" data-nextstep="7" style="display: none;">

        </div>
        <div class="container type-debit first step-7">
            <div class="row">
                <h2 style="text-align: center; font: 25px; font-family: Poppins;">Are you falling behind on payments?</h2>
                <span class="wpcf7-form-control-wrap" data-name="loan_type">
                    <span class="wpcf7-form-control wpcf7-radio"><span class="wpcf7-list-item first"><label><input type="radio" name="falling_behind_payment" value="No" ><span class="wpcf7-list-item-label">No</span></label></span>
                        <span class="wpcf7-list-item"><label><input type="radio" name="falling_behind_payment" value="Yes"><span class="wpcf7-list-item-label">Yes</span></label>
                        </span>



            </div>



            <input class="forsee" type="button" value="Next" data-nextstep="8" style="display: none;">

        </div>
        <div class="container type-debit first step-8">
            <div class="row">
                <h2 style="text-align: center; font: 25px; font-family: Poppins;">What's your current employment status?</h2>

                <span class="wpcf7-form-control-wrap" data-name="loan_type">
                    <span class="wpcf7-form-control wpcf7-radio"><span class="wpcf7-list-item first"><label><input type="radio" name="employment_status" value="Employed" ><span class="wpcf7-list-item-label">Employed</span></label></span>
                        <span class="wpcf7-list-item"><label><input type="radio" name="employment_status" value="Self-Employed"><span class="wpcf7-list-item-label">Self-Employed</span></label></span>
                        <span class="wpcf7-list-item"><label><input type="radio" name="employment_status" value="Student"><span class="wpcf7-list-item-label">Student</span></label></span>
                        <span class="wpcf7-list-item"><label><input type="radio" name="employment_status" value="Retired"><span class="wpcf7-list-item-label">Retired</span></label></span>

                        <span class="wpcf7-list-item last"><label><input type="radio" name="employment_status" value="Unemployed">
                                <span class="wpcf7-list-item-label">Unemployed</span></label></span></span>
                </span>


            </div>



            <input class="forsee" type="button" value="Next" data-nextstep="9" style="display: none;">

        </div>
        <div class="container type-debit first step-9">
            <div class="row">
                <h2 style="text-align: center; font: 25px; font-family: Poppins;">
                    What type of property do you live in?
                </h2>
                <span class="wpcf7-form-control-wrap" data-name="property_live_in">
                    <span class="wpcf7-form-control wpcf7-radio"><span class="wpcf7-list-item first"><label><input type="radio" name="property_live_in" value="Own" ><span class="wpcf7-list-item-label">Own</span></label></span>
                        <span class="wpcf7-list-item"><label><input type="radio" name="property_live_in" value="Rent"><span class="wpcf7-list-item-label">Rent</span></label></span>
                        <span class="wpcf7-list-item"><label><input type="radio" name="property_live_in" value="Live with parents"><span class="wpcf7-list-item-label">Live with parents</span></label></span>
                        <span class="wpcf7-list-item last"><label><input type="radio" name="property_live_in" value="Other">
                                <span class="wpcf7-list-item-label">Other</span></label></span></span></span>


            </div>



            <input class="forsee" type="button" value="Next" data-nextstep="10" style="display: none;">

        </div>


        <div class="container type-debit first step-10">
            <div class="row">
                <h2 class="sub-heading">Enter your postal code</h2>
                <span>This will help us determine your eligibility</span>
                <input type="text" name="postal_code" id="">


            </div>

            <div class="error-step-10"></div>

            <input class="forsee" type="button" value="Next" data-nextstep="11" >

        </div>

        <div class="container type-debit first step-11">
            <div class="row">
                <h2 style="text-align: center;" class="ng-scope"><b>Great News, Your Unsecured Debts Qualify For Relief&nbsp;In <span style="color:#3498db;">New York</span>!</b></h2>
                <h4 style="text-align: center;" class="ng-scope"><b>NEXT STEP:</b> Enter Your Details Below To Get Your <span style="color:#3498db;"><strong>FREE Personalized Debt Savings Estimate</strong>!</span></h4>
                <h6 class="ng-scope"><i>Your debt savings evaluation is free and will not affect your credit score. It's a safe and secure way to compare your options and savings on the total debt that you owe.</i></h6>
                <span>This will help us determine your eligibility</span>
                <label for="firstname">First Name</label>
                <input type="text" name="first_name" id="" required>

                <label for="lastname">Last Name</label>
                <input type="text" name="last_name" id="" required>

                <label for="email">Email</label>
                <input type="email" name="email" id="" required>

                <label for="phone">Phone</label>
                <input type="text" name="phone" id="" required>


            </div>



            <input class="forsee" type="submit" value="Submit">

        </div>
    </form>
</section>




<section style="background-color: #102542;">
    <div class="container" style="margin-top: 40px;">
        <div class="row" style="padding-top: 62px;padding-bottom: 40px;">
            <div class="col-md-4" style="display:flex">
                <img src="<?= base_url('assets/front/images') ?>/img-1.png">
                <p style="color:#fff;padding-top: 20px;">Take our quiz to check your eligibility</p>
            </div>
            <div class="col-md-4" style="display:flex">
                <img src="<?= base_url('assets/front/images') ?>/img-2.png">
                <p style="color:#fff;padding-top: 20px;">Claim your Free Debt Savings Estimate with a Debt Specialist</p>
            </div>
            <div class="col-md-4" style="display:flex">
                <img src="<?= base_url('assets/front/images') ?>/img-3.png">
                <p style="color:#fff;padding-top: 20px;">One step closer to living your life debt-free!</p>
            </div>
        </div>
    </div>
</section>

<section style="margin-top:50px;margin-bottom: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <p style="text-align: center;">DEBT WE'VE HELPED OUR USERS WITH</p>
                <div class="numbers">
                    <p style="background-color: #74d466;
    padding: 21px;
    width: 7%;
    border-radius: 10px;
    font-size: 18px;
    font-weight: 700;">$</p>
                    <p>6</p>
                    <p>0</p>
                    <p>5</p>
                    <br>
                    <br>
                    ,
                    <p>4</p>
                    <p>1</p>
                    <p>5</p>
                    <br>
                    <br>
                    ,
                    <p>0</p>
                    <p>0</p>
                    <p>0</p>

                </div>
                <div class="col-md-2"></div>
                <p style="text-align: center;">* This figure represents the total amount of debt help<br> requested from our website(s) as of Mar. 25, 2021</p>
            </div>
        </div>
        <hr>
        <div class="number-img">
            <img src="<?= base_url('assets/front/images') ?>/debt-management-icon.avif">
            <h2>Debt Relief For Americans</h2>
            <p>We are US' most trusted platform that matches American Residents who are struggling with their debts with<br> leading debt advisors who are best equipped to help them.</p>
        </div>

</section>


<section style="margin-top:50px; margin-bottom: 50px;">
    <div class="container">
        <h2 style="text-align: center;">Types Of Debts We Can Help With...</h2>
        <div class="row cards" style="width: 70%;
    display: flex;
    margin: 0 auto; margin-top:40px;">
            <div class="col-md-4" style="box-shadow: 1px 1px 6px 3px #e5e5e5;">
                <img src="<?= base_url('assets/front/images') ?>/icon-1.avif" style="display: block;">
                <a style="text-decoration: none;" href="<?= base_url('/#Quiz') ?>">
                    <button>Credits Card</button>
                </a>
            </div>
            <div class="col-md-4" style="box-shadow: 1px 1px 6px 3px #e5e5e5;">
                <img src="<?= base_url('assets/front/images') ?>/icon-2.avif">
                <a style="text-decoration: none;" href="<?= base_url('/#Quiz') ?>">
                    <button>Payday</button>
                </a>
            </div>
            <div class="col-md-4" style="box-shadow: 1px 1px 6px 3px #e5e5e5;">
                <img src="<?= base_url('assets/front/images') ?>/icon-3.avif">
                <a style="text-decoration: none;" href="<?= base_url('/#Quiz') ?>">
                    <button>Personal Loans</button>
                </a>
            </div>
        </div>
        <div class="row cards" style="width: 70%; display: flex;margin: 0 auto; margin-top: 30px">
            <div class="col-md-4" style="box-shadow: 1px 1px 6px 3px #e5e5e5;">
                <img src="<?= base_url('assets/front/images') ?>/icon-4.avif" style="display: block;">
                <a style="text-decoration: none;" href="<?= base_url('/#Quiz') ?>">
                    <button>Student Debt</button>
                </a>
            </div>
            <div class="col-md-4" style="box-shadow: 1px 1px 6px 3px #e5e5e5;">
                <img src="<?= base_url('assets/front/images') ?>/icon-5.avif">
                <a style="text-decoration: none;" href="<?= base_url('/#Quiz') ?>">

                    <button>Income Tax</button>
                </a>
            </div>
            <div class="col-md-4" style="box-shadow: 1px 1px 6px 3px #e5e5e5;">
                <img src="<?= base_url('assets/front/images') ?>/icon-6.avif">
                <a style="text-decoration: none;" href="<?= base_url('/#Quiz') ?>">

                    <button>Medical Bills</button>
                </a>
            </div>
        </div>
        <div class="row cards" style="width: 70%;display: flex;margin: 0 auto; margin-top:30px;">
            <div class="col-md-2"></div>
            <div class="col-md-4" style="box-shadow: 1px 1px 6px 3px #e5e5e5;">
                <img src="<?= base_url('assets/front/images') ?>/icon-7.avif" style="display: block;">
                <a style="text-decoration: none;" href="<?= base_url('/#Quiz') ?>">

                    <button>Household bills</button>
                </a>
            </div>
            <div class="col-md-4" style="box-shadow: 1px 1px 6px 3px #e5e5e5;">
                <img src="<?= base_url('assets/front/images') ?>/icon-8.avif">
                <a style="text-decoration: none;" href="<?= base_url('/#Quiz') ?>">

                    <button>Other Unsecured Debt</button>
                </a>
            </div>
            <div class="col-md-2"></div>
        </div>
</section>

<section style="margin-top:150px" id="About Us">
    <div class="container">
        <h2 style="text-align: center;">How We Can Help</h2>
        <p style="text-align: center;">We are America's most trusted platform that connects US Residents who are struggling with their debts to debt advisors who are best equipped to help them.</p>
        <div class="row" style="justify-content: center;">
            <div class="col-md-4 box-1">
                <p style="color:#fff;">See if you qualify by taking our FREE debt savings quiz.</p>
                <a style="text-decoration: none;" href="<?= base_url('/#Quiz') ?>">

                    <button style="margin-top:171px;"> Start Quiz Now > </button>
                </a>
            </div>
            <div class="col-md-4 box-2">
                <p style="color:#fff;">Our debt experts specialize in helping Americans significantly reduce their unaffordable debts into small monthly payments without having to declare bankruptcy.</p>
                <a style="text-decoration: none;" href="<?= base_url('/#Quiz') ?>">

                    <button> Reduce Debt Now > </button>
                </a>
            </div>
            <div class="col-md-4 box-3">
                <p style="color:#fff;">There's no one size fits all. Some solutions are better for some individuals than others. Our team recommends the best solution available for YOU!</p>
                <a style="text-decoration: none;" href="<?= base_url('/#Quiz') ?>">

                    <button style="margin-top:125px;"> Become Debt-Free > </button>
                </a>
            </div>
        </div>
    </div>

</section>

<section style="margin-top: 150px;">
    <div class="container">
        <h2 style="text-align: center;margin-bottom: 20px;">Frequently Asked Questions</h2>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <p><b>1. Will you stop creditors chasing me?</b></p>
                <p>Creditors will stop chasing when they've agreed to a settlement offer. Connect with one of our partnered debt experts today to create a plan for you that will ensure that your creditors will say 'yes'.</p>
                <p><b>2. Will I give up my assets (car, home, etc.)?</b></p>
                <p>Majority of debt solutions will allow you to keep all of your assets. However, in some scenarios such as a bankruptcy, you may have to give up some of your assets. However, bankruptcy is only a recommended option if the benefits outweigh the costs. Speak to one of our debt experts today to see which solution will work for your circumstances.</p>
                <p><b>3. How much does this service cost?</b></p>
                <p>It depends on your particular circumstances. However, your initial consultation should always be free to equip you with the knowledge that you need to become debt-free. If the debt specialist feel that you may require additional help, they may suggest a plan that would require debt relief specialists to negotiate settlement with your creditors, in which there's a fee involved with this - but no payment will be made until at least one settlement offer is accepted. Keep in mind that in any scenario, the amount that you pay today will drastically be reduced to a small monthly figure that you can afford, which would include any fees.</p>
            </div>
        </div>
    </div>
</section>