@extends("layout")

@section("title")
    SSS
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
      href="../../../app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css"
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
        <div class="content-header row"></div>
        <div class="content-body">
          <!-- search header -->
          <section id="faq-search-filter">
            <div
              class="card faq-search"
              style="
                background-image: url('../../../app-assets/images/banner/banner.png');
              "
            >
              <div class="card-body text-center">
                <!-- main title -->
                <h2 class="text-primary">Bazı Sorularınızı Cevaplayalım</h2>

                <!-- subtitle -->
                <p class="card-text mb-2">
                  ya da daha hızlı yardım alabilmek için bir kategori seçin.
                </p>

                <!-- search input -->
                <form class="faq-search-input">
                  <div class="input-group input-group-merge">
                    <div class="input-group-text">
                      <i data-feather="search"></i>
                    </div>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Soru arayın..."
                    />
                  </div>
                </form>
              </div>
            </div>
          </section>
          <!-- /search header -->

          <!-- frequently asked questions tabs pills -->
          <section id="faq-tabs">
            <!-- vertical tab pill -->
            <div class="row">
              <div class="col-lg-3 col-md-4 col-sm-12">
                <div
                  class="faq-navigation d-flex justify-content-between flex-column mb-2 mb-md-0"
                >
                  <!-- pill tabs navigation -->
                  <ul class="nav nav-pills nav-left flex-column" role="tablist">
                    <!-- payment -->
                    <li class="nav-item">
                      <a
                        class="nav-link active"
                        id="payment"
                        data-bs-toggle="pill"
                        href="#faq-payment"
                        aria-expanded="true"
                        role="tab"
                      >
                        <i
                          data-feather="credit-card"
                          class="font-medium-3 me-1"
                        ></i>
                        <span class="fw-bold">Ödemeler</span>
                      </a>
                    </li>
                    <!-- cancellation and return -->
                    <li class="nav-item">
                      <a
                        class="nav-link"
                        id="cancellation-return"
                        data-bs-toggle="pill"
                        href="#faq-cancellation-return"
                        aria-expanded="false"
                        role="tab"
                      >
                        <i
                          data-feather="refresh-cw"
                          class="font-medium-3 me-1"
                        ></i>
                        <span class="fw-bold">İptal Etme ve Geri İade</span>
                      </a>
                    </li>

                    <!-- my order -->
                    <li class="nav-item">
                      <a
                        class="nav-link"
                        id="my-order"
                        data-bs-toggle="pill"
                        href="#faq-my-order"
                        aria-expanded="false"
                        role="tab"
                      >
                        <i
                          data-feather="package"
                          class="font-medium-3 me-1"
                        ></i>
                        <span class="fw-bold">Siparişlerim</span>
                      </a>
                    </li>

                    <!-- product and services-->
                    <li class="nav-item">
                      <a
                        class="nav-link"
                        id="product-services"
                        data-bs-toggle="pill"
                        href="#faq-product-services"
                        aria-expanded="false"
                        role="tab"
                      >
                        <i
                          data-feather="settings"
                          class="font-medium-3 me-1"
                        ></i>
                        <span class="fw-bold">Ürün ve Hizmetler</span>
                      </a>
                    </li>
                  </ul>

                  <!-- FAQ image -->
                  <img
                    src="../../../app-assets/images/illustration/faq-illustrations.svg"
                    class="img-fluid d-none d-md-block"
                    alt="demand img"
                  />
                </div>
              </div>

              <div class="col-lg-9 col-md-8 col-sm-12">
                <!-- pill tabs tab content -->
                <div class="tab-content">
                  <!-- payment panel -->
                  <div
                    role="tabpanel"
                    class="tab-pane active"
                    id="faq-payment"
                    aria-labelledby="payment"
                    aria-expanded="true"
                  >
                    <!-- icon and header -->
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-tag bg-light-primary me-1">
                        <i data-feather="credit-card" class="font-medium-4"></i>
                      </div>
                      <div>
                        <h4 class="mb-0">Ödemeler</h4>
                      </div>
                    </div>

                    <!-- frequent answer and question  collapse  -->
                    <div
                      class="accordion accordion-margin mt-2"
                      id="faq-payment-qna"
                    >
                      <div class="card accordion-item">
                        <h2 class="accordion-header" id="paymentOne">
                          <button
                            class="accordion-button collapsed"
                            data-bs-toggle="collapse"
                            role="button"
                            data-bs-target="#faq-payment-one"
                            aria-expanded="false"
                            aria-controls="faq-payment-one"
                          >
                            Aboneliğim otomatik olarak yenileniyor mu?
                          </button>
                        </h2>

                        <div
                          id="faq-payment-one"
                          class="collapse accordion-collapse"
                          aria-labelledby="paymentOne"
                          data-bs-parent="#faq-payment-qna"
                        >
                          <div class="accordion-body">
                            Lorem ipsum dolor sit amet consectetur, adipisicing
                            elit. Quae consectetur excepturi reprehenderit porro
                            iusto earum vel, quam error dolorum sint
                            exercitationem qui rem reiciendis voluptate animi
                            fuga iure omnis corrupti!
                          </div>
                        </div>
                      </div>
                      <div class="card accordion-item">
                        <h2 class="accordion-header" id="paymentTwo">
                          <button
                            class="accordion-button"
                            data-bs-toggle="collapse"
                            role="button"
                            data-bs-target="#faq-payment-two"
                            aria-expanded="true"
                            aria-controls="faq-payment-two"
                          >
                            Sanal makinemi başka insanlara erişilebilir
                            yapabilir miyim?
                          </button>
                        </h2>
                        <div
                          id="faq-payment-two"
                          class="collapse show"
                          aria-labelledby="paymentTwo"
                          data-bs-parent="#faq-payment-qna"
                        >
                          <div class="accordion-body">
                            Sweet pie candy jelly. Sesame snaps biscuit sugar
                            plum. Sweet roll topping fruitcake. Caramels
                            liquorice biscuit ice cream fruitcake cotton candy
                            tart. Donut caramels gingerbread jelly-o gingerbread
                            pudding. Gummi bears pastry marshmallow candy canes
                            pie. Pie apple pie carrot cake.
                          </div>
                        </div>
                      </div>
                      <div class="card accordion-item">
                        <h2 class="accordion-header" id="paymentThree">
                          <button
                            class="accordion-button collapsed"
                            data-bs-toggle="collapse"
                            role="button"
                            data-bs-target="#faq-payment-three"
                            aria-expanded="false"
                            aria-controls="faq-payment-three"
                          >
                            Non-exclusive ne demek?
                          </button>
                        </h2>
                        <div
                          id="faq-payment-three"
                          class="collapse"
                          aria-labelledby="paymentThree"
                          data-bs-parent="#faq-payment-qna"
                        >
                          <div class="accordion-body">
                            Tart gummies dragée lollipop fruitcake pastry oat
                            cake. Cookie jelly jelly macaroon icing jelly beans
                            soufflé cake sweet. Macaroon sesame snaps cheesecake
                            tart cake sugar plum. Dessert jelly-o sweet muffin
                            chocolate candy pie tootsie roll marzipan.
                          </div>
                        </div>
                      </div>
                      <div class="card accordion-item">
                        <h2 class="accordion-header" id="paymentFour">
                          <button
                            class="accordion-button collapsed"
                            data-bs-toggle="collapse"
                            role="button"
                            data-bs-target="#faq-payment-four"
                            aria-expanded="false"
                            aria-controls="faq-payment-four"
                          >
                            Planlar arasındaki farklar nelerdir?
                          </button>
                        </h2>
                        <div
                          id="faq-payment-four"
                          class="collapse accordion-collapse"
                          aria-labelledby="paymentFour"
                          data-bs-parent="#faq-payment-qna"
                        >
                          <div class="accordion-body">
                            Cheesecake muffin cupcake dragée lemon drops
                            tiramisu cake gummies chocolate cake. Marshmallow
                            tart croissant. Tart dessert tiramisu marzipan
                            lollipop lemon drops. Cake bonbon bonbon gummi bears
                            topping jelly beans brownie jujubes muffin. Donut
                            croissant jelly-o cake marzipan. Liquorice marzipan
                            cookie wafer tootsie roll. Tootsie roll sweet
                            cupcake.
                          </div>
                        </div>
                      </div>
                      <div class="card accordion-item">
                        <h2 class="accordion-header" id="paymentFive">
                          <button
                            class="accordion-button collapsed"
                            data-bs-toggle="collapse"
                            role="button"
                            data-bs-target="#faq-payment-five"
                            aria-expanded="false"
                            aria-controls="faq-payment-five"
                          >
                            Aboneliğimi yenilemek için sürekli kart bilgilerimi
                            mi girmeliyim?
                          </button>
                        </h2>
                        <div
                          id="faq-payment-five"
                          class="collapse accordion-collapse"
                          aria-labelledby="paymentFive"
                          data-bs-parent="#faq-payment-qna"
                        >
                          <div class="accordion-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore
                            eu fugiat nulla pariatur.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- cancellation return  -->
                  <div
                    class="tab-pane"
                    id="faq-cancellation-return"
                    role="tabpanel"
                    aria-labelledby="cancellation-return"
                    aria-expanded="false"
                  >
                    <!-- icon and header -->
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-tag bg-light-primary me-1">
                        <i data-feather="refresh-cw" class="font-medium-4"></i>
                      </div>
                      <div>
                        <h4 class="mb-0">İptal Etme ve Geri Ödemeler</h4>
                      </div>
                    </div>

                    <!-- frequent answer and question  collapse  -->
                    <div
                      class="accordion accordion-margin mt-2"
                      id="faq-cancellation-qna"
                    >
                      <div class="card accordion-item">
                        <h2 class="accordion-header" id="cancellationOne">
                          <button
                            class="accordion-button collapsed"
                            data-bs-toggle="collapse"
                            role="button"
                            data-bs-target="#faq-cancellation-one"
                            aria-expanded="false"
                            aria-controls="faq-cancellation-one"
                          >
                            Aboneliğim yenilenir yenilenmez iptal ettim. Geri
                            ödeme alabilir miyim?
                          </button>
                        </h2>

                        <div
                          id="faq-cancellation-one"
                          class="collapse"
                          aria-labelledby="cancellationOne"
                          data-bs-parent="#faq-cancellation-qna"
                        >
                          <div class="accordion-body">
                            Pastry pudding cookie toffee bonbon jujubes jujubes
                            powder topping. Jelly beans gummi bears sweet roll
                            bonbon muffin liquorice. Wafer lollipop sesame
                            snaps. Brownie macaroon cookie muffin cupcake candy
                            caramels tiramisu. Oat cake chocolate cake sweet
                            jelly-o brownie biscuit marzipan. Jujubes donut
                            marzipan chocolate bar. Jujubes sugar plum jelly
                            beans tiramisu icing cheesecake.
                          </div>
                        </div>
                      </div>
                      <div class="card accordion-item">
                        <h2 class="accordion-header" id="cancellationTwo">
                          <button
                            class="accordion-button collapsed"
                            data-bs-toggle="collapse"
                            role="button"
                            data-bs-target="#faq-cancellation-two"
                            aria-expanded="false"
                            aria-controls="faq-cancellation-two"
                          >
                            Size ulaşmak istediğimde telefon numaranızı nereden
                            bulabilirim?
                          </button>
                        </h2>
                        <div
                          id="faq-cancellation-two"
                          class="collapse"
                          aria-labelledby="cancellationTwo"
                          data-bs-parent="#faq-cancellation-qna"
                        >
                          <div class="accordion-body">
                            Sweet pie candy jelly. Sesame snaps biscuit sugar
                            plum. Sweet roll topping fruitcake. Caramels
                            liquorice biscuit ice cream fruitcake cotton candy
                            tart. Donut caramels gingerbread jelly-o gingerbread
                            pudding. Gummi bears pastry marshmallow candy canes
                            pie. Pie apple pie carrot cake.
                          </div>
                        </div>
                      </div>
                      <div class="card accordion-item">
                        <h2 class="accordion-header" id="cancellationThree">
                          <button
                            class="accordion-button collapsed"
                            data-bs-toggle="collapse"
                            role="button"
                            data-bs-target="#faq-cancellation-three"
                            aria-expanded="false"
                            aria-controls="faq-cancellation-three"
                          >
                            Aboneliğimi nasıl iptal eebilirim?
                          </button>
                        </h2>
                        <div
                          id="faq-cancellation-three"
                          class="collapse"
                          aria-labelledby="cancellationThree"
                          data-bs-parent="#faq-cancellation-qna"
                        >
                          <div class="accordion-body">
                            Tart gummies dragée lollipop fruitcake pastry oat
                            cake. Cookie jelly jelly macaroon icing jelly beans
                            soufflé cake sweet. Macaroon sesame snaps cheesecake
                            tart cake sugar plum. Dessert jelly-o sweet muffin
                            chocolate candy pie tootsie roll marzipan. Carrot
                            cake marshmallow pastry. Bonbon biscuit pastry
                            topping toffee dessert gummies. Topping apple pie
                            pie croissant cotton candy dessert tiramisu.
                          </div>
                        </div>
                      </div>
                      <div class="card accordion-item">
                        <h2 class="accordion-header" id="cancellationFive">
                          <button
                            class="accordion-button collapsed"
                            data-bs-toggle="collapse"
                            role="button"
                            data-bs-target="#faq-cancellation-five"
                            aria-expanded="false"
                            aria-controls="faq-cancellation-five"
                          >
                            Fatura bilgilerimdeki adresimi nasıl
                            değiştirebilirim?
                          </button>
                        </h2>
                        <div
                          id="faq-cancellation-five"
                          class="collapse"
                          aria-labelledby="cancellationFive"
                          data-bs-parent="#faq-cancellation-qna"
                        >
                          <div class="accordion-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore
                            eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia
                            deserunt mollit anim id est laborum.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- my order -->
                  <div
                    class="tab-pane"
                    id="faq-my-order"
                    role="tabpanel"
                    aria-labelledby="my-order"
                    aria-expanded="false"
                  >
                    <!-- icon and header -->
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-tag bg-light-primary me-1">
                        <i data-feather="package" class="font-medium-4"></i>
                      </div>
                      <div>
                        <h4 class="mb-0">Siparişlerim</h4>
                      </div>
                    </div>

                    <!-- frequent answer and question  collapse  -->
                    <div
                      class="accordion accordion-margin mt-2"
                      id="faq-my-order-qna"
                    >
                      <div class="card accordion-item">
                        <h2 class="accordion-header" id="myOrderOne">
                          <button
                            class="accordion-button collapsed"
                            data-bs-toggle="collapse"
                            role="button"
                            data-bs-target="#faq-my-order-one"
                            aria-expanded="false"
                            aria-controls="faq-my-order-one"
                          >
                            İptal edilen siparişimin parasını henüz alamadım. Ne
                            yapmalıyım?
                          </button>
                        </h2>

                        <div
                          id="faq-my-order-one"
                          class="collapse accordion-collapse"
                          aria-labelledby="myOrderOne"
                          data-bs-parent="#faq-my-order-qna"
                        >
                          <div class="accordion-body">
                            Pastry pudding cookie toffee bonbon jujubes jujubes
                            powder topping. Jelly beans gummi bears sweet roll
                            bonbon muffin liquorice. Wafer lollipop sesame
                            snaps. Brownie macaroon cookie muffin cupcake candy
                            caramels tiramisu. Oat cake chocolate cake sweet
                            jelly-o brownie biscuit marzipan. Jujubes donut
                            marzipan chocolate bar. Jujubes sugar plum jelly
                            beans tiramisu icing cheesecake.
                          </div>
                        </div>
                      </div>
                      <div class="card accordion-item">
                        <h2 class="accordion-header" id="myOrderTwo">
                          <button
                            class="accordion-button collapsed"
                            data-bs-toggle="collapse"
                            role="button"
                            data-bs-target="#faq-my-order-two"
                            aria-expanded="false"
                            aria-controls="faq-my-order-two"
                          >
                            I haven’t received the refund of my returned
                            shipment. What do I do?
                          </button>
                        </h2>
                        <div
                          id="faq-my-order-two"
                          class="collapse accordion-collapse"
                          aria-labelledby="myOrderTwo"
                          data-bs-parent="#faq-my-order-qna"
                        >
                          <div class="accordion-body">
                            Sweet pie candy jelly. Sesame snaps biscuit sugar
                            plum. Sweet roll topping fruitcake. Caramels
                            liquorice biscuit ice cream fruitcake cotton candy
                            tart. Donut caramels gingerbread jelly-o gingerbread
                            pudding. Gummi bears pastry marshmallow candy canes
                            pie. Pie apple pie carrot cake.
                          </div>
                        </div>
                      </div>
                      <div class="card accordion-item">
                        <h2 class="accordion-header" id="myOrderThree">
                          <button
                            class="accordion-button collapsed"
                            data-bs-toggle="collapse"
                            role="button"
                            data-bs-target="#faq-my-order-three"
                            aria-expanded="false"
                            aria-controls="faq-my-order-three"
                          >
                            How can I ship my order to an international
                            location?
                          </button>
                        </h2>
                        <div
                          id="faq-my-order-three"
                          class="collapse"
                          aria-labelledby="myOrderThree"
                          data-bs-parent="#faq-my-order-qna"
                        >
                          <div class="accordion-body">
                            Tart gummies dragée lollipop fruitcake pastry oat
                            cake. Cookie jelly jelly macaroon icing jelly beans
                            soufflé cake sweet. Macaroon sesame snaps cheesecake
                            tart cake sugar plum. Dessert jelly-o sweet muffin
                            chocolate candy pie tootsie roll marzipan. Carrot
                            cake marshmallow pastry. Bonbon biscuit pastry
                            topping toffee dessert gummies. Topping apple pie
                            pie croissant cotton candy dessert tiramisu.
                          </div>
                        </div>
                      </div>
                      <div class="card accordion-item">
                        <h2 class="accordion-header" id="myOrderFour">
                          <button
                            class="accordion-button collapsed"
                            data-bs-toggle="collapse"
                            role="button"
                            data-bs-target="#faq-my-order-four"
                            aria-expanded="false"
                            aria-controls="faq-my-order-four"
                          >
                            I missed the delivery of my order today. What should
                            I do?
                          </button>
                        </h2>
                        <div
                          id="faq-my-order-four"
                          class="collapse"
                          aria-labelledby="myOrderFour"
                          data-bs-parent="#faq-my-order-qna"
                        >
                          <div class="accordion-body">
                            Cheesecake muffin cupcake dragée lemon drops
                            tiramisu cake gummies chocolate cake. Marshmallow
                            tart croissant. Tart dessert tiramisu marzipan
                            lollipop lemon drops. Cake bonbon bonbon gummi bears
                            topping jelly beans brownie jujubes muffin. Donut
                            croissant jelly-o cake marzipan. Liquorice marzipan
                            cookie wafer tootsie roll. Tootsie roll sweet
                            cupcake.
                          </div>
                        </div>
                      </div>
                      <div class="card accordion-item">
                        <h2 class="accordion-header" id="myOrderFive">
                          <button
                            class="accordion-button collapsed"
                            data-bs-toggle="collapse"
                            role="button"
                            data-bs-target="#faq-my-order-five"
                            aria-expanded="false"
                            aria-controls="faq-my-order-five"
                          >
                            The delivery of my order is delayed. What should I
                            do?
                          </button>
                        </h2>
                        <div
                          id="faq-my-order-five"
                          class="collapse"
                          aria-labelledby="myOrderFive"
                          data-bs-parent="#faq-my-order-qna"
                        >
                          <div class="accordion-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore
                            eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia
                            deserunt mollit anim id est laborum.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- product services -->
                  <div
                    class="tab-pane"
                    id="faq-product-services"
                    role="tabpanel"
                    aria-labelledby="product-services"
                    aria-expanded="false"
                  >
                    <!-- icon and header -->
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-tag bg-light-primary me-1">
                        <i data-feather="settings" class="font-medium-4"></i>
                      </div>
                      <div>
                        <h4 class="mb-0">Ürün ve Hizmetler</h4>
                      </div>
                    </div>

                    <!-- frequent answer and question  collapse  -->
                    <div
                      class="accordion accordion-margin mt-2"
                      id="faq-product-qna"
                    >
                      <div class="card accordion-item">
                        <h2 class="accordion-header" id="productOne">
                          <button
                            class="accordion-button collapsed"
                            data-bs-toggle="collapse"
                            role="button"
                            data-bs-target="#faq-product-one"
                            aria-expanded="false"
                            aria-controls="faq-product-one"
                          >
                            How can I register a complaint against the courier
                            executive who came to deliver my order?
                          </button>
                        </h2>

                        <div
                          id="faq-product-one"
                          class="collapse accordion-collapse"
                          aria-labelledby="productOne"
                          data-bs-parent="#faq-product-qna"
                        >
                          <div class="accordion-body">
                            Pastry pudding cookie toffee bonbon jujubes jujubes
                            powder topping. Jelly beans gummi bears sweet roll
                            bonbon muffin liquorice. Wafer lollipop sesame
                            snaps. Brownie macaroon cookie muffin cupcake candy
                            caramels tiramisu. Oat cake chocolate cake sweet
                            jelly-o brownie biscuit marzipan. Jujubes donut
                            marzipan chocolate bar. Jujubes sugar plum jelly
                            beans tiramisu icing cheesecake.
                          </div>
                        </div>
                      </div>
                      <div class="card accordion-item">
                        <h2 class="accordion-header" id="productTwo">
                          <button
                            class="accordion-button collapsed"
                            data-bs-toggle="collapse"
                            role="button"
                            data-bs-target="#faq-product-two"
                            aria-expanded="false"
                            aria-controls="faq-product-two"
                          >
                            The status for my shipment shows as ‘not picked up’.
                            What do I do?
                          </button>
                        </h2>
                        <div
                          id="faq-product-two"
                          class="collapse accordion-collapse"
                          aria-labelledby="productTwo"
                          data-bs-parent="#faq-product-qna"
                        >
                          <div class="accordion-body">
                            Sweet pie candy jelly. Sesame snaps biscuit sugar
                            plum. Sweet roll topping fruitcake. Caramels
                            liquorice biscuit ice cream fruitcake cotton candy
                            tart. Donut caramels gingerbread jelly-o gingerbread
                            pudding. Gummi bears pastry marshmallow candy canes
                            pie. Pie apple pie carrot cake.
                          </div>
                        </div>
                      </div>
                      <div class="card accordion-item">
                        <h2 class="accordion-header" id="productThree">
                          <button
                            class="accordion-button collapsed"
                            data-bs-toggle="collapse"
                            role="button"
                            data-bs-target="#faq-product-three"
                            aria-expanded="false"
                            aria-controls="faq-product-three"
                          >
                            How can I get a proof of delivery for my shipment?
                          </button>
                        </h2>
                        <div
                          id="faq-product-three"
                          class="collapse"
                          aria-labelledby="productThree"
                          data-bs-parent="#faq-product-qna"
                        >
                          <div class="accordion-body">
                            Tart gummies dragée lollipop fruitcake pastry oat
                            cake. Cookie jelly jelly macaroon icing jelly beans
                            soufflé cake sweet. Macaroon sesame snaps cheesecake
                            tart cake sugar plum. Dessert jelly-o sweet muffin
                            chocolate candy pie tootsie roll marzipan. Carrot
                            cake marshmallow pastry. Bonbon biscuit pastry
                            topping toffee dessert gummies. Topping apple pie
                            pie croissant cotton candy dessert tiramisu.
                          </div>
                        </div>
                      </div>
                      <div class="card accordion-item">
                        <h2 class="accordion-header" id="productFour">
                          <button
                            class="accordion-button collapsed"
                            data-bs-toggle="collapse"
                            role="button"
                            data-bs-target="#faq-product-four"
                            aria-expanded="false"
                            aria-controls="faq-product-four"
                          >
                            Hizmetlerinizden nasıl yararlanabilirim?
                          </button>
                        </h2>
                        <div
                          id="faq-product-four"
                          class="collapse accordion-collapse"
                          aria-labelledby="productFour"
                          data-bs-parent="#faq-product-qna"
                        >
                          <div class="accordion-body">
                            Cheesecake muffin cupcake dragée lemon drops
                            tiramisu cake gummies chocolate cake. Marshmallow
                            tart croissant. Tart dessert tiramisu marzipan
                            lollipop lemon drops. Cake bonbon bonbon gummi bears
                            topping jelly beans brownie jujubes muffin. Donut
                            croissant jelly-o cake marzipan. Liquorice marzipan
                            cookie wafer tootsie roll. Tootsie roll sweet
                            cupcake.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- / frequently asked questions tabs pills -->

          <!-- contact us -->
          <section class="faq-contact">
            <div class="row mt-5 pt-75">
              <div class="col-12 text-center">
                <h2>Hala sorularınız mı var??</h2>
                <p class="mb-3">
                  Eğer sık sorulan sorular kısmında sorunuzu bulamadıysanız, her
                  zaman bizimle iletişime geçebilirsiniz. Size cevap vermekten
                  her zaman mutluluk duyarız.
                </p>
              </div>
              <div class="col-sm-6">
                <div class="card text-center faq-contact-card shadow-none py-1">
                  <div class="accordion-body">
                    <div
                      class="avatar avatar-tag bg-light-primary mb-2 mx-auto"
                    >
                      <i data-feather="phone-call" class="font-medium-3"></i>
                    </div>
                    <h4>+ (555) 555 5555</h4>
                    <span class="text-body"
                      >Size cevap vermekten mutluluk duyarız!</span
                    >
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card text-center faq-contact-card shadow-none py-1">
                  <div class="accordion-body">
                    <div
                      class="avatar avatar-tag bg-light-primary mb-2 mx-auto"
                    >
                      <i data-feather="mail" class="font-medium-3"></i>
                    </div>
                    <h4>hello@help.com</h4>
                    <span class="text-body"
                      >Hızlı cevap almak için en iyi yöntem!</span
                    >
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!--/ contact us -->
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
