<?php
/**
 * The main template file. Fallback for all queries.
 */
get_header(); ?>

<section style="padding: 64px 24px; text-align: center;">
  <div class="container">
    <h1 class="section-title">Welcome to <span>StarTechNow</span></h1>
    <p class="section-sub">Your Idea. Our Execution.</p>
    <a href="<?php echo esc_url( home_url('/') ); ?>" class="btn-primary">Go to Homepage</a>
  </div>
</section>

<?php get_footer(); ?>
