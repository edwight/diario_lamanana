;window.Modernizr=function(a,b,c){function z(a){j.cssText=a}function A(a,b){return z(m.join(a+";")+(b||""))}function B(a,b){return typeof a===b}function C(a,b){return!!~(""+a).indexOf(b)}function D(a,b){for(var d in a)if(j[a[d]]!==c)return b=="pfx"?a[d]:!0;return!1}function E(a,b,d){for(var e in a){var f=b[a[e]];if(f!==c)return d===!1?a[e]:B(f,"function")?f.bind(d||b):f}return!1}function F(a,b,c){var d=a.charAt(0).toUpperCase()+a.substr(1),e=(a+" "+o.join(d+" ")+d).split(" ");return B(b,"string")||B(b,"undefined")?D(e,b):(e=(a+" "+p.join(d+" ")+d).split(" "),E(e,b,c))}var d="2.5.3",e={},f=!0,g=b.documentElement,h="modernizr",i=b.createElement(h),j=i.style,k,l={}.toString,m=" -webkit- -moz- -o- -ms- ".split(" "),n="Webkit Moz O ms",o=n.split(" "),p=n.toLowerCase().split(" "),q={},r={},s={},t=[],u=t.slice,v,w=function(a,c,d,e){var f,i,j,k=b.createElement("div"),l=b.body,m=l?l:b.createElement("body");if(parseInt(d,10))while(d--)j=b.createElement("div"),j.id=e?e[d]:h+(d+1),k.appendChild(j);return f=["&#173;","<style>",a,"</style>"].join(""),k.id=h,(l?k:m).innerHTML+=f,m.appendChild(k),l||(m.style.background="",g.appendChild(m)),i=c(k,a),l?k.parentNode.removeChild(k):m.parentNode.removeChild(m),!!i},x={}.hasOwnProperty,y;!B(x,"undefined")&&!B(x.call,"undefined")?y=function(a,b){return x.call(a,b)}:y=function(a,b){return b in a&&B(a.constructor.prototype[b],"undefined")},Function.prototype.bind||(Function.prototype.bind=function(b){var c=this;if(typeof c!="function")throw new TypeError;var d=u.call(arguments,1),e=function(){if(this instanceof e){var a=function(){};a.prototype=c.prototype;var f=new a,g=c.apply(f,d.concat(u.call(arguments)));return Object(g)===g?g:f}return c.apply(b,d.concat(u.call(arguments)))};return e});var G=function(a,c){var d=a.join(""),f=c.length;w(d,function(a,c){var d=b.styleSheets[b.styleSheets.length-1],g=d?d.cssRules&&d.cssRules[0]?d.cssRules[0].cssText:d.cssText||"":"",h=a.childNodes,i={};while(f--)i[h[f].id]=h[f];e.csstransforms3d=(i.csstransforms3d&&i.csstransforms3d.offsetLeft)===9&&i.csstransforms3d.offsetHeight===3},f,c)}([,["@media (",m.join("transform-3d),("),h,")","{#csstransforms3d{left:9px;position:absolute;height:3px;}}"].join("")],[,"csstransforms3d"]);q.csstransforms=function(){return!!F("transform")},q.csstransforms3d=function(){var a=!!F("perspective");return a&&"webkitPerspective"in g.style&&(a=e.csstransforms3d),a};for(var H in q)y(q,H)&&(v=H.toLowerCase(),e[v]=q[H](),t.push((e[v]?"":"no-")+v));return z(""),i=k=null,function(a,b){function g(a,b){var c=a.createElement("p"),d=a.getElementsByTagName("head")[0]||a.documentElement;return c.innerHTML="x<style>"+b+"</style>",d.insertBefore(c.lastChild,d.firstChild)}function h(){var a=k.elements;return typeof a=="string"?a.split(" "):a}function i(a){var b={},c=a.createElement,e=a.createDocumentFragment,f=e();a.createElement=function(a){var e=(b[a]||(b[a]=c(a))).cloneNode();return k.shivMethods&&e.canHaveChildren&&!d.test(a)?f.appendChild(e):e},a.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+h().join().replace(/\w+/g,function(a){return b[a]=c(a),f.createElement(a),'c("'+a+'")'})+");return n}")(k,f)}function j(a){var b;return a.documentShived?a:(k.shivCSS&&!e&&(b=!!g(a,"article,aside,details,figcaption,figure,footer,header,hgroup,nav,section{display:block}audio{display:none}canvas,video{display:inline-block;*display:inline;*zoom:1}[hidden]{display:none}audio[controls]{display:inline-block;*display:inline;*zoom:1}mark{background:#FF0;color:#000}")),f||(b=!i(a)),b&&(a.documentShived=b),a)}var c=a.html5||{},d=/^<|^(?:button|form|map|select|textarea)$/i,e,f;(function(){var a=b.createElement("a");a.innerHTML="<xyz></xyz>",e="hidden"in a,f=a.childNodes.length==1||function(){try{b.createElement("a")}catch(a){return!0}var c=b.createDocumentFragment();return typeof c.cloneNode=="undefined"||typeof c.createDocumentFragment=="undefined"||typeof c.createElement=="undefined"}()})();var k={elements:c.elements||"abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video",shivCSS:c.shivCSS!==!1,shivMethods:c.shivMethods!==!1,type:"default",shivDocument:j};a.html5=k,j(b)}(this,b),e._version=d,e._prefixes=m,e._domPrefixes=p,e._cssomPrefixes=o,e.testProp=function(a){return D([a])},e.testAllProps=F,e.testStyles=w,g.className=g.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(f?" js "+t.join(" "):""),e}(this,this.document),function(a,b,c){function d(a){return o.call(a)=="[object Function]"}function e(a){return typeof a=="string"}function f(){}function g(a){return!a||a=="loaded"||a=="complete"||a=="uninitialized"}function h(){var a=p.shift();q=1,a?a.t?m(function(){(a.t=="c"?B.injectCss:B.injectJs)(a.s,0,a.a,a.x,a.e,1)},0):(a(),h()):q=0}function i(a,c,d,e,f,i,j){function k(b){if(!o&&g(l.readyState)&&(u.r=o=1,!q&&h(),l.onload=l.onreadystatechange=null,b)){a!="img"&&m(function(){t.removeChild(l)},50);for(var d in y[c])y[c].hasOwnProperty(d)&&y[c][d].onload()}}var j=j||B.errorTimeout,l={},o=0,r=0,u={t:d,s:c,e:f,a:i,x:j};y[c]===1&&(r=1,y[c]=[],l=b.createElement(a)),a=="object"?l.data=c:(l.src=c,l.type=a),l.width=l.height="0",l.onerror=l.onload=l.onreadystatechange=function(){k.call(this,r)},p.splice(e,0,u),a!="img"&&(r||y[c]===2?(t.insertBefore(l,s?null:n),m(k,j)):y[c].push(l))}function j(a,b,c,d,f){return q=0,b=b||"j",e(a)?i(b=="c"?v:u,a,b,this.i++,c,d,f):(p.splice(this.i++,0,a),p.length==1&&h()),this}function k(){var a=B;return a.loader={load:j,i:0},a}var l=b.documentElement,m=a.setTimeout,n=b.getElementsByTagName("script")[0],o={}.toString,p=[],q=0,r="MozAppearance"in l.style,s=r&&!!b.createRange().compareNode,t=s?l:n.parentNode,l=a.opera&&o.call(a.opera)=="[object Opera]",l=!!b.attachEvent&&!l,u=r?"object":l?"script":"img",v=l?"script":u,w=Array.isArray||function(a){return o.call(a)=="[object Array]"},x=[],y={},z={timeout:function(a,b){return b.length&&(a.timeout=b[0]),a}},A,B;B=function(a){function b(a){var a=a.split("!"),b=x.length,c=a.pop(),d=a.length,c={url:c,origUrl:c,prefixes:a},e,f,g;for(f=0;f<d;f++)g=a[f].split("="),(e=z[g.shift()])&&(c=e(c,g));for(f=0;f<b;f++)c=x[f](c);return c}function g(a,e,f,g,i){var j=b(a),l=j.autoCallback;j.url.split(".").pop().split("?").shift(),j.bypass||(e&&(e=d(e)?e:e[a]||e[g]||e[a.split("/").pop().split("?")[0]]||h),j.instead?j.instead(a,e,f,g,i):(y[j.url]?j.noexec=!0:y[j.url]=1,f.load(j.url,j.forceCSS||!j.forceJS&&"css"==j.url.split(".").pop().split("?").shift()?"c":c,j.noexec,j.attrs,j.timeout),(d(e)||d(l))&&f.load(function(){k(),e&&e(j.origUrl,i,g),l&&l(j.origUrl,i,g),y[j.url]=2})))}function i(a,b){function c(a,c){if(a){if(e(a))c||(j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}),g(a,j,b,0,h);else if(Object(a)===a)for(n in m=function(){var b=0,c;for(c in a)a.hasOwnProperty(c)&&b++;return b}(),a)a.hasOwnProperty(n)&&(!c&&!--m&&(d(j)?j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}:j[n]=function(a){return function(){var b=[].slice.call(arguments);a&&a.apply(this,b),l()}}(k[n])),g(a[n],j,b,n,h))}else!c&&l()}var h=!!a.test,i=a.load||a.both,j=a.callback||f,k=j,l=a.complete||f,m,n;c(h?a.yep:a.nope,!!i),i&&c(i)}var j,l,m=this.yepnope.loader;if(e(a))g(a,0,m,0);else if(w(a))for(j=0;j<a.length;j++)l=a[j],e(l)?g(l,0,m,0):w(l)?B(l):Object(l)===l&&i(l,m);else Object(a)===a&&i(a,m)},B.addPrefix=function(a,b){z[a]=b},B.addFilter=function(a){x.push(a)},B.errorTimeout=1e4,b.readyState==null&&b.addEventListener&&(b.readyState="loading",b.addEventListener("DOMContentLoaded",A=function(){b.removeEventListener("DOMContentLoaded",A,0),b.readyState="complete"},0)),a.yepnope=k(),a.yepnope.executeStack=h,a.yepnope.injectJs=function(a,c,d,e,i,j){var k=b.createElement("script"),l,o,e=e||B.errorTimeout;k.src=a;for(o in d)k.setAttribute(o,d[o]);c=j?h:c||f,k.onreadystatechange=k.onload=function(){!l&&g(k.readyState)&&(l=1,c(),k.onload=k.onreadystatechange=null)},m(function(){l||(l=1,c(1))},e),i?k.onload():n.parentNode.insertBefore(k,n)},a.yepnope.injectCss=function(a,c,d,e,g,i){var e=b.createElement("link"),j,c=i?h:c||f;e.href=a,e.rel="stylesheet",e.type="text/css";for(j in d)e.setAttribute(j,d[j]);g||(n.parentNode.insertBefore(e,n),m(c,0))}}(this,document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))};/*! Copyright (c) 2011 Brandon Aaron (http://brandonaaron.net)
 * Licensed under the MIT License (LICENSE.txt).
 *
 * Thanks to: http://adomas.org/javascript-mouse-wheel/ for some pointers.
 * Thanks to: Mathias Bank(http://www.mathias-bank.de) for a scope bug fix.
 * Thanks to: Seamus Leahy for adding deltaX and deltaY
 *
 * Version: 3.0.6
 * 
 * Requires: 1.2.2+
 */
(function(a){function d(b){var c=b||window.event,d=[].slice.call(arguments,1),e=0,f=!0,g=0,h=0;return b=a.event.fix(c),b.type="mousewheel",c.wheelDelta&&(e=c.wheelDelta/120),c.detail&&(e=-c.detail/3),h=e,c.axis!==undefined&&c.axis===c.HORIZONTAL_AXIS&&(h=0,g=-1*e),c.wheelDeltaY!==undefined&&(h=c.wheelDeltaY/120),c.wheelDeltaX!==undefined&&(g=-1*c.wheelDeltaX/120),d.unshift(b,e,g,h),(a.event.dispatch||a.event.handle).apply(this,d)}var b=["DOMMouseScroll","mousewheel"];if(a.event.fixHooks)for(var c=b.length;c;)a.event.fixHooks[b[--c]]=a.event.mouseHooks;a.event.special.mousewheel={setup:function(){if(this.addEventListener)for(var a=b.length;a;)this.addEventListener(b[--a],d,!1);else this.onmousewheel=d},teardown:function(){if(this.removeEventListener)for(var a=b.length;a;)this.removeEventListener(b[--a],d,!1);else this.onmousewheel=null}},a.fn.extend({mousewheel:function(a){return a?this.bind("mousewheel",a):this.trigger("mousewheel")},unmousewheel:function(a){return this.unbind("mousewheel",a)}})})(jQuery)
(function(){'use strict';var hashes={},regexp={},history=[],freq=100,num=0,pushState=false,timer=null,currentUrl=null,freeze=function(obj){if(Object.freeze)return Object.freeze(obj);return obj;},getHashParts=function(){return window.location.href.split('#');},startTimer=function(){if(!timer)
timer=setInterval(function(){if(num>0&&currentUrl!=window.location.href){currentUrl=window.location.href;window.Hash.check();}},freq);},stopTimer=function(){if(timer){clearInterval(timer);timer=null;}};window.Hash=freeze({pushState:function(yes){if(window.history&&window.history.pushState)
pushState=yes;return this;},fragment:function(){var hash=getHashParts();return(pushState)?window.location.pathname+((hash[1])?'#'+hash[1]:''):hash[1]||'';},get:function(path,params){var p,fragment='',parameters=[];for(p in params){if(!Object.prototype.hasOwnProperty(p))
continue;parameters.push(encodeURIComponent(p)+'='+encodeURIComponent(params[p]));}
if(parameters.length>0)
parameters='?'+parameters.join('&');return(pushState)?path+parameters:getHashParts()[0]+'#'+path+parameters;},go:function(hash,params){if(this.fragment()!=hash){var to=this.get(hash,params);if(pushState)
window.history.pushState(null,document.title,to);else
window.location.href=to;}
return this;},update:function(){currentUrl=window.location.href;return this;},on:function(hash,callback,title){if(!hashes[hash])
hashes[hash]={title:title,listeners:[]};hashes[hash].listeners.push(callback);num++;startTimer();return this;},check:function(){var i,hash,parts,fragment=this.fragment();for(hash in hashes){if(!Object.prototype.hasOwnProperty.call(hashes,hash))
continue;hashes[hash].regexp=hashes[hash].regexp||new RegExp(hash);if((parts=hashes[hash].regexp.exec(fragment))){if(hashes[hash].title)
document.title=hashes[hash].title;for(i=0;i<hashes[hash].listeners.length;i++)
if(hashes[hash].listeners[i].yep)
hashes[hash].listeners[i].yep(fragment,parts);}else{for(i=0;i<hashes[hash].listeners.length;i++)
if(hashes[hash].listeners[i].nop)
hashes[hash].listeners[i].nop(fragment);}}
return this;}});})();function addPage(page,book,edition){var id,pages=book.turn('pages');var element=$('<div />',{});if(book.turn('addPage',element,page)){element.html('<div class="gradient"></div><div class="loader"></div>');loadPage(page,element,edition);}}
function loadPage(page,pageElement,edition){var img=$('<img />');img.mousedown(function(e){e.preventDefault();});img.load(function(){$(this).css({width:'100%',height:'100%'});$(this).appendTo(pageElement);pageElement.find('.loader').remove();});img.attr('src',edition+'/'+page+'.jpg');loadRegions(page,pageElement,edition);}
function loadRegions(page,element,edition){$.getJSON(edition+'/'+page+'-regions.json').done(function(data){$.each(data,function(key,region){addRegion(region,element);});});}
function addRegion(region,pageElement){var reg=$('<div />',{'class':'region  '+region['class']}),options=$('.magazine').turn('options'),pageWidth=options.width/2,pageHeight=options.height;reg.css({top:Math.round(region.y/pageHeight*100)+'%',left:Math.round(region.x/pageWidth*100)+'%',width:Math.round(region.width/pageWidth*100)+'%',height:Math.round(region.height/pageHeight*100)+'%'}).attr('region-data',$.param(region.data||''));reg.appendTo(pageElement);}
function regionClick(event){var region=$(event.target);if(region.hasClass('region')){var regionType=$.trim(region.attr('class').replace('region',''));return processRegion(region,regionType);}}
function processRegion(region,regionType){data=decodeParams(region.attr('region-data'));switch(regionType){case'link':window.open(data.url);break;case'zoom':var regionOffset=region.offset(),viewportOffset=$('.magazine-viewport').offset(),pos={x:regionOffset.left-viewportOffset.left,y:regionOffset.top-viewportOffset.top};$('.magazine-viewport').zoom('zoomIn',pos);break;case'to-page':$('.magazine').turn('page',data.page);break;}}
function loadLargePage(page,pageElement,edition){var img=$('<img />');img.load(function(){var prevImg=pageElement.find('img');$(this).css({width:'100%',height:'100%'});$(this).appendTo(pageElement);prevImg.remove();});img.attr('src',edition+'/'+page+'-large.jpg');}
function loadSmallPage(page,pageElement,edition){var img=pageElement.find('img');img.css({width:'100%',height:'100%'});img.unbind('load');img.attr('src',edition+'/'+page+'.jpg');}
function isChrome(){return navigator.userAgent.indexOf('Chrome')!=-1;}
function disableControls(page){if(page==1)
$('.previous-button').hide();else
$('.previous-button').show();if(page==$('.magazine').turn('pages'))
$('.next-button').hide();else
$('.next-button').show();}
function resizeViewport(){var width=$(window).width(),height=$(window).height(),options=$('.magazine').turn('options');$('.magazine').removeClass('animated');$('.magazine-viewport').css({width:width,height:height}).zoom('resize');if($('.magazine').turn('zoom')==1){var bound=calculateBound({width:options.width,height:options.height,boundWidth:Math.min(options.width,width),boundHeight:Math.min(options.height,height)});if(bound.width%2!==0)
bound.width-=1;if(bound.width!=$('.magazine').width()||bound.height!=$('.magazine').height()){$('.magazine').turn('size',bound.width,bound.height);if($('.magazine').turn('page')==1)
$('.magazine').turn('peel','br');$('.next-button').css({height:bound.height,backgroundPosition:'-38px '+(bound.height/2-32/2)+'px'});$('.previous-button').css({height:bound.height,backgroundPosition:'-4px '+(bound.height/2-32/2)+'px'});}
$('.magazine').css({top:-bound.height/2,left:-bound.width/2});}
var magazineOffset=$('.magazine').offset(),boundH=height-magazineOffset.top-$('.magazine').height(),marginTop=(boundH-$('.thumbnails > div').height())/ 2;if(marginTop<0){$('.thumbnails').css({height:1});}else{$('.thumbnails').css({height:boundH});$('.thumbnails > div').css({marginTop:marginTop});}
if(magazineOffset.top<$('.made').height())
$('.made').hide();else
$('.made').show();$('.magazine').addClass('animated');}
function largeMagazineWidth(){return 2214;}
function decodeParams(data){var parts=data.split('&'),d,obj={};for(var i=0;i<parts.length;i++){d=parts[i].split('=');obj[decodeURIComponent(d[0])]=decodeURIComponent(d[1]);}
return obj;}
function calculateBound(d){var bound={width:d.width,height:d.height};if(bound.width>d.boundWidth||bound.height>d.boundHeight){var rel=bound.width/bound.height;if(d.boundWidth/rel>d.boundHeight&&d.boundHeight*rel<=d.boundWidth){bound.width=Math.round(d.boundHeight*rel);bound.height=d.boundHeight;}else{bound.width=d.boundWidth;bound.height=Math.round(d.boundWidth/rel);}}
return bound;}