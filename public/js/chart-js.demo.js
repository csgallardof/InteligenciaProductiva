//*************
// INFO GENERAL
//*************

// white
var white = 'rgba(255,255,255,1.0)';
var fillBlack = 'rgba(45, 53, 60, 0.6)';
var fillBlackLight = 'rgba(45, 53, 60, 0.2)';
var strokeBlack = 'rgba(45, 53, 60, 0.8)';
var highlightFillBlack = 'rgba(45, 53, 60, 0.8)';
var highlightStrokeBlack = 'rgba(45, 53, 60, 1)';

// blue
var fillBlue = 'rgba(52, 143, 226, 0.6)';
var fillBlueLight = 'rgba(52, 143, 226, 0.2)';
var strokeBlue = 'rgba(52, 143, 226, 0.8)';
var highlightFillBlue = 'rgba(52, 143, 226, 0.8)';
var highlightStrokeBlue = 'rgba(52, 143, 226, 1)';

// grey
var fillGrey = 'rgba(182, 194, 201, 0.6)';
var fillGreyLight = 'rgba(182, 194, 201, 0.2)';
var strokeGrey = 'rgba(182, 194, 201, 0.8)';
var highlightFillGrey = 'rgba(182, 194, 201, 0.8)';
var highlightStrokeGrey = 'rgba(182, 194, 201, 1)';

// green
var fillGreen = 'rgba(0, 172, 172, 0.6)';
var fillGreenLight = 'rgba(0, 172, 172, 0.2)';
var strokeGreen = 'rgba(0, 172, 172, 0.8)';
var highlightFillGreen = 'rgba(0, 172, 172, 0.8)';
var highlightStrokeGreen = 'rgba(0, 172, 172, 1)';

// purple
var fillPurple = 'rgba(114, 124, 182, 0.6)';
var fillPurpleLight = 'rgba(114, 124, 182, 0.2)';
var strokePurple = 'rgba(114, 124, 182, 0.8)';
var highlightFillPurple = 'rgba(114, 124, 182, 0.8)';
var highlightStrokePurple = 'rgba(114, 124, 182, 1)';

// ****************
//vars graficas
// ****************

var doughnutData;
var barChartData;
var pieData;

//*******************
//GLOBAL FUNCTIONS
//*****************

var randomScalingFactor = function() {
    return Math.round(Math.random()*100)
};

//*******************
///INICIO
//*******************

$(document).ready(function() {

  //************
  //SIPOC CCPT
  //************
	$.ajax({
		url : "/js/data-ccpt-sipoc.php",
		type : "GET",
		success : function(data){

			//console.log(data);

			var datainfo = {
				ccpt : [],
				mesasdedialogo : []
			};

			var len = data.length;

			for (var i = 0; i < len; i++) {
          var pushdata = { };
          pushdata.total = Number(data[i].total);
          pushdata.nombre_sipoc = data[i].nombre_sipoc;
					datainfo.ccpt.push(pushdata);
			}

      //console.log(datainfo);

      doughnutData = [
          {
              value: datainfo.ccpt[0].total,
              color: fillGrey,
              highlight: highlightFillGrey,
              label: datainfo.ccpt[0].nombre_sipoc
          },
          {
              value: datainfo.ccpt[1].total,
              color: fillGreen,
              highlight: highlightFillGreen,
              label: datainfo.ccpt[1].nombre_sipoc
          },
          {
              value: datainfo.ccpt[2].total,
              color: fillBlue,
              highlight: highlightFillBlue,
              label: datainfo.ccpt[2].nombre_sipoc
          },
          {
              value: datainfo.ccpt[3].total,
              color: fillPurple,
              highlight: highlightFillPurple,
              label: datainfo.ccpt[3].nombre_sipoc
          },
          {
              value: datainfo.ccpt[4].total,
              color: fillBlack,
              highlight: highlightFillBlack,
              label: datainfo.ccpt[4].nombre_sipoc
          }
      ];

		},
		error : function(data) {
			console.log(data);
		}
	});
  //************
  //FIN SIPOC CCPT
  //************

  //************
  //barchart
  //************
	$.ajax({
		url : "/js/data-ccpt-institucionesrank.php",
		type : "GET",
		success : function(data){

			var len = data.length;

      var labels_ccpt = data.map(function(e) {
         return e.responsable_solucion;
      });
      var data_ccpt = data.map(function(e) {
         return e.total;
      });

      barChartData = {
          labels : labels_ccpt,
          datasets : [
              {
                  fillColor : fillBlackLight,
                  strokeColor : strokeBlack,
                  highlightFill: highlightFillBlack,
                  highlightStroke: highlightStrokeBlack,
                  data : data_ccpt
              }//,
              // {
              //     fillColor : fillBlueLight,
              //     strokeColor : strokeBlue,
              //     highlightFill: highlightFillBlue,
              //     highlightStroke: highlightStrokeBlue,
              //     data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
              // }
          ]
      };

      //console.log(barChartData);

		},
		error : function(data) {
			console.log(data);
		}
	});
  //************
  //FIN barchart
  //************

  //************
  //radar2
  //************
	// $.ajax({
	// 	url : "/js/data-ccpt-sipoc.php",
	// 	type : "GET",
	// 	success : function(data){

	// 		//console.log(data);

	// 		var datainfo = {
	// 			ccpt : [],
	// 			mesasdedialogo : []
	// 		};

	// 		var len = data.length;


	// 		for (var i = 0; i < len; i++) {
 //          var pushdata = { };
 //          pushdata.total = Number(data[i].total);
 //          pushdata.nombre_sipoc = data[i].nombre_sipoc;
	// 				datainfo.ccpt.push(pushdata);
	// 		}

 //      //console.log(datainfo);

 //      var radarChartData2 = {
 //          labels: ['Eating', 'Drinking', 'Sleeping', 'Designing', 'Coding', 'Cycling', 'Running'],
 //          datasets: [
 //              {
 //                  label: 'My First dataset',
 //                  fillColor: 'rgba(45,53,60,0.2)',
 //                  strokeColor: 'rgba(45,53,60,1)',
 //                  pointColor: 'rgba(45,53,60,1)',
 //                  pointStrokeColor: '#fff',
 //                  pointHighlightFill: '#fff',
 //                  pointHighlightStroke: 'rgba(45,53,60,1)',
 //                  data: [65,59,90,81,56,55,40]
 //              },
 //              {
 //                  label: 'My Second dataset',
 //                  fillColor: 'rgba(52,143,226,0.2)',
 //                  strokeColor: 'rgba(52,143,226,1)',
 //                  pointColor: 'rgba(52,143,226,1)',
 //                  pointStrokeColor: '#fff',
 //                  pointHighlightFill: '#fff',
 //                  pointHighlightStroke: 'rgba(52,143,226,1)',
 //                  data: [28,48,40,19,96,27,100]
 //              }
 //          ]
 //      };

	// 	},
	// 	error : function(data) {
	// 		console.log(data);
	// 	}
	// });
  //************
  //FIN radar2
  //************

  //************
  //radar
  //************
	// $.ajax({
	// 	url : "/js/data-ccpt-porambito.php",
	// 	type : "GET",
	// 	success : function(data){

	// 		//console.log(data);

	// 		var datainfo = {
	// 			ccpt : [],
	// 			mesasdedialogo : []
	// 		};

 //      var labels_ccpt = data.map(function(e) {
 //         return e.nombre_ambit;
 //      });

 //      var data_ccpt = data.map(function(e) {
 //         return e.total;
 //      });

 //      //console.log(datainfo);

 //      var radarChartData = {
 //          labels: ['Eating', 'Drinking', 'Sleeping', 'Designing', 'Coding', 'Cycling', 'Running'],
 //          datasets: [
 //              {
 //                  label: 'My First dataset',
 //                  fillColor: 'rgba(45,53,60,0.2)',
 //                  strokeColor: 'rgba(45,53,60,1)',
 //                  pointColor: 'rgba(45,53,60,1)',
 //                  pointStrokeColor: '#fff',
 //                  pointHighlightFill: '#fff',
 //                  pointHighlightStroke: 'rgba(45,53,60,1)',
 //                  data: [65,59,90,81,56,55,40]
 //              }
 //          ]
 //      };

	// 	},
	// 	error : function(data) {
	// 		console.log(data);
	// 	}
	// });
  //************
  //FIN radar
  //************

  //************
  //pieChart
  //************
	$.ajax({
		url : "/js/data-ccpt-estado.php",
		type : "GET",
		success : function(data){

			var datainfo = {
				ccpt : [],
				mesasdedialogo : []
			};

      console.log(data);

			var len = data.length;


			for (var i = 0; i < len; i++) {
          var pushdata = { };
          pushdata.total = Number(data[i].total);
          pushdata.nombre_estado = data[i].nombre_estado;
					datainfo.ccpt.push(pushdata);
			}

      //console.log(datainfo);

      pieData = [
          {
              value: datainfo.ccpt[0].total,
              color: strokePurple,
              highlight: highlightStrokePurple,
              label: datainfo.ccpt[0].nombre_estado
          },
          {
              value: datainfo.ccpt[1].total,
              color: strokeBlue,
              highlight: highlightStrokeBlue,
              label: datainfo.ccpt[1].nombre_estado
          }
      ];

        //console.log(pieData);

		},
		error : function(data) {

			console.log(data);
		}
	});
  //************
  //FIN pieChart
  //************

});
//*******************
///FIN
//*******************

//*******************
//Global Defaults
//*******************

Chart.defaults.global = {
    animation: true,
    animationSteps: 60,
    animationEasing: 'easeOutQuart',
    showScale: true,
    scaleOverride: false,
    scaleSteps: null,
    scaleStepWidth: null,
    scaleStartValue: null,
    scaleLineColor: 'rgba(0,0,0,.1)',
    scaleLineWidth: 1,
    scaleShowLabels: true,
    scaleLabel: '<%=value%>',
    scaleIntegersOnly: true,
    scaleBeginAtZero: false,
    scaleFontFamily: '"Open Sans", "Helvetica Neue", "Helvetica", "Arial", sans-serif',
    scaleFontSize: 12,
    scaleFontStyle: 'normal',
    scaleFontColor: '#707478',
    responsive: true,
    maintainAspectRatio: true,
    showTooltips: true,
    customTooltips: false,
    tooltipEvents: ['mousemove', 'touchstart', 'touchmove'],
    tooltipFillColor: 'rgba(0,0,0,0.8)',
    tooltipFontFamily: '"Open Sans", "Helvetica Neue", "Helvetica", "Arial", sans-serif',
    tooltipFontSize: 12,
    tooltipFontStyle: 'normal',
    tooltipFontColor: '#ccc',
    tooltipTitleFontFamily: '"Open Sans", "Helvetica Neue", "Helvetica", "Arial", sans-serif',
    tooltipTitleFontSize: 12,
    tooltipTitleFontStyle: 'bold',
    tooltipTitleFontColor: '#fff',
    tooltipYPadding: 10,
    tooltipXPadding: 10,
    tooltipCaretSize: 8,
    tooltipCornerRadius: 3,
    tooltipXOffset: 10,
    tooltipTemplate: '<%if (label){%><%=label%>: <%}%><%= value %>',
    multiTooltipTemplate: '<%= value %>',
    onAnimationProgress: function(){},
    onAnimationComplete: function(){}
}

var handleGenerateGraph = function(animationOption) {
    var animationOption = (animationOption) ? animationOption : false;

    var ctx2 = document.getElementById('bar-chart').getContext('2d');
    var barChart = new Chart(ctx2).Bar(barChartData, {
        animation: animationOption
    });

    // var ctx3 = document.getElementById('radar-chart').getContext('2d');
    // var radarChart = new Chart(ctx3).Radar(radarChartData, {
    //     animation: animationOption
    // });

    var ctx5 = document.getElementById('pie-chart').getContext('2d');
    window.myPie = new Chart(ctx5).Pie(pieData, {
        animation: animationOption
    });

    var ctx6 = document.getElementById('doughnut-chart').getContext('2d');
    window.myDoughnut = new Chart(ctx6).Doughnut(doughnutData, {
        animation: animationOption
    });

    // var ctx7 = document.getElementById('radar-chart2').getContext('2d');
    // var radarChart2 = new Chart(ctx7).Radar(radarChartData2, {
    //     animation: animationOption
    // });

};

var handleChartJs = function() {
    $(window).load(function() {
        handleGenerateGraph(true);
    });

    $(window).resize( function() {
        handleGenerateGraph();
    });
};

var ChartJs = function () {
	"use strict";
    return {
        //main function
        init: function () {
            handleChartJs();
        }
    };
}();
