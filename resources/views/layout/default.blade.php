<!DOCTYPE html>
<html dir="rtl" @lang('fa')>
 <head>
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