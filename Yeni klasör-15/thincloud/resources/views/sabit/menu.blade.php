    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto">
                    <a class="navbar-brand" href={{ route('index') }}><span class="brand-logo"></span>

                        <h2 class="brand-text">thincloud</h2>
                    </a>
                </li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content" >
            <ul class="text-center mt-2">
                <span class="avatar"><img class="round" src={{asset("app-assets/images/portrait/small/avatar-s-11.jpg")}}
                        alt="avatar" height="70" width="70" />
                    <span class="avatar-status-online"></span></span>

                <li class="nav-item mt-50">
                    <span class="user-name fw-bolder text-white opacity-75">{{ auth()->user()->name }}
                        {{ auth()->user()->surname }}</span>
                </li>
            </ul>
            <ul class="navigation navigation-main mt-3" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item {{ Route::is('index') ? 'active' : '' }}">
                    <a class="d-flex align-items-center" href={{ route('index') }}><i data-feather="home"></i><span
                            class="menu-title text-truncate" data-i18n="Home">Anasayfa</span></a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center" href=""><i data-feather="cloud"></i><span
                            class="menu-title text-truncate" data-i18n="Mythincloud">ThinCloud' um</span></a>
                    <ul class="menu-content">
                        <li class="{{ Route::is('myplans') ? 'active' : '' }}">
                            <a class="d-flex align-items-center" href={{ route('myplans') }}><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Myplan">Planlarım</span></a>
                        </li>
                        <li class="{{ Route::is('billing') ? 'active' : '' }}">
                            <a class="d-flex align-items-center" href={{ route('billing') }}><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Billing">Fatura</span></a>
                        </li>
                        <li>
                            <hr class="divider bg-primary" />
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center" href={{ route('index') }}><i data-feather="server"></i><span
                            class="menu-title text-truncate" data-i18n="Mynetwork">Benim Ağım</span></a>
                    <ul class="menu-content">
                        <li class="{{ Route::is('virtualmachines') ? 'active' : '' }}">
                            <a class="d-flex align-items-center" href={{ route('virtualmachines') }}><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Virtualpcs">Sanal Bilgisayarlarım</span></a>
                        </li>
                        <li class="{{ Route::is('filehubs') ? 'active' : '' }}">
                            <a class="d-flex align-items-center" href={{ route('filehubs') }}><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Filehubs">FileHubs</span></a>
                        </li>
                        <li class="{{ Route::is('department') ? 'active' : '' }}">
                            <a class="d-flex align-items-center" href={{ route('department') }}><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Settings">Departman</span></a>
                        </li>
                        <li class="{{ Route::is('domain') ? 'active' : '' }}">
                            <a class="d-flex align-items-center nav-link" href={{ route('domain') }}><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Settings">Domain
                                </span></a>
                        </li>
                        <li class="{{ Route::is('firewall') ? 'active' : '' }}">
                            <a class="d-flex align-items-center" href={{ route('firewall') }}><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Firewall">Güvenlik Duvarı</span></a>
                        </li>
                        <li class="{{ Route::is('backup') ? 'active' : '' }}">
                            <a class="d-flex align-items-center" href={{ route('backup') }}><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Backups">Yedekleme</span></a>
                        </li>
                        <li class="{{ Route::is('settings') ? 'active' : '' }}">
                            <a class="d-flex align-items-center" href={{ route('settings') }}><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Settings">Ayarlar</span></a>
                        </li>

                        <li>
                            <hr class="divider bg-primary" />
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ Route::is('filemanager') ? 'active' : '' }}">
                    <a class="d-flex align-items-center" href={{ route('filemanager') }}><i
                            data-feather="file"></i><span class="menu-title text-truncate" data-i18n="Filemanager">Dosya
                            Yöneticisi</span></a>
                </li>
                <li class="nav-item {{ Route::is('download') ? 'active' : '' }}">
                    <a class="d-flex align-items-center" href={{ route('download') }}><i
                            data-feather="download"></i><span class="menu-title text-truncate"
                            data-i18n="Filemanager">İndirme Merkezi</span></a>
                </li>
                <li class="nav-item {{ Route::is('roles') ? 'active' : '' }}">
                    <a class="d-flex align-items-center" href={{ route('roles') }}><i data-feather="users"></i><span
                            class="menu-title text-truncate" data-i18n="Filemanager">Kullanıcı Rolleri</span></a>
                </li>
                <li class="nav-item {{ Route::is('log') ? 'active' : '' }}">
                    <a class="d-flex align-items-center" href={{ route('log') }}><i
                            data-feather="file-text"></i><span class="menu-title text-truncate"
                            data-i18n="Filemanager">Log</span></a>
                </li>
                <li class="nav-item {{ Route::is('notification') ? 'active' : '' }}">
                    <a class="d-flex align-items-center" href={{ route('notification') }}><i
                            data-feather="bell"></i><span class="menu-title text-truncate"
                            data-i18n="Filemanager">Bildirim Merkezi</span></a>
                </li>
                <li class="nav-item {{ Route::is('knowledgebase') ? 'active' : '' }}">
                    <a class="d-flex align-items-center" href={{ route('knowledgebase') }}><i
                            data-feather="book-open"></i><span class="menu-title text-truncate"
                            data-i18n="Filemanager">Bilgi Sayfası</span></a>
                </li>
                <li class="nav-item {{ Route::is('faq') ? 'active' : '' }}">
                    <a class="d-flex align-items-center" href={{ route('faq') }}><i
                            data-feather="help-circle"></i><span class="menu-title text-truncate"
                            data-i18n="Filemanager">Sık Sorulan Sorular</span></a>
                </li>
                <li class="nav-item {{ Route::is('ticket') ? 'active' : '' }} mb-5">
                    <a class="d-flex align-items-center" href={{ route('ticket') }}><i data-feather="tool"></i><span
                            class="menu-title text-truncate" data-i18n="Filemanager">Hata Bildir</span></a>
                </li>

            </ul>

            <div class="d-flex justify-content-between" style="overflow: hidden;
            position: fixed;
            bottom: 0;
            width: 100%;">


                        <a class="align-items-center ms-1 text-white" style="width: 50px;height: 40px;" href={{ route('inbox') }}> <i data-feather="mail" style="height: 23px;width: 23px"></i></a>


                    <a class=" align-items-center text-white" style="width: 50px;height: 40px;" href={{ route('account-settings-account') }}> <i
                        data-feather="settings" style="height: 23px;width: 23px"></i></a>


                    <form method="POST" action="/logout" id="form_action">
                        @csrf

                            <a style="width: 45px" class="me-1 text-white" href="javascript:{}" onclick="document.getElementById('form_action').submit();" ><i
                                class="me-50" data-feather="power" style="height:23px;width:23px"></i></a>


                    </form>

            </div>



        </div>
    </div>
    <!-- END: Main Menu-->
