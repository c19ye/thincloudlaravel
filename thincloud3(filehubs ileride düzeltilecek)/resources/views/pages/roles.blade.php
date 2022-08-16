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
                                        <h4 class="fw-bolder">Yönetici</h4>
                                        <a href="javascript:;" class="role-edit-modal" data-bs-toggle="modal"
                                            data-bs-target="#addRoleModal">
                                            <small class="fw-bolder">Rol Düzenle</small>
                                        </a>
                                    </div>
                                    <a href="javascript:void(0);" class="text-body"><i data-feather="copy"
                                            class="font-medium-5"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <span>Toplam 7 Kullanıcı</span>
                                    <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            title="Jimmy Ressula" class="avatar avatar-sm pull-up">
                                            <img class="rounded-circle" src="../../../app-assets/images/avatars/4.png"
                                                alt="Avatar" />
                                        </li>
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            title="John Doe" class="avatar avatar-sm pull-up">
                                            <img class="rounded-circle" src="../../../app-assets/images/avatars/1.png"
                                                alt="Avatar" />
                                        </li>
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            title="Kristi Lawker" class="avatar avatar-sm pull-up">
                                            <img class="rounded-circle" src="../../../app-assets/images/avatars/2.png"
                                                alt="Avatar" />
                                        </li>
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            title="Kaith D'souza" class="avatar avatar-sm pull-up">
                                            <img class="rounded-circle" src="../../../app-assets/images/avatars/5.png"
                                                alt="Avatar" />
                                        </li>
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            title="Danny Paul" class="avatar avatar-sm pull-up">
                                            <img class="rounded-circle" src="../../../app-assets/images/avatars/7.png"
                                                alt="Avatar" />
                                        </li>
                                    </ul>
                                </div>
                                <div class="d-flex justify-content-between align-items-end mt-1 pt-25">
                                    <div class="role-heading">
                                        <h4 class="fw-bolder">Geliştirici</h4>
                                        <a href="javascript:;" class="role-edit-modal" data-bs-toggle="modal"
                                            data-bs-target="#addRoleModal">
                                            <small class="fw-bolder">Rol Düzenle</small>
                                        </a>
                                    </div>
                                    <a href="javascript:void(0);" class="text-body"><i data-feather="copy"
                                            class="font-medium-5"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <span>Toplam 5 Kullanıcı</span>
                                    <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            title="Andrew Tye" class="avatar avatar-sm pull-up">
                                            <img class="rounded-circle" src="../../../app-assets/images/avatars/6.png"
                                                alt="Avatar" />
                                        </li>
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            title="Rishi Swaat" class="avatar avatar-sm pull-up">
                                            <img class="rounded-circle" src="../../../app-assets/images/avatars/9.png"
                                                alt="Avatar" />
                                        </li>
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            title="Rossie Kim" class="avatar avatar-sm pull-up">
                                            <img class="rounded-circle" src="../../../app-assets/images/avatars/12.png"
                                                alt="Avatar" />
                                        </li>
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            title="Kim Merchent" class="avatar avatar-sm pull-up">
                                            <img class="rounded-circle" src="../../../app-assets/images/avatars/10.png"
                                                alt="Avatar" />
                                        </li>
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            title="Sam D'souza" class="avatar avatar-sm pull-up">
                                            <img class="rounded-circle" src="../../../app-assets/images/avatars/8.png"
                                                alt="Avatar" />
                                        </li>
                                    </ul>
                                </div>
                                <div class="d-flex justify-content-between align-items-end mt-1 pt-25">
                                    <div class="role-heading">
                                        <h4 class="fw-bolder">Üye</h4>
                                        <a href="javascript:;" class="role-edit-modal" data-bs-toggle="modal"
                                            data-bs-target="#addRoleModal">
                                            <small class="fw-bolder">Rol Düzenle</small>
                                        </a>
                                    </div>
                                    <a href="javascript:void(0);" class="text-body"><i data-feather="copy"
                                            class="font-medium-5"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <span>Toplam 3 Kullanıcı</span>
                                    <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            title="Kim Karlos" class="avatar avatar-sm pull-up">
                                            <img class="rounded-circle" src="../../../app-assets/images/avatars/3.png"
                                                alt="Avatar" />
                                        </li>
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            title="Katy Turner" class="avatar avatar-sm pull-up">
                                            <img class="rounded-circle" src="../../../app-assets/images/avatars/9.png"
                                                alt="Avatar" />
                                        </li>
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            title="Peter Adward" class="avatar avatar-sm pull-up">
                                            <img class="rounded-circle" src="../../../app-assets/images/avatars/12.png"
                                                alt="Avatar" />
                                        </li>
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            title="Kaith D'souza" class="avatar avatar-sm pull-up">
                                            <img class="rounded-circle" src="../../../app-assets/images/avatars/10.png"
                                                alt="Avatar" />
                                        </li>
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            title="John Parker" class="avatar avatar-sm pull-up">
                                            <img class="rounded-circle" src="../../../app-assets/images/avatars/11.png"
                                                alt="Avatar" />
                                        </li>
                                    </ul>
                                </div>
                                <div class="d-flex justify-content-between align-items-end mt-1 pt-25">
                                    <div class="role-heading">
                                        <h4 class="fw-bolder">Destek</h4>
                                        <a href="javascript:;" class="role-edit-modal" data-bs-toggle="modal"
                                            data-bs-target="#addRoleModal">
                                            <small class="fw-bolder">Rol Düzenle</small>
                                        </a>
                                    </div>
                                    <a href="javascript:void(0);" class="text-body"><i data-feather="copy"
                                            class="font-medium-5"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <span>Toplam 2 Kullanıcı</span>
                                    <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            title="Kim Merchent" class="avatar avatar-sm pull-up">
                                            <img class="rounded-circle" src="../../../app-assets/images/avatars/10.png"
                                                alt="Avatar" />
                                        </li>
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            title="Sam D'souza" class="avatar avatar-sm pull-up">
                                            <img class="rounded-circle" src="../../../app-assets/images/avatars/6.png"
                                                alt="Avatar" />
                                        </li>
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            title="Nurvi Karlos" class="avatar avatar-sm pull-up">
                                            <img class="rounded-circle" src="../../../app-assets/images/avatars/3.png"
                                                alt="Avatar" />
                                        </li>
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            title="Andrew Tye" class="avatar avatar-sm pull-up">
                                            <img class="rounded-circle" src="../../../app-assets/images/avatars/8.png"
                                                alt="Avatar" />
                                        </li>
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            title="Rossie Kim" class="avatar avatar-sm pull-up">
                                            <img class="rounded-circle" src="../../../app-assets/images/avatars/9.png"
                                                alt="Avatar" />
                                        </li>
                                    </ul>
                                </div>
                                <div class="d-flex justify-content-between align-items-end mt-1 pt-25">
                                    <div class="role-heading">
                                        <h4 class="fw-bolder">Kısıtlı Üye</h4>
                                        <a href="javascript:;" class="role-edit-modal" data-bs-toggle="modal"
                                            data-bs-target="#addRoleModal">
                                            <small class="fw-bolder">Rol Düzenle</small>
                                        </a>
                                    </div>
                                    <a href="javascript:void(0);" class="text-body"><i data-feather="copy"
                                            class="font-medium-5"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
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
                <div class="card">
                    <div class="table-responsive">
                        <table class="user-list-table table">
                            <thead class="table-light">
                                <tr>
                                    <th></th>
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
                                <form id="addRoleForm" class="row" onsubmit="return false">
                                    <div class="col-12">
                                        <label class="form-label" for="modalRoleName">Rol İsmi</label>
                                        <input type="text" id="modalRoleName" name="modalRoleName"
                                            class="form-control" placeholder="Rol ismini gir" tabindex="-1"
                                            data-msg="Please enter role name" />
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
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="userManagementRead" />
                                                                    <label class="form-check-label"
                                                                        for="userManagementRead">
                                                                        Okuma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check me-3 me-lg-5">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="userManagementWrite" />
                                                                    <label class="form-check-label"
                                                                        for="userManagementWrite">
                                                                        Yazma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
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
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="contentManagementRead" />
                                                                    <label class="form-check-label"
                                                                        for="contentManagementRead">
                                                                        Okuma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check me-3 me-lg-5">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="contentManagementWrite" />
                                                                    <label class="form-check-label"
                                                                        for="contentManagementWrite">
                                                                        Yazma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
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
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="dispManagementRead" />
                                                                    <label class="form-check-label"
                                                                        for="dispManagementRead">
                                                                        Okuma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check me-3 me-lg-5">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="dispManagementWrite" />
                                                                    <label class="form-check-label"
                                                                        for="dispManagementWrite">
                                                                        Yazma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
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
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="dbManagementRead" />
                                                                    <label class="form-check-label"
                                                                        for="dbManagementRead">
                                                                        Okuma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check me-3 me-lg-5">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="dbManagementWrite" />
                                                                    <label class="form-check-label"
                                                                        for="dbManagementWrite">
                                                                        Yazma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
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
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="finManagementRead" />
                                                                    <label class="form-check-label"
                                                                        for="finManagementRead">
                                                                        Okuma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check me-3 me-lg-5">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="finManagementWrite" />
                                                                    <label class="form-check-label"
                                                                        for="finManagementWrite">
                                                                        Yazma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
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
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="reportingRead" />
                                                                    <label class="form-check-label" for="reportingRead">
                                                                        Okuma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check me-3 me-lg-5">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="reportingWrite" />
                                                                    <label class="form-check-label" for="reportingWrite">
                                                                        Yazma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
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
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="apiRead" />
                                                                    <label class="form-check-label" for="apiRead">
                                                                        Okuma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check me-3 me-lg-5">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="apiWrite" />
                                                                    <label class="form-check-label" for="apiWrite">
                                                                        Yazma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
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
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="repoRead" />
                                                                    <label class="form-check-label" for="repoRead">
                                                                        Okuma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check me-3 me-lg-5">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="repoWrite" />
                                                                    <label class="form-check-label" for="repoWrite">
                                                                        Yazma
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
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
                                            Düzenle
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
