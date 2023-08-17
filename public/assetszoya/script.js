$(document).ready(function() {
  var titleText = $('title').text();
  var uppercaseText = titleText.toUpperCase();
  $('title').text(uppercaseText);
});

$(document).ready(function() {
    var titleText = $('title').text();
    var uppercaseText = titleText.toUpperCase();
    $('title').text(uppercaseText);
});

$(document).ready(function() {
  function typeAnimation(element) {
      var text = element.text();
      element.empty();
      
      var i = 0;
      var interval = setInterval(function() {
          if (i < text.length) {
              element.append(text.charAt(i));
              i++;
          } else {
              clearInterval(interval);
          }
      }, 30);
  }
  typeAnimation($(".type_text"));
});

$(document).ready(function() {
  var windowWidth = $(window).width(); // Mendapatkan lebar jendela saat ini

  // Hanya jalankan skrip jika lebar jendela lebih besar dari 768px
  if (windowWidth > 768) {
    $(window).on('scroll', function() {
      $('.target-section').each(function() {
        var sectionTop = $(this).offset().top;
        var sectionHeight = $(this).outerHeight();
        var viewportTop = $(window).scrollTop();
        var viewportHeight = $(window).height();
        var visiblePercentage = ((viewportHeight - Math.max(0, sectionTop - viewportTop)) / sectionHeight) * 100;

        if (visiblePercentage > 20) {
          $(this).css({
            opacity: 1,
            transform: 'translateY(0)'
          });
          $(this).find('.data_med').addClass('animated');

          var listItems = $(this).find('.list_cksatu');
          listItems.each(function(index) {
            var element = $(this);
            setTimeout(function() {
              element.addClass('animated');
            }, delay * index);
          });
        } else {
          $(this).css({
            opacity: 0,
            transform: 'translateY(20px)'
          });
          $(this).find('.data_med').removeClass('animated');
          $(this).find('.list_cksatu').removeClass('animated');
        }
      });
    }).scroll();
  }

  var delay = 500;
});
