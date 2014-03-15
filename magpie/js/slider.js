/*
 * Twenty Fourteen Featured Content Slider
 *
 * Adapted from FlexSlider v2.2.0, copyright 2012 WooThemes
 * @link http://www.woothemes.com/flexslider/
 */
/* global DocumentTouch:true,setImmediate:true,featuredSliderDefaults:true,MSGesture:true */
(function(e){e.featuredslider=function(t,n){var r=e(t),i=window.navigator&&window.navigator.msPointerEnabled&&window.MSGesture,s="ontouchstart"in window||i||window.DocumentTouch&&document instanceof DocumentTouch,o="click touchend MSPointerUp",u="",a,f={},l;r.vars=e.extend({},e.featuredslider.defaults,n);l=r.vars.namespace,e.data(t,"featuredslider",r);f={init:function(){r.animating=false;r.currentSlide=0;r.animatingTo=r.currentSlide;r.atEnd=r.currentSlide===0||r.currentSlide===r.last;r.containerSelector=r.vars.selector.substr(0,r.vars.selector.search(" "));r.slides=e(r.vars.selector,r);r.container=e(r.containerSelector,r);r.count=r.slides.length;r.prop="marginLeft";r.isRtl=e("body").hasClass("rtl");r.args={};r.transitions=function(){var e=document.createElement("div"),t=["perspectiveProperty","WebkitPerspective","MozPerspective","OPerspective","msPerspective"],n;for(n in t){if(e.style[t[n]]!==undefined){r.pfx=t[n].replace("Perspective","").toLowerCase();r.prop="-"+r.pfx+"-transform";return true}}return false}();if(r.vars.controlsContainer!==""){r.controlsContainer=e(r.vars.controlsContainer).length>0&&e(r.vars.controlsContainer)}r.doMath();r.setup("init");f.controlNav.setup();f.directionNav.setup();if(e(r.containerSelector).length===1){e(document).bind("keyup",function(e){var t=e.keyCode,n=false;if(!r.animating&&(t===39||t===37)){if(t===39){n=r.getTarget("next")}else if(t===37){n=r.getTarget("prev")}r.featureAnimate(n)}})}if(s){f.touch()}e(window).bind("resize orientationchange focus",f.resize);r.find("img").attr("draggable","false")},controlNav:{setup:function(){f.controlNav.setupPaging()},setupPaging:function(){var t="control-paging",n=1,i,s,a;r.controlNavScaffold=e('<ol class="'+l+"control-nav "+l+t+'"></ol>');if(r.pagingCount>1){for(a=0;a<r.pagingCount;a++){s=r.slides.eq(a);i="<a>"+n+"</a>";r.controlNavScaffold.append("<li>"+i+"</li>");n++}}r.controlsContainer?e(r.controlsContainer).append(r.controlNavScaffold):r.append(r.controlNavScaffold);f.controlNav.set();f.controlNav.active();r.controlNavScaffold.delegate("a, img",o,function(t){t.preventDefault();if(u===""||u===t.type){var n=e(this),i=r.controlNav.index(n);if(!n.hasClass(l+"active")){r.direction=i>r.currentSlide?"next":"prev";r.featureAnimate(i)}}if(u===""){u=t.type}f.setToClearWatchedEvent()})},set:function(){var t="a";r.controlNav=e("."+l+"control-nav li "+t,r.controlsContainer?r.controlsContainer:r)},active:function(){r.controlNav.removeClass(l+"active").eq(r.animatingTo).addClass(l+"active")},update:function(t,n){if(r.pagingCount>1&&t==="add"){r.controlNavScaffold.append(e("<li><a>"+r.count+"</a></li>"))}else if(r.pagingCount===1)
