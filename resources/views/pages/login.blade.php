@extends('layout.login')

@section('title' , '| loremipsum.com')
@section('style')

@endsection

@section('content')


<!-- login container -->
{{-- <main class="vh-100 d-flex align-items-center">
  <div class="container-sm bg-white rounded-5 shadow-lg d-flex justify-content-center align-items-center" style="max-width: 500px; height: 225px;">
    <div class="row flex-column h-100 justify-content-evenly">
      <div class="col">
        <!-- header -->
        <h1 class="text-primary mb-4 mt-3 user-select-none text-center"><i class="bi bi-pencil me-3"></i>ورود به داشبورد</h1>
      </div>
      <div class="col">
        <!-- form -->
        <form class="row flex-column">
          <div class="col mb-4 input-group">
            <label for="username" class="form-label align-middle mx-3 my-auto" style="min-width: 5rem;">نام کاربری:</label>
            <input id="username" type="text" class="form-control rounded-start-5 w-75">
            <span class="input-group-text rounded-end-5">
              <i class="bi bi-person-fill"></i>
            </span>
          </div>
          <div class="col mb-4 input-group">
            <label for="password" class="form-label mx-3 my-auto" style="min-width: 5rem;">رمز عبور:</label>
            <input id="password" type="text" class="form-control rounded-start-5 w-75">
            <span class="input-group-text rounded-end-5">
              <i class="bi bi-asterisk"></i>
            </span>
          </div>
        </form>
      </div>
    </div>
  </div>
</main> --}}

<main>
  <!-- background -->
  <img class="object-fit-cover vw-100 vh-100 fixed-top" style="z-index: -1;" src="{{url('assets/images/bg.svg')}}">

  <div class="container d-flex vh-100">
    <div class="bg-white w-100 shadow m-auto rounded-4" style="max-width: 600px;">
      <div class="row row-cols-1 container m-0">
        <div class="col mb-2">
          <h1 class="text-center">ورود به داشبورد</h1>
        </div>
        <div class="col">
          <form>
            <div class="row mb-3">
              <label for="username" class="col-sm-3 col-md-2 col-form-label">نام کاربری</label>
              <div class="col-sm-9 col-md-10">
                <input type="text" class="form-control" id="username">
              </div>
            </div>
            <div class="row mb-3">
              <label for="password" class="col-sm-3 col-md-2 col-form-label">رمز عبور</label>
              <div class="col-sm-9 col-md-10">
                <input type="password" class="form-control" id="password">
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <input class="btn btn-primary w-100" type="submit" value="ورود">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>

@endsection

@section('script')

@endsection
