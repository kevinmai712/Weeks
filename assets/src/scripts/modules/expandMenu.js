class ExpandMenu{

  constructor() {
    this.init();
  }

  init() {

    var allLinks = document.querySelectorAll(".menu-item-has-children");

    if ($(window).width() < 600) {
      if (allLinks.length) {
        for (var i = 0; i < allLinks.length; i++) {
          var link = allLinks[i];
  
          link.addEventListener("click" , function() {
            //e.preventDefault();
            this.classList.toggle("active");
            document.querySelector(".nav-main").classList.toggle('menuExpanded');
          });
        }
      }
   }

   //$('.nav-drop').hide();
   $(".nav-main-item").click(function() {
   $(".nav-main-item").find('.nav-drop').hide();
   $(this).find('.nav-drop').fadeIn();
  });


    //Mobile Menu
    var mobileMenu = $("#mobileMenu");
    var menuButton = $(".mobileHamburger");
    var closeButton = $(".closeMenu");

    menuButton.click(function(){
      mobileMenu.addClass("menuExpanded");
      $("body").addClass("noscroll");
      $(".site").addClass("noscroll");
      window.scrollTo(0,0);      
    });
    closeButton.click(function(){
      mobileMenu.removeClass("menuExpanded");
      $(".site").removeClass("noscroll");
      $("body").removeClass("noscroll");
    });


    

  }
}

export default ExpandMenu;
