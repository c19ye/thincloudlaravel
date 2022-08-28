
    <!-- BEGIN: Header-->
    <nav
      class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-dark navbar-shadow container-xxl"
    >
      <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
          <ul class="nav navbar-nav d-xl-none">
            <li class="nav-item">
              <a class="nav-link menu-toggle" href="#"
                ><i class="ficon" data-feather="menu"></i
              ></a>
            </li>
          </ul>
        </div>
        @yield("breadcrumb")
        <ul class="nav navbar-nav align-items-center ms-auto">
          <li class="nav-item nav-search">
            <a class="nav-link nav-link-search"
              ><i class="ficon" data-feather="search"></i
            ></a>
            <div class="search-input">
              <div class="search-input-icon"><i data-feather="search"></i></div>
              <input
                class="form-control input"
                type="text"
                placeholder="Ara"
                tabindex="-1"
                data-search="search"
              />
              <div class="search-input-close"><i data-feather="x"></i></div>
              <ul class="search-list search-list-main"></ul>
            </div>
          </li>

          <li class="nav-item dropdown dropdown-notification me-25">
            <a class="nav-link" href="#" data-bs-toggle="dropdown"
              ><i class="ficon" data-feather="bell"></i
              ><span class="badge rounded-pill bg-danger badge-up">5</span></a
            >
            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
              <li class="dropdown-menu-header">
                <div class="dropdown-header d-flex">
                  <h4 class="notification-title mb-0 me-auto">Bildirimler</h4>
                  <div class="badge rounded-pill badge-light-primary">
                    6 Yeni
                  </div>
                </div>
              </li>
              <li class="scrollable-container media-list">
                <a class="d-flex" href="#">
                  <div class="list-item d-flex align-items-start">
                    <div class="me-1">
                      <div class="avatar">
                        <img
                          src={{asset("app-assets/images/portrait/small/avatar-s-15.jpg")}}
                          alt="avatar"
                          width="32"
                          height="32"
                        />
                      </div>
                    </div>
                    <div class="list-item-body flex-grow-1">
                      <p class="media-heading">
                        <span class="fw-bolder">Congratulation Sam 🎉</span
                        >winner!
                      </p>
                      <small class="notification-text">
                        Won the monthly best seller badge.</small
                      >
                    </div>
                  </div> </a
                ><a class="d-flex" href="#">
                  <div class="list-item d-flex align-items-start">
                    <div class="me-1">
                      <div class="avatar">
                        <img
                          src={{asset("app-assets/images/portrait/small/avatar-s-3.jpg")}}
                          alt="avatar"
                          width="32"
                          height="32"
                        />
                      </div>
                    </div>
                    <div class="list-item-body flex-grow-1">
                      <p class="media-heading">
                        <span class="fw-bolder">New message</span>&nbsp;received
                      </p>
                      <small class="notification-text">
                        You have 10 unread messages</small
                      >
                    </div>
                  </div> </a
                ><a class="d-flex" href="#">
                  <div class="list-item d-flex align-items-start">
                    <div class="me-1">
                      <div class="avatar bg-light-danger">
                        <div class="avatar-content">MD</div>
                      </div>
                    </div>
                    <div class="list-item-body flex-grow-1">
                      <p class="media-heading">
                        <span class="fw-bolder">Revised Order 👋</span
                        >&nbsp;checkout
                      </p>
                      <small class="notification-text">
                        MD Inc. order updated</small
                      >
                    </div>
                  </div>
                </a>
                <div class="list-item d-flex align-items-center">
                  <h6 class="fw-bolder me-auto mb-0">Sistem Bildirimleri</h6>
                  <div class="form-check form-check-primary form-switch">
                    <input
                      class="form-check-input"
                      id="systemNotification"
                      type="checkbox"
                      checked=""
                    />
                    <label
                      class="form-check-label"
                      for="systemNotification"
                    ></label>
                  </div>
                </div>
                <a class="d-flex" href="#">
                  <div class="list-item d-flex align-items-start">
                    <div class="me-1">
                      <div class="avatar bg-light-danger">
                        <div class="avatar-content">
                          <i class="avatar-icon" data-feather="x"></i>
                        </div>
                      </div>
                    </div>
                    <div class="list-item-body flex-grow-1">
                      <p class="media-heading">
                        <span class="fw-bolder">Server down</span
                        >&nbsp;registered
                      </p>
                      <small class="notification-text">
                        USA Server is down due to high CPU usage</small
                      >
                    </div>
                  </div> </a
                ><a class="d-flex" href="#">
                  <div class="list-item d-flex align-items-start">
                    <div class="me-1">
                      <div class="avatar bg-light-success">
                        <div class="avatar-content">
                          <i class="avatar-icon" data-feather="check"></i>
                        </div>
                      </div>
                    </div>
                    <div class="list-item-body flex-grow-1">
                      <p class="media-heading">
                        <span class="fw-bolder">Sales report</span
                        >&nbsp;generated
                      </p>
                      <small class="notification-text">
                        Last month sales report generated</small
                      >
                    </div>
                  </div> </a
                ><a class="d-flex" href="#">
                  <div class="list-item d-flex align-items-start">
                    <div class="me-1">
                      <div class="avatar bg-light-warning">
                        <div class="avatar-content">
                          <i
                            class="avatar-icon"
                            data-feather="alert-triangle"
                          ></i>
                        </div>
                      </div>
                    </div>
                    <div class="list-item-body flex-grow-1">
                      <p class="media-heading">
                        <span class="fw-bolder">High memory</span>&nbsp;usage
                      </p>
                      <small class="notification-text">
                        BLR Server using high memory</small
                      >
                    </div>
                  </div>
                </a>
              </li>
              <li class="dropdown-menu-footer">
                <a class="btn btn-primary w-100" href="#">Bildirimleri oku</a>
              </li>
            </ul>
          </li>

          <li class="nav-item dropdown dropdown-user">
            <a
              class="nav-link dropdown-toggle dropdown-user-link"
              id="dropdown-user"
              href="#"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <span class="avatar"
                ><img
                  class="round"
                  src={{asset("app-assets/images/portrait/small/avatar-s-11.jpg")}}
                  alt="avatar"
                  height="40"
                  width="40" /><span class="avatar-status-online"></span
              ></span>
              <div class="user-nav d-sm-flex d-none">
                <span class="user-name fw-bolder">{{auth()->user()->name}} {{auth()->user()->surname}}</span
                ><span class="user-status">Admin</span>
              </div>
            </a>
            <div
              class="dropdown-menu dropdown-menu-end"
              aria-labelledby="dropdown-user"
            >
              <a class="dropdown-item" href={{route("inbox")}}
                ><i class="me-50" data-feather="mail"></i> Gelen Kutusu</a
              ><a class="dropdown-item" href={{route("account-settings-account")}}
                ><i class="me-50" data-feather="settings"></i> Hesap Ayarları</a
              >
              <div class="dropdown-divider"></div>
              <form method="POST" action="/logout" id="form_action">
                @csrf
                <a class="dropdown-item d-flex" href="javascript:{}" onclick="document.getElementById('form_action').submit();"
                ><i class="me-50" data-feather="power"></i> Çıkış Yap</a
              >
              </form>

            </div>
          </li>
        </ul>
      </div>
    </nav>

    <ul class="main-search-list-defaultlist-other-list d-none">
      <li class="auto-suggestion justify-content-between">
        <a
          class="d-flex align-items-center justify-content-between w-100 py-50"
        >
          <div class="d-flex justify-content-start">
            <span class="me-75" data-feather="alert-circle"></span
            ><span>Sonuç bulunamadı.</span>
          </div>
        </a>
      </li>
    </ul>
    <!-- END: Header-->
