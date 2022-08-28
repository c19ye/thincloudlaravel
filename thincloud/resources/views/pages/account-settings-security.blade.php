@extends("layout")
@extends("sabit.nav")
@section("title")
    Hesap Güvenliği
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
      href={{asset("app-assets/vendors/css/forms/select/select2.min.css")}}
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
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link
      rel="stylesheet"
      type="text/css"
      href={{asset("assets/css/style.css")}}
    />
    <!-- END: Custom CSS-->
@endsection

@section("content")
<div class="app-content content">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-body">
          <div class="row">
            <div class="col-12">
              <ul class="nav nav-pills mb-2">
                <!-- account -->
                <li class="nav-item">
                  <a class="nav-link" href={{route("account-settings-account")}}>
                    <i data-feather="user" class="font-medium-3 me-50"></i>
                    <span class="fw-bold">Hesap Ayarları</span>
                  </a>
                </li>
                <!-- security -->
                <li class="nav-item">
                  <a
                    class="nav-link active"
                    href={{route("account-settings-security")}}
                  >
                    <i data-feather="lock" class="font-medium-3 me-50"></i>
                    <span class="fw-bold">Hesap Güvenliği</span>
                  </a>
                </li>
                <!-- billing and plans -->
                <li class="nav-item">
                  <a class="nav-link" href={{route("account-settings-billing")}}>
                    <i data-feather="bookmark" class="font-medium-3 me-50"></i>
                    <span class="fw-bold">Ödemeler &amp; Planlar</span>
                  </a>
                </li>
              </ul>

              <!-- security -->
              <div class="col-xl-12 col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <ul
                      class="nav nav-tabs nav-justified"
                      id="myTab2"
                      role="tablist"
                    >
                      <li class="nav-item">
                        <a
                          class="nav-link active"
                          id="home-tab-justified"
                          data-bs-toggle="tab"
                          href="#password-just"
                          role="tab"
                          aria-controls="home-just"
                          aria-selected="true"
                          >Parola Değiştir</a
                        >
                      </li>
                      <li class="nav-item">
                        <a
                          class="nav-link"
                          id="profile-tab-justified"
                          data-bs-toggle="tab"
                          href="#two-steps-just"
                          role="tab"
                          aria-controls="profile-just"
                          aria-selected="true"
                          >İki Adımlı Doğrulama</a
                        >
                      </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content pt-1">
                      <div
                        class="tab-pane active"
                        id="password-just"
                        role="tabpanel"
                        aria-labelledby="home-tab-justified"
                      >
                        <div class="card">
                          <div class="card-header border-bottom">
                            <h4 class="card-title">Parola Değiştir</h4>
                          </div>
                          <div class="card-body pt-1">
                            <!-- form -->
                            <form action="/account-settings-security/update_password" method="POST">
                              @csrf
                              <div class="row">
                                <div class="col-12 col-sm-6 mb-1">
                                  <label
                                    class="form-label"
                                    for="account-old-password"
                                    >Mevcut Parolanız</label
                                  >
                                  <div
                                    class="input-group form-password-toggle input-group-merge"
                                  >
                                    <input
                                      type="password"
                                      class="form-control"
                                      id="account-old-password"
                                      name="password"
                                      placeholder="Mevcut parolanız"
                                      data-msg="Please current password"
                                    />
                                    <div
                                      class="input-group-text cursor-pointer"
                                    >
                                      <i data-feather="eye"></i>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-12 col-sm-6 mb-1">
                                  <label
                                    class="form-label"
                                    for="account-new-password"
                                    >Yeni Parola</label
                                  >
                                  <div
                                    class="input-group form-password-toggle input-group-merge"
                                  >
                                    <input
                                      type="password"
                                      id="account-new-password"
                                      name="new_password"
                                      class="form-control"
                                      placeholder="Yeni parolanız"
                                    />
                                    <div
                                      class="input-group-text cursor-pointer"
                                    >
                                      <i data-feather="eye"></i>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-12 col-sm-6 mb-1">
                                  <label
                                    class="form-label"
                                    for="account-retype-new-password"
                                    >Yeni Parolanızı Tekrar Giriniz</label
                                  >
                                  <div
                                    class="input-group form-password-toggle input-group-merge"
                                  >
                                    <input
                                      type="password"
                                      class="form-control"
                                      id="account-retype-new-password"
                                      name="confirm_new_password"
                                      placeholder="Yeni parolanız"
                                    />
                                    <div
                                      class="input-group-text cursor-pointer"
                                    >
                                      <i data-feather="eye"></i>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-12">
                                  <p class="fw-bolder">Şifre Gereklilikleri:</p>
                                  <ul class="ps-1 ms-25">
                                    <li class="mb-50">
                                      Minimum 8 karakter uzunluğunda - daha
                                      fazlası, daha da iyi.
                                    </li>
                                    <li class="mb-50">En az bir küçük harf</li>
                                    <li>En az bir sayı, sembol veya boşluk</li>
                                  </ul>
                                </div>
                                <div class="col-12">
                                  <button
                                    type="submit"
                                    class="btn btn-primary me-1 mt-1"
                                  >
                                    Değişiklikleri Kaydet
                                  </button>
                                  <button
                                    type="reset"
                                    class="btn btn-outline-secondary mt-1"
                                  >
                                    İptal Et
                                  </button>
                                </div>
                              </div>
                            </form>
                            <!--/ form -->
                          </div>
                        </div>
                      </div>
                      <div
                        class="tab-pane"
                        id="two-steps-just"
                        role="tabpanel"
                        aria-labelledby="profile-tab-justified"
                      >
                        <div class="card">
                          <div class="card-header border-bottom">
                            <h4 class="card-title">İki-Adımlı Doğrulama</h4>
                          </div>
                          <div class="card-body my-2 py-25">
                            <p class="fw-bolder">
                              İki-adımlı doğrulama henüz aktif değil.
                            </p>
                            <p>
                              İki-adımlı doğrulama güvenliğinize bir katman daha
                              katarak hesap güvenliğinizi bir üst seviyeye
                              çıkarır.
                            </p>
                            <button
                              type="button"
                              class="btn btn-primary"
                              data-bs-toggle="modal"
                              data-bs-target="#twoFactorAuthModal"
                            >
                              İki-adımlı doğrulamayı etkinleştir
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- / two-step verification -->

              <!--/ security -->
            </div>
          </div>
          <!-- two factor auth modal -->
          <div
            class="modal fade"
            id="twoFactorAuthModal"
            tabindex="-1"
            aria-labelledby="twoFactorAuthTitle"
            aria-hidden="true"
          >
            <div
              class="modal-dialog modal-dialog-centered modal-lg two-factor-auth"
            >
              <div class="modal-content">
                <div class="modal-header bg-transparent">
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  ></button>
                </div>
                <div class="modal-body pb-5 px-sm-5 mx-50">
                  <h1 class="text-center mb-1" id="twoFactorAuthTitle">
                    Kimlik Doğrulama Yöntemi Seçiniz
                  </h1>

                  <div class="custom-options-checkable">
                    <input
                      class="custom-option-item-check"
                      type="radio"
                      name="twoFactorAuthRadio"
                      id="twoFactorAuthApps"
                      value="apps-auth"
                      checked
                    />
                    <label
                      for="twoFactorAuthApps"
                      class="custom-option-item d-flex align-items-center flex-column flex-sm-row px-3 py-2 mb-2"
                    >
                      <span
                        ><i
                          data-feather="settings"
                          class="font-large-2 me-sm-2 mb-2 mb-sm-0"
                        ></i
                      ></span>
                      <span>
                        <span class="custom-option-item-title h3"
                          >Kimlik Doğrulama Yöntemleri</span
                        >
                        <span class="d-block mt-75">
                          Google Authenticator, Microsoft Authenticator, Authy
                          ya da 1Password tarzı uygulamalardan kod alın.
                        </span>
                      </span>
                    </label>

                    <input
                      class="custom-option-item-check"
                      type="radio"
                      name="twoFactorAuthRadio"
                      value="sms-auth"
                      id="twoFactorAuthSms"
                    />
                    <label
                      for="twoFactorAuthSms"
                      class="custom-option-item d-flex align-items-center flex-column flex-sm-row px-3 py-2"
                    >
                      <span
                        ><i
                          data-feather="message-square"
                          class="font-large-2 me-sm-2 mb-2 mb-sm-0"
                        ></i
                      ></span>
                      <span>
                        <span class="custom-option-item-title h3">SMS</span>
                        <span class="d-block mt-75"
                          >Biz size ihtiyacınız olduğunda kodunuzu SMS ile
                          gönderelim.</span
                        >
                      </span>
                    </label>
                  </div>

                  <button
                    id="nextStepAuth"
                    class="btn btn-primary float-end mt-3"
                  >
                    <span class="me-50">Devam Et</span>
                    <i data-feather="chevron-right"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- / two factor auth modal -->

          <!-- add authentication apps modal -->
          <div
            class="modal fade"
            id="twoFactorAuthAppsModal"
            tabindex="-1"
            aria-labelledby="twoFactorAuthAppsTitle"
            aria-hidden="true"
          >
            <div
              class="modal-dialog modal-dialog-centered modal-lg two-factor-auth-apps"
            >
              <div class="modal-content">
                <div class="modal-header bg-transparent">
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  ></button>
                </div>
                <div class="modal-body pb-5 px-sm-5 mx-50">
                  <h1
                    class="text-center mb-2 pb-50"
                    id="twoFactorAuthAppsTitle"
                  >
                    Kimlik Doğrulama Uygulaması Ekleyin
                  </h1>

                  <h4>Kimlik Doğrulama Uygulamaları</h4>
                  <p>
                    Google Authenticator, Microsoft Authenticator, Authy, ya da
                    1Password kullanarak QR kodunu okutunuz. Bu işlem sizin
                    kullanmanız için 6 haneli bir kod üretecektir.
                  </p>

                  <div class="d-flex justify-content-center my-2 py-50">
                    <img
                      class="img-fluid"
                      src={{asset("app-assets/images/icons/qrcode.png")}}
                      width="122"
                      alt="QR Code"
                    />
                  </div>

                  <div class="alert alert-warning" role="alert">
                    <h4 class="alert-heading">ASDLKNASDA9AHS678dGhASD78AB</h4>
                    <div class="alert-body fw-normal">
                      Eğer QR kodunu kullanmakta sorun yaşıyorsanız, elle
                      doğrulama yöntemini seçebilirsiniz.
                    </div>
                  </div>

                  <form class="row gy-1" onsubmit="return false">
                    <div class="col-12">
                      <input
                        class="form-control"
                        id="authenticationCode"
                        type="text"
                        placeholder="Kimlik doğrulama kodunuz"
                      />
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                      <button
                        type="reset"
                        class="btn btn-outline-secondary mt-2 me-1"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                      >
                        İptal Et
                      </button>
                      <button type="submit" class="btn btn-primary mt-2">
                        <span class="me-50">Devam Et</span>
                        <i data-feather="chevron-right"></i>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- / add authentication apps modal-->

          <!-- add authentication sms modal-->
          <div
            class="modal fade"
            id="twoFactorAuthSmsModal"
            tabindex="-1"
            aria-labelledby="twoFactorAuthSmsTitle"
            aria-hidden="true"
          >
            <div
              class="modal-dialog modal-dialog-centered modal-lg two-factor-auth-sms"
            >
              <div class="modal-content">
                <div class="modal-header bg-transparent">
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  ></button>
                </div>
                <div class="modal-body pb-5 px-sm-5 mx-50">
                  <h1 class="text-center mb-2 pb-50" id="twoFactorAuthSmsTitle">
                    Telefon Numaranızı Girin
                  </h1>
                  <h4>
                    SMS Yöntemini Kullanmak İçin Telefon Numaranızı Onaylayın.
                  </h4>
                  <p>
                    Ülke koduyyla beraber telefon numaranızı giriniz. Size
                    onaylama kodunuzu göndereceğiz.
                  </p>
                  <form class="row gy-1 mt-1" onsubmit="return false">
                    <div class="col-12">
                      <input
                        class="form-control phone-number-mask"
                        type="text"
                        placeholder="Telefon numaranız"
                      />
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                      <button
                        type="reset"
                        class="btn btn-outline-secondary mt-1 me-1"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                      >
                        İptal Et
                      </button>
                      <button type="submit" class="btn btn-primary mt-1">
                        <span class="me-50">Devam Et</span>
                        <i data-feather="chevron-right"></i>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- / add authentication sms modal-->
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
    <script src={{asset("app-assets/vendors/js/forms/cleave/cleave.min.js")}}></script>
    <script src={{asset("app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js")}}></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src={{asset("app-assets/js/core/app-menu.js")}}></script>
    <script src={{asset("app-assets/js/core/app.js")}}></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src={{asset("app-assets/js/scripts/pages/modal-two-factor-auth.js")}}></script>
    <script src={{asset("app-assets/js/scripts/pages/page-account-settings-security.js")}}></script>
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
