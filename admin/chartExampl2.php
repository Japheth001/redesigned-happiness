<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Chart.Js</title>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>


<body>
<div class="container">
	<canvas id="myChart" width="200" height="100"></canvas>
</div>

<script>
	let myChart=document.getElementById('myChart').getContext('2d');
	
	//Global options
	Chart.defaults.global.defaultFontFamily ='Lato';
	Chart.defaults.global.defaultFontSize= 18;
	Chart.defaults.global.defaultFontColor='#777';
		
	let massPopChart=new Chart(myChart,{
		type: 'polarArea',//We can have as many charts as possible..bar,horizontalBar,pie,line,doughnut,radar,polarArea
		data:{
			labels: ['Nairobi','Naivasha', 'Kericho','Bungoma', 'Nakuru'],
			datasets:[{
				label:'Population',
				data:[
					250000,
					500000,
					400000,
					300000,
					600000,
					100000
					
				],
				//backgroundColor:'green'
				backgroundColor:[
				'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
				],
				borderWidth: 1,
				borderColor: '#777',
				hoverBorderWidth: 3,
				hoverBorderColor: '#000'
				
				
			}]
		},
		options:{
			title:{
				display: true,
				text:'Largest Cities in Kenya',
				fontSize:25
			},
			legend:{
			display: true,  //Legend displays the keys- it depends on the type of graph you are using
			position: 'right',
			fontColor: '#000'
		},
			layout:{
			padding:{
				left: 50,
				right: 0,
				bottom:0,
				top: 0
			},
				
		},
			tooltips:{
				enabled: true
			}
		}
		
	});
</script>
</body>
</html>




