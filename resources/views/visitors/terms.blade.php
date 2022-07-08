@extends("layouts.spacedcustomlayout")

@section("body")

<section class="banner-section">
    <div class="img-container">
    <!--    <img src="{{asset("images/privacy-banner-img.jpg")}}" alt="banner image"> -->
    </div>
    <div class="banner-overlay">

    </div>
    <div class="bread-crumb">
        <nav>
            <ul>
                <li><a href="{{route('index')}}">Go to home</a></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>
        </nav>
    </div>
</section>

<main class="policy-contents aboutus-page">
<!-- contents of the page -->
<section>
    <h1>our privacy policy</h1>
    <div class="paragraph">
        <h4>your privacy is critically important to us.</h4>
        <p>
            It is {{$compd? $compd->Companyname: 'Fundlux'}} Financial Management's policy to respect your privacy regarding any information we may collect while operating our website. We respect your privacy and are committed to protecting personally identifiable information you may provide us through the Website. We have adopted this privacy policy to explain what information may be collected on our Website, how we use this information, and under what circumstances we may disclose the information to third parties. This Privacy Policy applies only to information we collect through the Website and does not apply to our collection of information from other sources
        </p>
        <p>
            This Privacy Policy, together with the Terms and conditions posted on our Website, set forth the general rules and policies governing your use of our Website. Depending on your activities when visiting our Website, you may be required to agree to additional terms and conditions.
        </p>
    </div>
    <div class="paragraph">
        <h4>website visitors</h4>
        <p>
            Like most website operators, {{$compd? $compd->Companyname: 'Fundlux'}} Financial Management collects non-personally-identifying information of the sort that web browsers and servers typically make available, such as the browser type, language preference, referring site, and the date and time of each visitor request. {{$compd? $compd->Companyname: 'Fundlux'}} Financial Management's purpose in collecting non-personally identifying information is to better understand how {{$compd? $compd->Companyname: 'Fundlux'}} Financial Management's visitors use its website. From time to time, {{$compd? $compd->Companyname: 'Fundlux'}} Financial Management may release non-personally identifying information in the aggregate, e.g. by publishing a report on trends in the usage of its website.
        </p>
        <p>
            {{$compd? $compd->Companyname: 'Fundlux'}} Financial Management also collects potentially personally identifying information like Internet Protocol (IP) addresses for logged in users. {{$compd? $compd->Companyname: 'Fundlux'}} Financial Management only discloses logged in user addresses under the same circumstances that it uses and discloses personally identifying information as described below.
        </p>
    </div>
    <div class="paragraph">
        <h4>Gathering of Personally Identifying Information</h4>
        <p>
            Certain visitors to {{$compd? $compd->Companyname: 'Fundlux'}} Financial Management's websites choose to interact with {{$compd? $compd->Companyname: 'Fundlux'}} Financial Management in ways that require {{$compd? $compd->Companyname: 'Fundlux'}} Financial Management to gather personally identifying information. The amount and type of information that {{$compd? $compd->Companyname: 'Fundlux'}} Financial Management gathers depends on the nature of the interaction.
        </p>
    </div>
    <div class="paragraph">
        <h4>security</h4>
        <p>
            Ads appearing on our website may be delivered to users by advertising partners, who may set cookies. These cookies allow the ad server to recognize your computer each time they send you an online advertisement to compile information about you or others who use your computer. This information allows ad networks to, among other things, deliver targeted advertisements that they believe will be of most interest to you. This Privacy Policy covers the use of cookies by {{$compd? $compd->Companyname: 'Fundlux'}} Financial Management and does not cover the use of cookies by any advertisers.
        </p>
    </div>
    <div class="paragraph">
        <h2>business conduct and ethics</h2>
        <p>
            {{$compd? $compd->Companyname: 'Fundlux'}} Financial Management aims to realize opportunities for our clients, shareholders and people while meeting expectations of sound corporate governance. We are in business to be profitable, but it is the way we do business that defines us. {{$compd? $compd->Companyname: 'Fundlux'}} Financial Management’s high standards for conduct are underpinned by What We Stand For, and our long-held principles of Opportunity, Accountability and Integrity. We are committed to conducting our business in accordance with all applicable laws and regulations and in a way that enhances our reputation in the market. We are committed to ensuring our products and services are marketed appropriately and that clients are fairly treated. Business conduct and ethics are addressed within our existing risk management framework by establishing and maintaining an effective risk culture that drives good conduct. This is supported by a framework of policies, controls, processes and reporting mechanisms, in particular to manage compliance, legal, reputation and operational risks. {{$compd? $compd->Companyname: 'Fundlux'}} Financial Management owns significant stakes in leading, high-quality, global companies. Through board participation, we work for continuous improvement of the performance of our companies. With our industrial experience, broad network and financial strength, we strive to make and keep our companies best-in-class. We always look at the opportunities and challenges facing each individual company. Our cash flow allows us to financially support strategic initiatives in our companies, capture investment opportunities and provide our clients with a steadily rising profit.
        </p>
    </div>
    <div class="paragraph">
        <h3>investor relations</h3>
        <p>
            We see building strong and lasting relationships as an essential component of our growth. Both in relationships with our clients, partners, or acquisitions; we ensure all business transactions are carried out on the foundation of goodwill and a healthy business environment. This statement is a core cultural belief and a fundamental element of the success of {{$compd? $compd->Companyname: 'Fundlux'}} Financial Management. Members of our community tend to share core values that are highly compatible with those that are central to the business and established at the outset. We treat each other with mutual respect, openness and fairness and are driven by a desire to ‘do the right thing’ by all our stakeholders. This is our culture it is central to our success. We are therefore proactive in building and reinforcing it.
        </p>
    </div>
</section>
<section>
    <div class="tp-section">
        <h1>anti-bribery and corruption framework</h1>
        <p>
            {{$compd? $compd->Companyname: 'Fundlux'}} Financial Management is committed to operating within the commercial banking laws and protocols of any jurisdiction in which it does business, and in a way that is consistent with our Code of Conduct and What We Stand For. As a company, we have enforced a robust framework to prevent all forms of bribery and corruption. Our Anti- Bribery and Corruption Policy forbids the actual or attempted use of any form of bribery or corruption, either directly or indirectly, on {{$compd? $compd->Companyname: 'Fundlux'}} Financial Management’s behalf to advance its business interests or those of its associates.{{$compd? $compd->Companyname: 'Fundlux'}} Financial Management has systems and controls in place to prevent bribery and corruption.
        </p>
    </div>
    <div class="bt-section">
        <div class="left">
            <h3>policies &amp; procedures</h3>
            <p>
                Bribery and corruption risks are addressed through a number of other {{$compd? $compd->Companyname: 'Fundlux'}} Financial Management policies and procedures, including our Anti-Money Laundering and Counter-Terrorism Financing Policy, incorporating Client Identification. This document is a summary of {{$compd? $compd->Companyname: 'Fundlux'}} Financial Management’s Anti-Bribery and Corruption Policy and framework. It is not intended to create third party rights or duties or to form part of any contractual agreement between {{$compd? $compd->Companyname: 'Fundlux'}} Financial Management and any other party.
            </p>
        </div>
        <div class="right">
            <h3>due dilligence</h3>
            <p>
                In dealing with third parties, the Policy requires sufficient due diligence to be undertaken to ensure that they are suitable to be associated with {{$compd? $compd->Companyname: 'Fundlux'}} Financial Management, and that appropriate controls are implemented, designed to prevent and detect bribery and corruption. Third parties associated with {{$compd? $compd->Companyname: 'Fundlux'}} Financial Management are in turn expected to have appropriate due diligence arrangements and controls in place in relation to the other parties they engage with, on behalf of {{$compd? $compd->Companyname: 'Fundlux'}} Financial Management.
            </p>
        </div>
    </div>
</section>
</main>

@endsection()
