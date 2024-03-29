<?php $user=Auth::user();?>

<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
      <a class="sidebar-brand brand-logo" href="index.html"><img src="assets/images/logo.svg" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
    </div>
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="nav-profile-image">
            <img src="" alt="profile" />
            <span class="login-status online"></span>
            <!--change to offline or busy as needed-->
          </div>
          <div class="nav-profile-text d-flex flex-column pr-3">
            <span class="font-weight-medium mb-2">{{$user->name}}</span>
            
          </div>
        
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('dashboard')}}">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="mdi mdi-crosshairs-gps menu-icon"></i>
          <span class="menu-title">Location</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="{{route('country')}}">Country</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('city')}}">City</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('place')}}">Place</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('gallery')}}">
          <i class="mdi mdi-contacts menu-icon"></i>
          <span class="menu-title">Gallery</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('menu')}}">
          <i class="mdi mdi-format-list-bulleted menu-icon"></i>
          <span class="menu-title">Menu</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('services')}}">
          <i class="mdi  mdi-airplane menu-icon"></i>
          <span class="menu-title">Services</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/tables/basic-table.html">
          <i class="mdi mdi-table-large menu-icon"></i>
          <span class="menu-title">Tables</span>
        </a>
      </li>
      <li class="nav-item">
        <span class="nav-link" href="#">
          <span class="menu-title">Docs</span>
        </span>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.bootstrapdash.com/demo/breeze-free/documentation/documentation.html">
          <i class="mdi mdi-file-document-box menu-icon"></i>
          <span class="menu-title">Documentation</span>
        </a>
      </li>
      <li class="nav-item sidebar-actions">
        <div class="nav-link">
          <div class="mt-4">
            <div class="border-none">
              <p class="text-black">Notification</p>
            </div>
            <ul class="mt-4 pl-0">
              <li>Sign Out</li>
            </ul>
          </div>
        </div>
      </li>
    </ul>
  </nav>