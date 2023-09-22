<!-- BEGIN Page Header -->
<header class="page-header" role="banner">
  <!-- we need this logo when user switches to nav-function-top -->
  <div class="page-logo">
    <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">
      <img src="{{ asset('assets/img/logo.png') }}" alt="SmartAdmin WebApp" aria-roledescription="logo">
      <span class="page-logo-text mr-1">Admin Dashboard</span>
      <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
      <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
    </a>
  </div>
  <!-- DOC: nav menu layout change shortcut -->
  <div class="hidden-md-down dropdown-icon-menu position-relative">
    <a href="#" class="header-btn btn js-waves-off" data-action="toggle" data-class="nav-function-minify" title="Minify Navigation">
      <i class="ni ni-menu"></i>
    </a>
  </div>
  <!-- DOC: mobile button appears during mobile width -->
  <div class="hidden-lg-up">
    <a href="#" class="header-btn btn press-scale-down" data-action="toggle" data-class="mobile-nav-on">
      <i class="ni ni-menu"></i>
    </a>
  </div>
  <div class="ml-auto d-flex">
    <!-- app settings -->
    <div class="hidden-md-down">
      <a href="#" class="header-icon" data-toggle="modal" data-target=".js-modal-settings">
        <i class="fal fa-cog"></i>
      </a>
    </div>
    <!-- app shortcuts -->
    <div class="btn-group">
      <a href="#" class="header-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fal fa-globe"></i>
        <span class="badge badge-icon">{{ app()->getLocale() }}</span>
      </a>
      <div class="dropdown-menu" style="">
        <a class="dropdown-item" href="/lang/uz">O'zbekcha</a>
        <a class="dropdown-item" href="/lang/ru">Русский</a>
        <a class="dropdown-item" href="/lang/oz">Ўзбекча</a>
      </div>
    </div>
    <!-- app message -->
    <!-- app notification -->
    <div class="d-flex align-items-center ml-3">
      <form action="{{ localeRoute('logout') }}" method="post">
        @csrf
        <button type="submit" class="btn btn-outline-secondary d-flex align-items-center">
          Выйти
          <i class="fal fa-sign-out ml-2"></i>
        </button>
      </form>
    </div>
  </div>
</header>
<!-- END Page Header -->
<!-- BEGIN Page Content -->
<!-- the #js-page-content id is needed for some plugins to initialize -->
