<?php
    get_header();
?>
 
    

        
<!-- New welcome section-->
    
    <section id="welcome" class="anchor-tag">

        <div class="welcome-background">


            <div class="container d-lg-none ">
              <div class="row pt-2">
                <div data-aos="fade-up" data-aos-delay="200" data-aos-duration='800' >
                          <div class="welcome-text-content">
                                  <h3 CLASS="display-1 mb-4 welcome-title">Welcome</h3>
                              <!--<h4 class="display-5">To Weare Academy</h4>-->
                             <div class="welcome-excerpt">
                                <?php

                                  // The Query
                                  $the_query = new WP_Query( array( 'pagename' => 'welcome' ) );

                                  // The Loop
                                  if( $the_query->have_posts() ){ 

                                    while( $the_query->have_posts() ) : $the_query->the_post(); ?>



                                    <?php the_excerpt(); ?>

                                    <?php

                                  endwhile; 
                                }

                                  /* Restore original Post Data */
                                  wp_reset_postdata();
                                  ?>

                              </div>
                              <a class="welcome-link" href="<?php
                            $page_object = get_page_by_path( '/welcome' );
                            $page_id = $page_object->ID;
                            $permalink = get_permalink( $page_id );
                            echo $permalink;
                            ?>" class="">READ MORE</a>
                          </div>
                  </div>   

              </div>
            </div>

        

            <div class="container d-none d-lg-block">

                

                <div class="row">

                    <div class="col-lg-6 d-flex align-items-center pt-5" data-aos="fade-up" data-aos-delay="200" data-aos-duration='800' >
                        <div class="left-welcome-content welcome-text-content col-10 p-0">
                                <h3 CLASS="display-1 mb-4 welcome-title">Welcome</h3>
                            <!--<h4 class="display-5" id="welcome-display-text">To Weare Academy</h4>-->
                                <div class="welcome-excerpt">                  
                                  <?php

                                      // The Query
                                      $the_query = new WP_Query( array( 'pagename' => 'welcome' ) );

                                      // The Loop
                                      if( $the_query->have_posts() ){ 

                                        while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                              

                          
                                        <?php the_excerpt(); ?>

                                        <?php
                
                                    endwhile; 
                                  }
                                    
                                      /* Restore original Post Data */
                                      wp_reset_postdata();
                                  ?>
                                </div>    
                            <a class="welcome-link" href="<?php
                            $page_object = get_page_by_path( '/welcome' );
                            $page_id = $page_object->ID;
                            $permalink = get_permalink( $page_id );
                            echo $permalink;
                            ?>">READ MORE</a>
                        </div>
                    </div>   
                    <div class="welcome-right-background col-lg-6 pt-5">
                        
                        <div class="welcome-video-container" data-aos="fade-left" data-aos-delay="600" data-aos-duration='800'>
                          <!--<video width="800" controls class="img-fluid">
                          <source src="mov_bbb.mp4" type="video/mp4">
                          <source src="mov_bbb.ogg" type="video/ogg">
                            Your browser does not support HTML5 video.
                          </video>-->
                          <?php $image = get_field('welcome_image'); ?>
                  <?php if($image): //dont output an empty image tag ?>


                 <img src="<?php echo $image['sizes']['medium']; ?>" alt="Avatar" class="image img-fluid img-link-img"> 

                 
       
                  <?php endif; ?>

                        </div>
                        
        
                    </div>

                </div>  


            </div>

        </div>
        </section>
        

        <!-- New links section-->
        <section id="img-links-section">

        <div class="container p-3">
        <div class="row row-cols-2 row-cols-lg-4">

<div class="col img-link-col">
  <div class="img-container img-link-1">

  <?php

$post_object = get_field('image_page_link_1'); ?>

<a href="<?php echo get_permalink($post_object); ?>" class="img-link">

      <div class="mask"></div>  

      <?php $image = get_field('image_link_square_1'); ?>
      <?php if($image): //dont output an empty image tag ?>


     <img src="<?php echo $image['sizes']['medium']; ?>" alt="Avatar" class="image img-fluid img-link-img"> 

     

      <?php endif; ?>

    

      <div class="overlay img-fluid img-link-overlay" 
      >

      </div>

      <div class="img-link-text-container">
        <h2 class="text h5 img-link-text mb-0"><?php echo get_the_title($post_object); ?></h2>
      </div>
      <div class="img-link-line-container"></div>
    </a>
  </div>
</div>

<div class="col img-link-col">
  <div class="img-container img-link-1">
  <?php

   $post_object = get_field('image_page_link_2'); ?>

    <a href="<?php echo get_permalink($post_object); ?>" class="img-link">

      <div class="mask"></div>  

      <?php $image = get_field('image_link_square_2'); ?>
      <?php if($image): //dont output an empty image tag ?>


     <img src="<?php echo $image['sizes']['medium']; ?>" alt="Avatar" class="image img-fluid img-link-img"> 

     

      <?php endif; ?>

      <div class="overlay img-fluid img-link-overlay" >

      </div>

      <div class="img-link-text-container">
        <h2 class="text h5 img-link-text mb-0"><?php echo get_the_title($post_object); ?></h2>
      </div>
      <div class="img-link-line-container"></div>
    </a>
  </div>
</div>

<div class="col img-link-col">
  <div class="img-container img-link-1">
  <?php

$post_object = get_field('image_page_link_3'); ?>

<a href="<?php echo get_permalink($post_object); ?>" class="img-link">

      <div class="mask"></div>  

      <?php $image = get_field('image_link_square_3'); ?>
      <?php if($image): //dont output an empty image tag ?>


     <img src="<?php echo $image['sizes']['medium']; ?>" alt="Avatar" class="image img-fluid img-link-img"> 

     

      <?php endif; ?>

      <div class="overlay img-fluid img-link-overlay" 
      >

      </div>

      <div class="img-link-text-container">
        <h2 class="text h5 img-link-text mb-0"><?php echo get_the_title($post_object); ?></h2>
      </div>
      <div class="img-link-line-container"></div>
    </a>
  </div>
</div>

<div class="col img-link-col">
  <div class="img-container img-link-1">
  <?php

$post_object = get_field('image_page_link_4'); ?>

<a href="<?php echo get_permalink($post_object); ?>" class="img-link">

      <div class="mask"></div>  

      <?php $image = get_field('image_link_square_4'); ?>
      <?php if($image): //dont output an empty image tag ?>


     <img src="<?php echo $image['sizes']['medium']; ?>" alt="Avatar" class="image img-fluid img-link-img"> 

     

      <?php endif; ?> 

      <div class="overlay img-fluid img-link-overlay" 
      >

      </div>

      <div class="img-link-text-container">
        <h2 class="text h5 img-link-text mb-0"><?php echo get_the_title($post_object); ?></h2>
      </div>
      <div class="img-link-line-container"></div>
    </a>
  </div>
</div>

</div>
            
          </div>


          

            
         
              
      </section>





   <!--NEWS LINKS SECTION-->

   <?php

if (get_field('display_news') == "yes"):

  $news_slug = get_field('news_slug'); 

  ?>

   <section id="news" class="">

<!-- <div class="section-headings text-center row">
     <h2 class="mt-5 mb-3 section-title">Latest News</h2>
     <a href="<?php
             $page_object = get_page_by_path( "/{$news_slug}" );
             $page_id = $page_object->ID;
             $permalink = get_permalink( $page_id );
             echo $permalink;
             ?>" class=" section-link">View all news</a>
 </div> -->
<div class="news-card-container-container">
 <div class="container mb-0 p-3">
   
 
     
     <div class="row gy-5 row-cols-1 row-cols-md-4 mb-4 mt-1" data-aos="fade-up" data-aos-delay="100">

          


       <?php
         
         $newsPosts = new WP_Query( array( 'pagename' => $news_slug, 'posts_per_page' => '4' ) );
         

         while ($newsPosts->have_posts()) : $newsPosts->the_post(); ?>

         
           <div class="col d-flex align-items-stretch">
              
             <div id="news-card-container">
             <a class="news-card-link img-fluid" href="<?php the_permalink();?>"> 
             
               <div class="card h-100 news-card">
                   
                   
                 <div class="news-card-content">
                   

                       <div class="card-img-container">
                       <div class="news-overlay"></div>
                         <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="">
                         
                       </div>

                       <div class="card-body p-1" id ="news-card-body">
                         <!--<h6 class=""><?php the_tags('',' | ');?></h6>-->
                         <h5 class="news-card-title mt-1 mb-1"><?php the_title();?></h5>

                         

                         <div class="card-body-text">
                           <!--<p><?php the_excerpt();?></p>-->
                           
                           <p class="card-link-text news-card-date mt-2"><small><?php the_date(); ?></small></p>
                         </div>
                         <!--<div class="news-card-line-container mt-3"></div>-->

                       </div>
                       
                     
                 
                 
                   
                 </div>

                 
                 
               </div>
               </a> 
             </div>
             
              
           </div>
         <?php endwhile; ?>

         








         </div>

 
</div>
 
 </div>

 </section>

 <?php 
wp_reset_query();
endif; ?>


<!----------Twitter Section----------------------------------------------------->
<?php

if (get_field('display_twitter') == "yes"):



      $twitter_id = get_field('twitter_id'); 
      $url = "https://api.twitter.com/2/users/{$twitter_id}/tweets?exclude=retweets,replies&max_results=10&media.fields=preview_image_url,url&tweet.fields=text,created_at&expansions=attachments.media_keys,author_id&user.fields=url,username,profile_image_url";
      $authorization = "Authorization: Bearer AAAAAAAAAAAAAAAAAAAAAJy%2FjgEAAAAA9NWGe5o%2FjDoTFjnVrPfjPWFi1Cw%3DrotYh2pzyq7xypGwtoYDSQcBPbTlNU4X3T4NA8oPOdZhla50Pc";
  
      $ch = curl_init();
  
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $twitter = json_decode(curl_exec($ch));
      //curl_close($ch);
?>

<section id="twitter-section" class="">

<!-- <div class="section-headings text-center row">
<h2 class="mt-5 mb-3 section-title">Latest News</h2>
<a href="<?php
  $page_object = get_page_by_path( '/news-blog' );
  $page_id = $page_object->ID;
  $permalink = get_permalink( $page_id );
  echo $permalink;
  ?>" class=" section-link">View all news</a>
</div> -->
<div class="twitter-card-container-container">


<div class="container mb-0 p-0">




<div class="twitter-slider" data-aos="fade-up" data-aos-delay="100">






<?php 


$tweetCount = $twitter->meta->result_count; // assign tweet count to variable

for ($x = 0; $x < $tweetCount; $x++) {


$tweet = $twitter->data[$x]->text; // assign individual tweet to variable

// check tweet length if longer than 200, limit it at 200, if not return it


if (strlen($tweet) > 150){

 $tweet = mb_strimwidth($tweet, 0, 150, "...");
}else{
 $tweet = $tweet;

}


?>



<div class="twitter-slick-item p-2">
   
  <div class="twitter-card-container">
  <a class="twitter-card-link" href="https://twitter.com/<?php the_field('twitter_handle'); ?>/status/<?php print_r($twitter->data[$x]->id);?>" target="_blank"> 
  
    <div class="twitter-card">
        
        
      <div class="twitter-card-content">
        

            <div class="twitter-card-content-top">
               <div class="twitter-user-icon-container"><img class="twitter-user-icon" src="<?php $custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
echo $image[0]; ?>"><img></div>
               <h1 class="twitter-user-title h6"><?php echo get_bloginfo('name'); ?></h1>
            </div>
           

            <div class="twitter-card-body p-1">
              
              <p class="twitter-card-text mt-1 mb-1 p"><?php echo $tweet;?></p>
              <div class="twitter-card-bottom-icons-container">
               <a href="https://twitter.com/intent/retweet?tweet_id=<?php print_r($twitter->data[$x]->id);?>" target="_blank"><i class="fa-solid fa-retweet"></i></a>
               <a href="https://twitter.com/intent/tweet?in_reply_to=<?php print_r($twitter->data[$x]->id);?>" target="_blank"><i class="fa-regular fa-comment-dots"></i></a>
               <a href="https://twitter.com/intent/favorite?tweet_id=<?php print_r($twitter->data[$x]->id);?>" target="_blank"><i class="fa-regular fa-heart"></i></a>
             </div>

              

            </div>
            
          
      
      
        
      </div>

      
      
    </div>
    </a> 
  </div>
  
   
</div>

<?php } ?>











</div>


</div>

</div>

</section>

<?php endif; ?>
    

        <!--CALENDAR SECTION
        <section id="calendar-section">

            <div class="section-headings mb-5 text-center">
                <h2 class="section-title">Calendar</h2>
                <a class ="section-link" href="">VIEW FULL CALENDAR</a>
            </div>

            <div class="calendar-card-group justify-content-center row">

                <div class="calendar-card card col-sm-6 shadow" data-aos="fade-up" data-aos-delay="100">
                  
                  <div class="card-body text-center mt-5">
                        <h5 class="card-title h1 calendar-date">25</h5>
                        <p class="card-text calendar-month fw-bold">SEPT</p>
                        <p class="card-text calendar-event fw-bold">GCSE Results Day</p>
                        <p class="card-text calendar-time mt-5"><small>1800-1930</small></p>
                  </div>
                </div>

                <div class="calendar-card card col-sm-6 shadow" data-aos="fade-up" data-aos-delay="200">

                    <div class="card-body text-center mt-5">
                        <h5 class="card-title h1 calendar-date">25</h5>
                        <p class="card-text calendar-month fw-bold">JAN</p>
                        <p class="card-text calendar-event fw-bold">GCSE Results Day</p>
                        <p class="card-text calendar-time mt-5"><small>1800-1930</small></p>
                    </div>
                  
                  
                </div>
            </div>


        </section>

    -->

    <?php
    get_footer();
    ?>


