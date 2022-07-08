@extends("layouts.spacedcustomlayout")

@section("body")


<main class="cannabis-contents ourservices-page">
	<!-- contents of the page -->
 <section>
 	<div class="paragraph cannabis-header header">
    		<h1>
    			<span class="line"></span> Fundflux fx <span class="line"></span>
    		</h1>
    	</div>
    	<div class="paragraph">
    		<h2>medical cannabis</h2>
    		<div class="flex cannabis-row">
    			<p>
    			For many years we have been working conscientiously and with the most diverse technologies and means. We have constantly successfully completed our projects.
                <br>
                We believe that the full benefits and potential of cannabis as a medical therapy are within our reach only through supply chain transparency, an engaged and active network of cannabis users, and data that is consistently available and verifiable for medical surveys and for developing and establishing therapies and life-prolonging solutions and treatments on blockchain technology. Our vision is one in which cannabis medical research gets the support it needs and deserves.
    			</p>
    			<div class="img-container">
    				<img src="{{asset("images/ourservice-cannabis-img1.png")}}" alt="cannabis">
    			</div>
    		</div>
    	</div>
 </section>

 <section class="cannabis-goals">
 <h4>cannabis goals</h4>
  <p>
Understand the regulatory, legal, and technological needs and challenges of the medical cannabis industry
Continually advance the medical cannabis blockchain data ecosystem to medical studies
Establish strong vendor and partner relationships with technology firms, doctors, scientists, universities, and governments to ensure data integrity and value
Attract, hire, and retain highly qualified professionals to sell, manage, monitor, and service the various technological component parts and software systems required to support the ecosystem
Foster a social community online in which each member can participate freely and offer the breadth of their knowledge and experience
Provide a simple, secure, user-friendly global exchange platform for the stakeholders
Create billions of data points and hundreds of millions of dollars in transaction value
Establish supply-chain integrity
</p>
 </section>

 <!--want to see more services section -->
	<section>
		 <div class="want-tosee-more flex">
    	  	<p>want to see more services &quest;</p>
    	  	<a href="{{route('services')}}" target="_blank">see all services</a>
    	  </div>
	</section>

	<section class="start-financial-freedom">
    	<div class="flex">
    		<p>Start your journey to
    	   <span class="lg-font">financial freedom</span></p>
    	   <a href="{{route('login')}}">get started</a>
    	</div>
    </section>

</main>


@endsection
