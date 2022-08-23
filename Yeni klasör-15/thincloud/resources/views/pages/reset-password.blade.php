@extends("layout")

@section("title")
    Şifre Yenileme
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
      href="../../../app-assets/css/plugins/forms/form-validation.css"
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
                    src="../../../app-assets/images/pages/reset-password-v2-dark.svg"
                    alt="Register V2"
                  />
                </div>
              </div>
              <!-- /Left Text-->
              <!-- Reset password-->
              <div
                class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5"
              >
                <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                  <h2 class="card-title fw-bold mb-1">Şifre Sıfırlama 🔒</h2>
                  <p class="card-text mb-2">
                    Yeni şifreniz eski şifreniz ile aynı olamaz
                  </p>
                  <form
                    class="auth-reset-password-form mt-2"
                    action="login-cover.html"
                    method="POST"
                  >
                    <div class="mb-1">
                      <div class="d-flex justify-content-between">
                        <label class="form-label" for="reset-password-new"
                          >Yeni Şifre</label
                        >
                      </div>
                      <div
                        class="input-group input-group-merge form-password-toggle"
                      >
                        <input
                          class="form-control form-control-merge"
                          id="reset-password-new"
                          type="password"
                          name="reset-password-new"
                          placeholder="············"
                          aria-describedby="reset-password-new"
                          autofocus=""
                          tabindex="1"
                        /><span class="input-group-text cursor-pointer"
                          ><i data-feather="eye"></i
                        ></span>
                      </div>
                    </div>
                    <div class="mb-1">
                      <div class="d-flex justify-content-between">
                        <label class="form-label" for="reset-password-confirm"
                          >Tekrar Şifre</label
                        >
                      </div>
                      <div
                        class="input-group input-group-merge form-password-toggle"
                      >
                        <input
                          class="form-control form-control-merge"
                          id="reset-password-confirm"
                          type="password"
                          name="reset-password-confirm"
                          placeholder="············"
                          aria-describedby="reset-password-confirm"
                          tabindex="2"
                        /><span class="input-group-text cursor-pointer"
                          ><i data-feather="eye"></i
                        ></span>
                      </div>
                    </div>
                    <button class="btn btn-primary w-100" tabindex="3">
                      Onayla
                    </button>
                  </form>
                  <p class="text-center mt-2">
                    <a href={{route("login")}}
                      ><i data-feather="chevron-left"></i>Giriş sayfasına dön</a
                    >
                  </p>
                </div>
              </div>
              <!-- /Reset password-->
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
    <script src="../../../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/pages/auth-reset-password.js"></script>
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
