<header id="header" class="header">
            
            <!-- Top Bar -->
            <?php require_once 'topbar_style.php'; ?>

            <!-- Logo and Adsense Section -->
            <div class="main-header">
                <div class="row">
                        <!-- Logo -->
                        <div class="col-sm-3 col-md-3 col-lg-3">
                            <div class="logo">
                                <!-- The Logo Here -->
                                <img src="<?php echo gtnw_options::get_the_option('gtnw_logo'); ?>" alt="logo" class="img-fluid">
                            </div>
                        </div>
                        <!-- Main Menu -->
                        <?php require_once 'menu.php'; ?>
                        <!-- Search -->
                        <div class="col-sm-4 col-md-4 col-lg-4 right-search">
                                <!-- Search Form Here -->
                                <form class="form-inline my-2 my-lg-0">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                </form>
                        </div>
                </div>
            </div>

             <!-- Google Adsense -->
             <div class="header-ads text-center">
                <!-- The Adsense Code here -->
                <img src="img/728_90_ads.png" alt="ads" >
            </div>
                
        </header>
