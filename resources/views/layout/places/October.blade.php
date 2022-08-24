@extends('layout.Admin')
@section('section')
<!-- ======= Hero Section ======= -->
<section id="hero1">

  <!-- Slide 1 -->
  <div class="imag-item active" style="background-image: url(assets/img/ريحان3.jpg)">
      <div class="imag-container">
          <div class="container">
              <h2 class="animate__animated animate__fadeInDown"><span>مقابر مدينه اكتوبر الفيوم و الواحات</span></h2>
              <a href="{{ route('contactus.index') }}"
                    class="btn-get-started animate__animated animate__fadeInUp scrollto">احجز معاينه مجانيه</a>
          </div>
      </div>
  </div>
</section><br>
<section id="about" class="about">
<div class="container">

    <div class="row content">
        <div class="">
            <div class=" text-center">
                <h2 class="animate__animated animate__heartBeat">مقابر ومدافن للبيع بمدينه اكتوبر</h2>
                <p>
                  إذا كانت لديك الرغبة في الحصول على مقابر مشطبة بالكامل، ذات تأمين في مدينه اكتوبر
                   ، فإن روح و ريحان للمقابر تقدم لكم مقابر ومدافن في مدينه اكتوبر بالإضافة إلى أن كل المقابر مسجلة ومرخصة في الشهر العقاري.
                </p>
            </div>
            <hr>

        </div>
        <div class="desc col-lg-12">

          <h4>لماذا تعتبر شركة روح و ريحان للمقابر أفضل خيار لمقابر للبيع بمدينه اكتوبر؟
          </h4>
          <p class="fst-italic">
            <ul>
              <li>عندما تشتري مقبرة من شركة روح و ريحان ، فإنك تصبح المالك الوحيد للمقبرة أو المقبرة نقوم بتسجيله باسمك في الشهر العقاري. </li>
              <li> تتميز مقابرنا بتصميمها المميز وجودة تشطيبها العالية.</li>
            </ul>
          </p>
      </div><hr>
      <div class="desc col-lg-12">
      <h4>مقابر ومدافن مدينه اكتوبر ومميزات شركة روح و ريحان للمقابر</h4>
        <p class="fst-italic">
          <ul>
            <li>نحرص على تنفيذ أحدث التصميمات الداخليه و الخارجيه
              ، حيث يتم وضع بوابة حديدية على كل مقبرة مع مكان لكتابة لقب العائلة عند مدخل المدفن.</li>
              <li>نوفر مساحات مختلفة ، ومقابر مقسمة للرجال والنساء ، وجميع أسعارنا تناسب إمكانيات الجميع.</li>
              <li>خدمة العملاء لدينا متاحة على مدار 24 ساعة لتلقي مكالماتك واستفساراتك عن الأسعار والأماكن.</li>
              <li>تحرص شركتنا على شراء المقابر في مواقع استراتيجية في كل مدينة ، حتى يسهل عليك الذهاب إلى المقابر وزيارة الأقارب هناك.</li>
          </ul>
        </p>
    </div><hr>
      
    </div>
</div>

</section><!-- End About Section -->
<!-- ======= Venue Section ======= -->
<section id="venue">

<div class="container-fluid" data-aos="fade-up">

  <div class="section-header">
    <h2>البوم صور </h2>
  </div><hr>
</div>

<div class="container-fluid venue-gallery-container" data-aos="fade-up" data-aos-delay="100">
  <div class="row g-0">

    <div class="col-lg-3 col-md-4">
      <div class="venue-gallery">
        <a href="{{asset('assets/img/مدافن مدينه أكتوبر/october2.jpeg')}}" class="glightbox" data-gall="venue-gallery">
          <img src="{{asset('assets/img/مدافن مدينه أكتوبر/october2.jpeg')}}" alt="" class="img-fluid">
        </a>
      </div>
    </div>

    <div class="col-lg-3 col-md-4">
      <div class="venue-gallery">
        <a href="{{asset('assets/img/مدافن مدينه أكتوبر/october1.jpeg')}}" class="glightbox" data-gall="venue-gallery">
          <img src="{{asset('assets/img/مدافن مدينه أكتوبر/october1.jpeg')}}" alt="" class="img-fluid">
        </a>
      </div>
    </div>

    <div class="col-lg-3 col-md-4">
      <div class="venue-gallery">
        <a href="{{asset('assets/img/مدافن مدينه السلام 28 متر/elsalam20.jpeg')}}" class="glightbox" data-gall="venue-gallery">
          <img src="{{asset('assets/img/مدافن مدينه السلام 28 متر/elsalam20.jpeg')}}" alt="" class="img-fluid">
        </a>
      </div>
    </div>

    <div class="col-lg-3 col-md-4">
      <div class="venue-gallery">
        <a href="{{asset('assets/img/مدافن السخنه 40 متر/elsokhna14.jpeg')}}" class="glightbox" data-gall="venue-gallery">
          <img src="{{asset('assets/img/مدافن السخنه 40 متر/elsokhna14.jpeg')}}" alt="" class="img-fluid">
        </a>
      </div>
    </div>

    <div class="col-lg-3 col-md-4">
      <div class="venue-gallery">
        <a href="{{asset('assets/img/مدافن السخنه 40 متر/elsokhna17.jpeg')}}" class="glightbox" data-gall="venue-gallery">
          <img src="{{asset('assets/img/مدافن السخنه 40 متر/elsokhna17.jpeg')}}" alt="" class="img-fluid">
        </a>
      </div>
    </div>

    <div class="col-lg-3 col-md-4">
      <div class="venue-gallery">
        <a href="{{asset('assets/img/مدافن السخنه 40 متر/elsokhna35.jpeg')}}" class="glightbox" data-gall="venue-gallery">
          <img src="{{asset('assets/img/مدافن السخنه 40 متر/elsokhna35.jpeg')}}" alt="" class="img-fluid">
        </a>
      </div>
    </div>

    <div class="col-lg-3 col-md-4">
      <div class="venue-gallery">
        <a href="{{asset('assets/img/مدافن السخنه 40 متر/elsokhna34.jpeg')}}" class="glightbox" data-gall="venue-gallery">
          <img style="height: 280px; width:100%" src="{{asset('assets/img/مدافن السخنه 40 متر/elsokhna34.jpeg')}}" alt="" class="img-fluid">
        </a>
      </div>
    </div>

    <div class="col-lg-3 col-md-4">
      <div class="venue-gallery">
        <a href="{{asset('assets/img/مدافن السخنه 40 متر/elsokhna22.jpeg')}}" class="glightbox" data-gall="venue-gallery">
          <img style="height: 280px;" src="{{asset('assets/img/مدافن السخنه 40 متر/elsokhna22.jpeg')}}" alt="" class="img-fluid">
        </a>
      </div>
    </div>

  </div>
</div>

</section><!-- End Venue Section -->
<link href="/assets/css/places.css" rel="stylesheet">
@endsection