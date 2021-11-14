@extends('layouts.main')

@section('container')
 <div class="row justify-content-center ">
     <div class="col-lg-5">

    <main class="form-registration">
        <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
        <form action="/register" method="post">
            @csrf
       <div class="form-floating">
         <input type="text" name="name" class="form-control @error('name')is-invalid @enderror" id="floatingInput" placeholder="name" required value="{{ old('name') }}">
         <label for="name">Name</label>
         @error('name')
             <div class="invalid-feedback">
            {{ $message }}
            </div>
            @enderror
      </div>
       <div class="form-floating">
         <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="floatingInput" placeholder="Username" required value="{{ old('username') }}">
         <label for="Username">Username</label>
          @error('username')
             <div class="invalid-feedback">
            {{ $message }}
            </div>
            @enderror

       </div>
        <div class="form-floating">
            <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="floatingPassword" placeholder="name#example.com" required value="{{ old('email') }}">
      <label for="email">Email</label>
       @error('email')
             <div class="invalid-feedback">
            {{ $message }}
            </div>
            @enderror
    </div>
    <div class="form-floating">
            <input type="password" name="password" class="form-control @error('password')is-invalid @enderror"" id="floatingPassword" placeholder="password" required >
      <label for="password">Password</label>
       @error('password')
             <div class="invalid-feedback">
            {{ $message }}
            </div>
            @enderror
    </div>

    <div class="checkbox mb-3">
    </div>
    <button class="w-100 btn btn-lg btn-primary " type="submit">Register</button>

  </form>
  <small class="d-block text-center">Not Registered? <a href="/register">Register Now</a></small>
</main>
     </div>
 </div>

@endsection
