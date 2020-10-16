
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Google Chart</title>
</head>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
	google.load("visualization", "1", {packages:["corechart"]});
	google.setOnLoadCallback(drawChart);
	
	function drawChart{
		var data=google.visualization.arrayToDataTable([
			['Task', 'Hours per Day'],
			['Work', 11],
			['Eat', 2],
			['Commute', 2],
			['Watch TV', 2],
			['Sleep', 2],
		]);
		
		var options={
			title. 'My Daily Activities'
		};
		var chart=new google.visualization.PieChart(document.getElementById('piechart'));
		
		chart.draw(data, options);
	}
</script>
<body>
</body>
</html>
