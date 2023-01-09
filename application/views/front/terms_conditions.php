<div class="row">
<h1>Terms & Conditions</h1>
                     <?php
                        $pattern = "/<p[^>]*><\\/p[^>]*>/"; 
                        //$pattern = "/<[^\/>]*>([\s]?)*<\/[^>]*>/";  use this pattern to remove any empty tag
                        $description= preg_replace($pattern, '', $description); 
                        $description= preg_replace("{{website_title}}",$website_title, $description); 
                        $description= preg_replace("{{support_email}}",$support_email, $description); 
                        $description= preg_replace("{{address}}",$address, $description); 

                        $description= preg_replace("{{base_url}}",base_url(), $description); 


                        echo $description;
                        ?>					

		</div>
	</div>
