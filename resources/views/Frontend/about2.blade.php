@extends('frontend.layouts.main')
@section('main-container')
 <!-- Start main-content -->
  <div class="main-content-area">
    <!-- Section: page title -->
    <section class="page-title layer-overlay overlay-dark-3 section-typo-light bg-img-center" data-tm-bg-img="http://placehold.it/1894x826">
      <div class="container pt-200 pb-200">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">About</h2>
              <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
                <div class="breadcrumbs">
                  <span><a href="#" rel="home">Home</a></span>
                  <span><i class="fa fa-angle-right"></i></span>
                  <span><a href="#">Pages</a></span>
                  <span><i class="fa fa-angle-right"></i></span>
                  <span class="active">Page Title</span>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: home End -->
<!-- Divider: Contact -->
    <section class="divider">
      <div class="container">
        <div class="row">
          
          <div class="col-lg-12">
            <h2 class="mt-0 mb-0">@lang('auth.about_page')</h2>
            <p class="font-size-20">@lang('auth.about_page_content')</p>
            <!-- Contact Form -->

          </div>
        </div>
      </div>
    </section>
@endsection