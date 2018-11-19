//Owl Carousel js
$(document).ready(function(){$(".stats").owlCarousel({loop:!0,margin:10,nav:!0,dots:!1,navigation:!1,pagination:!1,responsive:{0:{items:1},600:{items:3},1e3:{items:4}}}),$(".hero-bg").owlCarousel({items:1,loop:!0,autoplay:!0,autoplayTimeout:5e3,autoplayHoverPause:!1,animateOut:"fadeOut",navigation:!1,dots:!1})}),
//On scroll change navbar background color
$(function(){$(document).scroll(function(){var e=$(".navbar");e.toggleClass("scrolled",$(this).scrollTop()>e.height())})}),
// $("#one").on("click", function () {
//     $("#description-text").empty();
//     $("#description-text").text(descriptions.one);
// });
$("#location").on("click",function(){$("#locations-menu").toggleClass("show")}),$("#service1").on("click",function(){$("#popup1").addClass("open"),$("#popup2").removeClass("open"),$("#popup5").removeClass("open"),$("#popup6").removeClass("open")}),$("#service2").on("click",function(){$("#popup2").addClass("open"),$("#popup1").removeClass("open"),$("#popup5").removeClass("open"),$("#popup6").removeClass("open")}),$("#service5").on("click",function(){$("#popup5").addClass("open"),$("#popup2").removeClass("open"),$("#popup1").removeClass("open"),$("#popup6").removeClass("open")}),$("#service6").on("click",function(){$("#popup6").addClass("open"),$("#popup2").removeClass("open"),$("#popup1").removeClass("open"),$("#popup5").removeClass("open")}),$("#service3").on("click",function(){$("#popup3").addClass("open"),$("#popup4").removeClass("open"),$("#popup7").removeClass("open"),$("#popup8").removeClass("open")}),$("#service4").on("click",function(){$("#popup4").addClass("open"),$("#popup3").removeClass("open"),$("#popup7").removeClass("open"),$("#popup8").removeClass("open")}),$("#service7").on("click",function(){$("#popup7").addClass("open"),$("#popup3").removeClass("open"),$("#popup4").removeClass("open"),$("#popup8").removeClass("open")}),$("#service8").on("click",function(){$("#popup8").addClass("open"),$("#popup3").removeClass("open"),$("#popup4").removeClass("open"),$("#popup7").removeClass("open")}),$(".close").on("click",function(){$("#popup1").removeClass("open"),$("#popup2").removeClass("open"),$("#popup3").removeClass("open"),$("#popup4").removeClass("open"),$("#popup5").removeClass("open"),$("#popup6").removeClass("open"),$("#popup7").removeClass("open"),$("#popup8").removeClass("open")}),
// Timline Script
$("#search-icon").on("click",function(){$("#search").toggleClass("show")}),
// New Timeline
jQuery(document).ready(function(s){function e(e){e.each(function(){var n=s(this),t={};
//cache timeline components 
t.timelineWrapper=n.find(".events-wrapper"),t.eventsWrapper=t.timelineWrapper.children(".events"),t.fillingLine=t.eventsWrapper.children(".filling-line"),t.timelineEvents=t.eventsWrapper.find("a"),t.timelineDates=g(t.timelineEvents),t.eventsMinLapse=h(t.timelineDates),t.timelineNavigation=n.find(".cd-timeline-navigation"),t.eventsContent=n.children(".events-content"),
//assign a left postion to the single events along the timeline
c(t,y);
//assign a width to the timeline
var o=u(t,y);
//the timeline has been initialize - show it
n.addClass("loaded"),
//detect click on the next arrow
t.timelineNavigation.on("click",".next",function(e){e.preventDefault(),p(t,o,"next")}),
//detect click on the prev arrow
t.timelineNavigation.on("click",".prev",function(e){e.preventDefault(),p(t,o,"prev")}),
//detect click on the a single event - show new event content
t.eventsWrapper.on("click","a",function(e){e.preventDefault(),t.timelineEvents.removeClass("selected"),s(this).addClass("selected"),f(s(this)),v(s(this),t.fillingLine,o),d(s(this),t.eventsContent)}),
//on swipe, show next/prev event content
t.eventsContent.on("swipeleft",function(){var e;"mobile"==x()&&a(t,o,"next")}),t.eventsContent.on("swiperight",function(){var e;"mobile"==x()&&a(t,o,"prev")}),
//keyboard navigation
s(document).keyup(function(e){"37"==e.which&&w(n.get(0))?a(t,o,"prev"):"39"==e.which&&w(n.get(0))&&a(t,o,"next")})})}function p(e,n,t){
//retrieve translateX value of timelineComponents['eventsWrapper']
var o=m(e.eventsWrapper),i=Number(e.timelineWrapper.css("width").replace("px",""));
//translate the timeline to the left('next')/right('prev') 
//translate the timeline to the left('next')/right('prev') 
"next"==t?l(e,o-i+y,i-n):l(e,o+i-y)}function a(e,n,t){
//go from one event to the next/previous one
var o=e.eventsContent.find(".selected"),i;if(0<("next"==t?o.next():o.prev()).length){//if there's a next/prev event - show it
var p=e.eventsWrapper.find(".selected"),s="next"==t?p.parent("li").next("li").children("a"):p.parent("li").prev("li").children("a");v(s,e.fillingLine,n),d(s,e.eventsContent),s.addClass("selected"),p.removeClass("selected"),f(s),r(t,s,e)}}function r(e,n,t){
//translate timeline to the left/right according to the position of the selected event
var o=window.getComputedStyle(n.get(0),null),i=Number(o.getPropertyValue("left").replace("px","")),p=Number(t.timelineWrapper.css("width").replace("px","")),s=Number(t.eventsWrapper.css("width").replace("px","")),a=m(t.eventsWrapper);("next"==e&&p-a<i||"prev"==e&&i<-a)&&l(t,p/2-i,p-s)}function l(e,n,t){var o;n=0<n?0:n,//do not translate more than timeline width
C(e.eventsWrapper.get(0),"translateX",(//only negative translate value
n=void 0!==t&&n<t?t:n)+"px"),
//update navigation arrows visibility
0==n?e.timelineNavigation.find(".prev").addClass("inactive"):e.timelineNavigation.find(".prev").removeClass("inactive"),n==t?e.timelineNavigation.find(".next").addClass("inactive"):e.timelineNavigation.find(".next").removeClass("inactive")}function v(e,n,t){
//change .filling-line length according to the selected event
var o=window.getComputedStyle(e.get(0),null),i=o.getPropertyValue("left"),p=o.getPropertyValue("width"),s=(i=Number(i.replace("px",""))+Number(p.replace("px",""))/2)/t;C(n.get(0),"scaleX",s)}function c(e,n){for(i=0;i<e.timelineDates.length;i++){var t=$(e.timelineDates[0],e.timelineDates[i]),o=Math.round(t/e.eventsMinLapse)+2;e.timelineEvents.eq(i).css("left",o*n+"px")}}function u(e,n){var t,o=$(e.timelineDates[0],e.timelineDates[e.timelineDates.length-1])/e.eventsMinLapse,o,i=(o=Math.round(o)+4)*n;return e.eventsWrapper.css("width",i+"px"),v(e.eventsWrapper.find("a.selected"),e.fillingLine,i),r("next",e.eventsWrapper.find("a.selected"),e),i}function d(e,n){var t=e.data("date"),o=n.find(".selected"),i=n.find('[data-date="'+t+'"]'),p=i.height();if(i.index()>o.index())var s="selected enter-right",a="leave-left";else var s="selected enter-left",a="leave-right";i.attr("class",s),o.attr("class",a).one("webkitAnimationEnd oanimationend msAnimationEnd animationend",function(){o.removeClass("leave-right leave-left"),i.removeClass("enter-left enter-right")}),n.css("height",p+"px")}function f(e){e.parent("li").prevAll("li").children("a").addClass("older-event").end().end().nextAll("li").children("a").removeClass("older-event")}function m(e){var n=window.getComputedStyle(e.get(0),null),t;if(0<=(t=n.getPropertyValue("-webkit-transform")||n.getPropertyValue("-moz-transform")||n.getPropertyValue("-ms-transform")||n.getPropertyValue("-o-transform")||n.getPropertyValue("transform")).indexOf("("))var t,o=(t=(t=(t=t.split("(")[1]).split(")")[0]).split(","))[4];else var o=0;return Number(o)}function C(e,n,t){e.style["-webkit-transform"]=n+"("+t+")",e.style["-moz-transform"]=n+"("+t+")",e.style["-ms-transform"]=n+"("+t+")",e.style["-o-transform"]=n+"("+t+")",e.style.transform=n+"("+t+")"}
//based on http://stackoverflow.com/questions/542938/how-do-i-get-the-number-of-days-between-two-dates-in-javascript
function g(e){var p=[];return e.each(function(){var e,n=s(this).data("date").split("T");if(1<n.length)//both DD/MM/YEAR and time are provided
var t=n[0].split("/"),o=n[1].split(":");else if(0<=n[0].indexOf(":"))//only time is provide
var t=["2000","0","0"],o=n[0].split(":");else//only DD/MM/YEAR
var t=n[0].split("/"),o=["0","0"];var i=new Date(t[2],t[1]-1,t[0],o[0],o[1]);p.push(i)}),p}function $(e,n){return Math.round(n-e)}function h(e){
//determine the minimum distance among events
var n=[];for(i=1;i<e.length;i++){var t=$(e[i-1],e[i]);n.push(t)}return Math.min.apply(null,n)}
/*
		How to tell if a DOM element is visible in the current viewport?
		http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
	*/function w(e){for(var n=e.offsetTop,t=e.offsetLeft,o=e.offsetWidth,i=e.offsetHeight;e.offsetParent;)n+=(e=e.offsetParent).offsetTop,t+=e.offsetLeft;return n<window.pageYOffset+window.innerHeight&&t<window.pageXOffset+window.innerWidth&&n+i>window.pageYOffset&&t+o>window.pageXOffset}function x(){
//check if mobile or desktop device
return window.getComputedStyle(document.querySelector(".cd-horizontal-timeline"),"::before").getPropertyValue("content").replace(/'/g,"").replace(/"/g,"")}var n=s(".cd-horizontal-timeline"),y=90;0<n.length&&e(n)});