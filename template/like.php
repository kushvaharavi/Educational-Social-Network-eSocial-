 <html>
 <head>
     
 <link rel="stylesheet" type="text/css" href="./styles/like.css">

 </head>
 <body>
 <div class="tab-tr" id="t1">
            <div class="like-btn <?php if($like_count == 1){ echo 'like-h';} ?>">Like</div>
            <div class="dislike-btn <?php if($dislike_count == 1){ echo 'dislike-h';} ?>"></div>

            <div class="share-btn">Share</div>

            <div class="stat-cnt">
                <div class="rate-count"><?php echo $rate_all_count; ?></div>
                <div class="stat-bar">
                    <div class="bg-green" style="width:<?php echo $rate_like_percent; ?>%;"></div>
                    <div class="bg-red" style="width:<?php echo $rate_dislike_percent; ?>%"></div>
                </div><!-- stat-bar -->
                <div class="dislike-count"><?php echo $rate_dislike_count; ?></div>
                <div class="like-count"><?php echo $rate_like_count; ?></div>
            </div><!-- /stat-cnt -->
        </div><!-- /tab-tr -->
        <div class="share-cnt">

            <!-- AddThis Button BEGIN -->
            <div class="addthis_toolbox addthis_default_style ">
            <a class="addthis_button_linkedin_counter"></a>
            <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
            <a class="addthis_button_tweet"></a>
            <a class="addthis_button_google_plusone" g:plusone:size="medium"></a> 
            <a class="addthis_button_pinterest_pinit"></a>
            <a class="addthis_counter addthis_pill_style"></a>
            </div>
            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5174d2b853d85895"></script>
            <!-- AddThis Button END -->

        </div><!-- /share-cnt -->

        </body>
        </html>