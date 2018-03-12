// Compiled file - any changes will be overwritten by grunt task
//!!
//!! js/navigation.js
jQuery(document).ready(function ($) {
  $('#hamburger-icon, #hamburger-makey, .nav-flyout-underlay').click(function() {
    $('#hamburger-icon').toggleClass('open');
    $('#hamburger-makey').animate({opacity: 'toggle'});
    $('#nav-flyout').animate({opacity: 'toggle'});
    $('body').toggleClass('nav-open-no-scroll');
    $('.nav-flyout-underlay').animate({opacity: 'toggle'});
  });

  $('.nav-flyout-column').on('click', '.expanding-underline', function(event) {
    if ($(window).width() < 577) { 
      event.preventDefault();
      $(this).toggleClass('underline-open');
      $(this).next('.nav-flyout-ul').slideToggle();
    }
  });

  //$('#nav-flyout').load('//makeco.wpengine.com/universal-nav-flyout.html .container');
});;//!!
//!! js/recaptcha.js
jQuery(document).ready(function(jQuery){
  // Thank you modal with more newsletter options
  jQuery(".fancybox-thx").fancybox({
    autoSize : false,
    width  : 400,
    autoHeight : true,
    padding : 0,
    afterLoad   : function() {
      this.content = this.content.html();
    }
  });
  // reCAPRCHA error message
  jQuery(".nl-modal-error").fancybox({
    autoSize : false,
    width  : 250,
    autoHeight : true,
    padding : 0,
    afterLoad   : function() {
      this.content = this.content.html();
    }
  });
  // YOUTUBE PLAYER FOR FANCYBOX MODALS
  jQuery(".fancytube").fancybox({
    maxWidth  : 800,
    maxHeight : 600,
    fitToView : false,
    width   : '70%',
    height    : '70%',
    autoSize  : false,
    closeClick  : false,
    openEffect  : 'none',
    closeEffect : 'none',
    padding : 0
  });
});

// Footer
var onSubmitFooter = function(token) {
  jQuery.post('https://secure.whatcounts.com/bin/listctrl', jQuery('.footer-sub-form').serialize());
  jQuery('.fancybox-thx').trigger('click');
} 
jQuery(document).on('submit', '.footer-sub-form', function (e) {
  e.preventDefault();
  onSubmitFooter();
});

var recaptchaKey = '6Lf_-kEUAAAAAHtDfGBAleSvWSynALMcgI1hc_tP';
onloadCallback = function() {
  if ( jQuery('#recapcha-footer').length ) {
    grecaptcha.render('recapcha-footer', {
      'sitekey' : recaptchaKey,
      'callback' : onSubmitFooter
    });
  }
};
