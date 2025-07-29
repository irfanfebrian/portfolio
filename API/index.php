<?php include '/../require/base.php';?>
<?php include '/../require/bg-dark.php';?>
<?php include '/../require/text-light.php';?>
<?php include '/../require/nav.php';?>


	
	<div class="container">
		<div class="row d-block first-spacer">
			<div class="col-xl-6 ifwords">
				<h1>Done by<br>Irfan Febrian</h1>
				<p>Creation as UI, UX and Fullstack Designer</p>
				<span>Along with other things that I do ツ</span>
			</div>
		</div>
		<div class="row ifspacer2">
			<div data-aos="zoom-in-up" class="col-xl-4 ifthumb">
				<a href="work/ikn">
					<img src="<?php echo site_url('media/thumb/ikn.jpg'); ?>">
					<span>Mobile App Project</span>
					<h6>IKN Smart City App</h6>
					<p>UI · UX Designer</p>
				</a>

			</div>
			<div class="col-xl-6 ifthumb offset-xl-2">
				<section>
					<a href="work/pinhome">
					<img src="<?php echo site_url('media/thumb/pin.jpg'); ?>">
					<span>App Project</span>
					<h6>Pinhome</h6>
					<p>In-house Product Designer</p>
				</a>
				<section>
			</div>
			<div data-aos="zoom-in-up" class="col-xl-4 ifthumb">
				<a href="work/airasia">
					<img src="<?php echo site_url('media/thumb/aa.jpg'); ?>">
					<span>APP PROJECT</span>
					<h6>Airasia Holiday</h6>
					<p>In-house Sr. UX Designer</p>
				</a>
			</div>
			<div data-aos="zoom-in-up" data-aos-delay="450" class="col-xl-5 text-center">
				<button class="frank" onclick="window.location.href='<?php echo site_url('work/#ifmore'); ?>';" >more</button>
			</div>
		</div>
		<div data-aos="zoom-in-up" class="row d-block ifspacer2">
			<div class="col-xl-12 d-block"><hr/></div>
			<div class="col-xl-6 ifwords mx-auto">
				<p>As a self-taught digital designer</p>
				<span>with Social Anthropology background,</span>
				<h1>I’ve done many<br>design project,<br>since 2008</h1>
				<button class="frank" onclick="window.location.href='<?php echo site_url('about'); ?>';">about</button>
			
			</div>
		</div>
	</div>
	<?php include '/../require/contact.php';?>

<?php include '/../require/footer.php';?>
