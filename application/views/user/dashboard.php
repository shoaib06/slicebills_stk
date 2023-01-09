<div class="col-md-12 col-sm-12 border bg-white rounded-right">
    <div class="p-4">
        <small class="font-weight-bold text-uppercase text-black-50">
            Name
        </small>
        <p class="font-weight-bold text-dark">
            <?php echo $user->first_name;?> <?php echo $user->last_name;?>
        </p>
        <small class="font-weight-bold text-uppercase text-black-50">
            Email
        </small>
        <p class="font-weight-bold text-dark">
            <?php echo $user->email;?>
        </p>
        <small class="font-weight-bold text-uppercase text-black-50">
            Date of Birth
        </small>
        <p class="font-weight-bold text-dark">
            <?php echo date('d-m-Y',$user->dob);?>
        </p>
        <small class="font-weight-bold text-uppercase text-black-50">
            Gender
        </small>
        <p class="font-weight-bold text-dark">
            <?php echo $user->gender;?>
        </p>
        <small class="font-weight-bold text-uppercase text-black-50">
            Phone Number
        </small>
        <p class="font-weight-bold text-dark">
            <?php echo $user->phone;?>
        </p>
        <small class="font-weight-bold text-uppercase text-black-50">
            Address
        </small>
        <p class="font-weight-bold text-dark m-0">
            <?php echo $user->address;?>
        </p>
    </div>
    <div class="p-4 pt-0 border-top justify-content-end d-flex">
        <a href="<?php echo base_url('user/update_profile')?>" class="btn btn-primary">
            Update Profile
        </a>
    </div>
</div>