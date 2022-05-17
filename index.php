<?php 
/*
Template Name: Home page
*/
get_header();
?>
<?php get_template_part('templates/headertop');?>

<?php if( get_theme_mod( 'about_section_show', 'show' ) == 'show' ) : ?>
        
    <div class="about" id="about" style="background: url(<?php echo get_theme_mod( 'bg_image_white')?>) center 100% repeat-x,
                url(<?php echo get_theme_mod( 'bg_image_black')?>) center 100% repeat-x,
                #1d1d1d;">
        <div class="container">
            <div class="about__inner">
                    <?php if( get_theme_mod( 'how_many_about_us_items')  == 'one') : ?>
                        <div class="about__item">
                            <div class="about__year"><?php echo get_theme_mod( 'about_title_text1', 'About Title 1' )?></div>
                            <div class="about__text"><?php echo get_theme_mod( 'about_subtitle_text1', 'About Sub-Title' )?></div>
                        </div>
                    <?php endif ?>
                    <?php if( get_theme_mod( 'how_many_about_us_items')  == 'two') : ?>
                        <div class="about__item">
                            <div class="about__year"><?php echo get_theme_mod( 'about_title_text1', 'About Title 1' )?></div>
                            <div class="about__text"><?php echo get_theme_mod( 'about_subtitle_text1', 'About Sub-Title' )?></div>
                        </div>
                        <div class="about__item">
                            <div class="about__year"><?php echo get_theme_mod( 'about_title_text2', 'About Title 2' )?></div>
                            <div class="about__text"><?php echo get_theme_mod( 'about_subtitle_text2', 'About Sub-Title 2' )?></div>
                        </div>
                    <?php endif ?>
                    <?php if( get_theme_mod( 'how_many_about_us_items')  == 'three') : ?>
                        <div class="about__item">
                            <div class="about__year"><?php echo get_theme_mod( 'about_title_text1', 'About Title 1' )?></div>
                            <div class="about__text"><?php echo get_theme_mod( 'about_subtitle_text1', 'About Sub-Title' )?></div>
                        </div>
                        <div class="about__item">
                            <div class="about__year"><?php echo get_theme_mod( 'about_title_text2', 'About Title 2' )?></div>
                            <div class="about__text"><?php echo get_theme_mod( 'about_subtitle_text2', 'About Sub-Title 2' )?></div>
                        </div>
                        <div class="about__item">
                            <div class="about__year"><?php echo get_theme_mod( 'about_title_text3', 'About Title 3' )?></div>
                            <div class="about__text"><?php echo get_theme_mod( 'about_subtitle_text3', 'About Sub-Title 2' )?></div>
                        </div>
                    <?php endif ?>
                    <?php if( get_theme_mod( 'how_many_about_us_items')  == 'four') : ?>
                        <div class="about__item">
                            <div class="about__year"><?php echo get_theme_mod( 'about_title_text1', 'About Title 1' )?></div>
                            <div class="about__text"><?php echo get_theme_mod( 'about_subtitle_text1', 'About Sub-Title' )?></div>
                        </div>
                        <div class="about__item">
                            <div class="about__year"><?php echo get_theme_mod( 'about_title_text2', 'About Title 2' )?></div>
                            <div class="about__text"><?php echo get_theme_mod( 'about_subtitle_text2', 'About Sub-Title 2' )?></div>
                        </div>
                        <div class="about__item">
                            <div class="about__year"><?php echo get_theme_mod( 'about_title_text3', 'About Title 3' )?></div>
                            <div class="about__text"><?php echo get_theme_mod( 'about_subtitle_text3', 'About Sub-Title 2' )?></div>
                        </div>
                        <div class="about__item">
                            <div class="about__year"><?php echo get_theme_mod( 'about_title_text4', 'About Title 4' )?></div>
                            <div class="about__text"><?php echo get_theme_mod( 'about_subtitle_text4', 'About Sub-Title 4' )?></div>
                        </div>
                    <?php endif ?>

            </div>
        </div>
    </div>

<?php endif ?>

<?php if( get_theme_mod( 'team_section_show', 'show' ) == 'show' ) : ?>

    <div class="team" id="team">
        <div class="container">
            <div class="block__head">
                <h2 class="block__title"><?php echo get_theme_mod( 'team_title', 'Team Title' )?></h2>
                <p class="block__text"><?php echo get_theme_mod( 'team_subtitle', 'Team Sub-Title' )?></p>
            </div>
            <div class="team__inner">

        <div class="swiper mySwiper">
                    <div class="swiper-wrapper">

                    <div class="swiper-slide">
                <div class="team__item">
                    <img class="team__item-img" src="<?php echo get_theme_mod('team_meber_image')?>" alt="">
                    <h3 class="team__item-title"><?php echo get_theme_mod( 'team_member_name', 'Team Member Name' )?></h3>
                    <p class="team__item-text"><?php echo get_theme_mod( 'team_member_position', 'Team Member Position' )?></p>
                    <div class="team__icon-box">
                                    <a href="" target=""><i class="icon-facebook-1"></i></a>
                                    <a href="" target=""><i class="icon-twitter"></i></a>
                                    <a href="" target=""><i class="icon-instagram"></i></a>
                    </div>
                </div>
                </div>

                <div class="swiper-slide">
                <div class="team__item">
                <img class="team__item-img" src="<?php echo get_theme_mod('team_meber_image_2')?>" alt="">
                    <h3 class="team__item-title"><?php echo get_theme_mod( 'team_member_name_2', 'Team Member Name 2' )?></h3>
                    <p class="team__item-text"><?php echo get_theme_mod( 'team_member_position_2', 'Team Member Position 2' )?></p>
                    <div class="team__icon-box">
                                    <a href="" target=""><i class="icon-facebook-1"></i></a>
                                    <a href="" target=""><i class="icon-twitter"></i></a>
                                    <a href="" target=""><i class="icon-instagram"></i></a>
                    </div>
                </div>
                </div>
                

                <div class="swiper-slide">
                <div class="team__item">
                <img class="team__item-img" src="<?php echo get_theme_mod('team_meber_image_3')?>" alt="">
                    <h3 class="team__item-title"><?php echo get_theme_mod( 'team_member_name_3', 'Team Member Name 3' )?></h3>
                    <p class="team__item-text"><?php echo get_theme_mod( 'team_member_position_3', 'Team Member Position 3' )?></p>
                    <div class="team__icon-box">
                                    <a href="" target=""><i class="icon-facebook-1"></i></a>
                                    <a href="" target=""><i class="icon-twitter"></i></a>
                                    <a href="" target=""><i class="icon-instagram"></i></a>
                    </div>
                </div>
                </div>

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
        </div>
            </div>    
            </div>
        </div>
    </div>
<?php endif ?>   

<?php if( get_theme_mod( 'provide_section_show', 'show' ) == 'show' ) : ?>

    <div class="provide" id="provide">
        <div class="container">
            <div class="block__head inverse">
                <h2 class="block__title"><?php echo get_theme_mod( 'provide_title', 'Provide Title' )?></p></h2>
                <p class="block__text"><?php echo get_theme_mod( 'provide_subtitle', 'Provide Sub-Title' )?></p></p>
            </div>
            <div class="provide__inner">

                <div class="provide__item">
                    <img class="team__item-img" src="<?php echo get_theme_mod('provide_image_item_1')?>" alt="">
                    <h3 class="provide__item-title"><?php echo get_theme_mod( 'provide_title_item_1', 'Provide Title Item 1' )?></h3>
                    <p class="provide__item-text"><?php echo get_theme_mod( 'provide_subtitle_item_1', 'Provide Sub-Title Item 1' )?></p>
                </div>

                <div class="provide__item">
                <img class="team__item-img" src="<?php echo get_theme_mod('provide_image_item_2')?>" alt="">
                    <h3 class="provide__item-title"><?php echo get_theme_mod( 'provide_title_item_2', 'Provide Title Item 2' )?></h3>
                    <p class="provide__item-text"><?php echo get_theme_mod( 'provide_subtitle_item_2', 'Provide Sub-Title Item 2' )?></p>
                </div>

                <div class="provide__item">
                <img class="team__item-img" src="<?php echo get_theme_mod('provide_image_item_3')?>" alt="">
                    <h3 class="provide__item-title"><?php echo get_theme_mod( 'provide_title_item_3', 'Provide Title Item 3' )?></h3>
                    <p class="provide__item-text"><?php echo get_theme_mod( 'provide_subtitle_item_3', 'Provide Sub-Title Item 3' )?></p>
                </div>

            </div>
        </div>
    </div> 

    <?php endif ?> 

<?php if( get_theme_mod( 'contact_display', 'show' ) == 'show' ) : ?>
    <div class="contact" id="contact">
        <div class="container">
            <div class="block__head">
                <h2 class="block__title"><?php echo get_theme_mod( 'contact_title', 'Contact Title' )?></h2>
                <p class="block__text"><?php echo get_theme_mod( 'contact_subtitle', 'Contact Sub-Title' )?></p>
            </div>
            <div class="contact__inner">
                <div class="contact__icon-box">
                    <div class="contact__item">
                        <i class="icon-phone"></i>
                        <div class="contact__text"><a href="tel:+380<?php echo get_theme_mod( 'contact_phone', '+380630000000' )?>"><?php echo get_theme_mod( 'contact_phone', 'Contact Phone' )?></a></div>
                    </div>
                        <div class="contact__item">
                        <i class="icon-location"></i> 
                            <div class="contact__text">
                                    <a href="<?php echo get_theme_mod( 'contact_map', 'Contact Map Url' )?>" 
                                    target="_blank">
                                    <?php echo get_theme_mod( 'contact_adress', 'Contact Adress' )?>
                                    </a>
                            </div>
                        </div>
                    
                    <div class="contact__item">
                        <i class="icon-mail-alt"></i>
                        <div class="contact__text"><a href="mailto:<?php echo get_theme_mod( 'contact_mail', 'Contact Mail' )?>"><?php echo get_theme_mod( 'contact_mail', 'Contact Mail' )?></a></div>
                    </div>
                    </div>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="22" title="Contact Us"]'); ?>
        </div>
    </div>
<?php endif ?> 

<?php get_footer();?>