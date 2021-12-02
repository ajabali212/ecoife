@extends('frontend.layouts.main')
@section('main-container')

<section class="page-title layer-overlay overlay-dark-3 section-typo-light bg-img-center" data-tm-bg-img="http://placehold.it/1894x826">
      <div class="container pt-200 pb-200">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">@lang('auth.about_page_banner 2')</h2>
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
<!-- Section: Divider -->
    <section>
      <div class="container">
        <div class="section-content mb-40">
          <div class="row">
            <div class="col-lg-12">
              <div class="project-tab-style1">
                <div class="tab-content p-0" id="myTabContent">
                  <div class="tab-pane fade show active" id="recycling" role="tabpanel" aria-labelledby="recycling-tab">
                    <div class="row">
                      <div class="col-lg-12 col-xl-6">
                        <div class="layer-bg-wrapper-current-style1">
                          <img class="mb-25 w-100" src="http://placehold.it/585x486" alt="Image">
                          <div class="font-size-18 text-white pb-25 pl-lg-20"><span></span></div>
                          <div class="img-bg-layer1 bg-img-cover" data-tm-bg-img="http://placehold.it/625x571"></div>
                        </div>
                      </div>
                      <div class="col-lg-12 col-xl-5">
                        <div class="tab-content-inner pt-70 pt-lg-40 pr-md-30 pr-xs-15 pl-50 pl-lg-20 pr-lg-20 pl-md-30 pl-xs-15">
                          <h3 class="font-size-40 font-weight-500 mt-0 mb-40">@lang('auth.How Drones Can Save Rainforests')</h3>
                          <p class="font-size-18 mb-40">@lang('auth.about 2 page content')</p>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection