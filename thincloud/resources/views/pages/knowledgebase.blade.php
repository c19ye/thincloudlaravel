@extends("layout")
@extends('sabit.nav')
@section("title")
    Bilgi Sayfası
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
      href="../../../app-assets/images/ico/apple-icon-120.png"
    />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="../../../app-assets/images/ico/favicon.ico"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
      rel="stylesheet"
    />

    <!-- BEGIN: Vendor CSS-->
    <link
      rel="stylesheet"
      type="text/css"
      href="../../../app-assets/vendors/css/vendors.min.css"
    />
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link
      rel="stylesheet"
      type="text/css"
      href="../../../app-assets/css/bootstrap.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../../../app-assets/css/bootstrap-extended.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../../../app-assets/css/colors.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../../../app-assets/css/components.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../../../app-assets/css/themes/dark-layout.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../../../app-assets/css/themes/bordered-layout.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../../../app-assets/css/themes/semi-dark-layout.css"
    />

    <!-- BEGIN: Page CSS-->
    <link
      rel="stylesheet"
      type="text/css"
      href="../../../app-assets/css/core/menu/menu-types/vertical-menu.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../../../app-assets/css/pages/page-knowledge-base.css"
    />
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link
      rel="stylesheet"
      type="text/css"
      href="../../../assets/css/style.css"
    />
    <!-- END: Custom CSS-->
@endsection

@section("content")
<div class="app-content content">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row"></div>
        <div class="content-body">
          <!-- Knowledge base Jumbotron -->
          <section id="knowledge-base-search">
            <div class="row">
              <div class="col-12">
                <div
                  class="card knowledge-base-bg text-center"
                  style="
                    background-image: url('../../../app-assets/images/banner/banner.png');
                  "
                >
                  <div class="card-body">
                    <h2 class="text-primary">Sitemize Özel Arama</h2>
                    <p class="card-text mb-2">
                      <span>Popüler Aramalar: </span
                      ><span class="fw-bolder"
                        >Hesap Ayarları, Fatura Ayarları</span
                      >
                    </p>
                    <form class="kb-search-input">
                      <div class="input-group input-group-merge">
                        <span class="input-group-text"
                          ><i data-feather="search"></i
                        ></span>
                        <input
                          type="text"
                          class="form-control"
                          id="searchbar"
                          placeholder="Bir soru sor..."
                        />
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!--/ Knowledge base Jumbotron -->

          <!-- Knowledge base -->
          <section id="knowledge-base-content">
            <div class="row kb-search-content-info match-height">
              <!-- sales card -->
              <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                <div class="card">
                  <a href={{route("knowledgebase-category")}}>
                    <img
                      src="../../../app-assets/images/illustration/sales.svg"
                      class="card-img-top"
                      alt="knowledge-base-image"
                    />

                    <div class="card-body text-center">
                      <h4>Hesap Ayarları</h4>
                      <p class="text-body mt-1 mb-0">
                        Hesap ayarlarınızla ilgili merak ettiğiniz her şey.
                      </p>
                    </div>
                  </a>
                </div>
              </div>

              <!-- marketing -->
              <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                <div class="card">
                  <a href={{route("knowledgebase-category")}}>
                    <img
                      src="../../../app-assets/images/illustration/marketing.svg"
                      class="card-img-top"
                      alt="knowledge-base-image"
                    />
                    <div class="card-body text-center">
                      <h4>Fatura Ayarları</h4>
                      <p class="text-body mt-1 mb-0">
                        Fatura ayarlarınızla ilgili merak ettiğiniz her şey.
                      </p>
                    </div>
                  </a>
                </div>
              </div>

              <!-- api -->
              <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                <div class="card">
                  <a href={{route("knowledgebase-category")}}>
                    <img
                      src="../../../app-assets/images/illustration/api.svg"
                      class="card-img-top"
                      alt="knowledge-base-image"
                    />
                    <div class="card-body text-center">
                      <h4>Nasıl Kullanabilirim</h4>
                      <p class="text-body mt-1 mb-0">
                        Sitemizi kullanmayla ilgili aklınızdaki tüm sorular.
                      </p>
                    </div>
                  </a>
                </div>
              </div>
              <!-- no result -->
              <div class="col-12 text-center no-result no-items">
                <h4 class="mt-4">Arama Sonucu Bulunamadı!!</h4>
              </div>
            </div>
          </section>
          <!-- Knowledge base ends -->
        </div>
      </div>
    </div>
@endsection

@section("js")
    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js"></script>
    <script src="../../../app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/tables/table-datatables-advanced.js"></script>
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
