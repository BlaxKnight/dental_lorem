<!DOCTYPE html>
<html dir="rtl" @lang('fa')>
 <head>
  @include('includes.head')
  {{--@include('includes.css')--}}
 </head>
 <body>
  <nav class="navbar navbar-expand bg-primary fixed-top shadow-sm">
    <div class="container-sm d-flex justify-content-between">
      <div class="dropdown">
        @guest
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('login')) ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
                    </li>
                @else    
        <a class="btn bg-transparent dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <span class="h6 me-1">{{ Auth::user()->name }}</span><span class="h6">(۰۹۱۱۲۳۴۵۶۷۸)</span>
        </a>
      
        <ul class="dropdown-menu p-0 text-center w-100 border-0 shadow-lg py-1 bg-white" style="z-index: 1021;">
          <li><a class="dropdown-item h5 text-danger m-0 py-2" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="h4 bi bi-box-arrow-right me-3 my-0"></i>خروج از سیستم</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
            </form><!--<a class="dropdown-item h5 text-danger m-0 py-2" href="#"><i class="h4 bi bi-box-arrow-right me-3 my-0"></i>خروج از سیستم</a>--></li>
            @endguest
        </ul>
      </div>
    </div>
  </nav>

  @yield('content')

  {{--@include('includes.script')--}}

  @yield('script')
 </body>
</html>