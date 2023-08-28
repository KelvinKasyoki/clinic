<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="{{ asset('assets/css/maicons.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/vendor/owl-carousel/css/owl.carousel.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctors.html">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>

             @if (Route::has('login'))

             @auth

            <li class="nav-item">
                  <a class="nav-link" style="background-color:greenyellow ; color:white " href="{{url('myappointment')}}">My appointments</a>
             </li>

             <x-app-layout>
    
            </x-app-layout>

             @else
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register</a>
            </li>

            @endauth

            @endif
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <!-------- displays sucessful appointment data deletion-------->


       @if(session()->has('message'))

              <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">Close</button>
                {{session()->get('message')}}
                

              </div>
          @endif

 <div class="container mx-auto p-5" align="center">
      <table class="table table-responsive" >
          <thead class="text-center p-2 thead-dark" >
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Doctor</th>
              <th>Date</th>
              <th>Message</th>
              <th>Status</th>
              <th>Action</th>
          </thead>
          @foreach ($appointments as $appoint)
            <tr class="text-center p-2">
                <td>{{ $appoint->name }}</td>
                <td>{{ $appoint->email }}</td>
                <td>{{ $appoint->phone }}</td>
                <td>{{ $appoint->doctor }}</td>
                <td>{{ $appoint->date }}</td>
                <td>{{ $appoint->message }}</td>
                <td>{{ $appoint->status }}</td>
                <td>
                    <form action="{{ route('deletemyappointment',$appoint->id) }}" method="POST">
                        @csrf
                        @method('delete')
                         <button class="btn btn-danger btn-sm" >Delete</button>
                    </form>
                    

                <!--solution 2
                <a class="bt_btn-danger" onclick="return confirm('are you sure to delete this')" href=" {{url('deletemyappointment',$appoint->id)}}">Cancel</a>
                -->
                    

                </td>
            </tr>
          @endforeach
 
      </table>
  </div>


@include('user.js')
  
</body>
</html>

