<div id="loginPage">
	<div class="loginPage">
		<?php include('widget/choose_btn.php'); ?>
        <?php include('widget/countdown.php'); ?>
        <div id="circleLogin">
            <div class="circleContent">
                <h1>Already registered?</h1>
                <h3>Please provide your log-in details below</h3>
                <form class="loginBox theForms" action="">
                    <div class="row">
                        <div class="the-field"  onclick="$(this).find('#value-email').hide();">
                            <input type="text" class="full-width required" onBlur="if(this.value=='')$('#value-email').show();"/>
                            <span class="the-value" id="value-email">Your@Email.com</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="the-field"  onclick="$(this).find('#value-password').hide();">
                            <input type="password" name="password" class="full-width required" onBlur="if(this.value=='')$('#value-password').show();"/>
                            <span class="the-value" id="value-password">XXXX XXX XXX</span>
                        </div>
                    </div>
                    <div class="moreInfo">
                        <div class="row">
                            <a href="#" class="forgotPassword">Forgot Your Password?</a>
                        </div>
                        <div class="row rowCheck">
                            <div class="clear">
                                <input type="checkbox" class="checkbox" />
                                <label>I am an adult smoker 18 years or older, residing in the Philippines</label>
                            </div>
                            <div class="clear">
                                <input type="checkbox"  class="checkbox" />
                                <label>I have read and understood the <a href="#">Terms and Conditions and Privacy Statement and Consent</a></label>
                            </div>
                        </div>
                        <div class="row rowInformation">
                            <p>ASDB member must tick both statements to continue logging into their account.</p>
                            <p>Registered but haven't submitted your documents yet? <a href="#">Click here</a></p>
                        </div>
                        <div class="row rowSubmit loginSubmit">
                            <input type="submit" value="&nbsp;" class="loginBtn" />
                        </div>
                    </div>
                </form>
            </div><!-- END .circleContent -->
        </div><!-- END #circleLogin -->
    </div><!-- END .loginPage -->
</div><!-- END #loginPage -->