<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5" style="background-image: url('<?php echo base_url(); ?>assets/agent/img/businesswoman-networking-using-digital-devices.jpg');background-size: cover;
                        background-repeat: no-repeat;"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create New Password</h1>
                        </div>
                        <form class="user"  action="<?php echo base_url('agent/createPassword');?>" method="post" id="register">
                            <?php $this->common_model->showAlertMsg(); ?>
                            <div class="form-group row">

                                <div class="col-md-12">
                                    <input type="text" readonly name="email" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="email" value="<?php echo $user->email;?>" style="width: 100%;">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="password" name="new_password" id="new_password" class="form-control form-control-user" placeholder="New Password" style="width: 100%;">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="password" name="confirm_password"  class="form-control form-control-user" id="exampleInputPassword" placeholder="Repeat Password" style="width: 100%;">
                                </div>
                            </div>

                            <input class="btn btn-primary btn-user btn-block" type="submit" value="Reset Password">


                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="mailto:<?= $support_email;?>">Don’t have account ? Contact us</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="<?php echo base_url();?>agent">Already have an account? Login</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>