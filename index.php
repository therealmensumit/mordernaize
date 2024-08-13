<?php include_once('include/header.php') ?>

<section class="hero overlay min-vh-100 d-flex align-items-center justify-content-between">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 mx-auto text-center">
                <div class="h2 mb-0 text-black fw-bold">Let's Build Your Brand with Innovative</div>
                <div id="typewriter" class="huge-font text-pink d-inline-block fw-bold mb-3"></div>
                <p class="h5 fw-normal mb-4"><strong class="fw-bold">We elevate brands through effective 360° digital services</strong> and bold ideas that drive success.</p>
                <a href="#">
                    <button class="btn btn-primary">
                        <span>
                            <svg width="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M156.6 384.9L125.7 354c-8.5-8.5-11.5-20.8-7.7-32.2c3-8.9 7-20.5 11.8-33.8L24 288c-8.6 0-16.6-4.6-20.9-12.1s-4.2-16.7 .2-24.1l52.5-88.5c13-21.9 36.5-35.3 61.9-35.3l82.3 0c2.4-4 4.8-7.7 7.2-11.3C289.1-4.1 411.1-8.1 483.9 5.3c11.6 2.1 20.6 11.2 22.8 22.8c13.4 72.9 9.3 194.8-111.4 276.7c-3.5 2.4-7.3 4.8-11.3 7.2l0 82.3c0 25.4-13.4 49-35.3 61.9l-88.5 52.5c-7.4 4.4-16.6 4.5-24.1 .2s-12.1-12.2-12.1-20.9l0-107.2c-14.1 4.9-26.4 8.9-35.7 11.9c-11.2 3.6-23.4 .5-31.8-7.8zM384 168a40 40 0 1 0 0-80 40 40 0 1 0 0 80z" />
                            </svg>
                        </span>
                        Empower Your Marketing
                    </button>
                </a>
                <button class="wheel" id="scrollButton">
                    <div class="wheel-cursor"></div>
                </button>
            </div>
        </div>
    </div>
</section>

<section class="overflow-hidden" id="video-section">
    <video autoplay loop muted width="100%" height="100%" style="margin-bottom: -7px">
        <source src="assets/vid/MM_New360video_16x9_wide-2.mp4" type="image/mp4">
        <source src="assets/vid/MM_New360video_16x9_wide-2.mp4" type="video/ogg">
    </video>
</section>

<section class="py-5 bg-black">
    <div class="container py-lg-5 mt-lg-5">
        <div class="row g-5">
            <div class="col-lg-5 text-white">
                <div class="sticky-top" style="top: 10%">
                    <h2 class="title-2 text-center text-lg-start pb-4 mb-4 border-bottom border-white text-voilet fw-bold">Together
                        <span class="d-lg-block text-stroke">We Create</span>
                    </h2>
                    <p class="mb-4">Driven by your growth, we lead innovation with the most advanced solutions.</p>
                    <img src="assets/img/badge-modernized.webp" alt="Badge" width="200" height="200" class="rounded-animation" />
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1">
                <?php
                $data['title'] = array(
                    'Branding',
                    'Social Media',
                    'Content Creation',
                    'Web Development',
                    'Email Marketing',
                    'Paid Media',
                    'SEO'
                );
                $data['para'] = array(
                    'We craft powerful brands with strategic vision and a captivating identity.',
                    'We craft social media strategies, create and curate engaging content, manage your online community, and deliver insightful analytics.',
                    'We craft captivating campaigns that resonate and convert.',
                    'We build stunning websites tailored to your unique needs.',
                    'We design personalized email campaigns that nurture leads and enhance customer loyalty.',
                    'We drive results with strategic ad placements across platforms.',
                    'Be seen, be chosen. Optimize your online presence for top search engine visibility.'
                );
                foreach ($data['title'] as $key => $title) {
                    $para = $data['para'][$key];
                ?>
                    <div class="box text-white">
                        <div class="icon">
                            <svg height="50" fill="var(--voilet)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M80 104a24 24 0 1 0 0-48 24 24 0 1 0 0 48zm80-24c0 32.8-19.7 61-48 73.3l0 87.8c18.8-10.9 40.7-17.1 64-17.1l96 0c35.3 0 64-28.7 64-64l0-6.7C307.7 141 288 112.8 288 80c0-44.2 35.8-80 80-80s80 35.8 80 80c0 32.8-19.7 61-48 73.3l0 6.7c0 70.7-57.3 128-128 128l-96 0c-35.3 0-64 28.7-64 64l0 6.7c28.3 12.3 48 40.5 48 73.3c0 44.2-35.8 80-80 80s-80-35.8-80-80c0-32.8 19.7-61 48-73.3l0-6.7 0-198.7C19.7 141 0 112.8 0 80C0 35.8 35.8 0 80 0s80 35.8 80 80zm232 0a24 24 0 1 0 -48 0 24 24 0 1 0 48 0zM80 456a24 24 0 1 0 0-48 24 24 0 1 0 0 48z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="mb-0 text-voilet fw-bold"><?= $title ?></h3>
                            <p><?= $para ?></p>
                            <a href="#">Read More
                                <svg height="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M16.0037 9.41421L7.39712 18.0208L5.98291 16.6066L14.5895 8H7.00373V6H18.0037V17H16.0037V9.41421Z"></path>
                                </svg>
                            </a>
                        </div>

                        <div class="hover-watermark">
                            <svg height="60" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFFFFF30">
                                <path d="M16.0037 9.41421L7.39712 18.0208L5.98291 16.6066L14.5895 8H7.00373V6H18.0037V17H16.0037V9.41421Z"></path>
                            </svg>
                        </div>
                    </div>
                <?php } ?>

                <div class="p-4 p-lg-5 rounded-5 ctc-card mb-5">
                    <img src="assets/img/color-logo.png" alt="Logo" width="60" />
                    <h3 class="text-black fw-bold mb-0">How can we help you?</h3>
                    <a href="#">
                        <button class="btn btn-primary">
                            <span>
                                <svg width="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M156.6 384.9L125.7 354c-8.5-8.5-11.5-20.8-7.7-32.2c3-8.9 7-20.5 11.8-33.8L24 288c-8.6 0-16.6-4.6-20.9-12.1s-4.2-16.7 .2-24.1l52.5-88.5c13-21.9 36.5-35.3 61.9-35.3l82.3 0c2.4-4 4.8-7.7 7.2-11.3C289.1-4.1 411.1-8.1 483.9 5.3c11.6 2.1 20.6 11.2 22.8 22.8c13.4 72.9 9.3 194.8-111.4 276.7c-3.5 2.4-7.3 4.8-11.3 7.2l0 82.3c0 25.4-13.4 49-35.3 61.9l-88.5 52.5c-7.4 4.4-16.6 4.5-24.1 .2s-12.1-12.2-12.1-20.9l0-107.2c-14.1 4.9-26.4 8.9-35.7 11.9c-11.2 3.6-23.4 .5-31.8-7.8zM384 168a40 40 0 1 0 0-80 40 40 0 1 0 0 80z" />
                                </svg>
                            </span> Let's get in touch!
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="top-choice py-5">
    <div class="container py-lg-4 my-lg-5">
        <div class="row">
            <div class="col-12 text-center text-white mb-5">
                <div class="h2 mt-5 pt-5 fw-bold">WE'RE THE TOP CHOICE FOR</div>
                <div class="huge-font d-inline-block lh-1 fw-bold mb-3">Fintech</div>
                <p class="fs-5">Together, we craft bespoke digital strategies fueled by AI, data, and creativity to skyrocket your brand.</p>
                <a href="#">
                    <button class="btn btn-default">
                        <span>
                            <svg width="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M156.6 384.9L125.7 354c-8.5-8.5-11.5-20.8-7.7-32.2c3-8.9 7-20.5 11.8-33.8L24 288c-8.6 0-16.6-4.6-20.9-12.1s-4.2-16.7 .2-24.1l52.5-88.5c13-21.9 36.5-35.3 61.9-35.3l82.3 0c2.4-4 4.8-7.7 7.2-11.3C289.1-4.1 411.1-8.1 483.9 5.3c11.6 2.1 20.6 11.2 22.8 22.8c13.4 72.9 9.3 194.8-111.4 276.7c-3.5 2.4-7.3 4.8-11.3 7.2l0 82.3c0 25.4-13.4 49-35.3 61.9l-88.5 52.5c-7.4 4.4-16.6 4.5-24.1 .2s-12.1-12.2-12.1-20.9l0-107.2c-14.1 4.9-26.4 8.9-35.7 11.9c-11.2 3.6-23.4 .5-31.8-7.8zM384 168a40 40 0 1 0 0-80 40 40 0 1 0 0 80z" />
                            </svg>
                        </span> Learn More
                    </button>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="innovate-section overlay py-5">
    <div class="container mt-lg-5 py-lg-5">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center text-black">
                <div class="display-3 fw-bold text-voilet">We think to innovate</div>
                <div class="display-6 fw-bold mb-3">and we execute to succeed</div>
                <p class="fs-4">Stop wasting resources on marketing that doesn’t work. We build strategies that combine creativity with vision, leading to measurable&nbsp;results.</p>
                <a href="#">
                    <button class="btn btn-primary">
                        <span>
                            <svg width="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M156.6 384.9L125.7 354c-8.5-8.5-11.5-20.8-7.7-32.2c3-8.9 7-20.5 11.8-33.8L24 288c-8.6 0-16.6-4.6-20.9-12.1s-4.2-16.7 .2-24.1l52.5-88.5c13-21.9 36.5-35.3 61.9-35.3l82.3 0c2.4-4 4.8-7.7 7.2-11.3C289.1-4.1 411.1-8.1 483.9 5.3c11.6 2.1 20.6 11.2 22.8 22.8c13.4 72.9 9.3 194.8-111.4 276.7c-3.5 2.4-7.3 4.8-11.3 7.2l0 82.3c0 25.4-13.4 49-35.3 61.9l-88.5 52.5c-7.4 4.4-16.6 4.5-24.1 .2s-12.1-12.2-12.1-20.9l0-107.2c-14.1 4.9-26.4 8.9-35.7 11.9c-11.2 3.6-23.4 .5-31.8-7.8zM384 168a40 40 0 1 0 0-80 40 40 0 1 0 0 80z" />
                            </svg>
                        </span> Let's get in touch!
                    </button>
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="row gy-4 shade">
            <div class="col-md-4">
                <div class="carousel-container">
                    <div class="d-flex gap-5 flex-column carousel">
                        <img src="assets/img/TOP-ONE-1.webp" alt="Slide" class="img-fluid" />
                        <img src="assets/img/TOP-ONE-1.webp" alt="Slide" class="img-fluid" />
                        <img src="assets/img/TOP-ONE-1.webp" alt="Slide" class="img-fluid" />
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-md-5">
                <div class="carousel-container">
                    <div class="d-flex gap-5 flex-column carousel reverse-anim">
                        <img src="assets/img/TOP-ONE-1.webp" alt="Slide" class="img-fluid" />
                        <img src="assets/img/TOP-ONE-1.webp" alt="Slide" class="img-fluid" />
                        <img src="assets/img/TOP-ONE-1.webp" alt="Slide" class="img-fluid" />
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="carousel-container">
                    <div class="d-flex gap-5 flex-column carousel">
                        <img src="assets/img/TOP-ONE-1.webp" alt="Slide" class="img-fluid" />
                        <img src="assets/img/TOP-ONE-1.webp" alt="Slide" class="img-fluid" />
                        <img src="assets/img/TOP-ONE-1.webp" alt="Slide" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-black py-5">
    <div class="container py-lg-5 mt-lg-5">
        <div class="row gy-4">
            <div class="col-12 text-white">
                <h2 class="lh-sm mb-3 display-5 fw-bold text-voilet">Our innovative strategies
                    <span class="d-lg-block">drive exceptional client success.</span>
                </h2>
                <p class="fs-4">We’ve consistently delivered remarkable growth and outstanding results, reflecting our dedication, creativity, and pursuit of excellence.</p>
            </div>
            <div class="col-12">
                <div class="num-count py-4 px-1 border-bottom border-secondary">
                    <div class="row align-items-center text-voilet">
                        <div class="col-md-3 col-lg-2 display-5 fw-bold text-white">135M+</div>
                        <div class="col-md-7 h2 mb-0 fw-normal">Ad Revenue</div>
                        <div class="col-md-2 ms-auto text-end">
                            <svg height="50" fill="var(--voilet)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M320 96L192 96 144.6 24.9C137.5 14.2 145.1 0 157.9 0L354.1 0c12.8 0 20.4 14.2 13.3 24.9L320 96zM192 128l128 0c3.8 2.5 8.1 5.3 13 8.4C389.7 172.7 512 250.9 512 416c0 53-43 96-96 96L96 512c-53 0-96-43-96-96C0 250.9 122.3 172.7 179 136.4c0 0 0 0 0 0s0 0 0 0c4.8-3.1 9.2-5.9 13-8.4zm84 88c0-11-9-20-20-20s-20 9-20 20l0 14c-7.6 1.7-15.2 4.4-22.2 8.5c-13.9 8.3-25.9 22.8-25.8 43.9c.1 20.3 12 33.1 24.7 40.7c11 6.6 24.7 10.8 35.6 14l1.7 .5c12.6 3.8 21.8 6.8 28 10.7c5.1 3.2 5.8 5.4 5.9 8.2c.1 5-1.8 8-5.9 10.5c-5 3.1-12.9 5-21.4 4.7c-11.1-.4-21.5-3.9-35.1-8.5c-2.3-.8-4.7-1.6-7.2-2.4c-10.5-3.5-21.8 2.2-25.3 12.6s2.2 21.8 12.6 25.3c1.9 .6 4 1.3 6.1 2.1c0 0 0 0 0 0s0 0 0 0c8.3 2.9 17.9 6.2 28.2 8.4l0 14.6c0 11 9 20 20 20s20-9 20-20l0-13.8c8-1.7 16-4.5 23.2-9c14.3-8.9 25.1-24.1 24.8-45c-.3-20.3-11.7-33.4-24.6-41.6c-11.5-7.2-25.9-11.6-37.1-15c0 0 0 0 0 0l-.7-.2c-12.8-3.9-21.9-6.7-28.3-10.5c-5.2-3.1-5.3-4.9-5.3-6.7c0-3.7 1.4-6.5 6.2-9.3c5.4-3.2 13.6-5.1 21.5-5c9.6 .1 20.2 2.2 31.2 5.2c10.7 2.8 21.6-3.5 24.5-14.2s-3.5-21.6-14.2-24.5c-6.5-1.7-13.7-3.4-21.1-4.7l0-13.9z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="num-count py-4 px-1 border-bottom border-secondary">
                    <div class="row align-items-center text-voilet">
                        <div class="col-md-3 col-lg-2 display-5 fw-bold text-white">16M+</div>
                        <div class="col-md-7 h2 mb-0 fw-normal">Ad Spend</div>
                        <div class="col-md-2 ms-auto text-end">
                            <svg height="50" fill="var(--voilet)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M323.8 34.8c-38.2-10.9-78.1 11.2-89 49.4l-5.7 20c-3.7 13-10.4 25-19.5 35l-51.3 56.4c-8.9 9.8-8.2 25 1.6 33.9s25 8.2 33.9-1.6l51.3-56.4c14.1-15.5 24.4-34 30.1-54.1l5.7-20c3.6-12.7 16.9-20.1 29.7-16.5s20.1 16.9 16.5 29.7l-5.7 20c-5.7 19.9-14.7 38.7-26.6 55.5c-5.2 7.3-5.8 16.9-1.7 24.9s12.3 13 21.3 13L448 224c8.8 0 16 7.2 16 16c0 6.8-4.3 12.7-10.4 15c-7.4 2.8-13 9-14.9 16.7s.1 15.8 5.3 21.7c2.5 2.8 4 6.5 4 10.6c0 7.8-5.6 14.3-13 15.7c-8.2 1.6-15.1 7.3-18 15.2s-1.6 16.7 3.6 23.3c2.1 2.7 3.4 6.1 3.4 9.9c0 6.7-4.2 12.6-10.2 14.9c-11.5 4.5-17.7 16.9-14.4 28.8c.4 1.3 .6 2.8 .6 4.3c0 8.8-7.2 16-16 16l-97.5 0c-12.6 0-25-3.7-35.5-10.7l-61.7-41.1c-11-7.4-25.9-4.4-33.3 6.7s-4.4 25.9 6.7 33.3l61.7 41.1c18.4 12.3 40 18.8 62.1 18.8l97.5 0c34.7 0 62.9-27.6 64-62c14.6-11.7 24-29.7 24-50c0-4.5-.5-8.8-1.3-13c15.4-11.7 25.3-30.2 25.3-51c0-6.5-1-12.8-2.8-18.7C504.8 273.7 512 257.7 512 240c0-35.3-28.6-64-64-64l-92.3 0c4.7-10.4 8.7-21.2 11.8-32.2l5.7-20c10.9-38.2-11.2-78.1-49.4-89zM32 192c-17.7 0-32 14.3-32 32L0 448c0 17.7 14.3 32 32 32l64 0c17.7 0 32-14.3 32-32l0-224c0-17.7-14.3-32-32-32l-64 0z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="num-count py-4 px-1 border-bottom border-secondary">
                    <div class="row align-items-center text-voilet">
                        <div class="col-md-3 col-lg-2 display-5 fw-bold text-white">40+</div>
                        <div class="col-md-7 h2 mb-0 fw-normal">Clients Trust Us</div>
                        <div class="col-md-2 ms-auto text-end">
                            <svg height="50" fill="var(--voilet)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8l0-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5l0 3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20-.1-.1s0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5l0 3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2l0-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="mt-5 pt-lg-4 px-lg-5">
                    <div id="imgCarousel" class="swiper carousele-img">
                        <div class="swiper-wrapper text-center">
                            <div class="swiper-slide">
                                <img src="https://modernizedmarketing.com/wp-content/uploads/2024/07/image-55.png" alt="" class="img-fluid" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://modernizedmarketing.com/wp-content/uploads/2024/07/image-52.png" alt="" class="img-fluid" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://modernizedmarketing.com/wp-content/uploads/2024/07/image-50.png" alt="" class="img-fluid" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://modernizedmarketing.com/wp-content/uploads/2024/07/image-48.png" alt="" class="img-fluid" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://modernizedmarketing.com/wp-content/uploads/2024/07/Logos-Clientes-TOPONE-TRADER-1.png" alt="" class="img-fluid" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://modernizedmarketing.com/wp-content/uploads/2024/07/Logos-Clientes-Toptier-1.png" alt="" class="img-fluid" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://modernizedmarketing.com/wp-content/uploads/2024/07/EPFX-Logo-White-1.png" alt="" class="img-fluid" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://modernizedmarketing.com/wp-content/uploads/2024/07/fip_logo_white_1000_324-1.png" alt="" class="img-fluid" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://modernizedmarketing.com/wp-content/uploads/2024/07/Frame.png" alt="" class="img-fluid" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://modernizedmarketing.com/wp-content/uploads/2024/07/Group-171.png" alt="" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="side-icons d-none d-md-grid">
    <a href="#" target="_blank">
        <svg widht="15" height="15" fill="var(--voilet)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
            <path d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
        </svg>
    </a>
    <a href="#" target="_blank">
        <svg widht="15" height="15" fill="var(--voilet)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
        </svg>
    </a>
    <a href="#" target="_blank">
        <svg widht="15" height="15" fill="var(--voilet)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z" />
        </svg>
    </a>
</div>

<?php include_once('include/footer.php') ?>