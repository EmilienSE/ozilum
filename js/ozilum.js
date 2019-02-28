(function($) {
  "use strict"; // Start of use strict

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 70)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    offset: 100
  });

  // Collapse Navbar
  var navbarCollapse = function() {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-shrink");
    } else {
      $("#mainNav").removeClass("navbar-shrink");
    }
  };
  // Collapse now if page is not at top
  navbarCollapse();
  // Collapse the navbar when page is scrolled
  $(window).scroll(navbarCollapse);

  $(function() {
    var form = $('#contactForm');
    var formMessages = $('#form-message');
    $(form).submit(function(event) {
      event.preventDefault();
      var formData = $(form).serialize();
      $.ajax({
        type: 'POST',
        url: '../mailer.php',
        data: formData
      })
      .done(function(response) {
        $(formMessages).removeClass('alert alert-danger');
        $(formMessages).addClass('alert alert-success');
        $(formMessages).text(response);
        $('#inputNom').val('');
        $('#inputPrenom').val('');
        $('#inputEmail').val('');
        $('#inputPhone').val('');
        $('#inputMessage').val('');

        function dropAlert(){
            $(formMessages).removeClass('alert alert-success');
            $(formMessages).text('');
        }

        setTimeout(dropAlert, 5000);
      })
      .fail(function(data) {
        $(formMessages).removeClass('alert alert-success');
        $(formMessages).addClass('alert alert-danger');
        if (data.responseText !== '') {
            $(formMessages).text(data.responseText);
        } else {
            $(formMessages).text('Une erreur est survenue, réessayez plus tard.');
        }
      });
    });
  });

})(jQuery); // End of use strict