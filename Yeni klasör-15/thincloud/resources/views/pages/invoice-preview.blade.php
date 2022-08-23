@extends("layout")

@section("title")
    Fatura Önizleme
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
          <section class="invoice-preview-wrapper">
            <div class="row invoice-preview">
              <!-- Invoice -->
              <div class="col-xl-9 col-md-8 col-12">
                <div class="card invoice-preview-card">
                  <div class="card-body invoice-padding pb-0">
                    <!-- Header starts -->
                    <div
                      class="d-flex justify-content-between flex-md-row flex-column invoice-spacing mt-0"
                    >
                      <div>
                        <div class="logo-wrapper">
                          <h3 class="text-primary invoice-logo">thincloud</h3>
                        </div>
                        <p class="card-text mb-25">
                          Office 149, 450 South Brand Brooklyn
                        </p>
                        <p class="card-text mb-25">
                          San Diego County, CA 91905, USA
                        </p>
                        <p class="card-text mb-0">
                          +1 (123) 456 7891, +44 (876) 543 2198
                        </p>
                      </div>
                      <div class="mt-md-0 mt-2">
                        <h4 class="invoice-title">
                          Faturalandırma
                          <span class="invoice-number">#3492</span>
                        </h4>
                        <div class="invoice-date-wrapper">
                          <p class="invoice-date-title">Yayın Tarihi:</p>
                          <p class="invoice-date">25/08/2020</p>
                        </div>
                        <div class="invoice-date-wrapper">
                          <p class="invoice-date-title">Son Tarih:</p>
                          <p class="invoice-date">29/08/2020</p>
                        </div>
                      </div>
                    </div>
                    <!-- Header ends -->
                  </div>

                  <hr class="invoice-spacing" />

                  <!-- Address and Contact starts -->
                  <div class="card-body invoice-padding pt-0">
                    <div class="row invoice-spacing">
                      <div class="col-xl-8 p-0">
                        <h6 class="mb-2">Fatura Sahibi:</h6>
                        <h6 class="mb-25">Thomas shelby</h6>
                        <p class="card-text mb-25">Shelby Company Limited</p>
                        <p class="card-text mb-25">Small Heath, B10 0HF, UK</p>
                        <p class="card-text mb-25">718-986-6062</p>
                        <p class="card-text mb-0">peakyFBlinders@gmail.com</p>
                      </div>
                      <div class="col-xl-4 p-0 mt-xl-0 mt-2">
                        <h6 class="mb-2">Payment Details:</h6>
                        <table>
                          <tbody>
                            <tr>
                              <td class="pe-1">Total Due:</td>
                              <td><span class="fw-bold">$12,110.55</span></td>
                            </tr>
                            <tr>
                              <td class="pe-1">Bank name:</td>
                              <td>American Bank</td>
                            </tr>
                            <tr>
                              <td class="pe-1">Country:</td>
                              <td>United States</td>
                            </tr>
                            <tr>
                              <td class="pe-1">IBAN:</td>
                              <td>ETD95476213874685</td>
                            </tr>
                            <tr>
                              <td class="pe-1">SWIFT code:</td>
                              <td>BR91905</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <!-- Address and Contact ends -->

                  <!-- Invoice Description starts -->
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="py-1">Görev Açıklaması</th>
                          <th class="py-1">Tutar</th>
                          <th class="py-1">Toplam</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="py-1">
                            <p class="card-text fw-bold mb-25">
                              Native App Development
                            </p>
                            <p class="card-text text-nowrap">
                              Developed a full stack native app using React
                              Native, Bootstrap & Python
                            </p>
                          </td>
                          <td class="py-1">
                            <span class="fw-bold">$60.00</span>
                          </td>
                          <td class="py-1">
                            <span class="fw-bold">$1,800.00</span>
                          </td>
                        </tr>
                        <tr class="border-bottom">
                          <td class="py-1">
                            <p class="card-text fw-bold mb-25">Ui Kit Design</p>
                            <p class="card-text text-nowrap">
                              Designed a UI kit for native app using Sketch,
                              Figma & Adobe XD
                            </p>
                          </td>
                          <td class="py-1">
                            <span class="fw-bold">$60.00</span>
                          </td>
                          <td class="py-1">
                            <span class="fw-bold">$1200.00</span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <div class="card-body invoice-padding pb-0">
                    <div class="row invoice-sales-total-wrapper">
                      <div class="col-md-6 order-md-1 order-2 mt-md-0 mt-3">
                        <p class="card-text mb-0">
                          <span class="fw-bold">Satıcı:</span>
                          <span class="ms-75">Alfie Solomons</span>
                        </p>
                      </div>
                      <div
                        class="col-md-6 d-flex justify-content-end order-md-2 order-1"
                      >
                        <div class="invoice-total-wrapper">
                          <div class="invoice-total-item">
                            <p class="invoice-total-title">Ara Toplam:</p>
                            <p class="invoice-total-amount">$1800</p>
                          </div>
                          <div class="invoice-total-item">
                            <p class="invoice-total-title">İndirim:</p>
                            <p class="invoice-total-amount">$28</p>
                          </div>
                          <div class="invoice-total-item">
                            <p class="invoice-total-title">Vergi:</p>
                            <p class="invoice-total-amount">21%</p>
                          </div>
                          <hr class="my-50" />
                          <div class="invoice-total-item">
                            <p class="invoice-total-title">Toplam:</p>
                            <p class="invoice-total-amount">$1690</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Invoice Description ends -->

                  <hr class="invoice-spacing" />

                  <!-- Invoice Note starts -->
                  <div class="card-body invoice-padding pt-0">
                    <div class="row">
                      <div class="col-12">
                        <span class="fw-bold">Not:</span>
                        <span
                          >Sizinle alışveriş yapmak bizim için bir zevkti. Aboneliğinizin sürekli olmasını diliyoruz.</span
                        >
                      </div>
                    </div>
                  </div>
                  <!-- Invoice Note ends -->
                </div>
              </div>
              <!-- /Invoice -->

              <!-- Invoice Actions -->
              <div
                class="col-xl-3 col-md-4 col-12 invoice-actions mt-md-0 mt-2"
              >
                <div class="card">
                  <div class="card-body">
                    <button
                      class="btn btn-primary w-100 mb-75"
                      data-bs-toggle="modal"
                      data-bs-target="#send-invoice-sidebar"
                    >
                      Fatura Gönder
                    </button>
                    <button
                      class="btn btn-outline-secondary w-100 btn-download-invoice mb-75"
                    >
                      İndir
                    </button>
                    <a
                      class="btn btn-outline-secondary w-100 mb-75"
                      href="./app-invoice-print.html"
                      target="_blank"
                    >
                      Yazdır
                    </a>
                    <a
                      class="btn btn-outline-secondary w-100 mb-75"
                      href="./app-invoice-edit.html"
                    >
                      Düzenle
                    </a>
                    <button
                      class="btn btn-success w-100"
                      data-bs-toggle="modal"
                      data-bs-target="#add-payment-sidebar"
                    >
                      Ödeme Ekle
                    </button>
                  </div>
                </div>
              </div>
              <!-- /Invoice Actions -->
            </div>
          </section>

          <!-- Send Invoice Sidebar -->
          <div
            class="modal modal-slide-in fade"
            id="send-invoice-sidebar"
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
          <!-- /Send Invoice Sidebar -->

          <!-- Add Payment Sidebar -->
          <div
            class="modal modal-slide-in fade"
            id="add-payment-sidebar"
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
                    <span class="align-middle">Ödeme Ekle</span>
                  </h5>
                </div>
                <div class="modal-body flex-grow-1">
                  <form>
                    <div class="mb-1">
                      <input
                        id="balance"
                        class="form-control"
                        type="text"
                        value=""
                        disabled
                      />
                    </div>
                    <div class="mb-1">
                      <label class="form-label" for="amount"
                        >Ödeme Tutarı</label
                      >
                      <input
                        id="amount"
                        class="form-control"
                        type="number"
                        placeholder="1000₺"
                      />
                    </div>
                    <div class="mb-1">
                      <label class="form-label" for="payment-date"
                        >Ödeme Tarihi</label
                      >
                      <input
                        id="payment-date"
                        class="form-control date-picker"
                        type="text"
                      />
                    </div>
                    <div class="mb-1">
                      <label class="form-label" for="payment-method"
                        >Ödeme Metodu</label
                      >
                      <select class="form-select" id="payment-method">
                        <option value="" selected disabled>
                          Ödeme metodu seçin
                        </option>
                        <option value="Cash">Nakit</option>
                        <option value="Bank Transfer">Banka Transferi</option>
                        <option value="Debit">Banka Kartı</option>
                        <option value="Credit">Kredi Kartı</option>
                      </select>
                    </div>
                    <div class="mb-1">
                      <label class="form-label" for="payment-note"
                        >Dahili Ödeme Notu</label
                      >
                      <textarea
                        class="form-control"
                        id="payment-note"
                        rows="5"
                        placeholder="Dahili Ödeme Notu"
                      ></textarea>
                    </div>
                    <div class="d-flex flex-wrap mb-0">
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
          <!-- /Add Payment Sidebar -->
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
