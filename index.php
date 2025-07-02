<?php
// Optional: Define variables if needed
$pageTitle = "SAAS Landing";
$assetPath = "assets/css/";
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Laralink" />
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />

    <!-- Site Title -->
    <title><?php echo $pageTitle; ?></title>

    <!-- CSS Links -->
    <link rel="stylesheet" href="<?php echo $assetPath; ?>plugins/fontawesome.min.css" />
    <link rel="stylesheet" href="<?php echo $assetPath; ?>plugins/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo $assetPath; ?>plugins/lightgallery.min.css" />
    <link rel="stylesheet" href="<?php echo $assetPath; ?>plugins/slick.css" />
    <link rel="stylesheet" href="<?php echo $assetPath; ?>plugins/animate.css" />
    <link rel="stylesheet" href="<?php echo $assetPath; ?>style.css" />
    <link rel="stylesheet" href="<?php echo $assetPath; ?>style2.css" />
    <link rel="stylesheet" href="<?php echo $assetPath; ?>theme_3.css" />

    <!-- External CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        crossorigin="anonymous" />
</head>


<body>
    <?php
// Define reusable asset path
$baseAssetPath = "assets/img/axismobi/photos/";
?>
    <!-- Start Preloader -->
    <div class="cs-preloader cs-accent_color cs-white_bg">
        <div class="cs-preloader_bg cs-center cs-accent_4_bg">
            <div class="cs-preloader_in cs-accent_15_border">
                <img src="<?php echo $baseAssetPath; ?>logo.png" alt="Logo" />
            </div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Start Header Section -->
    <header class="cs-site_header cs-style2 cs-sticky-header cs-primary_font">
        <div class="cs-main_header">
            <div class="container">
                <div class="cs-main_header_in">
                    <div class="cs-main_header_left">
                        <div class="cs-hamburger_wrap cs-white">
                            <div class="cs-hamburger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>

                    <div class="cs-main_header_center">
                        <a class="cs-site_branding" href="index.php">
                            <img id="site-logo" src="<?php echo $baseAssetPath; ?>logo2.png" alt="Logo" />
                        </a>
                    </div>

                    <div class="cs-main_header_right">
                        <div class="cs-toolbox cs-center">
                            <a
                                class="cs-toolbox_btn cs-accent_bg cs-white_bg_hover cs-accent_color_hover cs-accent_color_2_hover cs-rounded">
                                <span id="try-crm-btn">Try CRM for free</span>
                            </a>
                        </div>
                        <div class="cs-search_wrap">
                            <div class="cs-nav_overlay cs-accent_bg_2"></div>
                            <div class="container">
                                <form class="cs-search_form cs-style1">
                                    <input class="cs-search_input" type="text" placeholder="Search here" />
                                    <span
                                        class="cs-search_close cs-center cs-accent_color cs-accent_border cs-accent_bg_hover cs-white_hover cs-transition_3">
                                        <i class="fas fa-times"></i>
                                    </span>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Section -->


    <?php
// Asset path for images
$heroImagePath = "assets/img/axismobi/photos/";
?>

    <!-- Start Hero -->
    <div class="cs-hero cs-style3 text-center">
        <div class="cs-hero_bg_frame">
            <div class="cs-hero_bg cs-accent_bg_2"></div>
        </div>
        <div class="container">
            <div class="cs-hero_text">
                <h1 class="cs-hero_title cs-medium wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    Simple <b class="cs-bold cs-white">software</b> that <br />
                    boost up your <b class="cs-bold cs-white">business</b>.
                </h1>
                <div class="cs-main_image wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                    <img src="<?php echo $heroImagePath; ?>hero-bg.jpeg" alt="Hero Background" />
                </div>
            </div>
        </div>
        <div class="cs-shape cs-style2 cs-parallax">
            <div class="cs-to_up">
                <div class="cs-shape_in"><span></span></div>
            </div>
        </div>
        <div class="cs-shape cs-style3 cs-parallax">
            <div class="cs-to_up">
                <div class="cs-shape_in"><span></span></div>
            </div>
        </div>
        <div class="cs-shape cs-style4 cs-parallax">
            <div class="cs-to_left">
                <div class="cs-shape_in"></div>
            </div>
        </div>
    </div>
    <!-- End Hero -->

    <!-- Get a Demo Section -->
    <div class="cs-height_135 cs-height_lg_80"></div>

    <div class="container" id="demo-section">
        <!-- Tabs -->
        <div class="tabs">
            <!-- HR Dashboard -->
            <div class="tab active crm-active" data-tab="crm">
                <span class="icon">
                    <i class="fas fa-users" style="font-size: 48px; color: #ff7718"></i>
                </span>
                <span>HR Dashboard</span>
            </div>

            <!-- Finance Dashboard -->
            <div class="tab" data-tab="marketing">
                <span class="icon">
                    <i class="fas fa-chart-line" style="font-size: 48px; color: #7338d4"></i>
                </span>
                <span>Finance Dashboard</span>
            </div>

            <!-- Real Estate Management System -->
            <div class="tab" data-tab="support">
                <span class="icon">
                    <i class="fas fa-building" style="font-size: 48px; color: #00a47e"></i>
                </span>
                <span>Real Estate Management System</span>
            </div>
        </div>

        <!-- CRM Cards -->
        <div class="cards card-section active" id="crm">
            <?php
        $crmFeatures = [
            ["Attendance", "fa-user-check"],
            ["Projects &<br />Tasks", "fa-tasks"],
            ["Onboard<br />Employee", "fa-user-plus"],
            ["Newsletter", "fa-envelope-open-text"],
            ["Weekly<br />Performance", "fa-chart-line"],
            ["Location &<br />Camera Login", "fa-map-marker-alt"],
            ["Employee<br />Review", "fa-star-half-alt"],
            ["Logs", "fa-history"],
            ["Shift Incharge<br />Checklist", "fa-clipboard-check"],
            ["Courses &<br />Test", "fa-book-reader"],
        ];

        foreach ($crmFeatures as [$title, $icon]) {
            echo "
            <div class='card'>
                <input type='checkbox' class='card-check' />
                <div class='card-icon'><i class='fas $icon'></i></div>
                <div class='card-title'>$title</div>
            </div>
            ";
        }
        ?>
        </div>

        <!-- Finance Dashboard Cards -->
        <div class="cards card-section" id="marketing">
            <?php
        $financeFeatures = [
            ["Onboard<br />Vendor", "fa-user-tie"],
            ["Purchase<br />Order", "fa-file-signature"],
            ["Performa<br />Invoice", "fa-file-invoice-dollar"],
            ["Add<br />Invoice", "fa-file-invoice"],
            ["Todo<br />List", "fa-list-check"],
            ["Logs", "fa-clipboard-list"],
            ["Multi-Organization<br />Support", "fa-sitemap"],
        ];

        foreach ($financeFeatures as [$title, $icon]) {
            echo "
            <div class='card'>
                <input type='checkbox' class='card-check' />
                <div class='card-icon'><i class='fas $icon'></i></div>
                <div class='card-title'>$title</div>
            </div>
            ";
        }
        ?>
        </div>

        <!-- Real Estate Management System Cards -->
        <div class="cards card-section" id="support">
            <?php
        $realEstateFeatures = [
            ["Onboard <br />Occupant/Tenant", "fa-users"],
            ["Users with<br />custom roles", "fa-user-shield"],
            ["Visitor<br />Management", "fa-id-badge"],
            ["Ticket<br />Management", "fa-ticket-alt"],
            ["Onboard<br />Technician", "fa-user-cog"],
            ["Helpdesk<br />Info", "fa-info-circle"],
            ["Community<br />Center", "fa-users-cog"],
            ["Billing &<br />Invoice", "fa-file-invoice-dollar"],
            ["Work<br />Permit", "fa-clipboard-check"],
            ["Gatepass", "fa-door-open"],
        ];

        foreach ($realEstateFeatures as [$title, $icon]) {
            echo "
            <div class='card'>
                <input type='checkbox' class='card-check' />
                <div class='card-icon'><i class='fas $icon'></i></div>
                <div class='card-title'>$title</div>
            </div>
            ";
        }
        ?>
        </div>

        <!-- CTA Buttons -->
        <div class="buttons">
            <button class="btn primary" id="get-demo-btn">Get Demo</button>
            <button class="btn primary" id="next-btn" style="display: none">Next</button>
        </div>
    </div>
    <!-- End Section -->


    <?php
$features = [
  [
    "title" => "Mobile & Web Apps",
    "icon" => "fa-mobile-screen-button",
    "desc" => "Custom Android, iOS, and web applications tailored to your business goals.",
    "color" => "#a0e7e5",
    "bg" => "#e6f7f3"
  ],
  [
    "title" => "API Integration",
    "icon" => "fa-plug-circle-bolt",
    "desc" => "Seamless integration of third-party services or custom RESTful APIs.",
    "color" => "#ffb3a7",
    "bg" => "#ffeeea"
  ],
  [
    "title" => "UI/UX Design",
    "icon" => "fa-pencil-ruler",
    "desc" => "User-centered design for web and mobile with modern, responsive layouts.",
    "color" => "#ffe29a",
    "bg" => "#fff3e6"
  ],
  [
    "title" => "Custom Software",
    "icon" => "fa-cubes",
    "desc" => "CRMs, ERPs, dashboards, and internal tools tailored to your workflow.",
    "color" => "#f5b5fc",
    "bg" => "#ffecec"
  ],
  [
    "title" => "E-commerce",
    "icon" => "fa-cart-shopping",
    "desc" => "Online store development with payments, inventory, and user management.",
    "color" => "#fdcbfa",
    "bg" => "#fce9fa"
  ],
  [
    "title" => "CMS & Website",
    "icon" => "fa-desktop",
    "desc" => "Dynamic and SEO-friendly websites using Laravel, WordPress, or custom setups.",
    "color" => "#a7c7e7",
    "bg" => "#e8f4fd"
  ],
  [
    "title" => "Cloud & DevOps",
    "icon" => "fa-cloud-arrow-up",
    "desc" => "CI/CD pipelines, cloud deployments, and server maintenance solutions.",
    "color" => "#d0bdf4",
    "bg" => "#edeaff"
  ],
  [
    "title" => "Support & Maintenance",
    "icon" => "fa-headset",
    "desc" => "Ongoing updates, bug fixes, and optimization for peak post-launch performance.",
    "color" => "#f9dda4",
    "bg" => "#fff5e0"
  ],
];
?>

    <!-- Gaming Card Section -->
    <div class="cs-height_135 cs-height_lg_80"></div>

    <div class="container wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
        <div class="cs-section_heading cs-style2 text-center cs-size1">
            <div class="cs-section_subtitle">What we do for you</div>
            <h2 class="cs-section_title cs-medium">
                Our best <b class="cs-bold cs-accent_color_2">Feature's</b>
            </h2>
        </div>
        <div class="cs-height_70 cs-height_lg_50"></div>
    </div>

    <section class="container">
        <section class="card__container">
            <?php foreach ($features as $feature): ?>
            <div class="card__bx" style="--clr: <?= $feature['color'] ?>; background-color: <?= $feature['bg'] ?>;">
                <div class="card__data">
                    <div class="card__icon">
                        <i class="fa-solid <?= $feature['icon'] ?>"></i>
                    </div>
                    <div class="card__content">
                        <h3><?= $feature['title'] ?></h3>
                        <p><?= $feature['desc'] ?></p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </section>
    </section>
    <!-- End Gaming Card Section -->

    <!-- API Section -->
    <div class="cs-height_135 cs-height_lg_80"></div>

    <div class="container wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
        <div class="cs-section_heading cs-style2 text-center cs-size1">
            <div class="cs-section_subtitle">Smart Integrations</div>
            <h2 class="cs-section_title">
                API Categories & <b class="cs-bold cs-accent_color_2">Popular Providers</b>
            </h2>
        </div>
    </div>

    <section class="api-section">
        <div class="skills-wrapper">
            <div class="api-grid" id="apiContainer">
                <!-- Cards dynamically inserted here via JS -->
            </div>

            <div class="center-circle">
                <div class="circle-box">APIs</div>
            </div>

            <div class="pagination">
                <button id="prevBtn">← Prev</button>
                <span id="pageIndicator">Page 1 of N</span>
                <button id="nextBtn">Next →</button>
            </div>
        </div>
    </section>
    <!-- End API Section -->


    <?php
$dashboards = [
  "hr" => [
    "title" => "HR Dashboard",
    "path" => "assets/img/axismobi/HR DASHBOARD/",
    "images" => ["hr1.png", "hr2.png", "hr3.png", "hr4.png", "hr5.png"]
  ],
  "finance" => [
    "title" => "Finance Dashboard",
    "path" => "assets/img/axismobi/FINANCE DASHBOARD/",
    "images" => ["f1.jpg", "f2.png", "f3.png", "f4.png"]
  ],
  "rems" => [
    "title" => "REMS Dashboard",
    "path" => "assets/img/axismobi/REMS DASHBOARD/",
    "images" => ["r1.png", "r2.png", "r3.png", "r4.png", "r5.jpg"]
  ]
];
?>

    <!-- Dashboard Gallery Section -->
    <section class="dashboard-gallery">
        <div class="cs-section_heading cs-style2 text-center cs-size1">
            <div class="cs-section_subtitle">Gallery</div>
            <h2 class="cs-section_title cs-medium">
                Explore our <b class="cs-bold cs-accent_color_2">Dashboards</b>
            </h2>
        </div>

        <div class="gallery-tabs">
            <?php foreach ($dashboards as $id => $dashboard): ?>
            <button class="gallery-tab <?= $id === 'hr' ? 'active' : '' ?>" data-target="<?= $id ?>">
                <?= $dashboard['title'] ?>
            </button>
            <?php endforeach; ?>
        </div>

        <div class="gallery-contents">
            <?php foreach ($dashboards as $id => $dashboard): ?>
            <div class="gallery-carousel <?= $id === 'hr' ? 'active' : '' ?>" id="<?= $id ?>">
                <div class="carousel-wrapper">
                    <div class="carousel-track">
                        <?php foreach ($dashboard['images'] as $img): ?>
                        <img src="<?= $dashboard['path'] . $img ?>" alt="<?= $dashboard['title'] ?>" />
                        <?php endforeach; ?>
                    </div>
                    <div class="thumbnail-track">
                        <?php foreach ($dashboard['images'] as $img): ?>
                        <img src="<?= $dashboard['path'] . $img ?>" alt="<?= $dashboard['title'] ?> Thumbnail" />
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
    <!-- End Dashboard Gallery Section -->


    <!-- Start Pricing Table -->
    <div class="cs-height_135 cs-height_lg_80"></div>

    <div class="container wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
        <div class="cs-section_heading cs-style2 text-center cs-size1">
            <div class="cs-section_subtitle">Simple pricing</div>
            <h2 class="cs-section_title">Choose your <b>Plan</b></h2>
        </div>
        <div class="cs-height_70 cs-height_lg_50"></div>
    </div>
    <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3">
        <div class="cs-tabs cs-fade_tabs cs-style1">
            <div class="cs-center">
                <div class="cs-pricing_2_offer text-uppercase cs-accent_15_bg">
                    save up to 40% with yearly
                    <svg width="31" height="56" viewBox="0 0 31 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.23401 50.493C3.23401 50.493 56.679 31.723 11.965 1.251" stroke="#E76F51"
                            stroke-width="2" />
                        <path d="M4.02001 46.029L1.95801 50.692L6.18701 54.706" stroke="#E76F51" stroke-width="2" />
                    </svg>
                </div>
            </div>
            <ul class="cs-tab_links cs-style4 cs-mp0 cs-center cs-primary_font cs-medium">
                <li class="active">
                    <a href="#tab_one" class="cs-primary_color_hover">Monthly
                        <div class="cs-switch cs-accent_bg">
                            <span class="cs-transition_3"></span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#tab_two" class="cs-primary_color_hover">Yearly</a>
                </li>
            </ul>
            <div class="cs-height_45 cs-height_lg_40"></div>
            <div class="cs-tab_content">
                <div id="tab_one" class="cs-tab active">
                    <div class="row">
                        <div class="col-lg-4">
                            <div
                                class="cs-pricing_table cs-style2 cs-white_bg cs-accent_bg_2_hover cs-white_hover cs-transition_3">
                                <h2 class="cs-pricing_name cs-secondary_color text-center">
                                    Starter
                                </h2>
                                <div class="cs-price_wrap cs-bold cs-primary_font text-center">
                                    <span class="cs-symble cs-accent_color_2">$</span><span
                                        class="cs-price cs-accent_color_2">100</span>
                                    <div class="cs-pricing_duration cs-medium text-uppercase">
                                        Per Month
                                    </div>
                                </div>
                                <ul class="cs-pricing_feature cs-mp0">
                                    <li><i class="fas fa-check-circle"></i>5 Accounts</li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>Unlimited File Upload
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>Database Up to 10 GB
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>Bot Chat 15 Days Trial
                                    </li>
                                </ul>
                                <div class="cs-pricing_text text-center">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                </div>
                                <div class="text-center">
                                    <a href="#"
                                        class="cs-pricing_btn cs-medium cs-accent_bg_2 cs-white cs-white_hover">Purchase
                                        Now</a>
                                </div>
                            </div>
                            <div class="cs-height_30 cs-height_lg_30"></div>
                        </div>
                        <div class="col-lg-4">
                            <div
                                class="cs-pricing_table cs-style2 cs-white_bg cs-accent_bg_2_hover cs-white_hover cs-transition_3">
                                <h2 class="cs-pricing_name cs-secondary_color text-center">
                                    Professional
                                </h2>
                                <div class="cs-price_wrap cs-bold cs-primary_font text-center">
                                    <span class="cs-symble cs-accent_color_2">$</span><span
                                        class="cs-price cs-accent_color_2">250</span>
                                    <div class="cs-pricing_duration cs-medium text-uppercase">
                                        Per Month
                                    </div>
                                </div>
                                <ul class="cs-pricing_feature cs-mp0">
                                    <li><i class="fas fa-check-circle"></i>5 Accounts</li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>Unlimited File Upload
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>Database Up to 10 GB
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>Bot Chat 15 Days Trial
                                    </li>
                                </ul>
                                <div class="cs-pricing_text text-center">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                </div>
                                <div class="text-center">
                                    <a href="#"
                                        class="cs-pricing_btn cs-medium cs-accent_bg_2 cs-white cs-white_hover">Purchase
                                        Now</a>
                                </div>
                            </div>
                            <div class="cs-height_30 cs-height_lg_30"></div>
                        </div>
                        <div class="col-lg-4">
                            <div
                                class="cs-pricing_table cs-style2 cs-white_bg cs-accent_bg_2_hover cs-white_hover cs-transition_3">
                                <h2 class="cs-pricing_name cs-secondary_color text-center">
                                    Agency
                                </h2>
                                <div class="cs-price_wrap cs-bold cs-primary_font text-center">
                                    <span class="cs-symble cs-accent_color_2">$</span><span
                                        class="cs-price cs-accent_color_2">400</span>
                                    <div class="cs-pricing_duration cs-medium text-uppercase">
                                        Per Month
                                    </div>
                                </div>
                                <ul class="cs-pricing_feature cs-mp0">
                                    <li><i class="fas fa-check-circle"></i>5 Accounts</li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>Unlimited File Upload
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>Database Up to 10 GB
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>Bot Chat 15 Days Trial
                                    </li>
                                </ul>
                                <div class="cs-pricing_text text-center">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                </div>
                                <div class="text-center">
                                    <a href="#"
                                        class="cs-pricing_btn cs-medium cs-accent_bg_2 cs-white cs-white_hover">Purchase
                                        Now</a>
                                </div>
                            </div>
                            <div class="cs-height_30 cs-height_lg_30"></div>
                        </div>
                    </div>
                </div>
                <div id="tab_two" class="cs-tab">
                    <div class="row">
                        <div class="col-lg-4">
                            <div
                                class="cs-pricing_table cs-style2 cs-white_bg cs-accent_bg_2_hover cs-white_hover cs-transition_3">
                                <h2 class="cs-pricing_name cs-secondary_color text-center">
                                    Starter
                                </h2>
                                <div class="cs-price_wrap cs-bold cs-primary_font text-center">
                                    <span class="cs-symble cs-accent_color_2">$</span><span
                                        class="cs-price cs-accent_color_2">500</span>
                                    <div class="cs-pricing_duration cs-medium text-uppercase">
                                        Per Month
                                    </div>
                                </div>
                                <ul class="cs-pricing_feature cs-mp0">
                                    <li><i class="fas fa-check-circle"></i>5 Accounts</li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>Unlimited File Upload
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>Database Up to 10 GB
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>Bot Chat 15 Days Trial
                                    </li>
                                </ul>
                                <div class="cs-pricing_text text-center">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                </div>
                                <div class="text-center">
                                    <a href="#"
                                        class="cs-pricing_btn cs-medium cs-accent_bg_2 cs-white cs-white_hover">Purchase
                                        Now</a>
                                </div>
                            </div>
                            <div class="cs-height_30 cs-height_lg_30"></div>
                        </div>
                        <div class="col-lg-4">
                            <div
                                class="cs-pricing_table cs-style2 cs-white_bg cs-accent_bg_2_hover cs-white_hover cs-transition_3">
                                <h2 class="cs-pricing_name cs-secondary_color text-center">
                                    Professional
                                </h2>
                                <div class="cs-price_wrap cs-bold cs-primary_font text-center">
                                    <span class="cs-symble cs-accent_color_2">$</span><span
                                        class="cs-price cs-accent_color_2">1000</span>
                                    <div class="cs-pricing_duration cs-medium text-uppercase">
                                        Per Month
                                    </div>
                                </div>
                                <ul class="cs-pricing_feature cs-mp0">
                                    <li><i class="fas fa-check-circle"></i>5 Accounts</li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>Unlimited File Upload
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>Database Up to 10 GB
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>Bot Chat 15 Days Trial
                                    </li>
                                </ul>
                                <div class="cs-pricing_text text-center">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                </div>
                                <div class="text-center">
                                    <a href="#"
                                        class="cs-pricing_btn cs-medium cs-accent_bg_2 cs-white cs-white_hover">Purchase
                                        Now</a>
                                </div>
                            </div>
                            <div class="cs-height_30 cs-height_lg_30"></div>
                        </div>
                        <div class="col-lg-4">
                            <div
                                class="cs-pricing_table cs-style2 cs-white_bg cs-accent_bg_2_hover cs-white_hover cs-transition_3">
                                <h2 class="cs-pricing_name cs-secondary_color text-center">
                                    Agency
                                </h2>
                                <div class="cs-price_wrap cs-bold cs-primary_font text-center">
                                    <span class="cs-symble cs-accent_color_2">$</span><span
                                        class="cs-price cs-accent_color_2">1500</span>
                                    <div class="cs-pricing_duration cs-medium text-uppercase">
                                        Per Month
                                    </div>
                                </div>
                                <ul class="cs-pricing_feature cs-mp0">
                                    <li><i class="fas fa-check-circle"></i>5 Accounts</li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>Unlimited File Upload
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>Database Up to 10 GB
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>Bot Chat 15 Days Trial
                                    </li>
                                </ul>
                                <div class="cs-pricing_text text-center">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                </div>
                                <div class="text-center">
                                    <a href="#"
                                        class="cs-pricing_btn cs-medium cs-accent_bg_2 cs-white cs-white_hover">Purchase
                                        Now</a>
                                </div>
                            </div>
                            <div class="cs-height_30 cs-height_lg_30"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cs-height_110 cs-height_lg_50"></div>
    <!-- End Pricing Table -->

    <!-- Logo Carousel Section -->
    <div class="cs-section_heading cs-style2 text-center cs-size1">
        <div class="cs-section_subtitle">Our Clients</div>
        <h2 class="cs-section_title">Brands that <b>Trust us</b></h2>
    </div>

    <section class="logo-carousel-section">
        <!-- Row 1: Left to Right -->
        <div class="logo-row scroll-left">
            <div class="logo-track">
                <img src="assets/img/axismobi/photos/1xbet.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/banco.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/banki.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/be-customer.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/bybit.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/cashe-personal-loan.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/dailyhunt.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/edamama.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/exness.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/mxtakatak.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/navi.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/nira.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/one-card.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/paytm.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/paytm-money.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/pincode.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/plus500.png" alt="Logo" />
                <!-- duplicate for seamless loop -->
                <img src="assets/img/axismobi/photos/1xbet.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/banco.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/banki.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/be-customer.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/bybit.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/cashe-personal-loan.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/dailyhunt.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/edamama.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/exness.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/mxtakatak.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/navi.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/nira.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/one-card.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/paytm.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/paytm-money.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/pincode.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/plus500.png" alt="Logo" />
            </div>
        </div>

        <!-- Row 2: Right to Left -->
        <div class="logo-row scroll-right">
            <div class="logo-track">
                <img src="assets/img/axismobi/photos/fibe.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/groww.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/ia.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/josh_black.jpg" alt="Logo" />
                <img src="assets/img/axismobi/photos/kissht.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/kotak.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/kredit-bee.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/meesho.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/mmt.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/moj.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/mpokket.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/rummyculture.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/sharechat.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/tataneu.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/tradew.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/zaimer.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/zalora.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/zolo-pay.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/zee5.png" alt="Logo" />

                <!-- duplicate for seamless loop -->
                <img src="assets/img/axismobi/photos/fibe.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/groww.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/ia.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/josh_black.jpg" alt="Logo" />
                <img src="assets/img/axismobi/photos/kissht.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/kotak.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/kredit-bee.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/meesho.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/mmt.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/moj.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/mpokket.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/rummyculture.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/sharechat.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/tataneu.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/tradew.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/zaimer.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/zalora.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/zolo-pay.png" alt="Logo" />
                <img src="assets/img/axismobi/photos/zee5.png" alt="Logo" />
            </div>
        </div>
    </section>
    <!-- End Logo Carousel -->

    <!-- Start Working Progress -->
    <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
        <div class="cs-section_heading cs-style2 text-center cs-size1">
            <div class="cs-section_subtitle">Here is your answer</div>
            <h2 class="cs-section_title cs-medium">
                Frequently asked <b class="cs-bold cs-accent_color_2">Questions</b>
            </h2>
        </div>
        <div class="cs-height_45 cs-height_lg_25"></div>
    </div>
    <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cs-accordians cs-style2">
                    <div class="cs-accordian active">
                        <div class="cs-accordian_head">
                            <h2 class="cs-accordian_title cs-medium cs-transition_3">
                                What technologies do you specialize in?
                            </h2>
                            <span class="cs-accordian_toggle cs-accent_color">
                                <i class="fas fa-plus"></i>
                            </span>
                        </div>
                        <div class="cs-accordian-body">
                            <p>
                                We work with a wide range of technologies including PHP,
                                Laravel, React, Node.js, Python, Flutter, MySQL, and more. Our
                                stack is always tailored to your project needs.
                            </p>
                        </div>
                    </div>

                    <div class="cs-accordian">
                        <div class="cs-accordian_head">
                            <h2 class="cs-accordian_title cs-medium cs-transition_3">
                                Can you build both websites and mobile apps?
                            </h2>
                            <span class="cs-accordian_toggle cs-accent_color">
                                <i class="fas fa-plus"></i>
                            </span>
                        </div>
                        <div class="cs-accordian-body">
                            <p>
                                Yes, we provide end-to-end development for web platforms and
                                mobile applications (Android & iOS), including backend,
                                frontend, and API integrations.
                            </p>
                        </div>
                    </div>

                    <div class="cs-accordian">
                        <div class="cs-accordian_head">
                            <h2 class="cs-accordian_title cs-medium cs-transition_3">
                                Do you offer custom software development?
                            </h2>
                            <span class="cs-accordian_toggle cs-accent_color">
                                <i class="fas fa-plus"></i>
                            </span>
                        </div>
                        <div class="cs-accordian-body">
                            <p>
                                Absolutely. We build fully customized solutions from scratch —
                                whether it’s a CRM, ERP, eCommerce platform, or a booking
                                system.
                            </p>
                        </div>
                    </div>

                    <div class="cs-accordian">
                        <div class="cs-accordian_head">
                            <h2 class="cs-accordian_title cs-medium cs-transition_3">
                                How long does a typical project take?
                            </h2>
                            <span class="cs-accordian_toggle cs-accent_color">
                                <i class="fas fa-plus"></i>
                            </span>
                        </div>
                        <div class="cs-accordian-body">
                            <p>
                                It depends on the scope. Simple websites can take 1–2 weeks,
                                while complex web apps may take 4–12 weeks. We’ll share a
                                detailed timeline after understanding your requirements.
                            </p>
                        </div>
                    </div>

                    <div class="cs-accordian">
                        <div class="cs-accordian_head">
                            <h2 class="cs-accordian_title cs-medium cs-transition_3">
                                Can I see the progress during development?
                            </h2>
                            <span class="cs-accordian_toggle cs-accent_color">
                                <i class="fas fa-plus"></i>
                            </span>
                        </div>
                        <div class="cs-accordian-body">
                            <p>
                                Yes. We provide weekly updates, demo links, and access to test
                                environments so you're always in the loop.
                            </p>
                        </div>
                    </div>

                    <div class="cs-accordian">
                        <div class="cs-accordian_head">
                            <h2 class="cs-accordian_title cs-medium cs-transition_3">
                                Do you handle hosting and domain setup?
                            </h2>
                            <span class="cs-accordian_toggle cs-accent_color">
                                <i class="fas fa-plus"></i>
                            </span>
                        </div>
                        <div class="cs-accordian-body">
                            <p>
                                Yes, we can help you with domain registration, hosting setup,
                                server configuration, and deployment.
                            </p>
                        </div>
                    </div>

                    <div class="cs-accordian">
                        <div class="cs-accordian_head">
                            <h2 class="cs-accordian_title cs-medium cs-transition_3">
                                What if I need changes after the project is done?
                            </h2>
                            <span class="cs-accordian_toggle cs-accent_color">
                                <i class="fas fa-plus"></i>
                            </span>
                        </div>
                        <div class="cs-accordian-body">
                            <p>
                                We offer post-launch support and maintenance packages. Minor
                                changes are handled even after launch as part of our
                                customer-first approach.
                            </p>
                        </div>
                    </div>

                    <div class="cs-accordian">
                        <div class="cs-accordian_head">
                            <h2 class="cs-accordian_title cs-medium cs-transition_3">
                                Is my data secure?
                            </h2>
                            <span class="cs-accordian_toggle cs-accent_color">
                                <i class="fas fa-plus"></i>
                            </span>
                        </div>
                        <div class="cs-accordian-body">
                            <p>
                                Yes, we follow industry-standard security practices, including
                                HTTPS, secure APIs, encrypted storage, and regular code
                                audits.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cs-height_115 cs-height_lg_60"></div>
    <!-- End Working Progress -->

    <!-- Start Contact -->
    <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
        <div class="cs-section_heading cs-style2 text-center cs-size1">
            <div class="cs-section_subtitle">Say Hello</div>
            <h2 class="cs-section_title cs-medium">
                Let's <b class="cs-bold cs-accent_color_2">Connect</b>
            </h2>
        </div>
        <div class="cs-height_45 cs-height_lg_25"></div>
    </div>

    <div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="position-relative">
                        <div class="cs-contact cs-style1">
                            <h4 class="cs-contact_title cs-bold">Get In Touch</h4>
                            <form class="cs-contact_form">
                                <input type="text"
                                    class="cs-form_field cs-accent_5_bg_2 cs-accent_30_border_2 cs-primary_color"
                                    placeholder="Your name" />
                                <div class="cs-height_20 cs-height_lg_20"></div>
                                <input type="text"
                                    class="cs-form_field cs-accent_5_bg_2 cs-accent_30_border_2 cs-primary_color"
                                    placeholder="Subject" />
                                <div class="cs-height_20 cs-height_lg_20"></div>
                                <input type="text"
                                    class="cs-form_field cs-accent_5_bg_2 cs-accent_30_border_2 cs-primary_color"
                                    placeholder="Email" />
                                <div class="cs-height_20 cs-height_lg_20"></div>
                                <input type="text"
                                    class="cs-form_field cs-accent_5_bg_2 cs-accent_30_border_2 cs-primary_color"
                                    placeholder="Phone" />
                                <div class="cs-height_20 cs-height_lg_20"></div>
                                <textarea cols="30" rows="5"
                                    class="cs-form_field cs-accent_5_bg_2 cs-accent_30_border_2 cs-primary_color"
                                    placeholder="Your Message"></textarea>
                                <div class="cs-height_20 cs-height_lg_20"></div>
                                <button
                                    class="cs-btn cs-style7 cs-accent_bg_2 cs-accent_bg_hover cs-white cs-white_hover cs-btn_md cs-rounded cs-primary_font cs-medium">
                                    Send Message
                                </button>
                            </form>
                            <div class="cs-height_45 cs-height_lg_25"></div>
                            <ul class="cs-contact_info cs-mp0">
                                <li><i class="fas fa-phone-alt"></i>+123 4567 890</li>
                                <li><i class="far fa-address-book"></i>hello@axismobi.com</li>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>Sector 63, Noida, UP
                                </li>
                            </ul>
                        </div>
                        <div class="cs-height_140 cs-height_lg_0"></div>
                        <img src="assets/img/digital-agency/contact1.png" alt="" class="cs-contact_1_img" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cs-height_140 cs-height_lg_80"></div>
    <!-- End Contact -->

    <!-- Footer Section -->
    <footer class="cs-footer cs-style1 cs-type1 rounded-0 cs-accent_4_bg">
        <div class="cs-footer_bg"></div>
        <div class="container">
            <div class="cs-height_115 cs-height_lg_75"></div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="cs-footer_item">
                        <h2 class="cs-widget_title cs-semi_bold">Get Started</h2>
                        <div class="cs-footer_newsletter cs-style1">
                            <div class="cs-footer_newsletter_text">
                                If you don’t want to miss any update of our new templates and
                                extensions please subscribe.
                            </div>
                            <div class="cs-height_30 cs-height_lg_30"></div>
                            <form action="#" class="cs-footer_newsletter_form">
                                <input type="email" class="cs-footer_newsletter_input" placeholder="Enter your email" />
                                <button class="cs-footer_newsletter_btn cs-accent_bg cs-accent_bg_2_hover cs-white">
                                    <i class="fas fa-paper-plane"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="cs-footer_item widget_nav_menu">
                                <h2 class="cs-widget_title cs-semi_bold">Services</h2>
                                <ul class="menu">
                                    <li><a href="#">Web design</a></li>
                                    <li><a href="#">Development</a></li>
                                    <li><a href="#">Branding</a></li>
                                    <li><a href="#">Digital marketing</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="cs-footer_item widget_nav_menu">
                                <h2 class="cs-widget_title cs-semi_bold">Company</h2>
                                <ul class="menu">
                                    <li><a href="#">Privacy policy</a></li>
                                    <li><a href="#">Sitemap</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Terms & conditions</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="cs-footer_item cs-address_widgert">
                                <h2 class="cs-widget_title cs-semi_bold">Follow us</h2>
                                <ul>
                                    <li>hello@axismobi.com</li>
                                    <li>+012 3456 7890</li>
                                </ul>
                                <div class="cs-height_30 cs-height_lg_30"></div>
                                <div class="cs-social_btns cs-style1">
                                    <a href="https://www.facebook.com/" target="_blank"
                                        class="cs-accent_bg_hover cs-white_hover cs-white_bg cs-ternary_color">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="https://www.instagram.com/axis_mobi/" target="_blank"
                                        class="cs-accent_bg_hover cs-white_hover cs-white_bg cs-ternary_color">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="https://www.youtube.com/channel/UC9RJdRWTM1BZM3NgX1g01qQ" target="_blank"
                                        class="cs-accent_bg_hover cs-white_hover cs-white_bg cs-ternary_color">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/company/axismobi" target="_blank"
                                        class="cs-accent_bg_hover cs-white_hover cs-white_bg cs-ternary_color">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cs-height_90 cs-height_lg_50"></div>
        </div>
        <div class="cs-copyright text-center cs-primary_color cs-accent_4_bg">
            <div class="container">
                Copyright © 2025. All rights reserved by Axismobi
            </div>
        </div>
    </footer>
    <!-- Footer Section -->

    <!-- Start Video Popup -->
    <div id="demoModal" class="modal">
        <div class="modal-content">
            <span class="close"><span class="x-icon">&times;</span></span>
            <iframe src="https://www.youtube.com/embed/qyU1tWdrKwU" frameborder="0" allow="autoplay; encrypted-media"
                allowfullscreen></iframe>
        </div>
    </div>
    <!-- End Video Popup -->

    <!-- Script -->
    <script src="assets/js/plugins/jquery-3.6.0.min.js"></script>
    <script src="assets/js/plugins/isotope.pkg.min.js"></script>
    <script src="assets/js/plugins/jquery.slick.min.js"></script>
    <script src="assets/js/plugins/lightgallery.min.js"></script>
    <script src="assets/js/plugins/jquery.counter.min.js"></script>
    <script src="assets/js/plugins/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const tabs = document.querySelectorAll(".tab");
        const cardSections = document.querySelectorAll(".card-section");
        const galleryTabs = document.querySelectorAll(".gallery-tab");
        const galleryCarousels = document.querySelectorAll(".gallery-carousel");
        const apiCards = document.querySelectorAll(".api-card");
        const checkboxes = document.querySelectorAll(".card-check");
        const nextBtn = document.getElementById("next-btn");

        // Header logo switch
        const header = document.querySelector(".cs-site_header.cs-style2");
        const logo = document.getElementById("site-logo");
        window.addEventListener("scroll", () => {
            if (header.classList.contains("cs-sticky-active")) {
                logo.src = "assets/img/axismobi/photos/logo.png";
            } else {
                logo.src = "assets/img/axismobi/photos/logo2.png";
            }
        });

        // Tab switching
        tabs.forEach((tab) => {
            tab.addEventListener("click", () => {
                tabs.forEach((t) =>
                    t.classList.remove(
                        "active",
                        "crm-active",
                        "marketing-active",
                        "support-active"
                    )
                );
                cardSections.forEach((section) =>
                    section.classList.remove("active")
                );

                const tabId = tab.dataset.tab;
                tab.classList.add("active");

                if (tabId === "crm") tab.classList.add("crm-active");
                else if (tabId === "marketing")
                    tab.classList.add("marketing-active");
                else if (tabId === "support") tab.classList.add("support-active");

                document.getElementById(tabId).classList.add("active");
            });
        });

        // API card toggle
        apiCards.forEach((card) => {
            card.addEventListener("click", () => {
                card.classList.toggle("open");
            });
        });

        // 🔁 Update selected features in sessionStorage
        function updateSelectedFeaturesInSession() {
            const selectedTitles = Array.from(
                document.querySelectorAll(".card-check:checked")
            ).map((checkbox) => {
                const titleElement = checkbox
                    .closest(".card")
                    .querySelector(".card-title");
                return titleElement ? titleElement.innerText.trim() : "";
            });
            sessionStorage.setItem(
                "selectedFeatures",
                JSON.stringify(selectedTitles)
            );
        }

        // 🔁 Show/hide Next button
        function toggleNextButton() {
            const anyChecked =
                document.querySelectorAll(".card-check:checked").length > 0;
            nextBtn.style.display = anyChecked ? "inline-block" : "none";
            updateSelectedFeaturesInSession(); // 🔁 Store whenever state changes
        }

        // 🔁 Restore checked state from sessionStorage
        const savedSelections = JSON.parse(
            sessionStorage.getItem("selectedFeatures") || "[]"
        );
        document.querySelectorAll(".card").forEach((card) => {
            const titleElement = card.querySelector(".card-title");
            const checkbox = card.querySelector(".card-check");
            if (
                titleElement &&
                savedSelections.includes(titleElement.innerText.trim())
            ) {
                checkbox.checked = true;
            }

            // Card click toggles checkbox (unless clicking checkbox directly)
            card.addEventListener("click", (e) => {
                if (!e.target.classList.contains("card-check")) {
                    // 🔁 Enforce single-tab selection
                    const currentTab = card.closest(".card-section");
                    const currentTabId = currentTab ? currentTab.id : null;
                    const selectedTabId = sessionStorage.getItem("selectedTabId");

                    if (selectedTabId && selectedTabId !== currentTabId) {
                        // Clear previous tab selections
                        document
                            .querySelectorAll(".card-check")
                            .forEach((cb) => (cb.checked = false));
                    }

                    // Toggle current checkbox
                    checkbox.checked = !checkbox.checked;

                    // Save current tab as selected
                    sessionStorage.setItem("selectedTabId", currentTabId);

                    // Trigger change event to update button + session
                    checkbox.dispatchEvent(new Event("change", {
                        bubbles: true
                    }));
                }
            });

            // Checkbox change listener
            checkbox.addEventListener("change", toggleNextButton);
        });

        toggleNextButton(); // Initial check on load

        // Auto slide for carousels
        let activeInterval = null;
        const firstCarousel = document.querySelector(
            ".gallery-carousel.active"
        );
        if (firstCarousel) startAutoSlide(firstCarousel);

        galleryTabs.forEach((tab) => {
            tab.addEventListener("click", () => {
                galleryTabs.forEach((t) => t.classList.remove("active"));
                galleryCarousels.forEach((carousel) =>
                    carousel.classList.remove("active")
                );

                tab.classList.add("active");
                const target = tab.dataset.target;
                const targetCarousel = document.getElementById(target);

                if (targetCarousel) {
                    targetCarousel.classList.add("active");
                    const track = targetCarousel.querySelector(".carousel-track");
                    if (track) track.style.transform = `translateX(0%)`;
                    startAutoSlide(targetCarousel);
                }
            });
        });

        function startAutoSlide(carousel) {
            const track = carousel.querySelector(".carousel-track");
            const slides = track.querySelectorAll("img");
            const thumbs = carousel.querySelectorAll(".thumbnail-track img");
            let index = 0;

            function updateSlide(idx) {
                track.style.transform = `translateX(-${idx * 100}%)`;
                thumbs.forEach((thumb, i) => {
                    thumb.classList.toggle("active-thumb", i === idx);
                });
            }

            clearInterval(activeInterval);
            updateSlide(index);

            activeInterval = setInterval(() => {
                index = (index + 1) % slides.length;
                updateSlide(index);
            }, 3000);

            thumbs.forEach((thumb, i) => {
                thumb.addEventListener("click", () => {
                    clearInterval(activeInterval);
                    index = i;
                    updateSlide(index);
                    startAutoSlide(carousel);
                });
            });
        }
    });
    </script>

    <script>
    // Video Modal Logic
    const demoBtn = document.getElementById("get-demo-btn");
    const modal = document.getElementById("demoModal");
    const closeModal = document.querySelector(".modal .close");

    demoBtn.addEventListener("click", () => {
        modal.style.display = "flex";
    });

    closeModal.addEventListener("click", () => {
        modal.style.display = "none";
        // Stop video playback
        modal.querySelector("iframe").src = modal.querySelector("iframe").src;
    });

    // Next Button
    document.getElementById("next-btn").addEventListener("click", () => {
        window.open("/multim2/pages/signup.php", "_blank");
    });
    </script>

    <!--API Integration-->
    <script>
    const apiData = [{
            category: "Shipping & Logistics",
            desc: "Track parcels, calculate rates, manage couriers",
            icon: "fa-truck-fast",
        },
        {
            category: "Payment Gateway",
            desc: "Online payments, refunds, subscriptions",
            icon: "fa-credit-card",
        },
        {
            category: "SMS & Communication",
            desc: "Send OTPs, alerts, notifications",
            icon: "fa-comment-dots",
        },
        {
            category: "eCommerce / Commerce",
            desc: "Manage products, orders, catalogs",
            icon: "fa-cart-shopping",
        },
        {
            category: "CRM",
            desc: "Customer records, sales tracking, automation",
            icon: "fa-user-tie",
        },
        {
            category: "Social Media",
            desc: "Fetch posts, analytics, publish content",
            icon: "fa-hashtag",
        },
        {
            category: "Maps & Location",
            desc: "Geolocation, distance, places, routing",
            icon: "fa-location-dot",
        },
        {
            category: "Weather",
            desc: "Current weather, forecasts, historical data",
            icon: "fa-cloud-sun",
        },
        {
            category: "Analytics & Tracking",
            desc: "Website/app traffic, heatmaps",
            icon: "fa-chart-line",
        },
        {
            category: "File Storage",
            desc: "Upload, access, manage files securely",
            icon: "fa-folder-open",
        },
        {
            category: "Auth & Identity",
            desc: "Login systems, OAuth, biometric auth",
            icon: "fa-user-lock",
        },
        {
            category: "Chat & Messaging",
            desc: "Live chat, bots, in-app messages",
            icon: "fa-comments",
        },
        {
            category: "Inventory & ERP",
            desc: "Warehouse, supply chain, availability",
            icon: "fa-warehouse",
        },
        {
            category: "Mobile Backend (MBaaS)",
            desc: "Push notifications, backend sync",
            icon: "fa-mobile-screen-button",
        },
        {
            category: "Digital Hoardings",
            desc: "Digital billboard APIs",
            icon: "fa-rectangle-ad",
        },
        {
            category: "BBPS",
            desc: "Billing services APIs",
            icon: "fa-file-invoice-dollar",
        },
    ];

    const perPage = 4;
    let currentPage = 1;

    const container = document.getElementById("apiContainer");
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");
    const pageIndicator = document.getElementById("pageIndicator");

    function renderAPIs() {
        container.innerHTML = "";
        const start = (currentPage - 1) * perPage;
        const end = start + perPage;
        const pageItems = apiData.slice(start, end);

        pageItems.forEach((api, index) => {
            const card = document.createElement("div");
            card.className = `each pos-${index + 1}`;
            if (index < 2) {
                // Top row: heading > paragraph > icon
                card.innerHTML = `
        <h2>${api.category}</h2>
        <p>${api.desc}</p>
        <i class="fa-solid ${api.icon}"></i>
      `;
            } else {
                // Bottom row: icon > heading > paragraph
                card.innerHTML = `
        <i class="fa-solid ${api.icon}"></i>
        <h2>${api.category}</h2>
        <p>${api.desc}</p>
      `;
            }
            container.appendChild(card);
        });

        pageIndicator.textContent = `Page ${currentPage} of ${Math.ceil(
          apiData.length / perPage
        )}`;
        prevBtn.disabled = currentPage === 1;
        nextBtn.disabled = currentPage === Math.ceil(apiData.length / perPage);
    }

    prevBtn.onclick = () => {
        if (currentPage > 1) {
            currentPage--;
            renderAPIs();
        }
    };

    nextBtn.onclick = () => {
        if (currentPage < Math.ceil(apiData.length / perPage)) {
            currentPage++;
            renderAPIs();
        }
    };

    renderAPIs();
    </script>
</body>

</html>