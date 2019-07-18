<div class="horizontal-menu">
  <nav class="navbar top-navbar col-lg-12 col-12 p-0">
    <div class="nav-top flex-grow-1">
      <div class="container d-flex flex-row h-100 align-items-center">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html"><img src="<?php echo base_url('assets/admin/images/logo.svg') ?>" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?php echo base_url('assets/admin/images/logo-mini.svg') ?>" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end flex-grow-1">
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-bell-outline mx-0"></i>
                <span class="count"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <a class="dropdown-item">
                  <p class="mb-0 font-weight-normal float-left">You have 4 new notifications
                  </p>
                  <span class="badge badge-pill badge-warning float-right">View all</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-information mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-medium">Application Error</h6>
                    <p class="font-weight-light small-text">
                      Just now
                    </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="mdi mdi-settings mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-medium">Settings</h6>
                    <p class="font-weight-light small-text">
                      Private message
                    </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="mdi mdi-account-box mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-medium">New user registration</h6>
                    <p class="font-weight-light small-text">
                      2 days ago
                    </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-email-outline mx-0"></i>
                <span class="count"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <div class="dropdown-item">
                  <p class="mb-0 font-weight-normal float-left">You have 7 unread mails
                  </p>
                  <span class="badge badge-info badge-pill float-right">View all</span>
                </div>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="<?php echo base_url('assets/admin/images/faces/face4.jpg') ?>" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-medium">David Grey
                      <span class="float-right font-weight-light small-text">1 Minutes ago</span>
                    </h6>
                    <p class="font-weight-light small-text">
                      The meeting is cancelled
                    </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="<?php echo base_url('assets/admin/images/faces/face2.jpg') ?>" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-medium">Tim Cook
                      <span class="float-right font-weight-light small-text">15 Minutes ago</span>
                    </h6>
                    <p class="font-weight-light small-text">
                      New product launch
                    </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="<?php echo base_url('assets/admin/images/faces/face3.jpg') ?>" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-medium"> Johnson
                      <span class="float-right font-weight-light small-text">18 Minutes ago</span>
                    </h6>
                    <p class="font-weight-light small-text">
                      Upcoming board meeting
                    </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                <img src="<?php echo base_url('assets/admin/images/faces/face5.jpg') ?>" alt="profile" />
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item">
                  <i class="mdi mdi-settings text-primary"></i>
                  Settings
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo base_url('auth/logout') ?>">
                  <i class="mdi mdi-logout text-primary"></i>
                  Logout
                </a>
              </div>
            </li>
            <li class="nav-item nav-settings d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-apps"></i>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </div>
    </div>
  </nav>
  <nav class="bottom-navbar">
    <div class="container">
      <ul class="nav page-navigation" style="justify-content: left;">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('admin/') ?>">
            <i class="mdi mdi-view-dashboard-outline menu-icon"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('admin/report') ?>">
            <i class="mdi mdi-file-document-box-outline menu-icon"></i>
            <span class="menu-title">Report</span>
            <i class=""></i></a>
        </li>
        <li class="nav-item mega-menu">
          <a href="#" class="nav-link">
            <i class="mdi mdi-codepen menu-icon"></i>
            <span class="menu-title">Data Pages</span>
            <i class="menu-arrow"></i></a>
          <div class="submenu">
            <div class="col-group-wrapper row">
              <div class="col-group col-md-3">
                <p class="category-heading">User Pages</p>
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="">Tabel Customer</a></li>
                  <li class="nav-item"><a class="nav-link" href="">Tabel Contributor</a></li>
                  <li class="nav-item"><a class="nav-link" href="">User management</a></li>
                </ul>
              </div>
              <div class="col-group col-md-3">
                <p class="category-heading">Food Pages</p>
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="pages/samples/error-400.html">Tabel Makanan</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/samples/error-404.html">Insert Makanan</a></li>
                </ul>
              </div>
              <div class="col-group col-md-3">
                <p class="category-heading">Order Pages</p>
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="pages/samples/invoice.html">Tabel Order</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/samples/orders.html">Lihat Order</a></li>
                </ul>
              </div>
              <div class="col-group col-md-3">
                <p class="category-heading">Transaksi</p>
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="pages/samples/invoice.html">Tabel Transaksi</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/samples/orders.html">Lihat Transaksi</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </nav>
</div>