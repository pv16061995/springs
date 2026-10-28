<!DOCTYPE html>
<html dir="ltr" lang="en" class="has-hover no-js not-ready">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>BST Developers | Project Details</title>
    <!-- <link rel="preconnect" href="https://storage.googleapis.com/" crossorigin> -->
    <style>
        .js.not-ready,
        .js.not-ready * {
            transition: none !important;
        }
    </style>

    <link rel="stylesheet" href="assets/stylesheets/jsSlider.css">
    <link rel="stylesheet" href="assets/stylesheets/theme.css">
    <link rel="stylesheet" href="assets/stylesheets/projects.css">
    <link rel="stylesheet" href="assets/stylesheets/investorguide.css">
    <link rel="stylesheet" href="assets/stylesheets/investorguideslider.css">
    <?php $this->load->view('common/meta'); ?>
    <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');

        if (navigator.platform.toUpperCase().indexOf('WIN') >= 0) {
            document.documentElement.classList.add('is-win');
        }
    </script>
</head>

<body data-barba="wrapper">
    <?php $this->load->view("common/preloader"); ?>
    <div class="page-content-wrapper ui-dark-background" data-barba="px-layout" data-barba-namespace="page"
        data-plugin="utmSave">
        <div class="page-content-wrapper__inner js-page-content-wrapper">
            <?php $this->load->view('common/header'); ?>

            <div class="page-content js-page-content">
                <main id="top">
                    <section class="section ui-dark" data-scroll-section
                        data-themed-class="ui-dak">
                        <div class="project-green-bhoomi ">

                            <div class="project-hero-section bgimage">
                                <div class="row row--middle-lg">
                                    <div class="col col--lg-6 col--md-6 col--12 project-hero-content pl-1">
                                        <div class="tag-container">
                                            <span class="tag-line"></span>
                                            <span class="tag-text">INVESTOR GUIDE</span>
                                        </div>
                                        <h1 class="h1  ml-1 leading-trim">
                                            A Smarter
                                        </h1>
                                          <h1 class="h1 ml-1 leading-trim">
                                            Tomorrow
                                        </h1>
                                         <h1 class="h1 ml-1 leading-trim" data-reveal="text" style="color: #d7ab3e !important;">Begins Here.</h1>

                                        <p class="fs24 leading-trim  ml-1 pt-0.5 pb-0.5">
                                            Explore opportunities, growth potential and <br> a future-ready destination with BST.
                                        </p>

                                        <!-- <div class="project-actions  ml-1 ">
                                            <a href="#" class="btn btn--primary btn--clone btn--text-small is-hidden--sm-down btn--cloned" data-plugin=" button" data-button-clone-content="true">
                                                <span class="btn__content">
                                                    <span class="btn__text btn__text--clone">
                                                       Get Investor Guide
                                                        <svg class="icon icon-arrow-right" width="14" height="16" aria-hidden="true"
                                                            viewBox="0 0 14 16" style="--icon-width: 14; --icon-height: 16;">
                                                            <use href="assets/images/icons.svg#arrow-right"
                                                                xlink:href="assets/images/icons.svg#arrow-right"></use>
                                                        </svg>
                                                    </span>
                                                </span>
                                            </a>
                                            
                                        </div> -->
                                    </div>
                                    <div class="col col--lg-6 col--md-6 col--12 project-hero-media-column pr-1">
                                      <!--   <div class="project-media project-media-hero">
                                            <div class="project-media-label">
                                                HERO IMAGE1
                                            </div> 
                                            
                                        </div>-->
                                    </div>
                                </div>
                            </div>

                            <div class="project-360 bgclwht">
                                <div class="row row--middle-lg">
                                    <div class="col col--lg-6 col--md-6 col--12 project-about-content pl-1">
                                        <div class="tag-container">
                                            <span class="tag-line"></span>
                                            <span class="tag-text" style="color: #162d24;">WHY BST?</span>
                                        </div>
                                        
                                        <h2 class="h1 leading-trim blkfc pt-1 pb-1">
                                            Built for <br>Long-Term Value
                                        </h2>
                                        <div class="project-divider"></div>
                                       
                                        <p class="fs24 blkfc leading-trim pt-0.5 pb-1">
                                            BST is a trusted real estate developer with a proven track record of delivering high-quality residential and commercial projects. With a focus on sustainable growth, we create communities that offer long-term value to investors and residents alike.
                                           At BST, we create more than just real estate. We build future-ready communities with thoughtful planning, modern infrastructure and a vision for sustained growth.
                                        </p>
                                        <div class="project-actions">
                                            <!-- <a href="#" class="btn btn--primary btn--clone btn--text-small is-hidden--sm-down btn--cloned mb-0.5" data-plugin=" button" data-button-clone-content="true">
                                                <span class="btn__content">
                                                    <span class="btn__text btn__text--clone">
                                                       Know More About BST
                                                        <svg class="icon icon-arrow-right" width="14" height="16" aria-hidden="true"
                                                            viewBox="0 0 14 16" style="--icon-width: 14; --icon-height: 16;">
                                                            <use href="assets/images/icons.svg#arrow-right"
                                                                xlink:href="assets/images/icons.svg#arrow-right"></use>
                                                        </svg>
                                                    </span>
                                                </span>
                                            </a> -->

                                            <a href="<?php echo base_url('about'); ?>" class="btn btn--secondary  golden mobbtngolden" 
                                                style="border:none !important;display: inline-flex; align-items: center; justify-content: center; color: #2a2f31 !important;">
                                                Know More About BST   <span class="blogs-view-arrow">&#8594;</span>         
                                            </a>
                                            
                                        </div>
                                    </div>
                                    <div class="col col--lg-6 col--md-6 col--12 pr-1">
                                        <div class="project-feature-panel">
                                            <div class="row">
                                                <div class="col col--4 project-feature-item">
                                                    <div class="project-feature-icon"><img class="iconbhiwadi" src="assets/images/svgicons/Trusted_Developer.svg" alt="Trusted Developer"></div>
                                                    <h5 class="textgreen">Trusted <br>Developer</h5>
                                                </div>
                                                <div class="col col--4 project-feature-item">
                                                    <div class="project-feature-icon"><img class="iconbhiwadi" src="assets/images/svgicons/Integrated_Development.svg" alt="Integrated Development"></div>
                                                    <h5 class="textgreen">Integrated <br>Development</h5>
                                                </div>
                                                <div class="col col--4 project-feature-item">
                                                    <div class="project-feature-icon"><img class="iconbhiwadi" src="assets/images/svgicons/Premium_Amenities.svg" alt="Premium Amenities"></div>
                                                    <h5 class="textgreen">Premium <br>Amenities</h5>
                                                </div>
                                            </div>
                                            <div class="row pt-1">
                                                
                                                <div class="col col--4 project-feature-item">
                                                    <div class="project-feature-icon"><img class="iconbhiwadi" src="assets/images/svgicons/Sustainable_Growth.svg" alt="Sustainable Growth"></div>
                                                    <h5 class="textgreen">Sustainable <br>Growth</h5>
                                                </div>
                                                <div class="col col--4 project-feature-item">
                                                    <div class="project-feature-icon"><img class="iconbhiwadi" src="assets/images/svgicons/Future_Ready_Communities.svg" alt="Future-Ready Communities"></div>
                                                    <h5 class="textgreen">Future-Ready <br>Communities</h5>
                                                </div>
                                                <div class="col col--4 project-feature-item">
                                                    <div class="project-feature-icon"><img class="iconbhiwadi" src="assets/images/svgicons/Strong_Investment_Potential.svg" alt="Investment"></div>
                                                    <h5 class="textgreen">Strong <br>Investment Potential</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col--lg-12 col--md-12 col--12 pr-1 pl-1 pt-0.5">
                                        <div class="project-feature-panel bgcolr">
                                            <div class="row">
                                                <div class="col col--3 project-feature-item">
                                                    <h5 class="textwhite">Strategic  <br>Land Bank</h5>
                                                </div>
                                                 <div class="col col--3 project-feature-item">
                                                    <h5 class="textwhite">Thoughtfully  <br>Planned Community</h5>
                                                </div>
                                                 <div class="col col--3 project-feature-item">
                                                    <h5 class="textwhite">Modern <br> Infrastructure</h5>
                                                </div>
                                                 <div class="col col--3 project-feature-item">
                                                    <h5 class="textwhite">High Growth  <br>Opportunity</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                           

                            <div class="project-advantages bgclwht">
                                 
                                <div class="row row--middle-lg">
                                   
                                   
<section class="main-section slider-container">

    <!-- LEFT: CONTENT CHANGES WITH SLIDE -->
    <div class="content">
        <div class="content-inner content-section" id="contentInner">
<span class="tag-line"></span> 
            <div class="subtitle" id="subtitle" style="color: #162d24;">
               WHY BHIWADI?
            </div>

            <h1 id="heading" class="h1 leading-trim blkfc pt-1 pb-1">
               A Location <br>
That Works Today<br>
and Tomorrow
            </h1>

            <p id="description" class="fs24 blkfc pb-1">
                Bhiwadi is emerging as one of NCR's most promising
                investment destinations with excellent connectivity,
                rapid development and strong demand for residential
                and commercial spaces.
            </p>

            <a href="#explore" class="btn btn--secondary  golden mobbtngolden" id="exploreBtn">
                Explore BHIWADI &rarr;
            </a>

        </div>
    </div>

    <!-- RIGHT: THREE VISIBLE IMAGES -->
    <div class="slider-area ">

        <div class="vertical-slider" id="verticalSlider">
            <div class="vertical-track" id="verticalTrack">

                <div class="slide">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=900&q=85"
                         alt="Modern buildings">
                </div>

                <div class="slide">
                    <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=900&q=85"
                         alt="Industrial warehouse">
                </div>

                <div class="slide">
                    <img src="https://images.unsplash.com/photo-1511818966892-d7d671e672a2?auto=format&fit=crop&w=900&q=85"
                         alt="Contemporary architecture">
                </div>

                <div class="slide">
                    <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=900&q=85"
                         alt="Commercial office">
                </div>

                <div class="slide">
                    <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=900&q=85"
                         alt="Luxury residential property">
                </div>

                <div class="slide">
                    <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&w=900&q=85"
                         alt="Modern interior">
                </div>

            </div>
        </div>

        <div class="slider-buttons">
            <button type="button" id="prevBtn" aria-label="Previous slide">
                &uarr;
            </button>
            <button type="button" id="nextBtn" aria-label="Next slide">
                &darr;
            </button>
        </div>

    </div>

</section>

                                   
                                    
                                   
                                      <div class="col col--lg-12 col--md-12 col--12 pr-1 pl-1 pt-0.5">
                                        <div class="project-feature-panel">
                                            <div class="row">
                                                <div class="col col--3 project-feature-item">
                                                    <div class="project-feature-icon"><img class="iconbhiwadi" src="assets/images/svgicons/Excellent_Connectivity.svg" alt="Excellent Connectivity"></div>
                                                    <h4>Excellent <br>Connectivity</h4>
                                                </div>
                                                 <div class="col col--3 project-feature-item">
                                                    <div class="project-feature-icon"><img class="iconbhiwadi" src="assets/images/svgicons/Growing_Industrial_and_Residential_Hub.svg" alt="Growing Industrial and Residential Hub"></div>
                                                    <h4>Growing Industrial <br>& Residential Hub </h4>
                                                </div>
                                                 <div class="col col--3 project-feature-item">
                                                    <div class="project-feature-icon"><img class="iconbhiwadi" src="assets/images/svgicons/Proximity_to_Gurugram_and_Delhi.svg" alt="Proximity to Gurugram and Delhi"></div>
                                                    <h4>Proximity to <br>Gurugram & Delhi</h4>
                                                </div>
                                                 <div class="col col--3 project-feature-item">
                                                    <div class="project-feature-icon"><img class="iconbhiwadi" src="assets/images/svgicons/Expanding_Employment_Opportunities.svg" alt="Expanding Employment Opportunities"></div>
                                                    <h4>Expanding <br>Employment Opportunities</h4>
                                                </div>
                                                 <div class="col col--3 project-feature-item">
                                                    <div class="project-feature-icon"><img class="iconbhiwadi" src="assets/images/svgicons/High_Appreciation_Potential.svg" alt="High Appreciation Potential"></div>
                                                    <h4>High <br>Appreciation Potential</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="project-advantages bgclwht">
                            <div class="gallery-container">
                                    <!-- Header -->
                                    <div class="gallery-header">
                                        <div class="header-title-wrapper">
                                            <div class="tag-container">
                                                <span class="tag-line"></span>
                                                <span class="tag-text" style="color: #162d24;">Gallery</span>
                                            </div>
                                            <h2 class="main-title" style="color: #162d24;">Explore BST Through Videos</h2>
                                        </div>
                                    
                                        <!-- <a href="#" class="view-all-btn btn btn--primary btn--clone btn--text-small is-hidden--sm-down btn--cloned " data-plugin=" button" data-button-clone-content="true">
                                            <span class="btn__content">
                                                <span class="btn__text btn__text--clone">
                                                    View All Videos
                                                    <svg class="icon icon-arrow-right" width="14" height="16" aria-hidden="true"
                                                        viewBox="0 0 14 16" style="--icon-width: 14; --icon-height: 16;">
                                                        <use href="assets/images/icons.svg#arrow-right"
                                                            xlink:href="assets/images/icons.svg#arrow-right"></use>
                                                    </svg>
                                                </span>
                                            </span>
                                        </a> -->
                                        <a href="<?php echo base_url('gallery'); ?>" class="btn btn--secondary  golden mobbtngolden" 
                                            style="border:none !important;display: inline-flex; align-items: center; justify-content: center; color: #2a2f31 !important;">
                                            View All Videos   <span class="blogs-view-arrow">&#8594;</span>         
                                        </a>
                                    </div>

                                    <!-- Asymmetric Grid Layout -->
                                    <div class="video-grid">
                                        
                                        <!-- Card 1: Masterplan Overview (Large 8 cols) -->
                                        <div class="video-card span-5" onclick="openVideoModal('BST Masterplan Overview')">
                                           <div class="vimeo-video">
                                                 <iframe
                                                    src="https://player.vimeo.com/video/1239749674?autoplay=1&muted=1&loop=1&background=1"
                                                    title="BST Masterplan Overview"
                                                    allow="autoplay; fullscreen; picture-in-picture"
                                                    allowfullscreen>
                                                </iframe>
                                            </div>
                                            <div class="card-footer">
                                                <!-- <h3 class="card-title">BST Masterplan Overview</h3> -->
                                                
                                            </div>
                                        </div>

                                        <!-- Card 2: Luxury Villas (4 cols) -->
                                        <div class="video-card span-5" onclick="openVideoModal('Luxury Villas at BST')">
                                              <div class="vimeo-video">
                                                    <iframe src="https://player.vimeo.com/video/1239749624?autoplay=1&muted=1&loop=1&background=1"
                                                        allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                            <div class="card-footer">
                                                <!-- <h3 class="card-title">Luxury Villas at BST</h3> -->
                                              
                                            </div>
                                        </div>

                                        <!-- Card 3: Amenities & Lifestyle (4 cols) -->
                                        <div class="video-card span-5" onclick="openVideoModal('Amenities & Lifestyle')">
                                                <div class="vimeo-video">
                                                    <iframe src="https://player.vimeo.com/video/1239749625?autoplay=1&muted=1&loop=1&background=1"
                                                        allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                            <div class="card-footer">
                                                <!-- <h3 class="card-title">Amenities & Lifestyle</h3> -->
                                               
                                            </div>
                                        </div>

                                        <!-- Card 4: Strategic Location (4 cols) -->
                                        <div class="video-card span-5" onclick="openVideoModal('Strategic Location - Bhiwadi')">
                                            <div class="vimeo-video">
                                                <iframe src="https://player.vimeo.com/video/1239749623?autoplay=1&muted=1&loop=1&background=1"
                                                    allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                            <div class="card-footer">
                                                <!-- <h3 class="card-title">Strategic Location - Bhiwadi</h3> -->
                                                
                                            </div>
                                        </div>

                                        <!-- Card 5: Community Living (4 cols) -->
                                        <div class="video-card span-5" onclick="openVideoModal('Community Living')">
                                            <div class="vimeo-video">
                                                <iframe src="https://player.vimeo.com/video/1239749626?autoplay=1&muted=1&loop=1&background=1"
                                                    allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                            <div class="card-footer">
                                                <!-- <h3 class="card-title">Community Living</h3> -->
                                                
                                            </div>
                                        </div>

                                    </div>
                                </div>  

                            </div>
                            <div class="project-options imgbackgrnd">
                                <div class="row row--middle-lg">
                                    <div class="col col--lg-5 col--md-5 col--12 pl-1">
                                         <div class="tag-container  pb-1">
                                            <span class="tag-line"></span>
                                            <span class="tag-text" > be a part of growth story</span>
                                        </div>
                                        <h2 class="h1 leading-trim ">Invest in a <br>Brighter Tomorrow</h2>
                                        <p>
                                           Explore investment opportunities with BST and secure <br>your place in a future-ready community.
                                        </p>
                                        <div class="project-option-action pt-1">
                                            <a href="<?php echo base_url('assets/uploads/brochure.pdf'); ?>" class="btn btn--primary btn--clone btn--text-small is-hidden--sm-down btn--cloned" data-plugin=" button" data-button-clone-content="true">
                                                <span class="btn__content">
                                                    <span class="btn__text btn__text--clone">
                                                       Download Brochure
                                                        <svg class="icon icon-arrow-right" width="14" height="16" aria-hidden="true"
                                                            viewBox="0 0 14 16" style="--icon-width: 14; --icon-height: 16;">
                                                            <use href="assets/images/icons.svg#arrow-right"
                                                                xlink:href="assets/images/icons.svg#arrow-right"></use>
                                                        </svg>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col col--lg-7 col--md-7 col--12 pr-1">
                                        <div class="project-media project-plot-image">
                                            <span> IMAGE</span>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </section>
                </main>
                <?php $this->load->view('common/footer'); ?>
            </div>
            <div class="js-modal">
                <?php $this->load->view('common/modal/callback'); ?>
                <?php $this->load->view('common/modal/favorite'); ?>
                <?php $this->load->view('common/modal/subscribe'); ?>
                <?php $this->load->view('common/modal/subscribe_penthouse'); ?>
                <?php $this->load->view('common/modal/subscribe_townhouse'); ?>
                <?php $this->load->view('common/modal/favorite_email'); ?>
                <?php $this->load->view('common/modal/menu'); ?>
                <?php $this->load->view('common/modal/menu_picker'); ?>
            </div>
        </div>
    </div>
    <?php $this->load->view('common/cookies'); ?>

    <script fetchpriority="low" async src="assets/javascripts/browser-message/browser-message.js"></script>
    <script fetchpriority="low" src="assets/javascripts/shared.js"></script>
    <script>
        var LOCALES = {
            'errors': {
                'email': 'Please enter a valid email address',
                'required': 'This field is required',
                'tel': 'Please enter a valid phone number',
                'minlength': 'Please enter at least {0} characters',
                'generic': 'Connection error, please try again',
                'genericCode': 'Error occurred, please try again',
                // Passwords don't match
                'equalTo': 'Passwords don\'t match'
            }
        };
    </script>
    <script src="assets/javascripts/blogs.js"></script>

<script>
const track = document.getElementById("verticalTrack");
const viewport = document.getElementById("verticalSlider");
const contentInner = document.getElementById("contentInner");

const subtitle = document.getElementById("subtitle");
const heading = document.getElementById("heading");
const description = document.getElementById("description");
const exploreBtn = document.getElementById("exploreBtn");

const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");

const slides = Array.from(track.children);

/*
  Exactly 2 content slides.
  Each content slide controls its own group of 3 images.
*/
const pageContent = [
    {
        subtitle: "WHY BHIWADI?",
        heading: `A Location That Works Today and Tomorrow`,
        description: "Bhiwadi is emerging as one of NCR's most promising investment destinations with excellent connectivity, rapid development and strong demand for residential and commercial spaces.",
        button: "Explore Bhiwadi",
        link: "#explore"
    },
    {
        subtitle: "Gurgaon for the Future",
        heading: "Spaces That Inspire Growth",
        description: "Gurgaon is emerging as one of NCR's most promising investment destinations with excellent connectivity, rapid development and strong demand for residential and commercial spaces.",
        button: "Discover Gurgaon",
        link: "#projects"
    }
];

let currentPage = 0;
let currentPosition = 0;
let timer;

/* Show the content associated with the selected page */
function updateContent(page) {
    contentInner.classList.add("changing");

    setTimeout(() => {
        const data = pageContent[page];

        subtitle.textContent = data.subtitle;
        heading.textContent = data.heading;
        description.textContent = data.description;
        exploreBtn.textContent = data.button + " →";
        exploreBtn.href = data.link;

        contentInner.classList.remove("changing");
    }, 300);
}

/* Show three images for each content slide */
function updateSlider() {
    const firstSlide = track.querySelector(".slide");
    const gap = parseFloat(getComputedStyle(track).gap) || 0;
    const step = firstSlide.getBoundingClientRect().height + gap;

    // Each page moves by three images
    currentPosition = currentPage * 3;

    track.style.transform =
        `translateY(-${currentPosition * step}px)`;

    updateContent(currentPage);
}

/* Only two pages */
function nextPage() {
    currentPage = (currentPage + 1) % 2;
    updateSlider();
}

function prevPage() {
    currentPage = (currentPage - 1 + 2) % 2;
    updateSlider();
}

nextBtn.addEventListener("click", () => {
    nextPage();
    restartAutoSlide();
});

prevBtn.addEventListener("click", () => {
    prevPage();
    restartAutoSlide();
});

/* Clicking an image selects its corresponding page */
track.addEventListener("click", event => {
    const slide = event.target.closest(".slide");
    if (!slide) return;

    const index = slides.indexOf(slide);
    currentPage = index < 3 ? 0 : 1;

    updateSlider();
    restartAutoSlide();
});

/* Automatic change every 5 seconds */
function startAutoSlide() {
    clearInterval(timer);
    timer = setInterval(nextPage, 6000);
}

function restartAutoSlide() {
    startAutoSlide();
}


viewport.addEventListener("mouseenter", () => clearInterval(timer));
viewport.addEventListener("mouseleave", startAutoSlide);

window.addEventListener("resize", updateSlider);

updateSlider();
startAutoSlide();
</script>

<script src="https://player.vimeo.com/api/player.js"></script>

<script>
document.querySelectorAll('.vimeo-video').forEach(function (container) {
    const iframe = container.querySelector('iframe');
    const player = new Vimeo.Player(iframe);

    container.addEventListener('mouseenter', function () {
        player.play();
    });

    container.addEventListener('mouseleave', function () {
        player.pause();
    });
});
<script>
function openVideoModal(event, title, videoId) {
    if (event) {
        event.preventDefault();
        event.stopPropagation();
    }

    const modal = document.getElementById('videoModal');
    const frame = document.getElementById('modalVideoFrame');

    frame.title = title;

    frame.src =
        'https://player.vimeo.com/video/' +
        videoId +
        '?autoplay=1&title=0&byline=0&portrait=0';

    modal.classList.add('active');
    modal.setAttribute('aria-hidden', 'false');
    document.body.classList.add('video-modal-open');
}

function closeVideoModal() {
    const modal = document.getElementById('videoModal');
    const frame = document.getElementById('modalVideoFrame');

    modal.classList.remove('active');
    modal.setAttribute('aria-hidden', 'true');

    // Stop playback when closing
    frame.src = '';

    document.body.classList.remove('video-modal-open');
}

// Close with Escape
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        closeVideoModal();
    }
});

// Close when clicking the modal background
document.getElementById('videoModal').addEventListener('click', function(event) {
    if (event.target === this) {
        closeVideoModal();
    }
});
</script>


</body>

</html>