<!DOCTYPE html>
<html>

<head>
    <title> <?php echo get_bloginfo("name"); ?> </title>
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/style.css? <?php echo wp_date('Y-m-d-H-i-s'); ?>" />
    <script>
        window.onload = () => {
            const header = document.querySelector('.header-container');
            const topButton = document.querySelector('.return-to-top');
            window.addEventListener("scroll", () => {
                if (window.scrollY > 0) {
                    header.classList.add('header-container-scroll-down');
                } else {
                    header.classList.remove('header-container-scroll-down');
                }

                if (window.scrollY > 400) {
                    topButton.classList.add('return-to-top-display');
                } else {
                    topButton.classList.remove('return-to-top-display');
                }
            });
        }
    </script>
</head>

<body id="body-top">
    <?php get_header(); ?>

    <section class="hero-section">
        <div class="hero-background">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-bg.webp" alt="background">
        </div>
        <div class="hero-grid">
            <div class="hero-text-container">
                <div class="hero-text-grid">
                    <div class="hero-text-title">
                        Turn Experiences Into Insights
                    </div>
                    <div class="hero-text-subtitle">
                        We’re purpose built to turn people’s experiences into insights that drive faster, more informed strategies and decisions.
                    </div>
                    <a class="hero-button">
                        Book a demo
                    </a>
                </div>
            </div>
            <div class="hero-video">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero_600x337.png" alt="video">
                <div class="play-button">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/play_button.svg" alt="play-button">
                </div>
            </div>
        </div>
    </section>

    <section class="brand-section">
        <b class="brand-title">
            Trusted by the world's most innovative brands and agencies
        </b>
        <div class="brand-grid">
            <div class="brand-subgrid">
                <div class="brand-subgrid-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Ipsos.webp" alt="brand">
                </div>
                <div class="brand-subgrid-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Target.webp" alt="brand">
                </div>
                <div class="brand-subgrid-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/HawkPartners.webp" alt="brand">
                </div>
                <div class="brand-subgrid-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mastercard.webp" alt="brand">
                </div>
                <div class="brand-subgrid-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Gongos-color.webp" alt="brand">
                </div>
                <div class="brand-subgrid-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Hall-Partners.webp" alt="brand">
                </div>
                <div class="brand-subgrid-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/OptiBrand.webp" alt="brand">
                </div>
                <div class="brand-subgrid-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/XPERI.webp" alt="brand">
                </div>
            </div>
            <div class="brand-subgrid">
                <div class="brand-subgrid-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logitech.webp" alt="brand">
                </div>
                <div class="brand-subgrid-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/telenet.webp" alt="brand">
                </div>
                <div class="brand-subgrid-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Ford.webp" alt="brand">
                </div>
                <div class="brand-subgrid-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/quadrant.webp" alt="brand">
                </div>
                <div class="brand-subgrid-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hp.webp" alt="brand">
                </div>
                <div class="brand-subgrid-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/material.webp" alt="brand">
                </div>
                <div class="brand-subgrid-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gsk.webp" alt="brand">
                </div>
                <div class="brand-subgrid-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/eggstrategy.webp" alt="brand">
                </div>
            </div>
        </div>
    </section>

    <section class="benefit-section">
        <b class="benefit-title">
            See the benefits of using our People Experience Platform
        </b>
        <div class="benefit-grid">
            <a class="benefit-button">
                For Agencies
            </a>
            <a class="benefit-button">
                For In House Teams
            </a>
        </div>
    </section>

    <section class="why-section">
        <div class="why-bg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/why-section-bg-1024x542.webp" alt="why-bg">
        </div>
        <b class="why-title">
            Why Discuss?
        </b>
        <div class="why-grid">
            <div class="why-subgrid">
                <div class="subgrid-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Team-Icon.webp" alt="icon">
                </div>
                <div class="subgrid-title">
                    Designed for Research
                </div>
                <div class="subgrid-context">
                    Our pre-session features drive efficiency; while in-session, we offer unique ways to engage, capture 'aha' moments, and automate insights.
                </div>
                <a class="subgrid-button">
                    Learn More
                </a>
            </div>
            <div class="why-subgrid">
                <div class="subgrid-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Customer-Support-Icon.webp" alt="icon">
                </div>
                <div class="subgrid-title">
                    Dedicated to Customers
                </div>
                <div class="subgrid-context">
                    From DIY to full service, our team meets the gold standard in support, providing everything from tech help to training resources and more.
                </div>
                <a class="subgrid-button">
                    Learn How
                </a>
            </div>
            <div class="why-subgrid">
                <div class="subgrid-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Global-Reach-Icon.webp" alt="icon">
                </div>
                <div class="subgrid-title">
                    Built for Global Use
                </div>
                <div class="subgrid-context">
                    Leveraged in 100+ countries, our platform is simple for team members anywhere to use, with industry-leading security & compliance.
                </div>
                <a class="subgrid-button">
                    Explore More
                </a>
            </div>
        </div>
    </section>

    <section class="service-section">
        <div class="service-picture">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Services.webp" alt="service-picture">
        </div>
        <div class="service-grid">
            <b class="service-title">
                A full suite of services to maximize success
            </b>
            <div class="service-context">
                Over 80% of insights teams’ time is spent on logistics: coordinating, editing and analyzing conversations when it should be spent on strategy and decision-making. Discuss acts as an extension of your team, increasing speed-to-insights and helping you focus on the outcomes.
            </div>
            <a class="service-button">
                View Our Services
            </a>
        </div>
    </section>

    <section class="start-section">
        <div class="start-grid">
            <b class="start-title">
                Ready to Get Started?
            </b>
            <div class="start-context">
                Talk with a product expert to learn how Discuss can help you reach your insights goals.
            </div>
            <a class="start-button">
                Book a Demo
            </a>
        </div>
        <div class="start-picture">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/start_700x540.png" alt="start-picture">
        </div>
    </section>

    <a href="#body-top">
        <div class="return-to-top">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/chevron_up_icon.svg" alt="up-icon">
        </div>
    </a>

    <?php get_footer(); ?>

</body>

</html>