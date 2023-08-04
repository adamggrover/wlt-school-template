<?php
/*
 * Default Events List Template
 * This page displays a list of events, called during the em_content() if this is an events list page.
 * You can override the default display settings pages by copying this file to yourthemefolder/plugins/events-manager/templates/ and modifying it however you need.
 * You can display events however you wish, there are a few variables made available to you:
 * 
 * $args - the args passed onto EM_Events::output()
 * 
 */
$args = apply_filters('em_content_events_args', $args);
if( empty($args['id']) ) $args['id'] = rand(); // prevent warnings
$id = esc_attr($args['id']);
?>

<div id="calendar-subscribe-link-container" class="mb-0">
	<i class="fa-regular fa-calendar-days"></i>
	<p>Subscribe to full calendar</p>
	
</div>

<!-- get ical feed url -->
<?php 
		
		$site_url = get_home_url(); 
		$url = preg_replace("(^https?)", "webcal", $site_url ); 
		
?>

<div id="cal-feed-instructions-container">
	<div class="cal-feed-link-container">

		<div class="cal-feed-instructions">
			<i id="instructions-close-btn" class="fa-solid fa-square-xmark"></i>
			<p><small>Please find below instructions on how to configure some of the most popular calendar programmes to automatically display dates from our calendar using the address below:</small></p>
			<p><small><?php echo $url . "/events.ics"; ?></small></p>
			<p><small>Copy the URL below and click the device type below for further instructions:</small></p>

		</div>
	</div>
</div>




<div class="<?php em_template_classes('view-container'); ?>" id="em-view-<?php echo $id; ?>" data-view="list-grouped">
	<div class="<?php em_template_classes('events-list', 'events-list-grouped'); ?>" id="em-events-list-grouped-<?php echo $id; ?>">
	<?php
	echo EM_Events::output_grouped($args); //note we're grabbing the content, not em_get_events_list_grouped function
	?>
	</div>
</div>