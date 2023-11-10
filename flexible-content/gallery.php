<?php

$gallery = $args['wp_gallery'];

?>

<div class='mb-5'><?php

if( $gallery ) {

    // Generate string of ids ("123,456,789").
    $images_string = implode( ',', $gallery );

    // Generate and do shortcode.
    // Note: The following string is split to simply prevent our own website from rendering the gallery shortcode.
    $shortcode = sprintf( '[' . 'gallery ids="%s"]', esc_attr($images_string) );
    echo do_shortcode( $shortcode );
}
?>
</div>

<?php


