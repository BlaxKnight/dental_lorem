<!DOCTYPE html>
<html dir="rtl" @lang('fa')>
 <head>
  <!--<meta http-equiv="refresh" content="5">-->
  @include('includes.head')
  {{--@include('includes.css')--}}
 </head>
 <body>
  @include('includes.nav')

  @yield('content')

  @include('includes.footer')
  {{--@include('includes.script')--}}

  @yield('script')
 </body>
</html>