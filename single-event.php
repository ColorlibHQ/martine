<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package martine
 */

get_header();
$book_url   = !empty( martine_meta( 'book_url' ) ) ? martine_meta( 'book_url' ) : '#';
?>

    <!--upcomming events start-->
    <section class="event_part section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="event_slider owl-carousel" >
                        <?php            
                            //Load Events ==============
                            martine_event_section();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--upcomming events end-->

    <!-- tour details content css start-->
    <section class="tour_details_content section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="content_iner">
                        <?php the_content()?>
                        <div class="tour_details_content_btn">
                            <a href="<?php echo esc_url( $book_url )?>" class="btn_1"><?php _e( 'Book Ticket', 'martine' )?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tour details content css end-->

    <?php

// Footer============
get_footer();