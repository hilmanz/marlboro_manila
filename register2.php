<?php include('widget/choose_btn.php'); ?>
<div id="registration2" class="registration">
	<div class="head">
    	<h3>Registration is free. Join us and earn access to exclusive content and special offers.<br />
To complete the registration process, a copy of a valid government-issued id has to be submitted for age verification. Upon verification, your username and password will be sent to you.
For accuracy of registered data please review and confirm the details provided. </h3>
    </div><!-- END .head -->
    <div class="section">
    	<form id="reg2" action="index.php?menu=register2" class="theForm">
        <span class="formInfo">* required field</span>
        <ul class="columns-1 clearfix">
            <li class="col1">
            	<ul>
                	<li class="fieldset">
                    	<div class="titleForm">
                        	<span class="requirefield">* </span>
                            <h3>what brand do you smoke most frequently?</h3>
                        </div><!-- END .titleForm -->
                        <div class="entryForm">
                        	<div class="row">
                                <label>&nbsp;</label>
                                <select class="styled" name="brand1">
                                    <option value="22">MARLBORO LIGHTS</option>
                                    <option value="22">MARLBORO RED</option>
                                    <option value="22">MARLBORO BLACK MENTHOL</option>
                                    <option value="22">A MILD</option>
                                    <option value="32">ABSOLUTE</option>
                                    <option value="37">AFLAVA</option>
                                    <option value="1">ARDATH </option>
                                    <option value="23">AVOLUTION</option>
                                    <option value="3">CLAS MILD 0011  </option>
                                    <option value="35">CLUB</option>
                                    <option value="47">COMMFIL</option>
                                    <option value="48">COMMODORE   </option>
                                    <option value="4">COUNTRY </option>
                                    <option value="25">DJI SAM SOE KRETEK</option>
                                    <option value="8">DJI SAM SOE MAGNUM FILTER</option>
                                    <option value="9">DJI SAM SOE SUPER PREMIUM   </option>
                                </select>
                            </div><!-- END .row -->
                        </div><!-- END .entryForm -->
                    </li><!-- END .fieldset -->
                	<li class="fieldset">
                    	<div class="titleForm">
                        	<span class="requirefield">* </span>
                            <h3>What other brands do you smoke aside from your regular brand?</h3>
                        </div><!-- END .titleForm -->
                        <div class="entryForm">
                        	<div class="row">
                                <label>&nbsp;</label>
                                <select class="styled" name="brand2">
                                    <option value="22">MARLBORO BLACK MENTHOL</option>
                                    <option value="22">MARLBORO RED</option>
                                    <option value="22">MARLBORO LIGHTS</option>
                                    <option value="22">A MILD</option>
                                    <option value="32">ABSOLUTE</option>
                                    <option value="37">AFLAVA</option>
                                    <option value="1">ARDATH </option>
                                    <option value="23">AVOLUTION</option>
                                    <option value="3">CLAS MILD 0011  </option>
                                    <option value="35">CLUB</option>
                                    <option value="47">COMMFIL</option>
                                    <option value="48">COMMODORE   </option>
                                    <option value="4">COUNTRY </option>
                                    <option value="25">DJI SAM SOE KRETEK</option>
                                    <option value="8">DJI SAM SOE MAGNUM FILTER</option>
                                    <option value="9">DJI SAM SOE SUPER PREMIUM   </option>
                                </select>
                            </div><!-- END .row -->
                        </div><!-- END .entryForm -->
                    </li><!-- END .fieldset -->
                	<li class="fieldset">
                    	<div class="titleForm">
                        	<span class="requirefield">* </span>
                            <h3>What would you do if your regular brand is unavailable?</h3>
                        </div><!-- END .titleForm -->
                        <div class="entryForm">
                        	<div class="row">
                                <label>&nbsp;</label>
                                <input type="radio" name="regularbrand" class="radio styled"/>
                                <label class="labelCheck">Go to another store to buy your regular brand</label>
                            </div><!-- END .row -->
                        	<div class="row">
                                <label>&nbsp;</label>
                                <input type="radio" name="regularbrand" class="radio styled"/>
                                <label class="labelCheck">Purchase the same brand but different variant</label>
                            </div><!-- END .row -->
                        	<div class="row">
                                <label>&nbsp;</label>
                                <input type="radio" name="regularbrand" class="radio styled"/>
                                <label class="labelCheck">wait until the store has your brand</label>
                            </div><!-- END .row -->
                        	<div class="row">
                                <label>&nbsp;</label>
                                <input type="radio" name="regularbrand" class="radio styled"/>
                                <label class="labelCheck">purchase another brand</label>
                            </div><!-- END .row -->
                        	<div class="row">
                                <label>&nbsp;</label>
                                <input type="text" class="full-width grey-input" value="please specify"/>
                            </div><!-- END .row -->
                        </div><!-- END .entryForm -->
                    </li><!-- END .fieldset -->
                </ul>
            </li><!-- END .col1 -->
        </ul><!-- END .columns-1 -->
        <div class="row rowSubmit">
        	<input type="submit" value="NEXT" class="button btnRed"/>
        </div><!-- END .rowSubmit -->
        </form>
        <div class="step">
        	<a class="page1 btnStep fl" href="index.php?menu=register">Page 1</a>
        	<a class="page2 btnStep current">Page 2</a>
        	<a class="page3 btnStep fr" href="index.php?menu=register3">Page 3</a>
        </div><!-- END .step -->
    </div><!-- END .section -->
</div><!-- END .registration -->