<div class="rowBtn">
	<div class="chooseBtn">
    	<?php 
		if($_GET['menu']=='register'){ ?>
    	<a class="loginBtn" href="index.php">LOG IN</a>
        <a class="registerBtn active" href="index.php?menu=register">Register</a>
		<?php }else if($_GET['menu']=='register2'){?>
    	<a class="loginBtn" href="index.php">LOG IN</a>
        <a class="registerBtn active" href="index.php?menu=register">Register</a>
		<?php  }else if($_GET['menu']=='register3'){?> 
    	<a class="loginBtn" href="index.php">LOG IN</a>
        <a class="registerBtn active" href="index.php?menu=register">Register</a>
		<?php  }else if($_GET['menu']=='register3a'){?>
    	<a class="loginBtn" href="index.php">LOG IN</a>
        <a class="registerBtn active" href="index.php?menu=register">Register</a>
		<?php  }else if($_GET['menu']=='register3b'){?>
    	<a class="loginBtn" href="index.php">LOG IN</a>
        <a class="registerBtn active" href="index.php?menu=register">Register</a>
		<?php }else{ ?>
    	<a class="loginBtn active" href="index.php">LOG IN</a>
        <a class="registerBtn" href="index.php?menu=register">Register</a>
		<?php }?>
    </div>
	<p>click to choose</p>
</div><!-- END .rowBtn -->