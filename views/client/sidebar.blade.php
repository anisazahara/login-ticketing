<div id="app">
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
<div class="sidebar-header">
    <div class="d-flex justify-content-between">
        <div class="logo">
            <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo" srcset=""></a>
        </div>
        <div class="toggler">
            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
        </div>
    </div>
</div>
<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Menu</li>
        
        <li
            class="sidebar-item  ">
            <a href="/client" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>
     
        <li
            class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-hexagon-fill"></i>
                <span>Form Elements</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item ">
                    <a href="{{route('input')}}">Report</a>
                </li>
                <li class="submenu-item ">
                    <a href="">Input Group</a>
                </li>
                
            </ul>
        </li>
        
        
        <li
            class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-x-octagon-fill"></i>
                <span>Logout</span>
            </a>
            <ul class="submenu ">
                @if(Auth::check())
                @if(Auth::user()->role == 'admin')
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{url('admin')}}">Halaman Admin</a>
                </li>
                @endif
           
                @if(Auth::user()->role == 'agent')
                <li class="nav-item">
                    <a class="nav-link" href="{{url('agent')}}">Halaman agent</a>
                </li>
                @endif
                   
                <li class="nav-item">
                    <a class="nav-link" href="{{url('client')}}">Halaman client</a>
                </li>
        
                @endif

                <li>
                    <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                       
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                
            </ul>
        </li>
        
    
    </ul>
</div>