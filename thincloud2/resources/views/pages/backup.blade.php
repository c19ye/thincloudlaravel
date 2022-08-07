@extends("layout")

@section("title")
    Yedekleme
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
      href="../../../app-assets/css/plugins/forms/pickers/form-flat-pickr.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../../../app-assets/css/plugins/forms/pickers/form-pickadate.css"
    />
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
        <div class="content-body">
          <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6">
              <a
                href="javascript:;"
                class="role-edit-modal"
                data-bs-toggle="modal"
                data-bs-target="#createfullbackup"
              >
                <div
                  class="card btn-primary bg-gradient-primary"
                  style="height: 105px"
                >
                  <div class="card-body text-center">
                    <i
                      class="me-25 mt-md-75 mt-lg-50 size-icon"
                      data-feather="rotate-ccw"
                    ></i>

                    <div class="pt-25">
                      <div class="role-heading">
                        <h4 class="fw-bolder font-small-4 text-center">
                          Tam Yedek Oluştur
                        </h4>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
              <a
                href="javascript:;"
                class="role-edit-modal"
                data-bs-toggle="modal"
                data-bs-target="#migrate"
              >
                <div
                  class="card btn-primary bg-gradient-primary"
                  style="height: 105px"
                >
                  <div class="card-body text-center">
                    <i
                      class="me-25 mt-md-75 mt-lg-50 size-icon"
                      data-feather="upload-cloud"
                    ></i>
                    <div class="pt-25">
                      <div class="role-heading">
                        <h4 class="fw-bolder font-small-4 text-center">
                          Yerel PC'yi ThinCloud'a Taşıyın
                        </h4>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
              <a
                href="javascript:;"
                class="role-edit-modal"
                data-bs-toggle="modal"
                data-bs-target="#restorefrombackup"
              >
                <div
                  class="card btn-primary bg-gradient-primary"
                  style="height: 105px"
                >
                  <div class="card-body text-center">
                    <i
                      class="me-25 mt-md-75 mt-lg-50 size-icon"
                      data-feather="rotate-cw"
                    ></i>

                    <div class="pt-25">
                      <div class="role-heading">
                        <h4 class="fw-bolder font-small-4 text-center">
                          Yedekten geri yükle
                        </h4>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
              <a
                href="javascript:;"
                class="role-edit-modal"
                data-bs-toggle="modal"
                data-bs-target="#downloadyourbackups"
              >
                <div
                  class="card btn-primary bg-gradient-primary"
                  style="height: 105px"
                >
                  <div class="card-body text-center">
                    <i
                      class="me-25 mt-md-75 mt-lg-50 size-icon"
                      data-feather="download"
                    ></i>

                    <div class="pt-25">
                      <div class="role-heading">
                        <h4 class="fw-bolder font-small-4 text-center">
                          Yedeklerinizi İndirin
                        </h4>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="row" id="basic-table">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">ThinCloud Yedekleriniz</h4>
                </div>

                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Yedekleme Numarası</th>
                        <th>thincloud kullanıcısı</th>
                        <th>oluşturma tarihi</th>
                        <th>boyut</th>
                        <th>şifreleme</th>
                        <th>zamanlama</th>
                        <th class="text-end">Düzenle</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="accordion-toggle">
                        <td>TCB324</td>
                        <td>Luis D'Amore</td>
                        <td>
                          <i data-feather="clock"></i>
                          Thu Aug 05 2021
                        </td>
                        <td>11GB</td>
                        <td>
                          <span class="badge bg-success">Encrypted</span>
                        </td>
                        <td>Günlük</td>
                        <td class="text-end">
                          <a
                            class="btn me-1"
                            data-bs-toggle="collapse"
                            href="#editbackup1"
                            role="button"
                            aria-expanded="false"
                            aria-controls="editbackup1"
                          >
                            <i data-feather="edit"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="12" class="hiddenRow">
                          <div
                            class="row accordion-body collapse"
                            id="editbackup1"
                          >
                          <div class="card col-2">

                            <label class="form-label" for="select-time1"
                              >Programı Ayarla</label
                            >
                            <select
                              class="form-select"
                              id="select-time1"
                              required
                            >
                              <option value="hourly1">Saatlik (10₺/Aylık)</option>
                              <option value="daily1">Günlük (7₺/Aylık)</option>
                              <option value="weekly1">Haftalık (4₺/Aylık)</option>
                              <option value="monthly1">Aylık (1₺/Aylık)</option>
                            </select>
                          </div>
                          <div class="card col-2">

                            <label class="form-label" for="select-tech1"
                              >Teknoloji Seç</label
                            >
                            <select
                              class="form-select"
                              id="select-tech1"
                              required
                            >
                              <option value="tech1-1">Kademeli Yedekleme</option>
                              <option value="tech2-1">Diferansiyel Yedekleme</option>
                              <option value="tech3-1">Her Zaman Kademeli Yedekleme</option>
                              <option value="tech4-1">Her Zaman Tam Yedekleme</option>
                              <option value="tech5-1">Günlük Kademeli Yedekleme</option>
                            </select>
                          </div>
                          <div class="card col-2">

                            <label class="form-label" for="select-encryption1"
                              >Şifreleme Yöntemleri</label
                            >
                            <select
                              class="form-select"
                              id="select-encryption1"
                              required
                            >
                              <option value="enc1-1">AES Şifreleme (Hızlı)</option>
                              <option value="enc2-1">Bitlocker Teknolojisi (Yavaş)</option>
                              <option value="enc3-1">Askeri Şifreleme (En Yavaş)</option>
                              <option value="enc4-1">Şifreleme Yok!</option>
                            </select>
                          </div>
                          <div class="card col-2">

                            <label class="form-label" for="select-backups1"
                              >Yedeklenecekler</label
                            >
                            <select
                              class="form-select"
                              id="select-backups1"
                              required
                            >
                              <option value="option1-1">Tüm Bilgisayar</option>
                              <option value="option2-1">Sadece Kullanıcı Dosyaları</option>
                              <option value="option3-1">Bare Metal Yedekleme</option>

                            </select>
                          </div>
                          <div class="card col-2">

                            <label class="form-label" for="select-storage1"
                              >Depolama Ayarları</label
                            >
                            <select
                              class="form-select"
                              id="select-storage1"
                              required
                            >
                              <option value="stor1-1">Thincloud Depolama</option>
                              <option value="stor2-1">FileHubs Depolama</option>
                              <option value="stor3-1">Bulut Depolama</option>

                            </select>
                          </div>
                          <div class="card col-2">

                            <label class="form-label" for="select-delete1"
                              >Silme Zamanı</label
                            >
                            <select
                              class="form-select"
                              id="select-delete1"
                              required
                            >
                              <option value="del1-1">Her Yeni Yedeklemeden Sonra</option>
                              <option value="del2-1">Aylık Olarak Sil</option>
                              <option value="del3-1">Yıllık Olarak Sil</option>
                            </select>
                          </div>
                          <div class="row">
                            <div class="text-center"><button
                              type="submit"
                              class="btn btn-primary "
                            >
                              Kaydet
                            </button></div>
                          </div>

                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>TCB324</td>
                        <td>Gordon Flatley</td>
                        <td>
                          <i data-feather="clock"></i>
                          Fri Feb 04 2022
                        </td>
                        <td>5.1GB</td>
                        <td>
                          <span class="badge bg-success">Encrypted</span>
                        </td>
                        <td>Aylık</td>
                        <td class="text-end">
                          <a
                            class="btn me-1"
                            data-bs-toggle="collapse"
                            href="#editbackup2"
                            role="button"
                            aria-expanded="false"
                            aria-controls="editbackup2"
                          >
                            <i data-feather="edit"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="12" class="hiddenRow">
                          <div
                            class="row accordion-body collapse"
                            id="editbackup2"
                          >
                          <div class="card col-2">

                            <label class="form-label" for="select-time2"
                              >Programı Ayarla</label
                            >
                            <select
                              class="form-select"
                              id="select-time2"
                              required
                            >
                              <option value="hourly2">Saatlik (10₺/Aylık)</option>
                              <option value="daily2">Günlük (7₺/Aylık)</option>
                              <option value="weekly2">Haftalık (4₺/Aylık)</option>
                              <option value="monthly2">Aylık (1₺/Aylık)</option>
                            </select>
                          </div>
                          <div class="card col-2">

                            <label class="form-label" for="select-tech2"
                              >Teknoloji Seç</label
                            >
                            <select
                              class="form-select"
                              id="select-tech2"
                              required
                            >
                              <option value="tech1-2">Kademeli Yedekleme</option>
                              <option value="tech2-2">Diferansiyel Yedekleme</option>
                              <option value="tech3-2">Her Zaman Kademeli Yedekleme</option>
                              <option value="tech4-2">Her Zaman Tam Yedekleme</option>
                              <option value="tech5-2">Günlük Kademeli Yedekleme</option>
                            </select>
                          </div>
                          <div class="card col-2">

                            <label class="form-label" for="select-encryption2"
                              >Şifreleme Yöntemleri</label
                            >
                            <select
                              class="form-select"
                              id="select-encryption2"
                              required
                            >
                              <option value="enc1-2">AES Şifreleme (Hızlı)</option>
                              <option value="enc2-2">Bitlocker Teknolojisi (Yavaş)</option>
                              <option value="enc3-2">Askeri Şifreleme (En Yavaş)</option>
                              <option value="enc4-2">Şifreleme Yok!</option>
                            </select>
                          </div>
                          <div class="card col-2">

                            <label class="form-label" for="select-backups2"
                              >Yedeklenecekler</label
                            >
                            <select
                              class="form-select"
                              id="select-backups2"
                              required
                            >
                              <option value="option1-2">Tüm Bilgisayar</option>
                              <option value="option2-2">Sadece Kullanıcı Dosyaları</option>
                              <option value="option3-2">Bare Metal Yedekleme</option>

                            </select>
                          </div>
                          <div class="card col-2">

                            <label class="form-label" for="select-storage2"
                              >Depolama Ayarları</label
                            >
                            <select
                              class="form-select"
                              id="select-storage2"
                              required
                            >
                              <option value="stor1-2">Thincloud Depolama</option>
                              <option value="stor2-2">FileHubs Depolama</option>
                              <option value="stor3-2">Bulut Depolama</option>

                            </select>
                          </div>
                          <div class="card col-2">

                            <label class="form-label" for="select-delete2"
                              >Silme Zamanı</label
                            >
                            <select
                              class="form-select"
                              id="select-delete2"
                              required
                            >
                              <option value="del1-2">Her Yeni Yedeklemeden Sonra</option>
                              <option value="del2-2">Aylık Olarak Sil</option>
                              <option value="del3-2">Yıllık Olarak Sil</option>
                            </select>
                          </div>
                          <div class="row">
                            <div class="text-center"><button
                              type="submit"
                              class="btn btn-primary "
                            >
                              Kaydet
                            </button></div>
                          </div>

                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>TCB947482</td>
                        <td>Domingo Leannon</td>
                        <td><i data-feather="clock"></i> Wed Jun 15 2022</td>
                        <td>4GB</td>
                        <td>
                          <span class="badge bg-danger">Unsecure</span>
                        </td>
                        <td>Haftalık</td>
                        <td class="text-end">
                          <a
                            class="btn me-1"
                            data-bs-toggle="collapse"
                            href="#editbackup3"
                            role="button"
                            aria-expanded="false"
                            aria-controls="editbackup3"
                          >
                            <i data-feather="edit"></i>
                          </a>
                        </td>
                      </tr>
                      <tr></tr>
                      <tr>
                        <td colspan="12" class="hiddenRow">
                          <div
                            class="row accordion-body collapse"
                            id="editbackup3"
                          >
                          <div class="card col-2">

                            <label class="form-label" for="select-time3"
                              >Programı Ayarla</label
                            >
                            <select
                              class="form-select"
                              id="select-time3"
                              required
                            >
                              <option value="hourly3">Saatlik (10₺/Aylık)</option>
                              <option value="daily3">Günlük (7₺/Aylık)</option>
                              <option value="weekly3">Haftalık (4₺/Aylık)</option>
                              <option value="monthly3">Aylık (1₺/Aylık)</option>
                            </select>
                          </div>
                          <div class="card col-2">

                            <label class="form-label" for="select-tech3"
                              >Teknoloji Seç</label
                            >
                            <select
                              class="form-select"
                              id="select-tech3"
                              required
                            >
                              <option value="tech1-3">Kademeli Yedekleme</option>
                              <option value="tech2-3">Diferansiyel Yedekleme</option>
                              <option value="tech3-3">Her Zaman Kademeli Yedekleme</option>
                              <option value="tech4-3">Her Zaman Tam Yedekleme</option>
                              <option value="tech5-3">Günlük Kademeli Yedekleme</option>
                            </select>
                          </div>
                          <div class="card col-2">

                            <label class="form-label" for="select-encryption3"
                              >Şifreleme Yöntemleri</label
                            >
                            <select
                              class="form-select"
                              id="select-encryption3"
                              required
                            >
                              <option value="enc1-3">AES Şifreleme (Hızlı)</option>
                              <option value="enc2-3">Bitlocker Teknolojisi (Yavaş)</option>
                              <option value="enc3-3">Askeri Şifreleme (En Yavaş)</option>
                              <option value="enc4-3">Şifreleme Yok!</option>
                            </select>
                          </div>
                          <div class="card col-2">

                            <label class="form-label" for="select-backups3"
                              >Yedeklenecekler</label
                            >
                            <select
                              class="form-select"
                              id="select-backups3"
                              required
                            >
                              <option value="option1-3">Tüm Bilgisayar</option>
                              <option value="option2-3">Sadece Kullanıcı Dosyaları</option>
                              <option value="option3-3">Bare Metal Yedekleme</option>

                            </select>
                          </div>
                          <div class="card col-2">

                            <label class="form-label" for="select-storage3"
                              >Depolama Ayarları</label
                            >
                            <select
                              class="form-select"
                              id="select-storage3"
                              required
                            >
                              <option value="stor1-3">Thincloud Depolama</option>
                              <option value="stor2-3">FileHubs Depolama</option>
                              <option value="stor3-3">Bulut Depolama</option>

                            </select>
                          </div>
                          <div class="card col-2">

                            <label class="form-label" for="select-delete3"
                              >Silme Zamanı</label
                            >
                            <select
                              class="form-select"
                              id="select-delete3"
                              required
                            >
                              <option value="del1-3">Her Yeni Yedeklemeden Sonra</option>
                              <option value="del2-3">Aylık Olarak Sil</option>
                              <option value="del3-3">Yıllık Olarak Sil</option>
                            </select>
                          </div>
                          <div class="row">
                            <div class="text-center"><button
                              type="submit"
                              class="btn btn-primary "
                            >
                              Kaydet
                            </button></div>
                          </div>

                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td>TCB13425</td>
                        <td>Shirley Runte</td>
                        <td>
                          <i data-feather="clock"></i>
                          Mon Aug 23 2021
                        </td>
                        <td>15.8GB</td>
                        <td>
                          <span class="badge bg-success">Encrypted</span>
                        </td>
                        <td>Saatlik</td>
                        <td class="text-end">
                          <a
                            class="btn me-1"
                            data-bs-toggle="collapse"
                            href="#editbackup4"
                            role="button"
                            aria-expanded="false"
                            aria-controls="editbackup4"
                          >
                            <i data-feather="edit"></i>
                          </a>
                        </td>
                      </tr>
                      <tr></tr>
                      <tr>
                        <td colspan="12" class="hiddenRow">
                          <div
                            class="row accordion-body collapse"
                            id="editbackup4"
                          >
                          <div class="card col-2">

                            <label class="form-label" for="select-time4"
                              >Programı Ayarla</label
                            >
                            <select
                              class="form-select"
                              id="select-time4"
                              required
                            >
                              <option value="hourly4">Saatlik (10₺/Aylık)</option>
                              <option value="daily4">Günlük (7₺/Aylık)</option>
                              <option value="weekly4">Haftalık (4₺/Aylık)</option>
                              <option value="monthly4">Aylık (1₺/Aylık)</option>
                            </select>
                          </div>
                          <div class="card col-2">

                            <label class="form-label" for="select-tech4"
                              >Teknoloji Seç</label
                            >
                            <select
                              class="form-select"
                              id="select-tech4"
                              required
                            >
                              <option value="tech1-4">Kademeli Yedekleme</option>
                              <option value="tech2-4">Diferansiyel Yedekleme</option>
                              <option value="tech3-4">Her Zaman Kademeli Yedekleme</option>
                              <option value="tech4-4">Her Zaman Tam Yedekleme</option>
                              <option value="tech5-4">Günlük Kademeli Yedekleme</option>
                            </select>
                          </div>
                          <div class="card col-2">

                            <label class="form-label" for="select-encryption4"
                              >Şifreleme Yöntemleri</label
                            >
                            <select
                              class="form-select"
                              id="select-encryption4"
                              required
                            >
                              <option value="enc1-4">AES Şifreleme (Hızlı)</option>
                              <option value="enc2-4">Bitlocker Teknolojisi (Yavaş)</option>
                              <option value="enc3-4">Askeri Şifreleme (En Yavaş)</option>
                              <option value="enc4-4">Şifreleme Yok!</option>
                            </select>
                          </div>
                          <div class="card col-2">

                            <label class="form-label" for="select-backups4"
                              >Yedeklenecekler</label
                            >
                            <select
                              class="form-select"
                              id="select-backups4"
                              required
                            >
                              <option value="option1-4">Tüm Bilgisayar</option>
                              <option value="option2-4">Sadece Kullanıcı Dosyaları</option>
                              <option value="option3-4">Bare Metal Yedekleme</option>

                            </select>
                          </div>
                          <div class="card col-2">

                            <label class="form-label" for="select-storage4"
                              >Depolama Ayarları</label
                            >
                            <select
                              class="form-select"
                              id="select-storage4"
                              required
                            >
                              <option value="stor1-4">Thincloud Depolama</option>
                              <option value="stor2-4">FileHubs Depolama</option>
                              <option value="stor3-4">Bulut Depolama</option>

                            </select>
                          </div>
                          <div class="card col-2">

                            <label class="form-label" for="select-delete4"
                              >Silme Zamanı</label
                            >
                            <select
                              class="form-select"
                              id="select-delete4"
                              required
                            >
                              <option value="del1-4">Her Yeni Yedeklemeden Sonra</option>
                              <option value="del2-4">Aylık Olarak Sil</option>
                              <option value="del3-4">Yıllık Olarak Sil</option>
                            </select>
                          </div>
                          <div class="row">
                            <div class="text-center"><button
                              type="submit"
                              class="btn btn-primary "
                            >
                              Kaydet
                            </button></div>
                          </div>

                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Create Fullbackup Modal Start-->
    <div
      class="modal fade"
      id="createfullbackup"
      tabindex="-1"
      aria-labelledby="createfullbackup"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header bg-transparent">
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>

          <div class="modal-body pb-5 px-sm-4 mx-50">
            <h1
              class="address-title text-center mb-1"
              id="createfullbackuptitle"
            >
              Tam Yedek Oluştur
            </h1>
            <section id="faq-tabs">
              <!-- vertical tab pill -->
              <div class="row">
                <div class="col-lg-2 col-md-12 col-sm-12">
                  <div
                    class="d-flex justify-content-between flex-column mb-1 mb-md-0"
                  >
                    <!-- pill tabs navigation -->
                    <ul
                      class="nav nav-pills nav-left flex-column"
                      role="tablist"
                    >
                      <li class="mx-auto mb-2"><h4 class="font-small-5">Cihazlar</h4></li>
                      <!-- payment -->
                      <li class="nav-item mb-1">
                        <a
                          class="nav-link active"
                          id="vm1"
                          data-bs-toggle="pill"
                          href="#backup-vm1"
                          aria-expanded="true"
                          role="tab"
                        >
                          <i data-feather="server"></i>
                          <span class="fw-bold font-small-1">VM-1</span>
                        </a>
                      </li>
                      <li class="nav-item mb-1">
                        <a
                          class="nav-link"
                          id="vm2"
                          data-bs-toggle="pill"
                          href="#backup-vm2"
                          aria-expanded="true"
                          role="tab"
                        >
                          <i data-feather="server"></i>
                          <span class="fw-bold font-small-1">VM-2</span>
                        </a>
                      </li>
                      <li class="nav-item mb-1">
                        <a
                          class="nav-link"
                          id="vm3"
                          data-bs-toggle="pill"
                          href="#backup-vm3"
                          aria-expanded="true"
                          role="tab"
                        >
                          <i data-feather="server"></i>
                          <span class="fw-bold font-small-1">VM-3</span>
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
                      id="backup-vm1"
                      aria-labelledby="vm1"
                      aria-expanded="true"
                    >
                      <div class="row pricing-card">
                        <div
                          class="col-12 col-sm-offset-2 col-sm-10 col-md-12 col-lg-offset-2 col-lg-12 mx-auto"
                        >
                          <div class="row border-start-primary">
                            <div class="row">
                              <h2>Yedekleme Sıklığı Seç</h2>
                              <div class="col-3">
                                <input
                                  class="form-check-input"
                                  type="radio"
                                  name="flexRadioDefault"
                                  id="hourly"
                                />
                                <label class="form-check-label" for="hourly">
                                  Saatlik
                                </label>
                              </div>
                              <div class="col-3">
                                <input
                                  class="form-check-input"
                                  type="radio"
                                  name="flexRadioDefault"
                                  id="daily"
                                />
                                <label class="form-check-label" for="daily">
                                  Günlük
                                </label>
                              </div>
                              <div class="col-3">
                                <input
                                  class="form-check-input"
                                  type="radio"
                                  name="flexRadioDefault"
                                  id="weekly"
                                />
                                <label class="form-check-label" for="weekly">
                                  Haftalık
                                </label>
                              </div>
                              <div class="col-3">
                                <input
                                  class="form-check-input"
                                  type="radio"
                                  name="flexRadioDefault"
                                  id="monthly"
                                />
                                <label class="form-check-label" for="monthly">
                                  Aylık
                                </label>
                              </div>
                            </div>
                            <div class="mt-2">
                              <h2>Yedekleme Teknolojisini Seçin</h2>
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="incremental"
                              />
                              <label class="form-check-label" for="incremental">
                                Artarak
                              </label>
                              <br />
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="differential"
                              />
                              <label
                                class="form-check-label"
                                for="differential"
                              >
                                Kademeli
                              </label>
                              <br />
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="alincremantal"
                              />
                              <label
                                class="form-check-label"
                                for="alincremantal"
                              >
                                Her Zaman Artarak
                              </label>
                              <br />
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="fullbackup"
                              />
                              <label class="form-check-label" for="fullbackup">
                                Her Zaman Tam Yedek
                              </label>
                              <br />
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="daincremental"
                              />
                              <label
                                class="form-check-label"
                                for="daincremental"
                              >
                                Günlük Artarak
                              </label>
                            </div>
                            <div class="mt-2">
                              <h2>Şifreleme Yöntemini Seçin</h2>
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="aes"
                              />
                              <label class="form-check-label" for="aes">
                                AES Şifrelemesi(Hızlı)
                              </label>
                              <br />
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="bitlocker"
                              />
                              <label class="form-check-label" for="bitlocker">
                                Bitlocker Teknolojisi(Yavaş)
                              </label>
                              <br />
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="military"
                              />
                              <label class="form-check-label" for="military">
                                Askeri Sınıf Şifreleme(Yavaş)
                              </label>
                              <br />
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="dont"
                              />
                              <label class="form-check-label" for="dont">
                                Yedekleri Şifreleme
                              </label>
                            </div>
                            <div class="mt-2">
                              <h2>Ne Yedeklemeli?</h2>
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="entiretc"
                              />
                              <label class="form-check-label" for="entiretc">
                                Tüm thinclod'u
                              </label>
                              <br />
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="justuser"
                              />
                              <label class="form-check-label" for="justuser">
                                Sadece Kullanıcı Dosyalarını
                              </label>
                              <br />
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="bare"
                              />
                              <label class="form-check-label" for="bare">
                                Çıplak Metal Yedekleme
                              </label>
                            </div>
                            <div class="mt-2">
                              <h2>Yedekleme Lokasyonu</h2>
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="dedicated"
                              />
                              <label class="form-check-label" for="dedicated">
                                Özel Yeni Yedekleme Filehub'ı
                              </label>
                              <br />
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="cloud"
                              />
                              <label class="form-check-label" for="cloud">
                                Thincloud Yedekleme Bulutu
                              </label>
                            </div>
                            <div class="mt-2">
                              <h2>Yedek Silme Seçenekleri</h2>
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="every"
                              />
                              <label class="form-check-label" for="every">
                                Her yeni Yedeklemeden Sonra Sil
                              </label>
                              <br />
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="delweekly"
                              />
                              <label class="form-check-label" for="delweekly">
                                Haftalık Sil
                              </label>
                              <br />
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="delmonthly"
                              />
                              <label class="form-check-label" for="delmonthly">
                                Aylık Sil
                              </label>
                              <br />
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="dontdel"
                              />
                              <label class="form-check-label" for="dontdel">
                                Silme
                              </label>
                            </div>
                            <div class="row mt-2">
                              <div class="col-12 text-end">
                                <button type="submit" class="btn btn-primary">
                                  Oluştur
                                </button>
                                <button
                                  type="reset"
                                  class="btn btn-outline-secondary"
                                >
                                  İptal
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
                      id="backup-vm2"
                      role="tabpanel"
                      aria-labelledby="vm2"
                      aria-expanded="false"
                    >
                      <div class="row pricing-card">
                        <div
                          class="col-12 col-sm-offset-2 col-sm-10 col-md-12 col-lg-offset-2 col-lg-12 mx-auto"
                        >
                          <div class="row border-start-primary">
                            <div class="row">
                              <h2>Yedekleme Sıklığı Seç</h2>
                              <div class="col-3">
                                <input
                                  class="form-check-input"
                                  type="radio"
                                  name="flexRadioDefault"
                                  id="hourly"
                                />
                                <label class="form-check-label" for="hourly">
                                  Saatlik
                                </label>
                              </div>
                              <div class="col-3">
                                <input
                                  class="form-check-input"
                                  type="radio"
                                  name="flexRadioDefault"
                                  id="daily"
                                />
                                <label class="form-check-label" for="daily">
                                  Günlük
                                </label>
                              </div>
                              <div class="col-3">
                                <input
                                  class="form-check-input"
                                  type="radio"
                                  name="flexRadioDefault"
                                  id="weekly"
                                />
                                <label class="form-check-label" for="weekly">
                                  Haftalık
                                </label>
                              </div>
                              <div class="col-3">
                                <input
                                  class="form-check-input"
                                  type="radio"
                                  name="flexRadioDefault"
                                  id="monthly"
                                />
                                <label class="form-check-label" for="monthly">
                                  Aylık
                                </label>
                              </div>
                            </div>
                            <div class="mt-2">
                              <h2>Yedekleme Teknolojisini Seçin</h2>
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="incremental"
                              />
                              <label class="form-check-label" for="incremental">
                                Artarak
                              </label>
                              <br />
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="differential"
                              />
                              <label
                                class="form-check-label"
                                for="differential"
                              >
                                Kademeli
                              </label>
                              <br />
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="alincremantal"
                              />
                              <label
                                class="form-check-label"
                                for="alincremantal"
                              >
                                Her Zaman Artarak
                              </label>
                              <br />
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="fullbackup"
                              />
                              <label class="form-check-label" for="fullbackup">
                                Her Zaman Tam Yedek
                              </label>
                              <br />
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="daincremental"
                              />
                              <label
                                class="form-check-label"
                                for="daincremental"
                              >
                                Günlük Artarak
                              </label>
                            </div>
                            <div class="mt-2">
                              <h2>Şifreleme Yöntemini Seçin</h2>
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="aes"
                              />
                              <label class="form-check-label" for="aes">
                                AES Şifrelemesi(Hızlı)
                              </label>
                              <br />
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="bitlocker"
                              />
                              <label class="form-check-label" for="bitlocker">
                                Bitlocker Teknolojisi(Yavaş)
                              </label>
                              <br />
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="military"
                              />
                              <label class="form-check-label" for="military">
                                Askeri Sınıf Şifreleme(Yavaş)
                              </label>
                              <br />
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="dont"
                              />
                              <label class="form-check-label" for="dont">
                                Yedekleri Şifreleme
                              </label>
                            </div>
                            <div class="mt-2">
                              <h2>Ne Yedeklemeli?</h2>
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="entiretc"
                              />
                              <label class="form-check-label" for="entiretc">
                                Tüm thinclod'u
                              </label>
                              <br />
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="justuser"
                              />
                              <label class="form-check-label" for="justuser">
                                Sadece Kullanıcı Dosyalarını
                              </label>
                              <br />
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="bare"
                              />
                              <label class="form-check-label" for="bare">
                                Çıplak Metal Yedekleme
                              </label>
                            </div>
                            <div class="mt-2">
                              <h2>Yedekleme Lokasyonu</h2>
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="dedicated"
                              />
                              <label class="form-check-label" for="dedicated">
                                Özel Yeni Yedekleme Filehub'ı
                              </label>
                              <br />
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="cloud"
                              />
                              <label class="form-check-label" for="cloud">
                                Thincloud Yedekleme Bulutu
                              </label>
                            </div>
                            <div class="mt-2">
                              <h2>Yedek Silme Seçenekleri</h2>
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="every"
                              />
                              <label class="form-check-label" for="every">
                                Her yeni Yedeklemeden Sonra Sil
                              </label>
                              <br />
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="delweekly"
                              />
                              <label class="form-check-label" for="delweekly">
                                Haftalık Sil
                              </label>
                              <br />
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="delmonthly"
                              />
                              <label class="form-check-label" for="delmonthly">
                                Aylık Sil
                              </label>
                              <br />
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="dontdel"
                              />
                              <label class="form-check-label" for="dontdel">
                                Silme
                              </label>
                            </div>
                            <div class="row mt-2">
                              <div class="col-12 text-end">
                                <button type="submit" class="btn btn-primary">
                                  Oluştur
                                </button>
                                <button
                                  type="reset"
                                  class="btn btn-outline-secondary"
                                >
                                  İptal
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
                      id="backup-vm3"
                      role="tabpanel"
                      aria-labelledby="vm3"
                      aria-expanded="false"
                    >
                      <div class="row pricing-card">
                        <div
                          class="col-12 col-sm-offset-2 col-sm-10 col-md-12 col-lg-offset-2 col-lg-12 mx-auto"
                        >
                          <div class="row border-start-primary">
                            <div class="row">
                              <h2>Yedekleme Sıklığı Seç</h2>
                              <div class="col-3">
                                <input
                                  class="form-check-input"
                                  type="radio"
                                  name="flexRadioDefault"
                                  id="hourly"
                                />
                                <label class="form-check-label" for="hourly">
                                  Saatlik
                                </label>
                              </div>
                              <div class="col-3">
                                <input
                                  class="form-check-input"
                                  type="radio"
                                  name="flexRadioDefault"
                                  id="daily"
                                />
                                <label class="form-check-label" for="daily">
                                  Günlük
                                </label>
                              </div>
                              <div class="col-3">
                                <input
                                  class="form-check-input"
                                  type="radio"
                                  name="flexRadioDefault"
                                  id="weekly"
                                />
                                <label class="form-check-label" for="weekly">
                                  Haftalık
                                </label>
                              </div>
                              <div class="col-3">
                                <input
                                  class="form-check-input"
                                  type="radio"
                                  name="flexRadioDefault"
                                  id="monthly"
                                />
                                <label class="form-check-label" for="monthly">
                                  Aylık
                                </label>
                              </div>
                            </div>
                            <div class="mt-2">
                              <h2>Yedekleme Teknolojisini Seçin</h2>
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="incremental"
                              />
                              <label class="form-check-label" for="incremental">
                                Artarak
                              </label>
                              <br />
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="differential"
                              />
                              <label
                                class="form-check-label"
                                for="differential"
                              >
                                Kademeli
                              </label>
                              <br />
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="alincremantal"
                              />
                              <label
                                class="form-check-label"
                                for="alincremantal"
                              >
                                Her Zaman Artarak
                              </label>
                              <br />
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="fullbackup"
                              />
                              <label class="form-check-label" for="fullbackup">
                                Her Zaman Tam Yedek
                              </label>
                              <br />
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="daincremental"
                              />
                              <label
                                class="form-check-label"
                                for="daincremental"
                              >
                                Günlük Artarak
                              </label>
                            </div>
                            <div class="mt-2">
                              <h2>Şifreleme Yöntemini Seçin</h2>
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="aes"
                              />
                              <label class="form-check-label" for="aes">
                                AES Şifrelemesi(Hızlı)
                              </label>
                              <br />
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="bitlocker"
                              />
                              <label class="form-check-label" for="bitlocker">
                                Bitlocker Teknolojisi(Yavaş)
                              </label>
                              <br />
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="military"
                              />
                              <label class="form-check-label" for="military">
                                Askeri Sınıf Şifreleme(Yavaş)
                              </label>
                              <br />
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="dont"
                              />
                              <label class="form-check-label" for="dont">
                                Yedekleri Şifreleme
                              </label>
                            </div>
                            <div class="mt-2">
                              <h2>Ne Yedeklemeli?</h2>
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="entiretc"
                              />
                              <label class="form-check-label" for="entiretc">
                                Tüm thinclod'u
                              </label>
                              <br />
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="justuser"
                              />
                              <label class="form-check-label" for="justuser">
                                Sadece Kullanıcı Dosyalarını
                              </label>
                              <br />
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="bare"
                              />
                              <label class="form-check-label" for="bare">
                                Çıplak Metal Yedekleme
                              </label>
                            </div>
                            <div class="mt-2">
                              <h2>Yedekleme Lokasyonu</h2>
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="dedicated"
                              />
                              <label class="form-check-label" for="dedicated">
                                Özel Yeni Yedekleme Filehub'ı
                              </label>
                              <br />
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="cloud"
                              />
                              <label class="form-check-label" for="cloud">
                                Thincloud Yedekleme Bulutu
                              </label>
                            </div>
                            <div class="mt-2">
                              <h2>Yedek Silme Seçenekleri</h2>
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="every"
                              />
                              <label class="form-check-label" for="every">
                                Her yeni Yedeklemeden Sonra Sil
                              </label>
                              <br />
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="delweekly"
                              />
                              <label class="form-check-label" for="delweekly">
                                Haftalık Sil
                              </label>
                              <br />
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="delmonthly"
                              />
                              <label class="form-check-label" for="delmonthly">
                                Aylık Sil
                              </label>
                              <br />
                              <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="dontdel"
                              />
                              <label class="form-check-label" for="dontdel">
                                Silme
                              </label>
                            </div>
                            <div class="row mt-2">
                              <div class="col-12 text-end">
                                <button type="submit" class="btn btn-primary">
                                  Oluştur
                                </button>
                                <button
                                  type="reset"
                                  class="btn btn-outline-secondary"
                                >
                                  İptal
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
          </div>
        </div>
      </div>
    </div>
    <!--Modal End-->
    <!--Migrate Modal Start-->
    <div
      class="modal fade"
      id="migrate"
      tabindex="-1"
      aria-labelledby="createfullbackup"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header bg-transparent">
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>

          <div class="modal-body pb-5 px-sm-4 mx-50">
            <h1
              class="address-title text-center mb-1"
              id="createfullbackuptitle"
            >
              Yerel Bilgisayarı Thinclod'a Taşıma Sihirbazını İndir
            </h1>
            <hr class="bg-primary" />

            <div class="row mt-2">
              <div class="center col-12">
                <button type="submit" class="btn btn-primary col-12">
                  İndir
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Modal End-->

    <!--Restore Modal Start-->
    <div
      class="modal fade"
      id="restorefrombackup"
      tabindex="-1"
      aria-labelledby="restorefrombackup"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header bg-transparent">
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>

          <div class="modal-body pb-5 px-sm-4 mx-50">
            <h1
              class="address-title text-center mb-1"
              id="createfullbackuptitle"
            >
              Yedekten Geri Yükle
            </h1>
            <hr class="bg-primary" />
            <div class="row">
              <h2>Onarmak İçin Thincloud(ları) Seç</h2>
              <div class="col-6">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="tc1"
                />
                <label class="form-check-label" for="tc1"> Thincloud 1 </label>
                <br />
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="tc2"
                />
                <label class="form-check-label" for="tc2"> Thincloud 2 </label>
                <br />
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="tc3"
                />
                <label class="form-check-label" for="tc3"> Thincloud 3 </label>
                <br />
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="tc4"
                />
                <label class="form-check-label" for="tc4"> Thincloud 4 </label>
                <br />
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="tc5"
                />
                <label class="form-check-label" for="tc5"> Thincloud 5 </label>
                <br />
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="tc6"
                />
                <label class="form-check-label" for="tc6"> Thincloud 6 </label>
              </div>
              <div class="col-6">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="tc7"
                />
                <label class="form-check-label" for="tc7"> Thincloud 7 </label>
                <br />
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="tc8"
                />
                <label class="form-check-label" for="tc8"> Thincloud 8 </label>
                <br />
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="tc9"
                />
                <label class="form-check-label" for="tc9"> Thincloud 9 </label>
                <br />
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="tc10"
                />
                <label class="form-check-label" for="tc10">
                  Thincloud 10
                </label>
                <br />
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="tc11"
                />
                <label class="form-check-label" for="tc11">
                  Thincloud 11
                </label>
                <br />
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="tc12"
                />
                <label class="form-check-label" for="tc12">
                  Thincloud 12
                </label>
              </div>
            </div>
            <hr class="bg-primary" />
            <div class="mb-1">
              <label class="form-label" for="select-country1"
                >Onarmak İçin Yedek Seç</label
              >
              <select class="form-select" id="select-country1" required>
                <option value="">Yedek Seç</option>
                <option value="lastbackup">En Son Yedek</option>
                <option value="lastweekbackup">Geçen Haftanın Yedeği</option>
                <option value="lastmonthbackup">Geçen Ayın Yedeği</option>
              </select>
              <div class="valid-feedback">Geçerli</div>
              <div class="invalid-feedback">Lütfen Planı Seçin</div>
            </div>
            <hr class="bg-primary" />
            <div class="row">
              <div class="col-md-12 mb-1">
                <label class="form-label" for="fp-default"
                  >Varsa Geri Yüklenecek Tarihi Seçin</label
                >
                <input
                  type="text"
                  id="fp-default"
                  class="form-control flatpickr-basic"
                  placeholder="YYYY-MM-DD"
                />
              </div>
            </div>

            <hr class="bg-primary" />
            <div class="">
              <h2>Bildirimler</h2>
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="sendmail"
              />
              <label class="form-check-label" for="sendmail">
                Kullanıcıya E-mail Gönder
              </label>
              <br />
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="sendadmin"
              />
              <label class="form-check-label" for="sendadmin">
                Yöneticiye E-mail Gönder
              </label>
            </div>
            <div class="row mt-2">
              <div class="col-12 text-end">
                <button type="submit" class="btn btn-primary">
                  Geri Yükle
                </button>
                <button type="reset" class="btn btn-outline-secondary">
                  İptal
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Modal End-->

    <!--Download Backups Modal Start-->
    <div
      class="modal fade"
      id="downloadyourbackups"
      tabindex="-1"
      aria-labelledby="createfullbackup"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header bg-transparent">
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>

          <div class="modal-body pb-5 px-sm-4 mx-50">
            <h1
              class="address-title text-center mb-1"
              id="createfullbackuptitle"
            >
              Yedeklerinizi İndirin
            </h1>
            <hr class="bg-primary" />
            <div class="row">
              <h2>Thincloud(larınızı) ya da Departman(larınızı) Seçin</h2>
              <div class="col-6">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="thc1"
                />
                <label class="form-check-label" for="thc1"> Thincloud 1 </label>
                <br />
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="thc2"
                />
                <label class="form-check-label" for="thc2"> Thincloud 2 </label>
                <br />
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="thc3"
                />
                <label class="form-check-label" for="thc3"> Thincloud 3 </label>
                <br />
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="thc4"
                />
                <label class="form-check-label" for="thc4"> Thincloud 4 </label>
                <br />
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="thc5"
                />
                <label class="form-check-label" for="thc5"> Thincloud 5 </label>
                <br />
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="thc6"
                />
                <label class="form-check-label" for="thc6"> Thincloud 6 </label>
              </div>
              <div class="col-6">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="thc7"
                />
                <label class="form-check-label" for="thc7"> Thincloud 7 </label>
                <br />
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="thc8"
                />
                <label class="form-check-label" for="thc8"> Thincloud 8 </label>
                <br />
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="thc9"
                />
                <label class="form-check-label" for="thc9"> Thincloud 9 </label>
                <br />
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="thc10"
                />
                <label class="form-check-label" for="thc10">
                  Thincloud 10
                </label>
                <br />
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="thc11"
                />
                <label class="form-check-label" for="thc11">
                  Thincloud 11
                </label>
                <br />
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="thc12"
                />
                <label class="form-check-label" for="thc12">
                  Thincloud 12
                </label>
              </div>
            </div>
            <hr class="bg-primary" />
            <div class="row">
              <div class="col-6">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="dp1"
                />
                <label class="form-check-label" for="dp1"> Departman 12 </label>
                <br />
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="dp2"
                />
                <label class="form-check-label" for="dp2"> Departman 12 </label>
                <br />
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="dp3"
                />
                <label class="form-check-label" for="dp3"> Departman 12 </label>
                <br />
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="dp4"
                />
                <label class="form-check-label" for="dp4"> Departman 12 </label>
              </div>
              <div class="col-6">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="dp5"
                />
                <label class="form-check-label" for="dp5"> Departman 12 </label>
                <br />
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="dp6"
                />
                <label class="form-check-label" for="dp6"> Departman 12 </label>
                <br />
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="dp7"
                />
                <label class="form-check-label" for="dp7"> Departman 12 </label>
                <br />
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="dp8"
                />
                <label class="form-check-label" for="dp8"> Departman 12 </label>
              </div>
            </div>
            <hr class="bg-primary" />
            <div class="row">
              <h2>Lokasyonunuzu Seçin</h2>
              <div class="col-4">
                <input
                  class="form-check-input"
                  type="radio"
                  name="flexRadioDefault"
                  id="europa"
                />
                <label class="form-check-label" for="europa"> Avrupa </label>
                <br />
                <input
                  class="form-check-input"
                  type="radio"
                  name="flexRadioDefault"
                  id="asia"
                />
                <label class="form-check-label" for="asia"> Asya </label>
              </div>
              <div class="col-4">
                <input
                  class="form-check-input"
                  type="radio"
                  name="flexRadioDefault"
                  id="northamerica"
                />
                <label class="form-check-label" for="northamerica">
                  Kuzey Amerika
                </label>
                <br />
                <input
                  class="form-check-input"
                  type="radio"
                  name="flexRadioDefault"
                  id="southamerica"
                />
                <label class="form-check-label" for="southamerica">
                  Güney Amerika
                </label>
              </div>
              <div class="col-4">
                <input
                  class="form-check-input"
                  type="radio"
                  name="flexRadioDefault"
                  id="africa"
                />
                <label class="form-check-label" for="africa"> Afrika </label>
                <br />
                <input
                  class="form-check-input"
                  type="radio"
                  name="flexRadioDefault"
                  id="australia"
                />
                <label class="form-check-label" for="australia">
                  Avustralya
                </label>
              </div>
            </div>
            <hr class="bg-primary" />
            <div class="mb-1">
              <label class="form-label" for="select-country1"
                >İndirmek İçin Yedekleme Seçin</label
              >
              <select class="form-select" id="select-country1" required>
                <option value="">Yedek Seç</option>
                <option value="lastbackup">En Son Yedek</option>
                <option value="lastweekbackup">Geçen Haftanın Yedeği</option>
                <option value="lastmonthbackup">Geçen Ayın Yedeği</option>
              </select>
              <div class="valid-feedback">Geçerli</div>
              <div class="invalid-feedback">Lütfen Planı Seçin</div>
            </div>

            <div class="row mt-2">
              <div class="col-12 text-end">
                <button type="submit" class="btn btn-primary">İndir</button>
                <button type="reset" class="btn btn-outline-secondary">
                  İptal
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Modal End-->
@endsection

@section("js")
    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="../../../app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="../../../app-assets/vendors/js/pickers/pickadate/picker.time.js"></script>
    <script src="../../../app-assets/vendors/js/pickers/pickadate/legacy.js"></script>
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
    <script src="../../../app-assets/js/scripts/forms/pickers/form-pickers.js"></script>

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
