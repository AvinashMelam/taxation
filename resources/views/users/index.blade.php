@extends('layouts.master')

@section('content')
		<!-- Top Banner -->
		<div class="banner-area">
			<div class="banner banner-slider-active banner--animated-content">

				<!-- Single Banner -->
				<div class="banner__single bg-image--1" data-black-overlay="6">
					<div class="container">
						<div class="row">
							<div class="col-xl-7 col-lg-8">
								<div class="banner__single__content">
									<h1>WORRIED
										<span class="color--theme">ABOUT TAX?</span> WE ARE EXPERT IN
										<span class="color--theme">TAX</span> SOLUTIONS</h1>
									<a href="#" class="cr-btn">
										<span>Contact Now</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- //Single Banner -->

				<!-- Single Banner -->
				<div class="banner__single bg-image--2" data-black-overlay="6">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 offset-lg-2 col-12 offset-0">
								<div class="banner__single__content text-center">
									<h1>WORRIED
										<span class="color--theme">ABOUT TAX?</span> WE ARE EXPERT IN
										<span class="color--theme">TAX</span> SOLUTIONS</h1>
									<a href="contact.html" class="cr-btn">
										<span>Contact Now</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- //Single Banner -->

				<!-- Single Banner -->
				<div class="banner__single bg-image--3" data-black-overlay="6">
					<div class="container">
						<div class="row">
							<div class="col-xl-7 col-lg-8">
								<div class="banner__single__content">
									<h1>WORRIED
										<span class="color--theme">ABOUT TAX?</span> WE ARE EXPERT IN
										<span class="color--theme">TAX</span> SOLUTIONS</h1>
									<a href="contact.html" class="cr-btn">
										<span>Contact Now</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- //Single Banner -->

			</div>
		</div>
		<!-- //Top Banner -->

		<!-- Page Conent -->
			<main class="page-content">

			<!-- About Area -->
			<section id="about-area" class="cr-section about-area bg--white">
				<div class="container">
					<div class="about-area__inside">
						<div class="row">
							<div class="col-lg-5">
								<div class="about-area__image">
									<img class="wow slideInLeft" data-wow-delay="0" src="images/about/about-thumbnail.png" alt="about area thumb">
								</div>
							</div>
							<div class="col-lg-7">
								<div class="about-area__content">
									<h4>WE ARE “
										<span class="color--theme">Phonix</span>”</h4>
									<h3 class="cd-headline cx-heading slide">PROVIDE BEST TAX SOLUTION FOR YOUR
										<span class="color--theme cd-words-wrapper cd-words-wrapper-2">
											<b class="is-visible">Business</b>
											<b>Performance</b>
											<b>Success</b>
										</span>
										TO GROWUP</h3>
										<p>
										We provide high value actions and relationships constantly helping employees with our 
										most reliable tax services 
										</p>
										
										<p>We specialize in helping individuals meet their U.S. tax filing 
										obligations, each and every client is most precious, data privacy is of our utmost importance, 
										so we provide high value to our clients in terms based on honesty, authenticity, accountability, 
										and trust on our service deliverance.
									</p>
									<a href="/about" class="cr-btn">
										<span>Read More</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- //About Area -->

    		<!-- Features Area -->			
			@include('components.featurescomp')
			<!--// Features Area -->


			<!-- Service Area -->
			@include('components.servicecomp')
			<!--// Service Area -->

			<!-- Tax Calculation Area -->
			<section id="tax-calculation" class="tax-calculation-area bg--grey--light">
				<div class="taxcalc">
					<div class="row no-gutters align-items-center">

						<!-- Tax Calculation Area Left -->
						<div class="col-xl-5 col-lg-12">
							<div class="taxcalc__content" data-black-overlay="4">
								<div class="taxcalc__content__inner">
									<h3>TAX
										<span class="color--theme">CALCULATION</span>
									</h3>
									<p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudanti, totam rem aperiam, eaque
										ipsa quae so some thing new for tax calculation </p>
								</div>
							</div>
						</div>
						<!--// Tax Calculation Area Left -->

						<!-- Tax Calculation Area Right -->
						<div class="col-xl-7 col-lg-12">
							<div class="taxcalc__calculation">
								<div class="taxcalc__calculation__inner">
									<div class="row no-gutters">

										<div class="col-lg-6 col-md-6 wow fadeInUp">
											<div class="single-input">
												<label for="taxcalc-business-area">Choose Your Business Area*</label>
												<select name="taxcalc-business-area" id="taxcalc-business-area">
													<option value="1">Select your business</option>
													<option value="2">Marketing</option>
													<option value="3">IT Industries</option>
													<option value="4">Management Industries</option>
													<option value="5">Property Business</option>
												</select>
											</div>
										</div>

										<div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.15">
											<div class="single-input">
												<label for="taxcalc-country-residence">Country of residence*</label>
												<select name="taxcalc-country-residence" id="taxcalc-country-residence">
													<option value="1">Australia</option>
													<option value="2">United States</option>
													<option value="3">United Kingdom</option>
													<option value="3">Germany</option>
													<option value="3">Netherland</option>
												</select>
											</div>
										</div>

										<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3">
											<div class="single-input">
												<label for="taxcalc-employee-counter">Number of Employees</label>
												<select name="taxcalc-employee-counter" id="taxcalc-employee-counter">
													<option value="1">Select Here</option>
													<option value="2">0 - 20</option>
													<option value="3">21 - 50</option>
													<option value="4">51 - 150</option>
													<option value="5">151 - 500</option>
													<option value="6">500+</option>
												</select>
											</div>
										</div>

										<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.45">
											<div class="single-input">
												<label for="taxcalc-tax-year">Tax Year*</label>
												<select name="taxcalc-tax-year" id="taxcalc-tax-year">
													<option value="1">2000 - 2005</option>
													<option value="2">2006 - 2010</option>
													<option value="3">2011 - 2015</option>
													<option value="4">2016 - 2020</option>
												</select>
											</div>
										</div>

										<div class="col-lg-5 col-md-12 wow fadeInUp" data-wow-delay="0.6">
											<div class="single-input">
												<label for="taxcalc-yearly-income">Yearly Total Income</label>
												<select name="taxcalc-yearly-income" id="taxcalc-yearly-income">
													<option value="1">Select Range</option>
													<option value="2">0 - 1 Million</option>
													<option value="3">1 Million - 3 Million</option>
													<option value="4">3 Million - 10 Million</option>
													<option value="5">10 Million - 20 Million</option>
													<option value="6">20 Million+</option>
												</select>
											</div>
										</div>

										<div class="col-lg-8 col-md-8 wow fadeInUp" data-wow-delay="0.75">
											<div class="button-holder">
												<button class="cr-btn" type="submit">
													<span>Calculate</span>
												</button>
												<span class="equal-sign">=</span>
												<div class="single-input">
													<label for="taxcalc-total-calculation">Total Payable Tax</label>
													<input type="text" id="taxcalc-total-calculation" placeholder="$000.00">
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
						<!--// Tax Calculation Area Right -->

					</div>
				</div>
			</section>
			<!--// Tax Calculation Area -->


			<!-- Team Area -->
			@include('components.teamcomp')
			<!--// Team Area -->

			<!-- Funfact Area -->
			@include('components.funfact')
			<!--// Funfact Area -->

			<!-- Testimonial Area -->
			@include('components.testimonial')
			<!--// Testimonial Area -->

			<!-- Call To Action Area -->
			@include('components.call')
			<!--// Call To Action Area -->

		</main>
@endsection