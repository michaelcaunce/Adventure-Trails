<?php

  get_header();
  // Adding the title and subtitle specific to the events page using the pageBanner function.
  pageBanner(array(
    'title' => 'All Events',
    'subtitle' => 'See What Is Going On In Our World'
  ));

  ?>

  <div class="container container--narrow page-section">
    <?php

    // While there are posts, call the the wordpress function, the_post()
    // The while loop will display all of the blog posts in the layout below.
    while (have_posts()) {
      the_post();
      // Calling a wordpress function to access event.php within template-parts folder
      get_template_part('template-parts/content-event');
    } ?>

    <!-- wordpress theme for pagination -->
     <?php
      echo paginate_links();
      ?>
      <hr class="section-break">
      <p>Looking for a recap of past events? <a href="<?php echo site_url('/past-events') ?>">Check out our past events archive</a></p>
  </div>

  <?php

  get_footer();

 ?>
