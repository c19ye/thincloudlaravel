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
        @if ($message = Session::get("success"))
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Başarılı</h4>
                <div class="alert-body">
                    {{$message}}
                </div>
            </div>
        @endif
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <div class="card-header d-flex justify-content-between pb-0">
                <h4 class="card-title">FileHub Boyutları</h4>
                <div class="dropdown chart-dropdown">
                    @foreach ($virtual as $virt)

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
                  @endforeach
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
                          <td>
                          @foreach($fileDepart as $fileDep)
                            @if($fileDep->filehubs_id == $file->id)
                                @foreach($departman as $dep)
                                    @if ($dep->id == $fileDep->department_id)
                                        {{$dep->name}},
                                    @endif
                                @endforeach
                            @endif
                          @endforeach
                          </td>
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
                    @if ($virtual == null)
                    <tr>
                        <td>Kayıt Yok!</td>
                        <td>Kayıt Yok!</td>
                        <td>Kayıt Yok!</td>
                        <td>Kayıt Yok!</td>
                        <td>Kayıt Yok!</td>
                    </tr>
                    @else
                        @foreach ($virtual as $virt)
                        @foreach ($fileVm as $vm)
                        @if($virt->id == $vm->thincloud_id)
                            <tr>
                                <td>{{$virt->name}}</td>
                                <td>{{$virt->surname}}</td>
                                <td>{{$virt->username}}</td>
                                <td>
                                    <span class="badge bg-success">{{$virt->role}}</span>
                                </td>
                                <td class="text-end">
                                    <a
                                      class="btn me-1"
                                      data-bs-toggle="collapse"
                                      href="#editfilehub{{$virt->id}}"
                                      role="button"
                                      aria-expanded="false"
                                      aria-controls="editfilehub{{$virt->id}}"
                                    >
                                      <i data-feather="edit"></i>
                                    </a>
                                  </td>
                            </tr>
                            <form action="/mynetwork/filehubs/update" method="POST">
                                @csrf
                            <tr>
                                <td colspan="12" class="hiddenRow">
                                  <div
                                    class="row accordion-body collapse"
                                    id="editfilehub{{$virt->id}}"
                                  >
                                    <input type="hidden" name="id" value="{{$virt->id}}">
                                    <div class="card col-3">
                                      <label
                                        class="form-label"
                                        for="name"
                                        >Yeni İsmi Girin</label
                                      >
                                      <input
                                        type="text"
                                        id="new_name{{$virt->id}}"
                                        name="name"
                                        class="form-control"
                                        placeholder="Yeni İsim"
                                        data-msg="Lütfen İsminizi Girin"
                                      />
                                    </div>
                                    <div class="card col-3">
                                      <label
                                        class="form-label"
                                        for="surname"
                                        >Yeni Soyismi Girin</label
                                      >
                                      <input
                                        type="text"
                                        id="surname{{$virt->id}}"
                                        name="surname"
                                        class="form-control"
                                        placeholder="Yeni Soyisim"
                                        data-msg="Lütfen Soyisminizi Girin"
                                      />
                                    </div>
                                    <div class="card col-3">
                                      <label
                                        class="form-label"
                                        for="username"
                                        >Yeni Kullanıcı Adı Girin</label
                                      >
                                      <input
                                        type="text"
                                        id="new_username{{$virt->id}}"
                                        name="username"
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
                                        id="role{{$virt->id}}"
                                        name="role"
                                        required
                                      >
                                      @foreach ($roles as $role)
                                        <option value="{{$role->name}}">{{$role->name}}</option>
                                      @endforeach
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
                            </form>
                            @endif
                            @endforeach
                        @endforeach
                    @endif
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
                      name="auto_backup"
                      type="checkbox"
                      @if($filehubcheck != null)
                        {{$filehubcheck->auto_backup ? "checked":""}}
                      @endif
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
                      name="auto_scan"
                      type="checkbox"
                      @if($filehubcheck != null)
                        {{$filehubcheck->auto_scan ? "checked":""}}
                      @endif
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
                      name="critical_notification"
                      type="checkbox"
                      @if($filehubcheck != null)
                        {{$filehubcheck->critical_notification ? "checked":""}}
                      @endif
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
          <form class="needs-validation" method="POST" action="/mynetwork/filehubs/create_filehub" novalidate>
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
                        aria-controls="addfilehub-input"
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
                        @if ($errors->createfilehub->any())
                        <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                            <div class="alert-body d-flex align-items-center">
                                <i data-feather="info" class="me-50"></i>
                                <span>{{$errors->createfilehub->first("name")}}</span>
                            </div>
                        </div>
                        @endif
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
                              value="10"
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
                              value="20"
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
                              value="30"
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
                              value="40"
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
                              value="50"
                            />
                            <label class="form-check-label" for="inlineRadio2"
                              >50GB</label
                            >
                          </div>
                        </div>
                        @if ($errors->createfilehub->any())
                        <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                            <div class="alert-body d-flex align-items-center">
                                <i data-feather="info" class="me-50"></i>
                                <span>{{$errors->createfilehub->first("storage_size")}}</span>
                            </div>
                        </div>
                        @endif
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
                        @if ($errors->createfilehub->any())
                        <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                            <div class="alert-body d-flex align-items-center">
                                <i data-feather="info" class="me-50"></i>
                                <span>{{$errors->createfilehub->first("backup_time")}}</span>
                            </div>
                        </div>
                        @endif
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
                                  name="select_departmans[]"
                                  id="select-departman{{$dep->id}}"
                                  value="{{$dep->id}}"
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
                        @if ($errors->createfilehub->any())
                        <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                            <div class="alert-body d-flex align-items-center">
                                <i data-feather="info" class="me-50"></i>
                                <span>{{$errors->createfilehub->first("select_departmans")}}</span>
                            </div>
                        </div>
                        @endif
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
                                name="select_vms[]"
                                id="select-vm{{$virt->id}}"
                                value="{{$virt->id}}"
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
                        @if ($errors->createfilehub->any())
                        <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                            <div class="alert-body d-flex align-items-center">
                                <i data-feather="info" class="me-50"></i>
                                <span>{{$errors->createfilehub->first("select_vms")}}</span>
                            </div>
                        </div>
                        @endif
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
            method="POST"
            action="/mynetwork/filehubs/add_filehub_user"
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
                      id="inlineCheckbox{{$file->id}}"
                      name="add_filehub[]"
                      value="{{$file->id}}"
                      unchecked
                    />
                    <label class="form-check-label" for="inlineCheckbox{{$file->id}}"
                      >{{$file->name}}</label
                    >
                  </div>
                  @endforeach
                @endif
              </div>
              @if ($errors->adduser->any())
                        <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                            <div class="alert-body d-flex align-items-center">
                                <i data-feather="info" class="me-50"></i>
                                <span>{{$errors->adduser->first("add_filehub")}}</span>
                            </div>
                        </div>
                        @endif
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
                      name="add_vm[]"
                      id="inlineCheckbox{{$virt->id}}"
                      value="{{$virt->id}}"
                      unchecked
                    />
                    <label class="form-check-label" for="inlineCheckbox{{$virt->id}}"
                      >{{$virt->name}}</label
                    >
                  </div>
                  @endforeach
                  @endif


              </div>
              @if ($errors->adduser->any())
              <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                  <div class="alert-body d-flex align-items-center">
                      <i data-feather="info" class="me-50"></i>
                      <span>{{$errors->adduser->first("add_vm")}}</span>
                  </div>
              </div>
          @endif

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
                        name="add_departman[]"
                        id="inlineCheckbox{{$dep->id}}"
                        value="{{$dep->id}}"
                        unchecked
                      />
                      <label class="form-check-label" for="inlineCheckbox{{$dep->id}}"
                        >{{$dep->name}}</label
                      >
                    </div>
                  @endforeach
                  @endif

              </div>
              @if ($errors->adduser->any())
                        <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                            <div class="alert-body d-flex align-items-center">
                                <i data-feather="info" class="me-50"></i>
                                <span>{{$errors->adduser->first("add_departman")}}</span>
                            </div>
                        </div>
                        @endif

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
            method="POST"
            action="/mynetwork/filehubs/download_filehub"
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
                        id="inlineCheckbox{{$file->id}}"
                        name="download_filehub[]"
                        value="{{$file->id}}"
                        unchecked
                      />
                      <label class="form-check-label" for="inlineCheckbox{{$file->id}}"
                        >{{$file->name}}</label
                      >
                    </div>
                  @endforeach
                @endif


              </div>
              @if ($errors->downloadfilehub->any())
              <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                  <div class="alert-body d-flex align-items-center">
                      <i data-feather="info" class="me-50"></i>
                      <span>{{$errors->downloadfilehub->first("download_filehub")}}</span>
                  </div>
              </div>
            @endif
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
                    name="location"
                    id="inlineRadiofd1"
                    value="North America"
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
                    name="location"
                    id="inlineRadiofd2"
                    value="South America"
                  />
                  <label class="form-check-label" for="inlineRadiofd2"
                    >Güney Amerika</label
                  >
                </div>
                <div class="form-check form-check-inline">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="location"
                    id="inlineRadiofd3"
                    value="Europa"
                  />
                  <label class="form-check-label" for="inlineRadiofd3"
                    >Avrupa</label
                  >
                </div>
                <div class="form-check form-check-inline">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="location"
                    id="inlineRadiofd4"
                    value="Africa"
                  />
                  <label class="form-check-label" for="inlineRadiofd4"
                    >Afrika</label
                  >
                </div>
                <div class="form-check form-check-inline">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="location"
                    id="inlineRadiofd5"
                    value="Asia"
                  />
                  <label class="form-check-label" for="inlineRadiofd5"
                    >Asya</label
                  >
                </div>
                <div class="form-check form-check-inline">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="location"
                    id="inlineRadiofd6"
                    value="Australia"
                  />
                  <label class="form-check-label" for="inlineRadiofd6"
                    >Avustralya</label
                  >
                </div>
              </div>
              @if ($errors->downloadfilehub->any())
              <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                  <div class="alert-body d-flex align-items-center">
                      <i data-feather="info" class="me-50"></i>
                      <span>{{$errors->downloadfilehub->first("location")}}</span>
                  </div>
              </div>
            @endif
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
    $(document).ready(function(){
        $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
        $("#systemNotification1,#systemNotification2,#systemNotification3").change(function(){
            var status=$("#systemNotification1").prop("checked") == true ? 1 : 0;
            var status2=$("#systemNotification2").prop("checked") == true ? 1 : 0;
            var status3=$("#systemNotification3").prop("checked") == true ? 1 : 0;
            $.ajax({
                type: "GET",
                url: "/mynetwork/filehubs/notification",
                data: {"auto_backup" : status,"auto_scan" : status2,"critical_notification":status3},
                dataType: "json",
                success: function (response) {
                    console.log("success")
            }
        });
        });


    });
 </script>

 @if(count($errors->createfilehub) > 0)
    <script type="text/javascript">
        $( document ).ready(function(){
            $('#addfilehub').modal('show');
        });
    </script>
@endif
@if(count($errors->adduser) > 0)
<script type="text/javascript">
    $( document ).ready(function(){
        $('#addfilehubuser').modal('show');
    });
</script>
@endif
@if(count($errors->downloadfilehub) > 0)
<script type="text/javascript">
    $( document ).ready(function(){
        $('#downloadfilehub').modal('show');
    });
</script>
@endif

    <script>
        $(function () {
            $(".alert-success").fadeOut(5000);
        });
    </script>

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
