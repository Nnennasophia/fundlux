@extends("layouts.spacedcustomlayout")

@section("body")

<main class="loans and grants-contents ourservices-page">
	<!-- contents of the page -->
 <section>
 	<div class="paragraph loansandgrant-header header">
    		<h1>
    			<span class="line"></span> Fundlux fx <span class="line"></span>
    		</h1>
    	</div>
    	<div class="paragraph">
    		<h2>loans and grants</h2>
    		<div class="flex loans and grants-row">
    			<p>
    			Getting a loan doesn’t have to be intimidating, with the right lender it can be a simple process. You only need a lender committed to taking the mystery out of the mortgage loan process! At Fundlux fx , we understand! Our investors want simple facts, honest answers and competitive products. DGS automatically offers loan services to investors with over $50,000 investment either in our normal Fundlux fx financial Services packages or the NFP plans. Investors over $50,000 are entitled to loans of $200,000-1millon dollars yearly with 5% paid monthly, or the investor could wish to compound the interest till the time limit, provided all required information and identity of the investor are duly confirmed by Fundlux fx loan board. Every investor above $50,000 is provided with a personal account manager and the investor has a direct communication with the manager in order to see that our loan offers are secured. GREAT INVESTING WITH Fundlux fx FAMILY
    			</p>
    			<div class="img-container">
    				<img src="{{asset("images/ourservice-img9.jpg")}}" alt="loans and grants">
    			</div>
    		</div>
    	</div>
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
