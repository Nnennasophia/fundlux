@extends("layouts.spacedcustomlayout")

@section("body")

<section class="banner-section">
    <div class="img-container">
     <!--   <img src="{{asset("images/history-banner-img.jpg")}}" alt="banner image"> -->
    </div>
    <div class="banner-overlay">

    </div>
    <div class="bread-crumb">
        <nav>
            <ul>
                <li><a href="{{route('index')}}">Go to home</a></li>
                <li><a href="#">History</a></li>
            </ul>
        </nav>
    </div>
</section>

<main class="history-contents aboutus-page">
<!-- contents of the page -->
<h1>Brief History</h1>
<section class="history-section">
    <p>
        In 2000, David William Davies founded {{$compd? $compd->Companyname: 'Coming soon'}} Financial Management and began managing discretionary assets with a fundamental belief in capitalism and free capital markets. We start with the simple notion that supply and demand are the sole determinants of securities pricing. In addition, we believe capital markets are relatively efficient discounters of all widely known information.
    </p>
    <p>
        Thus, to add value through active management, one must identify information not widely known or interpreted differently from other market participants. Throughout our history, we have continuously developed ways to look at capital markets differently.
    </p>
    <p>
        David William Davies theoretical work in the 1970s popularized the use of the Price to Sales Ratio and detailed its relevance as a tool for investment analysis. This tool was used to help manage small-cap value portfolios for our institutional investors.
    </p>
    <p>
        {{$compd? $compd->Companyname: 'Coming soon'}} Financial Management contributed to the recognition of distinct investment styles. We used these advancements as the foundation for a new series of broad mandate strategies, including Global Total Return, US Total Return, and Foreign Equity.
    </p>
    <p>
        {{$compd? $compd->Companyname: 'Coming soon'}} Financial Management began offering separate portfolio management directly to high net worth individuals under our Private Client Group. In early 2004, we expanded our service offerings into Canada and the United Kingdom. In 2007, Coming soon Financial Management and its subsidiaries operate in 13 offices across 8 countries and serve over 35,000 clients globally.
    </p>
    <p>
        In addition, we have dedicated significant resources to the emerging field of behavioral finance to better understand not just the tools of finance, but also how investors use these tools. Our research has led us to develop practical applications of behavioral finance in our portfolio management process.
    </p>
</section>

</main>



@endsection