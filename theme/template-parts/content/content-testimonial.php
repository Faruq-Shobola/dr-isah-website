    <?php $query_args = array(
        'post_type' => 'testimonials',
        'post_per_page' => 999,
        'order' => 'ASC',
    );

    $query = new WP_Query( $query_args ); ?>


<section class="max-w-screen-xl px-4 py-16 mx-auto">
<div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
    <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
        What My Client Says About Me
    </h2>
  </div>
    <div class="sm:px-6 lg:px-8">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                    <?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
                        <div class="swiper-slide">
                            <blockquote class="p-4 md:p-10">
                                <p class="relative  text-gray-500">
                                    <span class="text-4xl font-bold text-blue">&ldquo;</span>

                                    <?php the_content()?>

                                </p>

                                <div class="flex mt-8 items-center">
                                    <?php if(has_post_thumbnail()):?>
                                        <img
                                        src="<?php the_post_thumbnail_url();?>"
                                        alt="<?php the_title()?>"
                                        class="object-cover w-16 h-16 rounded-full"
                                        />
                                    <?php endif;?>

                                    <div class="ml-4 text-sm">
                                    <p class="font-medium"><?php the_title()?></p>
                                    <p class="mt-1 text-blue"><?php the_field('position') ?></p>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                    <?php endwhile; else: endif; ?>
                </div>

                <div class="mt-12 swiper-pagination"></div>
            </div>
        </div>
    </section>




