!function a(o,u,c){function s(e,t){if(!u[e]){if(!o[e]){var n="function"==typeof require&&require;if(!t&&n)return n(e,!0);if(l)return l(e,!0);var i=new Error("Cannot find module '"+e+"'");throw i.code="MODULE_NOT_FOUND",i}var r=u[e]={exports:{}};o[e][0].call(r.exports,function(t){return s(o[e][1][t]||t)},r,r.exports,a,o,u,c)}return u[e].exports}for(var l="function"==typeof require&&require,t=0;t<c.length;t++)s(c[t]);return s}({1:[function(t,e,n){$(function(){$("main").on("click",".popular-countries-menu li > span",function(){var t=$(this).data("city"),e=$(this).data("alternativeCity");[".popular-countries-items",".popular-countries-flight"].forEach(function(t){var e=$(t);e.hasClass("active")&&e.removeClass("active")}),$("."+t).addClass("active"),$("."+e).addClass("active"),$(".popular-countries-menu li").removeClass("active"),$(this).closest("li").addClass("active"),$(".popular-countries-menu .dropdown-toggle").text($(this).data("name"))}),$(".popular-countries").find("div.destination-item").each(function(t,e){$(e).replaceWith(function(){return $("<a>",{html:this.innerHTML,href:this.dataset.href,class:"destination-item"})})}),$(document).on("widget:change-city",function(t,e){var n=$(".popular-countries-menu").find('span[data-name="'+e+'"]');n.length&&n.trigger("click")})})},{}]},{},[1]);
//# sourceMappingURL=popular-countries.min.js.map
