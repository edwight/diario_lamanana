/*! Copyright (c) 2011 Brandon Aaron (http://brandonaaron.net)
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