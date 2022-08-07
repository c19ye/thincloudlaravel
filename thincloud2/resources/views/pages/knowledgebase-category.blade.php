@extends("layout")

@section("title")
    Bilgi Sayfası
@endsection,

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
        <div class="content-body">
          <div class="content-header row"></div>

          <!-- Knowledge base Jumbotron -->
          <section id="kb-category-search">
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

          <!-- Knowledge base category Content  -->
          <section id="knowledge-base-category">
            <div class="row kb-search-content-info match-height">
              <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                <!-- account setting card -->
                <div class="card">
                  <div class="card-body">
                    <!-- account setting header -->
                    <h6 class="kb-title">
                      <i
                        data-feather="settings"
                        class="font-medium-4 me-50 text-primary"
                      ></i>
                      <span>Hesap Ayarları (5)</span>
                    </h6>

                    <div class="list-group list-group-circle mt-2">
                      <a
                        href="{{route("knowledgebase-questions")}}"
                        class="list-group-item text-body"
                        >Şifrem Ne Kadar Güvenli?</a
                      >
                      <a
                        href="{{route("knowledgebase-questions")}}"
                        class="list-group-item text-body"
                        >Can I Change My Username?</a
                      >
                      <a
                        href="{{route("knowledgebase-questions")}}"
                        class="list-group-item text-body"
                        >Where Can I Upload My Avatar?</a
                      >
                      <a
                        href="{{route("knowledgebase-questions")}}"
                        class="list-group-item text-body"
                        >Zaman Aralığımı Nasıl Değiştirebilirim?</a
                      >
                      <a
                        href="{{route("knowledgebase-questions")}}"
                        class="list-group-item text-body"
                        >How Do I Change My Password?</a
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                <!-- billing card -->
                <div class="card">
                  <div class="card-body">
                    <!-- billing header -->
                    <h6 class="kb-title">
                      <i
                        data-feather="file-text"
                        class="font-medium-4 text-danger me-50"
                      ></i>
                      <span>Fatura Ayarları (5)</span>
                    </h6>

                    <div class="list-group list-group-circle mt-2">
                      <a
                        href="{{route("knowledgebase-questions")}}"
                        class="list-group-item text-body"
                        >Can I Contact A Salés Rep?</a
                      >
                      <a
                        href="{{route("knowledgebase-questions")}}"
                        class="list-group-item text-body"
                        >Do I Need To Pay VAT?</a
                      >
                      <a
                        href="{{route("knowledgebase-questions")}}"
                        class="list-group-item text-body"
                        >Can I Get A Refund?</a
                      >
                      <a
                        href="{{route("knowledgebase-questions")}}"
                        class="list-group-item text-body"
                        >Difference Annual & Monthly Billing</a
                      >
                      <a
                        href="{{route("knowledgebase-questions")}}"
                        class="list-group-item text-body"
                        >What Happens If The Price Increases?</a
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                <!-- knowhow card -->
                <div class="card">
                  <div class="card-body">
                    <!-- knowhow card header -->
                    <h6 class="kb-title">
                      <i
                        data-feather="help-circle"
                        class="font-medium-4 me-50"
                      ></i>
                      <span>Nasıl Kullanabilirim (4)</span>
                    </h6>
                    <div class="list-group list-group-circle mt-2">
                      <a
                        href="{{route("knowledgebase-questions")}}"
                        class="list-group-item text-body"
                        >Customization</a
                      >
                      <a
                        href="{{route("knowledgebase-questions")}}"
                        class="list-group-item text-body"
                        >Upgrading</a
                      >
                      <a
                        href="{{route("knowledgebase-questions")}}"
                        class="list-group-item text-body"
                        >Customizing Your Theme</a
                      >
                      <a
                        href="{{route("knowledgebase-questions")}}"
                        class="list-group-item text-body"
                        >Upgrading Your Theme</a
                      >
                    </div>
                  </div>
                </div>
              </div>
              <!-- no result -->
              <div class="col-12 text-center no-result no-items">
                <h4 class="mt-4">Arama Sonucu Bulunamadı!!</h4>
              </div>
            </div>
          </section>
          <!--/ Knowledge base category Content -->
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
