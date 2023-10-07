@extends('layout.dash')

@section('title' , '| loremipsum.com')
@section('style')

@endsection

@section('content')

<!-- background -->
<img class="object-fit-cover vw-100 vh-100 fixed-top" style="z-index: -100;" src="{{url('assets/images/bg.svg')}}">

<main class="vh-100">
  <div class="container-sm h-100">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white h5"><i class="bi bi-speedometer2 me-2"></i>داشبورد</div>
                <div class="card-body">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            {{ $message }}
                        </div>
                    @else
                        <div class="alert alert-success">
                            ورودی شما با موفقیت انجام شد!
                        </div>       
                    @endif                
                </div>
            </div>
        </div>    
    </div>
  </div>
</main>

@endsection

@section('script')

@endsection
