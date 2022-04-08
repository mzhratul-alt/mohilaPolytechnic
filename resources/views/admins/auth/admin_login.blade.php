<!doctype html>
<html lang="en">

   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
   </head>

   <body>

      <div class="container">
         <div class="row justify-content-center">
            <div class="col-2">
               <img class="w-75" src="{{ asset('assets/img/logo.png') }}" alt="">
            </div>
         </div>
         <div class="row justify-content-center">
            <div class="col-md-6">
               <div class="card">
                  <div class="card-header text-center text-uppercase">
                     <h4>Login Your Admin Profile</h4>
                  </div>
                  <div class="card-body">
                     @error('failed')
                        <div class="alert alert-danger text-capitalize">
                           {{ $message }}
                        </div>
                     @enderror
                     <form action="{{ route('admin.login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                           <label for="email" class="form-label">Email</label>
                           <input type="email" id="email" placeholder="Enter Your Email" name="email" class="form-control">
                           @error('email')
                              <p class="text-danger text-capitalize">{{ $message }}</p>
                           @enderror
                        </div>
                        <div class="mb-3">
                           <label for="password" class="form-label">Password</label>
                           <input type="password" id="password" placeholder="Enter Your Password" name="password" class="form-control">
                           @error('password')
                              <p class="text-danger text-capitalize">{{ $message }}</p>
                           @enderror
                        </div>
                        <div class="form-check mb-3">
                           <input class="form-check-input" type="checkbox" value="" id="remember">
                           <label class="form-check-label" for="remember">
                             Remember Me
                           </label>
                         </div>
                         <div class="col-auto">
                           <button type="submit" class="btn btn-success px-5 btn-primary mb-3">Login</button>
                         </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
   </body>

</html>