<header id="header" class="header">

            <!-- Top Bar -->
            <?php require_once 'topbar_style.php'; ?>

            <!-- Logo and Adsense Section -->
            <div class="main-header">
                <div class="row">
                        <div class="col-sm">
                            <div class="logo">
                                <!-- The Logo Here -->
                                <?php gtnw_components::gtnw_img_logo($style ,'img-fluid'); ?>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class=header-ads">
                                <!-- The Adsense Code here -->
                                <img src="" alt="" >
                                <div class="ads-div">
                                    <?php gtnw_components::get_component('ad')->render('gtnw_cmpnt_header_ad'); ?>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
                  
            <!-- Main Menu -->
            <div class="main-menu">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Main Menu Here -->
                        <?php require_once 'menu.php'; ?>
                    </div>
                        
                    <!-- Search Form -->
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </nav>
            </div>
        </header>