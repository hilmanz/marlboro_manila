<?php include('widget/choose_btn.php'); ?>
<div id="registration1" class="registration">
	<div class="head">
    	<h3>Registration is free. Join us and earn access to exclusive content and special offers.<br />
To complete the registration process, a copy of a valid government-issued id has to be submitted for age verification. Upon verification, your username and password will be sent to you.
For accuracy of registered data please review and confirm the details provided. </h3>
    </div><!-- END .head -->
    <div class="section">
    	<form id="reg1" action="" class="theForm">
        <span class="formInfo">* required field</span>
        <ul class="columns-2 clearfix">
            <li class="col2">
            	<ul>
                	<li class="fieldset">
                    	<div class="titleForm">
                        	<span class="requirefield">* </span>
                            <h3>what is your name?</h3>
                            <span class="eg">(To change your name, please contact our hotline)</span>
                        </div><!-- END .titleForm -->
                        <div class="entryForm">
                        	<div class="row">
                                <label>NICKNAME</label>
                                <input type="text" name="nickname" class="full-width required"/>
                            </div><!-- END .row -->
                        	<div class="row">
                                <label>FIRST NAME</label>
                                <input type="text" name="firstname" class="full-width required"/>
                            </div><!-- END .row -->
                        	<div class="row">
                                <label>middle name</label>
                                <input type="text" name="middlename" class="full-width required"/>
                            </div><!-- END .row -->
                        	<div class="row">
                                <label>LAST NAME</label>
                                <input type="text" name="lastname" class="full-width required"/>
                            </div><!-- END .row -->
                        </div><!-- END .entryForm -->
                    </li><!-- END .fieldset -->
                	<li class="fieldset">
                    	<div class="titleForm">
                        	<span class="requirefield">* </span>
                            <h3>when is your birthday?</h3>
                        </div><!-- END .titleForm -->
                        <div class="entryForm">
                        	<div class="row">
                                <label>&nbsp;</label>
                                <input type="text" class="full-width datepicker"/>
                            </div><!-- END .row -->
                        </div><!-- END .entryForm -->
                    </li><!-- END .fieldset -->
                	<li class="fieldset">
                    	<div class="titleForm">
                        	<span class="requirefield">* </span>
                            <h3>what is your mobile number?</h3>
                        </div><!-- END .titleForm -->
                        <div class="entryForm">
                        	<div class="row">
                                <label>&nbsp;</label>
                                <input type="text" name="num1" class="small-width"/>
                                <input type="text" name="mobile" class="half-width required"/>
                            </div><!-- END .row -->
                        </div><!-- END .entryForm -->
                    </li><!-- END .fieldset -->
                	<li class="fieldset">
                    	<div class="titleForm">
                        	<span class="requirefield">* </span>
                            <h3>what is your landline number?</h3>
                        </div><!-- END .titleForm -->
                        <div class="entryForm">
                        	<div class="row">
                                <label>&nbsp;</label>
                                <input type="text" name="num2" class="small-width"/>
                                <input type="text" name="phone" class="half-width required"/>
                            </div><!-- END .row -->
                        </div><!-- END .entryForm -->
                    </li><!-- END .fieldset -->
                	<li class="fieldset">
                    	<div class="titleForm">
                        	<span class="requirefield">* </span>
                            <h3>what is your gender?</h3>
                            <input type="radio" name="gender" class="radio styled required"/>
                            <label class="labelCheck">Male</label>
                            <input type="radio" name="gender" class="radio styled required"/>
                            <label class="labelCheck">Female</label>
                        </div><!-- END .titleForm -->
                    </li><!-- END .fieldset -->
                </ul>
            </li><!-- END .col2 -->
            <li class="col2">
            	<ul>
                	<li class="fieldset">
                    	<div class="titleForm">
                        	<span class="requirefield">* </span>
                            <h3>what is your email address?</h3>
                        </div><!-- END .titleForm -->
                        <div class="entryForm">
                        	<div class="row">
                                <label>&nbsp;</label>
                                <input type="text" class="full-width required"/>
                            </div><!-- END .row -->
                        </div><!-- END .entryForm -->
                    </li><!-- END .fieldset -->
                	<li class="fieldset">
                    	<div class="titleForm">
                        	<span class="requirefield">* </span>
                            <h3>WHAT IS YOUR PASSWORD?</h3>
                        </div><!-- END .titleForm -->
                        <div class="entryForm">
                        	<div class="row">
                                <label>password</label>
                                <input type="password" name="password" class="full-width required"/>
                            </div><!-- END .row -->
                        	<div class="row">
                                <label>confirm password</label>
                                <input type="password" name="confirmpassword" class="full-width required"/>
                            </div><!-- END .row -->
                        </div><!-- END .entryForm -->
                    </li><!-- END .fieldset -->
                	<li class="fieldset">
                    	<div class="titleForm">
                        	<span class="requirefield">* </span>
                            <h3>what is your mailing address?</h3>
                        </div><!-- END .titleForm -->
                        <div class="entryForm">
                        	<div class="row">
                                <label>house and street</label>
                                <input type="text" name="house" class="full-width required"/>
                            </div><!-- END .row -->
                        	<div class="row">
                                <label>Barangay</label>
                                <input type="text" name="barangay" class="full-width required"/>
                            </div><!-- END .row -->
                        	<div class="row">
                                <label>province</label>
                                <select class="styled required" name="province">
                                	<option>Metro Manila</option>
                                	<option>Metro Manila</option>
                                	<option>Metro Manila</option>
                                	<option>Metro Manila</option>
                                	<option>Metro Manila</option>
                                </select>
                            </div><!-- END .row -->
                        	<div class="row">
                                <label>city</label>
                                <select class="styled required" name="city">
                                	<option>Pasig City</option>
                                	<option>Pasig City</option>
                                	<option>Pasig City</option>
                                	<option>Pasig City</option>
                                	<option>Pasig City</option>
                                </select>
                            </div><!-- END .row -->
                        </div><!-- END .entryForm -->
                    </li><!-- END .fieldset -->
                	<li class="fieldset">
                    	<div class="titleForm">
                            <h3>referred by:</h3>
                            <span class="eg">(Enter friend's email)</span>
                        </div><!-- END .titleForm -->
                        <div class="entryForm">
                        	<div class="row">
                                <label>&nbsp;</label>
                                <input type="text" class="full-width"/>
                            </div><!-- END .row -->
                        </div><!-- END .entryForm -->
                    </li><!-- END .fieldset -->
                </ul>
            </li><!-- END .col2 -->
        </ul><!-- END .columns-2 -->
        <div class="row rowSubmit">
        	<input type="submit" value="NEXT" class="button btnRed"/>
        </div><!-- END .rowSubmit -->
        </form>
        <div class="step">
        	<a class="page1 btnStep fl current">Page 1</a>
        	<a class="page2 btnStep" href="index.php?menu=register2">Page 2</a>
        	<a class="page3 btnStep fr" href="index.php?menu=register3">Page 3</a>
        </div><!-- END .step -->
    </div><!-- END .section -->
</div><!-- END .registration -->