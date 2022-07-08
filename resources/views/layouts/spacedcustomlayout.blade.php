<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.css.map')}}" rel="stylesheet">
    <link href="{{asset('css/index.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/faq.css')}}" rel="stylesheet"/>
    <link href="{{asset('ourcompany/css/legal.css')}}" rel="stylesheet"/>
    <link href="{{asset('ourcompany/css/ourcompany.css')}}" rel="stylesheet"/>
    <link href="{{asset('ourcompany/css/ourservices.css')}}" rel="stylesheet"/>
    <link href="{{asset('ourcompany/css/ourteam')}}" rel="stylesheet"/>
    <link href="{{asset('ourservices/css/ourservices.css')}}" rel="stylesheet"/>
    <link href="{{asset('ourservices/css/stock.css')}}" rel="stylesheet"/>
    <link href="{{asset('whatweinvestin/css/whatweinvestin.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/contactus.css')}}" rel="stylesheet"/>
    <link href="{{asset('js/header.js')}}" rel="stylesheet"/>
    <link href="{{asset('js/index.js')}}" rel="stylesheet"/>
    <link href="{{asset('images')}}" rel="stylesheet"/>
    <link href="{{asset('recent-font\font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('recent-font\font-awesome/css/font-awesome.css')}}" rel="stylesheet"/>
    <link href="{{asset('recent-font\font-awesome/css/font-awesome.css.map')}}" rel="stylesheet"/>
    <title>{{$compd? $compd->Companyname: 'Fundlux'}}</title>
</head>
<body>
    <!-- The site header naviagtion -->
    <div class="header-wrapper market-wrapper">
    <header class="nav-header header">
        <a href="#main-menu" id="toggle-menu" class="toggle-menu">
        <span class="sr-only">Open Main Menu</span>
        <span class="fa fa-bars" aria-hidden="true"></span>
      </a>
        <nav class="nav-wrapper">
            <ul class="nav-list main-menu" id="main-menu">
                <a href="#toggle-menu" class="close-menu" id="close-menu">
                  <span class="sr-only">Close Main Menu</span>
                  <span class="fa fa-times" aria-hidde="true"></span>
                </a>
                <li><a href="{{route('index')}}">Home</a></li>
                <li class="list-item dropdown"><a href="">Our Company <span class="fa fa-caret-down" aria-hidden="true"></span></a>
                    <!-- drop down list -->
                    <ul class="dropdown-menu" id="dropdown-menu-1">
                        <li><a href="{{route('teams')}}">Our Team</a></li>
                        <li><a href="{{route('services')}}">Our Services</a></li>
                        <li><a href="{{route('legal')}}">Legal</a></li>
                        <li><a href="{{route('policy')}}">Our Policy</a></li>
                    </ul>
                    <!--END of dropdown -->
                </li>
                <li class="list-item"><a  href="{{route('market')}}">The Market</a></li>
                <li class="list-item"><a  href="{{route('invest')}}">What We Invest In</a></li>
                <li class="list-item"><a  href="{{route('register')}}">Sign Up</a></li>
                <li class="list-item dropdown"><a  href="">About Us
                    <span class="fa fa-caret-down" aria-hidden="true"></span></a>

                    <!-- drop down list/ second order of navigation -->
                    <ul class="dropdown-menu extra-width" id="dropdown-menu-2">
                        <li><a href="{{route('history')}}">History</a></li>
                        <li><a href="{{route('howwearedif')}}">How we are different</a></li>
                        <li><a href="{{route('fiduciary')}}">Fiduciary</a></li>
                        <li><a href="{{route('client')}}">Client education and services</a></li>
                        <li><a href="{{route('ourteam')}}">Our team</a></li>
                        <li><a href="{{route('assetsmanagement')}}">Assets under management</a></li>
                        <li><a href="{{route('terms')}}">Privacy Policy</a></li>
                    </ul>
                    <!--END of dropdown -->

                </li>
                <li class="list-item"><a  href="{{route('login')}}">Login</a></li>
                <li class="list-item"><a  href="{{route('contact')}}">Contact us</a></li>
            </ul>
        </nav>
        <a href="#toggle-menu" tabindex="-1" class="backdrop" aria-hidden></a>
    </header>
    <section class="header-section banner-section">
      Optimizing <span class="caption-style"> Your </span><br>
      Finance <span class="caption-style"> For </span> <br>
      Prof<span class="caption-style">its</span>
      <a href="{{route('register')}}" class="get-started-button">Get Started</a>
    </section>
    </div>
  </div>




  @yield('body')




  <!-- footer section -->
  <footer>
    <nav class="footer-nav">
        <ul class="footer-nav-item">
            <li class="footer-nav-list"><a href="">Contact Us</a>
                <ul>
                    <li><a href="#"><span class="fa fa-map-marker" aria-hidden='true'></span>{{$compd? $compd->Companylocation: 'Coming soon'}}</a></li>
                    <li><a href="#"><span class="fa fa-envelope" aria-hidden='true'></span>{{$compd? $compd->Companyemail: 'Coming soon'}}</a></li>
                    <li><a href="#"><span class="fa fa-whatsapp" aria-hidden='true'></span>{{$compd? $compd->Companyphone: 'Coming soon'}}</a></li>
                  <!--  <li><a href="#"><span class="fa fa-phone" aria-hidden='true'></span></a></li> -->
                </ul>
                <!-- second navigation layer -->
            </li>
           <!-- <li class="footer-nav-list"><a href="#">Explore</a> -->
                  <!-- second navigation layer -->
                  <ul>
                    <li><a href="{{route('about')}}">About Us</a></li>
                    <li><a href="{{route('market')}}">The Market</a></li>
                    <li><a href="{{route('register')}}">Sign Up</a></li>
                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                    <li><a href="{{route('login')}}">Login</a></li>
                    <li><a href="{{route('faq')}}">FAQ</a></li>
                   <!-- <li><a href="#">News</a></li> -->
                </ul>
            </li>
            <!-- <li class="footet-nav-list"><a href="#">FAQ</a></li> -->
            <li class="footer-nav-list">Newsletter
                <div class="news-letter-box">
                <form>
                    <label class="newsletter-label" for="newsletter">Join Our News Letter</label>
                    <input class="newsletter-input" type="text" id="newsletter"
                     name="newsletter" 
                     placeholder="Enter E-mail Address"/>
                    <button class="join-button" type="submit"><a href="{{route('register')}}">Join</a></button>
                </form>
                </div>
            </li>
        </ul>
    </nav>
    <small class="footer-copyright">Fundlux-Finance Limited</small>
</footer>

<!-- embended script -->
<script src="{{asset('js/index.js')}}"></script>
</body>
</html>