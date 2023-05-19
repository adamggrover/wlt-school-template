//-------------SLICK SLIDER------------------------------------------

jQuery(function(){

  $('.slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  fade: true,
  autoplaySpeed: 4000,
  speed: 2500,
  cssEase: 'ease-in-out',
  dots: false,
  touchMove: false,
  arrows:false
  });
  
  
  
  $('.news-carousel').slick({
  
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: false,
  
  
  dots:false,
  
  responsive: [{
    breakpoint: 1024,
    settings: {
      slidesToShow: 3,
      slidesToScroll: 1,
     //centerMode: true,
  
    }
  
  }, {
    breakpoint: 800,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 2,
      dots: true,
      infinite: true,
  
    }
  },  {
    breakpoint: 480,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 2000,
    }
  }]
  });
  
  $('.announcement-slider').slick({
  autoplay: true,
  arrows: false,
  autoplaySpeed: 6000
  
  });
  
  $('.announcement-div-slider').slick({
  autoplay: true,
  arrows: false,
  autoplaySpeed: 6000
  
  });
  
  
  });
  
AOS.init();

//----------HERO-----------------------------------------------------------------//

// loader spinner

$('#hero-video').on('loadstart', function (event) {
  $(this).addClass('loading');
});
$('#hero-video').on('canplay', function (event) {
  $(this).removeClass('loading');
  $(this).attr('poster', '');
});

/*
$(window).on('load', function() { // makes sure the whole site is loaded 
  $('#status').fadeOut(); // will first fade out the loading animation 
  $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
  $('body').delay(350).css({'overflow':'visible'});
})
*/

// When the user scrolls down 50px from the top of the document, change the header's background color from, transparent to dark

function headerBackground() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("header").style.backgroundColor = "#2D4190";
  } else {
    document.getElementById("header").style.backgroundColor = "transparent";
  }

      }





//function to change header logo size on scroll

function logoChange(){
    let logo = $(".logo1"); $(window).scroll(function() {
    //let scroll = $(window).scrollTop();
    

    
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        if(!logo.hasClass("logo2")) {
          logo.hide();
          logo.removeClass('logo1').addClass("logo2").fadeIn( "slow");
        }
      } else {
        if(!logo.hasClass("logo1")) {
          logo.hide();
          logo.removeClass("logo2").addClass('logo1').fadeIn( "slow");
        }
      }
    });
};

// Check if the header being displayed is the front page version and assign to variable "header"

header = document.getElementById("header").classList.contains("header1");

// On scroll run logo change function. Run header change function if on front page

  window.onscroll = function() {
      
     
      logoChange();
      if (header == true){
        headerBackground();
      }
      };



//Search Bar



  /* Set the height of the side navigation to 250px and the left margin of the page content to 250px */
function openSearch() {
    document.getElementById("header-search-container").style.height = "3rem";
    document.getElementById("header-container").style.marginTop = "3rem";

  }
  
  /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
  function closeSearch() {
    document.getElementById("header-search-container").style.height = "0";
    document.getElementById("header-container").style.marginTop = "0";
  }


// Sidenav

/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
function openNav() {
    document.getElementById("sidebar-nav").style.width = "26rem";

    document.getElementById("main").style.marginLeft = "26rem";
   // document.getElementById("menu-primary").classList.add('animate__animated', 'animate__fadeInLeft').classList.remove('animate__fadeOutLeft');

    var menu = document.getElementById("menu-primary");
    menu.classList.add("fadeInUp");
    menu.classList.add("animate__delay-1s");
    menu.classList.remove("fadeOutDown");

}
 
  
  /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
  function closeNav() {
    document.getElementById("sidebar-nav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    //document.getElementById("menu-primary").classList.add('animate__fadeOutLeft').classList.remove('animate__fadeInLeft');
    
    var menu = document.getElementId("menu-primary");
    menu.classList.add("fadeOutDown");
    menu.classList.add("animate__delay-1s");
    menu.classList.remove("fadeInUp");
    
    
    
  }

//Announcement Box

function announcementClose() {
    var x = document.getElementById("announcement-wrapper");
    
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }


  //quicklinks header dropdown menu

    /* When the user clicks on the button, 
  toggle between hiding and showing the dropdown content */
  function quickLinksMenuButton() {
    document.getElementById("myDropdown").classList.toggle("show");
  }

  // Close the dropdown if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }


  

//--------------------news card section effects-----------------------------------------------

//jquery version

$('.news-card').mouseenter(function() {

  
  $(this).find(".card-img-top").css('opacity', '0.8');  
  $(this).find('.news-overlay').css('opacity', '1');
  $(this).find(".card-img-top").css('zIndex', '5');  
  $(this).find(".news-card-content").css('zIndex', '2');
  


  

});

$('.news-card').mouseleave(function() {
  
  $(this).find('.news-overlay').css('opacity', '0');
  $(this).find(".card-img-top").css('opacity', '1');
  $(this).find(".card-img-top").css('zIndex', '0');
  $(this).find(".news-card-content").css('zIndex', '0');

  
});

//--------------------image links section effects-----------------------------------------------

//jquery version

$('#img-link-overlay').mouseenter(function() {

  
  $(this).style.opacity='1';   

});

$('#img-link-overlay').mouseleave(function() {
  
  $(this).style.opacity='0';
  
});

/*wp-block version

$('.kings-latest-posts').find('li').mouseenter(function() {

  
    
  $(this).css('background-color', '#b3d82b');

  $(this).find('img').css('opacity', '0.2');

});

$('.kings-latest-posts').find('li').mouseleave(function() {

  
    
  $(this).css('background-color', 'white');

  $(this).find('img').css('opacity', '1');

});
*/



//--------------Sixth form application Form------------------------------------------

//gets section of page to be hidden/show

const box = document.getElementById('external-applicants');
const box2 = document.getElementById('internal-applicants');

function handleRadioClick() {
  if (document.getElementById('kings-no').checked) {
    box.style.display = 'flex';
    box2.style.display = 'none';
    
  } else {
    box.style.display = 'none';
    box2.style.display = 'flex';
    
  }
}

const radioButtons = document.querySelectorAll('input[name="kings-student"]');
radioButtons.forEach(radio => {
  radio.addEventListener('click', handleRadioClick);
});


//-----------------100vh Fix ---------------------------------------------------------
// set --doc-height for 100vh fix

const documentHeight = () => {
  const doc = document.documentElement
  doc.style.setProperty('--doc-height', `${window.innerHeight}px`)
 }
 window.addEventListener('resize', documentHeight)
 documentHeight()

