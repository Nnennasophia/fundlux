@extends("layouts.spacedcustomlayout")


@section('body')



<main class="trade-view market-main-section">
  <section>
      <p><a href="{{route('market')}}" class="market-breadcrumb">Market</a></p>
  </section>
  <section class="market-logo-log">
   <div class=" correctwidth">
<div class="row text-center" style="margin-right:0px;margin-left:0px;">
    <!--<div class="col" style="z-index:-1;"><img class="img-fluid" src="assets/img/footerbg.png"></div>-->
</div>
<div class="row" style="z-index:9999;margin-bottom:-30px;">

    <!-- TradingView Widget BEGIN -->

<!-- TradingView Widget END -->
</div>
<section>
<script src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js">{
"width": "100%",
"height": "500",
"defaultColumn": "overview",
"screener_type": "crypto_mkt",
"displayCurrency": "USD",
"locale": "en"
}
</script>
</section>
</div>
</section> 
</main>
  

@endsection