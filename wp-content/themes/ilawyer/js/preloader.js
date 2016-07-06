(function(){	sPreloader = function(options) {		var that = this;		that.options = {			loaderDiv: null,			contentDiv: null,			cssEnabled: true,			excludingClass: 'nopreload',			logProgress: false,			animation: 'none',			animationSpeed: '0.5'		};		for (i in options)  {			that.options[i] = options[i];		}	};	sPreloader.prototype = {		'start': function() {			loaderElement = document.getElementById(this.options.loaderDiv);			contentElement = document.getElementById(this.options.contentDiv);			eClass = this.options.excludingClass;			logProgress = this.options.logProgress;			animation = this.options.animation;			animationSpeed = this.options.animationSpeed;			switch(animation) {				case 'fade':					break;				default:					break;			}						that = this;			var event;			if (document.createEvent) {				event = document.createEvent("HTMLEvents");				event.initEvent("dataavailable", true, true);			} else {				event = document.createEventObject();				event.eventType = "dataavailable";			}				event.eventName = "siteLoaded";			if (document.createEvent) {				document.dispatchEvent(event);			} else {				if (document.fireEvent) {					document.fireEvent("on" + event.eventType, event);				}			}			function getStyle(x, styleProp) {				if (x.currentStyle) {					y = x.currentStyle[styleProp];				} else if (window.getComputedStyle)  {					y = document.defaultView.getComputedStyle(x, null).getPropertyValue(styleProp);				}				return y;			}			function getHTMLimages() {				var htmlList = [];				htmlImages = document.images;					len=htmlImages.length;					for(var i=0;i<len; i++) {						if (htmlImages[i].getAttribute('class') == eClass) {						} else {					    	htmlList.push(htmlImages[i].src);						}					}				return htmlList;			}			function getCSSimages() {				var cssList = [],				i = 0,				bgIm,				existsInArray,				elements = document.getElementsByTagName('*');				for (i=0;elements[i];i++) {					existsInArray = false;					bgIm = getStyle(elements[i], 'background-image');					bgIm = bgIm.replace("url(","").replace(")","").replace("\"","").replace("\"","");					    if (bgIm !== 'none') {					        for (var key in cssList) {					            if (bgIm == cssList[key]) {					            	existsInArray = true;					            }					        }					        if (!existsInArray) {					       		var elementClass =  elements[i].className;					            if (elementClass.search('exempt') <= 0) {					            	cssList.push(bgIm);					            }					        }					    }				}				return cssList;			}			cssResults = getCSSimages();			htmlResults = getHTMLimages();			if (this.options.cssEnabled === true) {				 allResults =  cssResults.concat(htmlResults);			} else {				allResults =  cssResults.concat(htmlResults,cssResults);			}			percentage = 0;			var imageCounter = 0;			var siteBody = document.getElementsByTagName('body')[0];			var divEl= document.createElement('div');			divEl.id = "preloadImages";			siteBody.appendChild(divEl);			divEl = document.getElementById('preloadImages');			var str= "#preloadImages{position: absolute; top: 0; left: 0;width: 0px; height:0px;z-index: -9999;}#preloadImages img{width:0px;height:0px}";			var pa= document.getElementsByTagName('head')[0] ;			var el= document.createElement('style');			el.type= 'text/css';			el.media= 'screen';			if(el.styleSheet) {				el.styleSheet.cssText= str;			} else {				el.appendChild(document.createTextNode(str));				pa.appendChild(el);			}			len=cssResults.length;			for(var i=0; i<len; i++) {			    var ele= document.createElement('img');			    ele.src= cssResults[i];			    divEl.appendChild(ele);			}			    			len=allResults.length;			for(i=0;i<len;i++) {			    var image = new Image();        			    image.src = allResults[i];			    image.addEventListener('load',function(e){				    imageCounter++;				    percentage = imageCounter/allResults.length * 100;				    that.percentage = percentage;				    if (logProgress === true) { 				    	console.log(percentage + "%");                        document.dispatchEvent(evtP);				    }			        if (percentage == '100') {			            document.dispatchEvent(evt);			        }			    },false);			}			var evt = document.createEvent('Event');            var evtP = document.createEvent('Event');			evt.initEvent("preloaded", true, true);            evtP.initEvent("collpercent", true, true);			document.addEventListener("preloaded", function() {			switch(animation) {				case 'fade':					break;				default:					break;			}						},false);		}	};})();/* USAGEwindow.addEventListener('DOMContentLoaded', initSite, false);	function initSite() {	myPreloader = new sPreloader({		contentDiv: 'mainContent',  	//ID of the main content DIV		loaderDiv: 'loader', 			//ID of the loader DIV		excludingClass: 'nopreload', 	//If you want to exculde an image from preloading, choose a class name		logProgress: true,				//console.log the progress of the loader		animation: 'fade',				//Animation type;  'fade' | 'none'		animationSpeed: '1.0'			//Animation speed;  '0.5' = 500 milliseconds	});	myPreloader.start();}*/