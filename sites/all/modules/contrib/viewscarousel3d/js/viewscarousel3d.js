// $Id: viewscarousel3d.js,v 1.1.2.2 2010/08/15 23:52:51 rashad612 Exp $

Drupal.behaviors.viewscarousel3d_init = function(context) {

  if (Drupal.settings.viewscarousel3d) {
    $.each(Drupal.settings.viewscarousel3d, function(id) {
      
      var wrapper = $('#' + this.display_id + ':not(.viewscarousel3d-processed)', context).addClass('viewscarousel3d-processed');

      var carouselObject = {
        minScale: parseFloat(this.minScale),
        reflHeight: parseInt(this.reflHeight),
        reflGap: parseInt(this.reflGap),
        reflOpacity: parseFloat(this.reflOpacity),
        xPos: parseInt(parseInt($(wrapper).width()) / 2),
        yPos: 100,
        altBox: $(".viewscarousel3d-alt-text"),
        FPS: parseInt(this.FPS),
        speed: parseFloat(this.speed),
        autoRotate: this.autoRotate,
        autoRotateDelay: parseInt(this.autoRotateDelay),
        mouseWheel: this.mouseWheel,
        bringToFront: this.bringToFront
      };
      
      if(this.showButtons) {
        
        $(wrapper).append('<a id="' + this.display_id + '-left-btn" class="viewscarousel3d-left-btn viewscarousel3d-btn" href="#"></a>');
        $(wrapper).append('<a id="' + this.display_id + '-right-btn" class="viewscarousel3d-right-btn viewscarousel3d-btn" href="#"></a>');
        
        $('.viewscarousel3d-btn').click(function() { return false; });
        
        // I switched the behavior of the buttons.
        carouselObject.buttonLeft = $('#' + this.display_id + '-right-btn');
        carouselObject.buttonRight = $('#' + this.display_id + '-left-btn');
        
      }
      
      if(this.titleBox) {
        $('#' + this.display_id + '-wrapper:not(.viewscarousel3d-processed)', context).addClass('viewscarousel3d-processed')
        .append('<div id="' + this.display_id + '-title-text" class="viewscarousel3d-title-text"></div>');
      }
      carouselObject.titleBox = $('#' + this.display_id + '-title-text');
      

      $(wrapper).find('img').addClass("cloudcarousel");
      $(wrapper).CloudCarousel(carouselObject);
    });
  }
};
