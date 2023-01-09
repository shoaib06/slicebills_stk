<form name="frm_contact" id="frm_contact" action="<?= base_url('/front/contact_submit')?>" method="post">
<div class="form-row">
    <label for="txt_email_address" style="float:left; width: 239px; margin-top: 10px;">Your Email Address:</label>
    <input type="email" name="email" id="txt_email_address" size="25" value="" style="float:left; width: 239px;" required >
</div>
<div class="form-row">
    <label for="txt_name" style="float:left; width: 239px;">Your Name:</label>
    <input type="text" name="name" id="txt_name" size="25" value="" style="float:left; width: 239px;" required >
</div>
<div class="form-row">
    <label for="sel_question_type" style="float:left; width: 239px;">Question Type:</label>
    <br>
    <select name="question_type" id="sel_question_type" size="1" style="float:left; width: 239px;" required>
        <option value="">--</option>
        <option value="Paid Email">Paid Email</option>
        <option value="Signup/Confirmation">Signup/Confirmation</option>
        <option value="Earnings/Points">Earnings/Points</option>
        <option value="Personal Information">Personal Information</option>
        <option value="Advertising">Advertising</option>
        <option value="Other">Other</option>
    </select>
</div>
<div class="form-row" style="float: left; width: 239px; margin-top: 10px;">
    <label for="txt_comments" style="float:left; width: 100%;">Question/Comment:</label>
    <textarea name="comment" id="txt_comments" cols="25" rows="10" style="float:left; width: 239px;" required></textarea>
</div>
<br>
<input type="hidden" name="from_home_page" value="1">
<div class="form-row" style="float: left; width: 239px; margin-top: 10px;">
    <label></label>
    <input type="image" src="<?= base_url('assets/front/images/btn-contact-us.gif')?>" name="btn_submit" id="btn_submit">
</div>
</form>