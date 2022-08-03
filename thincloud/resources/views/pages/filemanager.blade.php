@extends("layout")

@section("title")
    Dosya Yöneticisi
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
      href="../../../app-assets/fonts/font-awesome/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../../../app-assets/vendors/css/extensions/jstree.min.css"
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
      href="../../../app-assets/css/plugins/extensions/ext-component-tree.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../../../app-assets/css/pages/app-file-manager.css"
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
<div class="app-content content file-manager-application">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-area-wrapper container-xxl p-0">
        <div class="sidebar-left mt-5 mt-md-0">
          <div class="sidebar">
            <div class="sidebar-file-manager">
              <div class="sidebar-inner">
                <!-- sidebar menu links starts -->
                <!-- add file button -->
                <div class="dropdown dropdown-actions">
                  <button
                    class="btn btn-primary add-file-btn text-center w-100"
                    type="button"
                    id="addNewFile"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="true"
                  >
                    <span class="align-middle">Dosya Yükle</span>
                  </button>
                </div>
                <!-- add file button ends -->

                <!-- sidebar list items starts  -->

                <div class="sidebar-list">
                  <!-- links for file manager sidebar -->
                  <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">
                      <i data-feather="layers" class="me-50 font-medium-3"></i>
                      <span class="align-middle">Hepsi</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                      <i
                        data-feather="file-text"
                        class="me-50 font-medium-3"
                      ></i>
                      <span class="align-middle">Dökümanlar</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                      <i data-feather="image" class="me-50 font-medium-3"></i>
                      <span class="align-middle">Resimler</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                      <i data-feather="video" class="me-50 font-medium-3"></i>
                      <span class="align-middle">Videolar</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                      <i data-feather="music" class="me-50 font-medium-3"></i>
                      <span class="align-middle">Sesler</span>
                    </a>
                  </div>
                  <div class="list-group list-group-labels">
                    <h6 class="section-label px-2 mb-1">Dosyalar</h6>
                    <a href="#" class="list-group-item list-group-item-action">
                      <i data-feather="folder" class="me-50 font-medium-3"></i>
                      <span class="align-middle">Web Sayfaları</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                      <i data-feather="folder" class="me-50 font-medium-3"></i>
                      <span class="align-middle">Filmler</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                      <i data-feather="folder" class="me-50 font-medium-3"></i>
                      <span class="align-middle">Kitaplar</span>
                    </a>
                  </div>

                  <div class="list-group list-group-labels">
                    <h6 class="section-label px-2 mb-1">Etiketler</h6>
                    <div class="list-group-item">
                      <a href=""
                        ><span class="badge rounded-pill bg-secondary"
                          >Family</span
                        ></a
                      >
                      <a href=""
                        ><span class="badge rounded-pill bg-secondary"
                          >Work</span
                        ></a
                      >
                      <a href=""
                        ><span class="badge rounded-pill bg-secondary"
                          >Home</span
                        ></a
                      >
                      <a href=""
                        ><span class="badge rounded-pill bg-secondary"
                          >Children</span
                        ></a
                      >
                      <a href=""
                        ><span class="badge rounded-pill bg-secondary"
                          >Holidays</span
                        ></a
                      >
                      <a href=""
                        ><span class="badge rounded-pill bg-secondary"
                          >Music</span
                        ></a
                      >
                    </div>
                  </div>
                  <!-- links for file manager sidebar ends -->

                  <!-- storage status of file manager starts-->
                  <div class="storage-status mb-1 px-2">
                    <h6 class="section-label mb-1">Storage Status</h6>
                    <div class="d-flex align-items-center cursor-pointer">
                      <i data-feather="server" class="font-large-1"></i>
                      <div class="file-manager-progress ms-1">
                        <span>68GB used of 100GB</span>
                        <div
                          class="progress progress-bar-primary my-50"
                          style="height: 6px"
                        >
                          <div
                            class="progress-bar"
                            role="progressbar"
                            aria-valuenow="80"
                            aria-valuemin="80"
                            aria-valuemax="100"
                            style="width: 80%"
                          ></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- storage status of file manager ends-->
                </div>
                <!-- side bar list items ends  -->
                <!-- sidebar menu links ends -->
              </div>
            </div>
          </div>
        </div>
        <div class="content-right">
          <div class="content-wrapper container-xxl p-0">
            <div class="content-body">
              <!-- overlay container -->
              <div class="body-content-overlay"></div>

              <!-- file manager app content starts -->
              <div class="file-manager-main-content">
                <!-- search area start -->
                <div
                  class="file-manager-content-header d-flex justify-content-between align-items-center"
                >
                  <div class="d-flex align-items-center">
                    <div
                      class="sidebar-toggle d-block d-xl-none float-start align-middle ms-1"
                    >
                      <i data-feather="menu" class="font-medium-5"></i>
                    </div>
                    <div
                      class="input-group input-group-merge shadow-none m-0 flex-grow-1"
                    >
                      <span class="input-group-text border-0">
                        <i data-feather="search"></i>
                      </span>
                      <input
                        type="text"
                        class="form-control files-filter border-0 bg-transparent"
                        placeholder="Ara"
                      />
                    </div>
                  </div>
                  <div class="d-flex align-items-center">
                    <div class="file-actions">
                      <i
                        data-feather="arrow-down-circle"
                        class="font-medium-2 cursor-pointer d-sm-inline-block d-none me-50"
                      ></i>
                      <i
                        data-feather="trash"
                        class="font-medium-2 cursor-pointer d-sm-inline-block d-none me-50"
                      ></i>
                      <i
                        data-feather="alert-circle"
                        class="font-medium-2 cursor-pointer d-sm-inline-block d-none"
                        data-bs-toggle="modal"
                        data-bs-target="#app-file-manager-info-sidebar"
                      ></i>
                      <div class="dropdown d-inline-block">
                        <i
                          class="font-medium-2 cursor-pointer"
                          data-feather="more-vertical"
                          role="button"
                          id="fileActions"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                        </i>
                        <div
                          class="dropdown-menu dropdown-menu-end"
                          aria-labelledby="fileActions"
                        >
                          <a class="dropdown-item" href="#">
                            <i
                              data-feather="move"
                              class="cursor-pointer me-50"
                            ></i>
                            <span class="align-middle">Birlikte Aç</span>
                          </a>
                          <a
                            class="dropdown-item d-sm-none d-block"
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#app-file-manager-info-sidebar"
                          >
                            <i
                              data-feather="alert-circle"
                              class="cursor-pointer me-50"
                            ></i>
                            <span class="align-middle">Daha Fazla</span>
                          </a>
                          <a class="dropdown-item d-sm-none d-block" href="#">
                            <i
                              data-feather="trash"
                              class="cursor-pointer me-50"
                            ></i>
                            <span class="align-middle">Sil</span>
                          </a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">
                            <i
                              data-feather="plus"
                              class="cursor-pointer me-50"
                            ></i>
                            <span class="align-middle">Kısayol Ekle</span>
                          </a>
                          <a class="dropdown-item" href="#">
                            <i
                              data-feather="folder-plus"
                              class="cursor-pointer me-50"
                            ></i>
                            <span class="align-middle">Taşı</span>
                          </a>
                          <a class="dropdown-item" href="#">
                            <i
                              data-feather="star"
                              class="cursor-pointer me-50"
                            ></i>
                            <span class="align-middle">Favorilere Ekle</span>
                          </a>

                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">
                            <i
                              data-feather="download"
                              class="cursor-pointer me-50"
                            ></i>
                            <span class="align-middle">İndir</span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="btn-group view-toggle ms-50" role="group">
                      <input
                        type="radio"
                        class="btn-check"
                        name="view-btn-radio"
                        data-view="grid"
                        id="gridView"
                        checked
                        autocomplete="off"
                      />
                      <label
                        class="btn btn-outline-primary p-50 btn-sm"
                        for="gridView"
                      >
                        <i data-feather="grid"></i>
                      </label>
                      <input
                        type="radio"
                        class="btn-check"
                        name="view-btn-radio"
                        data-view="list"
                        id="listView"
                        autocomplete="off"
                      />
                      <label
                        class="btn btn-outline-primary p-50 btn-sm"
                        for="listView"
                      >
                        <i data-feather="list"></i>
                      </label>
                    </div>
                  </div>
                </div>
                <!-- search area ends here -->

                <div class="file-manager-content-body">
                  <!-- drives area starts-->

                  <!-- drives area ends-->

                  <!-- Folders Container Starts -->

                  <!-- /Folders Container Ends -->

                  <!-- Files Container Starts -->
                  <div class="view-container">
                    <h6 class="files-section-title mt-2 mb-75">Dosyalar</h6>
                    <div class="card file-manager-item file">
                      <div class="form-check">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="customCheck7"
                        />
                        <label
                          class="form-check-label"
                          for="customCheck7"
                        ></label>
                      </div>
                      <div class="card-img-top file-logo-wrapper">
                        <div class="dropdown float-end">
                          <i
                            data-feather="more-vertical"
                            class="toggle-dropdown mt-n25"
                          ></i>
                        </div>
                        <div
                          class="d-flex align-items-center justify-content-center w-100"
                        >
                          <img
                            src="../../../app-assets/images/icons/jpg.png"
                            alt="file-icon"
                            height="35"
                          />
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="content-wrapper">
                          <p class="card-text file-name mb-0">Profile.jpg</p>
                          <p class="card-text file-size mb-0">12.6mb</p>
                          <p class="card-text file-date">23 may 2019</p>
                        </div>
                        <small class="file-accessed text-muted"
                          >Last accessed: 3 hours ago</small
                        >
                      </div>
                    </div>
                    <div class="card file-manager-item file">
                      <div class="form-check">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="customCheck8"
                        />
                        <label
                          class="form-check-label"
                          for="customCheck8"
                        ></label>
                      </div>
                      <div class="card-img-top file-logo-wrapper">
                        <div class="dropdown float-end">
                          <i
                            data-feather="more-vertical"
                            class="toggle-dropdown mt-n25"
                          ></i>
                        </div>
                        <div
                          class="d-flex align-items-center justify-content-center w-100"
                        >
                          <img
                            src="../../../app-assets/images/icons/doc.png"
                            alt="file-icon"
                            height="35"
                          />
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="content-wrapper">
                          <p class="card-text file-name mb-0">account.doc</p>
                          <p class="card-text file-size mb-0">82kb</p>
                          <p class="card-text file-date">25 may 2019</p>
                        </div>
                        <small class="file-accessed text-muted"
                          >Last accessed: 23 minutes ago</small
                        >
                      </div>
                    </div>
                    <div class="card file-manager-item file">
                      <div class="form-check">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="customCheck9"
                        />
                        <label
                          class="form-check-label"
                          for="customCheck9"
                        ></label>
                      </div>
                      <div class="card-img-top file-logo-wrapper">
                        <div class="dropdown float-end">
                          <i
                            data-feather="more-vertical"
                            class="toggle-dropdown mt-n25"
                          ></i>
                        </div>
                        <div
                          class="d-flex align-items-center justify-content-center w-100"
                        >
                          <img
                            src="../../../app-assets/images/icons/txt.png"
                            alt="file-icon"
                            height="35"
                          />
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="content-wrapper">
                          <p class="card-text file-name mb-0">notes.txt</p>
                          <p class="card-text file-size mb-0">54kb</p>
                          <p class="card-text file-date">01 may 2019</p>
                        </div>
                        <small class="file-accessed text-muted"
                          >Last accessed: 43 minutes ago</small
                        >
                      </div>
                    </div>
                    <div class="card file-manager-item file">
                      <div class="form-check">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="customCheck10"
                        />
                        <label
                          class="form-check-label"
                          for="customCheck10"
                        ></label>
                      </div>
                      <div class="card-img-top file-logo-wrapper">
                        <div class="dropdown float-end">
                          <i
                            data-feather="more-vertical"
                            class="toggle-dropdown mt-n25"
                          ></i>
                        </div>
                        <div
                          class="d-flex align-items-center justify-content-center w-100"
                        >
                          <img
                            src="../../../app-assets/images/icons/json.png"
                            alt="file-icon"
                            height="35"
                          />
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="content-wrapper">
                          <p class="card-text file-name mb-0">users.json</p>
                          <p class="card-text file-size mb-0">200kb</p>
                          <p class="card-text file-date">12 may 2019</p>
                        </div>
                        <small class="file-accessed text-muted"
                          >Last accessed: 1 hour ago</small
                        >
                      </div>
                    </div>
                    <div
                      class="d-none flex-grow-1 align-items-center no-result mb-3"
                    >
                      <i data-feather="alert-circle" class="me-50"></i>
                      No Results
                    </div>
                  </div>
                  <!-- /Files Container Ends -->
                </div>
              </div>
              <!-- file manager app content ends -->

              <!-- File Info Sidebar Starts-->

              <!-- File Info Sidebar Ends -->

              <!-- File Dropdown Starts-->
              <div class="dropdown-menu dropdown-menu-end file-dropdown">
                <a class="dropdown-item" href="#">
                  <i data-feather="eye" class="align-middle me-50"></i>
                  <span class="align-middle">Görüntüle</span>
                </a>

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <i data-feather="edit" class="align-middle me-50"></i>
                  <span class="align-middle">Yeniden Adlandır</span>
                </a>

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <i data-feather="trash" class="align-middle me-50"></i>
                  <span class="align-middle">Sil</span>
                </a>
              </div>
              <!-- /File Dropdown Ends -->

              <!-- Create New Folder Modal Starts-->

              <!-- /Create New Folder Modal Ends -->
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
    <script src="../../../app-assets/vendors/js/extensions/jstree.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/pages/app-file-manager.js"></script>
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
