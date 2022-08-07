@extends('layout')

@section('title')
    Planlarım
@endsection

@section('css')
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png" />
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet" />

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css" />
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.css" />
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.css" />
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.css" />
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/dark-layout.css" />
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/bordered-layout.css" />
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/semi-dark-layout.css" />

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.css" />
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/page-pricing.css" />
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/page-faq.css" />
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css" />
    <!-- END: Custom CSS-->
@endsection

@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
          <div class="content-body">
            <section id="pricing-plan ">
              <!-- title text -->
              <div class="text-center">
                <h1 class="">Üyelik Planları</h1>
                <br />
                <br />
              </div>
              <!--/ title text -->

              <!-- pricing plan cards -->
              <section id="faq-tabs">
                <!-- vertical tab pill -->
                <div class="row">
                  <div class="col-lg-2 col-md-12 col-sm-12 ">
                    <div
                      class="d-flex justify-content-between flex-column mb-2 mb-md-0 overflow-auto pe-2"
                    >
                      <!-- pill tabs navigation -->
                      <ul
                        class="nav nav-pills nav-left flex-column"
                        role="tablist"
                      >
                        <li class="mx-auto mb-2"><h4>Sanal Bilgisayarlar</h4></li>
                        <!-- payment -->
                        <li class="nav-item mb-2">
                          <a
                            class="nav-link active"
                            id="vm1"
                            data-bs-toggle="pill"
                            href="#myplans-vm1"
                            aria-expanded="true"
                            role="tab"
                          >
                            <i data-feather="server"></i>
                            <span class="fw-bold">VM-1</span>
                          </a>
                        </li>
                        <li class="nav-item mb-2">
                          <a
                            class="nav-link"
                            id="vm2"
                            data-bs-toggle="pill"
                            href="#myplans-vm2"
                            aria-expanded="true"
                            role="tab"
                          >
                            <i data-feather="server"></i>
                            <span class="fw-bold">VM-2</span>
                          </a>
                        </li>
                        <li class="nav-item mb-2">
                          <a
                            class="nav-link"
                            id="vm3"
                            data-bs-toggle="pill"
                            href="#myplans-vm3"
                            aria-expanded="true"
                            role="tab"
                          >
                            <i data-feather="server"></i>
                            <span class="fw-bold">VM-3</span>
                          </a>
                        </li>
                      </ul>

                      <!-- FAQ image -->
                    </div>
                  </div>

                  <div class="col-lg-10 col-md-12 col-sm-12">
                    <!-- pill tabs tab content -->
                    <div class="tab-content">
                      <!-- VM-1 -->
                      <div
                        role="tabpanel"
                        class="tab-pane active"
                        id="myplans-vm1"
                        aria-labelledby="vm1"
                        aria-expanded="true"
                      >
                        <div class="row pricing-card">
                          <div
                            class="col-12 col-sm-offset-2 col-sm-10 col-md-12 col-lg-offset-2 col-lg-12 mx-auto"
                          >
                            <div class="row">
                              <!-- basic plan -->
                              <div class="col-12 col-md-3">
                                <div class="card basic-pricing text-center">
                                  <div
                                    class="card-body height-600 position-relative"
                                  >
                                    <img
                                      src="../../../app-assets/images/illustration/Pot1.svg"
                                      class="mb-2 mt-5"
                                      alt="svg img"
                                    />
                                    <h3>Temel</h3>
                                    <div class="annual-plan">
                                      <div class="plan-price mt-2">
                                        <sup
                                          class="font-medium-1 fw-bold text-primary"
                                          >₺</sup
                                        >
                                        <span
                                          class="pricing-basic-value fw-bolder text-primary"
                                          >9.99</span
                                        >
                                        <sub
                                          class="pricing-duration text-body font-medium-1 fw-bold"
                                          >/Aylık</sub
                                        >
                                      </div>
                                      <small
                                        class="annual-pricing d-none text-muted"
                                      ></small>
                                    </div>
                                    <div class="">
                                      <ul
                                        class="list-group list-group-circle text-start"
                                      >
                                        <li class="list-group-item">
                                          Kişisel Kullanım
                                        </li>
                                        <li class="list-group-item">
                                          Temel CPU/RAM
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="row">
                                      <div
                                        class="divider divider-primary position-absolute bottom-0 start-0 translate-middle-y"
                                      >
                                        <div class="divider-text">
                                          Bitiş: Jun 02 2022
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <button class="btn btn-outline-success m-2">
                                    Planınız
                                  </button>
                                </div>
                              </div>
                              <!--/ basic plan -->

                              <!-- standard plan -->
                              <div class="col-12 col-md-3">
                                <div class="card standard-pricing text-center">
                                  <div class="card-body height-600">
                                    <img
                                      src="../../../app-assets/images/illustration/Pot1.svg"
                                      class="mb-2 mt-5"
                                      alt="svg img"
                                    />
                                    <h3>Standart</h3>
                                    <div class="annual-plan">
                                      <div class="plan-price mt-2">
                                        <sup
                                          class="font-medium-1 fw-bold text-primary"
                                          >₺</sup
                                        >
                                        <span
                                          class="pricing-standard-value fw-bolder text-primary"
                                          >15.99</span
                                        >
                                        <sub
                                          class="pricing-duration text-body font-medium-1 fw-bold"
                                          >/Aylık</sub
                                        >
                                      </div>
                                      <small
                                        class="annual-pricing d-none text-muted"
                                      ></small>
                                    </div>
                                    <div class="">
                                      <ul
                                        class="list-group list-group-circle text-start"
                                      >
                                        <li class="list-group-item">
                                          Kişisel Kullanım
                                        </li>
                                        <li class="list-group-item">
                                          Standart CPU/RAM
                                        </li>
                                        <li class="list-group-item">
                                          7/24 Destek
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                  <button class="btn btn-primary m-2">
                                    Güncelle
                                  </button>
                                </div>
                              </div>
                              <!--/ standard plan -->

                              <!-- enterprise plan -->
                              <div class="col-12 col-md-3">
                                <div class="card enterprise-pricing text-center">
                                  <div class="card-body height-600">
                                    <img
                                      src="../../../app-assets/images/illustration/Pot1.svg"
                                      class="mb-2 mt-5"
                                      alt="svg img"
                                    />
                                    <h3>İşletme</h3>
                                    <div class="annual-plan">
                                      <div class="plan-price mt-2">
                                        <sup
                                          class="font-medium-1 fw-bold text-primary"
                                          >$</sup
                                        >
                                        <span
                                          class="pricing-enterprise-value fw-bolder text-primary"
                                          >25.99</span
                                        >
                                        <sub
                                          class="pricing-duration text-body font-medium-1 fw-bold"
                                          >/Aylık</sub
                                        >
                                      </div>
                                      <small
                                        class="annual-pricing d-none text-muted"
                                      ></small>
                                    </div>
                                    <div class="">
                                      <ul
                                        class="list-group list-group-circle text-start"
                                      >
                                        <li class="list-group-item">
                                          Kişisel Kullanım
                                        </li>
                                        <li class="list-group-item">
                                          Güçlü CPU/RAM
                                        </li>
                                        <li class="list-group-item">
                                          Günlük Yedekleme
                                        </li>
                                        <li class="list-group-item">
                                          7/24 Destek
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                  <button class="btn btn-primary m-2">
                                    Güncelle
                                  </button>
                                </div>
                              </div>
                              <!--/ enterprise plan -->

                              <!--Coorporate plan-->
                              <div class="col-12 col-md-3">
                                <div class="card basic-pricing text-center">
                                  <div class="card-body height-600">
                                    <img
                                      src="../../../app-assets/images/illustration/Pot1.svg"
                                      class="mb-2 mt-5"
                                      alt="svg img"
                                    />
                                    <h3>Kurumsal</h3>
                                    <div class="annual-plan">
                                      <div class="plan-price mt-2">
                                        <sup
                                          class="font-medium-1 fw-bold text-primary"
                                          >$</sup
                                        >
                                        <span
                                          class="pricing-basic-value fw-bolder text-primary"
                                          >39.99</span
                                        >
                                        <sub
                                          class="pricing-duration text-body font-medium-1 fw-bold"
                                          >/Aylık</sub
                                        >
                                      </div>
                                      <small
                                        class="annual-pricing d-none text-muted"
                                      ></small>
                                    </div>
                                    <div>
                                      <ul
                                        class="list-group list-group-circle text-start"
                                      >
                                        <li class="list-group-item">
                                          Şirket Kullanımı
                                        </li>
                                        <li class="list-group-item">
                                          Güncel CPU/RAM
                                        </li>
                                        <li class="list-group-item">
                                          Günlük Yedekleme
                                        </li>
                                        <li class="list-group-item">FileHubs</li>
                                        <li class="list-group-item">
                                          7/24 Destek
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                  <button class="btn btn-primary m-2">
                                    Güncelle
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- VM-2 -->
                      <div
                        class="tab-pane"
                        id="myplans-vm2"
                        role="tabpanel"
                        aria-labelledby="vm2"
                        aria-expanded="false"
                      >
                        <div class="row pricing-card">
                          <div
                            class="col-12 col-sm-offset-2 col-sm-10 col-md-12 col-lg-offset-2 col-lg-12 mx-auto"
                          >
                            <div class="row">
                              <!-- basic plan -->
                              <div class="col-12 col-md-3">
                                <div class="card basic-pricing text-center">
                                  <div
                                    class="card-body height-600 position-relative"
                                  >
                                    <img
                                      src="../../../app-assets/images/illustration/Pot1.svg"
                                      class="mb-2 mt-5"
                                      alt="svg img"
                                    />
                                    <h3>Temel</h3>
                                    <div class="annual-plan">
                                      <div class="plan-price mt-2">
                                        <sup
                                          class="font-medium-1 fw-bold text-primary"
                                          >₺</sup
                                        >
                                        <span
                                          class="pricing-basic-value fw-bolder text-primary"
                                          >9.99</span
                                        >
                                        <sub
                                          class="pricing-duration text-body font-medium-1 fw-bold"
                                          >/Aylık</sub
                                        >
                                      </div>
                                      <small
                                        class="annual-pricing d-none text-muted"
                                      ></small>
                                    </div>
                                    <div class="">
                                      <ul
                                        class="list-group list-group-circle text-start"
                                      >
                                        <li class="list-group-item">
                                          Kişisel Kullanım
                                        </li>
                                        <li class="list-group-item">
                                          Temel CPU/RAM
                                        </li>
                                      </ul>
                                    </div>
                                  </div>

                                  <button class="btn btn-primary m-2">
                                    Güncelle
                                  </button>
                                </div>
                              </div>
                              <!--/ basic plan -->

                              <!-- standard plan -->
                              <div class="col-12 col-md-3">
                                <div class="card standard-pricing text-center">
                                  <div class="card-body height-600">
                                    <img
                                      src="../../../app-assets/images/illustration/Pot1.svg"
                                      class="mb-2 mt-5"
                                      alt="svg img"
                                    />
                                    <h3>Standart</h3>
                                    <div class="annual-plan">
                                      <div class="plan-price mt-2">
                                        <sup
                                          class="font-medium-1 fw-bold text-primary"
                                          >₺</sup
                                        >
                                        <span
                                          class="pricing-standard-value fw-bolder text-primary"
                                          >15.99</span
                                        >
                                        <sub
                                          class="pricing-duration text-body font-medium-1 fw-bold"
                                          >/Aylık</sub
                                        >
                                      </div>
                                      <small
                                        class="annual-pricing d-none text-muted"
                                      ></small>
                                    </div>
                                    <div class="">
                                      <ul
                                        class="list-group list-group-circle text-start"
                                      >
                                        <li class="list-group-item">
                                          Kişisel Kullanım
                                        </li>
                                        <li class="list-group-item">
                                          Standart CPU/RAM
                                        </li>
                                        <li class="list-group-item">
                                          7/24 Destek
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                  <button class="btn btn-primary m-2">
                                    Güncelle
                                  </button>
                                </div>
                              </div>
                              <!--/ standard plan -->

                              <!-- enterprise plan -->
                              <div class="col-12 col-md-3">
                                <div class="card enterprise-pricing text-center">
                                  <div
                                    class="card-body height-600 position-relative"
                                  >
                                    <img
                                      src="../../../app-assets/images/illustration/Pot1.svg"
                                      class="mb-2 mt-5"
                                      alt="svg img"
                                    />
                                    <h3>İşletme</h3>
                                    <div class="annual-plan">
                                      <div class="plan-price mt-2">
                                        <sup
                                          class="font-medium-1 fw-bold text-primary"
                                          >$</sup
                                        >
                                        <span
                                          class="pricing-enterprise-value fw-bolder text-primary"
                                          >25.99</span
                                        >
                                        <sub
                                          class="pricing-duration text-body font-medium-1 fw-bold"
                                          >/Aylık</sub
                                        >
                                      </div>
                                      <small
                                        class="annual-pricing d-none text-muted"
                                      ></small>
                                    </div>
                                    <div class="">
                                      <ul
                                        class="list-group list-group-circle text-start"
                                      >
                                        <li class="list-group-item">
                                          Kişisel Kullanım
                                        </li>
                                        <li class="list-group-item">
                                          Güçlü CPU/RAM
                                        </li>
                                        <li class="list-group-item">
                                          Günlük Yedekleme
                                        </li>
                                        <li class="list-group-item">
                                          7/24 Destek
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="row">
                                      <div
                                        class="divider divider-primary position-absolute bottom-0 start-0 translate-middle-y"
                                      >
                                        <div class="divider-text">
                                          Bitiş: Jun 02 2022
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <button class="btn btn-outline-success m-2">
                                    Planınız
                                  </button>
                                </div>
                              </div>
                              <!--/ enterprise plan -->

                              <!--Coorporate plan-->
                              <div class="col-12 col-md-3">
                                <div class="card basic-pricing text-center">
                                  <div class="card-body height-600">
                                    <img
                                      src="../../../app-assets/images/illustration/Pot1.svg"
                                      class="mb-2 mt-5"
                                      alt="svg img"
                                    />
                                    <h3>Kurumsal</h3>
                                    <div class="annual-plan">
                                      <div class="plan-price mt-2">
                                        <sup
                                          class="font-medium-1 fw-bold text-primary"
                                          >$</sup
                                        >
                                        <span
                                          class="pricing-basic-value fw-bolder text-primary"
                                          >39.99</span
                                        >
                                        <sub
                                          class="pricing-duration text-body font-medium-1 fw-bold"
                                          >/Aylık</sub
                                        >
                                      </div>
                                      <small
                                        class="annual-pricing d-none text-muted"
                                      ></small>
                                    </div>
                                    <div>
                                      <ul
                                        class="list-group list-group-circle text-start"
                                      >
                                        <li class="list-group-item">
                                          Şirket Kullanımı
                                        </li>
                                        <li class="list-group-item">
                                          Güncel CPU/RAM
                                        </li>
                                        <li class="list-group-item">
                                          Günlük Yedekleme
                                        </li>
                                        <li class="list-group-item">FileHubs</li>
                                        <li class="list-group-item">
                                          7/24 Destek
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                  <button class="btn btn-primary m-2">
                                    Güncelle
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- VM-3  -->
                      <div
                        class="tab-pane"
                        id="myplans-vm3"
                        role="tabpanel"
                        aria-labelledby="vm3"
                        aria-expanded="false"
                      >
                        <div class="row pricing-card">
                          <div
                            class="col-12 col-sm-offset-2 col-sm-10 col-md-12 col-lg-offset-2 col-lg-12 mx-auto"
                          >
                            <div class="row">
                              <!-- basic plan -->
                              <div class="col-12 col-md-3">
                                <div class="card basic-pricing text-center">
                                  <div
                                    class="card-body height-600 position-relative"
                                  >
                                    <img
                                      src="../../../app-assets/images/illustration/Pot1.svg"
                                      class="mb-2 mt-5"
                                      alt="svg img"
                                    />
                                    <h3>Temel</h3>
                                    <div class="annual-plan">
                                      <div class="plan-price mt-2">
                                        <sup
                                          class="font-medium-1 fw-bold text-primary"
                                          >₺</sup
                                        >
                                        <span
                                          class="pricing-basic-value fw-bolder text-primary"
                                          >9.99</span
                                        >
                                        <sub
                                          class="pricing-duration text-body font-medium-1 fw-bold"
                                          >/Aylık</sub
                                        >
                                      </div>
                                      <small
                                        class="annual-pricing d-none text-muted"
                                      ></small>
                                    </div>
                                    <div class="">
                                      <ul
                                        class="list-group list-group-circle text-start"
                                      >
                                        <li class="list-group-item">
                                          Kişisel Kullanım
                                        </li>
                                        <li class="list-group-item">
                                          Temel CPU/RAM
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="row">
                                      <div
                                        class="divider divider-primary position-absolute bottom-0 start-0 translate-middle-y"
                                      >
                                        <div class="divider-text">
                                          Bitiş: Jun 02 2022
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <button class="btn btn-outline-success m-2">
                                    Planınız
                                  </button>
                                </div>
                              </div>
                              <!--/ basic plan -->

                              <!-- standard plan -->
                              <div class="col-12 col-md-3">
                                <div class="card standard-pricing text-center">
                                  <div class="card-body height-600">
                                    <img
                                      src="../../../app-assets/images/illustration/Pot1.svg"
                                      class="mb-2 mt-5"
                                      alt="svg img"
                                    />
                                    <h3>Standart</h3>
                                    <div class="annual-plan">
                                      <div class="plan-price mt-2">
                                        <sup
                                          class="font-medium-1 fw-bold text-primary"
                                          >₺</sup
                                        >
                                        <span
                                          class="pricing-standard-value fw-bolder text-primary"
                                          >15.99</span
                                        >
                                        <sub
                                          class="pricing-duration text-body font-medium-1 fw-bold"
                                          >/Aylık</sub
                                        >
                                      </div>
                                      <small
                                        class="annual-pricing d-none text-muted"
                                      ></small>
                                    </div>
                                    <div class="">
                                      <ul
                                        class="list-group list-group-circle text-start"
                                      >
                                        <li class="list-group-item">
                                          Kişisel Kullanım
                                        </li>
                                        <li class="list-group-item">
                                          Standart CPU/RAM
                                        </li>
                                        <li class="list-group-item">
                                          7/24 Destek
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                  <button class="btn btn-primary m-2">
                                    Güncelle
                                  </button>
                                </div>
                              </div>
                              <!--/ standard plan -->

                              <!-- enterprise plan -->
                              <div class="col-12 col-md-3">
                                <div class="card enterprise-pricing text-center">
                                  <div class="card-body height-600">
                                    <img
                                      src="../../../app-assets/images/illustration/Pot1.svg"
                                      class="mb-2 mt-5"
                                      alt="svg img"
                                    />
                                    <h3>İşletme</h3>
                                    <div class="annual-plan">
                                      <div class="plan-price mt-2">
                                        <sup
                                          class="font-medium-1 fw-bold text-primary"
                                          >$</sup
                                        >
                                        <span
                                          class="pricing-enterprise-value fw-bolder text-primary"
                                          >25.99</span
                                        >
                                        <sub
                                          class="pricing-duration text-body font-medium-1 fw-bold"
                                          >/Aylık</sub
                                        >
                                      </div>
                                      <small
                                        class="annual-pricing d-none text-muted"
                                      ></small>
                                    </div>
                                    <div class="">
                                      <ul
                                        class="list-group list-group-circle text-start"
                                      >
                                        <li class="list-group-item">
                                          Kişisel Kullanım
                                        </li>
                                        <li class="list-group-item">
                                          Güçlü CPU/RAM
                                        </li>
                                        <li class="list-group-item">
                                          Günlük Yedekleme
                                        </li>
                                        <li class="list-group-item">
                                          7/24 Destek
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                  <button class="btn btn-primary m-2">
                                    Güncelle
                                  </button>
                                </div>
                              </div>
                              <!--/ enterprise plan -->

                              <!--Coorporate plan-->
                              <div class="col-12 col-md-3">
                                <div class="card basic-pricing text-center">
                                  <div class="card-body height-600">
                                    <img
                                      src="../../../app-assets/images/illustration/Pot1.svg"
                                      class="mb-2 mt-5"
                                      alt="svg img"
                                    />
                                    <h3>Kurumsal</h3>
                                    <div class="annual-plan">
                                      <div class="plan-price mt-2">
                                        <sup
                                          class="font-medium-1 fw-bold text-primary"
                                          >$</sup
                                        >
                                        <span
                                          class="pricing-basic-value fw-bolder text-primary"
                                          >39.99</span
                                        >
                                        <sub
                                          class="pricing-duration text-body font-medium-1 fw-bold"
                                          >/Aylık</sub
                                        >
                                      </div>
                                      <small
                                        class="annual-pricing d-none text-muted"
                                      ></small>
                                    </div>
                                    <div>
                                      <ul
                                        class="list-group list-group-circle text-start"
                                      >
                                        <li class="list-group-item">
                                          Şirket Kullanımı
                                        </li>
                                        <li class="list-group-item">
                                          Güncel CPU/RAM
                                        </li>
                                        <li class="list-group-item">
                                          Günlük Yedekleme
                                        </li>
                                        <li class="list-group-item">FileHubs</li>
                                        <li class="list-group-item">
                                          7/24 Destek
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                  <button class="btn btn-primary m-2">
                                    Güncelle
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
              </section>

              <!--/ pricing plan cards -->
            </section>
          </div>
        </div>
      </div>
      <!-- END: Content-->
@endsection

@section('js')
    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/pages/page-pricing.js"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on("load", function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14,
                });
            }
        });
    </script>
@endsection
