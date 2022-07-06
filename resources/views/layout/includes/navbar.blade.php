   <header id="header" class="fixed-top d-flex align-items-center header-transparent">
      <div class="container d-flex justify-content-between">
        
        <div class="logo">
          <h1><a href="index.html"><img src="./assets/img/profile nav.png" alt=""></a></h1>
        </div>
  
        <nav id="navbar" class="navbar ">
          <ul>
            <li><a class="nav-link scrollto active" href="{{ route('start.index') }}">الرئيسية</a></li>
            <li><a class="nav-link scrollto" href="{{ route('start.index') }}#about">من نحن</a></li>
            <li><a class="nav-link scrollto" href="{{ route('start.index') }}#services">مميزاتنا</a></li>
            <li><a class="nav-link scrollto" href="{{ route('start.index') }}#portfolio">الصور</a></li>
            <li class="dropdown"><a href="#"><span>أماكن المقابر و المدافن </span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="#">مدينة السلام </a></li>
                <li><a href="#">مدينة العبور </a></li>
                <li><a href="#"> مدينة 15 مايو</a></li>
                <li><a href="#"> أكتوبر</a></li>
                <li><a href="#">طريق الفيوم</a></li>
                <li><a href="#"> طريق القطامية</a></li>
                <li><a href="#"> طريق السخنة بعد بوابات القاهرة ب5 كيلو أمام العاصمة الإدارية الجديدة</a></li>
                <li><a href="#"> مدينة بدر الروبيكي</a></li>
  
              </ul>
            </li>
            <li><a class="nav-link scrollto" href="{{ route('contactus.index') }}">اتصل بنا</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
  
      </div>
    </header><!-- End Header -->