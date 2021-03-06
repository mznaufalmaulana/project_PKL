    <div class="am-header">
      <!-- Judul Website -->
      <div class="am-header-left">
        <a id="naviconLeft" href="" class="am-navicon d-none d-lg-flex"><i class="icon ion-navicon-round"></i></a>
        <a id="naviconLeftMobile" href="" class="am-navicon d-lg-none"><i class="icon ion-navicon-round"></i></a>
        <a href="<?php echo base_url('c_dashboard'); ?>" class="am-logo">
          <img src="<?php echo BASE_THEME.'/img/logo_atas.png' ?>" class="wd-100">
        </a>
      </div><!-- am-header-left -->

      <!-- Bagian Profil -->
      <div class="am-header-right">
        <?php 
          $isLogin = $this->session->userdata('intIDPartner');
          if (!isset($isLogin)) 
            { ?>
              <a href="<?php echo base_url('c_login') ?>" class="btn btn-orange"> Masuk</a>
        <?php 
            } else { ?>

        <div class="dropdown dropdown-profile">
          <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
            <img src="<?php echo BASE_THEME.'/img/user_default.png' ?>" class="wd-32 rounded-circle" alt="">
            <span class="logged-name">
              <span class="hidden-xs-down">
                <?php echo $this->session->userdata('user_username'); ?>
              </span> 
              <i class="fa fa-angle-down mg-l-3"></i>
            </span>
          </a>
          <div class="dropdown-menu wd-200">
            <ul class="list-unstyled user-profile-nav">
              <li><a href="<?php echo base_url('c_profil').'?idUser='.$isLogin; ?>"><i class="icon ion-ios-person-outline"></i> Lihat Profil</a></li>
              <li><a href="<?php echo base_url('c_login/logout') ?>"><i class="icon ion-power"></i> Keluar</a></li>
            </ul>
          </div><!-- dropdown-menu -->
        </div><!-- dropdown -->

        <?php } ?>
      </div><!-- am-header-right -->
    </div><!-- am-header -->

    <div class="am-sideleft">
      <ul class="nav am-sideleft-tab">
        <li class="nav-item">
          <a href="#mainMenu" class="nav-link active"><i class="icon ion-ios-home-outline tx-24"></i></a>
        </li>
        <li class="nav-item">
          <a href="#mainMenu" class="nav-link"></a>
        </li>
        <li class="nav-item">
          <a href="#mainMenu" class="nav-link"></a>
        </li>
        <li class="nav-item">
          <a href="#mainMenu" class="nav-link"></a>
        </li>
      </ul>

      <div class="tab-content">
        <div id="mainMenu" class="tab-pane active">
          <ul class="nav am-sideleft-menu">
            <li class="nav-item">
              <a href="<?php echo base_url('c_dashboard'); ?>" class="nav-link">
                <i class="icon ion-ios-home-outline"></i>
                <span>Beranda</span>
              </a>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="<?php echo base_url('c_antrian'); ?>" class="nav-link">
                <i class="icon ion-ios-list-outline"></i>
                <span>Antrian</span>
              </a>
            </li><!-- nav-item -->
          </ul>
        </div><!-- #mainMenu -->
        
      </div><!-- tab-content -->
    </div><!-- am-sideleft -->

    <!-- <div class="am-pagetitle">
      <h5 class="am-title"></h5>
      <form id="searchBar" class="search-bar" action="index.html">
        <div class="form-control-wrapper">
          <input type="search" class="form-control bd-0" placeholder="Search...">
        </div>
        <button id="searchBtn" class="btn btn-orange"><i class="fa fa-search"></i></button>
      </form>
    </div> -->