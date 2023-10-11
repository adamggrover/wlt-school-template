<?php
// Display subheading

$heading = $args['heading'];
$textArea = $args['text_area'];


if( $heading): ?>
    <h2><?php echo $heading ?></h2>
<?php endif;?>

<div class='mb-5'><?php
echo $textArea;?>
</div>