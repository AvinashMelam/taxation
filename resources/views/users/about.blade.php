@extends('layouts.master')

@section('content')

		<!-- Breadcrumb Area -->
		<div id="cr-breadcrumb-area" class="cr-breadcrumb-area section-padding--md">
			<div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-6 col-md-8">
						<div class="cr-breadcrumb">
							<ul class="cr-breadcrumb__pagination">
								<li>
									<a href="index.html">Home</a>
								</li>
								<li>About</li>
								
							</ul>
							<h1>About Us</h1>
							<p>perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem </p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--// Breadcrumb Area -->

        			<!-- About Area -->
			<section id="about-area" class="cr-section about-area bg--white">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-10 offset-lg-1">
							<div class="about-area__content2 text-center">
								<h4>WE ARE “
									<span class="color--theme">Korde</span>”</h4>
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
							</div>
						</div>
						<div class="col-lg-12">
							<div class="about-area__image2">
								<img src="images/about/about-thumbnail-3.png" alt="about area image">
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
        
@endsection