<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <div class="header-container">
        <div class="header-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/discuss_logo.svg" alt="logo">
        </div>

        <div class="nav-bar-container">
            <div class="nav-bar-menu-grid">
                <div class="nav-bar-menu-item">
                    <a>
                        Solutions ⌵
                    </a>
                    <div class="drop-menu">
                        <div class="drop-menu-grid">
                            <a class="drop-item">
                                In-House Teams
                            </a>
                            <a class="drop-item">
                                Agencies
                            </a>
                            <a class="drop-item">
                                Pharma
                            </a>
                        </div>
                    </div>
                </div>
                <div class="nav-bar-menu-item">
                    <a>
                        Platform ⌵
                    </a>
                    <div class="drop-menu">
                        <div class="drop-menu-grid">
                            <a class="drop-item">
                                Live Research
                            </a>
                            <a class="drop-item">
                                Unmoderated Research
                            </a>
                            <a class="drop-item">
                                Insights
                            </a>
                            <a class="drop-item">
                                Mobile UX
                            </a>
                            <a class="drop-item">
                                Data & Security
                            </a>
                        </div>
                    </div>
                </div>
                <div class="nav-bar-menu-item">
                    <a>
                        Services ⌵
                    </a>
                    <div class="drop-menu">
                        <div class="drop-menu-grid">
                            <a class="drop-item">
                                Professional Services
                            </a>
                            <a class="drop-item">
                                Global Recruitment
                            </a>
                        </div>
                    </div>
                </div>
                <div class="nav-bar-menu-item">
                    <a>
                        Plans
                    </a>
                </div>
                <div class="nav-bar-menu-item">
                    <a>
                        Resources ⌵
                    </a>
                    <div class="drop-menu">
                        <div class="drop-menu-grid">
                            <a class="drop-item">
                                Customer Stories
                            </a>
                            <a class="drop-item">
                                Guides
                            </a>
                            <a class="drop-item">
                                Videos
                            </a>
                            <a class="drop-item">
                                Partner Ecosystem
                            </a>
                        </div>
                    </div>
                </div>
                <div class="nav-bar-menu-item">
                    <a>
                        Company ⌵
                    </a>
                    <div class="drop-menu">
                        <div class="drop-menu-grid">
                            <a class="drop-item">
                                About Us
                            </a>
                            <a class="drop-item">
                                Press
                            </a>
                            <a class="drop-item">
                                Careers
                            </a>
                            <a class="drop-item">
                                Blog
                            </a>
                            <a class="drop-item">
                                Contact
                            </a>
                        </div>
                    </div>
                </div>
                <div class="nav-bar-menu-item">
                    <a>
                        Login
                    </a>
                </div>
                <div class="nav-bar-menu-item nav-bar-search-icon">
                    <a>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/scope_icon.svg" alt="logo">
                    </a>
                </div>
            </div>
            <div class="nav-bar-button-grid">
                <a class="header-trial-button">
                    Free Trial
                </a>
                <a class="header-demo-button">
                    Book a Demo
                </a>
            </div>
        </div>

        <button class="phone-size-menu-open" onclick="phoneSizeNavBarOpen()">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu_round_icon.svg?a" alt="icon">
        </button>

        <div class="phone-size-nav-bar">
            <div class="phone-size-nav-bar-bg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mobile-menu-bg.webp" alt="menu-bg">
            </div>
            <div class="phone-size-nav-bar-top-grid">
                <a>
                    <div class="header-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/discuss_logo.svg" alt="logo">
                    </div>
                </a>
                <button class="phone-size-menu-close" onclick="phoneSizeNavBarClose()">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/close_round_icon.svg" alt="icon">
                </button>
            </div>

            <div class="phone-size-menu-grid">
                <div class="phone-size-menu-grid-item">
                    <a>Solutions</a>
                    <button class="solutions-down down-icon display" onclick="solutionsMenuOpen()">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/chevron_down_icon.svg" alt="down-icon">
                    </button>
                    <button class="solutions-up up-icon" onclick="solutionsMenuClose()">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/chevron_up_icon.svg" alt="up-icon">
                    </button>
                </div>
                <div class="solutions-menu phone-size-drop-menu">
                    <div class="drop-items">
                        <a>
                            In-House Teams
                        </a>
                    </div>
                    <div class="drop-items">
                        <a>
                            Agencies
                        </a>
                    </div>
                    <div class="drop-items">
                        <a>
                            Pharma
                        </a>
                    </div>
                </div>

                <div class="phone-size-menu-grid-item">
                    <a>Platform</a>
                    <button class="platform-down down-icon display" onclick="platformMenuOpen()">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/chevron_down_icon.svg" alt="down-icon">
                    </button>
                    <button class="platform-up up-icon" onclick="platformMenuClose()">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/chevron_up_icon.svg" alt="up-icon">
                    </button>
                </div>
                <div class="platform-menu phone-size-drop-menu">
                    <div class="drop-items">
                        <a>
                            Live Research
                        </a>
                    </div>
                    <div class="drop-items">
                        <a>
                            Unmoderated Research
                        </a>
                    </div>
                    <div class="drop-items">
                        <a>
                            Insights
                        </a>
                    </div>
                    <div class="drop-items">
                        <a>
                            Mobile UX
                        </a>
                    </div>
                    <div class="drop-items">
                        <a>
                            Data & Security
                        </a>
                    </div>
                </div>

                <div class="phone-size-menu-grid-item">
                    <a>Services</a>
                    <button class="services-down down-icon display" onclick="servicesMenuOpen()">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/chevron_down_icon.svg" alt="down-icon">
                    </button>
                    <button class="services-up up-icon" onclick="servicesMenuClose()">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/chevron_up_icon.svg" alt="up-icon">
                    </button>
                </div>
                <div class="services-menu phone-size-drop-menu">
                    <div class="drop-items">
                        <a>
                            Professional Services
                        </a>
                    </div>
                    <div class="drop-items">
                        <a>
                            Global Recruitment
                        </a>
                    </div>
                </div>

                <div class="phone-size-menu-grid-item">
                    <a>Plans</a>
                </div>

                <div class="phone-size-menu-grid-item">
                    <a>Resources</a>
                    <button class="resources-down down-icon display" onclick="resourcesMenuOpen()">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/chevron_down_icon.svg" alt="down-icon">
                    </button>
                    <button class="resources-up up-icon" onclick="resourcesMenuClose()">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/chevron_up_icon.svg" alt="up-icon">
                    </button>
                </div>
                <div class="resources-menu phone-size-drop-menu">
                    <div class="drop-items">
                        <a>
                            Customer Stories
                        </a>
                    </div>
                    <div class="drop-items">
                        <a>
                            Guides
                        </a>
                    </div>
                    <div class="drop-items">
                        <a>
                            Videos
                        </a>
                    </div>
                    <div class="drop-items">
                        <a>
                            Partner Ecosystem
                        </a>
                    </div>
                </div>

                <div class="phone-size-menu-grid-item">
                    <a>Company</a>
                    <button class="company-down down-icon display" onclick="companyMenuOpen()">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/chevron_down_icon.svg" alt="down-icon">
                    </button>
                    <button class="company-up up-icon" onclick="companyMenuClose()">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/chevron_up_icon.svg" alt="up-icon">
                    </button>
                </div>
                <div class="company-menu phone-size-drop-menu">
                    <div class="drop-items">
                        <a>
                            About Us
                        </a>
                    </div>
                    <div class="drop-items">
                        <a>
                            Press
                        </a>
                    </div>
                    <div class="drop-items">
                        <a>
                            Careers
                        </a>
                    </div>
                    <div class="drop-items">
                        <a>
                            Blog
                        </a>
                    </div>
                    <div class="drop-items">
                        <a>
                            Contact
                        </a>
                    </div>
                </div>

                <div class="phone-size-menu-grid-item">
                    <a>Login</a>
                </div>
            </div>

            <div class="phone-size-search-grid">
                <div class="phone-size-search-input">
                    <input type="text" >
                </div>
                <button class="phone-size-search-button">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/scope_icon.svg" alt="logo">
                </button>
            </div>

            <div class="nav-bar-button-grid">
                <a class="header-trial-button">
                    Free Trial
                </a>
                <a class="header-demo-button">
                    Book a Demo
                </a>
                <div class="header-link-grid">
                        <a>
                            <div class="header-link-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook_icon.svg" alt="icon">
                            </div>
                        </a>
                        <a>
                            <div class="header-link-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter_icon.svg" alt="icon">
                            </div>
                        </a>
                        <a>
                            <div class="header-link-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin_icon.svg" alt="icon">
                            </div>
                        </a>
                    </div>

            </div>


        </div>
    </div>



    <script>
        // Control phone size menu
        const phoneSizeNavBar = document.querySelector(".phone-size-nav-bar");

        const phoneSizeNavBarOpen = () => {
            phoneSizeNavBar.classList.add("menu-open");
            phoneSizeNavBar.classList.remove("menu-close");
        }

        const phoneSizeNavBarClose = () => {
            phoneSizeNavBar.classList.remove("menu-open");
            phoneSizeNavBar.classList.add("menu-close");
        }

        // solutions menu control
        const solutionsDown = document.querySelector(".solutions-down");
        const solutionsUp = document.querySelector(".solutions-up");
        const solutionsMenu = document.querySelector(".solutions-menu");

        const solutionsMenuOpen = () => {
            solutionsDown.classList.remove("display");
            solutionsUp.classList.add("display");
            solutionsMenu.classList.add("display");
        }

        const solutionsMenuClose = () => {
            solutionsUp.classList.remove("display");
            solutionsDown.classList.add("display");
            solutionsMenu.classList.remove("display");
        }

        // platform menu control
        const platformDown = document.querySelector(".platform-down");
        const platformUp = document.querySelector(".platform-up");
        const platformMenu = document.querySelector(".platform-menu");

        const platformMenuOpen = () => {
            platformDown.classList.remove("display");
            platformUp.classList.add("display");
            platformMenu.classList.add("display");
        }

        const platformMenuClose = () => {
            platformUp.classList.remove("display");
            platformDown.classList.add("display");
            platformMenu.classList.remove("display");
        }

        // services menu control
        const servicesDown = document.querySelector(".services-down");
        const servicesUp = document.querySelector(".services-up");
        const servicesMenu = document.querySelector(".services-menu");

        const servicesMenuOpen = () => {
            servicesDown.classList.remove("display");
            servicesUp.classList.add("display");
            servicesMenu.classList.add("display");
        }

        const servicesMenuClose = () => {
            servicesUp.classList.remove("display");
            servicesDown.classList.add("display");
            servicesMenu.classList.remove("display");
        }

        // resources menu control
        const resourcesDown = document.querySelector(".resources-down");
        const resourcesUp = document.querySelector(".resources-up");
        const resourcesMenu = document.querySelector(".resources-menu");

        const resourcesMenuOpen = () => {
            resourcesDown.classList.remove("display");
            resourcesUp.classList.add("display");
            resourcesMenu.classList.add("display");
        }

        const resourcesMenuClose = () => {
            resourcesUp.classList.remove("display");
            resourcesDown.classList.add("display");
            resourcesMenu.classList.remove("display");
        }

        // company menu control
        const companyDown = document.querySelector(".company-down");
        const companyUp = document.querySelector(".company-up");
        const companyMenu = document.querySelector(".company-menu");

        const companyMenuOpen = () => {
            companyDown.classList.remove("display");
            companyUp.classList.add("display");
            companyMenu.classList.add("display");
        }

        const companyMenuClose = () => {
            companyUp.classList.remove("display");
            companyDown.classList.add("display");
            companyMenu.classList.remove("display");
        }
    </script>

</body>

</html>