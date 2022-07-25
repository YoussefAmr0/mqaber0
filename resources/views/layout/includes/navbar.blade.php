   <header id="header" class="fixed-top d-flex align-items-center header-transparent">
      <div class="container d-flex justify-content-between">
        
        <div class="logo">
          <h1><a href="{{ route('start.index')}}#hero"><img src="./assets/img/profile nav.png" alt=""></a></h1>
        </div>
  
        <nav id="navbar" class="navbar ">
          <ul>
            <li><a class="nav-link scrollto active" href="{{ route('start.index')}}#hero">الرئيسية</a></li>
            <li><a class="nav-link scrollto" href="{{ route('start.index') }}#about">من نحن</a></li>
            <li><a class="nav-link scrollto" href="{{ route('start.index') }}#services">مميزاتنا</a></li>
            {{-- <li><a class="nav-link scrollto" href="{{ route('start.index') }}#portfolio">الصور</a></li> --}}
            <li class="dropdown"><a href="{{ route('start.index')}}#gallery"><span>أماكن المقابر و المدافن </span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="{{ route('elslam.index') }}">مدينة السلام </a></li>
                <li><a href="{{ route('elobour.index') }}">مدينة العبور </a></li>
                <li><a href="{{ route('may.index') }}"> مدينة 15 مايو</a></li>
                <li><a href="{{ route('october.index') }}"> أكتوبر</a></li>
                <li><a href="{{ route('elfayoum.index') }}">طريق الفيوم</a></li>
                <li><a href="{{ route('elqatamya.index') }}"> طريق القطامية</a></li>
                <li><a href="{{ route('elsokhna.index') }}"> طريق السخنة بعد بوابات القاهرة ب5 كيلو أمام العاصمة الإدارية الجديدة</a></li>
                <li><a href="{{ route('badr.index') }}"> مدينة بدر الروبيكي</a></li>
  
              </ul>
            </li>
            <li><a class="nav-link scrollto" href="{{ route('contactus.index') }}">اتصل بنا</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
  
      </div>
    </header><!-- End Header -->

    <style>
      /*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
  z-index: 997;
  transition: all 0.5s;
  background: #052c3f;
  padding: 22px 0;
}
#header.header-transparent {
  background: none;
  background-color: rgba(0, 0, 0, 0.3);
}
#header.header-scrolled {
  background: rgba(0, 0, 0, 0.5);
  padding: 12px 0;
}
#header .logo h1 {
  font-size: 36px;
  margin: 0;
  padding: 0;
  line-height: 1;
  font-weight: 400;
  letter-spacing: 3px;
  text-transform: uppercase;
}
#header .logo h1 a, #header .logo h1 a:hover {
  color: #fff;
  text-decoration: none;
}
#header .logo img {
  padding: 0;
  margin: 0;
  max-height: 40px;
}
@media (max-width: 768px) {
  #header .logo h1 {
    font-size: 28px;
  }
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/**
* Desktop Navigation 
*/
.navbar ul {
  margin: 0;
  padding: 0;
  display: flex;
  list-style: none;
  align-items: center;
}
.navbar li {
  position: relative;
  font-family: 'Cairo', sans-serif;
}
.navbar a, .navbar a:focus {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px 0 10px 30px;
  font-family: 'Cairo', sans-serif;
  font-size: 17px;
  color: #fff;
  white-space: nowrap;
  text-transform: uppercase;
  transition: 0.3s;
}
.navbar a i, .navbar a:focus i {
  font-size: 12px;
  line-height: 0;
  margin-left: 5px;
}
.navbar a:hover, .navbar .active, .navbar .active:focus, .navbar li:hover > a {
  color: #000000;
}
.navbar .dropdown ul {
  display: block;
  position: absolute;
  left: 14px;
  list-style: none;
  top: calc(100% + 30px);
  margin: 0;
  padding: 10px 0;
  z-index: 99;
  opacity: 0;
  visibility: hidden;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  transition: 0.3s;
}
.navbar .dropdown ul li {
  min-width: 200px;
}
.navbar .dropdown ul a {
  padding: 10px 20px;
  font-size: 14px;
  text-transform: none;
  font-weight: 500;
  color: #000000;
}
.navbar .dropdown ul a i {
  font-size: 12px;
}
.navbar .dropdown ul a:hover, .navbar .dropdown ul .active:hover, .navbar .dropdown ul li:hover > a {
  color: #0000008b;
}
.navbar .dropdown:hover > ul {
  opacity: 1;
  top: 100%;
  visibility: visible;
}
.navbar .dropdown .dropdown ul {
  top: 0;
  left: calc(100% - 30px);
  visibility: hidden;
}
.navbar .dropdown .dropdown:hover > ul {
  opacity: 1;
  top: 0;
  left: 100%;
  visibility: visible;
}
@media (max-width: 1366px) {
  .navbar .dropdown .dropdown ul {
    left: -90%;
  }
  .navbar .dropdown .dropdown:hover > ul {
    left: -100%;
  }
}

/**
* Mobile Navigation 
*/
.mobile-nav-toggle {
  color: #fff;
  font-size: 28px;
  cursor: pointer;
  display: none;
  line-height: 0;
  transition: 0.5s;
}

@media (max-width: 991px) {
  .mobile-nav-toggle {
    display: block;
  }

  .navbar ul {
    display: none;
  }
}
.navbar-mobile {
  position: fixed;
  overflow: hidden;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  background: rgba(1, 11, 16, 0.9);
  transition: 0.3s;
  z-index: 999;
}
.navbar-mobile .mobile-nav-toggle {
  position: absolute;
  top: 15px;
  right: 15px;
}
.navbar-mobile ul {
  display: block;
  position: absolute;
  top: 55px;
  right: 15px;
  bottom: 15px;
  left: 15px;
  padding: 10px 0;
  background-color: #fff;
  overflow-y: auto;
  transition: 0.3s;
}
.navbar-mobile a, .navbar-mobile a:focus {
  padding: 10px 20px;
  font-size: 15px;
  color: #052c3f;
}
.navbar-mobile a:hover, .navbar-mobile .active, .navbar-mobile li:hover > a {
  color: #85b0be;
}
.navbar-mobile .getstarted, .navbar-mobile .getstarted:focus {
  margin: 15px;
}
.navbar-mobile .dropdown ul {
  position: static;
  display: none;
  margin: 10px 20px;
  padding: 10px 0;
  z-index: 99;
  opacity: 1;
  visibility: visible;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
}
.navbar-mobile .dropdown ul li {
  min-width: 200px;
}
.navbar-mobile .dropdown ul a {
  padding: 10px 20px;
}
.navbar-mobile .dropdown ul a i {
  font-size: 12px;
}
.navbar-mobile .dropdown ul a:hover, .navbar-mobile .dropdown ul .active:hover, .navbar-mobile .dropdown ul li:hover > a {
  color: #85b0be;
}
.navbar-mobile .dropdown > .dropdown-active {
  display: block;
}


    </style>