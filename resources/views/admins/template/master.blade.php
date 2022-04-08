<!DOCTYPE html>
<html lang="en">

   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <title>Dashboard - SB Admin</title>

      <!-- Custom fonts for this template-->
      <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet" type="text/css">
      <link
         href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
         rel="stylesheet">

      <!-- Custom styles for this template-->
      <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/css/sbadmin.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/css/toastr.min.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

   </head>

   <body class="sb-nav-fixed">
      <nav class="sb-topnav navbar navbar-expand navbar-light bg-light">
         <!-- Navbar Brand-->
         <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
         <!-- Sidebar Toggle-->
         <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
               class="fas fa-bars"></i></button>
         <!-- Navbar Search-->
         <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
               <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                  aria-describedby="btnNavbarSearch" />
               <button class="btn btn-success" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
         </form>
         <!-- Navbar-->
         <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
               <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ route('admin.profile') }}">Profile</a></li>
                  <li><a class="dropdown-item" href="#!">Settings</a></li>
                  <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                  <li>
                     <hr class="dropdown-divider" />
                  </li>
                  <li><a class="dropdown-item" href="{{ route('admin.logout') }}" id="logout_btn">Logout</a></li>
                  <form action="{{ route('admin.logout') }}" method="POST" class="d-none" id="logout_form">@csrf</form>
               </ul>
            </li>
         </ul>
      </nav>
      <div id="layoutSidenav">
         <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
               <div class="sb-sidenav-menu">
                  <div class="nav test_scroll">
                     <a class="nav-link {{ Route::is('admin.dashboard') ? 'active':'' }}" href="{{ route('admin.dashboard') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                     </a>
                     <div class="sb-sidenav-menu-heading">User Controll Panel</div>
                     <a class="nav-link collapsed
                     {{ Route::is('admin.user.roles.index') || Route::is('admin.user.roles.show') ||Route::is('admin.user.roles.edit')  ? 'active':'' }}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                        aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        User Control
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                     </a>
                     <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                        data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                           <a class="nav-link {{ Route::is('admin.user.index') ? 'active':'' }}" href="{{ route('admin.user.index') }}">Users</a>
                        </nav>
                     </div>
                     <div class="sb-sidenav-menu-heading">Addons</div>
                     <a class="nav-link" href="tables.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Tables
                     </a>
                  </div>
               </div>
               <div class="sb-sidenav-footer">
                  <div class="small">Logged in as: {{ Auth::user()->name }}</div>
                  Start Bootstrap
               </div>
            </nav>
         </div>
         <div id="layoutSidenav_content">
            <main class="p-4">
               @yield('main_content')
            </main>
            <footer class="py-4 bg-light mt-auto">
               <div class="container-fluid px-4">
                  <div class="d-flex align-items-center justify-content-between small">
                     <div class="text-muted">Copyright &copy; Your Website 2021</div>
                     <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                     </div>
                  </div>
               </div>
            </footer>
         </div>
      </div>
      <!-- Bootstrap core JavaScript-->
      <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
      <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('assets/js/custom.js') }}"></script>
      <script>
         $('#logout_btn').on('click', function(e) {
         e.preventDefault()
         Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Logout!!!'
         }).then((result) => {
            if (result.isConfirmed) {
               $('#logout_form').submit();
            }
         })
      })
      </script>

      @yield('scripts')
   </body>

</html>