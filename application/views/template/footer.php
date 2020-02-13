<footer class="footer-area section-gap">
	<div class="container">
		<div class="row">
			<div class="col-lg-3  col-md-6 col-sm-6">
				<div class="single-footer-widget">
					<h4 class="text-white">About CallMetron</h4>
					<p>
						CallMetron is a revolutionary product that changes how organizations handle Call Billing And Analytics.
					</p>
				</div>
			</div>
			<div class="col-lg-4  col-md-6 col-sm-6">
				<div class="single-footer-widget">
					<h4 class="text-white">Contact Us</h4>
					<p>
						Ready to partner with us? Make the call !
					</p>
					<p class="number">
						+1 573 260 4219 <br> </p>
					or send us an email at<p class="number">
						info@callmetron.com
					</p>
				</div>
			</div>
			<div class="col-lg-5  col-md-6 col-sm-6">
				<div class="single-footer-widget">
					<h4 class="text-white">GET A QUOTE</h4>
					<p>Need us to drop you a quick quote or schedule a demo? Leave your email and we will get back to you ASAP.</p>
					<div class="d-flex flex-row" id="mc_embed_signup">

						<?php echo(form_open('subscribeNewsletter')) ?>
						<div class="navbar-form"  method="post">
							<div class="input-group add-on">
								<input class="form-control" name="email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required="" type="email">
								<div style="position: absolute; left: -5000px;">
									<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
								</div>
								<div class="input-group-btn">
									<button class="genric-btn"><span class="lnr lnr-arrow-right"></span></button>
								</div>
							</div>
							<div class="info mt-20"></div>
						</div>
							<?php echo form_close() ?>
					</div>
					<?php if(!empty($message) && $message =='Subscribed to Newsletter.'){ ?>
						<div class="alert alert-success alert-dismissible " role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
							</button>
							<strong><?php echo $message; ?></strong>
						</div>

					<?php }elseif(!empty($message) && $message == 'Could not subscribe to Newsletter.Please try again.'){ ?>
						<div class="alert alert-danger alert-dismissible " role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
							</button>
							<strong><?php echo $message; ?></strong>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="footer-bottom d-flex justify-content-between align-items-center flex-wrap">
<!--						<p class="footer-text m-0">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>-->
			<div class="footer-social d-flex align-items-center">
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
			</div>
		</div>
	</div>
</footer>
<!-- End footer Area -->

<script src="<?php echo base_url(); ?>assets/js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="<?php echo base_url(); ?>assets/js/vendor/bootstrap.min.js"></script>
<script type="<?php echo base_url(); ?>assets/text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="<?php echo base_url(); ?>assets/js/easing.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/hoverIntent.js"></script>
<script src="<?php echo base_url(); ?>assets/js/superfish.min.js"></script>
<!--<script src="--><?php //echo base_url(); ?><!--assets/js/jquery.ajaxchimp.min.js"></script>-->
<script src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.sticky.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.nice-select.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/waypoints.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.counterup.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/parallax.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/mail-script.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
<script type="text/javascript"> //<![CDATA[
	var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.trust-provider.com/" : "http://www.trustlogo.com/");
	document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
	//]]></script>
<script language="JavaScript" type="text/javascript">
	TrustLogo("https://www.positivessl.com/images/seals/positivessl_trust_seal_md_167x42.png", "POSDV", "none");
</script>
</body>
</html>
