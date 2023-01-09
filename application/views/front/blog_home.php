<table style="width:960px; margin-top:25px; margin-left:0px;">
    <tbody>
        <tr>
            <td>
                <div>
                    <!--Left side-->

                    <div style="float: left; width: 480px;">
                        <h1>Latest News</h1>
                        <div id="postwrapper">
                            <p>
                            </p>
                            <?php foreach($news as $new) : ?>

                            <div id="postheading"> <a href="front/blog/<?php echo $new['url']; ?>" style="text-decoration: none; border: 0;">
                                    <font size="5" color="#fdfcd8"><b><?= date('F d,Y',strtotime($new['blog_date'])) ?></b></font><br>
                                    <font size="4" color="white"><b><?= $new['heading'] ?></b></font>
                                </a> </div>
                                <?php echo word_limiter($new['description'], 50); ?><a href="front/blog/<?php echo $new['url']; ?>">.......Read More</a>
                            <p></p>
                            <p>

                            </p>
                            <?php endforeach; ?>
                            
                        </div>
                    </div>

                    <!--Right side-->
                    <div style="float: right; width: 480px;">
                        <h1>About</h1>
                        <?= word_limiter($about_section['description'], 100);?>
                        <p style="font-size: 10px; font-style: italic;">* <?= $website_title; ?>.com is 100% free to join. Some featured offers require a credit card to satisfy completion requirements.</p>

                        <!--Facebook Plugin-->
                        <br>
                        <br>
                        <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2F<?= $website_title; ?>&amp;width=450&amp;height=185&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;border_color=%233AAFFD&amp;header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:185px;" allowtransparency="true"></iframe>
                        <br>
                        <br>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <!--Bottom-->

                <div style="width:960px; margin-top:25px;">
                    <table width="960px" style="text-align: left;">
                        <tbody>
                            <tr>
                                <th width="240px">
                                    <font style="font-size: 18px; color: #3AAFFD;"> Links </font>
                                </th>
                                <th width="240px">
                                    <font style="font-size: 18px; color: #3AAFFD;"> Contact Information </font>
                                </th>
                                <!--<th width="240px"> <font style="font-size: 18px; color: #3AAFFD;"> Twitter Feed </font> </th> -->
                                <th width="240px">
                                    <font style="font-size: 18px; color: #3AAFFD;"> Contact Form </font>
                                </th>
                            </tr>
                            <tr>
                                <?php $this->common_model->showAlertMsg();?>
                            </tr>
                            <tr>
                                <!--Links-->
                                <td width="240px">
                                    <ul style="margin: -250px 0px 0px 23px;">
                                        <li> <a href="https://www.facebook.com/<?= $website_title; ?>" target="_blank">Facebook</a> </li>
                                        <!--<li> <a href="https://twitter.com/Join_Surveys" target="_blank">Twitter</a> </li> -->
                                        <li> <a href="<?= base_url('front/faq'); ?>" target="_blank">FAQ</a> </li>
                                    </ul>
                                </td>

                                <!--Contact Info-->
                                <td width="240px">
                                    <p style="margin: -265px 0px 0px -13px;"> <?= $website_title; ?>.com<br>
                                        <?= $address;?>
                                    </p>
                                </td>

                                <!--Twitter
								<td width="240px">
									<!--<p style="margin: 0px 0px 0px -15px;"> <a class="twitter-timeline" data-dnt=true href="https://twitter.com/Join_Surveys" data-widget-id="291948260480913408">Tweets by @Join_Surveys</a>
										<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
									</p>
								</td> -->

                                <!--Contact Form-->
                                <td width="240px">
                                   <?php include('application/views/front/includes/contact.php'); ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </td>
        </tr>
    </tbody>
</table>