<nav class="flex-row p-0 navbar fixed-top d-flex">
    <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
      <a class="navbar-brand brand-logo-mini" href="index.html"><img src="admin/assets/images/logo-mini.svg" alt="logo" /></a>
    </div>
    <div class="flex-grow navbar-menu-wrapper d-flex align-items-stretch">
      <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="mdi mdi-menu"></span>
      </button>
      <ul class="navbar-nav w-100">
        <li class="nav-item w-100">

        </li>
      </ul>
      <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item dropdown d-none d-lg-block">

          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
            <h6 class="p-3 mb-0">Projects</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-file-outline text-primary"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="mb-1 preview-subject ellipsis">Software Development</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-web text-info"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="mb-1 preview-subject ellipsis">UI Development</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-layers text-danger"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="mb-1 preview-subject ellipsis">Software Testing</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <p class="p-3 mb-0 text-center">See all projects</p>
          </div>
        </li>
        <li class="nav-item nav-settings d-none d-lg-block">
          <a class="nav-link" href="#">
            <i class="mdi mdi-view-grid"></i>
          </a>
        </li>
        <li class="nav-item dropdown border-left">
          <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="mdi mdi-email"></i>
            <span class="count bg-success"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
            <h6 class="p-3 mb-0">Messages</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <img src="admin/assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
              </div>
              <div class="preview-item-content">
                <p class="mb-1 preview-subject ellipsis">Nabil send you a message</p>
                <p class="mb-0 text-muted"> 1 Minutes ago </p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <img src="admin/assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
              </div>
              <div class="preview-item-content">
                <p class="mb-1 preview-subject ellipsis">Fahad send you a message</p>
                <p class="mb-0 text-muted"> 15 Minutes ago </p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <img src="admin/assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
              </div>
              <div class="preview-item-content">
                <p class="mb-1 preview-subject ellipsis">Profile picture updated</p>
                <p class="mb-0 text-muted"> 18 Minutes ago </p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <p class="p-3 mb-0 text-center">4 new messages</p>
          </div>
        </li>
        <li class="nav-item dropdown border-left">
          <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
            <i class="mdi mdi-bell"></i>
            <span class="count bg-danger"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
            <h6 class="p-3 mb-0">Notifications</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-calendar text-success"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="mb-1 preview-subject">Event today</p>
                <p class="mb-0 text-muted ellipsis"> Just a reminder that you have an event today </p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-settings text-danger"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="mb-1 preview-subject">Settings</p>
                <p class="mb-0 text-muted ellipsis"> Update dashboard </p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-link-variant text-warning"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="mb-1 preview-subject">Launch Admin</p>
                <p class="mb-0 text-muted ellipsis"> New admin wow! </p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <p class="p-3 mb-0 text-center">See all notifications</p>
          </div>
        </li>
        <x-app-layout>

            </x-app-layout>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-format-line-spacing"></span>
      </button>
    </div>
  </nav>
