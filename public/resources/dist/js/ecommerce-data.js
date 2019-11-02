/*Dashboard2 Init*/
"use strict"; 

/*****Ready function start*****/

/*****Ready function end*****/

/*****Load function start*****/
$(window).load(function(){
	// window.setTimeout(function(){
	// 	$.toast({
	// 		heading: 'Welcome to Nex-ERP',
	// 		text: 'Use the predefined ones, or specify a custom position object.',
	// 		position: 'top-right',
	// 		loaderBg:'#e69a2a',
	// 		icon: 'success',
	// 		hideAfter: 3500, 
	// 		stack: 6
	// 	});
	// }, 3000);
});
/*****Load function* end*****/

/*****Sparkline function start*****/
var sparklineLogin = function() { 
		if( $('#sparkline_4').length > 0 ){
			$("#sparkline_4").sparkline([2,4,4,6,8,5,6,4,8,6,6,2 ], {
				type: 'line',
				width: '100%',
				height: '45',
				lineColor: '#e69a2a',
				fillColor: '#e69a2a',
				maxSpotColor: '#e69a2a',
				highlightLineColor: 'rgba(0, 0, 0, 0.2)',
				highlightSpotColor: '#e69a2a'
			});
		}	
		if( $('#sparkline_5').length > 0 ){
			$("#sparkline_5").sparkline([0,2,8,6,8], {
				type: 'bar',
				width: '100%',
				height: '45',
				barWidth: '10',
				resize: true,
				barSpacing: '10',
				barColor: '#469408',
				highlightSpotColor: '#469408'
			});
		}	
		if( $('#sparkline_6').length > 0 ){
			$("#sparkline_6").sparkline([0, 23, 43, 35, 44, 45, 56, 37, 40, 45, 56, 7, 10], {
				type: 'line',
				width: '100%',
				height: '50',
				lineColor: 'rgb(234,108,65)',
				fillColor: 'transparent',
				spotColor: '#fff',
				minSpotColor: undefined,
				maxSpotColor: undefined,
				highlightSpotColor: undefined,
				highlightLineColor: undefined
			});
		}
	}
	var sparkResize;
/*****Sparkline function end*****/

$(window).resize(function(e) {
	clearTimeout(sparkResize);
	sparkResize = setTimeout(sparklineLogin, 200);
});
sparklineLogin();