
// variables
var $header_top = $('.header-top');
var $nav = $('nav');



// toggle menu 
$header_top.find('a').on('click', function() {
  $(this).parent().toggleClass('open-menu');
});



// fullpage customization
$('.wrapper').fullpage({
  sectionsColor: ['#B8AE9C', '#348899', '#F2AE72', '#F2AE72'],
  sectionSelector: '.fullpage',
  slideSelector: '.horizontal-scrolling',
  navigation: true,
  slidesNavigation: true,
  controlArrows: false,
  anchors: ['firstSection', 'secondSection', 'thirdSection', 'fourthSection'],
  menu: '#menu',

  afterLoad: function(anchorLink, index) {
    if (index == 1) {
      $header_top.css('background', 'rgba(244, 247, 247, .7)');
    }
    if (index == 2) {
      $header_top.css('background', 'rgba(201, 240, 242, .9)');
    }
    if (index == 3) {
      $header_top.css('background', 'rgba(201, 240, 242, .9)');
    }
    if (index == 4) {
      $header_top.css('background', 'rgba(240, 231, 222, .9)');
    }
    if (index == 5) {
      $header_top.css('background', 'rgba(201, 240, 242, .9)');
    }
    $nav.css('background', 'rgba(0, 47, 77, .25)');
    if (index == 5) {
        $('#fp-nav').hide();
      }
  },

  onLeave: function(index, nextIndex, direction) {
    if(index == 5) {
      $('#fp-nav').show();
    }
  },

  afterSlideLoad: function( anchorLink, index, slideAnchor, slideIndex) {
    if(anchorLink == 'fifthSection' && slideIndex == 1) {
      $.fn.fullpage.setAllowScrolling(false, 'up');
      $header_top.css('background', 'transparent');
      $nav.css('background', 'transparent');
      $(this).css('background', '#374140');
      $(this).find('h2').css('color', 'white');
      $(this).find('h3').css('color', 'white');
      $(this).find('p').css(
        {
          'color': '#DC3522',
          'opacity': 1,
          'transform': 'translateY(0)'
        }
      );
    }
  },

  onSlideLeave: function( anchorLink, index, slideIndex, direction) {
    // if(anchorLink == 'fifthSection' && slideIndex == 1) {
    //   $.fn.fullpage.setAllowScrolling(true, 'up');
    //   $header_top.css('background', 'rgba(0, 47, 77, .3)');
    //   $nav.css('background', 'rgba(0, 47, 77, .25)');
    // }
  } 
});

$("#date-picker-searchteetime").on('click', function() {
    // var datePicker = $('#date-picker-searchteetime').data("kendoDatePicker");
    // datePicker.open();
    // if ($('#date-picker-searchteetime_dateview').css('display') == 'none') {
    //     datePicker.open();
    // } else {
    //     datePicker.close();
    // }
});
