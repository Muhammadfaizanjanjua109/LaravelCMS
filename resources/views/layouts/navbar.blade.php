@include('home')
<style>
    .sidebar-container {
  position: fixed;
  width: 220px;
  height: 100%;
  left: 0;
  overflow-x: hidden;
  overflow-y: auto;
  background: #1a1a1a;
  color: #fff;
}

.content-container {
  padding-top: 20px;
}

.sidebar-logo {
  padding: 10px 15px 10px 30px;
  font-size: 20px;
  background-color: #2574A9;
}

.sidebar-navigation {
  padding: 0;
  margin: 0;
  list-style-type: none;
  position: relative;
}

.sidebar-navigation li {
  background-color: transparent;
  position: relative;
  display: inline-block;
  width: 100%;
  line-height: 20px;
}

.sidebar-navigation li a {
  padding: 10px 15px 10px 30px;
  display: block;
  color: #fff;
}

.sidebar-navigation li .fa {
  margin-right: 10px;
}

.sidebar-navigation li a:active,
.sidebar-navigation li a:hover,
.sidebar-navigation li a:focus {
  text-decoration: none;
  outline: none;
}

.sidebar-navigation li::before {
  background-color: #2574A9;
  position: absolute;
  content: '';
  height: 100%;
  left: 0;
  top: 0;
  -webkit-transition: width 0.2s ease-in;
  transition: width 0.2s ease-in;
  width: 3px;
  z-index: -1;
}

.sidebar-navigation li:hover::before {
  width: 100%;
}

.sidebar-navigation .header {
  font-size: 12px;
  text-transform: uppercase;
  background-color: #151515;
  padding: 10px 15px 10px 30px;
}

.sidebar-navigation .header::before {
  background-color: transparent;
}

.content-container {
  padding-left: 220px;
}
</style>
<div class="sidebar-container">
    <div class="sidebar-logo">
      School Management System
    </div>
    <ul class="sidebar-navigation">
      <li class="header">Navigation</li>
      <li>
        <a href="{{route('home')}}">
          <i class="fa fa-home" aria-hidden="true"></i> Homepage
        </a>
      </li>





@auth()
@if (Auth::user()->role_id == "2")
<li>

    <a href="#">
      <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
    </a>
  </li>
@endif
@endauth


      <li class="header">Another Menu</li>
      <li>
        <a href="#">
          <i class="fa fa-users" aria-hidden="true"></i> Friends
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa fa-cog" aria-hidden="true"></i> Settings
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa fa-info-circle" aria-hidden="true"></i> Information
        </a>
      </li>
    </ul>
  </div>

  <div class="content-container">

    <div class="container-fluid">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">

@yield('content')
      </div>

    </div>
  </div>
