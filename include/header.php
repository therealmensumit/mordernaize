<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <title>Digital Agency | Modernized Marketing</title>
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css?v=<?= time(); ?>">
</head>

<body>
    <header class="py-md-4 fixed-top w-100">
        <nav class="navbar">
            <div class="container">
                <a class="navbar-brand" href="./">
                    <img src="assets/img/dark-logo.png" alt="Logo" class="mix-diff" width="60" />
                </a>
                <button class="border-0 navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 65 39" fill="none" class="mix-diff">
                        <path d="M0 2H65" stroke="#000000" stroke-width="3"></path>
                        <path d="M0 20H65" stroke="#000000" stroke-width="3"></path>
                        <path d="M0 37H37" stroke="#000000" stroke-width="3"></path>
                    </svg>
                </button>
                <div class="offcanvas offcanvas-top h-100" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="--bs-offcanvas-transition: transform 0.5s ease-in-out;">
                    <div class="overlay">
                        <div class="offcanvas-header p-4">
                            <button type="button" class="ms-auto z-1 btn-close opacity-100" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body position-relative z-1">
                            <div class="offcanvas-container container">
                                <div class="d-flex flex-wrap gap-3 justify-content-between">
                                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                        <li class="nav-item">
                                            <a class="nav-link" href="./">Home</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Our Services
                                                <svg width="28" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                                    <path d="M13.1717 12.0007L8.22192 7.05093L9.63614 5.63672L16.0001 12.0007L9.63614 18.3646L8.22192 16.9504L13.1717 12.0007Z"></path>
                                                </svg>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="./services">Paid Media</a></li>
                                                <li><a class="dropdown-item" href="./services">Branding</a></li>
                                                <li><a class="dropdown-item" href="./services">Content Creation</a></li>
                                                <li><a class="dropdown-item" href="./services">Web Development</a></li>
                                                <li><a class="dropdown-item" href="./services">Social Media</a></li>
                                                <li><a class="dropdown-item" href="./services">Email Marketing</a></li>
                                                <li><a class="dropdown-item" href="./services">SEO</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="./financial-firms">Financial Firms</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="./blog">Blog</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="./about-us">About Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Contact Us</a>
                                        </li>
                                    </ul>
                                    <div class="align-self-end text-center text-md-end fs-13">
                                        <img src="assets/img/color-logo.png" alt="Logo" class="mw-100 mb-3 d-none d-md-inline-block" height="53" />
                                        <p class="mb-1 d-none d-md-block">
                                            <small>547 NW 28TH ST MIAMI FL 33127</small>
                                        </p>
                                        <p class="d-none d-md-block">
                                            <small>
                                                <a href="mailto:admin@modernizedmarketing.com">admin@modernizedmarketing.com</a>
                                            </small>
                                        </p>
                                        <div class="d-flex gap-4 justify-content-lg-end justify-content-center social-links">
                                            <a href="#">
                                                <svg width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z" />
                                                </svg>
                                            </a>
                                            <a href="#">
                                                <svg width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                                </svg>
                                            </a>
                                            <a href="#">
                                                <svg width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>