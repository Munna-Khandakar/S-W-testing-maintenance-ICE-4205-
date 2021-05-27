@extends('website.layout')
@section('content')

	<main>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Contact Page</h2>
				<p class="col-12 text-center">You can contact us anytime. Our support team is always beside you. You can
					email us or simply chat with the chatbot right side of your screen.</p>
			</header>

			<div class="tm-container-inner-2 tm-contact-section">
				<div class="row">
					<div class="col-md-6">
						<form action="" method="POST" class="tm-contact-form">
							<div class="form-group">
								<input type="text" name="name" class="form-control" placeholder="Name" required="" />
							</div>

							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="Email" required="" />
							</div>

							<div class="form-group">
								<textarea rows="5" name="message" class="form-control" placeholder="Message"
									required=""></textarea>
							</div>

							<div class="form-group tm-d-flex">
								<button type="submit" class="tm-btn tm-btn-success tm-btn-right">
									Send
								</button>
							</div>
						</form>
					</div>
					<div class="col-md-6">
						<div class="tm-address-box">
							<h4 class="tm-info-title tm-text-success">Our Address</h4>
							<address>
								Professorpara, Palashbari, Gaibandha
							</address>
							<a href="tel:080-090-0110" class="tm-contact-link">
								<i class="fas fa-phone tm-contact-icon"></i>+880-1521424622
							</a>
							<a href="mailto:info@company.co" class="tm-contact-link">
								<i class="fas fa-envelope tm-contact-icon"></i>support@foodgarage.com
							</a>
							<div class="tm-contact-social">
								<a href="https://www.facebook.com/groups/301604871301729/" class="tm-social-link"><i
										class="fab fa-facebook tm-social-icon"></i></a>
								<a href="#" class="tm-social-link"><i class="fab fa-twitter tm-social-icon"></i></a>
								<a href="#" class="tm-social-link"><i class="fab fa-instagram tm-social-icon"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="tm-container-inner-2 tm-map-section">
				<div class="row">
					<div class="col-12">
						<div class="tm-map">
							<iframe
								src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230951.48934366106!2d89.25225078594849!3d25.24982117917359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fce0636fccea7f%3A0x4449c335b09f54e3!2sPalashbari%20Upazila!5e0!3m2!1sen!2sbd!4v1617115935835!5m2!1sen!2sbd"
								width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						</div>
					</div>
				</div>
			</div>
			<div class="tm-container-inner-2 tm-info-section">
				<div class="row">
					<!-- FAQ -->
					<div class="col-12 tm-faq">
						<h2 class="text-center tm-section-title">FAQs</h2>
						<p class="text-center">We are happy to answer your questions. Please ask if you have any
							question. Some frequent asking questions are given for you. Thank you.</p>
						<div class="tm-accordion">
							<button class="accordion">1. Is this service is available at night?</button>
							<div class="panel">
								<p>Our service time is from 10.00 am to 9.00 pm. We only receive order in this period.
								</p>
							</div>

							<button class="accordion">2. Does it provide food in large scale for Offices?</button>
							<div class="panel">
								<p>Yes, it does. But for huge amount of order you need to confirm at least 24 hrs ago
									with 50% payment</p>
							</div>

							<button class="accordion">3. Can I receive food outside Palashbari?</button>
							<div class="panel">
								<p>Sorry, this is not possible at present</p>
							</div>

							<button class="accordion">4.How much time does it takes to get the home delivery?</button>
							<div class="panel">
								<p>We don't want to delay. After the food gets prepare, we deliver with within 10 mins
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>

@endsection
