
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Restaurant</title>
    
    <meta name="csrf-token" content="{{ csrf_token() }}" /> 
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
  <!-- Styles -->
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  
   <link rel="stylesheet" href="{{asset('css/custom.css')}}">
  </head>
  <body>
   <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{route('dashboard')}}"><i class="fas fa-utensils"></i>  Restaurant</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse"  id="navbarNavDropdown" >
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            
          
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{Auth::user()->name}}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
               
                <li><a class="dropdown-item" href="{{route('admin.logout')}}">Logout</a></li>
                
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

        @yield('content')
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>