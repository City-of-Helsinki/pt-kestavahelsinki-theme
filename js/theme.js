(function($) {

  $(document).ready(function() {

   $('.home .current-menu-item a').css('font-family', 'HelsinkiGrotesk-Regular, Georgia, sans-serif');

   $(".search-open").click(function(){
    $('.search-box').slideToggle('fast');
    $('.search-box').addClass('open');
    $('.search-open .fa-search, .search-open .fa-times').toggle();
  });

   var sync1 = $("#sync1");
   var sync2 = $("#sync2");
    var slidesPerPage = 5; //globaly define number of elements per page
    var syncedSecondary = true;

    sync1.owlCarousel({
      items: 1,
      slideSpeed: 2000,
      nav: true,
      autoplay: false, 
      dots: false,
      loop: true,
      autoHeight: false,
      video: true,
      responsiveRefreshRate: 200,
      navText: ['<div class="hds-icon hds-icon--size-xl hds-icon--arrow-left">', '<div class="hds-icon hds-icon--size-xl hds-icon--arrow-right">'],
    }).on('changed.owl.carousel', syncPosition);

    sync2
    .on('initialized.owl.carousel', function() {
      sync2.find(".owl-item").eq(0).addClass("current");
    })
    .owlCarousel({
      items: slidesPerPage,
      dots: false,
      nav: false,
      margin:15,
      smartSpeed: 200,
      slideSpeed: 500,
            slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
            responsiveRefreshRate: 100
          }).on('changed.owl.carousel', syncPosition2);

    function syncPosition(el) {
        //if you set loop to false, you have to restore this next line
        //var current = el.item.index;

        //if you disable loop you have to comment this block
        var count = el.item.count - 1;
        var current = Math.round(el.item.index - (el.item.count / 2) - .5);

        if (current < 0) {
          current = count;
        }
        if (current > count) {
          current = 0;
        }

        //end block

        sync2
        .find(".owl-item")
        .removeClass("current")
        .eq(current)
        .addClass("current");
        var onscreen = sync2.find('.owl-item.active').length - 1;
        var start = sync2.find('.owl-item.active').first().index();
        var end = sync2.find('.owl-item.active').last().index();

        if (current > end) {
          sync2.data('owl.carousel').to(current, 100, true);
        }
        if (current < start) {
          sync2.data('owl.carousel').to(current - onscreen, 100, true);
        }
      }

      function syncPosition2(el) {
        if (syncedSecondary) {
          var number = el.item.index;
          sync1.data('owl.carousel').to(number, 100, true);
        }
      }

      sync2.on("click", ".owl-item", function(e) {
        e.preventDefault();
        var number = $(this).index();
        sync1.data('owl.carousel').to(number, 300, true);
      });


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
    var mobileSubMenuVisible = false;
    $('a::after').click(function(){
      if(mobileSubMenuVisible) {
        $('.sub-menu').hide();
      } else {
        $('.sub-menu').show();
      }
      mobileSubMenuVisible = !mobileSubMenuVisible;
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