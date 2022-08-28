<?php $__env->startSection("title"); ?>
    Güvenlik Duvarı
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
      href="../../../app-assets/vendors/css/charts/apexcharts.css"
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
      href="../../../app-assets/css/plugins/forms/form-validation.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../../../app-assets/css/plugins/charts/chart-apex.css"
    />

    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link
      rel="stylesheet"
      type="text/css"
      href="../../../assets/css/style.css"
    />
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
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
                data-bs-target="#createNewRule"
              >
                <div
                  class="card btn-primary bg-gradient-primary"
                  style="height: 105px"
                >
                  <div class="card-body text-center">
                    <i
                      class="me-25 mt-md-75 mt-lg-50 size-icon"
                      data-feather="shield"
                    ></i>
                    <div class="pt-25">
                      <div class="role-heading">
                        <h4 class="fw-bolder font-small-3 text-center">
                          Yeni Güvenlik Duvarı Kuralı Oluştur
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
                data-bs-target="#createdomain"
                role="button"
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
                        <h4 class="fw-bolder font-small-3 text-center">
                          Alan Adı İçin Yeni Politika Oluştur
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
                data-bs-target="#"
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
                          <del> Yeni Departman Oluştur</del>
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
                data-bs-target="#openPorts"
              >
                <div
                  class="card btn-primary bg-gradient-primary"
                  style="height: 105px"
                >
                  <div class="card-body text-center">
                    <i
                      class="me-25 mt-md-75 mt-lg-50 size-icon"
                      data-feather="globe"
                    ></i>
                    <div class="pt-25">
                      <div class="role-heading">
                        <h4 class="fw-bolder font-small-3 text-center">
                          Ağ Bağlantı Noktalarını Açın
                        </h4>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="row" id="basic-table">
            <div class="col-lg-9 col-m-8">
              <div class="card">
                <div class="card-header bg-primary">
                  <h4 class="card-title">Güvenlik Duvarı Kurallarınız</h4>
                </div>

                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Kural Adı</th>
                        <th>Departman</th>
                        <th>Durum</th>
                        <th class="text-end">Düzenle</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Facebook Block</td>
                        <td>Engineering</td>
                        <td>
                          <span class="badge bg-success col-11">Aktif</span>
                        </td>
                        <td class="text-end">
                          <a
                            class="btn me-1"
                            data-bs-toggle="collapse"
                            href="#editfirewall1"
                            role="button"
                            aria-expanded="false"
                            aria-controls="editfirewall1"
                          >
                            <i data-feather="edit"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="12" class="hiddenRow">
                          <div
                            class="row accordion-body collapse"
                            id="editfirewall1"
                          >
                          <div class="card col-3">

                            <label class="form-label" for="select-rule1"
                              >Eklenecek Kural Aksiyonu Seç</label
                            >
                            <select
                              class="form-select"
                              id="select-rule1"
                              required
                            >
                              <option value="block1-1">Facebook Blokla</option>
                              <option value="block2-1">İnstagram Blokla</option>
                              <option value="block3-1">Twitter Blokla</option>
                              <option value="block4-1">Sosyal Medya Blokla</option>
                              <option value="block5-1">Online Oyunları Blokla</option>
                              <option value="block6-1">Yetişkin Siteleri Blokla</option>
                              <option value="block7-1">Bankacılığı Blokla</option>
                              <option value="block8-1">Video Servislerini Blokla</option>
                            </select>
                          </div>
                          <div class="card col-3">

                            <label class="form-label" for="select-departman1"
                              >Departman Seç</label
                            >
                            <select
                              class="form-select"
                              id="select-departman1"
                              required
                            >
                              <option value="departman1-1">Departman 1</option>
                              <option value="departman2-1">Departman 2</option>
                              <option value="departman3-1">Departman 3</option>
                              <option value="departman4-1">Departman 4</option>

                            </select>
                          </div>
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
                          <div class="col-3 mt-2 text-center"><button
                            type="submit"
                            class="btn btn-primary "
                          >
                            Kaydet
                          </button></div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Facebook Block</td>
                        <td>Engineering</td>
                        <td>
                          <span class="badge bg-success col-11">Aktif</span>
                        </td>
                        <td class="text-end">
                          <a
                            class="btn me-1"
                            data-bs-toggle="collapse"
                            href="#editfirewall2"
                            role="button"
                            aria-expanded="false"
                            aria-controls="editfirewall2"
                          >
                            <i data-feather="edit"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="12" class="hiddenRow">
                          <div
                            class="row accordion-body collapse"
                            id="editfirewall2"
                          >
                          <div class="card col-3">

                            <label class="form-label" for="select-rule2"
                              >Eklenecek Kural Aksiyonu Seç</label
                            >
                            <select
                              class="form-select"
                              id="select-rule2"
                              required
                            >
                              <option value="block1-2">Facebook Blokla</option>
                              <option value="block2-2">İnstagram Blokla</option>
                              <option value="block3-2">Twitter Blokla</option>
                              <option value="block4-2">Sosyal Medya Blokla</option>
                              <option value="block5-2">Online Oyunları Blokla</option>
                              <option value="block6-2">Yetişkin Siteleri Blokla</option>
                              <option value="block7-2">Bankacılığı Blokla</option>
                              <option value="block8-2">Video Servislerini Blokla</option>
                            </select>
                          </div>
                          <div class="card col-3">

                            <label class="form-label" for="select-departman2"
                              >Departman Seç</label
                            >
                            <select
                              class="form-select"
                              id="select-departman2"
                              required
                            >
                              <option value="departman1-2">Departman 1</option>
                              <option value="departman2-2">Departman 2</option>
                              <option value="departman3-2">Departman 3</option>
                              <option value="departman4-2">Departman 4</option>

                            </select>
                          </div>
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
                          <div class="col-3 mt-2 text-center"><button
                            type="submit"
                            class="btn btn-primary "
                          >
                            Kaydet
                          </button></div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Facebook Block</td>
                        <td>Engineering</td>
                        <td>
                          <span class="badge bg-danger col-11"
                            >Deaktif</span
                          >
                        </td>
                        <td class="text-end">
                          <a
                            class="btn me-1"
                            data-bs-toggle="collapse"
                            href="#editfirewall3"
                            role="button"
                            aria-expanded="false"
                            aria-controls="editfirewall3"
                          >
                            <i data-feather="edit"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="12" class="hiddenRow">
                          <div
                            class="row accordion-body collapse"
                            id="editfirewall3"
                          >
                          <div class="card col-3">

                            <label class="form-label" for="select-rule3"
                              >Eklenecek Kural Aksiyonu Seç</label
                            >
                            <select
                              class="form-select"
                              id="select-rule3"
                              required
                            >
                              <option value="block1-3">Facebook Blokla</option>
                              <option value="block2-3">İnstagram Blokla</option>
                              <option value="block3-3">Twitter Blokla</option>
                              <option value="block4-3">Sosyal Medya Blokla</option>
                              <option value="block5-3">Online Oyunları Blokla</option>
                              <option value="block6-3">Yetişkin Siteleri Blokla</option>
                              <option value="block7-3">Bankacılığı Blokla</option>
                              <option value="block8-3">Video Servislerini Blokla</option>
                            </select>
                          </div>
                          <div class="card col-3">

                            <label class="form-label" for="select-departman3"
                              >Departman Seç</label
                            >
                            <select
                              class="form-select"
                              id="select-departman3"
                              required
                            >
                              <option value="departman1-3">Departman 1</option>
                              <option value="departman2-3">Departman 2</option>
                              <option value="departman3-3">Departman 3</option>
                              <option value="departman4-3">Departman 4</option>

                            </select>
                          </div>
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
                          <div class="col-3 mt-2 text-center"><button
                            type="submit"
                            class="btn btn-primary "
                          >
                            Kaydet
                          </button></div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Facebook Block</td>
                        <td>Engineering</td>
                        <td>
                          <span class="badge bg-success col-11">Aktif</span>
                        </td>
                        <td class="text-end">
                          <a
                            class="btn me-1"
                            data-bs-toggle="collapse"
                            href="#editfirewall4"
                            role="button"
                            aria-expanded="false"
                            aria-controls="editfirewall4"
                          >
                            <i data-feather="edit"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="12" class="hiddenRow">
                          <div
                            class="row accordion-body collapse"
                            id="editfirewall4"
                          >
                          <div class="card col-3">
                            <label class="form-label" for="select-rule4"
                              >Eklenecek Kural Aksiyonu Seç</label
                            >
                            <select
                              class="form-select"
                              id="select-rule4"
                              required
                            >
                              <option value="block1-4">Facebook Blokla</option>
                              <option value="block2-4">İnstagram Blokla</option>
                              <option value="block3-4">Twitter Blokla</option>
                              <option value="block4-4">Sosyal Medya Blokla</option>
                              <option value="block5-4">Online Oyunları Blokla</option>
                              <option value="block6-4">Yetişkin Siteleri Blokla</option>
                              <option value="block7-4">Bankacılığı Blokla</option>
                              <option value="block8-4">Video Servislerini Blokla</option>
                            </select>
                          </div>
                          <div class="card col-3">

                            <label class="form-label" for="select-departman4"
                              >Departman Seç</label
                            >
                            <select
                              class="form-select"
                              id="select-departman4"
                              required
                            >
                              <option value="departman1-4">Departman 1</option>
                              <option value="departman2-4">Departman 2</option>
                              <option value="departman3-4">Departman 3</option>
                              <option value="departman4-4">Departman 4</option>

                            </select>
                          </div>
                          <div class="card col-3">

                            <label class="form-label" for="select-status4"
                              >Durum</label
                            >
                            <select
                              class="form-select"
                              id="select-status4"
                              required
                            >
                              <option value="active4">Aktif</option>
                              <option value="deactive4">Deaktif</option>
                            </select>
                          </div>
                          <div class="col-3 mt-2 text-center"><button
                            type="submit"
                            class="btn btn-primary "
                          >
                            Kaydet
                          </button></div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-m-4">
              <div class="card">
                <div class="card-header bg-primary">
                  <h4 class="card-title">Ağ Portlarınız</h4>
                </div>

                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Port</th>
                        <th>Durum</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>2222</td>
                        <td>
                          <span class="badge bg-success col-8">Aktif</span>
                        </td>
                      </tr>
                      <tr>
                        <td>3389</td>
                        <td>
                          <span class="badge bg-success col-8">Aktif</span>
                        </td>
                      </tr>
                      <tr>
                        <td>3131</td>
                        <td>
                          <span class="badge bg-danger col-8">Deaktif</span>
                        </td>
                      </tr>
                      <tr>
                        <td>1234</td>
                        <td>
                          <span class="badge bg-success col-8">Aktif</span>
                        </td>
                      </tr>
                      <tr>
                        <td>4321</td>
                        <td>
                          <span class="badge bg-success col-8">Aktif</span>
                        </td>
                      </tr>
                      <tr>
                        <td>1243</td>
                        <td>
                          <span class="badge bg-danger col-8">Deaktif</span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-md-12 col-lg-4">
              <div class="card">
                <div class="card-header bg-primary">
                  <h4 class="card-title fs-5">
                    <i class="me-25" data-feather="codesandbox"></i> Kuralları
                    Ağa Zorla
                  </h4>
                </div>
                <div class="card-body">
                  <div class="mt-1 form-check form-switch">
                    <input
                      type="checkbox"
                      class="form-check-input"
                      id="customSwitch1"
                    />

                    <label class="form-check-label" for="customSwitch1"
                      >Sadece Kuralları Zorla</label
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-4">
              <div class="card">
                <div class="card-header bg-primary">
                  <h4 class="card-title fs-5">
                    <i class="me-25" data-feather="refresh-ccw"></i> Güvenlik
                    Duvarını Otomatik Güncelle
                  </h4>
                </div>
                <div class="card-body mt-1">
                  <div class="form-check form-switch">
                    <input
                      type="checkbox"
                      class="form-check-input"
                      id="customSwitch2"
                    />
                    <label class="form-check-label" for="customSwitch2"
                      >Güvenlik Duvarı Veritabanını Günlük Olarak Otomatik
                      Güncelle</label
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-4">
              <div class="card">
                <div class="card-header bg-primary">
                  <h4 class="card-title fs-5">
                    <i class="me-25" data-feather="alert-triangle"></i> İhlal
                    Bildirimlerini Etkinleştir
                  </h4>
                </div>
                <div class="card-body">
                  <div class="mt-1 form-check form-switch">
                    <input
                      type="checkbox"
                      class="form-check-input"
                      id="customSwitch3"
                    />
                    <label class="form-check-label" for="customSwitch3"
                      >Kritik Ağ Hatalarında Bildirim Al</label
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="modal fade"
          id="createNewRule"
          tabindex="-1"
          aria-labelledby="createNewRuleTitle"
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
              <div class="modal-body px-lg-5">
                <div class="text-center">
                  <h1 class="role-title">Güvenlik Kuralları Merkezi</h1>
                </div>
                <div class="mb-1">
                  <label
                    class="form-label font-small-3"
                    for="basic-addon-rulename"
                    >Kural İsmi*</label
                  >

                  <input
                    type="text"
                    id="basic-addon-rulename"
                    class="form-control"
                    aria-label="rulename"
                    aria-describedby="rulename"
                    required
                  />
                  <div class="valid-feedback">Geçerli</div>
                  <div class="invalid-feedback">Kural İsmini Girin</div>
                </div>
                <hr class="bg-primary" />
                <div class="mb-1">
                  <h2>Kural Aksiyonlarını Seçin</h2>
                  <div class="row">
                    <div class="col-6">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="blockfacebook"
                      />
                      <label class="form-check-label" for="blockfacebook">
                        Facebook Blokla
                      </label>
                      <br />
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="blockinstagram"
                      />
                      <label class="form-check-label" for="blockinstagram">
                        İnstagram Blokla
                      </label>
                      <br />
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="blocksocial"
                      />
                      <label class="form-check-label" for="blocksocial">
                        Sosyal Medya Blokla
                      </label>
                      <br />
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="blockgames"
                      />
                      <label class="form-check-label" for="blockgames">
                        Online Oyunları Blokla
                      </label>
                    </div>
                    <div class="col-6">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="blocktwitter"
                      />
                      <label class="form-check-label" for="blocktwitter">
                        Twitter Blokla
                      </label>
                      <br />
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="blockadult"
                      />
                      <label class="form-check-label" for="blockadult">
                        Yetişkin Siteleri Blokla
                      </label>
                      <br />
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="blockbanking"
                      />
                      <label class="form-check-label" for="blockbanking">
                        Bankacılığı Blokla
                      </label>
                      <br />
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="blockvideo"
                      />
                      <label class="form-check-label" for="blockvideo">
                        Video Servislerini Blokla
                      </label>
                    </div>
                  </div>

                  <h4 class="mt-2">
                    Engellemek istediğiniz Web Sitesinin Url'sini Girin
                  </h4>
                  <input
                    type="text"
                    id="basic-addon-sitename"
                    class="form-control"
                    aria-label="sitename"
                    aria-describedby="sitename"
                    required
                    placeholder="https://thincloud.com"
                  />
                  <div class="valid-feedback">Geçerli</div>
                  <div class="invalid-feedback">Site İsmini Girin</div>
                </div>
                <hr class="bg-primary" />
                <div class="mb-1">
                  <label class="form-label" for="select-country1"
                    >Departman(lar) & Thincloud(lar) Seçme</label
                  >
                  <div class="row">
                    <div class="col-4">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="tc1"
                      />
                      <label class="form-check-label" for="tc1">
                        Thincloud 1
                      </label>
                      <br />
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="tc2"
                      />
                      <label class="form-check-label" for="tc2">
                        Thincloud 2
                      </label>
                      <br />
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="tc3"
                      />
                      <label class="form-check-label" for="tc3">
                        Thincloud 3
                      </label>
                    </div>
                    <div class="col-4">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="tc4"
                      />
                      <label class="form-check-label" for="tc4">
                        Thincloud 4
                      </label>
                      <br />
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="tc5"
                      />
                      <label class="form-check-label" for="tc5">
                        Thincloud 5
                      </label>
                      <br />
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="tc6"
                      />
                      <label class="form-check-label" for="tc6">
                        Thincloud 6
                      </label>
                    </div>
                    <div class="col-4">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="tc7"
                      />
                      <label class="form-check-label" for="tc7">
                        Thincloud 7
                      </label>
                      <br />
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="tc8"
                      />
                      <label class="form-check-label" for="tc8">
                        Thincloud 8
                      </label>
                      <br />
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="tc9"
                      />
                      <label class="form-check-label" for="tc9">
                        Thincloud 9
                      </label>
                    </div>
                  </div>
                  <hr class="bg-primary" />
                  <div class="row">
                    <div class="col-4">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="dp1"
                      />
                      <label class="form-check-label" for="dp1">
                        Departman 1
                      </label>
                    </div>
                    <div class="col-4">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="dp2"
                      />
                      <label class="form-check-label" for="dp2">
                        Departman 2
                      </label>
                    </div>
                    <div class="col-4">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="dp3"
                      />
                      <label class="form-check-label" for="dp3">
                        Departman 3
                      </label>
                    </div>
                  </div>
                </div>
                <hr class="bg-primary" />
                <div class="mb-1">
                  <h2>Kural Geçerliliği</h2>
                  <div class="form-check active">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="flexRadioDefault"
                      id="always"
                    />
                    <label class="form-check-label" for="always">
                      Her Zaman
                    </label>
                  </div>
                  <br />
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="flexRadioDefault"
                      id="nextweek"
                    />
                    <label class="form-check-label" for="nextweek">
                      Haftaya Deaktif Et
                    </label>
                  </div>
                  <br />
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="flexRadioDefault"
                      id="nextmonth"
                    />
                    <label class="form-check-label" for="nextmonth">
                      Bir Ay Sonra Deaktif Et
                    </label>
                  </div>
                  <br />
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="flexRadioDefault"
                      id="letmedecide"
                    />
                    <label class="form-check-label" for="letmedecide">
                      Ben Karar Vereyim
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 text-end">
                    <button type="submit" class="btn btn-primary">
                      Oluştur
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
      </div>
    </div>
    <div
      class="modal fade"
      id="createdomain"
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
              Alan Adı İçin Yeni Politika Oluştur
            </h1>
            <hr />
            <div class="row">
              <label
                class="form-label font-small-3"
                for="basic-addon-policyname"
                >Politika İsmi*</label
              >

              <input
                type="text"
                id="basic-addon-policyname"
                class="form-control"
                aria-label="policyname"
                aria-describedby="policyname"
                required
              />
              <div class="valid-feedback">Geçerli</div>
              <div class="invalid-feedback">Politika İsmini Girin</div>
            </div>
            <hr class="bg-primary" />
            <div class="row">
              <h2>Politika Aksiyon(lar)'ını Seçin</h2>
              <div class="col-6">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="pc1"
                />
                <label class="form-check-label" for="pc1"> Politika 1 </label>
                <br />
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="pc2"
                />
                <label class="form-check-label" for="pc2"> Politika 2 </label>
                <br />
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="pc3"
                />
                <label class="form-check-label" for="pc3"> Politika 3 </label>
                <br />
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="pc4"
                />
                <label class="form-check-label" for="pc4"> Politika 4 </label>
                <br />
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="pc5"
                />
                <label class="form-check-label" for="pc5"> Politika 5 </label>
              </div>
              <div class="col-6">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="pc6"
                />
                <label class="form-check-label" for="pc6"> Politika 6 </label>
                <br />
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="pc7"
                />
                <label class="form-check-label" for="pc7"> Politika 7 </label>
                <br />
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="pc8"
                />
                <label class="form-check-label" for="pc8"> Politika 8 </label>
                <br />
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="pc9"
                />
                <label class="form-check-label" for="pc9"> Politika 9 </label>
                <br />
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="pc10"
                />
                <label class="form-check-label" for="pc10"> Politika 10 </label>
              </div>
            </div>
            <hr class="bg-primary" />
            <div class="row">
              <h2>Domain(ler)'i Seç</h2>
              <div class="row">
                <div class="col-4">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="pc6"
                  />
                  <label class="form-check-label" for="pc6"> Domain 1 </label>
                </div>
                <div class="col-4">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="pc6"
                  />
                  <label class="form-check-label" for="pc6"> Domain 2 </label>
                </div>
                <div class="col-4">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="pc6"
                  />
                  <label class="form-check-label" for="pc6"> Domain 3 </label>
                </div>
              </div>
            </div>
            <hr class="bg-primary" />
            <div class="row">
              <h2>Politika Kullanılabilirliği</h2>
              <div class="form-check active">
                <input
                  class="form-check-input"
                  type="radio"
                  name="flexRadioDefault"
                  id="always1"
                />
                <label class="form-check-label" for="always1">
                  Her Zaman
                </label>
              </div>
              <br />
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="flexRadioDefault"
                  id="nextweek1"
                />
                <label class="form-check-label" for="nextweek1">
                  Haftaya Deaktif Et
                </label>
              </div>
              <br />
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="flexRadioDefault"
                  id="nextmonth1"
                />
                <label class="form-check-label" for="nextmonth1">
                  Bir Ay Sonra Deaktif Et
                </label>
              </div>
              <br />
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="flexRadioDefault"
                  id="letmedecide1"
                />
                <label class="form-check-label" for="letmedecide1">
                  Ben Karar Vereyim
                </label>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-12 text-end">
                <button type="submit" class="btn btn-primary float-right">
                  Oluştur
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
    <div
      class="modal fade"
      id="openPorts"
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
              Ağ Bağlantı Noktalarını Aç
            </h1>
            <div class="mb-1">
              <label
                class="form-label font-small-3"
                for="basic-addon-networkname"
                >Bağlantı Noktası Tanımlama Adı *</label
              >

              <input
                type="text"
                id="basic-addon-networkname"
                class="form-control"
                aria-label="networkname"
                aria-describedby="networkname"
                required
              />
              <div class="valid-feedback">Geçerli</div>
              <div class="invalid-feedback">Port İsmini Girin</div>
            </div>
            <div class="mb-1">
              <label class="form-label font-small-3" for="basic-addon-portname"
                >Var Olan Port Adı*</label
              >

              <input
                type="text"
                id="basic-addon-portname"
                class="form-control"
                aria-label="portname"
                aria-describedby="portname"
                required
              />
              <div class="valid-feedback">Geçerli</div>
              <div class="invalid-feedback">Port Numarasını Girin</div>
            </div>
            <hr class="bg-primary" />
            <div class="row">
              <h2>Port Aksiyonunu Seçin</h2>
              <div class="col-6">
                <div class="form-check active">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="flexRadioDefault"
                    id="active"
                  />
                  <label class="form-check-label" for="active"> Aktif </label>
                </div>
              </div>
              <div class="col-6">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="flexRadioDefault"
                    id="deactive"
                  />
                  <label class="form-check-label" for="deactive">
                    Deaktif
                  </label>
                </div>
              </div>
            </div>
            <hr class="bg-primary" />

            <label class="form-label font-small-3" for="basic-addon-portnumber"
              >Port Numarası*</label
            >

            <input
              type="text"
              id="basic-addon-portnumber"
              class="form-control"
              aria-label="portnumber"
              aria-describedby="portnumber"
              required
            />
            <div class="valid-feedback">Geçerli</div>
            <div class="invalid-feedback">Port Numarasını Girin</div>

            <div class="row mt-2">
              <div class="col-12 text-end">
                <button type="submit" class="btn btn-primary">
                  Portu Aç/Kapa
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection("js"); ?>
    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="../../../app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/pages/page-api-key.js"></script>
    <script src="../../../app-assets/js/scripts/cards/card-analytics.js"></script>
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

<?php echo $__env->make('sabit.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\thincloud3\resources\views/pages/firewall.blade.php ENDPATH**/ ?>