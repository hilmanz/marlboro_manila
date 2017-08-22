<?php include('widget/choose_btn.php'); ?>
<div id="registration2" class="registration">
	<div class="head">
    	<h3>Registration is free. Join us and earn access to exclusive content and special offers.<br />
To complete the registration process, a copy of a valid government-issued id has to be submitted for age verification. Upon verification, your username and password will be sent to you.
For accuracy of registered data please review and confirm the details provided. </h3>
    </div><!-- END .head -->
    <div class="section">
    	<form id="reg3" action="index.php?menu=register3" class="theForm">
        <h3>Please attach a soft copy of your VALID government-issued ID (GIID). <a href="#popup-giidlist" class="showPopup">SEE valid GIID List</a></h3>
        <ul class="columns-2 clearfix" id="enterGIID">
            <li class="col2">
                <div class="row">
                    <label>Select GIID Type</label>
                    <select class="styled">
                        <option>Driver's Licence </option>
                        <option>passport</option>
                    </select>
                </div>
        	</li>
            <li class="col2">
                <div class="row">
                    <label>Enter GIID Number</label>
                    <input type="text" />
                </div>

            </li>
        </ul>
            
        <div class="row">
        	<a href="#popup-upload-photo" class="button btnRed showPopup">Upload giid now</a><a href="#" class="button btnRed">Upload giid LATER</a>
        </div>
<h3>To continue with registration, please submit a copy of your GIID within seven (7) days. Failure to do so will restart registration process. </h3>
		<h2>After completing and signing this survey form, I declare that:</h2>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td valign="top">a)</td>
            <td valign="top">the foregoing information is accurate,</td>
          </tr>
          <tr>
            <td valign="top">b)</td>
            <td valign="top">I am an adult smoker 18 years or older;</td>
          </tr>
          <tr>
            <td valign="top">c)</td>
            <td valign="top">the contact number/s and email address stated above are used personally and exclusively by me and cannot be accessed or shared by other persons.</td>
          </tr>
        </table>
        <h2>Toward this end, I hereby grant my consent to PMFTC Inc. to</h2>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td valign="top">a)</td>
            <td valign="top">store and use this personal information to allow PMFTC Inc. and its affiliates and duly-authorized representatives to verify age and other 
	     	compliance with internal policies, and/or contact me;</td>
          </tr>
          <tr>
            <td valign="top">b)</td>
            <td valign="top">to the extent permitted under the applicable laws, provide me, using mail, email, SMS, telephone, etc., with communications related to tobacco 
		products, including but not limited to information and material on brand launches, packaging changes, events, marketing activities, regulation 
		of tobacco products and political topics that may be of relevance to tobacco products; to process my information in countries other than the 
		country in which I live (for example, Locating the database in one country and accessing the database remotely from another), and</td>
          </tr>
          <tr>
            <td valign="top">c)</td>
            <td valign="top">disclose my personal information to service providers for the above purposes, to PMFTC In. affiliates to do the above for their own purposes, 
		and (if required by law) to relevant authorities. PMFTC Inc. may not disclose my personal information to third parties for other purposes, 
		without my prior consent.</td>
          </tr>
        </table>
        <div class="row rowSubmit">
        	<input type="submit" value="NEXT" class="button btnRed"/>
        </div><!-- END .rowSubmit -->
        </form>
        <div class="step">
        	<a class="page1 btnStep fl" href="index.php?menu=register">Page 1</a>
        	<a class="page2 btnStep" href="index.php?menu=register2">Page 2</a>
        	<a class="page3 btnStep fr current">Page 3</a>
        </div><!-- END .step -->
    </div><!-- END .section -->
</div><!-- END .registration -->
<?php include('widget/popup_giidlist.php'); ?>
<?php include('widget/popup_upload_photo.php'); ?>
<?php include('widget/popup_upload_photo_webcam.php'); ?>