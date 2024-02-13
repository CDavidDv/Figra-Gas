$(window).scroll(function() {
    $(".hidden").each(function(index) {
      var position = $(this).offset().top;
      var scrollPosition = $(window).scrollTop() + $(window).height() - 150;
      var delay = index * 100; // Ajusta el valor para cambiar el desfazamiento
  
      if (scrollPosition > position) {
        var element = $(this);
        setTimeout(function() {
          element.addClass("visible");
        }, delay);
      }
      if ((scrollPosition+270) > (position)) {
        $(".hidden-right, .hidden-left").addClass("visible");
      }
    });
  
  
    
  });
  