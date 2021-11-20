class PopupForm {
	constructor() {
		this.init();
	}

	init() {

        var openFormbtn = $(".popupbtn");
        var closeFormbtn = $(".closeform");
        var form = $(".popupForm");       



        //jQuery('.popupformwrap > div.wpcf7 > form').wpcf7InitForm();
        openFormbtn.click(function(){
            form.css('display', 'flex');
            $("body").addClass("form-open");
            $("body").addClass("noscroll");
            window.scrollTo(0,0);
        });
        closeFormbtn.click(function(){
            form.css('display', 'none');
            $("body").removeClass("form-open");
            $("body").removeClass("noscroll");
        });
        
        //google map scroll on click
        $(function() {
            $('.gmap-click').click(function(e) {
                $(this).find('iframe').css('pointer-events', 'all');
            }).mouseleave(function(e) {
                $(this).find('iframe').css('pointer-events', 'none');
            });
        });

        var openjobFormbtn = $(".jobpopupbtn");
        var closejobFormbtn = $(".close-job-form");
        var jobform = $(".popup-job-form");
        
        openjobFormbtn.click(function(){
            jobform.css('display', 'flex');
            $("body").addClass("form-open");
            $("body").addClass("noscroll");
            window.scrollTo(0,0);
        });
        closejobFormbtn.click(function(){
            jobform.css('display', 'none');
            $("body").removeClass("form-open");
            $("body").removeClass("noscroll");
        });

        $('.inner-post').slick({
            customPaging: function(slick,index){
              return '<a>' + (index + 1) + '</a>';
            },
            dots: true,
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 2,
            arrows: false,
            speed: 2000,
            easing: 'swing',
            responsive: [
              {
                breakpoint: 1024,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 2,
                  infinite: true,
                  dots: true
                }
              },
              {
                breakpoint: 600,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 2
                }
              },
              {
                breakpoint: 480,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
                }
              }
              // You can unslick at a given breakpoint now by adding:
              // settings: "unslick"
              // instead of a settings object
            ]
          });
	}
}

export default PopupForm;