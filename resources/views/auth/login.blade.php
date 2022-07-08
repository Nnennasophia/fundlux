@extends("layouts.customlayout")

@section('body')



<main class="signin-main-section">
  <section>
      <p><a href="{{route('login')}}" class="signin-breadcrumb">Sign In</a></p>
  </section>
   
  <section class="signin-panel">
   <div class="signin-panel-button">
       <a class="signin-button sign-in" href="{{route('login')}}">Sign In</a>
       <a class="signup-button sign-in" href="{{route('register')}}">Sign Up</a>
   </div>
   <form class="form-field" method="POST" action="{{route('login')}}">
    @csrf

       <div class="signin-form-body">

          <label class="form-details" for="email">
            <span class="fa fa-envelope icon"></span>
          <input type="email" 
          class="email-input input @error('email') is-invalid @enderror"
          id="email"
          name="email"
          value="{{ old('email') }}" required autocomplete="email" autofocus
          placeholder="Email">
          
          @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
          </label>

          <label class="form-details" for="password">
          <span class="fa fa-lock icon"></span>
          <input type="password"
          id="password"
          name="password" required autocomplete="current-password" 
          class="password-input input @error('password') is-invalid @enderror"
          placeholder="Password">

          @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
          </label>
       </div>

       <div class="signin-form-footer">
       <!-- if (Route::has('password.request')) -->
       <p><a href="">Forgot Password &quest;</a></p>
      <!-- endif -->
       <button class="signin-footer-cta" type="submit">Sign In</button>
       </div>
       <button href="{{route('register')}}" class="create-text-action"> Create An Account </button>
   </form>
  </section>
</main>
@endsection
