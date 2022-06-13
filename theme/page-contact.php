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

<!------------------------------------- 
/// 01   HERO SECTION
--------------------------------------->
<section class="relative bg-white">
  <img
    class="absolute object-[75%] sm:object-[25%] object-cover w-full h-full opacity-25 sm:opacity-100"
    src="https://images.pexels.com/photos/911738/pexels-photo-911738.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
    alt="Couple on a bed with a dog"
  />

  <div class="cont relative flex items-center py-16 h-60 md:h-72 lg:h-96">
    <div class="top-1/3 md:top-1/2 md:left-1/2 left-5">
      <!-- Name -->
      <div class="title py-10">
        <h1 class="text-3xl text-blue font-semibold py-2 uppercase">Contact Me</h1>
        <p class="text-2xl capitalize">Reach out through accessible channels</p>

        <!-- line -->
        <div class="h-1 rounded-sm w-24 bg-blue my-3 origin-left"></div>
      </div>
    </div>
  </div>
</section>

<!------------------------------------- 
/// 02   CONTACT ADDRESS SECTION
--------------------------------------->
<section class="">
    <div class="cont py-8">
        <div class="px-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-lg md:px-24 lg:px-8 ">
            <div class="grid max-w-screen-lg gap-8 row-gap-6 sm:mx-auto lg:grid-cols-2">
                <a href="tel:+234 800 000 0000" aria-label="Make a Call" title="Make a Call" class="relative block p-px overflow-hidden transition duration-300 transform border rounded shadow-sm hover:scale-105 group hover:shadow-xl">
                    <div class="relative flex items-center justify-between p-5 bg-white rounded-sm">
                        <div class="pr-4">
                        <h6 class="mb-2 font-semibold leading-5">
                            Phone Number
                        </h6>
                        <p class="text-sm text-gray-900">
                            0800 000 0000
                        </p>
                        </div>
                        <div class="flex items-center justify-center">
                        <svg class="w-3 text-gray-700 transition-colors duration-300 group-hover:text-deep-purple-accent-400" fill="currentColor" viewBox="0 0 12 12">
                            <path d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z"></path>
                        </svg>
                        </div>
                    </div>
                </a>
                <a href="/" aria-label="Send a Message" title="Send a Message" class="relative block p-px overflow-hidden transition duration-300 transform border rounded shadow-sm hover:scale-105 group hover:shadow-xl">
                    <div class="relative flex items-center justify-between p-5 bg-white rounded-sm">
                        <div class="pr-4">
                        <h6 class="mb-2 font-semibold leading-5">
                            Email Address
                        </h6>
                        <p class="text-sm text-gray-900">
                            drisah@gmail.com
                        </p>
                        </div>
                        <div class="flex items-center justify-center">
                        <svg class="w-3 text-gray-700 transition-colors duration-300 group-hover:text-deep-purple-accent-400" fill="currentColor" viewBox="0 0 12 12">
                            <path d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z"></path>
                        </svg>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

</section>

<!------------------------------------- 
/// 03   CONTACT FORM SECTION
--------------------------------------->
<section class="">
    <div class="cont grid gap-8 lg:grid-cols-2 py-16 pt-8">
        <div class="flex items-center justify-center">
            <div class="max-w-xl mx-auto">
                <div class="flex flex-col items-center justify-center p-4 md:p-8">
                    <h2 class="mb-5 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none md:text-center">
                        Schedule Consultation<br class="hidden md:block" />
                        or Checkups
                    </h2>
                    <p class="mb-5 text-base text-gray-700 md:text-lg md:text-center">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae. explicabo.
                    </p>
                    <div class="mb-10 text-center md:mb-16 lg:mb-20">
                        <a
                        class="btn-primary "
                        href="/get-started"
                        >
                            Schedule Session 
                        </a>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="mb-2 text-sm text-gray-600 md:mb-2">Follow us</div>
                        <div class="flex items-center space-x-4">
                        <div class="flex items-center">
                            <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                <path
                                d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z"
                                ></path>
                            </svg>
                            </a>
                        </div>
                        <div class="flex items-center">
                            <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
                            <svg viewBox="0 0 30 30" fill="currentColor" class="h-6">
                                <circle cx="15" cy="15" r="4"></circle>
                                <path
                                d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z"
                                ></path>
                            </svg>
                            </a>
                        </div>
                        <div class="flex items-center">
                            <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                <path
                                d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"
                                ></path>
                            </svg>
                            </a>
                        </div>
                        <div class="flex items-center">
                            <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-6">
                                <path
                                d="M23.8,7.2c0,0-0.2-1.7-1-2.4c-0.9-1-1.9-1-2.4-1C17,3.6,12,3.6,12,3.6h0c0,0-5,0-8.4,0.2 c-0.5,0.1-1.5,0.1-2.4,1c-0.7,0.7-1,2.4-1,2.4S0,9.1,0,11.1v1.8c0,1.9,0.2,3.9,0.2,3.9s0.2,1.7,1,2.4c0.9,1,2.1,0.9,2.6,1 c1.9,0.2,8.2,0.2,8.2,0.2s5,0,8.4-0.3c0.5-0.1,1.5-0.1,2.4-1c0.7-0.7,1-2.4,1-2.4s0.2-1.9,0.2-3.9v-1.8C24,9.1,23.8,7.2,23.8,7.2z M9.5,15.1l0-6.7l6.5,3.4L9.5,15.1z"
                                ></path>
                            </svg>
                            </a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="flex items-center justify-center">
            <div class="max-w-xl lg:px-4 xl:px-8 lg:w-5/6 xl:w-4/5">
                <div class="bg-white rounded shadow-2xl p-7 sm:p-10">
                    <h3 class="mb-4 text-xl font-semibold sm:text-center sm:mb-6 sm:text-2xl">
                        Sign up for updates
                    </h3>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>

</section>


<?php
get_footer();