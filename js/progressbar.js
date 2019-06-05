  // Progress bar
  $(function(){
    $(window).scroll(function(){
      $(".progress-bar:not(.animated)").each(function(){
        if ($(this).is(':visible')) {
            var progressBar = $(this); 
            progressBar.animate({
              width: progressBar.data('width') + '%'
            }, 4000);
            progressBar.addClass('animated');
        }   
      });
    }); 
  }); 