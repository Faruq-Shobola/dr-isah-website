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
        <h1 class="text-3xl text-blue font-semibold py-2 uppercase">About Me</h1>
        <p class="text-2xl capitalize">our best services for your kids</p>

        <!-- line -->
        <div class="h-1 rounded-sm w-24 bg-blue my-3 origin-left"></div>
      </div>
    </div>
  </div>
</section>


<!------------------------------------- 
/// 02   ABOUT SECTION
--------------------------------------->
<section class="">
  <div class="cont py-20">
    <div class="grid grid-cols-1 gap-8 lg:gap-16 lg:grid-cols-2">
      <div class="relative h-64 overflow-hidden rounded-md sm:h-80 lg:h-full">
        <img
          class="absolute inset-0 object-cover w-full h-full"
          src="https://www.hyperui.dev/photos/man-1.jpeg"
          alt="Man using a computer"
        />
      </div>

      <div class="lg:py-20 md:w-4/5">
        <h2 class="text-3xl font-bold sm:text-4xl">Dr. ISAH TOSIN</h2>
        <h5 class="text-blue font-medium text-lg uppercase mt-2">medical doctor</h5>

        <p class="mt-4 text-sm text-gray-600 leading-6 text-justify">
          who focuses on advocacy, diagnosis of women diseases and illnesses with treatment to creating health consciousness among female population. His passion towards health care and medicine started as early as the youthful days as
          prominent member of rescue team of water accident and drowned persons in his local village around Ibeju/ Lekki local government of Lagos state Nigeria. committee of care giver to sport injury victims 
          regularly  in touch with elders of traditional medicine practitioners who handle victims of snake bites visitation and observation of traditional birth attendance all of the above happened before the choice  of science subjects towards becoming a Dr.
        </p>
      </div>
    </div>
  </div>
</section>

<!------------------------------------- 
/// 03   EXPERIENCE AND QUALIFICATIONS
--------------------------------------->
<section class="">
  <div class="cont px-4 py-16">
    <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
      <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
          Experience and Qualifications
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
              Certifications
            </h6>
            <ol>
              <li class="text-sm text-gray-900">
                B.Sc ( biochemistry) Unimaid.
              </li>
              <li class="text-sm text-gray-900">
                MBBS , LASUCOM.
              </li>
              <li class="text-sm text-gray-900">
                BLS , basic life support.
              </li>
              <li class="text-sm text-gray-900">
                ACLS , Advance cardiovascular Life support.  
              </li>
              <li class="text-sm text-gray-900">
                Advance Professional Diploma in Health, Safety and Environment, CMUL.
              </li>
              <li class="text-sm text-gray-900">
                PGDFM, post graduate Diploma Family Medicine.NPMCN.
              </li>
              <li class="text-sm text-gray-900">
                LIMH , leadership in Health Management. Washington.
              </li>
              <li class="text-sm text-gray-900">
                HEALTH MONITORING AND EVALUATION. Washington .
              </li>
              <li class="text-sm text-gray-900">
                Accredited Mediator.. LMDC/High court.
              </li>
            </ol>
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
            <h6 class="mb-2 font-semibold leading-5">Projects</h6>
            <ol>
              <li class="text-sm text-gray-900">
                Babies day caring for the under 5 children.
              </li>
              <li class="text-sm text-gray-900">
                Community free health services.
              </li>
              <li class="text-sm text-gray-900">
                Elders health forum
              </li>
              <li class="text-sm text-gray-900">
                OFH free Hepatitis screening / vaccination.
              </li>
              <li class="text-sm text-gray-900">
                Free Eye check / prescription 
              </li>
              <li class="text-sm text-gray-900">
                Women’s health Self breast examination Seminars. Cervical cancers screening / Vaccinations.
              </li>
            </ol>
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
            <h6 class="mb-2 font-semibold leading-5">Awards</h6>
            <ol>
            <li class="text-sm text-gray-900">
                NMA , Nigeria medical association .
              </li>
              <li class="text-sm text-gray-900">
                FAAE, Fellow of Afrca entrepreneurs 
              </li>
              <li class="text-sm text-gray-900">
                Online diabetes management expert.
              </li>
            </ol>
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
</section>

<!-------------------------------- 
/// 04   TESTIMONIALS
---------------------------------->
<section class="bg-gray">
  <?php get_template_part( 'template-parts/content/content', 'testimonial' ); ?>
</section>

<!-------------------------------- 
/// 05   CALL-TO-ACTION
---------------------------------->
<?php get_template_part( 'template-parts/content/content', 'cta' ); ?>

<?php
get_footer();
