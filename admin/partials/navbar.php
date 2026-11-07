<aside class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered bg-white  ">
    <div class="navbar-vertical-container">
      <div class="navbar-vertical-footer-offset">
        <!-- Logo -->

        <a class="navbar-brand" href="index.html" aria-label="Front">
          <img class="navbar-brand-logo" src="../assets/admin/svg/logos/logo.svg" alt="Logo" data-hs-theme-appearance="default">
          <img class="navbar-brand-logo" src="../assets/admin/svg/logos-light/logo.svg" alt="Logo" data-hs-theme-appearance="dark">
          <img class="navbar-brand-logo-mini" src="../assets/admin/svg/logos/logo-short.svg" alt="Logo" data-hs-theme-appearance="default">
          <img class="navbar-brand-logo-mini" src="../assets/admin/svg/logos-light/logo-short.svg" alt="Logo" data-hs-theme-appearance="dark">
        </a>

        <!-- End Logo -->

        <!-- Navbar Vertical Toggle -->
        <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler">
          <i class="bi-arrow-bar-left navbar-toggler-short-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Collapse"></i>
          <i class="bi-arrow-bar-right navbar-toggler-full-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Expand"></i>
        </button>

        <!-- End Navbar Vertical Toggle -->

        <!-- Content -->
        <div class="navbar-vertical-content">
          <div id="navbarVerticalMenu" class="nav nav-pills nav-vertical card-navbar-nav">
            <!-- Collapse -->
            <div class="nav-item">
              <a class="nav-link" href="index.php" role="button" aria-expanded="true" aria-controls="navbarVerticalMenuDashboards">
                <i class="bi-house-door nav-icon"></i>
                <span class="nav-link-title">Dashboard</span>
              </a> 
            </div>
            <!-- End Collapse -->

            <span class="dropdown-header mt-4">Разделы</span>
            <small class="bi-three-dots nav-subtitle-replacer"></small>
            <div id="navbarVerticalMenuPagesMenu">
              
              <!-- Классы -->
              <div class="nav-item">
                <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuPagesUsersMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesUsersMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesUsersMenu">
                  <i class="bi-people nav-icon"></i>
                  <span class="nav-link-title">Классы</span>
                </a>

                <div id="navbarVerticalMenuPagesUsersMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu">
                  <a class="nav-link " href="?page=addClass">Добавить</a>
                  <a class="nav-link " href="?page=classes">Список</a>
                </div>
              </div>

              <!-- Предметы -->
              <div class="nav-item">
                <a class="nav-link dropdown-toggle" href="#subjects" role="button" data-bs-toggle="collapse" data-bs-target="#subjects" aria-expanded="false" aria-controls="subjects">
                  <i class="bi-book nav-icon"></i>
                  <span class="nav-link-title">Предметы</span>
                </a>

                <div id="subjects" class="nav-collapse collapse " data-bs-parent="#subjects">
                  <a class="nav-link " href="?page=addSubject">Добавить</a>
                  <a class="nav-link " href="?page=subjects">Список</a>
                </div>
              </div>

              <!-- Студенты -->
              <div class="nav-item">
                <a class="nav-link dropdown-toggle" href="#students" role="button" data-bs-toggle="collapse" data-bs-target="#students" aria-expanded="false" aria-controls="students">
                  <i class="bi-person nav-icon"></i>
                  <span class="nav-link-title">Студенты</span>
                </a>

                <div id="students" class="nav-collapse collapse " data-bs-parent="#students">
                  <a class="nav-link " href="?page=addStudent">Добавить</a>
                  <a class="nav-link " href="?page=students">Список</a>
                </div>
              </div>

              <!-- Учителя -->
              <div class="nav-item">
                <a class="nav-link dropdown-toggle" href="#teachers" role="button" data-bs-toggle="collapse" data-bs-target="#teachers" aria-expanded="false" aria-controls="teachers">
                  <i class="bi-person-video3 nav-icon"></i>
                  <span class="nav-link-title">Учителя</span>
                </a>

                <div id="teachers" class="nav-collapse collapse " data-bs-parent="#teachers">
                  <a class="nav-link " href="?page=addTeacher">Добавить</a>
                  <a class="nav-link " href="?page=teachers">Список</a>
                </div>
              </div>

              <!-- Предметы учителей -->
              <div class="nav-item">
                <a class="nav-link" href="?page=teacher_subjects" role="button" aria-expanded="true" aria-controls="navbarVerticalMenuDashboards">
                  <i class="bi-book nav-icon"></i>
                  <span class="nav-link-title">Предметы учителей</span>
                </a> 
              </div>

              <!-- Школьная информация -->
              <div class="nav-item">
                <a class="nav-link dropdown-toggle" href="#school_info" role="button" data-bs-toggle="collapse" data-bs-target="#school_info" aria-expanded="false" aria-controls="school_info">
                  <i class="bi-info-circle nav-icon"></i>
                  <span class="nav-link-title">Школьная информация</span>
                </a>

                <div id="school_info" class="nav-collapse collapse " data-bs-parent="#school_info">
                  <a class="nav-link " href="?page=editSchoolInfo">Редактировать</a>
                  <a class="nav-link " href="?page=school_info">Показать</a>
                </div>
              </div>

            </div>
            <!-- End Collapse -->
 
          </div>

        </div>
        <!-- End Content -->

        <!-- Footer -->
        <div class="navbar-vertical-footer">
          <ul class="navbar-vertical-footer-list">
            <li class="navbar-vertical-footer-list-item">
              <!-- Style Switcher -->
              <div class="dropdown dropup">
                <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="selectThemeDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation="">

                </button>

                <div class="dropdown-menu navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="selectThemeDropdown">
                  <a class="dropdown-item" href="#" data-icon="bi-moon-stars" data-value="auto">
                    <i class="bi-moon-stars me-2"></i>
                    <span class="text-truncate" title="Auto (system default)">Auto (system default)</span>
                  </a>
                  <a class="dropdown-item" href="#" data-icon="bi-brightness-high" data-value="default">
                    <i class="bi-brightness-high me-2"></i>
                    <span class="text-truncate" title="Default (light mode)">Default (light mode)</span>
                  </a>
                  <a class="dropdown-item active" href="#" data-icon="bi-moon" data-value="dark">
                    <i class="bi-moon me-2"></i>
                    <span class="text-truncate" title="Dark">Dark</span>
                  </a>
                </div>
              </div>

              <!-- End Style Switcher -->
            </li>

            <li class="navbar-vertical-footer-list-item">
              <!-- Other Links -->
              <div class="dropdown dropup">
                <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="otherLinksDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation="">
                  <i class="bi-info-circle"></i>
                </button>

                <div class="dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="otherLinksDropdown">
                  <span class="dropdown-header">Help</span>
                  <a class="dropdown-item" href="#">
                    <i class="bi-journals dropdown-item-icon"></i>
                    <span class="text-truncate" title="Resources &amp; tutorials">Resources &amp; tutorials</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-command dropdown-item-icon"></i>
                    <span class="text-truncate" title="Keyboard shortcuts">Keyboard shortcuts</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-alt dropdown-item-icon"></i>
                    <span class="text-truncate" title="Connect other apps">Connect other apps</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-gift dropdown-item-icon"></i>
                    <span class="text-truncate" title="What's new?">What's new?</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <span class="dropdown-header">Contacts</span>
                  <a class="dropdown-item" href="#">
                    <i class="bi-chat-left-dots dropdown-item-icon"></i>
                    <span class="text-truncate" title="Contact support">Contact support</span>
                  </a>
                </div>
              </div>
              <!-- End Other Links -->
            </li>

            <li class="navbar-vertical-footer-list-item">
              <!-- Language -->
              <div class="dropdown dropup">
                <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="selectLanguageDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation="">
                  <img class="avatar avatar-xss avatar-circle" src="../assets/admin/vendor/flag-icon-css/flags/1x1/us.svg" alt="United States Flag">
                </button>

                <div class="dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="selectLanguageDropdown">
                  <span class="dropdown-header">Select language</span>
                  <a class="dropdown-item" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="../assets/admin/vendor/flag-icon-css/flags/1x1/us.svg" alt="Flag">
                    <span class="text-truncate" title="English">English (US)</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="../assets/admin/vendor/flag-icon-css/flags/1x1/gb.svg" alt="Flag">
                    <span class="text-truncate" title="English">English (UK)</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="../assets/admin/vendor/flag-icon-css/flags/1x1/de.svg" alt="Flag">
                    <span class="text-truncate" title="Deutsch">Deutsch</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="../assets/admin/vendor/flag-icon-css/flags/1x1/dk.svg" alt="Flag">
                    <span class="text-truncate" title="Dansk">Dansk</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="../assets/admin/vendor/flag-icon-css/flags/1x1/it.svg" alt="Flag">
                    <span class="text-truncate" title="Italiano">Italiano</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="../assets/admin/vendor/flag-icon-css/flags/1x1/cn.svg" alt="Flag">
                    <span class="text-truncate" title="中文 (繁體)">中文 (繁體)</span>
                  </a>
                </div>
              </div>

              <!-- End Language -->
            </li>
          </ul>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </aside>