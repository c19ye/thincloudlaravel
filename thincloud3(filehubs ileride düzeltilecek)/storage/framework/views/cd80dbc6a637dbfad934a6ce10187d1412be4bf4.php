<?php $__env->startSection('title'); ?>
    Departman
<?php $__env->stopSection(); ?>
<?php $__env->startSection("breadcrumb"); ?>
<div
          class="content-header-left col-md-9 col-12 mt-50 ms-2 d-none d-sm-block"
        >
          <div class="row breadcrumbs-top">
            <div class="col-md-12 d-none d-md-block">
              <h2 class="content-header-title float-start mb-0 me-1">
                <?php echo $__env->yieldContent("title"); ?>
              </h2>
              <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="/">Anasayfa</a>
                  </li><li class="breadcrumb-item">
                    <a href="#">Benim Ağım</a>
                  </li>

                  <li class="breadcrumb-item active"><?php echo $__env->yieldContent("title"); ?></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
   <!-- BEGIN: Content-->

   <div class="app-content content">
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
                      data-bs-target="#createdepartman"
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
                    <tr>
                      <td>Engineering</td>
                      <td>Rakun.Local</td>
                      <td>
                        <a
                          class="btn me-1"
                          data-bs-toggle="collapse"
                          href="#showdepartment1"
                          role="button"
                          aria-expanded="false"
                          aria-controls="showdepartment1"
                        >
                          <i data-feather="chevron-down"></i>
                        </a>
                      </td>

                      <td class="text-center">
                        <a class="btn" href=""
                          ><i data-feather="trash-2"></i
                        ></a>
                      </td>
                    </tr>
                    <!--Collapse Start1-->
                    <tr>
                      <td colspan="12" class="hiddenRow">
                        <div class="collapse" id="showdepartment1">
                          <div class="d-flex p-1 border">
                            <!-- table -->
                            <div class="card col-12">
                              <div class="table-responsive">
                                <table class="user-list-table table">
                                  <thead class="table-light">
                                    <tr>
                                      <th></th>
                                      <th></th>
                                      <th>İsim</th>
                                      <th>Rol</th>
                                      <th>Plan</th>
                                      <th>Faturalandırma</th>
                                      <th>Statü</th>
                                      <th>sİl</th>
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
                    <tr>
                      <td>Engineering</td>
                      <td>Rakun.Local</td>
                      <td>
                        <a
                          class="btn me-1"
                          data-bs-toggle="collapse"
                          href="#showdepartment2"
                          role="button"
                          aria-expanded="false"
                          aria-controls="showdepartment2"
                        >
                          <i data-feather="chevron-down"></i>
                        </a>
                      </td>

                      <td class="text-center">
                        <a class="btn" href=""
                          ><i data-feather="trash-2"></i
                        ></a>
                      </td>
                    </tr>
                    <!--Collapse Start2-->
                    <tr>
                      <td colspan="12" class="hiddenRow">
                        <div class="collapse" id="showdepartment2">
                          <div class="d-flex p-1 border">
                            <!-- table -->
                            <div class="card col-12">
                              <div class="table-responsive">
                                <table class="user-list-table table">
                                  <thead class="table-light">
                                    <tr>
                                      <th></th>
                                      <th></th>
                                      <th>İsim</th>
                                      <th>Rol</th>
                                      <th>Plan</th>
                                      <th>Faturalandırma</th>
                                      <th>Statü</th>
                                      <th>sİl</th>
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
                    <tr>
                      <td>Engineering</td>
                      <td>Rakun.Local</td>
                      <td>
                        <a
                          class="btn me-1"
                          data-bs-toggle="collapse"
                          href="#showdepartment3"
                          role="button"
                          aria-expanded="false"
                          aria-controls="showdepartment3"
                        >
                          <i data-feather="chevron-down"></i>
                        </a>
                      </td>
                      <td class="text-center">
                        <a class="btn" href=""
                          ><i data-feather="trash-2"></i
                        ></a>
                      </td>
                    </tr>
                    <!--Collapse Start3-->
                    <tr>
                      <td colspan="12" class="hiddenRow">
                        <div class="collapse" id="showdepartment3">
                          <div class="d-flex p-1 border">
                            <!-- table -->
                            <div class="card col-12">
                              <div class="table-responsive">
                                <table class="user-list-table table">
                                  <thead class="table-light">
                                    <tr>
                                      <th></th>
                                      <th></th>
                                      <th>İsim</th>
                                      <th>Rol</th>
                                      <th>Plan</th>
                                      <th>Faturalandırma</th>
                                      <th>Statü</th>
                                      <th>sİl</th>
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
                    <tr>
                      <td>Engineering</td>
                      <td>Rakun.Local</td>
                      <td>
                        <a
                          class="btn me-1"
                          data-bs-toggle="collapse"
                          href="#showdepartment4"
                          role="button"
                          aria-expanded="false"
                          aria-controls="showdepartment4"
                        >
                          <i data-feather="chevron-down"></i>
                        </a>
                      </td>
                      <td class="text-center">
                        <a class="btn" href=""
                          ><i data-feather="trash-2"></i
                        ></a>
                      </td>
                    </tr>
                    <!--Collapse Start4-->
                    <tr>
                      <td colspan="12" class="hiddenRow">
                        <div class="collapse" id="showdepartment4">
                          <div class="d-flex p-1 border">
                            <!-- table -->
                            <div class="card col-12">
                              <div class="table-responsive">
                                <table class="user-list-table table">
                                  <thead class="table-light">
                                    <tr>
                                      <th></th>
                                      <th></th>
                                      <th>İsim</th>
                                      <th>Rol</th>
                                      <th>Plan</th>
                                      <th>Faturalandırma</th>
                                      <th>Statü</th>
                                      <th>sİl</th>
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
                    <tr>
                      <td>Engineering</td>
                      <td>Rakun.Local</td>
                      <td>
                        <a
                          class="btn me-1"
                          data-bs-toggle="collapse"
                          href="#showdepartment5"
                          role="button"
                          aria-expanded="false"
                          aria-controls="showdepartment5"
                        >
                          <i data-feather="chevron-down"></i>
                        </a>
                      </td>
                      <td class="text-center">
                        <a class="btn" href=""
                          ><i data-feather="trash-2"></i
                        ></a>
                      </td>
                    </tr>
                    <!--Collapse Start5-->
                    <tr>
                      <td colspan="12" class="hiddenRow">
                        <div class="collapse" id="showdepartment5">
                          <div class="d-flex p-1 border">
                            <!-- table -->
                            <div class="card col-12">
                              <div class="table-responsive">
                                <table class="user-list-table table">
                                  <thead class="table-light">
                                    <tr>
                                      <th></th>
                                      <th></th>
                                      <th>İsim</th>
                                      <th>Rol</th>
                                      <th>Plan</th>
                                      <th>Faturalandırma</th>
                                      <th>Statü</th>
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
                    <tr>
                      <td>Engineering</td>
                      <td>Rakun.Local</td>
                      <td>
                        <a
                          class="btn me-1"
                          data-bs-toggle="collapse"
                          href="#showdepartment6"
                          role="button"
                          aria-expanded="false"
                          aria-controls="showdepartment6"
                        >
                          <i data-feather="chevron-down"></i>
                        </a>
                      </td>
                      <td class="text-center">
                        <a class="btn" href=""
                          ><i data-feather="trash-2"></i
                        ></a>
                      </td>
                    </tr>
                    <!--Collapse Start6-->
                    <tr>
                      <td colspan="12" class="hiddenRow">
                        <div class="collapse" id="showdepartment6">
                          <div class="d-flex p-1 border">
                            <!-- table -->
                            <div class="card col-12">
                              <div class="table-responsive">
                                <table class="user-list-table table">
                                  <thead class="table-light">
                                    <tr>
                                      <th></th>
                                      <th></th>
                                      <th>İsim</th>
                                      <th>Rol</th>
                                      <th>Plan</th>
                                      <th>Faturalandırma</th>
                                      <th>Statü</th>
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
    id="createdepartman"
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
            Yeni Departman Oluştur
          </h1>
          <hr class="bg-primary" />
          <label
            class="form-label font-small-3"
            for="basic-addon-departmanname"
            >Departman İsmi*</label
          >
          <input
            type="text"
            id="basic-addon-departmanname"
            class="form-control"
            aria-label="policyname"
            aria-describedby="departmanname"
            required
          />
          <div class="valid-feedback">Geçerli</div>
          <div class="invalid-feedback">Departman İsmini Girin</div>
          <hr class="bg-primary" />
          <div class="row">
            <h2>Departman İçin Alan Adı Seçin</h2>
            <div class="col-6">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="domain1"
              />
              <label class="form-check-label" for="domain1"> Domain 1 </label>
              <br />
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="domain2"
              />
              <label class="form-check-label" for="domain2"> Domain 2 </label>
              <br />
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="donthave"
              />
              <label class="form-check-label" for="donthave">
                Domain'e Sahip Değilim
              </label>
            </div>
            <div class="col-6">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="domain3"
              />
              <label class="form-check-label" for="domain3"> Domain 3 </label>
              <br />
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="domain4"
              />
              <label class="form-check-label" for="domain4"> Domain 4 </label>
            </div>
          </div>
          <hr class="bg-primary" />
          <div class="row">
            <h2>Departman Kullanıcılarını Seç</h2>
            <div class="col-6">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="du1"
              />
              <label class="form-check-label" for="du1"> Thincloud 1 </label>
              <br />
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="du2"
              />
              <label class="form-check-label" for="du2"> Thincloud 2 </label>
              <br />
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="du3"
              />
              <label class="form-check-label" for="du3"> Thincloud 3 </label>
              <br />
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="du4"
              />
              <label class="form-check-label" for="du4"> Thincloud 4 </label>
              <br />
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="du5"
              />
              <label class="form-check-label" for="du5"> Thincloud 5 </label>
              <br />
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="du6"
              />
              <label class="form-check-label" for="du6"> Thincloud 6 </label>
              <br />
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="du7"
              />
              <label class="form-check-label" for="du7"> Thincloud 7 </label>
              <br />
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="du8"
              />
              <label class="form-check-label" for="du8"> Thincloud 8 </label>
              <br />
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="du9"
              />
              <label class="form-check-label" for="du9"> Thincloud 9 </label>
              <br />
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="du10"
              />
              <label class="form-check-label" for="du10">
                Thincloud 10
              </label>
            </div>
            <div class="col-6">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="du11"
              />
              <label class="form-check-label" for="du11">
                Thincloud 11
              </label>
              <br />
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="du12"
              />
              <label class="form-check-label" for="du12">
                Thincloud 12
              </label>
              <br />
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="du13"
              />
              <label class="form-check-label" for="du13">
                Thincloud 13
              </label>
              <br />
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="du14"
              />
              <label class="form-check-label" for="du14">
                Thincloud 14
              </label>
              <br />
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="du15"
              />
              <label class="form-check-label" for="du15">
                Thincloud 15
              </label>
              <br />
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="du16"
              />
              <label class="form-check-label" for="du16">
                Thincloud 16
              </label>
              <br />
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="du17"
              />
              <label class="form-check-label" for="du17">
                Thincloud 17
              </label>
              <br />
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="du18"
              />
              <label class="form-check-label" for="du18">
                Thincloud 18
              </label>
              <br />
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="du19"
              />
              <label class="form-check-label" for="du19">
                Thincloud 19
              </label>
              <br />
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="du20"
              />
              <label class="form-check-label" for="du20">
                Thincloud 20
              </label>
            </div>
          </div>
          <hr class="bg-primary" />
          <div class="row">
            <h2>FileHub'ı Departmana Bağla</h2>
            <div class="col-12">
              <div class="mb-1">
                <label class="form-label" for="select-country1"
                  >FileHub Seçme</label
                >
                <select class="form-select" id="select-country1" required>
                  <option value="filehub1">FileHub 1</option>
                  <option value="filehub2">FileHub 2</option>
                  <option value="filehub3">FileHub 3</option>
                  <option value="filehub4">FileHub 4</option>
                </select>
              </div>
            </div>
          </div>
          <hr class="bg-primary" />
          <h2>Departman Amirini Ayarla</h2>
          <label
            class="form-label font-small-3"
            for="basic-addon-departmanname"
            >Thincloud Kullanıcı İsmi</label
          >

          <input
            type="text"
            id="basic-addon-departmanname"
            class="form-control"
            aria-label="policyname"
            aria-describedby="departmanname"
            required
          />
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
      </div>
    </div>
  </div>
  <!--Modal End-->
  <!-- END: Content-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('sabit.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\thincloud3\resources\views/pages/departmant.blade.php ENDPATH**/ ?>