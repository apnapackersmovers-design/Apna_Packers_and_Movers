<header id="this-is-top">
<style>
header#this-is-top {
    position: absolute !important;
    top: 0 !important;
    left: 0 !important;
    right: 0 !important;
    width: 100% !important;
    z-index: 1000 !important;
    background: linear-gradient(180deg, rgba(15, 23, 42, 0.96) 0%, rgba(15, 23, 42, 0.78) 70%, rgba(15, 23, 42, 0.25) 100%) !important;
    border-top: none !important;
    border-bottom: 1px solid rgba(255, 255, 255, 0.12) !important;
    backdrop-filter: blur(10px) !important;
    -webkit-backdrop-filter: blur(10px) !important;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3) !important;
    margin: 0 !important;
    padding: 0 !important;
}
header .container-fluid { max-width: 1250px !important; margin: 0 auto !important; padding: 0 15px !important; }
.row.header { display: flex !important; align-items: center !important; justify-content: space-between !important; min-height: 72px !important; margin: 0 !important; padding: 0 !important; background: transparent !important; width: 100% !important; }
.topmenu.row, .topmenu, .header-padding, #main-menu-bg, .main-menu:before, .main-menu:after { display: none !important; }
#logo { background: none !important; background-image: none !important; width: auto !important; height: auto !important; max-height: none !important; margin: 0 !important; padding: 0 !important; display: inline-flex !important; align-items: center !important; text-decoration: none !important; }
.header-logo-col { padding: 6px 0 !important; display: flex !important; align-items: center !important; flex-shrink: 0 !important; width: auto !important; }
.logo-badge { background: #ffffff !important; padding: 5px 12px !important; border-radius: 8px !important; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.28) !important; display: inline-flex !important; align-items: center !important; gap: 8px !important; border: 1px solid rgba(255, 255, 255, 0.95) !important; text-decoration: none !important; transition: transform 0.2s, box-shadow 0.2s !important; }
.logo-badge:hover { transform: translateY(-1px) !important; box-shadow: 0 6px 20px rgba(0, 0, 0, 0.38) !important; }
.logo-badge img, #logo img { height: 44px !important; max-height: 44px !important; width: auto !important; object-fit: contain !important; display: block !important; margin: 0 !important; }
.logo-brand-text { display: flex !important; flex-direction: column !important; justify-content: center !important; line-height: 1.1 !important; text-align: left !important; }
.brand-title { font-family: 'Montserrat', sans-serif !important; font-size: 15px !important; font-weight: 800 !important; color: #A91B1B !important; letter-spacing: 0.5px !important; display: block !important; margin: 0 !important; line-height: 1 !important; }
.brand-sub { font-family: 'Montserrat', sans-serif !important; font-size: 8px !important; font-weight: 700 !important; color: #1e293b !important; letter-spacing: 0.8px !important; text-transform: uppercase !important; display: block !important; margin-top: 3px !important; line-height: 1 !important; }
.header-right-actions { display: none; align-items: center !important; gap: 8px !important; margin-left: auto !important; }
.mobile-call-pill { display: inline-flex !important; align-items: center !important; gap: 5px !important; background: #25d366 !important; color: #ffffff !important; padding: 7px 13px !important; border-radius: 50px !important; font-family: 'Montserrat', sans-serif !important; font-size: 12px !important; font-weight: 700 !important; text-transform: uppercase !important; letter-spacing: 0.3px !important; text-decoration: none !important; box-shadow: 0 3px 10px rgba(37, 211, 102, 0.35) !important; }
.mobile-call-pill i { font-size: 13px !important; }
.header-nav-col { padding: 0 !important; display: flex !important; align-items: center !important; justify-content: flex-end !important; width: auto !important; flex-grow: 1 !important; }
@media screen and (min-width: 992px) {
    .header-right-actions { display: none !important; }
    #menu-open { display: none !important; }
    .main-menu { display: flex !important; align-items: center !important; height: 72px !important; margin: 0 !important; padding: 0 !important; background: transparent !important; position: relative !important; }
    .main-menu .navbar-main { margin: 0 !important; display: flex !important; align-items: center !important; height: 72px !important; }
    .main-menu .navbar-main > li { height: 72px !important; display: flex !important; align-items: center !important; padding: 0 !important; position: relative !important; }
    .main-menu .navbar-main > li > a { color: #ffffff !important; font-family: 'Montserrat', sans-serif !important; font-size: 13px !important; font-weight: 700 !important; text-transform: uppercase !important; padding: 8px 14px !important; margin: 0 2px !important; border-radius: 6px !important; border: none !important; text-decoration: none !important; letter-spacing: 0.5px !important; transition: all 0.25s ease !important; display: inline-flex !important; align-items: center !important; height: 38px !important; line-height: 1 !important; text-shadow: 0 1px 3px rgba(0, 0, 0, 0.4) !important; }
    .main-menu .navbar-main > li > a:hover, .main-menu .navbar-main > li.open > a, .main-menu .navbar-main > li.active > a { background: #A91B1B !important; color: #ffffff !important; box-shadow: 0 3px 10px rgba(169, 27, 27, 0.4) !important; }
    .main-menu .dropdown-menu { top: 65px !important; left: 0 !important; background: rgba(20, 20, 20, 0.96) !important; border: 1px solid rgba(255, 255, 255, 0.15) !important; border-top: 3px solid #A91B1B !important; border-radius: 6px !important; box-shadow: 0 8px 25px rgba(0, 0, 0, 0.5) !important; padding: 8px 0 !important; min-width: 240px !important; }
    .main-menu .dropdown:hover .dropdown-menu, .main-menu .dropdown.open .dropdown-menu { display: block !important; opacity: 1 !important; height: auto !important; }
    .main-menu .dropdown-menu > li > a { color: #e2e8f0 !important; font-family: 'Roboto', sans-serif !important; font-size: 13px !important; font-weight: 500 !important; padding: 10px 20px !important; display: block !important; border: none !important; text-decoration: none !important; }
    .main-menu .dropdown-menu > li > a:hover { background: #A91B1B !important; color: #ffffff !important; padding-left: 25px !important; }
    .header-cta-btn { margin-left: 12px !important; background: #A91B1B !important; color: #ffffff !important; font-family: 'Montserrat', sans-serif !important; font-size: 12px !important; font-weight: 700 !important; padding: 9px 18px !important; border-radius: 50px !important; text-transform: uppercase !important; text-decoration: none !important; letter-spacing: 0.5px !important; box-shadow: 0 4px 12px rgba(169, 27, 27, 0.45) !important; display: inline-flex !important; align-items: center !important; white-space: nowrap !important; }
    .header-cta-btn:hover { background: #c92222 !important; color: #ffffff !important; }
    .header-cta-btn i { margin-right: 6px !important; }
}
@media screen and (max-width: 991px) {
    .row.header { min-height: 60px !important; padding: 6px 12px !important; justify-content: space-between !important; }
    .header-logo-col { padding: 0 !important; }
    .logo-badge { padding: 4px 8px !important; gap: 6px !important; }
    .logo-badge img, #logo img { height: 34px !important; max-height: 34px !important; }
    .brand-title { font-size: 13px !important; }
    .brand-sub { font-size: 7px !important; letter-spacing: 0.5px !important; }
    .header-right-actions { display: flex !important; align-items: center !important; gap: 8px !important; margin-left: auto !important; }
    #menu-open { display: inline-flex !important; align-items: center !important; justify-content: center !important; background: #A91B1B !important; color: #ffffff !important; font-size: 18px !important; width: 38px !important; height: 38px !important; border-radius: 8px !important; margin: 0 !important; text-decoration: none !important; box-shadow: 0 3px 10px rgba(0, 0, 0, 0.3) !important; }
    .header-nav-col { position: static !important; width: 0 !important; padding: 0 !important; margin: 0 !important; flex-grow: 0 !important; }
    .header-cta-btn { display: none !important; }
    .main-menu { display: none; position: fixed !important; top: 0 !important; left: 0 !important; bottom: 0 !important; right: 0 !important; z-index: 10000 !important; overflow-y: auto !important; background: #0f172a !important; padding: 70px 20px 30px 20px !important; }
    .main-menu .navbar-main { display: block !important; padding: 0 !important; }
    .main-menu .navbar-main > li { display: block !important; height: auto !important; padding: 0 !important; }
    .main-menu .navbar-main > li > a { color: #ffffff !important; border-bottom: 1px solid rgba(255, 255, 255, 0.1) !important; padding: 14px 10px !important; height: auto !important; font-size: 15px !important; font-weight: 600 !important; display: block !important; }
    #menu-close { display: none; position: fixed !important; top: 18px !important; right: 20px !important; z-index: 10001 !important; color: #ffffff !important; font-size: 26px !important; width: 40px !important; height: 40px !important; line-height: 40px !important; text-align: center !important; background: rgba(255, 255, 255, 0.15) !important; border-radius: 50% !important; text-decoration: none !important; }
    #menu-close.show { display: block !important; }
    #owl-main-slider .item { min-height: 380px !important; height: auto !important; }
    .slider-content { margin-top: 85px !important; padding: 0 10px !important; }
    .slider-content h3 { font-size: 20px !important; line-height: 1.3 !important; text-shadow: 0 2px 10px rgba(0, 0, 0, 0.8) !important; }
    .slider-content p { font-size: 13px !important; line-height: 1.4 !important; margin-top: 8px !important; text-shadow: 0 2px 8px rgba(0, 0, 0, 0.8) !important; }
    .slider-content .prev, .slider-content .next { display: none !important; }
}
.bg-image.page-title, .page-header { padding-top: 110px !important; padding-bottom: 40px !important; }
</style>
    <div class="container-fluid"> 
        <div class="row header">
            <div class="header-logo-col">
                <a title="Packers and movers in Indore" href="https://www.apnapackersmovers.com" id="logo" style="background:none!important;">
                    <div class="logo-badge">
                        <img src="https://www.apnapackersmovers.com/img/latest_logo.jpg" alt="Apna Packers and Movers Indore" width="44" height="44" style="height:44px; width:auto; aspect-ratio:200/175;">
                        <div class="logo-brand-text">
                            <span class="brand-title">APNA</span>
                            <span class="brand-sub">PACKERS &amp; MOVERS</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="header-right-actions">
                <a class="mobile-call-pill" href="tel:+919806470899" aria-label="Call +91 9806470899">
                    <i class="fa fa-phone"></i> <span>Call</span>
                </a>
                <a id="menu-open" href="#" aria-label="Open Navigation Menu"><i class="fa fa-bars"></i></a> 
            </div>
            <div class="header-nav-col">
                <nav class="main-menu navbar-main-slide">
                    <ul class="nav navbar-nav navbar-main">
                        <li class="dropdown"><a href="https://www.apnapackersmovers.com">HOME</a></li>
                        <li class="dropdown"><a href="https://www.apnapackersmovers.com/packers-and-movers-in-indore-about.php">About Us</a></li>
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle border-hover-color1" href="#">Services<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="https://www.apnapackersmovers.com/packers-and-movers-in-indore-car-parking.php">Car Moving Services</a></li>
                                <li><a href="https://www.apnapackersmovers.com/packers-and-movers-in-indore-parking.php">Packing & Moving</a></li>
                                <li><a href="https://www.apnapackersmovers.com/packers-and-movers-in-indore-insurence.php">Insurance Service</a></li>
                                <li><a href="https://www.apnapackersmovers.com/packers-and-movers-in-indore-warehouse.php">Warehouse Service</a></li>
                                <li><a href="https://www.apnapackersmovers.com/packers-and-movers-in-indore-relocation.php">Relocation Service</a></li>
                                <li><a href="https://www.apnapackersmovers.com/packers-and-movers-in-indore-loading.php">Loading Unloading Services</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="https://www.apnapackersmovers.com/packers-and-movers-in-indore-process.php">Process</a></li>
                        <li><a href="https://www.apnapackersmovers.com/packers-and-movers-in-indore-contact.php">Contact</a></li>
                        <li><a href="https://www.apnapackersmovers.com/packers-and-movers-in-indore-blogs.php">Blogs</a></li>
                        <li><a href="https://www.apnapackersmovers.com/case-study-packers-movers-indore.php">Case Studies</a></li>
                    </ul>
                </nav>
                <a class="header-cta-btn" href="tel:+919806470899">
                    <i class="fa fa-phone"></i> +91 9806470899
                </a>
                <a id="menu-close" href="#" aria-label="Close Navigation Menu"><i class="fa fa-times"></i></a>
            </div>
        </div>
    </div>
</header>
