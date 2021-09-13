<?php $this->load->view('template/header'); ?>

<!-- start contact Area -->
<section class="service-area section-gap" id="contact">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-30 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10">Have any inquiry?</h1>
					<p>Contact Us.</p>

			<!--		<?php /*if(!empty($message) && $message =='Email Sent, We will be in touch ASAP.'){ */?>
						<div class="alert alert-success alert-dismissible " role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
							</button>
							<strong><?php /*echo $message; */?></strong>
						</div>

					<?php /*}elseif(!empty($message) && $message == 'Email not sent! Please try again.'){ */?>
						<div class="alert alert-danger alert-dismissible " role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
							</button>
							<strong><?php /*echo $message; */?></strong>
						</div>
					--><?php /*} */?>
				</div>
			</div>
		</div>
		<?php // echo(form_open('sendContactMail')) ?>

		<div class="form-area mt-60" id="myForm" action="<?php /*echo base_url(); */?>sendMail" method="post" class="contact-form text-right">
			<div class="">
				<h1 class="mb-10" style="color: white">Email :-  info@callmetron.com</h1>
				<br>
				<br>
				<h1 class="mb-10" style="color: white">Mobile :- +254-712-568-946</h1>

				<!--	<div class="col-lg-6 form-group">
					<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">

					<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

					<input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" required="" type="text">
				</div>
				<div class="col-lg-6 form-group">
					<textarea class="common-textarea mt-10 form-control" name="message" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required=""></textarea>
					<button type="submit" class="primary-btn mt-20">Send Message<span class="lnr lnr-arrow-right"></span></button>
				</div></div> -->
			<?php /*echo form_close() */?>
		</div>
	</div>
</section>
<!-- end contact Area -->
<?php $this->load->view('template/footer'); ?>
