@extends('layout')
@extends("sabit.nav")
@section('title')
    FileHublarım
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
                    <a href="#">Benim Ağım</a>
                  </li>

                  <li class="breadcrumb-item active">@yield("title")</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
@endsection

@section('css')
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png" />
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet" />

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css" />
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css" />
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/select/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/charts/apexcharts.css" />
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/toastr.min.css" />
    <link rel="stylesheet" type="text/css"
        href="../../../app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" type="text/css"
        href="../../../app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css" />
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
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/pickers/form-flat-pickr.css" />
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/charts/chart-apex.css" />
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/extensions/ext-component-toastr.css" />
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
          <div class="col-xl-3 col-lg-6 col-md-6">
            <a
              href="javascript:;"
              class="role-edit-modal"
              data-bs-toggle="modal"
              data-bs-target="#addfilehub"
            >
              <div
                class="card btn-primary bg-gradient-primary"
                style="height: 105px"
              >
                <div class="card-body text-center">
                  <i
                    class="me-25 mt-md-75 mt-lg-50 size-icon"
                    data-feather="file-plus"
                  ></i>

                  <div class="pt-25">
                    <div class="role-heading">
                      <h4 class="fw-bolder font-small-5 text-center">
                        Yeni FileHub Oluştur
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
              data-bs-target="#addfilehubuser"
            >
              <div
                class="card btn-primary bg-gradient-primary"
                style="height: 105px"
              >
                <div class="card-body text-center">
                  <i
                    class="me-25 mt-md-75 mt-lg-50 size-icon"
                    data-feather="user-plus"
                  ></i>

                  <div class="pt-25">
                    <div class="role-heading">
                      <h4 class="fw-bolder text-center">
                        FileHub'a Kullanıcı Ekle
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
              data-bs-target="#downloadfilehub"
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
                      <h4 class="fw-bolder text-center">FileHub'ımı İndir</h4>
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
              data-bs-target=""
            >
              <div
                class="card btn-primary bg-gradient-primary"
                style="height: 105px"
              >
                <div class="card-body text-center">
                  <i
                    class="me-25 mt-md-75 mt-lg-50 size-icon"
                    data-feather="file"
                  ></i>
                  <div class="pt-25">
                    <div class="role-heading">
                      <h4 class="fw-bolder font-small-5 text-center">
                        FileHub'ınıza Erişin
                      </h4>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <div class="card-header d-flex justify-content-between pb-0">
                <h4 class="card-title">FileHub Boyutları</h4>
                <div class="dropdown chart-dropdown">
                  <button
                    class="btn btn-sm border-0 dropdown-toggle p-50"
                    type="button"
                    id="dropdownItem4"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    VM-1
                    <i data-feather="arrow-down"></i>
                  </button>
                  <div
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="dropdownItem4"
                  >
                    <a class="dropdown-item" href="#">VM-2</a>
                    <a class="dropdown-item" href="#">VM-3</a>
                    <a class="dropdown-item" href="#">VM-4</a>
                  </div>
                </div>
              </div>
              <div class="card-body mb-2">
                <div
                  class="col-sm-10 col-12 d-flex justify-content-center ms-md-2"
                >
                  <div id="support-trackers-chart"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <div>
                  <h4 class="card-title">FileHubs I/O</h4>
                </div>
              </div>
              <div class="card-body height-200 mb-2">
                <canvas
                  class="line-chart-ex chartjs"
                  data-height="200"
                ></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="row" id="basic-table">
          <div class="col-12">
            <div class="card">
              <div class="card-header bg-primary">
                <h4 class="card-title">FileHub'larınız</h4>
              </div>

              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>FileHub Adı</th>
                      <th>Departman</th>
                      <th>Boyut</th>
                      <th>Disk Alanı</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if (count($filehub) == 0)
                      <tr>
                        <td>
                          Kayıt yok!
                        </td>
                        <td>
                          Kayıt yok!
                        </td>
                        <td>
                          Kayıt yok!
                        </td>
                        <td>
                          Kayıt yok!
                        </td>
                      </tr>
                    @else
                      @foreach ($filehub as $file)
                        <tr>
                          <td>{{$file->name}}</td>
                          <td>{{$file->name}}</td>
                          <td>{{$file->storage_size}} GB</td>
                          <td>
                            <div class="progress progress-bar-primary">
                              <div
                                class="progress-bar progress-bar-striped progress-bar-animated"
                                role="progressbar"
                                aria-valuenow="100"
                                aria-valuemin="100"
                                aria-valuemax="100"
                                style="width: 100%"
                              >
                                %{{$file->used_storage}}
                              </div>
                            </div>
                          </td>
                        </tr>
                      @endforeach
                    @endif
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="row" id="basic-table">
          <div class="col-12">
            <div class="card">
              <div class="card-header bg-primary">
                <h4 class="card-title">FileHub Kullanıcılarınız</h4>
              </div>

              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>İsim</th>
                      <th>Soyisim</th>
                      <th>Kullanıcı Adı</th>
                      <th>Rol</th>
                      <th class="text-end">Düzenle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Can</td>
                      <td>Özdemir</td>
                      <td>canozdemir</td>
                      <td>
                        <span class="badge bg-success">Yönetici</span>
                      </td>
                      <td class="text-end">
                        <a
                          class="btn me-1"
                          data-bs-toggle="collapse"
                          href="#editfilehub1"
                          role="button"
                          aria-expanded="false"
                          aria-controls="editfilehub1"
                        >
                          <i data-feather="edit"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="12" class="hiddenRow">
                        <div
                          class="row accordion-body collapse"
                          id="editfilehub1"
                        >
                          <div class="card col-3">
                            <label
                              class="form-label"
                              for="filehubTableFirstName1"
                              >Yeni İsmi Girin</label
                            >
                            <input
                              type="text"
                              id="filehubTableFirstName1"
                              name="filehubTableFirstName1"
                              class="form-control"
                              placeholder="Yeni İsim"
                              data-msg="Lütfen İsminizi Girin"
                            />
                          </div>
                          <div class="card col-3">
                            <label
                              class="form-label"
                              for="filehubTableLastName1"
                              >Yeni Soyismi Girin</label
                            >
                            <input
                              type="text"
                              id="filehubTableLastName1"
                              name="filehubTableLastName1"
                              class="form-control"
                              placeholder="Yeni Soyisim"
                              data-msg="Lütfen Soyisminizi Girin"
                            />
                          </div>
                          <div class="card col-3">
                            <label
                              class="form-label"
                              for="filehubTableNickName1"
                              >Yeni Kullanıcı Adı Girin</label
                            >
                            <input
                              type="text"
                              id="filehubTableNickName1"
                              name="filehubTableNickName1"
                              class="form-control"
                              placeholder="Yeni Kullanıcı Adı"
                              data-msg="Lütfen Kullanıcı Adınızı Girin"
                            />
                          </div>
                          <div class="card col-2">
                            <label class="form-label" for="select-role1"
                              >Yeni Rol Seç</label
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
                          <div class="col-1 mt-2">
                            <button type="submit" class="btn btn-primary">
                              Kaydet
                            </button>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Altuğ</td>
                      <td>Karadağ</td>
                      <td>altugkaradag</td>
                      <td>
                        <span class="badge bg-danger width-50">Üye</span>
                      </td>
                      <td class="text-end">
                        <a
                          class="btn me-1"
                          data-bs-toggle="collapse"
                          href="#editfilehub2"
                          role="button"
                          aria-expanded="false"
                          aria-controls="editfilehub2"
                        >
                          <i data-feather="edit"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="12" class="hiddenRow">
                        <div
                          class="row accordion-body collapse"
                          id="editfilehub2"
                        >
                          <div class="card col-3">
                            <label
                              class="form-label"
                              for="filehubTableFirstName2"
                              >Yeni İsmi Girin</label
                            >
                            <input
                              type="text"
                              id="filehubTableFirstName2"
                              name="filehubTableFirstName2"
                              class="form-control"
                              placeholder="Yeni İsim"
                              data-msg="Lütfen İsminizi Girin"
                            />
                          </div>
                          <div class="card col-3">
                            <label
                              class="form-label"
                              for="filehubTableLastName2"
                              >Yeni Soyismi Girin</label
                            >
                            <input
                              type="text"
                              id="filehubTableLastName2"
                              name="filehubTableLastName2"
                              class="form-control"
                              placeholder="Yeni Soyisim"
                              data-msg="Lütfen Soyisminizi Girin"
                            />
                          </div>
                          <div class="card col-3">
                            <label
                              class="form-label"
                              for="filehubTableNickName2"
                              >Yeni Kullanıcı Adı Girin</label
                            >
                            <input
                              type="text"
                              id="filehubTableNickName2"
                              name="filehubTableNickName2"
                              class="form-control"
                              placeholder="Yeni Kullanıcı Adı"
                              data-msg="Lütfen Kullanıcı Adınızı Girin"
                            />
                          </div>
                          <div class="card col-2">
                            <label class="form-label" for="select-role2"
                              >Yeni Rol Seç</label
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
                          <div class="col-1 mt-2">
                            <button type="submit" class="btn btn-primary">
                              Kaydet
                            </button>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Burak</td>
                      <td>Sakallı</td>
                      <td>bskalli</td>
                      <td>
                        <span class="badge bg-warning">Geliştirici</span>
                      </td>
                      <td class="text-end">
                        <a
                          class="btn me-1"
                          data-bs-toggle="collapse"
                          href="#editfilehub3"
                          role="button"
                          aria-expanded="false"
                          aria-controls="editfilehub3"
                        >
                          <i data-feather="edit"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="12" class="hiddenRow">
                        <div
                          class="row accordion-body collapse"
                          id="editfilehub3"
                        >
                          <div class="card col-3">
                            <label
                              class="form-label"
                              for="filehubTableFirstName3"
                              >Yeni İsmi Girin</label
                            >
                            <input
                              type="text"
                              id="filehubTableFirstName3"
                              name="filehubTableFirstName3"
                              class="form-control"
                              placeholder="Yeni İsim"
                              data-msg="Lütfen İsminizi Girin"
                            />
                          </div>
                          <div class="card col-3">
                            <label
                              class="form-label"
                              for="filehubTableLastName3"
                              >Yeni Soyismi Girin</label
                            >
                            <input
                              type="text"
                              id="filehubTableLastName3"
                              name="filehubTableLastName3"
                              class="form-control"
                              placeholder="Yeni Soyisim"
                              data-msg="Lütfen Soyisminizi Girin"
                            />
                          </div>
                          <div class="card col-3">
                            <label
                              class="form-label"
                              for="filehubTableNickName3"
                              >Yeni Kullanıcı Adı Girin</label
                            >
                            <input
                              type="text"
                              id="filehubTableNickName3"
                              name="filehubTableNickName3"
                              class="form-control"
                              placeholder="Yeni Kullanıcı Adı"
                              data-msg="Lütfen Kullanıcı Adınızı Girin"
                            />
                          </div>
                          <div class="card col-2">
                            <label class="form-label" for="select-role3"
                              >Yeni Rol Seç</label
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
                          <div class="col-1 mt-2">
                            <button type="submit" class="btn btn-primary">
                              Kaydet
                            </button>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Uğur</td>
                      <td>Dündar</td>
                      <td>udundar</td>
                      <td>
                        <span class="badge bg-danger">Üye</span>
                      </td>
                      <td class="text-end">
                        <a
                          class="btn me-1"
                          data-bs-toggle="collapse"
                          href="#editfilehub4"
                          role="button"
                          aria-expanded="false"
                          aria-controls="editfilehub4"
                        >
                          <i data-feather="edit"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="12" class="hiddenRow">
                        <div
                          class="row accordion-body collapse"
                          id="editfilehub4"
                        >
                          <div class="card col-3">
                            <label
                              class="form-label"
                              for="filehubTableFirstName4"
                              >Yeni İsmi Girin</label
                            >
                            <input
                              type="text"
                              id="filehubTableFirstName4"
                              name="filehubTableFirstName4"
                              class="form-control"
                              placeholder="Yeni İsim"
                              data-msg="Lütfen İsminizi Girin"
                            />
                          </div>
                          <div class="card col-3">
                            <label
                              class="form-label"
                              for="filehubTableLastName4"
                              >Yeni Soyismi Girin</label
                            >
                            <input
                              type="text"
                              id="filehubTableLastName4"
                              name="filehubTableLastName4"
                              class="form-control"
                              placeholder="Yeni Soyisim"
                              data-msg="Lütfen Soyisminizi Girin"
                            />
                          </div>
                          <div class="card col-3">
                            <label
                              class="form-label"
                              for="filehubTableNickName4"
                              >Yeni Kullanıcı Adı Girin</label
                            >
                            <input
                              type="text"
                              id="filehubTableNickName4"
                              name="filehubTableNickName4"
                              class="form-control"
                              placeholder="Yeni Kullanıcı Adı"
                              data-msg="Lütfen Kullanıcı Adınızı Girin"
                            />
                          </div>
                          <div class="card col-2">
                            <label class="form-label" for="select-role4"
                              >Yeni Rol Seç</label
                            >
                            <select
                              class="form-select"
                              id="select-role4"
                              required
                            >
                              <option value="admin4">Yönetici</option>
                              <option value="developer4">Geliştirici</option>
                              <option value="member4">Üye</option>
                            </select>
                          </div>
                          <div class="col-1 mt-2">
                            <button type="submit" class="btn btn-primary">
                              Kaydet
                            </button>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Engin</td>
                      <td>Mahmut</td>
                      <td>emahmut</td>
                      <td>
                        <span class="badge bg-warning">Geliştirici</span>
                      </td>
                      <td class="text-end">
                        <a
                          class="btn me-1"
                          data-bs-toggle="collapse"
                          href="#editfilehub5"
                          role="button"
                          aria-expanded="false"
                          aria-controls="editfilehub5"
                        >
                          <i data-feather="edit"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="12" class="hiddenRow">
                        <div
                          class="row accordion-body collapse"
                          id="editfilehub5"
                        >
                          <div class="card col-3">
                            <label
                              class="form-label"
                              for="filehubTableFirstName5"
                              >Yeni İsmi Girin</label
                            >
                            <input
                              type="text"
                              id="filehubTableFirstName5"
                              name="filehubTableFirstName5"
                              class="form-control"
                              placeholder="Yeni İsim"
                              data-msg="Lütfen İsminizi Girin"
                            />
                          </div>
                          <div class="card col-3">
                            <label
                              class="form-label"
                              for="filehubTableLastName5"
                              >Yeni Soyismi Girin</label
                            >
                            <input
                              type="text"
                              id="filehubTableLastName5"
                              name="filehubTableLastName5"
                              class="form-control"
                              placeholder="Yeni Soyisim"
                              data-msg="Lütfen Soyisminizi Girin"
                            />
                          </div>
                          <div class="card col-3">
                            <label
                              class="form-label"
                              for="filehubTableNickName5"
                              >Yeni Kullanıcı Adı Girin</label
                            >
                            <input
                              type="text"
                              id="filehubTableNickName5"
                              name="filehubTableNickName5"
                              class="form-control"
                              placeholder="Yeni Kullanıcı Adı"
                              data-msg="Lütfen Kullanıcı Adınızı Girin"
                            />
                          </div>
                          <div class="card col-2">
                            <label class="form-label" for="select-role5"
                              >Yeni Rol Seç</label
                            >
                            <select
                              class="form-select"
                              id="select-role5"
                              required
                            >
                              <option value="admin5">Yönetici</option>
                              <option value="developer5">Geliştirici</option>
                              <option value="member5">Üye</option>
                            </select>
                          </div>
                          <div class="col-1 mt-2">
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
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="card mb-4">
              <ul class="list-group list-group-flush">
                <li class="list-group-item bg-primary">
                  <i class="me-25" data-feather="database"></i>
                  FileHub'ları Otomatik Yedekleme
                </li>
                <li class="list-group-item">
                  <div class="form-check form-check-primary form-switch">
                    <input
                      class="form-check-input"
                      id="systemNotification1"
                      type="checkbox"
                      checked=""
                    />
                    <label class="form-check-label" for="systemNotification1">
                      FileHub'ların Günlük Olarak Yedeğini Al</label
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
                  <i class="me-25" data-feather="search"></i>
                  FileHub'ları Otomatik Tarama
                </li>
                <li class="list-group-item">
                  <div class="form-check form-check-primary form-switch">
                    <input
                      class="form-check-input"
                      id="systemNotification2"
                      type="checkbox"
                      checked=""
                    />
                    <label class="form-check-label" for="systemNotification2">
                      Zararlı Yazılımlara Karşı Günlük Olarak Tara</label
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
                  <i class="me-25" data-feather="hard-drive"></i>
                  Disk Alanı Bildirimlerini Etkinleştir
                </li>
                <li class="list-group-item">
                  <div class="form-check form-check-primary form-switch">
                    <input
                      class="form-check-input"
                      id="systemNotification3"
                      type="checkbox"
                      checked=""
                    />

                    <label class="form-check-label" for="systemNotification3"
                      >Kritik Disk Alanında Bildirimler Alın</label
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
  <!-- addthincloud modal start-->

  <!---->
  <div class="modal fade" id="addfilehub" tabindex="-1" aria-hidden="true">
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
            <h1 class="role-title">Yeni FileHub Oluştur</h1>
          </div>
          <!-- Add role form -->
          <form class="needs-validation" method="POST" action="create_filehub" novalidate>
            @csrf
            <div class="col-xl-12 col-lg-12">
              <div class="">
                <div class="card-header">
                  <h4 class="card-title"></h4>
                </div>
                <div class="">
                  <ul
                    class="nav nav-tabs justify-content-center mb-3"
                    role="tablist"
                  >
                    <li class="nav-item">
                      <a
                        class="nav-link active"
                        id="addfilehub-tab-input"
                        data-bs-toggle="tab"
                        href="#addfilehub-input"
                        aria-controls="addthincloud-input"
                        role="tab"
                        aria-selected="true"
                        >Oluştur</a
                      >
                    </li>
                    <li class="nav-item">
                      <a
                        class="nav-link"
                        id="addfilehub-tab-dropdown"
                        data-bs-toggle="tab"
                        href="#addfilehub-dropdown"
                        aria-controls="addfilehub-dropdown"
                        role="tab"
                        aria-selected="false"
                        >Okuma/Yazma İzni</a
                      >
                    </li>
                  </ul>
                  <hr class="bg-primary" />
                  <div class="tab-content">
                    <div
                      class="tab-pane active"
                      id="addfilehub-input"
                      aria-labelledby="addfilehub-tab-input"
                      role="tabpanel"
                    >
                      <!--buraya gelecek-->
                      <div class="col-12">
                        <label class="form-label" for="modalAddressFirstName"
                          >FileHub İsim*</label
                        >
                        <input
                          type="text"
                          id="name"
                          name="name"
                          class="form-control"
                          placeholder="ThinCloud"
                          data-msg="Please enter your first name"
                        />
                      </div>
                      <hr class="bg-primary" />
                      <div class="col-12">
                        <div class="col-12">
                          <h3
                            class="address-title text-center mb-1"
                            id="addNewAddressTitle"
                          >
                            FileHub Boyutunu Seç
                          </h3>
                        </div>

                        <div
                          class="col-md-12 d-md-flex justify-content-center"
                        >
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="radio"
                              name="storage_size"
                              id="storage_option1"
                              value="option1"
                              checked
                            />
                            <label class="form-check-label" for="inlineRadio1"
                              >10GB</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="radio"
                              name="storage_size"
                              id="storage_option2"
                              value="option2"
                            />
                            <label class="form-check-label" for="inlineRadio2"
                              >20GB</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="radio"
                              name="storage_size"
                              id="storage_option3"
                              value="option3"
                            />
                            <label class="form-check-label" for="inlineRadio2"
                              >30GB</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="radio"
                              name="storage_size"
                              id="storage_option4"
                              value="option4"
                            />
                            <label class="form-check-label" for="inlineRadio2"
                              >40GB</label
                            >
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="radio"
                              name="storage_size"
                              id="storage_option5"
                              value="option5"
                            />
                            <label class="form-check-label" for="inlineRadio2"
                              >50GB</label
                            >
                          </div>
                        </div>
                      </div>
                      <hr class="bg-primary" />
                      <div class="col-12">
                        <h3
                          class="address-title text-center mb-1"
                          id="addNewAddressTitle"
                        >
                          FileHubs Yedekleme Aralığını Seç
                        </h3>
                        <select
                          id="modalAddressCountry"
                          name="backup_time"
                          class="select2 form-select"
                        >
                          <option value="Daily">Günlük Yedekleme</option>
                          <option value="Weekly">Haftalık Yedekleme</option>
                          <option value="Monthly">Aylık Yedekleme</option>
                        </select>
                      </div>
                      <div class="row mt-2">
                        <div class="col-12 text-end">
                          <a
                            class="btn btn-primary btnNext"

                            >Sonraki</a
                          >
                        </div>
                      </div>
                    </div>
                    <div
                      class="tab-pane"
                      id="addfilehub-dropdown"
                      aria-labelledby="addfilehub-tab-dropdown"
                      role="tabpanel"
                    >
                      <div class="col-12">
                        <div class="col-12">
                          <h3
                            class="address-title text-center mb-1"
                            id="addNewAddressTitle"
                          >
                            Departmana Okuma/Yazma İzni Ekle
                          </h3>
                        </div>
                        <div class="col-12 d-md-flex justify-content-center">
                          @if (count($departman) == 0)
                              <p>Kayıtlı departmanınız bulunmuyor!</p>
                          @else
                            @foreach ($departman as $dep)
                            <div class="form-check form-check-inline">
                              
                              
                                  <input
                                  class="form-check-input"
                                  type="checkbox"
                                  name="select-departmans"
                                  id="select-departman1"
                                  value="unchecked"
                                  unchecked
                              />
                              <label
                                  class="form-check-label"
                                  for="inlineCheckbox1"
                                  >{{$dep->name}}
                              </label>
                            </div>
                            @endforeach
                          @endif
                        </div>
                      </div>
                      <hr class="bg-primary" />
                      <div class="col-12">
                        <div class="col-12">
                          <h3
                            class="address-title text-center mb-1"
                            id="addNewAddressTitle"
                          >
                            FileHub'a Okuma/Yazma İzni İçin Ekstra Kullanıcı
                            Ekle
                          </h3>
                        </div>

                        <div class="col-12 d-md-flex justify-content-center">
                          @if (count($virtual) == 0)
                            <p>Kayıtlı thincloudınız bulunmuyor!</p>
                          @else
                            @foreach ($virtual as $virt)
                            <div class="form-check form-check-inline">
                              <input
                                class="form-check-input"
                                type="checkbox"
                                name="select-vms"
                                id="select-vm1"
                                value="unchecked"
                                unchecked
                              />
                              <label
                                class="form-check-label"
                                for="inlineCheckbox4"
                                >{{$virt->name}}</label
                              >
                            </div>
                            @endforeach
                          @endif
                        </div>
                      </div>
                      <hr class="bg-primary" />
                      <div class="col-12">
                        <div class="col-12">
                          <h3
                            class="address-title text-center mb-1"
                            id="addNewAddressTitle"
                          >
                            Hariç Tutulan Departmanları Seç
                          </h3>
                        </div>

                        <div class="col-12 d-md-flex justify-content-center">
                          @if (count($departman) == 0)
                            <p>Kayıtlı departmanınız bulunmuyor!</p>
                          @else
                            @foreach ($departman as $dep)
                            <div class="form-check form-check-inline">
                              <input
                                class="form-check-input"
                                type="checkbox"
                                name="discrete-departmans"
                                id="discrete-departman1"
                                value="checked"
                                unchecked
                              />
                              <label
                                class="form-check-label"
                                for="inlineCheckbox7"
                                >{{$dep->name}}</label
                              >
                            </div>
                            @endforeach
                          @endif
                        </div>
                      </div>
                      <hr class="bg-primary" />
                      <div class="col-12">
                        <div class="col-12">
                          <h3
                            class="address-title text-center mb-1"
                            id="addNewAddressTitle"
                          >
                            Hariç Tutulan ThinCloud Seç
                          </h3>
                        </div>

                        <div class="col-12 d-md-flex justify-content-center">
                          @if (count($virtual) == 0)
                            <p>Kayıtlı thincloudınız bulunmuyor!</p>
                          @else
                            @foreach ($virtual as $virt)
                            <div class="form-check form-check-inline">
                              <input
                                class="form-check-input"
                                type="checkbox"
                                name="discrete-vms"
                                id="discrete-vm1"
                                value="checked"
                                unchecked
                              />
                              <label
                                class="form-check-label"
                                for="inlineCheckbox10"
                                >{{$virt->name}}</label
                              >
                            </div>
                            @endforeach
                          @endif
                        </div>
                      </div>
                      <div class="col-12 text-end">
                        <button
                          type="submit"
                          class="btn btn-primary me-1 mt-2"
                        >
                          Oluştur
                        </button>
                        <button
                          type="reset"
                          class="btn btn-outline-secondary mt-2"
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
          </form>
          <!--/ Add role form -->
        </div>
      </div>
    </div>
  </div>

  <!--adduser modal start-->
  <div
    class="modal fade"
    id="addfilehubuser"
    tabindex="-1"
    aria-labelledby="addfilehubuserTitle"
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
          <h1 class="address-title text-center mb-1" id="addNewAddressTitle">
            FileHub(lar)'a Kullanıcı Ekle
          </h1>
          <hr class="bg-primary" />
          <form
            id="addNewAddressForm"
            class="row gy-1 gx-2"
            onsubmit="return false"
            method="POST"
            action="add_filehub_user"
          >
          @csrf
            <div class="col-12">
              <div class="col-12">
                <h3
                  class="address-title text-center mb-1"
                  id="addNewAddressTitle"
                >
                  Eklenecek Kullanıcı İçin FileHub Seç
                </h3>
              </div>

              <div class="col-12 d-md-flex justify-content-center">
                @if (count($filehub) == 0)
                  <p>Kayıtlı Filehub'ınız bulunmuyor!</p>

                  @else 
                  @foreach ($filehub as $file)
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      id="inlineCheckbox13"
                      name="add_filehub_select"
                      value="unchecked"
                      unchecked
                    />
                    <label class="form-check-label" for="inlineCheckbox13"
                      >{{$file->name}}</label
                    >
                  </div>
                  @endforeach
                  @error('add_filehub_select')
                    <p class="text-danger text-xs">{{$message}}</p>
                  @enderror
                @endif
              </div>
            </div>
            <hr class="bg-primary" />
            <div class="col-12">
              <div class="col-12">
                <h3
                  class="address-title text-center mb-1"
                  id="addNewAddressTitle"
                >
                  FileHub'a Eklenecek ThinCloud'u Seç
                </h3>
              </div>

              <div class="col-12 d-md-flex justify-content-center">
                @if (count($virtual) == 0)
                  <p>Kayıtlı thincloudınız bulunmuyor!</p>
                @else
                @foreach ($virtual as $virt)
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      name="add_filehub_vm"
                      id="inlineCheckbox16"
                      value="unchecked"
                      unchecked
                    />
                    <label class="form-check-label" for="inlineCheckbox16"
                      >{{$virt->name}}</label
                    >
                  </div>
                  @endforeach
                  @error('add_filehub_vm')
                    <p class="text-danger text-xs">{{$message}}</p>
                  @enderror
                  @endif
              </div>
            </div>
            <hr class="bg-primary" />
            <div class="col-12">
              <div class="col-12">
                <h3
                  class="address-title text-center mb-1"
                  id="addNewAddressTitle"
                >
                  FileHuba Eklenecek Departmanı Seç
                </h3>
              </div>

              <div class="col-12 d-md-flex justify-content-center">
                @if (count($departman) == 0)
                  <p>Kayıtlı departmanınız bulunmuyor!</p>
                @else
                  @foreach ($departman as $dep)
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        name=add_filehub_departman
                        id="inlineCheckbox19"
                        value="unchecked"
                        unchecked
                      />
                      <label class="form-check-label" for="inlineCheckbox19"
                        >{{$dep->name}}</label
                      >
                    </div>
                  @endforeach
                  @error('add_filehub_departman')
                    <p class="text-danger text-xs">{{$message}}</p>
                  @enderror
                @endif
                
              </div>
            </div>
            <div class="col-12 text-end">
              <button type="submit" class="btn btn-primary me-1 mt-2">
                Ekle
              </button>
              <button
                type="reset"
                class="btn btn-outline-secondary mt-2"
                data-bs-dismiss="modal"
                aria-label="Close"
              >
                İptal
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--adduser modal end-->
  <!--downloadfilehub modal start-->
  <div
    class="modal fade"
    id="downloadfilehub"
    tabindex="-1"
    aria-labelledby="downloadfilehubTitle"
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
          <h1 class="address-title text-center mb-1" id="addNewAddressTitle">
            FileHub(lar) İndirme
          </h1>
          <hr class="bg-primary" />
          <form
            id="addNewAddressForm"
            class="row gy-1 gx-2"
            onsubmit="return false"
            method="POST"
            action="download_filehub"
          >
          @csrf
            <div class="col-12">
              <div class="col-12">
                <h3
                  class="address-title text-center mb-1"
                  id="addNewAddressTitle"
                >
                  FileHub(lar) Seç
                </h3>
              </div>

              <div class="col-12 d-md-flex justify-content-center">
                @if (count($filehub) == 0)
                  <p>Kayıtlı Filehub'ınız bulunmuyor!</p>
                @else
                  @foreach ($filehub as $file)
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="inlineCheckboxfdc1"
                        value="unchecked"
                        unchecked
                      />
                      <label class="form-check-label" for="inlineCheckboxfdc1"
                        >{{$file->name}}</label
                      >
                    </div>
                  @endforeach
                @endif
              </div>
            </div>
            <hr class="bg-primary" />
            <div class="col-12">
              <div class="col-12">
                <h3
                  class="address-title text-center mb-1"
                  id="addNewAddressTitle"
                >
                  Konum Seç
                </h3>
              </div>

              <div class="col-md-12 d-lg-flex justify-content-center">
                <div class="form-check form-check-inline">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="inlineRadioOptions"
                    id="inlineRadiofd1"
                    value="option1"
                    checked
                  />
                  <label class="form-check-label" for="inlineRadiofd1"
                    >Kuzey Amerika</label
                  >
                </div>
                <div class="form-check form-check-inline">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="inlineRadioOptions"
                    id="inlineRadiofd2"
                    value="option2"
                  />
                  <label class="form-check-label" for="inlineRadiofd2"
                    >Güney Amerika</label
                  >
                </div>
                <div class="form-check form-check-inline">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="inlineRadioOptions"
                    id="inlineRadiofd3"
                    value="option2"
                  />
                  <label class="form-check-label" for="inlineRadiofd3"
                    >Avrupa</label
                  >
                </div>
                <div class="form-check form-check-inline">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="inlineRadioOptions"
                    id="inlineRadiofd4"
                    value="option2"
                  />
                  <label class="form-check-label" for="inlineRadiofd4"
                    >Afrika</label
                  >
                </div>
                <div class="form-check form-check-inline">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="inlineRadioOptions"
                    id="inlineRadiofd5"
                    value="option2"
                  />
                  <label class="form-check-label" for="inlineRadiofd5"
                    >Asya</label
                  >
                </div>
                <div class="form-check form-check-inline">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="inlineRadioOptions"
                    id="inlineRadiofd6"
                    value="option2"
                  />
                  <label class="form-check-label" for="inlineRadiofd6"
                    >Avustralya</label
                  >
                </div>
              </div>
            </div>
            <div class="col-12 text-end">
              <button type="submit" class="btn btn-primary me-1 mt-2">
                İndir
              </button>
              <button
                type="reset"
                class="btn btn-outline-secondary mt-2"
                data-bs-dismiss="modal"
                aria-label="Close"
              >
                İptal
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--downloadfilehub modal end-->
  <!-- END: Content-->
@endsection

@section('js')
    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="../../../app-assets/vendors/js/charts/chart.min.js"></script>
    <script src="../../../app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
    <script src="../../../app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="../../../app-assets/vendors/js/extensions/toastr.min.js"></script>
    <script src="../../../app-assets/vendors/js/extensions/moment.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/pages/page-api-key.js"></script>
    <script src="../../../app-assets/js/scripts/charts/chart-chartjs.js"></script>
    <script src="../../../app-assets/js/scripts/pages/dashboard-analytics.js"></script>
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
