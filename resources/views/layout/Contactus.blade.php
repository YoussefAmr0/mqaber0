@extends('layout.Admin')
@section('section')

<!-- ======= Contact Section ======= -->
<section id="contact" style="padding: 150px 0" class="contact">
<div class="container">

<div>
<iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
</div>

<div class="row mt-5">

<div class="col-lg-4">
  <div class="info">
    <div class="address">
      <i class="bi bi-geo-alt"></i>
      <h4>العنوان:</h4>
      <p>A108 Adam Street, New York, NY 535022</p>
    </div>

    <div class="email">
      <i class="bi bi-envelope"></i>
      <h4>البريد الالكتروني:</h4>
      <p>hamadaa_shalaby@hotmail.com</p>
    </div>

    <div class="phone">
      <i class="bi bi-phone"></i>
      <h4>للتواصل:</h4>
      <p>01003064001</p>
      <p>01120400501</p>
      <p>01067017771</p>
      <p>01005201913</p>
      <p>01098528585</p>
    </div>

  </div>

</div>

<div class="col-lg-8 mt-5 mt-lg-0">

  <form action="forms/contact.php" method="post" role="form" class="php-email-form">
    <div class="row">
      <div class="col-md-6 form-group">
        <input type="text" name="name" class="form-control" id="name" placeholder="الاسم" required>
      </div>
      <div class="col-md-6 form-group mt-3 mt-md-0">
        <input type="email" class="form-control" name="email" id="email" placeholder="البريد الالكتروني" required>
      </div>
    </div>
    <div class="form-group mt-3">
      <input type="text" class="form-control" name="mobile" id="mobile" placeholder="رقم التليفون" required>
    </div>
    <div class="form-group mt-3">
      <textarea class="form-control" name="message" rows="5" placeholder="الاستفسار" required></textarea>
    </div>
    <div class="my-3">
      <div class="loading">جاري التحميل</div>
      <div class="error-message"></div>
      <div class="sent-message">تم الاسال الاستفسار ز شكرا لتواصلكم معنا</div>
    </div>
    <div class="text-center"><button type="submit">ارسل</button></div>
  </form>

</div>

</div>

</div>
</section><!-- End Contact Section -->
@endsection