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

  <form action="{{route('contactus.store')}}" method="POST" role="form" class="php-email-form">
    @csrf
    <div class="mt-3 form-group">
      <input type="text" name="name" class="form-control" id="name" placeholder="الاسم" required>
  </div>
  <div class="form-group mt-3">
    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="رقم التليفون" required>
  </div>

   <div class="mb-3">
    <select id="disabledSelect" class="form-select" name="place">
      <option selected disabled>برجاء اختيار المنطقه</option>
      <option value="مدينه السلام">مدينه السلام</option>
      <option value="مدينه العبور">مدينه العبور </option>
      <option value="مدينه 15 مايو">مدينه 15 مايو </option>
      <option value="اكتوير">اكتوير</option>
      <option value="طريق الفيوم">طريق الفيوم</option>
      <option value="طريق القطاميه">طريق القطاميه</option>
      <option value="طريق السخنة بعد بوابات القاهرة ب5 كيلو أمام العاصمة الإدارية الجديدة">طريق السخنة بعد بوابات القاهرة ب5 كيلو أمام العاصمة الإدارية الجديدة</option>
      <option value="مدينه بدر الروبيكي">مدينه بدر الروبيكي</option>
    </select>
  </div>

  <div class="row">
  <div class="col-md-6 form-group">
    <input type="date" class="form-control" name="day" id="place" placeholder="اليوم" required>
  </div>
  <div class="col-md-6 form-group">
    <input type="time" class="form-control" name="time" id="place" placeholder="الوقت" required>
  </div>
</div>
  <div class="text-center"><button type="submit">ارسال</button></div>
</form>

</div>

</div>

</div>
</section><!-- End Contact Section -->

<style>
  /* # Contact */
.contact .info {
  width: 100%;
  background: #fff;
}
.contact .info i {
  font-size: 20px;
  color: #556270;
  float: right;
  width: 44px;
  height: 44px;
  background: #edeff1;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50px;
  transition: all 0.3s ease-in-out;
  margin: 10px 10px;
}
.contact .info h4 {
  padding: 0 0 0 60px;
  font-size: 22px;
  font-weight: 600;
  margin-bottom: 5px;
  color: #556270;
}
.contact .info p {
  padding: 0 70px;
  margin-bottom: 0;
  font-size: 14px;
  color: #8795a4;
}
.contact .info .email, .contact .info .phone {
  margin-top: 40px;
}
.contact .info .email:hover i, .contact .info .address:hover i, .contact .info .phone:hover i {
  background: #556270;
  color: #fff;
}
.contact .php-email-form {
  width: 100%;
  background: #fff;
}
.contact .php-email-form .form-group {
  padding-bottom: 8px;
}
.contact .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: left;
  padding: 15px;
  font-weight: 600;
}
.contact .php-email-form .error-message br + br {
  margin-top: 25px;
}
.contact .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}
.contact .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}
.contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}
.contact .php-email-form input, .contact .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
  border-radius: 4px;
}
.contact .php-email-form input:focus, .contact .php-email-form textarea:focus {
  border-color: #d9232d;
}
.contact .php-email-form input {
  height: 44px;
}
.contact .php-email-form textarea {
  padding: 10px 12px;
}
.contact .php-email-form button[type=submit] {
  background: #d9232d;
  border: 0;
  padding: 10px 24px;
  color: #fff;
  transition: 0.4s;
  border-radius: 4px;
}
.contact .php-email-form button[type=submit]:hover {
  background: #e24d55;
}
@-webkit-keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
</style>
@endsection