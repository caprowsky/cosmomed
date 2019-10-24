<?php
/**
 * List View Title Template
 * The title template for the list view of events.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list/title-bar.php
 *
 * @package TribeEventsCalendar
 * @version 4.6.19
 * @since   4.6.19
 *
 */
?>

<div class="tribe-events-title-bar">

	<!-- List Title -->
	<?php do_action( 'tribe_events_before_the_title' ); ?>
	<h1 class="tribe-events-page-title"><?php echo tribe_get_events_title() ?></h1>
	<?php do_action( 'tribe_events_after_the_title' ); ?>
	<h2 class="tribe-events-list-separator-month"><span>
		<a class="tribe-event-url" href="https://www.cosmomed.org/wp-content/uploads/2019/10/CALENDARIO-EVENTI-23.10.2019.pdf" title="Elenco Eventi in PDF" rel="bookmark">
					Scarica l'elenco eventi in PDF</a>

	</span></h2>
</div>
