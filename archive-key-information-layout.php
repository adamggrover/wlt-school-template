





<div class="col">


<?php
                            
                            // count number of file blocks in post and assign to variable

                            $blocks = parse_blocks($post->post_content);

                            $file_block_count = 0;

                            foreach ($blocks as $block) {
                               
                                if ($block['blockName'] == 'core/file') {
                                    ++$file_block_count;
                                }
                                    
                               
                            }

                            
                   
                        
                            ?>
    
     
    
          
        <a class="key-information-item-link" href="<?php the_permalink(); ?>">
            
            <div class="key-information-item-container">
            
                <div class="key-information-item-content">

                    <h2 class="key-information-title h5"><?php the_title();?></h2>

                    <!--<?php 
                           if ($file_block_count > 0) {
                            ?>
                            <div class="key-information-icon-wrapper"><div><i class="fa-solid fa-file"></i></div><span></span><p class="file-count"><?php echo $file_block_count;?></p></div>
                        <?php
                        
                        }else{}
            
                    ?>-->
                    
                    
                </div>

                
            </div>
              
            
</a>

<div>
            





            
            
      
      
        </div>




        
      
      
    
    
   
  
    
  </div>

  




