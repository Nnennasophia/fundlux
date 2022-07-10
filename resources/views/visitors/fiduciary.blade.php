@extends("layouts.spacedcustomlayout")

@section("body")

<section class="banner-section">
    <div class="img-container">
     <!--   <img src="{{asset("images/fiduciary-banner-img.jpeg")}}" alt="banner image"> -->
    </div>
    <div class="banner-overlay">

    </div>
    <div class="bread-crumb">
        <nav>
            <ul>
                <li><a href="{{route('index')}}">Go to home</a></li>
                <li><a href="#">Fiduciary</a></li>
            </ul>
        </nav>
    </div>
</section>

<main  class="fiduciary-contents aboutus-page">

<!-- contents of the page -->
<section>
 <div class="paragraph">
 <h1>what is a <span class="fiduciary-caption">fiduciary &quest; </span></h1>
 <p>
     The financial industry can be confusing with its many professional titles, including some common ones like brokers or Registered Investment Advisers (RIAs). And certain titles that may sound similar, such as advisor with an “o” and adviser with an “e” can mean very different things. You may have heard the term “fiduciary investment adviser,” but investment professionals rarely unpack this industry-specific term. In this article, we hope to help you distinguish between different types of financial professionals, introduce what it means to be a fiduciary adviser and discuss Coming soon Financial Management's fiduciary status and approach to money management.
 </p>
</div>
<div class="paragraph">
 <h2>fiduciary defined</h2>
 <p>
     At its most basic level, a fiduciary is a person or firm who acts for clients and is required to put their best interests first at all times. RIAs are required to register with the Securities and Exchange Commission (SEC) or the states in which they do business in, depending on how much in assets they manage. In either case, they are held to the fiduciary standard to act in client's best interests.
 </p>
</div>
 <div class="paragraph">
 <h2>how to choose right investment professional</h2>
 <p>Some investors try to find their investment manager by hiring an RIA held to the fiduciary standard. This is a good place to start, because these types of advisers are obligated to act in your best interests. However, there are other important aspects of a good adviser to keep in mind and the best one for you likely depends on your personal situation and preferences.</p>
 <p>
     To make sure a financial professional is a good fit for you, you should ask the right questions. Some important topics to cover are an adviser’s investment philosophies, sources of compensation and any potential conflicts of interest. Proper firm structure enables advisers to act on their values, and includes factors like fee arrangements and investment strategies geared to meeting your needs. If your adviser sells commission-based products or values their bottom line over client goals, they may not always serve your needs first.
 </p>
</div>
<div class="paragraph">
    <h2>{{$compd? $compd->Companyname: 'Coming soon'}} financial management's approach</h2>
    <p>
        At the heart of a good client-adviser relationship is trust, and it can be difficult to have that trusting relationship if your financial professional may be recommending products that aren’t in your best interest. That’s why Coming soon Financial Management has been held to the fiduciary standard since our founding.
    </p>
    <p>
        {{$compd? $compd->Companyname: 'Coming soon'}} Financial Management also works with third-party custodians to house our client's assets. This relationship helps provide transparency above and beyond our fiduciary duties and instill trust in our asset management relationships. When Coming soon Financial Management first began managing client assets, we knew that having a third-party who provides regular client reporting was crucial to fostering client relationships. This means that, though Fundflux Financial Management generates its own client reports, your custodian also provides regular reporting for your accounts, so you know exactly what’s going on.
    </p>
    <p>
        As a client of {{$compd? $compd->Companyname: 'Coming soon'}} Financial Management, you receive a dedicated Investment Counselor, who knows your long-term goals and financial situation. Your Investment Counselor is your resource to ask any questions you might have about your portfolio or other market-related topics. He or she will reach out to you regularly to provide any updates on our market forecast, answer any questions and make sure your goals and situation haven’t changed.
    </p>
</div>
</section>

</main>


@endsection