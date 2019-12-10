<?php $this->load->view('template/header'); ?>

<!-- start contact Area -->
<section class="contact-area section-gap" id="contact">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-30 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10">If you need, Just drop us a line</h1>
					<p>Who are in extremely love with eco friendly system.</p>
				</div>
			</div>
		</div>
		<form class="form-area mt-60" id="myForm" action="mail.php" method="post" class="contact-form text-right">
			<div class="row">
				<div class="col-lg-6 form-group">
					<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">

					<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

					<input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" required="" type="text">
				</div>
				<div class="col-lg-6 form-group">
					<textarea class="common-textarea mt-10 form-control" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
					<button class="primary-btn mt-20">Send Message<span class="lnr lnr-arrow-right"></span></button>
					<div class="mt-10 alert-msg">
					</div>
				</div></div>
		</form>

	</div>
</section>
<!-- end contact Area -->
<?php $this->load->view('template/footer'); ?>
