<div class="col-md-12 col-sm-12 border bg-white rounded-right">
    <form method="POST" id="passwordchange-form" class="needs-validation" action="<?php echo base_url('user/update_password')?>">
        <?php $this->common_model->showAlertMsg(); ?>
    <div class="p-4">
        <div id="resetConfirmationAlert" class="alert alert-success d-none" role="alert">
            Password changed
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">
           &times;
          </span>
            </button>
        </div>

        <div class="row">
            <div class="col-12 form-group">
                <label for="password">Current Password</label>
                <input type="password" name="password" id="password" class="form-control" required />
                <div class="invalid-feedback">Field required.</div>
            </div>
            <div class="col-12 form-group">
                <label for="new_password">New Password</label>
                <input type="password" name="new_password" id="new_password" class="form-control" required />
                <div class="invalid-feedback">Field required.</div>
            </div>
            <div class="col-12 form-group">
                <label for="password_confirmation">New Password Confirmation</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"
                       required />
                <div class="invalid-feedback">Field required.</div>
            </div>
        </div>

    </div>
    <div class="p-4 pt-0 border-top justify-content-end d-flex">
        <a href="/auth/profile" class="btn btn-secondary mr-3">
            Cancel
        </a>
        <input type="submit" value="Confirm" class="btn btn-primary" />
    </div>
</form>
</div>