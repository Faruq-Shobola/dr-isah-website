<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package dr-isah
 */

get_header();
?>


<section class="relative ">
	<?php if(has_post_thumbnail()):?>
		<img
			class="absolute inset-0 object-[75%] sm:object-[25%] object-cover w-full h-full opacity-25 sm:opacity-100"
			src="<?php the_post_thumbnail_url();?>"
			alt="<?php the_title();?>"
		/>
	<?php endif;?>

  <div class="relative py-16 lg:flex bg-blue/50">
	<div class="px-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
		<p class="mb-2 text-xs font-semibold tracking-wide text-white uppercase sm:text-center">
			<time><?php echo get_the_date( 'jS F, Y' );?></time>
		</p>
		<div class="max-w-xl mb-5 text-white md:mx-auto sm:text-center lg:max-w-2xl">
			<div class="mb-4">
			<p href="/" aria-label="Article" class="inline-block max-w-lg text-3xl font-extrabold leading-none tracking-tight text-white transition-colors duration-200 hover:text-deep-purple-accent-700 sm:text-4xl">
				<?php the_title(); ?>
			</p>
			</div>
			<p class="text-base  md:text-lg">
				<?php the_excerpt(); ?>
			</p>
		</div>
	</div>
  </div>
</section>


<!-------------------------------- 
/// 02   BLOG CONTENT SECTION
---------------------------------->
<section class="py-16">
    <div class="max-w-6xl mx-auto flex flex-col md:grid md:grid-cols-6 gap-6">
        <!------------ BLOG CONTENT ------------>
        <div class="col-span-4 p-4 lg:p-8">
            <!------------ COLUMN 1 ------------>
            <div class="flex flex-col justify-center gap-5 py-10">
                <!------ CONTENT ------>
                <?php the_content(); ?>
            </div>
        </div>
        <!------------ BLOG SIDEBAR ------------>
        <div class="col-span-2 p-4 lg:p-8">
            <div class="flex flex-col gap-2 lg:w-5/6 mx-auto">
                <!------------ TITLE ------------>
                <h2 class="capitalize font-bold text-3xl py-2 text-orange">Related post
				<div class="h-1 ml-auto duration-300 origin-left transform bg-blue scale-x-30 group-hover:scale-x-100"></div>
				</h2>
                <!------------ RELATED POST ------------>
                <div class="flex flex-col gap-6">
                    <div class="flex flex-col gap-6">
						<?php $related = get_posts( 
							array( 
								'category__in' => wp_get_post_categories($post->ID), 
								'numberposts' => 5, 
								'post__not_in' => array($post->ID) ) ); 
								if( $related ) 
									foreach( $related as $post ) { setup_postdata($post); 
						?>
						<!------------ BLOG CONTENT ------------>
						<div class="">
							<div class="flex flex-col gap-1">
								<a href="<?php the_permalink() ?>" class="capitalize text-base font-bold"><?php the_title(); ?></a>
								<p class="capitalize text-base"><?php the_excerpt();?></p>
                        	</div>
                        	<!------------ DATE & TIME ------------>
							<div class="flex gap-x-2 capitalize text-sm text-blue">
								<time><?php echo get_the_date( 'jS F, Y' );?></time>
							</div>
						</div>
						
						
						<?php } wp_reset_postdata(); ?>
                    </div>
				</div>    
				
            </div> 
        </div> 
    </div>
</section>

<?php
get_sidebar();
get_footer();
