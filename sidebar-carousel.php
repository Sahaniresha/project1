 <!-- Carousel Start -->
  
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/carousel-1.jpg" alt="carousel-1 image">

                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7 text-start">
                                    <p class="fs-4 text-white animated slideInRight">Welcome to <strong>GrowMark</strong></p>
                                    <h1 class="display-1 text-white mb-4 animated slideInRight">Unlock Your Business Growth</h1>
                                    <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInRight">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img" src="<?php echo get_template_directory_uri(); ?>/img/carousel-2.jpg" alt="carousel-2 image">

                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-7 text-end">
                                    <p class="fs-4 text-white animated slideInLeft">Welcome to <strong>GrowMark</strong></p>
                                    <h1 class="display-1 text-white mb-5 animated slideInLeft">Ready to Grow Your Business</h1>
                                    <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Features Start -->
    
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-0 feature-row">

            <?php if( have_rows('features') ): ?>
                <?php while( have_rows('features') ): the_row(); 
                    $icon = get_sub_field('feature_icon');
                    $title = get_sub_field('feature_title');
                    $desc = get_sub_field('feature_description');
                    $delay = get_sub_field('feature_delay');
                ?>
                
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="<?php echo $delay; ?>">
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <?php if($icon): ?>
                                <img class="img" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                            <?php endif; ?>
                        </div>

                        <h5 class="mb-3"><?php echo $title; ?></h5>
                        <p class="mb-0"><?php echo $desc; ?></p>
                    </div>
                </div>

                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
</div>

    <!-- Features End -->


    <!-- About Start -->
    <div class="container-xxl about my-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="h-100 d-flex align-items-center justify-content-center" style="min-height: 300px;">
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 pt-lg-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white rounded-top p-5 mt-lg-5">
                        <p class="fs-5 fw-medium text-primary">About Us</p>
                        <h1 class="display-6 mb-4">The Best Marketing Agency to Improve Your Business</h1>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                        <div class="row g-5 pt-2 mb-5">
                            <div class="col-sm-6">
                                <img class="img" src="<?php echo get_template_directory_uri(); ?>/img/icon/icon-5.png" alt="">
                                <h5 class="mb-3">Managed Services</h5>
                                <span>Clita erat ipsum et lorem et sit sed stet lorem</span>
                            </div>
                            <div class="col-sm-6">
                                <img class="img" src="<?php echo get_template_directory_uri(); ?>/img/icon/icon-2.png" alt="">
                                <h5 class="mb-3">Dedicated Experts</h5>
                                <span>Clita erat ipsum et lorem et sit sed stet lorem</span>
                            </div>
                        </div>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
