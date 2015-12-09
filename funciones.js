function Ajax(ulr,F) {

   var xhttp = new XMLHttpRequest();
   if(typeof F === "function"){
    
     xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
         
         if(xhttp.responseText!="")
				{	
					
					F(xhttp.responseText);
				}

        
    }
   };
  xhttp.open("GET", ulr, true);
  xhttp.send();
} }

function graficarPie(contenedor,titulo,dataPie) {
	$('#' + contenedor).highcharts({
		chart: {
			plotBackgroundColor: null,
			plotBorderWidth: null,
			plotShadow: false,
			type: 'pie'
		},
		title: {
			text: titulo
		},
		tooltip: {
			pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
		},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				dataLabels: {
					enabled: true,
					format: '<b>{point.name}</b>: {point.percentage:.1f} %',
					style: {
						color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
					}
				}
			}
		},
		series: [{
			name: "Brands",
			colorByPoint: true,
			data: [dataPie]
		}]
	});
}

function graficarColumn (contenedor,titulo,subtitulo,xLabels,yLabel,dataColumn)
{
	$('#'+contenedor).highcharts({
		chart: {
			type: 'column'
		},
		title: {
			text: titulo
		},
		subtitle: {
			text: subtitulo
		},
		xAxis: {
			categories: xLabels,
			crosshair: true
		},
		yAxis: {
			min: 0,
			title: {
				text: yLabel
			}
		},
		plotOptions: {
			column: {
				pointPadding: 0.1,
				borderWidth: 0
			}
		},
		series: dataColumn
	});
}

