<script>
	$(document).ready(function(){
		//countDown
		$('#countdown_dashboard').countDown({
			targetDate: {
				'day': 		27,
				'month': 	04,
				'year': 	2013,
				'hour': 	11,
				'min': 		0,
				'sec': 		0
			}
		});
	});
</script>
<div id="sticker">
    <div id="countdown_dashboard">
        <div class="dash weeks_dash">
            <span class="dash_title">weeks</span>
            <div class="digit">0</div>
            <div class="digit">0</div>
        </div>

        <div class="dash days_dash">
            <span class="dash_title">days</span>
            <div class="digit">0</div>
            <div class="digit">0</div>
        </div>

        <div class="dash hours_dash">
            <span class="dash_title">hours</span>
            <div class="digit">0</div>
            <div class="digit">0</div>
        </div>

        <div class="dash minutes_dash">
            <span class="dash_title">minutes</span>
            <div class="digit">0</div>
            <div class="digit">0</div>
        </div>

        <div class="dash seconds_dash">
            <span class="dash_title">seconds</span>
            <div class="digit">0</div>
            <div class="digit">0</div>
        </div>
        <span class="daysInfo">Until Launch</span>
    </div><!-- END #countdown_dashboard -->
</div><!-- END #sticker -->