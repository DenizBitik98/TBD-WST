var _createClass=function(){function i(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}return function(e,t,n){return t&&i(e.prototype,t),n&&i(e,n),e}}();function _classCallCheck(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function _possibleConstructorReturn(e,t){if(!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!t||"object"!=typeof t&&"function"!=typeof t?e:t}function _inherits(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function, not "+typeof t);e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,enumerable:!1,writable:!0,configurable:!0}}),t&&(Object.setPrototypeOf?Object.setPrototypeOf(e,t):e.__proto__=t)}!function a(r,s,c){function l(t,e){if(!s[t]){if(!r[t]){var n="function"==typeof require&&require;if(!e&&n)return n(t,!0);if(h)return h(t,!0);var i=new Error("Cannot find module '"+t+"'");throw i.code="MODULE_NOT_FOUND",i}var o=s[t]={exports:{}};r[t][0].call(o.exports,function(e){return l(r[t][1][e]||e)},o,o.exports,a,r,s,c)}return s[t].exports}for(var h="function"==typeof require&&require,e=0;e<c.length;e++)l(c[e]);return l}({1:[function(e,t,n){window.hSelect=e("../../../include/h-select/_js/h-select")},{"../../../include/h-select/_js/h-select":2}],2:[function(e,t,n){function i(e){this.element=0<$(e.selector).length?$(e.selector):null,this.element&&(this.id=this.element.prop("id"),""==this.id&&(this.id="hSelect"+Math.floor(10001*Math.random()),this.element.prop("id",this.id)),this.$facewrap=this.element.find(".h-select-face-wrap"),this.$face=this.element.find(".h-select-face"),this.$items=this.element.find(".h-select-items"),this.value=this.$face.data("value"),this.theme=(e.theme||"default")+"_hSelect",this.element.addClass(this.theme),this.checkWidth=!("checkWidth"in e)||e.checkWidth,this.checkHeight=!("checkHeight"in e)||e.checkWidth,this.delta="delta"in e?e.delta:0,this.dynamicItems="dynamicItems"in e&&e.dynamicItems,this.onShowItem="onShowItem"in e?e.onShowItem:null,this.onBodyClick="onBodyClick"in e?e.onBodyClick:null,this.preventDefault=!("preventDefault"in e)||e.preventDefault,this.forwarding="forwarding"in e&&e.forwarding,this.userItemClick="onItemClick"in e?e.onItemClick:null,this.userOnFaceClick="onFaceClick"in e?e.onFaceClick:null,this.userItemMouseEnter="onItemMouseEnter"in e?e.onItemMouseEnter:null,this.userItemMouseLeave="onItemMouseLeave"in e?e.onItemMouseLeave:null,this.showOn="showOn"in e?e.showOn:"mouse",this.itemsType="itemsType"in e?e.itemsType:"items",this.handleOnChange=e.onChange||null,this.handlers())}i.prototype.handlers=function(){var t=this;$(document).ready(function(){t.$items.on("mouseenter",".h-select-item",function(e){e.preventDefault(),"function"==typeof t.userItemMouseEnter?t.userItemMouseEnter($(this)):t.onItemMouseEnter($(this))}),t.$items.on("mouseleave",".h-select-item",function(e){e.preventDefault(),"function"==typeof t.userItemMouseLeave?t.userItemMouseLeave($(this)):t.onItemMouseLeave($(this))}),t.$items.on("mouseenter",function(e){e.preventDefault(),$(this).addClass("h-select-items__hovered")}),t.$items.on("mouseleave",function(e){e.preventDefault(),$(this).removeClass("h-select-items__hovered")});var e="mouse"==t.showOn?"mousedown":"click";t.$facewrap.on(e,function(e){e.preventDefault(),"function"==typeof t.userOnFaceClick?t.userOnFaceClick(e):t.onFaceClick(e)});e="mouse"==t.showOn?"mouseup":"click";t.$items.on(e,".h-select-item",function(e){"function"==typeof t.userItemClick?t.userItemClick($(this)):(t.preventDefault?e.preventDefault():t.forwarding&&(window.location=$(this).find("a").prop("href")),t.onItemClick($($(this))))}),$("body").on("click",function(e){0==$(e.target).closest("#"+t.id).length&&$(e.target).prop("id")!=t.id&&("function"==typeof t.onBodyClick&&!t.onBodyClick(e)||0!=$(e.target).closest("#"+t.id+" .h-select-items").length||t.hide())})})},i.prototype.onChange=function(e,t,n){this.value=e,this.$face.data("value",e),this.$face.html(t),"function"==typeof this.handleOnChange&&this.handleOnChange(this,t,n)},i.prototype.onFaceClick=function(e){this.toggle(e)},i.prototype.onItemClick=function(e){var t,n=e.data("value");n!==this.value&&(t=e.html(),void 0!==e.data("text")&&""!=e.data("text")&&(t=e.data("text")),this.$items.find(".h-select-item__active").removeClass("h-select-item__active"),e.addClass("h-select-item__active"),this.onChange(n,t,e)),this.hide()},i.prototype.onItemMouseEnter=function(e){e.addClass("h-select-item__hovered")},i.prototype.onItemMouseLeave=function(e){e.removeClass("h-select-item__hovered")},i.prototype.show=function(e){var t,n;this.checkWidth&&(t=this.element.width(),this.$items.width(t+this.delta)),this.checkHeight&&(n=this.$facewrap.height()+3,this.$items.css({top:n+"px"})),this.$facewrap.addClass("h-select-face-wrap__opened"),this.element.closest(".h-select-wrap").addClass("h-select-wrap__opened"),this.dynamicItems&&"function"==typeof this.onShowItem&&this.onShowItem(this,e),this.$items.show(),this.element.trigger("show",[this])},i.prototype.hide=function(){this.$facewrap.removeClass("h-select-face-wrap__opened"),this.element.closest(".h-select-wrap").removeClass("h-select-wrap__opened"),this.$items.hide(),this.element.trigger("hide",[this])},i.prototype.toggle=function(e){"block"==this.$items.css("display")?this.hide(e):this.show(e)},i.prototype.set=function(e,t){var n,i,o;""!=e&&((t=void 0!==t&&t)?0!=(n=this.$items.find(".h-select-item[data-value="+e+"]")).length&&(i=n.html(),this.value=e,this.$face.data("value",e),this.$face.html(i)):(o="mouse"==this.showOn?"mouseup":"click",this.$items.find(".h-select-item[data-value="+e+"]").trigger(o)))},i.prototype.setByName=function(e){var t="mouse"==this.showOn?"mouseup":"click";this.$items.find(".h-select-item").each(function(){if($(this).text()==e)return $(this).trigger(t),!1})},t.exports=i},{}]},{},[1]),function a(r,s,c){function l(t,e){if(!s[t]){if(!r[t]){var n="function"==typeof require&&require;if(!e&&n)return n(t,!0);if(h)return h(t,!0);var i=new Error("Cannot find module '"+t+"'");throw i.code="MODULE_NOT_FOUND",i}var o=s[t]={exports:{}};r[t][0].call(o.exports,function(e){return l(r[t][1][e]||e)},o,o.exports,a,r,s,c)}return s[t].exports}for(var h="function"==typeof require&&require,e=0;e<c.length;e++)l(c[e]);return l}({1:[function(e,t,n){window.lockPopup=!1,window.img_load='<img src="/img/load.gif" alt="loading">',window.getMessageTemplate=function(e,t){t=t||"";var n,i={loading:{tpl:'<div class="alert alert-info">{{text}}</div>',text:"Пожалуйста подождите "+window.img_load},success:{tpl:'<div class="alert alert-success"><button type="button" class="close">×</button>{{text}}</div>',text:"Успешно"},error:{tpl:'<div class="alert alert-danger"><button type="button" class="close">×</button>{{text}}</div>',text:"Ошибка"}},o=t;return e in i&&(n=t||i[e].text,o=i[e].tpl.split("{{text}}").join(n)),o},window.initPhoneMask=function(){$(".phone-mask").mask("+7(999)999-99-99")},window.bs3popup=function(t){var e,i,n,o,a,r,s,c,l,h,u,d,p=$("#bspopup");"string"!=typeof t?(e=t.hasOwnProperty("page_url")?t.page_url:null,i=t.hasOwnProperty("data")?t.data:{},n=t.hasOwnProperty("height")?t.height:null,o=t.hasOwnProperty("width")?t.width:null,a=t.hasOwnProperty("content")?t.content:null,r=!!t.hasOwnProperty("setLock")&&t.setLock,!!t.hasOwnProperty("getLock")&&t.getLock&&window.lockPopup||(t.hasOwnProperty("hash")&&t.hash&&(document.location.hash=t.hash),s=t.hasOwnProperty("onAfterShow")?t.onAfterShow:null,c=p.find(".modal-dialog"),l=p.find(".modal-body"),h=p.find(".modal-content"),p.addClass("request-helper"),c.css("width","950px"),o&&c.css("width",parseFloat(o)+40+"px"),n?l.css("height",n+"px"):l.css("height","auto"),p.removeClass("subscribe-close").removeClass("success-close").removeClass("request-close"),c.removeClass("transparent"),h.removeClass("transparent"),r&&(window.lockPopup=!0),p.one("hide.bs.modal",function(e){r&&(window.lockPopup=!1)}),e?i.hasOwnProperty("frame")&&parseInt(i.frame)?((u=document.createElement("iframe")).id="htIframe",u.style.width="100%",u.style.height="0px",u.style.display="none",d=$('<div style="text-align: center;">'+img_load+" Подождите, идет загрузка</div>"),u.onload=function(){var e,t,n=$("#htIframe");n.css("display","block"),t=i.frameHeight?i.frameHeight:(e=n.contents().find(".iframe_form")).length?e.height()+50:(e=n.contents().find("body")).outerHeight(),n.height(t+"px"),d.remove()},l.html(u),l.append(d),p.modal({backdrop:!0,show:!0}),u.src=e,t.transparent&&c.addClass("transparent")):(l.html("<p class='text-center'><img src='/img/load.gif' /></p>"),p.modal({backdrop:!0,show:!0}),$.get(e,{},function(e){l.html(e),t.transparent&&c.addClass("transparent"),"function"==typeof s&&s(),window.tracking.callTrackingRefresh()})):a&&(l.html(a),"function"==typeof s&&s(),p.modal({backdrop:!0,show:!0}),window.tracking.callTrackingRefresh()))):p.modal(t)},window.close_popup=function(){bs3popup("hide")},window.popup2=function(e){bs3popup(e)},window.updateElementsInViewport=function(e){var t,n=$(e);n.length&&(t=void 0,n.each(function(){var e="r"+(t=$(this)).closest(".main-row.visible").data("id");window.hasOwnProperty("hotTableData")&&window.hotTableData.hasOwnProperty(e)&&window.hotTableData[e].values.showDiscount&&t.removeClass("hidden")}))};var o="";actID=1,window.findToursEnd={},window.sendReq=function(e,a,t){var n={city_id:window.city_id,calcRelations:!0,fromDb:!0,params:{adult:"2",child:"0",ch1:"",ch2:"",anyHotel:"1",hotels:[],nightsFrom:"7",nightsTo:"14",priceMin:"",priceMax:"",region:"",stars:"",operators:"",cur:app.currency}};for(var i in e.params)n.params[i]=e.params[i];for(var i in e)"params"!==i&&(n[i]=e[i]);window.ends||(window.ends=app.srcCount),window.rt.bind("app.tours",function(e){if(actID-1!=e.actID)return!1;var t=!1,n=e.req_id;if(window.firstReq_id||(window.firstReq_id=n),"end"===e.act&&0==--ends&&(t=!0,window.findInProgress=!1,window.findToursEnd))for(var i in window.findToursEnd)window.findToursEnd[i]();var o=e.progress.total;a&&a(e,o,t),window.findToursCallback&&window.findToursCallback(e,o,t)}),rt.isOnline()?(window.findInProgress=!0,n.actID=t||actID++,rt.go("app.tours",n)):(clearTimeout(o),o=setTimeout(function(){sendReq(e,a,t)},500))}},{}]},{},[1]),function a(r,s,c){function l(t,e){if(!s[t]){if(!r[t]){var n="function"==typeof require&&require;if(!e&&n)return n(t,!0);if(h)return h(t,!0);var i=new Error("Cannot find module '"+t+"'");throw i.code="MODULE_NOT_FOUND",i}var o=s[t]={exports:{}};r[t][0].call(o.exports,function(e){return l(r[t][1][e]||e)},o,o.exports,a,r,s,c)}return s[t].exports}for(var h="function"==typeof require&&require,e=0;e<c.length;e++)l(c[e]);return l}({1:[function(e,t,n){window.loadGoogleMapsApi=e("../../../../include/maps/google-maps-api-loader")},{"../../../../include/maps/google-maps-api-loader":2}],2:[function(e,t,n){var i=[],o=!1;window.googleMapsApiOnLoad=function(){for(var e in i)i[e]();i=[]},t.exports=function(e){e&&i.push(e),window.mapsLoaded?e&&window.googleMapsApiOnLoad():o||(o=!0,$.getScript("https://maps.google.com/maps/api/js?key="+window.app.googleMapApiKey+"&loading=async&sensor=false&callback=googleMapsApiOnLoad",function(){window.mapsLoaded=!0}))}},{}]},{},[1]),function a(r,s,c){function l(t,e){if(!s[t]){if(!r[t]){var n="function"==typeof require&&require;if(!e&&n)return n(t,!0);if(h)return h(t,!0);var i=new Error("Cannot find module '"+t+"'");throw i.code="MODULE_NOT_FOUND",i}var o=s[t]={exports:{}};r[t][0].call(o.exports,function(e){return l(r[t][1][e]||e)},o,o.exports,a,r,s,c)}return s[t].exports}for(var h="function"==typeof require&&require,e=0;e<c.length;e++)l(c[e]);return l}({1:[function(e,t,n){var i=e("../../../../include/_js/city-select/BaseCitySelect");function o(){_classCallCheck(this,o);var e=_possibleConstructorReturn(this,(o.__proto__||Object.getPrototypeOf(o)).call(this));return e.cityElement=null,e}(new(_inherits(o,i),_createClass(o,[{key:"init",value:function(){var n=this;this.cityElement=new hSelect({selector:"#hSelectMainCity",theme:"main",checkWidth:!1,onItemClick:function(e){var t,n,i=e.data("value");i!==this.value&&(t=e.html(),void 0!==e.data("text")&&""!=e.data("text")&&(t=e.data("text")),this.$items.find(".h-select-item__active").removeClass("h-select-item__active"),e.addClass("h-select-item__active"),this.onChange(i,t,e),n=window.CityItem.findById(i),$(window).trigger("onLocation",n)),this.hide()},onChange:function(e){var t=e.$face.text().trim();n.setCity(t,!n.isLocatedUser(),!0),$(document).trigger("widget:change-city",t)},onBodyClick:function(e){for(var t in e.target.classList)if("deny"===e.target.classList[t])return!1;return!0}}),this.attachListeners(),this.checkLocation()}},{key:"attachListeners",value:function(){var n=this;$(window).on("onLocation",function(e,t){t.id&&(n.fitSiteToCity(t.id,!1),window.tracking.callTrackingRefresh())})}},{key:"fitSiteToCity",value:function(e,t){var n=window.CityItem.findById(e);if(!n)return!1;this.drawContacts(n.id),t||($(".hot-slider .hot_fake_options .hot_fake_option[data-city="+n.id+"]").trigger("click"),this.cityElement.set(n.id,!0))}},{key:"onAfterSetCity",value:function(){}},{key:"drawContacts",value:function(e){if(!window.CityItem.contactExist(e))return!1;var t=window.CityItem.findById(e),n=window.CityItem.getDefault();console.log("drawContacts",t);var i=t.socials.facebook?t.socials.facebook:n.socials.facebook,o=t.socials.instagram?t.socials.instagram:n.socials.instagram;$(".facebook-link").attr("href",i),$(".instagram-link").attr("href",o)}}]),o)).init()},{"../../../../include/_js/city-select/BaseCitySelect":2}],2:[function(e,t,n){window.CityItem=e("./CityItem");var i=e("./PixelTracker"),o=e("./Location"),a=(_createClass(r,[{key:"init",value:function(){}},{key:"fitSiteToCity",value:function(){}},{key:"isLocatedUser",value:function(){return app.realCity.name}},{key:"checkLocation",value:function(){var t=this;this.isLocatedUser()?(this.fitSiteToCity(app.city.id,!0),this.initializePixel(app.realCity.name)):window.addEventListener("load",function(){window.app.isGeolocationEnabled?o.get(function(e){t.setCity(e,!0,!0),t.onCheckLocation(e)}):t.onCheckLocation("")},{once:!0})}},{key:"onCheckLocation",value:function(e){this.initializePixel(e)}},{key:"setCity",value:function(e,t,n){var i=this,o=!(2<arguments.length&&void 0!==n)||n;t&&(app.realCity.name=e),$.post(app.urls.setCity,{city:e,real:t?1:""},function(e){o&&e.city&&(app.city=e.city,i.onAfterSetCity())},"json")}},{key:"onAfterSetCity",value:function(){}},{key:"initializePixel",value:function(e){i.exists(e)||(e=window.CityItem.getDefault().name),i.init(e)}}]),r);function r(){_classCallCheck(this,r)}t.exports=a},{"./CityItem":3,"./Location":4,"./PixelTracker":5}],3:[function(e,t,n){var i="current",o="alt",a=(_createClass(r,[{key:"getPhoneAsLink",value:function(e){return e===o?this.altPhone.linkHtml:this.currentPhone.linkHtml}},{key:"getPhoneView",value:function(e){return e===o?this.getAltPhoneView():this.getCurrentPhoneView()}},{key:"getCurrentPhoneView",value:function(){return this.contactsHidden?this.currentPhone.hiddenHtml:this.currentPhone.linkHtml}},{key:"getAltPhoneView",value:function(){return this.contactsHidden?this.altPhone.hiddenHtml:this.altPhone.linkHtml}}],[{key:"_getHiddenPhoneHtml",value:function(e,t,n){return r._template(window.app.cityTemplate.hiddenPhone,{phoneCode:e,cityId:t,type:n})}},{key:"_getPhoneLinkHtml",value:function(e,t,n){return r._template(window.app.cityTemplate.phoneLink,{phone:e,href:t,clearPhone:n})}},{key:"_template",value:function(e,t){for(var n in t)e=e.split("{{"+n+"}}").join(t[n]);return e}},{key:"_findByField",value:function(e,t){var n=null;for(var i in app.cities)if(t===app.cities[i][e]){n=new r(app.cities[i]);break}return n}},{key:"contactExist",value:function(e){return void 0!==app.cities[e]}},{key:"findByName",value:function(e){return r._findByField("name",e)}},{key:"findByDepartId",value:function(e){return r._findByField("depart_id",e)}},{key:"findById",value:function(e){return this.contactExist(e)?new r(app.cities[e]):null}},{key:"getCurrent",value:function(){var e=null;return app.city&&this.contactExist(app.city.id)&&(e=new r(this.findById(app.city.id))),null===e&&(e=this.getDefault()),e}},{key:"getDefault",value:function(){return this.findById(1)}}]),r);function r(e){_classCallCheck(this,r),this.id=Number(e.id),this.name=e.name,this.depart_id=e.depart_id?Number(e.depart_id):null,this.currentPhone={code:e.currentPhone.code,phone:e.currentPhone.phone,clearPhone:e.currentPhone.clearPhone,href:e.currentPhone.href},this.currentPhone.linkHtml=r._getPhoneLinkHtml(this.currentPhone.phone,this.currentPhone.href,this.currentPhone.clearPhone),this.currentPhone.hiddenHtml=r._getHiddenPhoneHtml(this.currentPhone.code,this.id,i),this.altPhone={code:e.altPhone.code,phone:e.altPhone.phone,clearPhone:e.altPhone.clearPhone,href:e.altPhone.href},this.altPhone.linkHtml=r._getPhoneLinkHtml(this.altPhone.phone,this.altPhone.href,this.altPhone.clearPhone),this.altPhone.hiddenHtml=r._getHiddenPhoneHtml(this.altPhone.code,this.id,o),this.socials={instagram:e.socials.instagram,facebook:e.socials.facebook},this.contactsHidden=e.contactsHidden}t.exports=a},{}],4:[function(e,t,n){var i=(_createClass(o,[{key:"get",value:function(i){var e=this;window.ymapGeolocationLoader.load(function(){var n;"undefined"!=typeof ymaps&&ymaps.geolocation?null!==e.locatedCity?i(e.locatedCity):(n=e,ymaps.ready(function(){ymaps.geolocation.get({provider:"yandex"}).then(function(e){var t=e.geoObjects.get(0).properties.get("name");"Нур-Султан (Астана)"===t&&(t="Астана"),console.log("geo",t),n.locatedCity=t,i(n.locatedCity)})})):console.log("ymaps undefined, geolocation off")})}}]),o);function o(){_classCallCheck(this,o),this.locatedCity=null}t.exports=new i},{}],5:[function(e,t,n){var i=(_createClass(o,[{key:"init",value:function(e){if(this.isInitialized)return!1;var t,n,i,o,a,r=this.getId(e);""!==r&&(this.isInitialized=!0,t=window,n=document,t.fbq||(i=t.fbq=function(){i.callMethod?i.callMethod.apply(i,arguments):i.queue.push(arguments)},t._fbq||(t._fbq=i),(i.push=i).loaded=!0,i.version="2.0",i.queue=[],(o=n.createElement("script")).async=!0,o.src="https://connect.facebook.net/en_US/fbevents.js",(a=n.getElementsByTagName("script")[0]).parentNode.insertBefore(o,a)),fbq("init",r),fbq("track","PageView"));var s=null;return void 0!==window.app.updateSourceId?s=window.app.updateSourceId:document.referrer||(s=33),null!==s&&$.get("/site/updateCounter",{src_id:s,city_id:window.app.city.id}),!0}},{key:"getId",value:function(e){var t="";switch(e){case"Алматы":t="";break;case"Астана":case"Нур-Султан (Астана)":case"Актобе":t=""}return t}},{key:"exists",value:function(e){return""!==this.getId(e)}}]),o);function o(){_classCallCheck(this,o),this.isInitialized=!1}t.exports=new i},{}]},{},[1]),function a(r,s,c){function l(t,e){if(!s[t]){if(!r[t]){var n="function"==typeof require&&require;if(!e&&n)return n(t,!0);if(h)return h(t,!0);var i=new Error("Cannot find module '"+t+"'");throw i.code="MODULE_NOT_FOUND",i}var o=s[t]={exports:{}};r[t][0].call(o.exports,function(e){return l(r[t][1][e]||e)},o,o.exports,a,r,s,c)}return s[t].exports}for(var h="function"==typeof require&&require,e=0;e<c.length;e++)l(c[e]);return l}({1:[function(e,t,n){$(document).ready(function(){var e=$("body");moment&&moment.locale("ru"),initPhoneMask(),new hSelect({selector:"#hSelectCurrency",theme:"main",checkWidth:!1,onChange:function(e){$.post(app.urls.setCurrency,{currency:e.value}).done(function(e){window.location.reload()})}}),$("ul.nav li.dropdown").hover(function(e){$(this).find(".dropdown-menu").stop(!0,!0).delay(40).fadeIn(1)},function(){$(this).find(".dropdown-menu").stop(!0,!0).delay(40).hide()}),$(".js-slide-to").on("click",function(e){e.preventDefault();var t=$(this).data("target"),n=$(t);n.length&&$("html, body").animate({scrollTop:n.offset().top-10},1e3)}),$(".filters-item .item-toggle").on("click",function(e){$(this).parent().toggleClass("open")}),e.on("click",".show-subscribe-popup",function(e){e.preventDefault();var t=$("#bspopup"),n=t.find(".modal-body"),i=t.find(".modal-content");t.addClass("request-helper"),n.css("height","auto"),i.addClass("transparent"),n.html('<p class="text-center"><img src="/img/load.gif" /></p>'),t.addClass("subscribe-close").removeClass("success-close request-close"),t.modal({backdrop:!0,show:!0}),$.get("/subscription/form.html",{},function(e){n.html(e)})}).on("click","#onesignal-popover-allow-button",function(){window.tracking.setEvent("push-yes.Click")}).on("click","#onesignal-popover-cancel-button",function(){window.tracking.setEvent("push-no.Click")}).on("click",".js-popup",function(e){return e.preventDefault(),!1}).on("click",".popup",function(e){e.preventDefault();var t="",n=$(this),t=n.attr("data-href")?n.attr("data-href"):n.attr("alt");bs3popup({page_url:t,width:n.data("width")?n.data("width"):n.attr("rel"),hash:n.data("hash"),data:n.data(),setLock:!0})}).on("click",".close_popup",close_popup).on("click",".menu .btn-menu",function(e){e.preventDefault(),$(this).closest(".menu").toggleClass("open")}).on("click",".hidden-phone",function(e){e.preventDefault();var t=$(this),n=window.CityItem.findById(t.data("city"));t.replaceWith(n.getPhoneAsLink(t.data("type"))),window.tracking.setEvent("hiddenPhone.click")}).on("click",".clickable-phone",function(){window.tracking.setEvent("sitePhone.click")}).on("click",".analytic-event",function(){var e=$(this).data("event");window.tracking.setEvent(e)}).on("hidden.bs.modal","#bspopup",function(e){0}).on("click",".tour_tab_link",function(){$("#formCalendar div.month-picture div.month-title_wrapper").hide(),$("#tours-preloader .preloader-span").html("Пожалуйста, подождите. Идёт загрузка"),$("#tours-preloader").show()})})},{}]},{},[1]);
//# sourceMappingURL=main.min.js.map