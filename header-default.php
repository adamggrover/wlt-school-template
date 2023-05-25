
     <header id="header" class="header2 row p-2 m-0 g-0">
        <div id="header-search-container">
            <div class="container d-flex align-items-center search-input-box">
                <div class="search-left">
                    

                    <?php get_search_form(); ?>
                    
                    


                </div>
                <div class="search-right">
                    <button onclick="closeSearch()">
                        <i class="fa-solid fa-xmark fa-lg mb-3"></i>                        
                    </button>
                </div>
            </div>
        </div>




        <div class="header-container row g-0 p-0" id="header-container">
            <div class="col-5 hamburger-col pt-0 p-0 text-left">
                <div class="nav-box pt-1">

                    <div class="header-spacer p-1 d-none d-md-block"></div>

                    <button id="navbtn" onclick="openNav();"><i class="fa-solid fa-bars fa-xl header-icon hamburger"></i></button> 

                    <div class="header-spacer p-1 d-none d-md-block"></div>

                    <div class="dropdown">
                        <button onclick="quickLinksMenuButton()" class="dropbtn d-none d-md-block">QUICK LINKS<span class="quick-links-spacer"></span><i class="fa-solid fa-angle-down quick-links-arrow"></i></button>
                        <button onclick="quickLinksMenuButton()" class="dropbtn d-md-none"><i class="fa-solid fa-angle-down quick-links-arrow"></i></button>
                        <div id="myDropdown" class="dropdown-content">
                            <?php wp_nav_menu( array( 'theme_location' => 'quick-links-header' ) ); ?>
                        </div>
                    </div>
                </div>          
            </div>
            
            <div class="logo-col col-2">
                <div class="logo-container">
                    <a class="home-logo-link" href="<?php echo get_home_url(); ?>">
                        <div alt="Logo" class="logo-content logo-default-page img-fluid">
                            <img class="logo-img logo-img-scroll" src="<?php $custom_logo_id = get_theme_mod( 'custom_logo' );
                                $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                    echo $image[0]; ?>"></img>
                            
                        </div>
                    </a>
                </div>
            </div> 

  
                    
            <div class="social-col col-5 pt-2 p-0">

            <?php include 'header-social-links.php';?>

            </div>


        </div>
    </header>
