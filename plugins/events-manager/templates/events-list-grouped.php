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

		<div class="cal-feed-instructions mb-0">
			<i id="instructions-close-btn" class="fa-solid fa-square-xmark"></i>
			
			<p><small>To subscribe to the calendar copy the url below and then follow the relevant instructions for your calendar programme of choice.</small></p>
			<input id="iCalUrl" type="text" value="<?php echo $url . "/events.ics"; ?>" >
			<div class="copy-text-btn-container-wrapper">
				<div class="copy-text-btn-container">
					<i id="copy-text-btn" class="fa-solid fa-clone mb-0"></i>
				</div>
			</div>
			<div id="copy-text-notification-wrapper">
				<p>Text copied</p>
			</div>
			<a href="https://support.office.com/en-us/article/Import-or-subscribe-to-a-calendar-in-Outlook-com-cff1429c-5af6-41ec-a5b4-74f2c278e98c"><li>Outlook</li></a>
			<a href="https://support.google.com/calendar/answer/37100?hl=en"><li>Gmail/Android</li></a>
			<a href="webcal://www.theblueschoolwells.co.uk/calendar/events.ics"><li>iPhone</li></a>
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