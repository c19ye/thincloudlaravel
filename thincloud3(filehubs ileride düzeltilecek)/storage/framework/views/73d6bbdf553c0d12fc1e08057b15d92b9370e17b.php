<?php $__env->startSection("title"); ?>
Anasayfa
<?php $__env->stopSection(); ?>
<?php $__env->startSection("breadcrumb"); ?>
<div
          class="content-header-left col-md-9 col-12 mt-50 ms-2 d-none d-sm-block"
        >
          <div class="row breadcrumbs-top">
            <div class="col-md-12 d-none d-md-block">
              <h2 class="content-header-title float-start mb-0 me-1">
                <?php echo $__env->yieldContent("title"); ?>
              </h2>
              <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">


                </ol>
              </div>
            </div>
          </div>
        </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("css"); ?>

<link
      rel="apple-touch-icon"
      href=<?php echo e(asset('app-assets/images/ico/apple-icon-120.png')); ?>

    />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href=<?php echo e(asset('app-assets/images/ico/favicon.')); ?>

    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
      rel="stylesheet"
    />

    <!-- BEGIN: Vendor CSS-->
    <link
      rel="stylesheet"
      type="text/css"
      href=<?php echo e(asset('app-assets/vendors/css/vendors.min.css')); ?>

    />
    <link
      rel="stylesheet"
      type="text/css"
      href=<?php echo e(asset('app-assets/vendors/css/forms/wizard/bs-stepper.min.css')); ?>

    />
    <link
      rel="stylesheet"
      type="text/css"
      href=<?php echo e(asset("app-assets/vendors/css/forms/select/select2.min.css")); ?>

    />
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link
      rel="stylesheet"
      type="text/css"
      href=<?php echo e(asset("app-assets/css/bootstrap.css")); ?>

    />
    <link
      rel="stylesheet"
      type="text/css"
      href=<?php echo e(asset("app-assets/css/bootstrap-extended.css")); ?>

    />
    <link
      rel="stylesheet"
      type="text/css"
      href=<?php echo e(asset("app-assets/css/colors.css")); ?>

    />
    <link
      rel="stylesheet"
      type="text/css"
      href=<?php echo e(asset("app-assets/css/components.css")); ?>

    />
    <link
      rel="stylesheet"
      type="text/css"
      href=<?php echo e(asset("app-assets/css/themes/dark-layout.css")); ?>

    />
    <link
      rel="stylesheet"
      type="text/css"
      href=<?php echo e(asset("app-assets/css/themes/bordered-layout.css")); ?>

    />
    <link
      rel="stylesheet"
      type="text/css"
      href=<?php echo e(asset("app-assets/css/themes/semi-dark-layout.css")); ?>

    />

    <!-- BEGIN: Page CSS-->
    <link
      rel="stylesheet"
      type="text/css"
      href=<?php echo e(asset("app-assets/css/core/menu/menu-types/vertical-menu.css")); ?>

    />
    <link
      rel="stylesheet"
      type="text/css"
      href=<?php echo e(asset("app-assets/css/plugins/forms/form-wizard.css")); ?>

    />
    <link
      rel="stylesheet"
      type="text/css"
      href=<?php echo e(asset("app-assets/css/plugins/forms/form-validation.css")); ?>

    />
    <link
      rel="stylesheet"
      type="text/css"
      href=<?php echo e(asset("app-assets/css/pages/authentication.css")); ?>

    />
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link
      rel="stylesheet"
      type="text/css"
      href=<?php echo e(asset("assets/css/style.css")); ?>

    />
    <!-- END: Custom CSS-->

<?php $__env->stopSection(); ?>



<?php $__env->startSection("content"); ?>

  <!-- BEGIN: Content-->
  <div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
      <div class="content-header row"></div>
      <div class="content-body">
        <!-- Dashboard Analytics Start -->
        <section id="dashboard-analytics">
          <div class="row">
            <!-- Greetings Card starts -->
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="card card-congratulations">
                <div class="card-body text-center">
                  <img
                    src=<?php echo e(asset("/app-assets/images/elements/decore-left.png")); ?>

                    class="congratulations-img-left"
                    alt="card-img-left"
                  />
                  <img
                    src=<?php echo e(asset("/app-assets/images/elements/decore-right.png")); ?>

                    class="congratulations-img-right"
                    alt="card-img-right"
                  />
                  <div class="avatar avatar-xl bg-primary shadow">
                    <div class="avatar-content">
                      <i data-feather="award" class="font-large-1"></i>
                    </div>
                  </div>
                  <div class="text-center">
                    <h1 class="mb-1 text-white">Hoşgeldin <?php echo e(auth()->user()->name); ?></h1>
                  </div>
                </div>
              </div>
            </div>
            <!-- Greetings Card ends -->

            <!-- Filled Tabs starts -->
            <div class="col-xl-12 col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Sanal Makinelerim</h4>
                </div>
                <div class="card-body">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a
                        class="nav-link active"
                        id="home-tab-fill"
                        data-bs-toggle="tab"
                        href="#home-fill"
                        role="tab"
                        aria-controls="home-fill"
                        aria-selected="true"
                        >Sanal Makine-1</a
                      >
                    </li>
                    <li class="nav-item">
                      <a
                        class="nav-link"
                        id="home-tab-fill"
                        data-bs-toggle="tab"
                        href="#home-fill"
                        role="tab"
                        aria-controls="home-fill"
                        aria-selected="true"
                        >Sanal Makine-2</a
                      >
                    </li>
                    <li class="nav-item">
                      <a
                        class="nav-link"
                        id="home-tab-fill"
                        data-bs-toggle="tab"
                        href="#home-fill"
                        role="tab"
                        aria-controls="home-fill"
                        aria-selected="true"
                        >Sanal Makine-3</a
                      >
                    </li>
                    <li class="nav-item">
                      <a
                        class="nav-link"
                        id="home-tab-fill"
                        data-bs-toggle="tab"
                        href="#home-fill"
                        role="tab"
                        aria-controls="home-fill"
                        aria-selected="true"
                        >Sanal Makine-4</a
                      >
                    </li>

                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content pt-1">
                    <div
                      class="tab-pane active"
                      id="home-fill"
                      role="tabpanel"
                      aria-labelledby="home-tab-fill"
                    >
                      <div class="row">
                        <div class="col-lg-4 col-12">
                          <div class="card btn-gradient-success">
                            <div
                              class="card-header d-flex justify-content-between align-items-center"
                            >
                              <h4 class="card-title ms-5 text-white">
                                Ağ Bant Genişliği
                              </h4>
                            </div>
                            <div class="card-body p-0">
                              <div class="ms-5">
                                <h1 class="ms-5 text-white">%52</h1>
                              </div>
                              <div class="progress progress-bar-white">
                                <div
                                  class="progress-bar"
                                  role="progressbar"
                                  aria-valuenow="25"
                                  aria-valuemin="25"
                                  aria-valuemax="100"
                                  style="width: 52%"
                                ></div>
                              </div>
                              <div class="row border-top text-center mx-0">
                                <div class="col-4 border-end py-1">
                                  <p class="card-text mb-0 text-white font-small-4">
                                    Geçen Ay
                                  </p>
                                  <h4 class="fw-bolder mb-0 text-white font-small-4">
                                    79.82
                                  </h4>
                                </div>
                                <div class="col-4 py-1 border-end">
                                  <p class="card-text mb-0 text-white font-small-4">
                                    % Değişim
                                  </p>
                                  <h4 class="fw-bolder mb-0 text-white font-small-4">
                                    -14.45
                                  </h4>
                                </div>
                                <div class="col-4 border-end py-1">
                                  <p class="card-text mb-0 text-white font-small-4">
                                    Kalan
                                  </p>
                                  <h4 class="fw-bolder mb-0 text-white font-small-4">
                                    21.29
                                  </h4>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-4 col-12">
                          <div class="card btn-gradient-warning">
                            <div
                              class="card-header d-flex justify-content-between align-items-center"
                            >
                              <h4 class="card-title ms-5 text-white">
                                Toplam Disk Kullanımı
                              </h4>
                            </div>
                            <div class="card-body p-0">
                              <div class="ms-5">
                                <h1 class="ms-5 text-white">%74.55</h1>
                              </div>
                              <div class="progress progress-bar-white">
                                <div
                                  class="progress-bar"
                                  role="progressbar"
                                  aria-valuenow="25"
                                  aria-valuemin="25"
                                  aria-valuemax="100"
                                  style="width: 74%"
                                ></div>
                              </div>
                              <div class="row border-top text-center mx-0">
                                <div class="col-4 border-end py-1">
                                  <p class="card-text text-white mb-0 font-small-4">
                                    Geçen Ay
                                  </p>
                                  <h4 class="fw-bolder mb-0 text-white font-small-4">
                                    29.82
                                  </h4>
                                </div>
                                <div class="col-4 py-1 border-end">
                                  <p class="card-text text-white mb-0 font-small-4">
                                    % Değişim
                                  </p>
                                  <h4 class="fw-bolder mb-0 text-white font-small-4">
                                    +44.45
                                  </h4>
                                </div>
                                <div class="col-4 border-end py-1">
                                  <p class="card-text text-white mb-0 font-small-4">
                                    Kalan
                                  </p>
                                  <h4 class="fw-bolder mb-0 text-white font-small-4">
                                    21.29
                                  </h4>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-12">
                          <div class="card btn-gradient-primary">
                            <div
                              class="card-header d-flex justify-content-between align-items-center"
                            >
                              <h4 class="card-title ms-5 text-white">
                                Bölümlerin Sağlığı
                              </h4>
                            </div>
                            <div class="card-body p-0">
                              <div class="ms-5">
                                <h1 class="ms-5 text-white">%93.13</h1>
                              </div>
                              <div class="progress progress-bar-white">
                                <div
                                  class="progress-bar"
                                  role="progressbar"
                                  aria-valuenow="25"
                                  aria-valuemin="25"
                                  aria-valuemax="100"
                                  style="width: 93%"
                                ></div>
                              </div>
                              <div class="row border-top text-center mx-0">
                                <div class="col-4 border-end py-1">
                                  <p class="card-text mb-0 text-white font-small-4">
                                    Geçen Ay
                                  </p>
                                  <h4 class="fw-bolder mb-0 text-white font-small-4">
                                    79.82
                                  </h4>
                                </div>
                                <div class="col-4 py-1 border-end">
                                  <p class="card-text mb-0 text-white font-small-4">
                                    % Değişim
                                  </p>
                                  <h4 class="fw-bolder mb-0 text-white font-small-4">
                                    -14.45
                                  </h4>
                                </div>
                                <div class="col-4 border-end py-1">
                                  <p class="card-text mb-0 text-white font-small-4">
                                    Kalan
                                  </p>
                                  <h4 class="fw-bolder mb-0 text-white font-small-4">
                                    21.29
                                  </h4>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-4 col-12">
                          <div class="card btn-gradient-info">
                            <div
                              class="card-header d-flex justify-content-between align-items-center"
                            >
                              <h4 class="card-title ms-5 text-white">
                                Ortalama Kullanım Süresi
                              </h4>
                            </div>
                            <div class="card-body p-0">
                              <div class="ms-5">
                                <h1 class="ms-5 text-white">7.3 Saat</h1>
                              </div>
                              <div class="progress progress-bar-white">
                                <div
                                  class="progress-bar"
                                  role="progressbar"
                                  aria-valuenow="25"
                                  aria-valuemin="25"
                                  aria-valuemax="100"
                                  style="width: 100%"
                                ></div>
                              </div>
                              <div class="row border-top text-center mx-0">
                                <div class="col-4 border-end py-1">
                                  <p class="card-text text-white mb-0">
                                    Geçen Ay
                                  </p>
                                  <h4 class="fw-bolder mb-0 text-white font-small-4">
                                    79.82
                                  </h4>
                                </div>
                                <div class="col-4 py-1 border-end">
                                  <p class="card-text text-white mb-0 font-small-4">
                                    % Değişim
                                  </p>
                                  <h4 class="fw-bolder mb-0 text-white font-small-4">
                                    -14.45
                                  </h4>
                                </div>
                                <div class="col-4 border-end py-1">
                                  <p class="card-text text-white mb-0 font-small-4">
                                    Geçen Hafta
                                  </p>
                                  <h4 class="fw-bolder mb-0 text-white font-small-4">
                                    6.9 Saat
                                  </h4>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-12">
                          <div class="card btn-gradient-danger">
                            <div
                              class="card-header d-flex justify-content-between align-items-center"
                            >
                              <h4 class="card-title ms-5 text-white">
                                Plan Kullanımı
                              </h4>
                            </div>
                            <div class="card-body p-0">
                              <div class="ms-5">
                                <h1 class="ms-5 text-white">20.13%</h1>
                              </div>
                              <div class="progress progress-bar-white">
                                <div
                                  class="progress-bar"
                                  role="progressbar"
                                  aria-valuenow="25"
                                  aria-valuemin="25"
                                  aria-valuemax="100"
                                  style="width: 20%"
                                ></div>
                              </div>
                              <div class="row border-top text-center mx-0">
                                <div class="col-4 border-end py-1">
                                  <p class="card-text mb-0 text-white font-small-4">
                                    Geçen Ay
                                  </p>
                                  <h4 class="fw-bolder mb-0 text-white font-small-4">
                                    79.82
                                  </h4>
                                </div>
                                <div class="col-4 py-1 border-end">
                                  <p class="card-text mb-0 text-white font-small-4">
                                    % Değişim
                                  </p>
                                  <h4 class="fw-bolder mb-0 text-white font-small-4">
                                    -14.45
                                  </h4>
                                </div>
                                <div class="col-4 border-end py-1">
                                  <p class="card-text mb-0 text-white font-small-4">
                                    Kalan
                                  </p>
                                  <h4 class="fw-bolder mb-0 text-white font-small-4">
                                    21.29
                                  </h4>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-12">
                          <div class="card btn-gradient-warning">
                            <div
                              class="card-header d-flex justify-content-between align-items-center"
                            >
                              <h4 class="card-title ms-1 text-white">
                                Thincloud İle Edilen Tasarruf
                              </h4>
                            </div>
                            <div class="card-body p-0">
                              <div class="ms-5">
                                <h1 class="ms-2 text-white">21% Tasarruf</h1>
                              </div>
                              <div class="progress progress-bar-white">
                                <div
                                  class="progress-bar"
                                  role="progressbar"
                                  aria-valuenow="25"
                                  aria-valuemin="25"
                                  aria-valuemax="100"
                                  style="width: 52%"
                                ></div>
                              </div>
                              <div class="row border-top text-center mx-0 ">
                                <div class="col-4 border-end py-1">
                                  <p class="card-text text-white mb-0 font-small-4">
                                    Enerji
                                  </p>
                                  <h4 class="fw-bolder font-small-4 mb-0 text-white">
                                    13$ Tasarruf
                                  </h4>
                                </div>
                                <div class="col-4 py-1 border-end">
                                  <p class="card-text text-white mb-0 font-small-4">
                                    Cihaz
                                  </p>
                                  <h4 class="fw-bolder font-small-4 mb-0 text-white">
                                    31$ Tasarruf
                                  </h4>
                                </div>
                                <div class="col-4 border-end py-1">
                                  <p class="card-text mb-0 text-white">
                                    Toplam
                                  </p>
                                  <h4 class="fw-bolder font-small-4 mb-0 text-white">
                                    44$ Tasarruf
                                  </h4>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6 col-12">
                          <div class="card">
                            <div class="card-body">
                              <div class="row pb-50">
                                <div
                                  class="col-sm-6 col-12 d-flex justify-content-between flex-column order-sm-1 order-2 mt-1 mt-sm-0"
                                >
                                  <div class="mb-1 mb-sm-0">
                                    <h2 class="fw-bolder mb-25">
                                      Kullanım Grafiği
                                    </h2>
                                  </div>
                                  <button
                                    type="button"
                                    class="btn btn-primary"
                                  >
                                    Detaya Bak
                                  </button>
                                </div>

                                <div
                                  class="col-sm-6 col-12 d-flex justify-content-between flex-column text-end order-sm-2 order-1"
                                >
                                  <div class="dropdown chart-dropdown">
                                    <button
                                      class="btn btn-sm border-0 dropdown-toggle p-50"
                                      type="button"
                                      id="dropdownItem5"
                                      data-bs-toggle="dropdown"
                                      aria-haspopup="true"
                                      aria-expanded="false"
                                    >
                                      Son 7 Gün
                                    </button>
                                    <div
                                      class="dropdown-menu dropdown-menu-end"
                                      aria-labelledby="dropdownItem5"
                                    >
                                      <a class="dropdown-item" href="#"
                                        >Son 15 Gün</a
                                      >
                                      <a class="dropdown-item" href="#"
                                        >Son 1 Ay</a
                                      >
                                      <a class="dropdown-item" href="#"
                                        >Son 1 Yıl</a
                                      >
                                    </div>
                                  </div>
                                  <div id="avg-sessions-chart"></div>
                                </div>
                              </div>
                              <hr />
                              <div class="row avg-sessions pt-50">
                                <div class="col-12 mb-2">
                                  <p class="mb-50">Goal: $100000</p>
                                  <div
                                    class="progress progress-bar-primary"
                                    style="height: 6px"
                                  >
                                    <div
                                      class="progress-bar"
                                      role="progressbar"
                                      aria-valuenow="50"
                                      aria-valuemin="50"
                                      aria-valuemax="100"
                                      style="width: 50%"
                                    ></div>
                                  </div>
                                </div>
                                <div class="col-12 mb-2">
                                  <p class="mb-50">Users: 100K</p>
                                  <div
                                    class="progress progress-bar-warning"
                                    style="height: 6px"
                                  >
                                    <div
                                      class="progress-bar"
                                      role="progressbar"
                                      aria-valuenow="60"
                                      aria-valuemin="60"
                                      aria-valuemax="100"
                                      style="width: 60%"
                                    ></div>
                                  </div>
                                </div>
                                <div class="col-12 mb-2">
                                  <p class="mb-50">Retention: 90%</p>
                                  <div
                                    class="progress progress-bar-danger"
                                    style="height: 6px"
                                  >
                                    <div
                                      class="progress-bar"
                                      role="progressbar"
                                      aria-valuenow="70"
                                      aria-valuemin="70"
                                      aria-valuemax="100"
                                      style="width: 70%"
                                    ></div>
                                  </div>
                                </div>
                                <div class="col-12 mb-2">
                                  <p class="mb-50">Duration: 1yr</p>
                                  <div
                                    class="progress progress-bar-success"
                                    style="height: 6px"
                                  >
                                    <div
                                      class="progress-bar"
                                      role="progressbar"
                                      aria-valuenow="90"
                                      aria-valuemin="90"
                                      aria-valuemax="100"
                                      style="width: 90%"
                                    ></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Avg Sessions Chart Card ends -->
                        <!-- Sessions Card -->
                        <div class="col-lg-6 col-12">
                          <div class="card">
                            <div
                              class="card-header d-flex justify-content-between align-items-end"
                            >
                              <h4>Cihaz Oturum Sayısı</h4>
                              <div class="dropdown chart-dropdown">
                                <button
                                  class="btn btn-sm border-0 dropdown-toggle px-50"
                                  type="button"
                                  id="dropdownItem1"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                >
                                  Son 7 Gün
                                </button>
                                <div
                                  class="dropdown-menu dropdown-menu-end"
                                  aria-labelledby="dropdownItem1"
                                >
                                  <a class="dropdown-item" href="#"
                                    >Son 15 Gün</a
                                  >
                                  <a class="dropdown-item" href="#"
                                    >Son 1 Ay</a
                                  >
                                  <a class="dropdown-item" href="#"
                                    >Son 1 Sene</a
                                  >
                                </div>
                              </div>
                            </div>
                            <div class="card-body">
                              <div id="session-chart" class="my-1"></div>
                              <div
                                class="d-flex justify-content-between mb-1"
                              >
                                <div class="d-flex align-items-center">
                                  <i
                                    data-feather="monitor"
                                    class="font-medium-2 text-primary"
                                  ></i>
                                  <span class="fw-bold ms-75 me-25"
                                    >Masaüstü</span
                                  >
                                  <span>- 58.6%</span>
                                </div>
                                <div>
                                  <span>2%</span>
                                  <i
                                    data-feather="arrow-up"
                                    class="text-success"
                                  ></i>
                                </div>
                              </div>
                              <div
                                class="d-flex justify-content-between mb-1"
                              >
                                <div class="d-flex align-items-center">
                                  <i
                                    data-feather="tablet"
                                    class="font-medium-2 text-warning"
                                  ></i>
                                  <span class="fw-bold ms-75 me-25"
                                    >Mobil</span
                                  >
                                  <span>- 34.9%</span>
                                </div>
                                <div>
                                  <span>8%</span>
                                  <i
                                    data-feather="arrow-up"
                                    class="text-success"
                                  ></i>
                                </div>
                              </div>
                              <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                  <i
                                    data-feather="tablet"
                                    class="font-medium-2 text-danger"
                                  ></i>
                                  <span class="fw-bold ms-75 me-25"
                                    >Tablet</span
                                  >
                                  <span>- 6.5%</span>
                                </div>
                                <div>
                                  <span>-5%</span>
                                  <i
                                    data-feather="arrow-down"
                                    class="text-danger"
                                  ></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--/ Sessions Card -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Filled Tabs ends -->
            <!--/ List DataTable -->
          </div>
        </section>
        <!-- Dashboard Analytics end -->
      </div>
    </div>
  </div>
  <!-- END: Content-->

<?php $__env->stopSection(); ?>



<?php $__env->startSection("js"); ?>
<!-- END: Footer-->

    <!-- BEGIN: Vendor JS-->
    <script src=<?php echo e(asset("app-assets/vendors/js/vendors.min.js")); ?>></script>
    <!-- BEGIN Vendor JS-->
  <?php echo e(asset('')); ?>

    <!-- BEGIN: Page Vendor JS-->
    <script src=<?php echo e(asset("app-assets/vendors/js/forms/wizard/bs-stepper.min.js")); ?>></script>
    <script src=<?php echo e(asset("app-assets/vendors/js/forms/select/select2.full.min.js")); ?>></script>
    <script src=<?php echo e(asset("app-assets/vendors/js/forms/validation/jquery.validate.min.js")); ?>></script>
    <script src=<?php echo e(asset("app-assets/vendors/js/forms/cleave/cleave.min.js")); ?>></script>
    <script src=<?php echo e(asset("app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js")); ?>></script>
    <script src=<?php echo e(asset("app-assets/vendors/js/charts/apexcharts.min.js")); ?>></script>
    <script src=<?php echo e(asset("app-assets/vendors/js/extensions/toastr.min.js")); ?>></script>
    <script src=<?php echo e(asset("app-assets/vendors/js/extensions/moment.min.js")); ?>></script>
    <script src=<?php echo e(asset("app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js")); ?>></script>
    <script src=<?php echo e(asset("app-assets/vendors/js/tables/datatable/datatables.buttons.min.js")); ?>></script>
    <script src=<?php echo e(asset("app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js")); ?>></script>
    <script src=<?php echo e(asset("app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js")); ?>></script>
    <script src=<?php echo e(asset("app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js")); ?>></script>

    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src=<?php echo e(asset("/app-assets/js/core/app-menu.js")); ?>></script>
    <script src=<?php echo e(asset("/app-assets/js/core/app.js")); ?>></script>

    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src=<?php echo e(asset("/app-assets/js/scripts/pages/auth-register.js")); ?>></script>
    <script src=<?php echo e(asset("/app-assets/js/scripts/pages/dashboard-analytics.js")); ?>></script>
    <script src=<?php echo e(asset("/app-assets/js/scripts/pages/app-invoice-list.js")); ?>></script>
    <script src=<?php echo e(asset("/app-assets/js/scripts/cards/card-analytics.js")); ?>></script>

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make("sabit.nav", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\thincloud3\resources\views/pages/index.blade.php ENDPATH**/ ?>