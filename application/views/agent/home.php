<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                </div>
                                <?php $this->common_model->showAlertMsg(); ?>
                                <form class="user" action="<?php echo base_url('agent/doLogin');?>" method="post">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                    </div>
<!--                                    <div class="form-group">-->
<!--                                        <div class="custom-control custom-checkbox small">-->
<!--                                            <input type="checkbox" class="custom-control-input" id="customCheck">-->
<!--                                            <label class="custom-control-label" for="customCheck">Remember-->
<!--                                                Me</label>-->
<!--                                        </div>-->
<!--                                    </div>-->

                                    <input class="btn btn-primary btn-user btn-block" type="submit" value="Login">
                                    <hr>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('auth/reset_password'); ?>">Forgot Password?</a>
                                </div>
                                <div class="text-center">

                                    <a class="small" href="mailto:<?= $support_email; ?>">Don’t have account ? Contact us</a>
                                </div>
                                <!-- <div class="text-center">
                                    <a class="small" href="register.html">Create New Password</a>
                                </div> -->

                            </div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>