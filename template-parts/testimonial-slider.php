<section id="home-c" class="home-reviews" style="background-image: url( '<?php echo get_template_directory_uri() . '/assets/images/home-reviews-background.jpg' ?>' ); background-size: cover; background-position: center center;">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="review-body text-center p-5 my-5">
                        <h2 class="review-title mb-4 h4">What our clients are saying</h2>

                        <?php /* Begin for each review */ ?>
                        
                        <p class="review-author mb-0">Lilly O.</p>
                        <ul class="star-rating mb-0">
                            <?php
                            $star_count = 5;
                            do {
                                echo '<li><img src="' . get_template_directory_uri() . '/assets/images/review-star.png" alt="star" /></li>';
                                $star_count -= 1;
                            } while ( $star_count >= 1 );
                            ?>
                        </ul>
                        <p class="source"><a href="#">BirdEye</a>, <span class="review-date">Mar 24, 2020</span></p>
                        <p class="review-content">We had a great experience with Torrey. She helped us expedite our closing during the COVID-19 outbreak!</p>

                        <?php /* end for each review */ ?>

                        <a href="#" class="testimonials-btn btn btn-primary">More Testimonials</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>