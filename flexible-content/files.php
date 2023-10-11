
<?php


$fileHeading = $args['file_subheading'];
$fileUploads = $args['file_upload_section'];



// Display subheading
if( $fileHeading ): ?>
    <h3><?php echo $fileHeading ?></h3>
    <?php endif; 



    // Loop over sub repeater rows.
    if( $fileUploads): ?>

        <div class="mb-5"><?php

        
            foreach ($fileUploads as $fileUpload) :  ?>



        

                <!-- Display acf file upload repeater fields -->
                <li class="file-upload-repeater">
                    <a href="<?php echo $fileUpload['file_upload'] ;?>" target="_blank">
                    <?php echo $fileUpload['file_title'] ?>
                    </a>
                </li>
                    
                <?php
            endforeach; ?>

        </div><?php
    endif;




