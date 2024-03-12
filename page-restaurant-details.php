<?php
get_header();
/* Template Name: Restaurant Details */
$image = get_stylesheet_directory_uri() . '/assets/img/';
?>
<style>
    .container-xl {
        display: grid;
    }

    .grid-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .left-box {
        grid-column: 1 / 2;
    }

    .right-box {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .grid-item img,
    .left-box img {
        width: 100%;
        height: 100%;
        display: block;
    }

    .banner_content .content {
        gap: 10px;
    }

    @media (max-width:991px) {
        .grid-container {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width:767px) {
        .right-box {
            grid-template-columns: 1fr;
        }
    }
</style>
<section class="banner pb-0">
    <div class="container-xl">
        <div class="grid-container">
            <div class="left-box">
                <img src="<?php echo $image; ?>image7.svg" alt="">
            </div>
            <div class="right-box">
                <div class="grid-item">
                    <img src="<?php echo $image; ?>image7.svg" alt="">
                </div>
                <div class="grid-item">
                    <img src="<?php echo $image; ?>image7.svg" alt="">
                </div>
                <div class="grid-item">
                    <img src="<?php echo $image; ?>image7.svg" alt="">
                </div>
                <div class="grid-item">
                    <img src="<?php echo $image; ?>image7.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="banner_content">
    <div class="container-xl">
        <div class="row align-items-center gy-3">
            <div class="content_decription mb-xl-5 mb-lg-3">
                <h1>Sally’s Diner</h1>
                <p>Welcome to Sally's Diner, where the magic of family dining comes to life! Nestled in the heart of the
                    city, Sally's Diner is a vibrant haven designed with your little ones in mind. From whimsical decor
                    to a specially crafted menu, every detail at Sally's radiates kid-friendly charm. Our diverse and
                    delicious offerings cater to the pickiest eaters, ensuring every family member finds a favorite
                    dish. The spacious play area is a lively oasis where children can explore and play, allowing parents
                    to enjoy their meal with peace of mind. At Sally's Diner, we believe in turning every dining
                    experience into a delightful adventure for the whole family</p>
            </div>
            <div class="col-xxl col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="content d-flex align-items-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Kid's Paradise.png" alt="">
                <div class="d-flex flex-column">
                        <span><b>Kid's Paradise</b></span>
                        <span>Kid Friendly Level</span>
                    </div>
                </div>
            </div>
            <div class="col-xxl col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="content d-flex align-items-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/5 Star Ratings.png" alt="">
                <div class="d-flex flex-column">
                        <span><b>Kid's Paradise</b></span>
                        <span>Kid Friendly Level</span>
                    </div>
                </div>
            </div>
            <div class="col-xxl col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="content d-flex align-items-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Continental.png" alt="">
                <div class="d-flex flex-column">
                        <span><b>Continental</b></span>
                    </div>
                </div>
            </div>
            <div class="col-xxl col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="content d-flex align-items-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Phone.png" alt="">
                <div class="d-flex flex-column">
                        <span><b>555-867-5309</b></span>
                    </div>
                </div>
            </div>
            <div class="col-xxl col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="content d-flex align-items-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/City Center.png" alt="">
                <div class="d-flex flex-column">
                        <span><b>City Center</b></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="kid_friendly_featured">
    <div class="container-xl">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="featured_list">
                    <div class="d-flex">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Baby Chair.png" alt="">
                        <p>Baby Chair</p>
                    </div>
                    <div class="d-flex">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Changing Stations.png" alt="">
                        <p>Changing Stations</p>
                    </div>
                    <div class="d-flex">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Painting for kids.png" alt="">
                        <p>Painting for kids</p>
                    </div>
                    <div class="d-flex">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Playground.png" alt="">
                        <p>Playground</p>
                    </div>
                    <div class="d-flex">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Toys.png" alt="">
                        <p>Toys</p>
                    </div>
                    <div class="d-flex">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Menu For Childre.png" alt="">
                        <p>Menu For Childre</p>
                    </div>
                    <div class="d-flex">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Stroller Helper.png" alt="">
                        <p>Stroller Helper</p>
                    </div>
                    <div class="d-flex">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Elevator.png" alt="">
                        <p>Elevator</p>
                    </div>
                    <div class="d-flex">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Stroller friendly tables.png" alt="">
                        <p>Stroller friendly tables</p>
                    </div>
                    <div class="d-flex">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Indoor Play Area.png" alt="">
                        <p>Indoor Play Area</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="location">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d30894.181097501612!2d121.01817134299924!3d14.554990433598883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1skids%20restaurant%20italy!5e0!3m2!1sen!2sph!4v1710250661236!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
adasad
<?php get_footer(); ?>