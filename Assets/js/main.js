function headerBackground(){document.body.scrollTop>50||document.documentElement.scrollTop>50?document.getElementById("header").style.backgroundColor="var(--primary)":document.getElementById("header").style.backgroundColor="transparent"}function logoChange(){let e=$(".logo-content"),o=$(".logo-heading"),n=$(".logo-img");$(window).scroll((function(){document.body.scrollTop>50||document.documentElement.scrollTop>50?e.hasClass("logo-front-page")&&(o.hide(),n.hide().fadeIn("slow"),n.addClass("logo-img-scroll"),e.removeClass("logo-front-page").addClass("logo-default-page").fadeIn("slow")):e.hasClass("logo-default-page")&&document.getElementById("header").classList.contains("header1")&&(o.show(),n.show().fadeIn("slow"),n.removeClass("logo-img-scroll"),e.removeClass("logo-default-page").addClass("logo-front-page").fadeIn("slow"))}))}function openSearch(){document.getElementById("header-search-container").style.height="3rem",document.getElementById("header-container").style.marginTop="3rem"}function closeSearch(){document.getElementById("header-search-container").style.height="0",document.getElementById("header-container").style.marginTop="0"}function openNav(){document.getElementById("sidebar-nav").style.width="26rem",document.getElementById("main").style.marginLeft="26rem";var e=document.getElementById("menu-primary");e.classList.add("fadeInUp"),e.classList.add("animate__delay-1s"),e.classList.remove("fadeOutDown")}function closeNav(){document.getElementById("sidebar-nav").style.width="0",document.getElementById("main").style.marginLeft="0";var e=document.getElementId("menu-primary");e.classList.add("fadeOutDown"),e.classList.add("animate__delay-1s"),e.classList.remove("fadeInUp")}function announcementClose(){var e=document.getElementById("announcement-wrapper");"none"===e.style.display?e.style.display="block":e.style.display="none"}function quickLinksMenuButton(){document.getElementById("myDropdown").classList.toggle("show")}jQuery((function(){$(".slider").slick({slidesToShow:1,slidesToScroll:1,autoplay:!0,fade:!0,autoplaySpeed:4e3,speed:2500,cssEase:"ease-in-out",dots:!1,touchMove:!1,arrows:!1}),$(".twitter-slider").slick({slidesToShow:1,slidesToScroll:1,accessibility:!0,arrows:!1,cssEase:"ease-in-out",dots:!1,autoplay:!0,autoplaySpeed:2500,speed:600,mobileFirst:!0,responsive:[{breakpoint:1e3,settings:{slidesToShow:3,slidesToScroll:1}},{breakpoint:700,settings:{slidesToShow:2,slidesToScroll:1}},{breakpoint:1200,settings:{slidesToShow:4,slidesToScroll:1}}]}),$(".news-carousel").slick({slidesToShow:3,slidesToScroll:1,autoplay:!1,dots:!1,responsive:[{breakpoint:1024,settings:{slidesToShow:3,slidesToScroll:1}},{breakpoint:800,settings:{slidesToShow:2,slidesToScroll:2,dots:!0,infinite:!0}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1,dots:!0,infinite:!0,autoplay:!0,autoplaySpeed:2e3}}]}),$(".announcement-slider").slick({autoplay:!0,arrows:!1,autoplaySpeed:6e3}),$(".announcement-div-slider").slick({autoplay:!0,arrows:!1,autoplaySpeed:6e3})})),AOS.init(),$("#hero-video").on("loadstart",(function(e){$(this).addClass("loading")})),$("#hero-video").on("canplay",(function(e){$(this).removeClass("loading"),$(this).attr("poster","")})),header=document.getElementById("header").classList.contains("header1"),window.onscroll=function(){logoChange(),1==header&&headerBackground()},window.onclick=function(e){if(!e.target.matches(".dropbtn")){var o,n=document.getElementsByClassName("dropdown-content");for(o=0;o<n.length;o++){var t=n[o];t.classList.contains("show")&&t.classList.remove("show")}}};const documentHeight=()=>{document.documentElement.style.setProperty("--doc-height",`${window.innerHeight}px`)};window.addEventListener("resize",documentHeight),documentHeight(),$(".img-link").mouseenter((function(){$(this).addClass("img-link-hover")})),$(".img-link").mouseleave((function(){$(this).removeClass("img-link-hover")})),$(".news-card-link").mouseenter((function(){$(this).find(".news-card").addClass("news-card-hover")})),$(".news-card-link").mouseleave((function(){$(this).find(".news-card").removeClass("news-card-hover")})),$(".key-information-item-link").mouseenter((function(){$(this).addClass("key-information-item-link-hover")})),$(".key-information-item-link").mouseleave((function(){$(this).removeClass("key-information-item-link-hover")})),$(".modal").appendTo("body");
//# sourceMappingURL=main.js.map