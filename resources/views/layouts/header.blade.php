


<nav class="navbar header-navbar pcoded-header">
        <div class="navbar-wrapper">
        <div class="navbar-logo" data-navbar-theme="theme4">
        <a class="mobile-menu" id="mobile-collapse" href="#!">
        <i class="ti-menu"></i>
        </a>
        <a class="mobile-search morphsearch-search" href="#">
        <i class="ti-search"></i>
        </a>
        <a href="index-2.html">
            <H1>OASS</H1>
        {{-- <img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" /> --}}
        </a>
        <a class="mobile-options">
        <i class="ti-more"></i>
        </a>
        </div>
        <div class="navbar-container container-fluid">
        <div>
        <ul class="nav-left">
        <li>
        <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
        </li>
        <li>
        <a class="main-search morphsearch-search" href="#">
        
        <i class="ti-search"></i>
        </a>
        </li>
        <li>
        <a href="#!" onclick="javascript:toggleFullScreen()">
        <i class="ti-fullscreen"></i>
        </a>
        </li>
        <li class="mega-menu-top">

       
        </li>
        </ul>
        <ul class="nav-right">
        <li class="header-notification lng-dropdown">

        <a href="#" id="dropdown-active-item">
        <i class="flag-icon flag-icon-gb m-r-5"></i> English
        </a>
        <ul class="show-notification">
       
        </ul>
        </li>
        <li class="header-notification">
        <a href="#!">
        <i class="ti-bell"></i>
        <span class="badge">5</span>
        </a>
        <ul class="show-notification">
        
        </ul>
        </li>
        <li class="header-notification">
        <a href="#!" class="displayChatbox">
        <i class="ti-comments"></i>
        <span class="badge">9</span>
        </a>
        </li>
        <li class="user-profile header-notification">
        <a href="#!">
        <span>{{Auth::user()->name}}</span>
        <i class="ti-angle-down"></i>
        </a>
        <ul class="show-notification profile-notification">
      
        <li>
        <a href="{{ route('logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
         
        <i class="ti-layout-sidebar-left"> &nbsp; Logout</i> 
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
        </ul>
        </li>
        </ul>
        
        <div id="morphsearch" class="morphsearch">
        <form class="morphsearch-form">
        <input class="morphsearch-input" type="search" placeholder="Search." />
        <button class="morphsearch-submit" type="submit">Search</button>
        </form>
        <div class="morphsearch-content">
        <div class="dummy-column">
        <h2>People</h2>
        <a class="dummy-media-object" href="#!">
        <img class="round" src="///0.gravatar.com/avatar/81b58502541f9445253f30497e53c28088ab.png?s=50&amp;d=identicon&amp;r=G" alt="Sara Soueidan" />
        <h3>Sara Soueidan</h3>
        </a>
        <a class="dummy-media-object" href="#!">
        <img class="round" src="///1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b7588ab.jpeg?s=50&amp;d=identicon&amp;r=G" alt="Shaun Dona" />
        <h3>Shaun Dona</h3>
         </a>
        </div>
        <div class="dummy-column">
        <h2>Popular</h2>
        <a class="dummy-media-object" href="#!">
        <img src="assets/images/avatar-1.png" alt="PagePreloadingEffect" />
        <h3>Page Preloading Effect</h3>
        </a>
        <a class="dummy-media-object" href="#!">
        <img src="assets/images/avatar-1.png" alt="DraggableDualViewSlideshow" />
        <h3>Draggable Dual-View Slideshow</h3>
        </a>
        </div>
        <div class="dummy-column">
        <h2>Recent</h2>
        <a class="dummy-media-object" href="#!">
        <img src="assets/images/avatar-1.png" alt="TooltipStylesInspiration" />
        <h3>Tooltip Styles Inspiration</h3>
        </a>
        <a class="dummy-media-object" href="#!">
        <img src="assets/images/avatar-1.png" alt="NotificationStyles" />
        <h3>Notification Styles Inspiration</h3>
        </a>
        </div>
        </div>
        
        <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
        </div>
        
        </div>
        </div>
        </div>
        </nav>
        