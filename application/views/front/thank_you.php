<div class="container thankyou">
    <div id="content" class="site-content">
        <div class="wrap">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
                    <article id="post-173" class="post-173 page type-page status-publish hentry">
                        <!--<header class="entry-header">
								<h1 class="entry-title">Thanks</h1>
							</header>
							<?php $phone = $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'phone')); ?>
							<div class="entry-content">
								<p class="thanks" style="text-align: center; margin-bottom: 0;"><strong>Congratulations !</strong> based on the information you provided, you pre-qualify for the loan forgiveness program.</p>
								<p class="thanks" style="text-align: center; margin-bottom: 0;">Please call&nbsp;<strong><a href="tel:<?php echo $phone; ?>"><span style="color: #ff6600;"><?php echo $phone; ?></span>&nbsp;</a></strong>to speak to a counselor and complete your application now.</p>
								<p style="text-align: center;">If you can’t talk to a counselor now, one will be in touch within the next 24 hours to discuss your eligibility.</p>
							</div>-->
                        <?php
                        $pattern = "/<p[^>]*><\\/p[^>]*>/";
                        //$pattern = "/<[^\/>]*>([\s]?)*<\/[^>]*>/";  use this pattern to remove any empty tag
                        echo preg_replace($pattern, '', $description);
                        ?>
                    </article>
                </main>
            </div>
        </div>
    </div>
</div>
</section>

<style>
    .colored {
        color: #ffdc12;
    }

    .display {
        display: inline-block;
    }

    .haide {
        display: none;
    }

    .subForm {
        margin: 10px 0 30px 0;
        text-align: center;
    }
</style>