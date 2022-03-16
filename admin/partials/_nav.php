    <header class="header" id="header">
        <div class="header__toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
        </div>
        
        <!-- <div class="header__img">
            <img src="assetsForSideBar/img/perfil.jpg" alt="">
        </div> -->
    </header>

    <div class="l-navbar" id="nav-bar" style="background-color:black" >
        <nav class="nav" >
            <div>
                <a href="index.php" class="nav__logo">
                    <i class='bx bx-layer nav__logo-icon' style ="color: #FFA45B;"></i>
                    <span class="nav__logo-name" style ="color: #FFA45B; ">Food Delivery</span>
                </a>

                <div class="nav__list">
                    <a href="index.php" class="nav__link nav-home">
                      <i class='bx bx-grid-alt nav__icon' style ="color: #FFA45B;"></i>
                      <span class="nav__name" style ="color: #FFA45B;">Home</span>
                    </a>
                    <a href="index.php?page=orderManage" class="nav-orderManage nav__link ">
                      <i class='bx bx-bar-chart-alt-2 nav__icon' style ="color: #FFA45B;"></i>
                      <span class="nav__name" style ="color: #FFA45B;">Orders</span>
                    </a>
                    <a href="index.php?page=categoryManage" class="nav__link nav-categoryManage">
                      <i class='bx bx-folder nav__icon'style ="color: #FFA45B;" ></i>
                      <span class="nav__name" style ="color: #FFA45B;">Category List</span>
                    </a>
                    <a href="index.php?page=menuManage" class="nav__link nav-menuManage">
                      <i class='bx bx-message-square-detail nav__icon'style ="color: #FFA45B;" ></i>
                      <span class="nav__name" style ="color: #FFA45B;">Menu</span>
                    </a>
                    <a href="index.php?page=contactManage" class="nav__link nav-contactManage">
                      <i class="fas fa-hands-helping" style ="color: #FFA45B;"></i>
                      <span class="nav__name" style ="color: #FFA45B;">contact Info</span>
                    </a>
                    <a href="index.php?page=userManage" class="nav__link nav-userManage">
                      <i class='bx bx-user nav__icon'style ="color: #FFA45B;" ></i>
                      <span class="nav__name" style ="color: #FFA45B;">Users</span>
                    </a>
                    <!-- <a href="index.php?page=siteManage" class="nav__link nav-siteManage">
                      <i class="fas fa-cogs"></i>
                      <span class="nav__name">Site Settings</span>
                    </a> -->
                    <a href="index.php?page=restaurant" class="nav__link nav-restaurant">
                      <i class="fas fa-cogs" style ="color: #FFA45B;"></i>
                      <span class="nav__name" style ="color: #FFA45B;">Restaurant Settings</span>
                    </a>
                </div>
            </div>
            <a href="partials/_logout.php" class="nav__link">
              <i class='bx bx-log-out nav__icon'style ="color: #FFA45B;" ></i>
              <span class="nav__name" style ="color: #FFA45B;">Log Out</span>
            </a>
        </nav>
    </div>  
    
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    <?php $page = isset($_GET['page']) ? $_GET['page'] :'home'; ?>
	  $('.nav-<?php echo $page; ?>').addClass('active')
</script>
   