jQuery((function(t){var a=t(".wdcl-carousel");a&&a.each((function(){var a=t(this).data("pagi"),i=t(this).data("pagi-tablet"),e=t(this).data("pagi-phone"),s=t(this).data("variable-width"),o=t(this).data("nav"),n=t(this).data("nav-tablet"),d=t(this).data("nav-phone"),l=t(this).data("autoplay"),r=t(this).data("autoplay-speed"),c=t(this).data("speed"),h=t(this).data("slides"),p=t(this).data("slides-tablet"),u=t(this).data("slides-phone"),f=t(this).data("center"),g=t(this).data("infinite"),w=t(this).data("vertical"),b=t(this).data("icon-left"),v=t(this).data("icon-right"),m=t(this).data("center-mode-type"),_=t(this).data("center-padding"),k=t(this).data("variable-width"),y=t(this).data("auto-height"),S=t(this).data("fade"),T=t(this).data("dir"),I=t(this).data("items-scroll");I=I.split("|"),_=_.split("|"),""===I[1]&&(I[1]=I[0]),""===I[2]&&(I[2]=I[1]),""===_[1]&&(_[1]=_[0]),""===_[2]&&(_[2]=_[1]),"on"===k&&(h=1,p=1,u=1),t(this).slick({swipeToSlide:1,focusOnSelect:!1,focusOnChange:!1,edgeFriction:.35,useTransform:!0,cssEase:"ease-in-out",adaptiveHeight:"on"===y,touchThreshold:600,swipe:"on"!==f,draggable:0,waitForAnimate:!0,variableWidth:"on"===s,dots:!!a,arrows:!!o,infinite:"on"===g,autoplay:"on"===l,autoplaySpeed:parseInt(r),touchMove:!0,speed:parseInt(c),slidesToShow:parseInt(h),fade:"off"!==S,rtl:"ltr"!==T,slidesToScroll:parseInt(I[0]),centerMode:"on"===f,centerPadding:"off"===k&&"classic"===m?_[0]:0,vertical:"on"===w,prevArrow:'<button type="button" data-icon="'.concat(b,'" class="slick-arrow slick-prev">Prev</button>'),nextArrow:'<button type="button" data-icon="'.concat(v,'" class="slick-arrow slick-next">Prev</button>'),responsive:[{breakpoint:980,settings:{slidesToShow:parseInt(p),dots:!!i,arrows:!!n,centerPadding:"off"===k&&"classic"===m?_[1]:0,slidesToScroll:parseInt(I[1])}},{breakpoint:767,settings:{slidesToShow:parseInt(u),dots:!!e,arrows:!!d,centerPadding:"off"===k&&"classic"===m?_[2]:0,slidesToScroll:parseInt(I[2])}}]})}));var i=t(".wdcl-lightbox-on .wdcl-lightbox-ctrl img"),e=t(".wdcl-lightbox-off .wdcl-lightbox-ctrl img");i.magnificPopup({type:"image",mainClass:"mfp-with-zoom",gallery:{enabled:!1},zoom:{enabled:!0,duration:300,easing:"ease-in-out"}}),e.each((function(){t(this).removeAttr("data-mfp-src")})),"undefined"!=typeof et_link_options_data&&et_link_options_data.forEach((function(a,i){t(document).on("click",".".concat(et_link_options_data[i].class),(function(){window.open(et_link_options_data[i].url,et_link_options_data[i].target)}))}))}))