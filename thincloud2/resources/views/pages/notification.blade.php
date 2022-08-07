@extends("layout")

@section("title")
    Bildirim Merkezi
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
      href="../../../app-assets/css/pages/page-pricing.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../../../app-assets/css/pages/page-faq.css"
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
          <div class="col-xl-12 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Bildirim Merkezi</h4>
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
                      >Bildirimler</a
                    >
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      id="profile-tab-fill"
                      data-bs-toggle="tab"
                      href="#profile-fill"
                      role="tab"
                      aria-controls="profile-fill"
                      aria-selected="false"
                      >Sistem Bildirimleri</a
                    >
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      id="notificationsettings-tab-fill"
                      data-bs-toggle="tab"
                      href="#notificationsettings-fill"
                      role="tab"
                      aria-controls="notificationsettings-fill"
                      aria-selected="false"
                      >Bildirim Ayarları</a
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
                      <div class="col-lg-12">
                        <div class="card">
                          <div class="card-header">
                            <h4 class="card-title">Basic</h4>
                          </div>
                          <div class="card-body">
                            <ul class="timeline">
                              <li class="timeline-item">
                                <span
                                  class="timeline-point timeline-point-indicator"
                                ></span>
                                <div class="timeline-event">
                                  <div
                                    class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1"
                                  >
                                    <h6>12 Invoices have been paid</h6>
                                    <span class="timeline-event-time"
                                      >12 min ago</span
                                    >
                                  </div>
                                  <p>
                                    Develop an online store of electronic
                                    devices for the provided layout, as well as
                                    develop a mobile version of it. The must be
                                    compatible with any CMS.
                                  </p>
                                  <div
                                    class="d-flex flex-row align-items-center"
                                  >
                                    <img
                                      class="me-1"
                                      src="../../../app-assets/images/icons/file-icons/pdf.png"
                                      alt="invoice"
                                      height="23"
                                    />
                                    <span>invoice.pdf</span>
                                  </div>
                                </div>
                              </li>
                              <li class="timeline-item">
                                <span
                                  class="timeline-point timeline-point-secondary timeline-point-indicator"
                                ></span>
                                <div class="timeline-event">
                                  <div
                                    class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1"
                                  >
                                    <h6>Client Meeting</h6>
                                    <span class="timeline-event-time"
                                      >45 min ago</span
                                    >
                                  </div>
                                  <p>Project meeting with john @10:15am.</p>
                                  <div
                                    class="d-flex flex-row align-items-center"
                                  >
                                    <div class="avatar">
                                      <img
                                        src="../../../app-assets/images/avatars/12-small.png"
                                        alt="avatar"
                                        height="38"
                                        width="38"
                                      />
                                    </div>
                                    <div class="ms-50">
                                      <h6 class="mb-0">John Doe (Client)</h6>
                                      <span>CEO of Infibeam</span>
                                    </div>
                                  </div>
                                </div>
                              </li>
                              <li class="timeline-item">
                                <span
                                  class="timeline-point timeline-point-success timeline-point-indicator"
                                ></span>
                                <div class="timeline-event">
                                  <div
                                    class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1"
                                  >
                                    <h6>Financial Report</h6>
                                    <span class="timeline-event-time"
                                      >2 hours ago</span
                                    >
                                  </div>
                                  <p class="mb-50">
                                    Click the button below to read financial
                                    reports
                                  </p>
                                  <button
                                    class="btn btn-outline-primary btn-sm"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseExample"
                                    aria-expanded="true"
                                    aria-controls="collapseExample"
                                  >
                                    Show Report
                                  </button>
                                  <div class="collapse" id="collapseExample">
                                    <ul
                                      class="list-group list-group-flush mt-1"
                                    >
                                      <li
                                        class="list-group-item d-flex justify-content-between flex-wrap"
                                      >
                                        <span
                                          >Last Year's Profit :
                                          <span class="fw-bold"
                                            >$20000</span
                                          ></span
                                        >
                                        <i
                                          data-feather="share-2"
                                          class="cursor-pointer font-medium-2"
                                        ></i>
                                      </li>
                                      <li
                                        class="list-group-item d-flex justify-content-between flex-wrap"
                                      >
                                        <span>
                                          This Year's Profit :
                                          <span class="fw-bold"
                                            >$25000</span
                                          ></span
                                        >
                                        <i
                                          data-feather="share-2"
                                          class="cursor-pointer font-medium-2"
                                        ></i>
                                      </li>
                                      <li
                                        class="list-group-item d-flex justify-content-between flex-wrap"
                                      >
                                        <span>
                                          Last Year's Commission :
                                          <span class="fw-bold"
                                            >$5000</span
                                          ></span
                                        >
                                        <i
                                          data-feather="share-2"
                                          class="cursor-pointer font-medium-2"
                                        ></i>
                                      </li>
                                      <li
                                        class="list-group-item d-flex justify-content-between flex-wrap"
                                      >
                                        <span>
                                          This Year's Commission :
                                          <span class="fw-bold"
                                            >$7000</span
                                          ></span
                                        >
                                        <i
                                          data-feather="share-2"
                                          class="cursor-pointer font-medium-2"
                                        ></i>
                                      </li>
                                      <li
                                        class="list-group-item d-flex justify-content-between flex-wrap"
                                      >
                                        <span>
                                          This Year's Total Balance :
                                          <span class="fw-bold"
                                            >$70000</span
                                          ></span
                                        >
                                        <i
                                          data-feather="share-2"
                                          class="cursor-pointer font-medium-2"
                                        ></i>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </li>
                              <li class="timeline-item">
                                <span
                                  class="timeline-point timeline-point-warning timeline-point-indicator"
                                ></span>
                                <div class="timeline-event">
                                  <div
                                    class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1"
                                  >
                                    <h6 class="mb-50">Interview Schedule</h6>
                                    <span class="timeline-event-time"
                                      >03:00 PM</span
                                    >
                                  </div>
                                  <p>
                                    Have to interview Katy Turner for the
                                    developer job.
                                  </p>
                                  <hr />
                                  <div
                                    class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1"
                                  >
                                    <div
                                      class="d-flex flex-row align-items-center"
                                    >
                                      <div class="avatar me-1">
                                        <img
                                          src="../../../app-assets/images/avatars/1-small.png"
                                          alt="Avatar"
                                          height="32"
                                          width="32"
                                        />
                                      </div>
                                      <span>
                                        <p class="mb-0">Katy Turner</p>
                                        <span class="text-muted"
                                          >Javascript Developer</span
                                        >
                                      </span>
                                    </div>
                                    <div
                                      class="d-flex align-items-center cursor-pointer mt-sm-0 mt-50"
                                    >
                                      <i
                                        data-feather="message-square"
                                        class="me-1"
                                      ></i>
                                      <i data-feather="phone-call"></i>
                                    </div>
                                  </div>
                                </div>
                              </li>
                              <li class="timeline-item">
                                <span
                                  class="timeline-point timeline-point-danger timeline-point-indicator"
                                ></span>
                                <div class="timeline-event">
                                  <div
                                    class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1"
                                  >
                                    <h6>Online Store</h6>
                                    <span class="timeline-event-time"
                                      >03:00PM</span
                                    >
                                  </div>
                                  <p>
                                    Develop an online store of electronic
                                    devices for the provided layout, as well as
                                    develop a mobile version of it. The must be
                                    compatible with any CMS.
                                  </p>
                                  <div
                                    class="d-flex justify-content-between flex-wrap flex-sm-row flex-column"
                                  >
                                    <div>
                                      <p class="text-muted mb-50">Developers</p>
                                      <div class="d-flex align-items-center">
                                        <div
                                          class="avatar bg-light-primary avatar-sm me-50"
                                        >
                                          <span class="avatar-content">A</span>
                                        </div>
                                        <div
                                          class="avatar bg-light-success avatar-sm me-50"
                                        >
                                          <span class="avatar-content">B</span>
                                        </div>
                                        <div
                                          class="avatar bg-light-danger avatar-sm"
                                        >
                                          <span class="avatar-content">C</span>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="mt-sm-0 mt-1">
                                      <p class="text-muted mb-50">Deadline</p>
                                      <p class="mb-0">20 Dec 2077</p>
                                    </div>
                                    <div class="mt-sm-0 mt-1">
                                      <p class="text-muted mb-50">Budget</p>
                                      <p class="mb-0">$50000</p>
                                    </div>
                                  </div>
                                </div>
                              </li>
                              <li class="timeline-item">
                                <span
                                  class="timeline-point timeline-point-info timeline-point-indicator"
                                ></span>
                                <div class="timeline-event">
                                  <div
                                    class="d-flex justify-content-between align-items-center mb-50"
                                  >
                                    <h6>Designing UI</h6>
                                    <div>
                                      <span
                                        class="badge rounded-pill badge-light-primary"
                                        >Design</span
                                      >
                                    </div>
                                  </div>
                                  <p>
                                    Our main goal is to design a new mobile
                                    application for our client. The customer
                                    wants a clean & flat design.
                                  </p>
                                  <div>
                                    <span class="text-muted">Participants</span>
                                    <div class="avatar-group mt-50">
                                      <div
                                        data-bs-toggle="tooltip"
                                        data-popup="tooltip-custom"
                                        data-bs-placement="bottom"
                                        title="Vinnie Mostowy"
                                        class="avatar pull-up"
                                      >
                                        <img
                                          src="../../../app-assets/images/portrait/small/avatar-s-5.jpg"
                                          alt="Avatar"
                                          height="30"
                                          width="30"
                                        />
                                      </div>
                                      <div
                                        data-bs-toggle="tooltip"
                                        data-popup="tooltip-custom"
                                        data-bs-placement="bottom"
                                        title="Elicia Rieske"
                                        class="avatar pull-up"
                                      >
                                        <img
                                          src="../../../app-assets/images/portrait/small/avatar-s-7.jpg"
                                          alt="Avatar"
                                          height="30"
                                          width="30"
                                        />
                                      </div>
                                      <div
                                        data-bs-toggle="tooltip"
                                        data-popup="tooltip-custom"
                                        data-bs-placement="bottom"
                                        title="Julee Rossignol"
                                        class="avatar pull-up"
                                      >
                                        <img
                                          src="../../../app-assets/images/portrait/small/avatar-s-10.jpg"
                                          alt="Avatar"
                                          height="30"
                                          width="30"
                                        />
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="tab-pane"
                    id="profile-fill"
                    role="tabpanel"
                    aria-labelledby="profile-tab-fill"
                  >
                    <div class="col-lg-12">
                      <div class="card">
                        <div class="card-header">
                          <h4 class="card-title">Basic</h4>
                        </div>
                        <div class="card-body">
                          <ul class="timeline">
                            <li class="timeline-item">
                              <span
                                class="timeline-point timeline-point-indicator"
                              ></span>
                              <div class="timeline-event">
                                <div
                                  class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1"
                                >
                                  <h6>12 Invoices have been paid</h6>
                                  <span class="timeline-event-time"
                                    >12 min ago</span
                                  >
                                </div>
                                <p>
                                  Lorem ipsum dolor sit amet consectetur
                                  adipisicing elit. Ipsum alias numquam, officia
                                  sapiente quibusdam odit quasi necessitatibus
                                  soluta fugiat ullam, ad id. Sed est possimus
                                  magnam? Sapiente atque earum ipsa. Reiciendis
                                  excepturi perferendis, voluptates asperibus
                                  veniam quas dicta similique accusantium
                                  perferendis a ipsum qui tenetur corporis,
                                  minima perspiciatis.
                                </p>
                                <div class="d-flex flex-row align-items-center">
                                  <img
                                    class="me-1"
                                    src="../../../app-assets/images/icons/file-icons/pdf.png"
                                    alt="invoice"
                                    height="23"
                                  />
                                  <span>invoice.pdf</span>
                                </div>
                              </div>
                            </li>
                            <li class="timeline-item">
                              <span
                                class="timeline-point timeline-point-secondary timeline-point-indicator"
                              ></span>
                              <div class="timeline-event">
                                <div
                                  class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1"
                                >
                                  <h6>Client Meeting</h6>
                                  <span class="timeline-event-time"
                                    >45 min ago</span
                                  >
                                </div>
                                <p>Project meeting with john @10:15am.</p>
                                <div class="d-flex flex-row align-items-center">
                                  <div class="avatar">
                                    <img
                                      src="../../../app-assets/images/avatars/12-small.png"
                                      alt="avatar"
                                      height="38"
                                      width="38"
                                    />
                                  </div>
                                  <div class="ms-50">
                                    <h6 class="mb-0">John Doe (Client)</h6>
                                    <span>CEO of Infibeam</span>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="timeline-item">
                              <span
                                class="timeline-point timeline-point-success timeline-point-indicator"
                              ></span>
                              <div class="timeline-event">
                                <div
                                  class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1"
                                >
                                  <h6>Financial Report</h6>
                                  <span class="timeline-event-time"
                                    >2 hours ago</span
                                  >
                                </div>
                                <p class="mb-50">
                                  Click the button below to read financial
                                  reports
                                </p>
                                <button
                                  class="btn btn-outline-primary btn-sm"
                                  type="button"
                                  data-bs-toggle="collapse"
                                  data-bs-target="#collapseExample"
                                  aria-expanded="true"
                                  aria-controls="collapseExample"
                                >
                                  Show Report
                                </button>
                                <div class="collapse" id="collapseExample">
                                  <ul class="list-group list-group-flush mt-1">
                                    <li
                                      class="list-group-item d-flex justify-content-between flex-wrap"
                                    >
                                      <span
                                        >Last Year's Profit :
                                        <span class="fw-bold"
                                          >$20000</span
                                        ></span
                                      >
                                      <i
                                        data-feather="share-2"
                                        class="cursor-pointer font-medium-2"
                                      ></i>
                                    </li>
                                    <li
                                      class="list-group-item d-flex justify-content-between flex-wrap"
                                    >
                                      <span>
                                        This Year's Profit :
                                        <span class="fw-bold"
                                          >$25000</span
                                        ></span
                                      >
                                      <i
                                        data-feather="share-2"
                                        class="cursor-pointer font-medium-2"
                                      ></i>
                                    </li>
                                    <li
                                      class="list-group-item d-flex justify-content-between flex-wrap"
                                    >
                                      <span>
                                        Last Year's Commission :
                                        <span class="fw-bold">$5000</span></span
                                      >
                                      <i
                                        data-feather="share-2"
                                        class="cursor-pointer font-medium-2"
                                      ></i>
                                    </li>
                                    <li
                                      class="list-group-item d-flex justify-content-between flex-wrap"
                                    >
                                      <span>
                                        This Year's Commission :
                                        <span class="fw-bold">$7000</span></span
                                      >
                                      <i
                                        data-feather="share-2"
                                        class="cursor-pointer font-medium-2"
                                      ></i>
                                    </li>
                                    <li
                                      class="list-group-item d-flex justify-content-between flex-wrap"
                                    >
                                      <span>
                                        This Year's Total Balance :
                                        <span class="fw-bold"
                                          >$70000</span
                                        ></span
                                      >
                                      <i
                                        data-feather="share-2"
                                        class="cursor-pointer font-medium-2"
                                      ></i>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </li>
                            <li class="timeline-item">
                              <span
                                class="timeline-point timeline-point-warning timeline-point-indicator"
                              ></span>
                              <div class="timeline-event">
                                <div
                                  class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1"
                                >
                                  <h6 class="mb-50">Interview Schedule</h6>
                                  <span class="timeline-event-time"
                                    >03:00 PM</span
                                  >
                                </div>
                                <p>
                                  Have to interview Katy Turner for the
                                  developer job.
                                </p>
                                <hr />
                                <div
                                  class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1"
                                >
                                  <div
                                    class="d-flex flex-row align-items-center"
                                  >
                                    <div class="avatar me-1">
                                      <img
                                        src="../../../app-assets/images/avatars/1-small.png"
                                        alt="Avatar"
                                        height="32"
                                        width="32"
                                      />
                                    </div>
                                    <span>
                                      <p class="mb-0">Katy Turner</p>
                                      <span class="text-muted"
                                        >Javascript Developer</span
                                      >
                                    </span>
                                  </div>
                                  <div
                                    class="d-flex align-items-center cursor-pointer mt-sm-0 mt-50"
                                  >
                                    <i
                                      data-feather="message-square"
                                      class="me-1"
                                    ></i>
                                    <i data-feather="phone-call"></i>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="timeline-item">
                              <span
                                class="timeline-point timeline-point-danger timeline-point-indicator"
                              ></span>
                              <div class="timeline-event">
                                <div
                                  class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1"
                                >
                                  <h6>Online Store</h6>
                                  <span class="timeline-event-time"
                                    >03:00PM</span
                                  >
                                </div>
                                <p>
                                  Develop an online store of electronic devices
                                  for the provided layout, as well as develop a
                                  mobile version of it. The must be compatible
                                  with any CMS.
                                </p>
                                <div
                                  class="d-flex justify-content-between flex-wrap flex-sm-row flex-column"
                                >
                                  <div>
                                    <p class="text-muted mb-50">Developers</p>
                                    <div class="d-flex align-items-center">
                                      <div
                                        class="avatar bg-light-primary avatar-sm me-50"
                                      >
                                        <span class="avatar-content">A</span>
                                      </div>
                                      <div
                                        class="avatar bg-light-success avatar-sm me-50"
                                      >
                                        <span class="avatar-content">B</span>
                                      </div>
                                      <div
                                        class="avatar bg-light-danger avatar-sm"
                                      >
                                        <span class="avatar-content">C</span>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="mt-sm-0 mt-1">
                                    <p class="text-muted mb-50">Deadline</p>
                                    <p class="mb-0">20 Dec 2077</p>
                                  </div>
                                  <div class="mt-sm-0 mt-1">
                                    <p class="text-muted mb-50">Budget</p>
                                    <p class="mb-0">$50000</p>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="timeline-item">
                              <span
                                class="timeline-point timeline-point-info timeline-point-indicator"
                              ></span>
                              <div class="timeline-event">
                                <div
                                  class="d-flex justify-content-between align-items-center mb-50"
                                >
                                  <h6>Designing UI</h6>
                                  <div>
                                    <span
                                      class="badge rounded-pill badge-light-primary"
                                      >Design</span
                                    >
                                  </div>
                                </div>
                                <p>
                                  Our main goal is to design a new mobile
                                  application for our client. The customer wants
                                  a clean & flat design.
                                </p>
                                <div>
                                  <span class="text-muted">Participants</span>
                                  <div class="avatar-group mt-50">
                                    <div
                                      data-bs-toggle="tooltip"
                                      data-popup="tooltip-custom"
                                      data-bs-placement="bottom"
                                      title="Vinnie Mostowy"
                                      class="avatar pull-up"
                                    >
                                      <img
                                        src="../../../app-assets/images/portrait/small/avatar-s-5.jpg"
                                        alt="Avatar"
                                        height="30"
                                        width="30"
                                      />
                                    </div>
                                    <div
                                      data-bs-toggle="tooltip"
                                      data-popup="tooltip-custom"
                                      data-bs-placement="bottom"
                                      title="Elicia Rieske"
                                      class="avatar pull-up"
                                    >
                                      <img
                                        src="../../../app-assets/images/portrait/small/avatar-s-7.jpg"
                                        alt="Avatar"
                                        height="30"
                                        width="30"
                                      />
                                    </div>
                                    <div
                                      data-bs-toggle="tooltip"
                                      data-popup="tooltip-custom"
                                      data-bs-placement="bottom"
                                      title="Julee Rossignol"
                                      class="avatar pull-up"
                                    >
                                      <img
                                        src="../../../app-assets/images/portrait/small/avatar-s-10.jpg"
                                        alt="Avatar"
                                        height="30"
                                        width="30"
                                      />
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="tab-pane"
                    id="notificationsettings-fill"
                    role="tabpanel"
                    aria-labelledby="notificationsettings-tab-fill"
                  >
                    <div class="col-lg-12">
                      <div class="card">
                        <div class="card-body">
                          <!-- notifications -->

                          <div class="card">
                            <div class="card-header border-bottom">
                              <h4 class="card-title">Bildirim Ayarları</h4>
                            </div>
                            <div class="card-body pt-2">
                              <h5 class="mb-0">
                                Bildirimleri göstermek için tarayıcınızdan izin
                                almamız gerekiyor. <strong>İzin Ver</strong>
                              </h5>
                            </div>
                            <div class="table-responsive">
                              <table
                                class="table text-nowrap text-center border-bottom"
                              >
                                <thead>
                                  <tr>
                                    <th class="text-start">Tip</th>
                                    <th>✉️ E-Posta</th>
                                    <th>🖥 Tarayıcı</th>
                                    <th>👩🏻‍💻 Uygulama</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="text-start">Yenilikler</td>
                                    <td>
                                      <div
                                        class="form-check d-flex justify-content-center"
                                      >
                                        <input
                                          class="form-check-input"
                                          type="checkbox"
                                          id="defaultCheck1"
                                          checked
                                        />
                                      </div>
                                    </td>
                                    <td>
                                      <div
                                        class="form-check d-flex justify-content-center"
                                      >
                                        <input
                                          class="form-check-input"
                                          type="checkbox"
                                          id="defaultCheck2"
                                        />
                                      </div>
                                    </td>
                                    <td>
                                      <div
                                        class="form-check d-flex justify-content-center"
                                      >
                                        <input
                                          class="form-check-input"
                                          type="checkbox"
                                          id="defaultCheck3"
                                        />
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="text-start">Hesap Aktivitesi</td>
                                    <td>
                                      <div
                                        class="form-check d-flex justify-content-center"
                                      >
                                        <input
                                          class="form-check-input"
                                          type="checkbox"
                                          id="defaultCheck4"
                                        />
                                      </div>
                                    </td>
                                    <td>
                                      <div
                                        class="form-check d-flex justify-content-center"
                                      >
                                        <input
                                          class="form-check-input"
                                          type="checkbox"
                                          id="defaultCheck5"
                                          checked
                                        />
                                      </div>
                                    </td>
                                    <td>
                                      <div
                                        class="form-check d-flex justify-content-center"
                                      >
                                        <input
                                          class="form-check-input"
                                          type="checkbox"
                                          id="defaultCheck6"
                                          checked
                                        />
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="text-start">
                                      Yeni bir tarayıcı girişi
                                    </td>
                                    <td>
                                      <div
                                        class="form-check d-flex justify-content-center"
                                      >
                                        <input
                                          class="form-check-input"
                                          type="checkbox"
                                          id="defaultCheck7"
                                          checked
                                        />
                                      </div>
                                    </td>
                                    <td>
                                      <div
                                        class="form-check d-flex justify-content-center"
                                      >
                                        <input
                                          class="form-check-input"
                                          type="checkbox"
                                          id="defaultCheck8"
                                          checked
                                        />
                                      </div>
                                    </td>
                                    <td>
                                      <div
                                        class="form-check d-flex justify-content-center"
                                      >
                                        <input
                                          class="form-check-input"
                                          type="checkbox"
                                          id="defaultCheck9"
                                          checked
                                        />
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="text-start">
                                      Yeni bir cihaz bağlantısı
                                    </td>
                                    <td>
                                      <div
                                        class="form-check d-flex justify-content-center"
                                      >
                                        <input
                                          class="form-check-input"
                                          type="checkbox"
                                          id="defaultCheck10"
                                        />
                                      </div>
                                    </td>
                                    <td>
                                      <div
                                        class="form-check d-flex justify-content-center"
                                      >
                                        <input
                                          class="form-check-input"
                                          type="checkbox"
                                          id="defaultCheck11"
                                          checked
                                        />
                                      </div>
                                    </td>
                                    <td>
                                      <div
                                        class="form-check d-flex justify-content-center"
                                      >
                                        <input
                                          class="form-check-input"
                                          type="checkbox"
                                          id="defaultCheck12"
                                        />
                                      </div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <div class="card-body mt-50">
                              <form onsubmit="return false">
                                <div class="row gy-2">
                                  <div class="col-md-6">
                                    <h5 class="mb-1">
                                      Size ne zaman bildirim göndermeliyiz?
                                    </h5>
                                    <select
                                      id="sendNotification"
                                      class="form-select"
                                      name="sendNotification"
                                    >
                                      <option>Her Zaman Tam Erişim</option>
                                      <option>
                                        Sadece Çevrimiçi Olduğumda
                                      </option>
                                      <option>Asla</option>
                                    </select>
                                  </div>
                                  <div class="mt-2">
                                    <button
                                      type="submit"
                                      class="btn btn-primary me-1"
                                    >
                                      Kaydet
                                    </button>
                                    <button
                                      type="reset"
                                      class="btn btn-outline-secondary"
                                    >
                                      İptal
                                    </button>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>

                          <!--/ notifications -->
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
