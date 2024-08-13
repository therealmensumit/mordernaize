<?php include_once('include/header.php') ?>

<section class="py-5 bg-black">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12 col-lg-10 col-xl-7 mx-auto pt-4 mt-5 text-center text-white">
                <h1 class="display-3 fw-bold text-voilet">Blog & News</h1>
                <p class="fs-5">Welcome To Our Marketing Insights Blog & News Unlock The Secrets To Success In The Evolving World Of Marketing</p>
            </div>
            <div class="col-12">
                <div class="row gy-4">
                    <?php for ($i = 0; $i < 5; $i++) { ?>
                        <div class="col-md-4">
                            <div class="card border-0">
                                <img src="https://modernizedmarketing.com/wp-content/uploads/2024/06/b5392bb0-7d69-4753-94c5-3f0ae24afeca.jpg" class="card-img-top object-fit-cover" height="355" />
                                <div class="card-body bg-dark text-white">
                                    <h5 class="card-title fw-bold text-voilet">Facebook Ads Agency: what are the latest updates?</h5>
                                    <p class="card-text text-secondary">June 4, 2024 No Comments</p>
                                    <a href="#" class="btn d-block">Read More</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once('include/footer.php') ?>