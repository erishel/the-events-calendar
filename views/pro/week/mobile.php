<script type="text/html" id="tribe_tmpl_week_mobile">
	<div class="tribe-events-mobile hentry vevent tribe-clearfix [[=eventClass]]">
		<h4 class="summary">
			<a class="url" href="[[=permalink]]" title="[[=title]]" rel="bookmark">[[=title]]</a>
		</h4>
		<div class="tribe-events-event-body">
			<div class="updated published time-details">
				<span class="date-start dtstart">[[=startTime]] </span>
				[[ if(endTime.length) { ]]
				-<span class="date-end dtend"> [[=endTime]]</span>
				[[ } ]]
			</div>
			[[ if(imageSrc.length) { ]]
			<div class="tribe-events-event-image">
				<a href="[[=permalink]]" title="[[=title]]">
					<img src="[[=imageSrc]]" alt="[[=title]]" title="[[=title]]">
				</a>
			</div>
			[[ } ]]
			<p class="entry-summary description"></p>
			<a href="[[=permalink]]" class="tribe-events-read-more" rel="bookmark">Find out more »</a>
		</div>
	</div>
</script>