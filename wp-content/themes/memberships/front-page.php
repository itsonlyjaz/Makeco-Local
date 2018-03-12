<?php
/**
 * The home page
 */

get_header(); ?>
<div id="page-content" style="background: url(https://placekitten.com/g/1200/800) no-repeat center center;">

  <div class="front-page container">

    <div class="row">

      <div class="col-sm-12">

        <h1 class="text-center">WE ARE ALL MAKERS</h1>
        <h2 class="text-center">Join a Worldwide Community</h2>
        <h3 class="text-center">We believe that making is an essential part of being human and crucial to effective education.</h3>

      </div>

    </div>

    <div class="row">

      <div class="col-xs-12 col-sm-4 membership-tier">
        <div class="membership-img">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Basic-package.png" alt="The free Make: membership tier">
        </div>
        <div class="text-center">
          <h3>Inspiration</h3>
          <p>Maker Mindset Playbook, Make: Community e-News, Maker Share Portfolio</p>
        </div>
        <p class="text-center">
          <a href="#" class="btn btn-red" role="button">FREE</a>
        </p>
      </div>

      <div class="col-xs-12 col-sm-4 membership-tier">
        <div class="membership-img">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Middle-package.png" alt="The middle Make: membership tier">
        </div>
        <div class="text-center">
          <h3>Hands On</h3>
          <p>Digital Make: Magazine Subscription + Faire Members Only + Basic Benefits</p>
        </div>
        <p class="text-center">
          <a href="#" class="btn btn-red" role="button">$49.99</a>
        </p>
      </div>

      <div class="col-xs-12 col-sm-4 membership-tier">
        <div class="membership-img">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/VIP-package.png" alt="The VIP Make: membership tier">
        </div>
        <div class="text-center">
          <h3>Mastery</h3>
          <p>Exclusive access to Workshops, Live Streams, + Enhanced Benefits</p>
        </div>
        <p class="text-center">
          <a href="#" class="btn btn-red" role="button">$99.99</a>
        </p>
      </div>

    </div><!-- end .row -->

  </div><!-- .container -->

<?php get_footer(); ?>