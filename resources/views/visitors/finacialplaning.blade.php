@extends("layouts.spacedcustomlayout")

@section("body")



#<main class="financial-planning-contents ourservices-page">
	<!-- contents of the page -->
 <section>
 	<div class="paragraph financial-planning-header header">
    		<h1>
    			<span class="line"></span> Fundlux fx <span class="line"></span>
    		</h1>
    	</div>
    	<div class="paragraph">
    		<h2>finacial planning</h2>
    		<div class="flex financial-planning-row">
    			<p>
    			A financial plan is a comprehensive evaluation of an investor’s current and future financial state by using currently known variables to predict future cash flows, asset values and withdrawal plans. Most individuals work in conjunction with their preferred financial planner and use current net worth, tax liabilities, asset allocation, and future retirement and estate plans in developing financial plans. These metrics are used along with estimates of asset growth to determine if a person’s financial goals can be met in the future, or what steps need to be taken to ensure that they are.
    			</p>
    			<div class="img-container">
    				<img src="{{asset("images/ourservice-img7.jpg")}}" alt="financial-planning">
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
