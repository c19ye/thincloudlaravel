@extends("layout")
@extends("sabit.nav")
@section("title")
    Bilgi Sayfası Sorular
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
                    <a href="/knowledgebase">Bilgi Sayfası</a>
                  </li><li class="breadcrumb-item">
                    <a href="/knowledgebase-category">Bilgi Sayfası Kategori</a>
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
          <!-- Knowledge base question Content  -->
          <section id="knowledge-base-question">
            <div class="row">
              <div class="col-lg-3 col-md-5 col-12 order-2 order-md-1">
                <div class="card">
                  <div class="card-body">
                    <h6 class="kb-title">
                      <i data-feather="info" class="font-medium-4 me-50"></i
                      ><span>Alakalı Sorular</span>
                    </h6>

                    <div class="list-group list-group-circle mt-1">
                      <a href="#" class="list-group-item text-body"
                        >Şifrem Ne Kadar Güvenli?</a
                      >
                      <a href="#" class="list-group-item text-body"
                        >Can I Change My Username?</a
                      >
                      <a href="#" class="list-group-item text-body"
                        >Where Can I Upload My Avatar?</a
                      >
                      <a href="#" class="list-group-item text-body"
                        >How Do I Change My Timezone?</a
                      >
                      <a href="#" class="list-group-item text-body"
                        >How Do I Change My Password?</a
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-9 col-md-7 col-12 order-1 order-md-2">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title mb-1">
                      <i
                        data-feather="smartphone"
                        class="font-medium-5 me-25"
                      ></i>
                      <span>Why Was My Developer Application Rejected?</span>
                    </h4>
                    <p class="mb-2">Last updated on 10 Dec 2018</p>
                    <p>
                      It has been said that astronomy is a humbling and
                      character-building experience. There is perhaps no better
                      demonstration of the folly of human conceits than this
                      distant image of our tiny world. To me, it underscores our
                      responsibility to deal more kindly with one another, and
                      to preserve and cherish the pale blue dot, the only home
                      we’ve ever known. The Earth is a very small stage in a
                      vast cosmic arena. Think of the rivers of blood spilled by
                      all those generals and emperors so that, in glory and
                      triumph, they could become the momentary masters of a
                      fraction of a dot. Think of the endless cruelties visited
                      by the inhabitants of one corner of this pixel on the
                      scarcely distinguishable inhabitants of some other corner,
                      how frequent their misunderstandings, how eager they are
                      to kill one another, how fervent their hatreds.
                    </p>
                    <img
                      src="../../../app-assets/images/pages/kb-image.jpg"
                      class="img-fluid rounded w-100 my-1"
                      alt="article-img"
                    />
                    <h5 class="my-1">Houston</h5>
                    <p>
                      that may have seemed like a very long final phase. The
                      auto targeting was taking us right into a … crater, with a
                      large number of big boulders and rocks … and it required …
                      flying manually over the rock field to find a reasonably
                      good area.
                    </p>
                    <div class="list-group list-group-circle ms-2 mt-2">
                      <a href="#" class="list-group-item text-body">
                        I am a stranger. I come in peace. Take me to your leader
                        and there will be a massive reward for you in eternity.
                      </a>
                      <a href="#" class="list-group-item text-body">
                        It’s just mind-blowingly awesome. I apologize, and I
                        wish I was more articulate, but it’s hard to be
                        articulate when your mind’s blown—but in a very good
                        way.
                      </a>
                      <a href="#" class="list-group-item text-body">
                        A good rule for rocket experimenters to follow is this
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Knowledge base question Content ends -->
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
