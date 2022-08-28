    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto">
                    <a class="navbar-brand" href=<?php echo e(route('index')); ?>><span class="brand-logo"></span>

                        <h2 class="brand-text">thincloud</h2>
                    </a>
                </li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="text-center">
                <span class="avatar"><img class="round" src="../../../app-assets/images/portrait/small/avatar-s-11.jpg"
                        alt="avatar" height="40" width="40" />
                    <span class="avatar-status-online"></span></span>

                <li class="nav-item dropdown dropdown-user">
                    <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="user-name fw-bolder text-white opacity-75">John Doe</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                        <a class="dropdown-item" href="inbox.html"><i class="me-50" data-feather="mail"></i> Gelen
                            Kutusu</a><a class="dropdown-item" href=<?php echo e(route('account-settings-account')); ?>><i
                                class="me-50" data-feather="settings"></i> Hesap Ayarları</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/login"><i class="me-50" data-feather="power"></i> Çıkış
                            Yap</a>
                    </div>
                </li>
            </ul>
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item">
                    <a class="d-flex align-items-center" href=""><i data-feather="cloud"></i><span
                            class="menu-title text-truncate" data-i18n="Mythincloud">ThinCloud' um</span></a>
                    <ul class="menu-content">
                        <li class="<?php echo e(Route::is('myplans') ? 'active' : ''); ?>">
                            <a class="d-flex align-items-center" href=<?php echo e(route('myplans')); ?>><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Myplan">Planlarım</span></a>
                        </li>
                        <li class="<?php echo e(Route::is('billing') ? 'active' : ''); ?>">
                            <a class="d-flex align-items-center" href=<?php echo e(route('billing')); ?>><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Billing">Fatura</span></a>
                        </li>
                        <li>
                            <hr class="divider bg-primary" />
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center" href=<?php echo e(route('index')); ?>><i data-feather="server"></i><span
                            class="menu-title text-truncate" data-i18n="Mynetwork">Benim Ağım</span></a>
                    <ul class="menu-content">
                        <li class="<?php echo e(Route::is('virtualmachines') ? 'active' : ''); ?>">
                            <a class="d-flex align-items-center" href=<?php echo e(route('virtualmachines')); ?>><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Virtualpcs">Sanal Bilgisayarlarım</span></a>
                        </li>
                        <li class="<?php echo e(Route::is('filehubs') ? 'active' : ''); ?>">
                            <a class="d-flex align-items-center" href=<?php echo e(route('filehubs')); ?>><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Filehubs">FileHubs</span></a>
                        </li>
                        <li class="<?php echo e(Route::is('departmant') ? 'active' : ''); ?>">
                            <a class="d-flex align-items-center" href=<?php echo e(route('departmant')); ?>><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Settings">Departman</span></a>
                        </li>
                        <li class="<?php echo e(Route::is('domain') ? 'active' : ''); ?>">
                            <a class="d-flex align-items-center nav-link" href=<?php echo e(route('domain')); ?>><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Settings">Domain
                                </span></a>
                        </li>
                        <li class="<?php echo e(Route::is('firewall') ? 'active' : ''); ?>">
                            <a class="d-flex align-items-center" href=<?php echo e(route('firewall')); ?>><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Firewall">Güvenlik Duvarı</span></a>
                        </li>
                        <li class="<?php echo e(Route::is('backup') ? 'active' : ''); ?>">
                            <a class="d-flex align-items-center" href=<?php echo e(route('backup')); ?>><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Backups">Yedekleme</span></a>
                        </li>
                        <li class="<?php echo e(Route::is('settings') ? 'active' : ''); ?>">
                            <a class="d-flex align-items-center" href=<?php echo e(route('settings')); ?>><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Settings">Ayarlar</span></a>
                        </li>

                        <li>
                            <hr class="divider bg-primary" />
                        </li>
                    </ul>
                </li>
                <li class="nav-item <?php echo e(Route::is('filemanager') ? 'active' : ''); ?>">
                    <a class="d-flex align-items-center" href=<?php echo e(route('filemanager')); ?>><i
                            data-feather="file"></i><span class="menu-title text-truncate"
                            data-i18n="Filemanager">Dosya Yöneticisi</span></a>
                </li>
                <li class="nav-item <?php echo e(Route::is('download') ? 'active' : ''); ?>">
                    <a class="d-flex align-items-center" href=<?php echo e(route('download')); ?>><i
                            data-feather="download"></i><span class="menu-title text-truncate"
                            data-i18n="Filemanager">İndirme Merkezi</span></a>
                </li>
                <li class="nav-item <?php echo e(Route::is('roles') ? 'active' : ''); ?>">
                    <a class="d-flex align-items-center" href=<?php echo e(route('roles')); ?>><i data-feather="users"></i><span
                            class="menu-title text-truncate" data-i18n="Filemanager">Kullanıcı Rolleri</span></a>
                </li>
                <li class="nav-item <?php echo e(Route::is('log') ? 'active' : ''); ?>">
                    <a class="d-flex align-items-center" href=<?php echo e(route('log')); ?>><i
                            data-feather="file-text"></i><span class="menu-title text-truncate"
                            data-i18n="Filemanager">Log</span></a>
                </li>
                <li class="nav-item <?php echo e(Route::is('notification') ? 'active' : ''); ?>">
                    <a class="d-flex align-items-center" href=<?php echo e(route('notification')); ?>><i
                            data-feather="bell"></i><span class="menu-title text-truncate"
                            data-i18n="Filemanager">Bildirim Merkezi</span></a>
                </li>
                <li class="nav-item <?php echo e(Route::is('knowledgebase') ? 'active' : ''); ?>">
                    <a class="d-flex align-items-center" href=<?php echo e(route('knowledgebase')); ?>><i
                            data-feather="book-open"></i><span class="menu-title text-truncate"
                            data-i18n="Filemanager">Bilgi Sayfası</span></a>
                </li>
                <li class="nav-item <?php echo e(Route::is('faq') ? 'active' : ''); ?>">
                    <a class="d-flex align-items-center" href=<?php echo e(route('faq')); ?>><i
                            data-feather="help-circle"></i><span class="menu-title text-truncate"
                            data-i18n="Filemanager">Sık Sorulan Sorular</span></a>
                </li>
                <li class="nav-item <?php echo e(Route::is('ticket') ? 'active' : ''); ?>">
                    <a class="d-flex align-items-center" href=<?php echo e(route('ticket')); ?>><i data-feather="tool"></i><span
                            class="menu-title text-truncate" data-i18n="Filemanager">Hata Bildir</span></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->
<?php /**PATH C:\xampp\htdocs\thincloud\resources\views/sabit/menu.blade.php ENDPATH**/ ?>