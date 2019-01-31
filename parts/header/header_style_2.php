<header id="header" class="header">
	
            <!-- Top Bar -->
            <?php require_once 'topbar_style.php'; ?>

            <!-- Logo Section -->
            <div class="main-header">
                <div class="row">
                    <div class="col">
                        <div class="logo text-center">
                            <!-- The Logo Here -->
                            <img src="<?php echo gtnw_options::get_the_option('gtnw_logo'); ?>" alt="logo" class="img-fluid">
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

            <!-- Google Adsense -->
            <div class="header-ads text-center">
                <!-- The Adsense Code here -->
                <img src="" alt="" >
            </div>

        </header>
