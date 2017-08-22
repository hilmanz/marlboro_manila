<div id="trackingPage">
<?php include('widget/countdown.php'); ?>
<div id="circleLogin" class="trackingCodePage">
	<div class="circleContent">
    	<h1>SUBMIT TRACKING CODE</h1>
		<h3>enter the tracking code sent to your e-mail to submit your valid government-issued id</h3>
        <form class="trackingCode theForms" action="">
        	<div class="row">
                <div class="the-field"  onclick="$(this).find('#value-code').hide();">
      				<input type="text" name="code" class="full-width required" onBlur="if(this.value=='')$('#value-code').show();"/>
                 	<span class="the-value" id="value-code">ENTER YOUR CODE HERE</span>
                </div>
            </div>
            <div class="row">
            	<a href="index.php" class="backtologin">Back to login page</a>
            </div>
            <div class="row rowSubmit">
            	<input type="submit" value="&nbsp;" class="loginBtn" />
            </div>
        </form>
    </div><!-- END .circleContent -->
</div><!-- END #circleLogin -->
</div>