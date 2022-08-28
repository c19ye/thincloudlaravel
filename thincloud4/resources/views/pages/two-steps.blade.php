@extends("layout")

@section("title")
    İki Adımlı Doğrulama
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
      href="../../../app-assets/css/core/menu/menu-types/horizontal-menu.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../../../app-assets/css/pages/authentication.css"
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
      <div class="content-wrapper">
        <div class="content-header row"></div>
        <div class="content-body">
          <div class="auth-wrapper auth-cover">
            <div class="auth-inner row m-0">
              <!-- Brand logo--><a class="brand-logo" href={{route("index")}}>
                <h2 class="brand-text text-primary ms-1">thincloud</h2>
              </a>
              <!-- /Brand logo-->
              <!-- Left Text-->
              <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                <div
                  class="w-100 d-lg-flex align-items-center justify-content-center px-5"
                >
                  <img
                    class="img-fluid"
                    src="../../../app-assets/images/illustration/two-steps-verification-illustration-dark.svg"
                    alt="two steps verification"
                  />
                </div>
              </div>
              <!-- /Left Text-->
              <!-- two steps verification v2-->
              <div
                class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5"
              >
                <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                  <h2 class="card-title fw-bolder mb-1">
                    İki Adımlı Doğrulama &#x1F4AC;
                  </h2>
                  <p class="card-text mb-75">
                    E-postanıza doğrulama kodunuzu gönderdik. Gelen kodu
                    boşluklara doldurun.
                  </p>
                  <p class="card-text fw-bolder mb-2">*****rkn@hotmail.com</p>
                  <form class="mt-2" action="index.html" method="POST">
                    <h6>6 haneli güvenlik kodunu yazın</h6>
                    <div
                      class="auth-input-wrapper d-flex align-items-center justify-content-between"
                    >
                      <input
                        class="form-control auth-input height-50 text-center numeral-mask mx-25 mb-1"
                        type="text"
                        maxlength="1"
                        autofocus=""
                      />
                      <input
                        class="form-control auth-input height-50 text-center numeral-mask mx-25 mb-1"
                        type="text"
                        maxlength="1"
                      />
                      <input
                        class="form-control auth-input height-50 text-center numeral-mask mx-25 mb-1"
                        type="text"
                        maxlength="1"
                      />
                      <input
                        class="form-control auth-input height-50 text-center numeral-mask mx-25 mb-1"
                        type="text"
                        maxlength="1"
                      />
                      <input
                        class="form-control auth-input height-50 text-center numeral-mask mx-25 mb-1"
                        type="text"
                        maxlength="1"
                      />
                      <input
                        class="form-control auth-input height-50 text-center numeral-mask mx-25 mb-1"
                        type="text"
                        maxlength="1"
                      />
                    </div>
                    <button
                      class="btn btn-primary w-100"
                      type="submit"
                      tabindex="4"
                    >
                      Hesabımı doğrula
                    </button>
                  </form>
                  <p class="text-center mt-2">
                    <span>Kod ulaşmadı mı?</span
                    ><a href="Javascript:void(0)"
                      ><span>&nbsp;Tekrar Yolla</span></a
                    ><a href="Javascript:void(0)"></a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

@section("js")
    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <script src="../../../app-assets/vendors/js/forms/cleave/cleave.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/pages/auth-two-steps.js"></script>
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
