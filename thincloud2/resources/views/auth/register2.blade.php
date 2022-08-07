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
      href="../../../app-assets/vendors/css/forms/wizard/bs-stepper.min.css"
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
      href="../../../app-assets/css/plugins/forms/form-wizard.css"
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
      href="../../../assets/css/style.css"q/>
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
              <!-- Brand logo-->
              <a class="brand-logo" href={{route("index")}}>
                <h2 class="brand-text text-primary ms-1">thincloud</h2>
              </a>
              <!-- /Brand logo-->

              <!-- Left Text-->
              <div class="col-lg-3 d-none d-lg-flex align-items-center p-0">
                <div
                  class="w-100 d-lg-flex align-items-center justify-content-center"
                >
                  <img
                    class="img-fluid w-100"
                    src="../../../app-assets/images/illustration/create-account.svg"
                    alt="multi-steps"
                  />
                </div>
              </div>
              <!-- /Left Text-->

              <!-- Register-->
              <div
                class="col-lg-9 d-flex align-items-center auth-bg px-2 px-sm-3 px-lg-5 pt-3"
              >
                <div class="width-700 mx-auto">
                  <div
                    class="bs-stepper register-multi-steps-wizard shadow-none"
                  >
                    <div class="bs-stepper-header px-0" role="tablist">
                      <div
                        class="step"
                        data-target="#account-details"
                        role="tab"
                        id="account-details-trigger"
                      >
                        <button type="button" class="step-trigger">
                          <span class="bs-stepper-box">
                            <i data-feather="home" class="font-medium-3"></i>
                          </span>
                          <span class="bs-stepper-label">
                            <span class="bs-stepper-title">Hesap</span>
                            <span class="bs-stepper-subtitle"
                              >Kullanıcı adını gir</span
                            >
                          </span>
                        </button>
                      </div>
                      <div class="line">
                        <i
                          data-feather="chevron-right"
                          class="font-medium-2"
                        ></i>
                      </div>
                      <div
                        class="step"
                        data-target="#personal-info"
                        role="tab"
                        id="personal-info-trigger"
                      >
                        <button type="button" class="step-trigger">
                          <span class="bs-stepper-box">
                            <i data-feather="user" class="font-medium-3"></i>
                          </span>
                          <span class="bs-stepper-label">
                            <span class="bs-stepper-title">Kişisel</span>
                            <span class="bs-stepper-subtitle"
                              >Bilgileri gir</span
                            >
                          </span>
                        </button>
                      </div>
                      <div class="line">
                        <i
                          data-feather="chevron-right"
                          class="font-medium-2"
                        ></i>
                      </div>
                      <div
                        class="step"
                        data-target="#billing"
                        role="tab"
                        id="billing-trigger"
                      >
                        <button type="button" class="step-trigger">
                          <span class="bs-stepper-box">
                            <i
                              data-feather="credit-card"
                              class="font-medium-3"
                            ></i>
                          </span>
                          <span class="bs-stepper-label">
                            <span class="bs-stepper-title">Fatura</span>
                            <span class="bs-stepper-subtitle"
                              >Ödeme detayları</span
                            >
                          </span>
                        </button>
                      </div>
                    </div>
                    <div class="bs-stepper-content px-0 mt-4">
                      <div
                        id="account-details"
                        class="content"
                        role="tabpanel"
                        aria-labelledby="account-details-trigger"
                      >
                        <div class="content-header mb-2">
                          <h2 class="fw-bolder mb-75">Kullanıcı Bilgisi</h2>
                          <span>Kullanıcı adı ve şifre bilgilerini girin</span>
                        </div>
                        <form method="POST" action="/users">
                          @csrf
                          <div class="row">
                            <div class="col-md-6 mb-1">
                              <label class="form-label" for="username"
                                >Kullanıcı Adı</label
                              >
                              <input
                                type="text"
                                name="username"
                                id="username"
                                class="form-control"
                                placeholder="thincloud"
                              />
                            </div>
                            <div class="col-md-6 mb-1">
                              <label class="form-label" for="email"
                                >E-posta</label
                              >
                              <input
                                type="email"
                                name="email"
                                id="email"
                                class="form-control"
                                placeholder="thincloud@mail.com"
                                aria-label="thincloud"
                              />
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6 mb-1">
                              <label class="form-label" for="password"
                                >Şifre</label
                              >
                              <div
                                class="input-group input-group-merge form-password-toggle"
                              >
                                <input
                                  type="password"
                                  name="password"
                                  id="password"
                                  class="form-control"
                                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                />
                                <span class="input-group-text cursor-pointer"
                                  ><i data-feather="eye"></i
                                ></span>
                              </div>
                            </div>
                            <div class="col-md-6 mb-1">
                              <label class="form-label" for="confirm-password"
                                >Tekrar şifre</label
                              >
                              <div
                                class="input-group input-group-merge form-password-toggle"
                              >
                                <input
                                  type="password"
                                  name="confirm-password"
                                  id="confirm-password"
                                  class="form-control"
                                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                />
                                <span class="input-group-text cursor-pointer"
                                  ><i data-feather="eye"></i
                                ></span>
                              </div>
                            </div>

                            <div class="col-12 mb-1">
                              <label class="form-label" for="multiStepsURL"
                                >Profil bağlantısı</label
                              >
                              <input
                                type="text"
                                name="multiStepsURL"
                                id="multiStepsURL"
                                class="form-control"
                                placeholder="johnsoncliff/profile"
                                aria-label="johnsoncliff"
                              />
                            </div>
                          </div>
                        </form>

                        <div class="d-flex justify-content-between mt-2">
                          <button
                            class="btn btn-outline-secondary btn-prev"
                            disabled
                          >
                            <i
                              data-feather="chevron-left"
                              class="align-middle me-sm-25 me-0"
                            ></i>
                            <span class="align-middle d-sm-inline-block d-none"
                              >Önceki</span
                            >
                          </button>
                          <button class="btn btn-primary btn-next">
                            <span class="align-middle d-sm-inline-block d-none"
                              >Sonraki</span
                            >
                            <i
                              data-feather="chevron-right"
                              class="align-middle ms-sm-25 ms-0"
                            ></i>
                          </button>
                        </div>
                      </div>
                      <div
                        id="personal-info"
                        class="content"
                        role="tabpanel"
                        aria-labelledby="personal-info-trigger"
                      >
                        <div class="content-header mb-2">
                          <h2 class="fw-bolder mb-75">Kişisel Bilgiler</h2>
                          <span>Bilgilerinizi girin</span>
                        </div>
                        <form>
                          <div class="row">
                            <div class="mb-1 col-md-6">
                              <label class="form-label" for="first-name"
                                >İsim</label
                              >
                              <input
                                type="text"
                                name="first-name"
                                id="first-name"
                                class="form-control"
                                placeholder="Johnson"
                              />
                            </div>
                            <div class="mb-1 col-md-6">
                              <label class="form-label" for="last-name"
                                >Soyisim</label
                              >
                              <input
                                type="text"
                                name="last-name"
                                id="last-name"
                                class="form-control"
                                placeholder="Cliff"
                              />
                            </div>
                            <div class="col-md-6 mb-1">
                              <label class="form-label" for="mobile-number"
                                >Telefon Numarası</label
                              >
                              <input
                                type="text"
                                name="mobile-number"
                                id="mobile-number"
                                class="form-control mobile-number-mask"
                                placeholder="(312) 000-0000"
                              />
                            </div>
                            <div class="col-md-6 mb-1">
                              <label class="form-label" for="pin-code"
                                >Posta kodu</label
                              >
                              <input
                                type="text"
                                name="pin-code"
                                id="pin-code"
                                class="form-control pin-code-mask"
                                placeholder="12345"
                                maxlength="6"
                              />
                            </div>

                            <div class="col-12 mb-1">
                              <label class="form-label" for="home-address"
                                >Ev Adresi</label
                              >
                              <input
                                type="text"
                                name="home-address"
                                id="home-address"
                                class="form-control"
                                placeholder="Adres"
                              />
                            </div>

                            <div class="col-12 mb-1">
                              <label class="form-label" for="area-address"
                                >İlçe, Sokak</label
                              >
                              <input
                                type="text"
                                name="area-address"
                                id="area-address"
                                class="form-control"
                                placeholder="İlçe, Sokak"
                              />
                            </div>

                            <div class="mb-1 col-md-12">
                              <label class="form-label" for="town-city"
                                >Şehir</label
                              >
                              <input
                                type="text"
                                name="town-city"
                                id="town-city"
                                class="form-control w-100"
                                placeholder="Şehir"
                              />
                            </div>
                            <div class="mb-1 col-md-12">
                              <label class="form-label" for="country"
                                >Ülke</label
                              >
                              <input
                                type="text"
                                name="country"
                                id="country"
                                class="form-control w-100"
                                placeholder="Ülke"
                              />
                            </div>
                          </div>
                        </form>

                        <div class="d-flex justify-content-between mt-2">
                          <button class="btn btn-primary btn-prev">
                            <i
                              data-feather="chevron-left"
                              class="align-middle me-sm-25 me-0"
                            ></i>
                            <span class="align-middle d-sm-inline-block d-none"
                              >Önceki</span
                            >
                          </button>
                          <button class="btn btn-primary btn-next">
                            <span class="align-middle d-sm-inline-block d-none"
                              >Sonraki</span
                            >
                            <i
                              data-feather="chevron-right"
                              class="align-middle ms-sm-25 ms-0"
                            ></i>
                          </button>
                        </div>
                      </div>
                      <div
                        id="billing"
                        class="content"
                        role="tabpanel"
                        aria-labelledby="billing-trigger"
                      >
                        <div class="content-header mb-2">
                          <h2 class="fw-bolder mb-75">Plan Seçimi</h2>
                        </div>

                        <form>
                          <!-- select plan options -->
                          <div class="row custom-options-checkable gx-3 gy-2">
                            <div class="col-md-4">
                              <input
                                class="custom-option-item-check"
                                type="radio"
                                name="plans"
                                id="basicPlan"
                                value=""
                              />
                              <label
                                class="custom-option-item text-center p-1"
                                for="basicPlan"
                              >
                                <span
                                  class="custom-option-item-title h3 fw-bolder"
                                  >Temel</span
                                >
                                <span class="d-block m-75">Kişisel</span>
                                <span class="plan-price">
                                  <sup
                                    class="font-medium-1 fw-bold text-primary"
                                    >₺</sup
                                  >
                                  <span
                                    class="pricing-value fw-bolder text-primary"
                                    >9</span
                                  >
                                  <sub
                                    class="pricing-duration text-body font-medium-1 fw-bold"
                                    >/aylık</sub
                                  >
                                </span>
                              </label>
                            </div>

                            <div class="col-md-4">
                              <input
                                class="custom-option-item-check"
                                type="radio"
                                name="plans"
                                id="standardPlan"
                                value=""
                                checked
                              />
                              <label
                                class="custom-option-item text-center p-1"
                                for="standardPlan"
                              >
                                <span
                                  class="custom-option-item-title h3 fw-bolder"
                                  >Standart</span
                                >
                                <span class="d-block m-75">Orta</span>
                                <span class="plan-price">
                                  <sup
                                    class="font-medium-1 fw-bold text-primary"
                                    >₺</sup
                                  >
                                  <span
                                    class="pricing-value fw-bolder text-primary"
                                    >99</span
                                  >
                                  <sub
                                    class="pricing-duration text-body font-medium-1 fw-bold"
                                    >/aylık</sub
                                  >
                                </span>
                              </label>
                            </div>

                            <div class="col-md-4">
                              <input
                                class="custom-option-item-check"
                                type="radio"
                                name="plans"
                                id="enterprisePlan"
                                value=""
                              />
                              <label
                                class="custom-option-item text-center p-1"
                                for="enterprisePlan"
                              >
                                <span
                                  class="custom-option-item-title h3 fw-bolder"
                                  >Kurumsal</span
                                >
                                <span class="d-block m-75">Büyük</span>
                                <span class="plan-price">
                                  <sup
                                    class="font-medium-1 fw-bold text-primary"
                                    >₺</sup
                                  >
                                  <span
                                    class="pricing-value fw-bolder text-primary"
                                    >999</span
                                  >
                                  <sub
                                    class="pricing-duration text-body font-medium-1 fw-bold"
                                    >/Aylık</sub
                                  >
                                </span>
                              </label>
                            </div>
                          </div>
                          <!-- / select plan options -->

                          <div class="content-header my-2 py-1">
                            <h2 class="fw-bolder mb-75">Ödeme Bilgileri</h2>
                            <span>Kart Bilgilerinizi Girin</span>
                          </div>

                          <div class="row gx-2">
                            <div class="col-12 mb-1">
                              <label class="form-label" for="addCardNumber"
                                >Kart Numarası</label
                              >
                              <div class="input-group input-group-merge">
                                <input
                                  id="addCardNumber"
                                  name="addCard"
                                  class="form-control credit-card-mask"
                                  type="text"
                                  placeholder="1356 3215 6548 7898"
                                  aria-describedby="addCard"
                                  data-msg="Please enter your credit card number"
                                />
                                <span
                                  class="input-group-text cursor-pointer p-25"
                                  id="addCard"
                                >
                                  <span class="card-type"></span>
                                </span>
                              </div>
                            </div>

                            <div class="col-md-6 mb-1">
                              <label class="form-label" for="addCardName"
                                >Kart Üzerindeki İsim</label
                              >
                              <input
                                type="text"
                                id="addCardName"
                                class="form-control"
                                placeholder="Johnson Cliff"
                              />
                            </div>

                            <div class="col-6 col-md-3 mb-1">
                              <label class="form-label" for="addCardExpiryDate"
                                >Son Kullanma Tarihi</label
                              >
                              <input
                                type="text"
                                id="addCardExpiryDate"
                                class="form-control expiry-date-mask"
                                placeholder="MM/YY"
                              />
                            </div>

                            <div class="col-6 col-md-3 mb-1">
                              <label class="form-label" for="addCardCvv"
                                >CVV</label
                              >
                              <input
                                type="text"
                                id="addCardCvv"
                                class="form-control cvv-code-mask"
                                maxlength="3"
                                placeholder="654"
                              />
                            </div>
                          </div>
                        </form>

                        <div class="d-flex justify-content-between mt-1">
                          <button class="btn btn-primary btn-prev">
                            <i
                              data-feather="chevron-left"
                              class="align-middle me-sm-25 me-0"
                            ></i>
                            <span class="align-middle d-sm-inline-block d-none"
                              >Önceki</span
                            >
                          </button>
                          <button class="btn btn-success btn-submit">
                            <i
                              data-feather="check"
                              class="align-middle me-sm-25 me-0"
                            ></i>
                            <span class="align-middle d-sm-inline-block d-none"
                              >Oluştur</span
                            >
                          </button>
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
    </div>
@endsection

@section("js")
<script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <script src="../../../app-assets/vendors/js/forms/wizard/bs-stepper.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/cleave/cleave.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/pages/auth-register.js"></script>
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
