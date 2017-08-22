<?php include('widget/navigation.php'); ?>
<div id="videoPage">
	<div class="videoPage">
    	<a class="closeVideoBtn whiteBtn" href="index.php?menu=landing">CLOSE VIDEO</a>
		<script src="js/jquery-ui-1.8.22.custom.min.js"></script>
        <script src="js/jquery.imagesloaded.min.js"></script>
        <script src="http://vjs.zencdn.net/c/video.js"></script>
    
        <!-- BigVideo -->
        <script src="js/bigvideo.js"></script>
		<script>
	    $(function() {
            var BV = new $.BigVideo({useFlashForFirefox:false});
			BV.init();
			BV.show('video/MB_Retail.mp4', {altSource:'video/MB_Retail.ogg'});
	    });
        </script>
    </div><!-- END .videoPage -->
</div><!-- END #videoPage -->
<?php include('widget/popup_game.php'); ?>