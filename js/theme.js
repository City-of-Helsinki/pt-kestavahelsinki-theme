(function($) {

  function initFocusHoverEffectOnSearchButton() {
    const paramClass = 'search-open-wrapper--hover';

    $(".search-open").hover(function(){
      $(this).closest('.search-open-wrapper').toggleClass(paramClass);
    }, function(){
      $(this).closest('.search-open-wrapper').toggleClass(paramClass);
    });

    $('.search-open').focusin(  
      function(){  
        $(this).closest('.search-open-wrapper').toggleClass(paramClass);
      }).focusout(  
      function(){  
        $(this).closest('.search-open-wrapper').toggleClass(paramClass);
      });
  }

  $(document).ready(function() {

   $('.home .current-menu-item a').css('font-family', 'HelsinkiGrotesk-Regular, Georgia, sans-serif');

   $(".search-open").click(function(){
    $('.search-box').slideToggle('fast');
    $('.search-box').addClass('open');

    var aria_expanded =  $('.search-box.open').attr('aria-expanded');
    aria_expanded = aria_expanded === 'true' ? 'false' : 'true';

    $('.search-box.open').attr('aria-expanded',  aria_expanded);

    $('.search-open .fa-search, .search-open .fa-times').toggle();

    if( aria_expanded === 'true' ) {
      $('#s').focus();
    }
  });

    // Owl Carousel DOM Elements
    var carousel1 = '#sync1';
    var carousel2 = '#sync2';

  // Initialize plugin
  var owlCarousel1 = $(carousel1).owlCarousel({
    items: 1,
    margin: 10,
    nav: true,
    navText: ['<div class="hds-icon hds-icon--size-xl hds-icon--arrow-left">', '<div class="hds-icon hds-icon--size-xl hds-icon--arrow-right">'],
  });
  var owlCarousel2 = $(carousel2).owlCarousel({
    items: 5,
    margin: 10,
  });

  // Sync carousel & add current class
  carouselSyncCurrentClass();

  // On carousel change: Sync carousel & add current class
  owlCarousel1.on('changed.owl.carousel', function() {
    carouselSyncCurrentClass();
  });
  owlCarousel2.on('changed.owl.carousel', function(event) {
    carouselSyncCurrentClass();
  });

  // Thumbs switch click event.
  owlCarousel2.find('.item').click(function () {
    var itemIndex = $(this).parent().index();
    owlCarousel1.trigger('to.owl.carousel', itemIndex);
    carouselSyncCurrentClass();
  });

  // add hover and focus effect on page search button
  initFocusHoverEffectOnSearchButton();


  function carouselSyncCurrentClass() {
    setTimeout(function () {
      var carousel1ActiveIndex = $('#sync1 .owl-item.active').index();
      $('#sync2 .owl-item').removeClass('current');
      var currentItem = $('#sync2 .owl-item:nth-child('+(carousel1ActiveIndex+1)+')');
      currentItem.addClass('current');

      if(!currentItem.hasClass('active')){
        if(currentItem.prevAll('.active').length > 0){
          owlCarousel2.trigger('next.owl.carousel');
        }
        if(currentItem.nextAll('.active').length){
          owlCarousel2.trigger('prev.owl.carousel');
        }
      }
    }, 100);
  }


});

    // Mobile navigation
	var mobilePanelVisible = false;
	$('.navbar-burger.burger').click(function(){
		if (mobilePanelVisible) {
			$('.mobile-menu-panel').hide();
		} else {
			$('.mobile-menu-panel').show();
		}
		mobilePanelVisible = !mobilePanelVisible;
	});

  /*
    var mobileSubMenuVisible = false;
    $('a::after').click(function(){
      if(mobileSubMenuVisible) {
        $('.sub-menu').hide();
      } else {
        $('.sub-menu').show();
      }
      mobileSubMenuVisible = !mobileSubMenuVisible;
    });
  */

    $('.menu .menu-item-has-children').click(function(e) {
      // opens sub menu, responsive view
      $(this).toggleClass('menu-item---submenu-open');
    });

    $('.sub-menu .menu-item').click(function(e) {
      // stops shutting submenu, responsive view
      e.stopPropagation(); //stops the parent from toggling
    });


  $('#uutiset button.load-more').click(function(){
  var button = $(this);
  var uutisetItemsVisible = $('#uutiset div.columns a').length;
  var posts_per_page = $('#uutiset').data("amount");
  $.ajax({ 
    url :ajax_params.ajax_url, 
    data : {action: "loadmore", "uutisetItemsVisible": uutisetItemsVisible, "catName": "uutiset", "amount": posts_per_page},
    type : 'POST',
    dataType : "html",
    beforeSend : function ( xhr ) {
      button.text('Ladataan...'); 
    },
    success : function( data ){
      if( data && data != 0) { 
        $("#uutiset div.columns").append(data);
        if($('#uutiset div.columns a').length % uutisetItemsVisible != 0){
          button.remove();
        } else {
          button.text( 'Lataa lisää' );
        }
      } else {
        button.remove();
      }
    }
  });
});
}(jQuery));