<!DOCTYPE html>
<!--[if lt IE 7]> <html dir="ltr" lang="en-US" class="ie6"> <![endif]-->
<!--[if IE 7]>    <html dir="ltr" lang="en-US" class="ie7"> <![endif]-->
<!--[if IE 8]>    <html dir="ltr" lang="en-US" class="ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html dir="ltr" lang="en-US"> <!--<![endif]-->
<head>
    <?php include('meta.php'); ?>
</head>
<?php 
if($_GET['menu']=='register'){ ?>
<body id="registerPage">
<?php }else if($_GET['menu']=='register2'){?>
<body id="registerPage">
<?php  }else if($_GET['menu']=='register3'){?> 
<body id="registerPage">
<?php  }else if($_GET['menu']=='register3a'){?>
<body id="registerPage">
<?php  }else if($_GET['menu']=='register3b'){?>
<body id="registerPage">
<?php  }else if($_GET['menu']=='video'){?>
<body id="videoPage">
<?php  }else if($_GET['menu']=='video-small'){?>
<body id="videoPage">
<?php  }else if($_GET['menu']=='video-landing'){?>
<body id="videoPage" class="videoLanding">
<?php  }else if($_GET['menu']=='dyo-shirt'){?>
<body id="dyoshirtPage">
<?php  }else if($_GET['menu']=='dyo-shirt-winner'){?>
<body id="dyoshirtPage">
<?php  }else if($_GET['menu']=='my-account'){?>
<body id="myaccountPage">
<?php }else{ ?>
<body>
<?php }?>
	<div id="body" class="wrapper">
		<?php 
        if($_GET['menu']=='register'){
            include("register.php");
        }else if($_GET['menu']=='register2'){ 
            include("register2.php");
        }else if($_GET['menu']=='register3'){ 
            include("register3.php");
        }else if($_GET['menu']=='register3a'){ 
            include("register3a.php");
        }else if($_GET['menu']=='register3b'){ 
            include("register3b.php");
        }else if($_GET['menu']=='landing'){ 
            include("landing.php");
        }else if($_GET['menu']=='video'){ 
            include("video.php");
        }else if($_GET['menu']=='video-small'){ 
            include("video-small.php");
        }else if($_GET['menu']=='video-landing'){ 
            include("video-landing.php");
        }else if($_GET['menu']=='trackingcode'){ 
            include("trackingcode.php");
        }else if($_GET['menu']=='dyo-shirt'){ 
            include("dyo-shirt.php");
        }else if($_GET['menu']=='dyo-shirt-winner'){ 
            include("dyo-shirt-winner.php");
        }else if($_GET['menu']=='my-account'){ 
            include("my-account.php");
        }else{ 
            include("home.php");
        }?>
	</div><!-- END .wrapper -->
    <?php include('footer.php'); ?>
</body>
</html>