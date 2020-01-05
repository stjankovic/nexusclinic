<!-- Go to Top -->
<a class="js-go-to u-go-to" href="#"
  data-position='{"bottom": 25, "left": 25 }'
  data-type="fixed"
  data-offset-top="400"
  data-compensation="#header"
  data-show-effect="slideInUp"
  data-hide-effect="slideOutDown">
  <span class="fa fa-arrow-up u-go-to__inner"></span>
</a>
<!-- End Go to Top -->

<!-- JS Global Compulsory -->
<script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="../assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
<script src="../assets/vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="../assets/vendor/bootstrap/bootstrap.min.js"></script>

<!-- JS Implementing Plugins -->
<script src="../assets/vendor/slick-carousel/slick/slick.js"></script>
<script src="../assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
<script src="../assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>
<script src="../assets/vendor/appear.js"></script>
<script src="../assets/vendor/responsively-lazy/responsivelyLazy.min.js"></script>
<script src="../assets/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
<script src="../assets/vendor/fancybox/jquery.fancybox.min.js"></script>
<script src="../assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="../assets/vendor/custombox/dist/custombox.min.js"></script>

<!-- JS Front -->
<script src="../assets/js/hs.core.js"></script>
<script src="../assets/js/components/hs.header.js"></script>
<script src="../assets/js/components/hs.slick-carousel.js"></script>
<script src="../assets/js/components/hs.fancybox.js"></script>
<script src="../assets/js/components/hs.go-to.js"></script>
<script src="../assets/js/components/hs.cubeportfolio.js"></script>
<script src="../assets/js/components/hs.show-animation.js"></script>
<script src="../assets/js/components/hs.onscroll-animation.js"></script>
<script src="../assets/js/components/hs.modal-window.js"></script>

<!-- JS Plugins Init. -->
<script>
  $(window).on('load', function () {
    // initialization of HSMegaMenu component
    $('.js-mega-menu').HSMegaMenu({
      event: 'hover',
      pageContainer: $('.container'),
      breakpoint: 767,
      hideTimeOut: 0
    });

    // initialization of autonomous popups
    $.HSCore.components.HSModalWindow.init('[data-modal-target]', '.js-modal-window', {
      autonomous: true
    });

    // initialization of scroll animation
    $.HSCore.components.HSOnScrollAnimation.init('[data-animation]');
  });

  $(document).on('ready', function () {
    // initialization of header
    $.HSCore.components.HSHeader.init($('#header'));

    // initialization of slick carousel
    $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

    // initialization of go to
    $.HSCore.components.HSGoTo.init('.js-go-to');

    // initialization of cubeportfolio
    $.HSCore.components.HSCubeportfolio.init('.cbp');

    // initialization of popups
    $.HSCore.components.HSFancyBox.init('.js-fancybox');

    // initialization of popups
    $.HSCore.components.HSPopup.init('.js-fancybox');

    // initialization of autonomous popups
    $.HSCore.components.HSModalWindow.init('[data-modal-target]', '.js-shopping-cart-window', {
      autonomous: true
    });

    // initialization of unfold component
    $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
      afterOpen: function () {
        $(this).find('input[type="search"]').focus();
      }
    });

  });

</script>

<script src="../assets/js/viewportchecker.js"></script>

<script>
jQuery(document).ready(function() {
  jQuery('.post').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated bounceIn',
      offset: 100
     });
});
</script>