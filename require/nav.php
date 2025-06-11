<body>
	<div class="irfan"></div>
	<script>
	  AOS.init({delay: 150});
	</script>
	<!--navigation-->
	<div class="menu ifopen ">
		<div>
			<button class="light myex ifctrl" onclick="javascript:closeMenu();"><img class="ifmenu" src="<?php echo site_url('assets/img/close.svg'); ?>" /></button>
			<button class="light myex float-right" onclick="window.location.href='<?php echo site_url('../'); ?>';"><img class="iflogo" src="<?php echo site_url('assets/img/if2.svg'); ?>" /></button>
			<button class="dark myex ifctrl" onclick="javascript:closeMenu();"><img class="ifmenu" src="<?php echo site_url('assets/img/close-dark.svg'); ?>" /></button>
			<button class="dark myex float-right" onclick="window.location.href='<?php echo site_url('../'); ?>';"><img class="iflogo" src="<?php echo site_url('assets/img/if2-dark.svg'); ?>" /></button>
		</div>
		<?php include 'menu.php';?>
	</div>
	<div class="ifnav sl">
		<button class="light myex ifctrl" onclick="javascript:openMenu();"><img class="ifmenu" src="<?php echo site_url('assets/img/menu.svg'); ?>" /></button>
		<button class="light myex float-right" onclick="window.location.href='<?php echo site_url('../'); ?>';"><img class="iflogo" src="<?php echo site_url('assets/img/if2.svg'); ?>" /></button>
		<button class="dark myex ifctrl" onclick="javascript:openMenu();"><img class="ifmenu" src="<?php echo site_url('assets/img/menu-dark.svg'); ?>" /></button>
		<button class="dark myex float-right" onclick="window.location.href='<?php echo site_url('../'); ?>';"><img class="iflogo" src="<?php echo site_url('assets/img/if2-dark.svg'); ?>" /></button>
	</div>
	
