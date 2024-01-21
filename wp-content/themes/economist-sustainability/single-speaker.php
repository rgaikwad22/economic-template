<?php
get_header();
?>

<div class="content-area">
    <main id="main" class="site-main">

        <?php while (have_posts()):
            the_post(); ?>
            <?php
            $speakers_profile_image = get_field('speakers_profile_image');
            $spaker_company_logo = get_field('spaker_company_logo');
            $speakers_company_title = get_field('speakers_company_title');
            $speakers_info = get_field('speakers_info');
            ?>
            <section class="speaker-details-section" ?>
                <div class="wrapper">
                    <figure>
                        <?php if ($speakers_profile_image) { ?>
                            <img src="<?php echo $speakers_profile_image['url'] ?>" alt="">
                        <?php } ?>
                    </figure>
                    <h2 class="speaker-title">
                        <?php the_title(); ?>
                    </h2>
                    <?php if ($speakers_info): ?>
                        <span class="speaker-info">
                            <?php echo $speakers_info ?>
                        </span>
                    <?php endif ?>
                    <?php the_content(); ?>
                    <?php if ($spaker_company_logo): ?>
                        <img src="<?php echo $spaker_company_logo['url'] ?>" alt="">
                    <?php endif ?>
                    <?php if ($speakers_company_title): ?>
                        <span>
                            <?php echo $speakers_company_title ?>
                        </span>
                    <?php endif ?>
                </div>
            </section>
        <?php endwhile; ?>
    </main>
</div>

<?php
get_footer();
?>