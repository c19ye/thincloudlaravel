@extends("layout")
@extends('sabit.nav')
@section("title")
    Güvenlik Duvarı
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
                data-bs-target="#createdomain e gidecek"
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
                        <del class="fw-bolder font-small-3 text-center">
                          Alan Adı İçin Yeni Politika Oluştur
                        </del>
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
          @if ($message = Session::get("success"))
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Başarılı</h4>
                <div class="alert-body">
                    {{$message}}
                </div>
            </div>
          @endif
          <div class="row" id="basic-table">
            <div class="col-lg-8 col-m-8">
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
                      @foreach($firewall as $fire)
                      <tr>
                        <td>{{$fire->rule_name}}</td>
                        <td>
                          @foreach($fireDepart as $fireDep)
                            @if ($fireDep->firewall_id == $fire->id)
                              @foreach ($departman as $dep)
                                @if($dep->id == $fireDep->department_id)
                                  {{$dep->name}},
                                @endif
                              @endforeach
                            @endif
                          @endforeach
                        </td>
                        <td>
                          @if($fire->state == 1)
                            <span class="badge bg-success col-11">Aktif</span>
                          @else
                            <span class="badge bg-danger col-11">Deaktif</span>
                          @endif
                        </td>
                        <td class="text-end">
                          <a
                            class="btn me-1"
                            data-bs-toggle="collapse"
                            href="#editfirewall{{$fire->id}}"
                            role="button"
                            aria-expanded="false"
                            aria-controls="editfirewall{{$fire->id}}"
                          >
                            <i data-feather="edit"></i>
                          </a>
                        </td>
                      </tr>
                      <form method="POST" action="/mynetwork/firewall/update">
                        @csrf
                      <tr>
                        <td colspan="12" class="hiddenRow">
                          <div
                            class="row accordion-body collapse"
                            id="editfirewall{{$fire->id}}"
                          >
                          <input type="hidden" name="id" value="{{$fire->id}}">
                          <div class="card col-3">

                            <label class="form-label" for="select-rule1"
                              >Eklenecek Kural Aksiyonu Seç</label
                            >
                            <select
                              class="form-select"
                              id="select-rule{{$fire->id}}"
                              name="add_rules"
                              required
                            >
                              <option value="blockfacebook">Facebook Blokla</option>
                              <option value="blockinstagram">İnstagram Blokla</option>
                              <option value="blocktwitter">Twitter Blokla</option>
                              <option value="blocksocial">Sosyal Medya Blokla</option>
                              <option value="blockgames">Online Oyunları Blokla</option>
                              <option value="blockadult">Yetişkin Siteleri Blokla</option>
                              <option value="blockbanking">Bankacılığı Blokla</option>
                              <option value="blockvideo">Video Servislerini Blokla</option>
                            </select>
                          </div>
                          <div class="card col-3">

                            <label class="form-label" for="select-departman{{$fire->id}}"
                              >Departman Seç</label
                            >
                            <select
                              class="form-select"
                              id="select-departman{{$fire->id}}"
                              name="select_departman"
                              required
                            >
                            @foreach($departman as $depp)
                              <option value="{{$depp->id}}">{{$depp->name}}</option>
                            @endforeach
                            </select>
                          </div>
                          <div class="card col-3">

                            <label class="form-label" for="select-state{{$fire->id}}"
                              >Durum</label
                            >
                            <select
                              class="form-select"
                              id="select-state{{$fire->id}}"
                              name="select_state"
                              required
                            >
                              <option value="1">Aktif</option>
                              <option value="0">Deaktif</option>
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
                      @endforeach
                    </form>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-m-4">
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
                        <th>Düzenle</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($ports as $port)
                      <tr>
                        <td>{{$port->port_number}}</td>
                        <td>
                          @if($port->port_state == 1)
                            <span class="badge bg-success col-8">Aktif</span>
                          @else
                            <span class="badge bg-danger col-8">Deaktif</span>
                          @endif
                        </td>
                        <td class="text-end">
                          <a
                            class="btn me-1"
                            data-bs-toggle="collapse"
                            href="#editport{{$port->id}}"
                            role="button"
                            aria-expanded="false"
                            aria-controls="editport{{$port->id}}"
                          >
                            <i data-feather="edit"></i>
                          </a>
                        </td>
                      </tr>
                      <form action="/mynetwork/firewall/update_ports" method="POST">
                        @csrf
                      <tr>
                        <td colspan="12" class="hiddenRow">
                          <div
                            class="row accordion-body collapse"
                            id="editport{{$port->id}}"
                          >
                          <input type="hidden" name="id" value="{{$port->id}}">
                          <div class="col-4 mb-1">
                            <label
                              class="form-label font-small-3"
                              for="port_number"
                              >Port Numarası</label
                            >

                            <input
                              type="text"
                              id="port_number"
                              name="port_number"
                              class="form-control"
                              aria-label="port_number"
                              aria-describedby="port_number"
                            />
                          </div>
                          <div class="card col-4">

                            <label class="form-label" for="select-state{{$port->id}}"
                              >Durum</label
                            >
                            <select
                              class="form-select"
                              id="select-state{{$port->id}}"
                              name="select_state"
                              required
                            >
                              <option value="1">Aktif</option>
                              <option value="2">Deaktif</option>
                            </select>
                          </div>
                          <div class="col-4 mt-2 text-center"><button
                            type="submit"
                            class="btn btn-primary "
                          >
                            Kaydet
                          </button></div>
                      </tr>
                    </form>
                      @endforeach
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
                      id="forceRuleSwitch"
                      name="force_rules"
                      @if($firewallcheck != null)
                        {{$firewallcheck->force_rules ? "checked":""}}
                      @endif
                    />

                    <label class="form-check-label" for="forceRuleSwitch"
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
                      id="autoUpdateSwitch"
                      name="auto_update"
                      @if($firewallcheck != null)
                        {{$firewallcheck->auto_update ? "checked":""}}
                      @endif
                    />
                    <label class="form-check-label" for="autoUpdateSwitch"
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
                      id="systemNotification"
                      name="criticial_notification"
                      @if($firewallcheck != null)
                        {{$firewallcheck->critical_notification ? "checked":""}}
                      @endif
                    />
                    <label class="form-check-label" for="systemNotification"
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
          <form method="POST" action="/mynetwork/firewall/create_rule">
            @csrf
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
                    name="rule_name"
                    class="form-control"
                    aria-label="rule_name"
                    aria-describedby="rule_name"
                    required
                  />
                  @if ($errors->createrule->first("rule_name") != "")
                    <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                        <div class="alert-body d-flex align-items-center">
                            <i data-feather="info" class="me-50"></i>
                            <span>{{$errors->createrule->first("rule_name")}}</span>
                        </div>
                    </div>
                    @endif
                </div>
                <hr class="bg-primary" />
                <div class="mb-1">
                  <h2>Kural Aksiyonlarını Seçin</h2>
                  <div class="row">
                    <div class="col-6">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        name="rule_actions[]"
                        value="blockfacebook"
                        id="blockfacebook"
                      />
                      <label class="form-check-label" for="blockfacebook">
                        Facebook Blokla
                      </label>
                      <br />
                      <input
                        class="form-check-input"
                        type="checkbox"
                        name="rule_actions[]"
                        value="blockinstagram"
                        id="blockinstagram"
                      />
                      <label class="form-check-label" for="blockinstagram">
                        İnstagram Blokla
                      </label>
                      <br />
                      <input
                        class="form-check-input"
                        type="checkbox"
                        name="rule_actions[]"
                        value="blocksocial"
                        id="blocksocial"
                      />
                      <label class="form-check-label" for="blocksocial">
                        Sosyal Medya Blokla
                      </label>
                      <br />
                      <input
                        class="form-check-input"
                        type="checkbox"
                        name="rule_actions[]"
                        value="blockgames"
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
                        name="rule_actions[]"
                        value="blocktwitter"
                        id="blocktwitter"
                      />
                      <label class="form-check-label" for="blocktwitter">
                        Twitter Blokla
                      </label>
                      <br />
                      <input
                        class="form-check-input"
                        type="checkbox"
                        name="rule_actions[]"
                        value="blockadult"
                        id="blockadult"
                      />
                      <label class="form-check-label" for="blockadult">
                        Yetişkin Siteleri Blokla
                      </label>
                      <br />
                      <input
                        class="form-check-input"
                        type="checkbox"
                        name="rule_actions[]"
                        value="blockbanking"
                        id="blockbanking"
                      />
                      <label class="form-check-label" for="blockbanking">
                        Bankacılığı Blokla
                      </label>
                      <br />
                      <input
                        class="form-check-input"
                        type="checkbox"
                        name="rule_actions[]"
                        value="blockvideo"
                        id="blockvideo"
                      />
                      <label class="form-check-label" for="blockvideo">
                        Video Servislerini Blokla
                      </label>
                    </div>
                    @if ($errors->createrule->first("rule_actions") != "")
                    <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                        <div class="alert-body d-flex align-items-center">
                            <i data-feather="info" class="me-50"></i>
                            <span>{{$errors->createrule->first("rule_actions")}}</span>
                        </div>
                    </div>
                    @endif
                  </div>

                  <h4 class="mt-2">
                    Engellemek istediğiniz Web Sitesinin Url'sini Girin
                  </h4>
                  <input
                    type="text"
                    id="url"
                    class="form-control"
                    name="url"
                    aria-label="url"
                    aria-describedby="url"
                    required
                    placeholder="https://thincloud.com"
                  />
                </div>
                <hr class="bg-primary" />
                <div class="mb-1">
                  <label class="form-label" for="select-country1"
                    >Departman(lar) & Thincloud(lar) Seçme</label
                  >
                  <div class="row">
                    @foreach($virtual as $virt)
                    <div class="col-3">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        name="virtuals[]"
                        value="{{$virt->id}}"
                        id="tc{{$virt->id}}"
                      />
                      <label class="form-check-label" for="tc{{$virt->id}}">
                        {{$virt->thincloudname}}
                      </label>
                    </div>
                    @endforeach
                    @if ($errors->createrule->first("virtuals") != "")
                    <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                        <div class="alert-body d-flex align-items-center">
                            <i data-feather="info" class="me-50"></i>
                            <span>{{$errors->createrule->first("virtuals")}}</span>
                        </div>
                    </div>
                    @endif
                  </div>
                  <hr class="bg-primary" />
                  <div class="row">
                  @foreach($departman as $dep)
                    <div class="col-3">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        name="departmans[]"
                        value="{{$dep->id}}"
                        id="dp{{$dep->id}}"
                      />
                      <label class="form-check-label" for="dp{{$dep->id}}">
                        {{$dep->name}}
                      </label>
                    </div>
                  @endforeach
                  </div>
                  @if ($errors->createrule->first("departmans") != "")
                    <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                        <div class="alert-body d-flex align-items-center">
                            <i data-feather="info" class="me-50"></i>
                            <span>{{$errors->createrule->first("departmans")}}</span>
                        </div>
                    </div>
                    @endif
                </div>
                <hr class="bg-primary" />
                <div class="mb-1">
                  <h2>Kural Geçerliliği</h2>
                  <div class="form-check active">
                    <input
                      class="form-check-input"
                      type="radio"
                      value="always"
                      name="rule_validity"
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
                      value="nextweek"
                      name="rule_validity"
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
                      value="nextmonth"
                      name="rule_validity"
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
                      value="letmedecide"
                      name="rule_validity"
                      id="letmedecide"
                    />
                    <label class="form-check-label" for="letmedecide">
                      Ben Karar Vereyim
                    </label>
                  </div>
                  @if ($errors->createrule->first("rule_validity") != "")
                    <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                        <div class="alert-body d-flex align-items-center">
                            <i data-feather="info" class="me-50"></i>
                            <span>{{$errors->createrule->first("rule_validity")}}</span>
                        </div>
                    </div>
                    @endif
                </div>
                <div class="row">
                  <div class="col-12 text-end">
                    <button type="submit" class="btn btn-primary">
                      Oluştur
                    </button>
                    <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal"
                    >
                      İptal
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
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
                <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">
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
      <form method="POST" action="/mynetwork/firewall/open_ports">
        @csrf
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
                for="basic-addon-network_name"
                >Bağlantı Noktası Tanımlama Adı *</label
              >

              <input
                type="text"
                id="basic-addon-network_name"
                class="form-control"
                name="network_name"
                aria-label="network_name"
                aria-describedby="network_name"
                required
              />
              @if ($errors->openports->first("network_name") != "")
              <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                  <div class="alert-body d-flex align-items-center">
                      <i data-feather="info" class="me-50"></i>
                      <span>{{$errors->openports->first("network_name")}}</span>
                  </div>
              </div>
              @endif
            </div>
            <div class="mb-1">
              <label class="form-label font-small-3" for="basic-addon-portname"
                >Var Olan Port Adı*</label
              >

              <input
                type="text"
                id="basic-addon-port_name"
                class="form-control"
                name="port_name"
                aria-label="port_name"
                aria-describedby="port_name"
                required
              />
              @if ($errors->openports->first("port_name") != "")
              <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                  <div class="alert-body d-flex align-items-center">
                      <i data-feather="info" class="me-50"></i>
                      <span>{{$errors->openports->first("port_name")}}</span>
                  </div>
              </div>
              @endif
            </div>
            <hr class="bg-primary" />
            <div class="row">
              <h2>Port Aksiyonunu Seçin</h2>
              <div class="col-6">
                <div class="form-check active">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="port_state"
                    value="1"
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
                    name="port_state"
                    value="0"
                    id="deactive"
                  />
                  <label class="form-check-label" for="deactive">
                    Deaktif
                  </label>
                </div>
              </div>
              @if ($errors->openports->first("port_state") != "")
              <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                  <div class="alert-body d-flex align-items-center">
                      <i data-feather="info" class="me-50"></i>
                      <span>{{$errors->openports->first("port_state")}}</span>
                  </div>
              </div>
              @endif
            </div>
            <hr class="bg-primary" />

            <label class="form-label font-small-3" for="basic-addon-portnumber"
              >Port Numarası*</label
            >

            <input
              type="text"
              id="basic-addon-portnumber"
              class="form-control"
              name="port_number"
              aria-label="port_number"
              aria-describedby="port_number"
              required
            />
            @if ($errors->openports->first("port_number") != "")
            <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                <div class="alert-body d-flex align-items-center">
                    <i data-feather="info" class="me-50"></i>
                    <span>{{$errors->openports->first("port_number")}}</span>
                </div>
            </div>
            @endif

            <div class="row mt-2">
              <div class="col-12 text-end">
                <button type="submit" class="btn btn-primary">
                  Portu Aç/Kapa
                </button>
                <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                  İptal
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    </div>
@endsection

@section("js")
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
      $(document).ready(function(){
          $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
          $("#forceRuleSwitch,#autoUpdateSwitch,#systemNotification").change(function(){
              var status=$("#forceRuleSwitch").prop("checked") == true ? 1 : 0;
              var status2=$("#autoUpdateSwitch").prop("checked") == true ? 1 : 0;
              var status3=$("#systemNotification").prop("checked") == true ? 1 : 0;
              $.ajax({
                  type: "GET",
                  url: "/mynetwork/firewall/notification",
                  data: {"force_rules" : status,"auto_update" : status2,"critical_notification":status3},
                  dataType: "json",
                  success: function (response) {
                      console.log("success")
              }
          });
          });


      });
   </script>

@if(count($errors->createrule) > 0)
<script type="text/javascript">
    $( document ).ready(function(){
        $('#createNewRule').modal('show');
    });
</script>
@endif
@if(count($errors->openports) > 0)
<script type="text/javascript">
$( document ).ready(function(){
    $('#openPorts').modal('show');
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
