<?php $__env->startSection("title"); ?>
    Hesap Ayarları
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
                  </li>
                  <li class="breadcrumb-item active"><?php echo $__env->yieldContent("title"); ?></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("css"); ?>
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
      href="../../../app-assets/vendors/css/forms/select/select2.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../../../app-assets/vendors/css/animate/animate.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../../../app-assets/vendors/css/extensions/sweetalert2.min.css"
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
      href="../../../app-assets/css/plugins/extensions/ext-component-sweet-alerts.css"
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
<div class="app-content content">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-body">
          <div class="row">
            <div class="col-12">
              <ul class="nav nav-pills mb-2">
                <!-- account -->
                <li class="nav-item">
                  <a
                    class="nav-link active"
                    href=<?php echo e(route("account-settings-account")); ?>

                  >
                    <i data-feather="user" class="font-medium-3 me-50"></i>
                    <span class="fw-bold">Hesap Ayarları</span>
                  </a>
                </li>
                <!-- security -->
                <li class="nav-item">
                  <a class="nav-link" href=<?php echo e(route("account-settings-security")); ?>>
                    <i data-feather="lock" class="font-medium-3 me-50"></i>
                    <span class="fw-bold">Hesap Güvenliği</span>
                  </a>
                </li>
                <!-- billing and plans -->
                <li class="nav-item">
                  <a class="nav-link" href=<?php echo e(route("account-settings-billing")); ?>>
                    <i data-feather="bookmark" class="font-medium-3 me-50"></i>
                    <span class="fw-bold">Ödemeler &amp; Planlar</span>
                  </a>
                </li>
              </ul>

              <!-- profile -->
              <div class="col-xl-12 col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <ul
                      class="nav nav-tabs nav-justified"
                      id="myTab2"
                      role="tablist"
                    >
                      <li class="nav-item">
                        <a
                          class="nav-link active"
                          id="home-tab-justified"
                          data-bs-toggle="tab"
                          href="#account-just"
                          role="tab"
                          aria-controls="home-just"
                          aria-selected="true"
                          >Hesap Ayarları</a
                        >
                      </li>
                      <li class="nav-item">
                        <a
                          class="nav-link"
                          id="profile-tab-justified"
                          data-bs-toggle="tab"
                          href="#delete-just"
                          role="tab"
                          aria-controls="profile-just"
                          aria-selected="true"
                          >Hesap Silme</a
                        >
                      </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content pt-1">
                      <div
                        class="tab-pane active"
                        id="account-just"
                        role="tabpanel"
                        aria-labelledby="home-tab-justified"
                      >
                        <div class="card">
                          <div class="card-header border-bottom">
                            <h4 class="card-title">Hesap Detayları</h4>
                          </div>
                          <div class="card-body py-2 my-25">
                            <!-- header section -->
                            <div class="d-flex">
                              <a href="#" class="me-25">
                                <img
                                  src="../../../app-assets/images/portrait/small/avatar-s-11.jpg"
                                  id="account-upload-img"
                                  class="uploadedAvatar rounded me-50"
                                  alt="profile image"
                                  height="100"
                                  width="100"
                                />
                              </a>
                              <!-- upload and reset button -->
                              <div class="d-flex align-items-end mt-75 ms-1">
                                <div>
                                  <label
                                    for="account-upload"
                                    class="btn btn-sm btn-primary mb-75 me-75"
                                    >Yükle</label
                                  >
                                  <input
                                    type="file"
                                    id="account-upload"
                                    hidden
                                    accept="image/*"
                                  />
                                  <button
                                    type="button"
                                    id="account-reset"
                                    class="btn btn-sm btn-outline-secondary mb-75"
                                  >
                                    Sıfırla
                                  </button>
                                  <p class="mb-0">
                                    İzin verilen dosya türleri: png, jpg, jpeg.
                                  </p>
                                </div>
                              </div>
                              <!--/ upload and reset button -->
                            </div>
                            <!--/ header section -->

                            <!-- form -->
                            <form class="validate-form mt-2 pt-50" action="/update_user" method="POST">
                                <?php echo csrf_field(); ?>
                              <div class="row">
                                <div class="col-12 col-sm-6 mb-1">
                                  <label
                                    class="form-label"
                                    for="accountFirstName"
                                    >İsim</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="accountFirstName"
                                    name="new-name"
                                    placeholder="John"
                                    data-msg="Please enter first name"
                                    value="<?php echo e(old("new-name")); ?>"
                                  />
                                  <?php $__errorArgs = ['new-name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="text-danger text-xs"><?php echo e($message); ?></p>
                                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-12 col-sm-6 mb-1">
                                  <label
                                    class="form-label"
                                    for="accountLastName"
                                    >Soyisim</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="accountLastName"
                                    name="new-surname"
                                    placeholder="Doe"
                                    data-msg="Please enter last name"
                                    value="<?php echo e(old("new-surname")); ?>"
                                  />
                                  <?php $__errorArgs = ['new-surname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="text-danger text-xs"><?php echo e($message); ?></p>
                                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-12 col-sm-6 mb-1">
                                  <label class="form-label" for="accountEmail"
                                    >E-Posta</label
                                  >
                                  <input type="email" class="form-control"
                                  id="accountEmail" name="new-email"
                                  placeholder="johndoe@example.com"
                                  value="<?php echo e(old("new-email")); ?>"
                                  />
                                  <?php $__errorArgs = ['new-email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                      <p class="text-danger text-xs"><?php echo e($message); ?></p>
                                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-12 col-sm-6 mb-1">
                                  <label
                                    class="form-label"
                                    for="accountOrganization"
                                    >Organizasyon</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="accountOrganization"
                                    name="new_organization_name"
                                    placeholder="Organizasyon adı"
                                    value="<?php echo e(old("new_organization_name")); ?>"
                                  />
                                  <?php $__errorArgs = ['new_organization_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="text-danger text-xs"><?php echo e($message); ?></p>
                                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-12 col-sm-6 mb-1">
                                  <label
                                    class="form-label"
                                    for="accountPhoneNumber"
                                    >Telefon Numarası</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control account-number-mask"
                                    id="accountPhoneNumber"
                                    name="new-phone"
                                    placeholder="Telefon Numarası"
                                    value="<?php echo e(old("new-phone")); ?>"
                                  />
                                  <?php $__errorArgs = ['new-phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                     <p class="text-danger text-xs"><?php echo e($message); ?></p>
                                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-12 col-sm-6 mb-1">
                                  <label class="form-label" for="accountAddress"
                                    >Adres</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="accountAddress"
                                    name="new-address"
                                    placeholder="Adresiniz"
                                    value="<?php echo e(old("new-address")); ?>"
                                  />
                                  <?php $__errorArgs = ['new-address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="text-danger text-xs"><?php echo e($message); ?></p>
                                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-12 col-sm-6 mb-1">
                                  <label class="form-label" for="accountState"
                                    >Şehir</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="accountState"
                                    name="new-city"
                                    placeholder="Şehir"
                                    value="<?php echo e(old("new-city")); ?>"
                                  />
                                  <?php $__errorArgs = ['new-city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="text-danger text-xs"><?php echo e($message); ?></p>
                                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-12 col-sm-6 mb-1">
                                  <label class="form-label" for="accountZipCode"
                                    >Posta Kodu</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control account-zip-code"
                                    id="accountZipCode"
                                    name="new-zipcode"
                                    placeholder="Posta kodu"
                                    maxlength="6"
                                    value="<?php echo e(old("new-zipcode")); ?>"
                                  />
                                  <?php $__errorArgs = ['new-zipcode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                   <p class="text-danger text-xs"><?php echo e($message); ?></p>
                                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-12">
                                    <button type="submit"
                                    class="btn btn-primary mt-1 me-1"
                                    tabindex="4"
                                    >Güncelle</button>

                                  <button
                                    type="reset"
                                    class="btn btn-outline-secondary mt-1"
                                  >
                                    İptal et
                                  </button>
                                </div>
                              </div>
                            </form>
                            <!--/ form -->
                          </div>
                        </div>
                      </div>
                      <div
                        class="tab-pane"
                        id="delete-just"
                        role="tabpanel"
                        aria-labelledby="profile-tab-justified"
                      >
                        <div class="card">
                          <div class="card-header border-bottom">
                            <h4 class="card-title">Hesap Silme</h4>
                          </div>
                          <div class="card-body py-2 my-25">
                            <div class="alert alert-warning">
                              <h4 class="alert-heading">
                                Hesabınızı silmek istediğinize emin misiniz?
                              </h4>
                              <div class="alert-body fw-normal">
                                Bir kere sildiğinizde bir daha geri dönüşü yok.
                                Lütfen emin olduktan sonra bu kararı veriniz.
                              </div>
                            </div>

                            <form
                              id="formAccountDeactivation"
                              class="validate-form"
                              onsubmit="return false"
                              action="delete-account"
                              method="POST"
                            >
                              <div class="form-check">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  name="accountActivation"
                                  id="accountActivation"
                                  data-msg="Lütfen hesabı silmek istediğinizi onaylayın!"
                                />
                                <label
                                  class="form-check-label font-small-3"
                                  for="accountActivation"
                                >
                                  Hesabımı silmeyi onaylıyorum.
                                </label>
                              </div>
                              <div>
                                <button
                                  type="submit"
                                  class="btn btn-danger deactivate-account mt-1"
                                >
                                  Hesabı Sil
                                </button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("js"); ?>
    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="../../../app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/cleave/cleave.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/pages/page-account-settings-account.js"></script>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make("sabit.nav", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\thincloud3\resources\views/pages/account-settings-account.blade.php ENDPATH**/ ?>