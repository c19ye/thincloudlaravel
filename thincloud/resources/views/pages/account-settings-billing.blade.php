@extends("layout")

@section("title")
    Hesap Ödeme Ayarları
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
      href="../../../app-assets/vendors/css/forms/select/select2.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../../../app-assets/vendors/css/animate/animate.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../../../app-assets/vendors/css/extensions/sweetalert2.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../../../app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../../../app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../../../app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css"
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
      href="../../../app-assets/css/plugins/extensions/ext-component-sweet-alerts.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../../../app-assets/css/plugins/forms/form-validation.css"
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
                  <a class="nav-link" href={{route("account-settings-security")}}>
                    <i data-feather="lock" class="font-medium-3 me-50"></i>
                    <span class="fw-bold">Hesap Güvenliği</span>
                  </a>
                </li>
                <!-- billing and plans -->
                <li class="nav-item">
                  <a
                    class="nav-link active"
                    href={{route("account-settings-billing")}}
                  >
                    <i data-feather="bookmark" class="font-medium-3 me-50"></i>
                    <span class="fw-bold">Ödemeler &amp; Planlar</span>
                  </a>
                </li>
              </ul>

              <!-- billing and plans  -->

              <!-- current plan -->
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
                          href="#home-just"
                          role="tab"
                          aria-controls="home-just"
                          aria-selected="true"
                          >Mevcut Plan</a
                        >
                      </li>
                      <li class="nav-item">
                        <a
                          class="nav-link"
                          id="profile-tab-justified"
                          data-bs-toggle="tab"
                          href="#profile-just"
                          role="tab"
                          aria-controls="profile-just"
                          aria-selected="true"
                          >Ödeme Yöntemleri</a
                        >
                      </li>
                      <li class="nav-item">
                        <a
                          class="nav-link"
                          id="messages-tab-justified"
                          data-bs-toggle="tab"
                          href="#messages-just"
                          role="tab"
                          aria-controls="messages-just"
                          aria-selected="false"
                          >Fatura Adresi</a
                        >
                      </li>
                      <li class="nav-item">
                        <a
                          class="nav-link"
                          id="settings-tab-justified"
                          data-bs-toggle="tab"
                          href="#settings-just"
                          role="tab"
                          aria-controls="settings-just"
                          aria-selected="false"
                          >Fatura Geçmişi</a
                        >
                      </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content pt-1">
                      <div
                        class="tab-pane active"
                        id="home-just"
                        role="tabpanel"
                        aria-labelledby="home-tab-justified"
                      >
                        <div class="card">
                          <div class="card-header border-bottom">
                            <h4 class="card-title">Mevcut Plan</h4>
                          </div>
                          <div class="card-body my-2 py-25">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="mb-2 pb-50">
                                  <h5>
                                    Mevcut Planınız <strong>Temel</strong>
                                  </h5>
                                  <span>Sizin için temel bir başlangıç</span>
                                </div>
                                <div class="mb-2 pb-50">
                                  <h5>09 Aralık 2021 tarihine kadar aktif</h5>
                                  <span
                                    >Mevcut aboneliğinizin sonuna yaklaşınca
                                    size bir bildirim göndereceğiz.</span
                                  >
                                </div>
                                <div class="mb-1">
                                  <h5>
                                    Aylık $19.99<span
                                      class="badge badge-light-primary ms-50"
                                      >Popüler</span
                                    >
                                  </h5>
                                  <span
                                    >Daha iyi bir kalite için standart hizmet
                                    imkanı</span
                                  >
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div
                                  class="alert alert-warning mb-2"
                                  role="alert"
                                >
                                  <h6 class="alert-heading">
                                    İlginize ihtiyacımız var!
                                  </h6>
                                  <div class="alert-body fw-normal">
                                    planınız güncellemeye ihtiyaç duyuyorç
                                  </div>
                                </div>
                                <div class="plan-statistics pt-1">
                                  <div class="d-flex justify-content-between">
                                    <h5 class="fw-bolder">Kalan Günler</h5>
                                    <h5 class="fw-bolder">
                                      30 günüzün dolmasına 4 gün kaldı
                                    </h5>
                                  </div>
                                  <div class="progress">
                                    <div
                                      class="progress-bar w-75"
                                      role="progressbar"
                                      aria-valuenow="75"
                                      aria-valuemin="0"
                                      aria-valuemax="100"
                                    ></div>
                                  </div>
                                  <p class="mt-50">4 gününüz kaldı</p>
                                </div>
                              </div>
                              <div class="col-12">
                                <a href="myplans.html">
                                  <button
                                    class="btn btn-primary me-1 mt-1"
                                    data-bs-toggle="modal"
                                    data-bs-target="#pricingModal"
                                  >
                                    Planınızı Yükseltin
                                  </button>
                                </a>

                                <button
                                  class="btn btn-outline-danger cancel-subscription mt-1"
                                >
                                  Aboneliği İptal Et
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div
                        class="tab-pane"
                        id="profile-just"
                        role="tabpanel"
                        aria-labelledby="profile-tab-justified"
                      >
                        <div class="card">
                          <div class="card-header border-bottom">
                            <h4 class="card-title">Ödeme Yöntemleri</h4>
                          </div>
                          <div class="card-body my-1 py-25">
                            <div class="row gx-4">
                              <div class="col-lg-6">
                                <form
                                  id="creditCardForm"
                                  class="row gx-2 gy-1 validate-form"
                                  onsubmit="return false"
                                >
                                  <div class="col-12">
                                    <div
                                      class="form-check form-check-inline mb-1"
                                    >
                                      <input
                                        name="collapsible-payment"
                                        class="form-check-input"
                                        type="radio"
                                        id="collapsible-payment-cc"
                                        checked
                                      />
                                      <label
                                        class="form-check-label"
                                        for="collapsible-payment-cc"
                                        >Kredi/Banka/ATM Kartı</label
                                      >
                                    </div>
                                    <div
                                      class="form-check form-check-inline mb-1"
                                    >
                                      <input
                                        name="collapsible-payment"
                                        class="form-check-input"
                                        type="radio"
                                        value=""
                                        id="collapsible-payment-cash"
                                      />
                                      <label
                                        class="form-check-label"
                                        for="collapsible-payment-cash"
                                        >PayPal hesabı</label
                                      >
                                    </div>
                                  </div>
                                  <div class="col-12 mt-0">
                                    <label
                                      class="form-label"
                                      for="addCardNumber"
                                      >Kart Numarası</label
                                    >
                                    <div class="input-group input-group-merge">
                                      <input
                                        id="addCardNumber"
                                        name="addCard"
                                        class="form-control add-credit-card-mask"
                                        type="text"
                                        placeholder="5637 8172 1290 7898"
                                        aria-describedby="addCard2"
                                        data-msg="Please enter your credit card number"
                                      />
                                      <span
                                        class="input-group-text cursor-pointer p-25"
                                        id="addCard2"
                                      >
                                        <span class="add-card-type"></span>
                                      </span>
                                    </div>
                                  </div>

                                  <div class="col-md-6">
                                    <label class="form-label" for="addCardName"
                                      >Kartın Üzerindeki İsim</label
                                    >
                                    <input
                                      type="text"
                                      id="addCardName"
                                      class="form-control"
                                      placeholder="John Doe"
                                    />
                                  </div>

                                  <div class="col-6 col-md-3">
                                    <label
                                      class="form-label"
                                      for="addCardExpiryDate"
                                      >S.K.T</label
                                    >
                                    <input
                                      type="text"
                                      id="addCardExpiryDate"
                                      class="form-control add-expiry-date-mask"
                                      placeholder="MM/YY"
                                    />
                                  </div>

                                  <div class="col-6 col-md-3">
                                    <label class="form-label" for="addCardCvv"
                                      >CVV Numarası</label
                                    >
                                    <input
                                      type="text"
                                      id="addCardCvv"
                                      class="form-control add-cvv-code-mask"
                                      maxlength="3"
                                      placeholder="cvv"
                                    />
                                  </div>

                                  <div class="col-12">
                                    <div class="d-flex align-items-center">
                                      <div
                                        class="form-check form-switch form-check-primary me-25"
                                      >
                                        <input
                                          type="checkbox"
                                          class="form-check-input"
                                          id="addSaveCard"
                                          checked
                                        />
                                        <label
                                          class="form-check-label"
                                          for="addSaveCard"
                                        >
                                          <span class="switch-icon-left"
                                            ><i data-feather="check"></i
                                          ></span>
                                          <span class="switch-icon-right"
                                            ><i data-feather="x"></i
                                          ></span>
                                        </label>
                                      </div>
                                      <label
                                        class="form-check-label fw-bolder"
                                        for="addSaveCard"
                                      >
                                        Gelecek Ödemeler İçin Kartı Kaydet?
                                      </label>
                                    </div>
                                  </div>
                                  <div class="col-12 mt-2 pt-1">
                                    <button
                                      type="submit"
                                      class="btn btn-primary me-1"
                                    >
                                      Değişiklikleri Kaydet
                                    </button>
                                    <button
                                      type="reset"
                                      class="btn btn-outline-secondary"
                                    >
                                      İptal Et
                                    </button>
                                  </div>
                                  <div></div>
                                  <input type="hidden" />
                                </form>
                              </div>
                              <div class="col-lg-6 mt-2 mt-lg-0">
                                <h6 class="fw-bolder mb-2">Kartlarım</h6>
                                <div class="added-cards">
                                  <div
                                    class="cardMaster rounded border p-2 mb-1"
                                  >
                                    <div
                                      class="d-flex justify-content-between flex-sm-row flex-column"
                                    >
                                      <div class="card-information">
                                        <img
                                          class="mb-1 img-fluid"
                                          src="../../../app-assets/images/icons/payments/mastercard.png"
                                          alt="Master Card"
                                        />
                                        <div
                                          class="d-flex align-items-center mb-50"
                                        >
                                          <h6 class="mb-0">Tom McBride</h6>
                                          <span
                                            class="badge badge-light-primary ms-50"
                                            >Birincil</span
                                          >
                                        </div>
                                        <span class="card-number"
                                          >∗∗∗∗ ∗∗∗∗ 9856</span
                                        >
                                      </div>
                                      <div
                                        class="d-flex flex-column text-start text-lg-end"
                                      >
                                        <div
                                          class="d-flex order-sm-0 order-1 mt-1 mt-sm-0"
                                        >
                                          <button
                                            class="btn btn-outline-primary me-75"
                                            data-bs-toggle="modal"
                                            data-bs-target="#editCard"
                                          >
                                            Düzenle
                                          </button>
                                          <button
                                            class="btn btn-outline-secondary"
                                          >
                                            Kartı Sil
                                          </button>
                                        </div>
                                        <span class="mt-2"
                                          >Kartın son kullanma tarihi:
                                          12/24</span
                                        >
                                      </div>
                                    </div>
                                  </div>
                                  <div class="cardMaster border rounded p-2">
                                    <div
                                      class="d-flex justify-content-between flex-sm-row flex-column"
                                    >
                                      <div class="card-information">
                                        <img
                                          class="mb-1 img-fluid"
                                          src="../../../app-assets/images/icons/payments/visa.png"
                                          alt="Visa Card"
                                        />
                                        <h6>Mildred Wagner</h6>
                                        <span class="card-number"
                                          >∗∗∗∗ ∗∗∗∗ 5896</span
                                        >
                                      </div>
                                      <div
                                        class="d-flex flex-column text-start text-lg-end"
                                      >
                                        <div
                                          class="d-flex order-sm-0 order-1 mt-1 mt-sm-0"
                                        >
                                          <button
                                            class="btn btn-outline-primary me-75"
                                            data-bs-toggle="modal"
                                            data-bs-target="#editCard"
                                          >
                                            Düzenle
                                          </button>
                                          <button
                                            class="btn btn-outline-secondary"
                                          >
                                            Kartı Sil
                                          </button>
                                        </div>
                                        <span class="mt-2"
                                          >Kartın son kullanma tarihi:
                                          02/24</span
                                        >
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div
                        class="tab-pane"
                        id="messages-just"
                        role="tabpanel"
                        aria-labelledby="messages-tab-justified"
                      >
                        <div class="card">
                          <div class="card-header border-bottom">
                            <h4 class="card-title">Fatura Adresi</h4>
                          </div>
                          <div class="card-body my-2 py-50">
                            <form
                              id="formAccountSettings"
                              class="validate-form"
                              onsubmit="return false"
                            >
                              <div class="row">
                                <div class="mb-1 col-md-6">
                                  <label for="companyName" class="form-label"
                                    >İsim</label
                                  >
                                  <input
                                    type="text"
                                    id="companyName"
                                    name="companyName"
                                    class="form-control"
                                    placeholder="John"
                                    data-msg="İsim"
                                  />
                                </div>
                                <div class="mb-1 col-md-6">
                                  <label for="companyName" class="form-label"
                                    >Soyisim</label
                                  >
                                  <input
                                    type="text"
                                    id="companyName"
                                    name="companyName"
                                    class="form-control"
                                    placeholder="Doe"
                                    data-msg="Soyisim"
                                  />
                                </div>
                                <div class="mb-1 col-md-6">
                                  <label for="billingEmail" class="form-label"
                                    >E-Posta</label
                                  >
                                  <input
                                    class="form-control"
                                    type="text"
                                    id="billingEmail"
                                    name="billingEmail"
                                    placeholder="john.doe@example.com"
                                    data-msg="E-Posta"
                                  />
                                </div>

                                <div class="mb-1 col-md-6">
                                  <label for="mobileNumber" class="form-label"
                                    >Telefon Numarası</label
                                  >
                                  <input
                                    class="form-control account-number-mask"
                                    type="text"
                                    id="mobileNumber"
                                    name="mobileNumber"
                                    placeholder="Numaranız"
                                  />
                                </div>

                                <div class="mb-1 col-md-6">
                                  <label for="country" class="form-label"
                                    >Ülke</label
                                  >
                                  <select
                                    class="form-select select2"
                                    id="country"
                                  >
                                    <option selected="">USA</option>
                                    <option>Canada</option>
                                    <option>UK</option>
                                    <option>Germany</option>
                                    <option>France</option>
                                  </select>
                                </div>
                                <div class="mb-1 col-md-6">
                                  <label for="state" class="form-label"
                                    >Şehir</label
                                  >
                                  <input
                                    class="form-control"
                                    type="text"
                                    id="state"
                                    name="state"
                                    placeholder="Şehir"
                                  />
                                </div>

                                <div class="mb-1 col-6">
                                  <label for="billingAddress" class="form-label"
                                    >Fatura Adresi</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="billingAddress"
                                    name="billingAddress"
                                    placeholder="Fatura Adresi"
                                  />
                                </div>

                                <div class="mb-1 col-md-6">
                                  <label for="zipCode" class="form-label"
                                    >Posta Kodu</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control account-zip-code"
                                    id="zipCode"
                                    name="zipCode"
                                    placeholder="Posta Kodu"
                                    maxlength="6"
                                  />
                                </div>
                              </div>

                              <div class="mt-2">
                                <button
                                  type="submit"
                                  class="btn btn-primary me-1"
                                >
                                  Değişiklikleri Kaydet
                                </button>
                                <button
                                  type="reset"
                                  class="btn btn-outline-secondary"
                                >
                                  İptal Et
                                </button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div
                        class="tab-pane"
                        id="settings-just"
                        role="tabpanel"
                        aria-labelledby="settings-tab-justified"
                      >
                        <div class="card">
                          <table class="invoice-list-table table">
                            <thead>
                              <tr>
                                <th></th>
                                <th>#</th>
                                <th><i data-feather="trending-up"></i></th>
                                <th>Toplam</th>
                                <th class="text-truncate">
                                  Gerçekleştirilen Tarih
                                </th>
                                <th class="text-truncate">Son Tarih</th>
                                <th>Bakiye</th>
                                <th>Fatura Durumu</th>
                                <th class="cell-fit">Hareketler</th>
                              </tr>
                            </thead>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- edit card modal  -->
          <div
            class="modal fade"
            id="editCard"
            tabindex="-1"
            aria-labelledby="editCardTitle"
            aria-hidden="true"
          >
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header bg-transparent">
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  ></button>
                </div>
                <div class="modal-body px-sm-5 mx-50 pb-5">
                  <h1 class="text-center mb-1" id="editCardTitle">
                    Kartı Düzenle
                  </h1>
                  <p class="text-center">
                    Kaydedilmiş Kartınızın Özelliklerini Düzenleyin
                  </p>

                  <!-- form -->
                  <form
                    id="editCardValidation"
                    class="row gy-1 gx-2 mt-75"
                    onsubmit="return false"
                  >
                    <div class="col-12">
                      <label class="form-label" for="modalEditCardNumber"
                        >Kart Numarası</label
                      >
                      <div class="input-group input-group-merge">
                        <input
                          id="modalEditCardNumber"
                          name="modalEditCard"
                          class="form-control credit-card-mask"
                          type="text"
                          placeholder="1356 3215 6548 7898"
                          value="5637 8172 1290 7898"
                          aria-describedby="modalEditCard2"
                          data-msg="Please enter your credit card number"
                        />
                        <span
                          class="input-group-text cursor-pointer p-25"
                          id="modalEditCard2"
                        >
                          <span class="edit-card-type"></span>
                        </span>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <label class="form-label" for="modalEditCardName"
                        >Kartın Üzerindeki İsim</label
                      >
                      <input
                        type="text"
                        id="modalEditCardName"
                        class="form-control"
                        placeholder="John Doe"
                      />
                    </div>

                    <div class="col-6 col-md-3">
                      <label class="form-label" for="modalEditCardExpiryDate"
                        >Son Kullanma Tarihi</label
                      >
                      <input
                        type="text"
                        id="modalEditCardExpiryDate"
                        class="form-control expiry-date-mask"
                        placeholder="MM/YY"
                      />
                    </div>

                    <div class="col-6 col-md-3">
                      <label class="form-label" for="modalEditCardCvv"
                        >CVV Numarası</label
                      >
                      <input
                        type="text"
                        id="modalEditCardCvv"
                        class="form-control cvv-code-mask"
                        maxlength="3"
                        placeholder="654"
                      />
                    </div>

                    <div class="col-12">
                      <div class="d-flex align-items-center">
                        <div
                          class="form-check form-switch form-check-primary me-25"
                        >
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="editSaveCard"
                            checked
                          />
                          <label class="form-check-label" for="editSaveCard">
                            <span class="switch-icon-left"
                              ><i data-feather="check"></i
                            ></span>
                            <span class="switch-icon-right"
                              ><i data-feather="x"></i
                            ></span>
                          </label>
                        </div>
                        <label
                          class="form-check-label fw-bolder"
                          for="editSaveCard"
                          >Kartı Sonraki Kullanımlar İçin Kyadet?</label
                        >
                      </div>
                    </div>

                    <div class="col-12 text-center">
                      <button type="submit" class="btn btn-primary me-1 mt-1">
                        Onayla
                      </button>
                      <button
                        type="reset"
                        class="btn btn-outline-secondary mt-1"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                      >
                        İptal Et
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!--/ edit card modal  -->

          <!--invoice-mail modal-->
          <div
          class="modal fade modal-slide-in"
          id="invoice-mail"
          aria-hidden="true"
        >
          <div class="modal-dialog sidebar-lg">
            <div class="modal-content p-0">
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              >
                ×
              </button>
              <div class="modal-header mb-1">
                <h5 class="modal-title">
                  <span class="align-middle">Fatura Gönder</span>
                </h5>
              </div>
              <div class="modal-body flex-grow-1">
                <form>
                  <div class="mb-1">
                    <label for="invoice-from" class="form-label">Gönderen</label>
                    <input
                      type="text"
                      class="form-control"
                      id="invoice-from"
                      value=""
                      placeholder="company@email.com"
                    />
                  </div>
                  <div class="mb-1">
                    <label for="invoice-to" class="form-label">Alıcı</label>
                    <input
                      type="text"
                      class="form-control"
                      id="invoice-to"
                      value=""
                      placeholder="company@email.com"
                    />
                  </div>
                  <div class="mb-1">
                    <label for="invoice-subject" class="form-label"
                      >Konu</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="invoice-subject"
                      value=""
                      placeholder="Konu"
                    />
                  </div>
                  <div class="mb-1">
                    <label for="invoice-message" class="form-label"
                      >Mesaj</label
                    >
                    <textarea
                      class="form-control"
                      name="invoice-message"
                      id="invoice-message"
                      cols="3"
                      rows="11"
                      placeholder="Mesaj..."
                    >
  Dear Queen Consolidated,

  Thank you for your business, always a pleasure to work with you!

  We have generated a new invoice in the amount of $95.59

  We would appreciate payment of this invoice by 05/11/2019</textarea
                    >
                  </div>
                  <div class="mb-1">
                  </div>
                  <div class="mb-1 d-flex flex-wrap mt-2">
                    <button
                      type="button"
                      class="btn btn-primary me-1"
                      data-bs-dismiss="modal"
                    >
                      Gönder
                    </button>
                    <button
                      type="button"
                      class="btn btn-outline-secondary"
                      data-bs-dismiss="modal"
                    >
                      İptal
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
          <!--/invoice-mail modal-->
        </div>
      </div>
    </div>
@endsection

@section("js")
    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="../../../app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/cleave/cleave.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js"></script>
    <script src="../../../app-assets/vendors/js/extensions/moment.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/jszip.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/pages/page-pricing.js"></script>
    <script src="../../../app-assets/js/scripts/pages/modal-add-new-cc.js"></script>
    <script src="../../../app-assets/js/scripts/pages/modal-edit-cc.js"></script>
    <script src="../../../app-assets/js/scripts/pages/page-account-settings-billing.js"></script>
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
