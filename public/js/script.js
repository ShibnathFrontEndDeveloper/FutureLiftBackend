$(function () {
  $("#header").load("careerCounsellingHeader.html");
  $("#footer").load("footer.html");
});

var swiper = new Swiper('.home_swiper', {
  speed: 400,
  spaceBetween: 100,
  slidesPerView:3,
  spaceBetween:20,
//   autoplay:{
//     delay:5000
//   },
  loop:true,
});
document.querySelector
var swiper = new Swiper(".topCollectionSwiper", {
  slidesPerView: "auto",
  loop: true,
  slidesPerGroup: 1,
  spaceBetween: 20,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
   0:{
    slidesPerView: 1,
   },
    768: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 5,
    },
  },
});
var swiper = new Swiper(".BenefitsSection", {
  slidesPerView: "auto",
  slidesPerGroup: 1,
  spaceBetween: 40,
  autoplay: {
    delay: 3000,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
   
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
    1440: {
      slidesPerView: 4,
    },
  },
});

var swiper = new Swiper(".newsSwiper", {
  slidesPerView: "auto",
  loop: true,
  slidesPerGroup: 1,
  autoHeight: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    450: {
      slidesPerView: 1,
    },
    576: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

var swiper = new Swiper(".careerWhyCards", {
  slidesPerView: "auto",
  loop: true,
  spaceBetween: 50,
  slidesPerGroup: 1,
  autoHeight: true,
  autoplay: {
    delay: 3000,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    350: {
      slidesPerView: 1,
    },
    450: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});
var swiper = new Swiper(".tabSwiper", {
  slidesPerView: 2,
  spaceBetween:20,
  slidesPerGroup: 1,
  autoHeight: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints:{
    0:{
      slidesPerView: 1,
    },
    1024:{
      slidesPerView: 2,
    },
    1440:{
      slidesPerView: 3,
    }
  }
});

var swiper = new Swiper(".whyCounsellingSwiper", {
  slidesPerView: "auto",
  loop: true,
  spaceBetween: 60,
  slidesPerGroup: 1,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    350: {
      slidesPerView: 1,
    },
    450: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 2,
    },
  },
});
var swiper = new Swiper(".pickSectionSwiper", {
  slidesPerView: "auto",
  loop: true,
  slidesPerGroup: 1,
  spaceBetween: 50,
  autoplay: {
    delay: 9999999999,
  },
  breakpoints: {
    250: {
      slidesPerView: 1,
      autoplay: {
        delay: 3000,
      },
    },
    350: {
      slidesPerView: 1,
      autoplay: {
        delay: 3000,
      },
    },
    450: {
      slidesPerView: 1,
      autoplay: {
        delay: 3000,
      },
    },
    768: {
      slidesPerView: 2,
      autoplay: {
        delay: 3000,
      },
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

$(document).ready(function () {
  $(".modal").on("show.bs.modal", function () {
    setTimeout(function () {
      var swiper = new Swiper(".modalfeatureSwiper", {
        slidesPerView: "auto",
        loop: true,
        slidesPerGroup: 1,
        spaceBetween: 50,
        grabCursor: true,
        autoplay: {
          delay: 2000,
        },
        pagination: {
          el: ".swiper-pagination",
          dynamicBullets: true,
        },
      });
    }, 500);
  });
});

var swiper = new Swiper(".modalfeatureCardSwiper", {
  slidesPerView: 1,
  loop: true,
  grabCursor: true,
  spaceBetween: 50,
  keyboard: {
    enabled: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});


var swiper = new Swiper('.blog_swiper', {
  speed: 400,
  spaceBetween: 100,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});



$(document).ready(function(){
  $(".blog_article_box").slice(0, 5).show();
  $("#loadMore").on("click", function(e){
    e.preventDefault();
    $(".blog_article_box:hidden").slice(0, 5).slideDown();
    if($(".blog_article_box:hidden").length == 0) {
      $("#loadMore").text("No Content").addClass("noContent");
    }
  });
  
});

// Profile multy steps form

$(document).ready(function(){
    
  var current_fs, next_fs, previous_fs; //fieldsets
  var opacity;
  
  $(".next").click(function(){
      
      current_fs = $(this).parent();
      next_fs = $(this).parent().next();
      
      //Add Class Active
      $("#progressbar li").eq($("fieldset").index(next_fs)).toggleClass("active");
      
      //show the next fieldset
      next_fs.show(); 
      //hide the current fieldset with style
      current_fs.animate({opacity: 0}, {
          step: function(now) {
              // for making fielset appear animation
              opacity = 1 - now;
  
              current_fs.css({
                  'display': 'none',
                  'position': 'relative'
              });
              next_fs.css({'opacity': opacity});
          }, 
          duration: 600
      });
  });
  
  $(".prev").click(function(){
      
      current_fs = $(this).parent();
      previous_fs = $(this).parent().prev();
      
      //Remove class active
      $("#progressbar li").eq($("fieldset").index(current_fs)).toggleClass("active");
      
      //show the previous fieldset
      previous_fs.show();
  
      //hide the current fieldset with style
      current_fs.animate({opacity: 0}, {
          step: function(now) {
              // for making fielset appear animation
              opacity = 1 - now;
  
              current_fs.css({
                  'display': 'none',
                  'position': 'relative'
              });
              previous_fs.css({'opacity': opacity});
          }, 
          duration: 600
      });
  });
  
      
  });


  // Copy text

  function myFunction() {
    // Get the text field
    let copyText = document.getElementById("refInput");
    
  
    // Select the text field
    copyText.select();
    copyText.setSelectionRange(0, 99999);
    // For mobile devices
  
    // Copy the text inside the text field
    navigator.clipboard.writeText(copyText.value); 
  }

  function copyCode(){

    // Get the text field
    let copyText1 = document.getElementById("refLinkInput");

    // Select the text field
    copyText1.select();
    copyText1.setSelectionRange(0, 99999); 
    // For mobile devices

    // Copy the text inside the text field
    navigator.clipboard.writeText(copyText1.value);
  }