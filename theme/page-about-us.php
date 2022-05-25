<?php
/**
 * The template for displaying About Us page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dr-isah
 */

get_header();
?>


<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
    <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
        The quick, brown fox jumps over a lazy dog
    </h2>
  </div>
  <div class="grid max-w-screen-lg gap-8 lg:grid-cols-2 sm:mx-auto">
    <div class="flex flex-col justify-center">
      <div class="flex">
        <div class="mr-4">
          <div class="flex items-center justify-center w-10 h-10 mb-3 rounded-full bg-blue">
            <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="#ffffff" viewBox="0 0 52 52">
              <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="#ffffff" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg>
          </div>
        </div>
        <div>
          <h6 class="mb-2 font-semibold leading-5">
            They urge you to put down
          </h6>
          <p class="text-sm text-gray-900">
            Skate ipsum dolor sit amet, alley oop vert mute-air Colby Carter flail 180 berm. Half-cab camel back ollie transition ledge Wes Humpston 1080.
          </p>
          <hr class="w-full my-6 border-gray-300" />
        </div>
      </div>
      <div class="flex">
        <div class="mr-4">
          <div class="flex items-center justify-center w-10 h-10 mb-3 rounded-full bg-blue">
            <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="#ffffff" viewBox="0 0 52 52">
              <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="#ffffff" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg>
          </div>
        </div>
        <div>
          <h6 class="mb-2 font-semibold leading-5">The powerless in a world</h6>
          <p class="text-sm text-gray-900">
            The first mate and his Skipper too will do their very best to make the others comfortable in their tropic island nest. Michael Knight a young loner.
          </p>
          <hr class="w-full my-6 border-gray-300" />
        </div>
      </div>
      <div class="flex">
        <div class="mr-4">
          <div class="flex items-center justify-center w-10 h-10 mb-3 rounded-full bg-blue">
            <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="#ffffff" viewBox="0 0 52 52">
              <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="#ffffff" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg>
          </div>
        </div>
        <div>
          <h6 class="mb-2 font-semibold leading-5">The powerless in a world</h6>
          <p class="text-sm text-gray-900">
            The first mate and his Skipper too will do their very best to make the others comfortable in their tropic island nest. Michael Knight a young loner.
          </p>
          <hr class="w-full my-6 border-gray-300" />
        </div>
      </div>
      <div class="flex">
        <div class="mr-4">
          <div class="flex items-center justify-center w-10 h-10 mb-3 rounded-full bg-blue">
            <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="#ffffff" viewBox="0 0 52 52">
              <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="#ffffff" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg>
          </div>
        </div>
        <div>
          <h6 class="mb-2 font-semibold leading-5">Tell them I hate them</h6>
          <p class="text-sm text-gray-900">
            Chase ball of string eat plants, meow, and throw up because I ate plants going to catch the red dot today going to catch the red dot today. I could pee on this if I had the energy.
          </p>
        </div>
      </div>
      
    </div>
    <div class="grid grid-cols-2 gap-5">
      <img class="object-cover w-full h-56 col-span-2 rounded shadow-lg" src="https://images.pexels.com/photos/3184360/pexels-photo-3184360.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" alt="" />
      <img class="object-cover w-full h-48 rounded shadow-lg" src="https://images.pexels.com/photos/3184339/pexels-photo-3184339.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" alt="" />
      <img class="object-cover w-full h-48 rounded shadow-lg" src="https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" alt="" />
    </div>
  </div>
</div>

<?php get_template_part( 'template-parts/content/content', 'testimonial' ); ?>

<?php get_template_part( 'template-parts/content/content', 'cta' ); ?>

<?php
get_footer();