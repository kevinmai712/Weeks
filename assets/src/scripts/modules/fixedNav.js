class FixedNav{

    constructor() {
      this.init();
    }
  
    init() {
  
        $(function() {
            //caches a jQuery object containing the header element
            var header = $("#mainheader");
            var content = $("#content");
            var logo = $(".logo-wrapper img")
            var getUrl = window.location.host;
            //var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                
                if($(window).width() <= 600){
                    if (scroll >= 50) {
                        header.addClass("fixed");
                        content.addClass("headerFixed");
                        logo.attr("src", "/wp-content/themes/weeks/assets/dist/images/logo.png");
                    } else {
                        header.removeClass("fixed");
                        content.removeClass("headerFixed");
                        logo.attr("src", "/wp-content/themes/weeks/assets/dist/images/logo.png");
                    }
                } else if ($(window).width() >= 601){
                    if (scroll >= 500) {
                        header.addClass("fixed");
                        content.addClass("headerFixed");
                        logo.attr("src", "/wp-content/themes/weeks/assets/dist/images/logo.png");
                    } else {
                        header.removeClass("fixed");
                        content.removeClass("headerFixed");
                        logo.attr("src", "/wp-content/themes/weeks/assets/dist/images/logo.png");
                    }
                }
            });
        });

    }
  }
  
  export default FixedNav;