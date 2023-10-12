
<?php


$fileHeading = $args['file_subheading'];
$fileUploads = $args['file_upload_section'];?>

<div class="my-5"><?php

// Display subheading
if( $fileHeading ): ?>
    <h3><?php echo $fileHeading ?></h3>
    <?php endif; 



    // Loop over sub repeater rows.
    if( $fileUploads): 

        

        
            foreach ($fileUploads as $fileUpload) :  ?>



        

                <!-- Display acf file upload repeater fields -->
                <li class="file-upload-repeater">
                    <a href="<?php echo $fileUpload['file_upload'] ;?>" target="_blank">
                    <?php echo $fileUpload['file_title'] ?>
                    </a>
                </li>
                    
                <?php
            endforeach; 

        
    endif;?>

</div>


