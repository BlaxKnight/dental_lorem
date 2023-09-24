@extends('layout.default')

@section('title' , '| loremipsum.com')
@section('style')

@endsection

@section('content')
<section id="intro">
  <div class="container-sm">
    <div class="row justify-content-center align-items-center flex-column-reverse flex-lg-row">
      <div class="col">
        <p class="text-justify pe-xl-5 pt-4 pt-lg-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
      </div>
      <div class="col col-xl-6 justify-content-center">
        <img class="w-100" style="border-radius: 60px;" src="{{ url('assets/images/dentists.jpg') }}" loading="lazy">
      </div>
    </div>
  </div>
</section>
<section id="achievements" class="bg-primary-light py-5">
  <div class="container-sm">
    <div class="row flex-column flex-lg-row g-4 justify-content-between" style="min-height: 500px;">
      <div class="col col-lg-6 d-flex align-items-center">
        <iframe src="https://balad.ir/search/roundabout?center=51.4067591%2C35.7113205#20.56/35.7114754/51.4075088" class="w-100 h-100" style="min-height: 400px;"></iframe>
      </div>
        <div class="col d-flex flex-column justify-content-center">
          <div class="row justify-content-end">
            <div class="col col-lg-10">
              <div class="text-center">
                <h3 class="pb-3 text-secondary">آدرس:</h2>
                <p class="text-justify">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('script')

@endsection
