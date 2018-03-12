<footer class="new-footer">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <span><strong>Join us!</strong> Subscribe to our newsletter: </span>
        <?php
          $isSecure = "http://";
          if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
            $isSecure = "https://";
          }
        ?>
        <form class="footer-sub-form" action="https://secure.whatcounts.com/bin/listctrl" method="POST">
          <input type="hidden" name="slid" value="6B5869DC547D3D46B52F3516A785F101"/><!-- Make: -->
          <input type="hidden" name="cmd" value="subscribe"/>
          <input type="hidden" name="custom_source" value="footer"/>
          <input type="hidden" name="custom_incentive" value="none"/>
          <input type="hidden" name="custom_url" value="<?php echo $_SERVER[" HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>"/>
          <input type="hidden" id="format_mime" name="format" value="mime"/>
          <input type="hidden" name="goto" value=""/>
          <input type="hidden" name="custom_host" value="<?php echo $_SERVER[" HTTP_HOST"]; ?>" />
          <input type="hidden" name="errors_to" value=""/>
          <div id="recapcha-footer" class="g-recaptcha" data-size="invisible"></div>
          <div class="float-label-control">
            <input name="email" class="form-control" placeholder="your email here" required type="email">
          </div>
          <input class="footer-submit" type="submit" value=" " />
        </form>

      </div>
    </div>
    
          
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-4 footer-nav-l">
        <a href="https://makezine.com/" target="_blank">Make: magazine</a>
        <a href="https://makerfaire.com/" target="_blank">Maker Faire</a>
      </div>

      <div class="col-xs-12 col-sm-4 col-sm-push-4 col-md-push-4 col-md-4 footer-nav-r">
<!--         <a href="/contact/">Contact</a>
        <a href="/advertise-with-us/">Advertise</a>
        <a href="/privacy/">Privacy</a> -->
      </div>

      <div class="col-xs-12 col-sm-4 col-sm-pull-4 col-md-pull-4 col-md-4 text-center">
        <ul class="social-network">
          <li><a href="//facebook.com/makemagazine" class="icoFacebook" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
          <li><a href="//twitter.com/make" class="icoTwitter" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
          <li><a href="//www.instagram.com/makemagazine/" class="icoInstagram" title="Instagram" target="_blank"><i class="fa fa-instagram" target="_blank"></i></a></li>
          <li><a href="//www.youtube.com/user/makemagazine" class="icoYoutube" title="Youtube" target="_blank"><i class="fa fa-youtube-play" target="_blank"></i></a></li>
        </ul>
      </div>
    </div>

    <div class="footer_copyright text-center">
      <p class="muted"><small>Use of this Site constitutes acceptance of our <a href="/terms/">Terms</a> and <a href="/privacy/">Privacy Policy</a>. The material on this site may not be reproduced, distributed, transmitted, cached or otherwise used, except with the prior written permission of Maker Media.</small></p>
      <p class="muted"><small>&copy; 2004-<?php echo date("Y") ?> Maker Media, Inc.  All rights reserved</small></p>
    </div>
  </div><!-- END container -->
</footer>
<div id="nav-overlay"></div>
</div><!-- end #page-content -->
<?php wp_footer(); ?>

<div class="fancybox-thx" style="display:none;">
  <div class="nl-modal-cont nl-thx-p2">
    <div class="col-sm-4 hidden-xs nl-modal">
      <span class="fa-stack fa-4x">
        <i class="fa fa-circle-thin fa-stack-2x"></i>
        <i class="fa fa-thumbs-o-up fa-stack-1x"></i>
      </span>
    </div>
    <div class="col-sm-8 col-xs-12 nl-modal">
      <h3>Awesome!</h3>
      <p>Thanks for signing up.</p>
    </div>
    <div class="clearfix"></div>
  </div>
</div>

<div class="nl-modal-error" style="display:none;">
  <div class="col-xs-12 nl-modal padtop">
    <p class="lead">The reCAPTCHA box was not checked. Please try again.</p>
  </div>
  <div class="clearfix"></div>
</div>

<!-- GA -->
<!-- set this up when its ready -->
<script>
  // (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  // (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  // m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  // })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  // ga('create', 'UA-51157-29', 'auto');
  // ga('send', 'pageview');
</script>

<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
</body>
</html>