@extends('layout')
@extends('sabit.nav')
@section('title')
    Departman
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
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png"/>
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet" />

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css" />
    <link rel="stylesheet" type="text/css"
        href="../../../app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css"/>
    <link rel="stylesheet" type="text/css"
        href="../../../app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css" />
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css"/>
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
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/ui-feather.css">

    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css" />
    <!-- END: Custom CSS-->
@endsection

@section('content')
   <!-- BEGIN: Content-->

   <div class="app-content content">
    @if ($message = Session::get("success"))
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Başarılı</h4>
        <div class="alert-body">
            {{$message}}
        </div>
    </div>
 @endif
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
      <div class="content-body">
        <div class="row" id="basic-table">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Departmanlarınız</h4>

                <div class="row ">
                  <div class="col-sm-6 col-md-12 ">
                    <a
                      href="javascript:;"
                      class="role-edit-modal"
                      data-bs-toggle="modal"
                      data-bs-target="#createdepartment"
                    >
                      <button class="btn btn-primary bg-gradient-primary mt-2 mt-md-0" style="height: 40px; width: 200px; ">
                        <div class="  ">
                          <div class="">
                            <div class="">
                              <div class="role-heading">
                                <h4
                                  class="fw-bolder font-small-2 text-center"
                                >
                                  <i
                                    class="me-25"
                                    data-feather="plus-square"
                                  ></i>
                                  Yeni Departman Ekle
                                </h4>
                              </div>
                            </div>
                          </div>
                        </div>



                      </button>
                    </a>
                    @if ($departments->count() > 0 )
                    <a type="button" href="javascript:;" data-bs-toggle="modal" data-bs-target="#department_useradd" class="btn btn-outline-success round role-edit-modal ms-1"><i data-feather="user-plus"></i></a>@endif
                  </div>
                </div>
              </div>

              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Departman Adı</th>
                      <th>Alan Adı</th>
                      <th>Görüntüle</th>
                      <th class="text-center">Sİl</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($departments as $department)


                    <tr>
                      <td>{{$department->name}}</td>
                      <td>
                        @foreach ($domains as $domain)

                            @if ($domain->id == $department->domain_id)
                                {{$domain->name}}
                            @endif
                        @endforeach
                      </td>
                      </td>
                      <td>
                        <a
                          class="btn me-1 datatable"
                          id="{{$department->id}}"
                          data-bs-toggle="collapse"
                          href="#showdepartment{{$department->id}}"
                          role="button"
                          aria-expanded="false"
                          aria-controls="showdepartment{{$department->id}}"
                        >
                          <i data-feather="chevron-down"></i>
                        </a>
                      </td>

                      <td class="text-center" id="delete">
                        <a id="{{$department->id}}" class="btn " href=""
                          ><i data-feather="trash-2"></i
                        ></a>
                      </td>
                    </tr>
                    <!--Collapse Start1-->
                    <tr>
                      <td colspan="12" class="hiddenRow">
                        <div class="collapse" id="showdepartment{{$department->id}}">
                          <div class="d-flex p-1 border">
                            <!-- table -->
                            <div class="card col-12">
                                <div class="table-responsive">
                                    <table class="user-list-table{{$department->id}} table">
                                        <thead class="table-light">
                                            <tr>
                                                <th></th>
                                                <th>İsİm</th>
                                                <th>Rol</th>
                                                <th>Plan</th>
                                                <th>Fatura</th>
                                                <th>Sİl</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <!-- table -->
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!--Collapse End-->
                    @endforeach
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
    id="createdepartment"
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
        <form action="/mynetwork/department/createdepartment" method="POST" >
            @csrf
        <div class="modal-body pb-5 px-sm-4 mx-50">
          <h1
            class="address-title text-center mb-1"
            id="createfullbackuptitle"
          >
            Yeni Departman Oluştur
          </h1>
          <hr class="bg-primary" />
          <label
            class="form-label font-small-3"
            for="departmentname"
            >Departman İsmi*</label
          >
          <input
            type="text"
            id="departmentname"
            class="form-control"
            aria-label="policyname"
            aria-describedby="departmentname"
            name="name"
            required
          />
            @if ($errors->createdepartment->any())
            <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                <div class="alert-body d-flex align-items-center">
                    <i data-feather="info" class="me-50"></i>
                    <span>{{$errors->createdepartment->first("name")}}</span>
                </div>
            </div>
            @endif
          <div class="valid-feedback">Geçerli</div>
          <div class="invalid-feedback">Departman İsmini Girin</div>
          <hr class="bg-primary" />
          <div class="row">

            <div class="mb-1">
              <h2>Departman İçin Alan Adı Seç</h2>
              <label class="form-label" for="select-domain"
                >Alan Adı Seçme
                </label
              >
              <select name="domain_id" class="form-select" id="select-domain">
                  @foreach ($domains as $domain)
                <option  value="{{$domain->id}}">{{$domain->name}}</option>
                @endforeach
                <option  value="-1">Domain Yok</option>
              </select>
            </div>
          </div>
          <hr class="bg-primary" />
          <div class="row">
            <h2>Departman Kullanıcılarını Seç</h2>
            @foreach ($thinclouds as $thincloud)
            <div class="col-6">


            <input
            class="form-check-input"
            type="checkbox"
            name="thincloud_id[]"
            value="{{$thincloud->id}}"
            id="du{{$number}}"

          />
          <label class="form-check-label" for="du{{$number}}">{{$thincloud->name}} {{$thincloud->surname}}-{{$thincloud->thincloudname}}</label>
          <br />


               @php
                   $number++;
               @endphp

            </div>
            @endforeach
          </div>
          <hr class="bg-primary" />
          <div class="row">
            <h2>FileHub'ı Departmana Bağla</h2>
            <div class="col-12">
              <div class="mb-1">
                <label class="form-label" for="select-country1"
                  >FileHub Seçme</label
                >
                <select name="filehub_id" class="form-select" id="select-filehub">
                    @foreach ($filehubs as $filehub)
                  <option  value="{{$filehub->id}}">{{$filehub->name}}</option>
                  @php
                  $number++;
              @endphp
                  @endforeach
                </select>
              </div>
            </div>
          </div>
          <hr class="bg-primary" />
          <h2>Departman Amirini Ayarla</h2>
          <label
            class="form-label font-small-3"
            for="superior_name"
            >Thincloud Kullanıcı İsmi</label
          >

          <input
            type="text"
            id="superior_name"
            class="form-control"
            aria-label="policyname"
            name="superior_name"
            aria-describedby="departmanname"
            required
          />
            @if ($errors->createdepartment->any())
            <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                <div class="alert-body d-flex align-items-center">
                    <i data-feather="info" class="me-50"></i>
                    <span>{{$errors->createdepartment->first("superior_name")}}</span>
                </div>
            </div>
            @endif
          <div class="valid-feedback">Geçerli</div>
          <div class="invalid-feedback">thincloud Kullanıcı İsmini Girin</div>
          <div class="row mt-2">
            <div class="col-12 text-end">
              <button type="submit" class="btn btn-primary">Oluştur</button>
              <button  type="reset"
              class="btn btn-outline-secondary"
              data-bs-dismiss="modal"
              aria-label="Close">
                İptal
              </button>
            </div>
          </div>
        </div>
    </form>
      </div>
    </div>
  </div>
  <!--Modal End-->



  <!--add department_user Modal Start-->
  <div
    class="modal fade"
    id="department_useradd"
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
        <form action="/mynetwork/department/adduser" method="POST" >
            @csrf

        <div class="modal-body pb-5 px-sm-4 mx-50">
          <h1
            class="address-title text-center mb-1"
            id="createfullbackuptitle"
          >
            Yeni Departman Oluştur
          </h1>
          <div class="row">

            <div class="mb-1">
              <h2>Departman Seç</h2>
              <label class="form-label" for="select-domain"
                >Alan Adı Seçme
                </label
              >
              <select name="department_id" class="form-select" id="select-domain">
                  @foreach ($departments as $department)
                <option  value="{{$department->id}}">{{$department->name}}</option>
                @endforeach
              </select>

            </div>
          </div>
          <hr class="bg-primary" />
          <div class="row">
            <h2>Departman Kullanıcılarını Seç</h2>
            @foreach ($thinclouds as $thincloud)
            <div class="col-6">
            <input
            class="form-check-input"
            type="checkbox"
            name="thincloud_id[]"
            value="{{$thincloud->id}}"
            id="du{{$number}}"
          />
          <label class="form-check-label" for="du{{$number}}">{{$thincloud->name}} {{$thincloud->surname}}-{{$thincloud->thincloudname}}</label>
          <br />
               @php
                   $number++;
               @endphp

            </div>
            @endforeach
            @if ($errors->useradd->any())
            <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                <div class="alert-body d-flex align-items-center">
                    <i data-feather="info" class="me-50"></i>
                    <span>{{$errors->useradd->first("thincloud_id")}}</span>
                </div>
            </div>
            @endif
          </div>
          <div class="row mt-2">
            <div class="col-12 text-end">
              <button type="submit" class="btn btn-primary">Oluştur</button>
              <button  type="reset"
              class="btn btn-outline-secondary"
              data-bs-dismiss="modal"
              aria-label="Close">
                İptal
              </button>
            </div>
          </div>
        </div>
    </form>
      </div>
    </div>
  </div>
  <!--add department_user Modal End-->

  <!-- END: Content-->
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
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/buttons.bootstrap5.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>


    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/tables/table-datatables-advanced.js"></script>
    <script src="../../../app-assets/js/scripts/pages/app-department.js"></script>
    <script src="../../../app-assets/js/scripts/ui/ui-feather.js"></script>
    <script src="../../../app-assets/js/scripts/components/components-alerts.js"></script>




    <!-- END: Page JS-->
    @if (count($errors->createdepartment) > 0)
    <script type="text/javascript">
        $( document ).ready(function() {
             $('#createdepartment').modal('show');
        });
    </script>
  @endif
  @if (count($errors->useradd) > 0)
  <script type="text/javascript">
      $( document ).ready(function() {
        $('#department_useradd').modal('show');


      });
  </script>
@endif
    <script>
        $(function () {
            $(".alert-success").fadeOut(5000);
           var data = $("#delete").find("a").attr("id");

            $("#delete").find("a").click(function (e) {
                $.ajax({
                    type: "GET",
                    url: "/mynetwork/department/delete",
                    data: {data,data},
                    dataType: "json",
                    success: function (response) {
                        console.log("success");
                    }
                });

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
