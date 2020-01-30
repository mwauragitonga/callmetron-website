<?php $this->load->view('template/header'); ?>

<!-- start contact Area -->
<section class="contact-area section-gap" id="contact">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-30 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10">Want to partner with us?</h1>
					<p>We welcome any formidable partnership opportunities .</p>
					<?php if(!empty($message) && $message =='Email Sent, We will be in touch ASAP.'){ ?>
						<div class="alert alert-success alert-dismissible " role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
							</button>
							<strong><?php echo $message; ?></strong>
						</div>

					<?php }elseif(!empty($message) && $message == 'Email not sent! Please try again.'){ ?>
						<div class="alert alert-danger alert-dismissible " role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
							</button>
							<strong><?php echo $message; ?></strong>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<?php echo(form_open('sendPartnerMail')) ?>

		<div class="form-area mt-60" id="myForm"  class="contact-form text-right">
			<div class="row">
				<div class="col-lg-8 form-group">
					<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">

					<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

					<input name="country" placeholder="Enter your country" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your country'" class="common-input mb-20 form-control" required="" type="text">
					<button class="primary-btn mt-20" type="submit">Submit<span class="lnr lnr-arrow-right"></span></button>
					<div class="mt-10 alert-msg">
					</div>
				</div>
				<div class="col-lg-6 form-group">

				</div></div>
		</div>
		<?php echo form_close() ?>

	</div>
	</div>
</section>
<!-- end contact Area -->
<?php $this->load->view('template/footer'); ?>
