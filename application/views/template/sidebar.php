<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
    <div class="search-wrap">
      <div class="container">
        <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
        <form action="#" method="post">
          <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
        </form>  
      </div>
    </div>
    <div class="container">
      <ul class="nav navbar-nav menu_nav justify-content-end">
          <li class="nav-item active"><a class="nav-link" href="#" onclick="loadMenu('<?= base_url('user/user/home');?>')">Home</a></li> 
          <li class="nav-item"><a class="nav-link" href="#" onclick="loadMenu('<?= base_url('user/makanan');?>')">Menu</a>
          <!-- <li class="nav-item"><a class="nav-link" href="#" onclick="loadMenu('user/shop')">Shop</a> -->
          <li class="nav-item"><a class="nav-link" href="#" onclick="loadMenu('<?= base_url('user/user/profile');?>')">Profil</a></li>
          <li class="nav-item icon"><a href="#" class="nav-link icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a></li>
          <li class="nav-item icon">
              <a href="#" onclick="loadMenu('<?= base_url('user/user/shop');?>')" class="nav-link icons-btn d-inline-block bag">
                <span class="icon-shopping-bag"></span>
                <!-- <span class="number">2</span> -->
              </a>
          </li>
          <li class="nav-item"><a class="nav-link" href="<?= base_url('user/auth/logout');?>">Logout</a></li>
          <li class="nav-item icon"><a href="#" class="nav-link site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a></li>
          </div>
      </ul>
    </div>
</div> 