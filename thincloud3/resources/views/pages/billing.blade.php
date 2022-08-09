@extends("layout")
@extends("sabit.nav")
@section("title")
    Fatura
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
                    <a href="#">ThinCloud' um</a>
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
      href="../../../app-assets/images/ico/favicon.icoo"
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
      href="../../../app-assets/css/core/menu/menu-types/vertical-menu.css"
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
      href="../../../assets/css/style.css"
    />
    <!-- END: Custom CSS-->
@endsection

@section("content")
<div class="app-content content">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-body">
          <div class="auth-inner row m-0">
            <div class="width-850 mx-auto">
              <div class="row">
                <div class="card card-statistics">
                  <div class="statistics-body">
                    <div class="row">
                      <div class="col-md-3 col-sm-6 col-12">
                        <div class="d-flex flex-row">
                          <div class="avatar bg-light-success me-2">
                            <div class="avatar-content">
                              <i
                                data-feather="dollar-sign"
                                class="avatar-icon"
                              ></i>
                            </div>
                          </div>
                          <div class="my-auto">
                            <h4 class="fw-bolder mb-0">9.99 $</h4>
                            <p class="card-text font-small-3 mb-0">
                              Şuanki Ücret
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6 col-12 mb-2 mb-md-0">
                        <div class="d-flex flex-row">
                          <div class="avatar bg-light-primary me-2">
                            <div class="avatar-content">
                              <i
                                data-feather="trending-up"
                                class="avatar-icon"
                              ></i>
                            </div>
                          </div>
                          <div class="my-auto">
                            <h4 class="fw-bolder mb-0">12.8 %</h4>
                            <p class="card-text font-small-3 mb-0">
                              Kullanım Artışı
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6 col-12 mb-2 mb-md-0">
                        <div class="d-flex flex-row">
                          <div class="avatar bg-light-success me-2">
                            <div class="avatar-content">
                              <i
                                data-feather="server"
                                class="font-medium-5"
                              ></i>
                            </div>
                          </div>
                          <div class="my-auto">
                            <h4 class="fw-bolder mb-0">2</h4>
                            <p class="card-text font-small-3 mb-0">
                              Aktif Servisler
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6 col-12 mb-2 mb-sm-0">
                        <div class="d-flex flex-row">
                          <div class="avatar bg-light-success me-2">
                            <div class="avatar-content">
                              <i
                                data-feather="credit-card"
                                class="font-medium-5"
                              ></i>
                            </div>
                          </div>
                          <div class="my-auto">
                            <h4 class="fw-bolder mb-0">19.98 $</h4>
                            <p class="card-text font-small-2 mb-0">
                              Ödenmemiş Ücret
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="bs-stepper register-multi-steps-wizard shadow-none">
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
                          <span class="bs-stepper-title">Hesap Onaylama</span>
                          <span class="bs-stepper-subtitle"
                            >E-posta giriniz</span
                          >
                        </span>
                      </button>
                    </div>
                    <div class="line">
                      <i data-feather="chevron-right" class="font-medium-2"></i>
                    </div>
                    <div
                      class="step"
                      data-target="#invoice"
                      role="tab"
                      id="invoice-trigger"
                    >
                      <button type="button" class="step-trigger">
                        <span class="bs-stepper-box">
                          <i data-feather="user" class="font-medium-3"></i>
                        </span>
                        <span class="bs-stepper-label">
                          <span class="bs-stepper-title">Faturalandırma</span>
                          <span class="bs-stepper-subtitle"
                            >Bilgilerinizi Giriniz</span
                          >
                        </span>
                      </button>
                    </div>
                    <div class="line">
                      <i data-feather="chevron-right" class="font-medium-2"></i>
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
                          <span class="bs-stepper-title">Ödeme</span>
                          <span class="bs-stepper-subtitle"
                            >Ödeme Detayları</span
                          >
                        </span>
                      </button>
                    </div>
                    <div class="line">
                      <i data-feather="chevron-right" class="font-medium-2"></i>
                    </div>
                    <div
                      class="step"
                      data-target="#order"
                      role="tab"
                      id="order-trigger"
                    >
                      <button type="button" class="step-trigger">
                        <span class="bs-stepper-box">
                          <i
                            data-feather="credit-card"
                            class="font-medium-3"
                          ></i>
                        </span>
                        <span class="bs-stepper-label">
                          <span class="bs-stepper-title">Sipariş Onaylama</span>
                          <span class="bs-stepper-subtitle"
                            >Siparişinizi Onaylayın</span
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
                        <h2 class="fw-bolder mb-75">Hesabınızı Onaylama</h2>
                        <span>Lütfen bilgilerinizi giriniz</span>
                      </div>
                      <form method="POST">
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
                              placeholder="johndoe"
                            />
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6 mb-1">
                            <label class="form-label" for="email"
                              >E-posta</label
                            >
                            <input
                              type="email"
                              name="email"
                              id="email"
                              class="form-control"
                              placeholder="john.doe@email.com"
                              aria-label="john.doe"
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
                        </div>
                        <div class="row">
                          <div class="col-md-6 mb-1">
                            <label class="form-label" for="confirm-password"
                              >Şifre Onaylama</label
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
                        </div>
                      </form>

                      <div class="d-flex justify-content-between mt-2">
                        <button
                          class="btn btn-outline-secondary btn-prev ms-5 me-3"
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
                        <button class="btn btn-primary btn-next ms-5 me-5">
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
                      id="invoice"
                      class="content"
                      role="tabpanel"
                      aria-labelledby="invoice-trigger"
                    >
                      <div class="content-header mb-2">
                        <h2 class="fw-bolder mb-75">Fatura Bilgileri</h2>
                        <span>Bilgilerinizi giriniz</span>
                      </div>
                      <form method="POST">
                        <div class="row">
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
                                placeholder="John"
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
                                placeholder="Doe"
                              />
                            </div>
                          </div>
                          <div class="row">
                            <div class="mb-1 col-md-6">
                              <label class="form-label" for="first-name"
                                >Toll Adresi</label
                              >
                              <input
                                type="text"
                                name="first-name"
                                id="first-name"
                                class="form-control"
                                placeholder=""
                              />
                            </div>
                            <div class="mb-1 col-md-6">
                              <label class="form-label" for="last-name"
                                >Toll Numarası</label
                              >
                              <input
                                type="text"
                                name="last-name"
                                id="last-name"
                                class="form-control"
                                placeholder=""
                              />
                            </div>
                          </div>
                          <div class="col-12 mb-1">
                            <label class="form-label" for="home-address"
                              >Adres</label
                            >
                            <input
                              type="text"
                              name="home-address"
                              id="home-address"
                              class="form-control"
                              placeholder="Address"
                            />
                          </div>
                          <div class="mb-1 col-md-6">
                            <label for="city" class="form-label">Şehir</label>
                            <select class="form-select select2" id="city">
                              <option selected="">Türkiye</option>
                              <option>Kanada</option>
                              <option>İngiltere</option>
                              <option>Almanya</option>
                              <option>Fransa</option>
                            </select>
                          </div>
                          <div class="mb-1 col-md-6">
                            <label for="state" class="form-label">İlçe</label>
                            <select class="form-select select2" id="state">
                              <option selected="">Çankaya</option>
                              <option>Etimesgut</option>
                              <option>Bağcılar</option>
                              <option>Yenimahalle</option>
                              <option>Üsküdar</option>
                            </select>
                          </div>
                          <div class="col-md-6 mb-1">
                            <label class="form-label" for="zip-code"
                              >Posta Kodu</label
                            >
                            <input
                              type="text"
                              name="zip-code"
                              id="pin-code"
                              class="form-control zip-code-mask"
                              placeholder="Kod"
                              maxlength="6"
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
                              placeholder="(550) 550-5500"
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
                              class="form-control email-mask"
                              placeholder="johndoe@example.com"
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
                      <form action="" method="POST">
                        <div class="content-header my-2 py-1">
                          <h2 class="fw-bolder mb-75">Ödeme Bilgileri</h2>
                          <span>Kart Bilgilerinizi Giriniz</span>
                        </div>
                        <div class="row">
                          <div class="mb-1 col-md-12">
                            <label for="card-type" class="form-label"
                              >Kart Tipi</label
                            >
                            <select class="form-select select2" id="state">
                              <option selected="">Visa</option>
                              <option>MasterCard</option>
                              <option>American Express</option>
                              <option>Discover</option>
                            </select>
                          </div>
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
                        </div>
                        <div class="row">
                          <div class="col-12 col-md-12 mb-1">
                            <label class="form-label" for="addCardCvv"
                              >CVV Numarası</label
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
                        <div class="row">
                          <div class="col-6 col-md-12 mb-1">
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
                      id="order"
                      class="content"
                      role="tabpanel"
                      aria-labelledby="order-trigger"
                    >
                      <form action="" method="POST">
                        <div class="checkout-options">
                          <div class="card">
                            <div class="card-body">
                              <label class="section-label form-label mb-1"
                                >Seçenekler</label
                              >
                              <div
                                class="coupons input-group input-group-merge"
                              >
                                <input
                                  type="text"
                                  class="form-control"
                                  placeholder="Kuponlar"
                                  aria-label="Coupons"
                                  aria-describedby="input-coupons"
                                />
                                <span
                                  class="input-group-text text-primary ps-1"
                                  id="input-coupons"
                                  >Uygula</span
                                >
                              </div>
                              <hr />
                              <div class="price-details">
                                <h6 class="price-title">Fiyat Detayları</h6>
                                <ul class="list-unstyled">
                                  <li class="price-detail">
                                    <div class="detail-title">Total</div>
                                    <div class="detail-amt">$598</div>
                                  </li>
                                  <li class="price-detail">
                                    <div class="detail-title">İndirim</div>
                                    <div
                                      class="detail-amt discount-amt text-success"
                                    >
                                      -25$
                                    </div>
                                  </li>
                                  <li class="price-detail">
                                    <div class="detail-title">Vergi</div>
                                    <div class="detail-amt">$1.3</div>
                                  </li>

                                  <li class="price-detail">
                                    <div class="detail-title">
                                      Gönderme Ücreti
                                    </div>
                                    <div
                                      class="detail-amt discount-amt text-success"
                                    >
                                      Ücretsiz
                                    </div>
                                  </li>
                                </ul>
                                <hr />
                                <ul class="list-unstyled">
                                  <li class="price-detail">
                                    <div class="detail-title detail-total">
                                      Toplam
                                    </div>
                                    <div class="detail-amt fw-bolder">$574</div>
                                  </li>
                                </ul>
                              </div>
                            </div>
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
                            >Ödemeyi Onayla</span
                          >
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--row kısmı-->

            <!--row kısmı-->
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
