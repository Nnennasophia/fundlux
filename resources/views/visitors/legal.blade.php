@extends("layouts.spacedcustomlayout")

@section("body")

<main class="legal-contents ourcompany-page">
	<!-- contents of the page -->
    <section>
    	<div class="paragraph legal-header">
    		<h1>
    			<span class="line"></span> {{$compd? $compd->Companyname: 'FUNDLUX'}} fx <span class="line"></span>
    		</h1>
    	</div>
    	<div class="paragraph legal-body">
    		<h2>
    		 legal information
    		</h2>
    		<div class="flex">
    		<p class="left">
    			{{$compd? $compd->Companyname: 'Fundlux'}} fx is one of the most reliable diversified financial investment service provider in the world. Our fundamental mission is to help customers and clients achieve their financial objectives. With offices located in the United Kingdom, Australia,Canada and headquartered in United States, igenius fx have staffs with over 30 years’ experience in combining financial development and trades. We are committed to pushing the boundaries of what constitutes the highest standards in trades and asset management.
    		</p>
    		<div class="right">
    			<a href="{{asset("documents/bit-1.pdf")}}" download="bit-1.pdf" target="_blank">certifacte of incorporation <span class="fa fa-download"></span></a>
    			<a href="{{asset("documents/bit-2.pdf")}}" download="bit-2.pdf" target="_blank">our company profile <span class="fa fa-download"></span></a>
    		</div>
    	  </div>
    	</div>
    </section>
    <section>
    	<p>
    		With over $5.3 Trillion traded daily in the market, we are dedicated to giving our clients their own share of the profit daily. As a leading global market maker, igenius fx has one of the World’s Largest Independent traders and fund managers with clients from different parts of the World. Today, as a successful trade investment and asset management company, we are trusted by thousands of clients. Our sterling reputation, dedication to meeting our clients’ needs and innovative approach to business development are some driving forces behind our success.
    	</p>
    </section>
    <section class="start-financial-freedom">
    	<div class="flex">
    		<p>Start your journey to
    	   <span class="lg-font">financial freedom</span></p>
    	   <a href="{{route('login')}}" class="cta-btn" target="_blank">get started</a>
    	</div>
    </section>
    <!-- <section class="easy-nav-links">
    	<nav>
    		<ul>
    			<li>Quick Links To Buy Bitcoin In EUROPE
    			
    			</li>
    			<li>Quick Links To Buy Bitcoin In AMERICA
    			
    			</li>
    			<li>Quick Links To Buy Bitcoin In OTHERS
    			
    			</li>
    		</ul>
    	</nav>
    	
    </section> -->
</main>


@endsection
