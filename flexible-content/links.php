
<?php


$linksHeading = $args['links_subheading'];
$linksUploads = $args['links_section'];?>

<div class="my-5"><?php


// Display subheading
if( $linksHeading ): ?>
    <h3><?php echo $linksHeading ?></h3>
    <?php endif; 


    // Loop over sub repeater rows.
    if( $linksUploads): 

        

        
            foreach ($linksUploads as $linksUpload) :  ?>



        

                <!-- Display acf file upload repeater fields -->
                <li class="links-repeater">
                    <a href="<?php echo $linksUpload['link_url'] ;?>" target="_blank">
                    <?php echo $linksUpload['link_title'] ?>
                    </a>
                </li>
                    
                <?php
            endforeach; 

        
    endif;?>

</div>


