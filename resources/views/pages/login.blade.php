@extends('layout.dash')

@section('title' , '| loremipsum.com')
@section('style')

@endsection

@section('content')

<main>
  <!-- background -->
  <img class="object-fit-cover vw-100 vh-100 fixed-top" style="z-index: -1;" src="{{url('assets/images/bg.svg')}}">

  <!-- container -->
  <div class="container d-flex vh-100">
    <!-- login box -->
    <div class="bg-white w-100 shadow m-auto rounded-4" style="max-width: 600px;">
      <div class="row row-cols-1 container m-0">
        <div class="col my-2">
          <!-- title -->
          <h1 class="display-6 text-primary text-center">ورود به داشبورد</h1>
        </div>
        <div class="col">
          <!-- form -->
          <form action="{{ route('authenticate') }}" method="post">
            @csrf
            <!-- username -->
            <div class="row mb-3">
              <label for="username" class="col-sm-3 col-md-2 col-form-label text-muted">نام کاربری</label>
              <div class="col-sm-9 col-md-10">
                <div class="input-group">
                  <input type="text" dir="ltr" class="form-control @error('email') is-invalid @enderror" id="username" name="username" value="{{ old('email') }}">
                  @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                  @endif
                  <button type="button" class="btn btn-primary input-group-text user-select-none pe-none">
                    <h3 class="m-0">
                      <i class="bi bi-person" id="user-icon"></i>
                    </h3>
                  </button>
                </div>
              </div>
            </div>
            <!-- password -->
            <div class="row mb-3">
              <label for="password" class="col-sm-3 col-md-2 col-form-label text-muted">رمز عبور</label>
              <div class="col-sm-9 col-md-10">
                <div class="input-group">
                  <input type="password" dir="ltr" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                  @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                  @endif
                  <button type="button" class="btn btn-primary input-group-text" onclick="showPassword()">
                    <h3 class="m-0">
                      <i class="bi bi-eye-slash" id="password-icon"></i>
                    </h3>
                  </button>
                </div>
              </div>
            </div>
            <!-- submit -->
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
