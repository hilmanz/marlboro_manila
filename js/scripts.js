// DETECT BROWSER
var BrowserDetect = {
init: function () {
	this.browser = this.searchString(this.dataBrowser) || "An unknown browser";
	this.version = this.searchVersion(navigator.userAgent)
		|| this.searchVersion(navigator.appVersion)
		|| "an unknown version";
	this.OS = this.searchString(this.dataOS) || "an unknown OS";
},
searchString: function (data) {
	for (var i=0;i<data.length;i++)    {
		var dataString = data[i].string;
		var dataProp = data[i].prop;
		this.versionSearchString = data[i].versionSearch ||
		data[i].identity;
					if (dataString) {
						if (dataString.indexOf(data[i].subString) != -1)
							return data[i].identity;
					}
					else if (dataProp)
						return data[i].identity;
				}
			},
			searchVersion: function (dataString) {
				var index = dataString.indexOf(this.versionSearchString);
				if (index == -1) return;
				return
		parseFloat(dataString.substring(index+this.versionSearchString.length+1));
			},
			dataBrowser: [
				{
					string: navigator.userAgent,
					subString: "Chrome",
					identity: "Chrome"
				},
				{
					string: navigator.userAgent,
					subString: "OmniWeb",
					versionSearch: "OmniWeb/",
					identity: "OmniWeb"
				},
				{
					string: navigator.vendor,
					subString: "Apple",
					identity: "Safari",
					versionSearch: "Version"
				},
				{
					prop: window.opera,
					identity: "Opera"
				},
				{
					string: navigator.vendor,
					subString: "iCab",
					identity: "iCab"
				},
				{
					string: navigator.vendor,
					subString: "KDE",
					identity: "Konqueror"
				},
				{
					string: navigator.userAgent,
					subString: "Firefox",
					identity: "Firefox"
				},
				{
					string: navigator.vendor,
					subString: "Camino",
					identity: "Camino"
				},
				{        // for newer Netscapes (6+)
					string: navigator.userAgent,
					subString: "Netscape",
					identity: "Netscape"
				},
				{
					string: navigator.userAgent,
					subString: "MSIE",
					identity: "Explorer",
					versionSearch: "MSIE"
				},
				{
					string: navigator.userAgent,
					subString: "Gecko",
					identity: "Mozilla",
					versionSearch: "rv"
				},
				{         // for older Netscapes (4-)
					string: navigator.userAgent,
					subString: "Mozilla",
					identity: "Netscape",
					versionSearch: "Mozilla"
				}
			],
			dataOS : [
				{
					string: navigator.platform,
					subString: "Win",
					identity: "Windows"
				},
				{
					string: navigator.platform,
					subString: "Mac",
					identity: "Mac"
				},
				{
					string: navigator.platform,
					subString: "Linux",
					identity: "Linux"
				}
			]
		 
		};
		BrowserDetect.init();
$(function() {
	$(".theForms,.theForm").validate()
});
	
$(document).ready(function() { 
  /*------------ADD CLASS DETECT BROWSER------------*/ 
	$("body").addClass(BrowserDetect.browser); 
	//flip
	$('#sticker').fold();
	// Drop Down Menu
	$('ul#main-menu,ul#topNav').superfish({ 
        delay:       600,
        animation:   {opacity:'show',height:'show'},
        speed:       'fast',
        autoArrows:  true,
        dropShadows: false
    });

	// Accordion
	$( ".accordion" ).accordion( { autoHeight: false } );
	$( ".datepicker" ).datepicker();

	// Toggle
	$( ".toggle > .inner" ).hide();
	$(".toggle .title").toggle(function(){
		$(this).addClass("active").closest('.toggle').find('.inner').slideDown(200, 'easeOutCirc');
	}, function () {
		$(this).removeClass("active").closest('.toggle').find('.inner').slideUp(200, 'easeOutCirc');
	});
	jQuery("body").mouseover(function(){
			jQuery(this).addClass("controlActive");	
	});
	jQuery("body").mouseout(function(){
			jQuery(this).removeClass("controlActive");	
	});

	// Tabs
	$(function() {
		$( "#tabs" ).tabs();
	});
	
	// Gallery Hover Effect
	$(".showPopup").fancybox({
		'titlePosition'		: 'inside',
		'transitionIn'		: 'none',
		'transitionOut'		: 'none'
	});
	// DYO SHIRT
	$('.perspective').perspective({
		scrollingSpeed : 8000,
		slidingSpeed : 400,
		depth :60,
		flightPoint : 'top',
		hoverGap : 5,
		maxDarkening : 1,
		timerPers : 'hide',
		playPers : 'hide'
	});
	
	
});
