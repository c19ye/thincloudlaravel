@extends("layout")
@extends("sabit.nav")
@section('title')
    Kullanıcı Rolleri
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
    <link rel="stylesheet" type="text/css"
        href="../../../app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" type="text/css"
        href="../../../app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css" />
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css" />
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/select/select2.min.css" />
    <link rel="stylesheet" type="text/css"
        href="../../../app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css" />

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
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-body">
                <h3>Roller Listesi</h3>

                <!-- Role cards -->
                <div class="row">
                    @foreach ($roles as $role)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <span>Toplam 4 Kullanıcı</span>
                                    <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            title="Vinnie Mostowy" class="avatar avatar-sm pull-up">
                                            <img class="rounded-circle" src="../../../app-assets/images/avatars/2.png"
                                                alt="Avatar" />
                                        </li>
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            title="Allen Rieske" class="avatar avatar-sm pull-up">
                                            <img class="rounded-circle" src="../../../app-assets/images/avatars/12.png"
                                                alt="Avatar" />
                                        </li>
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            title="Julee Rossignol" class="avatar avatar-sm pull-up">
                                            <img class="rounded-circle" src="../../../app-assets/images/avatars/6.png"
                                                alt="Avatar" />
                                        </li>
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            title="Kaith D'souza" class="avatar avatar-sm pull-up">
                                            <img class="rounded-circle" src="../../../app-assets/images/avatars/11.png"
                                                alt="Avatar" />
                                        </li>
                                    </ul>
                                </div>
                                <div class="d-flex justify-content-between align-items-end mt-1 pt-25">
                                    <div class="role-heading">
                                        <h4 class="fw-bolder">{{$role->name}}</h4>
                                        <a onclick="f()" href="javascript:;" class="role-edit-modal" data-bs-toggle="modal" id="{{$role->id}}"
                                            data-bs-target="#editRoleModal{{$role->id}}">
                                            <small class="fw-bolder">Rol Düzenle</small>
                                        </a>
                                    </div>
                                    <a href="javascript:void(0);" class="text-body"><i data-feather="user-plus"
                                            class="font-medium-5"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="card">
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="d-flex align-items-end justify-content-center h-100">
                                        <img src="../../../app-assets/images/illustration/faq-illustrations.svg"
                                            class="img-fluid mt-2" alt="Image" width="85" />
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="card-body text-sm-end text-center ps-sm-0">
                                        <a href="javascript:void(0)" data-bs-target="#addRoleModal"
                                            data-bs-toggle="modal" class="stretched-link text-nowrap add-new-role">
                                            <span class="btn btn-primary mb-1">Yeni Rol Ekle</span>
                                        </a>
                                        <p class="mb-0">Mevcut değilse, rol ekle</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Role cards -->

                <h3 class="mt-50">Rolleri ile toplam kullanıcı sayısı</h3>
                <p class="mb-2">
                    Şirketinizin tüm yönetici hesaplarını ve ortak rollerini bulun.
                </p>
                <!-- table -->
                <div class="card col-12">
                    <div class="table-responsive">
                        <table class="user-list-table-role table">
                            <thead class="table-light">
                                <tr>
                                    <th></th>
                                    <th>İsİm</th>
                                    <th>Rol</th>
                                    <th>Plan</th>
                                    <th>Faturalandırma</th>
                                    <th>Düzenle</th>
                                    <th>sİL</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <!-- table -->
                <!-- Add Role Modal -->
                <div class="modal fade" id="addRoleModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-add-new-role">
                        <div class="modal-content">
                            <div class="modal-header bg-transparent">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body px-5 pb-5">
                                <div class="text-center mb-4">
                                    <h1 class="role-title">Yeni Rol Ekle</h1>
                                    <p>Rol izinlerini ayarla</p>
                                </div>
                                <!-- Add role form -->
                                <form id="addRoleForm" class="row" action="/roles/create" method="POST">
                                    @csrf
                                    <div class="col-12">
                                        <label class="form-label" for="modalRoleName">Rol İsmi</label>
                                        <input type="text" id="modalRoleName" name="name"
                                            class="form-control" placeholder="Rol ismini gir" tabindex="-1"
                                            data-msg="Lütfen isim gir" />
                                            @error('name')
                                            <p class="text-danger text-xs">{{$message}}</p>
                                            @enderror
                                    </div>
                                    <div class="col-12">
                                        <h4 class="mt-2 pt-50">Rol İzinleri</h4>
                                        <!-- Permission table -->
                                        <div class="table-responsive">
                                            <table class="table table-flush-spacing">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-nowrap fw-bolder">
                                                            Yönetici Erişimi
                                                            <span data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Sisteme tam erişim izni verir">
                                                                <i data-feather="info"></i>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="selectAll" />
                                                                <label class="form-check-label" for="selectAll">
                                                                    Hepsini Seç
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-nowrap fw-bolder">
                                                            Kullanıcı Yönetimi
                                                        </td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <div class="form-check me-3 me-lg-5">
                                                                    <input class="form-check-input" type="checkbox" name="user_read" value="1"
                                                                        id="userManagementRead" />
                                                                    <label class="form-check-label"
                                                                        for="userManagementRead">
                                                                        Okuma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check me-3 me-lg-5">
                                                                    <input class="form-check-input" type="checkbox" name="user_write" value="1"
                                                                        id="userManagementWrite" />
                                                                    <label class="form-check-label"
                                                                        for="userManagementWrite">
                                                                        Yazma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" name="user_create" value="1"
                                                                        id="userManagementCreate" />
                                                                    <label class="form-check-label"
                                                                        for="userManagementCreate">
                                                                        Oluşturma
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-nowrap fw-bolder">
                                                            İçerik Yönetimi
                                                        </td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <div class="form-check me-3 me-lg-5">
                                                                    <input class="form-check-input" type="checkbox" name="content_read" value="1"
                                                                        id="contentManagementRead" />
                                                                    <label class="form-check-label"
                                                                        for="contentManagementRead">
                                                                        Okuma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check me-3 me-lg-5">
                                                                    <input class="form-check-input" type="checkbox" name="content_write" value="1"
                                                                        id="contentManagementWrite" />
                                                                    <label class="form-check-label"
                                                                        for="contentManagementWrite">
                                                                        Yazma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" name="content_create" value="1"
                                                                        id="contentManagementCreate" />
                                                                    <label class="form-check-label"
                                                                        for="contentManagementCreate">
                                                                        Oluşturma
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-nowrap fw-bolder">
                                                            Anlaşmazlık Yönetimi
                                                        </td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <div class="form-check me-3 me-lg-5">
                                                                    <input class="form-check-input" type="checkbox" name="disputes_read" value="1"
                                                                        id="dispManagementRead" />
                                                                    <label class="form-check-label"
                                                                        for="dispManagementRead">
                                                                        Okuma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check me-3 me-lg-5">
                                                                    <input class="form-check-input" type="checkbox" name="disputes_write" value="1"
                                                                        id="dispManagementWrite" />
                                                                    <label class="form-check-label"
                                                                        for="dispManagementWrite">
                                                                        Yazma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" name="disputes_create" value="1"
                                                                        id="dispManagementCreate" />
                                                                    <label class="form-check-label"
                                                                        for="dispManagementCreate">
                                                                        Oluşturma
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-nowrap fw-bolder">
                                                            Veritabanı Yönetimi
                                                        </td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <div class="form-check me-3 me-lg-5">
                                                                    <input class="form-check-input" type="checkbox" name="database_read" value="1"
                                                                        id="dbManagementRead" />
                                                                    <label class="form-check-label"
                                                                        for="dbManagementRead">
                                                                        Okuma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check me-3 me-lg-5">
                                                                    <input class="form-check-input" type="checkbox" name="database_write" value="1"
                                                                        id="dbManagementWrite" />
                                                                    <label class="form-check-label"
                                                                        for="dbManagementWrite">
                                                                        Yazma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" name="database_create" value="1"
                                                                        id="dbManagementCreate" />
                                                                    <label class="form-check-label"
                                                                        for="dbManagementCreate">
                                                                        Oluşturma
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-nowrap fw-bolder">
                                                            Finansal Yönetim
                                                        </td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <div class="form-check me-3 me-lg-5">
                                                                    <input class="form-check-input" type="checkbox" name="financial_read" value="1"
                                                                        id="finManagementRead" />
                                                                    <label class="form-check-label"
                                                                        for="finManagementRead">
                                                                        Okuma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check me-3 me-lg-5">
                                                                    <input class="form-check-input" type="checkbox" name="financial_write" value="1"
                                                                        id="finManagementWrite" />
                                                                    <label class="form-check-label"
                                                                        for="finManagementWrite">
                                                                        Yazma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" name="financial_create" value="1"
                                                                        id="finManagementCreate" />
                                                                    <label class="form-check-label"
                                                                        for="finManagementCreate">
                                                                        Oluşturma
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-nowrap fw-bolder">Raporlama</td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <div class="form-check me-3 me-lg-5">
                                                                    <input class="form-check-input" type="checkbox" name="reporting_read" value="1"
                                                                        id="reportingRead" />
                                                                    <label class="form-check-label" for="reportingRead">
                                                                        Okuma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check me-3 me-lg-5">
                                                                    <input class="form-check-input" type="checkbox" name="reporting_write" value="1"
                                                                        id="reportingWrite" />
                                                                    <label class="form-check-label" for="reportingWrite">
                                                                        Yazma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" name="reporting_create" value="1"
                                                                        id="reportingCreate" />
                                                                    <label class="form-check-label" for="reportingCreate">
                                                                        Oluşturma
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-nowrap fw-bolder">
                                                            API Kontrolü
                                                        </td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <div class="form-check me-3 me-lg-5">
                                                                    <input class="form-check-input" type="checkbox" name="apicontrol_read" value="1"
                                                                        id="apiRead" />
                                                                    <label class="form-check-label" for="apiRead">
                                                                        Okuma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check me-3 me-lg-5">
                                                                    <input class="form-check-input" type="checkbox" name="apicontrol_write" value="1"
                                                                        id="apiWrite" />
                                                                    <label class="form-check-label" for="apiWrite">
                                                                        Yazma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" name="apicontrol_create" value="1"
                                                                        id="apiCreate" />
                                                                    <label class="form-check-label" for="apiCreate">
                                                                        Oluşturma
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-nowrap fw-bolder">
                                                            Depo Yönetimi
                                                        </td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <div class="form-check me-3 me-lg-5">
                                                                    <input class="form-check-input" type="checkbox" name="repository_read" value="1"
                                                                        id="repoRead" />
                                                                    <label class="form-check-label" for="repoRead">
                                                                        Okuma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check me-3 me-lg-5">
                                                                    <input class="form-check-input" type="checkbox" name="repository_write" value="1"
                                                                        id="repoWrite" />
                                                                    <label class="form-check-label" for="repoWrite">
                                                                        Yazma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" name="repository_create" value="1"
                                                                        id="repoCreate" />
                                                                    <label class="form-check-label" for="repoCreate">
                                                                        Oluşturma
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
                                            Oluştur
                                        </button>
                                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            İptal
                                        </button>
                                    </div>
                                </form>
                                <!--/ Add role form -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Add Role Modal -->


                 <!-- Edit Role Modal -->
@foreach ($roles as $role)
                 <div class="modal fade " id="editRoleModal{{$role->id}}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-add-new-role">
                        <div class="modal-content">
                            <div class="modal-header bg-transparent">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body px-5 pb-5">
                                <div class="text-center mb-4">
                                    <h1 class="role-title">Rol DÜzenle</h1>
                                    <p>Rol izinlerini ayarla</p>
                                </div>
                                <!-- Edit role form -->
                                <form id="editRoleForm" class="row" action="/roles/update" method="POST">
                                    @csrf
                                    <input type="hidden" class="editRoleid" name="id" value="{{$role->id}}">
                                    <div class="col-12">
                                        <label class="form-label" for="modalRoleName">Rol İsmi</label>
                                        <input type="text" id="modalRoleName" name="name" value="{{$role->name}}"
                                            class="form-control" placeholder="Rol ismini gir" tabindex="-1"
                                            data-msg="Lütfen isim gir" />
                                            @error('name')
                                            <p class="text-danger text-xs">{{$message->update}}</p>
                                            @enderror
                                    </div>
                                    <div class="col-12">
                                        <h4 class="mt-2 pt-50">Rol İzinleri</h4>
                                        <!-- Permission table -->
                                        <div class="table-responsive">
                                            <table class="table table-flush-spacing">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-nowrap fw-bolder">
                                                            Yönetici Erişimi
                                                            <span data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Sisteme tam erişim izni verir">
                                                                <i data-feather="info"></i>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="selectAll" />
                                                                <label class="form-check-label" for="selectAll">
                                                                    Hepsini Seç
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-nowrap fw-bolder">
                                                            Kullanıcı Yönetimi
                                                        </td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <div class="form-check me-3 me-lg-5">
                                                                    <input type="hidden" value="0" name="user_read">
                                                                    <input {{ $role->user_read==1 ? 'checked' : '' }} class="form-check-input" type="checkbox" name="user_read" value="1"
                                                                        id="user_read{{$role->id}}" />

                                                                    <label class="form-check-label"
                                                                        for="user_read{{$role->id}}">
                                                                        Okuma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check me-3 me-lg-5">
                                                                    <input type="hidden" value="0" name="user_write">
                                                                    <input {{$role->user_write==1 ? "checked" : ""}} class="form-check-input" type="checkbox" name="user_write" value="1"
                                                                        id="user_write{{$role->id}}" />
                                                                    <label class="form-check-label"
                                                                        for="user_write{{$role->id}}">
                                                                        Yazma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check"><input type="hidden" value="0" name="user_create">
                                                                    <input {{$role->user_create==1 ?"checked" : "" }} class="form-check-input" type="checkbox" name="user_create" value="1"
                                                                        id="user_create{{$role->id}}" />
                                                                    <label class="form-check-label"
                                                                        for="user_create{{$role->id}}">
                                                                        Oluşturma
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-nowrap fw-bolder">
                                                            İçerik Yönetimi
                                                        </td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <div class="form-check me-3 me-lg-5"><input type="hidden" value="0" name="content_read">
                                                                    <input {{$role->content_read == 1 ? "checked" : ""}} class="form-check-input" type="checkbox" name="content_read" value="1"
                                                                        id="content_read{{$role->id}}" />
                                                                    <label class="form-check-label"
                                                                        for="content_read{{$role->id}}">
                                                                        Okuma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check me-3 me-lg-5"><input type="hidden" value="0" name="content_write">
                                                                    <input {{$role->content_write == 1 ? "checked" : ""}} class="form-check-input" type="checkbox" name="content_write" value="1"
                                                                        id="content_write{{$role->id}}" />
                                                                    <label class="form-check-label"
                                                                        for="content_write{{$role->id}}">
                                                                        Yazma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check"><input type="hidden" value="0" name="content_create">
                                                                    <input {{$role->content_create == 1 ? "checked" : ""}} class="form-check-input" type="checkbox" name="content_create" value="1"
                                                                        id="content_create{{$role->id}}" />
                                                                    <label class="form-check-label"
                                                                        for="content_create{{$role->id}}">
                                                                        Oluşturma
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-nowrap fw-bolder">
                                                            Anlaşmazlık Yönetimi
                                                        </td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <div class="form-check me-3 me-lg-5"><input type="hidden" value="0" name="disputes_read">
                                                                    <input {{$role->disputes_read == 1 ? "checked" : ""}} class="form-check-input" type="checkbox" name="disputes_read" value="1"
                                                                        id="disputes_read{{$role->id}}" />
                                                                    <label class="form-check-label"
                                                                        for="disputes_read{{$role->id}}">
                                                                        Okuma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check me-3 me-lg-5"><input type="hidden" value="0" name="disputes_write">
                                                                    <input {{$role->disputes_write == 1 ? "checked" : ""}} class="form-check-input" type="checkbox" name="disputes_write" value="1"
                                                                        id="disputes_write{{$role->id}}" />
                                                                    <label class="form-check-label"
                                                                        for="disputes_write{{$role->id}}">
                                                                        Yazma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check"><input type="hidden" value="0" name="disputes_create">
                                                                    <input {{$role->disputes_create == 1 ? "checked" : ""}} class="form-check-input" type="checkbox" name="disputes_create" value="1"
                                                                        id="disputes_create{{$role->id}}" />
                                                                    <label class="form-check-label"
                                                                        for="disputes_create{{$role->id}}">
                                                                        Oluşturma
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-nowrap fw-bolder">
                                                            Veritabanı Yönetimi
                                                        </td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <div class="form-check me-3 me-lg-5"><input type="hidden" value="0" name="database_read">
                                                                    <input {{$role->database_read == 1 ? "checked" : ""}} class="form-check-input" type="checkbox" name="database_read" value="1"
                                                                        id="database_read{{$role->id}}" />
                                                                    <label class="form-check-label"
                                                                        for="database_read{{$role->id}}">
                                                                        Okuma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check me-3 me-lg-5"><input type="hidden" value="0" name="database_write">
                                                                    <input {{$role->database_write == 1 ? "checked" : ""}} class="form-check-input" type="checkbox" name="database_write" value="1"
                                                                        id="database_write{{$role->id}}" />
                                                                    <label class="form-check-label"
                                                                        for="database_write{{$role->id}}">
                                                                        Yazma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check"><input type="hidden" value="0" name="database_create">
                                                                    <input {{$role->database_create == 1 ? "checked" : ""}} class="form-check-input" type="checkbox" name="database_create" value="1"
                                                                        id="database_create{{$role->id}}" />
                                                                    <label class="form-check-label"
                                                                        for="database_create{{$role->id}}">
                                                                        Oluşturma
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-nowrap fw-bolder">
                                                            Finansal Yönetim
                                                        </td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <div class="form-check me-3 me-lg-5"><input type="hidden" value="0" name="financial_read">
                                                                    <input {{$role->financial_read == 1 ? "checked" : ""}} class="form-check-input" type="checkbox" name="financial_read" value="1"
                                                                        id="financial_read{{$role->id}}" />
                                                                    <label class="form-check-label"
                                                                        for="financial_read{{$role->id}}">
                                                                        Okuma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check me-3 me-lg-5"><input type="hidden" value="0" name="financial_write">
                                                                    <input {{$role->financial_write == 1 ? "checked" : ""}} class="form-check-input" type="checkbox" name="financial_write" value="1"
                                                                        id="financial_write{{$role->id}}" />
                                                                    <label class="form-check-label"
                                                                        for="financial_write{{$role->id}}">
                                                                        Yazma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check"><input type="hidden" value="0" name="financial_create">
                                                                    <input {{$role->financial_create == 1 ? "checked" : ""}} class="form-check-input" type="checkbox" name="financial_create" value="1"
                                                                        id="financial_create{{$role->id}}" />
                                                                    <label class="form-check-label"
                                                                        for="financial_create{{$role->id}}">
                                                                        Oluşturma
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-nowrap fw-bolder">Raporlama</td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <div class="form-check me-3 me-lg-5"><input type="hidden" value="0" name="reporting_read">
                                                                    <input {{$role->reporting_read == 1 ? "checked" : ""}} class="form-check-input" type="checkbox" name="reporting_read" value="1"
                                                                        id="reporting_read{{$role->id}}" />
                                                                    <label class="form-check-label" for="reporting_read{{$role->id}}">
                                                                        Okuma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check me-3 me-lg-5"><input type="hidden" value="0" name="reporting_write">
                                                                    <input {{$role->reporting_write == 1 ? "checked" : ""}} class="form-check-input" type="checkbox" name="reporting_write" value="1"
                                                                        id="reporting_write{{$role->id}}" />
                                                                    <label class="form-check-label" for="reporting_write{{$role->id}}">
                                                                        Yazma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check"><input type="hidden" value="0" name="reporting_create">
                                                                    <input {{$role->reporting_create == 1 ? "checked" : ""}} class="form-check-input" type="checkbox" name="reporting_create" value="1"
                                                                        id="reporting_create{{$role->id}}" />
                                                                    <label class="form-check-label" for="reporting_create{{$role->id}}">
                                                                        Oluşturma
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-nowrap fw-bolder">
                                                            API Kontrolü
                                                        </td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <div class="form-check me-3 me-lg-5"><input type="hidden" value="0" name="apicontrol_read">
                                                                    <input {{$role->apicontrol_read == 1 ? "checked" : ""}} class="form-check-input" type="checkbox" name="apicontrol_read" value="1"
                                                                        id="apicontrol_read{{$role->id}}" />
                                                                    <label class="form-check-label" for="apicontrol_read{{$role->id}}">
                                                                        Okuma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check me-3 me-lg-5"><input type="hidden" value="0" name="apicontrol_write">
                                                                    <input {{$role->apicontrol_write == 1 ? "checked" : ""}} class="form-check-input" type="checkbox" name="apicontrol_write" value="1"
                                                                        id="apicontrol_write{{$role->id}}" />
                                                                    <label class="form-check-label" for="apicontrol_write{{$role->id}}">
                                                                        Yazma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check"><input type="hidden" value="0" name="apicontrol_create">
                                                                    <input {{$role->apicontrol_create == 1 ? "checked" : ""}} class="form-check-input" type="checkbox" name="apicontrol_create" value="1"
                                                                        id="apicontrol_create{{$role->id}}" />
                                                                    <label class="form-check-label" for="apicontrol_create{{$role->id}}">
                                                                        Oluşturma
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-nowrap fw-bolder">
                                                            Depo Yönetimi
                                                        </td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <div class="form-check me-3 me-lg-5"><input type="hidden" value="0" name="repository_read">
                                                                    <input {{$role->repository_read == 1 ? "checked" : ""}} class="form-check-input" type="checkbox" name="repository_read" value="1"
                                                                        id="repository_read{{$role->id}}" />
                                                                    <label class="form-check-label" for="repository_read{{$role->id}}">
                                                                        Okuma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check me-3 me-lg-5"><input type="hidden" value="0" name="repository_write">
                                                                    <input {{$role->repository_write == 1 ? "checked" : ""}} class="form-check-input" type="checkbox" name="repository_write" value="1"
                                                                        id="repository_write{{$role->id}}" />
                                                                    <label class="form-check-label" for="repository_write{{$role->id}}">
                                                                        Yazma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check"><input type="hidden" value="0" name="repository_create">
                                                                    <input {{$role->repository_create == 1 ? "checked" : ""}} class="form-check-input" type="checkbox" name="repository_create" value="1"
                                                                        id="repository_create{{$role->id}}" />
                                                                    <label class="form-check-label" for="repository_create{{$role->id}}">
                                                                        Oluşturma
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
                                            Oluştur
                                        </button>
                                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            İptal
                                        </button>
                                    </div>
                                </form>
                                <!--/ Edit role form -->
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <!--/ Edit Role Modal -->
            </div>
        </div>
    </div>
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
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/buttons.bootstrap5.min.js"></script>
    <script src="../../../app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/tables/table-datatables-advanced.js"></script>
    <script src="../../../app-assets/js/scripts/forms/form-validation.js"></script>
    <script src="../../../app-assets/js/scripts/pages/modal-add-role.js"></script>
    <script src="../../../app-assets/js/scripts/pages/app-access-roles.js"></script>

    <!-- END: Page JS-->
    @if (count($errors->create) > 0)
    <script type="text/javascript">
        $( document ).ready(function() {
             $('#addRoleModal').modal('show');
        });
    </script>
  @endif

  <script>
        $(".role-edit-modal").click(function (e) {
            var editrolemodalname = $(this).attr("data-bs-target");
            localStorage.setItem("key", editrolemodalname);

        });
  </script>
@if (count($errors->update) > 0)
  <script type="text/javascript">
      $( document ).ready(function() {
        var editrolename= localStorage.getItem("key");
        $(editrolename).modal('show');


      });
  </script>
@endif
    <script>
        $(function () {
            $(".role-edit-modal").click(function (e) {
                var role_id=$(this).attr("id");
                $(".editRoleid").val(role_id);

            });
        });
    </script>

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
