<?php
/**
 * The template for displaying blog pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dr-isah
 */

get_header();
?>

<!------------------------------------- 
/// 01   HERO SECTION
--------------------------------------->
<section class="relative bg-white">
  <img
    class="absolute object-[75%] sm:object-[25%] object-cover w-full h-full opacity-25 sm:opacity-100"
    src="https://images.pexels.com/photos/911738/pexels-photo-911738.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
    alt="Couple on a bed with a dog"
  />

  <div class="cont relative py-32 h-60 md:h-72 lg:h-96">
    <div class="top-1/3 md:top-1/2 md:left-1/2 left-5">
      <!-- Name -->
      <div class="title py-10">
        <h1 class="text-3xl text-blue font-semibold py-2 uppercase"><?php echo single_cat_title();?></h1>
        <p class="text-2xl capitalize">our best services for your kids</p>

        <!-- line -->
        <div class="h-1 rounded-sm w-24 bg-blue my-3 origin-left"></div>
      </div>
    </div>
  </div>
</section>

<!------------------------------------- 
/// 02   BLOG POST SECTION
--------------------------------------->
<section>
  <div class="cont mx-auto flex flex-col md:grid md:grid-cols-6 gap-6">
    <div class="col-span-4 py-8 md:px-4 md:py-16">
      <div class="grid gap-6 lg:grid-cols-2">
        
        <?php if(have_posts() ) : while (have_posts() ) :the_post(); ?>
          <?php get_template_part( 'template-parts/content/content', 'blog' ); ?>
        <?php endwhile; else: endif; ?>

      </div>
      <div class="flex justify-center items-center mt-12">
          <?php the_posts_pagination(); ?>
      </div>
    </div>
    <div class="sticky top-5 col-span-2 p-4 lg:px-5 md:py-16">
      <div class="flex flex-col gap-2 items-start">
        <!------------ TITLE ------------>
        <h2 class="capitalize font-bold text-3xl py-2 text-orange">Category
          <div class="h-1 ml-auto duration-300 origin-left transform bg-blue scale-x-30 group-hover:scale-x-100"></div>
        </h2>
        <!------------ CATEGORIES LIST ------------>
        <div class="flex flex-col">
          <div class="flex flex-col gap-4">
            
            <?php 
              $cat_args = array(
                  'exclude' => array(1),
                  'option_all' => 'All'
              );
              $categories = get_categories($cat_args);
              foreach($categories as $cat) : ?>
              <ul class="pl-2">
                <li>
                  <a href="<?php echo get_category_link( $cat->term_id);?>" data-category="<?php echo $cat->term_id; ?>" class="js-filter-item font-medium hover:text-blue">
                      <?php echo $cat->name;?>
                  </a>
                </li>
              </ul>
            <?php endforeach;?>
            
          </div>
        </div>    
          
      </div> 
    </div>
  </div>
</section>


<?php
get_footer();
