<?php $this->load->view('template/header'); ?>

<!-- start banner Area -->
<section class="relative" id="home">

<style>
	.header {
		/* The image used */
		background-image: url("image-name.extensions");

		/* blur effect */
		filter: blur(8px);
		-webkit-filter: blur(8px);

		/* Full height size*/
		height: 100%;

		/* Center and scale the image */
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}
	.text-mask {
		background-color: rgb(0,0,0);
		background-color: rgba(0,0,0, 0.4);
		color: white;
		font-weight: bold;
		border: 3px solid #f1f1f1;

		/* now center the mask*/
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		z-index: 2;
		width: 80%;
		padding: 20px;
		text-align: center;
	}

</style>
</section>
<section class="banner-area relative" id="home">
	<div class="container">
		<div class="header"></div>
		<div class="text-mask">
			<h1 style="font-size:60px">CallMetron 14.0.2</h1>
			<h4 class="text-uppercase">Discover the Value of Your Data</h4>

			<p>
				<b>Next Level Call Billing and Analytics.</b> Turning complex organizational call management into a
				<b>simple and seamless solution! </b><br>
				Few would argue that, despite the advancements of technology over the past three decades, very few businesses can effectively handle their call billing
				and analytics.</p>

		</div>
	</div>

	<div class="container">
		<div class="row fullscreen d-flex align-items-center justify-content-end " style="height: 790px">
			<div class="banner-content col-lg-7 col-md-12">

<!--
				<p style="font-family: 'Comic Sans MS'">
					Worry No More! CallMetron is here!</p>
				<a href="#about" class="primary-btn header-btn text-uppercase">Explore</a>-->
			</div>
		</div>
	</div>
</section>

<!-- End banner Area -->

<!-- Start feature Area -->
<section class="feature-area section-gap" id="feature">
	<div class="container">
		<div class="row">
			<div class="single-feature col-lg-4">
				<img class="img-fluid" src="<?php echo base_url(); ?>assets/img/f1.png" alt="">
				<h4>Simple</h4>
				<p>Hassle free navigation from a central dashboard granting you access to different modules </p>
			</div>
			<div class="single-feature col-lg-4">
				<img class="img-fluid" src="<?php echo base_url(); ?>assets/img/f2.png" alt="">
				<h4>Powerful</h4>
				<p>Leveraging different technologies to provide a single powerful platform capable of handling small to
					large organizational needs.</p>
			</div>
			<div class="single-feature col-lg-4">
				<img class="img-fluid" src="<?php echo base_url(); ?>assets/img/f3.png" alt="">
				<h4>Effective</h4>
				<p>You can always count on CallMetron to deliver effective and efficient call billing and analytics.</p>
			</div>
		</div>
	</div>
</section>
<!-- End feature Area -->
<br>
<br>


<!-- Start info Area -->
<section class="info-area" id="about">
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<div class="container-fluid">
		<div class="row d-flex justify-content-end align-items-center">
			<div class="col-lg-6 col-md-12 info-left no-padding">
				<img class="img-fluid" src="<?php echo base_url(); ?>assets/img/info-img.jpg" alt="">
			</div>
			<div class="col-lg-6 col-md-12 info-right no-padding">
				<h1>About CallMetron <br></h1>
				<p style="font-family: 'Comic Sans MS'">
					For any business in this era,from small sized enterprises to fortune 500 companies, employees make
					numerous calls within and without every day.</p>
				<br>

				<p style="font-family: 'Comic Sans MS'">Most of these calls are necessary in the day to day operations of the business, but then it becomes
					hard for the management to have a complete grip of the process. As such it's very easy for the calls made to rack up insane costs at times way beyond the budgeted amounts. </p>
				<p style="font-family: 'Comic Sans MS'">	CallMetron is a powerful solution allowing organizations to monitor and analyze calls within their
					business.
				<br>
				<p style="font-family: 'Comic Sans MS'"><b><h4>Contact Us today and change how your business handles call billing and analytics!</h4></b>
				</p>
				<a href="<?php echo base_url(); ?>contact"><button class="primary-btn mt-20 text-uppercase">Request Demo<span class="lnr lnr-arrow-right"></button></a>
			</div>
		</div>
	</div>
</section>
<!-- End info Area -->

<!-- Start offered Area -->
<section class="offered-area" id="weoffer">
	<div class="container">
		<div class="menu-content pb-60 col-lg-8">
			<div class="title text-center">
				<!--				<h1 class="mb-10 text-white">Our Offered Services</h1>-->
				<!--				<p class="text-white">Who are in extremely love with eco friendly system.</p>-->
			</div>
		</div>
		<div class="row align-items-center justify-content-start">
			<div class="col-lg-6 offered-left">
				<div class="offer-wrap flex-row d-flex row">
					<div class="col-4">
						<div class="single-offer mb-30">
							<a href="#"></a><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/o1.png"
												 alt=""></d>
						</div>
					</div>
					<div class="col-4">
						<div class="single-offer mb-30">
							<a href="#"></a><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/o2.png"
												 alt=""></d>
						</div>
					</div>
					<div class="col-4">
						<div class="single-offer mb-30">
							<a href="#"></a><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/o3.png"
												 alt=""></d>
						</div>
					</div>
					<div class="col-4">
						<div class="single-offer">
							<a href="#"></a><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/o4.png"
												 alt=""></d>
						</div>
					</div>
					<div class="col-4">
						<div class="single-offer">
							<a href="#"></a><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/o5.png"
												 alt=""></d>
						</div>
					</div>
					<div class="col-4">
						<div class="single-offer">
							<a href="#"></a><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/o6.png"
												 alt=""></d>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5 offered-right">
				<h4>Why Choose CallMetron?</h4>
				<p class="pt-20 pb-20">

				<ul style="list-style-type:circle;  ">
					<li>CallMetron is designed for all sizes of organizations, handling all sizes of telephone
							traffic while delivering unrivalled and desired call
							billing and analytics.</li>
					<li><b> Fast, Reliable and Scalable.</b></li>
					<li>We ensure complete control of incoming and outgoing calls across all departments through our
							powerful, in-depth reports module.</li>
					<li><b>Scheduled reports and alerts for both administrators and users.</b></li>
					<li><b>Active Directory Integration</b> to allow fast and easy importing( or sync) users as well as
						use of Active Directory Credentials to authenticate users in CallMetron.
					</li>
					<li><b>This is just the scratch of the surface, CallMetron packs many more features and functionalities</b></li>
				</ul>


				</p>
				<a href="<?php echo base_url(); ?>features" class="primary-btn header-btn text-uppercase">More Features</a>
			</div>
		</div>
	</div>
</section>

<br>
<br>
<!-- End offered Area -->
<!-- Start testimonial Area -->
<!--<section class="testimonial-area relative section-gap">-->
<!--	<div class="overlay overlay-bg"></div>-->
<!--	<div class="container">-->
<!--		<div class="row d-flex justify-content-center">-->
<!--			<div class="menu-content pb-60 col-lg-8">-->
<!--				<div class="title text-center">-->
<!--					<h1 class="mb-10 text-white">Testimonials</h1>-->
<!--					<p class="text-white">What some of our clients have to say about CallMetron.</p>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--		<div class="row">-->
<!--			<div class="active-testimonial">-->
<!--				<div class="single-testimonial item d-flex flex-row">-->
<!--					<div class="thumb">-->
<!--						<img class="img-fluid" src="--><?php //echo base_url(); ?><!--assets/img/user1.png" alt="">-->
<!--					</div>-->
<!--					<div class="desc">-->
<!--						<p>-->
<!--							CallMetron has helped us a great deal with our Call Billing and we couldn't be more happier we adopted this awesome solution.-->
<!--						</p>-->
<!--						<h4 mt-30>Mwaura Gitonga</h4>-->
<!--						<p>CEO at Luvenis Ventures</p>-->
<!--					</div>-->
<!--				</div>-->
<!--				<div class="single-testimonial item d-flex flex-row">-->
<!--					<div class="thumb">-->
<!--						<img class="img-fluid" src="--><?php //echo base_url(); ?><!--assets/img/user2.png" alt="">-->
<!--					</div>-->
<!--					<div class="desc">-->
<!--						<p>-->
<!--							I would recommend any company struggling to control their phone traffic and costs to take up CallMetron. I promise they will not regret it!-->
<!--						</p>-->
<!--						<h4 mt-30>Mark Alviro Wiens</h4>-->
<!--						<p>Head of Infrastructure, Innesco Enterprises</p>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</section>-->
<!-- End testimonial Area -->


<!-- Start brand Area -->
<!--<section class="brand-area">-->
<!--	<div class="container">-->
<!--		<div class="row logo-wrap">-->
<!--			<a class="col single-img" href="#">-->
<!--				<img class="d-block mx-auto" src="--><?php //echo base_url(); ?><!--assets/img/l1.png" alt="">-->
<!--			</a>-->
<!--			<a class="col single-img" href="#">-->
<!--				<img class="d-block mx-auto" src="--><?php //echo base_url(); ?><!--assets/img/l2.png" alt="">-->
<!--			</a>-->
<!--			<a class="col single-img" href="#">-->
<!--				<img class="d-block mx-auto" src="--><?php //echo base_url(); ?><!--assets/img/l3.png" alt="">-->
<!--			</a>-->
<!--			<a class="col single-img" href="#">-->
<!--				<img class="d-block mx-auto" src="--><?php //echo base_url(); ?><!--assets/img/l4.png" alt="">-->
<!--			</a>-->
<!--			<a class="col single-img" href="#">-->
<!--				<img class="d-block mx-auto" src="--><?php //echo base_url(); ?><!--assets/img/l5.png" alt="">-->
<!--			</a>-->
<!--		</div>-->
<!--	</div>-->
<!--</section>-->
<!-- End brand Area -->
<!-- Start fact Area -->
<!--<section class="facts-area section-gap">-->
<!--	<!--	<h3 style="">Why Choose CallMetron?</h3>-->-->
<!---->
<!--	<div class="container">-->
<!---->
<!--		<div class="row">-->
<!--			<div class="col single-fact">-->
<!--				<h1 class="counter">2536</h1>-->
<!--				<p>Projects Completed</p>-->
<!--			</div>-->
<!--			<div class="col single-fact">-->
<!--				<h1 class="counter">6784</h1>-->
<!--				<p>Really Happy Clients</p>-->
<!--			</div>-->
<!--			<div class="col single-fact">-->
<!--				<h1 class="counter">1059</h1>-->
<!--				<p>Total Tasks Completed</p>-->
<!--			</div>-->
<!--			<div class="col single-fact">-->
<!--				<h1 class="counter">2239</h1>-->
<!--				<p>Cups of Coffee Taken</p>-->
<!--			</div>-->
<!--			<div class="col single-fact">-->
<!--				<h1 class="counter">435</h1>-->
<!--				<p>In House Professionals</p>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</section>-->
<!-- end fact Area -->

<!-- start footer Area -->
<?php $this->load->view('template/footer'); ?>


