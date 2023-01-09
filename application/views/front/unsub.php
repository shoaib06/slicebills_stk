<div class="msMainContent">
    <div class="msMainContentBG">

        <div style="padding:10px 10px 10px 50px;">
            <h1>Unsubscribe</h1>

            <p>To unsubscribe or 'opt out' of <?= $website_title; ?> emails and promotions, please enter your email
                address below.</p>
            <form name="unsubscribe" id="unsubscribe" action="<?= base_url('front/unsubSubmit'); ?>" method="POST">
                <?php $this->common_model->showAlertMsg(); ?>

                <p><strong>Email Address:</strong> <input type="text" name="email" id="email" size="40" value="" /></p>
                <p id="buttonHide"><input class="subButton" type="submit" name="btn_submit" id="btn_submit" value="Unsubscribe" onclick="$('#buttonHide').hide();$('#buttonHide2').show();" />
                </p>
                <div id="buttonHide2" style="display:none;"><img src="<?= base_url('assets/front/') ?>images/processing2.gif" title="processing image" /></div>
            </form>

            <p>
                <b style="font-size:20px;">Mailing Address</b><br />
                <?= $website_title; ?><br />
                <?= $address_text; ?>
            </p>
        </div>
    </div>