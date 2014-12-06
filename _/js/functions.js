(function ($) {
	$(document).ready(function (){
       //init isotope
       var $content = $('#tre');
       $content.imagesLoaded( function() {
         $content.isotope({
           itemSelector: '#goodyear',
           //layoutMode : 'masonry',
               //columnWidth: 250
         });
       });
       //menu mobile
       $("#nav-mobile").html($("#nav-main").html());
       $("#nav-trigger span").click(function(){
              if ($("nav#nav-mobile ul").hasClass("expanded")) {
                     $("nav#nav-mobile ul.expanded").removeClass("expanded").slideUp(250);
                     $(this).removeClass("open");
              } else {
                     $("nav#nav-mobile ul").addClass("expanded").slideDown(250);
                     $(this).addClass("open");
              }
       });
        //fade in du slider
       $('#sl').fadeIn();
       //ne lancer les scripts que si la taille de l'Žcran est satidfaisante
       if ($(this).width() > 480) {
              var controller = $.superscrollorama();
              controller.addTween('#fade-it', TweenMax.from( $('#fade-it'), .5, {css:{opacity: 0}}));											controller.addTween('footer#foot-sec.blue-middle div.well.panel div.container.relative', TweenMax.from($('footer#foot-sec.blue-middle div.well.panel div.container.relative'), .5, {css:{opacity: 0}}));
              jQuery('.scrollto').localScroll(800);
              jQuery('#head-top').parallax("50%", 0.2);
              jQuery('.inner-wrap').parallax("0%", 0.5);
              jQuery('.panel').parallax("0%", 0.1);
              jQuery('.alt').parallax("50%", 0.3);
              jQuery('.alt2').parallax("40%", 0.3);
              jQuery('.alt3').parallax("0%", 0.3);
              jQuery('#section0').parallax("0%", 0.5);
       }else{
                     //alert("ecran trop petit")
              }

jQuery('#section0').css({'min-height':realHeight});
                     jQuery('#section0.ym-wrapper div.fixer').css({'minHeight':realHeight});
                     var realHeight = jQuery(window).height();
                     var headerHeight = $('.navbar-inner').height();
                     var gobtnHeight = jQuery('.gobtnwrapper').height();
                     var winHeight = realHeight - (headerHeight + gobtnHeight);
                     var winHeight2 = winHeight/2
                     var winWidth = jQuery(window).width();
                     jQuery('.gobtnwrapper').localScroll(3000);
                     jQuery('.topgobtn').localScroll(3000);
                     jQuery.localScroll();
              jQuery('#yeahh').click(function() {
               jQuery('#faireun').slideToggle();
              });
              jQuery(window).resize(function() {
                     if ($(this).width() > 480) {
                        // parallax

                     }
                  });


	});

}(window.jQuery || window.$));