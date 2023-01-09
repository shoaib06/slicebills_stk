<div id="primary" class="content-area" style="margin-top: 10px;">
    <main id="main" class="flow-container" role="main" style="background-color: #FFF;">


        <article id="post-476" class="post-476 post type-post status-publish format-standard has-post-thumbnail hentry category-blogs tag-budget tag-budget-friendly tag-decor tag-decorate tag-decorating tag-home tag-home-house tag-home-decor tag-homes tag-house tag-house-home tag-house-and-home tag-houses tag-money-saving-tips tag-save-money tag-saving-money" class="wp_article">
            <header class="entry-header" style="padding-top: 3px;">
                <h1 class="entry-title"><?= $blog->heading; ?></h1>
            </header><!-- .entry-header -->
            <footer class="entry-footer" style="padding-top: 10px; padding-bottom: 20px; background-color: #FFF;">
                <span class="posted-on"><span class="screen-reader-text">Posted on </span><a href="<?= date('F, d Y', strtotime($blog->blog_date)); ?>" rel="bookmark"><time class="entry-date published updated" datetime="2022-04-01T20:08:25+00:00"><?= date('F, d Y', strtotime($blog->blog_date)); ?></time></a></span><span class="cat-links"><span class="screen-reader-text">Categories </span><a href="<?= base_url('assets/front/blogs') ?>" rel="category tag">Blogs</a></span>
            </footer><!-- .entry-footer -->

            <div class="post-thumbnail">
                <img width="825" height="510" src="<?= base_url('uploads/') . $blog->image; ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="ST post template KT" srcset="<?= base_url('uploads/') . $blog->image; ?> 300w, <?= base_url('uploads/') . $blog->image; ?> 768w, <?= base_url('uploads/') . $blog->image; ?>g 1024w, <?= base_url('uploads/') . $blog->image; ?> 825w" sizes="(max-width: 825px) 100vw, 825px" />
            </div><!-- .post-thumbnail -->



            <div style="width: 100%;margin-top: 10px;">
                <div style="font-size:16px;font-weight:bold;color:rgb(255,26,0); padding-bottom: 10px;">
                    For more sweepstakes offers and money-saving content, sign up for our email newsletter!
                </div>
                <div style="width: 100%; max-width: 300px; text-align: center;margin:0 auto;">
                    <a href="<?= base_url('front/subscribe')?>">
                        <img src="<?php echo base_url('assets/front/'); ?>images/subscribe-blog.jpg" width="250px" title="For more sweepstakes offers and money-saving content, sign up for our email newsletter" />
                    </a>
                </div>
            </div>
            <div class="entry-content" style="padding-top: 10px; padding-bottom: 10px; font-size: 16px;">
                <?= $blog->description; ?>
            </div><!-- .entry-content -->


        </article><!-- #post-## -->

        <nav class="navigation post-navigation" role="navigation">
            <div class="nav-links">
                <?php if($prev_blog): ?>
                <div class="nav-previous"><a href="<?= base_url('front/blogs_inner/').$prev_blog->url; ?>" rel="prev"><span class="meta-nav" aria-hidden="true"></span> <span class="screen-reader-text">Previous post:</span> <span class="post-title"><?= $prev_blog->heading; ?></span></a></div>
                <?php endif;?>
                <?php if($next_blog): ?>

                <div class="nav-next"><a href="<?= base_url('front/blogs_inner/').$next_blog->url; ?>" rel="next"><span class="meta-nav" aria-hidden="true"></span> <span class="screen-reader-text">Next post:</span> <span class="post-title"><?= $next_blog->heading; ?></span></a></div>
                <?php endif;?>

            </div>
        </nav>
        <div class="flow-container" style="padding: 0px; background-color: #FFF; margin-bottom: 10px; margin-left: -15px; margin-right: -15px;">
            <!-- google ads -->
            <div style="float: left; width: 100%; margin-top: -5px; background-color: #FFF;">
                <!-- google ads -->
                <div style="float: left; width: 100%; margin-bottom: 12px; margin-top: 10px;">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <ins class="adsbygoogle" style="display:block;height:90px" data-ad-client="ca-pub-8671677597760471" data-ad-slot="9139908345" data-ad-format="auto">
                    </ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
                <!-- End of google ads -->
                <div style="float: left; width: 100%; height: 3px; margin-bottom: 0px; background-color: #FFF;margin-top: 0px;"> &nbsp;</div>
            </div>
            <!-- End of google ads -->
        </div>
    </main><!-- .site-main -->
</div><!-- .content-area -->

<!-- footer -->
<div class="row flow-container" style="padding: 0px;">
    <div class="col-xs-12">
        <footer style="" id="wp_footer">
            <!-- footer links -->
            <div class="msFooterLinks">
                <ul>
                    <li><a href="<?php echo base_url(); ?>front/official_rules">Official Rules</a> <span>&#124</span></li>
                    <li><a href="<?= base_url('front/privacy') ?>">Privacy Policy</a> <span>&#124</span></li>
                    <li><a href="<?= base_url('front/terms') ?>">Terms &amp Conditions</a> <span>&#124</span>
                    </li>
                    <li><a href="<?= base_url('front/contact') ?>">Contact</a> <span>&#124</span></li>
                    <li><a href="<?= base_url('front/faq') ?>">FAQ</a> <span>&#124</span></li>
                    <li><a href="<?= base_url('front/winners') ?>">Winners</a> <span>&#124</span></li>
                    <li><a href="<?= base_url('front/blogs'); ?>">Blog</a> <span>&#124</span></li>
                    <li><a href="<?= base_url('front/donotsell') ?>">Do Not Sell My Personal Information</a> <span>&#124</span>
                    </li>
                    <li><a href="<?= base_url('front/unsub') ?>">Unsubscribe</a></li>
                </ul>
            </div>
            <!-- End of footer links -->
            <img src="<?= base_url() ?>/assets/front/images/blue_strip.png" style="vertical-align:top;" width="100%" alt="blue strip">
            <!-- footer dislaimer -->
            <?php $footer_text = $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'footer_text')); ?>
            <?= $footer_text; ?>
            </p>
            <!-- End of footer dislaimer -->
            <div style="width:0;height:0;overflow:hidden">
            </div>
        </footer>
    </div>
</div>
<!-- End of foote -->
</div>
<!-- End of main page content -->
</div>
<!-- End of class ms -->
</div>
<!-- End of container non responsive -->
</body>

</html>