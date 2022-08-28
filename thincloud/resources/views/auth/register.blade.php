@extends("layout2")

@section("title")
    Kayıt Ol
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
 <link
      rel="stylesheet"
      type="text/css"
      href="../../../app-assets/vendors/css/forms/select/select2.min.css"
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
            <!-- Brand logo--><a class="brand-logo" href="index.html">
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
                  src="../../../app-assets/images/pages/register-v2-dark.svg"
                  alt="Register V2"
                />
              </div>
            </div>
            <!-- /Left Text-->
            <!-- Register-->
            <div
              class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5"
            >
              <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                <h2 class="card-title fw-bold mb-1">Hesap Oluştur</h2>
                <p class="card-text mb-2">
                  Bilgilerinizi girerek kayıt olabilirsiniz.
                </p>
                <form
                  class="auth-register-form mt-2 validate-form"
                  action="/users"
                  method="POST"
                >
                @csrf
                <div class="mb-1">
                    <label class="form-label" for="register-username"
                      >Kullanıcı Adı</label
                    >
                    <input
                    autofocus=""
                      class="form-control"
                      id="register-username"
                      type="text"
                      name="username"
                      placeholder="johndoe"
                      aria-describedby="register-username"
                      tabindex="1"
                      value="{{old("username")}}"
                    />
                  </div>
                  @error('username')
                            <p class="text-danger text-xs">{{$message}}</p>
                  @enderror
                  <div class="row">
                    <div class="mb-1 col-6">
                        <label class="form-label" for="register-password"
                          >Şifre</label
                        >
                        <div
                          class="input-group input-group-merge form-password-toggle"
                        >
                          <input
                            class="form-control form-control-merge"
                            id="register-password"
                            type="password"
                            name="password"
                            placeholder="············"
                            aria-describedby="register-password"
                            tabindex="2"
                          /><span class="input-group-text cursor-pointer"
                            ><i data-feather="eye"></i
                          ></span>
                        </div>
                      </div>

                      <div class="mb-1 col-6">
                        <label class="form-label" for="register-password2"
                          >Şifre Tekrar</label
                        >
                        <div
                          class="input-group input-group-merge form-password-toggle"
                        >
                          <input
                            class="form-control form-control-merge"
                            id="register-password2"
                            type="password"
                            for="account-retype-new-password"
                            name="password_confirmation"
                            placeholder="············"
                            aria-describedby="register-password2"
                            tabindex="3"
                          /><span class="input-group-text cursor-pointer"
                            ><i data-feather="eye"></i
                          ></span>
                        </div>
                      </div>

                  </div>
                  @error('password')
                  <p class="text-danger text-xs">{{$message}}</p>
        @enderror
        @error('password_confirmation')
        <p class="text-danger text-xs">{{$message}}</p>
@enderror
                  <div class="mb-1 ">
                    <label class="form-label" for="register-email"
                      >E-Posta</label
                    >
                    <input
                      class="form-control"
                      id="register-email"
                      type="text"
                      name="email"
                      placeholder="thincloud@mail.com"
                      aria-describedby="register-email"
                      tabindex="4"
                      value="{{old("email")}}"
                    />
                  </div>
                  @error('email')
                            <p class="text-danger text-xs">{{$message}}</p>
                  @enderror
                  <div class="mb-1">
                    <label class="form-label" for="register-name">Ad</label>
                    <input
                      class="form-control"
                      id="register-name"
                      type="text"
                      name="name"
                      placeholder="Johnson"
                      aria-describedby="register-name"
                      tabindex="5"
                      value="{{old("name")}}"
                    />
                  </div>
                  @error('name')
                  <p class="text-danger text-xs">{{$message}}</p>
        @enderror
                  <div class="mb-1">
                    <label class="form-label" for="register-surname"
                      >Soyad</label
                    >
                    <input
                      class="form-control"
                      id="register-surname"
                      type="text"
                      name="surname"
                      placeholder="Cliff"
                      aria-describedby="register-surname"
                      tabindex="6"
                      value="{{old("surname")}}"
                    />
                  </div>
                  @error('surname')
                  <p class="text-danger text-xs">{{$message}}</p>
        @enderror
                  <div class="mb-1">
                    <label class="form-label" for="register-phone"
                      >Telefon</label
                    >
                    <input
                    onkeypress='validate(event)'
                      class="form-control account-number-mask"
                      id="phone"
                      placeholder="(312) 000-0000"

                      type="tel"
                      name="phone"
                      aria-describedby="register-phone"
                      tabindex="7"
                      value="{{old("phone")}}"
                    />
                  </div>
                  @error('phone')
                            <p class="text-danger text-xs">{{$message}}</p>
                  @enderror
                  <div class="mb-1">
                    <label class="form-label" for="register-birthdate"
                      >Doğum Tarihi</label
                    >
                    <input
                    min='1899-01-01' max='2000-13-13'
                      class="form-control"
                      id="datefield"
                      type="date"
                      name="birthdate"
                      placeholder="john@example.com"
                      aria-describedby="register-birthdate"
                      tabindex="8"
                      value="{{old("birthdate")}}"

                    />
                  </div>
                  @error('birthdate')
                  <p class="text-danger text-xs">{{$message}}</p>
        @enderror
                  <div class="mb-1">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        id="register-privacy-policy"
                        type="checkbox"
                        tabindex="9"
                        name="kvkk"

                      />
                      <label
                        class="form-check-label"
                        for="register-privacy-policy"
                        ><a href="#">&nbsp;KVKK & Kullanıcı Sözleşmesini</a>
                        kabul ediyorum.</label
                      >
                    </div>
                    @error('kvkk')
                            <p class="text-danger text-xs mt-1">{{$message}}</p>
                  @enderror

                  </div>
                  <input value="Kayıt Ol" class="btn-sm btn-primary w-100" tabindex="10" type="submit"/>

                </form>
                <p class="text-center mt-2">
                  <span>Zaten hesabınız mevcut mu?</span
                  ><a href="/login"><span>&nbsp;Giriş yapın</span></a>
                </p>
                <div class="divider my-2">
                  <div class="divider-text">ya da</div>
                </div>

                <form action="/action_page.php">
                  <div class="row">
                    <div class="col">
                      <button class="btn-sm apple w-100 text-white mb-2">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          fill="currentColor"
                          class="bi bi-apple"
                          viewBox="0 0 16 16"
                        >
                          <path
                            d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282z"
                          />
                          <path
                            d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282z"
                          />
                        </svg>
                        <span class="ms-1 text_start">Apple ile Kaydol</span>
                      </button>
                      <button class="btn-sm google w-100 text-grey mb-2">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 48 48"
                          style="fill: #000000"
                        >
                          <path
                            fill="#FFC107"
                            d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"
                          ></path>
                          <path
                            fill="#FF3D00"
                            d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"
                          ></path>
                          <path
                            fill="#4CAF50"
                            d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"
                          ></path>
                          <path
                            fill="#1976D2"
                            d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"
                          ></path>
                        </svg>
                        <span class="ms-1">Google ile Kaydol</span>
                      </button>
                      <button class="btn-sm fb w-100 text-white">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          fill="currentColor"
                          class="bi bi-facebook"
                          viewBox="0 0 16 16"
                        >
                          <path
                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"
                          />
                        </svg>
                        <span class="ms-1">Meta ile Kaydol</span>
                      </button>
                    </div>
                  </div>
                </form>
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
  <script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js"></script>

  <script src="../../../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
  <script src="../../../app-assets/vendors/js/forms/cleave/cleave.min.js"></script>
  <script src="../../../app-assets/vendors/js/forms/cleave/addons/cleave-phone.tr.js"></script>
  <!-- END: Page Vendor JS-->

  <!-- BEGIN: Theme JS-->
  <script src="../../../app-assets/js/core/app-menu.js"></script>
  <script src="../../../app-assets/js/core/app.js"></script>
  <!-- END: Theme JS-->

  <!-- BEGIN: Page JS-->
  <script src="../../../app-assets/js/scripts/pages/auth-register.js"></script>
  <script src="../../../assets/js/scripts.js"></script>
  <script src="../../../app-assets/js/scripts/pages/modal-two-factor-auth.js"></script>

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
