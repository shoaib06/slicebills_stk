<section class="post__title" style="padding-top: 11rem;">

<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">
                    Do not sell my information request
                </h1>
            </div>
            <div class="col-md-12">
            <?php $this->common_model->showAlertMsg(); ?>

                <form method="POST" id="optout-form" action="<?= base_url('front/optoutSubmit');?>" class="needs-validation" novalidate>
                    <input type="hidden" name='forceEmail' value="" />
                    <div class="row optout-form">
                        <div class="col-6 optout-form-field form-group">
                            <label for="first_name">First Name</label>
                            <input name="first_name" id="first_name" value="" class="form-control" required />
                            <div class="invalid-feedback">Field required.</div>
                        </div>
                        <div class="col-6 optout-form-field form-group">
                            <label for="last_name">Last Name</label>
                            <input name="last_name" id="last_name" value="" class="form-control" required />
                            <div class="invalid-feedback">Field required.</div>
                        </div>
                        <div class="col-6 optout-form-field form-group">
                            <label for="address">Street Address</label>
                            <input name="address" id="address" value="" class="form-control" required />
                            <div class="invalid-feedback">Field required.</div>
                        </div>
                        <div class="col-6 optout-form-field form-group">
                            <label for="city">City</label>
                            <input name="city" id="city" value="" class="form-control" required />
                            <div class="invalid-feedback">Field required.</div>
                        </div>
                        <div class="col-6 optout-form-field form-group">
                            <label for="state">State</label>
                            <input name="state" id="state" value="" class="form-control" required />
                            <div class="invalid-feedback">Field required.</div>
                        </div>
                        <div class="col-6 optout-form-field form-group">
                            <label for="zip">Zip/Postal Code</label>
                            <input name="zip" id="zip" value="" class="form-control" required />
                            <div class="invalid-feedback">Field required.</div>
                        </div>
                        <div class="col-6 optout-form-field form-group">
                            <label for="email">E-mail</label>
                            <input name="email" value="" id="email" class="form-control" required />
                            <div class="invalid-feedback">Field required.</div>
                        </div>
                        <div class="col-12">
                            <div class="optout-form-field form-group form-check">
                                <input type="checkbox" name="optout" id="cbOptout" class="form-check-input" required />
                                <label class="form-check-label" for="cbOptout">Do not sell my information to third
                                    parties</label>
                                <div class="invalid-feedback">You need to check this field.</div>
                            </div>
                        </div>
                        <div class="col-12 form-group">
                            <p>
                                Users with disabilities (and any other users) who wish to opt-out of the sale of their
                                personal information
                                can also contact us by emailing us at: <?= $support_email;?>; or sending us U.S.
                                mail to: <?= $address; ?>.
                            </p>
                            <p>
                                If we have a good-faith, reasonable and documented belief that a request to opt-out is
                                fraudulent, we may
                                deny the request.
                                Where you make a request to opt-out of the sale of your personal information through an
                                authorized agent, we
                                will require that you or the authorized agent provide us with a valid written
                                authorization executed by both
                                parties, with the validity of such document determined by us in our reasonable, good
                                faith discretion.
                                Please submit such documentation to us at: <?= $support_email;?>, <?= $address; ?>.
                            </p>
                            <p>
                                For additional discussion of your privacy rights, please visit our Privacy Policy by <a
                                    href="<?php echo base_url(); ?>front/privacy_policy">Clicking Here</a>.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="<?php echo $this->config->item('google_key') ?>"></div> 
                               
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-4 col-sm-12">
                            <input type="submit" value="Submit" class="btn btn-primary" />
                        </div>
                    </div>
                </form>
                <script>
                        (function () {
                            var form = document.getElementById('optout-form');
                            form.addEventListener('submit', function (event) {
                                if (form.checkValidity() === false) {
                                    event.preventDefault();
                                    event.stopPropagation();
                                }
                                form.classList.add('was-validated');
                            }, false);
                        })();
                </script>
            </div>
        </div>
    </div>
</section>    