<?php $__env->startSection("title"); ?>
    Parolamı Unuttum
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
href="../../../app-assets/css/core/menu/menu-types/horizontal-menu.css"
/>
<link
rel="stylesheet"
type="text/css"
href="../../../app-assets/css/plugins/forms/form-validation.css"
/>
<link
rel="stylesheet"
type="text/css"
href="../../../app-assets/css/pages/authentication.css"
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
    <div class="content-wrapper">
      <div class="content-header row"></div>
      <div class="content-body">
        <div class="auth-wrapper auth-basic px-2">
          <div class="auth-inner my-2">
            <!-- Forgot Password basic -->
            <div class="card mb-0">
              <div class="card-body">
                <a href=<?php echo e(route("index")); ?> class="brand-logo">
                  <h2 class="brand-text text-primary ms-1">thincloud</h2>
                </a>

                <h4 class="card-title mb-1">Şifremi Unuttum 🔒</h4>
                <p class="card-text mb-2">
                  E-postanızı girin. Şifre sıfırlama talimatlarını içeren bir
                  e-posta yollayacağız.
                </p>

                <form
                  class="auth-forgot-password-form mt-2"
                  action="auth-reset-password-basic.html"
                  method="POST"
                >
                  <div class="mb-1">
                    <label for="forgot-password-email" class="form-label"
                      >E-posta</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="forgot-password-email"
                      name="forgot-password-email"
                      placeholder="thincloud@mail.com"
                      aria-describedby="forgot-password-email"
                      tabindex="1"
                      autofocus
                    />
                  </div>
                  <button class="btn btn-primary w-100" tabindex="2">
                    Şifre Sıfırla
                  </button>
                </form>

                <p class="text-center mt-2">
                  <a href=<?php echo e(route("login")); ?>>
                    <i data-feather="chevron-left"></i> Giriş sayfasına dön
                  </a>
                </p>
              </div>
            </div>
            <!-- /Forgot Password basic -->
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
  <script src="../../../app-assets/vendors/js/ui/jquery.sticky.js"></script>
  <script src="../../../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
  <!-- END: Page Vendor JS-->

  <!-- BEGIN: Theme JS-->
  <script src="../../../app-assets/js/core/app-menu.js"></script>
  <script src="../../../app-assets/js/core/app.js"></script>
  <!-- END: Theme JS-->

  <!-- BEGIN: Page JS-->
  <script src="../../../app-assets/js/scripts/pages/auth-forgot-password.js"></script>
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

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\thincloud\resources\views/pages/forgot-password.blade.php ENDPATH**/ ?>