<?php get_header(); ?>

<div class="container">
<div class="index-text">
<h1>Hey there!</h1>
<p>See what projects I am working on:</p>
</div>

  <div class="row">

    <section class="col-lg-10 offset-lg-1" id="firs">

      <?php get_template_part( 'loop' ); ?>

    </section>
  </div>
</div>

<?php get_footer(); ?>
