@extends('layout.dash')

@section('title' , '| loremipsum.com')
@section('style')

@endsection

@section('content')

<main>
  <!-- background -->
  <img class="object-fit-cover vw-100 vh-100 fixed-top" style="z-index: -1;" src="{{url('assets/images/bg.svg')}}">
  
  <!-- container -->
  <div class="container-fluid p-0">
    <div class="row">
      <div class="col">
        <div class="bg-white vh-100" style="max-width: 200px">
          <div class="d-flex flex-column align-items-center bg-primary py-2 px-3">
            <div class="rounded-circle border border-primary border-5" style="width: 100%; height: 100%;">
              <img class="object-fit-cover w-100 h-100 rounded-circle" src="{{url('assets/images/images.jpeg')}}">
            </div>
            <h2 class="text-center mt-2">محمد متین میرزایی</h2>
          </div>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">صفحه اصلی</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col">
     
      </div>
    </div>
  </div>

</main>

@endsection

@section('script')

@endsection
