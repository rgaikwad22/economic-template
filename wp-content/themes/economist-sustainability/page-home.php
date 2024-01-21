<?php
// Template Name: Home
?>
<?php
get_header();
?>
<main>
    <?php
    if (have_rows('home_page')):
        while (have_rows('home_page')):
            the_row();

            switch (get_row_layout()) {
                case 'banner_section':
                    // Banner Section
                    $banner_image = get_sub_field('banner_image');
                    $banner_heading = get_sub_field('banner_heading');
                    $banner_sub_heading = get_sub_field('banner_sub_heading');
                    $banner_sub_text = get_sub_field('banner_sub_text');
                    $learn_more = get_sub_field('learn_more');
                    ?>
                    <!-- Banner section starts here -->
                    <section class="banner-section">
                        <div class="wrapper">
                            <ul class="banner-slider">
                                <li class="active-slide">
                                    <figure>
                                        <img src="<?php echo esc_url($banner_image['url']); ?>"
                                            alt="<?php echo esc_attr($banner_image['alt']); ?>">
                                    </figure>
                                    <div class="banner-info">
                                        <div class="banner-left-content">
                                            <div class="banner-leftside-info">
                                                <span class="banner-sub-heading">
                                                    <?php echo esc_html($banner_sub_heading); ?>
                                                </span>
                                                <p class="banner-para">
                                                    <?php echo esc_html($banner_sub_text); ?>
                                                </p>
                                            </div>
                                            <a href="<?php echo esc_url($learn_more['url']); ?>" class="banner-link-dropdown">
                                                <?php echo esc_html($learn_more['title']); ?>
                                            </a>
                                        </div>
                                        <div class="banner-right-content">
                                            <h2>
                                                <?php echo esc_html($banner_heading); ?>
                                            </h2>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <!-- Banner section ends here -->
                    <?php
                    break;

                case 'participent_section':
                    // Participant Section
                    $participents_tabs = get_sub_field('participents_tabs');
                    ?>
                    <!-- Participants section starts here -->
                    <section class="participants-section">
                        <div class="wrapper">
                            <?php if (have_rows('participents_tabs')): ?>
                                <ul class="participants-tab-list">
                                    <?php while (have_rows('participents_tabs')):
                                        the_row();
                                        $city_icon = get_sub_field('city_icon');
                                        $london_attendees = get_sub_field('london_attendees');
                                        $participants_number = get_sub_field('participants_number');
                                        $special_character = get_sub_field('special_character');
                                        ?>
                                        <li>
                                            <figure class="attenees-tab-icon">
                                                <img src="<?php echo $city_icon['url'] ?>" alt="">
                                            </figure>
                                            <span class="tab-head">
                                                <?php echo $london_attendees; ?>
                                            </span>
                                            <span class="tab-particepents-number">
                                                <?php echo $participants_number . $special_character; ?>
                                            </span>
                                        </li>
                                        <?php
                                    endwhile; ?>
                                </ul>
                                <?php
                            endif;
                            $participent_section_heading = get_sub_field('participent_section_heading');
                            $participent_section_para = get_sub_field('participent_section_para');
                            $go_to_next_section = get_sub_field('go_to_next_section');
                            $participent_section_sub_heading = get_sub_field('participent_section_sub_heading');
                            $register_btn = get_sub_field('register_btn');
                            $participent_descriptive_image = get_sub_field('participent_descriptive_image');
                            ?>
                            <div class="participents-container">
                                <div class="particepents-details">
                                    <h3 class="section-heading">
                                        <?php echo $participent_section_heading ?>
                                    </h3>
                                    <p class="participents-section-para">
                                        <?php echo $participent_section_para ?>
                                    </p>
                                    <a href="<?php echo $go_to_next_section['url'] ?>">
                                        <?php echo $go_to_next_section['title'] ?>
                                    </a>
                                    <h4>
                                        <?php echo $participent_section_sub_heading; ?>
                                    </h4>
                                    <a href="<?php echo $register_btn['url'] ?>">
                                        <?php echo $register_btn['title'] ?>
                                    </a>
                                </div>
                                <figure>
                                    <img src="<?php echo $participent_descriptive_image['url'] ?>" alt="">
                                </figure>
                            </div>
                        </div>
                    </section>
                    <!-- Participants section ends here -->
                    <?php
                    break;

                case 'featured_speakers_section':
                    $participents_tabs = get_sub_field('speakers_section_heading');
                    $speakers_description = get_sub_field('speakers_description');
                    $all_speakers_list = get_sub_field('all_speakers_list');
                    ?>
                    <!-- featured speakers section starts here -->
                    <section class="featured-speakers-section">
                        <div class="wrapper">
                            <h3 class="section-heading">
                                <?php echo $participents_tabs ?>
                            </h3>
                            <?php if ($speakers_description): ?>
                                <ul class="featured-speaker-list">
                                    <?php foreach ($speakers_description as $speaker_post):
                                        $speaker_thumbnail = get_field('speakers_profile_image', $speaker_post->ID);
                                        $title = get_the_title($speaker_post->ID);
                                        $spaker_company_logo = get_field('spaker_company_logo', $speaker_post->ID);
                                        $speakers_info = get_field('speakers_info', $speaker_post->ID);
                                        ?>
                                        <li>
                                            <div class="speakers-profile">
                                                <figure class="speakers-image">
                                                    <img src="<?php echo $speaker_thumbnail['url'] ?>" alt="">
                                                </figure>
                                                <figure class="speakers-company-logo">
                                                    <img src="<?php echo $spaker_company_logo['url'] ?>" alt="">
                                                </figure>
                                            </div>
                                            <a href="<?php echo $speaker_post->guid ?>" class="topics-section-head">
                                                <?php echo $title; ?>
                                            </a>
                                            <p class="speakers-info-para">
                                                <?php echo $speakers_info ?>
                                            </p>
                                        </li>
                                        <?php
                                    endforeach;
                                    ?>
                                </ul>
                            <?php endif; ?>
                            <a href="<?php echo $all_speakers_list['url'] ?>">
                                <?php echo $all_speakers_list['title'] ?>
                            </a>
                        </div>
                    </section>
                    <!-- featured speakers section ends here -->
                    <?php
                    break;

                case 'topics_section':
                    $topics_section_heading = get_sub_field('topics_section_heading');
                    ?>
                    <!-- topics section starts here -->
                    <section class="topics-section">
                        <div class="wrapper">
                            <h3 class="section-heading">
                                <?php echo $topics_section_heading ?>
                            </h3>
                            <?php if (have_rows('topics_list')): ?>
                                <ul class="topics-tab-list">
                                    <?php while (have_rows('topics_list')):
                                        the_row();
                                        $topic_post_image = get_sub_field('topic_post_image');
                                        $topic_post_heading = get_sub_field('topic_post_heading');
                                        $learn_more = get_sub_field('learn_more');
                                        ?>
                                        <li>
                                            <figure>
                                                <img src="<?php echo $topic_post_image['url'] ?>" alt="">
                                            </figure>
                                            <h4 class="topics-section-head">
                                                <?php echo $topic_post_heading ?>
                                            </h4>
                                            <a href="<?php echo $learn_more['url'] ?>">
                                                <?php echo $learn_more['title'] ?>
                                            </a>
                                        </li>
                                        <?php
                                    endwhile;
                                    ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </section>
                    <!-- topics section ends here -->
                    <?php
                    break;

                case 'event_section':
                    $event_section_heading = get_sub_field('event_section_heading');
                    ?>
                    <!-- event section starts here -->
                    <section class="event-section">
                        <div class="wrapper">
                            <h3 class="section-heading">
                                <?php echo $event_section_heading ?>
                            </h3>
                            <?php if (have_rows('event_detail')): ?>
                                <ul class="events-list">
                                    <?php while (have_rows('event_detail')):
                                        the_row();
                                        $event_image = get_sub_field('event_image');
                                        $event_date = get_sub_field('event_date');
                                        $event_mode = get_sub_field('event_mode');
                                        ?>
                                        <li>
                                            <figure>
                                                <img src="<?php echo $event_image['url'] ?>" alt="">
                                            </figure>
                                            <span class="event-date">
                                                <?php echo $event_date ?>
                                            </span>
                                            <span class="event-mode">
                                                <?php echo $event_mode ?>
                                            </span>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                                <ul>
                                    <?php while (have_rows('event_info')):
                                        the_row();
                                        $mode_of_event = get_sub_field('mode_of_event');
                                        $event_address = get_sub_field('address');
                                        $event_link = get_sub_field('event_link');
                                        ?>
                                        <li>
                                            <span class="event-mode-info">
                                                <?php echo $mode_of_event ?>
                                            </span>
                                            <address class="event-venue-address">
                                                <?php echo $event_address ?>
                                            </address>
                                            <a href="<?php echo $event_link['url'] ?>">
                                                <?php echo $event_link['title'] ?>
                                            </a>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </section>
                    <!-- event section ends here -->
                    <?php
                    break;

                case 'why_attend_section':
                    $attend_section_heading = get_sub_field('attend_section_heading');
                    ?>
                    <!-- why attend section starts here -->
                    <section class="why-attend-section">
                        <div class="wrapper">
                            <h3 class="section-heading">
                                <?php echo $attend_section_heading ?>
                            </h3>
                            <?php if (have_rows('attend_reason_list')): ?>
                                <ul>
                                    <?php while (have_rows('attend_reason_list')):
                                        the_row();
                                        $attend_post_image = get_sub_field('attend_post_image');
                                        $attend_post_heading = get_sub_field('attend_post_heading');
                                        $attend_post_para = get_sub_field('attend_post_para');
                                        $learn_more = get_sub_field('learn_more');
                                        ?>
                                        <li>
                                            <figure>
                                                <img src="<?php echo $attend_post_image['url'] ?>" alt="">
                                            </figure>
                                            <h4 class="topics-section-head">
                                                <?php echo $attend_post_heading ?>
                                            </h4>
                                            <p class="attend-post-para">
                                                <?php echo $attend_post_para ?>
                                            </p>
                                            <a href="<?php echo $learn_more['url'] ?>">
                                                <?php echo $learn_more['title'] ?>
                                            </a>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </section>
                    <!-- why attend section ends here -->
                    <?php
                    break;

                case 'attendeece_section':
                    $attendeece = get_sub_field('attendeece');
                    ?>
                    <!-- attendeece section starts here -->
                    <section class="attendeece-section">
                        <div class="wrapper">
                            <h3 class="section-heading attendeece-heading">
                                <?php echo $attendeece; ?>
                            </h3>
                            <?php if (have_rows('attendeece_comments')): ?>
                                <ul class="attendeece-list">
                                    <?php while (have_rows('attendeece_comments')):
                                        the_row();
                                        $comment_head = get_sub_field('comment_head');
                                        $comment_para = get_sub_field('comment_para');
                                        ?>
                                        <li>
                                            <h5 class="comment-head">
                                                <?php echo $comment_head ?>
                                            </h5>
                                            <p class="comment-para">
                                                <?php echo $comment_para ?>
                                            </p>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </section>
                    <!-- attendeece section ends here -->
                    <?php
                    break;

                case 'interest_section':
                    $interest_section_heading = get_sub_field('interest_section_heading');
                    $interest_sub_head = get_sub_field('interest_sub_head');
                    $contact_email = get_sub_field('contact_email');
                    $register_speaker = get_sub_field('register_speaker');
                    $speaker_landing_image = get_sub_field('speaker_landing_image');
                    ?>
                    <!-- interest section starts here -->
                    <section class="interest-section">
                        <div class="wrapper">
                            <div class="become-speaker">
                                <h3 class="section-heading attendeece-heading">
                                    <?php echo $interest_section_heading; ?>
                                </h3>
                                <p class="interest-section-para">
                                    <?php
                                    echo $interest_sub_head . " " . $contact_email;
                                    ?>
                                </p>
                                <a href="<?php echo $register_speaker['url'] ?>">
                                    <?php echo $register_speaker['title'] ?>
                                </a>
                            </div>
                            <figure>
                                <img src="<?php echo $speaker_landing_image['url'] ?>" alt="">
                            </figure>
                        </div>
                    </section>
                    <!-- interest section ends here -->
                <?php
            }
            ?>
        <?php endwhile ?>
    <?php endif ?>
</main>


<?php
get_footer();
?>