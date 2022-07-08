@extends("layouts.spacedcustomlayout")

@section("body")

<section class="banner-section">
    <div class="img-container">
     <<!--   <img src="{{asset("images/clienteducation-banner-img.jpg")}}" alt="banner image"> -->
    </div>
    <div class="banner-overlay">

    </div>
    <div class="bread-crumb">
        <nav>
            <ul>
                <li><a href="{{route('index')}}">Go to home</a></li>
                <li><a href="#">Client Education</a></li>
            </ul>
        </nav>
    </div>
</section>

<main class="clientedu-contents aboutus-page">
<!-- contents of the page -->
<section>
    <div class="paragraph">
        <h1>client education</h1>
        <p>
            As {{$compd? $compd->Companyname: 'Fundlux'}} Financial Management's client, we want you to understand what’s going on with your portfolio and, more importantly, the reasoning behind our decision making. That’s why we have multiple ways we regularly keep you up-to-date and informed on the markets, our outlook and the reasoning behind our strategic portfolio decisions
        </p>
        <h4>quarterly review</h4>
        <p>
            Each quarter you will receive an extensive report published under the direction of the Investment Policy Committee with input from our research staff. In it, we discuss recent market performance and our future market outlook. We also explain our views on current global economic and financial trends, and might cover such topics like:
        </p>
        <ul>
            <li>What period in history the current stock market most closely resembles &quest;</li>
            <li>How and why prior presidential elections have impacted stocks &quest;</li>
            <li>What emergent trend could determine beating the market or lagging &quest;</li>
        </ul>
        <p>
            The goal of this detailed report is to help you understand how current economic and political events are impacting the global stock market. We believe it’s a level of education and transparency few money managers provide to their clients.
        </p>
        <h4>MarketMinder</h4>
        <p>
            This commentary, now available to the general public, was originally created for Fundlux Financial Management's clients. MarketMinder is a source of “straight talk” about the financial markets, with the goal of helping investors understand whether market events are bullish or bearish, and why. The articles are updated every business day by Fundlux Financial Managements’ editorial staff, who scour over 100 periodicals, blogs and other sources to identify relevant financial news. We provide daily commentary on the markets and highlight stories in the financial media we believe investors should either pay attention to, or ignore.
        </p>
    </div>
    <div class="paragraph">
        <h2>high touch client services</h2>
        <p>
           At {{$compd? $compd->Companyname: 'Fundlux'}} Financial Management, portfolio management is only half the picture. Of equal, if not more, importance is our personalized service. We commit ourselves to understanding your financial needs and giving you the confidence and comfort necessary to help you reach your long-term investing goals.
        </p>
        <p>
            <strong class="aboutus-text-caption">Education and Information</strong> We want our clients to understand what’s going on with their portfolios and, more importantly, the reasoning behind our decisions. That’s why we have multiple ways we regularly keep you up-to-date and informed on the markets, our outlook and what drives our strategic portfolio decisions.
        </p>
    </div>
    <div class="paragraph">
        <h2>client programs</h2>
        <p>
            We continually seeks new ways to enrich your client experience. In addition to helping you achieve your long-term financial goals via portfolio management, we host a series of programs to provide you with timely updates and education regarding the financial markets and your portfolio. We designed these events, held in more than 60 cities nationwide, exclusively for clients of Fundlux Financial Management to offer unprecedented access to senior decision makers and other clients of the firm. Examples include Fundlux Financial Management Forecast Seminars, Investment Roundtables, Fundlux Financial Management Friends events, and more. There is no additional cost to our clients for these events, and we encourage you to attend as many as you would like each year.
        </p>
        <p>
            This high level of client support and proactive customer service is a cornerstone of our Private Client Group. While most of our industry typically reserves these type of services for institutional investors, we are proud to offer the highest level of customer service to all of our clients whether they’re individual investors or institutions.
        </p>
    </div>
</section>

</main>


@endsection