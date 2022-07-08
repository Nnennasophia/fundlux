@extends("layouts.spacedcustomlayout")


@section('body')
    



<main class="main-site-section">
<!-- trading view -->
<section style="border:1px solid #010216" class="bitcoin-logo-log" style="background-color:transparent">
<div class="btc-marque" style="background-color:transparent;">
<!-- TradingView Widget Starts -->
<div class="tradingview-widget-container" style="z-index:999;"></div>

<div class="tradingview-widget-container__widget">
</div>

<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
{
"symbols": [
{
"proName": "FOREXCOM:SPXUSD",
"title": "S&P 500"
},
{
"proName": "FOREXCOM:NSXUSD",
"title": "US 100"
},
{
"proName": "FX_IDC:EURUSD",
"title": "EUR/USD"
},
{
"proName": "BITSTAMP:BTCUSD",
"title": "Bitcoin"
},
{
"proName": "BITSTAMP:ETHUSD",
"title": "Ethereum"
}
],
"showSymbolLogo": true,
"colorTheme": "light",
"isTransparent": false,
"displayMode": "adaptive",
"locale": "en"
}
</script>
</div>
<!--END of Trading View Widget-->
</section>

<!-- other sections -->
<!-- Trade and invest section bregins -->
<section class="invest-and-trade-section top">
 <div class="stock-investment">
   <h3>Stocks and ETFs</h3>
   <p>Invest in stocks with 0% commission.
     Buy in bulk or just a fraction.
   </p>
   <a class="cta-btn" href="{{route('register')}}">
    Invset in Stocks
   </a>
 </div>
 <div class="stock-investment order-3">
   <h3>Buy Cryptocurrencies</h3>
   <p>Buy, sell and store Bitcoin and other leading cryptos with ease
   </p>
   <a class="cta-btn" href="{{route('register')}}">
   Buy Cryptocurrencies
   </a>
 </div>
 <div class="stock-investment">
   <h3>CFD Trading</h3>
   <p>Go long or short on FX from just 1 pip trade commodities and indices with flexible leverage
   </p>
   <a class="cta-btn" href="{{route('register')}}">
    Trade Now
   </a>
  </div>
</section>

<section class="trade-invest-bottom">
<div class="trade-invest-text">
<p>
<b class="bold-text">Trade and invest</b> in top stocks and ETFs. Trade currency pairs, Indices and Commodities via CFDs. Investing in the financial markets has never been easier.
</p>
<button class="cta-btn"> <a href="{{route('register')}}" >Start Trading</a></button>
<div style="border-left: 1px solid black;margin-top: 40px;padding: 15px;">
<h1 id="demo"></h1>
<h5>TRADES OPENED ON {{$compd? $compd->Companyname: 'FUNDLUX'}} FINANCIALS</h5>
<script>

 let interval = setInterval(function(){
   let now = new Date();
   let show = Math.floor(now/20000);
   function numberWithCommas(x) {
     return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
   }

   val = numberWithCommas(show);

   document.getElementById("demo").innerHTML = val;
},1000)
</script>
</div>
</div>
<div class="trade-view-container">
<style>
.tradingview-widget-container{
 display: none;
}
.active6{
 display: block;
}
</style>
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container active6" style="margin-bottom: 20px;" id="widget1">
<div class="tradingview-widget-container__widget"></div>
<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-info.js" async>
{
"symbol": "NASDAQ:TSLA",
"width": "100%",
"locale": "en",
"colorTheme": "light",
"isTransparent": false
}
</script>
</div>
<!-- TradingView Widget END -->
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container active6" style="margin-bottom: 20px;" id="widget2">
<div class="tradingview-widget-container__widget"></div>
<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-info.js" async>
{
"symbol": "NASDAQ:AAPL",
"width": "100%",
"locale": "en",
"colorTheme": "light",
"isTransparent": false
}
</script>
</div>
<!-- TradingView Widget END -->
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container" style="margin-bottom: 20px;" id="widget3">
<div class="tradingview-widget-container__widget"></div>
<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-info.js" async>
{
"symbol": "NASDAQ:AMZN",
"width": "100%",
"locale": "en",
"colorTheme": "light",
"isTransparent": false
}
</script>
</div>
<!-- TradingView Widget END -->
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container" style="margin-bottom: 20px;" id="widget4">
<div class="tradingview-widget-container__widget"></div>
<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-info.js" async>
{
"symbol": "NASDAQ:MSFT",
"width": "100%",
"locale": "en",
"colorTheme": "light",
"isTransparent": false
}
</script>
</div>
<!-- TradingView Widget END -->
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container" style="margin-bottom: 20px;" id="widget5">
<div class="tradingview-widget-container__widget"></div>
<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-info.js" async>
{
"symbol": "NASDAQ:NFLX",
"width": "100%",
"locale": "en",
"colorTheme": "light",
"isTransparent": false
}
</script>
</div>
<!-- TradingView Widget END -->
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container" style="margin-bottom: 20px;" id="widget6">
<div class="tradingview-widget-container__widget"></div>
<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-info.js" async>
{
"symbol": "NASDAQ:FB",
"width": "100%",
"locale": "en",
"colorTheme": "light",
"isTransparent": false
}
</script>
</div>
<!-- TradingView Widget END -->


<script>
let cs = 0;
let ts = 6;

function next(){
   document.getElementById("widget" + (cs + 1)).classList.remove("active6");
   document.getElementById("widget" + (cs + 2)).classList.remove("active6");
   cs = (ts + cs + 2) % ts;
   document.getElementById("widget" + (cs + 1)).classList.add("active6");
   document.getElementById("widget" + (cs + 2)).classList.add("active6");
}

setInterval(function(){
   next();
}, 10000);

</script>
</div>
</section>
<!-- Trade and invest section ends -->

<!-- offered service section begins -->
<section class="offered-services">
 <h2>What We Do</h2>
 <div class="service-lists-cards">
     <figure class="card-container">
         <img src="{{asset('images/binary.svg')}}" width="30" height="30"/>
         <h3>Binary Option</h3>
         <figcaption>
             <p>Binary option is a financial exotic option in which the payoff is either some fixed monetary amount or nothing at all. The two main types of binary options are the cash-or-nothing binary option and the asset-or-nothing binary option. You are free to enjoy with us.</p>
             <a class="invest-button" href="{{route('register')}}">Invest</a>
         </figcaption>
     </figure>
     <figure class="card-container">
         <img src="{{asset('images/etf-icon.svg')}}" width="30" height="30">
         <h3>Stocks &amp; ETF</h3>
         <figcaption>
             <p>A stock or share is a financial instrument that represents a proportionate claim on a company or corporation, it's assets and earnings. An exchange-traded fund (E.T.F) is a type of investment fund and exchange-traded product, i.e. they are traded on stock exchanges. We offer both services free to the public for them to make profits with us.</p>
             <a class="invest-button" href="{{route('register')}}">Invest</a>
         </figcaption>
     </figure>
     <figure class="card-container">
         <img src="{{asset('images/data-icon.svg')}}" width="30" height="30"/>
         <h3>Cryptocurrency</h3>
         <figcaption>
             <p>{{$compd? $compd->Companyname: 'Fundlux'}} offers all traders the opportunity to trade a wide range of the top ranked digital coins all hours of the day. Cryptocurrencies have become well known to people, surprisingly as it might be, anyone can invest in the crypto market to make a profit.</p>
             <a class="invest-button" href="{{route('register')}}">Invest</a>
         </figcaption>
     </figure>
 </div>
</section>
<!-- end of offered service section -->

<!-- Trade tools section begins -->
<section class="trade-tools">
<div class="trade-tools-item">
 <dl> 
     <div class="aside-items">
     <span><img src="{{asset('images/aside1-icon.svg')}}" width="30" height="30"></span>
     <div>
     <dt>Trade with crypto and digital assets in realtime</dt>
     <dd>Our Trading Panel is optimised to provide real market<br>
      and data allows trade with digital assets and <br>
       cryptocurrencies with ease and profits
     </dd>
     </div>
     </div>
     <div class="aside-items">
     <span><img src="{{asset('images/aside2-icon.svg')}}" width="30" height="30"></span>
     <div>
     <dt>Buy and Sell Cryptocurrency assets with HoluEX</dt>
     <dd>
         Buy and Sell USDT, BNB, DOGE, ADA <br>
         and other currencies comfortable with fair <br>
         market prices
     </dd>
    </div>
    </div>
    <div class="aside-items">
    <span><img src="{{asset('images/aside2-icon.svg')}}" width="30" height="30"></span>
     <div>
     <dt>Trade and Exchange 24/7</dt>
     <dd>Exchange anything and anywhere with our desktop <br>
     and mobile friendly user interface.
     </dd>
    </div>
    </div>
    </dl>
</div>
<div class="trade-tools-item trade-tools-img-container">
  <img src="{{asset('images/bouncing-image.svg')}}" >
</div>
</section>
<!-- end of trade tools section -->


<!-- why choose Us section begins-->
<!-- choose us core section -->
<section class="chooseus-core-section">
 <div class="chooseus-core-right">
 <figure>
   <div class="image-wrapper"><img src="https://globalbitfare.com/images/strong-security.png" alt="security-image"></div>
     <h2>Strong Security</h2>
     <figcaption>
       <p>Protection against DDoS attacks <br>
         Full data encryption.
       </p>
     </figcaption>
   </figure>
   <figure>
   <div class="image-wrapper"><img src="https://globalbitfare.com/images/world-coverage.png" alt="security-image"></div>
     <h2>World Coverage</h2>
     <figcaption>
       <p>Providing Services in 99% countries <br>
         around the globe.
       </p>
     </figcaption>
   </figure>
   <figure>
   <div class="image-wrapper"><img src="https://globalbitfare.com/images/payment-options.png" alt="security-image"></div>
     <h2>Payment Options</h2>
     <figcaption>
       <p>Popular Methods:Bitcoin,<br>Etheruem 
         Skrill.
       </p>
     </figcaption>
   </figure>
   <figure>
   <div class="image-wrapper"><img src=" https://globalbitfare.com/images/mobile-app.png" alt="security-image"></div>
     <h2>Mobile Friendly</h2>
     <figcaption>
       <p>Our User Dashboard is Made<br>
       to match all Mobile resolution.
       </p>
     </figcaption>
   </figure>
   <figure>
   <div class="image-wrapper"><img src="https://globalbitfare.com/images/cost-efficiency.png" alt="security-image"></div>
     <h2>Mobile Friendly</h2>
     <figcaption>
       <p>Reasonable trading fees for traders<br>
       and all market makers.
       </p>
     </figcaption>
   </figure>
   <figure>
   <div class="image-wrapper"><img src="https://globalbitfare.com/images/high-liquidity.png" alt="security-image"></div>
     <h2>High Liquidity</h2>
     <figcaption>
       <p>Fast access to high liquidity orderbook<br>
       for top currency pairs.
       </p>
     </figcaption>
   </figure>
 </div>
 <div class="chooseus-core-left">
   <div class="bitcoin-image-wrapper">
     <img src="{{asset('images/bitcoin-image.webp')}}" alt="bitcoin image">
   </div>
 </div>
   
</section>

<section class="chooseus-section">
  <div class="choice-menu">
    <p>Why Choose Us</p>
    <ul class="payout-list-menu">
      <li><img src="{{asset('images/swift-pay1.svg')}}" width="30" height="30">
       <p>Swift Payout</p>
      </li>
      <li><img src="{{asset('images/swift-pay2.svg')}}" width="30" height="30">
       <p>Swift Payout</p>
      </li>
      <li><img src="{{asset('images/swift-pay2.svg')}}" width="30" height="30">
       <p>Swift Payout</p>
      </li>
      <li><img src="{{asset('images/swift-pay2.svg')}}" width="30" height="30">
       <p>Swift Payout</p>
      </li>
    </ul>
    <div class="circle-batch">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
 
  <!-- space div -->
  <div class="index-line-div"></div>

  <div class="latest-transaction">
    <div class="latest latest-deposits">
      <p>Latest Deposits</p>
      <div class="latest-items">
        <figure>
          <img src="{{asset('images/avatar2.svg')}}" width="40" height="40">
          <h4 class="author">wrwmgnJNdjfji2</h4>
          <figcaption class="items-caption">
            <p>59,000.45</p>
            <span>4.494 BTC</span>
          </figcaption>
        </figure>
        <figure>
          <img src="{{asset('images/avatar3.svg')}}" width="40" height="40">
          <h4 class="author">***wrwmgnJNdjfji2</h4>
          <figcaption class="items-caption">
            <p>59,000.45</p>
            <span>4.494 BTC</span>
          </figcaption>
        </figure>
        <figure>
          <img src="{{asset('images/avatar4.svg')}}" width="40" height="40">
          <h4 class="author">***wrwmgnJNdjfji2</h4>
          <figcaption class="items-caption">
            <p>59,000.45</p>
            <span>4.494 BTC</span>
          </figcaption>
        </figure>
        <figure>
          <img src="{{asset('images/avatar1.svg')}}" width="40" height="40">
          <h4 class="author">***wrwmgnJNdjfji2</h4>
          <figcaption class="items-caption">
            <p>59,000.45</p>
            <span>4.494 BTC</span>
          </figcaption>
        </figure>
      </div>
    </div>
    <div class="latest latest-withdrawals">
      <p>Latest Withdrawals</p>
      <div class="latest-items">
        <figure>
          <img src="{{asset('images/avatar2.svg')}}" width="40" height="40" >
          <h4 class="author">wrwmgnJNdjfji2</h4>
          <figcaption class="items-caption">
            <p>59,000.45</p>
            <span>4.494 BTC</span>
          </figcaption>
        </figure>
        <figure>
          <img src="{{asset('images/avatar3.svg')}}" width="40" height="40">
          <h4 class="author">***wrwmgnJNdjfji2</h4>
          <figcaption class="items-caption">
            <p>59,000.45</p>
            <span>4.494 BTC</span>
          </figcaption>
        </figure>
        <figure>
          <img src="{{asset('images/avatar4.svg')}}" width="40" height="40">
          <h4 class="author">***wrwmgnJNdjfji2</h4>
          <figcaption class="items-caption">
            <p>59,000.45</p>
            <span>4.494 BTC</span>
          </figcaption>
        </figure>
        <figure>
          <img src="{{asset('images/avatar4.svg')}}" width="40" height="40">
          <h4 class="author">***wrwmgnJNdjfji2</h4>
          <figcaption class="items-caption">
            <p>59,000.45</p>
            <span>4.494 BTC</span>
          </figcaption>
        </figure>
      </div>
    </div>
  </div>
</section>

<!-- why choose us section ends -->

<!-- Bitcoin calculator -->
 <section style="padding:0;margin:0" class="bitcoin-calculator bit-calc-widget">
   <!-- Crypto Converter ⚡ Widget --><crypto-converter-widget shadow symbol live background-color="#010216" border-radius="0" fiat="united-states-dollar" crypto="bitcoin" amount="1" decimal-places="2"></crypto-converter-widget><a style="color:darkblue;font-size:1rem;text-align:center;display:block;" href="https://currencyrate.today/" target="_blank" rel="noopener">Currency rate today</a><script async src="https://cdn.jsdelivr.net/gh/dejurin/crypto-converter-widget@1.5.2/dist/latest.min.js"></script><!-- /Crypto Converter ⚡ Widget -->
</section>

<!-- <section class="media-section">
    <div class="media-empty-box"></div>
    <div class="media-invest-card">
     <a class="media-invest-button" href="#">Invest</a>
    </div>
</section> -->

<section class="affordable-pkgs-section skew-cards">
 <h3>Affordable Packages</h3>
<p><span class="aboutus-index-line"></span>
 choose your preferable plans for investment<span class="aboutus-index-line"></span></p>
 <div class="card-list-section">
   <div class="box">
     <div class="box-top">
     <h4>Starter</h4>
     <p>Weekly 100% for 4 times</p>
     </div>
     <div class="canvas-line"></div>
     <div style="background:#010216;border-radius:0  0 8px 8px;padding:1rem;" class="box-bottom">
     <ul>
       <li>Weekly Return</li>
       <li>For 4 Times</li>
       <li>100% Rio Each Time</li>
     </ul>
     <div class="minmax-section">
       <div class="min-section">
         <h5>minimum</h5>
         <p>&dollar;100</p>
       </div>
       <div class="min-section">
         <h5>maximum</h5>
         <p>&dollar;10000</p>
       </div>
     </div>
      </div>
     <a class="cta-btn" href="{{route('register')}}">sign up</a>
   </div>
   <div class="box">
     <div class="box-top">
     <h4>Silver</h4>
     <p>Weekly 100% for 4 times</p>
     </div>
     <div class="canvas-line"></div>
     <div style="background:#010216;border-radius:0  0 8px 8px;padding:1rem;" class="box-bottom">
     <ul>
       <li>Weekly Return</li>
       <li>For 4 Times</li>
       <li>100% Rio Each Time</li>
     </ul>
     <div class="minmax-section">
       <div class="min-section">
         <h5>minimum</h5>
         <p>&dollar;10000</p>
       </div>
       <div class="min-section">
         <h5>maximum</h5>
         <p>&dollar;40000</p>
       </div>
     </div>
      </div>
     <a class="cta-btn" href="{{route('register')}}">sign up</a>
   </div>
   <div class="box">
     <div class="box-top">
     <h4>Gold</h4>
     <p>Weekly 100% for 4 times</p>
     </div>
     <div class="canvas-line"></div>
     <div style="background:#010216;border-radius:0  0 8px 8px;padding:1rem;" class="box-bottom">
     <ul>
       <li>Weekly Return</li>
       <li>For 4 Times</li>
       <li>100% Rio Each Time</li>
     </ul>
     <div class="minmax-section">
       <div class="min-section">
         <h5>minimum</h5>
         <p>&dollar;40000</p>
       </div>
       <div class="min-section">
         <h5>maximum</h5>
         <p>&dollar;55000</p>
       </div>
     </div>
      </div>
     <a class="cta-btn" href="{{route('register')}}">sign up</a>
   </div>
   <div class="box">
     <div class="box-top">
     <h4>Platinum</h4>
     <p>Weekly 100% for 4 times</p>
     </div>
     <div class="canvas-line"></div>
     <div style="background:#010216;border-radius:0  0 8px 8px;padding:1rem;" class="box-bottom">
     <ul>
       <li>Weekly Return</li>
       <li>For 4 Times</li>
       <li>100% Rio Each Time</li>
     </ul>
     <div class="minmax-section">
       <div class="min-section">
         <h5>minimum</h5>
         <p>&dollar;80000</p>
       </div>
       <div class="min-section">
         <h5>maximum</h5>
         <p>&dollar;400000</p>
       </div>
     </div>
      </div>
     <a class="cta-btn" href="{{route('register')}}">sign up</a>
   </div>
   <div class="box">
     <div class="box-top">
     <h4>Diamond</h4>
     <p>Weekly 100% for 4 times</p>
     </div>
     <div class="canvas-line"></div>
     <div style="background:#010216;border-radius:0  0 8px 8px;padding:1rem;" class="box-bottom">
     <ul>
       <li>Weekly Return</li>
       <li>For 4 Times</li>
       <li>100% Rio Each Time</li>
     </ul>
     <div class="minmax-section">
       <div class="min-section">
         <h5>minimum</h5>
         <p>&dollar;400000</p>
       </div>
       <div class="min-section">
         <h5>maximum</h5>
         <p>&dollar;1000000</p>
       </div>
     </div>
      </div>
     <a class="cta-btn" href="{{route('register')}}">sign up</a>
   </div>
 </div>
</section>


<section class="trade-management-section">
  <div class="right">
   <h3>We set the pace, others follow</h3>
    <p>
      As high-conviction investors, we refuse to follow the herd. Instead, we focus on stocks that are out of favour with mainstream investors, as we believe that these offer the greatest potential for long-term gains. This is because stocks that are popular tend to be overvalued – while out-of-favour stocks are often too cheap. We aim to exploit this inefficiency for our shareholders.
    </p>
   <a class="cta-btn" href="#"> View More</a>
  </div>
   <div class="left">
     <div class="left-div-container">
       <div class="box">
        <div class="fund-icon"><img src="{{asset('images/aside1-icon.svg')}}"></div>
        <div class="text-content">
        <h3>Asset Management</h3> 
        <p>We are a trusted advisor to our clients, assisting them in developing
        and accessing alternatives to meet their strategic objectives
         </p>
       </div>
         <div class="right-arrow-icon"><span class="fa fa-arrow-right"></span></div>
       </div>
     </div>
     <div class="left-div-container">
       <div class="box">
         <div class="fund-icon"><img src="{{asset('images/aside1-icon.svg')}}"></div>
         <div class="text-content">
         <h3>Mutual Funds</h3>
         <p>
           let the experts handle the work of making you rich.
         </p>
       </div>
         <div class="right-arrow-icon"><span class="fa fa-arrow-right"></span></div>
       </div>
     </div>
     <div class="left-div-container">
       <div class="box">
         <div class="fund-icon"><img src="{{asset('images/aside1-icon.svg')}}"></div>
         <div class="text-content">
         <h3>Wealth Management</h3>
         <p>Advising wealthy families sometimes over several generations is
         a complex task of great responsibility</p>
         </div>
         <div class="right-arrow-icon"><span class="fa fa-arrow-right"></span></div>
       </div>
     </div>
     <div class="left-div-container">
       <div class="box">
         <div class="fund-icon"><img src="{{asset('images/aside1-icon.svg')}}"></div>
         <div class="text-content">
         <h3>Bokerage Account</h3>
         <p>Your money is safe and sound and you get guaranteed returns</p>
        </div>
         <div class="right-arrow-icon"><span class="fa fa-arrow-right"></span></div>
       </div>
     </div>
   </div>
</section>



<!-- closing section under refactoring -->
<section class="closing-section">
<div class="empty-box-1"></div>
<div class="empty-box-2"></div>
</section>



<!-- Aboutus -->
<section id="aboutus" class="last-section">
<h3>About Us</h3>
<p><span class="aboutus-index-line"></span>Most flexible cryptocurrency investement company<span class="aboutus-index-line"></span></p>
<div class="index-about-section">
 <div class="image-container"><img src="{{asset('images/blockchain_white.png')}}"></div>
 <div>
   <h3>{{$compd? $compd->Companyname: 'FUNDLUX'}}</h3>
   <p>
    {{$compd? $compd->Companyname: 'Fundlux'}} Investement Company is a distinctive investment Company offering our investors access to high growth investment opportunities in Bitcoin markets and other service. We implement best practice of trading &amp; mining of Bitcoins through our operations, While offering flexibility in our investment plans. Our company benefits from an extensive network of global clients.
     
   </p>
 </div>
</div>
</section>



<section class="google-map-section">
<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=15300%20croydon%20Dr%20Suite%20300&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:250px;width:100%;}.gmap_canvas{height:100%}</style></div></div>
</section>
</main>


    @endsection
