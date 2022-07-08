<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link href="{{asset("font-awesome/css/font-awesome.min.css")}}" rel="stylesheet">
    <link href="{{asset("css/index.css")}}" rel="stylesheet"/>
    </head>
<body>
    <div class="header-wrapper">
      <header class="signin-nav-header header">
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
                <li><a href="{{asset("index")}}">Home</a></li>
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
                <li class="list-item"><a  href="{{route('pricing')}}">Pricing</a></li>
                <li class="list-item"><a  href="{{route('invest')}}">What We Invest In</a></li>
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
                <li class="list-item"><a  href="{{route('register')}}">Sign Up</a></li>
                <li class="list-item signin-cta"><a  href="{{route('login')}}">Login</a></li>
                <li class="list-item"><a  href="{{route('contact')}}">Contact us</a></li>
        </nav>
        <!-- <a href="#toggle-menu" tabindex="-1" class="backdrop" aria-hidden></a> -->
        </header>
        </div>


        @yield('body')


        <footer>
            <nav class="footer-nav">
                <ul class="footer-nav-item">
                    <li class="footer-nav-list"><a href="#">Contact Us</a>
                        <!-- second navigation layer -->
                         <ul>
                            <li><a href="#"><span class="fa fa-map-marker" aria-hidden='true'></span></a></li>
                            <li><a href="#"><span class="fa fa-envelope" aria-hidden='true'></span></a></li>
                            <li><a href="#"><span class="fa fa-whatsapp" aria-hidden='true'></span></a></li>
                          <!--  <li><a href="#"><span class="fa fa-phone" aria-hidden='true'></span></a></li> -->
                        </ul>
                    </li>
                  <!--  <li class="footer-nav-list"><a href="#">Explore</a> -->
                          <!-- second navigation layer -->
                          <ul>
                            <li><a href="{{route('about')}}">About Us</a></li>
                            <li><a href="{{route('market')}}">The Market</a></li>
                            <li><a href="{{route('register')}}">Sign Up</a></li>
                            <li><a href="{{route('contact')}}">Contact Us</a></li>
                            <li><a href="{{route('login')}}">Login</a></li>
                            <li><a href="{{route('faq')}}">FAQ</a></li>
                         <!--   <li><a href="">News</a></li> -->
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
        <script src="{{asset("js/index.js")}}"></script>
</body>
</html>