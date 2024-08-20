<?php include_once('include/header.php') ?>

<section class="overlay py-5 d-flex align-items-center ">
    <div class="container py-lg-5">
        <div class="row gy-4 gy-lg-5">
            <div class="col-12 col-lg-8 offset-lg-2 text-center">
                <h1 class="display-2 fw-bold lh-1 mb-4 text-pink">Ready for Innovative Solutions to Drive Your Growth?</h1>
                <p class="mb-4">
                    <strong>Book a meeting today!</strong>
                </p>

                <!-- Calendly inline widget begin -->
                <div class="calendly-inline-widget" data-url="https://calendly.com/sumit-fxcareers/30min" style="width:100%;height:600px;"></div>
                <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
                <!-- Calendly inline widget end -->
            </div>

            <?php
            $data['icon'] = array(
                '<path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />',
                '<path d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120l0 136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2 280 120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/>',
                '<path d="M64 112c-8.8 0-16 7.2-16 16l0 22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1l0-22.1c0-8.8-7.2-16-16-16L64 112zM48 212.2L48 384c0 8.8 7.2 16 16 16l384 0c8.8 0 16-7.2 16-16l0-171.8L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64l384 0c35.3 0 64 28.7 64 64l0 256c0 35.3-28.7 64-64 64L64 448c-35.3 0-64-28.7-64-64L0 128z"/>'
            );
            $data['title'] = array(
                "Main Office",
                "Office Hour",
                "Email Us"
            );
            $data['desc'] = array(
                "547 NW 28TH ST MIAMI FL 33127",
                "Monday - Friday <br/>9AM - 6PM EST",
                "admin@modernizedmarketing.com"
            );

            foreach ($data['title'] as $key => $title) {
                $desc = $data['desc'][$key];
                $icon = $data['icon'][$key];
            ?>
                <div class="col-md-4">
                    <div class="help-box card text-center h-100 border-black">
                        <div class="card-body">
                            <svg fill="var(--voilet)" height="30" width="40" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <?= $icon; ?>
                            </svg>
                            <h5 class="h6 lh-1 mt-4 mb-2 fw-bold text-gray card-title"><?= $title; ?></h5>
                            <p class="card-text"><?= $desc; ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>


<?php include_once('include/footer.php') ?>
<!-- eyJraWQiOiIxY2UxZTEzNjE3ZGNmNzY2YjNjZWJjY2Y4ZGM1YmFmYThhNjVlNjg0MDIzZjdjMzJiZTgzNDliMjM4MDEzNWI0IiwidHlwIjoiUEFUIiwiYWxnIjoiRVMyNTYifQ.eyJpc3MiOiJodHRwczovL2F1dGguY2FsZW5kbHkuY29tIiwiaWF0IjoxNzI0MTMyOTk5LCJqdGkiOiJjNmE3NDE4My1kZDEwLTQwZDgtYTU2Ni05YWVhNzgwNzA3NDQiLCJ1c2VyX3V1aWQiOiI2YWIwNTU0OC01MGJiLTQ5MmUtOTc2Yi1hYzM0MzJmMzFiOTMifQ.8t7ZjXxR6n8vSmGpUZcTs87aw5WMajiHt9ajIn2uRho37G3bSuBnYS40QY0Vr2LK_PXpj4zTx5EJmxe-Bw06Eg -->