@extends("layouts.spacedcustomlayout")

@section('body')



<main class="cryptocurrency-page ourservices-page">
	<!-- contents of the page -->
 <section>
 	<div class="paragraph cryptocurrency-header header">
    		<h1>
    			<span class="line"></span> Fundflux fx <span class="line"></span>
    		</h1>
    	</div>
    	<div class="paragraph">
    		<h2>cryptocurrency</h2>
    		<div class="flex goldinvestment-row">
    			<p>
    			Fundflux fx now offers all traders the opportunity to trade a wide range of the top ranked digital coins 24/7*. Today cryptocurrencies have become known to most people as a conventional and popular investment option. The main purpose of this new technology is to allow people to buy, trade, and invest without the need for banks or any other financial institution. Cryptocurrencies are highly volatile and can be profitable to any trader’s portfolio. Cryptocurrencies are not physical coins they are electronic, a digital asset that remains as data. The technology behind the cryptocurrency controls a large part of its value which holds new technology on the secure way to identify and transfer money. The first digital coin introduced was the Bitcoin and today it remains as the standard that all other coins compare themselves to. Following in its steps came Litecoin, so to date they stand as the top 2 highly valued coins on the market. There are several other coins also reaching a high-level market share such as Bitcoin and Bitcoin Cash, Dash, Ripple, Ethereum and Ethereum Classic.
    			</p>
    			<div class="img-container">
    				<img src="{{asset("images/ourservice-img6.jpg")}}" alt="cryptocurrency">
    			</div>
    		</div>
    	</div>
 </section>

 <section class="cryptocurrency-goals">
 <h4>Why trade Cryptocurrencies with Fundflux fx &quest;</h4>
  <p>
 Cryptocurrencies could potentially be the currency of the future with more people gaining interest and price value going up. igenius fx offers competitive spreads, with no commissions charged on transactions making it more profitable. When trading with igenius fx you are trading on the price changes of the digital coin, and not physically purchasing it. Trading with igenius fx ensures that you will trade with a 100% reputable broker
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
