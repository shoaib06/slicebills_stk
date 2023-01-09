<div id="content">

    <!-- START NEW BLOG FORMAT-->
    <table width="900" height="100" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td width="600"><img src="<?php echo base_url('assets/front/') ?>images/news.png"></td>
            </tr>
        </tbody>
    </table>


    <div style="">
        <div id="postwrapper2">

            <div id="postheading2">
                <a name="Jan152013"></a>
                <font size="5" color="#fdfcd8"><b><?= date('F d,Y', strtotime($blog_date)) ?></b></font><br>
                <font size="4" color="white"><b><?= $heading ?></b></font>
            </div>

            <p><?= $description; ?></p><br>



        </div>
    </div>






    <!--END NEW BLOG FORMAT-->
    <div style="">

        <center>
            <table>
                <tbody>
                    <tr>
                        <td>
                            <img src="<?php echo base_url('assets/front/') ?>images/likeus.png">
                            <!--Facebook Plugin-->
                            <br><br>
                            <center>
                                <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fsignaturesurveys&amp;width=350&amp;height=185&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;border_color=%233AAFFD&amp;header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:350px; height:185px;" allowtransparency="true"></iframe>
                            </center>
                            <br><br>
                        </td>




                        <td style="padding-top: 160px;padding-left: 50px;" width="240px">
                            <!-- <?php

                            $tf = "https://twitframe.com/show?" . http_build_query(array(
                                "url" => "https://twitter.com/jack/status/20",
                                "tweet" => "just setting up my twttr",
                                "author_name" => "Jack Dorsey",
                                "author_username" => "jack",
                                "datetime" => "1142974214",
                            ));

                            echo "<iframe border=0 frameborder=0 height=250 width=100 "
                                . "src=\"" . $tf . "\"></iframe>";
                            ?> -->


                        </td>
                        <td style="padding-top: 160px;padding-left: 50px;" width="240px">
                            <img src="<?php echo base_url('assets/front/') ?>images/contactform.png"><br><br>


                            <?php include('application/views/front/includes/contact.php'); ?>


                        </td>
                    </tr>
                </tbody>
            </table>
        </center>
    </div>

</div>