
<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> GRADING SYSTEM </title>
    <link rel="stylesheet" href="style.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">GS</span>
    </div>
    <ul class="nav-links">
      @auth
      <li>
        <a href="#">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        @endauth
        <ul class="sub-menu blank">
            @auth
            @if(Auth::user()->user_type == 'teacher')
              <li><a class="link_name" href="{{ route('dashboard') }}">Teacher Dashboard</a></li>
              <li><a class="link_name" href="{{ route('inbox') }}">Inbox</a></li>
            @elseif(Auth::user()->user_type == 'student')
              <li><a class="link_name" href="{{ route('dashboard') }}">Student Dashboard</a></li>
              <li><a class="link_name" href="{{ route('notification') }}">Notification</a></li>
            @endif
          @endauth
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-user' ></i>
            <span class="link_name">ACCOUNT</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
            @guest
          <li><a href="{{ route('login') }}">Login</a></li>
          <li><a href="{{ route('register') }}">Register</a></li>
          @else
          <li><a href="{{ route('logout') }}">Logout</a></li>
          @endguest
        </ul>
      </li>
    <div class="profile-details">
      <div class="profile-content">
        <img src="image/profile.jpg" alt="profileImg">
      </div>
      <div class="name-job">
        @auth
        <div class="profile_name">{{ Auth::user()->name }}</div>
        <div class="job">{{ ucfirst(Auth::user()->user_type) }}</div>
        @else
        <div class="profile_name">Guest</div>
        <div class="job">Please login</div>
        @endauth
      </div>
      <i class='bx bx-log-out' ></i>
    </div>
  </li>
</ul>
  </div>
  <section class="home-section">
    @include('partials.message')
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">GRADING SYSTEM</span>
    </div>
      
  <script src="script.js"></script>

</body>
</html>