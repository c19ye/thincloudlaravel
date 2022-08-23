@extends("layout")
@extends("sabit.nav")
@section("title")
    Yedekleme
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

@section("css")
<link
      rel="apple-touch-icon"
      href={{asset("app-assets/images/ico/apple-icon-120.png")}}
    />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href={{asset("app-assets/images/ico/favicon.ico")}}
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
      rel="stylesheet"
    />

    <!-- BEGIN: Vendor CSS-->
    <link
      rel="stylesheet"
      type="text/css"
      href={{asset("app-assets/vendors/css/vendors.min.css")}}
    />
    <link
      rel="stylesheet"
      type="text/css"
      href={{asset("app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css")}}
    />
    <link
      rel="stylesheet"
      type="text/css"
      href={{asset("app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css")}}
    />
    <link
      rel="stylesheet"
      type="text/css"
      href={{asset("app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css")}}
    />
    <link
      rel="stylesheet"
      type="text/css"
      href={{asset("app-assets/vendors/css/forms/select/select2.min.css")}}
    />
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link
      rel="stylesheet"
      type="text/css"
      href={{asset("app-assets/css/bootstrap.css")}}
    />
    <link
      rel="stylesheet"
      type="text/css"
      href={{asset("app-assets/css/bootstrap-extended.css")}}
    />
    <link
      rel="stylesheet"
      type="text/css"
      href={{asset("app-assets/css/colors.css")}}
    />
    <link
      rel="stylesheet"
      type="text/css"
      href={{asset("app-assets/css/components.css")}}
    />
    <link
      rel="stylesheet"
      type="text/css"
      href={{asset("app-assets/css/themes/dark-layout.css")}}
    />
    <link
      rel="stylesheet"
      type="text/css"
      href={{asset("app-assets/css/themes/bordered-layout.css")}}
    />
    <link
      rel="stylesheet"
      type="text/css"
      href={{asset("app-assets/css/themes/semi-dark-layout.css")}}
    />

    <!-- BEGIN: Page CSS-->
    <link
      rel="stylesheet"
      type="text/css"
      href={{asset("app-assets/css/plugins/forms/pickers/form-flat-pickr.css")}}
    />
    <link
      rel="stylesheet"
      type="text/css"
      href={{asset("app-assets/css/plugins/forms/pickers/form-pickadate.css")}}
    />
    <link
      rel="stylesheet"
      type="text/css"
      href={{asset("app-assets/css/core/menu/menu-types/vertical-menu.css")}}
    />
    <link
      rel="stylesheet"
      type="text/css"
      href={{asset("app-assets/css/plugins/forms/form-validation.css")}}
    />
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link
      rel="stylesheet"
      type="text/css"
      href={{asset("assets/css/style.css")}}
    />
    <!-- END: Custom CSS-->
@endsection

@section("content")
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
                data-bs-target="#createfullbackup"
              >
                <div
                  class="card btn-primary bg-gradient-primary"
                  style="height: 105px"
                >
                  <div class="card-body text-center">
                    <i
                      class="me-25 mt-md-75 mt-lg-50 size-icon"
                      data-feather="rotate-ccw"
                    ></i>

                    <div class="pt-25">
                      <div class="role-heading">
                        <h4 class="fw-bolder font-small-4 text-center">
                          Tam Yedek Oluştur
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
                data-bs-target="#migrate"
              >
                <div
                  class="card btn-primary bg-gradient-primary"
                  style="height: 105px"
                >
                  <div class="card-body text-center">
                    <i
                      class="me-25 mt-md-75 mt-lg-50 size-icon"
                      data-feather="upload-cloud"
                    ></i>
                    <div class="pt-25">
                      <div class="role-heading">
                        <h4 class="fw-bolder font-small-4 text-center">
                          Yerel PC'yi ThinCloud'a Taşıyın
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
                data-bs-target="#restorefrombackup"
              >
                <div
                  class="card btn-primary bg-gradient-primary"
                  style="height: 105px"
                >
                  <div class="card-body text-center">
                    <i
                      class="me-25 mt-md-75 mt-lg-50 size-icon"
                      data-feather="rotate-cw"
                    ></i>

                    <div class="pt-25">
                      <div class="role-heading">
                        <h4 class="fw-bolder font-small-4 text-center">
                          Yedekten geri yükle
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
                data-bs-target="#downloadyourbackups"
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
                        <h4 class="fw-bolder font-small-4 text-center">
                          Yedeklerinizi İndirin
                        </h4>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="row" id="basic-table">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">ThinCloud Yedekleriniz</h4>
                </div>

                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Yedekleme Numarası</th>
                        <th>thincloud kullanıcısı</th>
                        <th>oluşturma tarİhİ</th>
                        <th>boyut</th>
                        <th>şifreleme</th>
                        <th>zamanlama</th>
                        <th class="text-end">Düzenle</th>
                      </tr>
                    </thead>
                    <tbody>


                        @foreach ($backups as $backup)
                      <tr class="accordion-toggle">
                        <td>{{$backup->backup_number}}</td>
                        <td>
                            @foreach ($virtual_machines as $virtual_machine)
                                @if ($backup->id == $virtual_machine->backup_id)
                                {{$virtual_machine->name}} {{$virtual_machine->surname}}
                                @endif
                            @endforeach
                        </td>
                        <td>
                          <i data-feather="clock"></i>
                          {{$backup->created_at}}
                        </td>
                        <td>{{$backup->size}}GB</td>
                        <td>

                            @if ($backup->crypt_method != "nocrypt")
                            <span class="badge bg-success">Şifreli</span>
                            @else
                            <span class="badge bg-danger">Şifresiz</span>
                            @endif

                        </td>
                        <td>
                            @foreach ($backup_frequencies as $backup_frequency)


                           @if ($backup->backup_frequency == $backup_frequency->id)
                                {{$backup_frequency->name}}
                           @endif
                           @endforeach



                        </td>
                        <td class="text-end">
                          <a
                            class="btn me-1"
                            data-bs-toggle="collapse"
                            href="#editbackup{{$backup->id}}"
                            role="button"
                            aria-expanded="false"
                            aria-controls="editbackup1"
                          >
                            <i data-feather="edit"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <form action="/mynetwork/backup/update" method="post">
                            @csrf
                        <td colspan="12" class="hiddenRow">
                            <input type="hidden" name="id" value="{{$backup->id}}">
                          <div
                            class="row accordion-body collapse"
                            id="editbackup{{$backup->id}}"
                          >
                          <div class="card col-2">

                            <label class="form-label" for="select-time1"
                              >Programı Ayarla</label
                            >
                            <select
                              class="form-select"
                              id="select-time1"
                              name="backup_frequency"

                            >
                            @foreach ($backup_frequencies as $backup_frequency)

                              <option value="{{$backup_frequency->id}}" {{$backup->backup_frequency == $backup_frequency->id  ? 'selected' : ''}}>{{$backup_frequency->name}}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="card col-2">

                            <label class="form-label" for="select-tech1"
                              >Teknoloji Seç</label
                            >
                            <select
                              class="form-select"
                              id="select-tech1"
                              name="backup_technology"
                              required
                            >
                            @foreach ($backup_technologies as $backup_technology)

                            <option value="{{$backup_technology->id}}" {{$backup->backup_technology == $backup_technology->id  ? 'selected' : ''}}>{{$backup_technology->name}}</option>
                            @endforeach

                            </select>
                          </div>
                          <div class="card col-2">

                            <label class="form-label" for="select-encryption1"
                              >Şifreleme Yöntemleri</label
                            >
                            <select
                              class="form-select"
                              id="select-encryption1"
                              name="crypt_method"
                              required
                            >
                            @foreach ($crypt_methods as $crypt_method)

                            <option value="{{$crypt_method->id}}" {{$backup->crypt_method == $crypt_method->id  ? 'selected' : ''}}>{{$crypt_method->name}}</option>
                            @endforeach
                            </select>
                          </div>
                          <div class="card col-2">

                            <label class="form-label" for="select-backups1"
                              >Yedeklenecekler</label
                            >
                            <select
                              class="form-select"
                              id="select-backups1"
                              name="what_backup"
                              required
                            >
                            @foreach ($what_backups as $what_backup)

                            <option value="{{$what_backup->id}}" {{$backup->what_backup == $what_backup->id  ? 'selected' : ''}}>{{$what_backup->name}}</option>
                            @endforeach

                            </select>
                          </div>
                          <div class="card col-2">

                            <label class="form-label" for="select-storage1"
                              >Depolama Ayarları</label
                            >
                            <select
                              class="form-select"
                              id="select-storage1"
                              name="backup_location"
                              required
                            >
                            @foreach ($backup_locations as $backup_location)

                            <option value="{{$backup_location->id}}" {{$backup->backup_location == $backup_location->id  ? 'selected' : ''}}>{{$backup_location->name}}</option>
                            @endforeach

                            </select>
                          </div>
                          <div class="card col-2">

                            <label class="form-label" for="select-delete1"
                              >Silme Zamanı</label
                            >
                            <select
                              class="form-select"
                              id="select-delete1"
                              name="delete_backup"
                              required
                            >
                            @foreach ($delete_backups as $delete_backup)

                            <option value="{{$delete_backup->id}}" {{$backup->delete_backup == $delete_backup->id  ? 'selected' : ''}}>{{$delete_backup->name}}</option>
                            @endforeach
                            </select>
                          </div>
                          <div class="row">
                            <div class="text-center"><button
                              type="submit"
                              class="btn btn-primary "
                            >
                              Kaydet
                            </button></div>
                          </div>

                          </div>
                        </td>
                         </form>
                      </tr>
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
      id="createfullbackup"
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

          <div class="modal-body pb-5">
            <h1
              class="address-title text-center mb-1"
              id="createfullbackuptitle"
            >
              Tam Yedek Oluştur
            </h1>
            <section id="faq-tabs">
              <!-- vertical tab pill -->
              <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12">
                  <div
                    class="d-flex justify-content-between flex-column mb-1 mb-md-0"
                  >
                    <!-- pill tabs navigation -->
                    <ul
                      class="nav nav-pills nav-left flex-column"
                      role="tablist"
                    >

                      <li class="mx-auto mb-2"><h4 class="font-small-5">Cihazlar</h4></li>
                      <!-- MACHİNES -->
                    @foreach ($virtual_machines as $virtual_machine)

                        @if ($virtual_machine->backup_id == NULL)

                        <li class="nav-item mb-1 mx-auto">
                            <a
                              class="nav-link"
                              id="{{$virtual_machine->id}}"
                              data-bs-toggle="pill"
                              href="#backupmodal"
                              aria-expanded="true"
                              role="tab"
                            >
                              <i data-feather="server"></i>
                              <span class="fw-bold font-small-5">{{$virtual_machine->thincloudname}}</span>
                            </a>
                          </li>

                        @endif

                      @endforeach


                    </ul>

                    <!-- FAQ image -->
                  </div>
                </div>



                <div class="col-lg-9 col-md-12 col-sm-12">

                  <!-- pill tabs tab content -->
                  <div class="tab-content">
                        <form action="/mynetwork/backup/createbackup" method="POST">
                            @csrf
                    <!-- VM-1 -->
                    <div
                      role="tabpanel"
                      class="tab-pane active"
                      id="backupmodal"
                      aria-labelledby="vm1"
                      aria-expanded="true"
                    >
                    <input type="hidden" class="vm_id" name="virtual_machine_id" value="">
                      <div class="row pricing-card">
                        <div
                          class="col-12 col-sm-offset-2 col-sm-10 col-md-12 col-lg-offset-2 col-lg-12 mx-auto"
                        >
                          <div class="row border-start-primary">
                            <div class="row">
                              <h2>Yedekleme Sıklığı Seç</h2>

                              @foreach ($backup_frequencies as $backup_frequency)
                              <div class="col-3">
                                <input
                                  class="form-check-input"
                                  type="radio"
                                  name="backup_frequency"
                                  id="backup_frequency{{$backup_frequency->id}}"
                                  value="{{$backup_frequency->id}}"
                                />
                                <label class="form-check-label" for="backup_frequency{{$backup_frequency->id}}">
                                  {{$backup_frequency->name}}
                                </label>
                              </div>
                              @endforeach

                            </div>
                            <div class="mt-2">
                              <h2>Yedekleme Teknolojisini Seçin</h2>
                              @foreach ($backup_technologies as $backup_technology)


                              <input
                                class="form-check-input"
                                type="radio"
                                name="backup_technology"
                                id="backup_technology{{$backup_technology->id}}"
                                value="{{$backup_technology->id}}"
                              />
                              <label class="form-check-label" for="backup_technology{{$backup_technology->id}}">
                                {{$backup_technology->name}}
                              </label>
                              <br />
                               @endforeach

                            </div>
                            <div class="mt-2">
                              <h2>Şifreleme Yöntemini Seçin</h2>
                              @foreach ($crypt_methods as $crypt_method)


                              <input
                                class="form-check-input"
                                type="radio"
                                name="crypt_method"
                                id="crypt_method{{$crypt_method->id}}"
                                value="{{$crypt_method->id}}"
                              />
                              <label class="form-check-label" for="crypt_method{{$crypt_method->id}}">
                                {{$crypt_method->name}}
                              </label>
                              <br />
                              @endforeach
                            </div>
                            <div class="mt-2">
                              <h2>Ne Yedeklemeli?</h2>
                              @foreach ($what_backups as $what_backup)


                              <input
                                class="form-check-input"
                                type="radio"
                                name="what_backup"
                                id="what_backup{{$what_backup->id}}"
                                value="{{$what_backup->id}}"

                              />
                              <label class="form-check-label" for="what_backup{{$what_backup->id}}">
                                {{$what_backup->name}}
                              </label>

                              <br />
                              @endforeach


                            </div>
                            <div class="mt-2">
                              <h2>Yedekleme Lokasyonu</h2>
                              @foreach ($backup_locations as $backup_location)
                              <input
                                class="form-check-input"
                                type="radio"
                                name="backup_location"
                                id="backup_location{{$backup_location->id}}"
                                value="{{$backup_location->id}}"
                              />
                              <label class="form-check-label" for="backup_location{{$backup_location->id}}">
                                {{$backup_location->name}}
                              </label>
                              <br />
                              @endforeach
                            </div>
                            <div class="mt-2">
                              <h2>Yedek Silme Seçenekleri</h2>
                              @foreach ($delete_backups as $delete_backup)

                              <input
                                class="form-check-input"
                                type="radio"
                                name="delete_backup"
                                id="delete_backup{{$delete_backup->id}}"
                                value="{{$delete_backup->id}}"
                              />
                              <label class="form-check-label" for="delete_backup{{$delete_backup->id}}">
                                {{$delete_backup->name}}
                              </label>
                              <br />
                              @endforeach
                            </div>
                            <div class="row mt-2">
                              <div class="col-12 text-end">
                                <button type="submit" class="btn btn-primary">
                                  Oluştur
                                </button>
                                <button
                                  type="reset"
                                  class="btn btn-outline-secondary"
                                  data-bs-dismiss="modal"
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
                  </div>

                </div>

              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
    <!--Modal End-->
    <!--Migrate Modal Start-->
    <div
      class="modal fade"
      id="migrate"
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
              Yerel Bilgisayarı Thinclod'a Taşıma Sihirbazını İndir
            </h1>
            <hr class="bg-primary" />

            <div class="row mt-2">
              <div class="center col-12">
                <button type="submit" class="btn btn-primary col-12">
                  İndir
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Modal End-->

    <!--Restore Modal Start-->
    <div
      class="modal fade"
      id="restorefrombackup"
      tabindex="-1"
      aria-labelledby="restorefrombackup"
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
              Yedekten Geri Yükle
            </h1>
            <hr class="bg-primary" />
            <div class="row">
              <h2>Onarmak İçin Thincloud(ları) Seç</h2>
              @foreach ($backups as $backup)
              @foreach ($virtual_machines as $virtual_machine)
                @if ($backup->virtual_machine_id == $virtual_machine->id)


              <div class="col-6">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="tcb{{$backup->id}}"
                />
                <label class="form-check-label" for="tcb{{$backup->id}}">{{$virtual_machine->thincloudname}}</label>
                <br />
              </div>
              @endif
              @endforeach
              @endforeach
            </div>
            <hr class="bg-primary" />
            <div class="mb-1">
              <label class="form-label" for="select-country1"
                >Onarmak İçin Yedek Seç</label
              >
              <select class="form-select" id="select-country1" required>
                <option value="">Yedek Seç</option>
                <option value="lastbackup">En Son Yedek</option>
                <option value="lastweekbackup">Geçen Haftanın Yedeği</option>
                <option value="lastmonthbackup">Geçen Ayın Yedeği</option>
              </select>
              <div class="valid-feedback">Geçerli</div>
              <div class="invalid-feedback">Lütfen Planı Seçin</div>
            </div>
            <hr class="bg-primary" />
            <div class="row">
              <div class="col-md-12 mb-1">
                <label class="form-label" for="fp-default"
                  >Varsa Geri Yüklenecek Tarihi Seçin</label
                >
                <input
                  type="text"
                  id="fp-default"
                  class="form-control flatpickr-basic"
                  placeholder="YYYY-MM-DD"
                />
              </div>
            </div>

            <hr class="bg-primary" />
            <div class="">
              <h2>Bildirimler</h2>
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="sendmail"
              />
              <label class="form-check-label" for="sendmail">
                Kullanıcıya E-mail Gönder
              </label>
              <br />
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="sendadmin"
              />
              <label class="form-check-label" for="sendadmin">
                Yöneticiye E-mail Gönder
              </label>
            </div>
            <div class="row mt-2">
              <div class="col-12 text-end">
                <button type="submit" class="btn btn-primary">
                  Geri Yükle
                </button>
                <button type="reset" class="btn btn-outline-secondary"  data-bs-dismiss="modal">
                  İptal
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Modal End-->

    <!--Download Backups Modal Start-->
    <div
      class="modal fade"
      id="downloadyourbackups"
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
              Yedeklerinizi İndirin
            </h1>
            <hr class="bg-primary" />
            <div class="row">
              <h2>Thincloud(larınızı) ya da Departman(larınızı) Seçin</h2>
              @foreach ($backups as $backup)
              @foreach ($virtual_machines as $virtual_machine)
                @if ($backup->virtual_machine_id == $virtual_machine->id)
              <div class="col-6">
                <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="tcd{{$backup->id}}"
              />
              <label class="form-check-label" for="tcd{{$backup->id}}">{{$virtual_machine->thincloudname}}</label>
              <br />

              </div>

              @endif
              @endforeach
              @endforeach
            </div>
            <hr class="bg-primary" />
            <div class="row">
                @foreach ($departments as $department)


              <div class="col-6">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="dp{{$department->id}}"
                />
                <label class="form-check-label" for="dp{{$department->id}}">{{$department->name}}</label>
                <br />
              </div>
              @endforeach

            </div>
            <hr class="bg-primary" />
            <div class="row">
              <h2>Lokasyonunuzu Seçin</h2>
              <div class="col-4">
                <input
                  class="form-check-input"
                  type="radio"
                  name="flexRadioDefault"
                  id="europa"
                />
                <label class="form-check-label" for="europa"> Avrupa </label>
                <br />
                <input
                  class="form-check-input"
                  type="radio"
                  name="flexRadioDefault"
                  id="asia"
                />
                <label class="form-check-label" for="asia"> Asya </label>
              </div>
              <div class="col-4">
                <input
                  class="form-check-input"
                  type="radio"
                  name="flexRadioDefault"
                  id="northamerica"
                />
                <label class="form-check-label" for="northamerica">
                  Kuzey Amerika
                </label>
                <br />
                <input
                  class="form-check-input"
                  type="radio"
                  name="flexRadioDefault"
                  id="southamerica"
                />
                <label class="form-check-label" for="southamerica">
                  Güney Amerika
                </label>
              </div>
              <div class="col-4">
                <input
                  class="form-check-input"
                  type="radio"
                  name="flexRadioDefault"
                  id="africa"
                />
                <label class="form-check-label" for="africa"> Afrika </label>
                <br />
                <input
                  class="form-check-input"
                  type="radio"
                  name="flexRadioDefault"
                  id="australia"
                />
                <label class="form-check-label" for="australia">
                  Avustralya
                </label>
              </div>
            </div>
            <hr class="bg-primary" />
            <div class="mb-1">
              <label class="form-label" for="select-country1"
                >İndirmek İçin Yedekleme Seçin</label
              >
              <select class="form-select" id="select-country1" required>
                <option value="">Yedek Seç</option>
                <option value="lastbackup">En Son Yedek</option>
                <option value="lastweekbackup">Geçen Haftanın Yedeği</option>
                <option value="lastmonthbackup">Geçen Ayın Yedeği</option>
              </select>
              <div class="valid-feedback">Geçerli</div>
              <div class="invalid-feedback">Lütfen Planı Seçin</div>
            </div>

            <div class="row mt-2">
              <div class="col-12 text-end">
                <button type="submit" class="btn btn-primary">İndir</button>
                <button type="reset" class="btn btn-outline-secondary"  data-bs-dismiss="modal">
                  İptal
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Modal End-->
@endsection

@section("js")
    <!-- BEGIN: Vendor JS-->
    <script src={{asset("app-assets/vendors/js/vendors.min.js")}}></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src={{asset("app-assets/vendors/js/pickers/pickadate/picker.js")}}></script>
    <script src={{asset("app-assets/vendors/js/pickers/pickadate/picker.date.js")}}></script>
    <script src={{asset("app-assets/vendors/js/pickers/pickadate/picker.time.js")}}></script>
    <script src={{asset("app-assets/vendors/js/pickers/pickadate/legacy.js")}}></script>
    <script src={{asset("app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js")}}></script>
    <script src={{asset("app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js")}}></script>
    <script src={{asset("app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js")}}></script>
    <script src={{asset("app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js")}}></script>
    <script src={{asset("app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js")}}></script>
    <script src={{asset("app-assets/vendors/js/forms/select/select2.full.min.js")}}></script>
    <script src={{asset("app-assets/vendors/js/forms/validation/jquery.validate.min.js")}}></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src={{asset("app-assets/js/core/app-menu.js")}}></script>
    <script src={{asset("app-assets/js/core/app.js")}}></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src={{asset("app-assets/js/scripts/forms/pickers/form-pickers.js")}}></script>

    <script src={{asset("app-assets/js/scripts/tables/table-datatables-advanced.js")}}></script>
    <!-- END: Page JS-->
    <script>
        $(function () {
            $(".nav-link").click(function (e) {
            var vm_id= $(this).attr("id");
            $("input.vm_id").val(vm_id);
           });
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
