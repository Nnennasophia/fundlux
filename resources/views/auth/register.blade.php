@extends("layouts.customlayout")

@section('body')


<main class="signup-main-section">

    <section>
        <p><a href="{{route('register')}}" class="signup-breadcrumb">Sign Up</a></p>
    </section>
    <section class="signup-panel">
     <div class="signup-panel-button">
         <a class="signup-button sign-up" href="{{route('login')}}">Sign In</a>
         <a class="signup-button sign-up" href="{{route('register')}}">Sign Up</a>
     </div>
     <form class="form-field" method="POST" action="{{route('register')}}" onsubmit="process(event)">
        @csrf

         <div class="signup-form-body">
            <div class="field-container">

            <label for="name"> Name
            <input type="text" 
            class="name-input input @error('name') is-invalid @enderror"
            id="name"
            name="name"
            value="{{ old('name') }}" required autocomplete="name" autofocus
            >
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            </label>
            </div>

            <div class="field-container">
            <label for="phone_number"> Phone Number
            <input type="phone" 
            class="number-input input"
            id="phone"
            name="phone" required autocomplete="phone">
            </label>
            </div>

            <div class="field-container">
            <label for="email"> E-Mail
            <input type="email" 
            class="email-input input @error('email') is-invalid @enderror"
            id="email"
            name="email"
            value="{{ old('email') }}" required autocomplete="email">
            @error('email')
             <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
             </span>
            @enderror
            </label>
            </div>

            <div class="field-container">
            <label for="country">Country
            <input type="text" 
            class="country-input input"
            id="country"
            name="country" required autocomplete="country"  >
            </label>
            </div>

            <div class="field-container">
            <label for="password"> Password
            <input type="password" 
            class="email-input input @error('password') is-invalid @enderror"
            id="password"
            name="password" required autocomplete="new-password">
            </label>
            </div>

            <div class="field-container">
            <label for="confirmPassword"> Confirm Password
            <input type="password" 
            class="email-input input"
            id="confirmPassword"
            name="password_confirmation" required autocomplete="new-password">
            </label>
           </div>
         </div>
         <div class="signup-referral-section">
         <p>Referral Code</p>
         <div class="code-section">
             <input type="text">
             <input type="text">
             <input type="text">
             <input type="text">
             <input type="text">
             <input type="text">
         </div>
         </div>
         <div class="signup-form-footer">
         <button class="signup-footer-cta" href="{{route('login')}}">Sign In</button>
         <button href="{{route('register')}}" type="submit" class="signup-footer-cta">Sign Up</button>
         </div>
         <!-- <a class="create-text-action" href="#"> Create An Account </a> -->
     </form>
    </section>
    </main>
    
@endsection
