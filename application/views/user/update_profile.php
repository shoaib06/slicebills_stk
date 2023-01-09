<div class="col-md-12 col-sm-12 border bg-white rounded-right">
    <form method="POST" id="form" class="needs-validation" action="<?php echo base_url('user/update_profile_submit')?>">
        <?php $this->common_model->showAlertMsg(); ?>
        <div class="p-4">


            <div id="resetConfirmationAlert" class="alert alert-success d-none" role="alert">
                Profile updated
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">
                   &times;
                  </span>
                </button>
            </div>

            <div class="row">
                <div class="col-12 form-group">
                    <label for="first_name">
                        Title
                    </label>
                    <select id="gender" name="gender" title="Title" class="form-control" required>
                        <option value="">
                            Select Title
                        </option>
                        <option value="Mr" <?php echo $user->gender == "M" ? "selected" : "";?>>
                            Mr.
                        </option>
                        <option value="Ms" <?php echo $user->gender == "Ms" ? "selected" : "";?>>
                            Ms.
                        </option>
                        <option value="Mrs" <?php echo $user->gender == "Mrs" ? "selected" : "";?>>
                            Mrs.
                        </option>
                    </select>
                </div>
                <div class="col-6 mb-2">
                    <label for="first_name">First Name</label>
                    <input name="first_name" id="first_name" class="form-control" value="<?php echo $user->first_name;?>" required />
                    <div class="invalid-feedback">Field required.</div>
                </div>
                <div class="col-6 mb-2">
                    <label for="last_name">Last Name</label>
                    <input name="last_name" id="last_name" class="form-control" value="<?php echo $user->last_name;?>" required />
                    <div class="invalid-feedback">Field required.</div>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-6 form-group">
                    <label for="address">Street Address</label>
                    <input name="address" id="address" class="form-control" value="<?php echo $user->address;?>" required />
                    <div class="invalid-feedback">Field required.</div>
                </div>
                <div class="col-6 form-group">
                    <label for="apt">Suite</label>
                    <input name="apt" id="apt" class="form-control" value="<?php echo $user->apt;?>" />
                    <div class="invalid-feedback">Field required.</div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 form-group">
                    <label for="city">City</label>
                    <input name="city" id="city" class="form-control" value="<?php echo $user->city;?>" required />
                    <div class="invalid-feedback">Field required.</div>
                </div>
                <div class="col-6 form-group">
                    <label for="state">State</label>
                    <select id="state" name="state" title="State" class="form-control" required>
                        <option value="">State</option>
                        <option value="Alabama" <?php echo $user->state == "Alabama" ? "selected" : "";?>>Alabama</option>
                        <option value="Alaska" <?php echo $user->state == "Alaska" ? "selected" : "";?>>Alaska</option>
                        <option value="Arizona" <?php echo $user->state == "Arizona" ? "selected" : "";?>>Arizona</option>
                        <option value="Arkansas" <?php echo $user->state == "Arkansas" ? "selected" : "";?>>Arkansas</option>
                        <option value="California" <?php echo $user->state == "California" ? "selected" : "";?>>California</option>
                        <option value="Colorado" <?php echo $user->state == "Colorado" ? "selected" : "";?>>Colorado</option>
                        <option value="Connecticut" <?php echo $user->state == "Connecticut" ? "selected" : "";?>>Connecticut</option>
                        <option value="Delaware" <?php echo $user->state == "Delaware" ? "selected" : "";?>>Delaware</option>
                        <option value="District Of Columbi" <?php echo $user->state == "District Of Columbi" ? "selected" : "";?>>District Of Columbia</option>
                        <option value="Florida" <?php echo $user->state == "Florida" ? "selected" : "";?>>Florida</option>
                        <option value="Georgia" <?php echo $user->state == "Georgia" ? "selected" : "";?>>Georgia</option>
                        <option value="Hawaii" <?php echo $user->state == "Hawaii" ? "selected" : "";?>>Hawaii</option>
                        <option value="Idaho" <?php echo $user->state == "Idaho" ? "selected" : "";?>>Idaho</option>
                        <option value="Illinois" <?php echo $user->state == "Illinois" ? "selected" : "";?>>Illinois</option>
                        <option value="Indiana" <?php echo $user->state == "Indiana" ? "selected" : "";?>>Indiana</option>
                        <option value="Iowa" <?php echo $user->state == "Iowa" ? "selected" : "";?>>Iowa</option>
                        <option value="Kansas" <?php echo $user->state == "Kansas" ? "selected" : "";?>>Kansas</option>
                        <option value="Kentucky" <?php echo $user->state == "Kentucky" ? "selected" : "";?>>Kentucky</option>
                        <option value="Louisiana" <?php echo $user->state == "Louisiana" ? "selected" : "";?>>Louisiana</option>
                        <option value="Maine" <?php echo $user->state == "Maine" ? "selected" : "";?>>Maine</option>
                        <option value="Maryland" <?php echo $user->state == "Maryland" ? "selected" : "";?>>Maryland</option>
                        <option value="Massachusetts" <?php echo $user->state == "Massachusetts" ? "selected" : "";?>>Massachusetts</option>
                        <option value="Michigan" <?php echo $user->state == "Michigan" ? "selected" : "";?>>Michigan</option>
                        <option value="Minnesota" <?php echo $user->state == "Minnesota" ? "selected" : "";?>>Minnesota</option>
                        <option value="Mississippi" <?php echo $user->state == "Mississippi" ? "selected" : "";?>>Mississippi</option>
                        <option value="Missouri" <?php echo $user->state == "Missouri" ? "selected" : "";?>>Missouri</option>
                        <option value="Montana" <?php echo $user->state == "Montana" ? "selected" : "";?>>Montana</option>
                        <option value="Nebraska" <?php echo $user->state == "Nebraska" ? "selected" : "";?>>Nebraska</option>
                        <option value="Nevada" <?php echo $user->state == "Nevada" ? "selected" : "";?>>Nevada</option>
                        <option value="New Hampshire" <?php echo $user->state == "New Hampshire" ? "selected" : "";?>>New Hampshire</option>
                        <option value="New Jersey" <?php echo $user->state == "New Jersey" ? "selected" : "";?>>New Jersey</option>
                        <option value="New Mexico" <?php echo $user->state == "New Mexico" ? "selected" : "";?>>New Mexico</option>
                        <option value="New York" <?php echo $user->state == "New York" ? "selected" : "";?>>New York</option>
                        <option value="North Carolina" <?php echo $user->state == "North Carolina" ? "selected" : "";?>>North Carolina</option>
                        <option value="North Dakota" <?php echo $user->state == "North Dakota" ? "selected" : "";?>>North Dakota</option>
                        <option value="Ohio" <?php echo $user->state == "Ohio" ? "selected" : "";?>>Ohio</option>
                        <option value="Oklahoma" <?php echo $user->state == "Oklahoma" ? "selected" : "";?>>Oklahoma</option>
                        <option value="Oregon" <?php echo $user->state == "Oregon" ? "selected" : "";?>>Oregon</option>
                        <option value="Pennsylvania" <?php echo $user->state == "Pennsylvania" ? "selected" : "";?>>Pennsylvania</option>
                        <option value="Rhode Island" <?php echo $user->state == "Rhode Island" ? "selected" : "";?>>Rhode Island</option>
                        <option value="South Carolina" <?php echo $user->state == "South Carolina" ? "selected" : "";?>>South Carolina</option>
                        <option value="South Dakota" <?php echo $user->state == "South Dakota" ? "selected" : "";?>>South Dakota</option>
                        <option value="Tennessee" <?php echo $user->state == "Tennessee" ? "selected" : "";?>>Tennessee</option>
                        <option value="Texas" <?php echo $user->state == "Texas" ? "selected" : "";?>>Texas</option>
                        <option value="Utah" <?php echo $user->state == "Utah" ? "selected" : "";?>>Utah</option>
                        <option value="Vermont" <?php echo $user->state == "Vermont" ? "selected" : "";?>>Vermont</option>
                        <option value="Virginia" <?php echo $user->state == "Virginia" ? "selected" : "";?>>Virginia</option>
                        <option value="Washington" <?php echo $user->state == "Washington" ? "selected" : "";?>>Washington</option>
                        <option value="West Virginia" <?php echo $user->state == "West Virginia" ? "selected" : "";?>>West Virginia</option>
                        <option value="Wisconsin" <?php echo $user->state == "Wisconsin" ? "selected" : "";?>>Wisconsin</option>
                        <option value="Wyoming" <?php echo $user->state == "Wyoming" ? "selected" : "";?>>Wyoming</option>
                    </select>
                    <div class="invalid-feedback">Field required.</div>
                </div>
                <div class="col-6 form-group">
                    <label for="zip">Zip</label>
                    <input name="zip" id="zip" class="form-control" value="<?php echo $user->zip;?>" required />
                    <div class="invalid-feedback">Field required.</div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 form-group">
                    <label for="phone">Phone</label>
                    <input name="phone" id="phone" class="form-control" value="<?php echo $user->phone;?>" required />
                    <div class="invalid-feedback">Field required.</div>
                </div>
                <div class="col-12 form-group">
                    <label for="dob">Date of birth</label>
                    <input type="date" name="dob" id="dob" class="form-control" value="<?php echo $user->dob;?>" required />
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