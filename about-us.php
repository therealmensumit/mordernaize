<?php include_once('include/header.php') ?>

<section class="py-5 bg-black text-white">
    <div class="container mt-lg-5 pt-lg-5">
        <div class="row gy-4">
            <div class="col-12 col-lg-10 col-xl-7 mx-auto mt-5 pt-5 text-center">
                <h1 class="display-1 fw-bold lh-1">
                    <span class="text-pink d-block">Meet </span>The Innovator
                </h1>
                <div class="fs-4 text-pink fw-bold my-3">PRESIDENT AND FOUNDER</div>
                <p class="fs-5 mb-5">Modernized Marketing’s president, Andrés Vallejo, leads with a clear vision, guiding our team to propel brands towards digital excellence.</p>
            </div>
            <div class="col-12 col-lg-10 offset-lg-1">
                <div class="bg-dark rounded-5 p-4">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-lg-5 mx-auto">
                            <img src="https://modernizedmarketing.com/wp-content/uploads/2024/07/Andres-768x1152.webp" alt="About" class="img-fluid">
                        </div>
                        <div class="col-md-6 offset-lg-1">
                            <h2 class="mb-0 display-4 fw-bold text-voilet">Andres Vallejo</h2>
                            <h5 class="mb-3">President</h5>
                            <p>Andres Vallejo is the visionary behind Modernized Marketing, dedicated to revolutionizing how technology-driven companies grow and thrive in today’s competitive market. Passionate about technology and innovation, Andres has devoted his career to creating solutions that empower early-stage startups, guiding them towards success with confidence and strategy.</p>

                            <p>Known for his innovative thinking, Andres constantly explores new methods to address the challenges of the digital landscape. His direct and determined approach, combined with his deep concern for the personal and professional well-being of each team member, has been crucial in cultivating a culture focused on success and excellence.</p>

                            <p>Andres is not just a leader but also a mentor, guiding our team towards excellence and innovation. Under his guidance, we are committed to helping tech-driven companies not only survive but thrive in an ever-evolving digital world.</p>
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
        </div>
    </div>
</section>

<section class="py-5 bg-black position-relative z-0 bg-overlay">

    <video autoplay loop muted width="100%" height="100%" class="position-absolute z-0 top-0 start-0">
        <source src="./assets/vid/Y2meta.app-Loop-Background-Technology-World-Maps-Black-1080p.mp4" type="video/mp4">
        <source src="./assets/vid/Y2meta.app-Loop-Background-Technology-World-Maps-Black-1080p.mp4" type="video/ogg">
    </video>

    <div class="container py-lg-5 mt-lg-5 position-relative z-1">
        <div class="row g-5">
            <div class="col-lg-5 text-white">
                <div class="sticky-top" style="top: 10%">
                    <h2 class="title-2 text-center text-lg-start pb-4 mb-4 border-bottom border-white text-voilet fw-bold">Together
                        <span class="d-lg-block text-stroke">We Create</span>
                    </h2>
                    <p class="fw-bold mb-4">MORE THAN 30 MODERNIZED MARKETERS AROUND THE WORLD</p>
                    <img src="assets/img/badge-modernized.webp" alt="Badge" width="150" height="150" class="rounded-animation" />
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1">
                <?php
                $data['title'] = array(
                    'Our Ethos:',
                    'Our Mission',
                );
                $data['para'] = array(
                    'Just like you, we are endlessly curious and constantly exploring the ever-evolving digital landscape. Our ethos is built around experimentation and learning, boldly taking risks that others might shy away from. This drive fuels our passion to stay ahead of the curve, fostering a creative environment that sparks novel ideas and pioneering solutions.',
                    'At Modernized Marketing, we don’t just work; we create. Our mission is to bring together the precision of data and the power of creativity, crafting marketing strategies that resonate and connect on a human level. We help our clients  thrive, propelling them into a future defined by growth and sustained success.',
                );
                foreach ($data['title'] as $key => $title) {
                    $para = $data['para'][$key];
                ?>
                    <div class="box text-white border-0">
                        <h4 class="mb-0 text-voilet lh-1 fw-bold"><?= $title ?></h4>

                        <p><?= $para ?></p>

                        <div class="icon">
                            <svg height="50" fill="var(--voilet)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M80 104a24 24 0 1 0 0-48 24 24 0 1 0 0 48zm80-24c0 32.8-19.7 61-48 73.3l0 87.8c18.8-10.9 40.7-17.1 64-17.1l96 0c35.3 0 64-28.7 64-64l0-6.7C307.7 141 288 112.8 288 80c0-44.2 35.8-80 80-80s80 35.8 80 80c0 32.8-19.7 61-48 73.3l0 6.7c0 70.7-57.3 128-128 128l-96 0c-35.3 0-64 28.7-64 64l0 6.7c28.3 12.3 48 40.5 48 73.3c0 44.2-35.8 80-80 80s-80-35.8-80-80c0-32.8 19.7-61 48-73.3l0-6.7 0-198.7C19.7 141 0 112.8 0 80C0 35.8 35.8 0 80 0s80 35.8 80 80zm232 0a24 24 0 1 0 -48 0 24 24 0 1 0 48 0zM80 456a24 24 0 1 0 0-48 24 24 0 1 0 0 48z" />
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

<?php include_once('include/footer.php') ?>