





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
                            
                            <p class="card-link-text news-card-date mt-2"><small><?php echo get_the_date(); ?></small></p>
                          </div>
                          <!--<div class="news-card-line-container mt-3"></div>-->
 
                        </div>
                        
                      
                  
                  
                    
                  </div>
 
                  
                  
                </div>
                </a> 
              </div>
              
               
            </div>
          

