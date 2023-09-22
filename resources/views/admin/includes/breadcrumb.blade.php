<ol class="breadcrumb page-breadcrumb">
  <li class="breadcrumb-item"><a href="{{ localeRoute('admin.index') }}"><i class="fal fa-home-alt"></i></a></li>
  <li class="breadcrumb-item">Application Intel</li>
  <li class="breadcrumb-item active">Marketing Dashboard</li>
  <li class="position-absolute pos-top pos-right d-none d-sm-block">
    <span>
      {{ \Carbon\Carbon::now()->day  }} {{ __('main.'.date('F', strtotime(\Carbon\Carbon::now())))  }} {{ \Carbon\Carbon::now()->year }}{{ __('main.y') }}.
    </span>
  </li>
</ol>
<div class="subheader">
  <h1 class="subheader-title">
    <i class='subheader-icon fal fa-chart-area'></i> Marketing <span class='fw-300'>Dashboard</span>
  </h1>
</div>
