<div  id="header-search-container">
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
            
            <div class="col-2  hamburger-col pt-0 text-left p-0">
                <div class="nav-box pt-1">

                    <div class="header-spacer p-1 d-none d-md-block"></div>

                    <button onclick="openNav();"><i class="fa-solid fa-bars fa-xl header-icon hamburger"></i></button> 

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
            
            <div class="logo-col col-8">
                <div class="logo1-container">
                    <a class="home-logo-link" href="<?php echo get_home_url(); ?>"><div alt="Weare Academy Logo" class="logo1 img-fluid"><div id="logo1-text"><div class="logo-img"></div><h1 class="mb-2 h3" id="logo-heading">Weare Academy</h1><h2 class="h4" id="logo-heading">CofE First School</h2></div></div></a>
                </div>
            </div> 

       

            

            <div class="social-col col-2 pt-2 p-0">
                <a href="https://twitter.com/weare_school" target="_blank" class="social-links"><i class="fa-brands fa-twitter header-icon d-none d-md-block"></i></a>
                <a href="https://en-gb.facebook.com/weareacademyschool/" target="_blank" class="social-links"><i class="fa-brands fa-facebook-f header-icon d-none d-md-block"></i></a>
                <button onclick="openSearch()" class="social-links"><i class="fa-solid fa-magnifying-glass header-icon pe-2"></i></button>
                <div class="header-spacer p-1 d-none d-md-block"></div>
                
                
                
            </div>
        </div>