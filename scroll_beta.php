<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>pagePiling.js plugin</title>
	
	<meta name="Resource-type" content="Document" />

	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300,400,700" />


	<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
	<![endif]-->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

	<script type="text/javascript" src="jquery.pagepiling.min.js"></script>
<script type="text/javascript">

/*!
 * pagepiling.js 1.5.4
 *
 * https://github.com/alvarotrigo/pagePiling.js
 * MIT licensed
 *
 * Copyright (C) 2013 alvarotrigo.com - A project by Alvaro Trigo
 */
(function(b,h,k,z){b.fn.pagepiling=function(M){function N(a){var f=b(".pp-section.active").index(".pp-section");a=a.index(".pp-section");return f>a?"up":"down"}function l(a,f){var d={destination:a,animated:f,activeSection:b(".pp-section.active"),anchorLink:a.data("anchor"),sectionIndex:a.index(".pp-section"),toMove:a,yMovement:N(a),leavingSection:b(".pp-section.active").index(".pp-section")+1};d.activeSection.is(a)||("undefined"===typeof d.animated&&(d.animated=!0),"undefined"!==typeof d.anchorLink&&
O(d.anchorLink,d.sectionIndex),d.destination.addClass("active").siblings().removeClass("active"),d.sectionsToMove=P(d),"down"===d.yMovement?(d.translate3d="vertical"!==c.direction?"translate3d(-100%, 0px, 0px)":"translate3d(0px, -100%, 0px)",d.scrolling="-100%",c.css3||d.sectionsToMove.each(function(a){a!=d.activeSection.index(".pp-section")&&b(this).css(v(d.scrolling))}),d.animateSection=d.activeSection):(d.translate3d="translate3d(0px, 0px, 0px)",d.scrolling="0",d.animateSection=a),b.isFunction(c.onLeave)&&
c.onLeave.call(this,d.leavingSection,d.sectionIndex+1,d.yMovement),Q(d),R(d.anchorLink),S(d.anchorLink,d.sectionIndex),A=d.anchorLink,B=(new Date).getTime())}function Q(a){c.css3?(C(a.animateSection,a.translate3d,a.animated),a.sectionsToMove.each(function(){C(b(this),a.translate3d,a.animated)}),setTimeout(function(){w(a)},c.scrollingSpeed)):(a.scrollOptions=v(a.scrolling),a.animated?a.animateSection.animate(a.scrollOptions,c.scrollingSpeed,c.easing,function(){D(a);w(a)}):(a.animateSection.css(v(a.scrolling)),
setTimeout(function(){D(a);w(a)},400)))}function w(a){b.isFunction(c.afterLoad)&&c.afterLoad.call(this,a.anchorLink,a.sectionIndex+1)}function P(a){return"down"===a.yMovement?b(".pp-section").map(function(f){if(f<a.destination.index(".pp-section"))return b(this)}):b(".pp-section").map(function(f){if(f>a.destination.index(".pp-section"))return b(this)})}function D(a){"up"===a.yMovement&&a.sectionsToMove.each(function(f){b(this).css(v(a.scrolling))})}function v(a){return"vertical"===c.direction?{top:a}:
{left:a}}function O(a,b){c.anchors.length?(location.hash=a,E(location.hash)):E(String(b))}function E(a){a=a.replace("#","");b("body")[0].className=b("body")[0].className.replace(/\b\s?pp-viewing-[^\s]+\b/g,"");b("body").addClass("pp-viewing-"+a)}function x(){return(new Date).getTime()-B<600+c.scrollingSpeed?!0:!1}function C(a,b,d){a.toggleClass("pp-easing",d);a.css({"-webkit-transform":b,"-moz-transform":b,"-ms-transform":b,transform:b})}function m(a){var f=(new Date).getTime();a=a||k.event;var d=
a.wheelDelta||-a.deltaY||-a.detail,c=Math.max(-1,Math.min(1,d)),e="undefined"!==typeof a.wheelDeltaX||"undefined"!==typeof a.deltaX;a=Math.abs(a.wheelDeltaX)<Math.abs(a.wheelDelta)||Math.abs(a.deltaX)<Math.abs(a.deltaY)||!e;149<n.length&&n.shift();n.push(Math.abs(d));d=f-F;F=f;200<d&&(n=[]);if(!x())return f=b(".pp-section.active").filter(".pp-scrollable"),d=G(n,10),e=G(n,70),d>=e&&a&&(0>c?p("down",f):0<c&&p("up",f)),!1}function G(a,b){for(var d=0,c=a.slice(Math.max(a.length-b,1)),e=0;e<c.length;e++)d+=
c[e];return Math.ceil(d/b)}function p(a,b){var d,c;"down"==a?(d="bottom",c=e.moveSectionDown):(d="top",c=e.moveSectionUp);if(0<b.length)if(d="top"===d?!b.scrollTop():"bottom"===d?b.scrollTop()+1+b.innerHeight()>=b[0].scrollHeight:void 0,d)c();else return!0;else c()}function H(){return k.PointerEvent?{down:"pointerdown",move:"pointermove",up:"pointerup"}:{down:"MSPointerDown",move:"MSPointerMove",up:"MSPointerUp"}}function I(a){var b=[];b.y="undefined"!==typeof a.pageY&&(a.pageY||a.pageX)?a.pageY:
a.touches[0].pageY;b.x="undefined"!==typeof a.pageX&&(a.pageY||a.pageX)?a.pageX:a.touches[0].pageX;return b}function J(a){return"undefined"===typeof a.pointerType||"mouse"!=a.pointerType}function T(a){a=a.originalEvent;J(a)&&(a=I(a),q=a.y,r=a.x)}function U(a){var f=a.originalEvent;if(!K(a.target)&&J(f)){var d=b(".pp-section.active").filter(".pp-scrollable");d.length||a.preventDefault();x()||(a=I(f),t=a.y,u=a.x,"horizontal"===c.direction&&Math.abs(r-u)>Math.abs(q-t)?Math.abs(r-u)>g.width()/100*c.touchSensitivity&&
(r>u?p("down",d):u>r&&p("up",d)):Math.abs(q-t)>g.height()/100*c.touchSensitivity&&(q>t?p("down",d):t>q&&p("up",d)))}}function K(a,f){f=f||0;var d=b(a).parent();return f<c.normalScrollElementTouchThreshold&&d.is(c.normalScrollElements)?!0:f==c.normalScrollElementTouchThreshold?!1:K(d,++f)}function V(){b("body").append('<div id="pp-nav"><ul></ul></div>');var a=b("#pp-nav");a.css("color",c.navigation.textColor);a.addClass(c.navigation.position);for(var f=0;f<b(".pp-section").length;f++){var d="";c.anchors.length&&
(d=c.anchors[f]);if("undefined"!==c.navigation.tooltips){var e=c.navigation.tooltips[f];"undefined"===typeof e&&(e="")}a.find("ul").append('<li data-tooltip="'+e+'"><a href="#'+d+'"><span></span></a></li>')}a.find("span").css("border-color",c.navigation.bulletsColor)}function S(a,f){c.navigation&&(b("#pp-nav").find(".active").removeClass("active"),a?b("#pp-nav").find('a[href="#'+a+'"]').addClass("active"):b("#pp-nav").find("li").eq(f).find("a").addClass("active"))}function R(a){c.menu&&(b(c.menu).find(".active").removeClass("active"),
b(c.menu).find('[data-menuanchor="'+a+'"]').addClass("active"))}function W(){var a=h.createElement("p"),b,d={webkitTransform:"-webkit-transform",OTransform:"-o-transform",msTransform:"-ms-transform",MozTransform:"-moz-transform",transform:"transform"};h.body.insertBefore(a,null);for(var c in d)a.style[c]!==z&&(a.style[c]="translate3d(1px,1px,1px)",b=k.getComputedStyle(a).getPropertyValue(d[c]));h.body.removeChild(a);return b!==z&&0<b.length&&"none"!==b}var e=b.fn.pagepiling,g=b(this),A,B=0,L="ontouchstart"in
k||0<navigator.msMaxTouchPoints||navigator.maxTouchPoints,q=0,r=0,t=0,u=0,n=[],c=b.extend(!0,{direction:"vertical",menu:null,verticalCentered:!0,sectionsColor:[],anchors:[],scrollingSpeed:700,easing:"easeInQuart",loopBottom:!1,loopTop:!1,css3:!0,navigation:{textColor:"#000",bulletsColor:"#000",position:"right",tooltips:[]},normalScrollElements:null,normalScrollElementTouchThreshold:5,touchSensitivity:5,keyboardScrolling:!0,sectionSelector:".section",animateAnchor:!1,afterLoad:null,onLeave:null,afterRender:null},
M);b.extend(b.easing,{easeInQuart:function(a,b,c,e,g){return e*(b/=g)*b*b*b+c}});e.setScrollingSpeed=function(a){c.scrollingSpeed=a};e.setMouseWheelScrolling=function(a){a?g.get(0).addEventListener?(g.get(0).addEventListener("mousewheel",m,!1),g.get(0).addEventListener("wheel",m,!1)):g.get(0).attachEvent("onmousewheel",m):g.get(0).addEventListener?(g.get(0).removeEventListener("mousewheel",m,!1),g.get(0).removeEventListener("wheel",m,!1)):g.get(0).detachEvent("onmousewheel",m)};e.setAllowScrolling=
function(a){a?(e.setMouseWheelScrolling(!0),L&&(a=H(),g.off("touchstart "+a.down).on("touchstart "+a.down,T),g.off("touchmove "+a.move).on("touchmove "+a.move,U))):(e.setMouseWheelScrolling(!1),L&&(a=H(),g.off("touchstart "+a.down),g.off("touchmove "+a.move)))};e.setKeyboardScrolling=function(a){c.keyboardScrolling=a};e.moveSectionUp=function(){var a=b(".pp-section.active").prev(".pp-section");!a.length&&c.loopTop&&(a=b(".pp-section").last());a.length&&l(a)};e.moveSectionDown=function(){var a=b(".pp-section.active").next(".pp-section");
!a.length&&c.loopBottom&&(a=b(".pp-section").first());a.length&&l(a)};e.moveTo=function(a){var c="",c=isNaN(a)?b(h).find('[data-anchor="'+a+'"]'):b(".pp-section").eq(a-1);0<c.length&&l(c)};b(c.sectionSelector).each(function(){b(this).addClass("pp-section")});c.css3&&(c.css3=W());b(g).css({overflow:"hidden","-ms-touch-action":"none","touch-action":"none"});e.setAllowScrolling(!0);b.isEmptyObject(c.navigation)||V();var y=b(".pp-section").length;b(".pp-section").each(function(a){b(this).data("data-index",
a);b(this).css("z-index",y);a||0!==b(".pp-section.active").length||b(this).addClass("active");"undefined"!==typeof c.anchors[a]&&b(this).attr("data-anchor",c.anchors[a]);"undefined"!==typeof c.sectionsColor[a]&&b(this).css("background-color",c.sectionsColor[a]);c.verticalCentered&&!b(this).hasClass("pp-scrollable")&&b(this).addClass("pp-table").wrapInner('<div class="pp-tableCell" style="height:100%" />');--y}).promise().done(function(){c.navigation&&(b("#pp-nav").css("margin-top","-"+b("#pp-nav").height()/
2+"px"),b("#pp-nav").find("li").eq(b(".pp-section.active").index(".pp-section")).find("a").addClass("active"));b(k).on("load",function(){var a=k.location.hash.replace("#",""),a=b(h).find('.pp-section[data-anchor="'+a+'"]');0<a.length&&l(a,c.animateAnchor)});b.isFunction(c.afterRender)&&c.afterRender.call(this)});b(k).on("hashchange",function(){var a=k.location.hash.replace("#","").split("/")[0];a.length&&a&&a!==A&&(a=isNaN(a)?b(h).find('[data-anchor="'+a+'"]'):b(".pp-section").eq(a-1),l(a))});b(h).keydown(function(a){if(c.keyboardScrolling&&
!x())switch(a.which){case 38:case 33:e.moveSectionUp();break;case 40:case 34:e.moveSectionDown();break;case 36:e.moveTo(1);break;case 35:e.moveTo(b(".pp-section").length);break;case 37:e.moveSectionUp();break;case 39:e.moveSectionDown()}});c.normalScrollElements&&(b(h).on("mouseenter",c.normalScrollElements,function(){e.setMouseWheelScrolling(!1)}),b(h).on("mouseleave",c.normalScrollElements,function(){e.setMouseWheelScrolling(!0)}));var F=(new Date).getTime();b(h).on("click touchstart","#pp-nav a",
function(a){a.preventDefault();a=b(this).parent().index();l(b(".pp-section").eq(a))});b(h).on({mouseenter:function(){var a=b(this).data("tooltip");b('<div class="pp-tooltip '+c.navigation.position+'">'+a+"</div>").hide().appendTo(b(this)).fadeIn(200)},mouseleave:function(){b(this).find(".pp-tooltip").fadeOut(200,function(){b(this).remove()})}},"#pp-nav li")}})(jQuery,document,window);

</script>

	<script type="text/javascript">

	/* ===========================================================
 * pagepiling.js 0.0.8 (Beta)
 *
 * https://github.com/alvarotrigo/pagePiling.js
 * MIT licensed
 *
 * Copyright (C) 2014 alvarotrigo.com - A project by Alvaro Trigo
 *
 * ========================================================== */

(function(b){b.fn.pagepiling=function(c){function A(a){var c=b(".pp-section.active").index(".pp-section");a=a.index(".pp-section");return c>a?"up":"down"}function g(a,f){var d={destination:a,animated:f,activeSection:b(".pp-section.active"),anchorLink:a.data("anchor"),sectionIndex:a.index(".pp-section"),toMove:a,yMovement:A(a),leavingSection:b(".pp-section.active").index(".pp-section")+1};d.activeSection.is(a)||("undefined"===typeof d.animated&&(d.animated=!0),"undefined"!==typeof d.anchorLink&&c.anchors.length&&
(location.hash=d.anchorLink),d.destination.addClass("active").siblings().removeClass("active"),d.sectionsToMove=B(d),"down"===d.yMovement?(d.translate3d="vertical"!==c.direction?"translate3d(-100%, 0px, 0px)":"translate3d(0px, -100%, 0px)",d.scrolling="-100%",c.css3||d.sectionsToMove.each(function(a){a!=d.activeSection.index(".pp-section")&&b(this).css(m(d.scrolling))}),d.animateSection=d.activeSection):(d.translate3d="translate3d(0px, 0px, 0px)",d.scrolling="0",d.animateSection=a),b.isFunction(c.onLeave)&&
c.onLeave.call(this,d.leavingSection,d.sectionIndex+1,d.yMovement),C(d),D(d.anchorLink),E(d.anchorLink,d.sectionIndex),r=d.anchorLink,s=(new Date).getTime())}function C(a){c.css3?(t(a.animateSection,a.translate3d,a.animated),a.sectionsToMove.each(function(){t(b(this),a.translate3d,a.animated)}),setTimeout(function(){u(a)},c.scrollingSpeed)):(a.scrollOptions=m(a.scrolling),a.animated?a.animateSection.animate(a.scrollOptions,c.scrollingSpeed,c.easing,function(){n(a);n(a)}):(a.animateSection.css(m(a.scrolling)),
setTimeout(function(){n(a);u(a)},400)))}function u(a){b.isFunction(c.afterLoad)&&c.afterLoad.call(this,a.anchorLink,a.sectionIndex+1)}function B(a){return"down"===a.yMovement?b(".pp-section").map(function(c){if(c<a.destination.index(".pp-section"))return b(this)}):b(".pp-section").map(function(c){if(c>a.destination.index(".pp-section"))return b(this)})}function n(a){"up"===a.yMovement&&a.sectionsToMove.each(function(c){b(this).css(m(a.scrolling))})}function m(a){return"vertical"===c.direction?{top:a}:
{left:a}}function p(){return(new Date).getTime()-s<600+c.scrollingSpeed?!0:!1}function t(a,b,c){a.toggleClass("pp-easing",c);a.css({"-webkit-transform":b,"-moz-transform":b,"-ms-transform":b,transform:b})}function h(a){if(!p()){a=window.event||a;a=Math.max(-1,Math.min(1,a.wheelDelta||-a.deltaY||-a.detail));var c=b(".pp-section.active"),c=v(c);0>a?k("down",c):k("up",c);return!1}}function k(a,c){if("down"==a)var d="bottom",e=b.fn.pagepiling.moveSectionDown;else d="top",e=b.fn.pagepiling.moveSectionUp;
if(0<c.length)if(isScrolled(d,c))e();else return!0;else e()}function v(a){return scrollable=a.find(".pp-scrollable")}function w(){return window.PointerEvent?{down:"pointerdown",move:"pointermove",up:"pointerup"}:{down:"MSPointerDown",move:"MSPointerMove",up:"MSPointerUp"}}function x(a){var b=[];window.navigator.msPointerEnabled?(b.y=a.pageY,b.x=a.pageX):(b.y=a.touches[0].pageY,b.x=a.touches[0].pageX);return b}function F(a){a=x(a.originalEvent);l=a.y;touchStartX=a.x}function G(a){var f=a.originalEvent;
y(a.target)||(a.preventDefault(),a=b(".pp-section.active"),a=v(a),p()||(f=x(f),touchEndY=f.y,touchEndX=f.x,"horizontal"===c.direction&&Math.abs(touchStartX-touchEndX)>Math.abs(l-touchEndY)?Math.abs(touchStartX-touchEndX)>e.width()/100*c.touchSensitivity&&(touchStartX>touchEndX?k("down",a):touchEndX>touchStartX&&k("up",a)):Math.abs(l-touchEndY)>e.height()/100*c.touchSensitivity&&(l>touchEndY?k("down",a):touchEndY>l&&k("up",a))))}function y(a,f){f=f||0;var d=b(a).parent();return f<c.normalScrollElementTouchThreshold&&
d.is(c.normalScrollElements)?!0:f==c.normalScrollElementTouchThreshold?!1:y(d,++f)}function H(){b("body").append('<div id="pp-nav"><ul></ul></div>');var a=b("#pp-nav");a.css("color",c.navigation.textColor);a.addClass(c.navigation.position);for(var f=0;f<b(".pp-section").length;f++){var d="";c.anchors.length&&(d=c.anchors[f]);if("undefined"!==typeof c.navigation.tooltips){var e=c.navigation.tooltips[f];"undefined"===typeof e&&(e="")}a.find("ul").append('<li data-tooltip="'+e+'"><a href="#'+d+'"><span></span></a></li>')}a.find("span").css("border-color",
c.navigation.bulletsColor)}function E(a,f){c.navigation&&(b("#pp-nav").find(".active").removeClass("active"),a?b("#pp-nav").find('a[href="#'+a+'"]').addClass("active"):b("#pp-nav").find("li").eq(f).find("a").addClass("active"))}function D(a){c.menu&&(b(c.menu).find(".active").removeClass("active"),b(c.menu).find('[data-menuanchor="'+a+'"]').addClass("active"))}function I(){var a=document.createElement("p"),b,c={webkitTransform:"-webkit-transform",OTransform:"-o-transform",msTransform:"-ms-transform",
MozTransform:"-moz-transform",transform:"transform"};document.body.insertBefore(a,null);for(var e in c)void 0!==a.style[e]&&(a.style[e]="translate3d(1px,1px,1px)",b=window.getComputedStyle(a).getPropertyValue(c[e]));document.body.removeChild(a);return void 0!==b&&0<b.length&&"none"!==b}var e=b(this),r,s=0,z="ontouchstart"in window||0<navigator.msMaxTouchPoints,l=touchStartX=touchEndY=touchEndX=0;c=b.extend({direction:"vertical",menu:null,verticalCentered:!0,sectionsColor:[],anchors:[],scrollingSpeed:700,
easing:"swing",loopBottom:!1,loopTop:!1,css3:!0,navigation:{textColor:"#000",bulletsColor:"#000",position:"right",tooltips:["section1","section2","section3","section4"]},normalScrollElements:null,normalScrollElementTouchThreshold:5,touchSensitivity:5,keyboardScrolling:!0,sectionSelector:".section",animateAnchor:!1,afterLoad:null,onLeave:null,afterRender:null},c);b.fn.pagepiling.setScrollingSpeed=function(a){c.scrollingSpeed=a};b.fn.pagepiling.setMouseWheelScrolling=function(a){a?e.get(0).addEventListener?
(e.get(0).addEventListener("mousewheel",h,!1),e.get(0).addEventListener("wheel",h,!1)):e.get(0).attachEvent("onmousewheel",h):e.get(0).addEventListener?(e.get(0).removeEventListener("mousewheel",h,!1),e.get(0).removeEventListener("wheel",h,!1)):e.get(0).detachEvent("onmousewheel",h)};b.fn.pagepiling.setAllowScrolling=function(a){a?(b.fn.pagepiling.setMouseWheelScrolling(!0),z&&(MSPointer=w(),e.off("touchstart "+MSPointer.down).on("touchstart "+MSPointer.down,F),e.off("touchmove "+MSPointer.move).on("touchmove "+
MSPointer.move,G))):(b.fn.pagepiling.setMouseWheelScrolling(!1),z&&(MSPointer=w(),e.off("touchstart "+MSPointer.down),e.off("touchmove "+MSPointer.move)))};b.fn.pagepiling.setKeyboardScrolling=function(a){c.keyboardScrolling=a};b.fn.pagepiling.moveSectionUp=function(){var a=b(".pp-section.active").prev(".pp-section");!a.length&&c.loopTop&&(a=b(".pp-section").last());a.length&&g(a)};b.fn.pagepiling.moveSectionDown=function(){var a=b(".pp-section.active").next(".pp-section");!a.length&&c.loopBottom&&
(a=b(".pp-section").first());a.length&&g(a)};b.fn.pagepiling.moveTo=function(a){var c="",c=isNaN(a)?b('[data-anchor="'+a+'"]'):b(".pp-section").eq(a-1);0<c.length&&g(c)};b(c.sectionSelector).each(function(){b(this).addClass("pp-section")});c.css3&&(c.css3=I());b(e).css({overflow:"hidden","-ms-touch-action":"none","touch-action":"none"});b.fn.pagepiling.setAllowScrolling(!0);b.isEmptyObject(c.navigation)||H();var q=b(".pp-section").length;b(".pp-section").each(function(a){b(this).data("data-index",
a);b(this).css("z-index",q);a||0!==b(".pp-section.active").length||b(this).addClass("active");"undefined"!==typeof c.anchors[a]&&b(this).attr("data-anchor",c.anchors[a]);"undefined"!==typeof c.sectionsColor[a]&&b(this).css("background-color",c.sectionsColor[a]);c.verticalCentered&&b(this).addClass("pp-table").wrapInner('<div class="pp-tableCell" style="height:100%" />');q-=1}).promise().done(function(){c.navigation&&(b("#pp-nav").css("margin-top","-"+b("#pp-nav").height()/2+"px"),b("#pp-nav").find("li").eq(b(".pp-section.active").index(".pp-section")).find("a").addClass("active"));
b(window).on("load",function(){var a=window.location.hash.replace("#",""),a=b('.pp-section[data-anchor="'+a+'"]');0<a.length&&g(a,c.animateAnchor)});b.isFunction(c.afterRender)&&c.afterRender.call(this)});b(window).on("hashchange",function(){var a=window.location.hash.replace("#","").split("/")[0];a.length&&a&&a!==r&&(a=isNaN(a)?b('[data-anchor="'+a+'"]'):b(".pp-section").eq(a-1),g(a))});b(document).keydown(function(a){if(c.keyboardScrolling&&!p())switch(a.which){case 38:case 33:b.fn.pagepiling.moveSectionUp();
break;case 40:case 34:b.fn.pagepiling.moveSectionDown();break;case 36:b.fn.pagepiling.moveTo(1);break;case 35:b.fn.pagepiling.moveTo(b(".pp-section").length);break;case 37:b.fn.pagepiling.moveSectionUp();break;case 39:b.fn.pagepiling.moveSectionDown()}});c.normalScrollElements&&(b(document).on("mouseenter",c.normalScrollElements,function(){b.fn.pagepiling.setMouseWheelScrolling(!1)}),b(document).on("mouseleave",c.normalScrollElements,function(){b.fn.pagepiling.setMouseWheelScrolling(!0)}));b(document).on("click touchstart",
"#pp-nav a",function(a){a.preventDefault();a=b(this).parent().index();g(b(".pp-section").eq(a))});b(document).on({mouseenter:function(){var a=b(this).data("tooltip");b('<div class="pp-tooltip '+c.navigation.position+'">'+a+"</div>").hide().appendTo(b(this)).fadeIn(200)},mouseleave:function(){b(this).find(".pp-tooltip").fadeOut(200,function(){b(this).remove()})}},"#pp-nav li")}})(jQuery);

</script>

	<script type="text/javascript">
		$(document).ready(function() {

			/*
			* Plugin intialization
			*/
	    	$('#pagepiling').pagepiling({
	    		menu: '#menu',
	    		anchors: ['details', 'contact', 'page3', 'page4'],
			    sectionsColor: ['white', '#ee005a', '#2C3E50', '#39C'],
			    navigation: {
			    	'position': 'right',
			   		'tooltips': ['Details', 'Contact', 'Page 3', 'Pgae 4']
			   	},
			    afterRender: function(){
			    	$('#pp-nav').addClass('custom');
			    },
			    afterLoad: function(anchorLink, index){
			    	if(index>1){
			    		$('#pp-nav').removeClass('custom');
			    	}else{
			    		$('#pp-nav').addClass('custom');
			    	}
			    }
			});


			/*
		    * Internal use of the demo website
		    */
		    $('#showExamples').click(function(e){
				e.stopPropagation();
				e.preventDefault();
				$('#examplesList').toggle();
			});

			$('html').click(function(){
				$('#examplesList').hide();
			});
	    });
    </script>
</head>
<body>
<a href="https://github.com/alvarotrigo/pagePiling.js"></a>

<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://alvarotrigo.com/pagePiling/" data-text="Great plugin to create a single scrolling page pagePiling.js: ">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

<iframe src="http://ghbtns.com/github-btn.html?user=alvarotrigo&repo=pagePiling.js&type=watch&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="152" height="20" id="starGithub"></iframe>

	<ul id="menu">
		<li data-menuanchor="page1" class="active"><a href="#details">Details</a></li>
		<li data-menuanchor="page2"><a href="#contact">Contact</a></li>
		<li data-menuanchor="page3"><a href="#page3">Page 3</a></li>
		<li data-menuanchor="page4"><a href="#page4">Page 4</a></li>
	</ul>


	<div id="pagepiling">
	    <div class="section" id="section1">
	    	<h1>pagePiling.js</h1>
			<p>Create an original scrolling site</p>
			<img src="http://alvarotrigo.com/pagePiling/imgs/pagePiling-plugin.gif" alt="pagePiling" />
			<br />

			<div id="download"><a href="https://github.com/alvarotrigo/pagePiling.js/archive/master.zip">Download</a></div><br />

			<p id="donations">
        <a href="http://vk.cc/35R1HD">
          Donations will be appreciated!</a></p>
	    </div>
	    <div class="section" id="section2">
	    	<div class="intro">
	    		<div id="colors"></div>
	    		<h1>jQuery plugin</h1>
	    		<p>Pile your sections one over another and access them scrolling or by URL!</p>
	    		<div id="markup">
	    			
	    		</div>
	    	</div>
	    </div>
	    <div class="section" id="section3">
	    	<div class="intro">
	    		<h1>Configurable</h1>
	    		<p>Plenty of options, methods and callbacks to use.</p>
	    		<div id="colors2"></div>
	    		<div id="colors3"></div>
	    	</div>
	    </div>
	    <div class="section" id="section4">
	    	<div class="intro">
	    		<h1>Compatible</h1>
	    		<p>Designed to work on tablet and mobile devices.</p>
	    		<p>Oh! And its compatible with old browsers such as IE 8 or Opera 12!</p>
	    	</div>
	    </div>
	</div>



	<div id="infoMenu">
		<ul>
			<li><a href="https://github.com/alvarotrigo/pagePiling.js/archive/master.zip">Download</a></li>
			<li>
				<a href="http://alvarotrigo.com/pagePiling/" id="showExamples">Examples</a>
				<div id="examplesList">
					<div class="column">
						<h3>Navigation</h3>
						<ul>
							<li><a href="http://alvarotrigo.com/pagePiling/examples/horizontalScroll.html">Horizontal scroll</a></li>
							<li><a href="http://alvarotrigo.com/pagePiling/examples/noAnchor.html">Without anchor links (same URL)</a></li>
							<li><a href="http://alvarotrigo.com/pagePiling/examples/looping.html">Looping</a></li>
						</ul>
					</div>

					<div class="column">
						<h3>Design</h3>
						<ul>
							<li><a href="http://alvarotrigo.com/pagePiling/examples/backgrounds.html">Full backgrounds</a></li>
							<li><a href="http://alvarotrigo.com/pagePiling/examples/videoBackground.html">Full background videos</a></li>
						</ul>
					</div>

					<div class="column">
						<h3>Callbacks</h3>
						<ul>
							<li><a href="http://alvarotrigo.com/pagePiling/examples/callbacks.html">Callbacks</a></li>
						</ul>
					</div>
				</div>

			</li>
			<li><a href="https://github.com/alvarotrigo/pagePiling.js#pagepilingjs">Documentation</a></li>
			<li><a href="http://alvarotrigo.com/#contact-page">Contact</a></li>
		</ul>
	</div>


</body>
