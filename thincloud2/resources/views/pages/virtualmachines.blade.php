@extends('layout')

@section('title')
    Sanal Makineler
@endsection

@section('css')
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png" />
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet" />

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css" />
    <link rel="stylesheet" type="text/css"
        href="../../../app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" type="text/css"
        href="../../../app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css" />
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css" />
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/select/select2.min.css" />
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
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/form-validation.css" />
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
            <div class="row">
              <div class="col-xl-2 col-lg-6 col-md-6">
                <a

                  href="javascript:;"
                  class="role-edit-modal"

                  data-bs-toggle="modal"
                  data-bs-target="#addthincloud"
                >
                  <div
                    class="card btn-primary bg-gradient-primary"
                    style="height: 105px"
                  >
                    <div class="card-body text-center">
                      <i
                        class="me-25 mt-md-75 mt-lg-50 size-icon"
                        data-feather="plus-circle"
                      ></i>

                      <div class="pt-25">
                        <div class="role-heading">
                          <h4 class="fw-bolder font-small-3 text-center">
                            ThinCloud Ekle
                          </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-xl-2 col-lg-6 col-md-6">
                <a
                  href="javascript:;"
                  class="role-edit-modal"
                  data-bs-toggle="modal"
                  data-bs-target=""
                >
                  <div
                    class="card btn-primary bg-gradient-primary"
                    style="height: 105px"
                  >
                    <div class="card-body text-center">
                      <i
                        class="me-25 mt-md-75 mt-lg-50 size-icon"
                        data-feather="refresh-cw"
                      ></i>

                      <div class="pt-25">
                        <div class="role-heading">
                          <h4 class="fw-bolder font-small-3 text-center">
                            Tüm Bilgisayarları Güncelle
                          </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-xl-2 col-lg-6 col-md-6">
                <a
                  href="javascript:;"
                  class="role-edit-modal"
                  data-bs-toggle="modal"
                  data-bs-target=""
                >
                  <div
                    class="card btn-primary btn-gradient-primary"
                    style="height: 105px"
                  >
                    <div class="card-body text-center">
                      <i
                        class="me-25 mt-md-75 mt-lg-50 size-icon"
                        data-feather="play"
                      ></i>

                      <div class="pt-25">
                        <div class="role-heading">
                          <h4 class="fw-bolder font-small-3 text-center">
                            Tüm Bilgisayarları Çalıştır
                          </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-xl-2 col-lg-6 col-md-6">
                <a
                  href="javascript:;"
                  class="role-edit-modal"
                  data-bs-toggle="modal"
                  data-bs-target=""
                >
                  <div
                    class="card btn-primary bg-gradient-primary"
                    style="height: 105px"
                  >
                    <div class="card-body text-center">
                      <i
                        class="me-25 mt-md-75 mt-lg-50 size-icon"
                        data-feather="power"
                      ></i>

                      <div class="pt-25">
                        <div class="role-heading">
                          <h4 class="fw-bolder font-small-3 text-center">
                            Tüm Bilgisayarları Kapat
                          </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-xl-2 col-lg-6 col-md-6">
                <a
                  href="javascript:;"
                  class="role-edit-modal"
                  data-bs-toggle="modal"
                  data-bs-target=""
                >
                  <div
                    class="card btn-primary bg-gradient-primary"
                    style="height: 105px"
                  >
                    <div class="card-body text-center">
                      <i
                        class="me-25 mt-md-75 mt-lg-50 size-icon"
                        data-feather="package"
                      ></i>

                      <div class="pt-25">
                        <div class="role-heading">
                          <h4 class="fw-bolder font-small-3 text-center">
                            Uygulamaları Yükle
                          </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-xl-2 col-lg-6 col-md-6">
                <a
                  href="javascript:;"
                  class="role-edit-modal"
                  data-bs-toggle="modal"
                  data-bs-target="#createdomainn"
                  role="button"
                >
                  <div
                    class="card btn-primary bg-gradient-primary"
                    style="height: 105px"
                  >
                    <div class="card-body text-center">
                      <i
                        class="me-25 mt-md-75 mt-lg-50 size-icon"
                        data-feather="plus-square"
                      ></i>

                      <div class="pt-25">
                        <div class="role-heading">
                          <h4 class="fw-bolder font-small-3 text-center">
                            <del>Alanadı Ekle</del>
                          </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>

            <!-- Ajax Sourced Server-side -->
            <div class="row" id="basic-table">
              <div class="col-12">
                <div class="card">
                  <div class="card-header bg-primary">
                    <h4 class="card-title">Thincloud'larınız</h4>
                  </div>

                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>DURUM</th>
                          <th>SANAL BİLGİSAYAR</th>
                          <th>ISIM</th>
                          <th>POZISYON</th>
                          <th>PLAN</th>
                          <th>DEPARTMAN</th>
                          <th>KONUM</th>
                          <th>E-POSTA</th>
                          <th>DÜZENLE</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <span class="badge bg-success col-12">Aktif</span>
                          </td>
                          <td>VM-1</td>
                          <td>Peter Charls</td>
                          <td>System Architect</td>
                          <td>Business Plan</td>
                          <td>Engineering</td>
                          <td>Ulundi</td>
                          <td>ggiacoppo2r@apache.org</td>
                          <td>
                            <a
                              class="btn me-1"
                              data-bs-toggle="collapse"
                              href="#editVM1"
                              role="button"
                              aria-expanded="false"
                              aria-controls="showdepartment1"
                            >
                              <i data-feather="edit"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="12" class="hiddenRow">
                            <div class="row accordion-body collapse" id="editVM1">
                              <div class="card col-3">
                                <label class="form-label" for="select-status1"
                                  >Durum</label
                                >
                                <select
                                  class="form-select"
                                  id="select-status1"
                                  required
                                >
                                  <option value="active1">Aktif</option>
                                  <option value="deactive1">Deaktif</option>
                                </select>
                              </div>
                              <div class="card col-3">
                                <label class="form-label" for="select-vm1"
                                  >Cihaz</label
                                >
                                <select
                                  class="form-select"
                                  id="select-vm1"
                                  required
                                >
                                  <option value="vm1-1">VM-1</option>
                                  <option value="vm2-1">VM-2</option>
                                  <option value="vm3-1">VM-3</option>
                                </select>
                              </div>

                              <div class="card col-3">
                                <label class="form-label" for="select-role1"
                                  >Yeni Pozisyon Seç</label
                                >
                                <select
                                  class="form-select"
                                  id="select-role1"
                                  required
                                >
                                  <option value="admin1">Yönetici</option>
                                  <option value="developer1">Geliştirici</option>
                                  <option value="member1">Üye</option>
                                </select>
                              </div>
                              <div class="card col-3">
                                <label class="form-label" for="select-plan1"
                                  >Yeni Plan Seç</label
                                >
                                <select
                                  class="form-select"
                                  id="select-plan1"
                                  required
                                >
                                  <option value="basic1">Temel</option>
                                  <option value="standard1">Standart</option>
                                  <option value="business1">İşletme</option>
                                  <option value="corporate1">Kurumsal</option>
                                </select>
                              </div>
                              <div class="card col-3">
                                <label class="form-label" for="select-departman1"
                                  >Yeni Departman Seç</label
                                >
                                <select
                                  class="form-select"
                                  id="select-departman1"
                                  required
                                >
                                  <option value="departman1-1">Yönetim</option>
                                  <option value="departman2-1">Yazılım</option>
                                  <option value="departman3-1">
                                    İnsan Kaynakları
                                  </option>
                                </select>
                              </div>

                              <div class="card col-3">
                                <label class="form-label" for="vmTableLocation1"
                                  >Yeni Konum Girin</label
                                >
                                <input
                                  type="text"
                                  id="vmTableLocation1"
                                  name="vmTableLocation1"
                                  class="form-control"
                                  placeholder="Yeni Konum"
                                  data-msg="Lütfen Konumunuzu Girin"
                                />
                              </div>
                              <div class="card col-3">
                                <label class="form-label" for="vmTableMail1"
                                  >Yeni E-posta</label
                                >
                                <input
                                  type="text"
                                  id="vmTableMail1"
                                  name="vmTableMail1"
                                  class="form-control"
                                  placeholder="Yeni Soyisim"
                                  data-msg="Lütfen Soyisminizi Girin"
                                />
                              </div>
                              <div class="col-3 mt-2 text-center">
                                <button type="submit" class="btn btn-primary">
                                  Kaydet
                                </button>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <span class="badge bg-danger">Deaktif</span>
                          </td>

                          <td>VM-2</td>
                          <td>Alma Harvatt</td>
                          <td>Creative Director</td>
                          <td>Developer Plan</td>
                          <td>Engineering</td>

                          <td>Ocucaje</td>
                          <td>aharvatt11@addtoany.com</td>
                          <td>
                            <a
                              class="btn me-1"
                              data-bs-toggle="collapse"
                              href="#editVM2"
                              role="button"
                              aria-expanded="false"
                              aria-controls="showdepartment1"
                            >
                              <i data-feather="edit"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="12" class="hiddenRow">
                            <div class="row accordion-body collapse" id="editVM2">
                              <div class="card col-3">
                                <label class="form-label" for="select-status2"
                                  >Durum</label
                                >
                                <select
                                  class="form-select"
                                  id="select-status2"
                                  required
                                >
                                  <option value="active2">Aktif</option>
                                  <option value="deactive2">Deaktif</option>
                                </select>
                              </div>
                              <div class="card col-3">
                                <label class="form-label" for="select-vm2"
                                  >Cihaz</label
                                >
                                <select
                                  class="form-select"
                                  id="select-vm2"
                                  required
                                >
                                  <option value="vm1-2">VM-1</option>
                                  <option value="vm2-2">VM-2</option>
                                  <option value="vm3-2">VM-3</option>
                                </select>
                              </div>

                              <div class="card col-3">
                                <label class="form-label" for="select-role2"
                                  >Yeni Pozisyon Seç</label
                                >
                                <select
                                  class="form-select"
                                  id="select-role2"
                                  required
                                >
                                  <option value="admin2">Yönetici</option>
                                  <option value="developer2">Geliştirici</option>
                                  <option value="member2">Üye</option>
                                </select>
                              </div>
                              <div class="card col-3">
                                <label class="form-label" for="select-plan2"
                                  >Yeni Plan Seç</label
                                >
                                <select
                                  class="form-select"
                                  id="select-plan2"
                                  required
                                >
                                  <option value="basic2">Temel</option>
                                  <option value="standard2">Standart</option>
                                  <option value="business2">İşletme</option>
                                  <option value="corporate2">Kurumsal</option>
                                </select>
                              </div>
                              <div class="card col-3">
                                <label class="form-label" for="select-departman2"
                                  >Yeni Departman Seç</label
                                >
                                <select
                                  class="form-select"
                                  id="select-departman2"
                                  required
                                >
                                  <option value="departman1-2">Yönetim</option>
                                  <option value="departman2-2">Yazılım</option>
                                  <option value="departman3-2">
                                    İnsan Kaynakları
                                  </option>
                                </select>
                              </div>

                              <div class="card col-3">
                                <label class="form-label" for="vmTableLocation2"
                                  >Yeni Konum Girin</label
                                >
                                <input
                                  type="text"
                                  id="vmTableLocation2"
                                  name="vmTableLocation2"
                                  class="form-control"
                                  placeholder="Yeni Konum"
                                  data-msg="Lütfen Konumunuzu Girin"
                                />
                              </div>
                              <div class="card col-3">
                                <label class="form-label" for="vmTableMail2"
                                  >Yeni E-posta</label
                                >
                                <input
                                  type="text"
                                  id="vmTableMail2"
                                  name="vmTableMail2"
                                  class="form-control"
                                  placeholder="Yeni Soyisim"
                                  data-msg="Lütfen Soyisminizi Girin"
                                />
                              </div>
                              <div class="col-3 mt-2 text-center">
                                <button type="submit" class="btn btn-primary">
                                  Kaydet
                                </button>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <span class="badge bg-success col-12">Aktif</span>
                          </td>

                          <td>VM-3</td>
                          <td>Olivette Gudgin</td>
                          <td>System Architect</td>
                          <td>Business Plan</td>
                          <td>Engineering</td>

                          <td>Giacoppo</td>
                          <td>ggiacoppo2r@apache.org</td>
                          <td>
                            <a
                              class="btn me-1"
                              data-bs-toggle="collapse"
                              href="#editVM3"
                              role="button"
                              aria-expanded="false"
                              aria-controls="showdepartment1"
                            >
                              <i data-feather="edit"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="12" class="hiddenRow">
                            <div class="row accordion-body collapse" id="editVM3">
                              <div class="card col-3">
                                <label class="form-label" for="select-status3"
                                  >Durum</label
                                >
                                <select
                                  class="form-select"
                                  id="select-status3"
                                  required
                                >
                                  <option value="active3">Aktif</option>
                                  <option value="deactive3">Deaktif</option>
                                </select>
                              </div>
                              <div class="card col-3">
                                <label class="form-label" for="select-vm3"
                                  >Cihaz</label
                                >
                                <select
                                  class="form-select"
                                  id="select-vm3"
                                  required
                                >
                                  <option value="vm1-3">VM-1</option>
                                  <option value="vm2-3">VM-2</option>
                                  <option value="vm3-3">VM-3</option>
                                </select>
                              </div>

                              <div class="card col-3">
                                <label class="form-label" for="select-role3"
                                  >Yeni Pozisyon Seç</label
                                >
                                <select
                                  class="form-select"
                                  id="select-role3"
                                  required
                                >
                                  <option value="admin3">Yönetici</option>
                                  <option value="developer3">Geliştirici</option>
                                  <option value="member3">Üye</option>
                                </select>
                              </div>
                              <div class="card col-3">
                                <label class="form-label" for="select-plan3"
                                  >Yeni Plan Seç</label
                                >
                                <select
                                  class="form-select"
                                  id="select-plan3"
                                  required
                                >
                                  <option value="basic3">Temel</option>
                                  <option value="standard3">Standart</option>
                                  <option value="business3">İşletme</option>
                                  <option value="corporate3">Kurumsal</option>
                                </select>
                              </div>
                              <div class="card col-3">
                                <label class="form-label" for="select-departman3"
                                  >Yeni Departman Seç</label
                                >
                                <select
                                  class="form-select"
                                  id="select-departman3"
                                  required
                                >
                                  <option value="departman1-3">Yönetim</option>
                                  <option value="departman2-3">Yazılım</option>
                                  <option value="departman3-3">
                                    İnsan Kaynakları
                                  </option>
                                </select>
                              </div>

                              <div class="card col-3">
                                <label class="form-label" for="vmTableLocation3"
                                  >Yeni Konum Girin</label
                                >
                                <input
                                  type="text"
                                  id="vmTableLocation3"
                                  name="vmTableLocation3"
                                  class="form-control"
                                  placeholder="Yeni Konum"
                                  data-msg="Lütfen Konumunuzu Girin"
                                />
                              </div>
                              <div class="card col-3">
                                <label class="form-label" for="vmTableMail3"
                                  >Yeni E-posta</label
                                >
                                <input
                                  type="text"
                                  id="vmTableMail3"
                                  name="vmTableMail3"
                                  class="form-control"
                                  placeholder="Yeni Soyisim"
                                  data-msg="Lütfen Soyisminizi Girin"
                                />
                              </div>
                              <div class="col-3 mt-2 text-center">
                                <button type="submit" class="btn btn-primary">
                                  Kaydet
                                </button>
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

            <!--/ Ajax Sourced Server-side -->

            <div class="row">
              <div class="col-md-6 col-lg-4">
                <div class="card mb-4">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-primary">
                      Otomatik Kapanmayı Planla
                    </li>
                    <li class="list-group-item">
                      <div class="form-check form-check-primary form-switch">
                        <input
                          class="form-check-input"
                          id="systemNotification1"
                          type="checkbox"
                          checked=""
                        />

                        <label class="form-check-label" for="systemNotification1"
                          ><i data-feather="moon" class=""></i> ThinClouds'u Gece
                          Kapat (20:00 - 06:00)</label
                        >
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card mb-4">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-primary">
                      Otomatik Başlatmayı Planla
                    </li>
                    <li class="list-group-item">
                      <div class="form-check form-check-primary form-switch">
                        <input
                          class="form-check-input"
                          id="systemNotification2"
                          type="checkbox"
                          checked=""
                        />

                        <label class="form-check-label" for="systemNotification2"
                          ><i data-feather="sun"></i> ThinClouds'u Sabah Başlatın
                          (07:00)</label
                        >
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card mb-4">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-primary">
                      Kritik Bildirimleri Etkinleştir
                    </li>
                    <li class="list-group-item">
                      <div class="form-check form-check-primary form-switch">
                        <input
                          class="form-check-input"
                          id="systemNotification3"
                          type="checkbox"
                          checked=""
                        />
                        <label class="form-check-label" for="systemNotification3">
                          <i data-feather="alert-circle"></i> Kritik Hatalarda
                          Bildirim Alın</label
                        >
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END: Content-->
      <!-- Add ThinCloud -->
      <div class="modal fade" id="addthincloud" tabindex="-1" aria-hidden="true">
        <div
          class="modal-dialog modal-lg modal-dialog-centered modal-add-new-role"
        >
          <div class="modal-content">
            <div class="modal-header bg-transparent">
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body px-lg-5">
              <div class="text-center">
                <h1 class="role-title">Yeni ThinCloud Ekle</h1>
              </div>
              <!-- Add role form -->
              <form class="needs-validation" novalidate>
                <div class="col-xl-12 col-lg-12">
                  <div class="">
                    <div class="card-header">
                      <h4 class="card-title"></h4>
                    </div>
                    <div class="">
                      <ul
                        class="nav nav-tabs justify-content-center"
                        role="tablist"
                      >
                        <li class="nav-item">
                          <a
                            class="nav-link active"
                            id="addthincloud-tab-input"
                            data-bs-toggle="tab"
                            href="#addthincloud-input"
                            aria-controls="addthincloud-input"
                            role="tab"
                            aria-selected="true"
                            >Bilgiler</a
                          >
                        </li>
                        <li class="nav-item">
                          <a
                            class="nav-link"
                            id="addthincloud-tab-dropdown"
                            data-bs-toggle="tab"
                            href="#addthincloud-dropdown"
                            aria-controls="addthincloud-dropdownn"
                            role="tab"
                            aria-selected="false"
                            >Ayarlar</a
                          >
                        </li>
                      </ul>
                      <div class="tab-content">
                        <div
                          class="tab-pane active"
                          id="addthincloud-input"
                          aria-labelledby="addthincloud-tab-input"
                          role="tabpanel"
                        >
                          <div class="">
                            <label
                              class="form-label"
                              for="basic-addon-thincloudname"
                              >ThinCloud İsmi</label
                            >

                            <input
                              type="text"
                              id="basic-addon-thincloudname"
                              class="form-control"
                              aria-label="thincloudname"
                              aria-describedby="thincloudname"
                              required
                            />
                            <div class="valid-feedback">Geçerli</div>
                            <div class="invalid-feedback">
                              ThinCloud İsmini Girin
                            </div>
                          </div>
                          <div class="">
                            <label
                              class="form-label"
                              for="basic-addon-thincloudnameid"
                              >ThinCloud ID</label
                            >

                            <input
                              type="text"
                              id="basic-addon-thincloudid"
                              class="form-control"
                              aria-label="thincloudid"
                              aria-describedby="thincloudid"
                              required
                            />
                            <div class="valid-feedback">Geçerli</div>
                            <div class="invalid-feedback">ThinCloud ID Girin</div>
                          </div>
                          <div class="row">
                            <div class="col-lg-6">
                              <label class="form-label" for="basic-addon-name"
                                >Ad</label
                              >

                              <input
                                type="text"
                                id="basic-addon-name"
                                class="form-control"
                                aria-label="name"
                                aria-describedby="name"
                              />
                            </div>
                            <div class="col-lg-6">
                              <label class="form-label" for="basic-addon-lastname"
                                >Soyad</label
                              >

                              <input
                                type="text"
                                id="basic-addon-lastname"
                                class="form-control"
                                aria-label="lastname"
                                aria-describedby="lastname"
                              />
                            </div>
                          </div>
                          <div class="">
                            <label class="form-label" for="basic-addon-username"
                              >Kullanıcı Adı</label
                            >

                            <input
                              type="text"
                              id="basic-addon-username"
                              class="form-control"
                              aria-label="username"
                              aria-describedby="username"
                              required
                            />
                            <div class="valid-feedback">Geçerli</div>
                            <div class="invalid-feedback">
                              Kullanıcı Adı Girin
                            </div>
                          </div>
                          <div class="">
                            <label class="form-label" for="basic-default-password"
                              >Şifre</label
                            >
                            <input
                              type="password"
                              id="basic-default-password"
                              class="form-control"
                              placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                              required
                            />
                            <div class="valid-feedback">Geçerli</div>
                            <div class="invalid-feedback">Şifre Gir</div>
                          </div>
                          <div class="mb-5">
                            <label class="form-label" for="basic-default-email"
                              >E-Posta</label
                            >
                            <input
                              type="email"
                              id="basic-default-email"
                              class="form-control"
                              required
                            />
                            <div class="valid-feedback">Geçerli</div>
                            <div class="invalid-feedback">
                              Geçerli Bir E-Posta Girin
                            </div>
                            <div class="row mt-2">
                              <div class="col-md-12 text-end">
                                <button
                                  type="reset"
                                  class="btn btn-outline-secondary"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                >
                                  İptal
                                </button>
                                <a
                                  class="btn btn-primary btnNext"
                                  >Sonraki</a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <div
                          class="tab-pane"
                          id="addthincloud-dropdown"
                          aria-labelledby="addthincloud-tab-dropdown"
                          role="tabpanel"
                        >
                          <div class="mb-1">
                            <label class="form-label" for="select-country1"
                              >Departman Seç</label
                            >
                            <select
                              class="form-select"
                              id="select-country1"
                              required
                            >
                              <option value="">Departmanınızı Seçin</option>
                              <option value="departmant1">Departman 1</option>
                              <option value="departmant2">Departman 2</option>
                              <option value="departmant3">Departman 3</option>
                              <option value="departmant4">Departman 4</option>
                            </select>
                            <div class="valid-feedback">Geçerli</div>
                            <div class="invalid-feedback">
                              Lütfen İşletim Sistemini Seçin
                            </div>
                          </div>
                          <div class="mb-1">
                            <label class="form-label" for="select-country1"
                              >Plan Seçme</label
                            >
                            <select
                              class="form-select"
                              id="select-country1"
                              required
                            >
                              <option value="">Plan Seçin</option>
                              <option value="basic">Temel</option>
                              <option value="standart">Standart</option>
                              <option value="business">İş</option>
                              <option value="corporate">Kurumsal</option>
                            </select>
                            <div class="valid-feedback">Geçerli</div>
                            <div class="invalid-feedback">Lütfen Planı Seçin</div>
                          </div>
                          <div class="mb-1">
                            <label class="form-label" for="select-country1"
                              >İşletim Sistemi Seçme</label
                            >
                            <select
                              class="form-select"
                              id="select-country1"
                              required
                            >
                              <option value="">İşletim Sistemini Seçin</option>
                              <option value="windows10">Windows 10</option>
                              <option value="ubuntu">Ubuntu</option>
                              <option value="linux-based">Linux-Based</option>
                            </select>
                            <div class="valid-feedback">Geçerli</div>
                            <div class="invalid-feedback">
                              Lütfen İşletim Sistemini Seçin
                            </div>
                          </div>
                          <div class="row mb-2">
                            <div class="col-12 text-end mt-2">
                              <button type="submit" class="btn btn-primary">
                                Oluştur
                              </button>
                              <button
                                type="reset"
                                class="btn btn-outline-secondary"
                                data-bs-dismiss="modal"
                                aria-label="Close"
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
              </form>
              <!--/ Add role form -->
            </div>
          </div>
        </div>
      </div>

      <!--/ Add ThinCloud -->
      <!-- Create Domain -->
      <div class="modal fade" id="createdomain" tabindex="-1" aria-hidden="true">
        <div
          class="modal-dialog modal-lg modal-dialog-centered modal-add-new-role"
        >
          <div class="modal-content">
            <div class="modal-header bg-transparent">
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body px-5 pb-5">
              <div class="text-center mb-4">
                <h1 class="role-title">Add New Role</h1>
                <p>Set role permissions</p>
              </div>
              <!-- Add role form -->
              <form id="addRoleForm" class="row" onsubmit="return false">
                <div class="col-12">
                  <label class="form-label" for="modalRoleName">Role Name</label>
                  <input
                    type="text"
                    id="modalRoleName"
                    name="modalRoleName"
                    class="form-control"
                    placeholder="Enter role name"
                    tabindex="-1"
                    data-msg="Please enter role name"
                  />
                </div>
                <div class="col-12">
                  <h4 class="mt-2 pt-50">Role Permissions</h4>
                  <!-- Permission table -->
                  <div class="table-responsive">
                    <table class="table table-flush-spacing">
                      <tbody>
                        <tr>
                          <td class="text-nowrap fw-bolder">
                            Administrator Access
                            <span
                              data-bs-toggle="tooltip"
                              data-bs-placement="top"
                              title="Allows a full access to the system"
                            >
                              <i data-feather="info"></i>
                            </span>
                          </td>
                          <td>
                            <div class="form-check">
                              <input
                                class="form-check-input"
                                type="checkbox"
                                id="selectAll"
                              />
                              <label class="form-check-label" for="selectAll">
                                Select All
                              </label>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-nowrap fw-bolder">User Management</td>
                          <td>
                            <div class="d-flex">
                              <div class="form-check me-3 me-lg-5">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  id="userManagementRead"
                                />
                                <label
                                  class="form-check-label"
                                  for="userManagementRead"
                                >
                                  Read
                                </label>
                              </div>
                              <div class="form-check me-3 me-lg-5">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  id="userManagementWrite"
                                />
                                <label
                                  class="form-check-label"
                                  for="userManagementWrite"
                                >
                                  Write
                                </label>
                              </div>
                              <div class="form-check">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  id="userManagementCreate"
                                />
                                <label
                                  class="form-check-label"
                                  for="userManagementCreate"
                                >
                                  Create
                                </label>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-nowrap fw-bolder">
                            Content Management
                          </td>
                          <td>
                            <div class="d-flex">
                              <div class="form-check me-3 me-lg-5">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  id="contentManagementRead"
                                />
                                <label
                                  class="form-check-label"
                                  for="contentManagementRead"
                                >
                                  Read
                                </label>
                              </div>
                              <div class="form-check me-3 me-lg-5">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  id="contentManagementWrite"
                                />
                                <label
                                  class="form-check-label"
                                  for="contentManagementWrite"
                                >
                                  Write
                                </label>
                              </div>
                              <div class="form-check">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  id="contentManagementCreate"
                                />
                                <label
                                  class="form-check-label"
                                  for="contentManagementCreate"
                                >
                                  Create
                                </label>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-nowrap fw-bolder">
                            Disputes Management
                          </td>
                          <td>
                            <div class="d-flex">
                              <div class="form-check me-3 me-lg-5">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  id="dispManagementRead"
                                />
                                <label
                                  class="form-check-label"
                                  for="dispManagementRead"
                                >
                                  Read
                                </label>
                              </div>
                              <div class="form-check me-3 me-lg-5">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  id="dispManagementWrite"
                                />
                                <label
                                  class="form-check-label"
                                  for="dispManagementWrite"
                                >
                                  Write
                                </label>
                              </div>
                              <div class="form-check">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  id="dispManagementCreate"
                                />
                                <label
                                  class="form-check-label"
                                  for="dispManagementCreate"
                                >
                                  Create
                                </label>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-nowrap fw-bolder">
                            Database Management
                          </td>
                          <td>
                            <div class="d-flex">
                              <div class="form-check me-3 me-lg-5">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  id="dbManagementRead"
                                />
                                <label
                                  class="form-check-label"
                                  for="dbManagementRead"
                                >
                                  Read
                                </label>
                              </div>
                              <div class="form-check me-3 me-lg-5">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  id="dbManagementWrite"
                                />
                                <label
                                  class="form-check-label"
                                  for="dbManagementWrite"
                                >
                                  Write
                                </label>
                              </div>
                              <div class="form-check">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  id="dbManagementCreate"
                                />
                                <label
                                  class="form-check-label"
                                  for="dbManagementCreate"
                                >
                                  Create
                                </label>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-nowrap fw-bolder">
                            Financial Management
                          </td>
                          <td>
                            <div class="d-flex">
                              <div class="form-check me-3 me-lg-5">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  id="finManagementRead"
                                />
                                <label
                                  class="form-check-label"
                                  for="finManagementRead"
                                >
                                  Read
                                </label>
                              </div>
                              <div class="form-check me-3 me-lg-5">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  id="finManagementWrite"
                                />
                                <label
                                  class="form-check-label"
                                  for="finManagementWrite"
                                >
                                  Write
                                </label>
                              </div>
                              <div class="form-check">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  id="finManagementCreate"
                                />
                                <label
                                  class="form-check-label"
                                  for="finManagementCreate"
                                >
                                  Create
                                </label>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-nowrap fw-bolder">Reporting</td>
                          <td>
                            <div class="d-flex">
                              <div class="form-check me-3 me-lg-5">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  id="reportingRead"
                                />
                                <label
                                  class="form-check-label"
                                  for="reportingRead"
                                >
                                  Read
                                </label>
                              </div>
                              <div class="form-check me-3 me-lg-5">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  id="reportingWrite"
                                />
                                <label
                                  class="form-check-label"
                                  for="reportingWrite"
                                >
                                  Write
                                </label>
                              </div>
                              <div class="form-check">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  id="reportingCreate"
                                />
                                <label
                                  class="form-check-label"
                                  for="reportingCreate"
                                >
                                  Create
                                </label>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-nowrap fw-bolder">API Control</td>
                          <td>
                            <div class="d-flex">
                              <div class="form-check me-3 me-lg-5">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  id="apiRead"
                                />
                                <label class="form-check-label" for="apiRead">
                                  Read
                                </label>
                              </div>
                              <div class="form-check me-3 me-lg-5">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  id="apiWrite"
                                />
                                <label class="form-check-label" for="apiWrite">
                                  Write
                                </label>
                              </div>
                              <div class="form-check">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  id="apiCreate"
                                />
                                <label class="form-check-label" for="apiCreate">
                                  Create
                                </label>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-nowrap fw-bolder">
                            Repository Management
                          </td>
                          <td>
                            <div class="d-flex">
                              <div class="form-check me-3 me-lg-5">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  id="repoRead"
                                />
                                <label class="form-check-label" for="repoRead">
                                  Read
                                </label>
                              </div>
                              <div class="form-check me-3 me-lg-5">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  id="repoWrite"
                                />
                                <label class="form-check-label" for="repoWrite">
                                  Write
                                </label>
                              </div>
                              <div class="form-check">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  id="repoCreate"
                                />
                                <label class="form-check-label" for="repoCreate">
                                  Create
                                </label>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-nowrap fw-bolder">Payroll</td>
                          <td>
                            <div class="d-flex">
                              <div class="form-check me-3 me-lg-5">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  id="payrollRead"
                                />
                                <label class="form-check-label" for="payrollRead">
                                  Read
                                </label>
                              </div>
                              <div class="form-check me-3 me-lg-5">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  id="payrollWrite"
                                />
                                <label
                                  class="form-check-label"
                                  for="payrollWrite"
                                >
                                  Write
                                </label>
                              </div>
                              <div class="form-check">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  id="payrollCreate"
                                />
                                <label
                                  class="form-check-label"
                                  for="payrollCreate"
                                >
                                  Create
                                </label>
                              </div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- Permission table -->
                </div>
                <div class="col-12 text-center mt-2">
                  <button type="submit" class="btn btn-primary me-1">
                    Submit
                  </button>
                  <button
                    type="reset"
                    class="btn btn-outline-secondary"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  >
                    Discard
                  </button>
                </div>
              </form>
              <!--/ Add role form -->
            </div>
          </div>
        </div>
      </div>
      <!--/ Create Domain -->
@endsection

@section('js')
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
   <script src="../../../app-assets/js/scripts/forms/form-validation.js"></script>
   <script
     src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"
     integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g=="
     crossorigin="anonymous"
     referrerpolicy="no-referrer"
   ></script>
   <script src={{asset("assets/js/scripts.js")}}></script>

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
