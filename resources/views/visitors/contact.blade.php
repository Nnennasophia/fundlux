@extends("layouts.spacedcustomlayout")

@section("body")


<main class="reachus-main-section">
  <section>
      <p><a href="{{route('contact')}}" class="reachus-breadcrumb">Reach Us</a></p>
  </section>
  <section class="reachus-panel">
  <form class="form-container">
  <div class="access-row">
  <div class="access access-icons">
  <ul>
  <li><a href="#"><span class="fa fa-map-marker" aria-hidden='true'></span> {{$compd? $compd->Companylocation: 'Coming soon'}}</a></li>
  <li><a href="#"><span class="fa fa-envelope" aria-hidden='true'></span>{{$compd? $compd->Companyemail: 'Coming soon'}}</a></li>
  <li><a href="#"><span class="fa fa-whatsapp" aria-hidden='true'></span> {{$compd? $compd->Companyphone: 'Coming soon'}}</a></li>
  <!-- <li><a href="#"><span class="fa fa-phone" aria-hidden='true'></span> Phone </a></li> -->
  </ul> 
   </div>
   <div class="access customer-feedback">
    <span class="fa fa-user" aria-hidden="true"></span>
    <input type="text" name="name" required placeholder="Name">
    <input type="email" name="email" required placeholder="E-mail">
    <textarea name="feedback" rows="5" cols="25" placeholder="how can we help you"></textarea>
    <button href="#" class="chat-btn">Chat</button>
   </div>
   <div class="access customer-feedback">
     <span class="fa fa-envelope" aria-hidden="true"></span>
     <input type="text" name="name" required placeholder="Name">
    <input type="email" name="email" required placeholder="E-mail">
    <textarea name="feedback" rows="5" cols="25" placeholder="how can we help you"></textarea>
      <button href="#" class="chat-btn">E&#8211;mail</button>
   </div>
   </div>
 </form>
  </section>



      <section class="section-1 text-section">
          <p> Feel free to drop us a message. <br>
              Tell us how we may help you and leave us your contact info
          </p>
   </section>
  </main>




@endsection()
