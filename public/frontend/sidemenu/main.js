$( document ).ready(function() {$(".l").addClass("done")});!function(e){"use strict";var a,s=e(".contact__form"),n=e(".contact__msg");function u(t){n.fadeIn().removeClass("alert-danger").addClass("alert-success"),n.text(t),setTimeout(function(){n.fadeOut()},2e3),s.find('input:not([type="submit"]), textarea').val("")}function c(t){n.fadeIn().removeClass("alert-success").addClass("alert-success"),n.text(t.responseText),setTimeout(function(){n.fadeOut()},2e3)}s.submit(function(t){t.preventDefault(),a=e(this).serialize(),e.ajax({type:"POST",url:s.attr("action"),data:a}).done(u).fail(c)})}(jQuery);var mybutton=document.getElementById("back-to-top");function scrollFunction(){document.body.scrollTop>20||document.documentElement.scrollTop>20?mybutton.style.display="block":mybutton.style.display="none"}function topFunction(){document.body.scrollTop=0,document.documentElement.scrollTop=0}window.onscroll=function(){scrollFunction()};!function(e){"use strict";e.fn.elExists=function(){return this.length>0};var a={};window.state=a;var t=e("html"),s=e("body"),n=(e(document),e(window),e(".header")),i=e(".global-overlay"),o=(n.elExists()?n.offset().top:"")+(n.elExists()?n[0].getBoundingClientRect().height:0),l=e(".header--fixed"),r=(l.elExists()&&l.offset().top,l.elExists()&&l[0].getBoundingClientRect().height,e(".wrapper").children(),e(".element-carousel"));e(".footer"),e(".bg-color").each(function(){var a=e(this),t=a.data("bg-color");a.css("background-color",t)}),e(".bg-image").each(function(){var a=e(this),t=a.data("bg-image");a.css({"background-image":"url("+t+")"})});var d=e(".offcanvas-menu"),c=d.find(".sub-menu");c.parent().prepend('<span class="menu-expand"><i class="fa fa-plus"></i></span>'),c.slideUp(),d.on("click","li a, li .menu-expand",function(a){var t=e(this);t.parent().attr("class").match(/\b(menu-item-has-children|has-children|has-sub-menu)\b/)&&("#"===t.attr("href")||t.hasClass("menu-expand"))&&(a.preventDefault(),t.siblings("ul:visible").length?t.siblings("ul").slideUp("slow"):(t.closest("li").siblings("li").find("ul:visible").slideUp("slow"),t.siblings("ul").slideDown("slow"))),t.is("a")||t.is("span")||t.attr("clas").match(/\b(menu-expand)\b/)?t.parent().toggleClass("menu-open"):t.is("li")&&t.attr("class").match(/\b('menu-item-has-children')\b/)&&t.toggleClass("menu-open"),"fa fa-plus"==e(".menu-expand i").attr("class")?e(".menu-expand i").addClass("fa-minus").removeClass("fa-add"):e(".menu-expand i").addClass("fa-plus").removeClass("fa-minus")});var p=e(".scroll-to-top");if(e(window).on("scroll",function(){e(this).scrollTop()>300?e(p).css("opacity","1"):e(p).css("opacity","0")}),e(p).on("click",function(){return e("html, body").animate({scrollTop:0},800),!1}),e(".toolbar-btn").on("click",function(a){a.preventDefault(),a.stopPropagation();var t=e(this),n=t.attr("href"),o=e(".toolbar-btn").attr("href");o=t.parent().siblings().children(".toolbar-btn").attr("href"),s.toggleClass("body-open"),e(n).toggleClass("open"),e(o).removeClass("open"),e(i).addClass("overlay-open"),t.attr("class").match(/\b(menu-btn|mainmenu-btn|burger-icon)\b/)&&t.children(".hamburger-icon").toggleClass("open")}),s.on("click",function(a){var t=a.target,n=e(".wrapper").children();e(t).is(".toolbar-btn")||e(t).is(".product-filter-btn")||e(t).parents().is(".open")||(n.removeClass("open"),s.removeClass("body-open"),n.find(".open").removeClass("open"),i.removeClass("overlay-open"))}),e(".btn-close").on("click",function(a){a.preventDefault(),e(this).parents(".open").removeClass("open"),e(i).removeClass("overlay-open")}),e(".expand-btn").on("click",function(a){a.preventDefault();var t=e(this).attr("href");e(t).slideToggle("slow")}),e("#shipdifferetads").on("change",function(){e("#shipdifferetads").prop("checked"),e(".ship-box-info").slideToggle("slow")}),e('input[name="payment-method"]').on("click",function(){var a=e(this).attr("value");e(this).parents(".payment-group").siblings(".payment-group").children(".payment-info").slideUp("300"),e('[data-method="'+a+'"]').slideToggle("300")}),a.stickyHeader=function(){e(window).on("scroll",function(){e(window).scrollTop()>=o?e(".fixed-header").addClass("sticky-header"):e(".fixed-header").removeClass("sticky-header")})},e('a[data-toggle="tab"]').on("shown.bs.tab",function(a){var t=e(a.target).attr("href"),s=e(a.relatedTarget).attr("href"),n=e(t).children().find(".ft-product"),i=e(s).children().find(".ft-product");e(i).removeClass("animated"),e(n).addClass("animated")}),e(".progress-bar").each(function(){var a=e(this).attr("aria-valuenow");e(this).css("width",a+"%")}),e(".quantity").append('<div class="dec qtybutton">-</div><div class="inc qtybutton">+</div>'),e(".qtybutton").on("click",function(){var a=e(this),t=a.parent().find("input").val();if(a.hasClass("inc"))var s=parseFloat(t)+1;else s=t>1?parseFloat(t)-1:1;a.parent().find("input").val(s)}),r.elExists()){function u(e){e.find(".slick-slide.slick-active").first().addClass("first-active"),e.find(".slick-slide.slick-active").last().addClass("last-active")}"rtl"!=t.attr("dir")&&"rtl"!=s.attr("dir")||r.attr("dir","rtl"),r.each(function(a,n){for(var i=e(this),o=e(this).parent()[0],l=e(o).find(".custom-paging"),r=void 0!==i.data("slick-options")?i.data("slick-options"):"",d=r.spaceBetween?parseInt(r.spaceBetween,10):0,c=(r.spaceBetween_xl&&parseInt(r.spaceBetween_xl,10),r.rowSpace&&parseInt(r.rowSpace,10),!!r.customPaging&&r.customPaging),p=!!r.vertical&&r.vertical,f=!!r.focusOnSelect&&r.focusOnSelect,v=r.asNavFor?r.asNavFor:"",h=!!r.fade&&r.fade,g=!!r.autoplay&&r.autoplay,m=r.autoplaySpeed?parseInt(r.autoplaySpeed,10):5e3,b=!r.swipe||r.swipe,w=!r.swipeToSlide||r.swipeToSlide,C=!r.touchMove||r.touchMove,k=(!r.verticalSwiping||r.verticalSwiping,!r.draggable||r.draggable),y=!!r.arrows&&r.arrows,x=!!r.dots&&r.dots,S=!r.adaptiveHeight||r.adaptiveHeight,T=!!r.infinite&&r.infinite,A=!!r.centerMode&&r.centerMode,E=r.centerPadding?r.centerPadding:"",I=!!r.variableWidth&&r.variableWidth,P=r.speed?parseInt(r.speed,10):500,M=r.appendArrows?r.appendArrows:i,D=!0===y?r.prevArrow?'<span class="'+r.prevArrow.buttonClass+'"><i class="'+r.prevArrow.iconClass+'"></i></span>':'<button class="tty-slick-text-btn tty-slick-text-prev">previous</span>':"",B=!0===y?r.nextArrow?'<span class="'+r.nextArrow.buttonClass+'"><i class="'+r.nextArrow.iconClass+'"></i></span>':'<button class="tty-slick-text-btn tty-slick-text-next">next</span>':"",F=(r.rows&&parseInt(r.rows,10),!!(r.rtl||t.attr('dir="rtl"')||s.attr('dir="rtl"'))),q=r.slidesToShow?parseInt(r.slidesToShow,10):1,H=r.slidesToScroll?parseInt(r.slidesToScroll,10):1,U=void 0!==i.data("slick-responsive")?i.data("slick-responsive"):"",N=U.length,O=[],W=0;W<N;W++)O[W]=U[W];i.addClass("slick-carousel-"+a),i.parent().find(".slick-dots").addClass("dots-"+a),i.parent().find(".slick-btn").addClass("btn-"+a),0!=d&&i.addClass("slick-gutter-"+d);var R=null;function $(a){a.each(function(){var a=e(this),t=a.data("delay"),s=a.data("duration"),n="animated "+a.data("animation");a.css({"animation-delay":t,"animation-duration":s}),a.addClass(n).one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",function(){a.removeClass(n)})})}i.on("init",function(a,t){if(u(i),(R=t.slideCount)<=q&&i.children(".slick-dots").hide(),1==c){var s=R.toString().padStart(2,"0");l.html('<span class="current">01</span>/<span class="total">'+s+"</span>")}$(e(".slick-slide").find("[data-animation]"))}),i.slick({slidesToShow:q,slidesToScroll:H,asNavFor:v,autoplay:g,autoplaySpeed:m,speed:P,infinite:T,arrows:y,dots:x,adaptiveHeight:S,vertical:p,focusOnSelect:f,centerMode:A,centerPadding:E,variableWidth:I,swipe:b,swipeToSlide:w,touchMove:C,draggable:k,fade:h,appendArrows:M,prevArrow:D,nextArrow:B,rtl:F,responsive:O}),i.on("beforeChange",function(a,t,s,n){!function(e){e.find(".slick-slide.slick-active").first().removeClass("first-active"),e.find(".slick-slide.slick-active").last().removeClass("last-active")}(i),$(e('.slick-slide[data-slick-index="'+n+'"]').find("[data-animation]"))}),i.on("afterChange",function(e,a){u(i)}),i.on("init reInit afterChange",function(e,a,t,s){1==c&&function(e){var a=((e.currentSlide?e.currentSlide:0)+1).toString().padStart(2,"0"),t=e.slick.slideCount.toString().padStart(2,"0");e.selector.html('<span class="current">'+a+'</span>/<span class="total">'+t+"</span>")}({event:e,slick:a,currentSlide:t,nextSlide:s,selector:l})}),e("body").on("shown.bs.tab",'a[data-toggle="tab"], a[data-toggle="pill"]',function(e){i.slick("setPosition")})})}var f=e(".popup-btn"),v=e(".video-popup");e('[data-toggle="tooltip"]').tooltip(),e(".btn-link").on("click",function(a){a.preventDefault(),e(this).closest(".card").toggleClass("open")}),e(".product-view-mode a").on("click",function(a){a.preventDefault();var t=e(this),s=e(".shop-products"),n=t.data("target");e(".product-view-mode a").removeClass("active"),t.addClass("active"),s.removeClass("grid list").addClass(n),t.parents(".shop-page-wrapper").hasClass("shop-fullwidth")&&("list"===n?(s.removeClass("container-fluid"),s.addClass("container")):s.hasClass("container")&&(s.removeClass("container"),s.addClass("container-fluid")))})}(jQuery)