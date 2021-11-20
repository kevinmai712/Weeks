class TeamSlider {

  constructor() {
    this.init();
  }

  init() {
    $(document).ready(function() {
      $('.picture-slider').slick({
        centerMode: false,
        slidesToShow: 3,
        arrows: true,
        prevArrow: $(".left-arrow"),
        nextArrow: $(".right-arrow"),
        variableWidth: true,
        draggable: false,
        responsive: [{
            breakpoint: 768,
            settings: {
              arrows: true,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 3
            }
          },
          {
            breakpoint: 480,
            settings: {
              arrows: true,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 1
            }
          }
        ]
      });

    });

    var nextArrow = $(".slider-nav .col-inner .right-arrow");
    var prevArrow = $(".slider-nav .col-inner .left-arrow");
    var currentItem = $(".picture-slider .person-image").filter(".active");
    var slickItem = $(".slick-slide").filter(".slick-current");
    var personText = $(".about-person .person-info").filter(".active");
    var personPosition = $(".position .person-position").filter(".active");
    var pictureSlider = $(".picture-slider");

    nextArrow.on("click", function() {
      var nextItem = slickItem.next();
      var nextText = personText.next();
      var nextPosition = personPosition.next();

      var prevItem = currentItem.prev();


      personText.removeClass("active");
      personPosition.removeClass("active");

      if (nextText.length) {
        //adding class to next item
        personText = nextText.addClass("active");
        personPosition = nextPosition.addClass("active");
      } else {
        //adding class to first item if last item was active
        personText = $(".person-info").first().addClass("active");
        personPosition = $(".person-position").first().addClass("active");
      }
      
    });

    prevArrow.on("click", function() {
      // var nextItem = currentItem.prev();
      var nextItem = slickItem.prev();
      var nextText = personText.prev();
      var nextPosition = personPosition.prev();

      // currentItem.removeClass("active");
      personText.removeClass("active");
      personPosition.removeClass("active");

      if (nextText.length) {
        //adding class to previous item
        personText = nextText.addClass("active");
        personPosition = nextPosition.addClass("active");
      } else {
        //adding class to last item if first item was active
        personText = $(".person-info").last().addClass("active");
        personPosition = $(".person-position").last().addClass("active");
      }

    });
  }
}

export default TeamSlider;
