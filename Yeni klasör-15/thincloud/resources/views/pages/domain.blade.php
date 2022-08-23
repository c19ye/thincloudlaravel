@extends("layout")
@extends('sabit.nav')
@section("title")
    Domain
@endsection
@section("breadcrumb")
<div
          class="content-header-left col-md-9 col-12 mt-50 ms-2 d-none d-sm-block"
        >
          <div class="row breadcrumbs-top">
            <div class="col-md-12 d-none d-md-block">
              <h2 class="content-header-title float-start mb-0 me-1">
                @yield("title")
              </h2>
              <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="/">Anasayfa</a>
                  </li><li class="breadcrumb-item">
                    <a href="#">Benim Ağım</a>
                  </li>

                  <li class="breadcrumb-item active">@yield("title")</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
@endsection
@section("css")
<link
      rel="apple-touch-icon"
      href={{asset("app-assets/images/ico/apple-icon-120.png")}}
    />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href={{asset("app-assets/images/ico/favicon.ico")}}
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
      rel="stylesheet"
    />

    <!-- BEGIN: Vendor CSS-->
    <link
      rel="stylesheet"
      type="text/css"
      href={{asset("app-assets/vendors/css/vendors.min.css")}}
    />
    <link
      rel="stylesheet"
      type="text/css"
      href={{asset("app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css")}}
    />
    <link
      rel="stylesheet"
      type="text/css"
      href={{asset("app-assets/vendors/css/forms/select/select2.min.css")}}
    />
    <link
      rel="stylesheet"
      type="text/css"
      href={{asset("app-assets/vendors/css/charts/apexcharts.css")}}
    />
    <link
      rel="stylesheet"
      type="text/css"
      href={{asset("app-assets/vendors/css/extensions/toastr.min.css")}}
    />
    <link
      rel="stylesheet"
      type="text/css"
      href={{asset("app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css")}}
    />
    <link
      rel="stylesheet"
      type="text/css"
      href={{asset("app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css")}}
    />
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link
      rel="stylesheet"
      type="text/css"
      href={{asset("app-assets/css/bootstrap.css")}}
    />
    <link
      rel="stylesheet"
      type="text/css"
      href={{asset("app-assets/css/bootstrap-extended.css")}}
    />
    <link
      rel="stylesheet"
      type="text/css"
      href={{asset("app-assets/css/colors.css")}}
    />
    <link
      rel="stylesheet"
      type="text/css"
      href={{asset("app-assets/css/components.css")}}
    />
    <link
      rel="stylesheet"
      type="text/css"
      href={{asset("app-assets/css/themes/dark-layout.css")}}
    />
    <link
      rel="stylesheet"
      type="text/css"
      href={{asset("app-assets/css/themes/bordered-layout.css")}}
    />
    <link
      rel="stylesheet"
      type="text/css"
      href={{asset("app-assets/css/themes/semi-dark-layout.css")}}
    />

    <!-- BEGIN: Page CSS-->
    <link
      rel="stylesheet"
      type="text/css"
      href={{asset("app-assets/css/core/menu/menu-types/vertical-menu.css")}}
    />
    <link
      rel="stylesheet"
      type="text/css"
      href={{asset("app-assets/css/plugins/forms/form-validation.css")}}
    />
    <link
      rel="stylesheet"
      type="text/css"
      href={{asset("app-assets/css/plugins/forms/pickers/form-flat-pickr.css")}}
    />
    <link
      rel="stylesheet"
      type="text/css"
      href={{asset("app-assets/css/plugins/charts/chart-apex.css")}}
    />
    <link
      rel="stylesheet"
      type="text/css"
      href={{asset("app-assets/css/plugins/extensions/ext-component-toastr.css")}}
    />
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link
      rel="stylesheet"
      type="text/css"
      href={{asset("assets/css/style.css")}}
    />
@endsection

@section("content")
<div class="app-content content">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-body">
          <div class="misc-wrapper">
            <a class="brand-logo" href="index.html">
              <h2 class="brand-text text-primary ms-1">thincloud</h2>
            </a>
            <div class="misc-inner p-2 p-sm-3">
              <div class="w-100 text-center">
                <h2 class="mb-1">Yakında Başlıyoruz 🚀</h2>
                <p class="mb-3">
                  Harika şeyler yaratıyoruz. Lütfen hazır olduğunda haberdar
                  olmak için abone olun!
                </p>
                <form
                  class="row row-cols-md-auto row justify-content-center align-items-center m-0 mb-2 gx-3"
                  action="javascript:void(0)"
                >
                  <div class="col-12 m-0 mb-1">
                    <input
                      class="form-control"
                      id="notify-email"
                      type="text"
                      placeholder="john@example.com"
                    />
                  </div>
                  <div class="col-12 d-md-block d-grid ps-md-0 ps-auto">
                    <button
                      class="btn btn-primary mb-1 btn-sm-block"
                      type="submit"
                    >
                      Haber ver
                    </button>
                  </div>
                </form>
                <img
                  class="img-fluid"
                  src={{asset("app-assets/images/pages/coming-soon-dark.svg")}}
                  alt="Coming soon page"
                />
              </div>
            </div>
          </div>
          <!-- / Coming soon page-->
        </div>

      </div>
    </div>
@endsection

@section("js")
    <!-- BEGIN: Vendor JS-->
    <script src={{asset("app-assets/vendors/js/vendors.min.js")}}></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src={{asset("app-assets/vendors/js/forms/select/select2.full.min.js")}}></script>
    <script src={{asset("app-assets/vendors/js/forms/validation/jquery.validate.min.js")}}></script>
    <script src={{asset("app-assets/vendors/js/charts/chart.min.js")}}></script>
    <script src={{asset("app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js")}}></script>
    <script src={{asset("app-assets/vendors/js/charts/apexcharts.min.js")}}></script>
    <script src={{asset("app-assets/vendors/js/extensions/toastr.min.js")}}></script>
    <script src={{asset("app-assets/vendors/js/extensions/moment.min.js")}}></script>
    <script src={{asset("app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js")}}></script>
    <script src={{asset("app-assets/vendors/js/tables/datatable/datatables.buttons.min.js")}}></script>
    <script src={{asset("app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js")}}></script>
    <script src={{asset("app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js")}}></script>
    <script src={{asset("app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js")}}></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src={{asset("app-assets/js/core/app-menu.js")}}></script>
    <script src={{asset("app-assets/js/core/app.js")}}></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src={{asset("app-assets/js/scripts/pages/page-api-key.js")}}></script>
    <script src={{asset("app-assets/js/scripts/charts/chart-chartjs.js")}}></script>
    <script src={{asset("app-assets/js/scripts/pages/dashboard-analytics.js")}}></script>

    <!-- END: Page JS-->

    <script>
      $(window).on("load", function () {
        if (feather) {
          feather.replace({
            width: 14,
            height: 14,
          });
        }
      });
    </script>
@endsection
