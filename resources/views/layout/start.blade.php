@extends('layout.Admin')
@section('section')
<!-- ======= background image Section ======= -->
<section id="الرئيسيه">

    <!-- Slide 1 -->
    <div class="imag-item active" style="background-image: url(assets/img/hl.jpg)">
        <div class="imag-container">
            <div class="container">
                <h2 class="animate__animated animate__fadeInDown"> اهلا بك في <span>روح وريحان مقابر اسلامية</span></h2>
                <p class="animate__animated animate__fadeInUp">مقابر واحواش اسلامية للبيع بمساحات مختلفة تبدأ من 20 متر
                    حتى 80
                    متر انظمة متعددة للسداد على 12 شهر او على 24 شهر</p>
                <a href="{{ route('start.index') }}#about"
                    class="btn-get-started animate__animated animate__fadeInUp scrollto">من نحن</a>
            </div>
        </div>
    </div>
</section>
<!-- End background image -->


<section id="about" class="about">
    <div class="container">

        <div class="row content">
            <div class="">
                <div class=" text-center">
                    <h2 class="animate__animated animate__heartBeat">روح وريحان للمقابر الإسلامية الجودة شعارنا وثقة
                        العميل
                        هدفنا
                        نقدم مقابر واحواش بمساحات مختلفة والمعاينة
                        مجانية طوال ايام الاسبوع</h2>
                </div>
                <hr>

            </div>
            <div class="desc col-lg-7">
                <h3>مدافن للبيع ومقابر للبيع شرعية جاهزة ومرخصة بالعديد من مناطق الجمهورية</h3><br>
                <p>
                    في حالة كنت تبحث عن مدافن للبيع فإن روح و ريحان للمقابر تقدم لك أفضل خدمات بيع وشراء المقابر
                    والمدافن
                    بأفضل الأسعار وبأجود خامات البناء وتعتبر الشركة من
                  الشركات في تقديم خدمات بيع المدافن الجاهزة ومن أجودها لما تقدمه من خدمات مميزة لعملائها الكرام.
                <br><br>
                    وذلك لأن روح و ريحان للمقابر تقوم بتقديم أفضل أسعار المدافن والمقابر لعملائها بالإضافة 
                    إلى خدمات ما بعد البيع وإنهاء الإجراءات والتراخيص فور التعاقد على المدافن وتسليم المدفن في نفس اليوم
                    مباشرة  كما أنها تتميز بالأمانة مع الالتزام بالمصداقية وتنفيذ جميع الاتفاقات التي تمت من خلال العقود المكتوبة بينهم.
                </p>
                <p>شركة روح و ريحان للمقابر هي شركة متخصصة في بيع  المقابر ، 
                  ولديها الكثير من الخبرات والتجارب في مختلف المناطق ، حيث أنها سبق لها التعامل مع العديد من العملاء في مختلف أنحاء الجمهورية
                ، لذلك لديها القدرة على العثور على ما تبحث عنه  من مقابر ومدافن للبيع.</p>
                
            </div>
            <div class="desc col-lg-5">
              <img style="width:110%; height:110%; border:solid black; border-radius:20px" src="{{asset('assets/img/مدافن السخنه 40 متر/elsokhna4.jpeg') }}" alt="">
          </div>

        </div>

    </div>
    <div class="container">

        <div class="row content">


            <!-- ======= Services Section ======= -->
            <div id="services" class="services">
                <h5>مميزات روح و ريحان</h5>
                <p style="font-size:16pt;">يتوفر لدى روح و ريحان للمقابر مدافن للبيع بمساحات مختلفة حسب رغبة العملاء
                   كما يتوافر لدينا أحواش ولحود شرعية  في معظم المناطق في مصر، وتعمل الشركة على التيسير على العملاء بسرعة التسليم للمدافن والتسجيل العقاري للمدافن بمجرد التعاقد ، كما أن جميع المقابر لدينا شرعية ومرخصة وعلى جودة عالية من التشطيبات.</p>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 mt-4 mt-md-0">
                            <div class="icon-box1">
                                <i class="bi bi-check2-all"></i>
                                <h4><a href="#">السرعة في تسليم المقابر والمدافن </a></h4>
                                <p>تمتاز روح و ريحان بالسرعة في عمليات تسليم المقابر والمدافن ،
                                    كما أنها تتولى تخليص أوراق نقل الملكية الى المشتري وتسهيل إجراءت بيع المقابر
                                    والمدافن</p>
                            </div>
                        </div>
                        <div class="col-md-4 mt-4 mt-md-0">
                            <div class="icon-box1">
                                <i class="bi bi-eye-fill"></i>
                                <h4><a href="#">مدافن للبيع ومقابر للبيع شرعيه ومرخصة
                                    </a></h4>
                                <p>تتميز روح و ريحان بإن جميع المقابر والمدافن المتوفرة لديها شرعية ومرخصة للبيع

                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 mt-4 mt-md-0">
                            <div class="icon-box1">
                                <i class="bi bi-card-text"></i>
                                <h4><a href="#">نمتلك الخبرة في تشطيب المقابر والمدافن</a></h4>
                                <p> لدينا مقاولين تجهيز وتشطيب للواجهات والتجهيزات الداخلية للمقابر والمدافن بأشكال
                                    مختلفة وتتناسب مع متطلبات كل عميل يبحث عن مقابر ومدافن للبيع</p>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="icon-box2">
                                <i class="bi bi-shield-check"></i>
                                <h4><a href="#"> مصداقيتنا في ثقة عملائنا ومعاينتنا </a></h4>
                            </div>
                        </div>
                        <div class="col-md-6 mt-4 mt-md-0">
                            <div class="icon-box2">
                                <i class="bi bi-check2-all"></i>
                                <h4><a href="#">قامت شركتنا بحمد الله وفضلة وبثقه عملائنا تسليم العديد من المقابر
                                        والأحواش فى كثير من
                                        المناطق المتوفرة لدينا</a></h4>
                            </div>
                        </div>
                        <div class="col-md-6 mt-4 mt-md-0">
                            <div class="icon-box2">
                                <i class="bi bi-eye-fill"></i>
                                <h4><a href="#">بشركتنا المعاينة مجانا في جميع المناطق المتوفرة لدينا طوال أيام الأسبوع
                                    </a></h4>
                            </div>
                        </div>
                        <div class="col-md-6 mt-4 mt-md-0">
                            <div class="icon-box2">
                                <i class="bi bi-card-text"></i>
                                <h4><a href="#">مقابر مرخصة بجميع أنحاء القاهرة الكبري </a></h4>
                            </div>
                        </div>
                        <div class="col-md-6 mt-4 mt-md-0">
                            <div class="icon-box2">
                                <i class="bi bi-cart4"></i>
                                <h4><a href="#"> مساحات مختلفة تبدأ من 20 متر وحتي 80 متر حسب كل منطقة والمتوفر فيها
                                    </a></h4>
                            </div>
                        </div>
                        <div class="col-md-6 mt-4 mt-md-0">
                            <div class="icon-box2">
                                <i class="bi bi-cash"></i>
                                <h4><a href="#">بمقدم يبدأ من 20000جنية بمدينة العبور و9 انظمة السداد يصل الى 12 شهر او
                                        24 شهر</a>
                                </h4>
                            </div>
                        </div>
                    </div>

                </div>
                <h3>مميزات التعامل مع روح و ريحان</h3><br>
                <b style="font-size: 18px;">هناك العديد من المزايا التي توجد في روح و ريحان  للمقابر حيث أنها توفر العديد من 
                  المميزات المختلفة التي تحتاجها عند شراء مقبرة أو مدفن في مصر ، مثل:</b><br><br>
                <ul style="font-size: 14pt;">
                  <li>تعرض روح و ريحان مقابر للبيع ومدافن للبيع بمساحات مختلفة حسب رغبة العملاء لدينا أيضًا ساحات قانونية في معظم مناطق مصر. </li><br>
                  <li>كما تعمل الشركة على تسهيل حصول العملاء بسرعة على أرض المقبرة والتسجيل في السجل العقاري بمجرد التعاقد على المقبرة أو المدفن.</li><br>
                  <li>إذا كنت تبحث عن مقابر للبيع أو مدافن للبيع ، فيجب أن تكون قريبة من المكان الذي تعيش فيه وأن تكون مقبرة لعائلتك وكذلك قريبة من جميع وسائل النقل. </li><br>
                  <li>تتميز روح و ريحان للمقابر بتوفير العديد من المساحات المختلفة للبيع في المقابر ويمكنك اختيار المساحة المناسبة لك.</li><br>
                </ul>
            </div>

        </div>

    </div>
</section><!-- End About Section -->

{{-- <section id="portfolio" class="portfolio">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">الكل</li>
                    <li data-filter=".filter-1">العبور</li>
                    <li data-filter=".filter-2">طريق السخنه</li>
                    <li data-filter=".filter-3">15 مايو</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container">

            <div class="col-lg-4 col-md-6 portfolio-item filter-1">
                <div class="portfolio-wrap">
                    <img src="assets/img/s1.jpg" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-3">
                <div class="portfolio-wrap">
                    <img src="assets/img/s2.jpg" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-1">
                <div class="portfolio-wrap">
                    <a href="assets/img/s3.jpg" class="glightbox" data-gall="venue-gallery">
                        <img src="assets/img/s3.jpg" class="img-fluid" alt="">
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-2">
                <div class="portfolio-wrap">
                    <img src="assets/img/s4.jpg" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-3">
                <div class="portfolio-wrap">
                    <img src="assets/img/s5.jpg" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-1">
                <div class="portfolio-wrap">
                    <img src="assets/img/s6.jpg" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-2">
                <div class="portfolio-wrap">
                    <img src="assets/img/s7.jpg" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-2">
                <div class="portfolio-wrap">
                    <img src="assets/img/s8.jpg" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-3">
                <div class="portfolio-wrap">
                    <img src="assets/img/s10.jpg" class="img-fluid" alt="">
                </div>
            </div>

        </div>

    </div>
</section><!-- End صور المقابر Section --> --}}

<!-- ======= Gallery Section ======= -->
<section id="gallery">

    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2>أماكن المقابر و المدافن</h2>
        </div>
    </div>
    <hr>

    <div class="gallery-slider swiper container">
        <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img  style="height: 300px; width:300px;" src="{{asset('assets/img/مدافن السخنه 40 متر/elsokhna1.jpeg')}}" class="img-fluid" alt="">
                <h4>مقابر طريق السخنة</h4><a  href="{{route('elsokhna.index')}}" class="btn btn-danger">التفاصيل</a>
            </div>
            <div class="swiper-slide"><img style="height: 300px; width:300px;" src="{{asset('assets/img/مدافن مدينه السلام 28 متر/elsalam1.jpeg')}}" class="img-fluid" alt="">
                <h4>مقابر مدينه السلام</h4><a href="{{route('elslam.index')}}" class="btn btn-danger">التفاصيل</a>
            </div>
            <div class="swiper-slide"><img style="height: 300px; width:300px;" src="{{asset('assets/img/مدافن مدينه العبور 25 متر/obour1.jpeg')}}" class="img-fluid" alt="">
                <h4>مقابر مدينه العبور</h4><a href="{{route('elobour.index')}}" class="btn btn-danger">التفاصيل</a>
            </div>
            <div class="swiper-slide"><img style="height: 300px; width:300px;" src="{{asset('assets/img/حوش مدينه 15 مايو 21 متر/may1.jpeg')}}" class="img-fluid" alt="">
                <h4>مقابر مدينة 15 مايو</h4><a href="{{route('may.index')}}" class="btn btn-danger">التفاصيل</a>
            </div>
            <div class="swiper-slide"><img style="height: 300px; width:300px;" src="assets/img/ريحان1.jpg" class="img-fluid" alt="">
                <h4>مقابر أكتوبر</h4><a href="{{route('october.index')}}" class="btn btn-danger">التفاصيل</a>
            </div>
            <div class="swiper-slide"><img style="height: 300px; width:300px;" src="assets/img/ريحان1.jpg" class="img-fluid" alt="">
                <h4>مقابر طريق الفيوم</h4><a href="{{route('elfayoum.index')}}" class="btn btn-danger">التفاصيل</a>
            </div>
            <div class="swiper-slide"><img style="height: 300px; width:300px;" src="assets/img/ريحان1.jpg" class="img-fluid" alt="">
                <h4>مقابر طريق القطاميه</h4><a href="{{route('elqatamya.index')}}" class="btn btn-danger">التفاصيل</a>
            </div>
            <div class="swiper-slide"><img style="height: 300px; width:300px;" src="{{asset('assets/img/مدافن مدينه بدر 40 متر/badr1.jpeg')}}" class="img-fluid" alt="">
                <h4>مقابر مدينه بدر الروبيكي</h4><a href="{{route('badr.index')}}" class="btn btn-danger">التفاصيل</a>
            </div>

        </div>
        <div class="swiper-pagination"></div>
    </div>

</section><!-- End Gallery Section -->


<style>
    /*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
#الرئيسيه {
  width: 100%;
  height: 100vh;
  background-color: rgba(63, 73, 83, 0.8);
  background-size: cover;
  position: relative;
}
#الرئيسيه .imag, #الرئيسيه .imag-inner, #الرئيسيه .imag-item, #الرئيسيه .imag-item::before {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
}
#الرئيسيه .imag-item {
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}
#الرئيسيه .imag-item::before {
  content: "";
  background-color: rgba(30, 35, 40, 0.6);
}
#الرئيسيه .imag-container {
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  bottom: 0;
  top: 70px;
  left: 50px;
  right: 50px;
}
#الرئيسيه .container {
  text-align: center;
}
#الرئيسيه h2 {
  color: #fff;
  margin-bottom: 20px;
  font-size: 48px;
  font-weight: 700;
}
#الرئيسيه p {
  -webkit-animation-delay: 0.4s;
  animation-delay: 0.4s;
  margin: 0 auto 30px auto;
  color: #fff;
}
#الرئيسيه .imag-inner .imag-item {
  transition-property: opacity;
  background-position: center top;
}
#الرئيسيه .imag-inner .imag-item,
#الرئيسيه .imag-inner .active.imag-item-start,
#الرئيسيه .imag-inner .active.imag-item-end {
  opacity: 0;
}
#الرئيسيه .imag-inner .active,
#الرئيسيه .imag-inner .imag-item-next.imag-item-start,
#الرئيسيه .imag-inner .imag-item-prev.imag-item-end {
  opacity: 1;
  transition: 0.5s;
}
#الرئيسيه .imag-inner .imag-item-next,
#الرئيسيه .imag-inner .imag-item-prev,
#الرئيسيه .imag-inner .active.imag-item-start,
#الرئيسيه .imag-inner .active.imag-item-end {
  left: 0;
  transform: translate3d(0, 0, 0);
}
#الرئيسيه .imag-control-next-icon, #الرئيسيه .imag-control-prev-icon {
  background: none;
  font-size: 30px;
  line-height: 0;
  width: auto;
  height: auto;
  background: rgba(255, 255, 255, 0.2);
  border-radius: 50px;
  transition: 0.3s;
  color: rgba(255, 255, 255, 0.5);
  width: 54px;
  height: 54px;
  display: flex;
  align-items: center;
  justify-content: center;
}
#الرئيسيه .imag-control-next-icon:hover, #الرئيسيه .imag-control-prev-icon:hover {
  background: rgba(255, 255, 255, 0.3);
  color: rgba(255, 255, 255, 0.8);
}
#الرئيسيه .imag-indicators li {
  cursor: pointer;
  background: #fff;
  overflow: hidden;
  border: 0;
  width: 12px;
  height: 12px;
  border-radius: 50px;
  opacity: 0.6;
  transition: 0.3s;
}
#الرئيسيه .imag-indicators li.active {
  opacity: 1;
  background: #d9232d;
}
#الرئيسيه .btn-get-started {
  font-family: 'Cairo', sans-serif;
  font-weight: 500;
  font-size: 14px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 14px 32px;
  border-radius: 4px;
  transition: 0.5s;
  line-height: 1;
  color: #fff;
  -webkit-animation-delay: 0.8s;
  animation-delay: 0.8s;
  background: #d9232d;
}
#الرئيسيه .btn-get-started:hover {
  background: #df3740;
}
@media (max-width: 992px) {
  #الرئيسيه {
    height: 100vh;
  }
  #الرئيسيه .imag-container {
    top: 8px;
  }
}
@media (max-width: 768px) {
  #الرئيسيه h2 {
    font-size: 28px;
  }
}
@media (min-width: 1024px) {
  #الرئيسيه .imag-control-prev, #الرئيسيه .imag-control-next {
    width: 5%;
  }
}
@media (max-height: 500px) {
  #الرئيسيه {
    height: 120vh;
  }
}
/*--------------------------------------------------------------

# About
--------------------------------------------------------------*/
.about{
  padding-top: 75px;
}
.about .content h2 {
  font-weight: 700;
  font-size: 30px;
  line-height: 60px;
  margin-bottom: 20px;
  text-transform: uppercase;
}
.about .content .desc{
  font-size: 20px;
}
.about .content h4 {
  font-weight: 500;
  line-height: 32px;
  font-size: 24px;
}


/*--------------------------------------------------------------
# Services
--------------------------------------------------------------*/
.services{
  padding-top: 75px;
}
.services .icon-box1 {
  margin-bottom: 20px;
  padding: 30px;
  border-radius: 6px; 
   background-color: #f8f9fa;
   height: 300px;
  text-align: center;
}
.services .icon-box1 i {
  color: #d9232d;
  font-size: 40px;
}
.services .icon-box1 h4 {
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 18px;
}
.services .icon-box1 h4 a {
  color: #556270;
  transition: 0.3s;
}
.services .icon-box1:hover h4 a {
  color: #d9232d;
}
.services .icon-box1 p {
  font-size: 14pt;
}
.services .icon-box2 {
  margin-bottom: 20px;
  padding: 30px;
  border-radius: 6px;
  background-color: #f8f9fa;

}
.services .icon-box2 i {
  float: left;
  color: #d9232d;
  font-size: 40px;
}
.services .icon-box2 h4 {
  margin-left: 70px;
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 18px;
}
.services .icon-box2 h4 a {
  color: #556270;
  transition: 0.3s;
}
.services .icon-box2:hover h4 a {
  color: #d9232d;
}
.services h5{
  font-weight: 700;
  font-size: 30px;
  line-height: 60px;
  margin-bottom: 20px;
  text-transform: uppercase;
}

.places h3 {
  margin-left: 70px;
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 25px;
  color: #556270;
  transition: 0.3s;
}
.places ul li {
  margin-left: 70px;
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 18px;
  color: #556270;
  transition: 0.3s;
}
/*--------------------------------------------------------------
# Portfolio
--------------------------------------------------------------*/
.portfolio{
  margin-top: 50px;
  padding-top: 90px;
}
.portfolio .portfolio-item {
  margin-bottom: 30px;
}
.portfolio #portfolio-flters {
  padding: 0;
  margin: 0 auto 20px auto;
  list-style: none;
  text-align: center;
}
.portfolio #portfolio-flters li {
  cursor: pointer;
  display: inline-block;
  padding: 8px 15px 10px 15px;
  font-size: 14px;
  font-weight: 600;
  line-height: 1;
  text-transform: uppercase;
  color: #444444;
  margin-bottom: 5px;
  transition: all 0.3s ease-in-out;
  border-radius: 3px;
}
.portfolio #portfolio-flters li:hover, .portfolio #portfolio-flters li.filter-active {
  color: #fff;
  background: #d9232d;
}
.portfolio #portfolio-flters li:last-child {
  margin-right: 0;
}
.portfolio .portfolio-wrap {
  transition: 0.3s;
  position: relative;
  overflow: hidden;
  z-index: 1;
  background: rgba(85, 98, 112, 0.6);
}
.portfolio .portfolio-wrap::before {
  content: "";
  background: rgba(85, 98, 112, 0.6);
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  transition: all ease-in-out 0.3s;
  z-index: 2;
  opacity: 0;
}
.portfolio .portfolio-wrap img {
  transition: all ease-in-out 0.3s;
}
.portfolio .portfolio-wrap .portfolio-info {
  opacity: 0;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 3;
  transition: all ease-in-out 0.3s;
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
  align-items: flex-start;
  padding: 20px;
}
.portfolio .portfolio-wrap .portfolio-info h4 {
  font-size: 20px;
  color: #fff;
  font-weight: 600;
}
.portfolio .portfolio-wrap .portfolio-info p {
  color: rgba(255, 255, 255, 0.7);
  font-size: 14px;
  text-transform: uppercase;
  padding: 0;
  margin: 0;
  font-style: italic;
}
.portfolio .portfolio-wrap .portfolio-links {
  text-align: center;
  z-index: 4;
}
.portfolio .portfolio-wrap .portfolio-links a {
  color: rgba(255, 255, 255, 0.6);
  margin: 0 5px 0 0;
  font-size: 28px;
  display: inline-block;
  transition: 0.3s;
}
.portfolio .portfolio-wrap .portfolio-links a:hover {
  color: white;
}
.portfolio .portfolio-wrap:hover::before {
  opacity: 1;
}
.portfolio .portfolio-wrap:hover img {
  transform: scale(1.2);
}
.portfolio .portfolio-wrap:hover .portfolio-info {
  opacity: 1;
}
/* # Gallery Section
--------------------------------------------------------------*/
#gallery {
  padding: 100px 0;
  overflow: hidden;
  text-align: center;

}
#gallery .swiper-pagination {
  margin-top: 20px;
  position: relative;
}
#gallery .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: #fff;
  opacity: 1;
  border: 1px solid rgba(1, 11, 16, 0.9);
}
#gallery .swiper-pagination .swiper-pagination-bullet-active {
  background-color: rgba(1, 11, 16, 0.9);
}
#gallery .swiper-slide-active {
  text-align: center;
}
@media (min-width: 992px) {
  #gallery .swiper-wrapper {
    padding: 40px 0;
    text-align: center;

  }
  #gallery .swiper-slide-active {
    border: 5px solid rgba(1, 11, 16, 0.9);
    padding: 4px;
    background: #fff;
    text-align: center;
    z-index: 1;
    transform: scale(1.15);
    margin-top: 6px;
  }
}
</style>

@endsection
