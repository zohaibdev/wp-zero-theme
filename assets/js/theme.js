(function ($) {
  $(document).ready(function () {
    //AOS.init();
    //setTimeout(AOS.init, 100);
    jQuery('#preloader').fadeOut(2000);

    jQuery(".menu-trigger").click(function () {
      jQuery(".responsive-menu").toggleClass("active");
    });


    var page = 1;
    jQuery('body').on('click', '.loadmore', function () {
      var data = {
        action: 'get_posts_data',
        page: page,
      };

      jQuery.post(the_ajax_script.ajaxurl, data, function (response) {
        if ($.trim(response) != '') {
          jQuery('#theme-posts').append($(response).fadeIn('slow'));
          page++;
          console.log(page);
        } else {
          jQuery('.loadmore').hide();
          jQuery(".no-more-post").html("No More Post Available");
        }
      });
    });
  })


})(jQuery);

jQuery(window).on('load', function () {
  jQuery('.loadmore').trigger('click');
});


