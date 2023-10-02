<!DOCTYPE html>
<html dir="rtl" @lang('fa')>
 <head>
  @include('includes.head')
  {{--@include('includes.css')--}}
 </head>
 <body>
  @yield('content')

  {{--@include('includes.script')--}}

  @yield('script')
 </body>
</html>