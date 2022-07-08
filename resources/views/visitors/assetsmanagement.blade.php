@extends("layouts.spacedcustomlayout")

@section("body")

<section class="banner-section">
    <div class="img-container">
     <!--   <img src="{{asset("images/asset-management-banner-img.webp")}}" alt="banner image"> -->
    </div>
    <div class="banner-overlay">

    </div>
    <div class="bread-crumb">
        <nav>
            <ul>
                <li><a href="{{route('index')}}">Go to home</a></li>
                <li><a href="#">Assets and Management</a></li>
            </ul>
        </nav>
    </div>
</section>

<main class="asset-under-mgt-contents aboutus-page">
<!-- contents of the page -->
<section>
<h1>our assets under management</h1>
<p>
    Founded in 2000, {{$compd? $compd->Companyname: 'Coming soon'}} Financial Management is an investment adviser with over $165 billion under management.{{$compd? $compd->Companyname: 'Coming soon'}} Financial Management maintains three principal businesses: the Private Client Group, Institutional Group and 401(k) Solutions
</p>
<ul>
    <li>
        {{$compd? $compd->Companyname: 'Coming soon'}} Financial Management are investment advisers with over $165 billion under management.{{$compd? $compd->Companyname: 'Coming soon'}} Financial Management maintains three principal businesses: the Private Client Group, Institutional Group and 401(k) Solutions.
    </li>
    <li>
        The Private Client Group within {{$compd? $compd->Companyname: 'Coming soon'}} Financial Management and its affiliates manage over $50 billion for families and individuals around the world. Clients receive personalized portfolio strategies tailored to their situation and investment goals.
    </li>
    <li>
        {{$compd? $compd->Companyname: 'Coming soon'}} Financial Management Institutional Group manages over $40 billion for organizations including corporate, public and multi-employer pension funds; foundations and endowments; insurance companies; healthcare organizations; governments; and investment companies. Clients across the world rely on {{$compd? $compd->Companyname: 'Coming soon'}} Financial Management and its subsidiaries for a broad array of US, non-US and global investment portfolio strategies with various capitalization and style orientations, including environmental, social and governance (ESG) strategies.
    </li>
    <li>
        {{$compd? $compd->Companyname: 'Coming soon'}} Financial Management 401(k) Solutions Group manages over $30 billion for small- to mid-sized corporate-sponsored retirement plans in the US. Employers rely on 401(k) Solutions to provide investment solutions, employee services, administrative support and fiduciary responsibility
    </li>
</ul>
</section>

</main>


@endsection