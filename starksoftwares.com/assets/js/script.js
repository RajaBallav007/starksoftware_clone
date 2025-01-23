 

/*============================= Back To Top Button Script ========================*/
var mybutton = document.getElementById("backTop");
window.onscroll = function () { scrollFunction() };
function scrollFunction() {
  if (document.body.scrollTop > 120 || document.documentElement.scrollTop > 120) {
    mybutton.style.display = "flex";
  } else {
    mybutton.style.display = "none";
  }
}
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


window.addEventListener('scroll', function(){ 
  var menubar = document.querySelector("#mainNav"); 
  menubar.classList.toggle("fixed-top", window.scrollY > 100);
});

// Prevent hiding when clicking inside the dropdown menu
document.querySelectorAll('.dropdown-menu').forEach(menu => {
  menu.addEventListener('click', function (e) {
    e.stopPropagation();
  });
});

(function ($) {
 
 



  // Main Header Nav links Active Class Genaretor
  $("#mainNav .navbar-nav li a").filter(function () {
    return this.href == location.href.replace(/#.*/, "");
  }).parents("li").addClass("active");
 

 
  $(".testimonialCarousel").owlCarousel({
    autoplay: false, 
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 10000,
    autoplaySpeed: 3000,
    loop: false,
    margin: 25,
    items: 4,
    nav: false,
    dots: true,
    responsiveClass: true, 
    responsive: { 
        0: { items: 1 },
        576: { items: 2  },
        768: { items: 2 },
        992: { items: 2 }, 
        1200: { items: 3 },   
    } 
  });
  $(".clientCarousel").owlCarousel({
    autoplay: false, 
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 10000,
    autoplaySpeed: 3000,
    loop: true,
    margin: 15,
    items: 4,
    nav: false,
    dots: false,
    responsiveClass: true, 
    responsive: { 
        0: { items: 2, margin: 8 },
        576: { items: 3, margin: 10  },
        768: { items: 3, margin: 15,  },
        992: { items: 4, margin: 15,  }, 
        1200: { items: 4, margin: 15, }, 
        1400: { items: 5, }, 
    } 
  });
 
 

  $(".blogCarousel").owlCarousel({
    autoplay: false, 
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 10000,
    autoplaySpeed: 3000,
    loop: false,
    margin: 15,
    items: 4,
    nav: false,
    dots: true,
    responsiveClass: true, 
    responsive: { 
        0: { items: 1, margin: 8 },
        576: { items: 2, margin: 10  },
        768: { items: 2, margin: 15,  },
        992: { items: 3, margin: 15,  }, 
        1200: { items: 3, margin: 15, }, 
        1400: { items: 3, }, 
    } 
  });

  $(".chooseCarousel").owlCarousel({
    autoplay: false, 
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 10000,
    autoplaySpeed: 3000,
    loop: false,
    margin: 15,
    items: 4,
    nav: false,
    dots: true,
    responsiveClass: true, 
    responsive: { 
        0: { items: 1, margin: 8 },
        576: { items: 2, margin: 10  },
        768: { items: 2, margin: 15,  },
        992: { items: 3, margin: 15,  }, 
        1200: { items: 4, margin: 15, }, 
        1400: { items: 4, }, 
    } 
  });

  $(".twoItemCarousel").owlCarousel({
    autoplay: false, 
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 10000,
    autoplaySpeed: 3000,
    loop: false,
    margin: 15,
    items: 4,
    nav: false,
    dots: true,
    responsiveClass: true, 
    responsive: { 
        0: { items: 1, margin: 8 },
        576: { items: 2, margin: 10  },
        768: { items: 2, margin: 15,  },
        992: { items: 2, margin: 15,  },  
    } 
  }); 
 
 
})(jQuery);
 

 