
    <div class="overflow-hidden transition-shadow duration-300 border bg-white rounded shadow-sm">
    <div class="w-full h-80">
        <?php if(has_post_thumbnail()):?>
            <img src="<?php the_post_thumbnail_url();?>" class="object-cover w-full h-full" alt="<?php the_title();?>" />
        <?php endif;?>
    </div>
    <div class="p-5">
        <p class="mb-3 text-xs font-semibold tracking-wide uppercase">
        <?php 
            $categories = get_the_category();
            foreach($categories as $cat): 
        ?>
            <a href="<?php echo get_category_link( $cat->term_id);?>" class="transition-colors duration-200 hover:text-blue" aria-label="Category" title="<?php echo $cat->name;?>"><?php echo $cat->name;?></a>
        <?php endforeach;?>
            <time class="text-gray-600">— <?php echo get_the_date( 'jS F, Y' );?></time>
        </p>
        
            <a href="<?php the_permalink();?>" title="<?php the_title();?>" class="inline-block mb-3 text-2xl font-bold leading-5 transition-colors duration-200 hover:text-deep-purple-accent-700"><?php the_title();?></a>
        
        <p class="mb-2 text-gray-700">
            <?php the_excerpt();?>
        </p>
        <a href="<?php the_permalink();?>" aria-label="" class="mt-2 inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
    </div>
</div>